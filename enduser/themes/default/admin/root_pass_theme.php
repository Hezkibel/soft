<?php

//////////////////////////////////////////////////////////////
//===========================================================
// root_pass.php
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

function root_pass_theme(){
	
global $theme, $globals, $kernel, $user, $l, $error, $done, $onboot, $user_name, $iapps;


 
softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['change_note'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($done)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['change_final'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="changepass" id="editform">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">
	<tr>
		<td width="40%">
			<span class="sai_head">'.$l['new_pass'].'</span>
		</td>
		<td valign="top">
			<input type="password" name="newpass" id="newpass" size="30" value="" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['retype_pass'].'</span>
		</td>
		<td valign="top">
			<input type="password" name="conf" id="conf" size="30" value="" />
		</td>
	</tr>
	<tr>
		<td colspan="2">		
			<p align="center">
				<input type="hidden" name="changepass" value="1" />
				<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="changepass" class="sai_graybluebut" id="submitpass"/> &nbsp;<img id="createpass" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>	
</table>
</form><br /><br /><br />';

softfooter();
	 
}

?>