<?php

//////////////////////////////////////////////////////////////
//===========================================================
// ftp_account_lang.php
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

$l['no_domain'] = 'You did not specify the cPanel Server Name.';
$l['no_user'] = 'You did not specify the cPanel User Name.';
$l['no_pass'] = 'You did not specify the cPanel User password.';
$l['err_invalid_user'] = 'User name sholud be same as Webuzo user name';
$l['err_invalid_ip'] = 'Invalid cPanel IP Address';
$l['err_invalid_domain'] = 'Invalid cPanel Domain name';
$l['err_ftp_user_connect'] = 'Unable to connect to your cPanel server using given user details. Please confirm your user details.';

// Theme Strings
$l['<title>'] = APP.' - Import From cPanel';
$l['import_cpanel'] = 'Importare da cPanel';
$l['r_domain'] = 'cPanel Server Address:';
$l['r_domain_exp'] = 'IP address or FQDN';
$l['r_user'] = 'User Name';
$l['r_user_exp'] = 'Same as Webuzo User Name';
$l['r_pass'] = 'Password';
$l['r_pass_exp'] = 'User password ';
$l['submit_button'] = 'Inviare';
$l['import_done'] = 'Import from cPanel process has been started in the backgroud. You will receive an email on completion of the process.';
$l['note'] = '<b>Note:</b> This feature is in <b>Beta</b>. <a href="http://www.webuzo.com/wiki/Import_From_cPanel" target="_blank" >Here<a> is the guide for the same.';
 ?>