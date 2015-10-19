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

$l['no_path'] = 'Не указан путь размещения';
$l['wrong_path'] = 'Невозможно найти universal.php по указанному пути';
$l['no_softscripts'] = 'Не указан путь скрипта/программного обеспечения';
$l['wrong_softscripts'] = 'Не указан путь скрипта/программного обеспечения';
$l['no_sn'] = 'Не указано название сайта';
$l['no_cookie_name'] = 'Не указано название cookie';
$l['no_soft_email'] = 'Не указан email адрес';
$l['wrong_soft_email'] = 'Указанный email адрес не корректный';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Не указан номер лицензии';
$l['no_lang'] = 'Не выбран язык';
$l['wrong_lang'] = 'Выбранный язык не корректный';
$l['no_theme_folder'] = 'Не выбрана тема';
$l['wrong_theme_folder'] = 'Выбранная тема некорректна';
$l['no_timezone'] = 'Не выбрана временная зона';
$l['wrong_timezone'] = 'Выбранная временная зона некорректна';
$l['no_cron_time'] = 'Не указано время Cron';
$l['no_off_message'] = 'Не указана тема отключения';
$l['no_off_subject'] = 'Не указано сообщение отключения';
$l['saving_error'] = 'При сохранении настройки возникли некоторые ошибки';
$l['no_update'] = 'Нет доступных обновлений';
$l['invalid_update'] = 'Обновление недействительно';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Центр настроек';
$l['settings_saved'] = 'Настройки успешно сохранены';
$l['pathhead'] = 'Путь скриптов';
$l['softpath'] = 'Путь '.APP;
$l['softpath_exp'] = 'Это путь, по которому расположены все файлы, исключая различные скрипты';
$l['softscripts'] = 'Путь скрипта';
$l['softscripts_exp'] = 'Это путь, по которому расположены все программное обеспечение и скрипты';
$l['gen_set'] = 'Основные настройки';
$l['sitename'] = 'Название сайта';
$l['sitename_exp'] = 'Имя сервера или компании. Оно появится во многих страницах установки '.APP;
$l['cook_name'] = 'Название Cookie';
$l['cook_name_exp'] = 'Название Cookie, которые будут храниться в браузерах.';
$l['comp_output'] = 'Сжатие вывода';
$l['comp_output_exp'] = 'Это сжимает данные и это экономит много трафика.';
$l['soft_email'] = 'Email Адрес';
$l['soft_email_exp'] = 'Адрес электронной почты отправителя.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'Лицензионный ключ';
$l['license_exp'] = 'Пожалуйста, введите правильный ключ лицензии, выданный '.APP;
$l['choose_lang'] = 'Выберите язык';
$l['choose_lang_exp'] = 'Выберите нужный язык';
$l['choose_theme'] = 'Выберите тему';
$l['choose_theme_exp'] = 'Выбранная тема будет по умолчанию темой всей '.APP;
$l['timezone'] = 'Временная зона';
$l['update_settings'] = 'Настройки обновлений';
$l['auto_upd_softac'] = 'Авто обновление '.APP;
$l['auto_upd_softac_exp'] = 'Если включено '.APP.' будет автоматически обновляться до последней версии. <br /><b>Stable</b> это проверенная стабильная версия на основе предидещего Release Candidate версии. <br /><b>Release Candidate</b> ветвь содержит самую последнюю версию и новые особенности.';
$l['never_update'] = 'Никогда не обновлять';
$l['stable'] = 'Stable (Рекомендовано)';
$l['release_cand'] = 'Release Candidate (Экспериментально!)';
$l['auto_upd_soft'] = 'Авто обновление скриптов';
$l['auto_upd_soft_exp'] = 'Если включено, различные скрипты или программное обеспечение будет автоматически обновляться до их последних версий';
$l['auto_add_soft'] = 'Автоматически добавлять новые скрипты';
$l['auto_add_soft_exp'] = 'Если включено, новые скрипты или программное обеспечение будет добавлено в cron обслуживания. РЕКОМЕНДОВАНО';
$l['email_upd_soft'] = 'Уведомления об Обновлениях';
$l['email_upd_soft_exp'] = 'Будет ли отправляться электронная почта, когда '.APP.' обновления доступны или выполняется автоматическое обновление';
$l['email_upd_softs'] = 'уведомлять об обновлении скриптов';
$l['email_upd_softs_exp'] = 'Будет ли отправляться электронная почта, когда скрипты или обновления программного обеспечения доступны или осуществляется автоматическое обновление скриптов или программного обеспечения';
$l['cron_time'] = 'Обновление по расписанию (Cron Job)';
$l['cron_time_exp'] = 'Время проверки наличия обновлений. Не изменяйте это, если вы не знаете, как это работает';
$l['disable_soft'] = 'Отключение '.APP;
$l['soft_off'] = 'Отключить '.APP;
$l['soft_off_exp'] = 'Это отключит '.APP.' и пользователи не смогут использовать его!';
$l['off_sub'] = 'Отключение: Тема';
$l['off_message'] = 'Отключение: Сообщение';
$l['edit_settings'] = 'Сохранить настройки';
$l['chmod_files'] = 'CHMOD Файлов';
$l['chmod_files_exp'] = 'Это необходимо, если у вас установлен suPHP и '.APP.' не в состоянии обнаружить его. Оставьте пустым, если не уверены.';
$l['chmod_dir'] = 'CHMOD Директорий';
$l['chmod_dir_exp'] = 'Это необходимо, если у вас установлен suPHP и '.APP.' не в состоянии обнаружить его. Оставьте пустым, если не уверены.';
$l['is_vps'] = 'Если VPS';
$l['is_vps_exp'] = 'Если этот сервер VPS, пожалуйста, установите флажок.';
$l['eu_news_off'] = 'Отключить новости для конечных пользователей';
$l['eu_news_off_exp'] = 'Если отмечен этот пункт будет отключена отправка новостей конечным пользователям. Это новости о последних разработках различных скриптов, их обновлений и т.д.';
$l['logo_url'] = 'URL логотипа';
$l['logo_url_exp'] = 'Если оставить пустым, будет показан логотип '.APP;
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'Это двоичный код, который будет использоваться для задании cron, а также других целей. Если пусто, будет использоваться <b>/usr/bin/php</b>.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Отключить Ссылку синхронизации';
$l['off_sync_link_exp'] = 'Это позволит отключить Ссылку синхронизации для конечных пользователей.';
$l['off_panel_link'] = 'Отключить ссылку Панели управления';
$l['off_panel_link_exp'] = 'Это позволит отключить ссылку панели управления в док-станции для конечных пользователей.';
$l['chmod_conf_file'] = 'CHMOD Конфигурационных файлов';
$l['chmod_conf_file_exp'] = 'CHMOD Конфигурационных файлов сценариев будет установлен к этому значению. По умолчанию 0644. (Не изменяйте и оставить пустым, если вы не знаете!)';
$l['suphp_detected'] = 'suPHP Определение';
$l['no_prefill'] = 'Не заполнять имя каталога';
$l['no_prefill_exp'] = 'Не заполнять имя каталога со скриптами именем по умолчанию.';
$l['footer_link'] = 'Ссылка в подвале';
$l['footer_link_exp'] = 'Когда кто-то устанавливает скрипт, ссылка/текст будет вставлен в нижней части, установки';

$l['eu_email_off'] = 'Отключить уведомление конечного пользователя об обновлении на E-Mail'; 
$l['eu_email_off_exp'] = 'Если флажек установлен отправлять уведомление конечному пользователю о появлении обновления.'; 
$l['random_pass'] = 'Генерация случайных паролей для пользователей'; 
$l['random_pass_exp'] = 'Если выбрано, то случайно сгенерированный пароль администратора будет установлен во время установки.'; 
$l['off_demo_link'] = 'Отключить демо скриптов';
$l['off_demo_link_exp'] = 'Это позволит отключить демо для конечного пользователя.';
$l['off_rating_link'] = 'Выключить рейтинг скриптов';
$l['off_rating_link_exp'] = 'Это полностью выключит рейтинги для конечного пользователя.';
$l['off_review_link'] = 'Выключить отзывы о скриптах';
$l['off_review_link_exp'] = 'Это полностью выключит обзор для конечных пользователей.';
$l['off_screenshot_link'] = 'Отключить скриншоты';
$l['off_screenshot_link_exp'] = 'Это полностью выключит скриншоты для конечного пользователя.';
$l['random_dbprefix'] = 'Генерация случайных префиксов базы данных для пользователей';
$l['random_dbprefix_exp'] = 'Если включен, то будет выбран случайным образом префикс базы данных во время установки.';
$l['remote_mysql'] = 'Хост удаленной базы данных Mysql';
$l['remote_mysql_exp'] = 'Если вы хотите использовать удаленный MySQL сервер, укажите имя удаленного хоста или IP-';
$l['perl_scripts'] = 'Отключение PERL скриптов';
$l['perl_scripts_exp'] = 'Это позволит отключить PERL скрипты для конечного пользователя';
$l['show_top_scripts'] = 'Показать TOP скрипты';
$l['show_top_scripts_exp'] = 'Это покажет конечным пользователям TOP скрипты для удобного доступа и установки популярных скриптов. Чтобы отключить эту функцию, оставьте это поле <b>пустым</b>.';
$l['err_change_app_name'] = 'Произошла ошибка при изменении названия группы';
$l['user_mod_dir'] = 'Используйте USER MOD DIR';
$l['user_mod_dir_exp'] = 'Пользователи могут устанавливать скрипты на http://IP/~user';
$l['off_email_link'] = 'Отключить все сообщения на E-mail конечным пользователям.';
$l['off_email_link_exp'] = 'Это полностью выключит отправку E-mail для конечного пользователя, отправку электронных писем во время установки, удаления и т.д.';
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
$l['hide_dbprefix'] = 'Hide the Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
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