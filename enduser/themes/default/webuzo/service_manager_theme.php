<?php

//////////////////////////////////////////////////////////////
//===========================================================
// service_manager_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function service_manager_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error, $saved, $iapps, $apps;
	
	softheader($l['<title>']);
	
	error_handle($error, '100%');
	
	if(!empty($saved)){
		echo '<div class="sai_success">'.$l['settings_saved'].'</div>';
	}

	$proxy = $softpanel->getConf('WU_PROXY_PORT');
	
	$disable_sysapps = $softpanel->is_sysapps_disable();
	
	// Array of webservers | Apache | NGINX | Lighttpd | Apache2
	foreach($softpanel->wgrp as $webkey => $webvalue){
		if(!empty($iapps[$webkey.'_1'])) $tmp_server[$webkey] = $softpanel->appinfo($webkey);
	}
	
	echo '<center class="sai_tit"><img src="'.$theme['a_images'].'service_manager.gif" />&nbsp;'.$l['service_manager'].'</center>';

	if(empty($disable_sysapps)){
	
	echo '<form accept-charset="'.$globals['charset'].'" name="service_manager" method="post" action="">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
	<tr>
		<td colspan="2">
			<center class="sai_tit">
				<img src="'.$theme['a_images'].'webserver.gif" />&nbsp;'.$l['webserver'].'
			</center>
		</td>
	</tr>';
	
	if(count($tmp_server) > 1 && (empty($proxy))){
		foreach($tmp_server as $key => $value){
			echo '<tr>
				<td width="80%">
					<label class="sai_tit">'.$apps[$key]['name'].'</label>
				</td>
				<td>
					<input type="radio" name="webserver" value='.$value['set_default'].' '.POSTradio('webserver', $value['set_default'], $softpanel->getConf('WU_DEFAULT_SERVER')).' />
				</td>
			</tr>';
		}
	}else{
		$no_web_server = 1;
		echo '
		<tr>
			<td colspan="2">
				<center class="sai_tit">'.(empty($proxy) ? $l['no_web_server'] : $l['proxy_on']).'</center>
			</td>
		</tr>';
	}
	echo '
</table>
<br /><br />

<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
	<tr>
		<td colspan="2">
			<center class="sai_tit">
				<img src="'.$theme['a_images'].'php.gif" />&nbsp;'.$l['default_php'].'
			</center>
		</td>
	</tr>';
	
	foreach($softpanel->phpgrp as $phpkey => $phpvalue){
		if(!empty($iapps[$phpkey.'_1'])) continue;
		unset($softpanel->phpgrp[$phpkey]);
	}
	
	if(count($softpanel->phpgrp) > 1 ){
		foreach($softpanel->phpgrp as $key => $value){
			echo '<tr>
				<td width="80%">
					<label class="sai_tit">'.$apps[$key]['name'].'</label>
				</td>
				<td>
					<input type="radio" name="default_php" value='.$apps[$key]['softname'].' '.POSTradio('default_php', $apps[$key]['softname'], $softpanel->getConf('WU_DEFAULT_PHP')).' />
				</td>
			</tr>';
		}
	}else{
		
		$no_php = 1;
		
		echo '<tr>
			<td colspan="2">
				<center class="sai_tit">'.$l['no_php'].'</center>
			</td>
		</tr>';
	
	}
	echo '</table><br />';

	if(empty($no_web_server) || empty($no_php)){
		
		echo '
		<p align="center">
			<input type="submit" class="sai_graybluebut" name="service_manager" value="'.$l['edit_settings'].'" />
		</p>';
	
	}
	
	// Display a NOTE if NGINX is installed
	if(!empty($iapps['18_1'])){
		echo '<br /><br />
		<div class="sai_success">'.$l['nginx_note'].'</div>';
	}
	
	echo '</form>';
	
	}
	
	softfooter();

}

?>