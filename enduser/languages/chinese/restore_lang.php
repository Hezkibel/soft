<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = '在解壓縮檔案時發生了錯誤';
$l['restoredatadir'] = '無法還原資料資料夾';
$l['restorewww'] = '無法還原網頁資料夾';
$l['res_err_selectmy'] = '無法選擇需要還原的資料庫';
$l['err_myconn'] = '無法連結到資料庫';
$l['err_db_create'] = '在建立資料庫時發生錯誤';

//Theme Strings
$l['<title>'] = APP.' - 還原';
$l['restorefile'] = '從備份中還原';
$l['restore_dir'] = '還原資料夾';
$l['restore_dir_exp'] = '如果您選取了這個,將會還原整個資料夾';
$l['restore_datadir'] = '還原資料資料夾';
$l['restore_datadir_exp'] = '如果選取了這個,資料將會還原';
$l['restore_db'] = '還原資料夾';
$l['restore_db_exp'] = '如果選取了這個,資料庫也會被還原';
$l['restore_ins'] = '還原安裝';
$l['restore'] = '您的備份已經成功還原';
$l['confirm_restore'] = '您確定您要還原安裝嗎 ?';
$l['return'] = '回到總攬';
$l['restore_wwwdir'] = '還原網頁資料夾';
$l['restore_wwwdir_exp'] = '如果選取了這個,將會還原網頁資料夾';
$l['checking_data'] = '正在檢查送出的資料';
$l['res_db'] = '正在還原資料庫';
$l['res_dir'] = '正在還原資料夾';
$l['res_datadir'] = '正在還原資料資料夾';
$l['finishing_process'] = '備份已經被還原';
$l['wait_note'] = '<b>注意:</b> 這將會用到3至4分鐘. 請不要離開這個網頁直到處理程序達到100%';
$l['restoring'] = '您的備份已經在後台運行. 完成時您將會收到電郵通知.';
$l['prog_restoring'] = '還原中 '; // Dont remove the trailing space
$l['prog_restore_complete'] = '還原完成.';

$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>