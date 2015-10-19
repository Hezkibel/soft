<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_theme.php
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

function advancedns_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name;
	
	// For update
	if(optGET('ajaxup')){	
				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['edit'];	
			return true;			
		}
	}
	
	// To update domains links
	if(optGET('ajaxdom')){			
		showdns();
		return true;
	}
	
	// For adding DNS Record
	if(optGET('ajaxdns')){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		// Creating new table for display new DB
		if(!empty($done)){
			echo '1'.$l['change_final'];			
			showdns();
			return true;
		}
	}
	
	// For delete
	if(optGET('ajaxdel')){	
				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['delete'];	
			return true;			
		}
	}	
			
	softheader($l['<title>']);	
	
	echo '<center class="sai_tit"><img src="'.$theme['a_images'].'advancedns.gif" />&nbsp;'.$l['advancedns'].'</center>';
	echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="advancedns" id="editform">
	<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad"  style="padding-left:15px; padding-top:15px; ">
		<tr>
			<td>
				<span class="sai_head">'.$l['domain'].'</span><br />
			</td>	
			<td>
				<select class="input" name="selectdomain" id="selectdomain" >';
				foreach ($domain_list as $key => $value){
					if($domain_name == $key){			
						echo '<option value='.$key.' selected=selected >'.$key.'</option>';
					}else{
						echo '<option value='.$key.'>'.$key.'</option>';
					}					
				}			
			echo '</select>
			&nbsp;<img id="changedns" src="'.$theme['images'].'progress.gif" style="display:none"></td>		
		</tr>	
		<tr>
			<td width="35%">
				<span class="sai_head">'.$l['dns_name'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="name" id="name" size="30"  size="30" />.<span id="domainname">'.$domain_name.'</span>
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['dns_ttl'].'</span><br />
			</td>		
			<td> 
				<input type="text" name="ttl" id="ttl" size="30" value="14400" />
			</td>
		</tr>
		<tr>
			<td>
				<span class="sai_head">'.$l['dns_type'].'</span><br />
			</td>	
			<td>
				<select class="input" name="selecttype" id="selecttype" onchange="disp_type(this.value)">
				<option value="A">A</option>
				<option value="CNAME">CNAME</option>
				<option value="TXT">TXT</option>				
			</td>		
		</tr>	
		<tr>
			<td>
				<span class="sai_head" id="type">'.$l['typedefault'].'</span><br />
			</td>				
			<td> 
				<input type="text" name="address" id="address" size="30" value="" />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center">
					<input type="hidden" name="create_record" value="1" />
					<input type="submit" style="cursor:pointer" value="'.$l['submit_button'].'" name="create_record" class="sai_graybluebut" id="submitdns"/> &nbsp; <img id="createdns" src="'.$theme['images'].'progress.gif" style="display:none"></center>
				</p>
			</td>
		</tr>
	</table>
	</br></br>
	</form>
		<center><span class="sai_head">'.$l['record_table'].' <span id="domain_file">'.$domain_name.'</span></center><br />
	<div id="showrectab">';
	showdns();
	echo '</div>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	
	$(document).ready(function(){
		
		$("#selectdomain").change(function(){
			$("#changedns").css("display", "");	
			var domain = $(this).val();
			$.ajax({				
				type: "POST",				
				url: window.location+"&ajaxdom=1&domain="+domain,
				success: function(data){
					$("#changedns").css("display", "none");
					$("#showrectab").html(data);
					$("#domainname").html(domain);
					$("#domain_file").html(domain);
				}															  
			});	
		});
						
		// For creating DNS	
		$("#submitdns").click(function(){
			$("#createdns").css("display", "");				
			$.ajax({
				type: "POST",
				url: window.location+"&create_record=1&ajaxdns=1",					
				data: $("#editform").serialize(),
				
				// Checking for error
				success: function(data){
					$("#createdns").css("display", "none");
					var result = data.substring(0,1);
					if(result == "1"){
						$_("name").value="";
						$_("address").value="";
						var msg = data.substring(1,data.indexOf("<table"));
						var output = data.substring(data.indexOf("<table"));							
						message_box.show_message( "Done ",msg,2);														
						$("#showrectab").html(output);																																
					}
					if(result == "0"){	
						$("#createdns").css("display", "none");
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
	
	softfooter();

}


function showdns(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domain_list, $dns_list, $domain_name ;

echo '<table border="0" cellpadding="8" cellspacing="1" width="100%" class="sai_altrowstable" >			
			<tr>
				<th align="center">'.$l['dns_name'].'</th>
				<th align="center"  width="10%">'.$l['dns_ttl'].'</th>
				<th align="center"  width="10%">'.$l['dns_class'].'</th>
				<th align="center"  width="10%">'.$l['dns_type'].'</th>
				<th align="center"  width="15%">'.$l['dns_record'].'</th>
				<th align="center"  width="80">'.$l['dns_option'].'</th>
			</tr>';
			
		//printig from file
		$dns_list = $softpanel->readdnsrecord($domain_name);
		
		$i =1;
		foreach ($dns_list as $key => $value){						
			// check if domain anme is in record 
			if(!preg_match('/'.$domain_name.'/is', $dns_list[$key]['name'])){				
				$dns_list[$key]['name'] = $dns_list[$key]['name'].'.'.$domain_name.'.';
			}			
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$key.'">
					 <td>
					 	<span id="name'.$key.'">'.$dns_list[$key]['name'].'</span>	
					 	<input type="text" id="name_entry'.$key.'" style="display:none;" >
					 </td>
					 <td>
					 	<span id="ttl'.$key.'">'.$dns_list[$key]['ttl'].'</span>	
					 	<input type="text" id="ttl_entry'.$key.'" style="display:none;" size="8"> 
					 </td>
					 <td>'.$dns_list[$key]['class'].'</td>
					 <td>
						 <span id="type'.$key.'">'.$dns_list[$key]['type'].'</span>				
						 <select class="input" id="type_entry'.$key.'" style="display:none;">
							<option value="A" '.($dns_list[$key]['type'] == 'A' ? 'selected=selected' : '').'>A</option>
							<option value="CNAME" '.($dns_list[$key]['type'] == 'CNAME' ? 'selected=selected' : '').'>CNAME</option>
							<option value="TXT" '.($dns_list[$key]['type'] == 'TXT' ? 'selected=selected' : '').'>TXT</option>
					 </td> 			
					 <td>
						 <span id="record'.$key.'">'.$dns_list[$key]['record'].'</span>	
						 <input type="text" id="record_entry'.$key.'" style="display:none;" size="15">
					 </td>
					 <td>
					 	<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /> &nbsp;<img title="Edit" class="edit" id="eid'.$key.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  /> &nbsp;<img title="Cancel" class="cancel" id="cid'.$key.'" src="'.$theme['images'].'del.gif" style="display:none;" />
					 </td>
				</tr>';			
				$i++;
			}		
		echo '</table>
	</center>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		function disp_type(str){
			$_("type").innerHTML = str;
		}    
	
		var message_box = function() {			
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
				delete_message: function(title, body ,did) {			
					var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\'+did+\');" value="YES" class="sai_graybluebut"/>\';
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
						url: window.location+"&domain_name='.$domain_name.'&ajaxdel=1&delete_record="+did,				
						// checking for error
						// checking for error
						success: function(data){
							var result = data.substring(0,1);					
							var msg = data.substring(1);
							if(result == "1"){
								message_box.show_message("Delete",msg,2);
								$("#tr"+did).fadeOut(2000);																														
							}
							if(result == "0"){
								message_box.show_message("Error",msg,1);																																			
							}
						},
						error: function() {
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
				var old_class = $(this).attr("class");		
				$(this).attr("class", "sai_tr_bgcolor");		
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});
			
			// For deleting record
			$(".delete").click(function() {	
				var did = $(this).attr(\'id\');
				did = did.substr(3);			
				message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
			});
			
			// For cancel
			$(".cancel").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "none");
				$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
				$("#name_entry"+id).css("display", "none");
				$("#name"+id).css("display", "");
				
				$("#ttl_entry"+id).css("display", "none");
				$("#ttl"+id).css("display", "");
				$("#type_entry"+id).css("display", "none");
				$("#type"+id).css("display", "");
				$("#record_entry"+id).css("display", "none");
				$("#record"+id).css("display", "");			
			});
			
			// for editing record
			$(".edit").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				$("#cid"+id).css("display", "");	
				if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){			
					var name = $(\'#name_entry\'+id).val();	
					var	ttl = $(\'#ttl_entry\'+id).val();
					var type = $(\'#type_entry\'+id).val();	
					var	record = btoa($(\'#record_entry\'+id).val());
					$.ajax({
						type: "POST",
						url: window.location+"&domain_name='.$domain_name.'&ajaxup=1&edit_record="+id,
						data: "name="+ name +"&ttl="+ ttl +"&type="+ type +"&record="+ record,
						
						// checking for error
						success: function(data){					
							var result = data.substring(0,1);					
							var msg = data.substring(1);	
							if(result == "0"){																														
								message_box.show_message( "Error ",msg,1);
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
							if(result == "1"){						
								message_box.show_message( "Done ",msg,2);
								var point_find = $("#name_entry"+id).val().toString().search("'.$domain_name.'"); 
								if(point_find < 0){		
									$(\'#name\'+id).html($("#name_entry"+id).val()+".'.$domain_name.'.");
								}else{
									$(\'#name\'+id).html($("#name_entry"+id).val());											
								}								
								$(\'#ttl\'+id).html($("#ttl_entry"+id).val());
								$(\'#type\'+id).html($("#type_entry"+id).val());
								if($("#type_entry"+id).val() == \'CNAME\'){
									$(\'#record\'+id).html($("#record_entry"+id).val()+\'.\');
								}else{
									$(\'#record\'+id).html($("#record_entry"+id).val());
								}								
								$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
							}	
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);							
						}
					});	
					$(this).attr("src","'.$theme['images'].'progress.gif");
					$("#cid"+id).css("display", "none");
					$("#name_entry"+id).css("display", "none");
					$("#name"+id).css("display", "");
					$("#ttl_entry"+id).css("display", "none");
					$("#ttl"+id).css("display", "");
					$("#type_entry"+id).css("display", "none");
					$("#type"+id).css("display", "");
					$("#record_entry"+id).css("display", "none");
					$("#record"+id).css("display", "");				
				}else{
					$(this).attr("src","'.$theme['images'].'save.gif");
					$("#name"+id).css("display", "none");			
					$("#name_entry"+id)
						.val($("#name"+id).text().replace(".'.$domain_name.'.", ""))
						.css("display", "")
						.focus();
					$("#ttl"+id).css("display", "none");
					$("#ttl_entry"+id)
						.val($("#ttl"+id).text())
						.css("display", "")
						.focus();
					$("#type"+id).css("display", "none");
					$("#type_entry"+id)
						.val($("#type"+id).text())
						.css("display", "")
						.focus();
					$("#record"+id).css("display", "none");
					if($("#type"+id).text() == \'CNAME\'){
						$("#record_entry"+id).val($("#record"+id).text().substring(0, $("#record"+id).text().length - 1));
					}else{
						$("#record_entry"+id).val($("#record"+id).text());
					}
					$("#record_entry"+id)				
						.css("display", "")
						.focus();
				}
			});			
		});
	// ]]></script>';
	
}

?>
