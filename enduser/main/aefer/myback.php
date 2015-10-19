<?php

// Back up the database !!!
function backup_mysql_fn($shost, $suser, $spass, $sdb, $sdbfile){
	//echo $shost.' == '. $suser.' == '. $spass.' == '. $sdb.' == '. $sdbfile;
	
	$link = mysql_connect($shost, $suser, $spass);
	
	mysql_query('SET CHARACTER SET utf8');
	
	// Open and create a file handle for sql.
	$handle = fopen($sdbfile,'w');
	
	$s_def = $alter_queries = $sresponse = '';
	$sql_alter = $tables = array();
	
	$ser_ver = PMA_sversion();
	$s_def = PMA_exportHeader($sdb, $ser_ver);
	
	fwrite($handle, $s_def);
	
	// List the tables
	$squery = mysql_query('SHOW TABLES FROM `' . $sdb . '`');
	
	while($row = mysql_fetch_row($squery)){
		$tables[] = $row[0];
	}
	
	// Sort the tables
	usort($tables, 'strnatcasecmp');	
	
	foreach($tables as $table => $v){
		
		// Get the table structure(table definition)
		$stable_defn = PMA_getTableDef($sdb, $v, "\n");
		
		$s_def = $stable_defn['structure']."\n";
		fwrite($handle, $s_def);
		
		// Get the table data(table contents)
		// We have added $handle so that we can write the INSERT queries directly when we get it. 
		// Basically To avoid MEMORY EXHAUST FOR  BIG INSERTS
		PMA_exportData($sdb, $v, "\n", $handle);
		
		// List of alter queries 
		// We have changed this because the OLD method was putting the ALTER queries after CREATE table query which was causing issues.
		if(!empty($stable_defn['alter'])){
			$alter_queries .= $stable_defn['alter'];
		}
		
		
	}
	
	fwrite($handle, $alter_queries);
	$sresponse = PMA_exportFooter(); // Just to add the finishing lines
	fwrite($handle, $sresponse);
	fclose($handle);
	
	// Just check that file is created or not ??
	if(file_exists($sdbfile)){
		return true;
	}
	
	return false;
	
} //End of database backup

// Internal function to add slashes to row values 
function PMA_sqlAddslashes($a_string = '', $is_like = false, $crlf = false, $php_code = false) {

    if ($is_like) {
        $a_string = str_replace('\\', '\\\\\\\\', $a_string);
    } else {
        $a_string = str_replace('\\', '\\\\', $a_string);
    }

    if ($crlf) {
        $a_string = str_replace("\n", '\n', $a_string);
        $a_string = str_replace("\r", '\r', $a_string);
        $a_string = str_replace("\t", '\t', $a_string);
    }

    if ($php_code) {
        $a_string = str_replace('\'', '\\\'', $a_string);
    } else {
        $a_string = str_replace('\'', '\'\'', $a_string);
    }

    return $a_string;
} // end of the 'PMA_sqlAddslashes()' function


// Form the table structure && the alter queries if any !! 
function PMA_getTableDef($db, $table, $crlf, $show_dates = false, $add_semicolon = true) {
	
    global $sql_drop_table, $sql_alter;
    global $sql_constraints;
    global $sql_constraints_query; // just the text of the query
    global $sql_drop_foreign_keys;

    $schema_create = $auto_increment = $sql_constraints = '';
    $new_crlf = $crlf;
	
	// Get the Status of the table so as to produce the auto increment value
	$qresult = mysql_query('SHOW TABLE STATUS FROM `'.$db.'` LIKE \''.$table.'\'');
	
	// Handle auto-increment values
	if (mysql_num_rows($qresult) > 0) {
		
		$tmpres = mysql_fetch_assoc($qresult);
		
		// Is auto-increment value is set ??
		if(!empty($tmpres['Auto_increment'])){
			$auto_increment .= ' AUTO_INCREMENT=' . $tmpres['Auto_increment'] . ' ';
		}
	
	}
	// Free resourse
	mysql_free_result($qresult);
	
	// Construct the dump for the table structure
	$dump .=  '--' . $crlf
			. '-- Table structure for table' . '`' . $table.'`' . $crlf
			. '--' . $crlf . $crlf;
		 
    $schema_create .= $new_crlf . $dump;

    // Complete table dump,
    // Whether to quote table and fields names or not
    mysql_query('SET SQL_QUOTE_SHOW_CREATE = 1');
	
	// Create table structure
	$result = mysql_query('SHOW CREATE TABLE `'.$db.'`.`'.$table.'`');
	
    if ($row = mysql_fetch_assoc($result)) {
		
        $create_query = $row['Create Table'];
		unset($row);

        // Convert end of line chars to one that we want (note that MySQL doesn't return query it will accept in all cases)
        if (strpos($create_query, "(\r\n ")) {
            $create_query = str_replace("\r\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\n ")) {
            $create_query = str_replace("\n", $crlf, $create_query);
        } elseif (strpos($create_query, "(\r ")) {
            $create_query = str_replace("\r", $crlf, $create_query);
        }

        // are there any constraints to cut out?
        if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $create_query)) {

            // Split the query into lines, so we can easily handle it.
			// We know lines are separated by $crlf (done few lines above).	
            $sql_lines = explode($crlf, $create_query);
			$sql_count = count($sql_lines);

            // Lets find first line with constraints
            for ($i = 0; $i < $sql_count; $i++) {
                if (preg_match('@^[\s]*(CONSTRAINT|FOREIGN[\s]+KEY)@', $sql_lines[$i])) {
                 	break;
                }
            }

            // If we really found a constraint
            if ($i != $sql_count) {
				
                // remove , from the end of create statement
                $sql_lines[$i - 1] = preg_replace('@,$@', '', $sql_lines[$i - 1]);

                // comments for current table
                $sql_constraints .= $crlf
								 . PMA_exportComment()
								 . PMA_exportComment('Constraints for table' . '`' . $table.'`')
								 . PMA_exportComment();
                
                // Let's do the work
                $sql_constraints_query .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_constraints .= 'ALTER TABLE `'.$table.'`' . $crlf;
                $sql_drop_foreign_keys .= 'ALTER TABLE `'.$table.'` `'.$db.'`' . $crlf;

                $first = TRUE;
                for ($j = $i; $j < $sql_count; $j++) {
                    if (preg_match('@CONSTRAINT|FOREIGN[\s]+KEY@', $sql_lines[$j])) {
                        if (!$first) {
                            $sql_constraints .= $crlf;
                        }
                        if (strpos($sql_lines[$j], 'CONSTRAINT') === FALSE) {
                            $tmp_str = preg_replace('/(FOREIGN[\s]+KEY)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                        } else {
                            $tmp_str = preg_replace('/(CONSTRAINT)/', 'ADD \1', $sql_lines[$j]);
                            $sql_constraints_query .= $tmp_str;
                            $sql_constraints .= $tmp_str;
                            preg_match('/(CONSTRAINT)([\s])([\S]*)([\s])/', $sql_lines[$j], $matches);
                            if (! $first) {
                                $sql_drop_foreign_keys .= ', ';
                            }
                            $sql_drop_foreign_keys .= 'DROP FOREIGN KEY ' . $matches[3];
                        }
                        $first = FALSE;
                    } else {
                        break;
                    }
                }
                $sql_constraints .= ';' . $crlf;
                $sql_constraints_query .= ';';
				
				// Dump the alter queries!!!
				$return['alter'] = $sql_constraints; 
				
				$create_query = implode($crlf, array_slice($sql_lines, 0, $i)) . $crlf . implode($crlf, array_slice($sql_lines, $j, $sql_count - 1));
				unset($sql_lines);
            }
        }
        $schema_create .= $create_query;
    }

    // remove a possible "AUTO_INCREMENT = value" clause
    // that could be there starting with MySQL 5.0.24
    $schema_create = preg_replace('/AUTO_INCREMENT\s*=\s*([0-9])+/', '', $schema_create);

    $schema_create .= $auto_increment;
		
    mysql_free_result($result);
    	
	// Dump the structure !!!
	$return['structure'] = $schema_create . ($add_semicolon ? ';' . $crlf : '');
	
	return $return;
	 
} // end of the 'PMA_getTableDef()' function

// Internal function to get meta details about the database 
function PMA_DBI_get_fields_meta($sresult) {
    $fields       = array();
    $num_fields   = mysql_num_fields($sresult);
    for ($i = 0; $i < $num_fields; $i++) {
        $field = mysql_fetch_field($sresult, $i);
        $field->flags = mysql_field_flags($sresult, $i);
        $field->orgtable = mysql_field_table($sresult, $i);
        $field->orgname = mysql_field_name($sresult, $i);
        $fields[] = $field;
    }
    return $fields;
}

// Export data - values 
function PMA_exportData($db, $table, $crlf, $handle){
	
    global $current_row;
	$count = 10000;
	$limit = 0;

	// We have modified this code because we were getting error if inserts were >50000
	$cnt_qry = 'SELECT count(*) FROM `'.$db . '`.`' . $table . '`';
	$cnt_res = mysql_fetch_row(mysql_query($cnt_qry));
	
	$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT 0,10000';

    $formatted_table_name = '\'' . $table . '\'';

    $squery= mysql_query($sql_query);
	
	$fields_cnt = mysql_num_fields($squery);

	// Get field information
	$fields_meta    = PMA_DBI_get_fields_meta($squery);
	$field_flags    = array();
	for ($j = 0; $j < $fields_cnt; $j++) {
		$field_flags[$j] = mysql_field_flags($squery, $j);
	}

	for ($j = 0; $j < $fields_cnt; $j++) {
		$field_set[$j] = '`'.$fields_meta[$j]->name . '`';
	}

	$sql_command = 'INSERT';
   
	$insert_delayed = '';
	$separator = ',';

	$schema_insert = $sql_command . $insert_delayed .' INTO `' . $table . '` VALUES';
	
	$search       = array("\x00", "\x0a", "\x0d", "\x1a"); //\x08\\x09, not required
	$replace      = array('\0', '\n', '\r', '\Z');
	$current_row  = 0;
	$query_size   = 0;

	$schema_insert .= $crlf;
	for($i = $cnt_res[0]; $i >= 0; $i--){
		
		// Now if 10000 rows has been processed than select next.
		if($count == 0){
			// Now free the result for preventing memory exhaust
			mysql_free_result($squery);
			$count = 10000;
			$limit = $limit+10000;
			$sql_query  = 'SELECT * FROM `'.$db . '`.`' . $table . '` LIMIT '.($limit).', 10000';
			$squery= mysql_query($sql_query);
		}
		
		$row = mysql_fetch_array($squery);
		
		// If we get empty result than break the loop
		if(!$row){
			break;
		}
		
		if ($current_row == 0) {
			$head = PMA_exportComment()
				  . PMA_exportComment('Dumping data for table' . ' ' . $formatted_table_name)
				  . PMA_exportComment()
				  . $crlf;
			fwrite($handle, $head);
		}
		$current_row++;
		
		for ($j = 0; $j < $fields_cnt; $j++) {
			// NULL
			if (!isset($row[$j]) || is_null($row[$j])) {
				$values[]  = 'NULL';
			// a number
			// timestamp is numeric on some MySQL 4.1, BLOBs are sometimes numeric
			} elseif ($fields_meta[$j]->numeric && $fields_meta[$j]->type != 'timestamp' 
					&& !$fields_meta[$j]->blob) {
				$values[] = $row[$j];
			
			} else {
				$values[] = '\'' . str_replace($search, $replace, PMA_sqlAddslashes($row[$j])) . '\'';
			} // end if
		} // end for
		
		
		if ($current_row == 1) {
			$insert_line  = $schema_insert . '(' . implode(', ', $values) . ')';
		} else {
			$insert_line  = '(' . implode(', ', $values) . ')';
			if ($query_size + strlen($insert_line) > 50000) {
				
				$query_buffer = ';' . $crlf;
				fwrite($handle, $query_buffer);
				$query_size = 0;
				$current_row = 1;
				$insert_line = $schema_insert . $insert_line;
			}
		}
		// Gather query size
		$query_size += strlen($insert_line);
		
		unset($values);

		$query_buffer = ($current_row == 1 ? '' : $separator . $crlf) . $insert_line;
		// To avoide MEMORY EXHAUST
		fwrite($handle, $query_buffer);
		
		// Decrement till 0 so that next 10000 rows can be selected
		$count--;
		
	}// End of FOR
	if ($current_row > 0) {
		
		$query_buffer = ';' . $crlf;
		fwrite($handle, $query_buffer);
		
	}
	
	// Free resourses
	mysql_free_result($squery);
	
	$end_line = (!empty($query_buffer) ? $crlf : '' ). PMA_exportComment('--------------------------------------------------------');
	fwrite($handle, $end_line);
	//return $query_buffer . $end_line;
		
} 

function PMA_exportComment($text = '')
{
	$crlf = "\n";
	$ret = '--' . (empty($text) ? '' : ' ') . $text . $crlf;
	return $ret;
}

function PMA_exportHeader($db, $ser_ver)
{
    $crlf = "\n";  

    $head  =  PMA_exportComment('Softaculous SQL Dump')
           .  PMA_exportComment('http://www.softaculous.com')
           .  PMA_exportComment()
		   .  PMA_exportComment('Host: localhost')
           .  PMA_exportComment('Generation Time: '. date("F j, Y, g:i a") .'')
		   .  PMA_exportComment('Server version: '. $ser_ver .'')
           .  PMA_exportComment('PHP Version' . ': ' . phpversion())
           .  $crlf;

    /* We want exported AUTO_INCREMENT fields to have still same value, do this only for recent MySQL exports */
    $head .=  'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";' . $crlf;
    
    /* Change timezone if we should export timestamps in UTC */
    $head .= 'SET time_zone = "+00:00";' . $crlf . $crlf;
  
	// by default we use the connection charset
	$set_names = 'utf8';
		
	$head .=  $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;' . $crlf
		   . '/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;' . $crlf
		   . '/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;' . $crlf
		   . '/*!40101 SET NAMES ' . $set_names . ' */;' . $crlf . $crlf;
	
	$head .= PMA_exportComment()
		  . PMA_exportComment('Database: `' . $db . '`')
		  . PMA_exportComment()
		  . $crlf
		  . PMA_exportComment('--------------------------------------------------------');

    return $head;

}

function PMA_exportFooter()
{
    $crlf = "\n";
    $foot = '';

	$foot .=  $crlf
	   . '/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;' . $crlf
	   . '/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;' . $crlf
	   . '/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;' . $crlf;
	
	return $foot;
}

function PMA_sversion(){

	// Get version
	$version = mysql_query('SELECT VERSION()');
	$version = mysql_fetch_assoc($version);
	
	// Explode to extract version
	$version = explode('-', $version['VERSION()']);
	return $version[0];
	
}

error_reporting(E_ALL);

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

/*echo '<pre>';
print_r($return);
print_r($settings);
print_r($queries);
echo '</pre>';*/

$host = $settings['softdbhost'];
$user = $settings['softdbuser'];
$pass = $settings['softdbpass'];
$db = $settings['softdb'];
$dbfile = $settings['softsql'];

if(!backup_mysql_fn($host, $user, $pass, $db, $dbfile)){
	$error = 'Back up was not successful';
	softdie('conn');
}

softdie('DONE');

?>