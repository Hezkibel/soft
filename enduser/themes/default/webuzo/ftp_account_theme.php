<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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


function ftp_account_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done ;

	// For adding FTP User
	if(optGET('ajaxftp')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			return true;
		}
	}
		
softheader($l['<title>']);
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var message_box = function(){			
		return {
			show_message: function(title, body , image) {			
				var okbutton = \'<input  style="width:75px" class="sai_graybluebut" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
				}
									
				if(jQuery(\'.sai_message_box\').html() === null) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );								
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';				
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			}
		}
	}();

	$(document).ready(function(){
			
			// For creating FTP accounts 
			$("#submitftp").click(function(){
				$("#createftp").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxftp=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createftp").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("login").value="";
							$_("newpass").value="";
							$_("conf").value="";
							$_("dir").value="";
							var msg = data.substring(1);
							message_box.show_message( "Done ",msg,2);																					
						}
						if(result == "0"){							
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});	
				return false;												
			});	
	});
	
	var dir = false;
	function suggestdompath(domval){
		if(dir){
			return true;	
		}
		$_("dir").value = "www/"+$_("login").value;
	}
	
	function enableinput(){
		$_("quota_limit").disabled=false;
	}
	
	function disableinput(){
		$_("quota_limit").disabled=true;
	}
	
	// ]]></script>
	
<form accept-charset="'.$globals['charset'].'" action="" method="post" name="ftp_account" id="editform">
<center class="sai_tit"><img src="'.$theme['a_images'].'addftp.gif" />&nbsp;'.$l['ftp'].'</center>
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['loginname'].'</span><br />
		</td>		
		<td> 
			<input type="text" name="login" id="login" size="30" onkeyup="suggestdompath(this);" size="30" value="'.POSTval('login', '').'" />@'.$softpanel->user['domain'].'
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['new_pass'].'</span><br />
		</td>		
		<td> 
			<input type="password" name="newpass" id="newpass" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['retype_pass'].'</span><br />
		</td>		
		<td> 
			<input type="password" name="conf" id="conf" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['quota'].'</span><br />
		</td>		
		<td> 
			<input type="radio" name="quota"  value="unlimited" checked="checked" onchange="disableinput()" /> '.$l['unlimited'].' &nbsp;
			<input type="radio" name="quota"  value="limited" onchange="enableinput()" /> <input type="text" name="quota_limit" id="quota_limit" size="10" value="1000" disabled="disabled" />'.$l['limited'].'
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['directory'].'</span><br /><span class="sai_exp">'.$l['path'].'</span>			
		</td>				
		<td> 
			'.$softpanel->user['homedir'].'/<input type="text" name="dir" id="dir" size="30"  value="'.stripslashes(POSTval('dir', 'www/')).'" onfocus="" />
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			//Add an event handler
			$_("dir").onkeydown = function(){
				dir = true;
			}
			// ]]></script>
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p align="center">
				<input type="hidden" name="create_acc" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="sai_graybluebut" id="submitftp" /> &nbsp;<img id="createftp" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>		
</table>
</form>';
softfooter();

}

?>
