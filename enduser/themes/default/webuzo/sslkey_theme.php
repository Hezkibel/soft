<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sslkey_theme.php
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


function sslkey_theme(){

global $user, $globals, $l, $theme, $softpanel, $error, $done, $domain_list, $key_list , $detailkey, $done;

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

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'sslkey.gif" />&nbsp;'.$l['lbl_head'].'</center>
	<div id="showrectab">';
		showcert();
	echo '<br/></div>
	<div id="detailrectab" style="display:none"></div><br /><br />
	<form accept-charset="'.$globals['charset'].'" action="" method="post" enctype="multipart/form-data">
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding:15px;" >
			<tr>
				<td colspan="2">
					<span class="sai_head">'.$l['upload'].'</span><br />
				</td>
			</tr>
			<tr>
				<td width="40%">
					<span class="sai_exp">'.$l['domain'].'</span><br />
				</td>
				<td valign="top">
					<input type="text" name="selectdom" id="selectdom" size="30" value="" />
				</td>
			</tr>
			<tr>
				<td valign="top">
					<span class="sai_exp">'.$l['paste'].'</span>
				</td>
				<td>
					<textarea name="kpaste" id="kpaste" rows="25" cols="70"></textarea><br /><br />
					<span class="sai_head" style="text-align:center">'.$l['or'].'</span>
				</td>
			</tr>
			<tr>
				<td width="35%">
					<span class="sai_exp">'.$l['choose_file'].'</span><br />
				</td>
				<td>
					<div id="filecabinet"><input type=file id="ukey" name="ukey" ></div>
				</td>
			</tr>
			<tr>
			<td colspan="2">
				<p align="center">
					<input type="submit" name="install_key" style="cursor:pointer" value="'.$l['install_button'].'" class="sai_graybluebut" id="instkey"/>
				</p>
			</td>
		</tr>
		</table><br /><br />
	</form>
	
	<form accept-charset="'.$globals['charset'].'" action="" method="post" >
		<table border="0" cellpadding="8" cellspacing="8" width="700px" align="center" class="sai_divroundshad" style="padding:15px;" >
			<tr>
				<td width="35%">
					<span class="sai_head">'.$l['genrate'].'</span>
				</td>
			</tr>
			<tr>
				<td>
					<span class="sai_exp">'.$l['domain'].'</span><br />
				</td>
				<td valign="top">
					<input type="text" name="selectdom" id="selectdom" size="30" value="" />
				</td>
			</tr>
			<tr>
				<td width="35%">
					<span class="sai_exp">'.$l['ksize'].'</span><br />
				</td>
				<td>
					<select class="input" name="keysize" id="keysize">
						<option value="2048">'.$l['2048'].'</option>
						<option value="4096">'.$l['4096'].'</option>
					</select>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p align="center">
						<input type="submit" name="create_key" style="cursor:pointer" value="'.$l['genrate_button'].'" class="sai_graybluebut" id="create_key"/>
					</p>
				</td>
			</tr>
		</table>
	</form>
	
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[	
	
	var message_box = function(){			
		return{
			show_message: function(title, body, image) {
				var okbutton = \'<input  style="width:75px" class="sai_graybluebut" type="button" onclick="message_box.close_message();" value="OK" />\';
				if(image == "1"){
					var img = \'<img src="'.$theme['images'].'error.gif" />\';
				}else{
					var img = \'<img src="'.$theme['images'].'confirm.gif" />\';
				}
				
				if(jQuery(".sai_message_box").html() === null) {
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1">\' +  title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );
					$(".sai_message_box")
						.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
						.show("slow");
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
					$(".sai_message_box")
						.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
						.show("slow")
						.html(message);
				}
			},
			delete_message: function(title, body, did) {
				var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_graybluebut"/>\';
				var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_graybluebut" />\';
				var img = \'<img src="'.$theme['images'].'remove_big.gif" />\';
				if(jQuery(".sai_message_box").html() === null) {
					
					var message = \'<div class="sai_message_box"><table border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%" > \'+ img + \'</td><td width="60%" class ="msg_tr1" height="10%">\' +  title + \'</td></tr><tr ><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table></div>\';
					jQuery(document.body).append( message );
					$(".sai_message_box")
						.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
						.show("slow");
					
				}else{
					
					var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\';
					$(".sai_message_box")
						.css("top", $($(jQuery.browser.webkit ? "body": "html")).scrollTop() + 150)
						.show("slow")
						.html(message);
				}
			},
			close_message: function() {
				$(".sai_message_box").hide("fast");
			},
			yes_close_message: function(did) {
				$("#did"+did).attr("src", "'.$theme['images'].'progress.gif");
				$(".sai_message_box").hide("fast");
				$.ajax({
					type: "POST",
					url: window.location+"&ajaxdel=1&delete_record="+did,
					
					// Checking for error
					success: function(data){
						var result = data.substring(0,1);
						var msg = data.substring(1);
						
						if(result == "1"){
							var msg = data.substring(1, data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));
							message_box.show_message( "Delete ", msg, 2);
							$("#showrectab").html(output);
						}else{
							message_box.show_message("Error ", msg, 1);
							$("#did"+did).attr("src", "'.$theme['images'].'remove.gif");
						}
					},
					error: function(request,error) {
						message_box.show_message("Error", "'.$l['connect_error'].'", 1);
					}
				});
			},
			no_close_message: function() {
				$(".sai_message_box").hide("fast");
			}
		}
	}();
	
	$(document).ready(function(){
		
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");		
			$(this)
				.attr("class", "sai_tr_bgcolor")
				.mouseout(function(){
					$(this).attr("class", old_class);
				});
		});
		
	});
	
	// ]]></script>';
	
	softfooter();
		
}

function showcert(){
	
global $user, $globals, $l, $theme, $softpanel, $error, $done, $key_list;

echo '<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable">	
	<tr>
		<th align="center" width="70%">'.$l['cert_file'].'</th>
		<th align="center"  >'.$l['option'].'</th>
	</tr>
	<tr>';	
		// Getting cert files
		$key_list = $softpanel->keyfiles(); // Why required again ?
		$i = 1;
		foreach ($key_list as $key => $value){	
			$ext = get_extension($value);					
			if($ext == 'key'){				
				$file = get_filename($value);					
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" >
					<td>
						<span id="name'.$key.'">'.$file.'</span>							
					</td>
					<td>
					 	<img title="Delete" class="delete" id="did'.$key.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /> &nbsp;<img title="Show" class="edit" id="eid'.$file.'" src="'.$theme['images'].'editdetail.gif" style="cursor:pointer"  /> 
					 </td>';
				$i++;
			}
		}
	echo '</tr>
	</table><br /></br>
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
		$(document).ready(function(){
			// For deleting record
			$(".delete").click(function() {
				message_box.delete_message ("Warning", "'.$l['record_del_conf'].'", $(this).attr("id").substr(3));
			});
			
			// For creating DNS
			$(".edit").click(function(){
				var did = $(this).attr("id").substr(3);
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
	
global $user, $globals, $l, $theme, $softpanel, $error, $done, $key_list, $detailkey;

echo '<table border="0" cellpadding="8" cellspacing="8" width="100%" class="sai_altrowstable" align="center" style="padding:15px;" >';

foreach($detailkey as $key => $value ){
	echo '<tr>
		<td width="50%"> 
			<span class="sai_head" style="text-align:center">'.$l['cert'].$key.'</span><br /><br />	
			<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" wrap="off" >'.$detailkey[$key]['key'].'</textarea>
		<td> 
			<span class="sai_head" style="text-align:center">'.$l['info'].'</span><br /><br />
			<textarea name="kpaste" rows="25" readonly="readonly" style="overflow:auto; resize: none; width:100%;" >'.$detailkey[$key]['info'].'</textarea>			
		</td>		
	</tr>';	
}	
	echo '<tr>
		<td colspan="2">
			<center ><div class="dclose" style="cursor:pointer"><b><u>'.$l['close_detail'].'</u></b></div></center>
		</td>
	</tr>	
</table><br /><br />

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