<?php

// This page manages the ftp user for @webuzo.
//Allowed  soft user to delete ftp user and change theire password.
//////////////////////////////////////////////////////////////
//===========================================================
// ftp_theme.php
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


function ftpmanage_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;
	
	// for delete
	if(optGET('ajaxdel')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			return true;			
		}
	}
	
	$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
	$__ip = $__tmp[0];
	
	softheader($l['<title>']);
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			// For msgbox
			var message_box = function() {			
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
					delete_message: function(title, body ,did) {								
						var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_submit"/>\';
						var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_submit" />\';
						var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
						if(jQuery(\'.sai_message_box\').html() === null) {
							var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';				
							jQuery(document.body).append( message );								
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
						}else{
							var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
							jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
							jQuery(\'.sai_message_box\').show(\'slow\');
							jQuery(\'.sai_message_box\').html( message );
						}
					},
					close_message: function() {
						jQuery(\'.sai_message_box\').hide(\'fast\');
					},
					yes_close_message: function(did) {						
						$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");						
						jQuery(\'.sai_message_box\').hide(\'fast\');
						$.ajax({				
							type: "POST",				
							url: window.location+"&ajaxdel=1&delete_fuser_id="+did,				
							// checking for error
							success: function(data){								
								var result = data.substring(0,1);					
								var msg = data.substring(1);
								if(result == "1"){
									message_box.show_message( "Delete ",msg,2);
									$("#tr"+did).fadeOut(2000);																														
								}
								if(result == "0"){
									message_box.show_message( "Error ",msg,1);																																			
								}
							},				
							error: function(request,error) {
								message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
							}
						});					
					},
					no_close_message: function() {
						jQuery(\'.sai_message_box\').hide(\'fast\');			
					}
				}
			}();
				
			$(document).ready(function(){	
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");		
					$(this).attr("class", "sai_tr_bgcolor");		
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
				
				// fro deleting record
				$(".delete").click(function() {	
					var did = $(this).attr(\'id\');
					did = did.substr(3);			
					message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
				});
			});	
		// ]]></script>
			
	<center><div class="sai_heading"><img src="'.$theme['images'].'ftp.gif" alt="" /> &nbsp;'.$l['ftp_head'].'</div></center>
	<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
	
	<br /><br />
	<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable">';
		echo '<tr>
			<th width="60">'.$l['ftp_name'].'</th>
			<th width="30">'.$l['ftp_path'].'</th>
			<th width="10">'.$l['ftp_option'].'</th>
		</tr>
		<tr>';
			$i=1;		
			foreach ($ftp_list as $key => $value)
			{	
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$key.'"><td>'.$key.'</td>';
				echo '<td>'.$value['dir'].'</td>';
				
				if ($key != 'soft')
				{
					echo '<td><img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" />&nbsp&nbsp&nbsp;<a href="'.$globals['ind'].'act=ftpchangepass&fuser='.$key.'" title="'.$l['editdetail'].'"><img title="Change Password" src="'.$theme['images'].'randpass.gif" /></a></td>';
				}else{
					echo '<td align="center">-</td>';
				}
				$i++;
			}
		echo '</tr>
	</table>	
	<br /><br /><br />	
	<center><a href="'.$globals['ind'].'act=ftpadd" class="sai_abut">'.$l['add_new'].'</a></center>';
	
	softfooter();

}

?>
