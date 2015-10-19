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

function editplans_theme(){

global $theme, $globals, $user, $l, $langs, $error, $iscripts, $plans, $done, $unserplan, $acl, $_users, $_cpplan, $allcatwise, $_resellers, $loaded_scripts, $softpanel;

softheader($l['<title>']);

echo '
<form accept-charset="'.$globals['charset'].'" name="editplan" method="post" action="">
<div class="sai_heading" align="center"><img src="'.$theme['images'].'admin/editplandp.gif" />'.$l['title'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />'.(empty($globals['lictype']) ? '<div class="notebox">'.$l['feature_not_available'].'</div>' : '').'<br />';

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

function selectchkbox(id, type){
	if($_(type+id).checked){
		$_(type+id).checked = false;
	}else{
		$_(type+id).checked = true;
	}
	//change td background color
	changebg(id, type);
}

function changebg(id, type){
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

ids4 = new Array('.implode(', ', array_keys($unserplan['scripts'])).');
function checkall(){	
		
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
	
	// for resellers_
	for(x in ids2){	
		changebg(ids2[x],"resellers_");
	}
	// for cpplan_
	for(x in ids3){	
		changebg(ids3[x],"cpplan_");
	}
	
	// for $unserplan
	for(x in ids4){		
		changebg(ids4[x],"scripts_");
	}
};

addonload("checkall();");
// ]]></script>';
	
$unserplan['show_name'] = $unserplan['name'];

// Just to show proper name in text box
if(defined('SOFTRESELLER')){
	$unserplan['show_name'] = str_replace('reseller_'.SOFTRESELLER.'_', '', $unserplan['name']);
}

/*  $reseller $user*/
echo '
<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
	<tr>
	<td colspan="2">
		<table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
			<tr>
				<td width="2%"></td>
				<td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['planhead'].'</b></div> 
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
			<input type="text" name="planname" size="40" value="'.POSTval('planname', $unserplan['show_name']).'">
		</td>
	</tr>
	</table><br /><br />';	

	// Are there control panel plans
	if(!empty($_cpplan)){
		
	echo '<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
	         <tr>
		    <td colspan="2">
		       <table class="sai_ribboneffect" width="107%" style="left:-21px;" border="0"> 
		          <tr>
			     <td width="2%"></td>
			     <td valign="top"><br />
					<font class="sai_ribbonhead" style="color:#FFF;"><b>'.$l['cpanelplan'].'</b></div>
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
			<td colspan="2"><table width="100%" cellpadding="5" cellspacing="1">'; 
			$i = 0;
		foreach($_cpplan as $k => $v){
			if(is_int($i/4)){
				echo '<tr>';
			}
			
			echo '<td id="td_'.$k.'"><input type="checkbox" id="cpplan_'.$k.'" name="cpplan_'.$k.'" '.POSTchecked('cpplan_'.$k, (@$acl['cpplan'][$v['original_key']] == $unserplan['name'] ? $acl['cpplan'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'cpplan_\');"/>&nbsp;&nbsp;
			<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'cpplan_\');"><label>'.$v['original_key'].'</label></a></td>';															
			$i++;									
			if(is_int($i/4)){	
				echo '</tr>';					
			}																								
		}
		
		echo '</table></td>
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
					<td colspan="2"><table width="100%" cellpadding="5" cellspacing="1">'; 
						$i = 0;
						foreach($_resellers as $k => $v){
							if(is_int($i/4)){
								echo '<tr>';
							}
							
							echo '<td id="td_'.$k.'"><input type="checkbox" id="resellers_'.$k.'" name="resellers_'.$k.'" '.POSTchecked('resellers_'.$k, (@$acl['users'][$v['original_key']] == $unserplan['name'] ? $acl['users'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'resellers_\');"/><img src="'.$theme['images'].'reseller15.png" style="margin-bottom:4px;>&nbsp;
							<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'resellers_\');"><label>'.$k.'</label></a></td>';															
							$i++;									
							
							if(is_int($i/4)){	
								echo '</tr>';					
							}																								
						}
					echo '</table></td>
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
				<td colspan="2"><table width="100%" cellpadding="5" cellspacing="1">'; 
					$i = 0;			
					foreach($_users as $k=>$v){
						if(is_int($i/4)){
							echo '<tr>';
						}
						
						echo '<td id="td_'.$k.'"><input type="checkbox" id="users_'.$k.'" name="users_'.$k.'" '.POSTchecked('users_'.$k, (@$acl['users'][$v['original_key']] == $unserplan['name'] ? $acl['users'][$v['original_key']] : '')).' onclick="changebg(\''.$k.'\',\'users_\');" /><img src="'.$theme['images'].'user15.png" style="margin-bottom:4px;">&nbsp; 
						<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'users_\');"><label>'.$v['original_key'].'</label></a></td>';															
						
						$i++;									
						if(is_int($i/4)){	
							echo '</tr>';					
						}																								
					}
		echo '</table>
	</td>
	</tr>
	</table><br /><br />
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
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
				<table width="100%" cellpadding="5" cellspacing="1">';
				
				//Showing All scripts Category wise
				foreach($allcatwise as $ak => $av){
					
					if(empty($allcatwise[$ak])) continue;
					
					echo '<tr>
							<td colspan="4"><center class=heading><b>'.strtoupper($ak).' Apps</b></center></td>
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
											<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, !empty($unserplan['scripts'][$k])).'  onclick="changebg(\''.$k.'\',\'scripts_\');"/>
										</td>
										<td width="15%">
											<div class="sp20_'.$v['softname'].'"></div>
										</td>
										<td>
											<a href="javascript:void(0)" style="text-decoration: none; " onclick="selectchkbox(\''.$k.'\',\'scripts_\');" ><font class="bboxtxt">'.$v['name'].'</font></a>
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

<p align="center"><input type="submit" name="saveplan" value="'.$l['editplan'].'" class="sai_graybluebut" /></p>'.(empty($globals['lictype']) ? '<div class="notebox">'.$l['feature_not_available'].'</div>' : '').'<br />
</form>';

softfooter();

}

?>