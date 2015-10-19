<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_theme.php
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


function installations_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $no_autoupgrade;
global $installations, $sortby, $disabled_scripts;

if(!empty($installations) && optGET('api')){
	_api($installations, optGET('api'));
	return;
}

softheader($l['<title>']);
error_handle($error, '100%');
echo '<div class="bg"><br />
<div class="row sai_main_head" style="width:100%;" align="center">
	<div class="col-sm-5 col-xs-5" style="padding:0px 10px 0 0; text-align:right;">
		<i class="fa sai-installations fa-1x" style="color:#00A0D2;"></i>
	</div>
	<div class="col-sm-7 col-xs-7" style="padding-top:0px; padding-left:0; text-align:left;">'.$l['scripts_ins'].'</div>
</div><hr>';
if(optGET('showupdates')){
	echo '<center class="alert alert-warning">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<a href="'.$globals['ind'].'act=installations" style="text-decoration:none;">'.$l['showing_only'].' '.$l['see_all'].'</a>
		</center>';
}
echo '<span class="sortby" style="float:right;display:inline; margin:0 10px;">
		<table border="0" cellpadding="5" cellspacing="0" width="100%">
			<tr>
				<td><div style="display:none;" id="sortby_wait"><img src="'.$theme['images'].'progress.gif" alt="please wait.."></div></td>
				<td>'.$l['sort_by'].'&nbsp;:&nbsp;&nbsp;</td>
				<td>
					<select name="sortby" onchange="sortby(this.value);">
						<option selected="selected" value="default">'.$l['sort_script'].'</option>
						<option value="domains">'.$l['sort_domain'].'</option>
						<option value="time">'.$l['sort_ins_time'].'</option>
					</select>
				</td>
			</tr>
		</table>
	</span><br /><br /><br />';

echo '
<div id="installations_table">
<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
<tr>
	<thead class="sai_head2" style="background:#333; color:#fff;">
		<th><b>'.$l['link'].'</b></th>
		<th width="150"><b>'.$l['admin'].'</b></th>
		<th width="190"><b>'.$l['ins_time'].'</b></th>
		<th width="150"><b>'.$l['version'].'</b></th>
		<th width="130"><b>'.$l['options'].'</b></th>
		<th width="50"><input type="checkbox" id="check_all_ins" onchange="multiple_check()"></th>
	<thead>
</tr>
</table>
';

if(count($installations) > 0){

foreach($installations as $sid => $installs){

	echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
		<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
		<tr>
			<th colspan="10" style="background:#EFEFEF;">
				<table border="0" cellpadding="0" cellspacing="0">
					<tr class="no">
						<td '.(($sortby != 'domains') ? 'class="sp20_'.$iscripts[$sid]['softname'].'"' : '').'></td>
						<th>&nbsp; '.(($sortby != 'domains') ? (empty($iscripts[$sid]) ? $l['no_info'] : '<a href="'.script_link($sid, 1).'" style="text-decoration:none;">'.$iscripts[$sid]['name'].'</a>') : $sid).'</th>
					</tr>
				</table>
			</th>
		</tr>';

	foreach($installs as $ik => $iv){
	
		$tmp_sid = is_upgradable($ik);
		$tmp_upgradeto = implode(' or ', $tmp_sid);
		$is_cloneable = is_cloneable($iv['sid']);
		
		if(!empty($tmp_sid)){
			$tmp_sid = array_keys($tmp_sid);
		}
	
		echo '<tr id="trid' . $ik . '">
		<td class="endurl"><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a></td>
		<td width="140"><a href="'.$iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid'])).'" target="_blank"><img src="'.$theme['images'].'/admin.gif" /></a></td>
		<td width="190">'.datify($iv['itime']).'</td>
		<td width="90">'.$iv['ver'].(!empty($tmp_sid) ? ' <a href="'.$globals['ind'].'act=upgrade&insid='.$ik.'"><img src="'.$theme['images'].'updates.gif" alt="'.$l['upd_to'].' '.$tmp_upgradeto.'" title="'.$l['upd_to'].' '.$tmp_upgradeto.'" /></a>' : '').
		(!empty($iv['eu_auto_upgrade']) && empty($no_autoupgrade['disable_autoupgrade']) &&  empty($no_autoupgrade['scripts'][$iv['sid']]) ? '<img src="'.$theme['images'].'auto_upgrade.png"  title="'.$l['auto_upgrade_enabled'].'" style="cursor:pointer"/>' : '').'</td>
		
		<td width="190" align="right">'.(!empty($is_cloneable) ? '<a href="'.$globals['ind'].'act=sclone&insid='.$ik.'" title="'.$l['clone'].'"><img src="'.$theme['images'].'clone.gif" /></a>&nbsp;' : '').(empty($globals['disable_backup_restore']) ? '<a href="'.$globals['ind'].'act=backup&insid='.$ik.'" title="'.$l['backup'].'"><img src="'.$theme['images'].'backup.gif" /></a>' : '').' &nbsp;<a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" /></a> &nbsp;<a href="'.$globals['ind'].'act=editdetail&insid='.$ik.'" title="'.$l['editdetail'].'"><img src="'.$theme['images'].'editdetail.gif" /></a></td>
		<td width="50"><input type="checkbox" class="check_all_ins" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'">
		</td>
	</tr>';
	}
	echo '</table><br /><br />';

}

}else{
	echo '<br /><center>'.$l['no_ins'].'</center><br />';
}

echo '</div><br />';
	
// List the installations of scripts which have been disabled by Softaculous or Admin
// In this user can delete, backup, and restore the installations.
// Clone and Upgrade are not possible as the packages wont be there.

if(count($disabled_scripts) > 0){
	
	echo '<br /><center>
		<span class="sai_main_head">'.$l['disabled_scripts'].'</span>
		<hr>
	</center>
		<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
			<tr>
				<thead class="sai_head2" style="background:#333; color:#fff;">
					<th><b>'.$l['link'].'</b></th>
					<th width="150"><b>'.$l['admin'].'</b></th>
					<th width="190"><b>'.$l['ins_time'].'</b></th>
					<th width="120"><b>'.$l['version'].'</b></th>
					<th width="150"><b>'.$l['options'].'</b></th>
					<th width="50"><input type="checkbox" id="check_all_disabled" onchange="multiple_check()"></th>
				<thead>
			</tr>
		</table>';
		
		foreach($disabled_scripts as $sid => $installs){
			
			echo '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">
				<tr>
					<th colspan="10" style="background:#EFEFEF;">
						<table border="0" cellpadding="0" cellspacing="0">
							<tr class="no">
								<th> &nbsp; '.$l['no_info'].'</th>
							</tr>
						</table>
					</th>
				</tr>';
		
			foreach($installs as $ik => $iv){
			
				echo '<tr id="trid' . $ik . '">
				<td class="endurl"><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a></td>
				<td width="140"><a href="'.$iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid'])).'" target="_blank"><img src="'.$theme['images'].'/admin.gif" /></a></td>
				<td width="190">'.datify($iv['itime']).'</td>
				<td width="70">'.$iv['ver'].'</td>
				<td width="200" align="center"><a href="'.$globals['ind'].'act=remove&insid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" /></a>
				<td width="50"><input type="checkbox" class="check_all_disabled" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'">
				</td>
			</tr>';
			
			}
			echo '</table><br /><br />';
		}

	}
	echo '<p align="right">
			'.$l['with_selected'].':
				<select name="multi_options" id="multi_options">
					<option name="todo" id="todo" value="0">---</option>
					<option name="todo" id="todo" value="mult_rem">'.$l['remove'].'</option>
				</select>&nbsp;&nbsp;
			<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
		</p>
		
		<div id="rem_div"></div>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
insids = new Array();
removed = new Object();

function show_confirm(){
	
	insids = new Array();
	removed = new Object();
	
	if($_("multi_options").value != "mult_rem"){
		return false;
	}

	// Build the list of Installations to remove
	var field = document.getElementsByName(\'insids[]\');
		insids = new Array();
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				insids[c] = field[i].value;
				c++;
			}
		
	}
	//alert(insids);
	
	if(c == 0){
		alert("'.$l['no_sel_inst'].'");
		return false;
	}
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	remove_by_id(insids[0], "", 0);
}

function remove_by_id(insid, re, oldinsid){

	removed[insid] = false;
	
	if(re.length > 0 && oldinsid > 0){
		if(re == "removed"){
			removed[insid] = true;
		}
	}
	
	nextinsid = 0;
	
	// Find the next INSTALLATION to remove
	for(i = 0; i < insids.length; i++){
		if(typeof(removed[insids[i]]) != "undefined"){
			continue;
		}
		nextinsid = insids[i];
		break;
	}
	
	// If there is something left to be removed
	if(insid != 0){
		try{		
			AJAX("'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random(), "remove_by_id(\'"+nextinsid+"\', re, \'"+insid+"\')");
			$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("insurl"+insid)+"<br /></p>";
			return true;
		}catch(e){
			return false;
		}
	}
	$_("rem_div").innerHTML = "";
	alert("'.$l['inst_remvd'].'");
	location.reload(true);
	return true;
}

function sortby(sb){
	
	$("#sortby_wait").css("display", "inline");
	$.ajax({
		type: "GET",
		url: "'.$globals['index'].'act=installations&sortby="+sb+"&jsnohf=1",
		// Checking for error
		success: function(data){
			$("#sortby_wait").css("display", "none");
			var $response=$(data);
			//query the jq object for the values
			var output = $response.find("#installations_table").html();
			$("#installations_table").html(output);
			new_theme_funcs_init();
			multiple_check();
		},
		error: function(data) {
			//alert(data.description);
			return false;
		}
	});
}

function multiple_check(){
	$("#check_all_ins").on("click", function(event){
		if(this.checked == true){
			$(".check_all_ins").prop("checked", true);
		}else{
			$(".check_all_ins").prop("checked", false);
		}
	});

	$("#check_all_disabled").on("click", function(event){
		if(this.checked == true){
			$(".check_all_disabled").prop("checked", true);
		}else{
			$(".check_all_disabled").prop("checked", false);
		}
	});

	$("#check_all_classes").on("click", function(event){
		if(this.checked == true){
			$(".check_all_classes").prop("checked", true);
		}else{
			$(".check_all_classes").prop("checked", false);
		}
	});
}

$(document).ready(function(){
	multiple_check();
	$(".sai_altrowstable tr").mouseover(function(){
		if($(this).attr("class") == "no"){
			return;
		}
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
});

// ]]></script>';


// For CLASSES INSTALLATION LIST

ksort($user['classes_ins']);

if(count($user['classes_ins']) > 0){

	echo '<br /><center>
			<span class="sai_main_head">'.$l['classes_ins'].'</span>
			<hr>
		</center>
	<table border="0" cellpadding="2" cellspacing="0" width="100%"  class="table table-hover">
	<tr>
		<thead class="sai_head2" style="background:#333; color:#fff;">
			<th><b>'.$l['link'].'</b></th>
			<th width="180"><b>'.$l['ins_time'].'</b></th>
			<th width="80"><b>'.$l['version'].'</b></th>
			<th width="120"><b>'.$l['options'].'</b></th>
			<th width="50"><input type="checkbox" id="check_all_classes" onchange="multiple_check()"></th>
		<thead>
	</tr>
	</table>
	';

	$th = 0;

	//r_print($user['classes_ins']);
	echo '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="table table-hover">';

	foreach($user['classes_ins'] as $k => $v){
		
		foreach($v as $ik => $iv){
			if($th == 0){
				echo '<tr>
					<th colspan="10" style="background:#EFEFEF;">'.$iv['name'].$iv['cid'].'</th>
				</tr>';	
			}
			
			echo '<tr id="trid' . $ik . '">
				<td>'.$iv['softpath'].'</td>
				<td width="180">'.datify($iv['itime']).'</td>
				<td width="80">'.$iv['ver'].'</td>
				<td width="120"><a href="'.$globals['ind'].'act=classes_remove&cinsid='.$ik.'" title="'.$l['remove'].'"><img src="'.$theme['images'].'remove.gif" /></a></td>
				<td width="50"><input type="checkbox" class="check_all_classes" name="cinsids[]" value="'.$ik.'">
				</td>
			</tr>';
			$th = 1;
		}
		$th = 0;
	}
	echo '</table><br /><br />
	<p align="right" style="width:100%">
		'.$l['with_selected'].': 
		<select name="multi_options_classes" id="multi_options_classes">
			<option name="todo_classes" id="todo_classes" value="0">---</option>
			<option name="todo_classes" id="todo_classes" value="mult_rem">'.$l['remove_classes'].'</option>
		</select>&nbsp;&nbsp;
		<input type="button" value="'.$l['go'].'" onclick="show_confirm_classes()" class="sai_graybluebut">
		<br />
	</p>
	<div id="rem_div_classes"></div>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
cinsids = new Array();
removed = new Object();

function show_confirm_classes(){
	
	cinsids = new Array();
	removed = new Object();
	
	if($_("multi_options_classes").value != "mult_rem"){
		return false;
	}

	// Build the list of Installations to remove
	var field = document.getElementsByName(\'cinsids[]\');
		cinsids = new Array();
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				cinsids[c] = field[i].value;
				c++;
			}
		
	}
	//alert(cinsids);
	
	if(c == 0){
		alert("'.$l['no_sel_inst'].'");
		return false;
	}
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	remove_by_id_classes(cinsids[0], "", 0);
}

function remove_by_id_classes(cinsid, re, oldcinsid){

	removed[cinsid] = false;
	
	if(re.length > 0 && oldcinsid > 0){
		if(re == "removed"){
			removed[cinsid] = true;
		}
	}
	
	nextcinsid = 0;
	
	// Find the next INSTALLATION to remove
	for(i = 0; i < cinsids.length; i++){
		if(typeof(removed[cinsids[i]]) != "undefined"){
			continue;
		}
		nextcinsid = cinsids[i];
		break;
	}
	
	// If there is something left to be removed
	if(cinsid != 0){
		try{	

			AJAX("'.$globals['index'].'act=classes_remove&cinsid="+cinsid+"&ajax=1&random="+Math.random(), "remove_by_id_classes(\'"+nextcinsid+"\', re, \'"+cinsid+"\')");
			$_("rem_div_classes").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +cinsid+ "<br /></p>";
			return true;
		}catch(e){
			alert(e.description);
			return false;
		}
	}
	$_("rem_div_classes").innerHTML = "";
	alert("'.$l['inst_remvd'].'");
	location.reload(true);
	return true;
}

// ]]></script>';

}
echo '</div>';
softfooter();

}

?>