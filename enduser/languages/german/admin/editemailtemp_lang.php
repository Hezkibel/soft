<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.0
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       8th Mar 2010
// Time:       23:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Please Read the Terms of use at http://www.softaculous.com
// ----------------------------------------------------------
//===========================================================
// (c)Softaculous Ltd.
//===========================================================
//////////////////////////////////////////////////////////////

if(!defined('SOFTACULOUS')){

	die('Hacking Attempt');

}

$l['tempsub'] = 'Bitte geben Sie einen Betreff an';
$l['tempcontent'] = 'Bitte geben Sie den Inhalt für die Vorlage an.';

$l['<title>'] = 'E-Mail Vorlage bearbeiten';
$l['heading'] = 'E-Mail Vorlage bearbeiten';
$l['edittemp'] = 'E-Mail Vorlage bearbeiten';
$l['done'] = 'Die E-Mailvorlage wurde erfolgreich gespeichert';
$l['savetemp'] = 'E-Mail Vorlage speichern';
$l['subject'] = 'Betreff';
$l['content'] = 'Inhalt';
$l['reset_confirm'] = 'Sind Sie sicher, dass Sie die E-Mail Vorlage zurücksetzen wollen?';
$l['reset_template'] = 'Vorlage zurücksetzen';
$l['temp_overview'] = 'Vorlagen Übersicht';

$l['if_note'] = '<strong>Hinweis</strong>: Sie können ein IF für eine optionale Variable angeben. Bitte nutzen Sie dazu folgendes Muster:<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Daten Verzeichnis<br />
<strong>$admin_username</strong> : Admin Benutzername<br />
<strong>$admin_pass</strong> : Admin Passwort<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$cron</strong> : Cron Kommando<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Clone Variables Information
$l['mail_clone_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$old_path</strong> : Original Installations Pfad<br />
<strong>$old_url</strong> : Original Installations URL<br />
<strong>$path</strong> : Kopierter Installations Pfad<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Kopierte Installations URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Daten Verzeichnis<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$cron</strong> : Cron Kommando<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Installtion Variables Information
$l['mail_install_js_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Daten Verzeichnis<br />
<strong>$wwwdir</strong> : Web Verzeichnis<br />
<strong>$admin_username</strong> : Admin Benutzername<br />
<strong>$admin_pass</strong> : Admin Passwort<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$cron</strong> : Cron Kommando<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Removal Variables
$l['mail_remove_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Daten Verzeichnis<br />
<strong>$wwwdir</strong> : Web Verzeichnis<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$cron</strong> : Cron Kommando<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$rem_time</strong> : Entfernungszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : Liste der Installationen<br />
<strong>$time</strong> : Zeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$serverip</strong> : Server IP<br />
<strong>$installation</strong> : Liste der Installationen, die jetzt upgedatet werden können<br />
<strong>$time</strong> : Zeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)

';

// Edit detail Variables
$l['mail_editdetail_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Daten Verzeichnis<br />
<strong>$wwwdir</strong> : Web Verzeichnis<br />
<strong>$wwwurl</strong> : Web URL<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Installationszeit<br />
<strong>$edit_time</strong> : Änderungszeit<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Edit detail Variables
$l['mail_backup_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$backup_file</strong> : Web Verzeichnis<br />
<strong>$error</strong> : Web URL<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Backup Email variables
$l['mail_backup_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$backup_file</strong> : Web Verzeichnis<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$path</strong> : Installationspfad<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$backup_file</strong> : Web Verzeichnis<br />
<strong>$error</strong> : Web URL<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Successfully Cli Upgraded by Admin
$l['mail_adminupgrade_success_admin_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : aktuelle Version<br />
<strong>$version</strong> : neuste Version<br />
<strong>$user</strong> : Benutzername<br />
<strong>$backup_path</strong> : Backup Pfad<br />
<strong>$path</strong> : Installations Pfad<br />
<strong>$dbname</strong> : MySQL Datenbank<br />
<strong>$dbuser</strong> : MySQL DB Benutzer<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Passwort<br />
<strong>$error</strong> : Liste der Rücksicherungs Fehler<br />
<strong>$upgrade_error</strong> : Liste der Upgrade Fehler<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

$l['mail_adminupgrade_success_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_admin_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_adminupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_adminupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_autoupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_userupgrade_success_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];
$l['mail_userupgrade_restore_fail_user_info'] = $l['mail_adminupgrade_success_admin_info'];

$l['mail_autoupgrade_backup_fail_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : aktuelle Version<br />
<strong>$version</strong> : neuste Version<br />
<strong>$user</strong> : Benutzername<br />
<strong>$error</strong> : Liste der Fehler<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Auto backup successful Variables
$l['mail_auto_backup_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installations Pfad<br />
<strong>$url</strong> : Installations URL<br />
<strong>$backup_file</strong> : Backup Pfad<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Auto backup failed Variables
$l['mail_auto_backup_fail_info'] = 'Sie können die folgenden Variablen benutzen:<br />
<strong>$scriptname</strong> : Anwendungsname<br />
<strong>$path</strong> : Installations Pfad<br />
<strong>$url</strong> : Installationd URL<br />
<strong>$backup_file</strong> : Backup Pfad<br />
<strong>$error</strong> : Liste der Fehler<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

?>
