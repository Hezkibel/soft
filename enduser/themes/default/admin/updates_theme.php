<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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

function updates_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['update_softaculous'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($updated)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['updated_successfully'].'</div><br />';
}

if(!empty($report)){
	echo '<table width="100%" cellpadding="1" cellspacing="0" border="0" class="sai_divroundshad" style="padding:10px;">
	<tr>
		<td colspan="2" class="sai_head">'.$l['update_logs'].'</td>
	</tr>
	<tr>
		<td valign="top">'.implode('<br />', $report['log']).'</td>
		<td width="20%"><img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" /></td>
	</tr>
	</table>
	<br />';
}
$curr_version = asperapp($globals['version'], @$globals['webuzo_version'], @$globals['ampps_version']);
$latest_version = (empty($info['version']) ? $l['not_connect_soft'] : $info['version']);
echo '<form accept-charset="'.$globals['charset'].'" name="updatesoftaculous" method="post" action="">
<table width="97%" cellpadding="5" cellspacing="0" border="0" style="margin:0px auto;" >
<tr>
<td>
<table width="100%" cellpadding="5" cellspacing="0" border="0" class="sai_divroundshad" style="padding:10px;">
<tr>
	<td class="sai_head" width="50%" align="right">'.$l['cur_ver'].'</td>
	<td>'.$curr_version.'</td>
</tr>
<tr>
	<td class="sai_head" align="right">'.$l['latest_ver'].'&nbsp;&nbsp;</td>
	<td>'.($curr_version != $latest_version ? '<font color="#FF0033">' : '<font>').''.$latest_version.'</font></td>
</tr>
</table>
</td>
</tr>
<tr>
	<td colspan="2"><font class="bboxtxt">'.$info['message'].'</font></td>
</tr>
</table>

<p align="center"><input type="submit" name="update" value="'.$l['updatesoftaculous'].'" '.(empty($info['link']) ? 'disabled="disabled"' : '').' class="sai_graybluebut" /></p>
</form>';

softfooter();

}

?>