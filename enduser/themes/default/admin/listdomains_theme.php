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

function listdomains_theme(){

global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
	
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
	
	// Ajax part for update privaliges
	if(optGET('ajaxedit')){
	
		if(!empty($error)){				
			echo '0 '.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['domain_edited'];	
			showdomains();
			return true;			
		}
	}
	
	
	// Privaliges page for popup		
	if(optGET('editdomain')){
	
		$eowner = POST('owner');
		$eusername = POST('username');
		$edomain = POST('domain');
		$epath = POST('path');
		$ereplace_path = POST('replace_path');
		$ebackup_dir = POST('backup_dir');
		$edata_dir = POST('data_dir');
		
		echo '<style type="text/css">
		.ui_titlebar {
			padding: 0.4em 1em;
			background-color: #CCCCCC;
			border: 1px solid #AAAAAA;
			color: #222222;
			font-weight: bold;
			border-radius: 4px;
		}
		
		.sai_popup_add {
			width:500px;
			height:460px;
			position:absolute;
			top:50%;
			left:50%;
			margin:0 auto;
			display:none;
			background:#FFFFFF;
			border:#666 1px solid;
			padding:5px;
		}
		
		.close {
			float:right;
			position:relative;
			z-index:99999;
			margin:3px 6px 0;
		}
		#scroller-body {		
			width=100%;
			padding-bottom:30px;
			height: 100%;
		}
	</style>
	<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[	
		$(document).ready(function(){
			
			$("#submitdomain").click(function() {
			
				var eusername = $("#eusername").val();
				var edomain = $("#edomain").val();
				var oldedomain = $("#oldedomain").val();
				var epath = $("#epath").val();
				var ereplace_path = $("#ereplace_path").val();
				var ebackup_dir = $("#ebackup_dir").val();
				var edata_dir = $("#edata_dir").val();
				
				$("#comsg").css("display", "none");
				$("#ermsg").css("display", "none");
				
				var w_l = window.location.toString();
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}
				$.ajax({
					type: "POST",
					url: w_l+"&submitdomain=1&ajaxedit=1",
					data: "feusername="+eusername+"&fedomain="+edomain+"&foldedomain="+oldedomain+"&fepath="+epath+"&fereplace_path="+ereplace_path+"&febackup_dir="+ebackup_dir+"&fedata_dir="+edata_dir,
					
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						if(result == "1"){
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));
							$(".sai_popup_add")
								.css({"height" : "480px"});
							$("#comsg").css("display", "");
							$("#comsg").html(msg);
							$("#showdomaintab").html(output);
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});
						}
						if(result == "0"){
							var msg = data.substring(1);
							$("#ermsg").css("display", "");
							$("#ermsg").html(msg);
						}
					},
					error: function(ts,errorThrown) {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);
					}
				});
			});
		});
	// ]]></script>';
			
		echo '<div class="ui_titlebar" style="width:95%" >
			<a title="Close" class="close"><img src="' . $theme['images'] . 'remove.gif" style="cursor:pointer; float:right;" alt="close" height="20" width="20" onclick="popup_close();" /></a>			
			<center class="sai_tit"><img src="'.$theme['images'].'domains.gif" />&nbsp; Edit '.$edomain.'</center>
			<center id="comsg" style="display:none" class="sai_notice"></center>
			<center id="ermsg" style="display:none; background-color: #FF9999;" class="sai_notice" ></center>		
		<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" ></div>';
			echo '<table border="0" cellpadding="8" cellspacing="8" width="99%" class="sai_divroundshad">
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['eusername'].'</span><br />
					<span class="sai_exp2">'.$l['exp_eusername'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="eusername" name="eusername" size="40" value="'.$eusername.'">
				</td>
			</tr>
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['edomain'].'</span><br />
					<span class="sai_exp2">'.$l['exp_edomain'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="edomain" name="edomain" size="40" value="'.$edomain.'">
					<input type="hidden" id="oldedomain" name="oldedomain" value="'.$edomain.'">
				</td>
			</tr>
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['epath'].'</span><br />
					<span class="sai_exp2">'.$l['exp_epath'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="epath" name="epath" size="40" value="'.$epath.'">
				</td>
			</tr>
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['ebackup_dir'].'</span><br />
					<span class="sai_exp2">'.$l['exp_ebackup_dir'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="ebackup_dir" name="ebackup_dir" size="40" value="'.$ebackup_dir.'">
				</td>
			</tr>
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['ereplace_path'].'</span><br />
					<span class="sai_exp2">'.$l['exp_ereplace_path'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="ereplace_path" name="ereplace_path" size="40" value="'.$ereplace_path.'">
				</td>
			</tr>
			<tr>
				<td width="50%">
					<span class="sai_head">'.$l['edata_dir'].'</span><br />
					<span class="sai_exp2">'.$l['exp_edata_dir'].'</span>
				</td>
				<td valign="top">
					<input type="text" id="edata_dir" name="edata_dir" size="40" value="'.$edata_dir.'">
				</td>
			</tr>
			</table>';
		echo '</div>';	
		echo'<p align="center"><input type="button" class="sai_graybluebut" id="submitdomain" style="cursor:pointer" name="submitdomain" value="'.$l['submitdomain'].'" /></p>
		</form> ';				
		return true;
	}

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="listuser" method="post" action="">
<div id="scroller-body">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/addplan.gif" />&nbsp; '.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
// Function for close popup
function popup_close(){
	$(".sai_popup_add").fadeOut(1000);
	$("#comsg").css("display", "none");
	$("#ermsg").css("display", "none");
};

// Function for show popup
function show_popup(domain){
	var obj = JSON.parse(domain);			 																
	var height = $("#scroller-body").height();
	var width = $("#scroller-body").width();
	var spanHeight = 50;
	var spanWidth = 50;	
	var w_l = window.location.toString();				
	if(w_l.indexOf("#") > 0){
		w_l = w_l.substring(0, w_l.indexOf("#"));
	}					
	$.ajax({
		type: "POST",
		url: w_l+"&editdomain=1",					
		data: "owner="+obj.owner+"&username="+obj.username+"&domain="+obj.domain+"&path="+obj.path+"&replace_path="+obj.replace_path+"&backup_dir="+obj.backup_dir+"&data_dir="+obj.data_dir+"&username="+obj.username,			
		success: function(data){
			$(".sai_popup_add").html(data);
		},
		error: function() {
			message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
		}	
	});
	setTimeout(function() {
		display();
	},1000);
};	

function display(){
	$(".sai_popup_add")
		.css({"margin-left" : "-250px"})
		.css({"margin-top" : "-150px"})
		.fadeIn(500);
};
	
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
				url: window.location+"&ajaxdel=1&deletedomain=1&deluser="+deltmp[1]+"&delowner="+deltmp[0]+"&deldomain="+deltmp[2],
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
		var tmp_ress = did.split("--soft--");
		message_box.delete_message (\'Warning\',\''.$l['del_domain'].'\'+tmp_ress[2]+\' ?\', did);			
	});
	
	// Cancel
	$(".cancel").click(function() {
		var cid = $(this).attr(\'id\');
		cid = cid.substr(3);
		$("#cid"+cid).css("display", "none");
		$("#eid"+cid).attr("src","'.$theme['images'].'editdetail.gif");
		$("#nof_entry"+cid).css("display", "none");
		$("#nof"+cid).css("display", "");
		if('.ent().'){
				$("#uid_entry"+cid).css("display", "none");
				$("#uid"+cid).css("display", "");
				$("#gid_entry"+cid).css("display", "none");
				$("#gid"+cid).css("display", "");
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
		</table>';
		if(!empty($listdomains)){
		echo '<div class="sai_popup_add"></div>
		<div id="showdomaintab" class="showdomaintab">';
			showdomains();
		echo '</div>';
		}else{
			echo '<div class="sai_notice">'.$l['no_domains'].'</div>';
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
<p align="center"><a href="'.$globals['ind'].'act=adddomain" style="text-decoration:none;"><span class="sai_graybluebut">Add Domain</a></p>
</div>
</form>';

softfooter();

}

function showdomains(){

	global $theme, $globals, $user, $l, $langs, $error, $done, $softpanel, $listdomains;
		
	$listdomains = $softpanel->listdomains();
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable" style="margin:0px auto;">
	<tr>
		<th align="center" class="sai_head" width="5%">'.$l['username'].'</th>
		<th align="center" class="sai_head" width="20%">'.$l['domain'].'</th>
		<th align="center" class="sai_head" width="20%">'.$l['path'].'</th>
		<th align="center" class="sai_head" width="15%">'.$l['options'].'</th>
	</tr>';
	$i=1;
	foreach($listdomains as $k => $v){
		echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'">
		
				<td><span id="user'.$v['owner'].'--soft--'.$v['username'].'">'.$v['owner'].'_'.$v['username'].'</span>
				</td>
				
				<td><span id="dom'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['domain']) ? '-' : $v['domain']).'</span>
				<input type="text" id="dom_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
		
				<td><span id="path'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['path']) ? '-' : $v['path']).'</span>
				<input type="text" id="path_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
				
				<!--<td><span id="backup_dir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['backup_dir']) ? '-' : $v['backup_dir']).'</span>
				<input type="text" id="backup_dir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>
				
				<td><span id="datadir'.$v['owner'].'--soft--'.$v['username'].'">'.(empty($v['data_dir']) ? '-' : $v['data_dir']).'</span>
				<input type="text" id="datadir_entry'.$v['owner'].'--soft--'.$v['username'].'" style="display:none;width:35px;" ></td>-->
				
				<td align="center">
				<table width="100%" border="0" style="text-decoration:none;">
				<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">';
				
				echo '<td width="50%" align="center"><a href="#" onclick=show_popup(\''.json_encode($v).'\');><img title="Edit" class="edit" src="' . $theme['images'] . 'edit.gif" /></a>&nbsp;&nbsp;</td>
				
				<td width="50%" align="center"><img title="Delete" class="delete" id="did'.$v['owner'].'--soft--'.$v['username'].'--soft--'.$v['domain'].'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />&nbsp;&nbsp;</td>';
				
				echo '</tr>
				</table>';
		$i++;
	}
	
	echo '</table>';
	
}

?>