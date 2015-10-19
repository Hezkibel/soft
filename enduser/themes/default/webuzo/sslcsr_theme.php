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


function sslcsr_theme(){

	global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list, $detailcsr;

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

error_handle($error, '100%');

if(!empty($done)){
	echo '<div class="sai_success">'.$done.'</div>';
}

	
echo '<center class="sai_tit"><img src="'.$theme['a_images'].'sslcsr.gif" />&nbsp;'.$l['lbl_head'].'</center>';
	if(empty($domain_list)){
		echo ' <center ><h2>'.$l['no_key_file'].'</h2></center>';
	}else{
		echo '<div id="showrectab">';
		showcert();
	echo '</div>
	<div id="detailrectab" style="display:none">';
	echo '</div><br /><br />
		
		<form accept-charset="'.$globals['charset'].'" name="createssl" method="post" action="">
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
		<tr>
			<td>
				<span class="sai_head">'.$l['key'].'</span><br />
			</td>	
			<td>
				<select class="input" name="selectkey" id="selectkey">';
				foreach ($domain_list as $key => $value){
					$ext = get_extension($value);					
					if($ext == 'key'){				
						$file = get_filename($value);
						if(!in_array($file.'.csr', $csr_list))									
						echo '<option value='.$file.'>'.$file.'</option>';
					}
				}				
				echo '<option value=newkey>'.$l['genrate'].'</option>';		
				echo '</select>
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
				<input type="text" name="orgunit" id="orgunit" size="30" '.(!empty($error)? 'value="'.POSTval('orgunit', '').'"' : '').' />
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
			<td width="40%">
				<span class="sai_head">'.$l['pass_pharse'].'</span><br />
				<span class="sai_exp">'.$l['pass_pharse_desc'].'</span></td>
			<td>
				<input type="text" name="pass" id="pass" size="30" '.(!empty($error)? 'value="'.POSTval('pass', '').'"' : '').' />
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<p align="center"><input type="submit"  name="createcsr" value="'.$l['createcsr'].'" class="sai_graybluebut" /></p>
			</td>
		</tr>
		</table>		
		</form>';
	}
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	
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
	});	
	// ]]></script>';
	
softfooter();

}

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable">	
	<tr>
		<th align="center" width="70%">'.$l['cert_file'].'</th>
		<th align="center"  >'.$l['option'].'</th>
	</tr>
	<tr>';	
		// Getting csr files
		$csr_list = $softpanel->csrfiles();
		
		$i =1;
		foreach ($csr_list as $key => $value){	
			$ext = get_extension($value);					
			if($ext == 'csr'){				
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
	</table><br /></br>';
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	$(document).ready(function(){		
		
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
}

function showdetail(){
	
global $user, $globals, $l, $theme, $softpanel, $error , $done, $domain_list, $domain_name, $csr_list , $detailcsr;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable"  style="padding:15px;" >';
foreach($detailcsr as $key => $value ){
	echo '<tr>
		<td width="50%"> 
			<span class="sai_head" style="text-align:center">'.$l['cert'].$key.'</span><br /><br />	
			<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off">'.$detailcsr[$key]['key'].'</textarea>	
		<td> 
			<span class="sai_head" style="text-align:center">'.$l['info'].'</span><br /><br />
			<textarea  name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailcsr[$key]['info'].'</textarea>			
		</td>		
	</tr>';
}
	echo '<tr>
		<td colspan="2">
			<center ><div class="dclose" style="cursor:pointer"><b><u>'.$l['close_detail'].'</u></b></div></center>
		</td>
	</tr>
</table>';

echo  '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	$(document).ready(function(){	
			
		// For close details
		$(".dclose").click(function() {	
			$("#detailrectab").slideUp(\'slide\',\'\',1000);			
		});	
	});		
// ]]></script>';
}
?>