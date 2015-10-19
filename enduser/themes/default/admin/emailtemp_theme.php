<?php

//////////////////////////////////////////////////////////////
//===========================================================
// emailtemp_theme.php
//===========================================================
// SOFTACULOUS VIRTUALIZOR
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.virtualizor.com/ (SOFTACULOUS VIRTUALIZOR)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.virtualizor.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function emailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemps, $done, $notice;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/emailtemp.gif" />&nbsp;'.$l['emailtemp'].'
		<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
	</div><br /><br />';

error_handle($error);

if(!empty($notice)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['action_not_applicable'].'</div><br />';
}else{

echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable" style="margin:0px auto;">
<tr>
	<th align="center" class="sai_head">'.$l['tempname'].'</th>
	<th align="center" class="sai_head">'.$l['options'].'</th>
</tr>';

$i=1;

foreach($emailtemps as $k=>$v){

echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">		
	<td>'.$l['temp_'.$k].'</td>
	<td><a href="'.$globals['ind'].'act=editemailtemp&temp='.$k.'"><img src="'.$theme['images'].'admin/editemail.gif" /></a></td>
</tr>';
$i++;
}
echo '</table>';

}


echo '
	
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){
	
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	
});

// ]]></script>';

softfooter();

}

?>