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


function ftpadd_theme(){

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
	
echo '<center class="sai_tit"><img src="'.$theme['a_images'].'addftp.gif" />'.$l['ftp'].'</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error, '100%');
	
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var message_box = function(){			
		return {
			show_message: function(title, body , image) {			
				var okbutton = \'<input  style="width:75px" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
				}
									
				if(jQuery(\'.sai_message_box\').html() === null) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );								
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';				
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
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
				var login = ($("#login").val());
				var newpass = ($("#newpass").val());
				var conf = ($("#conf").val());
				var dir = ($("#dir").val());
				$.ajax({
					type: "POST",
					url: window.location+"&create_acc=1&ajaxftp=1",					
					data: "login="+login+"&newpass="+newpass+"&conf="+conf+"&dir="+dir,
					
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
							$("#createmx").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});													
			});	
	});
	
	var dir = false;
	function suggestdompath(domval){
		if(dir){
			return true;	
		}
		$_("dir").value = "'.cleanpath($softpanel->user['homedir']).'/www/"+$_("login").value;
	}
	// ]]></script>
	
<form accept-charset="'.$globals['charset'].'" action="" method="post" name="ftp_account">
<table border="0" cellpadding="8" cellspacing="8" width="100%">
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['loginname'].'</span><br />
		</td>		
		<td> 
			<input type="text" name="login" id="login" size="30" onkeyup="suggestdompath(this);" size="30" value="'.POSTval('login', '').'" />
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
			<span class="sai_head">'.$l['directory'].'</span><br /><span class="sai_exp">'.$l['path'].'</span>			
		</td>				
		<td> 
			<input type="text" name="dir" id="dir" size="30"  value="'.stripslashes(POSTval('dir', cleanpath($softpanel->path).'/www/')).'" onfocus="" />
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			//Add an event handler
			$_("dir").onkeydown = function(){
				dir = true;
			}
			// ]]></script>
		</td>
	</tr>
</table>
<table border="0" width="100%">
<td align="left" width="40%"><a href="http://'.$_SERVER['HTTP_HOST'].'/ampps/index.php?act=ftpmanage">'.$l['lbl_ftp_manage'].'</a></td>
<td align="left"><input type="button" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="sai_submit" id="submitftp" /> &nbsp;<img id="createftp" src="'.$theme['images'].'progress.gif" style="display:none"></td></table>
</form>';
softfooter();

}

?>
