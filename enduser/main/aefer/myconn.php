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

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['result'] = $txt;
	$array['tables'] = $GLOBALS['tables'];
	
	// Was there an error ?
	if(!empty($GLOBALS['error'])){
		$array['error'] = $GLOBALS['error'];
	}
	
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));
	
/*echo '<pre>';
print_r($settings);
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
		$error = 'No such database : <strong>'.$db.'</strong>';
		softdie('seldb');
	}
}else{
	$error = 'MySQL connection could not be established';
	softdie('conn');
}

if(!empty($settings['get_tables'])){
	$result = mysql_query("SHOW TABLES", $__conn);
	if(!$result){
		$error = 'Error while fetching tables from '.$db;
		softdie('err_tables');
	}
	if(mysql_num_rows($result) > 0){
		while($row = mysql_fetch_assoc($result)){
			$tables[] = $row['Tables_in_'.$db];
		}
	}else{
		$error = 'Empty Database : '.$db;
		softdie('no_tables');
	}
}

// Delete the file in the end.
@unlink(__FILE__);
softdie('DONE');

?>