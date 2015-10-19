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

function editemailtemp_theme(){

global $theme, $globals, $kernel, $user, $l, $error, $emailtemp, $done, $notice, $tempname, $ll;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/editemailtemp.gif" />&nbsp; '.$l['edittemp'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" name="editemailtemp" method="post" action="">
<table cellspacing="0" cellpadding="10" border="0" width="95%" align="center" class="sai_reviewform" style="margin:0px auto;" align="center">
<tr>
	<td class="bboxtxt" width="20%" align="right">'.$l['subject'].':</td>	
	<td><input type="text" name="tempsub" value="'.htmlizer($ll['title']).'" size="73"></td>
</tr>
<tr>
	<td class="bboxtxt" valign="top" align="right">'.$l['content'].':</td>
	<td ><textarea  cols="70" name="tempcontent" rows="16">'.htmlizer($ll['body']).'</textarea><br /><br /><br /><br /></td>
</tr>
</table>
<br />';

// For Displaying the variable Information according to the action (i.e install, remove, update)
echo '<table cellspacing="0" cellpadding="10" border="0" width="95%" align="center" class="sai_divroundshad" style="margin:0px auto;" align="center">
<tr>
<td class="bboxtxt" style="line-height:160%; padding:40px;">'.$l['mail_'.$tempname.'_info'].'
</td>
</tr>
</table>';

echo '<br /><br /><div class="notebox">'.$l['if_note'].'</div>
<table width="50%" style="margin:0px auto;">
<tr>
<td align="right" >
<input type="submit" name="savetemplate" value="'.$l['savetemp'].'" class="sai_graybluebut">
</td>
<td align="left"><input type="button" name="savetemplate" value="'.$l['reset_template'].'" class="sai_graybluebut" onClick="confirm_reset();">
</td>
</tr>
</table><br /><br />
<center><a href="'.$globals['index'].'act=emailtemp"><font class="bboxtxt">'.$l['temp_overview'].'</font></a></center>
</form>';


echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function confirm_reset(){
	var r = confirm("'.$l['reset_confirm'].'");
	if(r != true){
		return false;
	}else{
		window.location = window.location+"&reset='.$tempname.'";
	}
}

// ]]></script>';

softfooter();

}

?>