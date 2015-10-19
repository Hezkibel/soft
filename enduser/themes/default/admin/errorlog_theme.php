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

function errorlog_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $filename, $error_log_data, $log_cleared;

softheader($l['<title>']);

echo '<br /><center class="sai_heading"><img src="'.$theme['images'].'error_log.gif" />&nbsp;'.$l['errorlog_head'].'</center><br />';

error_handle($error);

echo '<script language="javascript" src="'.js_url('js/combined.js').'" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function confirm_reset(){
	var r = confirm("'.$l['reset_confirm'].'");
	if(r != true){
		return false;
	}else{
		//alert(window.location+"&reset='.basename($filename).'");
		//return false;
		window.location  += "&clear_log='.basename($filename).'";
	}
}
	
// ]]></script>';

if(!empty($log_cleared)){
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	alert("'.$l['refresh_after_clear'].'");
	window.location = "'.$globals['index'].'act=errorlog";
// ]]></script>';
}else{


echo '<form accept-charset="'.$globals['charset'].'" name="errorlogform" method="post" action="" id="errorlogform">
		<center>
			<table border="0" cellpadding="5" cellspacing="0" width="700px" align="center" class="sai_reviewform">
				<tr>
					<td><span class="sai_head">'.$filename.(!empty($error_log_data['file_size']) ? ' ('.$error_log_data['file_size'].')' : '').'</span></td>
				</tr>
			</table>
		</center>
		<br /><br />

	<div style="height:410px; width:700px; overflow:auto; border: 2px solid #CCC; margin:0px auto; position:relative" >
		<table border="0" cellpadding="0" cellspacing="0" width="700px" align="center" class="sai_reviewform">
			<tr>
				<td nowrap="nowrap"><textarea style="font-size:15px;color:#06C; border:none; resize:none;" name="errorlog_data" id="errorlog_data" rows="20" cols="250" readonly="readonly">'.$error_log_data['error_data'].'</textarea>
				</td>
			</tr>
		</table>
	</div><br />
	
<p align="center">
	<input type="button" value="'.$l['clear_log'].'" name="clear_log" class="sai_graybluebut" onClick="confirm_reset();"/>
</p>
</form>';
}
softfooter();

}

?>