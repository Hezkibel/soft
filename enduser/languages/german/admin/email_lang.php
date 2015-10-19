<?php

//////////////////////////////////////////////////////////////
//===========================================================
// email_lang.php
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

$l['no_mail'] = 'Es wurde keine E-Mail Methode ausgewählt';
$l['wrong_mail'] = 'Die angegebene E-Mail Methode ist ungültig';
$l['no_mail_server'] = 'Es wurde kein SMTP E-Mail Server angegeben';
$l['no_mail_port'] = 'Es wurde kein SMTP Port angegeben';
$l['no_mail_user'] = 'Es wurde kein SMTP Benutzername angegeben';
$l['no_mail_pass'] = 'Es wurde kein SMTP Passwort angegeben';
$l['saving_error'] = 'Es sind Fehler beim Speichern der Einstellungen aufgetreten';

//Theme Strings
$l['<title>'] = APP.' - Einstellungscenter';
$l['settings_saved'] = 'Die E-Mail Einstellungen wurden erfolgreich gespeichert';
$l['emailhead'] = 'E-Mail Einstellungen';
$l['mailmethod'] = 'Mailing Methode';
$l['mailmethod_exp'] = 'Senden Sie E-Mail via mail() Funktion oder über Ihren SMTP Server';
$l['smtp_server'] = 'SMTP Server';
$l['smtp_port'] = 'SMTP Port';
$l['smtp_user'] = 'SMTP Benutzername';
$l['smtp_pass'] = 'SMTP Passwort';
$l['edit_settings'] = 'Einstellungen bearbeiten';
$l['mailauthtype'] = 'SMTP Authtype';
$l['mailauthtype_exp'] = 'Choose the Authtype for the emails sent using SMTP';

?>
