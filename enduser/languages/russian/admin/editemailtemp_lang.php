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

$l['tempsub'] = 'Пожалуйста, укажите тему';
$l['tempcontent'] = 'Пожалуйста, добавьте содержимое для шаблона';

$l['<title>'] = 'Изменить шаблон Email';
$l['heading'] = 'Изменить шаблон Email';
$l['edittemp'] = 'Изменить шаблон Email';
$l['done'] = 'Шаблон Email успешно сохранен.';
$l['savetemp'] = 'Сохранить шаблон Email';
$l['subject'] = 'Тема';
$l['content'] = 'Содержимое';
$l['reset_confirm'] = 'Вы действительно хотите сбросить настройки шаблона Email?';
$l['reset_template'] = 'Reset Template';
$l['temp_overview'] = 'Templates Overview';

$l['if_note'] = '<strong>Примечание</strong> : You can use an IF for an Optional Variable in the following manner :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$scriptname</strong> : Имя скрипта<br />
<strong>$path</strong> : Путь<br />
<strong>$version</strong> : Версия<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Каталог данных<br />
<strong>$admin_username</strong> : Админ логин<br />
<strong>$admin_pass</strong> : Админ пароль<br />
<strong>$dbname</strong> : MySQL база данных<br />
<strong>$dbuser</strong> : MySQL БД Пользователь<br />
<strong>$dbhost</strong> : MySQL БД Хост<br />
<strong>$dbpass</strong> : MySQL БД Пароль<br />
<strong>$cron</strong> : Cron Задание<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$eu_auto_upgrade</strong> : Auto Upgrade<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Установлено<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Clone Variables Information
$l['mail_clone_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$old_path</strong> : Original Installation Path<br />
<strong>$old_url</strong> : Original Installation URL<br />
<strong>$path</strong> : Cloned Installation Path<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : Cloned Installation URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Data Directory<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$cron</strong> : Cron Command<br />
<strong>$time</strong> : Time of Installation<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Installtion Variables Information
$l['mail_install_js_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$scriptname</strong> : Имя скрипта<br />
<strong>$path</strong> : Путь<br />
<strong>$version</strong> : Версия<br />
<strong>$url</strong> : URL<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Установлено<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Installtion Variables Information
$l['mail_install_perl_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$scriptname</strong> : Имя скрипта<br />
<strong>$path</strong> : Путь<br />
<strong>$version</strong> : Версия<br />
<strong>$url</strong> : URL<br />
<strong>$admin_url</strong> : Admin URL<br />
<strong>$datadirectory</strong> : Каталог данных<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$admin_username</strong> : Админ Имя<br />
<strong>$admin_pass</strong> : Админ Пароль<br />
<strong>$dbname</strong> : MySQL База Данных<br />
<strong>$dbuser</strong> : MySQL БД Пользователь<br />
<strong>$dbhost</strong> : MySQL БД Хост<br />
<strong>$dbpass</strong> : MySQL БД Пароль<br />
<strong>$cron</strong> : Cron Задание<br />
<strong>$disable_notify_update</strong> : Update Notification<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Установлено<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Removal Variables
$l['mail_remove_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Путь<br />
<strong>$version</strong> : Version<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Каталог данных<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$dbname</strong> : MySQL База Данных<br />
<strong>$dbuser</strong> : MySQL БД Пользователь<br />
<strong>$dbhost</strong> : MySQL БД Хост<br />
<strong>$dbpass</strong> : MySQL БД Пароль<br />
<strong>$cron</strong> : Cron Задание<br />
<strong>$time</strong> : Установлено<br />
<strong>$rem_time : Removal Time</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$serverip</strong> : IP сервера<br />
<strong>$installation</strong> : Список установки<br />
<strong>$time</strong> : Time<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$serverip</strong> : IP сервера<br />
<strong>$installation</strong> : Список установок, которые сейчас могут быть обновлены<br />
<strong>$time</strong> : Time<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)

';

// editdetail Variables
$l['mail_editdetail_info'] = 'Вы можете использовать следующие переменные :<br />
<strong>$path</strong> : Путь<br />
<strong>$url</strong> : URL<br />
<strong>$datadirectory</strong> : Каталог данных<br />
<strong>$wwwdir</strong> : Web Directory<br />
<strong>$wwwurl</strong> : Web URL<br />
<strong>$dbname</strong> : MySQL База Данных<br />
<strong>$dbuser</strong> : MySQL БД Пользователь<br />
<strong>$dbhost</strong> : MySQL БД Хост<br />
<strong>$dbpass</strong> : MySQL БД Пароль<br />
<strong>$auto_backup</strong> : Automated Backups<br />
<strong>$auto_backup_rotation</strong> : Backup Rotation<br />
<strong>$time</strong> : Установлено<br />
<strong>$edit_time : Изменить время</strong><br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Edit detail Variables
$l['mail_backup_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Backup Email variables
$l['mail_backup_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$backup_note</strong> : Backup Note<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : URL<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$backup_file</strong> : Web Directory<br />
<strong>$error</strong> : Web URL<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Successfully Cli Upgraded by Admin
$l['mail_adminupgrade_success_admin_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Current Version<br />
<strong>$version</strong> : Latest Version<br />
<strong>$user</strong> : Username<br />
<strong>$backup_path</strong> : Backup Path<br />
<strong>$path</strong> : Installation Path<br />
<strong>$dbname</strong> : MySQL Database<br />
<strong>$dbuser</strong> : MySQL DB User<br />
<strong>$dbhost</strong> : MySQL DB Host<br />
<strong>$dbpass</strong> : MySQL DB Password<br />
<strong>$error</strong> : List of Restore Errors<br />
<strong>$upgrade_error</strong> : List of Upgrade Errors<br />
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

$l['mail_autoupgrade_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$url</strong> : URL<br />
<strong>$oldversion</strong> : Current Version<br />
<strong>$version</strong> : Latest Version<br />
<strong>$user</strong> : Username<br />
<strong>$error</strong> : List of Errors<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Auto backup successful Variables
$l['mail_auto_backup_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$backup_file</strong> : Backup Path<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

// Auto backup failed Variables
$l['mail_auto_backup_fail_info'] = 'You can use the following Variables :<br />
<strong>$scriptname</strong> : Script Name<br />
<strong>$path</strong> : Installation Path<br />
<strong>$url</strong> : Installation URL<br />
<strong>$backup_file</strong> : Backup Path<br />
<strong>$error</strong> : List of Errors<br />
<strong>$sn</strong> : Site Name (Can be changed from Softaculous Admin panel -> Settings)
';

?>