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

function choosesoftwares_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $iscripts, $scripts, $catscripts, $allcatwise, $_iscripts, $cscripts;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['gen_scripts'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($saved)){
	//r_print($_iscripts);
	echo '<br /><table class="sai_notice" width="100%" border="0">
					<tr>
						<td width="40%" align="right">
							<img src="'.$theme['images'].'notice.gif" alt="" />&nbsp;&nbsp;&nbsp;
						</td>
						<td align="left" class="sai_bboxtxt">'.$l['settings_saved'].'<br />
						</td>
					</tr>
				</table>
	<table width="97%" style="margin:0px auto;" >
	<tr>
	<td>
		<div id="responses">
			<div class="sai_heading"><img src="'.$theme['images'].'admin_progress.gif" id="admin_progress">&nbsp;&nbsp;&nbsp;'.$l['updating_files'].'</div>
			<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />
		</div>
	</td>
	</tr>
	</table>';

	//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = ['.implode(', ', array_keys($_iscripts)).'];
//alert(ids);
updatedids = new Object();

for(x in ids){
	updatedids["soft_"+ids[x]] = false;
}

function updatesoftware(id, resp){
	
	//Update the Status with Response
	if(id > 0){
		$_("responses").innerHTML = $_("responses").innerHTML + resp;
		updatedids["soft_"+id] = true;
	}

	for(x in ids){
		if(updatedids["soft_"+ids[x]] == false){
			AJAX("'.$globals['index'].'act=softwares&sact=updatesoft&softid="+ids[x], "updatesoftware("+ids[x]+", re)");
			return true;
		}
	}
	
	$_("responses").innerHTML = $_("responses").innerHTML + "<div class=\"sai_heading\">'.$l['updating_completed'].'<a href=\"'.$globals['ind'].'act=softwares'.'\">'.$l['go_to_soft'].'</a></div>";
	$("#admin_progress").hide();
	
};

addonload("updatesoftware(0, \'\');");

// ]]></script>';
	softfooter();
	return true;
}

//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array('.implode(', ', array_keys($scripts)).');
function checkallsoftware(checker){	
	try{
		for(x in ids){
			$_("soft_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkallpre(checker){	
	try{
		for(x in ids){
			$_("soft_pre_"+ids[x]).checked = checker.checked;
		}
	}catch(e){
		// Dont do anything
	}
		
};

function checkcatsoftware(checker, arr){
		
	$_(checker.id).checked = checker.checked;
	try{
		for(x in arr){
			$_("soft_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){	
		//$_("soft_"+arr.length).checked = checker.checked;	
		// Dont do anything
	}
};

function checkcatpre(checker, arr){
	$_(checker.id).checked = checker.checked;
	//alert(arr);return;	
	try{
		for(x in arr){
			$_("soft_pre_"+arr[x]).checked = checker.checked;
		}	
	}catch(e){
		// Dont do anything
	}
};

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

// ]]></script>';

if(empty($globals['lictype'])){
	echo '<div style="width:700px; margin:0px auto;" class="sai_notebox"><font class="sai_bboxtxt">'.$l['soft_free_note'].'<br /></font></div>';
}

echo '<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
<form accept-charset="'.$globals['charset'].'" name="updatesoft" method="post" action="">
<br />
<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
<table width="723" cellpadding="1" cellspacing="0" border="0" style="margin:0px auto;">
<tr>
<td colspan="6" align="center">
<table width="100%" class="sai_divroundshad" style="padding:10px;" border="0">
<tr>
<td align="center">
	<font size="4" color="#182e7a">'.(count($iscripts) - count($cscripts)).'/'.count($scripts).'</font><font class="sai_bboxtxt"> '.$l['scripts_are_ins'].'</font> 
</td>';

if(!empty($globals['lictype'])){
	echo '<td><input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="sai_graybluebut"/></td>';
}

echo '<td><input type="checkbox" onclick="checkallsoftware(this);" /></td>
'.(empty($globals['pre_download_all']) ? '<td><input type="checkbox" onclick="checkallpre(this);" /></td>' : '').'
</tr>
</table><br />
</td>
</tr>
<tr>
<td colspan="6">
<table width="100%" class="sai_purplegrad">
<td class="sai_head" width="20%"><b>'.$l['soft_name'].'</b></td>
<td class="sai_head" width="50%"><b>'.$l['soft_desc'].'</b></td>
<td class="sai_head" width="10%"><b>'.$l['soft_ins'].' '.$l['soft_ver'].'</b></td>
<td class="sai_head" width="10%"><b>'.$l['soft_ver'].'</b></td>
<td class="sai_head" width="5%"><b>'.$l['soft_ins'].'</b>'.(empty($globals['pre_download_all']) ? '<br /><b style="font-size:8px">'.$l['pre_down'].'</b></td>' : '').'
</tr>
</table>
</td>
</tr>
';
	
	foreach($allcatwise as $cattype => $catscripts){
	
	if(empty($catscripts)){
		continue;
	}
	
	echo '<tr>
<td colspan="6" align="center">
<h2>'.$l['type_'.$cattype].'</h2>
</td>
</tr>';

	foreach($catscripts as $cat => $cv){
		
	if(empty($cv)) continue;
	
		echo '<tr>
		<td>
		<table width="100%" border="0" class="sai_divroundshad" cellspacing="1" cellpadding="5">
			<tr>
				<td colspan="6">
					<table width="107%" border="0" class="sai_ribboneffect" style="left:-20px;">
						<tr>
							<td width="2%"></td>
							<td valign="top" width="650">
								<br /><font class="sai_bboxtxt" style="color:#FFF;"><b>'.$l['cat_'.$cattype.'_'.$cat].'</b></font>
							</td>
							<td valign="top" width="'.(empty($globals['pre_download_all']) ? '30' : '77').'"> 
								<br /><input type="checkbox" id="soft_'.$cat.'" name="soft_'.$cat.'" onclick="checkcatsoftware(this, (new Array('.implode(',', array_keys($cv)).')));" />
							</td>';
							if(empty($globals['pre_download_all'])){
								echo '<td valign="top" width="47"> 
									<br /><input type="checkbox" id="soft_pre_'.$cat.'" name="soft_pre_'.$cat.'" onclick="checkcatpre(this, (new Array('.implode(',', array_keys($cv)).')));" />
								</td>';
							}
						echo '</tr>
					</table>
				</td>
			</tr>';
		$i=0;
		foreach($cv as $k => $v){
		
			if($k > 10000){
				continue;
			}
		
			echo '<tr class="'.($i%2 == 0 ? "sai_altrow" : "sai_naltrow").'">
					<td width="17%" valign="top">
						<table width="100%" border="0">
							<tr>
								<td><div class="sp20_'.$v['softname'].'"></div></td>
								<td class="sai_bboxtxt" align="left" width="90%">'.$v['name'].'</td>
							</tr>
						</table>
					</td>
					<td width="54%" class="sai_bboxtxt">'.$v['desc'].'</td>
					<td '.(trim($v['cur_ver']) == trim($v['ver']) ? '' : 'style="background:#FDCFC4"').' width="10%" class="sai_bboxtxt">'.$v['cur_ver'].'</td>
					<td width="10%" class="sai_bboxtxt">'.$v['ver'].'</td>
					<td width="5%" class="sai_bboxtxt" align="center"><input type="checkbox" id="soft_'.$k.'" name="soft_'.$k.'" '.POSTchecked('soft_'.$k, !empty($iscripts[$k])).' onmouseover="showtip(\''.$l['soft_enable'].' '.$scripts[$k]['name'].'\', this)" /></td>
					'.(empty($globals['pre_download_all']) ? '<td width="5%" class="sai_bboxtxt" align="center"><input type="checkbox" id="soft_pre_'.$k.'" name="soft_pre_'.$k.'" '.POSTchecked('soft_pre_'.$k, !empty($iscripts[$k]['pre_down'])).' onmouseover="showtip(\''.$l['pre_down'].' '.$scripts[$k]['name'].'\', this)" /></td>' : '').'
				</tr>';
				$i++;
		
		}
	echo '</table><br />';
	
	}
	
	}

echo '</td></tr></table>';

if(empty($globals['lictype'])){
	echo '<div style="width:700px; margin:0px auto;" class="sai_notebox"><font class="sai_bboxtxt">'.$l['soft_free_note'].'<br /></div>';
}else{
	echo '<p align="center"><input type="submit" name="updatesoft" value="'.$l['updatesoft'].'" class="sai_graybluebut" /></p>';
}

echo '</form>';

softfooter();

}

function updatesoft_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;
		echo '<link href="'.$globals['mirror_images'].'sprites/32.css" rel="stylesheet" type="text/css" />
		<table width="97%" cellpadding="10" cellspacing="0" border="0" class="sai_divroundshad" style="margin:0px auto;">
		<tr>
			<td>
				<table width="100%">
				<tr>
					<td width="5%">
						<div class="sp32_'.$scripts[$softid]['softname'].'"></div>
					</td>
					<td class="sai_head">
						'.$report['name'].'
					</td>
				</tr>
				</table>
			</td>
			<td rowspan="2" width="10%">
				<img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" />
			</td>
		</tr>
		<tr>
			<td valign="top" class="">'.implode('<br />', $report['log']).'</td>
		</tr>
		</table>
		<br />';

}

?>