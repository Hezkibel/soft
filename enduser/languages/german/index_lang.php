<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Benutzer Daten Error';
$l['user_data_error'] = APP.' konnte Ihre Account Informationen nicht laden. Bitte melden Sie dies dem Server Administrator!';

$l['remote_licence_t'] = 'ungültige Lizenz';
$l['remote_licence'] = 'Sie benutzen keine gültige Lizenz. Bitte melden Sie dies dem Server Administrator!';

$l['enterprise_licence_t'] = 'ungültige Lizenz';
$l['enterprise_licence'] = 'Sie benutzen keine gültige Lizenz. Bitte melden Sie dies dem Server Administrator!';

$l['no_license'] = 'Die LIZENZ Datei konnte nicht gefunden werden! Bitte melden Sie dies dem Server Administrator!';

$l['today'] = '<b>Heute</b> um ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Motiv Error';//Title
$l['init_theme_error'] = 'Die Motiv Datei konnte nicht geladen werden - &soft-1;.';

$l['init_theme_func_error_t'] = 'Motiv Funktion Error';//Title
$l['init_theme_func_error'] = 'Die Motiv Funktionen von &soft-1; konnten nicht geladen werden.';

$l['disable_softaculous_t'] = APP.' ist deaktiviert';
$l['disable_softaculous'] = APP.' ist für diese Domain deaktiviert. Bitte kontaktieren Sie den System Administrator.';

$l['load_theme_settings_error'] = 'Die Motiv Einstellungen konnten nicht geladen werden.';


//Error Handle Function
$l['following_errors_occured'] = 'Die folgenden Fehler sind aufgetreten';

//Success Message Function
$l['following_message'] = 'Die folgende Nachricht wurde zurück gegeben';

//Major Error Function
$l['fatal_error'] = 'Fatal Error';
$l['following_fatal_error'] = 'Der folgende Fehler ist aufgetreten';

//Message Function
$l['soft_message'] = APP.' Nachricht';
$l['following_soft_message'] = 'Die folgende Nachricht wurde zurück gegeben';

//Update Softwares
$l['no_soft_found'] = 'Software nicht gefunden.....Update benötigt';
$l['ver_not_match'] = 'Versionen stimmen nicht überein.....Update benötigt';
$l['ver_match'] = 'Aktuelle Version ist neuste Version......Weiter';
$l['del_prev_files'] = 'Lösche alte Dateien......Fertig';
$l['fetch_latest'] = 'Hole neuste Datei......';
$l['error_fetch_latest'] = 'Konnte neuste Datei nicht holen......Weiter';
$l['error_save_latest'] = 'Konnte neuste Datei nicht SPEICHERN......Weiter';
$l['got_latest'] = 'Neuste Datei gespeichert';
$l['unzip_latest'] = 'Entpacke Dateien......';
$l['error_unzip_latest'] = 'Error beim Entpacken......Weiter';
$l['unzipped_latest'] = 'Erfolgeich entpackt';

//Update Softaculous
$l['getting_info'] = 'Frage Informationen an......';
$l['error_getting_latest'] = 'Konnte keine Informationen bekommen......Abbruch';
$l['got_info'] = 'Informationen bekommen';
$l['manual_mode'] = 'Die neue Version von '.APP.' erfordert besondere Aufmerksamkeit......Abbruch';
$l['no_updates'] = 'Aktuelle Version ist neuste Version......Weiter';
$l['fetch_upgrade'] = 'Hole Upgrade......';
$l['error_fetch_upgrade'] = 'Konnte Upgrade Datei nicht holen......Abbruch';
$l['error_save_upgrade'] = 'Konnte Upgrade Datei nicht SPEICHERN......Abbruch';
$l['got_upgrade'] = 'Upgrade Datei gespeichert';
$l['unzip_upgrade'] = 'Entpacke Dateien......';
$l['error_unzip_upgrade'] = 'Error beim Entpacken......Abbruch';
$l['unzipped_upgrade'] = 'Erfolgeich entpackt';
$l['md5_check'] = 'MD5 Überprüfung erfolgreich';
$l['err_md5_check'] = 'MD5 Überprüfung der Dateien war nicht erfolgreich';
$l['err_md5_file'] = ' existiert nicht';

//MySQL Errors
$l['err_selectmy'] = 'Die MySQL Datenbank konnte nicht ausgewählt werden..';
$l['err_myconn'] = 'Die MySQL Verbindung konnte nicht aufgebaut werden.';
$l['err_makequery'] = 'Konnte die anstehende Abfrage nicht machen';
$l['err_mynum'] = 'MySQL Error Nr';
$l['err_myerr'] = 'MySQL Error';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Der Pfad der Domain &soft-1; konnte nicht gefunden werden.';
$l['imp_softpath_wrong'] = 'Der Pfad von &soft-1; ist falsch und existiert nicht.';
$l['imp_ins_exists'] = '&soft-1; ist laut unserer Aufzeichnung bereits unter &soft-2; installiert und wird von uns gewartet!';
$l['imp_no_func'] = 'Die Import Funktion für &soft-1; konnte nicht geladen werden.';
$l['imp_err'] = 'Es traten einige Fehler beim Importieren der Software, die unter &soft-1; installiert ist, auf.';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Willkommen';
$l['logout'] = 'Logout';
$l['page_time'] = 'Seite erstellt in';
$l['times_are'] = 'Alle Zeiten sind GMT';
$l['time_is'] = 'Die aktuelle Uhrzeit ist';
$l['no_script_found'] = 'Keine Anwendung mit diesem Namen gefunden!';

//The Category Language Variables
$l['forums'] = 'Foren';
$l['blogs'] = 'Blogs';
$l['cms'] = 'Portale/CMS';
$l['galleries'] = 'Bilder Gallerien';
$l['wikis'] = 'Wikis';
$l['admanager'] = 'Ad Management';
$l['calendars'] = 'Kalender';
$l['games'] = 'Spiele';
$l['mail'] = 'Mail'	;
$l['polls'] = 'Abstimmungen und Umfragen';
$l['projectman'] = 'Projekt Management';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Gästebücher';
$l['customersupport'] = 'Kunden Support';
$l['others'] = 'Andere';
$l['music'] = 'Musik';
$l['video'] = 'Video';
$l['files'] = 'Datei Management';
$l['go_cpanel'] = 'zurück zum Control Panel';
$l['go_home'] = APP.' Home';
$l['go_demos'] = 'Anwendungsdemos';
$l['go_ratings'] = 'Anwendungsbewertungen';
$l['go_settings'] = 'Einstellungen bearbeiten';
$l['go_email_settings'] = 'E-Mail Einstellungen';
$l['go_installations'] = 'Alle Installationen';
$l['go_support'] = 'Hilfe und Support';
$l['go_sync'] = 'Mit anderen Auto Installern synchronisieren';
$l['go_backups'] = 'Sichern und Wiederherstellen';
$l['go_tasklist'] = 'Aufgaben Liste';
$l['go_apps_installations'] = 'Alle installierten Anwendungen';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['search'] = 'Suchen';
$l['back_to_top'] = 'nach oben';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';

// Categories
$l['cat_php_forums'] = 'Foren';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portale/CMS';
$l['cat_php_galleries'] = 'Bilder Gallerien';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Ad Management';
$l['cat_php_calendars'] = 'Kalender';
$l['cat_php_games'] = 'Spiele';
$l['cat_php_mail'] = 'E-Mail';
$l['cat_php_polls'] = 'Abstimmungen und Umfragen';
$l['cat_php_projectman'] = 'Projekt Management';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Gästebücher';
$l['cat_php_customersupport'] = 'Kunden Support';
$l['cat_php_others'] = 'Andere';
$l['cat_php_music'] = 'Musik';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Social Networking';
$l['cat_php_microblogs'] = 'Micro Blogs';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Bildung';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'Datei Management';
$l['cat_js_libraries'] = 'Libraries';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Foren';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Projekt Management';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Datenbanken';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Sicherheit';
$l['cat_apps_statistics'] = 'Statistiken';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Module';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Kryptografie';
$l['classes_algorithms'] = 'Algorithmen';
$l['classes_artificialintelligence'] = 'Künstliche Intelligenz';
$l['classes_email'] = 'E-Mail';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'Benutzer Verwaltung';
$l['classes_utilitiesandtools'] = 'Werkzeuge';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Sicherheit';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code Generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologie';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologie';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Konfiguration';
$l['classes_contentmanagement'] = 'Content Management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datentypen';
$l['classes_databases'] = 'Datenbanken';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design Patterns';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'Dateien und Ordner';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Foren';
$l['classes_games'] = 'Spiele';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Sprache';
$l['classes_projectmanagement'] = 'Project Management';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Domains verwalten';
$l['webuzo_license_exp'] = 'Ihre Lizenz ist nicht aktiv oder sie ist abgelaufen. Wenn Ihre Lizenz abgelaufen ist, erneuern Sie sie bitte um Webuzo weiterhin nutzen zu können.';
$l['webuzo_license_exp_t'] = 'Lizenz nicht aktiv';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Domains verwalten';
$l['ampps_license_exp'] = 'Ihre Lizenz ist nicht aktiv oder sie ist abgelaufen. Wenn Ihre Lizenz abgelaufen ist, erneuern Sie sie bitte um AMPPS weiterhin nutzen zu können.';
$l['ampps_license_exp_t'] = 'Lizenz nicht aktiv';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Aktiviert';
$l['notify_disable'] = 'Deaktiviert';

$l['autoupgrade_enable'] = 'Aktiviert';
$l['autoupgrade_disable'] = 'Deaktiviert';

// Auto backup strings
$l['auto_backup_enable'] = 'Aktiviert';
$l['auto_backup_disable'] = 'Deaktiviert';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Neue Installation von $scriptname';
$l['mail_install_php'] = 'Eine neue Installation von $scriptname $version wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:
Pfad: $path
URL: $url
Admin URL : $admin_url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $admin_username>Admin Benutzername: $admin_username</if>
<if $admin_pass>Admin Passwort: $admin_pass</if>
<if $admin_email>Admin E-Mail: $admin_email</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automatische Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Klone Installation von  $scriptname';
$l['mail_clone'] = 'Ihre Installation von $scriptname $version wurde erfolgreich geklont.

Ihre original Installationsdetails:
Original Pfad: $old_path
Original URL: $old_url

Die Details der geklonten Installation:
Pfad: $path
URL: $url
Admin URL: $admin_url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Neue Installation von $scriptname';
$l['mail_install_js'] = 'Eine neue Installation von $scriptname $version wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:
Pfad: $path
URL: $url
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $auto_backup>Automatische Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation: $auto_backup_rotation</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Neue Installation von $scriptname';
$l['mail_install_perl'] = 'Eine neue Installation von $scriptname $version wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:
Pfad: $path
URL: $url
Admin URL : $admin_url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $wwwdir>Web Verzeichnis: $wwwdir</if>
<if $admin_username>Admin Benutzername: $admin_username</if>
<if $admin_pass>Admin Passwort: $admin_pass</if>
<if $admin_email>Admin E-Mail: $admin_email</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $auto_backup>Automatische Backups: $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation: $auto_backup_rotation</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Neue Installation von $scriptname';
$l['mail_install_java'] = 'Die Installation von $scriptname $version ist beendet. Hier können Sie die Details Ihrer Installation sehen:
Pfad: $path
URL: $url
Admin URL: $admin_url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $wwwdir>Web Verzeichnis: $wwwdir</if>
<if $admin_username>Admin Benutzername: $admin_username</if>
<if $admin_pass>Admin Passwort: $admin_pass</if>
<if $admin_email>Admin E-mail: $admin_email</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Hostname: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $auto_backup>Automatische Backups: $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation: $auto_backup_rotation</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Anwendungsupadates verfügbar';
$l['mail_update'] = 'Diese E-Mail betrifft die veraltete Installation von bestimmten PHP Skripten, die Sie installiert haben. Aus Sicherheitsgründen sollten Sie diese veralteten Installationen so bald wie möglich aktualisieren.
Die folgenden Updates sind verfügbar:

$installation

Um diese Installationen zu aktualisieren, gehen Sie zum Control Panel -> '.APP.' -> Installationen.
Dort können Sie die Installationen aktualisieren.

Vom System Administrator $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Entfernte Installationen von $scriptname';
$l['mail_remove'] = 'Eine Installation von $scriptname wurde entfernt. Dies waren die Details zu der Installation:
Pfad: $path
<if $url>URL : $url</if>
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $wwwdir>Web Verzeichnis: $wwwdir</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
Installationszeit: $time
Entfernungszeit: $rem_time

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Install Java Template
$l['mail_install_java_sub'] = 'Neue Installation von $scriptname';
$l['mail_install_java'] = ' Eine neue Installation von $scriptname $version wurde abgeschlossen. Die Details der Installation sind unten aufgeführt:
Pfad : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $wwwdir>Web Verzeichnis: $wwwdir</if>
<if $admin_username>Admin Benutzername: $admin_username</if>
<if $admin_pass>Admin Passwort: $admin_pass</if>
<if $admin_email>Admin E-Mail: $admin_email</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Restore Template
$l['mail_restore_sub'] = 'Rücksicherung von $scriptname';
$l['mail_restore'] = 'Die Rücksicherung von $scriptname wurde erfolgreich beendet.
Die Details sind wie folgt:
Installationspfad: $path
Installations URL: $url
';
$l['mail_restore_fail_sub'] = 'Fehler: Rücksicherung von $scriptname';
$l['mail_restore_fail'] = 'Die Rücksicherung von $scriptname konnte nicht erfolgreich beendet werden.
Die Details sind wie folgt:
Installationspfad: $path
Installations URL: $url

Der folgende Error trat auf:
$error

Bitte versuchen Sie das Backup zu einem späteren Zeitpunkt erneut zurück zu sichern.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';
$l['email_off_notice'] = '<b>HINWEIS: Benachrichtigungs E-Mails sind deaktiviert, daher werden Sie keine E-Mails erhalten.</b>';

// Cron Template Variable
$l['mail_cron_sub'] = 'Anwendungsupdates verfügbar';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Die folgenden Updates sind verfügbar:

$installation

Um diese Installationen zu aktualisieren, gehen Sie zum Control Panel -> '.APP.' -> Installationen.
Dort können Sie die Installationen aktualisieren.


$changelog

Von '.APP.' Cron Jobs $serverip

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Geänderte Installations Details von $scriptname';
$l['mail_editdetail'] = 'Die Installations Details von $scriptname wurden geändert. Dies sind die geänderten Details der Installation:
Pfad: $path
URL: $url
<if $datadirectory>Daten Verzeichnis: $datadirectory</if>
<if $wwwdir>Web Verzeichnis: $wwwdir</if>
<if $wwwurl>Web URL: $wwwurl</if>
<if $dbname>MySQL Datenbank: $dbname</if>
<if $dbuser>MySQL DB Benutzer: $dbuser</if>
<if $dbhost>MySQL DB Host: $dbhost</if>
<if $dbpass>MySQL DB Passwort: $dbpass</if>
<if $cron>Cron Job: $cron</if>
<if $disable_notify_update>Update Benachrichtigung: $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade: $eu_auto_upgrade</if>
<if $auto_backup>Automatische Backups: $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation: $auto_backup_rotation</if>
Installationszeit: $time
Änderungszeit: $edit_time

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Sicherung Ihrer $scriptname Installation';
$l['mail_backup'] = 'Die Sicherung Ihrer Installation $scriptname wurde erfolgreich beendet.
Die Details sind wie folgt:
Installations Pfad: $path
Installations URL: $url
Pfad der Sicherung: $backup_file
<if $backup_note>Backup Hinweis: $backup_note</if>

Sie können die Sicherung im Bereich Sichern herunterladen: '.APP.'.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

$l['mail_backup_fail_sub'] = 'Fehler: Sicherung Ihrer $scriptname Installation';
$l['mail_backup_fail'] = 'Die Sicherung Ihrer $scriptname Installation konnte nicht erfolgreich beendet werden.
Die Details sind wie folgt:
Installations Pfad: $path
Installations URL: $url
Pfad der Sicherung: $backup_file

Der folgende Fehler trat auf:
$error

Bitte starten Sie die Sicherung zu einem späteren Zeitpunkt erneut.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'Neue Installation von $classesname';
$l['mail_install_classes'] = 'Eine neue Installation von $classesname $version wurde erfolgreich beendet. Die Details der Installation sind unten aufgeführt:
Pfad: $path
<if $time>Installationszeit: $time</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname Installation des Benutzers $user wurde erfolgreich aktualisiert';
$l['mail_adminupgrade_success_admin'] = '$scriptname Installation des Benutzers $user wurde erfolgreich auf die neuste Version aktualisiert.
Im Folgenden die Details:
Installations URL : $url
Neuste Version : $version
Alte Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Der Aktualisierungsprozess für $scriptname ist fehlgeschlagen und wurde aus dem Backup wieder hergestellt.';
$l['mail_adminupgrade_fail_admin'] = 'Der Aktualisierungsprozess für $scriptname für den Benutzer $user ist fehlgeschlagen.
'.APP.' hat ein Backups vor dem Upgrade angelegt, welches erfolgreich wieder hergestellt wurde.
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
Die Details zum Fehler sind wie folgt:
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname wurde erfolgreich vom System Admin aktualisiert';
$l['mail_adminupgrade_success_user'] = 'Ihre $scriptname Installation wurde vom System Admin erfolgreich auf die neuste Version aktualisiert.
Im Folgenden die Details:
Installations URL : $url
Neuste Version : $version
Alte Version : $oldversion

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Die Aktualisierung Ihrer $scriptname Installation durch den System Admin ist fehlgeschlagen';
$l['mail_adminupgrade_fail_user'] = 'Der System Admin hat versucht Ihre $scriptname Installation zu aktualisieren, aber der Aktualisierungsprozess ist fehlgeschlagen.
Vor der Aktualisierung Ihrer Installation wurde ein Backup angelegt, aus welchem die Installation erfolgreich wieder hergestellt wurde.
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
Die Details zum Fehler sind wie folgt:
Error : $upgrade_error

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Der Aktualisierungsprozess der $scriptname Installation des Benutzers $user ist fehlgeschlagen';
$l['mail_adminupgrade_restore_fail_admin'] = 'Der Aktualisierungsprozess der $scriptname Installation des Benutzers $user ist fehlgeschlagen.
Vor der Aktualisierung wurde ein Backup angelegt, aber die Rücksicherung ist ebenfalls fehlgeschlagen!

Dies erfordert eine manuelle Rücksicherung. Eine Anleitung für eine manuelle Rücksicherung finden Sie hier:
http://www.softaculous.com/docs/Manual_Restore


Im Folgenden die Details der Installation und des Backups, welche Sie eventuell benötigen um Ihre $scriptname Installation zurück zu sichern:
PFAD_ZUR_BACKUP_DATEI: $backup_path
PFAD_DER_INSTALLATION: $softpath
<if $dbname>DATENBANK_NAME: $dbname</if>
<if $dbuser>DATENBANK_BENUTZER: $dbuser</if>
<if $dbpass>DATENBANK_PASSWORT: $dbpass</if>
<if $dbhost>DATENBANK_HOST: $dbhost</if>

Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
<if $upgrade_error>
Die Details zum Fehler bei der Aktualisierung:
Error : $upgrade_error
</if>
<if $error>
Die Details zum Fehler bei der Rücksicherung:
Error : $error
</if>

Das '.APP.' Team steht für Hilfe ebenfalls zur Verfügung. Sie können das '.APP.' Team kontaktieren wenn Sie ein Problem feststellen.
';
// You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Die Aktualisierung Ihrer $scriptname Installation durch den System Admin ist fehlgeschlagen';
$l['mail_adminupgrade_restore_fail_user'] = 'Der System Admin hat versucht Ihre $scriptname Installation zu aktualisieren, aber der Aktualisierungsprozess ist fehlgeschlagen.
Vor der Aktualisierung Ihrer Installation wurde ein Backup angelegt, aber die Rücksicherung ist ebenfalls fehlgeschlagen!

Dies erfordert eine manuelle Rücksicherung. Eine Anleitung für eine manuelle Rücksicherung finden Sie hier
http://www.softaculous.com/docs/Manual_Restore

Im Folgenden die Details der Installation und des Backups, welche Sie eventuell benötigen um Ihre $scriptname Installation zurück zu sichern:
PFAD_ZUR_BACKUP_DATEI: $backup_path
PFAD_DER_INSTALLATION: $softpath
<if $dbname>DATENBANK_NAME: $dbname</if>
<if $dbuser>DATENBANK_BENUTZER: $dbuser</if>
<if $dbpass>DATENBANK_PASSWORT: $dbpass</if>
<if $dbhost>DATENBANK_HOST: $dbhost</if>

Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
<if $upgrade_error>
Die Details zum Fehler bei der Aktualisierung:
Error : $upgrade_error
</if>
<if $error>
Die Details zum Fehler bei der Rücksicherung:
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname Installation erfolgreich aktualisiert';
$l['mail_userupgrade_success_user'] = 'Ihre $scriptname Installation wurde erfolgreich auf die neuste Version aktualisiert.
Im Folgenden die Details:
Installations URL : $url
Neuste Version : $version
Alte Version : $oldversion

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Die Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen';
$l['mail_userupgrade_fail_user'] = 'Die Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen.
Im Folgenden die Details:
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
Error : $upgrade_error

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Die Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen';
$l['mail_userupgrade_restore_fail_user'] = 'Die Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen

Vor der Aktualisierung wurde ein Backup angelegt, aber die Rücksicherung ist ebenfalls fehlgeschlagen!

Dies erfordert eine manuelle Rücksicherung. Eine Anleitung für eine manuelle Rücksicherung finden Sie hier
http://www.softaculous.com/docs/Manual_Restore

Im Folgenden die Details der Installation:
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
<if $upgrade_error>
Die Details zum Fehler bei der Aktualisierung:
Error : $upgrade_error
</if>
<if $error>
Die Details zum Fehler bei der Rücksicherung:
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation erfolgreich automatisch aktualisiert';
$l['mail_autoupgrade_success_user'] = 'Ihre $scriptname Installation wurde erfolgreich automatisch auf die neuste Version aktualisiert.
Im Folgenden die Details:
Installations URL : $url
Neuste Version : $version
Alte Version : $oldversion

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'automatische Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen';
$l['mail_autoupgrade_fail_user'] = 'Die automatische Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen.
The details are as follows :
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
Error : $upgrade_error

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Automatische Aktualisierung Ihrer $scriptname Installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'Die automatische Aktualisierung Ihrer $scriptname Installation ist fehlgeschlagen.
Vor der Aktualisierung wurde ein Backup angelegt, aber die Rücksicherung ist ebenfalls fehlgeschlagen!

Dies erfordert eine manuelle Rücksicherung. Eine Anleitung für eine manuelle Rücksicherung finden Sie hier:
http://www.softaculous.com/docs/Manual_Restore


Im Folgenden die Details:
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
<if $upgrade_error>
Die Details zum Fehler bei der Aktualisierung:
Error : $upgrade_error
</if>
<if $error>
Die Details zum Fehler bei der Rücksicherung:
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Aktualisierung Checks fehlgeschlagen';
$l['mail_autoupgrade_precheck_fail'] = 'Die automatische Aktualisierung für die folgende Installation kann nicht beendet werden, da es nicht die Voraussetzungen der Aktualisierung erfüllt:
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Das Backup vor der automatischen Aktualisierung von $scriptname ist fehlgeschlagen';
$l['mail_autoupgrade_backup_fail'] = 'Das Backup der $scriptname Installation ist fehlgeschlagen. Daher wurde der automatische Aktualisierungsprozess abgebrochen.
Im Folgenden die Details:
Installations URL : $url
Aktuelle Version : $oldversion
Neuste Version : $version
Error : $error

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

$l['err_openconfig'] = 'Konnte die Konfigurationsdatei nicht öffnen';
$l['err_writeconfig'] = 'Konnte nicht in die Konfigurationsdatei schreiben';

$l['classes_con_failed'] = 'Error : Konnte keine Verbindung zum Server aufbauen.';
$l['cl_ratings'] = 'Bewertungen';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Lizenz';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Dateien anzeigen';
$l['cl_install_but'] = 'Installieren';
$l['expand_view'] = 'Hier für vollständige Ansicht klicken';
$l['collapse_view'] = 'Hier für reduzierte Ansicht klicken';
$l['email_off_notice'] = '<b>HINWEIS: Benachrichtigungs E-Mails sind deaktiviert, daher werden Sie keine E-Mails erhalten.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Willkommen bei '.APP;
$l['mail_add_user'] = 'Sie können sich nun in '.APP.' einloggen.
Im Folgenden die Details:
Benutzer 					: $username
API Key 				: $api_key
API Passwort 			: $api_pass
Anzahl erlaubter Benutzer	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Erforderliche &soft-1; Version &soft-2; &soft-3; UND gefundene Version ist: ';
$l['req_ext_nf'] = 'Erforderliche &soft-1; Erweiterung nicht gefunden:';
$l['req_func_nf'] = 'Erforderliche &soft-1; Funktion nicht gefunden';
$l['req_ext_ver'] = 'Erforderliche &soft-1; &soft-2; Erweiterung Verison &soft-3; &soft-4; ABER gefunden &soft-5;';
$l['gt'] = 'größer als';
$l['lt'] = 'kleiner als';
$l['ge'] = 'größer gleich';
$l['le'] = 'kleiner gleich';
$l['eq'] = 'gleich';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatisches Backup Ihrer $scriptname Installation';
$l['mail_auto_backup'] = 'Das automatische Backup Ihrer $scriptname Installation wurde erfolgreich beendet.
Im Folgenden die Details:
Installations Pfad: $path
Installations URL: $url
Backup Pfad: $backup_file

Sie können das Backup im Backup Bereich in '.APP.' herunter laden.

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

$l['mail_auto_backup_fail_sub'] = 'Fehlgeschlagen: Automatisches Backup Ihrer $scriptname Installation';
$l['mail_auto_backup_fail'] = 'Das automatische Backup Ihrer $scriptname Installation wurde nicht erfolgreich beendet.
Im Folgenden die Details:
Installations Pfad: $path
Installations URL: $url
Backup Pfad: $backup_file

Der folgende Fahler ist aufgetreten:
$error

Wenn Sie diese E-Mails abbestellen wollen, loggen Sie sich in Ihrem Control Panel ein -> '.APP.' -> E-Mail Einstellungen
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Liste der Anwendungen, deren Anforderungen nicht erfüllt werden';
$l['mail_script_requirement'] = 'Die folgenden Anwendungen erfüllen nicht die minimalen Anforderungen des Servers und funktionieren daher eventuell nicht.
Im Folgenden die Details:

$failed_req

Hinweis: Wenn Sie in der Produktivumgebung die PHP Version ändern (z.B. unter Benutzung von CageFS, hive, .htaccess etc.), können Sie die obigen Fehlermeldungen betreffend der PHP Version ignorieren.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Bitte schließen Sie alle '.APP.' Seiten und loggen sich aus dem Control Panel aus, indem Sie den Log Out Button benutzen.
Danach können Sie sich erneut einloggen und '.APP.' weiter benutzen.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Januar';
$l['February'] = 'Februar';
$l['March'] = 'März';
$l['April'] = 'April';
$l['May'] = 'Mai';
$l['June'] = 'Juni';
$l['July'] = 'Juli';
$l['August'] = 'August';
$l['September'] = 'September';
$l['October'] = 'Oktober';
$l['November'] = 'November';
$l['December'] = 'Dezember';

?>
