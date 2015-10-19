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

$l['no_path'] = 'Geen (geldig) path opgegeven';//No Path was posted
$l['wrong_path'] = 'Kan het bestand universal.php niet vinden via het door u opgegeven path';//Could not locate universal.php at the path you specified
$l['no_softscripts'] = 'U heeft geen geldig path voor de locatie van de scripts is opgegeven';//No path of the Script/Softwares location was given
$l['wrong_softscripts'] = 'Het script path is onjuist. Er zijn geen scripts gevonden';//The Script/Softwares path is wrong as no software was found
$l['no_sn'] = 'U heeft geen site naam opgegeven.';//No Site Name was specified.
$l['no_cookie_name'] = 'U heeft geen cookie naam opgegeven';//No Cookie Name was specified
$l['no_soft_email'] = 'U heeft geen e-mail adres opgegeven';//No Email Address was provided
$l['wrong_soft_email'] = 'Het e-mail adres dat u heeft opgegeven is ongeldig';//The Email Address you submitted is Invalid
$l['wrong_from_email'] = 'Het FROM e-mail adres dat u heeft opgegeven is ongeldig';
$l['no_license'] = 'U heeft geen licensie key opgegeven';//No license key was submitted
$l['no_lang'] = 'U heeft geen taalkeuze geselecteerd';//No language was selected
$l['wrong_lang'] = 'De geselecteerde taal is ongeldig';//The selected language is invalid
$l['no_theme_folder'] = 'Geen thema gekozen';//No theme was selected
$l['wrong_theme_folder'] = 'U heeft een ongeldig thema geselecteerd';//The selected theme is invalid
$l['no_timezone'] = 'U heeft geen tijdzone geselecteerd';//No Timezone was selected
$l['wrong_timezone'] = 'U heeft een ongeldige tijdzone opgegeven';//The selected timezone is invalid
$l['no_cron_time'] = 'U eeft een ongeldige cron job tijd opgegeven';//No Cron Job Time was specified
$l['no_off_message'] = 'U heeft geen -onderwerp '.APP.' niet actief- opgegeven';//No Switch Off Subject was specified
$l['no_off_subject'] = 'U heeft geen - bericht '.APP.' niet actief - opgegeven';//No Switch Off Message was specified
$l['saving_error'] = 'Er zijn fouten geconstateerd tijdens het opslaan van de instellingen';//There were some errors while saving the settings
$l['no_update'] = 'U heeft een ongeldige update instelling opgegeven';
$l['invalid_update'] = 'U heeft een ongeldige waarde opgegeven';
$l['no_protocol'] = 'U heeft geen geldig protocol opgegeven';
$l['wrong_protocol'] = 'Het geselecteerde protocol is ongeldig';
$l['wrong_network_interface'] = 'U heeft geen geldige interface opgegeven';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100.';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Instellingen';//Softaculous - Settings Center
$l['settings_saved'] = 'De instellingen zijn succesvol opgeslagen';//The settings were saved successfully
$l['pathhead'] = 'Script paths';//Software Paths
$l['softpath'] = ''.APP.' path';//'.APP.' Path
$l['softpath_exp'] = 'Via deze optie kunt u het path naar de folder waar alle bestanden, met uitzondering van de scripts, worden opgeslagen instellen.';//It is the path where all files excluding the various scripts are located
$l['softscripts'] = 'Script path';//Scripts Path
$l['softscripts_exp'] = 'Via deze optie kunt u het path naar de folder waar de scripts worden opgeslagen instellen.';//It is the path where all the softwares/scripts are located
$l['gen_set'] = 'Algemene instellingen';//General Settings
$l['sitename'] = 'Website naam';//Site Name
$l['sitename_exp'] = 'Via deze optie kunt u de servernaam of bedrijfsnaam dat door '.APP.' gebruikt wordt instellen. Deze naam zal verschijnen op een aantal pagina\'s van de '.APP.' installer.';//The name of the Server/Company using '.APP.'. It will appear in many pages of Softaculous Installer
$l['cook_name'] = 'Cookie naam';//Cookie Name
$l['cook_name_exp'] = 'Via deze optie kunt u de naam van het cookie dat wordt opgeslagen via de browser instellen.';//The name of the Cookie that will be stored on browsers.
$l['comp_output'] = 'Output comprimeren';//Compress Output
$l['comp_output_exp'] = 'Via deze optie kunt u de output comprimeren. Het comprimeren van de output verminderd het gebruik van dataverkeer.';//This will compress output and it saves alot of bandwidth.
$l['soft_email'] = 'Admin e-mail adres';//Email Address
$l['soft_email_exp'] = 'Via deze optie kunt u het e-mail adres dat gebruikt wordt voor systeem berichten instellen.';
$l['from_email'] = 'Afzender e-mail adres';
$l['from_email_exp'] = 'Via deze optie kunt u het e-mail adres dat wordt gebruikt voor de FROM headers instellen.';
$l['license'] = 'Licentie key';//license Key
$l['license_exp'] = 'Voer de juiste '.APP.' licensie code in';//Please put the correct license Key issued by '.APP.'
$l['choose_lang'] = 'Taalkeuze';//Choose Language
$l['choose_lang_exp'] = 'Via deze optie kunt u de gewenste taal instellen.';//Choose your preferred language
$l['choose_theme'] = 'Thema';//Choose Theme
$l['choose_theme_exp'] = 'Via deze optie kunt u het theme dat door '.APP.' gebruikt wordt instellen.';//The selected theme will be the Default Theme throughout '.APP.'
$l['timezone'] = 'Tijdzone';//Timezone
$l['update_settings'] = 'Update instellingen';//Update Settings
$l['auto_upd_softac'] = 'Update '.APP.' automatisch';//Auto Update '.APP.'
$l['auto_upd_softac_exp'] = 'Wanneer u deze optie activeert zal '.APP.' automatisch geupdate worden naar de laatste versie. <br />De <b>laatste stabiele versie</b> wordt pas vrijgegeven nadat deze uitvoerig is getest<br />De <b>release candidate versie</b> bevat de ook de laatst toegevoegde onderdelen.';
$l['never_update'] = 'Update nooit';
$l['stable'] = 'Stabiele versie (aanbevolen)';
$l['release_cand'] = 'Release candidate (niet uitvoerig getest!)';
$l['auto_upd_soft'] = 'Update scripts automatisch';//Auto Update Softwares
$l['auto_upd_soft_exp'] = 'Wanneer u deze optie activeert zullen de scripts die beschikbaar zijn in '.APP.' automatisch worden geupdate naar de laatste versie.';//If enabled various Scripts/Softwares will be UPDATED to their latest Versions
$l['auto_add_soft'] = 'Nieuwe scripts automatisch toevoegen';//Auto Add New Softwares
$l['auto_add_soft_exp'] = 'Wanneer u deze optie activeert zullen neiuwe scripts die beschikbaar zijn in '.APP.' automatisch worden toegevoegd (aanbevolen).';//If enabled new Scripts/Softwares will be added during the CRON Job. RECOMMENDED
$l['email_upd_soft'] = ' '.APP.' update melding';//Notify Updates
$l['email_upd_soft_exp'] = 'Wanneer u deze optie activeert ontvangt u een e-mail wanneer '.APP.' updates beschikbaar zijn of wanneer de auto update functie hiervoor is uitgevoerd.';//Will send emails when '.APP.' Upgrades are available or Auto Upgrade is done
$l['email_upd_softs'] = 'Script update melding';//Notify Software Updates
$l['email_upd_softs_exp'] = 'Wanneer u deze optie activeert ontvangt u een e-mail wanneer scripts updates voor '.APP.' beschikbaar zijn of wanneer de auto update functie hiervoor is uitgevoerd.';//Will send emails when Scripts/Software Updates are available or Auto Update of Scripts/Software is done
$l['cron_time'] = 'Cron job instellingen';//Updates Cron Job
$l['cron_time_exp'] = 'De cron job instellingen om te controleren of er updates beschikbaar zijn. Wijzig deze instelling niet als u niet op de hoogte bent met het gebruik van cron jobs.';//The Cron Job time to check for Available Updates. Dont change if you are unaware of CRON Jobs
$l['disable_soft'] = 'Deacitveer '.APP.'';//Disable '.APP.'
$l['soft_off'] = 'Zet '.APP.' op niet actief';//Turn '.APP.' Off
$l['soft_off_exp'] = 'Via deze optie kunt u '.APP.' op niet actief zetten en kan de installer niet meer gebruikt worden!';//This will disable '.APP.' and users will not be able to use it!
$l['off_sub'] = 'Onderwerp '.APP.' niet actief';//Switch Off Subject
$l['off_message'] = 'Bericht '.APP.' niet actief';//Switch Off Message
$l['edit_settings'] = 'Instellingen bijwerken';//Edit Settings
$l['chmod_files'] = 'CHMOD bestanden';
$l['chmod_files_exp'] = 'Gebruik deze optie wanneer suPHP actief is en niet door '.APP.' gedetecteerd wordt. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['chmod_dir'] = 'CHMOD folders';
$l['chmod_dir_exp'] = 'Gebruik deze optie wanneer suPHP actief is en niet door '.APP.' gedetecteerd wordt. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['is_vps'] = 'VPS';
$l['is_vps_exp'] = 'Via deze optie kunt u aangeven dat de server die u gebruikt een VPS is.';
$l['eu_news_off'] = ''.APP.' nieuws uitschakelen voor gebruikers';
$l['eu_news_off_exp'] = 'Via deze optie kunt u '.APP.' nieuws over updates en nieuwe scripts uitschakelen voor gebuikers.';
$l['logo_url'] = 'URL logo';
$l['logo_url_exp'] = 'Via deze optie kunt u de URL naar het logo dat gebruikt wordt voor '.APP.' instellen. Wanneer u dit veld leeg laat zal het standaard '.APP.'  logo getoond worden.';
$l['php_bin'] = 'PHP binary';
$l['php_bin_exp'] = 'Via deze optie kunt u  binary path dat wordt gebruikt voor onder andere de cron job instellen. Wanneer u dit veld leeg laat zal <b>/usr/bin/php</b> gebruikt worden.';
$l['end_user_set'] = 'Gebruiker instellingen';
$l['off_sync_link'] = 'Sync link uitschakelen';
$l['off_sync_link_exp'] = 'Via deze optie kunt u de synchronize link voor gebruikers uitschakelen.';
$l['off_panel_link'] = 'Control panel link uitschekelen';
$l['off_panel_link_exp'] = 'Via deze optie kunt u de control panel pink in het dock voor gebruikers uitschakelen.';
$l['chmod_conf_file'] = 'CHMOD configuratie bestanden';
$l['chmod_conf_file_exp'] = 'Via deze optie kunt u de permissies voor het configuratie bestand instellen. De standaard waarde is 0644. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['suphp_detected'] = 'suPHP is gedetecteerd';
$l['no_prefill'] = 'Folder prefix uitschakelen';
$l['no_prefill_exp'] = 'Via deze optie kunt u de standaard folder prefix (scriptnaam) die wordt toegevoegd tijdens de installatie van een script uitschakelen.';
$l['footer_link'] = 'URL footer';
$l['footer_link_exp'] = 'Via deze optie kunt u tekst toevoegen aan de footer van de pagina die wordt getoond wanneer een gebruiker een script installeert.';
$l['eu_email_off'] = 'Update e-mails voor gebruikers uitschakelen';
$l['eu_email_off_exp'] = 'Via deze optie kunt de automatische verzending van e-mails over de beschikbaarheid van een update voor een geinstalleerd script uitschakelen.';
$l['random_pass'] = 'Random wachtwoord tijdens installatie';
$l['random_pass_exp'] = 'Via deze optie kunt u het aanmaken van een random wachtwoord tijdens de installatie van een script inschakelen.';
$l['off_demo_link'] = 'Script demo\'s uitschakelen';
$l['off_demo_link_exp'] = 'Via deze optie kunt u de link naar de script demo\'s voor gebruikers uitschakelen.';
$l['off_rating_link'] = 'Script ratings uitschakelen';
$l['off_rating_link_exp'] = 'Via deze optie kunt u de link naar de script ratings voor gebruikers uitschakelen.';
$l['off_review_link'] = 'Script reviews uitschakelen';
$l['off_review_link_exp'] = 'Via deze optie kunt u de link naar de script reviews voor gebruikers uitschakelen.';
$l['off_screenshot_link'] = 'Script screenshots uitschakelen';
$l['off_screenshot_link_exp'] = 'Via deze optie kunt u de script screenshots voor gebruikers uitschakelen.';
$l['random_dbprefix'] = 'Random database prefix inschakelen';
$l['random_dbprefix_exp'] = 'Via deze optie kunt u een random database prefix toevoegen tijdens de installatie van een script inschakelen.';
$l['remote_mysql'] = 'Remote MySQL hostname';
$l['remote_mysql_exp'] = 'Via deze optie kunt u aangeven dat u een remote database server gebruikt door de hostname of ip adres van de database server op te geven.';
$l['perl_scripts'] = 'PERL scripts uitschakelen';
$l['perl_scripts_exp'] = 'Via deze optie kunt u de link naar PERL scripts voor gebruikers uitschakelen';
$l['show_top_scripts'] = 'Top scripts groep weergeven';
$l['show_top_scripts_exp'] = 'Via deze optie kunt u de link naar top scripts groep voor gebruikers inschakelen.';
$l['err_change_app_name'] = 'Er is een fout opgetreden bij het wijzigen van de naam van de groep.';
$l['hide_dbprefix'] = 'Databse prefix uitschakelen';
$l['hide_dbprefix_exp'] = 'Via deze optie kunt u het gerbuik van een database prefix tijdens de installatie van een script uitschakelen.';
$l['user_mod_dir'] = 'USER MOD DIR gebruiken';
$l['user_mod_dir_exp'] = 'Via deze optie kunt u de mogelijkheid voor gebruikers om scripts te installeren via een tijdelijke link (http://IP/~user) inschakelen.';
$l['off_email_link'] = 'E-mail naar gebruikers uitschakelen';
$l['off_email_link_exp'] = 'Via deze optie kunt u het verzenden van e-mails naar gebruikers uitschakelen. Deze optie zal ook het verzenden van e-mails over de installatie gegevens of het verwijderen van een script uitschakelen.';
$l['disable_classes'] = 'PHP classes uitschakelen';
$l['disable_classes_exp'] = 'Via deze optie kunt u de link naar PHP classes voor gebruikers uitschakelen.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Backup/Restore functie uitschakelen';
$l['disable_backup_restore_exp'] = 'Via deze optie kunt u de link naar de backup/restore functie voor gebruikers uitschakelen.';
$l['nolabels'] = 'Alle scripts uitschakelen';
$l['nolabels_exp'] = 'Via deze optie kunt u alle scripts zoals PHP, Jvascripts, PERL voor uw gebruikers uitschakelen.';
$l['settings'] = APP.' instellingen';
$l['disable_reseller_panel'] = 'Reseller panel uitschakelen';
$l['disable_reseller_panel_exp'] = 'Via deze optie kunt u het '.APP.' panel voor resellers uitschakelen .';
$l['choose_protocol'] = 'Protocol';
$l['choose_protocol_exp'] = 'Via deze optie kunt u instellen of hhtp of https protocol als standaard wordt gebruikt bij de installatie van een script.';
$l['random_username'] = 'Random gebruikersnaam';
$l['random_username_exp'] = 'Via deze optie kunt u een random gebruikersnaam genereren wanneer een script door een gebruiker wordt geinstalleerd.';
$l['network_interface'] = 'Network interface';
$l['network_interface_exp'] = 'Via deze optie kunt u de netwerk interface die gebruikt wordt specificeren. Laat dit veld leeg wanneer u niet zeker bent over deze instelling.';
$l['default_domain_path'] = 'Standaard domein Path';
$l['default_domain_path_exp'] = 'Via deze optie kunt u het standaard domein path opgeven voor domeinen die worden toegevoegd.';
$l['empty_username'] = 'Veld gebruikersnaam leeg laten';
$l['empty_username_exp'] = 'Via deze optie kunt u aangeven dat de admin gebruikersnaam tijdens de installatie een leeg veld is.';
$l['empty_pass'] = 'Veld wachtwoord leeg laten';
$l['empty_pass_exp'] = 'Via deze optie kunt u aangeven dat het admin wachtwoord tijdens de installatie een leeg veld is.';
$l['show_cscript_in_top'] = 'Logo custom script in top scripts.';
$l['show_cscript_in_top_exp'] = 'Via deze optie kunt u aangeven dat de logo van een custom script moet worden weergegeven in de top scripts.';
$l['pass_strength'] = 'Activeer de wachtwoord sterkte tool';
$l['pass_strength_exp'] = 'Via deze optie kunt u de wachtwoord sterkte tool activeren.';
$l['off_remove_mail'] = 'Verwijder script e-mail';
$l['off_remove_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script verwijderd wordt uitschakelen.';
$l['off_backup_mail'] = 'Backup script e-mail';
$l['off_backup_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een backup van een script gemaakt is uitschakelen.';
$l['off_install_mail'] = 'Nieuwe installatie e-mail';
$l['off_install_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script geinstalleerd is uitschakelen.';
$l['off_edit_mail'] = 'Wijzig script e-mail';
$l['off_edit_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script gewijzigd is uitschakelen.';
$l['off_clone_mail'] = 'Clone script e-mail';
$l['off_clone_mail_exp'] = 'Via deze optie kunt u de e-mail notificatie die wordt verzonden nadat een script geclooned is uitschakelen.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Prefix voor admin gebruikersnaam';
$l['admin_prefix_exp'] = 'Selecteer de prefix die wordt gebruikt voor de admin gebruikersnaam<br/> Het  \'-\' teken is niet toegestaan';
$l['ap_none'] = 'Geen';
$l['ap_username'] = 'Gebruikersnaam';
$l['ap_domain'] = 'Domein';
$l['ap_admin_defined'] = 'Admin gebruikersnaam';
$l['disable_auto_backup'] = 'Backup mogelijkheid voor gebruikers uitschakelen';
$l['disable_auto_backup_exp'] = 'Via deze optie kunt u de backup mogelijkheid voor gebruikers uitschakelen.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo gebruikersnaam';
$l['webuzo_disable_username_exp'] = 'Via deze optie kunt ude Webuze gebruikersnaam op de log in pagina automatisch laten invullen.';
$l['disable_clone'] = 'Clone mogelijkheidDisable Clone feature for endusers';
$l['disable_clone_exp'] = 'Via deze optie kunt u de mogelijkheid voor het cloonen van scripts voor gebruikers uitschakelen.';
$l['disable_backup_upgrade'] = 'Backup optie voor update van scripts';
$l['disable_backup_upgrade_exp'] = 'Via deze optie kunt u de mogelijkheid om een backup te maken van een script voordat de update wordt uitgevoerd uitschakelen.';
$l['ephp_bin'] = 'Gebruiker PHP binary';
$l['ephp_bin_exp'] = 'Het PHP binary path dat wordt gebruikt voor de websites van gebruikers. '.APP.' gebruikt dit path om na te gaan of een script geinstalleerd kan worden. Wanneer er geen path wordt opgegeven dan zal '.APP.' gebruiken: ';
$l['no_ampps_download'] = 'AMPPS download link';
$l['no_ampps_download_exp'] = 'Via deze optie kunt u de AMPPS doenload link voor gebruikers verwijderen';
$l['no_strong_mysql_pass'] = 'Database gebruiker wachtwoorden';
$l['no_strong_mysql_pass_exp'] = 'Via deze optie kunt u aangeven dat de database gebruiker wachtwoorden moeten worden gegenereerd zonder speciale tekens.';

$l['remove_options'] = 'Gebruikers instellingen bij verwijderen script';
$l['remove_dir'] = 'Directory verwijderen weergeven';
$l['remove_dir_exp'] = 'Via deze optie kunt u aangeven dat de installatie directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';
$l['remove_db'] = 'Database en database gerbruiker verwijderen weegeven';
$l['remove_db_exp'] = 'Via deze optie kunt u aangeven dat de database en database gebruiker altijd verwijderd moet worden wanneer een gebruiker een script verwijderd';
$l['remove_datadir'] = 'Data directory verwijderen weergeven';
$l['remove_datadir_exp'] = 'Via deze optie kunt u aangeven dat de data directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';
$l['remove_wwwdir'] = 'WWW directory verwijderen weergeven';
$l['remove_wwwdir_exp'] = 'Via deze optie kunt u aangeven dat de www directory altijd verwijderd moet worden wanneer een gebruiker een script verwijderd.';

$l['social_media'] = 'Social Media instellingen';
$l['install_tweet_off'] = 'Tweet berichten uitschakelen voor nieuwe installaties';
$l['install_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na de installatie van een script uitschakelen.';
$l['install_tweet_msg'] = 'Tweet bericht voor nieuwe installaties';
$l['install_tweet_msg_exp'] = 'Tweet bericht voor nieuwe installaties';

$l['upgrade_tweet_off'] = 'Tweet berichten uitschakelen voor geupdate installaties';
$l['upgrade_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na de update van een script uitschakelen.';
$l['upgrade_tweet_msg'] = 'Tweet bericht voor geupdate installaties';
$l['upgrade_tweet_msg_exp'] = 'Tweet bericht voor geupdate installaties';

$l['clone_tweet_off'] = 'Tweet berichten uitschakelen voor gecloonde installaties';
$l['clone_tweet_off_exp'] = 'Via deze optie kunt u de Tweet optie die wordt weergegeven na het cloonen van een script uitschakelen.';
$l['clone_tweet_msg'] = 'Tweet bericht voor gecloonde installaties';
$l['clone_tweet_msg_exp'] = 'Tweet bericht voor gecloonde installaties';

$l['no_ftp_encrypted'] = 'FTP wachtwoord niet versleutelen';
$l['no_ftp_encrypted_exp'] = 'Via deze optie kunt u aangeven dat FTP wachtwoorden voor een domeinnaam niet versleuteld moet worden opgeslagen in de database.';
$l['pre_download_all'] = 'Scripts van te voren downloaden';
$l['pre_download_all_exp'] = 'Via deze optie kunt u aangeven dat scripts van te voren moeten worden gedownload (inclusief scripts die nieuw zijn toegevoegd).';

$l['tweet_vars_link'] = 'Opties voor tweet berichten';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Naam van het script <br />[[TYPE]] - Type script, bijvoorbeeld: PHP, PERL, etc <br />[[softurl]] - Installatie URL <br />[[cat]] - Script categorie, bijvoorbeeld: Blog, CMS, etc <br />[[ver]] - Script versie <br />';

$l['session_timeout'] = 'Session timeout';
$l['session_timeout_exp'] = 'Via deze optie kunt u aangeven hoe lang een Softaculous Sessie actief moet blijven. Tijd in minuten. Standaard waarde 15';


$l['auto_backup_limit'] = 'Auto backup rotatie limiet';
$l['auto_backup_limit_exp'] = 'Via deze optie kunt u aangeven wat de maximale rotatie limiet voor backups is.';
$l['auto_backup_unlimited'] = 'Geen limiet';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Auto update plugins voor gebruikers uitschakelen';
$l['off_upgrade_plugins_exp'] = 'Via deze optie kunt u de auto update mogelijkheid voor plugins die gebruikt worden door een script uitschakelen.';
$l['off_upgrade_themes'] = 'Auto update templates voor gebruikers uitschakelenDisable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'Via deze optie kunt u de auto update mogelijkheid voor templates die gebruikt worden door een script uitschakelen.';

$l['pfx_settings'] = 'PopularFX instellingen';
$l['eu_enable_themes'] = 'Activeer gratis templates';
$l['eu_enable_themes_exp'] = 'Via deze optie kunt u de mogelijkheid om tijdens de installatie van scripts als Wordpress een gratis template te installeren activeren.';
$l['eu_themes_premium'] = 'Activeer premium templates';
$l['eu_themes_premium_exp'] = 'Via deze optie kunt u de mogelijkheid om tijdens de installatie van scripts als Wordpress een betaald template te installeren activeren.<br /><a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Meer informatie</a>';

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