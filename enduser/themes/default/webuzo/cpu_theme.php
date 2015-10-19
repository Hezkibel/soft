<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cpu_theme.php
//===========================================================
// SOFTACULOUS WEBUZO
// Version : 1.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.webuzo.com/ (SOFTACULOUS WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.webuzo.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

function cpu_theme(){

global $theme, $globals, $user, $l, $cpu;

if(optGET('ajax')){	
	echo 'var server_cpu = [
		{ label: "Used",  data: '.$cpu['cpu']['percent'].'},
		{ label: "Free",  data: '.$cpu['cpu']['percent_free'].'}
	];';
		
	return true;

}

softheader($l['<title>']);

echo '
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[													   
function getusage(){	
	if(AJAX("'.$globals['index'].'act=cpu&ajax=true", "server_graph_data(re)")){
		return false;
	}else{
		return true;	
	}
};

function startusage(){
	ajaxtimer = setInterval("getusage()", 5000);
};	

function server_graph_data(re){		

	var server_cpu = [
		{ label: "Used",  data: '.$cpu['cpu']['percent'].'},
		{ label: "Free",  data: '.$cpu['cpu']['percent_free'].'}
	];	
	if(re.length > 0){
		try{
			eval(re);
		}catch(e){ }
	}
	
	// Fill in the Text
	$_("server_cpu_text").innerHTML = server_cpu[0].data+"% / 100%";
		
	// CPU
	server_graph("server_cpu", server_cpu);
	
	
};

// Draw a Server Resource Graph
function server_graph(id, data){		

	$.plot($("#"+id), data, 
	{
		series: {
			pie: { 
				innerRadius: 0.7,
				radius: 1,
				show: true,
				label: {
					show: true,
					radius: 0,
					formatter: function(label, series){
						if(label != "Used") return "";
						return \'<div style="font-size:13px;"><b>\'+Math.round(series.percent)+\'%</b></div><div style="font-size:9px;">\'+label+\'</div>\';	
					}
				}
			}
		},
		legend: {
			show: false
		}
	});
}

addonload("server_graph_data(\'void(0);\'); startusage();");

// ]]></script>';

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'cpu.gif" />&nbsp; &nbsp;'.$l['header'].'</center><br />
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">
<tr>
	<td valign="top" width="50%" style="border-right:1px solid #CCCCCC">
		<div class="sai_heading" align="center">'.$l['cpuinfo'].'</div>
		<br />
		<br />
		
		<table align="center" cellpadding="10" cellspacing="0" border="0">
		<tr>
			<td class="sai_head">'.$l['totalcpu'].'</td>
			<td class="val">'.$cpu['cpu']['limit'].'</td>
		</tr>
		
		<tr>
			<td class="sai_head">'.$l['cpuutilised'].'</td>
			<td class="val" id="cppercent">'.$cpu['cpu']['percent'].' %</td>
		</tr>
		
		<tr>
			<td class="sai_head">'.$l['poweredby'].'</td>
			<td><img src="'.$theme['a_images'].$cpu['cpu']['manu'].'.gif" /></td>
		</tr>
		</table>
				
	</td>
	<td align="center" valign="top">
		<table align="center" cellpadding="10" cellspacing="10" border="0">
			<tr>
				<div class="sai_heading">'.$l['graphheader'].'</div><br /><br />
			</tr>
			<tr>		
				<div id="server_cpu" class="server_graph"></div>
				<br /><div id="server_cpu_text">&nbsp;</div>
			</tr>
		</table>
	</td>
</tr>
</table>
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<p class="sai_notice">'.$l['trademarks'].'</p>';

softfooter();

}

?>