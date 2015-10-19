<?php

//////////////////////////////////////////////////////////////
//===========================================================
// domainmanage_theme.php
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

function domainmanage_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $done, $domains_list, $primary_domain, $insid, $backed, $software, $soft, $hosts_list;
	
	// for delete
	if(optGET('ajaxdel')){
			
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			$hosts_list = $softpanel->getHosts();
			$domains_list = $softpanel->domains();
			echo '1'.$l['delete'];
			domainlist();
			hosttable();
			return true;
		}
	}
	
	softheader($l['<title>']);
	error_handle($error, '100%');	
		
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For msgbox
		var message_box = function() {			
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
				delete_message: function(title, body ,did) {								
					var yesbutton = \'<input type="button" style="width:75px" onclick="message_box.yes_close_message(\\\'\'+did+\'\\\');" value="YES" class="sai_submit"/>\';
					var nobutton = \'<input type="button" style="width:75px" onclick="message_box.no_close_message();" value="NO" class="sai_submit" />\';
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
				yes_close_message: function(did){
					$(\'#did\'+did).attr("src","'.$theme['images'].'progress.gif");
					jQuery(\'.sai_message_box\').hide(\'fast\');
					$.ajax({				
						type: "POST",
						url: window.location+"&ajaxdel=1&delete_domain_id="+did,
						// checking for error
						success: function(data){
							var result = data.substring(0,1);
							var msg = data.substring(1, data.indexOf("<table"));
							var output1 = data.substring(data.indexOf("<table"), data.indexOf("</table"));
							var output2 = data.substring(data.indexOf("</table"));
							if(result == "1"){
								message_box.show_message( "Delete ",msg,2);
								$("#tr"+did).fadeOut(2000);
								$("#hosttable").html(output2);
								$("#domainlist").html(output1);
								$(document).ready(function(){
									$(".sai_altrowstable tr").mouseover(function(){
										var old_class = $(this).attr("class");
										$(this).attr("class", "sai_tr_bgcolor");
										$(this).mouseout(function(){
											$(this).attr("class", old_class);
										});
									});
									$(".delete").click(function(){
										var did = $(this).attr(\'id\');
										did = did.substr(3);
										message_box.delete_message (\'Warning\',\''.$l['domain_del_conf'].'\',did);
									});
								});
							}
							if(result == "0"){
								message_box.show_message( "Error ",msg,1);
							}
						},
						error: function(request,error){
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

		var r=1;
		$("#img").click(function(){
			if(r){
				$("#img").attr("src", "'.$theme['images'].'expanded.gif");
				jQuery(\'#hosttable\').slideDown(1000);
				r=0;
			}else{
				$("#img").attr("src", "'.$theme['images'].'collapsed.gif");
				jQuery(\'#hosttable\').hide(0);
				r=1;
			}
		});
		
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");
			$(this).attr("class", "sai_tr_bgcolor");
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});
	});
	// ]]></script>';  
	
    echo '<center class="sai_tit"><img src="'.$theme['images'].'domains.gif" />&nbsp; ' . $l['domain_headling'] . '</center>
	<div id="domainlist">';
	domainlist();
	echo '</div><br /><br />
	<!--<font size="2" style="text-align:right;"> ' . $l['host_list'] . '</font>-->
	<div id="img" style="cursor:pointer;"><span class="sai_head">' . $l['host_list'] . '</span>&nbsp;&nbsp;<img src="'.$theme['images'].'collapsed.gif" alt="" /></div><br/><br/>
	<div id="hosttable" style="display:none">';
	hosttable();
	echo '</div>
	<br /><br /><br />
	<center><a href="'.$globals['ind'].'act=ampps_domainadd" class="sai_abut">'.$l['add_new'].'</a></center>';
	softfooter();
}

function hosttable(){
	
	global $l, $theme, $softpanel, $catwise, $error, $domains_list, $primary_domain, $insid, $hosts_list;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable">
		<tr>
			<th align="center"  width="50%">'.$l['ips'].'</th>
			<th align="center"  width="50%">'.$l['domain_name'].'</th>
		</tr>';
		$i =1;
		foreach ($hosts_list as $key => $value)
		{
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
				<td>' . $value['ip'] . '</td>
				<td>'.$value['domain'].'</td>';
			$i++;
		}
	echo '</tr>
	</table><br />'.$l['note_host'].'';
}

function domainlist(){
	global $l, $theme, $softpanel, $catwise, $error, $domains_list, $primary_domain, $insid, $hosts_list;
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
		// For deleting record
		$(document).ready(function(){
			$(".delete").click(function(){
				var did = $(this).attr(\'id\');
				did = did.substr(3);
				message_box.delete_message (\'Warning\',\''.$l['domain_del_conf'].'\',did);
			});
		});
	// ]]></script>
	<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable">
		<tr>
			<th align="center"  width="60">'.$l['domain_name'].'</th>
			<th align="center"  width="30">'.$l['domain_path'].'</th>
			<th align="center"  width="10">'.$l['domain_addon'].'</th>
			<th align="center"  width="10">'.$l['domain_option'].'</th>
		</tr>';
		$i =1;
		foreach ($domains_list as $key => $value)
		{
			echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
				<td><a target="_blank" href="'. ($_SERVER['HTTPS'] == 'on' ? 'https://' : 'http://') . $key . '"> '.$key.'</a></td>
				<td>'.$value['path'].'</td>';
			
			if($key == $primary_domain){
				echo '<td align="center">'.$l['primary'].'</td>';
			}elseif($value['addon'] == true){
				echo '<td align="center">'.$l['addon'].'</td>';
			}else{
				echo '<td align="center">'.$l['parked'].'</td>';
			}
			
			if ($key != $primary_domain)
			{
				echo '<td align="center"><img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" /></td>';
			}else{
				echo '<td align="center">-</td>';
			}
			$i++;
		}
	echo '</tr>
	</table>';
}
?>