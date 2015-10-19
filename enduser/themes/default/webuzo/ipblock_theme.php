<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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
function ipblock_theme(){

	global $theme, $globals, $l, $error, $softpanel ,$done ,$add_list;
	
	// for ADD
	if(optGET('ajaxadd')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['rec_added'];	
			showip();
			return true;			
		}
	}
	
	// For delete
	if(optGET('ajaxdel')){				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			showip();			
			return true;			
		}
	}
	
	softheader($l['<title>']);		
	echo '<center>
		<div class="sai_tit"><img src="'.$theme['a_images'].'ip_block.gif"  alt=""  />&nbsp;'.$l['lbl_head'].'</div>
	</center>';
			
	echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="ipblock" id="editform">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
		<tr>	
			<td class="sai_head">'.$l['name'].'</td>		
			<td><input type="text" name="dip" id="dip" size="30"  size="30" /></td>	
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">			
					<input type="hidden" name="add_ip" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitip"/> &nbsp;<img id="createmx" src="'.$theme['images'].'progress.gif" style="display:none"></center>
				</p>
			</td>
		</tr>
	</table>	
	</form>
	</br></br>
	<center><span class="sai_head" >'.$l['record_table'].'</span><center><br /><br />';	
	
	echo '<center><div id="showrectab">';
	showip();
	echo '</div></center>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	$(document).ready(function(){		
				
		// For creating MX Record	
		$("#submitip").click(function(){
			$("#createmx").css("display", "");				
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxadd=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					$("#createmx").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("dip").value="";						
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message( "Done ",msg,2);														
						$("#showrectab").html(output);																																
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
			return false;												
		});	
	});	
	// ]]></script>';
	
	softfooter();

}

function showip(){

	global $globals, $l,$softpanel, $error, $dns_list, $domain_name, $theme, $add_list;
	
	// printing from file
	$add_list = $softpanel->readipblock();	
	
	echo '<center><table border="0" cellpadding="8" cellspacing="1"  class="sai_altrowstable" style="width:400px;" >
		<tr>
			<th align="center" >'.$l['block'].'</th>
			<th align="center" >'.$l['option'].'</th>				
		</tr>';
						
		$i =1;
		foreach ($add_list as $key => $value){	
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$key.'" >
				 <td ><span >'.$value.'</span>						
				 <td><img title="Delete" class="delete" style="cursor:pointer" id="did'.$key.'"  src="' . $theme['images'] . 'remove.gif" /></td>
			 </tr>';
		$i++;			
		}
	echo '</table></center>
	
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
					var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_graybluebut"/>\';
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
					$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");	
					jQuery(\'.sai_message_box\').hide(\'fast\');					
					$.ajax({				
						type: "POST",				
						url: window.location+"&ajaxdel=1&delete_record="+did,				
						// checking for error
						success: function(data){
							var result = data.substring(0,1);					
							var msg = data.substring(1);
							if(result == "1"){
								var msg = data.substring(1,data.indexOf("<table"));
								var output = data.substring(data.indexOf("<table"));							
								message_box.show_message( "Delete ",msg,2);														
								$("#showrectab").html(output);																																			
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
				var old_class = $(this).attr(\'class\');		
				$(this).attr("class", \'sai_tr_bgcolor\');		
				$(this).mouseout(function(){
				$(this).attr(\'class\', old_class);
				});
			});
			
			// For deleting record
			$(".delete").click(function() {	
				var did = $(this).attr(\'id\');
				did = did.substr(3);						
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});				
		});	
		// ]]></script>';
}

?>