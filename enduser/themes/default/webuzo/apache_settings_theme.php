<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apache_settings_theme.php
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


function apache_settings_theme(){

global $user, $globals, $l, $theme, $softpanel, $iapps, $error, $saved, $dserver, $done, $proxy;
	
	// ENABLE PROXY
	if(optGET('enable_proxy')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['enable_done'];
			return true;
		}
	}
	
	// DISABLE PROXY
	if(optGET('disable_proxy')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['disable_done'];
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	error_handle($error, '100%');
	
	if(!empty($saved)){
		echo '<div class="sai_success">'.$l['settings_saved'].'</div>';
	}
	
	if($dserver == 'nginx'){
		echo '
		<form accept-charset="'.$globals['charset'].'" name="editsettingsspdy" method="post" action="">
			<center class="sai_tit">
				<img src="'.$theme['a_images'].'nginx_settings.gif" />&nbsp;'.$l['nginxsettings'].'
			</center>
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
				<tr>
					<td>
						<span class="sai_head">'.$l['spdy_enable'].'</font></span><br/>
						<span class="sai_exp">'.$l['spdy_check'].'</span>
					</td>
					<td>
						<input type="checkbox" name="spdyon" id="spdyon" '.POSTchecked('spdyon', ($softpanel->getconf('WU_SPDY'))).' />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p align="center">
							<input type="submit" class="sai_graybluebut" name="editspdysettings" value="'.$l['edit_nginx_settings'].'" />
						</p>
					</td>
				</tr>
			</table>
		</form>
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
		$(document).ready(function(){
			
			// ENABLE PROXY
			$("#enable").click(function(){
				
				var port = $("#port").val();
				$("#progress").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&enable_proxy=1",
					data: $("#enable_p").serialize(),
					
					// Checking the result
					success: function(data){
						$("#progress").css("display", "none");
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							$("#port").val("");
							message_box.show_message("Done", msg, 2, 1);
						}else{
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error']. '", 1, 1);
					}
				});
				return false;
			});
			
			// DISABLE PROXY
			$("#disable").click(function(){
				
				var webserver = $("input[name=webserver]:checked").val();
				$("#progress").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&disable_proxy=1",
					data: "webserver="+webserver,
					
					// Checking for error
					success: function(data){
						$("#progress").css("display", "none");
						var result = data.substring(0,1);
						var msg = data.substring(1);
						if(result == "1"){
							message_box.show_message("Done", msg, 2, webserver);
						}else{
							message_box.show_message("Error", msg, 1, 1);
						}
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error'].'", 1, 1);
					}
				});
				return false;
			});
		});
		// ]]></script>
		<center class="sai_tit">
			<img src="'.$theme['a_images'].'nginx_proxy.gif" />&nbsp;'.$l['lbl_head'].'</img>
		</center>
		<div id="show_set">';
		show_proxy();
		echo '</div>';
		
	}
	
	// Display if DEFAULT WEBSERVER IS APACHE OR {PROXY IS ENABLED AND APACHE IS THE PROXY SERVER}
	if($dserver == 'httpd' || (!empty($proxy) && $proxy == 'httpd')){
		
		echo '
		<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" >
			<center class="sai_tit">
				<img src="'.$theme['a_images'].'apache_settings.gif" />&nbsp;'.$l['apachesettings'].'
			</center>
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
				<tr>
					<td>
						<span class="sai_head">'.$l['suphp_enable'].'</font></span><br/>
						<span class="sai_exp">'.$l['suphp_check'].'</span>
					</td>
					<td>
						<input type="checkbox" name="suphpon" id="suphpon" '.POSTchecked('suphpon', (!$softpanel->getconf('NO_SUPHP'))).' />
					</td>
				</tr>
				<tr>
					<td colspan="2">
						<p align="center">
							<input type="submit" class="sai_graybluebut" name="editapachesettings" value="'.$l['edit_settings'].'" />
						</p>
					</td>
				</tr>
			</table>
		</form>';
	}
	
	softfooter();

}
	
function show_proxy(){
	
	global $user, $globals, $l, $theme, $softpanel, $iapps, $error, $saved, $dserver, $done, $proxy, $apps;
	
	$proxy = $softpanel->getConf('WU_PROXY_SERVER');
	
	// Is Proxy enabled ?
	if(empty($proxy)){ // Disabled
	
		// Array of webservers | Apache | NGINX | Lighttpd | Apache2
		$proxy_server = array(3, 125);
		foreach($proxy_server as $proxy_server_value){
			$tmp_prxy_server[$proxy_server_value] = $softpanel->appinfo($proxy_server_value);
		}
		
		echo'
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="enable_p" id="enable_p" >
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
				<tr>
					<td width="50%">
						<span class="sai_head">'.$l['name'].'</font></span><br/>
						<span class="sai_exp">'.$l['exp_name'].'</span><br />
					</td>
					<td>
						<input type="text" name="port" id="port" size="30" />
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['ht_check'].'</font></span><br/>
						<span class="sai_exp">'.$l['ht_check_exp'].'</span>
					</td>
					<td>
						<input type="checkbox" name="ht_check" id="ht_check" />
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['set_proxy'].'</font></span><br/>
						<span class="sai_exp">'.$l['set_proxy_exp'].'</span>
					</td>
					<td>';
					foreach($tmp_prxy_server as $tkey => $tvalue){
						echo '<input type="radio" name="webserver" value="'.$tvalue['set_default'].'" id="'.$tvalue['set_default'].'" '.POSTradio('webserver', $tvalue['set_default'], $tvalue['set_default']).' /> &nbsp;<label class="sai_head">'.$apps[$tkey]['name'].'</label><br />';
					}
				echo '
						</td>
					</tr>
					<tr>
					<td colspan="2">
						<p align="center">
							<input type="button" class="sai_graybluebut" name="enable" value="'.$l['enable_button'].'" id="enable"/>&nbsp;<img id="progress" src="'.$theme['images'].'progress.gif" style="display:none" />
						</p>
					</td>
				</tr>
			</table>
		</form>';
	
	}else{ // Enabled
		
		foreach($softpanel->wgrp as $webkey => $webvalue){
			if(!empty($iapps[$webkey.'_1'])) $tmp_server[$webkey] = $softpanel->appinfo($webkey);
		}
		
		echo '
		<form accept-charset="'.$globals['charset'].'" action="" method="post" name="disable_p" id="disable_p" >
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
				<tr>
					<td colspan="2">
						<center>
							<span class="sai_head">'.$l['set_default'].'</span>
						</center>
					</td>
				</tr>';
					foreach($tmp_server as $key => $value){
						echo '
						<tr>
							<td width="80%">
								<label class="sai_tit">'.$apps[$key]['name'].'</label>
							</td>
							<td>
								<input type="radio" name="webserver" value="'.$value['set_default'].'" id="'.$value['set_default'].'" '.POSTradio('webserver', $value['set_default'], $softpanel->getConf('WU_DEFAULT_SERVER')).' />
							</td>
						</tr>';
					}
					echo '
					<tr>
						<td colspan="2">
							<p align="center">
								<input type="button" class="sai_graybluebut" name="disable" value="'.$l['disable_button'].'" id="disable"/> &nbsp;<img id="progress" src="'.$theme['images'].'progress.gif" style="display:none" />
							</p>
						</td>
					</tr>
			</table>
		</form>
	</br></br>';
	}
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		var message_box = function(){
			return{
				show_message: function(title, body, image, wserver) {
					var okbutton = \'<input  style="width:75px" class="sai_graybluebut" type="button" onclick="message_box.close_message(\\\'\'+wserver+\'\\\');" value="OK" />\';
					if(image == "1"){
						var img = \'<img src="'.$theme['images'].'error.gif" />\';
					}else{
						var img = \'<img src="'.$theme['images'].'confirm.gif" />\';
					}
					if(jQuery(\'.sai_message_box\').html() === null) {
						var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
						jQuery(document.body).append( message );
						$(".sai_message_box")
							.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
							.show("slow");
					}else{
						var message = \'<table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
						$(".sai_message_box")
							.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
							.show("slow")
							.html(message);
					}
				},
				close_message: function(id) {
					$(".sai_message_box").hide("fast");
					if(id == "lighttpd" || id == "httpd2"){
						window.location = "'.$globals['index'].'";
					}else{
						window.location = window.location;
					}
				}
			}
		}();
		
	// ]]></script>';
	
}

?>