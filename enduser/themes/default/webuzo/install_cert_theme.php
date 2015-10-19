<?php

//////////////////////////////////////////////////////////////
//===========================================================
// install_cert_theme.php
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


function install_cert_theme(){

global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain_list, $install_list , $detailkey, $done, $detail;

// For delete
if(optGET('ajaxdel')){	
			
	if(!empty($error)){				
		echo '0'.current($error);
		return false;
	}
	if(!empty($done)){
		echo '1'.$l['delete'];	
		 showcert();
		return true;			
	}
}

// For detail
if(optGET('ajaxdetail')){	
			
	if(!empty($error)){				
		echo '0'.current($error);
		return false;
	}
	if(!empty($done)){			
		return true;			
	}
}

softheader($l['<title>']);

error_handle($error, '100%');

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div>';
}

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'install_cert.gif" />&nbsp;'.$l['lbl_head'].'</center>
	<div id="showrectab">';
		showcert();
	echo '<br/></div>
	</div><br /><br />
	<form accept-charset="'.$globals['charset'].'" action="" method="post" enctype="multipart/form-data" id="editformuplode">
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding:15px; ">
			<tr>
				<td >
					<span class="sai_head">'.$l['domain'].'</span><br />
				</td>	
				<td valign="middle">
					<select class="input" name="selectdomain" id="selectdomain" onchange="disp_type(this.value)">';					
					foreach ($domain_list as $key => $value){
						echo '<option value='.$key.'>'.$key.'</option>';
					}
				echo '</select>&nbsp; &nbsp; &nbsp; 
				<input type="button" name="fatch_data" style="cursor:pointer" value="'.$l['fatch_button'].'" class="sai_graybluebut" id="fatchdata"/>&nbsp; &nbsp;<img id="createcron" src="'.$theme['images'].'progress.gif" style="display:none">
				</td>
				
			</tr>	
			
			<tr>
				<td valign="top">
					<span class="sai_head">'.$l['paste_key'].'</span>					
				</td>		
				<td> 
					<textarea name="kpaste" id="kpaste" rows="15" cols="70" wrap="off"></textarea>					
				</td>
			</tr>
			<tr>
				<td valign="top">
					<span class="sai_head">'.$l['paste_crt'].'</span>					
				</td>		
				<td> 
					<textarea name="cpaste" id="cpaste" rows="15" cols="70" wrap="off"></textarea>
				</td>
			</tr>
			<tr>
				<td valign="top">
					<span class="sai_head">'.$l['paste_ca'].'</span>					
				</td>		
				<td> 
					<textarea name="bpaste" id="bpaste" rows="15" cols="70" wrap="off"></textarea>
				</td>
			</tr>			
			<tr>
				<td>
					<span class="sai_head">'.$l['use_for_panel'].'</font></span><br/><span class="sai_exp">'.$l['exp_use_for_panel'].'</span>
				</td>
				<td>
					<input type="checkbox" name="ispanel" id="ispanel" '.POSTchecked('ispanel', false).'>
				</td>
			</tr>				
			<tr>
			<td colspan="2">
				<p align="center">
					<input type="submit" name="install_key" style="cursor:pointer" value="'.$l['install_button'].'" class="sai_graybluebut" id="instkey"/> 
				</p>
			</td>
		</tr>			
		</table>		
	</form>
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
					$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");
					jQuery(\'.sai_message_box\').hide(\'fast\');					
					$.ajax({				
						type: "POST",				
						url: window.location+"&ajaxdel=1&delete_record="+did,				
						// checking for error
						success: function(data){
							var result = data.substring(0,1);					
							var msg = data.substring(1);
							if(result == "1"){
								var msg = data.substring(1,data.indexOf("<table"));
								var output = data.substring(data.indexOf("<table"));							
								message_box.show_message( "Delete ",msg,2);
								$("#showrectab").html(output);																																			
							}
							if(result == "0"){
								message_box.show_message( "Error ",msg,1);																																			
								$(\'#did\'+did).attr("src","'.$theme['images'].'remove.gif");																																		
							}
						},				
						error: function(request,error) {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);					
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
				var old_class = $(this).attr(\'class\');		
				$(this).attr("class", \'sai_tr_bgcolor\');		
				$(this).mouseout(function(){
				$(this).attr(\'class\', old_class);
				});
			});
			
			// For deleting record
			$(".delete").click(function() {	
				var did = $(this).attr(\'id\');
				did = did.substr(3);						
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});	
			
			
			// For creating DNS	
			$("#fatchdata").click(function(){
				var domain = $("#selectdomain").val();				
				$("#createcron").css("display", "");
				$("#kpaste").html("");
				$("#cpaste").html("");				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdetail=1&detail_record="+domain,
					
					// Checking for error
					success: function(data){
						$("#createcron").css("display", "none");
						var result = data.substring(0,1);					
						var msg = data.substring(1);
						
						if(result == "0"){															
							message_box.show_message(\'Warning\',msg, 1);																																									
						}else{	
											
							var arr = data.split("webuzo-1");							
																										
							$("#kpaste").html(arr[0]);
							$("#cpaste").html(arr[1]);
						}
					},
					error: function() {
						$("#createcron").css("display", "none");
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});		
														
			});	
						
		});	
		
		// Function for show host
		function disp_type(str){				
			$("#select_domain").val(str);			
		}
		
		// ]]></script>';
		
softfooter();

}

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $install_list;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable">	
	<tr>
		<th align="center" width="70%">'.$l['cert_file'].'</th>
		<th align="center"  >'.$l['option'].'</th>
	</tr>
	<tr>';	
		// Getting cert files
		$install_list = $softpanel->list_install_cert();
		$i =1;
		foreach($install_list as $key => $value){
			$ext = get_extension($value);					
			if($ext == 'key'){				
				$file = get_filename($value);					
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" >
					<td>
						<a href="https://'.$file.'" target="_blank" ><span id="name'.$key.'">'.$file.'</span></a>
					</td>
					<td>
					 	<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" />
					</td>';
				$i++;
			}
		}
	echo '</tr>
	</table><br /></br>';
}

?>