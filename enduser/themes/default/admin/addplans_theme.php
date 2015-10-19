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

function addplans_theme(){

global $theme, $globals, $user, $l, $langs, $error, $reseller, $iscripts, $plans, $done, $_cpplan, $_users, $allcatwise, $_resellers, $loaded_scripts, $softpanel;

softheader($l['<title>']);

echo '<br /><form accept-charset="'.$globals['charset'].'" name="addplan" method="post" action="">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/addplan.gif" />&nbsp; '.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />'.(empty($globals['lictype']) ? '<div class="sai_notebox">'.$l['feature_not_available'].'</div>' : '').'<br />';

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_notice"><img src="'.$theme['images'].'success.gif" /> &nbsp; '.$l['done'].'</div><br />';
}

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array("'.implode('", "', array_keys($_users)).'");

function checkalluser(checker){
	for(x in ids){
		$_("users_"+ids[x]).checked = checker.checked;
		changebg(ids[x], "users_");
	}
};

ids1 = new Array('.implode(', ', array_keys($iscripts)).');
function checkallsoftware(checker){	
	for(x in ids1){
		$_("scripts_"+ids1[x]).checked = checker.checked;
		
		//change td background color
		changebg(ids1[x],"scripts_");
	}	
};

ids2 = new Array("'.implode('", "', array_keys($_resellers)).'");
function checkallreseller(checker){	
	for(x in ids2){
		$_("resellers_"+ids2[x]).checked = checker.checked;
		changebg(ids2[x], "resellers_");
	}
};

ids3 = new Array("'.implode('", "', array_keys($_cpplan)).'");
function checkallcpplan(checker){	
	for(x in ids3){
		$_("cpplan_"+ids3[x]).checked = checker.checked;
		changebg(ids3[x], "cpplan_");
	}	
};

function selectchkbox(id,type){
	if($_(type+id).checked){
		$_(type+id).checked = false;
	}else{
		$_(type+id).checked = true;
	}
	
	//change td background color
	changebg(id,type);
}

function changebg(id,type){
	try{
		if($_(type+id).checked){
			$("#td_"+id).css({ backgroundColor: "#C5EAFF" });
			$("#td_"+id).css({boxShadow: "0 0 4px #3EA0DC"});
			
		}else{
			$_("td_"+id).style.background = "#ffffff";
			$("#td_"+id).css({boxShadow: "0 0 4px #FFF"});
		}
	}catch(e){}
};

function checkall(){
	
	// for users
	for(x in ids){	
		changebg(ids[x],"users_");
	}
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");
	}
	
	// for scripts
	for(x in ids2){	
		changebg(ids2[x],"resellers_");
	}
	// for scripts
	for(x in ids3){	
		changebg(ids3[x],"cpplan_");
	}	
};

addonload("checkall();");
// ]]></script>';

/*  $reseller $user*/
echo '<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_reviewform">
	<tr>
	<td colspan="2">
		<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
			<tr>
				<td width="2%"></td>
				<td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['planhead'].'</b></font> 
				</td>
			</tr>
		</table>
	</td>
	</tr>
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['planname'].'</span><br />
			<span class="sai_exp2">'.$l['exp_plan'].'</span>
		</td>
		<td valign="top">'.(defined('SOFTRESELLER') ? 'reseller_'.SOFTRESELLER.'_' : '').'
			<input type="text" name="planname" size="40" value="'.POSTval('planname', '').'">
		</td>
	</tr>';
	
	if(!defined('SOFTRESELLER')){
	echo '<tr>
		<td colspan="2">
			<span class="sai_exp2">'.$l['default_plan_note'].'</span><br />
		</td>
	</tr>';
	}
	
	echo '</table><br /><br />';
	
	// Are there control panel plans
	if(!empty($_cpplan)){
		echo '<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
				<tr>
					<td colspan="2">
						<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
							<tr>
								<td width="2%"></td>
								<td valign="top"><br />
									<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['cpanelplan'].'</b></font>
								</td>
							</tr>
					</table>
				</td>
			</tr>
		<tr>
			<td colspan="2">
			<span>'.$l['cpplanselect'].'</span><br /><br />
			<span class="sai_exp2">'.$l['select_all'].'<input type="checkbox" onclick="checkallcpplan(this);" /></span>&nbsp;
			<span class="sai_exp2">'.$l['overwrite_settings'].'<input type="checkbox" name="cpplansetting"/></span>
			</td>
		</tr>
		<tr>
			<td colspan="2">
			<table width="100%" cellpadding="10" cellspacing="1" border="0">'; 
			$i = 0;
			foreach($_cpplan as $k => $v){
				if(is_int($i/4)){
					echo '<tr>';
				}
				echo '<td id="td_'.$k.'" valign="top" >
						<input type="checkbox" id="cpplan_'.$k.'" name="cpplan_'.$k.'" '.POSTchecked('cpplan_'.$k, '').' onclick="changebg(\''.$k.'\',\'cpplan_\');" />
				<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'cpplan_\');"><font class="sai_bboxtxt">'.$v['original_key'].'</font></a></td>';															
				$i++;									
				if(is_int($i/4)){	
				echo '</tr>';					
				}																								
			}
			echo '</table>
			</td>
			</tr>
		</table><br /><br />';
	
	}
	
	if(!defined('SOFTRESELLER') && method_exists('softpanel', 'listresellers')){
		echo '<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
				<tr>
					<td colspan="2">
						<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
							<tr>
								<td width="2%"></td>
								<td valign="top"><br />
									<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['resellerselect'].'</b></div>
								</td>
							</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<span>'.$l['exp_resellerselect'].'</span><br /><br />
				<span class="sai_exp2">'.$l['select_all'].'<input type="checkbox" onclick="checkallreseller(this);" /></span>&nbsp;
				<span class="sai_exp2">'.$l['overwrite_settings'].'<input type="checkbox" name="resellersetting"/></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<table width="100%" cellpadding="5" cellspacing="1">'; 
					$i = 0;
					foreach($_resellers as $k => $v){
						if(is_int($i/4)){
							echo '<tr>';
						}
						echo '<td id="td_'.$k.'"><input type="checkbox" id="resellers_'.$k.'" name="resellers_'.$k.'" '.POSTchecked('resellers_'.$k, '').' onclick="changebg(\''.$k.'\',\'resellers_\');"/><img src="'.$theme['images'].'reseller15.png" style="margin-bottom:4px;>&nbsp;<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'resellers_\');"><font class="sai_bboxtxt">'.$k.'</font></a></td>';															
						$i++;									
						if(is_int($i/4)){	
							echo '</tr>';					
						}																								
					}
				echo '</table>
				</td>
			</tr>
			</table><br /><br />';
	}
	
	echo '<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
			<tr>
				<td colspan="2">
					<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
						<tr>
							<td width="2%"></td>
							<td valign="top"><br />
								<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['userselect'].'</b></div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<span>'.$l['exp_userselect'].'</span><br /><br />
				<span class="sai_exp2">'.$l['select_all'].'<input type="checkbox" onclick="checkalluser(this);" /></span>
				<span class="sai_exp2">'.$l['overwrite_settings'].'<input type="checkbox" name="usersetting" /></span>
				</td>
			</tr>
			<tr>
				<td colspan="2">
				<table width="100%" cellpadding="10" cellspacing="1" border="0">'; 
					$i = 0;
					foreach($_users as $k=>$v){
						
						if(is_int($i/4)){
							echo '<tr>';
						}
					
						echo '<td id="td_'.$k.'" valign="top">
						<input type="checkbox" id="users_'.$k.'" name="users_'.$k.'" '.POSTchecked('users_'.$k, '').' onclick="changebg(\''.$k.'\',\'users_\');" />
						<img src="'.$theme['images'].'user15.png" style="margin-bottom:4px;"> <a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'users_\');"><font class="sai_bboxtxt">'.$v['original_key'].'</font></a></td>';															
						$i++;	
														
						if(is_int($i/4)){	
							echo '</tr>';					
						}
					}
				
				echo '</table>
				</td>
			</tr>
			</table><br /><br />
	
	<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
	<tr>
		<td colspan="2">
			<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
				<tr>
					<td width="2%"></td>
					<td valign="top"><br />
						<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['scriptselect'].'</b></div>
					</td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td colspan="2">
		<span>'.$l['exp_scriptselect'].'</span><br /><br />
		<span class="sai_exp2">'.$l['select_all'].'<input type="checkbox" onclick="checkallsoftware(this);" /></span>
		</td>
	</tr>
	
	<tr>
		<td colspan="2">
			<table width="100%" cellpadding="5" cellspacing="1" border="0">';
			//r_print($allcatwise);
			//Showing All scripts Category wise
			foreach($allcatwise as $ak => $av){
				
				if(empty($allcatwise[$ak])) continue;
				
				echo '<tr>
					<td colspan="4"><center class=ribbonhead><b>'.strtoupper($ak).' Apps</b></center></td>
				</tr>';
				
				foreach($av as $kk => $vv){
					
					if(empty($av[$kk])) continue;

					echo '<tr>
							 <td colspan="2">
								<div class="sai_ribbonhead">'.$l['cat_'.$ak.'_'.$kk].'</div>
								<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" />
							</td>
							</tr>';
					$i = 0;
					foreach($vv as $k => $v){
					
						if(is_int($i/4)){
							echo '<tr>';
						}
			
						echo '<td width="20%">
						<table width="100%" border="0" id="td_'.$k.'">
						<tr>
						<td width="10%">
							<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, '').'  onclick="changebg(\''.$k.'\',\'scripts_\');"/>
						</td>
						<td width="15%">
							<div class="sp20_'.$v['softname'].'"></div>
						</td>
						<td>
							<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'scripts_\');" ><font class="sai_bboxtxt">'.$v['name'].'</font></a>
						</td>
						</tr>
						</table>
						</td>';															
						$i++;		
													
						if(is_int($i/4)){	
							echo '</tr>';					
						}																								
					}
				}
			}			
			
		echo '</table></td>
	</tr>
</table>

<p align="center"><input type="submit" name="saveplan" value="'.$l['saveplan'].'" class="sai_graybluebut"  ></p>'.(empty($globals['lictype']) ? '<div class="sai_notebox">'.$l['feature_not_available'].'</div>' : '').'<br />
</form>';

softfooter();

}

?>