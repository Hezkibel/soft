<?php

//////////////////////////////////////////////////////////////
//===========================================================
// admin/settings_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_path'] = 'Aucun chemin n\'a été indiqué';
$l['wrong_path'] = 'Impossible de localiser le fichier universal.php à l\'emplacement que vous avez spécifié';
$l['no_softscripts'] = 'Aucun chemin pour le script/logiciel n\'a été donné';
$l['wrong_softscripts'] = 'Le chemin pour le script/logiciel n\'est pas correct car aucun logiciel n\'a été trouvé';
$l['no_sn'] = 'Aucun nom de site n\'a été spécifié.';
$l['no_cookie_name'] = 'Aucun nom de cookie spécifié';
$l['no_soft_email'] = 'Aucune addresse e-mail fournie';
$l['wrong_soft_email'] = 'L\'adresse e-mail que vous avez indiquée est incorrecte';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Aucune clé de licence soumise';
$l['no_lang'] = 'Aucune langue n\'a été choisie';
$l['wrong_lang'] = 'La langue sélectionnée n\'est pas valide';
$l['no_theme_folder'] = 'Aucun thème n\'a été choisi';
$l['wrong_theme_folder'] = 'Le thème choisi est invalide';
$l['no_timezone'] = 'Aucun fuseau horaire n\'a été choisi';
$l['wrong_timezone'] = 'Le fuseau horaire sélectionné est incorrect';
$l['no_cron_time'] = 'Aucune tâche Cron n\'a été spécifiée';
$l['no_off_message'] = 'Aucune raison pour la désactivation n\'a été spécifiée';
$l['no_off_subject'] = 'Aucun titre n\'a été spécifié au message de désactivation ';
$l['saving_error'] = 'Il y a eu des erreurs lors de l\'enregistrement de la configuration';
$l['no_update'] = 'No update preference was submitted';
$l['invalid_update'] = 'An invalid update preference was submitted';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Paramètres';
$l['settings_saved'] = 'Les réglages ont été sauvegardés avec succès';
$l['pathhead'] = 'Chemins des logiciels';
$l['softpath'] = 'Chemin de '.APP.'';
$l['softpath_exp'] = 'C\'est le chemin où tous les fichiers des différents scripts sont situés';
$l['softscripts'] = 'Chemin des Scripts';
$l['softscripts_exp'] = 'C\'est le chemin où tous les logiciels / scripts sont situés';
$l['gen_set'] = 'Paramètres généraux';
$l['sitename'] = 'Nom du site';
$l['sitename_exp'] = 'Le nom du serveur ou de la compagnie utilisant '.APP.'. Il apparaît dans de nombreuses pages de '.APP.' Installer';
$l['cook_name'] = 'Nom du Cookie';
$l['cook_name_exp'] = 'Le nom du cookie qui sera stocké sur les navigateurs.';
$l['comp_output'] = 'Compresser la sortie';
$l['comp_output_exp'] = 'Cela permettra de compresser la sortie et cela fait gagner beaucoup de bande passante.';
$l['soft_email'] = 'Admin Email Address';
$l['soft_email_exp'] = 'The email address to which the CRON activities and other admin related emails are sent to.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'Clé de licence';
$l['license_exp'] = 'Veuillez mettre la bonne clé de licence délivrée par '.APP.'';
$l['choose_lang'] = 'Choisir la Langue';
$l['choose_lang_exp'] = 'Choisissez votre langue préférée';
$l['choose_theme'] = 'Choisir le thème';
$l['choose_theme_exp'] = 'Le thème choisi sera le thème par défaut tout au long de '.APP.'';
$l['timezone'] = 'Fuseau horaire';
$l['update_settings'] = 'Mettre à jour les paramètres';
$l['auto_upd_softac'] = 'Mise à jour automatique de '.APP.'';
$l['auto_upd_softac_exp'] = 'If enabled '.APP.' will automatically update itself to the latest version. <br />The <b>Stable</b> branch is launched after the Release Candidate has been thorughly tested. <br />The <b>Release Candidate</b> branch contains the latest version and features.';
$l['never_update'] = 'Never Update';
$l['stable'] = 'Stable (Recommended)';
$l['release_cand'] = 'Release Candidate (Experimental!)';
$l['auto_upd_soft'] = 'Auto Update Scripts';
$l['auto_upd_soft_exp'] = 'Si activé, les divers scripts / logiciels seront mis à jour vers leurs dernières versions';
$l['auto_add_soft'] = 'Ajouter automatiquement les nouveaux logiciels';
$l['auto_add_soft_exp'] = 'Si activé, de nouveaux scripts / logiciels seront ajoutés au cours de la tâche Cron. (RECOMMANDÉ)';
$l['email_upd_soft'] = 'Souscription aux notifications des mises à jour';
$l['email_upd_soft_exp'] = 'Envoyer des emails lorsque des mises à jour de '.APP.' sont disponibles ou des mise à jour automatique sont effectuée';
$l['email_upd_softs'] = 'Notify Script Updates';
$l['email_upd_softs_exp'] = 'Envoyer des emails lorsque des mises à jour de scripts / logiciels sont disponibles ou effectuée';
$l['cron_time'] = 'Mises à jour des tâches Cron';
$l['cron_time_exp'] = 'La frequence des tâches Cron pour vérifier les mises à jour disponibles. Ne pas changer si vous n\'êtes pas au courant des taches CRON';
$l['disable_soft'] = 'Désactiver '.APP.'';
$l['soft_off'] = 'Désactiver '.APP.'';
$l['soft_off_exp'] = 'Cela désactivera '.APP.' et les utilisateurs ne seront plus capable de l\'utiliser!';
$l['off_sub'] = 'Titre du message de désactivation';
$l['off_message'] = 'Message de désactivation';
$l['edit_settings'] = 'Modifier les paramètres';
$l['chmod_files'] = 'CHMOD Fichiers';//CHMOD Files
$l['chmod_files_exp'] = 'Ceci est utile si vous avez installé et suphp '.APP.' est incapable de le détecter. Laissez en blanc si incertains.';//This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.
$l['chmod_dir'] = 'CHMOD Répertoires';//CHMOD Directories
$l['chmod_dir_exp'] = 'Ceci est utile si vous avez installé et suphp '.APP.' est incapable de le détecter. Laissez en blanc si incertains.';//This is useful if you have suPHP installed and '.APP.' is unable to detect it. Leave blank if unsure.
$l['is_vps'] = 'VPS est';//Is VPS
$l['is_vps_exp'] = 'Si ce serveur est un VPS alors s\'il vous plaît cocher cette case.';//If this server is a VPS then please check this box.
$l['eu_news_off'] = 'Désactiver les fils d\'actualités pour l\'utilisateur final';
$l['eu_news_off_exp'] = 'Si vous choisissez cette option, les fils d\'actualités pour les utilisateurs finaux seront désactivés. Ces nouvelles informent les utilisateurs des derniers développement des scripts, de leur mise à jour, etc.';
$l['logo_url'] = 'Logo URL';
$l['logo_url_exp'] = 'If empty the '.APP.' logo will be shown.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'This is the binary that will be used for the CRON Job and also other purposes. If empty then <b>/usr/bin/php</b> will be used.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Turn Off Sync Link';
$l['off_sync_link_exp'] = 'This will turn off the Synchronize Link for the endusers.';
$l['off_panel_link'] = 'Turn Off Control Panel Link';
$l['off_panel_link_exp'] = 'This will turn off the Control Panel Link in the Dock for the endusers.';
$l['chmod_conf_file'] = 'CHMOD Config files';
$l['chmod_conf_file_exp'] = 'Config files of scripts will be CHMOD to this value. The default is 0644. (Dont edit / leave blank if you dont know!)';
$l['suphp_detected'] = 'suPHP Detected';
$l['no_prefill'] = 'Don\'t Prefill Directory Name';
$l['no_prefill_exp'] = 'Don\'t prefill the directory name with the scripts name by default.';
$l['footer_link'] = 'Footer Link';
$l['footer_link_exp'] = 'When someone installs a Script, this link / text will be inserted in the footer of that installation';
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