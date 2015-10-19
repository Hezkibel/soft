<?php

//////////////////////////////////////////////////////////////
//===========================================================
// categories_theme.php
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

function no_autoupgrade_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $categories, $iscripts, $scripts, $top, $no_autoupgrade, $noautoupgrade_catwise, $noautoupgrade_scripts;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">'.$l['show_top_scripts'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';

error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

echo '<form accept-charset="'.$globals['charset'].'" name="reordercat" method="post" action="">

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

ids1 = new Array('.implode(', ', array_keys($noautoupgrade_scripts)).');

function checkallsoftware(checker){	
	for(x in ids1){
		
		$_("scripts_"+ids1[x]).checked = checker.checked;
		
		//change td background color
		changebg(ids1[x],"scripts_");
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
	
	// for scripts
	for(x in ids1){	
		changebg(ids1[x],"scripts_");
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
		<td>
		<span class="sai_head">'.$l['disable_autoupgrade'].'</span><br />
		<span class="sai_exp2">'.$l['disable_autoupgrade_exp'].'</span>
		</td>
		<td valign="top">
		<input type="checkbox" name="disable_autoupgrade" size="30" '.POSTchecked('disable_autoupgrade', @$no_autoupgrade['disable_autoupgrade']).' />
		</td>
	</tr>

	<tr>
		<td width="50%">
			<span class="sai_head">'.$l['uptime'].'</span><br />
			<span class="sai_exp2">'.$l['exp_uptime'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="uptime" size="40" value="'.POSTval('uptime', $no_autoupgrade['uptime']).'">
		</td>
	</tr>
	
	<tr>
	<td colspan="2">
		<div class="notebox" style="width:95%">
			<font class="bboxtxt"><b>'.$l['script_note'].'</b> : <br />'.$l['script_note_exp'].'</font>
		</div>
	</td>
	</tr>';
	
	
	echo '</table><br /><br />';
	
	echo '
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
			//r_print($noautoupgrade_catwise);
			//Showing All scripts Category wise
			foreach($noautoupgrade_catwise as $ak => $av){
				
				
				echo '<tr>
					<td colspan="4"><center class="sai_ribbonhead"><b>'.strtoupper($ak).' Apps</b></center></td>
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
						<table border="0" id="td_'.$k.'">
						<tr>
						<td width="10%">
							<input type="checkbox" id="scripts_'.$k.'" name="scripts_'.$k.'" '.POSTchecked('scripts_'.$k, $no_autoupgrade['scripts'][$k]).'  onclick="changebg(\''.$k.'\',\'scripts_\');"/>
						</td>
						<td width="10%">
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

<p align="center"><input type="submit" name="save" value="'.$l['save'].'" class="sai_graybluebut"  ></p>
</form>';
softfooter();

}

?>