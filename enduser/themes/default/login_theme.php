<?php

//////////////////////////////////////////////////////////////
//===========================================================
// login_theme.php
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


function login_theme(){

global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft;

$current_user = $softpanel->getCurrentUser();

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
<meta name="keywords" content="softaculous, software" />
<title>'.$l['<title>'].'</title>
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/style.css" />
<link rel="shortcut icon" href="'.$theme['a_images'].'favicon.ico" />
<script language="javascript" src="'.$theme['url'].'/js/universal.js" type="text/javascript"></script>
</head>
<body>

<div class="sai_loginmap">
<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
	<td colspan="3" background="'.$theme['images'].'loginhead.gif">
	
		<table border="0" cellpadding="0" cellspacing="0" width="950" align="center">	
			<tr>
				<td align="left" width="100%" height="43" valign="middle">
				<a href="'.$globals['ind'].'"><img '.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['a_images'].'loginlogo.gif"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="" /></a>
				</td>
			</tr>
		</table>
		
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left" width="950" valign="top">';

error_handle($error, 360, 1);

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
<br /><br />
<table border="0" cellpadding="8" cellspacing="0" align="center">	
	<tr>			
		<td width="400" valign="middle">
			<center class="sai_loginhead">'.$l['sign_in'].'</center>
			<table border="0" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<td width="30">&nbsp;</td>
				<td valign="top" class="sai_login_txt">
					<br /><br />
					'.$l['log_user'].'<br />
					<input type="text" name="username"  id="username" '.($globals['softpanel'] == 'ampps' || (!empty($globals['webuzo_disable_username'])) ? 'value="'.POSTval('username', $current_user).'" readonly': 'value="'.POSTval('username', '').'"'  ).' class="sai_login_input" />
					
					<br />
					
					'.$l['log_pass'].'<br />
					<input type="password" name="password" value="" class="sai_login_input" />
					
					<center>
						<input type="submit" name="login" value="'.$l['sub_but'].'" class="sai_graybluebut" />
					</center>
				</td>
				<td width="30">&nbsp;</td>
				</tr>
			</table>			
			<br />';
			
			if(webuzo()){
				
				echo '
				<center>
					<a href="index.php?act=login&sa=fuser" style="color:#666666">'.$l['forgotuser'].'</a>
				</center>			
				<br />';
			
			}
			
			echo '
			<center>
				<a href="index.php?act=login&sa=fpass" style="color:#666666">'.$l['forgot_pass'].'</a>
			</center>
		</td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
window.onload = function(){ $_("username").focus(); }
// ]]></script>

</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<br />';

softfooter();
/**
 * <br />
			<center>
				<a href="index.php?act=login&sa=fpass" style="color:#666666">'.$l['forgot_pass'].'</a>
			</center>
 */
	
}

// Forgot Password theme
function fpass_theme(){
	
global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done, $show;

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
<meta name="keywords" content="softaculous, software" />
<title>'.$l['<title>'].'</title>
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/style.css" />
<link rel="shortcut icon" href="'.$theme['a_images'].'favicon.ico" />
<script language="javascript" src="'.$theme['url'].'/js/universal.js" type="text/javascript"></script>
</head>
<body>

<div class="sai_loginmap">
<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
	<td colspan="3" background="'.$theme['images'].'loginhead.gif">
	
		<table border="0" cellpadding="0" cellspacing="0" width="950" align="center">	
			<tr>
				<td align="left" width="100%" height="43" valign="middle">
				<a href="'.$globals['ind'].'"><img '.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['a_images'].'loginlogo.gif"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="" /></a>				</td>
				</td>
			</tr>
		</table>
		
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left" width="950" valign="top">';

error_handle($error, 360, 1);

if(!empty($done)){
	echo '<br /><br />
	<center><div class="sai_notice" style="width:70%;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['mail_done'].'</div>
	<a href="index.php?act=login" style="color:#666666">'.$l['back_to_login'].'</a>
	</center>
<br /><br /><br /><br />';

}else{

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
<br /><br /><br />
<table border="0" cellpadding="8" cellspacing="0" align="center">	
	<tr>			
		<td width="360" valign="middle">
			<center class="sai_loginhead">'.$l['forgotpass'].'</center>
			<table border="0" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<td width="30">&nbsp;</td>
				<td valign="top" class="sai_login_txt">
					<br /><br /><br />
					'.$l['emailuser'].'<br />
					<input type="text" name="email" id="email" value="'.POSTval('email', '').'" class="sai_login_input" />
					<center><span class="sai_loginhead">'.$l['enteremail'].'</span></center>				
					<center><br />
						<input type="submit" name="submitemail" value="'.$l['sub_email'].'" class="sai_graybluebut" />
					</center>
				</td>
				<td width="30">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
window.onload = function(){ $_("email").focus(); }
// ]]></script>';

}

echo '</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<br />';

softfooter();

}

function fuser_theme(){
	
global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
global $insid, $backed, $software, $soft, $done, $show;

echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
<meta name="keywords" content="softaculous, software" />
<title>'.$l['<title>'].'</title>
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/style.css" />
<link rel="shortcut icon" href="'.$theme['a_images'].'favicon.ico" />
<script language="javascript" src="'.$theme['url'].'/js/universal.js" type="text/javascript"></script>
</head>
<body>

<div class="sai_loginmap">
<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
	<td colspan="3" background="'.$theme['images'].'loginhead.gif">
	
		<table border="0" cellpadding="0" cellspacing="0" width="950" align="center">	
			<tr>
				<td align="left" width="100%" height="43" valign="middle">
				<a href="'.$globals['ind'].'"><img '.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['a_images'].'loginlogo.gif"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="" /></a>				</td>
				</td>
			</tr>
		</table>
		
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left" width="950" valign="top">';

error_handle($error, 360, 1);

if(!empty($done)){
	echo '<br /><br />
	<center><div class="sai_notice" style="width:70%;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['fuser_mail_done'].'</div>
	<a href="index.php?act=login" style="color:#666666">'.$l['back_to_login'].'</a>
	</center>
<br /><br /><br /><br />';

}else{

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
<br /><br /><br />
<table border="0" cellpadding="8" cellspacing="0" align="center">	
	<tr>			
		<td width="360" valign="middle">
			<center class="sai_loginhead">'.$l['forgotuser'].'</center>
			<table border="0" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<td width="30">&nbsp;</td>
				<td valign="top" class="sai_login_txt">
					<br /><br /><br />
					'.$l['emailuser'].'<br />
					<input type="text" name="email" id="email" value="'.POSTval('email', '').'" class="sai_login_input" />
					<center><span class="sai_loginhead">'.$l['enteremail'].'</span></center>				
					<center><br />
						<input type="submit" name="submitemailuser" value="'.$l['sub_email'].'" class="sai_graybluebut" />
					</center>
				</td>
				<td width="30">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
window.onload = function(){ $_("email").focus(); }
// ]]></script>';

}

echo '</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<br />';

softfooter();

}

//Reset password
function resetpass_theme(){
	
	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error;
    global $insid, $backed, $software, $soft, $done, $show;
	
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset='.$globals['charset'].'" />
<meta name="keywords" content="softaculous, software" />
<title>'.$l['<title>'].'</title>
<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/style.css" />
<link rel="shortcut icon" href="'.$theme['a_images'].'favicon.ico" />
<script language="javascript" src="'.$theme['url'].'/js/universal.js" type="text/javascript"></script>
</head>
<body>

<div class="sai_loginmap">
<table border="0" cellpadding="0" cellspacing="0" width="100%">	
<tr>
	<td colspan="3" background="'.$theme['images'].'loginhead.gif">
	
		<table border="0" cellpadding="0" cellspacing="0" width="950" align="center">	
			<tr>
				<td align="left" width="100%" height="43" valign="middle">
				<a href="'.$globals['ind'].'"><img '.($globals['softpanel'] == 'ampps' ? 'src="'.$theme['a_images'].'loginlogo.gif"' : (empty($globals['logo_url']) ? ' src="'.$theme['a_images'].'loginlogo.gif"' : ' src="'.$theme['images'].'cust_panel.gif"')).' alt="" /></a>
				</td>
			</tr>
		</table>
		
	</td>
</tr>

<tr>
<td>&nbsp;</td>
<td align="left" width="950" valign="top">';

error_handle($error, 360, 1);

if(!empty($done)){
	echo '<center><div class="sai_notice" style="width:70%;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.$l['passchanged'].'</div></center>';
}

if(empty($error) && empty($done)){

echo '<form accept-charset="'.$globals['charset'].'" action="" method="post" name="loginform">
<br /><br /><br />
<table border="0" cellpadding="8" cellspacing="0" align="center">	
	<tr>			
		<td width="360" valign="middle">
			<center class="sai_loginhead">'.$l['resetpass'].'</center>
			<table border="0" cellpadding="2" cellspacing="0" align="center">
				<tr>
				<td width="30">&nbsp;</td>
				<td valign="top" class="sai_login_txt">
					<br /><br />
					'.$l['log_new_pass'].'<br />
					<input type="password" name="newpass" id="newpass" value="" class="sai_login_input" />
					<br />
					'.$l['log_reppass'].'<br />
					<input type="password" name="reppass" value="" class="sai_login_input" />
					
					<center>
						<input type="submit" name="changepass" value="'.$l['changepass'].'" class="sai_graybluebut" />
					</center>
				</td>
				<td width="30">&nbsp;</td>
				</tr>
			</table>
		</td>
	</tr>
</table>
</form>
<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
window.onload = function(){ $_("newpass").focus(); }
// ]]></script>';
}

echo '</td>
<td>&nbsp;</td>
</tr>
</table>
</div>

<br />';

softfooter();

}
?>