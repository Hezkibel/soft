<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_theme.php
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


function listuser_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $listusers, $SESS;
	
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
	
	if(optGET('ajaxedit')){
		
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

echo '<br /><form accept-charset="'.$globals['charset'].'" name="listuser" method="post" action="">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/addplan.gif" />&nbsp; '.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
// For msgbox
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
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
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
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);							
				jQuery(\'.sai_message_box\').show(\'slow\');
			}else{
				var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\';
				jQuery(\'.sai_message_box\').css(\'top\', scrolledy() + 150);
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
			var deltmp = did.split("--soft--");
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdel=1&deluser="+deltmp[1]+"&delowner="+deltmp[0],				
				// checking for error
				success: function(data){
					var result = data.substring(0,1);					
					var msg = data.substring(1);
					if(result == "1"){
						message_box.show_message("Delete ", msg, 2);
						$_("tr"+did).style.display = "none";
					}
					if(result == "0"){
						message_box.show_message("Error ", msg, 1);
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
	
	// For deleting record
	$(".delete").click(function() {
		var did = $(this).attr(\'id\');
		did = did.substr(3);
		var tmp_ress = did.split("--soft--");
		message_box.delete_message (\'Warning\',(tmp_ress[0] == tmp_ress[1] ? \''.$l['del_res_user'].'\' : \''.$l['del_user'].'\'), did);			
	});
	
	// Cancel
	$(".cancel").click(function() {
		var cid = $(this).attr(\'id\');
		cid = cid.substr(3);
		$("#cid"+cid).css("display", "none");
		$("#eid"+cid).attr("src","'.$theme['images'].'editdetail.gif");
		$("#nof_entry"+cid).css("display", "none");
		$("#updateuser_entry"+cid).css("display", "none");
		$("#nof"+cid).css("display", "");
		$("#updateuser"+cid).css("display", "");
		if('.(ent() ? 1 : 0).'){
				$("#uid_entry"+cid).css("display", "none");
				$("#uid"+cid).css("display", "");
				$("#gid_entry"+cid).css("display", "none");
				$("#gid"+cid).css("display", "");
		}
	});

	// For editing record
	$(".edit").click(function() {
		var id = $(this).attr(\'id\');
		id = id.substr(3);
		edittmp = id.split("--soft--");
		$("#cid"+id).css("display", "");
		
		if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){
			var nof = $(\'#nof_entry\'+id).val();
			var updateuser = $(\'#updateuser_entry\'+id).val();
			if('.(ent() ? 1 : 0).'){
				var uid = $(\'#uid_entry\'+id).val();
				var gid = $(\'#gid_entry\'+id).val();
			}
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxedit=1&moduser="+edittmp[1]+"&updateuser="+updateuser+"&nof="+nof+"&modowner="+edittmp[0]'.(ent() ? '+"&uid="+uid+"&gid="+gid' : '').',
								
				// checking for error
				success: function(data){
					//alert(data);
					var result = data.substring(0,1);
					var msg = data.substring(1);
					if(result == "0"){
						message_box.show_message( "Error ",msg,1);
					}
					if(result == "1"){
						message_box.show_message( "Done ",msg,2);
						$(\'#nof\'+id).html($("#nof_entry"+id).val());
						var new_user = $("#updateuser_entry"+id).val();
						
						if(edittmp[0]!=edittmp[1]){
		
							var ahref_val = $("#ah"+id).attr("href");
							var ahref_val = ahref_val.replace(edittmp[1], new_user);
							$("#ah"+id).attr("href", ahref_val);
							
							$(\'#updateuser\'+id).html(new_user);
							$(\'#tr\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'tr\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#updateuser\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'updateuser\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#updateuser_entry\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'updateuser_entry\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#nof\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'nof\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#nof_entry\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'nof_entry\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#eid\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'eid\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#did\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'did\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#cid\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'cid\'+edittmp[0]+\'--soft--\'+new_user);
							$(\'#ah\'+edittmp[0]+\'--soft--\'+edittmp[1]).attr("id", \'ah\'+edittmp[0]+\'--soft--\'+new_user);
						}
						
						if('.(ent() ? 1 : 0).'){
							$(\'#uid\'+id).html($("#uid_entry"+id).val());
							$(\'#gid\'+id).html($("#gid_entry"+id).val());
						}
					}
					$(\'#eid\'+edittmp[0]+\'--soft--\'+new_user).attr("src","'.$theme['images'].'editdetail.gif");
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
			$(this).attr("src","'.$theme['images'].'progress.gif");
			$("#cid"+id).css("display", "none");
			$("#nof_entry"+id).css("display", "none");
			$("#nof"+id).css("display", "");
			$("#updateuser_entry"+id).css("display", "none");
			$("#updateuser"+id).css("display", "");
			if('.(ent() ? 1 : 0).'){
				$("#uid_entry"+id).css("display", "none");
				$("#uid"+id).css("display", "");
				$("#gid_entry"+id).css("display", "none");
				$("#gid"+id).css("display", "");
			}
		}else{
			$(this).attr("src","'.$theme['images'].'save.gif");
			if(edittmp[0]==edittmp[1]){
				$("#nof"+id).css("display", "none");
				$("#nof_entry"+id)
					.val($("#nof"+id).text())
					.css("display", "")
					.focus();
			}
			
			if(edittmp[0]!=edittmp[1]){
				$("#updateuser"+id).css("display", "none");
				$("#updateuser_entry"+id)
					.val($("#updateuser"+id).text())
					.css("display", "")
					.focus();
			}
			
			if('.(ent() ? 1 : 0).'){
				$("#uid"+id).css("display", "none");
				$("#uid_entry"+id)
					.val($("#uid"+id).text())
					.css("display", "")
					.focus();
				$("#gid"+id).css("display", "none");
				$("#gid_entry"+id)
					.val($("#gid"+id).text())
					.css("display", "")
					.focus();
			}
		}
	});
});
	
// ]]></script>';

echo '<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_reviewform">
	<tr>
	<td colspan="2">
		<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
			<tr>
				<td width="2%"></td>
				<td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['user_details'].'</b></font> 
				</td>
			</tr>
		</table>
		
		
		<form accept-charset="'.$globals['charset'].'" name="ussearch" method="GET" action="">
		<table cellspacing="0" cellpadding="10" border="0" width="95%" align="center" class="showsearch">
			<tr>
				<td>
					<span class="fhead">'.$l['user_name'].': </span>
				</td>
				<td>
					<input type="text" name="usersearch" id="usersearch" size="30" value="'.POSTval('usersearch', '').'" />
				</td>
				<td>
					<input type="submit" name="search" value="'.$l['submit'].'" class="sai_graybluebut" />
				</td>
			</tr>
		</table>
		</form>
		
		';
		if(!empty($listusers)){
		
		page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);
		
		echo '<br />
		<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable" style="margin:0px auto;">
			<tr>
				<th align="center" class="sai_head" width="20%">'.$l['owner'].'</th>
				<th align="center" class="sai_head" width="20%">'.$l['user_name'].'</th>
				<th align="center" class="sai_head" width="10%">'.$l['login'].'</th>
				<th align="center" class="sai_head" width="20%">'.$l['number_of_users'].'</th>';
				if(ent()){
					echo '<th align="center" class="sai_head" width="10%">'.$l['uid'].'</th>
					<th align="center" class="sai_head" width="10%">'.$l['gid'].'</th>';
				}
				echo '<th align="center" class="sai_head" width="20%">'.$l['option'].'</th>
			</tr>';
			$i=1;
			foreach($listusers as $k => $v){
				$_k = str_replace($v['owner'].'_', '', $k);
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$v['owner'].'--soft--'.$v['username'].'">
				
						<td>'.$v['owner'].'</td>
						<td><span id="updateuser'.$v['owner'].'--soft--'.$v['username'].'">'.$v['username'].'</span>
						<input type="text" id="updateuser_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;"></td>
						
						<td>'.(($k != $softpanel->user['owner'].'_'.$softpanel->user['username']) ? '<a href="https://'.$globals['HTTP_HOST'].'/index.php?api_key='.$softpanel->user['api_key'].'&api_pass='.$softpanel->user['api_pass'].'&createSession='.$_k.'&owner='.$v['owner'].'" target="_blank" id="ah'.$v['owner'].'--soft--'.$v['username'].'"><img src="'.$theme['images'].'arrow_right.gif" height="28px"/></a>' : '').'</td>
				
						<td><span id="nof'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['num_users']) ? '-' : $v['num_users']).'</span>
						<input type="text" id="nof_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:45px;" ></td>';
						if(ent()){
							echo '<td><span id="uid'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['_uid']) ? '-' : $v['_uid']).'</span>
							<input type="text" id="uid_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
					
							<td><span id="gid'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['_gid']) ? '-' : $v['_gid']).'</span>
							<input type="text" id="gid_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>';
						}
						echo '<td align="center">
						<table width="100%" border="0">
						<tr>';
						
						if(ent()){
							if((defined('SOFTRESELLER') ? !($v['owner'] == $v['username']) : !($v['owner'] == $v['username'] && $v['owner'] == 'root'))){
								echo '<td width="33%"><img title="Edit" class="edit" id="eid'.$v['owner'].'--soft--'.$v['username'].'" src="' . $theme['images'] . 'edit.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>
					
								<td width="33%"><img title="Delete" class="delete" id="did'.$v['owner'].'--soft--'.$v['username'].'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>
							
								<td width="33%"><img title="Cancel" class="cancel" id="cid'.$v['owner'].'--soft--'.$v['username'].'" src="'.$theme['images'].'del.gif" style="display:none;cursor:pointer"  />
								</td>';
							}else{
								echo '<td align="center">-</td>';
							}
						}
						
						if(aefer()){
							
							// Do not allow to edit the user himself
							if($k != $softpanel->user['owner'].'_'.$softpanel->user['username']){
					
								echo '<td width="33%"><img title="Edit" class="edit" id="eid'.$v['owner'].'--soft--'.$v['username'].'" src="' . $theme['images'] . 'edit.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>
								<td width="33%"><img title="Delete" class="delete" id="did'.$v['owner'].'--soft--'.$v['username'].'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>
								<td width="33%"><img title="Cancel" class="cancel" id="cid'.$v['owner'].'--soft--'.$v['username'].'" src="'.$theme['images'].'del.gif" style="display:none;cursor:pointer"  />';
							}else{
								echo '-';
							}
				
							echo '</td>';
						}
						echo '</tr>
						</table>';
				$i++;
			}
			
			echo '</table>';
			
			page_links($globals['num_res'], $globals['cur_page'], $globals['reslen']);
			
		}else{
			echo '<div class="sai_notice">'.$l['no_users'].'</div>';
		}
	echo '</td>
	</tr>
	<tr>
		
	</tr>
	</td>
	</tr>
	<tr><td></td></tr>
</table>
<br/>
<p align="center"><a href="'.$globals['ind'].'act=adduser" style="text-decoration:none;"><span class="sai_graybluebut">'.$l['adduser'].'</a></p>
</form>';

softfooter();

}
?>