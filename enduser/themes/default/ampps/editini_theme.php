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

function editini_theme(){

global $theme, $globals, $user, $l, $langs, $skins, $error, $saved, $list, $done, $softpanel;

	// For updating
	if(optGET('ajaxphp')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		if(!empty($done)){
			echo '1'.$l['change_final'];				
			return true;
		}
	}
	
	// For updating entir file
	if(optGET('ajaxphpini')){
		
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

echo '<br /><center class="sai_tit"><img src="'.$theme['a_images'].'php_conf.gif" />&nbsp;'.$l['phpinihead'].'</center><br />';

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
		
		// For update form 
		$("#savephp").click(function(){
			$("#save_php").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxphp=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					
					$("#save_php").css("display", "none");
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
		
		// For updating entire file
		$("#savephpini").click(function(){					
			
			$("#save_php_ini").css("display", "");					
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxphpini=1&savephpini=1",					
				data: $("#editphpini").serialize(),
				
				// Checking for error
				success: function(data){
					
					$("#save_php_ini").css("display", "none");
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
				
		function enableinput(){
			$_("include_path").disabled=false;
		}
		
		function disableinput(){
			$_("include_path").disabled=true;
		}
	
	// ]]></script>';

	echo '
	<div id="basic">
		<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editform">
			<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
				<tr>
					<td>
						<span class="sai_head">PHP Version : </span>
					</td>
					<td>
						<span class="sai_head">'.$softpanel->activePHP().'</span>
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['asp'].'</span><br />
					</td>		
					<td> 			
						<input type="radio" name="asp"   value='.$l['on'].' checked="checked"   /> '.$l['on'].' &nbsp;
						<input type="radio" name="asp"   value='.$l['off'].' '.(trim($list['asp_tags']) == 'off' ? ' checked="checked"' : '' ).'  /> '.$l['off'].'
					</td>
				</tr>				
				<tr>
					<td>
						<span class="sai_head">'.$l['dll'].'</span><br />
					</td>		
					<td> 
						<input type="radio" name="dll"  value='.$l['on'].' checked="checked"  /> '.$l['on'].' &nbsp;
						<input type="radio" name="dll"  value='.$l['off'].' '.(trim($list['enable_dll']) == 'off' ? ' checked="checked"' : '' ).' />'.$l['off'].' 
					</td>
				</tr>
				<tr '.(substr(PHP_VERSION, 0,3) != '5.4' ? '' : 'style="display:none;"').'>
					<td>
						<span class="sai_head">'.$l['rglobals'].'</span><br />
					</td>
					<td>			 
						<input type="radio" name="rglobals"  value='.$l['on'].' checked="checked"  /> '.$l['on'].' &nbsp;
						<input type="radio" name="rglobals"  value='.$l['off'].' '.(trim($list['register_globals']) == 'off' ? ' checked="checked"' : '' ).'  />'.$l['off'].' 
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['include'].'</span><br />
					</td>		
					<td width="60%"> 
						<input type="radio" name="pinclude"  value='.$l['on'].' checked="checked" onchange="enableinput()" /> '.$l['on'].' &nbsp;
						<input type="radio" name="pinclude"  value='.$l['off'].' '.(trim($list['include_path_act']) == 'Off' ? ' checked="checked"' : '' ).' onchange="disableinput()" />'.$l['off'].' &nbsp;
						<input type="text" name="include_path" id="include_path" size="30" value="'.trim($list['include_path']).'" '.(trim($list['include_path_act']) == 'Off' ? ' disabled="disabled"' : '' ).'  />
					</td>
				</tr>
				
				
				<tr>
					<td>
						<span class="sai_head">'.$l['ufile'].'</span><br />
					</td>		
					<td>			 
						<input type="text" name="ufile" size="30" value="'.trim($list['file_uploads']).'" />
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['execution_time'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="etime" size="30" value="'.trim($list['max_execution_time']).'" />
					</td>
				</tr>			
				<tr>
					<td>
						<span class="sai_head">'.$l['input_time'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="itime" size="30" value="'.trim($list['max_input_time']).'" />
					</td>
				</tr>			
				<tr>
					<td>
						<span class="sai_head">'.$l['memory'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="memory" size="30" value="'.trim($list['memory_limit']).'" />'.$l['mb'].'
					</td>
				</tr>				
				<tr>
					<td>
						<span class="sai_head">'.$l['mfile'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="mfile" size="30" value="'.trim($list['upload_max_filesize']).'" />'.$l['mb'].'
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['savepath'].'</span>
					</td>
					<td valign="top">
						<input type="text" name="savepath" size="30" value='.trim($list['save_path']).' />
					</td>
				</tr>
				<tr>
					<td>
						<span class="sai_head">'.$l['retrieve'].' </span><br />
						<span class="sai_exp">'.$l['ins_retrieve'].'</span>
					</td>
					<td>
						<input type="checkbox" id="retrieve" name="retrieve" />
					</td>
				</tr>
				<tr>
					<td align="left">
						<span class="sai_head">'.$l['restart'].' </span><br />
						<span class="sai_exp">'.$l['ins_restart'].'</span>
					</td>
					<td align="left">
						<input type="checkbox" id="restart" name="restart" />
					</td>
				</tr>
				<tr>
					<td colspan=2 align="center">
						<span class="sai_exp">'.$l['note'].'</span>
					</td>
				</tr>
				<tr>
					<td colspan="5">
						<p align="center">
						<input type="hidden" name="savephp" value="1" />
						<input type="submit" value="'.$l['save'].'" name="savephp" class="sai_graybluebut" id="savephp" /> &nbsp;<img id="save_php" src="'.$theme['images'].	'progress.gif" style="display:none">	
						</p>
					</td>
				</tr>
			</table>
		</form>
	</div>';
softfooter();

}

?>