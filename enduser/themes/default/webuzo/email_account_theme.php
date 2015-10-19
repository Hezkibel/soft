<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_account_theme.php
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

function email_account_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name;
	
	// To change the password
	if(optGET('ajaxup')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['changed_password'];
			return true;
		}
	}
	
	// To update domains links
	if(optGET('ajaxdom')){
		show_email_users();
		return true;
	}
	
	// For Delete
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
	
	// For adding Email User
	if(optGET('ajaxemail')){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table to display the list of email accounts
		if(!empty($done)){
			echo '1'.$l['change_final'];
			show_email_users();
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	
echo '<center class="sai_tit"><img src="'.$theme['a_images'].'email_account.gif" />&nbsp;'.$l['email'].'</center>

<form accept-charset="'.$globals['charset'].'" action="" method="post" name="email_account" id="editform">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['loginname'].'</span><br />
		</td>
		<td>
			<input type="text" name="login" id="login" size="30" size="30" value="'.POSTval('login', '').'" />@<select class="input" name="selectdomain" id="selectdomain" >';
				foreach ($domain_list as $key => $value){
					if($domain_name == $key){
						echo '<option value='.$key.' selected=selected >'.$key.'</option>';
					}else{
						echo '<option value='.$key.'>'.$key.'</option>';
					}
				}
			echo '</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none">
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
		<td colspan="2">
			<p align="center">
				<input type="hidden" name="create_acc" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="sai_graybluebut" id="submitemail" /> &nbsp;<img id="createmail" src="'.$theme['images'].'progress.gif" style="display:none">
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
show_email_users();
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
			
			// For creating email accounts 
			$("#submitemail").click(function(){
				$("#createmail").css("display", "");					
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxemail=1",					
					data: $("#editform").serialize(),
					
					// Checking for error
					success: function(data){
						$("#createmail").css("display", "none");
						var result = data.substring(0,1);
						if(result == "1"){
							$_("login").value="";
							$_("newpass").value="";
							$_("conf").value="";
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showrectab").html(output);																																
						}
						if(result == "0"){							
							$("#createemail").css("display", "none");
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

function show_email_users(){

	global $globals, $l, $softpanel, $error, $email_list, $domain_name, $theme;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >
			<tr>
				<th align="center"  width="40%">'.$l['email_user'].'</th>
				<th align="center">'.$l['msg_count'].'</th>
				<th align="center">'.$l['space'].'</th>
				<th align="center">'.$l['option'].'</th>
			</tr>';
			
			// Printing from the File
			$email_list = $softpanel->reademailusers($domain_name);
			
			$i = 1;
			
			foreach ($email_list as $key => $value){
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'" >
						<td>
						 	<span id="em_user'.$key.'">'.$email_list[$key]['user'].'</span>
						</td>
						<td>'.$email_list[$key]['count'].'</td>
						<td>'.(empty($email_list[$key]['space']) ? '-' : $email_list[$key]['space']).'</td>
						<td>
							<img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />&nbsp;&nbsp;&nbsp;
							<a href="/squirrel/" target="_blank"><img title="Access Email" class="Access Email" src="' . $theme['images'] . 'access_email.gif" /></a>&nbsp;&nbsp;&nbsp;
							<img title="Change Password" class="edit" id="eid'.$i.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer" />&nbsp&nbsp&nbsp;
							<img title="Cancel" class="cancel" id="cid'.$i.'" src="'.$theme['images'].'del.gif" style="display:none; cursor:pointer;"  />&nbsp;&nbsp;&nbsp;
							<label id="lbl_pass'.$i.'" style="display:none;">'.$l['change_pass'].' : </label><input type="password" id="chng_pass'.$i.'" style="width:60px; display:none;" >
							<input type="hidden" id="hdn'.$i.'" value="'.$i.'" />
							<input type="hidden" id="hdn_user'.$i.'" value="'.$key.'" />
						</td>
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
					var user_id = did.substring(3);
					var hidn_user_val = $("#hdn_user"+user_id).val();
					$(\'#did\'+user_id).attr("src","'.$theme['images'].'progress.gif");
					var delete_record = hidn_user_val;
					jQuery(\'.sai_message_box\').hide(\'fast\');		
					$.ajax({				
						type: "POST",				
						url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+delete_record,
						// checking for error
						success: function(data){
							var result = data.substring(0,1);					
							var msg = data.substring(1);
							if(result == "1"){
								message_box.show_message("Delete ",msg,2);
								$("#tr"+user_id).fadeOut(2000);																														
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
		
		function mod_escape(value) {
		  value = escape(value);
		  return value.replace(/\+/g, \'%2B\');
		}
		
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
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});
			
			// For cancel
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				$("#cid"+id).css("display", "none");
				$("#chng_pass"+id).css("display", "none");
				$("#lbl_pass"+id).css("display", "none");
				$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
			});
			
			// For editing record
			$(".edit").click(function() {
				
				var id = $(this).attr(\'id\');
				id = id.substr(3);
				var hidn_val = $("#hdn"+id).val();
				
				var edit_hidn_val = $("#hdn_user"+id).val();
				
				$("#cid"+hidn_val).css("display", "");
				$("#chng_pass"+hidn_val).css("display", "");
				$("#lbl_pass"+hidn_val).css("display", "");
				
				var edit_record = edit_hidn_val;
				
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){
					var cpass = mod_escape($(\'#chng_pass\'+hidn_val).val());
					$.ajax({
						type: "POST",
						url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+edit_record,
						data: "cpass="+cpass,
						// Checking for error
						success: function(data){
							var result = data.substring(0,1);
							var msg = data.substring(1);
							if(result == "0"){
								message_box.show_message( "Error ",msg,1);
								$(\'#eid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
							}
							if(result == "1"){
								message_box.show_message( "Done ",msg,2);
								$(\'#chng_pass\'+hidn_val).html($("#chng_pass"+hidn_val).val());
								$(\'#eid\'+hidn_val).attr("src","'.$theme['images'].'editdetail.gif");
								$("#chng_pass"+hidn_val).css("display", "none");
								$("#lbl_pass"+id).css("display", "none");
								$("#cid"+id).css("display", "none");
							}
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);
						}
					});
					$(this).attr("src","'.$theme['images'].'progress.gif");
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#chng_pass"+hidn_val)
						.val($("#chng_pass"+hidn_val).text().substring(0, $("#chng_pass"+hidn_val).text().length - 1))
						.css("display", "")
						.focus();
				}
			});		
		});	
		// ]]></script>';
}

?>
