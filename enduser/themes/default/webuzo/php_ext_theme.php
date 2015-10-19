<?php

//////////////////////////////////////////////////////////////
//===========================================================
// php_ext_theme.php
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

if(!defined('WEBUZO')){
	die('Hacking Attempt');
}

function php_ext_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $apps, $ext_list, $iapps;

	// Make the AJAX CALL
	if(optGET('ajaxphpext')){
		
		// Is there an Error ?
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Success Message
		if(!empty($done)){			
			echo '1'.$l['success_msg'];						
			return true;
		}
		
	}

	softheader($l['<title>']);

echo '<br /><center class="sai_tit"><img src="'.$theme['a_images'].'php_ext.gif" />&nbsp;'.$l['php_ext_head'].'</center><br />

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	$(document).ready(function(){				
		
		// For updating entire file
		$("#savephpext").click(function(){		
			
			$("#progress_img").css("display", "");
			var extensions = [];		
			ids = new Array("'.implode('", "', array_keys($ext_list['php_ext'])).'");				
			for(x in ids){
				if($_("extlist["+ids[x]+"]").checked){													
					extensions[x] = ids[x];							
				}
			}
			function isEmpty(str) {
				return (!str || 0 === str.length);
			}
			
			if(isEmpty(extensions)){
				extensions = ["disableall"];
			}
			
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxphpext=1&save_ext=1",
				data: "extensions="+extensions,
				
				// Checking for error
				success: function(data){
					
					$("#progress_img").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){							
						var msg = data.substring(1);
						message_box.show_message( "Done ",msg,2);																					
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
	if(empty($iapps['1_1']) && empty($iapps['2_1']) && empty($iapps['45_1']) && empty($iapps['124_1'])){
		echo '<br /><br />
		<center><span class="sai_tit">'.$l['no_php'].'</span></center>';
	}else{
		echo '<div id="dispconf">';
		showconf();
		echo '</div>';
	}
	
	softfooter();

}

function showconf(){
	
	global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $apps, $ext_list, $softpanel;
	
	echo '<form accept-charset="'.$globals['charset'].'" name="php_extensions" method="post" action="" id="editphpext">';
	$default_php = $softpanel->getConf('WU_DEFAULT_PHP');
	if(!empty($default_php)){
		$php = $softpanel->get_app_record($default_php);
	}

	echo '<br />
	<center><span class="sai_tit">'.lang_vars($l['php_version'], array($apps[$php]['name'])).'</span><center><br /><br /><br />
		<div style="width:700px; margin:0px auto; ">
			<table border="0" cellpadding="8" cellspacing="0" width="700px" align="center" class="sai_divroundshad">
				<tr>
					<th class="sai_summaryTitle" align="left">'.$l['extensions_head'].'</th>
					<th class="sai_summaryTitle" align="left"><input type="checkbox" onclick="checkall(this);" />'.$l['extensions_all'].'</th>
				</tr><tr>';
				$counter = 0;
				foreach($ext_list['php_ext'] as $k => $v){
					$counter++;
					echo '
						<td><div style="float:left;">'.$k.'</div><div style="text-align: right;"><input type="checkbox" name="extlist['.$k.']" id="extlist['.$k.']" value="1" '.POSTchecked($k, $v).'/></div></td>';
					
					if($counter % 2 == 0){
						echo '</tr>
						<tr>';
					}
				}
			echo '
			</tr>
			</table>
		</div><br />
		<p align="center">			
			<input type="submit" value="'.$l['save'].'" name="save_ext" class="sai_graybluebut" id="savephpext" /> &nbsp;<img id="progress_img" src="'.$theme['images'].	'progress.gif" style="display:none">
		</p>
	</form>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		// Function for checkbox check all
		ids = new Array("'.implode('", "', array_keys($ext_list['php_ext'])).'");
		function checkall(checker){
			for(x in ids){
				$_("extlist["+ids[x]+"]").checked = checker.checked;
			}
		};
		
		var message_box = function(){			
			return {
				show_message: function(title, body , image) {			
					var okbutton = \'<input  style="width:75px" class="sai_submit" type="button" onclick="message_box.close_message();" value="OK" />\';
					if(image == "1"){
						var img = \'<img src="'.$theme['images'].'error.gif" />\';
					}else{
						var img = \'<img src="'.$theme['images'].'confirm.gif" />\';			
					}
										
					if(jQuery(\'.sai_message_box\').html() === null) {
						var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
						jQuery(document.body).append( message );								
						jQuery(".sai_message_box").css("top", jQuery("html, body").scrollTop() + 150);
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
					window.location=window.location;
				}
			}
		}();
	// ]]></script>';	
}

?>