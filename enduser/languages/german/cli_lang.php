<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "Das automatische Update kann nicht für dieses Control Panel ausgeführt werden.\n";
$l['err_invalid_param'] = "Ungültiger Parameter &soft-1;\nBitte lesen Sie hierzu die Dokumentation für mehr Informationen:\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Bitte geben Sie Parameter an.\n";
$l['err_no_insid'] = "Es wurde keine Installations ID angegeben.\n";
$l['err_no_username'] = "Es wurde kein Benutzername angegeben.\n";
$l['err_no_such_user'] = "Der Benutzer wurde nicht gefunden.\n";
$l['err_dont_provide_username'] = "Der Benutzername ist nicht erforderlich.\n";
$l['err_no_softdir'] = "Softdir für Benutzer &soft-1; nicht gefunden\n";
$l['err_no_installation'] = "Es wurde keine Installation gefunden für : &soft-1;\n";
$l['err_cant_upgrade'] = "Diese Installation ist bereits aktuell oder sie kann nicht automtisch upgegradet werden.\n";
$l['err_backup_fail'] = 'Das Backup war nicht erfolgreich, daher wird der upgrade Prozess abgebrochen. Im Folgenden die Details:';
$l['err_upgrade_restore_failed'] = 'Die Aktualisierung ist fehlgeschlagen UND die Rücksicherung vom vorher angelegten Backup ist fehlgeschlagen. Im Folgenden die Details:';
$l['err_upgrade_restore_success'] = 'Die Aktualisierung ist fehlgeschlagen, aber die Installation konnte erfolgreich aus dem Backup wieder hergestelt werden. Im Folgenden die Details:';
$l['err_upgrade'] = 'Die Aktualisierung der Installation ist fehlgeschlagen. Im Folgenden die Details:';
$l['err_upgrade_req'] = 'Diese Installation erfüllt nicht die Aktualisierungsvoraussetzungen. Daher kann sie nicht automatisch akualisiert werden. Im Folgenden die Details:';
$l['err_could_not_posix'] = 'Konnte nicht auf den Benutzer wechseln, daher wird der Prozess abgebrochen...';
$l['err_cant_upgrade_for_this_server'] = "Das automatische Upgrade kann nicht ausgeführt werden\n weil die externe URL nicht zugänglich ist. Dies könnte daran liegen, dass allow_url_fopen() auf Ihrem Server ausgeschaltet ist oder CURL konnte die URL nicht erreichen.";
$l['err_auto_upgrade_req_fail'] = 'Diese Installation erfüllt nicht die Voraussetzungen für die automatische Aktualisierung. Daher kann sie nicht automatisch aktualisiert werden. Im Folgenden die Details:';
$l['help'] = "Willkommen im WebApps Installer Command-line Interface.
Verfügbare Kommandos: \n\t
--install\t Eine Anwendung installieren.
--upgrade\t Eine installierte Anwendung aktualisieren.
--import\t Eine installierte Anwendung in den WebApps Installer importieren.\n
Für Support kontaktieren Sie bitte: support@softaculous.com
";
$l['err_no_script'] = "Es wurde kein Anwendungsname angegeben.\n";
$l['err_no_url'] = "Bitte geben Sie eine URL an, unter der eine Installation gemacht wurde. Z.B. --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Upps! Keine Anwendung gefunden - &soft-1;\n";
$l['import_success'] = "Erfolgreich importiert!\n";
$l['import_error'] = "Der folgende Fehler ist aufgetreten:\n";
$l['err_no_path'] = "Bitte geben Sie den Pfad an. Z.B. --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "Das Import Tool steht für diese Anwendung nicht zur Verfügung\n";
$l['err_user_not_allowed'] = "Das Import Tool ist nicht für den Endbenutzer verfügbar\n";
$l['err_cant_load_docroots'] = "Konnte den Pfad für zu den Domain(s) nicht laden\n";
$l['ins_available_for'] = " Anwendung(en) für das folgende Verzeichnis verfügbar:\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " Anwendung gefunden unter dem angegebenen Pfad.\n Führen Sie den vorherigen Befehl mit --r aus, um sie zu importieren.\n";
$l['imp_ins_exists'] = "Diese Anwendng wurde bereits für - &soft-1; importiert unter &soft-2;\n";
$l['upgraded_successfully'] = "Das Upgrade war erfolgreich\n";
$l['shellexec_disabled'] = 'shell_exec() ist deaktiviert';
$l['list_scripts'] = "\nDies ist eine Liste der Anwendungen, welche eventuell auf Ihrem Server nicht funktionieren.\nWeil er die minimalen Anforderungen der Anwendungen nicht erfüllt.";
$l['req_pass'] = "Anforderungs Test aller Anwendungen wurde abgeschlossen.";
$l['err_cannot_autobackup'] = "Automatische Backups könne für dieses Control Panel nicht ausgeführt werden.\n";
$l['err_no_auto_backup'] = "Automatische Backups wurden vom Admin deaktiviert.\n";
$l['err_update_record'] = 'Es ist ein Fehler beim Update der Version in den '.APP." Aufzeichnungen aufgetreten.";
$l['suc_update_record'] = "Die ".APP." Aufzeichnung wurde erfolgreich aktualisiert von  &soft-1; nach &soft-2; für &soft-3;\n";
$l['show_real_version'] = "Richtige Version: &soft-1; -- Version in den ".APP." Aufzeichnungen: &soft-2; \n";
$l['no_outdated_ins'] = "Keine veralteten Anwendung(en) gefunden.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 um die veralteten Anwendungen des angegebenen Benutzers anzuzeigen
--user=USER_NAME der Benutzername, dessen Aufzeichnungen Sie aktualisieren wollen
--sid=SCRIPT_ID Anwendungs ID, dessen Aufzeichnungen Sie aktualisieren wollen
--update_records=1 Dies wird die ".APP." Aufzeichnungen aktualisieren\n";
$l['only_au_ins_note'] = "Note : Only installations that can be auto upgraded will be listed here\n";

$l['soft_license'] = APP." Lizenz";
$l['lic_type'] = "Typ";
$l['num_users'] = "Anzahl der Benutzer";
$l['licexpires'] = "Läuft ab";
$l['primary_ip'] = "Lizenz IP";
$l['free'] = "Free";
$l['premium'] = "Premium";
$l['expired'] = "abgelaufen";
$l['never'] = "nie";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
?>
