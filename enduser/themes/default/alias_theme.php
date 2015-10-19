<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function alias_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
	global $insid, $backed, $software, $soft, $done;
	
	global $alias_list;
	
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
	
	if(optGET('ajaxalias') ){
		
		if(!empty($error)){
			echo '0'.current($error);
			return false;
		}
		
		// Creating new table for display new DB
		if(!empty($done)){
			$alias_list = $softpanel->alias();
			echo '1 Alias Created Successfully';
			alias_table();
			return true;
		}
	}
	
	softheader($l['<title>']);
	
	error_handle($error, '100%');
		
	echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

	var dompath = false;
	
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
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message =\' <table border="0" width="100%" cellpadding="8" height="100%"><tr ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1">\' + title + \'</td></tr><tr class ="msg_tr2"><td style="text-align:left">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3">\' + okbutton + \'</td></tr></table>\';
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
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
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
					jQuery(\'.sai_message_box\').show(\'slow\');
				}else{
					var message = \' <table  border="0" cellpadding="8" width="100%" height="100%"><tr height="60%" ><td rowspan="2" width="40%">\'+ img +  \'</td><td widt="60%" class ="msg_tr1" height="10%">\' + title + \'</td></tr><tr><td style="text-align:left" height="60%" cellpading="2" class ="msg_tr2">\' + body + \'</td></tr><tr ><td colspan="2" class ="msg_tr3" >\' + yesbutton + \'&nbsp; &nbsp; \' + nobutton + \'</td></tr></table>\'
					jQuery(\'.sai_message_box\').css(\'top\', jQuery(\'html, body\').scrollTop() + 150);
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
					url: window.location+"&ajaxdel=1&delete_alias_id="+did,
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
	
	function suggestdompath(domval){
		if(dompath){
			return true;	
		}
		$_("aliaspath").value = "'.cleanpath($softpanel->user['homedir']).'/www/"+$_("aliasname").value;
	}
	
			
$(document).ready(function(){

	jQuery(\'#butHide\').hide("fast");	
	$(".sai_altrowstable tr").mouseover(function(){
		var old_class = $(this).attr("class");		
		$(this).attr("class", "sai_tr_bgcolor");		
		$(this).mouseout(function(){
			$(this).attr("class", old_class);
		});
	});
	// For showing ADD NEW
	$("#butShow").click(function() {	
		jQuery(\'#showtemp\').slideDown(\'slide\',\'\',1000);
		jQuery(\'#butShow\').fadeOut(0);
		jQuery(\'#butHide\').fadeIn(0);
	});	
	// For hiding ADD NEW
	$("#butHide").click(function() {	
		jQuery(\'#showtemp\').slideUp(\'slide\',\'\',1000);	
		jQuery(\'#butHide\').fadeOut(0);
		jQuery(\'#butShow\').fadeIn(0);			
	});
	// For deleting record
	$(".delete").click(function() {	
		var did = $(this).attr(\'id\');
		did = did.substr(3);
		message_box.delete_message (\'Warning\',\''.$l['alias_del_conf'].'\',did);			
	});	
	// for adding alias	
	$(".submitalias").click(function() {
		$("#createalias").css("display", "");	
		var aliasname = ($("#aliasname").val());
		var aliaspath = ($("#aliaspath").val());					
		$.ajax({
			type: "POST",
			url: window.location+"&submitalias=1&ajaxalias=1",					
			data: "aliasname="+aliasname+"&aliaspath="+aliaspath,
			// checking for error
			success: function(data){
				$("#createalias").css("display", "none");						
				var result = data.substring(0,1);														
				if(result == "1"){
					$_("aliasname").value="";				
					var msg = data.substring(2,data.indexOf("<table"));
					var output = data.substring(data.indexOf("<table"));
					message_box.show_message( "Done ",msg,2);							
					$("#showtab").html(output);
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
						message_box.delete_message (\'Warning\',\''.$l['alias_del_conf'].'\',did);			
					});																								
				}
				if(result == "0"){
					$("#createalias").css("display", "none");
					var msg = data.substring(1);
					message_box.show_message( "Error",msg,1);
				}
			},
			error: function() {
				message_box.show_message("Error",\''.$l['connect_error'].'\',1);						
			}															
		});													
	});	
});					
// ]]></script>';  

echo '<table border="0" width="100%"><tr><td align="center" width="70%"><div class="sai_tit"><img src="'.$theme['a_images'].'alias.gif" />&nbsp; ' . $l['alias_headling'] . '

</div></td><td align="center"><div id="butShow"><a href="javascript:void(0)" style="text-decoration:none;" class="sai_abut">'.$l['add_new_button'].'</a></div>
<div id="butHide"><a href="javascript:void(0)" style="text-decoration:none;" class="sai_abut">'.$l['back_button'].'</a></div></td></tr></table>
<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br /><br />

<div id="showtemp" style="display:none">

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

// ]]></script>

<table width="100%" cellpadding="5" cellspacing="1" align="center">
	<tr>
		<td width="35%">
			<span class="sai_head">'.$l['alias_label'].'</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sai_exp">'.$l['alias_name_eg'].'</span><br />
			<span class="sai_exp">'.$l['alias_name_notice'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="aliasname" id="aliasname" onkeyup="suggestdompath(this);" size="30" value="'.POSTval('aliasname', '').'" onfocus="" />
		</td>
	</tr>
	
	<tr>
		<td>
			<span class="sai_head">'.$l['alias_path'].'</span>&nbsp;&nbsp;&nbsp;&nbsp;<span class="sai_exp">'.$l['alias_path_eg'].'</span><br />
			<span class="sai_exp">'.$l['alias_path_notice'].'</span>
		</td>
		<td valign="top">
			<input type="text" name="aliaspath" id="aliaspath" size="30" value="'.cleanpath($softpanel->path).'/www/'.'" onfocus="" />
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			//Add an event handler
			$_("aliaspath").onkeydown = function(){
				dompath = true;
			}
		// ]]></script>
		</td>
	</tr>
</table>

<br /><br />

<p align="center"><input type="button" class="submitalias" style="cursor:pointer" name="submitalias" value="'.$l['submitalias'].'" /> &nbsp;<img id="createalias" src="'.$theme['images'].'progress.gif" style="display:none"></p>
</form><br />
<br />
</div>
<div id="showtab">';

alias_table();

echo '</div><form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();">
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

function checkform(){
	try{
		if(!formcheck() || !checkdbname(\'softdb\', true)){
			return false;
		}
	}catch(e){
		//Do nothing
	}
	return true;
};

';

echo '// ]]></script>';

softfooter();
}		
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
function alias_table(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
	global $insid, $backed, $software, $soft, $done;
	
	global $alias_list;
	
	echo '<table border="0" cellpadding="8" cellspacing="1" width="95%" class="sai_altrowstable">
	<tr>
		<th align="center"  width="60">'.$l['alias_name'].'</th>
		<th align="center"  width="30">'.$l['alias_path'].'</th>
		<th align="center"  width="10">'.$l['alias_option'].'</th>
	</tr>';
		
	$i =1;
	
	foreach ($alias_list as $key => $value)
	{
		echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'" id="tr'.$i.'">
			<td><a target="_blank" href="http://'.$_SERVER["SERVER_NAME"].'/' . $key . '"> '.$key.'</a></td>
			<td>'.$value.'</td>
			<td align="center"><img title="Delete" class="delete" id="did'.$i.'" src="' . $theme['images'] . 'remove.gif" /></td>
			</tr>';
		$i++;
	}
	echo '</table>';
}
?>
