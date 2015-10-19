<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function categories_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['reordercat_head'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />
<br />';

error_handle($error);

if(!empty($saved)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="">
<div class="sai_divroundshad" style="width:700px; margin:0px auto;">
<script language="javascript" src="'.$theme['url'].'/js/reorder.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
//The array id of all the elements to be reordered
reo_r = new Array(\''.implode('\', \'', array_keys($categories)).'\');

//The id of the table that will hold the elements
reorder_holder = "cat_reorder_pos";

//The prefix of the Dom Drag handle for every element
reo_ha = "catha";

//The prefix of the Dom Drag holder for every element(the parent of every element)
reo_ho = "cat";

//The prefix of the Hidden Input field for the reoder value for every element
reo_hid = "cathid";
addonload(\'init_reoder();\');
// ]]></script>
<br /><br />
<table width="60%" cellpadding="0" cellspacing="0" align="center" border="0">
<tr><td id="cat_reorder_pos" width="100%"></td></tr>
</table>';

	$temp = 1;
	foreach($categories as $ck => $cv){
			
		echo '<div id="cat'.$ck.'">
<table cellpadding="0" cellspacing="0" class="catreo" id="catha'.$ck.'" onmousedown="this.style.zIndex=\'1\'" onmouseup="this.style.zIndex=\'0\'">
<tr><td>
&nbsp;&nbsp;'.$l['cat_php_'.$ck].'
</td></tr>
</table>
</div>';	
	
	echo '<input type="hidden" name="cat['.$ck.']" value="'.$temp.'" id="cathid'.$ck.'" />';	
	
	$temp = $temp + 1;
	
	}

echo '
<p align="center"><input type="submit" name="reordercat" value="'.$l['reordercat'].'" class="sai_graybluebut" /></p>
'.(empty($globals['lictype']) ? '<div class="notebox">'.$l['soft_free_note'].'</div>' : '').'<br />
</div>
</form>';

softfooter();

}

?>