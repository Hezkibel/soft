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

function settings_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $softpanel, $protocols;

//Is suPHP installed ?
$apache_modules = (function_exists('apache_get_modules') ? apache_get_modules() : '');
if(is_array($apache_modules)){
	foreach($apache_modules as $av){
		if(strtolower($av) == 'mod_suphp'){
			$suphp = true;
		}
	}
}

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['settings'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
<br /><br /><br />';

error_handle($error);

echo '<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$globals['version'].'" />
<script language="javascript" src="'.$theme['url'].'/js/combined.js" type="text/javascript"></script>
<script src="'.$theme['url'].'/js/spectrum.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function show_ud(id){
	var val = id.value;
	if(val == "user_defined"){
		$("#admin_prefix_ud").css("display", "");
	}else{
		$("#admin_prefix_ud").css("display", "none");
	}
}

function showtip(txt, el){	
	
	$_("stooltip").innerHTML = txt;
	
	var pos = findelpos(el);
	$_("stooltip").style.display = "";
	var tipheight = parseInt($_("stooltip").offsetHeight);
	var tipwidth = parseInt($_("stooltip").offsetWidth);
	//alert(tipheight+" "+tipwidth);
	
	var abody = findelpos($_("abody"));
	var bodyWidth = abody[0] + $_("abody").offsetWidth
	
	if((pos[0] + tipwidth) > bodyWidth){
		pos[0] = pos[0] - (pos[0] + tipwidth - bodyWidth) + 15;
	}
	
	$_("stooltip").style.left = pos[0]+"px";
	$_("stooltip").style.top = (pos[1]-5-tipheight)+"px";
	
	el.onmouseout = function(){
		hidetip();
	};

};

function hidetip(){
	$_("stooltip").style.display = "none";
}

function isNumber(n) {
	if(isNaN(n.value)){
		alert(n.value+\' is not a valid Number\');
		return false;
		return false;
	}
}

// ]]></script>';

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="">
<table width="732" cellpadding="5" cellspacing="1" border="0" style="margin:0px auto;">';

if(!defined('SOFTRESELLER')){

echo '
<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;">'.$l['pathhead'].'</font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['softpath'].'</span><br />
<span class="sai_exp2">'.$l['softpath_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="path" size="30" value="'.aPOSTval('path', $globals['path']).'" />
</td>
</tr>


<tr>
<td>
<span class="sai_head">'.$l['softscripts'].'</span><br />
<span class="sai_exp2">'.$l['softscripts_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="softscripts" size="30" value="'.aPOSTval('softscripts', $globals['softscripts']).'" />
</td>
</tr>
</table>
</td>
</tr>';

}


echo '
<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['gen_set'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['sitename'].'</span><br />
<span class="sai_exp2">'.$l['sitename_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="sn" size="30" value="'.aPOSTval('sn', $globals['sn']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['logo_url'].'</span><br />
<span class="sai_exp2">'.$l['logo_url_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="logo_url" size="30" value="'.aPOSTval('logo_url', $globals['logo_url']).'" />
</td>
</tr>';

if(!defined('SOFTRESELLER')){
echo '<tr>
<td>
<span class="sai_head">'.$l['is_vps'].'</span><br />
<span class="sai_exp2">'.$l['is_vps_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="is_vps" '.POSTchecked('is_vps', $globals['is_vps']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['cook_name'].'</span><br />
<span class="sai_exp2">'.$l['cook_name_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="cookie_name" size="30" value="'.aPOSTval('cookie_name', $globals['cookie_name']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['chmod_files'].'</span><br />
<span class="sai_exp2">'.$l['chmod_files_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
</td>
<td valign="top">
<input type="text" name="chmod_files" size="20" value="'.aPOSTval('chmod_files', $globals['chmod_files']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['chmod_dir'].'</span><br />
<span class="sai_exp2">'.$l['chmod_dir_exp'].' '.(empty($suphp) ? '' : '<b>('.$l['suphp_detected'].')</b>').'</span>
</td>
<td valign="top">
<input type="text" name="chmod_dir" size="20" value="'.aPOSTval('chmod_dir', $globals['chmod_dir']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['chmod_conf_file'].'</span><br />
<span class="sai_exp2">'.$l['chmod_conf_file_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="chmod_conf_file" size="20" value="'.aPOSTval('chmod_conf_file', @$globals['chmod_conf_file']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['footer_link'].'</span><br />
<span class="sai_exp2">'.$l['footer_link_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="footer_link" size="20" value="'.aPOSTval('footer_link', @$globals['footer_link']).'" />
</td>
</tr>';
}

if($globals['softpanel'] == 'directadmin' && !defined('SOFTRESELLER')){
echo '<tr>
<td>
<span class="sai_head">'.$l['remote_mysql'].'</span><br />
<span class="sai_exp2">'.$l['remote_mysql_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="remote_mysql" size="20" value="'.aPOSTval('remote_mysql', @$globals['remote_mysql']).'" />
</td>
</tr>';
}

if(!defined('SOFTRESELLER')){
echo '<tr>
<td>
<span class="sai_head">'.$l['soft_email'].'</span><br />
<span class="sai_exp2">'.$l['soft_email_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="soft_email" size="30" value="'.aPOSTval('soft_email', $globals['soft_email']).'" />
</td>
</tr>';
}

echo '<tr>
<td>
<span class="sai_head">'.$l['from_email'].'</span><br />
<span class="sai_exp2">'.$l['from_email_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="from_email" size="30" value="'.aPOSTval('from_email', $globals['from_email']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['choose_lang'].'</span><br />
<span class="sai_exp2">'.$l['choose_lang_exp'].'</span>
</td>
<td valign="top">
<select name="language">';
    
    foreach($langs as $k => $v){

		echo '<option value="'.$v.'" '.(empty($_POST['language']) && $globals['language'] == $v ? 'selected="selected"' : (@trim($_POST['language']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
        
    }
	
	echo '</select>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['choose_protocol'].'</span><br />
<span class="sai_exp2">'.$l['choose_protocol_exp'].'</span>
</td>
<td>
<select name="default_protocol">';

foreach($protocols as $pk => $pv){
	echo '<option value="'.$pk.'" '.($globals['default_protocol'] == $pk ? 'selected="selected"' : '').'>'.$pv.'</option>';
}

echo '</select>
</td>
</tr>';

if(!defined('SOFTRESELLER')){
	
echo '<tr>
<td>
<span class="sai_head">'.$l['choose_theme'].'</span><br />
<span class="sai_exp2">'.$l['choose_theme_exp'].'</span>
</td>
<td valign="top">
<select name="theme_folder">';
    
    foreach($skins as $k => $v){

        echo '<option value="'.$v.'" '.(empty($_POST['theme_folder']) && $globals['theme_folder'] == $v ? 'selected="selected"' : (trim($_POST['theme_folder']) == $v ? 'selected="selected"' : '') ).'>'._ucfirst($v).'</option>';
        
    }
	
	echo '</select>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['default_hf_bg'].'</span><br />
<span class="sai_exp2">'.$l['default_hf_bg_exp'].'</span>
</td>
<td valign="top">
<input type="color" name="color" id="default_hf_bg" class="changecolor"/>&nbsp;&nbsp;
<input type="hidden" name="default_hf_bg" value="'.aPOSTval('default_hf_bg', $globals['default_hf_bg']).'" id="hidden_default_hf_bg">
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['default_cat_hover'].'</span><br />
<span class="sai_exp2">'.$l['default_cat_hover_exp'].'</span>
</td>
<td valign="top">
<input type="color" name="color" id="default_cat_hover" class="changecolor"/>&nbsp;&nbsp;
<input type="hidden" name="default_cat_hover" value="'.aPOSTval('default_cat_hover', $globals['default_cat_hover']).'" id="hidden_default_cat_hover">
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['default_hf_text'].'</span><br />
<span class="sai_exp2">'.$l['default_hf_text_exp'].'</span>
</td>
<td valign="top">
<input type="color" name="color" id="default_hf_text" class="changecolor"/>&nbsp;&nbsp;
<input type="hidden" name="default_hf_text" value="'.aPOSTval('default_hf_text', $globals['default_hf_text']).'" id="hidden_default_hf_text">
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['default_scriptname_text'].'</span><br />
<span class="sai_exp2">'.$l['default_scriptname_text_exp'].'</span>
</td>
<td valign="top">
<input type="color" name="color" id="default_scriptname_text" class="changecolor"/>&nbsp;&nbsp;
<input type="hidden" name="default_scriptname_text" value="'.aPOSTval('default_scriptname_text', $globals['default_scriptname_text']).'" id="hidden_default_scriptname_text">
</td>
</tr>';

if($globals['softpanel'] == 'webuzo'){
$disable_sysapps = $softpanel->getconf('DISABLE_SYSAPPS');
	
echo '<tr>
<td>
<span class="sai_head">'.$l['network_interface'].'</span><br />
<span class="sai_exp2">'.$l['network_interface_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="network_interface" size="30" value="'.aPOSTval('network_interface', $globals['network_interface']).'" />
</td>
</tr>';

if(empty($disable_sysapps)){
echo '<tr>
<td>
<span class="sai_head">'.$l['webuzo_disable_username'].'</span><br />
<span class="sai_exp2">'.$l['webuzo_disable_username_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="webuzo_disable_username" '.POSTchecked('webuzo_disable_username', @$globals['webuzo_disable_username']).' />
</td>
</tr>';
}
}
echo '<tr>
<td>
<span class="sai_head">'.$l['time_format'].'</span><br />
<span class="sai_exp2">'.$l['time_format_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="time_format" size="30" value="'.aPOSTval('time_format', $globals['time_format']).'" />
</td>
</tr>

<tr>
<td colspan="2" align="center"><span class="sai_head">'.$l['timezone'].' : </span>&nbsp; &nbsp; 
	<select name="timezone" style="font-size:11px">
		<option value="-12" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-12' ? 'selected="selected"' : ($globals['timezone'] == -12 ? 'selected="selected"' : '')).' >(GMT -12:00) Eniwetok, Kwajalein</option>
		<option value="-11" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-11' ? 'selected="selected"' : ($globals['timezone'] == -11 ? 'selected="selected"' : '')).' >(GMT -11:00) Midway Island, Samoa</option>
		<option value="-10" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-10' ? 'selected="selected"' : ($globals['timezone'] == -10 ? 'selected="selected"' : '')).' >(GMT -10:00) Hawaii</option>
		<option value="-9" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-9' ? 'selected="selected"' : ($globals['timezone'] == -9 ? 'selected="selected"' : '')).' >(GMT -9:00) Alaska</option>
		<option value="-8" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-8' ? 'selected="selected"' : ($globals['timezone'] == -8 ? 'selected="selected"' : '')).' >(GMT -8:00) Pacific Time (US &amp; Canada)</option>
		<option value="-7" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-7' ? 'selected="selected"' : ($globals['timezone'] == -7 ? 'selected="selected"' : '')).' >(GMT -7:00) Mountain Time (US &amp; Canada)</option>
		<option value="-6" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-6' ? 'selected="selected"' : ($globals['timezone'] == -6 ? 'selected="selected"' : '')).' >(GMT -6:00) Central Time (US &amp; Canada), Mexico City</option>
		<option value="-5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-5' ? 'selected="selected"' : ($globals['timezone'] == -5 ? 'selected="selected"' : '')).' >(GMT -5:00) Eastern Time (US &amp; Canada), Bogota, Lima</option>
		<option value="-4" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-4' ? 'selected="selected"' : ($globals['timezone'] == -4 ? 'selected="selected"' : '')).' >(GMT -4:00) Atlantic Time (Canada), Caracas, La Paz</option>
		<option value="-3.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-3.5' ? 'selected="selected"' : ($globals['timezone'] == -3.5 ? 'selected="selected"' : '')).' >(GMT -3:30) Newfoundland</option>
		<option value="-3" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-3' ? 'selected="selected"' : ($globals['timezone'] == -3 ? 'selected="selected"' : '')).' >(GMT -3:00) Brazil, Buenos Aires, Georgetown</option>
		<option value="-2" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-2' ? 'selected="selected"' : ($globals['timezone'] == -2 ? 'selected="selected"' : '')).' >(GMT -2:00) Mid-Atlantic</option>
		<option value="-1" '.(isset($_POST['timezone']) && $_POST['timezone'] == '-1' ? 'selected="selected"' : ($globals['timezone'] == -1 ? 'selected="selected"' : '')).' >(GMT -1:00 hour) Azores, Cape Verde Islands</option>
		<option value="0" '.(isset($_POST['timezone']) && $_POST['timezone'] == '0' ? 'selected="selected"' : ($globals['timezone'] == 0 ? 'selected="selected"' : '')).' >(GMT) Western Europe Time, London, Lisbon, Casablanca</option>
		<option value="1" '.(isset($_POST['timezone']) && $_POST['timezone'] == '1' ? 'selected="selected"' : ($globals['timezone'] == 1 ? 'selected="selected"' : '')).' >(GMT +1:00 hour) Brussels, Copenhagen, Madrid, Paris</option>
		<option value="2" '.(isset($_POST['timezone']) && $_POST['timezone'] == '2' ? 'selected="selected"' : ($globals['timezone'] == 2 ? 'selected="selected"' : '')).' >(GMT +2:00) Kaliningrad, South Africa</option>
		<option value="3" '.(isset($_POST['timezone']) && $_POST['timezone'] == '3' ? 'selected="selected"' : ($globals['timezone'] == 3 ? 'selected="selected"' : '')).' >(GMT +3:00) Baghdad, Riyadh, Moscow, St. Petersburg</option>
		<option value="3.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '3.5' ? 'selected="selected"' : ($globals['timezone'] == 3.5 ? 'selected="selected"' : '')).' >(GMT +3:30) Tehran</option>
		<option value="4" '.(isset($_POST['timezone']) && $_POST['timezone'] == '4' ? 'selected="selected"' : ($globals['timezone'] == 4 ? 'selected="selected"' : '')).' >(GMT +4:00) Abu Dhabi, Muscat, Baku, Tbilisi</option>
		<option value="4.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '4.5' ? 'selected="selected"' : ($globals['timezone'] == 4.5 ? 'selected="selected"' : '')).' >(GMT +4:30) Kabul</option>
		<option value="5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '5' ? 'selected="selected"' : ($globals['timezone'] == 5 ? 'selected="selected"' : '')).' >(GMT +5:00) Ekaterinburg, Islamabad, Karachi, Tashkent</option>
		<option value="5.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '5.5' ? 'selected="selected"' : ($globals['timezone'] == 5.5 ? 'selected="selected"' : '')).' >(GMT +5:30) Bombay, Calcutta, Madras, New Delhi</option>
		<option value="6" '.(isset($_POST['timezone']) && $_POST['timezone'] == '6' ? 'selected="selected"' : ($globals['timezone'] == 6 ? 'selected="selected"' : '')).' >(GMT +6:00) Almaty, Dhaka, Colombo</option>
		<option value="6.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '6.5' ? 'selected="selected"' : ($globals['timezone'] == 6.5 ? 'selected="selected"' : '')).' >(GMT +6:30) Yangon, Myanmar</option>
		<option value="7" '.(isset($_POST['timezone']) && $_POST['timezone'] == '7' ? 'selected="selected"' : ($globals['timezone'] == 7 ? 'selected="selected"' : '')).' >(GMT +7:00) Bangkok, Hanoi, Jakarta</option>
		<option value="8" '.(isset($_POST['timezone']) && $_POST['timezone'] == '8' ? 'selected="selected"' : ($globals['timezone'] == 8 ? 'selected="selected"' : '')).' >(GMT +8:00) Beijing, Perth, Singapore, Hong Kong, Taiwan</option>
		<option value="9" '.(isset($_POST['timezone']) && $_POST['timezone'] == '9' ? 'selected="selected"' : ($globals['timezone'] == 9 ? 'selected="selected"' : '')).' >(GMT +9:00) Tokyo, Seoul, Osaka, Sapporo, Yakutsk</option>
		<option value="9.5" '.(isset($_POST['timezone']) && $_POST['timezone'] == '9.5' ? 'selected="selected"' : ($globals['timezone'] == 9.5 ? 'selected="selected"' : '')).' >(GMT +9:30) Adelaide, Darwin</option>
		<option value="10" '.(isset($_POST['timezone']) && $_POST['timezone'] == '10' ? 'selected="selected"' : ($globals['timezone'] == 10 ? 'selected="selected"' : '')).' >(GMT +10:00) Eastern Australia, Guam, Vladivostok</option>
		<option value="11" '.(isset($_POST['timezone']) && $_POST['timezone'] == '11' ? 'selected="selected"' : ($globals['timezone'] == 11 ? 'selected="selected"' : '')).' >(GMT +11:00) Magadan, Solomon Islands, New Caledonia</option>
		<option value="12" '.(isset($_POST['timezone']) && $_POST['timezone'] == '12' ? 'selected="selected"' : ($globals['timezone'] == 12 ? 'selected="selected"' : '')).' >(GMT +12:00) Auckland, Wellington, Fiji, Kamchatka</option>
	</select>
</td>
</tr>';
}

echo '
</table>
</td>
</tr>

<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['end_user_set'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['eu_news_off'].'</span><br />
<span class="sai_exp2">'.$l['eu_news_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="eu_news_off" '.POSTchecked('eu_news_off', @$globals['eu_news_off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['no_prefill'].'</span><br />
<span class="sai_exp2">'.$l['no_prefill_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="no_prefill" '.POSTchecked('no_prefill', @$globals['no_prefill']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['random_username'].'</span><br />
<span class="sai_exp2">'.$l['random_username_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="random_username" '.POSTchecked('random_username', @$globals['random_username']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['random_pass'].'</span><br />
<span class="sai_exp2">'.$l['random_pass_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="random_pass" '.POSTchecked('random_pass', @$globals['random_pass']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['random_dbprefix'].'</span><br />
<span class="sai_exp2">'.$l['random_dbprefix_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="random_dbprefix" '.POSTchecked('random_dbprefix', @$globals['random_dbprefix']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_demo_link'].'</span><br />
<span class="sai_exp2">'.$l['off_demo_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_demo_link" '.POSTchecked('off_demo_link', @$globals['off_demo_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_screenshot_link'].'</span><br />
<span class="sai_exp2">'.$l['off_screenshot_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_screenshot_link" '.POSTchecked('off_screenshot_link', @$globals['off_screenshot_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_rating_link'].'</span><br />
<span class="sai_exp2">'.$l['off_rating_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_rating_link" '.POSTchecked('off_rating_link', @$globals['off_rating_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_review_link'].'</span><br />
<span class="sai_exp2">'.$l['off_review_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_review_link" '.POSTchecked('off_review_link', @$globals['off_review_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_email_link'].'</span><br />
<span class="sai_exp2">'.$l['off_email_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_email_link" '.POSTchecked('off_email_link', $globals['off_email_link']).' />
</td>
</tr>';

if(!defined('SOFTRESELLER')){
echo '
<tr>
<td width="55%">
<span class="sai_head">'.$l['eu_email_off'].'</span><br />
<span class="sai_exp2">'.$l['eu_email_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="eu_email_off" '.POSTchecked('eu_email_off', @$globals['eu_email_off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['empty_username'].'</span><br />
<span class="sai_exp2">'.$l['empty_username_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="empty_username" '.POSTchecked('empty_username', @$globals['empty_username']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['empty_pass'].'</span><br />
<span class="sai_exp2">'.$l['empty_pass_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="empty_pass" '.POSTchecked('empty_pass', @$globals['empty_pass']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['comp_output'].'</span><br />
<span class="sai_exp2">'.$l['comp_output_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="gzip" '.POSTchecked('gzip', $globals['gzip']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_remove_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_remove_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_remove_mail" '.POSTchecked('off_remove_mail', $globals['off_remove_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_backup_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_backup_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_backup_mail" '.POSTchecked('off_backup_mail', $globals['off_backup_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_install_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_install_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_install_mail" '.POSTchecked('off_install_mail', $globals['off_install_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_edit_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_edit_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_edit_mail" '.POSTchecked('off_edit_mail', $globals['off_edit_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_clone_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_clone_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_clone_mail" '.POSTchecked('off_clone_mail', $globals['off_clone_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_restore_mail'].'</span><br />
<span class="sai_exp2">'.$l['off_restore_mail_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_restore_mail" '.POSTchecked('off_restore_mail', $globals['off_restore_mail']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_customize_theme'].'</span><br />
<span class="sai_exp2">'.$l['off_customize_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_customize_theme" '.POSTchecked('off_customize_theme', $globals['off_customize_theme']).' />
</td>
</tr>';
}

if(!empty($softpanel->native_ui)){
echo '<tr>
<td>
<span class="sai_head">'.$l['panel_hf'].'</span><br />
<span class="sai_exp2">'.$l['panel_hf_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="panel_hf" size="30" '.POSTchecked('panel_hf', @$globals['panel_hf']).' />
</td>
</tr>';
}

if(!defined('SOFTRESELLER')){

echo '<tr>
<td>
<span class="sai_head">'.$l['off_sync_link'].'</span><br />
<span class="sai_exp2">'.$l['off_sync_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_sync_link" '.POSTchecked('off_sync_link', @$globals['off_sync_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_panel_link'].'</span><br />
<span class="sai_exp2">'.$l['off_panel_link_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_panel_link" '.POSTchecked('off_panel_link', @$globals['off_panel_link']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['perl_scripts'].'</span><br />
<span class="sai_exp2">'.$l['perl_scripts_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="perl_scripts" '.POSTchecked('perl_scripts', @$globals['perl_scripts']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['nolabels'].'</span><br />
<span class="sai_exp2">'.$l['nolabels_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="nolabels" size="30" '.POSTchecked('nolabels', $globals['nolabels']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['show_cscript_in_top'].'</span><br />
<span class="sai_exp2">'.$l['show_cscript_in_top_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="show_cscript_in_top" '.POSTchecked('show_cscript_in_top', @$globals['show_cscript_in_top']).' />
</td>
</tr>';

// Classes are only avaialable to Premium License
if(!empty($globals['lictype'])){
echo '<tr>
<td>
<span class="sai_head">'.$l['disable_classes'].'</span><br />
<span class="sai_exp2">'.$l['disable_classes_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_classes" size="30" '.POSTchecked('disable_classes', @$globals['disable_classes']).' />
</td>
</tr>';
}

if(!empty($softpanel->user_mod_dir)){
echo '<tr>
<td>
<span class="sai_head">'.$l['user_mod_dir'].'</span><br />
<span class="sai_exp2">'.$l['user_mod_dir_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="user_mod_dir" '.POSTchecked('user_mod_dir', $globals['user_mod_dir']).' />
</td>
</tr>';
}

echo '<tr>
<td>
<span class="sai_head">'.$l['disable_reseller_panel'].'</span><br />
<span class="sai_exp2">'.$l['disable_reseller_panel_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_reseller_panel" size="30" '.POSTchecked('disable_reseller_panel', @$globals['disable_reseller_panel']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['pass_strength'].'</span><br />
<span class="sai_exp2">'.$l['pass_strength_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="pass_strength" size="30" value="'.aPOSTval('pass_strength', $globals['pass_strength']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['admin_prefix'].'</span><br />
<span class="sai_exp2">'.$l['admin_prefix_exp'].'</span>
</td>
<td valign="top">
<select id="admin_prefix" name="admin_prefix" onchange="show_ud(this);">

	<option value="" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "") ? 'selected="selected"' : '')).'>'.$l['ap_none'].'</option>
	
	<option value="username" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "username") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "username") ? 'selected="selected"' : '')).'>'.$l['ap_username'].'</option>
	
	<option value="domain" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "domain") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] == "domain") ? 'selected="selected"' : '')).'>'.$l['ap_domain'].'</option>
	
	<option value="user_defined" '.((isset($_POST['admin_prefix']) && $_POST['admin_prefix'] == "user_defined") ? 'selected="selected"' : ((!isset($_POST['admin_prefix']) && $globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "") ? 'selected="selected"' : '')).'>'.$l['ap_admin_defined'].'</option>
	
</select>&nbsp;&nbsp;&nbsp;
<input type="text" id="admin_prefix_ud" name="admin_prefix_ud" '.((!empty($_POST['admin_prefix_ud']) && $_POST['admin_prefix'] != "" && $_POST['admin_prefix'] != "username" && $_POST['admin_prefix'] != "domain") ? 'value="'.$_POST['admin_prefix_ud'].'" style=""' : ((!isset($_POST['admin_prefix']) && ($globals['admin_prefix'] != "username" && $globals['admin_prefix'] != "domain" && $globals['admin_prefix'] != "")) ? 'value="'.$globals['admin_prefix'].'" style=""' : 'style="display:none"')).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['disable_clone'].'</span><br />
<span class="sai_exp2">'.$l['disable_clone_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_clone" '.POSTchecked('disable_clone', @$globals['disable_clone']).' />
</td>
</tr>';

// At the moment only for H-Sphere we are providing this option
if($globals['softpanel'] == 'hsphere'){
echo '<tr>
<td>
<span class="sai_head">'.$l['ephp_bin'].'</span><br />
<span class="sai_exp2">'.$l['ephp_bin_exp'].sphpbin().'</span>
</td>
<td valign="top">
<input type="text" name="ephp_bin" value="'.aPOSTval('ephp_bin', $globals['ephp_bin']).'" size="30" />
</td>
</tr>
';
}

}

if($globals['softpanel'] == 'ampps'){
echo '<tr>
<td>
<span class="sai_head">'.$l['default_domain_path'].'</span><br />
<span class="sai_exp2">'.$l['default_domain_path_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="adomain_path" size="30" value="'.aPOSTval('adomain_path', $globals['adomain_path']).'" />
</td>
</tr>';
}

if($globals['softpanel'] != 'ampps' && !empty($globals['ampps_enabled']) && !empty($globals['lictype'])){
echo '<tr>
<td>
<span class="sai_head">'.$l['no_ampps_download'].'</span><br />
<span class="sai_exp2">'.$l['no_ampps_download_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="no_ampps" '.POSTchecked('no_ampps', @$globals['no_ampps']).' />
</td>
</tr>';
}


if(!defined('SOFTRESELLER')){

echo '<tr>
<td>
<span class="sai_head">'.$l['no_strong_mysql_pass'].'</span><br />
<span class="sai_exp2">'.$l['no_strong_mysql_pass_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="no_strong_mysql_pass" '.POSTchecked('no_strong_mysql_pass', @$globals['no_strong_mysql_pass']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['pre_download_all'].'</span><br />
<span class="sai_exp2">'.$l['pre_download_all_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="pre_download_all" '.POSTchecked('pre_download_all', @$globals['pre_download_all']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['disable_backup_restore'].'</span><br />
<span class="sai_exp2">'.$l['disable_backup_restore_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_backup_restore" size="30" '.POSTchecked('disable_backup_restore', @$globals['disable_backup_restore']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['disable_backup_upgrade'].'</span><br />
<span class="sai_exp2">'.$l['disable_backup_upgrade_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_backup_upgrade" '.POSTchecked('disable_backup_upgrade', @$globals['disable_backup_upgrade']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['disable_auto_backup'].'</span><br />
<span class="sai_exp2">'.$l['disable_auto_backup_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="disable_auto_backup" '.POSTchecked('disable_auto_backup', @$globals['disable_auto_backup']).' />'.$l['auto_backup_all'].'<br />
<input type="checkbox" name="disable_auto_backup_daily" '.POSTchecked('disable_auto_backup_daily', @$globals['disable_auto_backup_daily']).' />'.$l['auto_backup_daily'].'<br />
<input type="checkbox" name="disable_auto_backup_weekly" '.POSTchecked('disable_auto_backup_weekly', @$globals['disable_auto_backup_weekly']).' />'.$l['auto_backup_weekly'].'<br />
<input type="checkbox" name="disable_auto_backup_monthly" '.POSTchecked('disable_auto_backup_monthly', @$globals['disable_auto_backup_monthly']).' />'.$l['auto_backup_monthly'].'
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['auto_backup_limit'].'</span><br />
<span class="sai_exp2">'.$l['auto_backup_limit_exp'].'</span>
</td>
<td valign="top">
<select name="auto_backup_limit">';    
    for($i=0; $i<=10; $i++){
        echo '<option value="'.$i.'" '.(empty($_POST['auto_backup_limit']) && $globals['auto_backup_limit'] == $i ? 'selected="selected"' : (trim($_POST['auto_backup_limit']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['auto_backup_unlimited'] : $i).'</option>';        
    }	
echo '</select>
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['max_backups'].'</span><br />
<span class="sai_exp2">'.$l['max_backups_exp'].'</span>
</td>
<td valign="top">
<select name="max_backups">';
    for($i=0; $i<=10; $i++){
        echo '<option value="'.$i.'" '.(empty($_POST['max_backups']) && $globals['max_backups'] == $i ? 'selected="selected"' : (trim($_POST['max_backups']) == $i ? 'selected="selected"' : '') ).'>'.(empty($i) ? $l['max_backups_unlimited'] : $i).'</option>';        
    }	
echo '</select>
</td>
</tr>';

if(!aefer() && !ent()){
echo '<tr>
<td>
<span class="sai_head">'.$l['backups_expire'].'</span><br />
<span class="sai_exp2">'.$l['backups_expire_exp'].'</span>
</td>
<td valign="top">
<input type="text" id="backups_expire" name="backups_expire" value="'.aPOSTval('backups_expire', @$globals['backups_expire']).'" onblur="isNumber(this)"/>&nbsp; days
</td>
</tr>';
}

echo '<tr>
<td>
<span class="sai_head">'.$l['off_upgrade_plugins'].'</span><br />
<span class="sai_exp2">'.$l['off_upgrade_plugins_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_upgrade_plugins" '.POSTchecked('off_upgrade_plugins', @$globals['off_upgrade_plugins']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_upgrade_themes'].'</span><br />
<span class="sai_exp2">'.$l['off_upgrade_themes_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off_upgrade_themes" '.POSTchecked('off_upgrade_themes', @$globals['off_upgrade_themes']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['enable_auto_upgrade'].'</span><br />
<span class="sai_exp2">'.$l['enable_auto_upgrade_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="enable_auto_upgrade" '.POSTchecked('enable_auto_upgrade', @$globals['enable_auto_upgrade']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['force_auto_upgrade'].'</span><br />
<span class="sai_exp2">'.$l['force_auto_upgrade_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="force_auto_upgrade" '.POSTchecked('force_auto_upgrade', @$globals['force_auto_upgrade']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['enc_db_pass'].'</span><br />
<span class="sai_exp2">'.$l['enc_db_pass_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="enc_db_pass" '.POSTchecked('enc_db_pass', @$globals['enc_db_pass']).' />
</td>
</tr>

<td>
<span class="sai_head">'.$l['set_backup_dir'].'</span><br />
<span class="sai_exp2">'.$l['set_backup_dir_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="set_backup_dir" size="20" value="'.aPOSTval('set_backup_dir', @$globals['set_backup_dir']).'" />
</td>
</tr>';

if(asperapp(1, 0, 0)){ // Only for Softaculous
	echo '
<tr>
<td>
<span class="sai_head">'.$l['default_landing'].'</span><br />
<span class="sai_exp2">'.$l['default_landing_exp'].'</span>
</td>
<td valign="top">
<select name="default_landing">
<option value="" '.(!isset($_POST['default_landing']) && empty($globals['default_landing']) ? 'selected="selected"' : '').'>'.$l['top_scripts'].'</option>
<option value="installations" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'installations' ? 'selected="selected"' : ($globals['default_landing'] == 'installations' ? 'selected="selected"' : '')).'>'.$l['all_ins'].'</option>
<option value="outdated_ins" '.(isset($_POST['default_landing']) && $_POST['default_landing'] == 'outdated_ins' ? 'selected="selected"' : ($globals['default_landing'] == 'outdated_ins' ? 'selected="selected"' : '')).'>'.$l['outdated_ins'].'</option>
</select>
</td>
</tr>';
}

if(aefer()){
	echo '<tr>
	<td>
	<span class="sai_head">'.$l['no_ftp_encrypted'].'</span><br />
	<span class="sai_exp2">'.$l['no_ftp_encrypted_exp'].'</span>
	</td>
	<td valign="top">
	<input type="checkbox" name="no_ftp_encrypted" '.POSTchecked('no_ftp_encrypted', @$globals['no_ftp_encrypted']).' />
	</td>
	</tr>
	
	<tr>
	<td>
	<span class="sai_head">'.$l['no_add_domain'].'</span><br />
	<span class="sai_exp2">'.$l['no_add_domain_exp'].'</span>
	</td>
	<td valign="top">
	<input type="checkbox" name="no_add_domain" '.POSTchecked('no_add_domain', @$globals['no_add_domain']).' />
	</td>
	</tr>
	
	<tr>
	<td>
	<span class="sai_head">'.$l['no_prefill_db'].'</span><br />
	<span class="sai_exp2">'.$l['no_prefill_db_exp'].'</span>
	</td>
	<td valign="top">
	<input type="checkbox" name="no_prefill_db" '.POSTchecked('no_prefill_db', @$globals['no_prefill_db']).' />
	</td>
	</tr>';
}

if(aefer() || ent()){
	echo '<tr>
	<td>
	<span class="sai_head">'.$l['session_timeout'].'</span><br />
	<span class="sai_exp2">'.$l['session_timeout_exp'].'</span>
	</td>
	<td valign="top">
	<input type="text" id="session_timeout" name="session_timeout" value="'.aPOSTval('session_timeout', @$globals['session_timeout']).'" onblur="isNumber(this)"/>
	</td>
	</tr>';
}

}

echo '</table>
</td>
</tr>';


if(!defined('SOFTRESELLER')){

// PFX Settings will be here
if(!empty($globals['lictype'])){
	
echo '<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['pfx_settings'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['eu_enable_themes'].'</span><br />
<span class="sai_exp2">'.$l['eu_enable_themes_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="eu_enable_themes" '.POSTchecked('eu_enable_themes', @$globals['eu_enable_themes']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['eu_themes_premium'].'</span><br />
<span class="sai_exp2">'.$l['eu_themes_premium_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="eu_themes_premium" '.POSTchecked('eu_themes_premium', @$globals['eu_themes_premium']).' />
</td>
</tr>

</table>
</td>
</tr>';
}

echo '
<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['update_settings'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td valign="top" <td width="55%">
<span class="sai_head">'.$l['auto_upd_softac'].'</span><br />
<span class="sai_exp2">'.$l['auto_upd_softac_exp'].'</span>
</td>
<td valign="top">
<input type="radio" name="update" value="0" '.POSTradio('update', 0, $globals['update']).' /> '.$l['never_update'].' <br />
<input type="radio" name="update" value="1" '.POSTradio('update', 1, $globals['update']).' /> '.$l['stable'].' <br />
<input type="radio" name="update" value="2" '.POSTradio('update', 2, $globals['update']).' /> '.$l['release_cand'].'
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['auto_upd_soft'].'</span><br />
<span class="sai_exp2">'.$l['auto_upd_soft_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="update_softs" '.POSTchecked('update_softs', $globals['update_softs']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['auto_add_soft'].'</span><br />
<span class="sai_exp2">'.$l['auto_add_soft_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="add_softs" '.POSTchecked('add_softs', $globals['add_softs']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['email_upd_soft'].'</span><br />
<span class="sai_exp2">'.$l['email_upd_soft_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="email_update" '.POSTchecked('email_update', $globals['email_update']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['email_upd_softs'].'</span><br />
<span class="sai_exp2">'.$l['email_upd_softs_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="email_update_softs" '.POSTchecked('email_update_softs', $globals['email_update_softs']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['cron_time'].'</span><br />
<span class="sai_exp2">'.$l['cron_time_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="cron_time" size="30" value="'.aPOSTval('cron_time', $globals['cron_time']).'" />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['php_bin'].'</span><br />
<span class="sai_exp2">'.$l['php_bin_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="php_bin" size="30" value="'.aPOSTval('php_bin', $globals['php_bin']).'" />
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['remove_options'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width = "55%">
<span class="sai_head">'.$l['remove_dir'].'</span><br />
<span class="sai_exp2">'.$l['remove_dir_exp'].'</span><br />
</td>
<td valign="top">
<input type="checkbox" name="remove_dir" '.POSTchecked('remove_dir', $globals['remove_dir']).' />
</td>
</tr>

<tr>
<td width = "55%">
<span class="sai_head">'.$l['remove_db'].'</span><br />
<span class="sai_exp2">'.$l['remove_db_exp'].'</span><br />
</td>
<td valign="top">
<input type="checkbox" name="remove_db" '.POSTchecked('remove_db', $globals['remove_db']).' />
</td>
</tr>

<tr>
<td width = "55%">
<span class="sai_head">'.$l['remove_datadir'].'</span><br />
<span class="sai_exp2">'.$l['remove_datadir_exp'].'</span><br />
</td>
<td valign="top">
<input type="checkbox" name="remove_datadir" '.POSTchecked('remove_datadir', $globals['remove_datadir']).' />
</td>
</tr>

<tr>
<td width = "55%">
<span class="sai_head">'.$l['remove_wwwdir'].'</span><br />
<span class="sai_exp2">'.$l['remove_wwwdir_exp'].'</span><br />
</td>
<td valign="top">
<input type="checkbox" name="remove_wwwdir" '.POSTchecked('remove_wwwdir', $globals['remove_wwwdir']).' />
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['social_media'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['install_tweet_off'].'</span><br />
<span class="sai_exp2">'.$l['install_tweet_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="install_tweet_off" '.POSTchecked('install_tweet_off', $globals['install_tweet_off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['install_tweet_msg'].'</span><br />
<span class="sai_exp2">'.$l['install_tweet_msg_exp'].'</span><br />
<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
</td>
<td valign="top">
<input type="text" name="install_tweet" size="30" value="'.aPOSTval('install_tweet', (!empty($globals['install_tweet']) ? $globals['install_tweet'] : $l['install_tweet'])).'" />
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['upgrade_tweet_off'].'</span><br />
<span class="sai_exp2">'.$l['upgrade_tweet_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="upgrade_tweet_off" '.POSTchecked('upgrade_tweet_off', $globals['upgrade_tweet_off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['upgrade_tweet_msg'].'</span><br />
<span class="sai_exp2">'.$l['upgrade_tweet_msg_exp'].'</span><br />
<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
</td>
<td valign="top">
<input type="text" name="upgrade_tweet" size="30" value="'.aPOSTval('upgrade_tweet', (!empty($globals['upgrade_tweet']) ? $globals['upgrade_tweet'] : $l['upgrade_tweet'])).'" />
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['clone_tweet_off'].'</span><br />
<span class="sai_exp2">'.$l['clone_tweet_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="clone_tweet_off" '.POSTchecked('clone_tweet_off', $globals['clone_tweet_off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['clone_tweet_msg'].'</span><br />
<span class="sai_exp2">'.$l['clone_tweet_msg_exp'].'</span><br />
<span style="cursor:pointer;" onmouseover="showtip(\''.$l['tweet_vars'].'\', this)">'.$l['tweet_vars_link'].'</span>
</td>
<td valign="top">
<input type="text" name="clone_tweet" size="30" value="'.aPOSTval('clone_tweet', (!empty($globals['clone_tweet']) ? $globals['clone_tweet'] : $l['clone_tweet'])).'" />
</td>
</tr>

</table>
</td>
</tr>

<tr>
<td colspan="2">
<table border="0" width="100%" cellpadding="6" class="sai_reviewform" style="padding:7px 10px;">
<tr>
<td colspan="2">
<table width="110%" border="0" class="sai_ribboneffect">
<tr>
<td width="2%"></td>
<td valign="top"><br />
<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['disable_soft'].'</b></font>
</td>
</tr>
</table>
</td>
</tr>

<tr>
<td width="55%">
<span class="sai_head">'.$l['soft_off'].'</span><br />
<span class="sai_exp2">'.$l['soft_off_exp'].'</span>
</td>
<td valign="top">
<input type="checkbox" name="off" '.POSTchecked('off', $globals['off']).' />
</td>
</tr>

<tr>
<td>
<span class="sai_head">'.$l['off_sub'].'</span>
</td>
<td valign="top">
<input type="text" name="off_subject" size="30" value="'.aPOSTval('off_subject', $globals['off_subject']).'" />
</td>
</tr>

<tr>
<td valign="top">
<span class="sai_head">'.$l['off_message'].'</span>
</td>
<td valign="top">
<textarea name="off_message" cols="30" rows="6">'.aPOSTval('off_message', $globals['off_message']).'</textarea>
</td>
</tr>';
}
echo '</table>

<p align="center"><input type="submit" name="editsettings" value="'.$l['edit_settings'].'" class="sai_graybluebut"/></p>


</form>
<script>
function updateColor(color, id) {
	
	var hexColor = "transparent";
	if(color) {
		hexColor = color.toHexString();
	}
	if(hexColor == "transparent") return;
	
	// Set the hidden value so that we can save the settings
	$("#default_hf_bg").val("1");
	
	// For changing text colors of category heading
	if(id == "default_hf_text"){
		$(".soft_cathead a").css("color", hexColor);
		$(".soft_nav a").css("color", hexColor);
		$(".fa").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_text").val(hexColor);
	}
	
	// For changing text colors of category heading hover color
	if(id == "default_cat_hover"){
		try{
			$(".soft_cathead:hover, .soft_cathead_slide:hover").css("background-color", hexColor);
			//$(".soft_cathead_slide:hover").css("background-color", hexColor);
		
			// set the hidden value so that it can be saved
			$("#hidden_default_cat_hover").val(hexColor);
		}catch(e){
			// do nothing
		}
	}
	
	// For changing text colors of script names
	if(id == "default_scriptname_text"){
		$(".softlinks li a").css("color", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_scriptname_text").val(hexColor);
	}
	
	// For changing background color
	if(id == "default_hf_bg"){
		$(".left_panel").css("background-image", "none");
		$(".left_panel").css("background-color", hexColor);
		$(".soft_nav").css("background", hexColor);
		
		// set the hidden value so that it can be saved
		$("#hidden_default_hf_bg").val(hexColor);
	}
	
}

var pallete_array = [
		["rgb(0, 0, 0)", "rgb(67, 67, 67)", "rgb(102, 102, 102)", /*"rgb(153, 153, 153)","rgb(183, 183, 183)",*/
		"rgb(204, 204, 204)", "rgb(217, 217, 217)", /*"rgb(239, 239, 239)", "rgb(243, 243, 243)",*/ "rgb(255, 255, 255)"],
		["rgb(152, 0, 0)", "rgb(255, 0, 0)", "rgb(255, 153, 0)", "rgb(255, 255, 0)", "rgb(0, 255, 0)",
		"rgb(0, 255, 255)", "rgb(74, 134, 232)", "rgb(0, 0, 255)", "rgb(153, 0, 255)", "rgb(255, 0, 255)"],
		["rgb(230, 184, 175)", "rgb(244, 204, 204)", "rgb(252, 229, 205)", "rgb(255, 242, 204)", "rgb(217, 234, 211)",
		"rgb(208, 224, 227)", "rgb(201, 218, 248)", "rgb(207, 226, 243)", "rgb(217, 210, 233)", "rgb(234, 209, 220)",
		"rgb(221, 126, 107)", "rgb(234, 153, 153)", "rgb(249, 203, 156)", "rgb(255, 229, 153)", "rgb(182, 215, 168)",
		"rgb(162, 196, 201)", "rgb(164, 194, 244)", "rgb(159, 197, 232)", "rgb(180, 167, 214)", "rgb(213, 166, 189)",
		"rgb(204, 65, 37)", "rgb(224, 102, 102)", "rgb(246, 178, 107)", "rgb(255, 217, 102)", "rgb(147, 196, 125)",
		"rgb(118, 165, 175)", "rgb(109, 158, 235)", "rgb(111, 168, 220)", "rgb(142, 124, 195)", "rgb(194, 123, 160)",
		"rgb(166, 28, 0)", "rgb(204, 0, 0)", "rgb(230, 145, 56)", "rgb(241, 194, 50)", "rgb(106, 168, 79)",
		"rgb(69, 129, 142)", "rgb(60, 120, 216)", "rgb(61, 133, 198)", "rgb(103, 78, 167)", "rgb(166, 77, 121)",
		/*"rgb(133, 32, 12)", "rgb(153, 0, 0)", "rgb(180, 95, 6)", "rgb(191, 144, 0)", "rgb(56, 118, 29)",
		"rgb(19, 79, 92)", "rgb(17, 85, 204)", "rgb(11, 83, 148)", "rgb(53, 28, 117)", "rgb(116, 27, 71)",*/
		"rgb(91, 15, 0)", "rgb(102, 0, 0)", "rgb(120, 63, 4)", "rgb(127, 96, 0)", "rgb(39, 78, 19)",
		"rgb(12, 52, 61)", "rgb(28, 69, 135)", "rgb(7, 55, 99)", "rgb(32, 18, 77)", "rgb(76, 17, 48)"]
	];

$(function() {
	$("#default_hf_bg").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_bg']) ? $globals['default_hf_bg'] : '#333333').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_cat_hover").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_cat_hover']) ? $globals['default_cat_hover'] : '#4096ee').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_hf_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_hf_text']) ? $globals['default_hf_text'] : '#F2F2F2').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});

$(function() {
	$("#default_scriptname_text").spectrum({
		allowEmpty:true,
		color : "'.(!empty($globals['default_scriptname_text']) ? $globals['default_scriptname_text'] : '#FFFFFF').'",
		showInput: true,
		className: "full-spectrum",
		showInitial: true,
		showPalette: true,
		showSelectionPalette: true,
		maxPaletteSize: 10,
		preferredFormat: "hex",
		localStorageKey: "soft.demo",
		move: function (color) {
			updateColor(color, this.id);
		},
		hide: function (color) {
			updateColor(color, this.id);
		},
		palette: pallete_array
	});
});
</script>';

softfooter();

}

?>