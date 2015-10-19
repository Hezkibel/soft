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

function mysqlsettings_theme(){

global $theme, $globals, $softpanel, $user, $l, $error, $updates_available, $done;

softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'mysqlsettings.gif" />&nbsp; ' . $l['mysql_settings'] . '</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />';

error_handle($error, '100%');

if (isset($done) && $done == true)
{
	echo '<div class="sai_success">' . $l['pass_changed'] .  '</div>';
	echo '<br /><a href="'.$globals['ind'].'act=security">' . $l['lbl_security'] .  '</a>';
}else{
	echo '<form action="" method="post">
	<table border="0" cellpadding="8" cellspacing="2" width="95%">
	<tr>
		<td align="right" class="sai_head">MySQL Username:</td>
		<td>&nbsp; root</td>
	</tr>
	<tr>
		<td align="right"><span class="sai_head">Old Password:</span><br /><span>'.$l['default'].'</span></td>
		<td><input type="password" name="oldpass" /></td>
	</tr>
	<tr>
		<td align="right" class="sai_head">New Password:</td>
		<td><input type="password" name="newpass" /></td>
	</tr>
	<tr>
		<td align="right" class="sai_head">Retype Password:</td>
		<td><input type="password" name="retypepass" /></td>
	</tr>
	<tr>
		<td colspan="2" align="center"><input type="submit" name="changepass" value="Change Password"/></td>
	</tr>';
	if($done==1)
	{
		echo '<tr>
		<td colspan="2" align="center">'.$l['pass_changed'].'</td>
		</tr>';
	}
	echo '</table>
	
	<br /><br /><br />
	<center>
	<a href="'.$globals['ind'].'act=security"><font size="2">Back to Security Center</font></a>
	</center>';
}

softfooter();
}		
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
?>
