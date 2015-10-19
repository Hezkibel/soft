<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Es wurde keine Installation angegeben';
$l['wrong_ins_title'] = 'Falsche Installations ID';
$l['wrong_ins'] = 'Die Installations ID die Sie angegeben haben existiert nicht';
$l['cant_remove_dir'] = 'Das Verzeichnis kann nicht entfernt werden, da es das home Verzeichnis ist. Bitte wählen Sie die Option <b>Verzeichnis löschen</b> ab, um ohne das Verzeichnis zu löschen weiter zu machen.';
$l['no_dir'] = 'Das Installations Verzeichnis existiert nicht!';
$l['no_datadir'] = 'Das Daten Verzeichnis existiert nicht!';
$l['no_wwwdir'] = 'Das Web Verzeichnis existiert nicht!';
$l['wrong_url'] = 'Die URL und der Verzeichnis Name stimmen nicht überein';
$l['wrong_wwwurl'] = 'Die WebURL und der Web Verzeichnis Name stimmen nicht überein';
$l['err_mysql_user'] = 'MySQL Benutzer oder Passwort ist falsch. Eine Verbindung konnte nicht hergestellt werden.';
$l['err_mysql_db'] = 'Der MySQL Datenbank Name ist falsch, da die Datenbank nicht gefunden wurde.';
$l['mail_path'] = 'Pfad';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL Datenbank';
$l['mail_dbuser'] = 'MySQL DB Benutzer';
$l['mail_dbhost'] = 'MySQL DB Host';
$l['mail_dbpass'] = 'MySQL DB Passwort';
$l['mail_time'] = 'Installationszeit';
$l['mail_editdetail_time'] = 'Änderungszeit';
$l['mail_subject'] = 'Geänderte Installationsdetails zu &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Daten Verzeichnis';
$l['mail_wwwdir'] = 'Web Verzeichnis';
$l['mail_wwwurl'] = 'Web Verzeichnis URL';

//Theme Strings
$l['<title>'] = APP.' - Details bearbeiten';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'Info';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Installations Nummer';
$l['ins_ver'] = 'Version';
$l['ins_time'] = 'Installations Zeit';
$l['ins_path'] = 'Pfad';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Datenbank Name';
$l['ins_dbuser'] = 'Datenbank Benutzer';
$l['ins_dbpass'] = 'Datenbank Passwort';
$l['ins_dbhost'] = 'Datenbank Host';
$l['ins_datadir'] = 'Daten Verzeichnis';
$l['ins_wwwdir'] = 'Web Verzeichnis';
$l['ins_wwwurl'] = 'Web Verzeichnis URL';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'Die Installationsdetails wurden erfolgreich geändert';
$l['version_edited'] = 'Die Version wurde in unseren Aufzeichnungen aktualisiert.';
$l['return'] = 'Zurück zur Übersicht';

$l['edit_ins'] = 'Installationsdetails bearbeiten';
$l['edit_dir'] = 'Verzeichnis';
$l['edit_datadir'] = 'Daten Verzeichnis';
$l['edit_db'] = 'Datenbank Name';
$l['edit_dbuser'] = 'Datenbank Benutzer';
$l['edit_dbpass'] = 'Datenbank Passwort';
$l['edit_dbhost'] = 'Datenbank Host';
$l['edit_url'] = 'URL';
$l['editins'] = 'Installationsdetails bearbeiten';
$l['mail_editdetail_ins'] = 'Die Installationsdetails zu &soft-1; wurden geändert. Dies sind die geänderten Details der Installation: ';
$l['edit_wwwdir'] = 'Web Verzeichnis';
$l['edit_wwwurl'] = 'Web Verzeichnis URL';
$l['disable_notify_update'] = 'Update Benachrichtigungen deaktivieren';
$l['exp_disable_notify_update'] = 'Wenn diese Option gesetzt ist, werden Sie keine E-Mail Benachrichtigung über zur Verfügung stehende Updates für diese Installation erhalten.';
$l['alreadyupdated'] = 'iHmm ... es sieht so aus, als ob die aktuelle Version <b>&soft-1;</b> ist und nicht <b>&soft-2;</b>. <br />Klicken Sie um die '.APP.' Aufzeichnungen zu aktualisieren.';
$l['edit_acc_detail'] = 'Admin Account Einstellungen bearbeiten';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'Wenn diese Option aktiviert ist wird diese Installation automatisch auf die aktuellste Version aktualisiert, sobald diese verfügbar ist.';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_backup'] = 'Automatische Backups';
$l['exp_auto_backup'] = APP.' wird automatische Backups via Cron durchführen in der Häfigkeit, die Sie einstellen.';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'Wenn das Backup Ratations Limit erreicht ist, wird '.APP.' das älteste Backup für diese Installation löschen und ein neues Backup anlegen. Die Backups werden Ihren Speicherplatz benutzen, daher wählen Sie bitte eine Rotation entsprechend Ihres verfügbaren Speicherplatzes auf dem Server.';
$l['no_backup'] = 'Nicht sichern';
$l['daily'] = 'Einmal am Tag';
$l['weekly'] = 'Einmal in der Woche';
$l['monthly'] = 'Einmal im Monat';
$l['unlimited'] = 'unbegrenzt';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

$l['no_edit'] = 'The EDIT.XML file could not be found! Please report this to the server administrator.';
$l['no_functions'] = 'The EDIT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_field'] = 'The field <b>&soft-1;</b> is required and must be filled out.';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_files'] = 'Select files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone or Backup of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No';
$l['yes'] = 'Yes';
$l['check_all_edit'] = 'Check All';

?>
