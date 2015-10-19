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

function email_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['emailhead'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<br />
<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="">
<table width="95%" cellpadding="10" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">
<tr>
<td width="10%">
</td>
<td><br />
<span class="sai_head">'.$l['mailmethod'].'</span><br />
<span class="sai_exp2">'.$l['mailmethod_exp'].'</span>
</td>
<td valign="top"><br />
	<select name="mail">
		<option value="1" '.(isset($_POST['mail']) && $_POST['mail'] == '1' ? 'selected="selected"' : ($globals['mail'] == 1 ? 'selected="selected"' : '')).'>PHP Mail</option>
		<option value="0" '.(isset($_POST['mail']) && $_POST['mail'] == '0' ? 'selected="selected"' : ($globals['mail'] == 0 ? 'selected="selected"' : '')).'>SMTP</option>
	</select>
</td>
</tr>

<tr>
<td width="10%">
</td>
<td>
<span class="sai_head">'.$l['mailauthtype'].'</span><br />
<span class="sai_exp2">'.$l['mailauthtype_exp'].'</span>
</td>
<td valign="top"><br />
	<select name="mail_authtype">
		<option value="0" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == '0' ? 'selected="selected"' : ($globals['mail_authtype'] == 0 ? 'selected="selected"' : '')).'>Default</option>
		<option value="CRAM-MD5" '.(isset($_POST['mail_authtype']) && $_POST['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : ($globals['mail_authtype'] == 'CRAM-MD5' ? 'selected="selected"' : '')).'>CRAM-MD5</option>
	</select>
</td>
</tr>

<tr>
<td width="10%">
</td>
<td width="45%">
<span class="sai_head">'.$l['smtp_server'].'</span>
</td>
<td valign="top">
<input type="text" name="mail_server" size="30" value="'.aPOSTval('mail_server', $globals['mail_server']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['smtp_port'].'</span>
</td>
<td valign="top">
<input type="text" name="mail_port" size="30" value="'.aPOSTval('mail_port', $globals['mail_port']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['smtp_user'].'</span>
</td>
<td valign="top">
<input type="text" name="mail_user" size="30" value="'.aPOSTval('mail_user', $globals['mail_user']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['smtp_pass'].'</span>
</td>
<td valign="top">
<input type="password" name="mail_pass" size="30" value="'.aPOSTval('mail_pass', $globals['mail_pass']).'" />
</td>
</tr>
<tr>
<td colspan="4">
	<p align="center"><input type="submit" name="editemailsettings" value="'.$l['edit_settings'].'" class="sai_graybluebut"/></p>
</td>
</tr>
</table><br /><br />
</form>';

softfooter();

}

?>