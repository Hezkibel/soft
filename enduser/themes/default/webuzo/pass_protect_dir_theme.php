<?php

//////////////////////////////////////////////////////////////
//===========================================================
// pass_protect_dir_theme.php
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

function pass_protect_dir_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done;
	
	// For Delete
	if(optGET('ajaxdel')){
		
		if(!empty($error)){
			echo '{err}'.current($error).'{/err}';
			return false;
		}
		if(!empty($done)){
			echo '{suc}'.$l['delete'].'{/suc}';
			return true;
		}
		
	}
	
	// For Adding a Record
	if(optGET('add_pass_protect')){
		
		if(!empty($error)){
			echo '{err}'.current($error).'{/err}';
			return false;
		}
		
		if(!empty($done)){
			echo '{suc}'.$l['add_pass_protect'].'{/suc}';
			show_protected_user_accts();
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	
echo '
<center class="sai_tit">
	<img src="'.$theme['a_images'].'email_account.gif" />&nbsp;'.$l['lbl_head'].'
</center>

<form accept-charset="'.$globals['charset'].'" action="" method="post" name="frm_protect_dir" id="frm_protect_dir">

	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['dir_path'].'</span><br />
			<span class="sai_exp">'.$l['exp_dir_path'].'</span>
		</td>
		<td>
			'.$softpanel->user['homedir'].'/<input type="text" name="dir_path" id="dir_path" size="30"  value="'.stripslashes(POSTval('dir_path', 'public_html/')).'" onfocus="" />
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['dir_name'].'</span><br />
			<span class="sai_exp">'.$l['exp_dir_name'].'</span>
		</td>
		<td>
			<input type="text" name="dir_name" id="dir_name" size="30" size="30" value="'.POSTval('dir_name', '').'" />
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['username'].'</span><br />
			<span class="sai_exp">'.$l['exp_username'].'</span>
		</td>
		<td>
			<input type="text" name="username" id="username" size="30" size="30" value="'.POSTval('username', '').'" />
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['password'].'</span><br />
			<span class="sai_exp">'.$l['exp_password'].'</span>
		</td>
		<td>
			<input type="password" name="password" id="password" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['re_password'].'</span><br />
			<span class="sai_exp">'.$l['exp_re_password'].'</span>
		</td>
		<td>
			<input type="password" name="re_password" id="re_password" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p align="center">
				<input type="hidden" name="add_pass_protect" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_pass_protect'].'" name="submit_pass_protect" class="sai_graybluebut" id="submit_pass_protect" />&nbsp;<img id="add_pass_proc_loader" src="'.$theme['images'].'progress.gif" style="display:none" />
			</p>
		</td>
	</tr>
	</table>
</form>

<center>
	</br></br>
	<span class="sai_head">'.$l['record_table'].'<br /><br />
</center>

<div id="showrectab">';
show_protected_user_accts();
echo '</div>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function(){
			
		// For Adding Password Protected Directories
		$("#submit_pass_protect").click(function(){
			
			// The Revolving Loader !!!
			$("#add_pass_proc_loader").css("display", "");
			
			$.ajax({
				type: "POST",
				url: window.location+"&add_pass_protect=1",
				data: $("#frm_protect_dir").serialize(),
				
				// Checking for error
				success: function(data){
					$("#add_pass_proc_loader").css("display", "none");
					
					// Do we have a success string ?
					var suc_index = data.indexOf("{suc}");
					if(suc_index != -1){
						
						var suc_end_index = data.indexOf("{/suc}");
						var suc_data = data.substring(suc_index+5,suc_end_index);
						
						if(suc_data != ""){
							// Clean Up
							$_("dir_path").value = "";
							$_("dir_name").value = "";
							$_("username").value = "";
							$_("password").value = "";
							$_("re_password").value = "";
							
							message_box.show_message("Done", suc_data, 2);
							
							$("#showrectab").html(data.substring(data.indexOf("<table")));
							
							return true;
						}
					}
					
					var err_index = data.indexOf("{err}");
					var err_end_index = data.indexOf("{/err}");
					var err_data = data.substring(err_index+5, err_end_index);
					
					if(err_data != ""){
						message_box.show_message( "Error",err_data,1);
						return true;
					}
					
				},
				error: function() {
					message_box.show_message("Error", "'.$l['connect_error'].'", 1);
				}
			});
			return false;
		});
	});
	// ]]></script>';
	
	softfooter();

}

function show_protected_user_accts(){

	global $globals, $l, $softpanel, $error, $theme;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >
			<tr>
				<th align="center" >'.$l['pass_protected_path'].'</th>
				<th align="center" >'.$l['pass_protected_user'].'</th>
				<th align="center">'.$l['option'].'</th>
			</tr>';
			
			$list_protected_users = $softpanel->list_protected_users();
			
			$i = 1;
			
			foreach ($list_protected_users['user_accounts'] as $key => $value){
				
				foreach($value['users'] as $kk => $vv){
					
					echo '
					<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.str_replace("/", "-", $value['spath']).''.$vv.'" >
						<td>
							<span>'.$value['spath'].'</span>
						</td>
						<td>
							<span>'.$vv.'</span>
						</td>
						<td>
							<img title="Delete" class="delete" id="did'.str_replace("/", "-", $value['spath']).''.$vv.'" src="' . $theme['images'] . 'remove.gif" />
						</td>
					 </tr>';
				}
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
					
					var del_rec = did.split("-");
					var lastItem = del_rec.pop();
					
					var tmp_arr = [];
					for (var i=1; i < del_rec.length; i++){
						tmp_arr[i-1] = del_rec[i];
					}
					
					var joinn = "/"+tmp_arr.join("/");
					
					var user_id = did.substring(3);
					$("#did"+user_id).attr("src", "'.$theme['images'].'progress.gif");
					$(".sai_message_box").hide("fast");
					
					$.ajax({
						type: "POST",
						url: window.location+"&path="+joinn+"&ajaxdel=1&delete_record="+lastItem,
						
						// checking for error
						success: function(data){
							
							// Do we have a success string ?
							var suc_index = data.indexOf("{suc}");
							if(suc_index != -1){
								
								var suc_end_index = data.indexOf("{/suc}");
								var suc_data = data.substring(suc_index+5,suc_end_index);
								
								if(suc_data != ""){
									message_box.show_message( "Done ",suc_data,2);
									$("#tr"+user_id).fadeOut(2000);
									return true;
								}
								
							}
							
							var err_index = data.indexOf("{err}");
							var err_end_index = data.indexOf("{/err}");
							var err_data = data.substring(err_index+5,err_end_index);
							
							if(err_data != ""){
								message_box.show_message( "Error",err_data,1);
								return true;
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
				$(this)
					.attr("class", "sai_tr_bgcolor")
					.mouseout(function(){
						$(this).attr("class", old_class);
					});
			});
			
			// For deleting record
			$(".delete").click(function() {
				message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", $(this).attr("id"));
			});
		});
		// ]]></script>';
		
}

?>