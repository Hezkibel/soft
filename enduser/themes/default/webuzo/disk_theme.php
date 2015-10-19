<?php

//////////////////////////////////////////////////////////////
//===========================================================
// disk_theme.php
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

function disk_theme(){

global $theme, $globals, $user, $l, $disk;



softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'disk.gif" />&nbsp;'.$l['header'].'</center><br />

<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
	<tr>
		<td valign="top" width="50%" style="border-right:1px solid #CCCCCC">
			<div class="sai_heading" align="center">'.$l['diskinfo'].'</div>
			<br />
			<br />
			
			<table align="center" cellpadding="10" cellspacing="0" border="0">
				<tr>
					<td class="sai_head">'.$l['totaldisk'].'</td>
					<td class="val">'.$disk['disk']['total']['limit_gb'].' GB</td>
				</tr>
					
					
				<tr>
						<td class="sai_head">'.$l['diskutilised'].'</td>
						<td class="val">'.$disk['disk']['total']['used_gb'].' GB</td>
				</tr>					
			</table>
		</td>
		<td valign="top" align="center" width="50%">
			<table align="center" cellpadding="10" cellspacing="10" border="0">
				<tr>
					<div class="sai_heading">'.$l['graphheader'].'</div><br /><br />
				</tr>
				<tr>		
					<div id="server_disk" class="server_graph"></div>
					<br /><div id="server_disk_text">&nbsp;</div>
				</tr>
			</table>
		</td>
	</tr>
</table>
<br />
<br />

<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
	<tr>
		<td valign="top" width="50%" style="border-right:1px solid #CCCCCC">
			<div class="sai_heading" align="center">'.$l['inodesinfo'].'</div>
			<br />
			<br />
			
			<table align="center" cellpadding="10" cellspacing="0" border="0">
				<tr>
					<td class="sai_head">'.$l['inodestotal'].'</td>
					<td class="val">'.$disk['inodes']['total']['limit'].'</td>
				</tr>
					
					
				<tr>
					<td class="sai_head">'.$l['inodesutilised'].'</td>
					<td class="val">'.$disk['inodes']['total']['used'].'</td>
				</tr>					
			</table>
		</td>
		<td valign="top" align="center" width="50%">			
			<table align="center" cellpadding="10" cellspacing="10" border="0">
			<tr>
				<div class="sai_heading">'.$l['inodesheader'].'</div><br /><br />
			</tr>
			<tr>		
				<div id="server_inodes" class="server_graph"></div>
				<br /><div id="server_inodes_text">&nbsp;</div>
			</tr>
		</table>
			<br />
			<div id="inodes_holder">
		</td>
	</tr>
</table>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	

function server_graph_data(){	
var server_disk = [
	{ label: "Used",  data: '.$disk['disk']['total']['used_gb'].'},
	{ label: "Free",  data: '.$disk['disk']['total']['free_gb'].'}
];

var server_inodes = [
	{ label: "Used",  data: '.$disk['inodes']['total']['used'].'},
	{ label: "Free",  data: '.$disk['inodes']['total']['free'].'}
];

// Fill in the Text
$_("server_disk_text").innerHTML = server_disk[0].data+" GB / "+Math.round((server_disk[0].data+server_disk[1].data)*100)/100+" GB";

$_("server_inodes_text").innerHTML = server_inodes[0].data+"  / "+Math.round((server_inodes[0].data+server_inodes[1].data)*100)/100;	

// disk
server_graph("server_disk", server_disk);

server_graph("server_inodes", server_inodes);
}

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

addonload("server_graph_data();");
// ]]></script>';

softfooter();

}

?>