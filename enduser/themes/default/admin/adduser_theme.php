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

function adduser_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel, $__adduser;

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="addplan" method="post" action="">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/addplan.gif" />&nbsp; '.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div>';
}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
function show(){
	if($_("is_reseller").checked){		
		$_("num_users_row").style.display = "";
	}else{
		$_("num_users_row").style.display = "none";
		$_("num_users").value = 0;
	}
}
addonload("show();");

// ]]></script>';

echo '<link href="https://www.softaculous.net/images/sprites/20.css" rel="stylesheet" type="text/css" />
<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_reviewform">
	<tr>
	<td colspan="2">
		<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
			<tr>
				<td width="2%"></td>
				<td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['user_details'].'</b></font> 
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
			<span class="sai_head">'.$l['user_email'].'</span><br />
			<span class="sai_exp2">'.$l['exp_user_email'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="user_email" size="40" value="'.POSTval('user_email', '').'">
		</td>
	</tr>';
	
	if(ent()){
		echo '<tr>
			<td width="35%">
				<span class="sai_head">'.$l['uid'].'</span><br />
				<span class="sai_exp2">'.$l['exp_uid'].'</span>
			</td>
			<td valign="top">
				<input type="text" name="uid" size="40" value="'.POSTval('uid', '').'">
			</td>
		</tr>
		<tr>
			<td width="35%">
				<span class="sai_head">'.$l['gid'].'</span><br />
				<span class="sai_exp2">'.$l['exp_gid'].'</span>
			</td>
			<td valign="top">
				<input type="text" name="gid" size="40" value="'.POSTval('gid', '').'">
			</td>
		</tr>';
	}
	
	if(!defined('SOFTRESELLER')){
		echo '<tr>
			<td width="35%">
				<span class="sai_head">'.$l['is_reseller'].'</span><br />
				<span class="sai_exp2">'.$l['exp_is_reseller'].'</span>
			</td>
			<td valign="top">
				<input type="checkbox" name="is_reseller" size="40"  id="is_reseller" '.POSTchecked('is_reseller', true).' onclick="show(this);">
			</td>
		</tr>
		<tr id="num_users_row" style="display:none;">
			<td width="35%">
				<span class="sai_head">'.$l['number_of_users'].'</span><br />
				<span class="sai_exp2">'.$l['exp_number_of_users'].'</span>
			</td>
			<td valign="top">
				<input type="text" name="num_users" id="num_users" size="40" value="'.POSTval('num_users', '').'">
			</td>
		</tr>';
	}
	echo '</td>
	</tr>
	<tr><td></td></tr>
</table>

<p align="center"><input type="submit" name="saveuser" value="'.$l['saveuser'].'" class="sai_graybluebut"  ></p>
</form>';

softfooter();

}

?>