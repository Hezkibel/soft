<?php

//This page use for make MX record for @webuzo.
// Also allowde to delete and update MX record
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

function mxentry_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name;
	
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
	
	// To update domains links
	if(optGET('ajaxdom')){			
		showmx();
		return true;
	}
	
	// For delete
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
	
	// For adding MX Record
	if(optGET('ajaxmx')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['rec_added'];			
			showmx();
			return true;
		}
	}
		
	softheader($l['<title>']);
	
	echo '<center class="sai_tit"><img src="'.$theme['a_images'].'mx_entry.gif" />&nbsp;'.$l['mxentry'].'</center>
	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="mxentry" id="editform">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
		<tr>
			<td>
				<span class="sai_head">'.$l['domain'].'</span><br />
			</td>	
			<td>
				<select class="input" name="selectdomain" id="selectdomain">';
				foreach ($domain_list as $key => $value){	
					if($domain_name == $key){			
						echo '<option value='.$key.' selected=selected >'.$key.'</option>';
					}else{
						echo '<option value='.$key.'>'.$key.'</option>';
					}				
				}			
			echo '</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none"></td>		
		</tr>	
		<tr>
			<td width="35%">
				<span class="sai_head">'.$l['priority'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="priority" id="priority" size="30"  size="30" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['destination'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="destination" id="destination" size="30" />
			</td>
		</tr>
		<tr>
		<td colspan="2">
			<p align="center">
				<input type="hidden" name="create_record" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitmx"/> &nbsp;<img id="createmx" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>				
	</table>
	</form>
	<center>
		</br></br>
		<span class="sai_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></span><br /><br /><br />		
	</center>	
	<div id="showrectab">';
	showmx();
	echo '</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	$(document).ready(function(){
		$("#selectdomain").change(function(){
			$("#changedom").css("display", "");
			var domain = $(this).val();
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdom=1&domain="+domain,
				success: function(data){
					$("#changedom").css("display", "none");
					$("#showrectab").html(data);
					$("#domain_file").html(domain);
				}															  
			});	
		});
				
		// For creating MX Record	
		$("#submitmx").click(function(){
			$("#createmx").css("display", "");				
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxmx=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					$("#createmx").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("priority").value="";
						$_("destination").value="";
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

function showmx(){

	global $globals, $l,$softpanel, $error, $dns_list, $domain_name, $theme;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >
			<tr>
				<th align="center"  width="60">'.$l['priority'].'</th>
				<th align="center"  width="30">'.$l['destination'].'</th>
				<th align="center"  width="10">'.$l['option'].'</th>
			</tr>';
			
			//printig from file
			$dns_list = $softpanel->readmxrecord($domain_name);	
			$i =1;
			foreach ($dns_list as $key => $value){	
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$key.'" >
						 <td width="30%"><span id="priority'.$key.'">'.$dns_list[$key]['priority'].'</span>				
						 <input type="text" id="priority_entry'.$key.'" style="display:none;" > </td>
						 <td width="40%"><span id="destination'.$key.'">'.$dns_list[$key]['destination'].'</span>
						 <input type="text" id="destination_entry'.$key.'" style="display:none;" > </td>
						 <td><img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" />&nbsp&nbsp&nbsp;<img title="Edit" class="edit" id="eid'.$key.'" src="'.$theme['images'].'editdetail.gif"  />&nbsp&nbsp&nbsp;<img title="Cancel" class="cancel" id="cid'.$key.'" src="'.$theme['images'].'del.gif" style="display:none;"  /></td>
					 </tr>';
				$i++;			
			}
	echo '</table>
	
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
					$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");
					jQuery(\'.sai_message_box\').hide(\'fast\');		
					$.ajax({				
						type: "POST",				
						url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,				
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
			
			// For cancel
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "none");
				$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
				$("#priority_entry"+id).css("display", "none");
				$("#priority"+id).css("display", "");
				$("#destination_entry"+id).css("display", "none");
				$("#destination"+id).css("display", "");
			});	
			
			// For editing record
			$(".edit").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				$("#cid"+id).css("display", "");
						
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
					var editpriority = $(\'#priority_entry\'+id).val();	
					var	editdestination = $(\'#destination_entry\'+id).val();
					$.ajax({
						type: "POST",
						url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+id,
						data: "editpriority="+ editpriority +"&editdestination="+ editdestination,
						
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
								$(\'#priority\'+id).html($("#priority_entry"+id).val());
								$(\'#destination\'+id).html($("#destination_entry"+id).val()+\'.\');
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
						}
					});
					$(this).attr("src","'.$theme['images'].'progress.gif");
					$("#cid"+id).css("display", "none");
					$("#priority_entry"+id).css("display", "none");
					$("#priority"+id).css("display", "");
					$("#destination_entry"+id).css("display", "none");
					$("#destination"+id).css("display", "");			
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#priority"+id).css("display", "none");
					$("#priority_entry"+id)
						.val($("#priority"+id).text())
						.css("display", "")
						.focus();
					$("#destination"+id).css("display", "none");
					$("#destination_entry"+id)
						.val($("#destination"+id).text().substring(0, $("#destination"+id).text().length - 1))
						.css("display", "")
						.focus();
				}
			});		
		});	
		// ]]></script>';
}

?>
