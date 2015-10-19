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

$l['no_port'] = 'Please enter the Port No.';
$l['err_msg'] = 'Einige Fehler beim Speichern der Einstellungen';
$l['settings_saved'] = 'Ihre Einstellungen wurden erfolgreich gespeichert';
$l['err_installing_webserver'] = 'There were some errors installing the Proxy webserver.';
$l['invalid_webserver'] = 'Invalid Webserver Set';
$l['invalid_default_server'] = 'Invalid Default Server';
$l['errport_no'] = 'Invalid Port Number';
$l['port_used'] = 'The specified port is already in use';

// Theme Strings
$l['<title>'] = APP.' - Apache Einstellungen';
$l['edit_settings'] = 'Bearbeiten Apache Einstellungen';
$l['apachesettings'] = 'Apache Einstellungen';
$l['suphp_enable'] = 'aktivieren suPHP';
$l['suphp_check'] = 'Prüfen Sie, ob Sie wollen suphp aktiviert';
$l['err_no_install'] = 'PHP ist auf Ihrem Server nicht installiert';
$l['spdy_enable'] = 'SPDY aktivieren';
$l['spdy_check'] = 'Überprüfen Sie, ob Sie SPDY aktivieren wollen.';
$l['nginxsettings'] = 'Nginx Einstellungen';
$l['edit_nginx_settings'] = 'Nginx Einstelleungen bearbeiten';
$l['err_no_install_nginx'] = 'Nginx ist auf Ihrem Server nicht installiert';
$l['old_nginx'] = 'Sie müssen Nginx auf die neuste Version aktualisieren und die Einstellung aktivieren zu können.';
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