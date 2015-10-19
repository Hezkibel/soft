<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function topscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $top_selected, $reset_topscripts, $softpanel;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['show_top_scripts'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

if(!empty($reset_topscripts)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['reset_topscripts_done'].'</div><br />';
}


echo '
<script language="javascript">
	function reset_topscript(){
		var cnf = confirm("'.$l['resetscripts_warning'].'");
		if(cnf){
			window.location = "'.$globals['index'].'act=topscripts&reset_topscripts=1";
		}
		return false;
	};
</script>';

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="">
<table cellpadding="0" cellspacing="0" border="0" style="width:720px; margin:0px auto;">
		<tr>
			<td colspan="2" align="center">
				<table cellpadding="8" cellspacing="0" border="0" class="sai_reviewform">
<tr>
<td width="60%"><br />
<span class="sai_head">'.$l['enable_apps'].'</span><br />
<span class="sai_exp2">'.$l['enable_apps_exp'].'</span>
</td>
<td valign="top"><br />
<input type="checkbox" name="enable_topscripts" '.(!empty($globals['show_top_scripts']) ? "checked=checked" : "").'>
</td>
</tr>';

if(method_exists($softpanel,'save_topscripts_index')){

echo '<tr>
<td>
<span class="sai_head">'.$l['show_top_scripts'].'</span><br />
<span class="sai_exp2">'.$l['show_top_scripts_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="show_top_scripts" size="30" value="'.aPOSTval('show_top_scripts', $globals['show_top_scripts']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['append_apps'].'</span><br />
<span class="sai_exp2">'.$l['append_apps_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="append_apps" '.POSTchecked('append_apps', $globals['append_apps']).'>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['disable_cats'].'</span><br />
<span class="sai_exp2">'.$l['disable_cats_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_cats" '.POSTchecked('disable_cats', $globals['disable_cats']).'>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['enable_myins'].'</span><br />
<span class="sai_exp2">'.$l['enable_myins_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="enable_myins" '.POSTchecked('enable_myins', $globals['enable_myins']).'>
</td>
</tr>';

if($globals['softpanel'] == 'cpanel'){
echo '<tr>
<td>
<span class="sai_head">'.$l['show_in_notice'].'</span><br />
<span class="sai_exp2">'.$l['show_in_notice_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="show_in_notice" '.POSTchecked('show_in_notice', $globals['show_in_notice']).'>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['group_order'].'</span><br />
<span class="sai_exp2">'.$l['group_order_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="group_order"  size="30" value="'.optPOST('group_order', $globals['group_order']).'">
</td>
</tr>';
}

}

echo '
</table><br /><br />
</td>
</tr>
<tr>
<td><br /><br />
<table cellpadding="15" cellspacing="0" border="0" class="sai_divroundshad" width="720">
<tr>
<td colspan="2"	>
<span class="sai_head" >'.$l['select_from_below'].' :</span>
</td>
</tr>

<tr>
<td>
<span class="sai_exp2">'.$l['select_top_scripts'].' :</span><br />
</td>
<td>
<span class="sai_exp2">'.$l['selected_top_scripts'].' :</span>
</td>
</tr>

<tr>
<td colspan="2">
<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />

      <div class="formbox">        
        <div id="all_users">
           		';
				
				foreach($top as $k => $v){
					
					 if($k == $top_selected[$k]){
						continue;	 
					}
					 echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt">
						<table cellspacing="0" border="0" cellpadding="5"><tr>
						<td width="50" align="center" style="background-color:#FFFFFF"><div class="sp32_'.$iscripts[$k]['softname'].'"></div><td>
						<td><strong>'.$iscripts[$k]['name'].'</strong><td>
						</tr></table>
						<input type="hidden" id="select'.$k.'" class="selectit" />
						</div>
						';
				}
				 
                echo '
            </div>
            <div style="width:100px; text-align:center; margin-left:20px; padding-top: 100px; width:75px; float:left;">
				<a href="javascript:void(0);" id="move_right">Right &raquo;</a><br /><br />
				<a href="javascript:void(0);" id="move_left">&laquo; Left</a>
            <div class="float_break"></div>   
            </div>
            <div id="selected_users">';
			if(count($top_selected) > 0){
			 foreach($top_selected as $k => $v){
				 if(empty($iscripts[$k])){
					continue;	 	
				 }
				 echo '<div id="user'.$k.'" sid="'.$k.'" class="innertxt2">
						<table cellspacing="0" border="0" cellpadding="5"><tr>
						<td width="50" align="center" style="background-color:#FFFFFF"><div class="sp32_'.$iscripts[$k]['softname'].'"></div><td>
						<td><strong>'.$iscripts[$k]['name'].'</strong><td>
						</tr></table>
						<input type="hidden" id="select'.$k.'" class="selectit" />
					 </div>';
				 
			 }
			}
			echo '</div>
         </div>    
</td>
</tr>
<tr>
<td colspan="2">
	<div class="notebox" style="width:95%">
		<font class="bboxtxt"><b>'.$l['script_note'].'</b> : <br />'.$l['script_note_exp'].'</font>
	</div>
</td>
</tr>		  
</table>
</td>
</tr>
</table>

';
    
	

echo ' 
<input type="hidden" name="hidden_selected" id="hidden_selected" />
<p align="center">
	<input type="submit" name="savescript" value="'.$l['savescript'].'" class="sai_graybluebut" />&nbsp;
	<input type="button" name="reset_topscripts" value="'.$l['reset_topscripts'].'" class="sai_graybluebut" onclick="reset_topscript();" />
</p>
'.(empty($globals['lictype']) ? '<div class="notebox" style="width:95%"><font class="bboxtxt">'.$l['soft_free_note'].'</font></div>' : '').'<br />
</form>';

echo '
<script language="javascript">

	$(document).ready(function () {
		// Uncheck each checkbox on body load
		//$("#all_users .selectit").each(function() {this.checked = false;});
		//$("#selected_users .selectit").each(function() {this.checked = false;});
		
		//onload we have to save the PREVIOUS slected scripts
		var scripts = "";
		$("#selected_users .innertxt2").each(function() {
			var s_id = $(this).attr("sid");
			if (scripts == "") 
				scripts += s_id;
			else
				scripts += "," + s_id;
		});
		document.getElementById("hidden_selected").value = scripts;
		
    	$("#all_users .innertxt").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent" && (!color.match(/rgb(a?)\(0/))){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","lightblue");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#selected_users .innertxt2").click(function() {
			
			var color = $(this).css("background-color");
			if(color != "transparent"){
				$(this).css("background-color","transparent");
			}else{
				$(this).css("background-color","lightblue");
			}
			var userid = $(this).attr("id");
			$("#" + userid).toggleClass("innertxt_bg");
		});
		
		$("#move_right").click(function() {
			var users = $("#selected_users .innertxt2").size();
			var selected_users = $("#all_users .innertxt_bg").size();
			
			/*if (users + selected_users > 14) {
				alert("You can only chose maximum 14 Scripts.");
				return;
			}*/
			
			$("#all_users .innertxt_bg").each(function() {
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt2");
				$(user_clone).css("background-color","transparent");
				
				$("#selected_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#move_left").click(function() {
			$("#selected_users .innertxt_bg").each(function() {
				
				
				var user_clone = $(this).clone(true);
				$(user_clone).removeClass("innertxt2");
				$(user_clone).removeClass("innertxt_bg");
				$(user_clone).addClass("innertxt");
				$(user_clone).css("background-color","transparent");
				
				$("#all_users").append(user_clone);
				$(this).remove();
			});
			
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
		});
		
		$("#view").click(function() {
			var scripts = "";
			$("#selected_users .innertxt2").each(function() {
				var s_id = $(this).attr("sid");
				if (scripts == "") 
					scripts += s_id;
				else
					scripts += "," + s_id;
			});
			document.getElementById("hidden_selected").value = scripts;
			//alert(scripts);
			
		});

	});		

</script>

';
softfooter();

}

?>