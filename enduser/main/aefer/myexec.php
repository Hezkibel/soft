<?php

error_reporting(E_ALL);

function inputsec($string){

	if(!get_magic_quotes_gpc()){
	
		$string = addslashes($string);
	
	}else{
	
		$string = stripslashes($string);
		$string = addslashes($string);
	
	}
	
	return $string;

}

function get_web_file($url){

	$allow_url_open = (int) ini_get('allow_url_fopen');
	
	if(!empty($allow_url_open)){
	
		//Read the file
		$file = @implode('', file($url));
	
	}elseif(function_exists('curl_exec')){
	
		// Set the curl parameters.
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
	
		// Turn off the server and peer verification (TrustManager Concept).
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
	
		// Follow redirects
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
		
		// UserAgent and Cookies
		curl_setopt($ch, CURLOPT_USERAGENT, 'Softaculous');
		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	
		// Get response from the server.
		$file = curl_exec($ch);
		
		curl_close($ch);
	
	}else{
		return false;
	}
	
	//Did we get something
	if(empty($file)){
	
		return false;
	
	}
	
	return $file;
	
}//End of function

function GET($name){
	
	global $GET;
	
	if(isset($_GET[$name]) && !empty($_GET[$name])){
		return inputsec(trim($_GET[$name]));
	}
	
	return $GET[$name];
}

function softdie($txt, $query = 0, $x = 0){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	
	if(!empty($query)){
		$array['query_no'] = $query;
	}
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}

	// Return the SELECT statement
	if(!empty($GLOBALS['return'])){
		$array['return'] = $GLOBALS['return'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>'; 
	if($x < 1){
		die();
	}
}

// Give the response in 20 seconds !
$end = (int) (time() + 20);

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

// The QUERIES
$queries = unserialize(base64_decode('[[[queries]]]'));
	
/*echo '<pre>';
print_r($return);
print_r($settings);
print_r($queries);
echo '</pre>';*/

$host = $settings['softdbhost'];
$user = $settings['softdbuser'];
$pass = $settings['softdbpass'];
$db = $settings['softdb'];

//Make the Connection
$__conn = @mysql_connect($host, $user, $pass, true);

//CHECK Errors and SELECT DATABASE
if(!empty($__conn)){	
	if(!(@mysql_select_db($db, $__conn))){
		softdie('seldb');
	}
}else{
	softdie('conn');
}

// Total number of queries
$num = count($queries);

//  Query Number to start from
$nquery = 0;

if(!empty($_GET['nquery'])){
	//Next query to be executed, if this has to be continued from where we left last time.
	$nquery = $_GET['nquery'];
}

// SET MYSQL VARIABLES EACH TIME WE EXEC QUERIES. We are doing this as we are breaking queries.
if(!empty($nquery)){
	$mysql_var = array();
	$mysql_var[] = 'SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";';
	$mysql_var[] = 'SET time_zone = "+00:00";';
	$mysql_var[] = 'SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT';
	$mysql_var[] = 'SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS';
	$mysql_var[] = 'SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION';
	$mysql_var[] = 'SET NAMES utf8';

	foreach($mysql_var as $mk => $mq){
		
		//PARSE the String and make the QUERY
		$result = mysql_query($mq, $__conn);
		
		//Looks like there was an error
		if(!$result){		
			$error['k'] = $mk;
			$error['q'] = $mq;
			$error['errno'] = mysql_errno($__conn);
			$error['errstr'] = mysql_error($__conn);
			softdie('query');
		}
	}
}

//Start the Queries
foreach($queries as $k => $q){

	// Don't do anything if the queries are already executed.
	if($k < $nquery){
		continue;
	}

	// Current time.
	$progress = (int) time();
	
	// Give response if the time is up and pass the next query.
	if($progress >= $end){
		softdie('INCOMPLETE', $k);
	}
	
	//PARSE the String and make the QUERY
	$result = mysql_query($q, $__conn);
	
	//Looks like there was an error
	if(!$result){		
		$error['k']	= $k;
		$error['q'] = $q;
		$error['errno'] = mysql_errno($__conn);
		$error['errstr'] = mysql_error($__conn);
		softdie('query');
	}
		
	// Is there only one query ?
	if($num == 1){
		
		// Is it a SELECT query ?
		if(preg_match('/^(SELECT|SHOW|DESCRIBE)/is', $q)){		
			
			// Accumulate the data !
			for($i = 0; $i < mysql_num_rows($result); $i++){
				$return[] = mysql_fetch_assoc($result);
			}
			
		}

	}

}

// Delete the file in the end.
@unlink(__FILE__);
softdie('DONE');

echo '<pre>';
print_r($return);
print_r($settings);
print_r($queries);
echo '</pre>';

?>