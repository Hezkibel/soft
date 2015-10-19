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


function import_cpanel_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done ;


softheader($l['<title>']);
if(!empty($done)){
	echo '<div class="sai_success">'.$l['import_done'].'</div><br /><br />';	
}else{
	
	echo '<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" id="editsettings">
	'.error_handle($error, "100%", 0, 1).'
	<center class="sai_tit"><img src="'.$theme['a_images'].'import_cpanel.gif" />&nbsp;'.$l['import_cpanel'].'</center>
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
		<tr>
			<td width="35%">
				<span class="sai_head">'.$l['r_domain'].'</span><br />
				<span class="sai_exp">'.$l['r_domain_exp'].'</span>
			</td>		
			<td> 
				<input type="text" name="r_domain" id="r_domain" size="30"  size="30" value="'.POSTval('r_domain', '').'" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['r_user'].'</span><br />
				<span class="sai_exp">'.$l['r_user_exp'].'</span>
			</td>		
			<td> 
				<input type="text" name="r_user" id="r_user" size="30"  size="30" value="'.POSTval('r_user', '').'" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['r_pass'].'</span><br />
				<span class="sai_exp">'.$l['r_pass_exp'].'</span>
			</td>		
			<td> 
				<input type="password" name="r_pass" id="r_pass" size="30" value="'.POSTval('r_pass', '').'" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">
					<input type="hidden" name="create_acc" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_acc" class="sai_graybluebut" id="submitftp" /> 
				</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">'.$l['note'].'</p>
			</td>
		</tr>		
	</table>
	
	</form>';
}
softfooter();

}

?>
