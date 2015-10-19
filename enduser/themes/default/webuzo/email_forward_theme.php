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

function email_forward_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $email_list, $domain_name;
	
	// For update
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
	
	// For delete
	if(optGET('ajaxdel')){				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			show_email_users();
			return true;
		}
	}
	// For adding email forward
	if(optGET('ajaxemail')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			show_email_users();
			return true;
		}
	}
		
	softheader($l['<title>']);
	
echo '<center class="sai_tit"><img src="'.$theme['a_images'].'email_forward.gif" />&nbsp;'.$l['email'].'</center>';

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="email_account" id="editform">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['loginname'].'</span><br />
		</td>		
		<td> 
			<input type="text" name="addemail" id="addemail" size="30" size="30" value="" />@<select class="input" name="selectdomain" id="selectdomain" >';
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
			<input type="text" name="sendemail" id="sendemail" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<img id="plus" onmouseover="plus_onmouseover();" onmouseout="plus_onmouseout();" onclick="toggle_advoptions();" src="'.$theme['images'].'plus.gif" />&nbsp;&nbsp;<span class="sai_head" onclick="toggle_advoptions();">'.$l['adv_option'].'</span>
			<div id="advoptions" style="display:none;">
				<table border="0" cellpadding="8" cellspacing="8" width="100%" align="center">
					<tr>
						<td width="35%" >
							<span class="sai_head">'.$l['pipe'].'</span><br />							
						</td>
						<td>
							'.$softpanel->user['homedir'].'/<input type="text" name="pipe_path" id="pipe_path" size="30" value="" />
						</td>	
					</tr>
				</table>
			</div>
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
							$_("sendemail").value="";
							$_("addemail").value="";
							$_("pipe_path").value="";						
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
	
	function toggle_advoptions(){
		if ($("#advoptions").is(":hidden")){
			$("#advoptions").slideDown("slow");
		}
		else{
			$("#advoptions").slideUp("slow");
		}
	}
	
	function plus_onmouseover(){
		$("#plus").attr("src", "'.$theme['images'].'plus_hover.gif");
	}
	
	function plus_onmouseout(){
		$("#plus").attr("src", "'.$theme['images'].'plus.gif");
	}
	
	
	// ]]></script>';
	
	softfooter();

}

function show_email_users(){

	global $globals, $l, $softpanel, $error, $email_list, $domain_name, $theme;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >
			<tr>
				<th align="center"  width="35%">'.$l['email_user'].'</th>
				<th align="center"  width="35%">'.$l['email_forward'].'</th>				
				<th align="center">'.$l['option'].'</th>
			</tr>';
			
			//printig from file
			$email_list = $softpanel->reademailforward($domain_name);	
			
			foreach ($email_list as $key => $value){				
				$i =1;
				foreach($value as $k => $v ){
					if(!empty($v)){	
					echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$key.'" >
							 <td><span id="em_user'.$key.'">'.$key.'@'.$domain_name.'</span></td>	
							 <td><span id="em_user'.$key.'">'.$v.'</span></td>					 
							 <td>';						 
								echo '<img title="Delete" class="delete" id="did'.$key.'--'.$k.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />							 						 
							 </td>
						 </tr>';
					}	 
				$i++;
				}				
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
				$(\'#did\'+user_id).attr("src","'.$theme['images'].'progress.gif");
				jQuery(\'.sai_message_box\').hide(\'fast\');		
				$.ajax({				
					type: "POST",				
					url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+user_id,
					// checking for error
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
			$("#change_note").css("display", "");
		});			
	});	
	// ]]></script>';
}

?>
