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


function ssh_access_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $installations, $langs, $saved;

softheader($l['<title>']);

error_handle($error, '100%');

if(!empty($saved)){
	echo '<div class="sai_success">'.$l['settings_saved'].'</div>';
}

echo '<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="">
<center class="sai_tit"><img src="'.$theme['a_images'].'ssh_login.gif" />&nbsp;'.$l['ssh_access'].'</center>
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
	<tr>
		<td>
			<span class="sai_head">'.$l['ssh_enable'].'</font></span><br/><span class="sai_exp">'.$l['ssh_check'].'</span>
		</td>
		<td>			
			<input type="checkbox" name="sshon" id="sshon" '.POSTchecked('sshon', ($softpanel->getssh())).' ">
		</td>
	</tr>
	<tr>
		<td colspan="2">
			<p align="center">			
				<input type="submit" class="sai_graybluebut" name="editsshsettings" value="'.$l['edit_settings'].'" />
			</p>
		</td>
	</tr>	
</table>
</form>';

softfooter();

}

?>