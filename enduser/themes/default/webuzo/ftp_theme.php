<?php

// This page manages the ftp user for @webuzo.
//Allowed  soft user to delete ftp user and change theire password.
//////////////////////////////////////////////////////////////
//===========================================================
// ftp_theme.php
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


function ftp_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts, $ftp_list, $done, $tuser;
	
	// for delete
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
	
	// for delete
	if(optGET('ajaxup')){	
			
		if(!empty($error)){				
			echo '0'.current($error);
			return false;
		}
		if(!empty($done)){
			echo '1'.$l['update'];	
			return true;			
		}
	}
	
	$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
	$__ip = $__tmp[0];
	
	softheader($l['<title>']);
	
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			// For msgbox
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
							url: window.location+"&ajaxdel=1&delete_fuser_id="+did,				
							// checking for error
							success: function(data){								
								var result = data.substring(0,1);					
								var msg = data.substring(1);
								if(result == "1"){
									message_box.show_message( "Delete ",msg,2);
									$("#tr"+did).fadeOut(2000);																														
								}
								if(result == "0"){
									message_box.show_message( "Error ",msg,1);																																			
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
					var old_class = $(this).attr("class");		
					$(this).attr("class", "sai_tr_bgcolor");		
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
				
				// for deleting record
				$(".delete").click(function() {	
					var did = $(this).attr(\'id\');
					did = did.substr(3);			
					message_box.delete_message (\'Warning\',\''.$l['record_del_conf'].'\',did);			
				});
				
				$(".edit").click(function() {
				var id = $(this).attr(\'id\');
				id = id.substr(3);	
				
				$("#cid"+id).css("display", "");	
					if($(this).attr(\'src\') == "'.$theme['images'].'save.gif"){						
						if($_("qlimit"+id).checked){				
							var quota_limit = ($("#qutamb"+id).val());							
							var tmp = "&quota=limit&quota_limit="+quota_limit;
						}else{
							var tmp ="&quota=unlimited";
						}			
						$.ajax({
							type: "POST",
							url: window.location+"&ajaxup=1&edit_record="+id,
							data: tmp,
						
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
									if($_("qlimit"+id).checked){																	
										$(\'#quo\'+id).html($("#qutamb"+id).val() +\'' .$l['limited'].'\');
									}else{
										$(\'#quo\'+id).html(\''.$l['ftp_quota_unlimit'].'\');
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
						$("#quota_limit"+id).css("display", "none");
						$("#quo"+id).css("display", "");							
					}else{
						$(this).attr("src","'.$theme['images'].'save.gif");						
						$("#quo"+id).css("display", "none");										
						$("#quota_limit"+id)							
							.val($("#quo"+id).text())
							.css("display", "")
							.focus();						
					}
				});
			
				// For cancel
				$(".cancel").click(function() {
					var id = $(this).attr(\'id\');
					id = id.substr(3);	
					$("#cid"+id).css("display", "none");
					$(\'#eid\'+id).attr("src","'.$theme['images'].'editdetail.gif");
					$("#quota_limit"+id).css("display", "none");
					$("#quo"+id).css("display", "");								
				});				
			});	
			
			function enableinput(idi){				
				$_("qutamb"+idi).disabled=false;
			}
			
			function disableinput(idi){					
				$_("qutamb"+idi).disabled=true;
			}
		// ]]></script>
			
	<center><div class="sai_tit"><img src="'.$theme['a_images'].'ftp.gif" alt="" />&nbsp;'.$l['ftp_head'].'</div></center>	
	<table border="0" cellpadding="8" cellspacing="1" width="100%" align="center" class="sai_altrowstable">';	
		echo '<tr>
			<th width="20%">'.$l['ftp_name'].'</th>
			<th width="20%">'.$l['ftp_path'].'</th>
			<th width="10%">'.$l['ftp_usage'].'</th>
			<th width="30%">'.$l['ftp_quota'].'</th>
			<th width="20%">'.$l['ftp_option'].'</th>
		</tr>';
			$i=1;						
			foreach ($ftp_list as $key => $value)
			{					
				echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'"><td>'.$key.'</td>';
				echo '<td>'.$value['path'].'</td>';	
				echo '<td>'.$value['usage']. '&nbsp;'.$l['limited'].'</td>';			
				if(preg_match('/unlimited/is', $value['quota'])){
					echo '<td>
						<span id="quo'.$i.'">'.$l['ftp_quota_unlimit'].'</span>
						<span id="quota_limit'.$i.'" style="display:none;" >
						<input type="radio" name="quota'.$i.'" id="qunlimit'.$i.'" value="unlimited" checked="checked" onchange="disableinput('.$i.')" /> '.$l['unlimited'].' &nbsp;
			<input type="radio" name="quota'.$i.'" id="qlimit'.$i.'" value="limited" onchange="enableinput('.$i.')" /> <input type="text" name="qutamb" id="qutamb'.$i.'" size="5" value="1000" disabled="disabled" />'.$l['limited'].'</span>
					</td>';
				}else{
					$qlimit = explode('(',$value['quota']);					
					$q_limit = explode('M',$qlimit[0]);
					
					echo '<td>
						<span id="quo'.$i.'">'.trim($q_limit[0]).'&nbsp'.$l['limited'].'</span>
						<span id="quota_limit'.$i.'" style="display:none;">
						<input type="radio" name="quota'.$i.'" id="qunlimit'.$i.'" value="unlimited" onchange="disableinput('.$i.')" /> '.$l['unlimited'].' &nbsp;
			<input type="radio" name="quota'.$i.'" id="qlimit'.$i.'" value="limited" checked="checked" onchange="enableinput('.$i.')" /> <input type="text" name="qutamb" id="qutamb'.$i.'" size="5" value="'.trim($q_limit[0]).'" />'.$l['limited'].'</span>
					</td>';
				}
				
				
				if ($key != $softpanel->getCurrentUser_webuzo())
				{
					echo '<td ><img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" style="cursor:pointer" /> &nbsp;<img title="Edit" style="cursor:pointer" class="edit" id="eid'.$i.'" src="'.$theme['images'].'editdetail.gif"  />&nbsp;<a href="'.$globals['ind'].'act=editftp&fuser_id='.$i.'" title="'.$l['cpass'].'"><img src="'.$theme['images'].'randpass.gif" /></a>&nbsp;<img title="Cancel" class="cancel" id="cid'.$i.'" src="'.$theme['images'].'del.gif" style="display:none;" /></td>';
				}else{
					echo '<td align="center">-</td>';
				}
				$i++;
			}
		echo '</tr>
	</table>	
	<br /><br /><br />	
	<center><a href="'.$globals['ind'].'act=ftp_account" class="sai_graybluebut" style="text-decoration:none" >'.$l['add_new'].'</a></center>';
	
	softfooter();

}

?>
