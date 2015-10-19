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

$l['no_path'] = 'Yol yok';
$l['wrong_path'] = ' universal.php yolu bulunamadı';
$l['no_softscripts'] = 'script/software yolu bulunamadı';
$l['wrong_softscripts'] = 'script/software yolu hatalı veya yazılım yok';
$l['no_sn'] = 'Site adı yok';
$l['no_cookie_name'] = 'Çerez yolu yok';
$l['no_soft_email'] = 'email adresi girilmedi';
$l['wrong_soft_email'] = 'Mail adresi geçersiz';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Lisans anahtarı girmelisiniz';
$l['no_lang'] = 'Seçilmiş bir dil yok';
$l['wrong_lang'] = 'Seçili dil geçersiz';
$l['no_theme_folder'] = 'Seçili tema yok';
$l['wrong_theme_folder'] = 'Seçili tema geçersiz';
$l['no_timezone'] = 'Zaman dilimi yok';
$l['wrong_timezone'] = 'Seçili zaman dilimi geçersiz';
$l['no_cron_time'] = 'Cron Job yok';
$l['no_off_message'] = 'Konu başlığı yok';
$l['no_off_subject'] = 'Mesaj yok';
$l['saving_error'] = 'Ayarlar kaydedilirken sorun oluştu';
$l['no_update'] = 'No update preference was submitted';
$l['invalid_update'] = 'An invalid update preference was submitted';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Ayar Merkezi';
$l['settings_saved'] = 'Ayarlar başarıyla keydeildi';
$l['pathhead'] = 'Yazılım Yolu';
$l['softpath'] = APP.' Yolu';
$l['softpath_exp'] = 'Bu yoldaki bütün dosyalar scriptler için gözardı edilecektir';
$l['softscripts'] = 'Scriptlerin Yolu';
$l['softscripts_exp'] = 'Bütün yazılım ve/vaye scriptler burada bulunur';
$l['gen_set'] = 'Genel Ayarlar';
$l['sitename'] = 'Site Adı';
$l['sitename_exp'] = APP.'\'u kullanan sitenizin adı. Bir çok '.APP.' Kurulumu sayfasında gözükür';
$l['cook_name'] = 'Çerez Adı';
$l['cook_name_exp'] = 'Tarayıcılar için gerekli çerez adı.';
$l['comp_output'] = 'Açma Yolu';
$l['comp_output_exp'] = 'Sıkıştırılmış dosyalar band genişliği için buraya yapılır.';
$l['soft_email'] = 'Email Adresi';
$l['soft_email_exp'] = 'Gönderen kısmında kullanılır.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'licans Anahtarı';
$l['license_exp'] = 'Lütfen geçerli bir '.APP.' lisansı girin';
$l['choose_lang'] = 'Dil Seç';
$l['choose_lang_exp'] = 'Ana dili seçiniz';
$l['choose_theme'] = 'Tema Seçiniz';
$l['choose_theme_exp'] = APP.' için varsayılan tema';
$l['timezone'] = 'Zaman Dilimi';
$l['update_settings'] = 'Ayaları Güncelle';
$l['auto_upd_softac'] = ''.APP.' Otomatik Güncelleme';
$l['auto_upd_softac_exp'] = 'If enabled '.APP.' will automatically update itself to the latest version. <br />The <b>Stable</b> branch is launched after the Release Candidate has been thorughly tested. <br />The <b>Release Candidate</b> branch contains the latest version and features.';
$l['never_update'] = 'Never Update';
$l['stable'] = 'Stable (Recommended)';
$l['release_cand'] = 'Release Candidate (Experimental!)';
$l['auto_upd_soft'] = 'Auto Update Scripts';
$l['auto_upd_soft_exp'] = 'Eğer bu seçenek aktif ise script ve/veya yazılım güncellemeleri otomatik olarak yapılır';
$l['auto_add_soft'] = 'Auto Add New Scripts';
$l['auto_add_soft_exp'] = 'Eğer bu seçenek aktif ise yeni yazılım eklendiğinde otomatik olarak yüklenir. TAVSİYE';
$l['email_upd_soft'] = 'Güncelleme Bildirimi';
$l['email_upd_soft_exp'] = ''.APP.' Otomatik Güncelleme işlemi sonrasında bilgilendirme maili atabilir';
$l['email_upd_softs'] = 'Notify Script Updates';
$l['email_upd_softs_exp'] = 'Script ve/veya yazılım güncellemesi kullanılabilir olduğunda otomatik güncelleyebilir';
$l['cron_time'] = 'Cron Job Güncellemeleri';
$l['cron_time_exp'] = 'Cron Job anında güncellemeleri kontrol eder. Lütfen bilginiz yoksa bu ayarı değiştirmeyiniz';
$l['disable_soft'] = ''.APP.'\' Pasif Yap';
$l['soft_off'] = ''.APP.'\'u Kapat';
$l['soft_off_exp'] = ''.APP.'\' kullanıcılar için kapatır!';
$l['off_sub'] = 'Kapatma Başlığı';
$l['off_message'] = 'Kapatma Mesajı';
$l['edit_settings'] = 'Ayarları Değiştir';
$l['chmod_files'] = 'Dosya CHMOD';
$l['chmod_files_exp'] = 'Eğer suPHP kullanıyorsanız '.APP.' bunu göremeyebilir.Bilginiz yoksa boş bırakın.';
$l['chmod_dir'] = 'Dizin CHMOD';
$l['chmod_dir_exp'] = 'Eğer suPHP kullanıyorsanız '.APP.' bunu göremeyebilir.Bilginiz yoksa boş bırakın.';
$l['is_vps'] = 'VPS';
$l['is_vps_exp'] = 'Eğer bu yazılım VPS sistemde kurulu ise seçin.';
$l['eu_news_off'] = 'Son kullanıcı haberleri kapalı';
$l['eu_news_off_exp'] = 'Bu seçenek aktif ise kullanıcılar bilgilendirme maili alamaz. Bilgilendirme maillerine kurulmlar ve güncellemeler dahildir';
$l['logo_url'] = 'Logo URL\'si';
$l['logo_url_exp'] = ''.APP.' logosunu kullanmak için boş bırakın.';
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'Lütfen binary için CRON Job bilgisini girin. Eğer boş bırakırsanız <b>/usr/bin/php</b> değer olarak bu kullanılır';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Senkronize Linkini Kapat';
$l['off_sync_link_exp'] = 'Bu seçenek aktif ise Senkronize linki üyelere gözükmez.';
$l['off_panel_link'] = 'Kontrol Paneli Linkini Kapar';
$l['off_panel_link_exp'] = 'Bu seçenek aktif ise Kontrol Paneli linki üyelere gözükmez.';
$l['chmod_conf_file'] = 'Dosyaların CHMOD ayarları';
$l['chmod_conf_file_exp'] = 'Dosyalarınızın CHMOD ayarlarıdır. Varsayılan değer 0644. (Lütfen değiştirmeyin / Bilmiyorsanız boş bırakın!)';
$l['suphp_detected'] = 'suPHP bulundu';
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