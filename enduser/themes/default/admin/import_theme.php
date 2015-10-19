<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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

function import_theme(){

global $theme, $globals, $user, $l, $error, $updated, $info, $report, $allusers;

softheader($l['<title>']);
echo '<div class="sai_heading" align="center">'.$l['import_head'].'</div>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />';
error_handle($error);

//The necessary JavaScripts
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
ids = new Array("'.implode('", "', array_keys($allusers)).'");
updatedids = new Object();

for(x in ids){
	updatedids["soft_"+ids[x]] = false;
}

function import_user(user, resp){
	
	if(ids.length < 1 || ids[0].length < 1){
		alert("'.$l['no_users'].'");
		return false;
	}
	
	// Do we need to import manual installations as well ? 
	var manual_ins = $("#manual_ins").is(":checked");
	var fantastico_ins = $("#fantastico_ins").is(":checked");
	var installatron_ins = $("#installatron_ins").is(":checked");
	var cpaddons_ins = $("#cpaddons_ins").is(":checked");
	
	
	//Update the Status with Response
	if(user.length > 0){
		$_("responses").innerHTML = $_("responses").innerHTML + resp;
		updatedids["soft_"+user] = true;
	}else{
		$_("responses").innerHTML = $_("responses").innerHTML + \'<div class="sai_heading" align="center">'.$l['importing_scripts'].'</div><img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />\';
		$_("start_import").disabled = true;
	}

	for(x in ids){
		if(updatedids["soft_"+ids[x]] == false){
			AJAX("'.$globals['index'].'act=import&username="+ids[x]+"&manual_ins="+manual_ins+"&fantastico_ins="+fantastico_ins+"&installatron_ins="+installatron_ins+"&cpaddons_ins="+cpaddons_ins, "import_user(\'"+ids[x]+"\', re)");
			return true;
		}
	}
	
	$_("responses").innerHTML = $_("responses").innerHTML + "<div class=\"heading\">'.$l['updating_completed'].'<a href=\"'.$globals['ind'].'act=softwares'.'\">'.$l['go_to_soft'].'</a></div>";
	
};

// ]]></script>

<br />
<div class="sai_reviewform" style="width:95%; margin:0px auto;">
<br /><br />
<center class="bboxtxt">
<b style="color:#333">'.$l['import_exp'].'</b>
</center>
<br /><br />
<br /><br />
<div style="margin-left:20px" class="sai_exp2">
<input type="checkbox" name="manual_ins" id="manual_ins"/> '.$l['manual_ins'].'<br /><br />
<input type="checkbox" name="fantastico_ins" id="fantastico_ins" checked="checked"/> '.$l['fantastico_ins'].'<br /><br />
<input type="checkbox" name="installatron_ins" id="installatron_ins" checked="checked"/> '.$l['installatron_ins'].'<br /><br />
<input type="checkbox" name="cpaddons_ins_ins" id="cpaddons_ins"/ checked="checked"> '.$l['cpaddons_ins'].'<br /><br />
</div>
<br /><br />
</div>
<br /><br />
<center class="bboxtxt">
<input type="button" name="start_import" id="start_import" onclick="import_user(\'\', \'\');" value="'.$l['start_import'].'" class="sai_graybluebut" /><br /><br />
</center>

<div id="responses">
</div>';

softfooter();

}

function import_list_theme(){

global $user, $globals, $scripts, $iscripts, $l, $theme, $error, $saved, $report, $list, $username;

	echo '<table width="97%" cellpadding="10" cellspacing="1" border="0" class="sai_divroundshad" style="margin:0px auto;">
	<tr>
		<td colspan="3" class="sai_head">'.$l['importing_of'].' : '.$username.'</td>
	</tr>';
	
	if(!empty($list)){
	
		foreach($list as $k => $v){		
			echo '<tr>
				<td class="lione">'.$scripts[$v['sid']]['name'].'</td>
				<td class="lione"><a href="'.$v['softurl'].'" target="_blank">'.$v['softurl'].'</a></td>
				<td class="lione">'.$v['ver'].'</td>
			</tr>';
		}
	
	}else{
		echo '<tr>
			<td colspan="3" class="lione">'.$l['no_import'].'</td>
		</tr>';
	}
		
	echo '</table>
	<br />';

}

?>