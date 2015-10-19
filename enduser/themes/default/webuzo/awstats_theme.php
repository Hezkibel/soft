<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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
function awstats_theme(){

	global $theme, $globals, $l, $error, $errorlog, $domains_list, $error_log, $softpanel ,$done, $domain;
	
	// for updaet
	if(optGET('ajaxins')){			
		if(!empty($error)){				
			echo '0';
			return false;
		}
		if(!empty($done) && !empty($domain)){
			echo '1'.$domain;
			return true;			
		}
	}
	
	softheader($l['<title>']);	
	
	echo '
	<center>
		<div class="sai_tit"><img src="'.$theme['a_images'].'awstats.gif"  alt=""  />&nbsp;'.$l['lbl_head'].'</div>
	</center><br />
	
	<div id="msg" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
		<span class="sai_tit">'.$l['awstats_head'].'</span><br /><br /><br /><br />
		<table border="0" cellpadding="8" cellspacing="1" width="90%" align="center" class="sai_altrowstable">
		<tr>
			<th align="center" >'.$l['awstats_domain'].'</th>
			<th align="center" >'.$l['awstats_view'].'</th>
		</tr>';
		$i =1;
		foreach($domains_list as $key => $value){
			
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
				<td>'.$key.'</td>
				<td><img title="View" class="awstats_view" id="did'.$key.'" src="' . $theme['a_images'] . 'view.gif" style="cursor:pointer"/></a> &nbsp;<img id="stats_'.$i.'" class="prog_img'.$key.'" src="'.$theme['images'].'progress.gif" title="Processing" style="display:none"></td>';
			$i++;
			
		}
	echo '</tr>
	</table><br /><br />
	</div>
	
	<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[
				
		$(document).ready(function(){			
			
			// Row Style
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");		
				$(this).attr("class", "sai_tr_bgcolor");		
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// For viewing record
			$(".awstats_view").click(function() {
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				var prog_img = document.getElementsByClassName("prog_img"+did)[0].id;
				$("#"+prog_img).css("display", "");
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxins=1&awstats_config="+did,
					// checking for error
					success: function(data){
						var result = data.substring(0,1);
						var msg = data.substring(1);
						var wprotocol = location.protocol;
						var ip = location.host;
						if(result == "1"){
							$("#"+prog_img).css("display", "none");
							window.open(wprotocol+"//"+ip+"/cgi-bin/awstats.pl?config="+msg);
						}
						if(result == "0"){
							alert("'.$l['awstats_error'].'");
						}
					},					
				});
			});	
			
		});	
		// ]]></script>';	
			
	softfooter();
	
}

?>