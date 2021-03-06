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

$l['no_ins'] = 'Не беше представен инсталация';
$l['wrong_ins_title'] = 'Грешен инсталационен идентификатор';
$l['wrong_ins'] = 'Инсталационният идентификатор сте попълнили не съществува';
$l['cant_remove_dir'] = 'Директорията не може да бъде премахната, тъй като е собствена директория. Моля махнете опцията <b>Изтрий директория</b> да продължи, без да се отстранява в директорията.';
$l['no_dir'] = 'Инсталационната директория не съществува!';
$l['no_datadir'] = 'Директорията с данни не съществува!';
$l['no_wwwdir'] = 'Уеб директорията не съществува!';
$l['wrong_url'] = 'URL адресът и името на директорията не съвпадат';
$l['wrong_wwwurl'] = 'Уеб адрес и име на уеб директорията не съвпадат';
$l['err_mysql_user'] = 'Потребителско име или парола на MySQL е грешно, тъй като връзката не може да бъде установена.';
$l['err_mysql_db'] = 'Име на база данни MySQL е неправилно, тъй като базата данни не може да бъде избран.';
$l['mail_path'] = 'Директория';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL база данни';
$l['mail_dbuser'] = 'MySQL база данни потребител';
$l['mail_dbhost'] = 'MySQL база данни хост';
$l['mail_dbpass'] = 'MySQL база данни парола';
$l['mail_time'] = 'Време на инсталирането';
$l['mail_editdetail_time'] = 'Време на промяната';
$l['mail_subject'] = 'Модифицирани детайли за инсталиране на &soft-1;';
$l['mail_cron_command'] = 'CRON Job';
$l['mail_datadir'] = 'Директория с данни';
$l['mail_wwwdir'] = 'Уеб директория';
$l['mail_wwwurl'] = 'Уеб директория URL';

//Theme Strings
$l['<title>'] = APP.' - Промени детайл';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'Информация';
$l['ins_softname'] = 'Софтуер';
$l['ins_num'] = 'Инсталационен номер';
$l['ins_ver'] = 'Версия';
$l['ins_time'] = 'Време на инсталацията';
$l['ins_path'] = 'Директория';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'База данни име';
$l['ins_dbuser'] = 'База данни потребител';
$l['ins_dbpass'] = 'База данни парола';
$l['ins_dbhost'] = 'База данни хост';
$l['ins_datadir'] = 'Директория с данни';
$l['ins_wwwdir'] = 'Уеб директория';
$l['ins_wwwurl'] = 'Уеб директория URL';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'Информация за инсталиране редактирана успешно';
$l['version_edited'] = 'The version has been updated in our records.';
$l['return'] = 'Назад към преглед';

$l['edit_ins'] = 'Редактиране на информация за инсталиране';
$l['edit_dir'] = 'Директория';
$l['edit_datadir'] = 'Директория с данни';
$l['edit_db'] = 'База данни име';
$l['edit_dbuser'] = 'База данни потребител';
$l['edit_dbpass'] = 'База данни парола';
$l['edit_dbhost'] = 'Database Host';
$l['edit_url'] = 'URL';
$l['editins'] = 'Редактиране на информация за инсталиране';
$l['mail_editdetail_ins'] = 'Информация за инсталиране на &soft-1; е бил променен. Следва модифициране на детайли на инсталацията: ';
$l['edit_wwwdir'] = 'Уеб директория';
$l['edit_wwwurl'] = 'Уеб директория URL';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['edit_acc_detail'] = 'Edit Admin Account Details';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'If checked, this installation will be automatically upgraded to the latest version when a new version is available.';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
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