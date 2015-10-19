<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslcrt_theme.php
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

function sslcrt_theme(){

global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $crt_list, $detailcert;

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
		 showdetail();
		return true;			
	}
}

softheader($l['<title>']);

error_handle($error);

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div><br /><br />';
}

	echo '<center class="sai_tit"><img src="'.$theme['a_images'].'sslcrt.gif" />&nbsp;'.$l['lbl_head'].'</center>
	<div id="showrectab">';
		showcert();
	echo '</div><br />
	<div id="detailrectab" style="display:none"></div></br>
	
	<form accept-charset="'.$globals['charset'].'" action="" method="post" enctype="multipart/form-data" name="mxentry" >
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
			<tr>
				<td width="35%" colspan="2">
					<span class="sai_head">'.$l['upload'].'</span><br />
				</td>				
			</tr>
			<tr>
				<td valign="top">
					<span class="sai_exp">'.$l['paste'].'</span>					
				</td>		
				<td> 
					<textarea name="kpaste" rows="25" cols="70"></textarea><br /><br />
					<span class="sai_head" style="text-align:center">'.$l['or'].'</span>
				</td>
			</tr>
			<tr>
				<td width="35%">
					<span class="sai_exp">'.$l['choose_file'].'</span><br />
				</td>
				<td>
					<input type="file" id="ukey" name="ukey" />
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<p align="center">			
						<input type="submit" style="cursor:pointer" value="'.$l['install_button'].'" class="sai_graybluebut" name="install_crt" id="install_crt"/>
					</p>
				</td>
			</tr>			
		</table>
	</form>
	<form accept-charset="'.$globals['charset'].'" action="" method="post">
	<br /><br />
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >		
		<tr>
			<td width="35%">
				<span class="sai_head">'.$l['genrate'].'</span><br /><br />
			</td>				
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['key'].'</span><br />
			</td>	
			<td>
				<select class="input" name="selectkey" id="selectkey">';				
				foreach ($key_list as $value){
					$ext = get_extension($value);					
					if($ext == 'key'){				
						$file = get_filename($value);
						if(!array_key_exists(trim($file), $crt_list)) echo '<option value='.$file.'>'.$file.'</option>';
					}								
				}
				echo '<option value=newkey>'.$l['genrate_key'].'</option>
				</select>
			</td>		
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['domain'].'</span><br />
				<span class="sai_exp">'.$l['domain_desc'].'</span></td>
			</td>
			<td>
				<input type="text" name="domain" id="domain" size="30" '.(!empty($error)? 'value="'.POSTval('domain', '').'"' : '').' />
			</td>
		</tr>			
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['country'].'</span><br />
				<span class="sai_exp">'.$l['country_desc'].'</span></td>
			<td>
				<input type="text" name="country" id="country" size="30" '.(!empty($error)? 'value="'.POSTval('country', '').'"' : '').' />
			</td>
		</tr>
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['state'].'</span><br />
				<span class="sai_exp">'.$l['state_desc'].'</span></td>
			<td>
				<input type="text" name="state" id="state" size="30" '.(!empty($error)? 'value="'.POSTval('state', '').'"' : '').' />
			</td>
		</tr>
		
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['locality'].'</span><br />
				<span class="sai_exp">'.$l['locality_desc'].'</span></td>
			<td>
				<input type="text" name="locality" id="locality" size="30" '.(!empty($error)? 'value="'.POSTval('locality', '').'"' : '').' />
			</td>
		</tr>
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['organisation'].'</span><br />
				<span class="sai_exp">'.$l['organisation_desc'].'</span></td>
			<td>
				<input type="text" name="organisation" id="organisation" size="30" '.(!empty($error)? 'value="'.POSTval('organisation', '').'"' : '').' />
			</td>
		</tr>
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['org_unit'].'</span><br />
				<span class="sai_exp">'.$l['org_unit_desc'].'</span></td>
			<td>
				<input type="text" name="orgunit" id="orgunit" size="30"'.(!empty($error)? 'value="'.POSTval('orgunit', '').'"' : '').' />
			</td>
		</tr>		
		<tr>
			<td width="40%">
				<span class="sai_head">'.$l['email'].'</span><br />
				<span class="sai_exp">'.$l['email_desc'].'</span></td>
			<td>
				<input type="text" name="email" id="email" size="30" '.(!empty($error)? 'value="'.POSTval('email', '').'"' : '').' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">			
					<input type="submit" name="create_crt" value="'.$l['createcrt'].'" class="sai_graybluebut" />
				</p>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">			
					<span>'.$l['note'].'</span>
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
					$(\'#did\'+trim(did)).attr("src","'.$theme['images'].'progress.gif");	
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
			$(".edit").click(function(){
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				$("#createcron").css("display", "");				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdetail=1&detail_record="+did,
					
					// Checking for error
					success: function(data){																			
						$("#detailrectab").html(data);
						$("#detailrectab").slideDown(\'slide\',\'\',5000);
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

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $domain_name, $crt_list;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable" >	
	<tr>
		<th align="center" width="70%">'.$l['cert_file'].'</th>
		<th align="center"  >'.$l['option'].'</th>
	</tr>
	<tr>';	
		// Getting cert files
		$crt_list = $softpanel->crtfiles();
		$i =1;
		foreach ($crt_list as $key => $value){	
			$ext = get_extension($value);					
			if($ext == 'crt'){				
				$file = get_filename($value);					
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" >
					<td>
						<span id="name'.$key.'">'.$file.'</span>							
					</td>
					<td>
					 	<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /> &nbsp;<img title="SHOW" class="edit" id="eid'.$file.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  /> 
					 </td>';
				$i++;
			}
		}
	echo '</tr>
	</table><br /></br>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		$(document).ready(function(){	
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");		
				$(this)
					.attr("class", "sai_tr_bgcolor")
					.mouseout(function(){
						$(this).attr("class", old_class);
					});
			});
			
			// For deleting record
			$(".delete").click(function() {
				message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", $(this).attr("id").substr(3));
			});
			
			// For creating DNS	
			$(".edit").click(function(){
				var did = $(this).attr("id").substr(3);
				$("#createcron").css("display", "");
				
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdetail=1&detail_record="+did,
					
					// Checking for error
					success: function(data){
						$("#detailrectab")
							.html(data)
							.slideDown("slide", "", 5000);
					},
					error: function() {
						message_box.show_message("Error", "'.$l['connect_error'].'", 1);
					}
				});									
			});
					
		});
		// ]]></script>';
}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $key_list, $domain_name, $crt_list , $detailcert;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable" style="padding:15px;">';
	foreach($detailcert as $key => $value ){
	echo '<tr>
		<td width="50%">
			<span class="sai_head" style="text-align:center">'.$l['cert'].$key.'</span><br /><br />
			<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off">'.$detailcert[$key]['key'].'</textarea>
		<td>
			<span class="sai_head" style="text-align:center">'.$l['info'].'</span><br /><br />
			<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailcert[$key]['info'].'</textarea>
		</td>
	</tr>';
	}
	echo '<tr>
		<td colspan="2">
			<center ><div class="dclose" style="cursor:pointer"><b><u>'.$l['close_detail'].'</u></b></div></center>
		</td>
	</tr>	
</table>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	$(document).ready(function(){	
		// For close details
		$(".dclose").click(function() {
			$("#detailrectab").slideUp("slide", "", 1000);
		});
	});
// ]]></script>';
}			
?>