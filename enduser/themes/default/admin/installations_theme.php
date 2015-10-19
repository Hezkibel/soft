<?php

//////////////////////////////////////////////////////////////
//===========================================================
// installations_theme.php
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

function installations_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $list, $scripts, $_scriptwise, $emailed, $iscripts, $autoupgrade, $ins_to_be_upgrade, $records_updated, $real_version, $_domainwise;

if(optGET('api')){
	_api($list, optGET('api'));
	return;
}

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['searchinstallations'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

//The necessary JavaScripts
echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
var ids = [];
function show_image(){
	
	goto_top();
	$("#prog_img").fadeIn(500);
	$("#list_ins").hide();
	$("#autoupgrade_process").css("display","");
	$("#prog_img").show();

	$("#list_ins").find( "input[type=checkbox][checked]" ).each( function(){
		ids.push(this.value);
	});
	
	//alert(aArray);return;
		
	updatedids = new Object();
	for(x in ids){
		if(ids[x] != "on"){
			//alert(ids[x]);
			updatedids[ids[x]] = false;
		}
	}
	$("#upgrade_ins_div1").css("display","none");
	$("#upgrade_ins_div2").css("display","none");
	
	autoupgradeins(0, \'\');
	return false;
};

function autoupgradeins(id, resp){
	//alert(resp);
	//alert(id);
	
	
	//Update the Status with Response
	if(id != 0){
		$("<div>"+resp+"</div>").appendTo("#autoupgrade_process");
		updatedids[id] = true;
	}

	for(x in ids){
		//alert(ids[x]);
		if(updatedids[ids[x]] == false){
			var tmp_id = ids[x].split("-");
			AJAX("'.$globals['index'].'act=installations&show=upgrade&sact=autoupgradeins&user="+tmp_id[0]+"&insid="+tmp_id[1], "autoupgradeins(\'"+ids[x]+"\', re)");
			return true;
		}
	}

	$("#prog_img").fadeOut(50);
	$("#succ_upgrad_msg").fadeIn(100);
	$("#goto_list_link").fadeIn(100);
	
};

// ]]></script>';

echo '<script language="JavaScript" src="'.$theme['url'].'/js/osuggest.js" type="text/javascript"></script>
<div style="width:710px; margin:0px auto;">
<form accept-charset="'.$globals['charset'].'" name="serchinstallations" method="post" action="">
<table width="100%" cellpadding="5" cellspacing="1" border="0" class="sai_reviewform" style="margin:0px auto; padding:"20px;">
<tr>
	<td><br />
		<span class="sai_head">'.$l['search_scripts'].'</span><br />
		<span class="sai_exp2">'.$l['search_scripts_exp'].'</span>
	</td>
	<td><br />
		<input type="text" name="scripts" id="scripts" size="30" value="'.POSTval('scripts').'" onkeyup="handlesuggest(event, \'scripts\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=scripts" /> &nbsp; &nbsp;
	</td>
	<td width="250">
		<span class="sai_head">'.$l['group_by_scripts'].'</span><br />
		<span class="sai_exp2">'.$l['group_by_scripts_exp'].'</span>
	</td>
	<td width="50">
		<input type="checkbox" name="group_by_scripts" '.POSTchecked('group_by_scripts').' />
	</td>
</tr>
<tr>';
	
	if(!webuzo()){
	echo '
	<td>
		<span class="sai_head">'.$l['search_users'].'</span><br />
		<span class="sai_exp2">'.$l['search_users_exp'].'</span>
	</td>
	<td>
		<input type="text" name="users" id="users" size="30" value="'.POSTval('users').'" onkeyup="handlesuggest(event, \'users\')" onkeydown="handlekeys(event)" autocomplete=off  onblur="setTimeout(hidesuggest, 1000);" suggesturl="'.$globals['ind'].'act=suggest&sact=users" />
	</td>';
	}else{
		echo '<td colspan="2">
		</td>';
	}
	echo '<td width="250">
		<span class="sai_head">'.$l['only_outdated'].'</span><br />
		<span class="sai_exp2">'.$l['only_outdated_exp'].'</span>
	</td>
	<td width="50">
		<input type="checkbox" name="only_outdated" '.POSTchecked('only_outdated').' />
	</td>
</tr>
<tr>
	<td>
		<span class="sai_head">'.$l['search_domains'].'</span><br />
		<span class="sai_exp2">'.$l['search_domains_exp'].'</span>
	</td>
	<td>
		<input type="text" name="domains" id="domains" size="30" value="'.POSTval('domains').'" />
	</td>
	<td>
		<span class="sai_head">'.$l['only_realversion'].'</span><br />
		<span class="sai_exp2">'.$l['only_realversion_exp'].'</span>
	</td>
	<td width="50">
		<input type="checkbox" name="only_realversion" '.POSTchecked('only_realversion').' />
	</td>
</tr>
<tr>
	<td colspan="4">
		<p align="center"><input type="submit" name="listinstallations" value="'.$l['search_ins'].'" class="sai_graybluebut" /></p>	
	</td>
</tr>
</table>
<br /><br />
</form>
</div>';

if(isset($_REQUEST['listinstallations'])){

	$upgrade_ins_button = '<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<tr>
				<td width="80%">
					<p align="right" class="bboxtxt">'.$l['with_selected'].'&nbsp;&nbsp;
				</td> 
				<td>:&nbsp;&nbsp;</td>
				<td valign="middle"><input type="submit" name="upgrade_ins" id="upgrade_ins" value="'.$l['sub_upgrade_ins'].'" class="sai_graybluebut" onclick="return show_image();" /></td>
			</tr>
		</table>';
	
	// In case there is any error than just dont show the button	
	if(!empty($error)){
		$upgrade_ins_button = '';
	}
	$email_button = '<p align="right" class="bboxtxt"><table cellpadding="0" cellspacing="0" width="100%" border="0">
		<tr>
			<td width="60%" align="right" valign="middle">'.$l['with_selected'].'&nbsp;&nbsp;:&nbsp;&nbsp;</td>';
	if(!empty($real_version)){
		$email_button .= '<td valign="middle"><br /><input type="submit" name="update_records" id="update_records" value="'.$l['update_records'].'" class="sai_graybluebut"/></td></tr></table></p>';
	}else{
		$email_button .=  '<td valign="middle"><br /><input type="submit" name="send_email" id="send_email" value="'.$l['sub_email_users'].'" class="sai_graybluebut"/></td></tr></table></p>';
	}

		
	if(!empty($records_updated)){
		echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['succ_update_record'].'</div><br />';
	}
	
	if(empty($list)){
		echo '<h2 align="center">'.$l['no_results'].'</h2>';
	}else{
		
		if(!empty($emailed)){
			echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['emailed_users'].'</div><br />';
		}
		
		echo '<br /><div class="sai_notice" id="succ_upgrad_msg" style="display:none">'.$l['upgraded_ins'].'</div><br />';
		
		echo '<div style="width:710px; margin:0px auto;">
		<form accept-charset="'.$globals['charset'].'" name="email_users" method="post" action="" id="email_users">
		<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
		<table cellpadding="0" cellspacing="0" width="100%" border="0">
			<tr>
				<td width="50%">
				<div style="display:none;float:left" id="prog_img"><img src="'.$theme['images'].'admin_progress.gif" />&nbsp;&nbsp;'.$l['upgrading_ins'].'</div>
				</td>
			</tr>
			<tr>
				<td align="right">';
					if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
						echo $email_button;
					}else{
						// We are ending the table because we are not ending this in the variable.
						echo '<div id="upgrade_ins_div1">'.$upgrade_ins_button.'</div>';
					}
			
		echo '</td></tr>
		</table><br /><br />';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
					<table width="100%" cellpadding="5" cellspacing="1" border="0">
						<tr>
							<td width="25px">
								<div class="lirealver" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
						</tr>
						<tr>
							<td width="25px">
								<div class="lioutdated" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
						</tr>
					</table>
				</div>';
		}
		
		echo '<div class="sai_divroundshad" id="list_ins" style="display:block">
		<table width="100%" cellpadding="5" cellspacing="1" border="0">
		<tr>
			<td class="lihead" width="100">'.(empty($_scriptwise) ? (empty($_domainwise) ? $l['li_user'] : $l['li_domains']) : $l['li_scripts']).'</td>
			<td class="lihead">'.(empty($_scriptwise) ? $l['li_scripts'] : $l['li_user']).'</td>'.
			(!empty($_domainwise) ? '<td class="lihead" width="5%">'.$l['li_user'].'</td>' : '').
			'
			<td class="lihead">'.$l['li_url'].'</td>
			<td class="lihead" width="15%">'.$l['li_insver'].'</td>'.
			(!empty($real_version) ? '<td class="lihead" width="15%">'.$l['li_realver'].'</td>' : '').
			'<td class="lihead" width="2%">'.$l['li_ver'].'</td>
			<td class="lihead"><img src="'.$theme['images'].'auto_upgrade.png"  title="'.$l['auto_upgrade_enabled'].'" style="cursor:pointer"/>
			<td class="lihead"><input type="checkbox" onclick="check(document.getElementsByName(\'list[]\'), this);" '.(!empty($error) ? 'disabled=true' : '').'/></td>
		</tr>';
			
		$class = '';

		foreach($list as $lk => $lv){
			
			$i = 1;
			
			$class = ($class == 'lione' ? 'litwo' : 'lione');
			
			foreach($lv as $llk => $llv){
			
				foreach($llv as $ik => $iv){

					$_class = $class;
					
				echo '<tr>
				<td class="'.($i == 1 ? $class : '').'">';
				
				$isCustom = (is_customscript($iv['sid']) ? 1 : 0);
				
				if($i == 1){
					echo  '<font class="bboxtxt">'.(empty($_scriptwise) ? $lk : (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info']))).'</font>';
				}else{
					echo '&nbsp;';
				}
				
				if(!empty($isCustom)){
					if($iscripts[$iv['sid']]['ver'] != $iv['ver']){
						$_class = 'lioutdated';
					}
				}else{
					if($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml')){
						$_class = 'lioutdated';
					}
				}
				
				$real_class = 'lirealver';
				
		$__user = (empty($_scriptwise) ? $lk : $llk);
		
		if(!empty($_domainwise)){
			$__user = $iv['user'];
		}
		
		echo '</td>
		<td class="'.$class.'">'.(empty($_scriptwise) ? (!empty($scripts[$iv['sid']]) && !empty($iscripts[$iv['sid']]) ? $scripts[$iv['sid']]['name'] : (!empty($isCustom) ? $iscripts[$iv['sid']]['name'] : $l['no_info'])) : $llk).'</td>'.
		(!empty($_domainwise) ? '<td class="'.$class.'">'.$__user.'</td>' : '').
		'
		<td class="'.$class.'"><a href="'.$iv['softurl'].'" target="_blank">'.$iv['softurl'].'</a></td>
		<td class="'.$class.'">'.$iv['ver'].'</td>'.
		(!empty($iv['real_ver']) && !empty($real_version) ? '<td class="'.$real_class.'">'.$iv['real_ver'].'</td>' : '').
		'<td class="'.$_class.'">'.(empty($isCustom) ? $scripts[$iv['sid']]['ver'] : $iscripts[$iv['sid']]['ver']).'</td>
		<td class="'.$class.'" align="center">'.(!empty($iv['eu_auto_upgrade']) ? '<img src="'.$theme['images'].'success.gif" hight="20px" width="20px" title="'.$l['auto_upgrade_enabled'].'" style="cursor:pointer"/>' : '').'
		<td class="'.$class.'">'.((empty($isCustom) ? ($scripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$scripts[$iv['sid']]['softname'].'/upgrade.xml')) : ($iscripts[$iv['sid']]['ver'] != $iv['ver'] && file_exists($globals['softscripts'].'/'.$iscripts[$iv['sid']]['softname'].'/upgrade.xml'))) ? '<input type="checkbox" name="list[]" value="'.$__user.'-'.$ik.'" '.(!empty($error) ? 'disabled=true' : '').'/>' : '').'</td>
			</tr>';
					
					$i++;
					
				}
				
			}
			
		}
		
		echo '
		</table>
		</div>
		<div id="autoupgrade_process" style="display:none"></div>
		<div id="goto_list_link" style="display:none" class="sai_heading"><center>'.$l['upgrading_completed'].'&nbsp;&nbsp;<a href="'.$globals['ind'].'act=installations&show=upgrade'.'">'.$l['go_to_autoupgrade'].'</a><center></div>
		
		<br /><br />
		<table cellpadding="0" cellspacing="0" width="100%" border="0">
		<tr>
			<td width="50%">&nbsp;</td> 
		</tr>
		<tr>
			<td align="right">';
			
			if(!isset($_REQUEST['upgrade_installation']) || !empty($real_version)){
				echo $email_button;
			}else{
				echo '<div id="upgrade_ins_div2">'.$upgrade_ins_button.'</div>';
			}
			
		echo '</td>
		</tr>
		</table>';
		
		if(!empty($real_version)){
			echo '<div class="notebox" style="width:95%;" id="beta_notice1">
					<table width="100%" cellpadding="5" cellspacing="1" border="0">
						<tr>
							<td width="25px">
								<div class="lirealver" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['real_ver_notice'].'</font></td>
						</tr>
						<tr>
							<td width="25px">
								<div class="lioutdated" style="height:16px;width:16px"></div>
							</td>
							<td><font class="bboxtxt">'.$l['latest_ver_notice'].'</font></td>
						</tr>
					</table>
				</div>';
		}
		
		echo '</form>';
		
	}

}

softfooter();

}

function autoupgrade_ins_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $softid;

	echo '
	<table width="97%" cellpadding="10" cellspacing="0" border="0" class="sai_divroundshad" style="margin:0px auto;">
	<tr>
		<td rowspan="2" width="10%">
			<img src="'.$theme['images'].'admin/'.(empty($report['status']) ? 'softerror.gif' : 'softok.gif').'" />
		</td>
	</tr>
	<tr>
		<td valign="top" class="">'.$report['log'].'</td>
	</tr>
	</table>
	<br />';

}

?>