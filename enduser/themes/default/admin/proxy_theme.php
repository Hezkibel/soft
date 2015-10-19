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

function proxy_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved;

softheader($l['<title>']);



echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['proxyhead'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<br />
<form accept-charset="'.$globals['charset'].'" name="editeproxysettings" method="post" action="">
<table width="95%" cellpadding="10" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">
<tr>
<td width="10%">
</td>
</tr>
<tr>
<td width="10%">
</td>
<td width="45%">
<span class="sai_head">'.$l['proxy_check'].'</span>
</td>
<td>
<input type="checkbox" name="proxy_check" '.POSTchecked('proxy_check', $globals['proxy_check']).' />
</td>
</tr>
<tr>
<td width="10%">
</td>
<td width="45%">
<span class="sai_head">'.$l['proxy_ip'].'</span>
</td>
<td valign="top">
<input type="text" name="proxy_ip" size="30" value="'.aPOSTval('proxy_ip', $globals['proxy_ip']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['proxy_port'].'</span>
</td>
<td valign="top">
<input type="text" name="proxy_port" size="30" value="'.aPOSTval('proxy_port', $globals['proxy_port']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['proxy_user'].'</span>
</td>
<td valign="top">
<input type="text" name="proxy_user" size="30" value="'.aPOSTval('proxy_user', $globals['proxy_user']).'" />
</td>
</tr>

<tr>
<td>
</td>
<td>
<span class="sai_head">'.$l['proxy_pass'].'</span>
</td>
<td valign="top">
<input type="password" name="proxy_pass" size="30" value="'.aPOSTval('proxy_pass', $globals['proxy_pass']).'" />
</td>
</tr>
<tr>
<td colspan="4">
	<p align="center"><input type="submit" name="editproxysettings" value="'.$l['edit_settings'].'" class="sai_graybluebut"/></p>
</td>
</tr>
</table><br /><br />
<div class="notebox" style="width:95%;">
	<font class="bboxtxt">'.$l['tcp_note'].'</font>
</div>

</form>';

softfooter();

}

?>