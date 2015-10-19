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

$l['no_domain'] = 'Sie haben keinen cPanel Server Namen angegeben.';
$l['no_user'] = 'Sie haben keinen cPanel Server Benutzernamen angegeben.';
$l['no_pass'] = 'Sie haben keinen cPanel Server Benutzer Passwort angegeben.';
$l['err_invalid_user'] = 'Der Benutzername sollte der gleiche wie der Webuzo Benutzername sein';
$l['err_invalid_ip'] = 'Ungültige cPanel Adresse';
$l['err_invalid_domain'] = 'Ungültiger cPanel Domain Name';
$l['err_ftp_user_connect'] = 'Konnte mit den angegebenen Daten nicht zum cPanel Server verbinden. Bitte überprüfen Sie die Benutzer Details.';

// Theme Strings
$l['<title>'] = ''.APP.' - von cPanel imortieren';
$l['import_cpanel'] = 'von cPanel importieren';
$l['r_domain'] = 'cPanel Server Adresse:';
$l['r_domain_exp'] = 'IP Adresse oder FQDN';
$l['r_user'] = 'Benutzername';
$l['r_user_exp'] = 'Der selbe Name wie bei Webuzo';
$l['r_pass'] = 'Passwort';
$l['r_pass_exp'] = 'Benutzerasswort ';
$l['submit_button'] = 'weiter';
$l['import_done'] = 'Der Import vom cPanel wurde im Hintergrund gestartet. Sie werden eine E-mail über den Abschluss des Prozesses erhalten.';
$l['note'] = '<b>Hinweis:</b> Dieses Feature befindet sich in der <b>Beta</b> Phase. <a href="http://www.webuzo.com/wiki/Import_From_cPanel" target="_blank" >Hier<a> befindet sich eine Anleitung dafür.';
 ?>