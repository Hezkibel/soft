<?php

error_reporting(E_ALL);

/**
 * Backup a MySQL Database
 *
 * @package      database
 * @author       Pulkit Gupta
 * @param        string $host The MySQL Host
 * @param        string $user The MySQL User
 * @param        string $pass The MySQL User password
 * @param        string $db The Database Name
 * @param        string $file The path of the file where the data is to be saved.
 * @return       bool true on success. false on failure
 * @since     	 1.0
 */
function backup_mysql($host, $user, $pass, $db, $file){
	
	global $softpanel;
	
	// If the softpanel defines its way, then pass it
	if(method_exists($softpanel, 'backup_mysql')){
		return $softpanel->backup_mysql($host, $user, $pass, $db, $file);
	}
	
	// AMPPS works on a different method	
	if(asperapp(0, 0, 1) && !empty($softpanel->path)){
		$mybin = '"'.$softpanel->path.'/mysql/bin/mysqldump.exe"';
	// Webuzo needs full path
	}elseif(asperapp(0, 1, 0)){
		$mybin = '/usr/bin/mysqldump';
	}else{	
		$mybin = 'mysqldump';
	}
	
	// Lets try shell exec
	if(@shell_exec($mybin.' -h '.$host.' -u '.$user.' -p"'.$pass.'" '.$db.' > "'.$file.'"')){
		return true;
	}
	
	return false;
	
}

function softdie($txt){
	$array = array();
	$array['output'] = shell_exec('[[[execute]]]');
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

softdie('DONE');

?>