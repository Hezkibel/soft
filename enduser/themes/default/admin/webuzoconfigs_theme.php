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

function webuzoconfigs_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $webuzoconfigs;

softheader($l['<title>']);
echo '<br /><div class="sai_heading" align="center">'.$l['pathhead'].'</div>
	<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';
	
error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" name="editconfigs" method="post" action="">
<br /><br />
<table width="95%" cellpadding="10" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">
<tr>
<td align="right">
<span class="sai_head">'.$l['primary_ip'].'</span><br />
</td>
<td valign="top" >
<input type="text" name="WU_PRIMARY_IP" size="30" value="'.aPOSTval('WU_PRIMARY_IP', $webuzoconfigs['WU_PRIMARY_IP']).'" />
</td>
</tr>


<tr>
<td align="right">
<span class="sai_head">'.$l['primary_domain'].'</span><br />
</td>
<td valign="top">
<input type="text" name="WU_PRIMARY_DOMAIN" size="30" value="'.aPOSTval('WU_PRIMARY_DOMAIN', $webuzoconfigs['WU_PRIMARY_DOMAIN']).'" />
</td>
</tr>

<tr>
<td align="right">
<span class="sai_head">'.$l['ns1'].'</span>
</td>
<td valign="top">
<input type="text" name="WU_NS1" size="30" value="'.aPOSTval('WU_NS1', $webuzoconfigs['WU_NS1']).'" />
</td>
</tr>

<tr>
<td valign="top" align="right">
<span class="sai_head">'.$l['ns2'].'</span>
</td>
<td valign="top">
<input type="text" name="WU_NS2" size="30" value="'.aPOSTval('WU_NS2', $webuzoconfigs['WU_NS2']).'" />
</td>
</tr>
<tr>
<td colspan="3">
<p align="center"><input type="submit" name="editconfigs" value="'.$l['edit_configs'].'" class="sai_graybluebut" /></p>
</td>
</tr>
</table>
</form>';

softfooter();

}

?>
