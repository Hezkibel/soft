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

function apache_conf_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $done, $filename, $iapps, $web_server;

	
	// For updating entir file
	if(optGET('ajaxapache')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		if(!empty($done)){			
			echo '1'.$l['change_final_file'];						
			return true;
		}
	}

softheader($l['<title>']);

if($web_server == '18' ){
	echo '<br /><center class="sai_tit"><img src="'.$theme['a_images'].'nginx_conf.gif" />&nbsp;'.$l['nginxhead'].'</center><br />';
}elseif($web_server == '60' ){
	echo '<br /><center class="sai_tit"><img src="'.$theme['a_images'].'lighttpd_conf.gif" />&nbsp;'.$l['lighttpdhead'].'</center><br />';
}else{
	echo '<br /><center class="sai_tit"><img src="'.$theme['a_images'].'apache_conf.gif" />&nbsp;'.$l['apachehead'].'</center><br />';
}
echo '<script language="javascript" src="'.js_url('js/combined.js').'" type="text/javascript"></script>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

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

	$(document).ready(function(){		
		
		// For updating entire file
		$("#saveapache").click(function(){					
			
			$("#save_apache").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxapache=1&saveapache=1",					
				data: $("#editphpini").serialize(),
				
				// Checking for error
				success: function(data){
					
					$("#save_apache").css("display", "none");
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

	
	$linecount = count(file($filename));	
	echo '<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editphpini">
		<div style="height:400px; width:700px; overflow:auto; border: 2px solid #CCC; margin:0px auto; ">
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
				<tr>
					<td style="background-color:#CCC;vertical-align:top;font-size:12px;">';
						for($i=1; $i<=$linecount;$i++){
							echo $i."<br />";
						}
				echo '</td><td nowrap="nowrap"><textarea style=" overflow:hidden; font-size:12px; border:none; resize: none;" WRAP=OFF name="apache_data" id="apache_data" rows='.$linecount.' cols=120 >'.htmlentities(file_get_contents($filename), ENT_QUOTES, "UTF-8").'</textarea>
					</td>
				</tr>
			</table>
		</div><br />
		<p align="center">			
			<input type="submit" value="'.$l['save'].'" name="savephp" class="sai_graybluebut" id="saveapache" /> &nbsp;<img id="save_apache" src="'.$theme['images'].	'progress.gif" style="display:none">
		</p>
	</form>';	
	
softfooter();

}

?>