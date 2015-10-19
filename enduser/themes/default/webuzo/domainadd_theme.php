<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainadd_theme.php
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

function domainadd_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done;

// For adding MX Record
if(optGET('ajaxdomadd')){
	
	if(!empty($error)){			
		echo '0'.current($error);
		return false;
	}
	// Creating domain
	if(!empty($done)){
		echo '1'.$l['suc_dom_added'];
		return true;
	}
}

softheader($l['<title>']);

error_handle($error, '100%');

echo '<form accept-charset="'.$globals['charset'].'"  name="importsoftware" method="post" action="" onsubmit="return checkform();" >
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

var dompath = false;

var message_box = function(){			
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


function show(){
	if($_("isaddon").checked){		
		$_("addon").style.display = "";
		$_("addon1").style.display = "";
		
	}else{
		$_("addon").style.display = "none";
		$_("addon1").style.display = "none";
	
	}
}
addonload("show();");

function checkform(){
	try{
		if(!formcheck() || !checkdbname(\'softdb\', true)){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	return true;
};

function suggestdompath(domval){
	if(dompath){
		return true;	
	}
	$_("domainpath").value = "www/"+$_("domain").value.trim();
}

$(document).ready(function(){

	// For creating MX Record	
	$("#submitdomain").click(function(){
		$("#createdomain").css("display", "");	
		var domain = ($("#domain").val());
		if($_("isaddon").checked == true){
			var isaddon = 1;
			var domainpath = ($("#domainpath").val());
			var ip = ($("#ip").val());
			var tmp = "&domainpath="+domainpath;
		}else{
			var selectdomain = ($("#selectdomain").val());
			var isaddon = 0;
			var tmp = "&selectdomain="+selectdomain;
		}
		
		$.ajax({
			type: "POST",
			url: window.location+"&submitdomain=1&ajaxdomadd=1",					
			data: "domain="+domain+"&isaddon="+isaddon+tmp+"&ip="+ip,
			
			// Checking for error
			success: function(data){
				$("#createdomain").css("display", "none");
				var result = data.substring(0,1);
				var msg = data.substring(1);
				if(result == "1"){
					$_("domain").value="";
					$_("ip").value="";
					if($_("isaddon").checked == true){
						$_("domainpath").value="www/";
					}
					message_box.show_message( "Done ",msg,2);														
				}
				if(result == "0"){	
					$("#createdomain").css("display", "none");
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});												
	});
});
// ]]></script>

<center><div class="sai_tit"><img src="'.$theme['a_images'].'adddomain.gif" alt="" />&nbsp;'.$l['domain_add_label'].'</div></center>
<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['domain_label'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="domain" id="domain" onkeyup="suggestdompath(this);" size="30" value="'.POSTval('domain', '').'" />
		</td>
	</tr>
	<tr>
		<td>
			<span class="sai_head">'.$l['is_addon_part'].'</font></span><br/><span class="sai_exp">'.$l['exp_checkaddon'].'</span>
		</td>
		<td>
			<input type="checkbox" name="isaddon" id="isaddon" '.POSTchecked('isaddon', true).' onclick="show(this);">
		</td>
	</tr>
	<tr id="addon">
		<td>
			<span class="sai_head">'.$l['domain_path'].'</span><span class="sai_exp">'.$softpanel->user['homedir'].'/'.'</span>
		</td>
		<td valign="top">
			<input type="text" name="domainpath" id="domainpath" size="30" value="'.stripslashes(POSTval('domainpath', 'www/')).'" onfocus="" />
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
//Add an event handler
$_("domainpath").onkeydown = function(){
	dompath = true;
}
// ]]></script>
	</tr>
	<tr id="addon1">
		<td width="35%">
			<span class="sai_head">'.$l['ip_label'].'</span><br/><span class="sai_exp">'.$l['exp_ip'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="ip" id="ip" size="30" value="'.POSTval('ip', '').'" />
		</td>
	</tr>		
	<tr>
		<td colspan="2">
			<p align="center">
				<input type="button" style="cursor:pointer" name="submitdomain" value="'.$l['submitdomain'].'" id="submitdomain" class="sai_graybluebut"/> &nbsp;<img id="createdomain" src="'.$theme['images'].'progress.gif" style="display:none">
			</p>
		</td>
	</tr>
	
</table>
<br /><br />


</form>';

softfooter();

}

?>
