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

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $done, $list;

	
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

ksort($list);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'apache_conf.gif" />&nbsp;'.$l['apachehead'].'</center>';

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
				data: $("#editapacheconf").serialize(),
				
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
	
	echo '<form accept-charset="'.$globals['charset'].'" name="editapacheconf" method="post" action="" id="editapacheconf">
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
		<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />
		<center><span class="sai_head">'.$l['warning'].'</span></center><br/><br/><br/>
		<tr>
			<th width="50%" align="left">
				<font size="2">'.$l['module'].'</font>
			</th>
			<th width="50%" align="left">
				<font size="2">'.$l['status'].'</font>
			</th>
		</tr>';
			foreach($list as $k => $v){
				echo '<tr>
					<td width="50%" align="left">
						<span class="sai_head">'.$k.'</span><br />
					</td>		
					<td width="50%" align="left"> 			
						<input type="radio" name="'.$k.'"   value='.$l['on'].' '.((!empty($v)) ? 'checked="checked"' : '').' /> '.$l['on'].' &nbsp;
						<input type="radio" name="'.$k.'"   value='.$l['off'].' '.((!empty($v)) ? '' : 'checked="checked"').' /> '.$l['off'].'
					</td>
				</tr>';
			}
		echo '<tr>
			<td width="50%" align="left">
				<span class="sai_head">'.$l['retrieve'].' </span><br />
				<span class="sai_exp">'.$l['ins_retrieve'].'</span>
			</td>
			<td width="50%" align="left">
				<input type="checkbox" id="retrieve" name="retrieve" />
			</td>
		</tr>
		<tr>
			<td width="50%" align="left">
				<span class="sai_head">'.$l['restart'].' </span><br />
				<span class="sai_exp">'.$l['ins_restart'].'<br/>'.$l['note'].'</span>
			</td>
			<td width="50%" align="left">
				<input type="checkbox" id="restart" name="restart" />
			</td>
		</tr></table>
		<p align="center">			
			<input type="submit" value="'.$l['save'].'" name="saveapache" class="sai_graybluebut" id="saveapache" /> &nbsp;<img id="save_apache" src="'.$theme['images'].	'progress.gif" style="display:none">
		</p>
	</form>';
	
softfooter();

}

?>