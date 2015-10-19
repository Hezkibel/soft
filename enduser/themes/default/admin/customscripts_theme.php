<?php

//////////////////////////////////////////////////////////////
//===========================================================
// customscripts_theme.php
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

function customscripts_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $allcatwise, $custom_catwise, $cscripts, $removed;

softheader($l['<title>']);

echo '<br />
<div class="sai_heading" align="center">'.$l['cust_scr'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($removed)){	
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_removed'].'</div><br />';		
}

//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array('.implode(', ', array_keys($cscripts)).');
function confirm_remove(sid){	
	return confirm("'.$l['confirm_remove'].'");
};

// ]]></script>';

echo '<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
<table width="723" cellpadding="1" cellspacing="0" border="0" style="margin:0px auto;">
<tr>
<td colspan="5">
<table width="100%" class="purplegrad" cellpadding="7">
<td class="sai_head" width="15%"><b>'.$l['soft_name'].'</b></td>
<td class="sai_head" width="55%"><b>'.$l['soft_desc'].'</b></td>
<td class="sai_head" width="10%"><b>'.$l['soft_ins'].' '.$l['soft_ver'].'</b></td>
<td class="sai_head" width="10%"><b>'.$l['soft_action'].'</b></td>
</tr>
</table>
</td>
</tr>';
	
	foreach($custom_catwise as $cattype => $catscripts){
	
	if(empty($catscripts)){
		continue;
	}
	
	echo '<tr>
<td colspan="4" align="center">
<font size="5">'.$l['type_'.$cattype].'</font>
</td>
</tr>';
	
	foreach($catscripts as $cat => $cv){
	
		echo '<tr>
		<td>
		<table width="100%" border="0" class="sai_divroundshad" cellspacing="1" cellpadding="5">
			<tr>
				<td colspan="5">
					<table width="107%" border="0" class="sai_ribboneffect" style="left:-20px;">
						<tr>
							<td width="2%"></td>
							<td valign="top" width="663">
								<br /><font class="bboxtxt" style="color:#FFF;"><b>'.$l['cat_'.$cattype.'_'.$cat].'</b></font>
							</td>
						</tr>
					</table>
				</td>
			</tr>';
		$i=0;
		foreach($cv as $k => $v){
		
			echo '<tr class="'.($i%2 == 0 ? "altrow" : "naltrow").'">
				<td class="bboxtxt" width="15%">'.$v['name'].'</td>
				<td class="bboxtxt" width="55%">'.$v['desc'].'</td>
				<td class="bboxtxt" width="10%">'.$v['ver'].'</td>
				<td class="bboxtxt" width="10%"><a href="'.$globals['ind'].'act=customscripts&remid='.$k.'" title="'.$l['remove_cs'].'"><img src="'.$theme['images'].'admin/remove.gif" onclick="return confirm_remove('.$k.');" alt=""></a> &nbsp; <a href="'.$globals['ind'].'act=customscripts&sact=edit&sid='.$k.'" title="'.$l['edit_cs'].'"><img src="'.$theme['images'].'admin/edit.gif" alt=""></a></td>
			     </tr>';
		$i++;		
		}
		echo '</table><br />';
	}
	
	}

echo '</td></tr></table>
<center>
<input type="button" name="add" onclick="window.location=\''.$globals['ind'].'act=customscripts&sact=add\'" value="'.$l['add_cs'].'" class="sai_graybluebut" /> &nbsp;<br /><br />
<a href="http://www.softaculous.com/docs/Making_Custom_Package" target="_blank"><font class="bboxtxt">'.$l['guide_cs'].'</font></a>
</center>
<br />
<br />
</form>';

softfooter();

}

function edit_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $edited;

softheader($l['<title>']);

error_handle($error);

if(!empty($edited)){	
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_edited'].'</div><br />';		
}

echo '<form accept-charset="'.$globals['charset'].'" name="editcs" method="post" action="">
<br />
<div class="sai_heading" align="center">'.$l['edit_cust_scr'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />
<table width="95%" cellpadding="7" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">
<tr>
<td width="50%"><br />
<span class="sai_head">'.$l['csname'].'</span><br />
<span class="sai_exp2">'.$l['csname_exp'].'</span>
</td>
<td valign="top"><br />
<input type="text" name="csname" size="30" value="'.aPOSTval('csname', $cs['name']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['softname'].'</span><br />
<span class="sai_exp2">'.$l['softname_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="softname" size="30" value="'.aPOSTval('softname', $cs['softname']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['desc'].'</span><br />
<span class="sai_exp2">'.$l['desc_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="desc" size="40" value="'.aPOSTval('desc', $cs['desc']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['ver'].'</span><br />
<span class="sai_exp2">'.$l['ver_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="ver" size="30" value="'.aPOSTval('ver', $cs['ver']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['cat'].'</span><br />
<span class="sai_exp2">'.$l['cat_exp'].'</span>
</td>
<td valign="top">
<select name="cat">';

foreach($categories as $k => $v){
	echo '<option value="'.$k.'" '.($cs['cat'] == $k ? 'selected="selected"' : '').'>
	'.$l['cat_php_'.$k].'
	</option>';
}

echo '</select>
</td>
</tr>
<tr>
<td colspan="3">
	<p align="center"><input type="submit" name="edit_submit" value="'.$l['edit_submit'].'" class="sai_graybluebut" /></p>
</td>
</tr>
</table>
</form>';

softfooter();

}


function add_cs_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid, $cs, $categories, $added;

softheader($l['<title>']);

error_handle($error);

if(!empty($added)){	
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['cs_added'].'</div><br />';		
}

echo '<form accept-charset="'.$globals['charset'].'" name="addcs" method="post" action="">
<br />
<div class="sai_heading" align="center">'.$l['add_cust_scr'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />
<table width="95%" cellpadding="7" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">
<tr>
<td width="50%"><br />
<span class="sai_head">'.$l['csname'].'</span><br />
<span class="sai_exp2">'.$l['csname_exp'].'</span>
</td>
<td valign="top"><br />
<input type="text" name="csname" size="30" value="'.aPOSTval('csname', '').'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['softname'].'</span><br />
<span class="sai_exp2">'.$l['softname_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="softname" size="30" value="'.aPOSTval('softname', '').'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['desc'].'</span><br />
<span class="sai_exp2">'.$l['desc_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="desc" size="40" value="'.aPOSTval('desc', '').'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['ver'].'</span><br />
<span class="sai_exp2">'.$l['ver_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="ver" size="30" value="'.aPOSTval('ver', '').'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['cat'].'</span><br />
<span class="sai_exp2">'.$l['cat_exp'].'</span>
</td>
<td valign="top">
<select name="cat">';

foreach($categories as $k => $v){
	echo '<option value="'.$k.'" '.(optPOST('cat') == $k ? 'selected="selected"' : '').'>
	'.$l['cat_php_'.$k].'
	</option>';
}

echo '</select>
</td>
</tr>
<tr>
<td colspan="3">
<p align="center"><input type="submit" name="add_submit" value="'.$l['add_submit'].'" class="sai_graybluebut" /></p>
</td>
</tr>
</table>

</form>';

softfooter();

}

?>