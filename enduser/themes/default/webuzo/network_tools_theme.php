<?php

//////////////////////////////////////////////////////////////
//===========================================================
// network_tools_theme.php
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

function network_tools_theme(){

global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain, $lookup, $action;

// For Detail
if(optGET('domain_lookup')){
	
	if(!empty($error)){
		echo '0'.current($error);
		return false;
	}
	
	if(!empty($done)){
		showdetail();
		return true;
	}
	
}

softheader($l['<title>']);

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div><br /><br />';
}

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'network_tools.gif" />&nbsp;'.$l['network_tools'].'</center>
<form accept-charset="'.$globals['charset'].'" name="domain_lookup" method="post" action="" id="domain_lookup">
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;">
	<tr>
		<td width="50%">
			<span class="sai_head">'.$l['lbl_head'].'</font></span><br/><span class="sai_exp">'.$l['lookup_desc'].'</span>
		</td>
		<td>			
			<input type="text" name="domain_name" id="domain_name" size="30" value="'.POSTval('domain_name', '').'" />
		</td>
	</tr>
	<tr>
		<td>
			<p align="right">
				<input type="button" class="sai_graybluebut" name="dns_lookup" value="'.$l['domain_lookup'].'" id="dns_lookup"/>
			</p>
		</td>
		<td>
			<p align="left">
				<input type="button" class="sai_graybluebut" name="dns_traceroute" value="'.$l['domain_trace'].'" id="dns_traceroute"/> &nbsp;<img id="trace_prog" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>
</table>
</form><br />

	<div id="domain_lookup_tab" style="display:none"></div></br>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	var message_box = function(){			
			return{
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
						
			// For close details
			$(".dclose").click(function(){
				$("#domain_lookup_tab").slideUp(\'slide\',\'\',5000);
			});
			
			// Domain Lookup
			$("#dns_lookup").click(function(){
				
				var action = $(this).attr(\'id\');
				action = action.substr(4);
				var domain = $("#domain_name").val();
				
				$.ajax({
					type: "POST",
					url: window.location+"&domain_lookup=1&domain_name="+domain+"&action="+action,
					
					// Checking for error
					success: function(data){
						var result = data.substring(0,1);
						if(result == "0"){								
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}else{										
							$("#domain_lookup_tab").html(data);
							$("#domain_lookup_tab").slideDown(\'slide\',\'\',5000);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});		
														
			});	
			
			// Domain Lookup
			$("#dns_traceroute").click(function(){
				
				$("#trace_prog").css("display", "");
				var action = $(this).attr(\'id\');
				action = action.substr(4);
				var domain = $("#domain_name").val();
				
				$.ajax({
					type: "POST",
					url: window.location+"&domain_lookup=1&domain_name="+domain+"&action="+action,
					
					// Checking for error
					success: function(data){
						$("#trace_prog").css("display", "none");																		
						var result = data.substring(0,1);
						if(result == "0"){
							$("#trace_prog").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}else{										
							$("#domain_lookup_tab").html(data);
							$("#domain_lookup_tab").slideDown(\'slide\',\'\',5000);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});		
														
			});	
						
		});	
		// ]]></script>';
		
softfooter();

}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain, $lookup, $action;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" style="padding:15px;">
	<tr>
		<td> 
			<span class="sai_head" style="text-align:center">'.lang_vars($l['action_for'], array(ucfirst($action))).' '.$domain.'</span><br /><br />	
			<textarea  name="kpaste" rows="18" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off">'.$lookup[$action].'</textarea>
	</tr>
	<tr>
		<td colspan="2">
			<center ><div class="dclose" style="cursor:pointer"><b><u>'.$l['close_detail'].'</u></b></div></center>
		</td>
	</tr>	
</table>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	$(document).ready(function(){	
		
		// For close details
		$(".dclose").click(function() {	
			$("#domain_lookup_tab").slideUp(\'slide\',\'\',1000);			
		});	
	});		
// ]]></script>';

}

?>