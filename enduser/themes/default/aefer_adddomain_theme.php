<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_theme.php
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


function adddomain_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $saved , $aefer ;

softheader($l['<title>']);

echo '<div class="bg"><br />';

echo '<form accept-charset="'.$globals['charset'].'" name="addadomain" method="post" action="" class="form-horizontal">
	<div class="sai_main_head" style="width:100%;" align="center">'.$l['add_domain'].'</div><hr>';
		
	error_handle($error, '100%');

	if(!empty($saved)){
		echo '<div class="alert alert-warning">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<center><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['settings_saved'].'</center>
		</div>';
	}
	
	echo '<div class="row">
		<div class="col-sm-5">
			<label for="domain" class="sai_head">'.$l['domain'].'</label><br />
			<span class="sai_exp2">'.$l['domain_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="domain" id="domain" class="form-control" value="'.POSTval('domain', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="server_host" class="sai_head">'.$l['server_host'].'</label>
			<span class="sai_exp">'.$l['server_host_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="server_host" id="server_host" class="form-control" value="'.POSTval('server_host', '').'" />
		</div>
	</div><br />';
	
	if(empty($globals['custom_handler'])){
		echo '
		<div class="row">
			<div class="col-sm-5">
				<label for="protocol" class="sai_head">'.$l['protocol'].'</label>
				<span class="sai_exp">'.$l['protocol_exp'].'</span>
			</div>
			<div class="col-sm-7">
				<select name="protocol" class="form-control" id="protocol">
					<option value="ftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftp' ? 'selected="selected"' : '').'>FTP</option>
					<option value="ftps" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'ftps' ? 'selected="selected"' : '').'>FTPS</option>
					<option value="sftp" '.(isset($_POST['protocol']) && $_POST['protocol'] == 'sftp' ? 'selected="selected"' : '').'>SFTP</option>
				</select>
			</div>
		</div><br />';
	}
	
	echo '
	<div class="row">
		<div class="col-sm-5">
			<label for="port" class="sai_head">'.$l['port'].'</label>
			<span class="sai_exp">'.$l['port_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="port" id="port" class="form-control" value="'.POSTval('port', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="ftp_user" class="sai_head">'.$l['ftp_user'].'</label>
			<span class="sai_exp">'.$l['ftp_user_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="ftp_user" id="ftp_user" class="form-control" value="'.POSTval('ftp_user', '').'" />
		</div>
	</div><br />
	
	<div class="row" id="ftp_pass">
		<div class="col-sm-5">
			<label for="ftp_pass" class="sai_head">'.$l['ftp_pass'].'</label>
			<span class="sai_exp">'.$l['ftp_pass_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="ftp_pass" id="ftp_pass" class="form-control" value="'.POSTval('ftp_pass', '').'" /><br />
		</div>
	</div>
	
	<div class="row" id="trauthpass">
		<div class="col-sm-5">
			<label for="auth_password" class="sai_head">'.$l['auth_password'].'</label>
			<span class="sai_exp">'.$l['auth_password_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="checkbox" name="auth_password" id="auth_password" '.POSTchecked('auth_password', true).' /><br /><br />
		</div>
	</div>
	
	<div class="row" id="pub">
		<div class="col-sm-5">
			<label for="public_key" class="sai_head">'.$l['public_key'].'</label>
			<span class="sai_exp">'.$l['public_key_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="public_key" id="public_key" class="form-control" value="'.POSTval('public_key', '').'" /><br />
		</div>
	</div>
	
	<div class="row" id="pri">
		<div class="col-sm-5">
			<label for="private_key" class="sai_head">'.$l['private_key'].'</label>
			<span class="sai_exp">'.$l['private_key_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="private_key" id="private_key" class="form-control" value="'.POSTval('private_key', '').'" /><br />
		</div>
	</div>
	
	<div class="row" id="passphrase">
		<div class="col-sm-5">
			<label for="passphrase" class="sai_head">'.$l['passphrase'].'</label>
			<span class="sai_exp">'.$l['passphrase_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="passphrase" id="passphrase" class="form-control" value="'.POSTval('passphrase', '').'" /><br />
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-5">
			<label for="ftp_path" class="sai_head">'.$l['ftp_path'].'</label><br />
			<span class="sai_exp2">'.$l['ftp_path_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="ftp_path" id="ftp_path" class="form-control" value="'.POSTval('ftp_path', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="backup_path" class="sai_head">'.$l['backup_path'].'</label><br />
			<span class="sai_exp2">'.$l['backup_path_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="backup_path" id="backup_path" class="form-control" value="'.POSTval('backup_path', '').'" />
		</div>
	</div><br />
	
	<div class="row">
		<div class="col-sm-5">
			<label for="data_dir" class="sai_head">'.$l['data_dir'].'</label><br />
			<span class="sai_exp2">'.$l['data_dir_exp'].'</span>
		</div>
		<div class="col-sm-7">
			<input type="text" name="data_dir" id="data_dir" class="form-control" value="'.POSTval('data_dir', '').'" />
		</div>
	</div><br />

	<br /><br />
	<p align="center">
	<input class="flat-butt" type="submit" name="add_domain" value="'.$l['submit_add'].'" />
	<br /><br /><br /><br />
	<b><a class="sai_head" href="'.$globals['ind'].'act=domains">'.$l['show_all_dom'].'</a></b>
	</p>
	</form>
</div>';

echo ' <br /><br />
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){
	checkprotocol();
	$(\'#auth_password\').change(function(){
		if($(this).is(":checked")) {
			hide_pubkey();
		}else{
			show_pubkey();
		}
	});
	
	$(\'#protocol\').change(function(){
		checkprotocol();
	});
});

function checkprotocol(){
	if($(\'#protocol\').val() == \'ftp\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'21\');
		}
		$(\'#trauthpass\').hide();
		hide_pubkey();
		ftppath();
	}
	if($(\'#protocol\').val() == \'ftps\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'21\');
		}
		$(\'#trauthpass\').hide();
		hide_pubkey();
		ftppath();
	}
	if($(\'#protocol\').val() == \'sftp\'){
		if($(\'#port\').val() == ""){
			$(\'#port\').val(\'22\');
		}
		$(\'#trauthpass\').show();
		if($(\'#auth_password\').is(":checked")){
			hide_pubkey();
		}else{
			show_pubkey();
		}
		sftppath();
	}
}

function hide_pubkey(){
	$(\'#public_key\').prop(\'disabled\', true);
	$(\'#private_key\').prop(\'disabled\', true);
	$(\'#pub\').hide();
	$(\'#pri\').hide();
	$(\'#passphrase\').hide();
	$(\'#ftp_pass\').show();
}

function show_pubkey(){
	$(\'#public_key\').prop(\'disabled\', false);
	$(\'#private_key\').prop(\'disabled\', false);
	$(\'#pub\').show();
	$(\'#pri\').show();
	$(\'#passphrase\').show();
	$(\'#ftp_pass\').hide();
}

function ftppath(){
	$(\'#ftp_path\').html("'.$l['ftp_path'].'");
	$(\'#ftp_path_exp\').html("'.$l['ftp_path_exp'].'");
	$(\'#backup_path_exp\').html("'.$l['backup_path_exp'].'");
}

function sftppath(){
	$(\'#ftp_path\').html("'.$l['sftp_path'].'");
	$(\'#ftp_path_exp\').html("'.$l['sftp_path_exp'].'");
	$(\'#backup_path_exp\').html("'.$l['sbackup_path_exp'].'");
}

// ]]></script>
<!--<center>
<h2>How to Add a Domain</h2>
<object width="450" height="345" align="center">
<param name="movie" value="Add Domain">
<embed src="../theme/videos/add_domain/video.swf" width="450" height="345">
</embed>
</object>
</center>-->';

softfooter();

}

?>