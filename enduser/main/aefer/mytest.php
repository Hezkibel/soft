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

function can_create_file(){
	$file = dirname(__FILE__).'/soft.tmp';
	$fp = @fopen($file, 'wb');
	if($fp === FALSE){
		return false;
	}
	
	if(@fwrite($fp, 'ampps') === FALSE){
		return false;
	}
	
	@fclose($fp);
	
	// Check if the file exists
	if(file_exists($file)){
		@unlink($file);
		return true;
	}
	
	return false;	
}

function softdie($txt){
	$array = array();
	$array['settings'] = $GLOBALS['settings'];
	$array['can_create_file'] = can_create_file();
	$array['result'] = $txt;
	echo '<aefer>'.base64_encode(serialize($array)).'</aefer>';die();
}

// First Delete yourself !
@unlink(__FILE__); // More has to be done here !

// The settings
$settings = unserialize(base64_decode('[[[settings]]]'));

if(!empty($settings['softdbhost'])){
	//Make the Connection
	$__conn = @mysql_connect($settings['softdbhost'], $settings['softdbuser'], $settings['softdbpass'], true);
	
	//CHECK Errors and SELECT DATABASE
	if(!empty($__conn)){
		if(!(@mysql_select_db($settings['softdb'], $__conn))){
			softdie('1');
		}
	}else{
		softdie('2');
	}
}
set_time_limit(500);

$max_exec = (int) ini_get('max_execution_time');

if($max_exec < 31){
	softdie('MAXTIME');
}

softdie('DONE');

?>