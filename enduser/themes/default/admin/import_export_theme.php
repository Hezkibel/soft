<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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

function import_export_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report, $allusers, $imported;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['import_export'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
<br /><br /><br />';

error_handle($error);

if(!empty($imported)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_imported'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" name="importexport" method="post" action="" enctype="multipart/form-data">
<table width="733" cellpadding="5" cellspacing="1" border="0" style="margin:0px auto;">';

echo '
<tr>
<td>
	<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
	<tr>
	<td colspan="2" width="60%">
		<table width="110%" border="0" class="sai_ribboneffect">
		<tr>
		<td width="2%"></td>
		<td valign="top"><br />
		<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['import_setting'].'</b></font>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	
	<tr>
	<td width="60%">
	<span class="sai_head">'.$l['import_setting'].'</span><br />
	<span class="sai_exp2">'.$l['import_setting_exp'].'</span>
	</td>
	<td valign="top">
		<input type="file" name="import_file"/>
	</td>
	</tr>
	
	<tr>
	<td width="60%">&nbsp;</td>
	<td valign="top">
	<input type="submit" name="import_setting" value="'.$l['import_setting'].'" class="sai_graybluebut"/>
	</td>
	</tr>
	</table>
</td>
</tr>
';


echo '
<tr>
<td>
	<table border="0"  width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
	<tr>
	<td colspan="2" width="60%">
		<table width="110%" border="0" class="sai_ribboneffect">
		<tr>
		<td width="2%"></td>
		<td valign="top"><br />
		<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['export_setting'].'</b></font>
		</td>
		</tr>
		</table>
	</td>
	</tr>
	
	<tr>
	<td width="60%">
		<span class="sai_head">'.$l['export_setting'].'</span><br />
		<span class="sai_exp2">'.$l['export_setting_exp'].'</span>
	</td>
		<td valign="top">
		<a href="'.$globals['ind'].'act=import_export&download=softaculous_settings.zip" class="sai_graybluebut" style="text-decoration:none">'.$l['export_setting'].'<a/>
	</td>
	</tr>
	</table>
</form>';

softfooter();

}

?>