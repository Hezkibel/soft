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
function cronjob_theme(){

	global $theme, $globals, $l, $error, $softpanel ,$done, $user;
	
	// for Add cron job
	if(optGET('ajaxcron')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['create'];	
			 showcron();
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
			 showcron();
			return true;			
		}
	}	
	
	// For update
	if(optGET('ajaxup')){	
				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['edit'];	
			return true;			
		}
	}
	
	softheader($l['<title>']);	
	
	echo '<center class="sai_tit"><img src="'.$theme['a_images'].'cronjob.gif" />&nbsp;'.$l['lbl_head'].'</center>
	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="cronjob" id="editform">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">	
		<tr>			
			<td width="33%">
				<span class="sai_head">'.$l['minute'].'</span> &nbsp <span class="sai_exp">'.$l['mtype'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="minute" id="minute" size="3"  value="  * " />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['hour'].'</span> &nbsp <span class="sai_exp">'.$l['htype'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="hour" id="hour" size="3"  value="  * " />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['day'].'</span>&nbsp <span class="sai_exp">'.$l['dtype'].'</span><br />
			</td>
			<td> 
				<input type="text" name="day" id="day" size="3"  value="  * " />
			</td>				
		</tr>	
		<tr>
			<td>
				<span class="sai_head" id="type">'.$l['month'].'</span> &nbsp <span class="sai_exp">'.$l['motype'].'</span><br />
			</td>				
			<td> 
				<input type="text" name="month" id="month" size="3"  value="  * " />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head" id="type">'.$l['weekday'].'</span> &nbsp <span class="sai_exp">'.$l['wtype'].'</span><br />
			</td>				
			<td> 
				<input type="text" name="weekday" id="weekday" size="3"  value="  * " />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head" id="type">'.$l['cmd'].'</span><br />
			</td>				
			<td> 
				<input type="text" name="cmd" id="cmd" size="60" value="" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">
					<input type="hidden" name="create_record" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitcron"/> &nbsp;<img id="createcron" src="'.$theme['images'].'progress.gif" style="display:none">
				</p>
			</td>
		</tr>		
	</table>	
	</form>	
	</br></br></br>
	<center class="sai_tit">'.$l['cron_head'].' '.$softpanel->user['name'].'</center>	
	<div id="showrectab">';
	showcron();
	echo '</div><br /><br />
	<center><span class="note">'.$l['note'].'</span></center>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[		
		
		$(document).ready(function(){
			// For creating DNS	
			$("#submitcron").click(function(){
				$("#createcron").css("display", "");				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxcron=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createcron").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){						
							$_("minute").value="*";
							$_("hour").value="*";
							$_("day").value="*";
							$_("month").value="*";
							$_("weekday").value="*";	
							$_("cmd").value="";					
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showrectab").html(output);																																					
						}
						if(result == "0"){	
							$("#createdns").css("display", "none");
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

function showcron(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $read_cron, $domain_name ;

	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="sai_altrowstable" >			
		<tr>				
			<th width="10%">'.$l['minute'].'</th>
			<th width="10%">'.$l['hour'].'</th>
			<th width="10%">'.$l['day'].'</th>
			<th width="10%">'.$l['month'].'</th>
			<th width="10%">'.$l['weekday'].'</th>
			<th width="35%">'.$l['cmd'].'</th>
			<th>'.$l['option'].'</th>
		</tr>';
		$read_cron = $softpanel->read_cronjob();	
		
		$i =1;		
		foreach ($read_cron as $key => $value){		
		echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="trc'.$key.'">		
			<td>
				<span id="minc'.$key.'">'.$read_cron[$key]['min'].'</span>	
				<input id="min_entryc'.$key.'" style="display:none;" size="2" >
			</td>
			<td>
				<span id="houc'.$key.'">'.$read_cron[$key]['hou'].'</span>	
				<input id="hou_entryc'.$key.'" style="display:none;" size="2" >
			</td>
			<td>
				<span id="dayc'.$key.'">'.$read_cron[$key]['day'].'</span>	
				<input id="day_entryc'.$key.'" style="display:none;" size="2" >
			</td>			
			<td>
				<span id="monc'.$key.'">'.$read_cron[$key]['mon'].'</span>	
				<input id="mon_entryc'.$key.'" style="display:none;" size="2" >
			</td>
			<td>
				<span id="weec'.$key.'">'.$read_cron[$key]['wee'].'</span>	
				<input id="wee_entryc'.$key.'" style="display:none;" size="2" >
			</td>
			<td>
				<span id="cmdc'.$key.'">'.$read_cron[$key]['cmd'].'</span>
				<input id="cmd_entryc'.$key.'" style="display:none;" size="30" >
			</td>
			<td>
				<img title="Delete" class="delete" id="didc'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /> &nbsp;<img title="Edit" class="edit" id="eidc'.$key.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  /> &nbsp;<img title="Cancel" class="cancel" id="cidc'.$key.'" src="'.$theme['images'].'del.gif" style="display:none;" />
			</td>
		</tr>';			
		$i++;
	}	
	echo '</table>	
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	var message_box = function() {			
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
				
					success: function(data){
						var result = data.substring(0,1);					
						var msg = data.substring(1);
						if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showrectab").html(output);																														
						}
						if(result == "0"){
							message_box.show_message("Error",msg,1);																																			
						}
					},
					error: function() {
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
			
			// For deleting record
			$(".delete").click(function() {	
				var did = $(this).attr(\'id\');
				did = did.substr(3);			
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});
			
			// For cancel
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "none");
				$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
				$("#min_entry"+id).css("display", "none");
				$("#min"+id).css("display", "");
				$("#hou_entry"+id).css("display", "none");
				$("#hou"+id).css("display", "");
				$("#day_entry"+id).css("display", "none");
				$("#day"+id).css("display", "");
				$("#mon_entry"+id).css("display", "none");
				$("#mon"+id).css("display", "");
				$("#wee_entry"+id).css("display", "none");
				$("#wee"+id).css("display", "");
				$("#cmd_entry"+id).css("display", "none");
				$("#cmd"+id).css("display", "");	
			});
			
			// for editing record
			$(".edit").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "");	
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
					var minute = ($("#min_entry"+id).val());
					var hour = ($("#hou_entry"+id).val());
					var day = ($("#day_entry"+id).val());
					var month = ($("#mon_entry"+id).val());
					var weekday = ($("#wee_entry"+id).val());
					var cmd = ($("#cmd_entry"+id).val());		
					$.ajax({
						type: "POST",
						url: window.location+"&ajaxup=1&edit_record="+id,
						data: "hour="+hour+"&minute="+minute+"&day="+day+"&month="+month+"&weekday="+weekday+"&cmd="+cmd,
						
						// checking for error
						success: function(data){					
							var result = data.substring(0,1);					
							var msg = data.substring(1);	
							if(result == "0"){																														
								message_box.show_message( "Error ",msg,1);
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
							if(result == "1"){						
								message_box.show_message( "Done ",msg,2);								
								$(\'#min\'+id).html($("#min_entry"+id).val());
								$(\'#hou\'+id).html($("#hou_entry"+id).val());
								$(\'#day\'+id).html($("#day_entry"+id).val());
								$(\'#mon\'+id).html($("#mon_entry"+id).val());
								$(\'#wee\'+id).html($("#wee_entry"+id).val());
								$(\'#cmd\'+id).html($("#cmd_entry"+id).val());														
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
						}
					});	
					$(this).attr("src","'.$theme['images'].'progress.gif");
					$("#cid"+id).css("display", "none");
					$("#min_entry"+id).css("display", "none");
					$("#min"+id).css("display", "");
					$("#hou_entry"+id).css("display", "none");
					$("#hou"+id).css("display", "");
					$("#day_entry"+id).css("display", "none");
					$("#day"+id).css("display", "");
					$("#mon_entry"+id).css("display", "none");
					$("#mon"+id).css("display", "");
					$("#wee_entry"+id).css("display", "none");
					$("#wee"+id).css("display", "");
					$("#cmd_entry"+id).css("display", "none");
					$("#cmd"+id).css("display", "");				
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#min"+id).css("display", "none");			
					$("#min_entry"+id)
						.val($("#min"+id).text())
						.css("display", "")
						.focus();
					$("#hou"+id).css("display", "none");
					$("#hou_entry"+id)
						.val($("#hou"+id).text())
						.css("display", "")
						.focus();
					$("#day"+id).css("display", "none");
					$("#day_entry"+id)
						.val($("#day"+id).text())
						.css("display", "")
						.focus();
					$("#mon"+id).css("display", "none");
					$("#mon_entry"+id)
						.val($("#mon"+id).text())
						.css("display", "")
						.focus();
					$("#wee"+id).css("display", "none");
					$("#wee_entry"+id)
						.val($("#wee"+id).text())
						.css("display", "")
						.focus();
					$("#cmd"+id).css("display", "none");
					$("#cmd_entry"+id)
						.val($("#cmd"+id).text())
						.css("display", "")
						.focus();						
				}
			});			
		});
	// ]]></script>';
			
}
?>