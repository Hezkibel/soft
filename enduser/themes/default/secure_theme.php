<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function secure_theme(){

global $theme, $globals, $softpanel, $user, $l, $error, $updates_available, $done, $checked, $is_secured;

softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'secure.gif" />&nbsp; ' . $l['ampps_secure'] . '<br/></center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />';

error_handle($error, '100%');

if (!empty($done)){
	
	echo '<div class="sai_success">' . (empty($is_secured) ? $l['ampps_unsecured'] : $l['ampps_secured']) .  '</div>';
	echo '<br /><a href="'.$globals['ind'].'">' . $l['lbl_home'] .  '</a>';
	
}else{
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	function showpass(){
		if($_("secure").checked){		
			$_("pass_row").style.display = "";
			$_("conf_row").style.display = "";
		}else{
			$_("pass_row").style.display = "none";
			$_("conf_row").style.display = "none";
		}
	}
	addonload("showpass();");
	
	// ]]></script>
	<form action="" method="post">
	<table border="0" cellpadding="8" cellspacing="2">
	<tr>
		<td align="left"><span class="sai_head">'.$l['question'].'</span><br/>';
		
		if($is_secured==true){
			echo '<span class="sai_exp">'.$l['is_secure'].'<font color="green">Secured</font></span>';
		}else{
			echo '<span class="sai_exp">'.$l['is_secure'].'<font color="red">Unsecured</font></span>';
		}
		
	echo '</td><td><input type="checkbox" name="secure" id="secure" '.POSTchecked('secure', $is_secured).' onclick="showpass(this);"></td>
	</tr>
	<tr id="pass_row">
		<td align="right"><span class="sai_head">'.$l['set_pass'].'</span><br/><span class="sai_exp">'.$l['set_notify'].'</span></td>
		<td><input type="password" name="setpass" /></td>
	</tr>
	<tr id="conf_row">
		<td align="right" class="sai_head">'.$l['retype_pass'].'</td>
		<td><input type="password" name="retypepass" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="submit" value="Submit"/></td>
	</tr>';
	if($done==1)
	{
		echo '<tr>
		<td colspan="2" align="center">'.$l['pass_set'].'</td>
		</tr>';
	}
	echo '</table>
	<p>'.$l['note'].'</p>
	</form></body></html>';
}
softfooter();
}		

?>
