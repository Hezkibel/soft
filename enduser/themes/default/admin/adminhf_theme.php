<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adminhf_theme.php
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

function js_url(){
	
	$js['givejs'] = func_get_args();
	
	return $GLOBALS['globals']['ind'].http_build_query($js).'&'.$GLOBALS['globals']['version'];
		
}


function softheader($title = '', $leftbody = true){

global $theme, $user, $logged_in, $globals, $l, $dmenus, $onload, $newslinks, $act, $iscripts, $catwise, $softpanel;
	
	// If it is reseller the title should be changed
	if(defined('SOFTRESELLER')){
		$title = $l['reseller_title'];
	}
	
	$title = ((empty($title)) ? $globals['sn'] : $title);
	
	//Lets echo the top headers
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
	<meta name="keywords" content="softaculous, software" />
	<title>'.$title.'</title>
	<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/admin/style.css?'.$GLOBALS['globals']['version'].'" />
	
	<link rel="shortcut icon" href="'.$theme['images'].'/'.(asperapp('', 'webuzo/', 'ampps/')).'favicon.ico" />
	<script language="javascript" src="'.js_url('js/jquery.js', 'js/universal.js', 'js/domdrag.js', 'js/smoothscroll.js', 'js/script_select.js').'" type="text/javascript"></script>
	</head>
	<body onload="bodyonload();">';
			
	echo '<table width="750" border="0" cellpadding="0" cellspacing="0" align="center" class="body" id="abody">
	<tr><td>
	
	<div class="'.asperapp('', 'w', 'a').'adminheader">
	<div style="height:80px">&nbsp;</div>
	<table border="0" cellpadding="2" cellspacing="0" width="100%" class="adminmenu">
		<tr>
			<td class="adminmenutd tabicons'.(empty($act) ? ' tabgrey' : '').'" align="center" width="80">
				<a href="'.$globals['ind'].'" style="display:block;">'.$l['tab_home'].'</a>
			</td>
			
			<td class="adminmenutd tabicons'.(in_array($act, array('settings', 'email', 'topscripts', 'emailtemp', 'categories', 'webuzoconfigs', 'editini', 'errorlog', 'no_autoupgrade', 'import_export', 'root_pass', 'webuzo_acl')) ? ' tabgrey' : '').'" align="center" onmouseover=" $_(\'subsettings\').style.display=\'block\';" onmouseout="$_(\'subsettings\').style.display=\'none\';" id="settings" width="80">
				<a href="'.$globals['ind'].'act=settings" style="display:block;">'.$l['tab_settings'].'</a>
			</td>';
			
			
			if(!defined('SOFTRESELLER')){
				
				echo '
				<td class="adminmenutd tabicons'.(in_array($act, array('softwares', 'customscripts', 'adv_software', 'script_requirement')) ? ' tabgrey' : '').'" align="center" onmouseover=" $_(\'subsoftwares\').style.display=\'block\';" onmouseout="$_(\'subsoftwares\').style.display=\'none\';" id="softwares" width="90">
					<a href="'.$globals['ind'].'act=softwares" style="display:block;">'.$l['tab_softwares'].'</a>
				</td>';
				
			echo '
				<td class="adminmenutd tabicons'.($act == 'updates' ? ' tabgrey' : '').'" align="center" width="80">
					<a href="'.$globals['ind'].'act=updates" style="display:block;">'.$l['tab_updates'].'</a>
				</td>';
			}			
			
			// Is the installations function there ?
			if(method_exists($softpanel, 'listinstallations')){
				
				echo '
				
				<td class="adminmenutd tabicons'.($act == 'installations' ? ' tabgrey' : '').'" align="center" onmouseover=" $_(\'subinstallations\').style.display=\'block\';" onmouseout="$_(\'subinstallations\').style.display=\'none\';" id="installations" width="80">
					<a href="'.$globals['ind'].'act=installations" style="display:block;">'.$l['tab_installations'].'</a>
				</td>';
			
			}
			
			if($globals['softpanel'] != 'ampps' && $globals['softpanel'] != 'webuzo' && $globals['softpanel'] != 'aefer' && $globals['softpanel'] != 'enterprise'){
				
				if($globals['softpanel'] != 'isp' && $globals['softpanel'] != 'cwp'){						
					echo '			
					<td class="adminmenutd tabicons'.($act == 'plans' ? ' tabgrey' : '').'" align="center" width="80" onmouseover=" $_(\'subplans\').style.display=\'block\';" onmouseout="$_(\'subplans\').style.display=\'none\';" id="plans" >
						<a href="'.$globals['ind'].'act=plans" style="display:block;">'.$l['tab_plans'].'</a>
					</td>';
					
				}
				
			}
			
			if($globals['softpanel'] == 'aefer' || $globals['softpanel'] == 'enterprise'){
			
				echo '
				
				<td class="adminmenutd tabicons'.($act == 'adduser' ? ' tabgrey' : '').'" align="center" width="90" onmouseover=" $_(\'subuser\').style.display=\'block\';" onmouseout="$_(\'subuser\').style.display=\'none\';" id="user" >
					<a href="'.$globals['ind'].'act=listuser" style="display:block;">'.$l['user'].'</a>
				</td>';
			
			}
			
			if($globals['softpanel'] == 'enterprise'){
				echo '
				
				<td class="adminmenutd tabicons'.($act == 'listdomains' ? ' tabgrey' : '').'" align="center" width="90" onmouseover=" $_(\'domains\').style.display=\'block\';" onmouseout="$_(\'domains\').style.display=\'none\';" id="domain">
					<a href="'.$globals['ind'].'act=listdomains" style="display:block;">Domain</a>
				</td>';
			}
			
			if(webuzo()){
				echo '
				
				<td class="adminmenutd tabicons" align="center" width="90">
					<a href="javascript:goto_panel()" style="display:block;">'.$l['tab_goto_enduser'].'</a>
				</td>';
				
			}
			
			if($globals['softpanel'] == 'webuzo' || $globals['softpanel'] == 'aefer' || $globals['softpanel'] == 'enterprise'){
			
				echo '
				
				<td class="adminmenutd tabicons'.($act == 'logout' ? ' tabgrey' : '').'" align="center" width="90">
					<a href="'.$globals['ind'].'act=logout" style="display:block;">'.$l['tab_logout'].'</a>
				</td>';
			
			}else{
				if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'ampps'){
					echo '
					
					<td class="adminmenutd tabicons'.($act == 'import' ? ' tabgrey' : '').'" align="center" width="90">
						<a href="'.$globals['ind'].'act=import" style="display:block;">'.$l['tab_import'].'</a>
					</td>';
				}					
			}
			
			echo '
		</tr>		
	</table>
	<br />
	<script>
	
		// For Webuzo
		function goto_panel(){
			
			var str = window.location;
			var find_port = str.toString().search(\'2005\');
			
			if(find_port < 1){
				var str_url = str.toString().replace("2004", "2002");
			}else{
				var str_url = str.toString().replace("2005", "2003");
			}
	
			var res = str_url.split("/",4);
			
			var res_out = res.join("/");	
			
			window.location = res_out+"/";
		}
		
		function dropsubmenu(element){
	
			$("#"+element).bind("mouseenter",function(e){
				var prod = findelpos($_($(this).attr("id")));
				var tabheight = 32;
				var tabwidth = 0;
		 			
				$(".subheads").css("left" , prod[0]-tabwidth);
				$(".subheads").css("top" , prod[1]+tabheight);
				$(".subheads").css("border" , "1px solid #eee");			  
		
			});
		}
		
		$(document).ready(function(){
			dropsubmenu("installations");
			dropsubmenu("settings");
			dropsubmenu("softwares");
			dropsubmenu("plans");
			dropsubmenu("user");
			dropsubmenu("domain");
		});
	</script>		
	
	<table class="subheads" id="subinstallations" onmouseover="$_(\'subinstallations\').style.display=\'block\';" onmouseout="$_(\'subinstallations\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="100%" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=installations&show=byusers"><font class="bboxtxt">'.$l['sub_byuser'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=installations&show=byscript"><font class="bboxtxt">'.$l['sub_byscript'].'</font></a>
			</td>
		</tr>
		<tr>
			<td width="100%" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=installations&show=bydomains"><font class="bboxtxt">'.$l['sub_bydomain'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=installations&show=outdated"><font class="bboxtxt">'.$l['sub_outdated'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=ins_statistics"><font class="bboxtxt">'.$l['sub_ins_statistics'].'</font></a>
			</td>
		</tr>';
		
		if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'ampps' ){
			
			echo '<tr>
					<td>
						<a href="'.$globals['ind'].'act=installations&show=upgrade"><font class="bboxtxt">'.$l['sub_upgrade'].'</font></a>
					</td>
				</tr>';
		}

echo '</table>
			
				
	<table class="subheads" id="subsettings" onmouseover="$_(\'subsettings\').style.display=\'block\';" onmouseout="$_(\'subsettings\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="162" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=settings"><font class="bboxtxt">'.$l['sub_gen_set'].'</font></a>
			</td>
		</tr>';
	
	if($globals['softpanel'] == 'webuzo'){
		echo '
		<tr>				
			<td>
				<a href="'.$globals['ind'].'act=webuzoconfigs" style="display:block;"><font class="bboxtxt">'.$l['tab_webuzoconfigs'].'</font></a>
			</td>
		</tr>
		<tr>				
			<td>
				<a href="'.$globals['ind'].'act=root_pass" style="display:block;"><font class="bboxtxt">'.$l['tab_root_pass'].'</font></a>
			</td>
		</tr>
		<tr>				
			<td>
				<a href="'.$globals['ind'].'act=webuzo_acl" style="display:block;"><font class="bboxtxt">'.$l['tab_webuzo_acl'].'</font></a>
			</td>
		</tr>';
	}
	
	echo '<tr>
			<td>
				<a href="'.$globals['ind'].'act=email"><font class="bboxtxt">'.$l['tab_email'].'</font></a>
			</td>
		</tr>';
		
	// proxy menu is availbale for ADMIN only.
	if(!defined('SOFTRESELLER') && (!empty($globals['enable_proxy']) || $globals['softpanel'] == 'ampps' || aefer() || ent())){
		echo '<tr>
			<td>
				<a href="'.$globals['ind'].'act=proxy"><font class="bboxtxt">'.$l['tab_proxy'].'</font></a>
			</td>
		</tr>';	
	}

	
	if(!defined('SOFTRESELLER')){ 
		echo '
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=topscripts"><font class="bboxtxt">'.$l['sub_top_scripts'].'</font></a>
			</td>
		</tr>';
	}
			
		if(!defined('SOFTRESELLER')){
			echo '
			<tr>
				<td>
					<a href="'.$globals['ind'].'act=categories" style="display:block;"><font class="bboxtxt">'.$l['tab_categories'].'</font></a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="'.$globals['ind'].'act=errorlog" style="display:block;"><font class="bboxtxt">'.$l['tab_error_log'].'</font></a>
				</td>
			</tr>
			<tr>
				<td>
					<a href="'.$globals['ind'].'act=no_autoupgrade" style="display:block;"><font class="bboxtxt">'.$l['tab_disable_autoupgrade'].'</font></a>
				</td>
			</tr>
			';
		}
			
	if(!defined('SOFTRESELLER') && $globals['softpanel'] != 'webuzo' && $globals['softpanel'] != 'ampps'){
				
		echo '
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=emailtemp" style="display:block;"><font class="bboxtxt">'.$l['tab_mail_trmplate'].'</font></a>
			</td>
		</tr>';
	}
	
	if(!defined('SOFTRESELLER') && in_array($globals['softpanel'], array('cpanel', 'enterprise', 'aefer', 'webuzo'))){ 
		echo '
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=import_export"><font class="bboxtxt">'.$l['sub_import_export'].'</font></a>
			</td>
		</tr>';
	}
	
	if(asperapp(0, 1, 1)){ 
		echo '
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=licensekey"><font class="bboxtxt">'.$l['sub_license'].'</font></a>
			</td>
		</tr>';
	}
				
	echo '</table>		
		
	<table class="subheads" id="subsoftwares" onmouseover="$_(\'subsoftwares\').style.display=\'block\';" onmouseout="$_(\'subsoftwares\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="162" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=softwares"><font class="bboxtxt">'.$l['sub_general_scripts'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=customscripts"><font class="bboxtxt">'.$l['sub_custom_scripts'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=adv_software"><font class="bboxtxt">'.$l['adv_software'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=script_requirement"><font class="bboxtxt">'.$l['sub_script_req'].'</font></a>
			</td>
		</tr>
	</table>
	
	<table class="subheads" id="subplans" onmouseover="$_(\'subplans\').style.display=\'block\';" onmouseout="$_(\'subplans\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="100%" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=plans"><font class="bboxtxt">'.$l['list_plan'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=addplans"><font class="bboxtxt">'.$l['add_plan'].'</font></a>
			</td>
		</tr>
	</table>
	
	<table class="subheads" id="subuser" onmouseover="$_(\'subuser\').style.display=\'block\';" onmouseout="$_(\'subuser\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="100%" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=listuser"><font class="bboxtxt">'.$l['list_user'].'</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=adduser"><font class="bboxtxt">'.$l['add_user'].'</font></a>
			</td>
		</tr>
	</table>
	
	<table class="subheads" id="domains" onmouseover="$_(\'domains\').style.display=\'block\';" onmouseout="$_(\'domains\').style.display=\'none\';" cellpadding="8" width="162">
		<tr>
			<td width="100%" style="padding:8px 11px;">
				<a href="'.$globals['ind'].'act=listdomains"><font class="bboxtxt">List Domains</font></a>
			</td>
		</tr>
		<tr>
			<td>
				<a href="'.$globals['ind'].'act=adddomain"><font class="bboxtxt">Add Domain</font></a>
			</td>
		</tr>
	</table>
	
		
	</div>
	</div>';
	//Everything else will go here
}


function softfooter(){

global $user, $conn, $dbtables, $logged_in, $globals, $l, $dmenus, $end_time, $start_time, $onload, $theme;

echo '<br />';

echo '<br /><div align="center">'.$l['times_are'].(empty($globals['pgtimezone']) ? '' : ' '.($globals['pgtimezone'] > 0 ? '+' : '').$globals['pgtimezone']).'. '.$l['time_is'].' '.datify(time(), false).'.</div>';

$pageinfo = array();

if(!empty($globals['showntimetaken'])){

	$pageinfo[] = $l['page_time'].':'.substr($end_time-$start_time,0,5);

}

echo '<br />
<table width="100%" cellpadding="5" cellspacing="1" class="sai_bottom">
<tr>
<td align="left">'.copyright().'</td>'.(empty($pageinfo) ? '' : '<td align="right">'.implode('&nbsp;&nbsp;|&nbsp;&nbsp;', $pageinfo).'</td>').'
</tr>
</table><br />';

if(!empty($theme['copyright'])){

	echo unhtmlentities($theme['copyright']);

}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
function bodyonload(){
	if(aefonload != \'\'){		
		eval(aefonload);
	}
	'.(empty($onload) ? '' : 'eval(\''.implode(';', $onload).'\');').'
};
// ]]></script>';

echo '</td>
</tr>
</body>
</html>';
}


function error_handle($error, $table_width = '90%', $center = 1){

global $l, $theme;

	//on error call the form
	if(!empty($error)){
		
		echo '<table width="'.$table_width.'" cellpadding="5" cellspacing="1" class="sai_error" '.(($center) ? 'align="center"' : '' ).'>
			<tr>
			<td>
			'.$l['following_errors_occured'].' :
			<ul type="square">';
		
		foreach($error as $ek => $ev){
		
			echo '<li>'.$ev.'</li>';
		
		}
		
		
		echo '</ul>
			</td>
			<td width="50">
				<img src="'.$theme['images'].'/caution.png">
			</td>
			</tr>
			</table>'.(($center) ? '</center>' : '' ).'
			<br />';
		
		
	}

}


//This will just echo that everything went fine
function success_message($message, $table_width = '100%', $center = false){

global $l;

	//on error call the form
	if(!empty($message)){
		
		echo '<table width="'.$table_width.'" cellpadding="2" cellspacing="1" class="sai_error" '.(($center) ? 'align="center"' : '' ).'>
			<tr>
			<td>
			'.$l['following_message'].' :
			<ul type="square">';
		
		foreach($message as $mk => $mv){
		
			echo '<li>'.$mv.'</li>';
		
		}
		
		
		echo '</ul>
			</td>
			</tr>
			</table>'.(($center) ? '</center>' : '' ).'
			<br />';
		
		
	}

}


function majorerror($title, $text, $heading = ''){

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['fatal_error'] : $title), false);

?>

<table width="70%" cellpadding="2" cellspacing="1" class="sai_cbor" align="center">
	
	<tr>
	<td class="sai_cbg" align="left">
	<b><?php echo ((empty($heading)) ? $l['following_fatal_error'].':' : $heading);?></b>
	</td>
	</tr>
	
	<tr>
	<td class="sai_bg" colspan="2" align="center">
	<img src="<?php echo $theme['images'];?>error.gif" alt="" />
	</td>
	</tr>
	
	<tr>
	<td class="sai_error" align="left"><?php echo $text;?><br />
	</td>
	</tr>

</table>
<br /><br /><br />

<?php

softfooter();

//We must return
return true;

}

function message($title, $heading = '', $icon, $text){

global $theme, $globals, $user, $l;

softheader(((empty($title)) ? $l['soft_message'] : $title), false);

?>

<table width="70%" cellpadding="2" cellspacing="1" class="sai_cbor" align="center" >
	
	<tr>
	<td class="sai_cbg" align="left"  >
	<b><?php echo ((empty($heading)) ? $l['following_soft_message'].':' : $heading);?></b>
	</td>
	</tr>
	
	<tr>
	<td class="sai_bg" colspan="2" align="center">
	<img src="<?php echo $theme['images'].(empty($icon)?'info.gif':$icon);?>" alt="" />
	</td>
	</tr>
	
	<tr>
	<td class="sai_error" align="left"><?php echo $text;?><br />
	</td>
	</tr>

</table>
<br /><br /><br />

<?php

softfooter();

//We must return
return true;

}

//Pagination
function page_links($num_res, $page, $max = 100){
	
	global $l, $js, $globals, $theme;
	
	$pages = ceil($num_res/$max); // Number of Pages	
	$pg = ceil(($page/$max) + 1); //Current Page

	$_pages = array();
	
	if($pages > 1){
		
		// Show the Back Links if required
		if($pg != 1){			
			$_pages['&lt;&lt;'] = 1;			
			$_pages['&lt;'] = ($pg - 1);		
		}
		
		for($i = ($pg - 4); $i < $pg; $i++){			
			if($i >= 1){			
				$_pages[$i] = $i;			
			}		
		}
		
		$_pages[$pg] = $pg;
				
		for($i = ($pg + 1); $i <= ($pg + 4); $i++){		
			if($i <= $pages){			
				$_pages[$i] = $i;			
			}		
		}
		
		
		if($pg != $pages){			
			$_pages['&gt;'] = ($pg + 1);			
			$_pages['&gt;&gt;'] = $pages;		
		}	
	}

	$name = 'pgjmp_'.generateRandStr(4);
		
	if(empty($js['menu'])){
		echo '<script language="javascript" src="'.$theme['url'].'/js/menu.js" type="text/javascript"></script>
			
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function go_to(max, pg, urlto){
			try{
			var urlto = (urlto || window.location).toString();
			var pg = pg || 0;
			var final = urlto.replace(/(&?)page\=(\d{1,4})|(&?)reslen\=(\d{1,500})/gi,"")+"&page="+pg+"&reslen="+max;
			window.location = final;
			}catch(e){ }
		};
		// ]]></script>';
		
		$js['menu'] = true;
	}
		
	$links = '<br />
	<table class="cbgbor" cellspacing="1" cellpadding="0" border="0" style="margin-left:20px;">
	<tr>
	<td class="pagelinks">'.$l['page_page'].' '.$pg.' '.$l['page_of'].' '.$pages.'</a></td>';
	
	foreach($_pages as $k => $lv){
		$links .= '<td class="'.($k == $pg ? 'activepage' : 'pagelinks' ).'"><a href="javascript:go_to('.$max.', '.$lv.')">'.$k.'</a></td>';
	}
	$links .= '<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/css/admin.css" />';
		
	$links .= '<td colspan="0" class="pagelinks">
	<select name = "reslen" class="perpage" onchange="return go_to(this.value)">
	<option value="-1">--</option>
	<option value="10" '.($max == 10 ? 'selected="selected"' : '').'>10</option>
	<option value="25" '.($max == 25 ? 'selected="selected"' : '').'>25</option>
	<option value="50" '.($max == 50 ? 'selected="selected"' : '').'>50</option>
	<option value="100" '.($max == 100 ? 'selected="selected"' : '').'>100</option>
	<option value="all" '.($max == 'all' ? 'selected="selected"' : '').'>'.$l['all'].'</option>
	</select> '.$l['entries_per_page'].'
	</td>
	</tr>
	</table>
		
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	createmenu("'.$name.'", [
	[\'<input type="text" name="page" id="in'.$name.'" size="10" placeholder="Go To Page" /><input type="button" value="'.$l['page_go'].'" onclick="go_to('.$max.', $_(\\\'in'.$name.'\\\').value)" />\']
	]);
		
	// ]]></script>';
		
	echo $links;
}


?>