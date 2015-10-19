<?php

//////////////////////////////////////////////////////////////
//===========================================================
// bandwidth_theme.php
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

function bandwidth_theme(){

global $theme, $globals, $kernel, $user, $l, $bandwidth, $month, $band, $done, $error;	

	// For ajax bandwidth set
	if(optGET('ajaxband')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['save'];	
			 show_band();
			return true;			
		}
	}
	
	// For ajax bandwidth Reset
	if(optGET('ajaxreset')){			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['reset'];	
			 show_band();
			return true;			
		}
	}




softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'bandwidth.gif" />&nbsp;'.$l['heading'].'</center><br />


<form accept-charset="'.$globals['charset'].'" action="" method="post" name="bandwidthedit" id="bandwidthedit">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">	
		<tr>
			<td>
				<span class="sai_head">'.$l['bandwidth_up_limit'].'</span><br />
				<span class="sai_exp">'.$l['bandwidth_up_limit_exp'].'</span>
			</td>
			<td valign="top">
				<input type="text"  id="bandwidth_up_limit" name="bandwidth_up_limit" size="30" value="'.POSTval('bandwidth_up_limit', '').'" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['bandwidth_limit'].'</span><br />
				<span class="sai_exp">'.$l['bandwidth_limit_exp'].'</span>
			</td>
			<td valign="top">
				<input type="text" id="bandwidth_limit" name="bandwidth_limit" size="30" value="'.POSTval('bandwidth_limit', '').'" />
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				
					<input type="hidden" name="bandwidth_record" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitbandwidth"/> &nbsp; 				
					<input type="button" style="cursor:pointer" value="'.$l['reset_button'].'" name="resetbandwidth" class="sai_graybluebut" id="resetbandwidth"/> &nbsp;<img id="reset_bandwidth" src="'.$theme['images'].'progress.gif" style="display:none">
				
			</td>
		</tr>	
	</table>
</from><br ><br >
<div id="showband">';
show_band();
echo '</div>

<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	
	var message_box = function() {			
		return {
			show_message: function(title, body , image) {			
				var okbutton = \'<input  style="width:75px" class="sai_graybluebut" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
				}					
				if(jQuery(\'.sai_message_box\').html() === null) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );								
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';				
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},		
			close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			}
		}
	}();
	
	
$(document).ready(function(){
	
	// For Setting record
	$("#submitbandwidth").click(function(){
		$("#reset_bandwidth").css("display", "");	
		var band_alert =$("#bandwidth_limit").val();			
		$.ajax({
			type: "POST",
			url: window.location+"&ajaxband=1",					
			data: $("#bandwidthedit").serialize(),
			
			// Checking for error
			success: function(data){
				$("#reset_bandwidth").css("display", "none");
				var result = data.substring(0,1);
				if(result == "1"){
					$_("bandwidth_up_limit").value="";
					$_("bandwidth_limit").value="";							
					var msg = data.substring(1,data.indexOf("<table"));
					var output = data.substring(data.indexOf("<table"));							
					message_box.show_message( "Done ",msg,2);														
					$("#showband").html(output);
					if(band_alert){
						$("#alert_limit").html(band_alert+" GB");
					}
					server_graph_data();																																				
				}
				if(result == "0"){
					var msg = data.substring(1);
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});		
		return false;											
	});
	
	// For Setting record
	$("#resetbandwidth").click(function(){
		$("#reset_bandwidth").css("display", "");				
		$.ajax({
			type: "POST",
			url: window.location+"&ajaxreset=1&bandwidth_reset=1",
			
			// Checking for error
			success: function(data){
				$("#reset_bandwidth").css("display", "none");
				var result = data.substring(0,1);
				if(result == "1"){					
					var msg = data.substring(1,data.indexOf("<table"));
					var output = data.substring(data.indexOf("<table"));							
					message_box.show_message( "Done ",msg,2);														
					$("#showband").html(output);
					$("#alert_limit").html("'.$l['na'].'");
					server_graph_data();																																				
				}
				if(result == "0"){
					var msg = data.substring(1);
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});		
		return false;											
	});
});


// ]]></script>';


softfooter();

}

function show_band(){
	
global $theme, $globals, $kernel, $user, $l, $bandwidth, $month, $band;

echo '<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
<tr>
	<td valign="top" width="50%" style="border-right:1px solid #CCCCCC">
		<div class="sai_heading" align="center">'.$l['bandwidthinfo'].'</div>
		<br />
		<br />
		
		<table align="center" cellpadding="10" cellspacing="0" border="0">
		<tr>
			<td class="sai_head">'.$l['bandwidth_up_limit'].' </td>
			<td class="val">'.(($bandwidth['limit_gb'] == '999999' || empty($bandwidth['limit_gb']) ) ? $l['unlimited'] : $bandwidth['limit_gb'].' GB').'</td>
		</tr>		
		<tr>
			<td class="sai_head">'.$l['Bandwidth_utilised'].'</td>
			<td class="val">'.$bandwidth['used_gb'].' GB</td>
		</tr>		
		<tr>
			<td class="sai_head">'.$l['bandwidth_limit'].'</td>
			<td class="val"><span id="alert_limit">'.(!empty($globals['bandwidth_limit']) ? $globals['bandwidth_limit'].' GB ' : $l['na']).'</sapm></td>
		</tr>				
		</table>
	</td>
	<td valign="top" align="center" width="50%">
		<table align="center" cellpadding="10" cellspacing="10" border="0">
			<tr>
				<div class="sai_heading">'.$l['graphheader'].'</div><br /><br />
			</tr>
			<tr>		
				<div id="server_bandwidth" class="server_graph"></div>
				<br /><div id="server_bandwidth_text">&nbsp;</div>
			</tr>
		</table>
	</td>
</tr>
<tr>
	<td colspan="2" align="center" id="graph_td">';
			echo '<center class="sai_tit">'.$month['mth_txt'].' '.$month['yr'].'</center>';
	        echo'<div style="width:96%; height:300px;" id="bwband_holder"></div>
	</td>
</tr>
<tr> 
	<td align="right">
		<a href="'.$globals['ind'].'act=bandwidth&show='.$month['prev'].'" class="sai_graybluebut" style="text-decoration:none">Prev Month</a>
	</td>
	<td align="left">'.
	($month['next'] > date('Ym') ? '' : '<a href="'.$globals['ind'].'act=bandwidth&show='.$month['next'].'" class="sai_graybluebut" style="text-decoration:none">Next Month</a>').'
	</td>
	
</tr>
</table>

<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.min.js" type="text/javascript"></script>
<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.pie.min.js" type="text/javascript"></script>
<script type="text/javascript" charset="utf-8"><!-- // --><![CDATA[	

function server_graph_data(){	
var server_bandwidth = [
	{ label: "Used",  data: '.(empty($bandwidth['used_gb']) ? 0.01 : $bandwidth['used_gb']).'},
	{ label: "Free",  data: '.(empty($bandwidth['free_gb']) ? $bandwidth['used_gb']*100 : $bandwidth['free_gb']).'}
];

// Fill in the Text
$_("server_bandwidth_text").innerHTML = server_bandwidth[0].data+" GB";
	
// bandwidth
server_graph("server_bandwidth", server_bandwidth);
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

$(document).ready(function(){
	
	function makedata(data){
	
		var fdata = [];
		i = 0;
		for (x in data){
			fdata.push([i, (data[x])]);
			i++;
		}
	
		return fdata;
		
	}

	var d1 = makedata([0, '.implode(', ', $bandwidth['in']).']);
	var d2 = makedata([0, '.implode(', ', $bandwidth['out']).']);
	
	var bandwidth_graph = [
		{ label: "In",  data: d1},
		{ label: "Out",  data: d2}
	];
	
	$.plot($("#bwband_holder"),  bandwidth_graph, {
		series: {
			stack: true,
            points: { show: true },
			lines: { show: true, fill: true, steps: false }
		},
		legend: {
			show: true
		},
        grid: { hoverable: true}
	});
	
	function showTooltip(x, y, contents) {
		$(\'<div id="tooltip">\' + contents + \'</div>\').css( {
			position: "absolute",
			display: "none",
			top: y ,
			left: x + 20,
			border: "1px solid #CCCCCC",
			padding: "2px",
			"background-color": "#EFEFEF",
			"z-index" : 10000,
			opacity: 0.80
		}).appendTo("body").fadeIn(200);
	}

    var previousPoint = null;
    $("#bwband_holder").bind("plothover", function (event, pos, item) {
        $("#x").text(pos.x.toFixed(2));
        $("#y").text(pos.y.toFixed(2));

        if (item) {
			
			if (previousPoint != item.dataIndex) {
				previousPoint = item.dataIndex;
				$("#tooltip").remove();
				var x = item.datapoint[0].toFixed(2),
					y = item.datapoint[1].toFixed(2);
					
				showTooltip(item.pageX, item.pageY,
							"Total : " + parseInt(y) + " MB <br>Day : " + parseInt(x));
			}
		} else {
			$("#tooltip").remove();
			previousPoint = null;
		}
    });
	
});

addonload("server_graph_data();");

// ]]></script>';
}

?>