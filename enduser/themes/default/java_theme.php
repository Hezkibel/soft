<?php

//////////////////////////////////////////////////////////////
//===========================================================
// java_theme.php
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


function java_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $allcatwise;
global $software, $soft, $info, $settings, $init_tab, $dbtype, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $cron, $datadir, $ajaxdb, $ajaxdbexists, $overwrite_option, $protocols, $nopackage, $www, $ajaxhttpsexists, $ajaxhttps, $new_insid;

if(optGET('notify')){	
	
	get_softaculous_file('http://www.softaculous.com/notifyversion.php?softid="'.$soft.'"');
	echo 1;
	return true;

}

if(optGET('ajaxdownload') && !empty($nopackage)){	
	
	// Try to download the package
	if(method_exists($softpanel, 'updatesoftwares')){
		$softpanel->updatesoftwares($soft, 0, 0, 1);
		echo 1;
		return true;
	}
	
	// False call
	echo 0;
	return false;

}

// Give the staus
if(optGET('ajaxstatus')){
	
	$_status = soft_progress(optGET('ajaxstatus'));
	
	$tmp_status = unserialize($_status[1]);
	$_status[1] = $tmp_status['current_status'];
	
	if(!empty($_status)){
		echo implode('|', $_status);
		return true;
	}
	
	// False call
	echo 0;
	return false;

}


if(!empty($ajaxdb)){
	echo $ajaxdbexists;
	return true;
}

if(!empty($ajaxhttps)){
	echo $ajaxhttpsexists;
	return true;
}

// Auto Installation responses
if(isset($_GET['autoinstall'])){
	
	// Installed successfully
	if(!empty($installed)){
		echo 'installed';
		return true;
	}
	
	// Are there errors
	if(!empty($error)){
		echo serialize($error);
		return false;
	}
}

//First add the installation info
if(empty($installed)){
	
	$random_username = true;
	// This is to see if a script has predefined username and cannot be changed
	foreach($settings as $ik => $iv){		
		if($ik == 'hidden') continue;
		foreach($iv as $ikk => $ivv){				
			if($ikk == 'admin_username' && preg_match('/disabled=\"disabled\"/ie', $ivv['tag'])){
				$random_username = false;
			}			
		}
	}
	
	$info['install'] = '<div id="fadeout_div"><form accept-charset="'.$globals['charset'].'" name="installsoftware" method="post" action="" onsubmit="return checkform();" id="installsoftware">

'.error_handle($error, "100%", 0, 1).'

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function toggle_advoptions(){
	if ($("#advoptions").is(":hidden")){
		$("#advoptions").slideDown("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
	}
	else{
		$("#advoptions").slideUp("slow");
		$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
	}
}

function plus_onmouseover(){
	$("#plus").attr("src", "'.$theme['images'].'plus_hover.gif");
}

function plus_onmouseout(){
	$("#plus").attr("src", "'.$theme['images'].'plus.gif");
}

function display_pass_strength(score, per){
	
	var lang;
	//disp_per = $("#pass-strength-hidden").val();
	
	if(typeof per == "undefined") per = 0;
	
	if(score == "bad") lang = "'.$l['bad'].'";
	if(score == "good") lang = "'.$l['good'].'";
	if(score == "strong") lang = "'.$l['strong'].'";
	if(score == "short") lang = "'.$l['short'].'";
	if(score == "strength_indicator") lang = "'.$l['strength_indicator'].'";
	
	$("#pass-strength-result").addClass(score).html( lang+" ("+per+"/100)" );
}

function checkform(dosubmit){
	
	// If admin has set the password strength than only we will check for it.
	'.(!empty($globals['pass_strength']) ? '
	//alert($("#pass-strength-hidden").val());
	if(parseInt($("#pass-strength-hidden").val()) < '.$globals['pass_strength'].'){
		alert("'.$l['err_pass_strength'].'"+'.$globals['pass_strength'].');
		return false;
	}' : '').'
	
	try{
		if(!formcheck()){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	$_("softsubmitbut").disabled = true;	
	
	if(!get_package()){
		return false;
	}
	
	if(useprog){
		
		// Send a request to check the status
		progressbar.start();
		
		// Return false so that the form is not submitted
		return false;
	
	// This is OLD School !
	}else{		
		if(dosubmit == 1){			
			$_("installsoftware").submit();	
		}
		show_msg("'.$l['installing'].'");
	}
	
	return true;
	
};

var progressbar = {
	timer: 0,
	total_width: 0,	
	status_key: "",
	synctimer: 0,
	fadeout_div: "#fadeout_div",
	win_div: "#install_win",
	progress_div: "#progress_bar",
	formid: "#installsoftware",
	frequency: 8000,
	
	current: function(){
		try{
			var tmp_cur = Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
			if(tmp_cur > 100){
				tmp_cur = 99;
			}
			return tmp_cur;
		}catch(e){
			return -1;	
		}
	},
	
	reset: function(){ try{
		clearTimeout(this.timer);
		$_("progress_color").width = 1;
	}catch(e){ }},
	
	move: function(dest, speed, todo){ try{
		var cur = this.current();
		if(cur < 0){
			clearTimeout(this.timer);
			return false;
		}
		var cent = cur + 1;
		var new_width = cent/100*this.total_width;
		if(new_width < 1){
			new_width = 1;
		}
		//alert(new_width+" "+dest+" "+cent);
		
		$_("progress_color").width = new_width;
		$_("progress_percent").innerHTML = "("+cent+" %)";
		
		if(cent < dest){
			this.timer = setTimeout("progressbar.move("+dest+", "+speed+")", speed);
		}else{
			eval(todo);	
		}
	}catch(e){ }},
	
	text: function(txt){ try{
		$_("progress_txt").innerHTML = txt;
	}catch(e){ }},
	
	sync: function(){
		if(progressbar.status_key.length < 2){
			return false;
		}
		$.ajax({
			url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
			type: "GET",
			success: function(data){
				if(data == 0) return false;
				var tmp = data.split("|");
				var cur = progressbar.current();
				tmp[2] = (3000/(tmp[0]-cur));
				//alert(tmp);
				if(tmp[0] > cur){
					if(parseInt(tmp[2]) == 0){
						tmp[2] = 800;
					}
					progressbar.move(tmp[0], tmp[2]);
				}
				progressbar.text(tmp[1]);
				progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
			}
		});
	},
	
	sync_abort: function(){
		clearTimeout(this.synctimer);
	},
	
	start: function(){ try{
		this.post();
		this.reset();
		this.total_width = parseInt($_("table_progress").width);
		this.move(95, 800);
		this.status_key = $("#soft_status_key").attr("value");
		this.sync();
	}catch(e){ }},
	
	post: function(){
		
		// Scroll to the Top and show the progress bar
		goto_top();
		$(progressbar.fadeout_div).fadeOut(500, 
			function(){
				$(progressbar.progress_div).fadeOut(1);
				$(progressbar.progress_div).fadeIn(500);
			}
		);
		
		$.ajax({
			url: window.location+"&jsnohf=1",
			type: "POST",
			data: $(progressbar.formid).serialize(),
			complete: function( jqXHR, status, responseText ) {
				
				progressbar.sync_abort();
				
				// Store the response as specified by the jqXHR object
				responseText = jqXHR.responseText;
				
				try{
					//alert(responseText);
					if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
						progressbar.text("'.addslashes($l['finishing_process']).'");
						progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
					}else{
						progressbar.reset();
					}
				}catch(e){ }
				
				if ( jqXHR.isResolved() ) {
				
					// #4825: Get the actual response in case
					// a dataFilter is present in ajaxSettings
					jqXHR.done(function( r ) {
						responseText = r;
					});
			
					// Create a dummy div to hold the results
					// inject the contents of the document in, removing the scripts
					// to avoid any "Permission Denied" errors in IE
					var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
					
					$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
						$(progressbar.win_div).html(newhtml);
						show_backup();
						check_pass_strength();
					}).delay(50).animate({opacity: 1}, 500);
					
					//alert(newhtml);
					
				}else{
					alert("Oops ... the connection was lost");
				}
			}
		});
	}
};

function show_msg(msg){	
	$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
	$_("show_txt").style.display = "";
}

// Is the package there ?
var nopackage = '.(empty($nopackage) ? 0 : 1).';

// Use the Progress Bar ?
var useprog = 1;
try{
	if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
		useprog = 0;
	}
}catch(e){ }

function get_package(){	
	if(nopackage){
		
		show_msg("'.$l['downloading'].'");
		
		try{		
			AJAX("'.$globals['index'].'act=java&soft='.$soft.'&ajaxdownload=1&random="+Math.random(), "get_package_handle(re)");
		}catch(e){ }
		
		return false;
	}else{
		$_("show_txt").style.display = "none";
		return true;
	}
};

function get_package_handle(resp){
	nopackage = 0;
	show_msg("'.$l['installing'].'");
	checkform(1);
};

softemail = new Object();
function softmail(){
	try{
		var sofdom = "softdomain";
		for(x in softemail){
			if(softemail[x] == true) continue;
			var temp = $_(x).value.split("@");
			if($_(sofdom).value.indexOf("/") > 0){
				var dom_value = $_(sofdom).value.substring(0, $_(sofdom).value.indexOf("/"));
			}else{
				var dom_value = $_(sofdom).value;
			}
			$_(x).value = temp[0] + "@" + dom_value;
		}
	}catch(e){
		return false;
	}
};

function checkhttps(proto_id, softdomain_id, alrt){
	try{
		var id = $_(proto_id);
		var proto = id.options[id.selectedIndex].text;
	
		$("#checkhttps_wait").css("display","inline-block");
		if(proto.indexOf("https") !== -1){
		
			 $.ajax({
				type: "POST",
				url: "'.$globals['index'].'act=java&soft='.$soft.'&checkhttps="+encodeURIComponent(proto+$_(softdomain_id).value),
				timeout:10000,
				// Checking for error
				success: function(data){
					$("#checkhttps_wait").css("display","none");
					is_https(data);
				},
				error: function(jqXHR, status, e) {
					$("#checkhttps_wait").css("display","none");
					is_https(e);
					return false;
				}
			}); 
			
			//AJAX("'.$globals['index'].'act=software&soft='.$soft.'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
		}else{
			$("#checkhttps_wait").css("display","none");
			is_https("true");
		}
		if(alrt == true){
			alert(proto+$_(softdomain_id).value);
		}
	}catch(e){
		//
	}
	return true;
};

function is_https(re){
	try{
		httpserror = "";
		
		//Check if it exists
		if(re !== "true"){
			httpserror = "'.$l['no_https'].'";
		}
		if(httpserror != ""){
			$_("httpserror").style.display = "block";
			$_("httpserror").innerHTML = httpserror;
			return false;
		}else{
			$_("httpserror").style.display = "none";
		}
		
	}catch(e){
		//
	}
	return true;
};

function prepend_prefix(prefix){
	
	// Decide prefix USERNAME, DOMAIN OR USER DEFINED
	if(prefix != "" && prefix == "username") prefix = "'.$softpanel->user['name'].'";
	if(prefix != "" && prefix == "domain") prefix = "'.current(array_keys($softpanel->domainroots)).'";
	if(prefix != "" && prefix != "domain" && prefix != "username");
	
	// APPEND OLD USERNAME OR DEFAULT USERNAME
	var old = $_("admin_username").value
	temp = $_("admin_username").value.split("-");
	if (typeof temp[1] == \'string\' || temp[1] instanceof String){
		$_("admin_username").value = prefix+"-"+temp[1];
	}else{
		$_("admin_username").value = prefix+"-"+old;
	}
}

function change_admin_prefix(domain){
	var admin_prefix = \''.$globals['admin_prefix'].'\';
	var random_username = \''.(!empty($random_username) ? 'true' : '').'\';
	var empty_username = \''.(empty($globals['empty_username']) ? 'true' : '').'\';
	var gl_random_username = \''.(empty($globals['random_username']) ? 'true' : '').'\';
	if(admin_prefix == "domain" && random_username == "true" && empty_username == "true" && gl_random_username == "true"){
		prepend_prefix(domain);
	}
}
  
// show/hide backup options
function show_backup(){

	var auto_backup = $("#auto_backup").val();
	
	if(auto_backup == 0){
		$("#auto_backup_rotation").attr("disabled", true);
	}else{
		$("#auto_backup_rotation").attr("disabled", false);
	}
	
	return true;
};

'.(!empty($_POST) ? '' : 'addonload(\'softmail();show_backup();\');');

if(!empty($dbtype)){

$info['install'] .= 'function checkdbname(id, alrt){
	try{		
		AJAX("'.$globals['index'].'act=java&soft='.$soft.'&checkdbexists="+$_(id).value, "dbexists(\'"+id+"\', "+alrt+", re)");	
	}catch(e){
		//
	}
	return true;
};

function dbexists(id, alrt, re){
	try{
		
		dberror = "";
		
		//Is the length fine
		if($_(id).value.length > 7){
			dberror = "'.$l['db_name_long'].'";
		}
		
		//There should be only alphanumeric characters
		if(/[^a-zA-Z0-9]/.test($_(id).value)){
			dberror = "'.$l['db_alpha_num'].'";
		}
		
		//Check if it exists
		if(re == "true"){
			dberror = "'.$l['database_exists'].'";
		}
		
		if(dberror != ""){
			$_(id+"error").style.display = "block";
			$_(id+"error").innerHTML = dberror;
			if(alrt == true){
				alert(dberror);
			}
			return false;
		}else{
			$_(id+"error").style.display = "none";
		}
		
	}catch(e){
		//
	}
	return true;
};';

}//End of if($dbtype)

$info['install'] .= '// ]]></script>';

if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
	$info['install'] .= '<center class="sai_anotice">'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center><br />';
}

$info['install'] .= '
<table width="100%" cellpadding="8" cellspacing="0" border="0" class="sai_divroundshad">
<tr>
<td class="sai_heading_full" colspan="2">'.$l['setup'].'</td>
</tr>';

if(empty($softpanel->noprotocol) && empty($globals['hide_protocol'])){

	$info['install'] .= '<tr>
<td>
<span class="sai_head">'.$l['choose_protocol'].'</span><br />
<span class="sai_exp">'.$l['choose_protocol_exp'].'</span>
</td>
<td valign="top">
<select name="softproto" id="softproto" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';

foreach($protocols as $k => $v){

	$info['install'] .= '<option value="'.$k.'" '.((!empty($_POST['softproto']) && $_POST['softproto'] == $k) ? 'selected="selected"' : '').'>'.$v.'</option>';

}

$info['install'] .= '</select><div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="please wait.."></div><br />
<span id="httpserror" style="background: #FDB3B3; display:none; width:200px;"></span>
</td>
</tr>';

}

$info['install'] .= '<tr>
<td width="50%">
<span class="sai_head">'.$l['choose_domain'].'</span><br />
<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
</td>
<td>
<select name="softdomain" id="softdomain" onchange="softmail();change_admin_prefix(this.value);" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';

if(!empty($globals['blank_domain'])){
	$info['install'] .= '<option value="" '.(empty($_POST['softdomain']) ? 'selected="selected"' : '').'>('.$l['select_domain'].')</option>';
}

foreach($softpanel->webroots as $domain => $dompath){

	$info['install'] .= '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';

}

$info['install'] .= '</select>
</td>
</tr>
<tr>
<td>
<span class="sai_head">'.$l['in_directory'].'</span><br />
<span class="sai_exp">'.$l['in_directory_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="softdirectory" id="softdirectory" size="30" value="'.POSTval('softdirectory', (!empty($globals['no_prefill']) ? '' : $software['softname'])).'" />
</td>
</tr>';

// A data Directory ?
if(!empty($datadir)){

$info['install'] .= '<tr>
<td>
<span class="sai_head">'.$l['datadir'].'</span><br />
<span class="sai_exp">'.$l['datadir_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="datadir" id="datadir" size="30" value="'.POSTval('datadir', $datadir).'" />
</td>
</tr>';

}

if(!empty($dbtype)){

$dbname = mysqldbname($software['softname']);

if(method_exists($softpanel, 'mysqldbname')){
	$dbname = $softpanel->mysqldbname();
}

if(empty($dbtype) || aefer()){
$info['install'] .= '
<tr>
<td>
<span class="sai_head">'.$l['database_name'].'</span><br />
<span class="sai_exp">'.$l['database_name_exp'].'</span>
</td>
<td valign="top">
<input type="text" name="softdb" id="softdb" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" /><br />
<span id="softdberror" style="background: #FDB3B3; display:none; width:200px;"></span>
</td>
</tr>';
}
}

// Are there any cron jobs
if(!empty($cron)){

$info['install'] .= '<tr>
<td>
<span class="sai_head">'.$l['cron_job'].'</span><br />
<span class="sai_exp">'.$l['cron_job_exp'].'</span>
</td>
<td valign="top">
	<table width="100%" cellpadding="2" cellspacing="1">
		<tr>
			<td>'.$l['cron_min'].'</td>
			<td>'.$l['cron_hour'].'</td>
			<td>'.$l['cron_day'].'</td>
			<td>'.$l['cron_month'].'</td>
			<td>'.$l['cron_weekday'].'</td>
		</tr>
		<tr>
			<td><input type="text" name="cron_min" id="cron_min" size="2" value="'.POSTval('cron_min', $cron['min']).'" /></td>
			<td><input type="text" name="cron_hour" id="cron_hour" size="2" value="'.POSTval('cron_hour', $cron['hour']).'" /></td>
			<td><input type="text" name="cron_day" id="cron_day" size="2" value="'.POSTval('cron_day', $cron['day']).'" /></td>
			<td><input type="text" name="cron_month" id="cron_month" size="2" value="'.POSTval('cron_month', $cron['month']).'" /></td>
			<td><input type="text" name="cron_weekday" id="cron_weekday" size="2" value="'.POSTval('cron_weekday', $cron['weekday']).'" /></td>
		</tr>
	</table>
</td>
</tr>';

}

if(!empty($overwrite_option)){

$info['install'] .= '<tr>
<td>
<span class="sai_head">'.$l['overwrite'].'</span>
</td>
<td valign="top">
	<input type="checkbox" name="overwrite_existing" id="overwrite_existing" />
</td>
</tr>';

}

$info['install'] .= '</table>';

if(!empty($settings)){
	
	if(file_exists($software['path'].'/install.js')){
		$info['install'] .= '<script language="javascript" type="text/javascript"><!--// --><![CDATA[';
		$info['install'] .= @parselanguages(str_replace('$(', '$_(', implode('', file($software['path'].'/install.js'))));
		$info['install'] .= '// ]]></script>';
	}

	foreach($settings as $group => $sets){
		
		if($group == 'hidden' || empty($sets)) continue;
	
	$info['install'] .= '<br />
<table width="100%" cellpadding="8" cellspacing="0" border="0" class="sai_divroundshad">
<tr>
<td class="sai_heading_full" colspan="2">'.$group.'</td>
</tr>';

		foreach($sets as $sk => $sv){
	
			$info['install'] .= '<tr>
<td width="50%">
<span class="sai_head">'.$sv['head'].'</span>
'.(empty($sv['exp']) ? '' : '<br /><span class="sai_exp">'.$sv['exp'].'</span>').'
</td>
<td valign="top">
'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? preg_replace('/>|\/>/is',' onkeyup="check_pass_strength();">', $sv['tag']) : $sv['tag']).'
'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
softemail["'.$sk.'"] = false;
//Add an event handler
$_("'.$sk.'").onkeydown = function(){
	softemail["'.$sk.'"] = true;
}
// ]]></script>
' : '').'
'.(preg_match('/admin_pass|softpass/is', $sv['tag']) ? '
<a href="javascript: void(0);" onclick="$_(\''.$sk.'\').value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a>
<div id="pass-strength-result" class="">'.$l['strength_indicator'].'</div>' : '').'
'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && (!empty($softpanel->securepass) || !empty($globals['random_pass'])) ? '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'$_("'.$sk.'").value=randstr(10, 1, '.(!empty($globals['pass_strength']) ? $globals['pass_strength'] : 0).');check_pass_strength();\');
// ]]></script>
' : '').'
'.(preg_match('/admin_pass|softpass/is', $sv['tag']) && !empty($globals['empty_pass']) ? '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'$_("'.$sk.'").value="";\');
// ]]></script>
' : '').'
'.(preg_match('/dbprefix/is', $sv['tag']) && !empty($globals['random_dbprefix']) ? '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'$_("'.$sk.'").value=randstr(3)+"_";\');
// ]]></script>
' : '').'
'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['random_username']) && !empty($random_username) ? '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'$_("'.$sk.'").value=randstr(5);\');
// ]]></script>
' : '').'
'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['empty_username']) && !empty($random_username) ? '
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'$_("'.$sk.'").value="";\');
// ]]></script>
' : '').'
'.(preg_match('/admin_username/is', $sv['tag']) && !empty($globals['admin_prefix']) && empty($globals['empty_username']) && empty($globals['random_username']) && !empty($random_username) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
addonload(\'prepend_prefix("'.$globals['admin_prefix'].'");\');
	// ]]></script>
' : '').'
</td>
</tr>';
	
		}
	
		$info['install'] .= '</table>';
	
	}

	//The Hidden groups 
	if(!empty($settings['hidden'])){
	
		foreach($settings['hidden'] as $sk => $sv){
	
		$info['install'] .= $sv['tag'].'
'.(preg_match('/softmail/is', $sv['tag']) ? '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
softemail["'.$sk.'"] = false;
//Add an event handler
$_("'.$sk.'").onkeydown = function(){
	softemail["'.$sk.'"] = true;
}
// ]]></script>
' : '');

		}
	
	}

}//End of if($settings)

//Is it a SOFTCOPY, then Leave a NOTE
if(!empty($setupcontinue)){
	$info['install'] .= '<br />'.$l['softcopy_note'].'<br /><br />';
}

// Advance option 
$info['install'] .= '
<br /><br />
<table width="100%" cellpadding="8" cellspacing="1" border="0" class="sai_divroundshad">
	<tr class="nohover">
		<td class="sai_heading_full" colspan="5" id="advoptions_toggle" onclick="toggle_advoptions(\'advoptions\');" class="sai_heading_full" style="cursor:pointer" ><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" />&nbsp;&nbsp;'.$l['adv_option'].'</td>
	</tr>
	<tr>
		<td>
			<div id="advoptions" style="display:none;">
			<table border="0" cellpadding="5" cellspacing="0" width="100%">
			'.(aefer() ? "" :
				'<tr>
					<td>
						<span class="sai_head">'.$l['database_name'].'</span><br />
						<span class="sai_exp">'.$l['database_name_exp'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="softdb" id="softdb" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" /><br />
						<span id="softdberror" style="background: #FDB3B3; display:none; width:200px;"></span>
					</td>
				</tr>').'

				<tr>
					<td width="50%">
						<span class="sai_head">'.$l['disable_notify_update'].'</span><br />
						<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
					</td>
					<td>
						<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update').' />
					</td>	
				</tr>';
	
// Auto backups option only if backups is not disabled and panel is not remote
if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup']) && !aefer() && empty($softpanel->disable_auto_backup)){
	$info['install'] .= '<tr>
		<td width="50%">
			<span class="sai_head">'.$l['auto_backup'].'</span><br />
			<span class="sai_exp">'.$l['exp_auto_backup'].'</span>
		</td>
		<td>
			<select name="auto_backup" id="auto_backup" onchange="show_backup();">
				<option value="0" '.POSTselect('auto_backup', '0', 1).'>'.$l['no_backup'].'</option>'.
				(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily').'>'.$l['daily'].'</option>' : '').
				(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly').'>'.$l['weekly'].'</option>' : '').
				(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly').'>'.$l['monthly'].'</option>' : '').'
			</select>
		</td>	
	</tr>
	<tr>
		<td width="50%">
			<span class="sai_head">'.$l['auto_backup_rotation'].'</span><br />
			<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
		</td>
		<td>
			<select name="auto_backup_rotation" id="auto_backup_rotation">';    
				for($i=0; $i<=10; $i++){
					// Do we have a limit from admin ?
					if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
					$info['install'] .= '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, ($i == 4 ? '1' : '0')).'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';						
				}
			$info['install'] .= '</select>
		</td>	
	</tr>';
}
	
$info['install'] .= '</table>
</div>
</td>
</tr>
</table>';

$info['install'] .= '<p align="center">
<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
<input type="hidden" name="pass-strength-hidden" id="pass-strength-hidden" value="" />
<input type="submit" name="softsubmitbut" id="softsubmitbut" value="'.$l['softsubmit'].'" class="sai_graybluebut" /><span id="show_txt" style="display:none;"></span>
<br /><br /><br />
'.(empty($globals['off_email_link']) && empty($globals['off_install_mail']) ? $l['ins_emailto'].' : <input type="text" name="emailto" id="emailto" size="20" value="'.POSTval('emailto', '').'" />' : '').'
</p>
<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
</form></div>

<div id="progress_bar" style="height:125px; display: none;">
	<br />
	<center>
	<font size="4" color="#222222" id="progress_txt">'.$l['checking_data'].'</font>
	<font style="font-size: 18px;font-weight: 400;color: #444444;" id="progress_percent">(0 %)</font><br /><br />
	</center>
	<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
-webkit-border-radius: 5px; border-radius: 5px;background-color:#efefef;">
		<tr>
			<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
			<td id="progress_nocolor">&nbsp;</td>
		</tr>
	</table>
<br /><center>'.$l['wait_note'].'</center>
</div>
<br /><br /><br />';

}elseif(!empty($installed)){

	$info['install'] = '<h3>'.$l['congrats'].'</h3><br />
'.$software['name'].' '.$l['succesful'].' : <br />
<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$__settings['softurl'].'/'.$software['adminurl'].'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
'.(!empty($setupcontinue) ? $l['setup_continue'].' : <br />
<a href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a><br /><br />' : '').'
'.$l['enjoy'].'<br /><br />
'.(!empty($notes) ? $l['install_notes'].' : <br />
<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
'.$l['please_note'].'<br /><br />
'.$l['regards'].',<br />
'.$l['softinstaller'].'<br /><br />
<center><b><a href="'.script_link($soft).'&highlight='.$new_insid.'&postact=install">'.$l['return'].'</a></b></center><br /><br />';

	if(empty($globals['install_tweet_off']) || empty($globals['lictype'])){
		$info['install'] .= '<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
		<table border="0" cellpadding="5" cellspacing="1" align="center" class="sai_divroundshad">
			<tr>
				<td colspan="2">
					<font size="+1"><b>'.$l['install_tweet_sub'].' :</b></font>
				</td>
			</tr>
			<tr>
				<td valign="middle">
				<textarea name="text" cols="60" row="3" style="resize:none">'.loadtweetdata('install_tweet', $l['install_tweet']).'</textarea>
				</td>
				<td valign="middle">
				<input type="submit" value="Tweet!" class="sai_twitter-btn" onsubmit="return false;" id="twitter-btn"/>
				</td>
			</tr>
		</table>
		</form>';
	}
	
	$info['install'] .= '<!--PROC_DONE-->
	<br /><br />';

}

softheader($l['<title>'].$software['name']);

$loadedinfo = array('install', 'overview', 'features', 'reviews', 'screenshots', 'ratings');

?>
<script language="JavaScript" src="<?php echo $theme['url'].'/js/tabber.js';?>" type="text/javascript">
</script>
<script language="JavaScript" id="ratings_js_file" type="text/javascript"></script>
<script language="JavaScript" id="review_js_file"  type="text/javascript"></script>
<script language="JavaScript" id="reviews_js_file"  type="text/javascript"></script>
<script type="text/javascript">
tabs = new tabber;
tabs.tabs = new Array('<?php echo implode('\', \'', $loadedinfo);?>');
tabs.tabwindows = new Array('<?php echo implode('_win\', \'', $loadedinfo);?>_win');
tabs.inittab = <?php echo '\''.$init_tab.'\';';?>
addonload('tabs.init();loadraterev();check_pass_strength();');

function loadraterev(){
<?php 
	if(empty($globals['off_rating_link']) && $soft < 10000){
		echo '$_(\'ratings_js_file\').src = "https://www.softaculous.com/ratings.js?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
	}
		
	if(empty($globals['off_review_link']) && $soft < 10000){
		echo '$_(\'review_js_file\').src =  "https://www.softaculous.com/review.js?soft='.$soft.'&user='.$softpanel->user['name'].'&ip='.$_SERVER['SERVER_ADDR'].'";';
		echo '$_(\'reviews_js_file\').src =  "https://www.softaculous.com/reviews.js?soft='.$soft.'&user='.$softpanel->user['name'].'&timezone='.$globals['timezone'].'&ip='.$_SERVER['SERVER_ADDR'].'";';	
	} 
?>
};

function notifyversion(){
	if(AJAX(window.location+"&notify=true", "notified(re)")){
		return false;
	}else{
		return true;	
	}
};

function notified(re){
	if(re == 1){
		alert('<?php echo $l['notifyversion'] ?>');
	}
};

function loadScreenshots(){
	$_('screenshots_iframe').src = '<?php echo 'https://www.softaculous.com/screenshots/screenshots1.php?sid='.$soft;?>';
};

</script>
<?php

$url = $theme['images'];
$ratings = array();
$deduct = 1;
$r = $scripts[$soft]['ratings'];
for($i_r=1; $i_r<=5; $i_r++){		
	if($r >= 1){
		$ratings[$i_r] = '<td><img src="'.$url.'star.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" /></td>';
	}elseif($r > 0){
		$ratings[$i_r] = '<td><img src="'.$url.'halfstar.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" /></td>';
	}else{
		$ratings[$i_r] = '<td><img src="'.$url.'nostar.png'.'" alt="('.number_format($scripts[$soft]['ratings'], 2).' out of 5)" /></td>';
	}
	$r = $r - $deduct;
}	

// For custom themes
if($soft > 10000){
	if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/48/'.$iscripts[$soft]['softname'].'.png')){
		$custom_48 = $theme['images'].'topscripts/48/'.$iscripts[$soft]['softname'].'.png';
	}else{
		$custom_48 = $theme['images'].'/custom.png';
	}
}

echo '<div id="currentrating" style="display:none"></div>
<table width="100%" cellpadding="4" cellspacing="1" border="0">
	<tr>
		<td width="10%" align="center">'.(!empty($custom_48) ? '<img src="'.$custom_48.'" alt="">' : '<img src="'.$globals['mirror_images'].'top15/48/'.$scripts[$soft]['softname'].'.png" >').'</td>
		<td width="90%" class="sai_process_heading" colspan="4">'.$software['name'].'</td>
	</tr>
	<tr>
		<td align="center" width="10%">'.($soft > 10000 ? '' : '<div class="someclass" title="'.$scripts[$soft]['ratings'].'"><table><tr>'.implode('', $ratings).'</tr></table></div>').'</td>
		<td valign="top" align="left" width="20%">
			'.$l['software_ver'].' : <font size="2"><b>'.(!empty($tmp_ver) ? $tmp_ver : $software['ver']).'</b></font> &nbsp; &nbsp; <a href="javascript" onclick="notifyversion(); return false;" ><img src="'.$theme['images'].'notify.gif" name="notifyver" title="'.$l['notify_ver'].'" alt="'.$l['notify_ver'].'"></a>
		</td>
		<td align="left" width="60%">
			'.(!empty($info['release_date']) ? $l['release_date'].' : <font size="1"><b>'.$info['release_date'].'</b></font>' : '').'
		</td>
		<td width="10%">
			'.(!empty($info['changelog']) ? '&nbsp;&nbsp;<a href="javascript" onclick="$(\'#changelog_div\').bPopup(); return false;" class="sai_changelogbut" style="text-decoration:none;">'.$l['changelog'].'</a>' : '').'
		</td>
	</tr>
</table><br />

<table width="100%" cellpadding="0" cellspacing="0" border="0" class="sai_tabs">
	<tr>
		<td><a href="javascript:tabs.tab(\'install\')" id="install" class="sai_insbut">'.$l['install'].'</a></td>
		<td><a href="javascript:tabs.tab(\'overview\')" class="sai_tab" id="overview">'.$l['overview'].'</a></td>
		<td><a href="javascript:tabs.tab(\'features\')" class="sai_tab" id="features">'.$l['features'].'</a></td>
			'.(empty($globals['off_screenshot_link']) ? '<td><a href="javascript:tabs.tab(\'screenshots\'); loadScreenshots();" class="sai_tab" id="screenshots">'.$l['screenshots'].'</a></td>' : '').'
			'.(empty($globals['off_demo_link']) ? '<td><a href="'.($soft >= 10000 && !empty($info['demo']) ? $info['demo'] : $globals['ind'].'act=demos&soft='.$soft).'" class="sai_tab" id="demo" target="_blank">'.$l['demo'].'</a></td>' : '').'
			'.(empty($globals['off_rating_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'ratings\')" class="sai_tab" id="ratings">'.$l['ratings'].'</a></td>' : '').'
			'.(empty($globals['off_review_link']) && $soft < 10000 ? '<td><a href="javascript:tabs.tab(\'reviews\')" class="sai_tab" id="reviews">'.$l['reviews'].'</a></td>' : '').
			(empty($info['import']) ? '' : '<td><a href="'.$globals['ind'].'act=import&soft='.$soft.'" class="sai_tab" id="ratings">'.$l['import'].'</a></td>').'
	</tr>
</table><br />

<script type="text/javascript">
$_(tabs.inittab).className = tabs.tabbedclass;

var softid = '.$soft.'

tabs.override = function(id){
	if(id == \'install\'){
		$_(\'install\').className = \'sai_insbutclicked\';
	}else{
		$_(\'install\').className = \'sai_insbut\';
	}
};
</script>';

//Parse and take care of images
$info['overview'] = (!empty($info['changelog']) ? '<div id="changelog_div" class="sai_popup" style="display:none;"><span class="sai_clogbutton b-close"><span>X</span></span><div class="sai_changelog">'.$info['changelog'].'</div></div>' : '').'

<table width="100%" cellpadding="8" cellspacing="1" border="0">
<tr>
	'.(!empty($scripts[$soft]['screenshots']) && empty($globals['panel_hf']) ? '
	<td width="20%" valign="top">
		<div id="overview_img"> <img src="'.$globals['mirror_images'].'softimages/screenshots/'.$soft.'_screenshot1.gif" width="500" alt="" > </div>
	</td>': '').'
	
	<td valign="top" style="padding:10px;">
		'.softparse($info['overview'], $soft).'<br /><br />
		<table width="100%" cellpadding="4" cellspacing="1" border="0">
			<tr>
				<td width="52" valign="top" align="center"><font color="#447edf"><i class="fa sai-disk fa-3x"></i></font></td>
				<td valign="top">
					<span class="sai_head">'.$l['space_req'].'</span><br />
					<span class="sai_exp">'.$l['available_space'].' : '.(is_numeric($softpanel->spaceremain) ? number_format($softpanel->spaceremain/1024/1024, 2) : $softpanel->spaceremain).' '.$l['mb'].'<br />
					'.$l['req_space'].' : '.number_format($software['spacereq']/1024/1024, 2).' '.$l['mb'].'</span>
				</td>
			</tr>
			<tr>
				<td valign="top" align="center"><a href="'.$info['support'].'"><font color="#447edf"><i class="fa sai-question fa-3x"></i></font></a></td>
				<td valign="top">
					<span class="sai_head">'.$l['software_support'].'</span><br />
					<span class="sai_exp"><a href="'.$info['support'].'" target="_blank">'.$l['support_link'].'</a><br />
					'.$l['support_note'].'</span>
				</td>
			</tr>
		</table>
	</td>
</tr>
</table>';

if(!empty($installations[$soft])){
	
	$is_cloneable = is_cloneable($soft);
	$highlight = optGET('highlight');
	$action = optGET('postact');
	
	$info['overview'] .= '<br /><br />
<center>
	<span class="sai_newhead">'.$l['current_ins'].'</span><br />
</center>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" style="margin:8px 0px;" />';

	$info['overview'] .= '<table border="0" cellpadding="5" cellspacing="0" width="100%" class="sai_altrowstable">
<tr>
	<th class="sai_exp">'.$l['link'].'</th>
	<th width="50" class="sai_exp" >'.$l['admin'].'</th>
	<th width="180" class="sai_exp">'.$l['ins_time'].'</th>
	<th width="80" class="sai_exp">'.$l['version'].'</th>
	<th width="145" class="sai_exp" style="text-align:center">'.$l['options'].'</th>
</tr>';
$i=1;

	foreach($installations[$soft] as $ik => $iv){
	
		$info['overview'] .= '<tr id="trid' . $ik . '" class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">
		<td><a href="'.$iv['softurl'].'" target="_blank" id="insurl'.$ik.'">'.$iv['softurl'].'</a>'.(($highlight == $ik && !empty($action)) ? '<span id="highlight">&nbsp;&nbsp;<b class="sai_highlight">'.$l['act_'.$action].'</b></span>' : '').'</td>
		<td><a href="'.$iv['softurl'].'/'.(!empty($iv['admin_folder']) ? $iv['admin_folder'] : admin_folder($iv['sid'])).'" target="_blank"><img src="'.$theme['images'].'/admin.gif" /></a></td>
		<td>'.datify($iv['itime']).'</td>
		<td>'.$iv['ver'].($software['ver'] != $iv['ver'] && file_exists($software['path'].'/upgrade.xml') ? ' <a href="'.$globals['ind'].'act=upgrade&insid='.$ik.'"><img src="'.$theme['images'].'updates.gif" alt="'.$l['upd_to'].' '.$scripts[$soft]['ver'].'" /></a>' : '').'</td>
		<td>'.(!empty($is_cloneable) ? '<a href="'.$globals['ind'].'act=sclone&insid='.$ik.'" title="'.$l['clone'].'"><img src="'.$theme['images'].'clone.gif" /></a>&nbsp;' : '').
		(empty($globals['disable_backup_restore']) ? '<a href="'.$globals['ind'].'act=backup&insid='.$ik.'" title="'.$l['backup'].'"><img src="'.$theme['images'].'backup.gif" /></a>' : '').' &nbsp;<a href="'.$globals['ind'].'act=editdetail&insid='.$ik.'" title="'.$l['editdetail'].'"><img src="'.$theme['images'].'editdetail.gif" /></a> &nbsp;<a href="'.$globals['ind'].'act=remove&insid='.$ik.'"><img src="'.$theme['images'].'remove.gif" /></a>&nbsp;<input type="checkbox" name="insids[]" id="'.$iv['softurl'].'" value="'.$ik.'"></td>
	</tr>';
$i++;

	}

	$info['overview'] .= '</table>
	<p align="right">
		'.$l['with_selected'].': 
		<select name="multi_options" id="multi_options">
			<option name="todo" id="todo" value="0">---</option>
			<option name="todo" id="todo" value="mult_rem">'.$l['remove'].'</option>
		</select>
		<input type="button" value="'.$l['go'].'" onclick="show_confirm()">
		<br />
	</p>
	<div id="rem_div"></div>
	
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
insids = new Array();
removed = new Object();

function show_confirm(){
	
	insids = new Array();
	removed = new Object();
	
	if($_("multi_options").value != "mult_rem"){
		return false;
	}

	// Build the list of Installations to remove
	var field = document.getElementsByName(\'insids[]\');
		insids = new Array();
		var c = 0;
		for(i = 0; i < field.length; i++){
			if(field[i].checked == true){
				insids[c] = field[i].value;
				c++;
			}
		
	}
	//alert(insids);
	
	if(c == 0){
		alert("'.$l['no_sel_inst'].'");
		return false;
	}
	
	var r = confirm("'.$l['del_insid'].'");
	if(r != true){
		return false;
	}
	
	remove_by_id(insids[0], "", 0);
}

function remove_by_id(insid, re, oldinsid){

	removed[insid] = false;
	
	if(re.length > 0 && oldinsid > 0){
		if(re == "removed"){
			removed[insid] = true;
		}
	}
	
	nextinsid = 0;
	
	// Find the next INSTALLATION to remove
	for(i = 0; i < insids.length; i++){
		if(typeof(removed[insids[i]]) != "undefined"){
			continue;
		}
		nextinsid = insids[i];
		break;
	}
	
	// If there is something left to be removed
	if(insid != 0){
		try{		
			AJAX("'.$globals['index'].'act=remove&insid="+insid+"&ajax=1&ssk="+randomstring(32)+"&random="+Math.random(), "remove_by_id(\'"+nextinsid+"\', re, \'"+insid+"\')");
			$_("rem_div").innerHTML = "<br /><br /><p align=\"center\"><img src=\"' . $theme['images'] . 'ajax_remove.gif\"> <br />'.$l['rem_inst_id']. ' ID: " +insid+ ", URL: " + $_("insurl"+insid)+"<br /></p>";
			return true;
		}catch(e){
			return false;
		}
	}
	$_("rem_div").innerHTML = "";
	alert("'.$l['inst_remvd'].'");
	location.reload(true);
	return true;
}

$(document).ready(function(){
	
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");
		//alert(old_class);
		$(this).attr("class", "sai_tr_bgcolor");
		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});';
	
// If we get anything in $highlight than only we have to call this JS function other wise it will cause the JS error.
if(!empty($highlight)){
	$info['overview'] .= 'goto_id("insurl'.$highlight.'");
	$("#highlight").fadeOut(10000);';
}
	
$info['overview'] .= '});

// ]]></script>';
	
}

if(count($allcatwise[$software['type']][$software['cat']]) > 2 && $software['cat'] != 'others'){

	$info['overview'] .= '<br /><br /><br /><br />
		<table width="100%" cellpadding="8" cellspacing="0" border="0" class="sai_divroundshad">
			<tr>
				<td class="sai_heading_full" colspan="2">'.$l['related_scripts'].'</td>
			</tr>
		</table>';
				
	$i = 0;
	
	foreach($allcatwise[$software['type']][$software['cat']] as $k => $v){

		if(($k == $soft) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		// Show only 5 scripts
		if($i == 5){
			break;
		}
		
		$info['overview'] .='
		<div style="text-decoration:none;display:inline-block;text-align:center;margin-top:10px;">
			<a href="'.script_link($k).'"  title="'.$v['desc'].'"  width="80" alt="" class="someclass" style="text-decoration:none;margin-top:5px;">
				<div class="sai_blog_script" style="margin-left:11%;">
					<div class="sai_demo_script_logo">
						<img src="'.$globals['mirror_images'].'top15/48/'.$v['softname'].'.png" >	
					</div>
					<div class="sai_script_name">'.$v['name'].'</div>
				</div>
		</a></div>';
		
		$i++;
		
	}
}

//Parse and take care of images
$info['features'] = softparse($info['features'], $soft);

$info['ratings'] = '';
$info['screenshots'] = '<iframe src="" id="screenshots_iframe" style="width:100%;height:600px;" frameborder="0" scrolling="no"></iframe>';
$info['reviews'] = '<div id="allreviews"></div>';

foreach($info as $k => $v){
	
	if(in_array($k, array('demo', 'support', 'import', 'changelog'))) continue;
	
	echo '<div id="'.$k.'_win" style="display: '.($init_tab == $k ? "block" : "none").';">
	'.$v.'
	</div>';


}

softfooter();

}

?>