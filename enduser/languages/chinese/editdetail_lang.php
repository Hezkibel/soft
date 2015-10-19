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

$l['no_ins'] = '沒有指定的安裝包';
$l['wrong_ins_title'] = '錯誤的安裝包 ID';
$l['wrong_ins'] = '您所送出的安裝包 ID 不存在';
$l['cant_remove_dir'] = '資料夾無法從家目錄移除. 請取消選擇 <b>移除資料夾</b> 選項來繼續並去除移除資料夾的動作.';
$l['no_dir'] = '安裝包的資料夾並不存在 !';
$l['no_datadir'] = '資料資料夾並不存在 !';
$l['no_wwwdir'] = '網頁資料架並不存在 !';
$l['wrong_url'] = '連結與資料夾的名稱不符合';
$l['wrong_wwwurl'] = '網頁連結與網頁資料夾名稱不符合';
$l['err_mysql_user'] = 'MySQL 使用者名稱或密碼或資料庫域名是錯誤的或是網際網路無法為失去連線的.';
$l['err_mysql_db'] = 'MySQL 資料庫名稱是錯誤的導致資料庫無法被選擇.';
$l['mail_path'] = '路徑';
$l['mail_url'] = '連結';
$l['mail_db'] = 'MySQL 資料庫';
$l['mail_dbuser'] = 'MySQL 資料庫使用者';
$l['mail_dbhost'] = 'MySQL 資料庫域名';
$l['mail_dbpass'] = 'MySQL 資料庫密碼';
$l['mail_time'] = '安裝時間';
$l['mail_editdetail_time'] = '修改時間';
$l['mail_subject'] = '&soft-1; 的詳細修改資料';
$l['mail_cron_command'] = 'CRON 工作';
$l['mail_datadir'] = '資料資料夾';
$l['mail_wwwdir'] = '網頁資料夾';
$l['mail_wwwurl'] = '網頁資料夾連結';

//Theme Strings
$l['<title>'] = APP.' - 編輯詳細資訊';
$l['info'] = '資訊';
$l['ins_softname'] = '語法';
$l['ins_num'] = '安裝號碼';
$l['ins_ver'] = '版本';
$l['ins_time'] = '安裝時間';
$l['ins_path'] = '路徑';
$l['ins_url'] = '連結';
$l['ins_admin_url'] = '管理員連結';
$l['ins_db'] = '資料庫名稱';
$l['ins_dbuser'] = '資料庫使用者';
$l['ins_dbpass'] = '資料庫密碼';
$l['ins_dbhost'] = '資料庫域名';
$l['ins_datadir'] = '資料資料夾';
$l['ins_wwwdir'] = '網頁資料夾';
$l['ins_wwwurl'] = '網頁資料夾連結';
$l['ins_cron_command'] = 'Cron 指令';
$l['details_edited'] = '安裝包資訊已經成功修改';
$l['version_edited'] = '版本已經更新於記錄.';
$l['return'] = '回到總攬';

$l['edit_ins'] = '編輯安裝包詳細資訊';
$l['edit_dir'] = '資料夾';
$l['edit_datadir'] = '資料資料夾';
$l['edit_db'] = '資料庫名稱';
$l['edit_dbuser'] = '資料庫使用者';
$l['edit_dbpass'] = '資料庫密碼';
$l['edit_dbhost'] = '資料庫域名';
$l['edit_url'] = '連結';
$l['editins'] = '編輯安裝包詳細資訊';
$l['mail_editdetail_ins'] = '安裝包 &soft-1; 已經被修改. 以下為安裝包的修改資訊 : ';
$l['edit_wwwdir'] = '網頁資料夾';
$l['edit_wwwurl'] = '網頁資料夾連結';
$l['disable_notify_update'] = '取消更新通知';
$l['exp_disable_notify_update'] = '如果選擇這個選項將不會寄送任何有關於可用更新的電子郵件有關於這個安裝包.';
$l['alreadyupdated'] = '嗯 ... 看來實際的安裝包版本以及 <b>&soft-1;</b> 不是 <b>&soft-2;</b>. <br />點選此處來更新 '.APP.' 紀錄.';
$l['edit_acc_detail'] = '編輯管理員帳號詳細資訊';
$l['eu_auto_upgrade'] = '自動更新';
$l['exp_eu_auto_upgrade'] = '如果這個選項選擇了, 這個語法將會自動安裝當有新的版本釋出時.';
$l['auto_backup'] = '自動安裝';
$l['exp_auto_backup'] = APP.' 將會自動安裝透過 CRON 所設定的時間檢查';
$l['auto_backup_rotation'] = '巡迴備份';
$l['exp_auto_backup_rotation'] = '如果啟用備份巡迴限制,  '.APP.' 將會刪除最老舊的備份檔案並創建一個新的. 備份將會利用您的空間來選擇一個備份巡迴的限制於您的伺服器';
$l['no_backup'] = '不要備份';
$l['daily'] = '每日一次';
$l['weekly'] = '每周一次';
$l['monthly'] = '每月一次';
$l['unlimited'] = '無限制';

$l['ins_details'] = 'Installation Details';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
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