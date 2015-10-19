<?php

//////////////////////////////////////////////////////////////
//===========================================================
// csf_conf_theme.php
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
function csf_conf_theme(){

	global $user, $globals, $iscripts, $l, $theme,  $softpanel, $csf_conf, $done, $error;	
	
	// For Updating Entire File
	if(optGET('ajaxcsf')){
		
		// Error 
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Success
		if(!empty($done)){
			echo '1'.$l['change_final_file'];
			return true;
		}
		
	}
	
	softheader($l['<title>']);
	error_handle($error, '100%');
	$linecount = count($csf_conf['all']);	
	echo '<center><div class="sai_heading"><img src="'.$theme['a_images'].'firewalls.gif"  alt=""  />&nbsp;'.$l['lbl_head'].'</div>
	<form accept-charset="'.$globals['charset'].'" name="editemailsettings" method="post" action="" id="editcsf">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding:15px;" >	
		<tr>
			<td>
				<span class="sai_head">'.$l['file_part'].'</span>&nbsp;&nbsp;<br />
			</td>	
			<td>
				<select class="input" name="select_section" id="select_section">';
				echo '<option value=all>All</option>';
				foreach ($csf_conf['part'] as $key => $value){
					$test = explode(" " , $value['name']);	
					echo '<option value='.trim($test[0]).'-'.trim($test[1]).'>'.$value['name'].'</option>';
				}
			echo '</select> &nbsp;<img id="create_err_log" src="'.$theme['images'].'progress.gif" style="display:none"></td>	
		</tr>				
	</table>
	<br /><br />
	<div id="all" style="height:400px; width:700px; overflow:auto; border: 2px solid #CCC; margin:0px auto;" class="ContentDivs">
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
			<tr>
				<td style="background-color:#CCC;vertical-align:top;font-size:12px;">';
					for($i=1; $i<=$linecount; $i++){
						echo $i."<br />";
					}
			echo '</td>
			<td nowrap="nowrap"><textarea style=" overflow:hidden; font-size:12px; border:none; resize: none;" WRAP=OFF name="csf_data_all" id="csf_data_all" rows='.$linecount.' cols=120 >'.htmlentities(implode($csf_conf['all']), ENT_QUOTES, "UTF-8").'</textarea>
				</td>
			</tr>
		</table>
	</div>';
	foreach($csf_conf['part'] as $key => $value){		
	$test = explode(" " , $value['name']);
	$parts = trim($test[0]).'-'.trim($test[1]);
		echo '<div id='.$parts.' style="height:400px; width:700px; overflow:auto; border: 2px solid #CCC; margin:0px auto; display:none;" class="ContentDivs" >
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad">
			<tr>
				<td style="background-color:#CCC;vertical-align:top;font-size:12px;">';
					$k = 0;
					for($i=$value['startpoint']; $i<=$value['endpoint']; $i++){
						
						echo $i."<br />";
						$temp_data[$parts][$k] = $csf_conf['all'][$i];
						$k++;
					}
			echo '</td>
			<td nowrap="nowrap"><textarea style=" overflow:hidden; font-size:12px; border:none; resize: none;" WRAP=OFF name="csf_data_'.$parts.'" id="csf_data_'.$parts.'" rows='.count($temp_data[$parts]).' cols=120 >'.htmlentities(implode($temp_data[$parts]), ENT_QUOTES, "UTF-8").'</textarea>
				</td>
			</tr>
		</table>
	</div>';
	}
	

	echo '<p align="center">
		<input type="submit" value="'.$l['save'].'" name="savecsf" class="sai_graybluebut" id="savecsf" /> &nbsp;<img id="save_csf" src="'.$theme['images'].'progress.gif" style="display:none">
	</p><br />
	<p align="center">'.$l['note'].'</p>
	</form>';

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		
	$(document).ready(function(){
		
		// For 
		$("#select_section").change( function() {
			var new_id = $("#select_section").val();
			$(".ContentDivs:visible").fadeOut("fast");
			$("#"+new_id).fadeIn("slow");
		});				
			
		// For updating entire file
		$("#savecsf").click(function(){
			
			$("#save_csf").css("display", "");
			var new_id = $("#select_section").val();		
			
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxcsf=1&savecsf=1",
				data: "csfdata=csf_data_"+new_id+"&"+$("#editcsf").serialize(),
				
				// Checking for error
				success: function(data){
					$("#save_csf").css("display", "none");
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
				error: function(){
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);
				}
			});
			return false;
		});
	});
	
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
softfooter();

}

?>