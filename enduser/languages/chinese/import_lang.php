<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = '找不到 INFO.XML 檔案! 請回報本訊息給伺服器管理員.';
$l['incompatible'] = '這個軟體需要更高版本的 '.APP.'! 請回報本訊息給伺服器管理員.';
$l['no_functions'] = '找不到 IMPORT FUNCTIONS! 請回報本訊息給伺服器管理員.';
$l['no_softdomain'] = '您還沒指定域名來匯入軟體.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = '匯入軟體';
$l['choose_domain'] = '選擇域名';
$l['choose_domain_exp'] = '請選擇已經安裝本軟體的域名.';
$l['in_directory'] = '在資料夾裡';
$l['in_directory_exp'] = '資料夾是相對於您的域名. 例如: 匯入的軟體安裝於 http://mydomain/dir/ 只需要輸入 <b>dir</b>.只需要安裝於 http://mydomain/ 請留空.';
$l['softsubmit'] = '匯入';
$l['congrats'] = '恭喜, 軟體已經成功匯入';
$l['succesful'] = '已經成功匯入於';
$l['admin_url'] = '管理員連結';
$l['enjoy'] = '我們希望匯入程序是簡單的.';
$l['import_notes'] = '以下是一些重要的注意事項. 我們非常建議您閱讀他們 ';
$l['please_note'] = '<b>注意</b>: Softaculous 只是一個自動安裝器, 不需負責任何其他個別的安裝程序. 請瀏覽該語法供應商的網站獲取支援!';
$l['regards'] = '誠摯的';
$l['softinstaller'] = 'Softaculous 自動安裝器';
$l['return'] = '回到總覽';


$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>