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

$l['no_path'] = 'Nincs útvonal kiválasztva';
$l['wrong_path'] = 'Nem található az universal.php a megadott útvonalon';
$l['no_softscripts'] = 'Nincs útvonal megadva az alkalmazáshoz/scripthez';
$l['wrong_softscripts'] = 'Az alkalmazás/script megadott útvonala hibás, mivel nem létezik';
$l['no_sn'] = 'Nincs megadva az oldal neve.';
$l['no_cookie_name'] = 'A süti neve nem volt megadva';
$l['no_soft_email'] = 'Nincs volt email cím megadva';
$l['wrong_soft_email'] = 'A megadott email cím érvénytelen';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Nincs volt licenckulcs megadva';
$l['no_lang'] = 'Nincs nyelv kiválasztva';
$l['wrong_lang'] = 'A kiválasztott nyelv érvénytelen';
$l['no_theme_folder'] = 'Nincs téma kiválasztva';
$l['wrong_theme_folder'] = 'A kiválasztott téma érvénytelen';
$l['no_timezone'] = 'Az időzóna nincs kiválasztva';
$l['wrong_timezone'] = 'A kiválasztott időzóna érvénytelen';
$l['no_cron_time'] = 'Az időzített futtatás időpontja nincs megadva';
$l['no_off_message'] = 'A kikapcsolási üzenet tárgya nincs megadva';
$l['no_off_subject'] = 'A kikapcsolási üzenet nincs megadva';
$l['saving_error'] = 'Hiba történt a beállítások mentésekor';
$l['no_update'] = 'No update preference was submitted';
$l['invalid_update'] = 'An invalid update preference was submitted';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Beállítási központ';
$l['settings_saved'] = 'A beállítások sikeresen mentésre kerültek';
$l['pathhead'] = 'Szoftver útvonal';
$l['softpath'] = APP.' útvonal';
$l['softpath_exp'] = 'Ezen az útvonalon található az összes fájl, kivéve a különféle alkalmazásokat';
$l['softscripts'] = 'Alkalmazások útvonala';
$l['softscripts_exp'] = 'Ezen az útvonalon található az összes alkalmazás';
$l['gen_set'] = 'Általános beállítások';
$l['sitename'] = 'Oldal neve';
$l['sitename_exp'] = 'A szerver vagy a cég neve. Ez jelenik meg a '.APP.' felületén.';
$l['cook_name'] = 'Süti neve';
$l['cook_name_exp'] = 'A süti neve, ami a böngészőben tárolásra kerül.';
$l['comp_output'] = 'Kimenet tömörítése';
$l['comp_output_exp'] = 'A kimenet tömörítése csökkenti a sávszélesség használatot.';
$l['soft_email'] = 'Email cím';
$l['soft_email_exp'] = 'Ez a feladó email címe';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'licenckulcs';
$l['license_exp'] = 'Kérjük a '.APP.' által kiadott licenckulcsot adja meg';
$l['choose_lang'] = 'Válasszon nyelvet';
$l['choose_lang_exp'] = 'Válassza ki a preferált nyelvet';
$l['choose_theme'] = 'Válasszon témát';
$l['choose_theme_exp'] = 'A kiválasztott téma lesz az alapértelmezett a '.APP.' egész felületén';
$l['timezone'] = 'Időzóna';
$l['update_settings'] = 'Frissítések beállításai';
$l['auto_upd_softac'] = ''.APP.' automatikus frissítés';
$l['auto_upd_softac_exp'] = 'If enabled '.APP.' will automatically update itself to the latest version. <br />The <b>Stable</b> branch is launched after the Release Candidate has been thorughly tested. <br />The <b>Release Candidate</b> branch contains the latest version and features.';
$l['never_update'] = 'Never Update';
$l['stable'] = 'Stable (Recommended)';
$l['release_cand'] = 'Release Candidate (Experimental!)';
$l['auto_upd_soft'] = 'Szoftverek automatikus frissítése';
$l['auto_upd_soft_exp'] = 'Ha engedélyezi, az alkalmazások vagy scriptek frissítve lesznek a legújabb verzióra automatikusan';
$l['auto_add_soft'] = 'Új alkalmazás automatikus felvétele';
$l['auto_add_soft_exp'] = 'Ha engedélyezi, új alkalmazások automatikusan felvételre kerülnek az időzített futtatás során. AJÁNLOTT.';
$l['email_upd_soft'] = 'Frissítési információk';
$l['email_upd_soft_exp'] = 'Levelet küld, ha új frissítések '.APP.' frissítések elérhetők, vagy ha automatikus frissétés történt';
$l['email_upd_softs'] = 'Notify Script Updates';
$l['email_upd_softs_exp'] = 'Levelet küld, ha a scriptekhez vagy alkalmazásokhoz új frissítések elérhetők, vagy ha automatikus frissítés történt';
$l['cron_time'] = 'Automatikus futás időpontja';
$l['cron_time_exp'] = 'A cron automatikus időzítő feladat időpontja a frissítési információk letöltésére. Ne módosítsa, ha nem tudja, hogy mi ez.';
$l['disable_soft'] = ''.APP.' kikapcsolása';
$l['soft_off'] = 'Kapcsolja ki a '.APP.' alkalmazás-telepítőt';
$l['soft_off_exp'] = 'Ez letiltja a '.APP.' alkalmazás-telepítőt és a felhasználók nem fogják tudni használni!';
$l['off_sub'] = 'Kikapcsolás tárgya';
$l['off_message'] = 'Kikapcsolási üzenet';
$l['edit_settings'] = 'Beállítások szerkesztése';
$l['chmod_files'] = 'Fájl jogok (chmod)';
$l['chmod_files_exp'] = 'Hasznos, ha suPHP-t használ és '.APP.' nem ismeri fel. Hagyja üresen, ha bizonytalan.';
$l['chmod_dir'] = 'Könyvtár jogok (chmod)';
$l['chmod_dir_exp'] = 'Hasznos, ha suPHP-t használ és '.APP.' nem ismeri fel. Hagyja üresen, ha bizonytalan.';
$l['is_vps'] = 'A szerver egy VPS';
$l['is_vps_exp'] = 'Ha ez a szerver egy VPS, akkor kérjük jelölje be.';
$l['eu_news_off'] = 'Felhasználói hírek kikapcsolása';
$l['eu_news_off_exp'] = 'Ha bejelöli, a felhasználó híreket az alkalmazások nem fog kapni. Ez a hírek a felhasználók számára. Tájékoztatást nyújt a fejlesztésekről és az elérhető frissítésekről.';
$l['logo_url'] = 'Embléma/logó URL';
$l['logo_url_exp'] = 'Ha üres, akkor a '.APP.' logó jelenik meg.';
$l['php_bin'] = 'PHP végrehajtható fájl';
$l['php_bin_exp'] = 'Ez a PHP lesz használva az időzített cron futtatáshoz és egyéb célokra. Ha üres, akkor a <b>/usr/bin/php</b> lesz használva.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Szinkronizáció kikapcsolása';
$l['off_sync_link_exp'] = 'Ez letiltja a felhasználók szinkronizációs hivatkozását.';
$l['off_panel_link'] = 'Vezérlőpult kikapcsolása';
$l['off_panel_link_exp'] = 'Ez letiltja a felhasználók részére a hivatkozást a vezérlőpulthoz.';
$l['chmod_conf_file'] = 'Konfigurációs fájl jogok (chmod)';
$l['chmod_conf_file_exp'] = 'Az alkalmazások konfiguráció fájljaihoz ez a jogosultsági beállítás lesz használva. Az alapértelmezett 0644. (Ne módosítsa! Hagyja üresen, ha nem tudja!)';
$l['suphp_detected'] = 'suPHP felismerve';
$l['no_prefill'] = 'Ne töltse ki a könyvtár nevét';
$l['no_prefill_exp'] = 'Ne töltse ki a telepítési könyvtár nevét az alkalmazás nevével telepítéskor.';
$l['footer_link'] = 'Lábléc hivatkozás';
$l['footer_link_exp'] = 'Ha valaki telepít egy alkalmazást, akkor ez a szöveg/hivatkozás kerül elhelyezésre a telepített alkalmazás által megjelenített oldalak láblécében';
$l['eu_email_off'] = 'Disable End User Update E-Mails';
$l['eu_email_off_exp'] = 'If checked no emails will be sent to the enduser when there is a Update available.';
$l['random_pass'] = 'Generate Random Password for users';
$l['random_pass_exp'] = 'If checked then randomly generated admin passwords will be made during an installation.';
$l['off_demo_link'] = 'Turn Off Script Demos';
$l['off_demo_link_exp'] = 'This will turn off the Demos for the endusers.';
$l['off_rating_link'] = 'Turn Off Script Ratings';
$l['off_rating_link_exp'] = 'This will turn off the Ratings for the endusers.';
$l['off_review_link'] = 'Turn Off Script Reviews';
$l['off_review_link_exp'] = 'This will turn off the Reviews for the endusers.';
$l['off_screenshot_link'] = 'Turn Off Script Screenshots';
$l['off_screenshot_link_exp'] = 'This will turn off the Screenshots for the endusers.';
$l['random_dbprefix'] = 'Generate Random Database Prefix for users';
$l['random_dbprefix_exp'] = 'If checked then a randomly generated Database Prefix will be made during an installation.';
$l['remote_mysql'] = 'Remote Mysql Hostname';
$l['remote_mysql_exp'] = 'If you wish to use remote mysql, specify the Remote Mysql Hostname or IP';
$l['perl_scripts'] = 'Disable PERL Scripts';
$l['perl_scripts_exp'] = 'This will turn off the PERL Scripts for the endusers';
$l['show_top_scripts'] = 'Show Top Scripts Group';
$l['show_top_scripts_exp'] = 'This will display the Top Scripts Group to the endusers for easy access to the scripts installation pages. To disable this feature, leave this field <b>blank</b>.';
$l['err_change_app_name'] = 'Error occured while changing the name of the Group';
$l['hide_dbprefix'] = 'Hide the Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
$l['user_mod_dir'] = 'Use USER MOD DIR';
$l['user_mod_dir_exp'] = 'Users can install scripts on http://IP/~user';
$l['off_email_link'] = 'Turn off all Emails sent to endusers';
$l['off_email_link_exp'] = 'This will turn off the Email Link for the endusers and ALSO disable emails that are sent during installation, removal, etc.';
$l['disable_classes'] = 'Disable PHP Classes';
$l['disable_classes_exp'] = 'This will disable PHP Classes from the enduser.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Disable Backup/Restore Function for Endusers';
$l['disable_backup_restore_exp'] = 'This will turn off the backup and restore function for endusers.';
$l['nolabels'] = 'Disable ALL Scripts Category';
$l['nolabels_exp'] = 'If enabled then no category will be displayed in the header in enduser panel. i.e. PHP, Javascripts, PERL, Classes these all category will be disabled';
$l['settings'] = APP.' Settings';
$l['disable_reseller_panel'] = 'Disable Reseller Panel';
$l['disable_reseller_panel_exp'] = 'If enabled then the resellers will not be able to access reseller panel.';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'Choose your preferred protocol. It will be selected by default for enduser.';
$l['random_username'] = 'Generate Random Username for users';
$l['random_username_exp'] = 'If checked then randomly generated admin usernames will be made during an installation.';
$l['network_interface'] = 'Network Interface';
$l['network_interface_exp'] = 'The public network interface of the server. Leave blank if you dont know';
$l['default_domain_path'] = 'Default Domain Path';
$l['default_domain_path_exp'] = 'While adding domain you can set the default domain path.';
$l['empty_username'] = 'Empty Username';
$l['empty_username_exp'] = 'If checked then the ADMIN USERNAME field will be left blank.';
$l['empty_pass'] = 'Empty Password';
$l['empty_pass_exp'] = 'If checked then the PASSWORD field will be left blank.';
$l['show_cscript_in_top'] = 'Show custom script(s) logo in TOP scripts.';
$l['show_cscript_in_top_exp'] = 'If enabled your custom script(s) logo will be displayed in the TOP scripts.';
$l['pass_strength'] = 'Set Minimum Password Strength';
$l['pass_strength_exp'] = 'If set, then the password strength must be more than the defined value';
$l['off_remove_mail'] = 'Turn off Remove Installation emails';
$l['off_remove_mail_exp'] = 'This will disable the email sent to endusers during removal of installation(s).';
$l['off_backup_mail'] = 'Turn off Backup Installation emails';
$l['off_backup_mail_exp'] = 'This will disable the email sent to endusers during backup of installation(s).';
$l['off_install_mail'] = 'Turn off New Installation emails';
$l['off_install_mail_exp'] = 'This will disable the email sent to endusers during installation of an application.';
$l['off_edit_mail'] = 'Turn off Edit Installation emails';
$l['off_edit_mail_exp'] = 'This will disable the email sent to endusers when installation details are edited.';
$l['off_clone_mail'] = 'Turn off Clone Installation emails';
$l['off_clone_mail_exp'] = 'This will disable the email sent to endusers when an installation is cloned.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Prefix for admin username';
$l['admin_prefix_exp'] = 'Selected option will be set as prefix for admin username on the script install form<br/> Please do not use a hyphen \'-\' as it will be used as a seperator';
$l['ap_none'] = 'None';
$l['ap_username'] = 'Username';
$l['ap_domain'] = 'Domain';
$l['ap_admin_defined'] = 'Admin Defined';
$l['disable_auto_backup'] = 'Disable Automated Backups for Enduser';
$l['disable_auto_backup_exp'] = 'If checked then the option for automated backups will be disabled for endusers.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo Username';
$l['webuzo_disable_username_exp'] = 'If checked then the field for Webuzo Username on login page will be prefilled.';
$l['disable_clone'] = 'Disable Clone feature for endusers';
$l['disable_clone_exp'] = 'This will disable the clone installation option for endusers';
$l['disable_backup_upgrade'] = 'Disable backup option during upgrades';
$l['disable_backup_upgrade_exp'] = 'This will disable the backup option on the upgrade installation page for endusers';
$l['ephp_bin'] = 'Enduser PHP binary';
$l['ephp_bin_exp'] = 'Define the PHP binary path that will be used by the enduser websites. '.APP.' will use this binary for checking the requirements of a script. If not defined '.APP.' will use the default binary as : ';
$l['no_ampps_download'] = 'Disable AMPPS download link';
$l['no_ampps_download_exp'] = 'This will disable the AMPPS download link in '.APP.' Enduser panel';
$l['no_strong_mysql_pass'] = 'Don\'t generate strong MySQL database user password';
$l['no_strong_mysql_pass_exp'] = 'This will generate MySQL database user password without special characters';

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