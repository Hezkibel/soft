<?php

//////////////////////////////////////////////////////////////
//===========================================================
// apache_settings_lang.php
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


// Theme Strings
$l['<title>'] = APP.' - Apache Settings';

$l['err_msg'] = 'Oops! There were some errors while saving your settings.';
$l['edit_settings'] = 'Edit Apache Settings';
$l['apachesettings'] = 'Apache Settings';
$l['settings_saved'] = 'Your settings were saved successfully.';
$l['suphp_enable'] = 'Enable suPHP';
$l['suphp_check'] = 'Check if you want suPHP enabled.';
$l['err_no_install'] = 'PHP is not installed on your Server';
$l['spdy_enable'] = 'Enable SPDY';
$l['spdy_check'] = 'Check if you want SPDY enabled.';
$l['nginxsettings'] = 'Nginx Settings';
$l['edit_nginx_settings'] = 'Edit Nginx Settings';
$l['err_no_install_nginx'] = 'Nginx is not installed on your Server';
$l['old_nginx'] = 'You need to upgrade Nginx to the latest version to enable this setting.';

$l['no_port'] = 'Please enter the Port No.';
$l['err_installing_webserver'] = 'There were some errors installing the Proxy webserver.';
$l['invalid_webserver'] = 'Invalid Webserver Set';
$l['invalid_default_server'] = 'Invalid Default Server';
$l['errport_no'] = 'Invalid Port Number';
$l['port_used'] = 'The specified port is already in use';
$l['lbl_head'] = 'Nginx Proxy';
$l['name'] = 'Port No';
$l['exp_name'] = 'Port for running Apache Service<br />
<strong>Note: </strong>No other service should be running on this port.';
$l['enable_button'] = 'Enable';
$l['disable_button'] = 'Disable';
$l['option'] = 'Options';
$l['block'] = 'IP Address';
$l['enable_done'] = 'Nginx Proxy is enabled.';
$l['disable_done'] = 'Nginx Proxy is disabled.';
$l['some_error'] = 'Some error occurred. Please try again!';
$l['connect_error'] = 'Oops! There was an error while connecting to <strong>Server</strong>';
$l['ht_check'] = 'Allow .htaccess';
$l['ht_check_exp'] = 'Check if you want to allow .htaccess files.';
$l['set_default'] = 'Set your default web server';
$l['set_proxy'] = 'Set the PROXY Server';
$l['set_proxy_exp'] = 'Select the Proxy server to be used.';
?>