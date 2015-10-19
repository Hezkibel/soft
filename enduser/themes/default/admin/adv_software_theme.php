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

function adv_software_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $admintag, $admintag_catwise, $adv_software, $iscripts, $reset;

softheader($l['<title>']);

echo '<div class="sai_heading" align="center">&nbsp;&nbsp;&nbsp;'.$l['adv_software_head'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />';

error_handle($error);

if(!empty($saved)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_saved'].'</div><br />';
}

if(!empty($reset)){
	echo '<br /><div class="sai_success"><img src="'.$theme['images'].'success.gif" /> '.$l['settings_reset'].'</div><br />';
}

if(!empty($admintag_catwise)){

	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	function reset_field(input, field){	
		var this_page = "'.$globals['index'].'act=adv_software";
		window.location = this_page+"&soft="+input;	
		if(field){
			window.location = this_page+"&soft="+input+"&field="+field;	
		}	
	};
	
	function reset_all(){	
		var this_page = "'.$globals['index'].'act=adv_software";
		window.location = this_page+"&reset_all="+1;
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
	};
	
	// ]]></script>
	
	<div id="stooltip" style="display:none; position:absolute; top: 0px; left: 0px; border: 1px solid #CCC; padding: 8px; background: #FFF; z-index:1000;"></div>
	<form accept-charset="'.$globals['charset'].'" name="adv_software" method="post" action="">
	<link href="'.$globals['mirror_images'].'sprites/20.css" rel="stylesheet" type="text/css" />
		<table width="721" cellpadding="6" cellspacing="0" border="0" style="margin:0px auto;" class="sai_divroundshad">
		
		<tr>
			<td colspan="2">
				<table width="100%" cellpadding="5" cellspacing="1" border="0">';
				
				//r_print($adv_software);
				//r_print($admintag_catwise);
				//Showing All scripts Category wise
				foreach($admintag_catwise as $ak => $av){		
					
					echo '<tr>
							<td colspan="4"><center class=ribbonhead><b>'.strtoupper($ak).' Apps</b></center></td>
						</tr>';
	
					echo '<tr>
							<td colspan="2">
								<table width="107%" border="0" class="sai_ribboneffect" style="left:-26px;">
									<tr>
										<td width="2%"></td>
										<td valign="top" width="280">
											<br /><font class="bboxtxt" style="color:#FFF;"><b>'.$l['cat_'.$ak.'_'.$kk].'</b></font>
										</td>
										<td align="center" style="cursor:pointer">
											<font class="bboxtxt" style="color:#FFF;" id="enable" onmouseover="showtip(\''.$l['enable_exp'].'\', this);" ><b>'.$l['enable'].'</b></font>
										</td>
										<td align="center" style="cursor:pointer">
											<font class="bboxtxt" style="color:#FFF;" onmouseover="showtip(\''.$l['default_exp'].'\', this);" ><b>'.$l['default'].'</b></font>
										</td>
										<td align="center" style="cursor:pointer">
											<font class="bboxtxt" style="color:#FFF;" onmouseover="showtip(\''.$l['editable_exp'].'\', this);" ><b>'.$l['editable'].'</b></font>
										</td>
										<td align="right" width="40"></td>
									</tr>
								</table>
							</td>
						</tr>';
					
					foreach($av as $kk => $vv){
						
						if(empty($av[$kk])) continue;
						
						foreach($vv as $k => $v){
						
							//r_print($v);
							echo '<tr>
							<td>
							<table border="0" width="100%" id="td_'.$k.'" cellpadding="5" cellspacing="0" class="adv_cat">
								<tr>
								<th colspan="4">
									<table border="0" width="100%" cellpadding="3" cellspacing="0">
										<tr>
											<td width="16"><div class="sp20_'.$iscripts[$k]['softname'].'"></div></td>
											<td><font class="bboxtxt"><b>'.$iscripts[$k]['name'].'</b></font></td>
										</tr>
									</table>
								</th>
								<th align="left" width="2%">
									<img src="'.$theme['images'].'restore.gif" onclick="reset_field('.$k.')" onmouseover="showtip(\''.lang_vars($l['reset_soft'], array($iscripts[$k]['name'])).'\', this);" style="cursor:pointer"/>
								</th>
								</tr>';
							
							foreach($v as $dk => $dv){
								//r_print($dv);
								$tmp = array();
								
								echo '<tr>
									<td width="40%">
										<font class="bboxtxt"><b>'.$dv['head'].'</b></font>
									</td>
									<td align="center" width="10%">
										<input type="checkbox" name="'.$k.'_'.$dk.'_enabled" id="'.$k.'_'.$dk.'_enabled" '.POSTchecked($k.'_'.$dk.'_enabled', $dv['enabled']).'>
									</td>
									<td width="30%">';
									
									// Is it a checkbox or textbox or textarea ?
									if(preg_match('/^<textarea/is', $dv['tag'])){
										$tmp['type'] = 'textarea';
									}else{
										preg_replace('/^<input(.*?)type="(.*?)"/ies', '$tmp[\'type\'] = trim(\'$2\')', $dv['tag']);
									}
									
									// Is it checkbox ?	
									if($tmp['type'] == 'checkbox'){
									
										$tmp['default'] = (isset($adv_software[$k][$dk]['default']) ? ($adv_software[$k][$dk]['default'] == 'checked="checked"' ? 'checked="checked"' : '' ) : (preg_match('/checked="checked"/is', $dv['tag']) ? 'checked="checked"' : ''));	
																
										echo '<center><input type="checkbox" name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default" '.POSTchecked($k.'_'.$dk.'_default', $tmp['default']).'></center>';
									}
									
									// Is it a textbox ? 
									if($tmp['type'] == 'text'){
									
										preg_replace('/^<input(.*?)value="(.*?)"/ies', '$tmp[\'value\'] = trim(\'$2\')', $dv['tag']);
										
										if(isset($adv_software[$k][$dk]['default']) && !empty($adv_software[$k][$dk]['default'])){
											$value = $adv_software[$k][$dk]['default'];
										}else{
											$value = $tmp['value'];
										}
										
										echo '<input type="text" name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default" value="'.POSTval($k.'_'.$dk.'_default', $value).'" />';
									}
									
									// Is it a textarea ?
									if($tmp['type'] == 'textarea'){
									
										preg_replace('/^<textarea(.*?)>(.*?)<\/textarea>/ies', '$tmp[\'value\'] = trim(\'$2\')', $dv['tag']);								
										preg_replace('/^<textarea(.*?)cols="(.*?)"(.*?)>(.*?)<\/textarea>/ies', '$tmp[\'cols\'] = trim(\'$2\')', $dv['tag']);								
										preg_replace('/^<textarea(.*?)rows="(.*?)"(.*?)>(.*?)<\/textarea>/ies', '$tmp[\'rows\'] = trim(\'$2\')', $dv['tag']);
										
										if(isset($adv_software[$k][$dk]['default']) && !empty($adv_software[$k][$dk]['default'])){
											$value = $adv_software[$k][$dk]['default'];
										}else{
											$value = $tmp['value'];
										}
										
										echo '<textarea name="'.$k.'_'.$dk.'_default" id="'.$k.'_'.$dk.'_default"'.(!empty($tmp['cols']) ? ' cols="'.$tmp['cols'].'"' : '').(!empty($tmp['rows']) ? ' rows="'.$tmp['rows'].'"' : '').' >'.POSTval($k.'_'.$dk.'_default', $value).'</textarea>';
									}			
									
									echo '</td>
									<td align="center" width="10%">
										<input type="checkbox" name="'.$k.'_'.$dk.'_editable" id="'.$k.'_'.$dk.'_editable" '.POSTchecked($k.'_'.$dk.'_editable', $dv['editable']).' >
									</td>
									
									<td width="5%">
										<img src="'.$theme['images'].'restore.gif" onclick="reset_field('.$k.', \''.$dk.'\');" onmouseover="showtip(\''.$l['reset'].'\', this);" style="cursor:pointer"/>
									</td>
									</tr>';
							}
							
							echo '</table>
								</td>
							</tr>
							<tr><td colspan="10">&nbsp;</td></tr>';																						
						}
					}
				}	
				
			echo '</td></tr></table></td>
		</tr>
	</table>
	<br />
	<p align="center"><input type="submit" name="save" value="'.$l['save'].'" class="sai_graybluebut" > &nbsp; &nbsp;
	<input type="button" onclick="reset_all()" value="'.$l['reset_all'].'" class="sai_graybluebut" ></p>
	</form>';
}else{
	echo '<h2 align="center">'.$l['no_results'].'</h2>';
}

softfooter();

}

?>