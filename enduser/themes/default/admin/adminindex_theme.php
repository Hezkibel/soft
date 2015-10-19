<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminindex_theme.php
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

function adminindex_theme(){

global $theme, $globals, $user, $l;

softheader($l['<title>']);

echo '<script language="javascript" type="text/javascript" src="'.serverurls('latestinfo').'"></script>

<script type="text/javascript">
function load_soft_info(){
	$_("softnews").style.width = $_("softnewsholder").offsetWidth;
	//The news
	if(typeof(soft_news) == "undefined"){
		$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
	}else{
		var newsstr = "";
		for(x in soft_news){
			newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
		}
		$_("softnews").innerHTML = newsstr;
	}
	//The current version
	if(typeof(soft_latest_version) == "undefined"){
		$_("newsoftversion").innerHTML = "<i>'.$l['no_info'].'</i>";
	}else{
		$_("newsoftversion").innerHTML = soft_latest_version;
	}
}
addonload(\'load_soft_info();\');
</script>

<br />
<div class="sai_divroundshad" style="width:690px; margin:0px auto;">
<table width="100%" cellpadding="1" cellspacing="1" class="sai_cbor">			
<tr>
<td class="header" align="center">
	<b>'.$l['news'].'</b>
</td>
</tr>

<tr>
<td width="100%" class="cbgbor" height="200" valign="top" id="softnewsholder">
<div class="softnews" id="softnews"></div>
</td>
</tr>
</table>
</div>
<br /><br />';

echo '
<div class="sai_divroundshad" style="width:650px; margin:0px auto; padding:20px;">
<table width="100%" border="0" cellpadding="0" cellspacing="0">
<tr>
<td width="75%" colspan="2">
<div align="center" class="infohead">'.$l['soft_info'].'<br /></div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />
</td>
</tr>
<tr>
<td>
<div class="softinfo">'.(!defined('SOFTRESELLER') ? '<b>'.$l['soft_license'].'</b> : '.$globals['license'].' ('.$globals['primary_ip'].')<br />
<b>'.$l['soft_license_type'].'</b> : '.(empty($globals['lictype']) ? $l['type_0'].' (<a href="'.serverurls('buy').'" target="_blank">'.$l['become_premium'].'</a>)&nbsp; (<a href="'.serverurls('pricing').'" target="_blank">'.$l['pricing'].'</a>)' : $l['type_1']).'&nbsp; (<a href="'.$globals['ind'].'refreshlicense">'.$l['refreshlicense'].'</a>)'.(asperapp(0, 1, 1) ? '&nbsp; (<a href="'.$globals['ind'].'act=licensekey">Enter License Key</a>)' : '') : '').' <br />
<b>'.$l['server_addr'].'</b> : '.$_SERVER['SERVER_ADDR'].'  <br />
'.(!defined('SOFTRESELLER') ? '<b>'.$l['expires'].'</b> : '.(empty($globals['licexpires']) ? $l['never'] : makedate($globals['licexpires']).' (DD/MM/YYYY)' ).'  <br />': '').
'<b>'.$l['ip_license'].'</b> : '.@substr(curl_call(fastestmirror().'/ip.php', 0, 5), 0, 16).'<br />
<b>'.$l['php_version'].'</b> : '.sphpversion().'<br />
<b>'.$l['soft_version'].'</b> : '.asperapp($globals['version'], @$globals['webuzo_version'], @$globals['ampps_version']).'<br />
<b>'.$l['latest_soft_version'].'</b> : <span id="newsoftversion"></span>
</div>
</td>';
if($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo'){
echo '<td width="20%">
	<img src="'.$theme['images'].$globals['softpanel'].(empty($globals['lictype']) ? 'free' : 'premium').'.png" width="100%" />
</td>';
}else{
echo '<td width="23%">
	<img src="'.$theme['images'].'softaculous'.(empty($globals['lictype']) ? 'free' : 'premium').'.png" width="100%" />
</td>';

}
echo '</tr>
</table>
</div>

<br /><br />';

softfooter();

}

?>