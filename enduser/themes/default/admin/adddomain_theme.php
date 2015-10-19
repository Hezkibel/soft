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

function adddomain_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="adddomain" method="post" action="">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/adddomain.gif" />&nbsp; '.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div>';
}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// ]]></script>';

echo '<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_reviewform">
	<tr>
	<td colspan="2">
		<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
			<tr>
				<td width="2%"></td>
				<td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['domain_details'].'</b></font> 
				</td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['username'].'</span><br />
			<span class="sai_exp2">'.$l['exp_username'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="username" size="40" value="'.POSTval('username', '').'">
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['domain'].'</span><br />
			<span class="sai_exp2">'.$l['exp_domain'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="domain" size="40" value="'.POSTval('domain', '').'">
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['path'].'</span><br />
			<span class="sai_exp2">'.$l['exp_path'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="path" size="40" value="'.POSTval('path', '').'">
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['backup_dir'].'</span><br />
			<span class="sai_exp2">'.$l['exp_backup_dir'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="backup_dir" size="40" value="'.POSTval('backup_dir', '').'">
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['replace_path'].'</span><br />
			<span class="sai_exp2">'.$l['exp_replace_path'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="replace_path" size="40" value="'.POSTval('replace_path', '').'">
		</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['data_dir'].'</span><br />
			<span class="sai_exp2">'.$l['exp_data_dir'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="data_dir" size="40" value="'.POSTval('data_dir', '').'">
		</td>
	</tr>
	</td>
	</tr>
	<tr><td></td></tr>
</table>

<p align="center"><input type="submit" name="savedomain" value="'.$l['savedomain'].'" class="sai_graybluebut"  ></p>
</form>';

softfooter();

}

?>