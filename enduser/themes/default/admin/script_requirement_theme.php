<?php

//////////////////////////////////////////////////////////////
//===========================================================
// softwares_theme.php
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

function script_requirement_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts, $req_fail;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['list_of_scripts'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($req_fail)){
	
	echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
	<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
	<br />
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
	<table cellpadding="0" cellspacing="0" width="100%" border="0">
		<tr>
		<td colspan="5">
			<div class="notebox" style="width:95%;" id="beta_notice1">
				<font class="bboxtxt">'.$l['note'].'</font>
			</div>
		</td>
		</tr>
	</table>
	<table width="723" cellpadding="5" cellspacing="3" border="0" style="margin:0px auto;">';
	$i=1;
	foreach($req_fail as $k => $v){
		
		if($k > 10000){
			continue;
		}
	
		echo '<tr class="'.($i%2 == 0 ? "altrow" : "naltrow").'">
				<td width="17%" valign="top">
					<table width="100%" border="0">
						<tr>
							<td><div class="sp20_'.$iscripts[$k]['softname'].'"></div></td>
							<td class="bboxtxt" align="left" width="90%">'.$v['name'].'</td>
						</tr>
					</table>
				</td>
				<td width="54%" class="bboxtxt">';
				if(count($v['err_msg']) > 1){
					foreach($v['err_msg'] as $v_msg){
						echo '<strong>*</strong> '.$v_msg."<br />";
					}
				}else{
					echo current($v['err_msg']);
				}
				
				echo '</td>
			</tr>';
			$i++;
	
	}
	
	echo '</table><br />
	</form>';
	
}else{
	echo '<h2 align="center">'.$l['no_results'].'</h2>';
}

softfooter();

}
?>