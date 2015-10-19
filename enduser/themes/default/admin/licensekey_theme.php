<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function licensekey_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $licsubmit;

softheader($l['<title>']);

echo '<center class="sai_heading">&nbsp;&nbsp;&nbsp;'.$l['license_key'].'</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br />';
			
error_handle($error);

if(!empty($licsubmit)){
	echo '<br /><div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> '.$l['license_success'].'</div><br />';
}else{

	echo '<form accept-charset="'.$globals['charset'].'" name="licensekey" method="post" action="">
	<br /><br />
	<table width="100%" cellpadding="5" cellspacing="1" class="sai_reviewform" border="0" style="padding-left:15px; padding-top:15px margin:0px auto;" align="center">
	<tr>		
		<td valign="top">
			<span class="sai_head">'.$l['enter_license_key'].'</span><br />
			<span class="sai_exp2">'.$l['exp_license_key'].'</span>
		</td>
		<td>
			<input type="text" name="enter_license" id="enter_license" size="30" value="'.POSTval('enter_license').'" autocomplete=off /> &nbsp; &nbsp;
		</td>
	</tr>
	<tr>		
		<td valign="top">
			<span class="sai_head">'.$l['enter_email'].'</span><br />
			<span class="sai_exp2">'.$l['exp_enter_email'].'</span>
		</td>
		<td>
			<input type="text" name="enter_email" id="enter_email" size="30" value="'.POSTval('enter_email').'" autocomplete=on /> &nbsp; &nbsp;
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p align="center"><input type="submit" name="submit_license" value="'.$l['submit_license'].'" class="sai_graybluebut" /></p>
		</td>
	</tr>
	</table>
	</form><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />';
	}
	softfooter();
}

?>