<?php

/**
 * This page manages the Login Logs.
 * 
 * @package  webuzo
 */
//===========================================================
//////////////////////////////////////////////////////////////
//===========================================================
// login_logs_theme.php
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

function login_logs_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $logs, $done;
	
	// For Deleting Login Logs
	if(optGET('delete_all')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Affirm Record Deletion
		if(!empty($done)){
			echo '1'.$l['rec_deleted'];
			show_tab();
			return true;
		}
		
	}

	softheader($l['<title>']);
	
	echo '<center><div class="sai_tit"><img src="'.$theme['a_images'].'login_logs.gif" alt="" />&nbsp;'.$l['ftp_head'].'</div></center>
	<div id="show_log">';
	show_tab();
	echo '</div>
	
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		var message_box = function(){
			return{
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
				delete_message: function(title, body ,did) {			
					var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\'+did+\');" value="YES" class="sai_graybluebut"/>\';
					var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_graybluebut" />\';
					var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
					if(jQuery(\'.sai_message_box\').html() === null) {
						var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';				
						jQuery(document.body).append( message );								
						jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
						jQuery(\'.sai_message_box\').show(\'slow\');
					}else{
						var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
						jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
						jQuery(\'.sai_message_box\').show(\'slow\');
						jQuery(\'.sai_message_box\').html( message );
					}
				},
				close_message: function() {
					jQuery(\'.sai_message_box\').hide(\'fast\');
				},
				yes_close_message: function(did) {
					$(\'#delete_rec\').css("display", "");;
					jQuery(\'.sai_message_box\').hide(\'fast\');		
					$.ajax({				
						type: "POST",				
						url: window.location+"&delete_all=1",								
						// checking for error
						success: function(data){
							$(\'#delete_rec\').css("display", "none");
							var result = data.substring(0,1);
							if(result == "1"){
								var msg = data.substring(1,data.indexOf("<table"));
								var output = data.substring(data.indexOf("<table"));
								message_box.show_message( "Done ",msg,2);														
								$("#display_tab").fadeOut();
							}
							if(result == "0"){	
								$("#createmx").css("display", "none");
								var msg = data.substring(1);
								message_box.show_message( "Error",msg,1);
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
		
	// ]]></script>
	';
	
	softfooter();

}

function show_tab(){
	
	global $user, $globals, $l, $theme, $softpanel, $error, $logs, $done;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="sai_altrowstable">
		<tr>
			<th align="center" width="25%" >'.$l['access'].'</th>
			<th align="center" width="25%" >'.$l['user'].'</th>
			<th align="center" width="25%" >'.$l['ip'].'</th>
			<th align="center" width="25%" >'.$l['status'].'</th>			
		</tr>
	</table>';
	if(!empty($logs)){
		echo '<div id="display_tab">
			<table border="0" cellpadding="8" cellspacing="0" width="100%" align="center" class="sai_altrowstable" >';
				$i=1;						
				foreach ($logs as $key => $value){
					
					echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
						<td align="left" width="25%">'.datify($value['ltime'], 1, 1, 0).'</td>
						<td align="left" width="25%">'.$value['user'].'</td>
						<td align="left" width="25%">'.$value['ip'].'</td>			
						<td align="left" width="25%">'.($value['status'] == 'Failed' ? '<font color="#FF0000">'.$value['status'].'</font>' : '<font color="#009900">'.$value['status'].'</font>').'</td>
					</tr>';
					$i++;
					
				}
			echo '</table><br />
		<center><input type="submit" style="cursor:pointer" value="'.$l['delete'].'" name="delete" class="sai_graybluebut" id="delete"/> &nbsp;<img id="delete_rec" src="'.$theme['images'].'progress.gif" style="display:none"></center>
		</div>';
	}
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		$(document).ready(function(){
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");
				$(this).attr("class", "sai_tr_bgcolor");
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// For deleting record
			$("#delete").click(function() {
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\');
			});
		});
	// ]]></script>';
}

?>
