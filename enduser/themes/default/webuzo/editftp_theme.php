<?php

//////////////////////////////////////////////////////////////
//===========================================================
// changepassword.php
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

function editftp_theme(){
	
global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot;

// For changing password
if(optGET('ajaxftppass')){
	
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

echo '<center class="sai_tit"><img src="'.$theme['images'].'changepassdp.gif" />&nbsp;'.$l['change_note'].'</center>';
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
			
			// For changing password	
			$("#submitftppass").click(function(){
				$("#createftppass").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxftppass=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createftppass").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("newpass").value="";
							$_("conf").value="";
							var msg = data.substring(1);
							message_box.show_message( "Done ",msg,2);																					
						}
						if(result == "0"){	
							$("#createftppass").css("display", "none");
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
	// ]]></script>
	
<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td width="40%">
			<span class="sai_head">'.$l['new_pass'].'</span>
		</td>
		<td valign="top">
			<input type="password" name="newpass" id="newpass" size="30" value="" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['retype_pass'].'</span>
		</td>
		<td valign="top">
			<input type="password" name="conf" id="conf" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p align="center">
				<input type="hidden" name="changepass" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changepass" class="sai_graybluebut" id="submitftppass"/> &nbsp;<img id="createftppass" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>	
</table>
</form>';

softfooter();
	 
}

?>