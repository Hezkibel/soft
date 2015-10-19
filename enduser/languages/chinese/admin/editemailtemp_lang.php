<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editemailtemp_lang.php
//===========================================================
// SOFTACULOUS 
// 版本 : 4.0
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

$l['tempsub'] = '請提出主旨';
$l['tempcontent'] = '請提出內容樣板';

$l['<title>'] = '編輯電郵樣板';
$l['heading'] = '編輯電郵樣板';
$l['edittemp'] = '編輯電郵樣板';
$l['done'] = '電郵樣板已經成功儲存';
$l['savetemp'] = '儲存電郵樣板';
$l['subject'] = '主旨';
$l['content'] = '內容';
$l['reset_confirm'] = '您確定您要重設電郵樣板 ?';
$l['reset_template'] = '重設樣板';
$l['temp_overview'] = '樣板總覽';

$l['if_note'] = '<strong>注意</strong> : 您可以透過使用 IF 來使用一個可選變數 :<br /><strong>&lt;if $VARIABLE_NAME&gt;$VARIABLE_NAME&lt;/if&gt;</strong>';

// Installtion Variables Information
$l['mail_install_php_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝路徑<br />
<strong>$version</strong> : 版本<br />
<strong>$url</strong> : 連結<br />
<strong>$admin_url</strong> : 管理員連結<br />
<strong>$datadirectory</strong> : 資料資料夾<br />
<strong>$admin_username</strong> : 管理員使用者名稱<br />
<strong>$admin_pass</strong> : 管理員密碼<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$cron</strong> : Cron 指令<br />
<strong>$disable_notify_update</strong> : 更新通知<br />
<strong>$eu_auto_upgrade</strong> : 自動更新<br />
<strong>$auto_backup</strong> : 自動備份<br />
<strong>$auto_backup_rotation</strong> : 備份循環<br />
<strong>$time</strong> : 安裝時間';

// Clone Variables Information
$l['mail_clone_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$old_path</strong> : 原始的安裝包路徑<br />
<strong>$old_url</strong> : 原始的安裝包連結<br />
<strong>$path</strong> : 複製的安裝包路徑<br />
<strong>$version</strong> : 版本<br />
<strong>$url</strong> : 複製的安裝包連結<br />
<strong>$admin_url</strong> : 管理員連結<br />
<strong>$datadirectory</strong> : 資料資料夾<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$cron</strong> : Cron 指令<br />
<strong>$time</strong> : 安裝時間';

// Installtion Variables Information
$l['mail_install_js_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$version</strong> : 版本<br />
<strong>$url</strong> : 連結<br />
<strong>$disable_notify_update</strong> : 更新通知<br />
<strong>$auto_backup</strong> : 自動更新<br />
<strong>$auto_backup_rotation</strong> : 備份循環<br />
<strong>$time</strong> : 安裝時間';

// Installtion Variables Information
$l['mail_install_perl_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$version</strong> : 版本<br />
<strong>$url</strong> : 連結<br />
<strong>$admin_url</strong> : 管理員連結<br />
<strong>$datadirectory</strong> : 資料資料夾<br />
<strong>$wwwdir</strong> : 網頁資料夾<br />
<strong>$admin_username</strong> : 管理員名稱<br />
<strong>$admin_pass</strong> : 管理員密碼<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$cron</strong> : Cron 指令<br />
<strong>$disable_notify_update</strong> : 更新通知<br />
<strong>$auto_backup</strong> : 自動更新<br />
<strong>$auto_backup_rotation</strong> : 備份循環<br />
<strong>$time</strong> : 安裝時間';

// Removal Variables
$l['mail_remove_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$version</strong> : 版本<br />
<strong>$url</strong> : 連結<br />
<strong>$datadirectory</strong> : 資料資料夾<br />
<strong>$wwwdir</strong> : 網頁資料夾<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$cron</strong> : Cron 指令<br />
<strong>$time</strong> : 安裝時間<br />
<strong>$rem_time</strong> : Removal Time';

// Outdated Insatllation Variables (FROM ADMIN)
$l['mail_update_info'] = '您可以使用以下變數 :<br />
<strong>$serverip</strong> : 伺服器 IP<br />
<strong>$installation</strong> : 安裝列表<br />
<strong>$time</strong> : 時間';

// Outdated Insatllation Variables (FROM CRON)
$l['mail_cron_info'] = '您可以使用以下變數 :<br />
<strong>$serverip</strong> : 伺服器 IP<br />
<strong>$installation</strong> : 列出可以被更新的安裝包<br />
<strong>$time</strong> : 時間

';

// Edit detail Variables
$l['mail_editdetail_info'] = '您可以使用以下變數 :<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 連結<br />
<strong>$datadirectory</strong> : 資料資料夾<br />
<strong>$wwwdir</strong> : 網頁資料夾<br />
<strong>$wwwurl</strong> : 網頁連結<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$auto_backup</strong> : 自動更新<br />
<strong>$auto_backup_rotation</strong> : 備份循環<br />
<strong>$time</strong> : 安裝時間<br />
<strong>$edit_time</strong> : 修改時間
';

// Edit detail Variables
$l['mail_backup_info'] = '您可以使用以下變數 :<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 連結<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$backup_file</strong> : 網頁資料夾<br />
<strong>$error</strong> : 網頁連結<br />
';

// Backup Email variables
$l['mail_backup_info'] = '您可以使用以下變數 :<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 連結<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$backup_file</strong> : 網頁資料夾<br />
<strong>$error</strong> : 網頁連結<br />
<strong>$backup_note</strong> : 備份筆記<br />
';

// Backup Failed Email variables
$l['mail_backup_fail_info'] = '您可以使用以下變數 :<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 連結<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$backup_file</strong> : 網頁資料夾<br />
<strong>$error</strong> : 網頁連結<br />
';

// Successfully Cli Upgraded by Admin
$l['mail_adminupgrade_success_admin_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$url</strong> : 連結<br />
<strong>$oldversion</strong> : 目前版本<br />
<strong>$version</strong> : 最新版本<br />
<strong>$user</strong> : 名稱<br />
<strong>$backup_path</strong> : Backup 路徑<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$dbname</strong> : MySQL 資料庫<br />
<strong>$dbuser</strong> : MySQL 資料庫使用者<br />
<strong>$dbhost</strong> : MySQL 資料庫域名<br />
<strong>$dbpass</strong> : MySQL 資料庫密碼<br />
<strong>$error</strong> : 還原錯誤列表<br />
<strong>$upgrade_error</strong> : 更新錯誤列表<br />
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

$l['mail_autoupgrade_backup_fail_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$url</strong> : 連結<br />
<strong>$oldversion</strong> : 目前版本<br />
<strong>$version</strong> : 最新版本<br />
<strong>$user</strong> : 名稱<br />
<strong>$error</strong> : List of Errors<br />
';

$l['mail_autoupgrade_precheck_fail_info'] = $l['mail_autoupgrade_backup_fail_info'];

// Auto backup successful Variables
$l['mail_auto_backup_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 安裝包連結<br />
<strong>$backup_file</strong> : 備份路徑<br />
';

// Auto backup failed Variables
$l['mail_auto_backup_fail_info'] = '您可以使用以下變數 :<br />
<strong>$scriptname</strong> : 語法名稱<br />
<strong>$path</strong> : 安裝包路徑<br />
<strong>$url</strong> : 安裝包連結<br />
<strong>$backup_file</strong> : 備份路徑<br />
<strong>$error</strong> : 錯誤列表<br />
';

?>