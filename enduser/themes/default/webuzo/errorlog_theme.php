<?php

//////////////////////////////////////////////////////////////
//===========================================================
// updates_theme.php
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
function errorlog_theme(){

	global $theme, $globals, $l, $error, $domain_list, $error_log;	
	
	if(optGET('ajaxdel')){	
		echo $error_log;
		return true;
	}
	
	softheader($l['<title>']);
	error_handle($error, '100%');
		
	echo '<center><div class="sai_heading"><img src="'.$theme['a_images'].'error_log.gif"  alt=""  />&nbsp;'.$l['lbl_head'].'</div>
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding:15px;" >	
		<tr>
			<td>
				<span class="sai_head">'.$l['domain'].'</span>&nbsp;&nbsp;<br />
			</td>	
			<td>
				<select class="input" name="selectdomain" id="selectdomain">
				<option value="error_log">'.$l['default_log'].'</option>';
				foreach ($domain_list as $key => $value){	
					echo '<option value='.$key.'>'.$key.'</option>';
				}
			echo '</select> &nbsp;<img id="create_err_log" src="'.$theme['images'].'progress.gif" style="display:none"></td>	
		</tr>		
		<tr>
			<td colspan="2">
				<b>'.$l['msg'].'<span id="er_file">'.$l['default_file'].'</span></b>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<textarea  id="showerroe" readonly="readonly"; style="height:400px; width:600px; overflow:auto;  resize: none;" wrap="off"; >'.trim($error_log).'</textarea><center>
			</td>
		</tr>		
	</table>	
	<br /><br />
	<br /><br />';

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){
			$("#selectdomain").change( function() {
				$("#create_err_log").css("display", "");
				if($(this).val() !== "error_log"){		 	
					var dname = $(this).val()+".err";
				}else{
					var dname = "error_log";
				}
				$.ajax({				
					type: "POST",				
					url: window.location+"&ajaxdel=1&domain_log="+dname,
					
					success: function(data){
					$("#create_err_log").css("display", "none");
						$("#er_file").html(dname);
						if(data == ""){
							$("#showerroe").html("'.$l['empty_file'].'");
						}else{
							$("#showerroe").html(data);
						}
					}															  
				});	
			});
		});
	// ]]></script>';
softfooter();

}

?>