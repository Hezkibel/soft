<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function plans_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $emailtemps, $plans, $done, $_users;

softheader($l['<title>']);

echo '<center class="sai_heading"><img src="'.$theme['images'].'admin/plans.gif" />&nbsp;&nbsp;'.$l['title'].'</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function delconf(){
	return confirm("'.$l['del_conf'].'");
};

function add_plan(){
 window.location.href = "'.$globals['ind'].'act=addplans";
}

// ]]></script>';

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div><br />';
}

if(empty($plans)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['no_plan'].'</div><br />';
}else{

echo '<table border="0" cellpadding="5" cellspacing="1" width="95%" class="sai_altrowstable" align="center">
<tr>
	<th>'.$l['planname'].'</th>
	<th>'.$l['options'].'&nbsp;<input type="checkbox" onclick="check(document.getElementsByName(\'insids[]\'), this);" /></th>
</tr>';
$i=1;

// Sort the plans alphabetically
ksort($plans);

foreach($plans as $k => $v){
	
	// Show name
	$v['show_name'] = get_filename($v['name']);
	
echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">		
	<td width="80%">'.$v['show_name'].'</td>
	<td><a href="'.$globals['ind'].'act=editplans&plan='.$v['show_name'].'"><img src="'.$theme['images'].'admin/editemail.gif" title= '.$l['edit_plan'].'/></a>&nbsp;
	<a href="'.$globals['ind'].'act=plans&delete='.$v['show_name'].'" onclick="return delconf();" title='.$l['del_plan'].'><img src="'.$theme['images'].'admin/remove.gif" /></a>&nbsp;<input type="checkbox" name="insids[]" id="'.$v['show_name'].'" value="'.$v['show_name'].'">
	</td>
</tr>';
$i++;
}

echo '</table>
<br />
<center><a href="'.$globals['ind'].'act=addplans" style="text-decoration: none" ><input type="submit" class="sai_graybluebut" value="'.$l['addplan'].'"></a></center><br />';

}

echo ''.(empty($globals['lictype']) ? '<div class="notebox">'.$l['feature_not_available'].'</div>' : '').'<br />
	<p align="right">
		'.$l['with_selected'].': 
		<select name="multi_options" id="multi_options">
			<option name="todo" id="todo" value="0">---</option>
			<option name="todo" id="todo" value="mult_rem">'.$l['del_plan'].'</option>
		</select>
		<input type="button" value="'.$l['go'].'" onclick="show_confirm()" class="sai_graybluebut">
		<br />
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
			AJAX("'.$globals['index'].'act=plans&delete="+insid+"&ajax=1&random="+Math.random(), "remove_by_id(\'"+nextinsid+"\', re, \'"+insid+"\')");
			$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_backup_id']. ' File: " +insid+ "<br /></p>";
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


$(document).ready(function(){
	
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
});

// ]]></script>';

softfooter();

}

?>