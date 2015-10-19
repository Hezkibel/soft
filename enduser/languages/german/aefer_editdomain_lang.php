<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'Der Domain Name wurde nicht angegeben';
$l['alreay_exists'] = 'Die angegebene Domain existiert bereits in Ihrem Account.';
$l['no_ftp_user'] = 'Es wurde kein FTP Benutzer angegeben';
$l['no_ftp_pass'] = 'Es wurde kein FTP Passwort angegeben';
$l['no_ftp_path'] = 'Es wurde kein FTP Pfad angegeben';
$l['no_data_dir'] = 'Es wurde kein Daten Verzeichnis abgegeben';
$l['wrong_ftp_path'] = 'Der angegebene FTP Pfad ist fehlerhaft und gehört nicht zur angegebenen Domain.';
$l['no_id'] = 'Keine ID gefunden!';
$l['no_backup_path'] = 'Es wurde kein Backup Pfad angegeben';
$l['ftp_error-1'] = 'Konnte Domain Namen nicht auflösen';
$l['ftp_error-2'] = 'Mit den eingegebenen FTP Daten konnte war kein Login möglich';
$l['ftp_error-3'] = 'Der angegebene FTP Pfad existiert nicht';
$l['no_port'] = 'No Port was specified';
$l['no_pub_allowed'] = 'Public Key is not required while authenticating using password';
$l['no_public_key'] = 'No path to public key was found';
$l['no_private_key'] = 'No path to private key was found';
$l['err_sftp_only'] = 'Only SFTP allows authentication through keys';
$l['no_pub_pri'] = 'Public or Private Key not found';
$l['no_domain_exist'] = 'The domain does not exist';
$l['not_allowed'] = 'You are not allowed to edit this domain';

//Theme Strings
$l['<title>'] = 'Eine Domain bearbeiten';
$l['edit_domain'] = 'Domain bearbeiten';
$l['domain'] = 'Domain Name';
$l['domain_exp'] = 'Geben Sie einen gültigen Domain Namen an (ohne http://) z.B. mydomain.com';
$l['ftp_user'] = 'FTP Benutzer';
$l['ftp_user_exp'] = 'Benutzername Ihres FTP Accounts';
$l['ftp_pass'] = 'FTP Passwort';
$l['ftp_pass_exp'] = 'Passwort Ihres FTP Accounts';
$l['ftp_path'] = 'FTP Pfad';
$l['ftp_path_exp'] = 'FTP Pfad zu Ihrer Domain z.B. /public_html';
$l['backup_path'] = 'Backup Pfad';
$l['backup_path_exp'] = 'Der Bacup Pfad Ihrer Domain z.B. /backups';
$l['data_dir'] = 'Daten Verzeichnis';
$l['data_dir_exp'] = 'Kompletter Pfad zum Daten Verzeichnis z.B. /home/BENUTZER/datenverzeichnis<br/> Manche Anwendungen wie Elgg, Moodle, etc. benötigen ein nicht web zugängliches Verzeichnis.<br/> Dieser wird für diesen Zweck benutzt.';
$l['ins_email_exp'] = 'E-Mail mit Setup Details versenden, wenn neue Software installiert wurde';
$l['submit_edit'] = 'Speichern & Aktualisieren';
$l['settings_saved'] = 'Ihre Domain wurde erfolgreich gespeichert';
$l['show_all_dom'] = 'Alle Domains anzeigen';
$l['port'] = 'Port';
$l['port_exp'] = 'Enter the port to connect';
$l['protocol'] = 'Protocol';
$l['protocol_exp'] = 'Select the protocol by which Softaculous will communicate';
$l['auth_password'] = 'Authenticate using a Password or Public Key';
$l['auth_password_exp'] = 'Select the checkbox to authenticate using password';
$l['public_key'] = 'Public Key';
$l['public_key_exp'] = 'Path to public key';
$l['private_key'] = 'Private Key';
$l['private_key_exp'] = 'Path to private key';
$l['passphrase'] = 'Passphrase';
$l['passphrase_exp'] = 'Passphrase for encrypted private key(optional)';
$l['sftp_path'] = 'Web Directory';
$l['sftp_path_exp'] = 'Absolute path to web directory of user. e.g. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Absolute path to Backup Directory e.g /home/USERNAME/backups';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';

?>
