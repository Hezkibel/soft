<?php

// This page is used to create Database and Database user in @webuzo
// It is also used to add database user to a particular database and grant them required privileges.
// Also used for deleting user and database.
//////////////////////////////////////////////////////////////
//===========================================================
// dbmanage_theme.php
//===========================================================
// SOFTACULOUS 
// Version : 1.1
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.webuzo.com/ (WEBUZO)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Inc.
//===========================================================
//////////////////////////////////////////////////////////////

function dbmanage_theme(){
    global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $dbname, $dbuser, $pri_list, $dbdone, $db_list, $db_list_size, $db_with_user_list, $db_user_list;	
	
		
	//Ajax part for add DB
	if(optGET('ajaxdb') ){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table for display new DB
		if(!empty($dbdone)){
			echo '1'.$l['db_create'];			
			showdb();
			return true;
		}
	}
	
	// Ajax part for add user
	if(optGET('ajax') ){
		
		if(!empty($error)){			
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table for display new user
		if(!empty($dbdone)){			
			echo '1'.$l['user_added'];
			showuser();
			return true;
		}
	}
	
	// Ajax part for update privaliges
	if(optGET('ajaxpri')){			
		if(!empty($error)){				
			echo '0 '.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_pri_updated'];	
			showdb();
			return true;			
		}
	}
	
	// Ajax part for delete user
	if(optGET('ajaxdeluser')){				
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_user_del'];	
			showdb();
			return true;			
		}
	}
	
	// Ajax part for delete DB
	if(optGET('ajaxdeldb')){			
		if(!empty($error)){							
			echo '0'.current($error);
			return false;
		}
		if(!empty($dbdone)){
			echo '1'.$l['db_db_del'];	
			showdb();
			return true;			
		}
	}
	
	
	if(optGET('editdb_user')){
		
		$db_list = $softpanel->listdbs();
		$db_user_list = $softpanel->listdbusers();
		echo '<center><div class="sai_tit" style=" width:100%;"><img src="'.$theme['a_images'].'adddb.gif" alt="" />&nbsp;'.$l['user_db_add_label'].'</div></center>';
		if (count($db_list) > 0 && count($db_user_list) > 0){
			echo '<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" >
				<br />
				<table border="0" cellpadding="8" cellspacing="8" width="90%" align="center" class="sai_divroundshad" sstyle="padding-left:15px; padding-top:15px;" >
					<tr>
						<td>
							<span class="sai_head">'.$l['user_label'].'</span>
						</td>
						<td valign="top">
							<select name="sel_user" id="sel_user">';
							foreach ($db_user_list as $k => $v)	{
								echo '<option value="'.$k.'" '.((!empty($_POST['sel_user']) && $_POST['sel_user'] == $k) ? 'selected="selected"' : '').'>'.$v.'</option>';
							}
							echo '</select>
						</td>
					</tr>        	
					<tr>
						<td>
							<span class="sai_head">'.$l['db_set_label'].'</span>
						</td>
						<td valign="top">
							<select name="sel_db" id="sel_db">';
							foreach ($db_list as $k => $v)	{
								echo '<option value="'.$k.'" '.((!empty($_POST['sel_db']) && $_POST['sel_db'] == $k) ? 'selected="selected"' : '').'>'.$v.'</option>';
							}
							echo '</select>
						</td>
					</tr>
					<tr>
						<td colspan="2">
							<p align="center"><input type="button" class="sai_graybluebut" id="submit1" style="cursor:pointer" name="submitselectuser" value="'.$l['submitselectuser'].'" /></p>
						</td>
					</tr>
				</table>				
				</form>					
				<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[				
					
					// For popup			
					$("#submit1").click(function() {
						var dbname = ($("#sel_db").val());
						var dbuser = ($("#sel_user").val());
						show_popup(dbname,dbuser);	
					});									
				// ]]></script>';
			echo '<div class="sai_popup" ></div>';	
		}else{
			echo '<center><h2>'. $l['err_nodata'].'</h2></center>'; 				 
		}
		return true;
	}
	// Privaliges page for popup		
	if(optGET('editpri')){
		
		$dbname = POST('dbname');
		$dbuser = POST('dbuser');			
		
		// Get user db privileges
		$db_pri = $softpanel->getDbPrivileges($dbname, $dbuser);			
		echo '<script language="javascript" type="text/javascript" ><!-- // --><![CDATA[						
			$(document).ready(function(){	
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");		
					$(this).attr("class", "sai_tr_bgcolor");		
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});			
							
				$("#submitpri").click(function() {
					$("#comsg").css("display", "none");	
					$("#ermsg").css("display", "none");							
					var prilist = Array()				
					ids = new Array("'.implode('", "', $pri_list).'");				
					for(x in ids){
						if($_("pri["+ids[x]+"]").checked){													
							prilist[x] = ids[x];							
						}
					}
					var host = ($("#selecttype").val());				
					if(host == "Use text field"){					
						host =($("#hname").val());
					}			
					var w_l = window.location.toString();				
					if(w_l.indexOf("#") > 0){
						w_l = w_l.substring(0, w_l.indexOf("#"));
					}					
					$.ajax({
						type: "POST",
						url: w_l+"&submitpri=1&ajaxpri=1 ",					
						data: "dbname='.$dbname.'&dbuser='.$dbuser.'&host=" +host+"&prilist=" +prilist,
						// checking for error
						success: function(data){												
							var result = data.substring(0,1);	
							if(result == "1"){
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));								
								$("#comsg").css("display", "");																																		
								$("#comsg").html(msg);
								$("#showdbtab").html(output);
							}	
							if(result == "0"){	
								var msg = data.substring(1);
								$("#ermsg").css("display", "");																																		
								$("#ermsg").html(msg);								
							}						
						},
						error: function() {
							message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
						}															
					});								
				});	
				$("#chk_table tr").click(function(e){				
					var $checkbox = $(this).find(":checkbox");
					$("#chk_table:checkbox").not($checkbox).removeAttr("checked");
					if (e.target.type == "checkbox") {
						$checkbox.attr("checked");
					}else{
						$checkbox.attr("checked", !$checkbox.attr("checked"));
						$(this).filter(":has(:checkbox)").toggleClass("selected", $checkbox.attr("checked"));
					}				
				});
			});
		// ]]></script>';
			
		echo '<div class="ui_titlebar" style="width:95%" >
			<a title="Close" class="close"><img src="' . $theme['images'] . 'remove.gif" style="cursor:pointer; float:right;" alt="close" height="20" width="20" onclick="popup_close();" /></a>			
			<center class="sai_tit"><img src="'.$theme['images'].'mysql_1.gif" />&nbsp; ' . $l['db_headling_pri'] . ' For Database '.$dbname.' To User '.$dbuser.'</center>
			<center id="comsg" style="display:none" class="sai_notice"></center>
			<center id="ermsg" style="display:none; background-color: #FF9999;" class="sai_notice" ></center>		
		<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" ></div>		
			<table border="0" cellpadding="0" cellspacing="0" width="99%" class="sai_altrowstable">
				<tr>
					<th align="center" class="sai_summaryTitle" colspan="1">'.$l['db_pri'].'</th>
					<th align="center" class="sai_summaryTitle" colspan="1">'.$l['pri_option'].'<input type="checkbox" onclick="checkall(this);" /></th>
				</tr>';
				foreach ($pri_list as $key => $value){	
					$k = ucfirst(strtolower($value)) . '_priv';
					$check[$key] = (isset($db_pri[$k]) && $db_pri[$k] == 'Y') ?  'checked="checked"' : '';
					$label[$key] = ucfirst(str_replace('_', ' ', strtolower($value)));
									
				}
				echo'<tr>
					<td width="50%">
						<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable" id="chk_table">';
							for($j=0; $j<=((count($pri_list)/2)-1); $j++){	
							echo '<tr class="'.($j % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" height="40px">
								<td width="70%">'. $label[$j]. '</td>
								<td align="center" width="25%"><input '. $check[$j] .' type="checkbox" name="pri['.$pri_list[$j].']" id="pri['.$pri_list[$j].']" value="Y" /></td>
							</tr>';							
							}
						echo'</table>
					</td>	
					<td width="50%">
						<table border="0" cellpadding="8" cellspacing="0" width="100%" class="sai_altrowstable" id="chk_table">';
						for($j=((count($pri_list)/2)); $j<=count($pri_list)-1; $j++){	
							echo '<tr class="'.($j % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" height="40px">
								<td width="70%" >'. $label[$j] .'</td>
								<td align="center" width="25%"><input ' . $check[$j]. ' type="checkbox" name="pri['.$pri_list[$j].']" id="pri['.$pri_list[$j].']" value="Y" /></td>
							</tr>';							
						}
						echo'
						</table>
					</td>	
				</tr>
			</table>';	
		echo'<table>
			<tr>
				<td width="25%">
					<span class="sai_head">'.$l['select_host'].'</span> 
				<td>		
				<td width="25%">							
					<select class="input" name="selecttype" id="selecttype" onchange="disp_type(this.value)">
						<option value="'.$l['local'].'" '.($db_pri['Host'] == $l['local'] ? 'selected=selected' : '').'>'.$l['local'].'</option>
						<option value="'.$l['anyhost'].'" '.($db_pri['Host'] == '%' ? 'selected=selected' : '').'>'.$l['anyhost'].'</option>
						<option value="'.$l['text'] .'"  '.(($db_pri['Host'] != $l['local'] && $db_pri['Host'] != '%' && $db_pri['Host'] != '' ) ? 'selected=selected' : '').'>'.$l['text'] .'</option>		
					</select>								
				</td>
				<td width ="50%">
					<input type="text" id="hname" name="hname" id="address" size="30" '.(($db_pri['Host'] != $l['local'] && $db_pri['Host'] != '%' && $db_pri['Host'] != '' ) ? 'value='.$db_pri['Host'].'' :  'style="display:none" ').' />
				</td>		
			</tr>	
		</table>
		<p align="center"><input type="button" class="sai_graybluebut" id="submitpri" style="cursor:pointer" name="submitpri" value="'.$l['submitpri'].'" /></p>
		</form> ';				
		return true;
	}
		
	softheader($l['<title>']);
	echo '<script language="javascript" src="'.js_url('js/jquery.scrollTo.js').'" type="text/javascript"></script>'; 	
	$db_prefix = $softpanel->user['name'] . '_';		
	echo '<style type="text/css">
		.ui_titlebar {
			padding: 0.4em 1em;
			background-color: #CCCCCC;
			border: 1px solid #AAAAAA;
			color: #222222;
			font-weight: bold;
			border-radius: 4px;
		}	
		
		.sai_popup {
			position:absolute;
			background:#FFFFFF;
			border:#666 1px solid;
			display:none;
			z-index:10000;
			min-height:200px;
			margin:0 auto;
			padding:5px;
		}
		
		.sai_popup_add {
			position:absolute;
			background:#FFFFFF;
			border:#666 1px solid;
			display:none;
			z-index:10000;
			min-height:200px;
			margin:0 auto;
			padding:5px;
		}
		
		.close {
			float:right;
			position:relative;
			z-index:99999;
			margin:3px 6px 0;
		}
		#scroller-body {		
			width=100%;
			padding-bottom:30px;
			height: 100%;
		}
		#mask {		
			width:700px;
			overflow:hidden;
			margin:0 auto;
			height: 100%;
		}
		#panel div {
			float:left;			
		}
		a.selected {
			border-radius: 5px;
			border :2px solid #B8B8B8;			
			background: #EFEFEF;		
			padding: 8px;		
			font-size:18px;
			color:#333333;
			margin-top:20px;
			margin-bottom:5px;
			font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;		
		}	
		.heading_a{
			border-radius: 5px;
			border :2px solid  #FFFFFF;			
			background: #FFFFFF;
			padding: 8px;	
			font-size:18px;
			color:#333333;
			margin-top:20px;
			margin-bottom:5px;
			font-family: "Lucida Grande","Lucida Sans Unicode",Helvetica,Arial,Verdana,sans-serif;
		}	
	</style>';	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[		
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
				delete_message: function(title, body ,delact) {					
					var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+delact+\'\\\');" value="YES" class="sai_graybluebut"/>\';
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
				yes_close_message: function(delact) {
					delaction = delact.substr(0,3)
					delrecord = delact.substr(3);						
					if(delaction == "did"){
						$(\'#did\'+delrecord).attr("src","'.$theme['images'].'progress.gif");
						url = "&delete_db=" +delrecord+"&ajaxdeldb=1";
					}else{
						$(\'#uid\'+delrecord).attr("src","'.$theme['images'].'progress.gif");
						url = "&delete_dbuser=" +delrecord+"&ajaxdeluser=1";	
					}
					jQuery(\'.sai_message_box\').hide(\'fast\');		
					var w_l = window.location.toString();				
					if(w_l.indexOf("#") > 0){
						w_l = w_l.substring(0, w_l.indexOf("#"));
					}					
					$.ajax({
						type: "POST",
						url: w_l+url,						
						success: function(data){													
							var result = data.substring(0,1);										
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));
							if(result == "1"){
								message_box.show_message("Delete",msg,2);
								if(delaction == "did"){
									$("#tr"+trim(delrecord)).fadeOut(2000);	
								}else{
									$("#ur"+trim(delrecord)).fadeOut(2000);	
								}
								$("#showdbtab").html(output);
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
       	
		// for deleting db or user		
		function deleterecord(delact){			
			delaction = delact.substr(0,3)
			if(delaction == "did"){	
				message_box.delete_message (\'Warning\',\''.$l['db_del_conf'].'\', delact);
			}else{
				message_box.delete_message (\'Warning\',\''.$l['dbuser_del_conf'].'\', delact);
			}		
		};
		
		// Function for checkbox check all
		ids = new Array("'.implode('", "', $pri_list).'");
		function checkall(checker){	
			for(x in ids){
				$_("pri["+ids[x]+"]").checked = checker.checked;
			}				
		};
		
		// Function for show host
		function disp_type(str){
			if(str == "Use text field"){
				$("#hname").css("display", "");
			}else{
				$("#hname").css("display", "none");
			}
		} ;	
		
		// Function for close popup
		function popup_close(){			
			$(".sai_popup").fadeOut(1000);
			$(".sai_popup_add").fadeOut(1000);
			$("#comsg").css("display", "none");	
			$("#ermsg").css("display", "none");	
		};						
		
		// Function for show popup
		function show_popup(dbname, dbuser,div_id)
		{			 																
			var height = $("#scroller-body").height();
			var width = $("#scroller-body").width();
			var spanHeight = 50;
			var spanWidth = 50;	
			var w_l = window.location.toString();				
			if(w_l.indexOf("#") > 0){
				w_l = w_l.substring(0, w_l.indexOf("#"));
			}					
			$.ajax({
				type: "POST",
				url: w_l+"&editpri=1",					
				data: "dbname="+dbname+"&dbuser="+dbuser,			
				success: function(data){
					if(div_id ==1){														
						$(".sai_popup_add").html(data);
					}else{
						$(".sai_popup_add").html(data);
					}
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}	
			});	
			if(div_id ==1){									
				$(".sai_popup_add")
					.css({ "top" :  height/3 - spanHeight/3 })
					.css({ "left" : width/2 - spanWidth/2})
					.css({ "width" : width/2 + 50})				
					.fadeIn(500);	
			}else{
				$(".sai_popup_add")
					.css({ "top" :  height/3 - spanHeight/3 })
					.css({ "left" : width/2 - spanWidth/2})
					.css({ "width" : width/2 + 50})				
					.fadeIn(500);
			}
		};	
		
		function mod_escape(value) {
		  value = escape(value);
		  return value.replace(/\+/g, \'%2B\');
		}
		
		$(document).ready(function(){							
			$(".sai_altrowstable tr").mouseover(function(){
				var old_class = $(this).attr("class");		
				$(this).attr("class", "sai_tr_bgcolor");		
				$(this).mouseout(function(){
					$(this).attr("class", old_class);
				});
			});			
			
			// For selecting tab
			try{
			var select_tab = window.location.hash;
			if(select_tab.length > 0){
				$(select_tab+"_a").addClass("selected");
			}else{
				$("#currentdb_a").addClass("selected");
			}
			}catch(e){}
				
			// for adding db	
			$("#submitdb").click(function() {
				$("#createdb").css("display", "");	
				var db = ($("#db").val());
				var w_l = window.location.toString();				
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}					
				$.ajax({
					type: "POST",
					url: w_l+"&submitdb=1&ajaxdb=1",					
					data: "db="+db,
					// checking for error
					success: function(data){
						$("#createdb").css("display", "none");						
						var result = data.substring(0,1);
						if(result == "1"){
							$_("db").value="";				
							var msg = data.substring(1,data.indexOf("<table"));
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);														
							$("#showdbtab").html(output);
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});																											
						}
						if(result == "0"){	
							$("#createdb").css("display", "none");
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}															
				});													
			});				
			// for adding user	
			$("#submituser").click(function() {	
				$("#createuser").css("display", "");			
				var dbuser = ($("#dbuser").val());				
				var userpass = ($("#dbpassword").val());
				userpass =  mod_escape(userpass);
				var w_l = window.location.toString();				
				if(w_l.indexOf("#") > 0){
					w_l = w_l.substring(0, w_l.indexOf("#"));
				}					
				$.ajax({
					type: "POST",
					url: w_l+"&submituserdb=1&ajax=1",					
					data: "dbuser="+dbuser+"&dbpassword=" +userpass,
					// checking for error
					success: function(data){
						$("#createuser").css("display", "none");																		
						var result = data.substring(0,1);														
						if(result == "1"){	
							$_("dbuser").value="";
							$_("dbpassword").value="";			
							var msg = data.substring(1,data.indexOf("<table"));							
							var output = data.substring(data.indexOf("<table"));							
							message_box.show_message( "Done ",msg,2);
							var height = $("#mask").height();
							$("#mask").css({ "height" :  height + 50 });
							chkdbvalue();							
							$("#showusertab").html(output);
							
							$(".sai_altrowstable tr").mouseover(function(){
								var old_class = $(this).attr("class");		
								$(this).attr("class", "sai_tr_bgcolor");		
								$(this).mouseout(function(){
									$(this).attr("class", old_class);
								});
							});																											
						}
						if(result == "0"){
							$("#createuser").css("display", "none");	
							var msg = data.substring(1);
							message_box.show_message( "Error",msg,1);
						}
					},	
					error: function() {
						message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
					}														
				});													
			});			
				
			//Get the height of the first item
			$("#mask").css({"height":"100%"});	
		
			//Calculate the total width - sum of all sub-panels width
			//Width is generated according to the width of #mask * total of sub-panels
			$("#panel").width(parseInt($("#mask").width() * $("#panel div").length));
			
			//Set the sub-panel width according to the #mask width (width of #mask and sub-panel must be same)
			$("#panel div").width($("#mask").width());			
			
			//Get all the links with rel as panel
			$("a[rel=panel]").click(function () {	
				
				//Get the height of the sub-panel
				var panelheight = $($(this).attr("href")).height()+200;				
				
				//Set class for the selected item
				$("a[rel=panel]").removeClass("selected");
				$(this).addClass("selected");			
				
				//Resize the height
				$("#mask").animate({"height":panelheight},{queue:false, duration:500});			
				
				//Scroll to the correct panel, the panel id is grabbed from the href attribute of the anchor
				$("#mask").scrollTo($(this).attr("href"), 800);	
				
				//Discard the link default behavior
				return false;
			});			
		});		
		
		function chkdbvalue(){			
			var w_l = window.location.toString();
			if(w_l.indexOf("#") > 0){
				w_l = w_l.substring(0, w_l.indexOf("#"));
			}					
			$.ajax({
				type: "POST",
				url: w_l+"&editdb_user=1",								
				success: function(data){																		
					$("#dbtouser_disp").css("display", "");									
					$("#dbtouser_disp").html(data);					
				},
				error: function() {
					message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
				}	
			});					
		}
	// ]]></script>
	
	<center>
		<div id="scroller-header">
			<br />
			<a href="#currentdb" rel="panel" class="heading_a" style="text-decoration:none" id="currentdb_a">'.$l['db_headling'].'</a>
			<a href="#adddb" rel="panel" class="heading_a"  style="text-decoration:none" id="adddb_a">'.$l['db_add_label'].'</a>
			<a href="#currentuser" rel="panel" class="heading_a" style="text-decoration:none" id="currentuser_a">'.$l['db_user_add_label'].'</a>
			<a href="#dbtouser" rel="panel" class="heading_a" style="text-decoration:none" onclick="chkdbvalue();" id="dbtouser_a">'.$l['user_db_add_label'].'</a>
		</div>
	</center>
	<br />
	<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /></br></br>';	
			
	echo '<div id="scroller-body" >
		<div id="mask">
			<div id="panel">
				<div id="currentdb"  height="100%" width="700px">
					<center class="sai_tit"><img src="'.$theme['a_images'].'database.gif" />&nbsp; ' . $l['db_headling'] . '</center>
					<div class="sai_popup_add"></div>
					<div id="showdbtab">';
						showdb();
					echo '</div>
					
				</div>
				<div id="adddb"  height="100%" width="700px">';											
					echo'<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" >
					<center><div class="sai_tit"><img src="'.$theme['a_images'].'adddb.gif" alt="" />&nbsp;'.$l['db_add_label'].'</div></center>						
					<br />
					<table border="0" cellpadding="8" cellspacing="8" width="90%" align="center" class="sai_divroundshad" sstyle="padding-left:15px; padding-top:15px;" >
						<tr>
							<td>
								<span class="sai_head">'.$l['db_label'].'</span>
							</td>
							<td valign="top">
								' . $db_prefix . '<input type="text" name="db" id="db" size="30" value="'.POSTval('db', '').'" />
							</td>
						</tr>
						<tr>
							<td colspan="2">
								<p align="center"><input type="button" class="sai_graybluebut" id="submitdb" style="cursor:pointer" name="submitdb" value="'.$l['submitdb'].'" /> &nbsp;<img id="createdb" src="'.$theme['images'].'progress.gif" style="display:none"></p>	
							</td>
						</tr>
					</table>										
					</form></br></br></br>
				</div>';
					
				echo '<div id="currentuser" width="700px" >';					
						
						echo '<center class="sai_tit"><img src="'.$theme['a_images'].'database.gif" />&nbsp; ' . $l['db_user_headling'] . '</center>
						<div id="showusertab">';
							showuser();
						echo '</div>
				</div>
				<div id="dbtouser" width="700px" style="height:800px"> ';
					echo'<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" >
						<center><div class="sai_tit"><img src="'.$theme['a_images'].'adddb.gif" alt="" /> &nbsp;'.$l['db_user_create_label'].'</div></center>				
						<br />
						<table border="0" cellpadding="8" cellspacing="8" width="90%" align="center" class="sai_divroundshad" style="padding-left:15px; padding-top:15px;" >
							<tr>
								<td>
									<span class="sai_head">'.$l['db_user_label'].'</span>
								</td>
								<td valign="top">
									' . $db_prefix . '<input type="text" name="dbuser" id="dbuser" size="23" value="" />
								</td>
							</tr>
							<tr>
								<td>
									<span class="sai_head">'.$l['db_user_password'].'</span>
								</td>
								<td valign="top">
									<input type="text" name="dbpassword" id="dbpassword" size="30" value="" />
									<a href="javascript: void(0);" onclick="$_(\'dbpassword\').value=randstr(8);return false;" title="'.$l['randpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a>
								</td>
							</tr>
							<tr>
							<td colspan="2">
								<p align="center"><input type="button" class="sai_graybluebut" id="submituser" style="cursor:pointer" name="submituserdb" value="'.$l['submituserdb'].'" /> &nbsp;<img id="createuser" src="'.$theme['images'].'progress.gif" style="display:none"></p>
							</td>
						</tr>
						</table>						
						</form>
						<div id="dbtouser_disp"></div>											
				</div>
			</div>
		</div>
	</div>';	
    softfooter();
}


function showdb(){
	 global $user, $l, $theme, $softpanel, $dbname, $dbuser, $db_list, $db_list_size, $db_with_user_list;
		
	$db_list = $softpanel->listdbs();
	$db_list_size = $softpanel->listdbsize();	
	$db_with_user_list = $softpanel->getAllDbUsers();
	echo '<table border="0" cellpadding="6" cellspacing="1" width="90%" class="sai_altrowstable"  align="center">
		<tr>
			<th >'.$l['db_name'].'</th>
			<th width="10%">'.$l['db_size'].'</th>
			<th  >'.$l['db_user'].'</th>
			<th width="10%">'.$l['db_option'].'</th>
		</tr>';
		$i=1;
		foreach ($db_list as $key => $value)
		{				
			$user = NULL;		
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$value.'">
				<td>'.$value.'</td>
				<td>'.($db_list_size[$value]['size'] == 0 ? "0.00 MB" : $db_list_size[$value]['size']).'</td>';
				echo '<td>';
				foreach ($db_with_user_list[$value] as $key => $user){					
					echo '<a href="#" onclick=show_popup(\''.$value.'\',\''.$user.'\',1);>' . $user . '</a><br /><br />';
				}
				echo '</td>';
				echo '<td><img title="Delete" class="delete" id="did'.$value.'" style="cursor:pointer" src="' . $theme['images'] . 'remove.gif" onclick="deleterecord(this.id);"  /></td></tr>';
			$i++;
		}
	echo '</table>';
}

function showuser(){
	global $user, $l, $theme, $softpanel, $dbname, $dbuser;
	$db_user_list = $softpanel->listdbusers();
	echo '<table border="0" cellpadding="8" cellspacing="1" width="90%" class="sai_altrowstable" id="usertab"  align="center">
		<tr>
			<th >'.$l['db_user_name'].'</th>
			<th width="20">'.$l['db_option'].'</th>
		</tr>';
		$i=1;	
		foreach ($db_user_list as $key => $value)
		{
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="ur'.$key.'" ><td >'.$value.'</td>';
			echo '<td><img title="Delete" class="delete" id="uid'.$key.'" style="cursor:pointer" src="' . $theme['images'] . 'remove.gif" onclick="deleterecord(this.id);" /></td></tr>';
			$i++;
		}
	echo '</table>';
	
}
?>
