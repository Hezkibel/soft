<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = 'Es wurde kein Pfad angegeben';
$l['wrong_path'] = 'Konnte universal.php nicht finden unter dem Pfad den Sie angegeben haben.';
$l['no_softscripts'] = 'Es wurde kein Pfad zum Ort der Software / Anwendung angegeben';
$l['wrong_softscripts'] = 'Der Pfad zur Software / Anwendung Pfad existiert nicht';
$l['no_sn'] = 'Es wurde kein Seiten Name angegeben.';
$l['no_cookie_name'] = 'Es wurde kein Cookie Name angegeben';
$l['no_soft_email'] = 'Es wurde keine E-Mail Adresse angegeben';
$l['wrong_soft_email'] = 'Die angegebene Admin E-Mail Adresse ist ungültig';
$l['wrong_from_email'] = 'Die Absender E-Mail Adresse ist ungültig';
$l['no_license'] = 'Es wurde kein Lizenzschlüssel angegeben';
$l['no_lang'] = 'Es wurde keine Sprache ausgewählt';
$l['wrong_lang'] = 'Die ausgewählte Sprache ist ungültig';
$l['no_theme_folder'] = 'Es wurde kein Thema ausgewählt';
$l['wrong_theme_folder'] = 'Das ausgewählte Thema ist ungültig';
$l['no_timezone'] = 'Es wurde keine Zeitzone ausgewählt';
$l['wrong_timezone'] = 'Die ausgewählte Zeitzone ist ungültig';
$l['no_cron_time'] = 'Es wurde keine Zeit für den Cron Job angegeben';
$l['no_off_message'] = 'Es wurde kein switch off Betreff angegeben';
$l['no_off_subject'] = 'Es wurde keine switch off Nachricht angegeben';
$l['saving_error'] = 'Es sind Fehler beim Speichern der Einstellungen aufgetreten';
$l['no_update'] = 'Es wurde keine Präferenz für Updates angegeben';
$l['invalid_update'] = 'Es wurde ein ungültiger Wert für die Update Präferenz angegeben';
$l['no_protocol'] = 'Es wurde kein Protokoll ausgewählt';
$l['wrong_protocol'] = 'Das ausgewählte Protokoll ist ungültig';
$l['wrong_network_interface'] = 'Die ausgewählte Netzwerkschnittstelle ist ungültig';
$l['pass_strength_error'] = 'Die Passwortstärke muss eine Ganzzahl zwischen 0 und 100 sein.';
$l['err_binary_path'] = 'Es scheint, dass das Binary nicht unter dem angegebenen Pfad existiert. Bitte überprüfen Sie dies und versuchen es erneut.';

//Theme Strings
$l['<title>'] = APP.' - Einstellungscenter';
$l['settings_saved'] = 'Die Einstellungen wurden erfolgreich gespeichert';
$l['pathhead'] = 'Software Pfade';
$l['softpath'] = APP.' Pfad';
$l['softpath_exp'] = 'Dies ist der Pfad an dem alle Dateien außer die verschiedenen Anwendungen liegen';
$l['softscripts'] = 'Pfad der Anwendung';
$l['softscripts_exp'] = 'Dies ist der Pfad, an dem alle Anwendungen / Software liegen';
$l['gen_set'] = 'Allgemeine Einstellungen';
$l['sitename'] = 'Seiten Name';
$l['sitename_exp'] = 'Der Name des Servers oder des Unternehmens das '.APP.' benutzt. Dieser wird auf vielen Seiten des '.APP.' installers zu sehen sein';
$l['cook_name'] = 'Cookie Name';
$l['cook_name_exp'] = 'Der Name des Cookies, das in Browsern gespeichert wird.';
$l['comp_output'] = 'Ausgabe komprimieren';
$l['comp_output_exp'] = 'Dies wird die Ausgabe komprimieren und eine Menge Bandbreite einsparen.';
$l['soft_email'] = 'Admin E-Mail Adresse';
$l['soft_email_exp'] = 'Die E-Mail Adresse an die die CRON Aktivitäten und andere Admin ähnlichen Mails gesendet werden.';
$l['from_email'] = 'Absender E-Mail Adresse';
$l['from_email_exp'] = 'Die Absender E-Mail Adresse.';
$l['license'] = 'Lizenzschlüssel';
$l['license_exp'] = 'Bitte geben Sie den korrekten Lizenzschlüssel von '.APP.' an';
$l['choose_lang'] = 'Sprache auswählen';
$l['choose_lang_exp'] = 'Wählen Sie Ihre bevorzugte Sprache aus';
$l['choose_theme'] = 'Thema wählen';
$l['choose_theme_exp'] = 'Das ausgewählte Thema wird dann überall das Standard Thema sein '.APP;
$l['timezone'] = 'Zeitzone';
$l['update_settings'] = 'Update Einstellungen';
$l['auto_upd_softac'] = 'Auto Update '.APP;
$l['auto_upd_softac_exp'] = 'Wenn diese Option aktiviert ist, wird '.APP.' sich automatisch auf die neuste Version aktualisieren <br />Die <b>Stable</b> Version wird veröffentlicht, wenn die Release Candidate Version komplett getestet wurde. <br />Die <b>Release Candidate</b> Version beinhaltet die neuste Version und die neusten Features.';
$l['never_update'] = 'Update niemals durchführen';
$l['stable'] = 'Stable (empfohlen)';
$l['release_cand'] = 'Release Candidate (Experimentell!)';
$l['auto_upd_soft'] = 'Auto Update der Anwendungen';
$l['auto_upd_soft_exp'] = 'Wenn diese Option aktiviert ist, werden die verschiedenen Anwendungen oder Software automatisch auf die neuste Version aktualisiert';
$l['auto_add_soft'] = 'Auto Hinzufügen neuer Anwendungen';
$l['auto_add_soft_exp'] = 'Wenn diese Option aktiviert ist, werden neue Anwendungen während des Wartungs Cron Jobs hinzugefügt. EMPFOHLEN';
$l['email_upd_soft'] = 'Benachrichtigung über Updates';
$l['email_upd_soft_exp'] = 'Dies wird E-Mails senden, wenn '.APP.' Upgrades verfügbar sind, oder wenn ein Auto Upgrade ausgeführt wird';
$l['email_upd_softs'] = 'Benachrichtigung über Anwendungsupdates';
$l['email_upd_softs_exp'] = 'Dies wird E-Mails senden wenn Skript oder Software Updates verfügbar sind oder wenn ein Auto Upgrade ausgeführt wird';
$l['cron_time'] = 'Cron Job für Updates';
$l['cron_time_exp'] = 'Die Zeit für einen Cron Job, der auf neue Updates prüft. Ändern Sie Einstellung nicht, wenn Sie unsicher sind was Cron Jobs sind';
$l['disable_soft'] = APP.' deaktivieren';
$l['soft_off'] = APP.' deaktivieren';
$l['soft_off_exp'] = 'Diese Option wird '.APP.' deaktivieren und Benutzer werden es nicht mehr nutzen können!';
$l['off_sub'] = 'Betreff deaktivieren';
$l['off_message'] = 'Nachricht deaktivieren';
$l['edit_settings'] = 'Einstellungen bearbeiten';
$l['chmod_files'] = 'CHMOD Dateien';
$l['chmod_files_exp'] = 'Dies ist hilfreich wenn Sie suPHP installiert haben und '.APP.' nicht in der Lage ist es zu finden. Lassen Sie das Feld leer, wenn Sie unsicher sind.';
$l['chmod_dir'] = 'CHMOD Verzeichnisse';
$l['chmod_dir_exp'] = 'Dies ist hilfreich wenn Sie suPHP installiert haben und '.APP.' nicht in der Lage ist es zu finden. Lassen Sie das Feld leer, wenn Sie unsicher sind.';
$l['is_vps'] = 'VPS (Virtual private server)';
$l['is_vps_exp'] = 'Wenn dieser Server eine virtuelle Maschine ist, aktivieren Sie bitte diese Box.';
$l['eu_news_off'] = 'Endbenutzer News deaktivieren';
$l['eu_news_off_exp'] = 'Wenn diese Option aktiviert ist, sind News für Endbenutzer für verschiedene Anwendungen deaktiviert. Es gibt Auskunft über Entwicklungsneuigkeiten verschiedener Anwendungen, sowie Informationen über neue Updates etc.';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = 'Wenn dieses Feld leer ist, wird das '.APP.' Logo angezeigt.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'Dies ist das Binary, welches für den Cron Job und andere Zwecke benutzt wird. Wenn dieses Feld leer gelassen wird, wird <b>/usr/bin/php</b> benutzt.';
$l['off_sync_link'] = 'Sync Link deaktivieren';
$l['off_sync_link_exp'] = 'Diese Option deaktiviert den Sync Link für Endbenutzer.';
$l['off_panel_link'] = 'Control Panel Link deaktivieren';
$l['off_panel_link_exp'] = 'Diese Option deaktiviert den Control Panel Link im Dock für Endbenutzer.';
$l['chmod_conf_file'] = 'CHMOD Konfigurationsdateien';
$l['chmod_conf_file_exp'] = 'Konfigurationsdateien von Anwendungen werden nach diesem Muster Rechte gegeben. Standard ist 0644. (Nicht bearbeiten / leer lassen, wenn Sie sich nicht sicher sind!)';
$l['suphp_detected'] = 'suPHP festgestellt';
$l['no_prefill'] = 'Den Verzeichnis Namen nicht vorausfüllen';
$l['no_prefill_exp'] = 'Den Verzeichnis Namen nicht standardmäßig mit dem Anwendungsnamen vorausfüllen.';
$l['footer_link'] = 'Footer Link';
$l['footer_link_exp'] = 'Wenn Jemand eine Anwendung installiert, wird dieser Link in den Footer dieser Installation eingebettet';
$l['eu_email_off'] = 'Endbenutzer Update E-Mails deaktivieren';
$l['eu_email_off_exp'] = 'Wenn diese Option aktiviert ist, werden keine E-Mails an den Endbenutzer geschickt werden, in denen er über Updates informiert wird.';
$l['random_pass'] = 'Zufallspasswort für Benutzer generieren';
$l['random_pass_exp'] = 'Wenn diese Option aktiviert ist, werden zufällige Admin Passwörter während einer Installation generiert.';
$l['off_demo_link'] = 'Anwedungsdemos deaktivieren';
$l['off_demo_link_exp'] = 'Diese Option deaktiviert die Demos für Endbenutzer.';
$l['off_rating_link'] = 'Bewertungen für Anwendungen deaktivieren';
$l['off_rating_link_exp'] = 'Diese Option deaktiviert die Bewertungen für Endbenutzer.';
$l['off_review_link'] = 'Berichte für Anwendungen deaktivieren';
$l['off_review_link_exp'] = 'Diese Option deaktiviert Berichte über Anwendungen für Endbenutzer.';
$l['off_screenshot_link'] = 'Screenshots der Anwendungen deaktivieren';
$l['off_screenshot_link_exp'] = 'Diese Option deaktiviert Screenshots für Endbenutzer.';
$l['random_dbprefix'] = 'Zufälliges Datenbank Präfix für Benutzer generieren';
$l['random_dbprefix_exp'] = 'Wenn diese Option aktiviert ist, wird ein zufälliges Datenbank Präfix während einer Installation generiert.';
$l['remote_mysql'] = 'Remote Mysql Hostname';
$l['remote_mysql_exp'] = 'Wenn Sie MySQL Remote nutzen möchten, geben Sie hier den Remote Mysql Hostname oder die IP an.';
$l['perl_scripts'] = 'PERL Skripte deaktivieren';
$l['perl_scripts_exp'] = 'Diese Option deaktiviert PERL Scripte für Endbenutzer';
$l['show_top_scripts'] = 'Top Gruppe der Anwedungen anzeigen';
$l['show_top_scripts_exp'] = 'Wenn diese Option aktiviert ist, werden die Top Anwednungen in einer Gruppe angezeigt, um dem Enbenutzer den Zugang zu den Installationsseiten der Anwendungen vereinfachen. Um dieses Feature zu deaktivieren, lassen Sie dieses Feld <b>leer</b>.';
$l['err_change_app_name'] = 'Ein Fehler ist aufgetreten während der Name der Gruppe geändert wurde';
$l['hide_dbprefix'] = 'Das Datenbank Präfix verstecken';
$l['hide_dbprefix_exp'] = 'Wenn diese Option aktiviert ist, wird kein Datenbank Präfix für diese Anwendung verfügbar sein.';
$l['user_mod_dir'] = 'USER MOD DIR benutzen';
$l['user_mod_dir_exp'] = 'Bunztzer können Anwendungen unter http://IP/~benutzer installieren';
$l['off_email_link'] = 'Alle E-Mails zu Endbenutzern deaktivieren';
$l['off_email_link_exp'] = 'Diese Option wird den E-Mail Link für Endbenutzer deaktivieren UND EBENFALLS werden keine anderen E-Mails mehr verschickt, wie während der Installation, entfernen von Installationen etc.';
$l['disable_classes'] = 'PHP Klassen deaktivieren';
$l['disable_classes_exp'] = 'Diese Option wird PHP Klassen für Endbenutzer deaktivieren.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Sichern/Wiederherstellen Funktion für Endbenutzer deaktivieren';
$l['disable_backup_restore_exp'] = 'Diese Option deaktiviert die Funktionen Sichern und Wiederherstellen für Endbenutzer.';
$l['nolabels'] = 'ALLE Anwendungskategorien deaktivieren';
$l['nolabels_exp'] = 'Wenn diese Option aktiviert ist, ewrden dem Endbenutzer keine Kategorien angezeigt. Das heißt z.B. PHP, Jvascripts, PERL, Klassen, all diese Kategorien werden deaktiviert.';
$l['end_user_set'] = 'Endbenutzer Panel Einstellungen';
$l['settings'] = APP.' Éinstellungen';
$l['disable_reseller_panel'] = 'Reseller Panel deaktivieren';
$l['disable_reseller_panel_exp'] = 'Wenn diese Option gesetzt ist, werden Reseller keinen Zugriff auf das Reseller Panel haben.';
$l['choose_protocol'] = 'Protokoll auswählen';
$l['choose_protocol_exp'] = 'Wählen Sie Ihr bervorzugtes Protokoll aus. Es wird für Endbenutzer standardmäßig ausgewählt.';
$l['random_username'] = 'Zufälligen Benutzernamen für Benutzer generieren.';
$l['random_username_exp'] = 'Wenn diese Option gesetzt ist, werden zufällige admin Benutzernamen während einer Installation generiert.';
$l['network_interface'] = 'Netzwerkschnittstelle';
$l['network_interface_exp'] = 'Die öffentliche Netzwerkschnittstelle des Servers. Wenn Sie unsicher sind, lassen Sie das Feld leer.';
$l['default_domain_path'] = 'Standard Domain Pfad';
$l['default_domain_path_exp'] = 'Wenn Sie eine neue Domain hinzufügen können Sie den Standard Domain Pfad setzen.';
$l['empty_username'] = 'Kein Benutzername';
$l['empty_username_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld "Admin Benutzername" leer gelassen.';
$l['empty_pass'] = 'Kein Passwort';
$l['empty_pass_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld "Passwort" leer gelassen.';
$l['show_cscript_in_top'] = 'Benutzerdefiniertes Anwendungs Logo in den TOP Anwendungen zeigen.';
$l['show_cscript_in_top_exp'] = 'Wenn diese Option gesetzt ist, wird Ihr benutzerdefiniertes Logo in den TOP Anwendungen angezeigt.';
$l['pass_strength'] = 'Minimale Passwortstärke setzen';
$l['pass_strength_exp'] = 'Wenn diese Option gesetzt ist, muss die minimale Passwortstärke über dem definierten Wert liegen.';
$l['off_remove_mail'] = 'E-Mails über entfernte Installationen abschalten';
$l['off_remove_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Entfernung einer Installation geschicket werden.';
$l['off_backup_mail'] = 'E-Mails über Sicherungen abschalten';
$l['off_backup_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Sicherung einer Installation geschicket werden.';
$l['off_install_mail'] = 'E-Mails über neue Installationen abschalten';
$l['off_install_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer während der Neuinstalltion einer Anwendung geschicket werden.';
$l['off_edit_mail'] = 'E-Mails übder Änderungen an Installationen abschalten';
$l['off_edit_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer über die Änderung einer Installtion geschicket werden.';
$l['off_clone_mail'] = 'E-Mails über kopierte Installationen abschalten';
$l['off_clone_mail_exp'] = 'Dies schaltet E-Mails ab, die dem Endbenutzer beim Kopieren einer Installation geschickt werden.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Präfix für den admin Benutzernamen';
$l['admin_prefix_exp'] = 'Dies wird im Installations Formular als Präfix vor den admin Benutzernamen gesetzt<br/> Bitte nutzen Sie keinen Bindestrich \'-\', da dieser als Trennung benutzt wird.';
$l['ap_none'] = 'None';
$l['ap_username'] = 'Benutzername';
$l['ap_domain'] = 'Domain';
$l['ap_admin_defined'] = 'Durch Admin definiert';
$l['disable_auto_backup'] = 'Automatische Backups für Endbenutzer abschalten';
$l['disable_auto_backup_exp'] = 'Wenn diese Option gesetzt ist, wir die Option für automatische Backups bei Endbenutzen deaktiviert.';
$l['webuzo_disable_username'] = 'Webuzo Benutzernamen vor-ausfüllen';
$l['webuzo_disable_username_exp'] = 'Wenn diese Option gesetzt ist, wird das Feld für den Webuzo Benutzernamen auf der Login Seite automatisch ausgefüllt.';
$l['disable_clone'] = 'Kopier Funktion für Endbenutzer deaktivieren';
$l['disable_clone_exp'] = 'Dies schaltet die Kopier Option für Endbenutzer ab.';
$l['disable_backup_upgrade'] = 'Backup Option während Upgrades abschalten';
$l['disable_backup_upgrade_exp'] = 'Dies schaltet die Backup Option auf der Seite für Installations Upgrades für Endbenutzer ab.';
$l['ephp_bin'] = 'Endbenutzer PHP binary';
$l['ephp_bin_exp'] = 'Den PHP Binary Pfad definieren, der von den Endbeutzer Webseiten benutzt wird. '.APP.' wird dieses Binary benutzen, um die Voraussetzungen einer Anwendung zu überpfüfen. Ist dies nicht definiert, wird '.APP.' den Standardwert benutzen: ';
$l['no_ampps_download'] = 'AMPPS Download Link deaktivieren';
$l['no_ampps_download_exp'] = 'Dies deaktiviert den AMPPS Download Link im '.APP.' Endbenutzer Panel.';
$l['no_strong_mysql_pass'] = 'Kein starkes Passwort für den MySQL Datenbankbenutzer generieren.';
$l['no_strong_mysql_pass_exp'] = 'Dies generiert ein MySQL Datenbankbenutzer Passwort ohne Sonderzeichen.';

$l['remove_options'] = 'Enduser Remove Options';
$l['remove_dir'] = 'Hide Remove Directory Option';
$l['remove_dir_exp'] = 'If selected, Installation Directory will always be deleted when an installation is removed';
$l['remove_db'] = 'Hide Remove Database and Database User Option';
$l['remove_db_exp'] = 'If selected, Database and Database User will always be deleted when an installation is removed';
$l['remove_datadir'] = 'Hide Remove Data Directory Option';
$l['remove_datadir_exp'] = 'If selected, Data Directory will always be deleted when an installation is removed';
$l['remove_wwwdir'] = 'Hide Remove WWW Directory Option';
$l['remove_wwwdir_exp'] = 'If selected, WWW Directory will always be deleted when an installation is removed';

$l['social_media'] = 'Social Media Settings';
$l['install_tweet_off'] = 'Turn off Tweet for New Installations';
$l['install_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after a new installation';
$l['install_tweet_msg'] = 'Tweet Message for New Installations';
$l['install_tweet_msg_exp'] = 'Custom Tweet Message for New Installations';

$l['upgrade_tweet_off'] = 'Turn off Tweet for Upgrade Installation';
$l['upgrade_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after upgrading an installation';
$l['upgrade_tweet_msg'] = 'Tweet Message for Upgrade Installation';
$l['upgrade_tweet_msg_exp'] = 'Custom tweet message for Upgrade Installation';

$l['clone_tweet_off'] = 'Turn off Tweet for Clone Installation';
$l['clone_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after cloning an installation';
$l['clone_tweet_msg'] = 'Tweet Message for Clone Installation';
$l['clone_tweet_msg_exp'] = 'Custom tweet message for Clone Installation';

$l['no_ftp_encrypted'] = 'Don\'t encrypt the FTP Password';
$l['no_ftp_encrypted_exp'] = 'This will store FTP Passwords of Domain in the database without encryption';
$l['pre_download_all'] = 'Enable Pre Download for all scripts';
$l['pre_download_all_exp'] = 'This will enable pre download for all scripts including new scripts added';

$l['tweet_vars_link'] = 'List of variables for Tweet message';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Use this for script name <br />[[TYPE]] - Use this for script type Eg: PHP, PERL, etc <br />[[softurl]] - Use this for the URL of installation <br />[[cat]] - Use this for the script category Eg: Blog, CMS, etc <br />[[ver]] - Use this for the version of script installed <br />';

$l['session_timeout'] = 'Session Timeout';
$l['session_timeout_exp'] = 'Softaculous Session will remain active for the time specified.<br />Time should be in minutes. Default: 15';


$l['auto_backup_limit'] = 'Auto backup rotation limit';
$l['auto_backup_limit_exp'] = 'Choose the maximum limit for auto backups rotation for the endusers';
$l['auto_backup_unlimited'] = 'Unlimited';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Disable auto upgrade plugins for enduser';
$l['off_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installations will be disabled for endusers.';
$l['off_upgrade_themes'] = 'Disable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'If checked then the option to auto upgrade themes for user\'s installations will be disabled for endusers.';

$l['pfx_settings'] = 'PopularFX Settings';
$l['eu_enable_themes'] = 'Enable Free Themes';
$l['eu_enable_themes_exp'] = 'If checked then endusers will get an option to select and install free themes while installing scripts like WordPress';
$l['eu_themes_premium'] = 'Enable Premium Themes';
$l['eu_themes_premium_exp'] = 'If checked then endusers will get an option to purchase and install Premium themes for scripts like WordPress.<br /> You can find more info <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Here</a>';

$l['backups_expire'] = 'Delete Backup Frequency';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Default color for Header Footer';
$l['default_hf_bg_exp'] = 'This will be the default color for Header, Footer and Left Panel';
$l['default_cat_hover'] = 'Default color for Category hover';
$l['default_cat_hover_exp'] = 'This will be the default color when the user hovers over the Categories in Left panel';
$l['default_hf_text'] = 'Default color for text in Header Footer';
$l['default_hf_text_exp'] = 'This will be the default color for text in Header, Footer and Left Panel';
$l['default_scriptname_text'] = 'Default color for script name text in Left panel';
$l['default_scriptname_text_exp'] = 'This will be the default color for script name text in Left Panel';

$l['max_backups'] = 'Maximum backups per user limit';
$l['max_backups_exp'] = 'This will limit the maximum number of backups a user can take';
$l['max_backups_unlimited'] = 'Unlimited';

$l['default_landing'] = 'Default page for Enduser Panel';
$l['default_landing_exp'] = 'This will be the default page for '.APP.' Enduser Panel';
$l['top_scripts'] = 'Top Scripts (Default)';
$l['all_ins'] = 'All Installations';
$l['outdated_ins'] = 'Outdated Installations';

$l['no_add_domain'] = 'Disable Adding domains by Endusers';
$l['no_add_domain_exp'] = 'This will not allow Endusers to add domains';

$l['force_auto_upgrade'] ='Force Auto Upgrade for users\' installations';
$l['force_auto_upgrade_exp'] ='If selected, the auto upgrade checkbox will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it.';
$l['enable_auto_upgrade'] = 'Enable Auto Upgrade checkbox by default';
$l['enable_auto_upgrade_exp'] = 'If selected, the auto upgrade checkbox will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';

$l['set_backup_dir'] = 'Set Backup Directory';
$l['set_backup_dir_exp'] = 'Choose the path to store enduser(s) installation backups';

$l['off_customize_theme'] = 'Turn off Customize Theme';
$l['off_customize_exp'] = 'If selected, then Enduser(s) will not be able to access Customise Theme option';

$l['enc_db_pass'] = 'Store Database Password in encrypted format';
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format';

$l['time_format'] = 'Default Time format';
$l['time_format_exp'] = 'Choose the default time format. Default : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Don\'t Prefill Database details';
$l['no_prefill_db_exp'] = 'Don\'t prefill the database details by default.';
?>