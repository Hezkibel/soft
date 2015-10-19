<?php

// This page allows to include additional configurations to 
// the existing webserver configurations
// 
//////////////////////////////////////////////////////////////
//===========================================================
// extra_conf_theme.php
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

function extra_conf_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $error, $done, $domain_list, $file_list, $domain_name, $iapps, $w_list;
	
	// To update domains links
	if(optGET('ajaxdom')){
		showconf();
		return true;
	}
	
	// For delete
	if(optGET('ajaxdel')){
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];
			showconf();
			return true;
		}
	}	
	
	softheader($l['<title>']);
	
	error_handle($error);
	
if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div>';
}
	echo '<center class="sai_tit">
		<img src="'.$theme['a_images'].'extra_conf.gif" />&nbsp;'.$l['head'].'
		</center>
	<form accept-charset="'.$globals['charset'].'" action="" method="post" name="mxentry" id="editform" enctype = "multipart/form-data" >
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
			<tr>
				<td>
					<span class="sai_head">'.$l['domain'].'</span><br />
				</td>
				<td>
					<select class="input" name="selectdomain" id="selectdomain">';
					foreach ($domain_list as $key => $value){
						if($domain_name == $key){
							echo '<option value='.$key.' selected="selected" >'.$key.'</option>';
						}else{
							echo '<option value='.$key.'>'.$key.'</option>';
						}
					}
				echo '</select>&nbsp;<img id="changedom" src="'.$theme['images'].'progress.gif" style="display:none"></td>
			</tr>
			<tr>
				<td>
					<span class="sai_head">'.$l['webserver'].'</span><br />
				</td>
				<td>
					<select class="input" name="selectweb" id="selectweb">';
					foreach ($w_list as $key => $value){
						echo '<option value='.$key.'>'.$value.'</option>';
					}
				echo '</select></td>
			</tr>
			<tr>
				<td>
					<span class="sai_head">'.$l['destination'].'</span><br />
				</td>
				<td>
					<input type="file" name="destination_upload" id="destination_upload" size="30" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p align="center">
						<input type="hidden" name="create_record" value="1" />
						<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitrec"/> &nbsp;<img id="createrec" src="'.$theme['images'].'progress.gif" style="display:none">
					</p>
				</td>
			</tr>
		</table>
	</form>
	<center>
		</br></br>
		<span class="sai_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></span>
		<br /><br /><br />
	</center>
	<div id="showrectab">';
	showconf();
	echo '</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function(){
	
		$("#selectdomain").change(function(){
			$("#changedom").css("display", "");
			var domain = $(this).val();
			$.ajax({
				type: "POST",
				url: window.location+"&ajaxdom=1&domain_name="+domain,
				success: function(data){
					$("#changedom").css("display", "none");
					$("#showrectab").html(data);
					$("#domain_file").html(domain);
				}
			});
		});
		
	});
	// ]]></script>';
	
	softfooter();

}

function showconf(){

	global $globals, $l, $softpanel, $error, $file_list, $domain_name, $theme, $w_list;
	
	$file_list = $softpanel->read_extra_conf($domain_name);
		
	if(!is_array($file_list)){				
		echo '<table width="100%">
			<tr>
				<td><div class="sai_notice">'.$l['no_record'].'</div></td>
			</tr>
		</table>';
	}else{	
		echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >
		<tr>
			<th align="center"  width="60">'.$l['webserver'].'</th>
			<th align="center"  width="30">'.$l['destination'].'</th>
			<th align="center"  width="10">'.$l['option'].'</th>
		</tr>';
		
		//Printing from file
		$i = 1;
		foreach ($w_list as $kkey => $vvalue){
			foreach ($file_list[$kkey] as $key => $value){
				echo '
				<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="trc'.$kkey.'_'.$key.'" >
					<td width="30%">
						<span value="'.$kkey.'" id="priorityc'.$kkey.'_'.$key.'">'.$vvalue.'</span>
						<input type="text" id="priority_hidec'.$kkey.'_'.$key.'" style="display:none;" value="'.$kkey.'" />
					</td>
					<td width="40%">
						<span id="destinationc'.$kkey.'_'.$key.'" class="editfile" cursor:pointer;" >'.$value.'</span>
						<input type="text" id="destination_entryc'.$kkey.'_'.$key.'" size="50" value="'.$value.'" style="display:none;" />
					</td>
					<td>
						<img id="didc'.$kkey.'_'.$key.'" class="delete" title="Delete" src="'.$theme['images'].'remove.gif" style="cursor:pointer" />&nbsp&nbsp&nbsp;
						<img id="cidc'.$kkey.'_'.$key.'" class="cancel" title="Cancel" src="'.$theme['images'].'del.gif" style="display:none;" />
					</td>
				</tr>';
				$i++;			
			}
		}
		echo '</table>';
	}
	
	echo '<br />
	<div id="detailrectab" style="display:none"></div>
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
			delete_message: function(title, body ,did) {
				var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_graybluebut"/>\';
				var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_graybluebut" />\';
				var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
				if(jQuery(\'.sai_message_box\').html() === null) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
					jQuery(\'.sai_message_box\').css(\'top\', jQuery($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
					jQuery(\'.sai_message_box\').html( message );
				}
			},
			close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			},
			yes_close_message: function(did) {
				$("#did"+did).attr("src", "'.$theme['images'].'progress.gif");
				jQuery(\'.sai_message_box\').hide(\'fast\');
				var editwebserver = $("#priority_hide"+did).val();
				var editdestination = $("#destination_entry"+did).val();
				
				$.ajax({
					type: "POST",
					url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,
					data: "editwebserver="+ editwebserver +"&editdestination="+ editdestination,
					
					// Checking for Error
					success: function(data){
						var result = data.substring(0,1);
						if(result == "1"){
						
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));
							message_box.show_message( "Done ",msg,2);
							$("#showrectab").html(output);
							
						}else{
							$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
							message_box.show_message("Error", msg, 1);
						}
						
					},
					error: function(request,error) {
						$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
						message_box.show_message("Error", "'.$l['connect_error'].'", 1);
					}
				});
			},
			no_close_message: function() {
				jQuery(\'.sai_message_box\').hide(\'fast\');
			}
		}
	}();
	
	$(document).ready(function(){
	
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");
			$(this).attr("class", "sai_tr_bgcolor");
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});
		
		// For deleting record
		$(".delete").click(function() {
			var did = $(this).attr("id").substr(3);
			message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", did);
		});
	});
	// ]]></script>';
}

?>