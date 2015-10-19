<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "自動安裝無法於這個管理介面運行.\n";
$l['err_invalid_param'] = "錯誤的 &soft-1; 參數\n請閱讀以下連結的說明事項 :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "請提供一些輸入.\n";
$l['err_no_insid'] = "沒有提供安裝包ID.\n";
$l['err_no_username'] = "沒有提供用戶名稱.\n";
$l['err_no_such_user'] = "找不到用戶.\n";
$l['err_dont_provide_username'] = "不需要用戶名稱.\n";
$l['err_no_softdir'] = "找不到用戶的語法資料夾 &soft-1;\n";
$l['err_no_installation'] = "沒有找到任何安裝包於這個安裝包ID : &soft-1;\n";
$l['err_cant_upgrade'] = "這個語法已經是最新的或是這個語法不支援自動更新.\n";
$l['err_backup_fail'] = '備份沒有順利進行因此停止升級程序. 以下為詳細資訊 :';
$l['err_upgrade_restore_failed'] = '錯誤的升級安裝包然後也錯誤的還原過去的備份檔案. 以下為詳細資訊 :';
$l['err_upgrade_restore_success'] = '錯誤的升級安裝包但是成功還原了過去的備份檔案. 以下為詳細資訊 :';
$l['err_upgrade'] = '錯誤的升級安裝包. 以下為詳細資訊 :';
$l['err_upgrade_req'] = '這個安裝包與更新需求沒有見識. 因此其無法被自動安裝. 以下為詳細資訊 :';
$l['err_could_not_posix'] = '無法切換用戶因此中斷程序...';
$l['err_cant_upgrade_for_this_server'] = "這個預先的升級檢測無法進行因為以下的連結無法被存取.\n 有可能是 allow_url_fopen() 於您的伺服器關閉或 CURL 錯誤的存取連結. 因此自動安裝無法被進行.";
$l['err_auto_upgrade_req_fail'] = '這個安裝包與更新需求沒有見識. 因此其無法被自動安裝. 以下為詳細資訊 :';
$l['help'] = '歡迎來到 Softaculous 終端機介面.
可用命令 : \n\t
--install\t 來安裝語法.
--upgrade\t 來升級已安裝的語法.
--import\t 來匯入已存在的語法進入 Softaculous.\n
需要支援請聯絡我們於 : support@softaculous.com
';
$l['err_no_script'] = "沒有提供語法名稱.\n";
$l['err_no_url'] = "請提供URL在安裝中製作出來的, 例如 --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "糟了! 找不到語法的名稱 - &soft-1;\n";
$l['import_success'] = "成功匯入!\n";
$l['import_error'] = "以下的錯誤發生了 : \n";
$l['err_no_path'] = "請提供路徑. 例如 --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "匯入工具不支援本語法\n";
$l['err_user_not_allowed'] = "匯入工具不可由 Enduser 利用\n";
$l['err_cant_load_docroots'] = "無法載入路徑至域名\n";
$l['ins_available_for'] = " 個安裝包可於下列目錄中使用 :\n";// 保留起始的空格
$l['ins_found_at_path'] = " 安裝包在指定的路徑中找到.\n 執行前一個指令並加上 --r 來匯入.\n";
$l['imp_ins_exists'] = "安裝包已經成功匯入至 - &soft-1;\n;";
$l['upgraded_successfully'] = "更新成功 \n";
$l['shellexec_disabled'] = 'shell_exec() 是關閉的';
$l['list_scripts'] = "\n以下語法可能無法於您的伺服器運行.\n因為其沒有見識到最小的語法需求";
$l['req_pass'] = "所有語法需要檢查通過.";
$l['err_cannot_autobackup'] = "自動安裝無法於這個管理介面運行.\n";
$l['err_no_auto_backup'] = "管理員已經取消自動更新.\n";

$l['soft_license'] = APP." 通行證";
$l['lic_type'] = "類型";
$l['num_users'] = "用戶數量";
$l['licexpires'] = "到期日";
$l['primary_ip'] = "通行證 IP";
$l['free'] = "免費";
$l['premium'] = "付費";
$l['expired'] = "過期";
$l['never'] = "永遠沒有";

$l['err_update_record'] = 'An error occured while updating version in '.APP.' records
';
$l['suc_update_record'] = 'Updated '.APP.' records successfully from &soft-1; to &soft-2; for &soft-3;
';
$l['show_real_version'] = 'Real Version : &soft-1; -- Version as per '.APP.' records : &soft-2; 
';
$l['no_outdated_ins'] = 'No Outdated instllation(s) found.
';
$l['edit_detail_options'] = '
--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update '.APP.' records
';
$l['only_au_ins_note'] = 'Note : Only installations that can be auto upgraded will be listed here
';
$l['no_panels'] = 'Removing scripts from CLI is possible only on cPanel or Webuzo.
';
$l['no_input'] = 'Please provide required input.
';
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = 'Script Name 	 Script Installation ID 
';
$l['no_installation'] = 'No installations were found on your server.
';
$l['err_remove'] = 'Remove installation Failed.
';
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
?>
