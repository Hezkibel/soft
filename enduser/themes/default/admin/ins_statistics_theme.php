<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sync_settings_email_theme.php
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

function ins_statistics_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $ins_stats, $scriptwise, $iscripts, $scriptwise_count;

softheader($l['<title>']);

echo '
<div class="sai_heading" align="center">'.$l['ins_statistics_head'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

echo '<br /><table width="95%" cellpadding="10" cellspacing="1" class="sai_reviewform" style="margin:0px auto;" border="0">

<tr>
<td colspan="2">
<div class="sai_heading" align="center">'.$l['overview'].'</div>
</td>
</tr>

<tr>
<td colspan="2">
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
</td>
</tr>';
	
$j = 0;

foreach($ins_stats as $ik => $iv){

	echo '
	<tr class="'.($j%2 == 0 ? "altrow" : "naltrow").'">
		<td width="45%">
			<font size="2"><span class="sai_head">'.$l[$ik].'</span></font>
		</td>
		<td valign="top">
			<font size="2"><span class="sai_head">'.$iv.'</span></font>				
		</td>
	</tr>';
		
	$j++;
}
//r_print($scriptwise);
if(!empty($scriptwise_count)){

	echo '
	<tr>
	<td colspan="2">
	<div class="sai_heading" align="center">'.$l['scriptwise'].'</div>
	</td>
	</tr>
	
	<tr>
	<td colspan="2">
	<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
	</td>
	</tr>';
	
	$i = 0;
	
	foreach($scriptwise_count as $sk => $sv){
		echo '
		<tr class="'.($i%2 == 0 ? "altrow" : "naltrow").'">
			<td width="45%">
				<font size="2"><span class="sai_head">'.$iscripts[$sk]['name'].'</span>&nbsp;('.$l['cat_'.$iscripts[$sk]['type'].'_'.$iscripts[$sk]['cat']].')</font>
			</td>
			<td valign="top">
				<font size="2"><span class="sai_head">'.$sv.'</span></font>			
			</td>
		</tr>';
			
		$i++;
	}
}

echo '</table><br /><br />';

softfooter();

}

?>