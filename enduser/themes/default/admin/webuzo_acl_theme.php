<?php

//////////////////////////////////////////////////////////////
//===========================================================
// webuzo_acl_theme.php
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

function webuzo_acl_theme(){
	
global $theme, $globals, $l, $error, $done, $softpanel;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['heading_webuzo_acl'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($done)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['change_final'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">
	<tr>
		<td width="70%">
			<span class="sai_head">'.$l['disable_system_apps'].'</span><br />
			<span class="sai_exp2">'.$l['disable_system_apps_exp'].'</span>
		</td>
		<td valign="top">
			<input type="checkbox" name="disable_syapps" '.POSTchecked('disable_syapps', ($softpanel->getconf('DISABLE_SYSAPPS'))).' />
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<span class="sai_exp2">'.$l['root_login_admin'].'</span><br />
		</td>
	</tr>	
	<tr align="center">
		<td colspan="2">
			<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="savechanges" class="sai_graybluebut" />
		</td>
	</tr>	
</table>
</form><br /><br /><br />';

softfooter();
	 
}

?>