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

$l['err_cannot_autoupgrade'] = "このコントロールパネルでは、自動アップグレードができません。\n";
$l['err_invalid_param'] = "無効な因数です。 &soft-1;\n詳細は資料をご参照下さい。:\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "情報を入力して下さい。\n";
$l['err_no_insid'] = "インストールIDが入力されていません。\n";
$l['err_no_username'] = "ユーザー名が入力されていません。\n";
$l['err_no_such_user'] = "そのようなユーザーは発見されませんでした。\n";
$l['err_dont_provide_username'] = "ユーザー名は要求されていません。\n";
$l['err_no_softdir'] = "Softdirは発見されません&soft-1;\n";
$l['err_no_installation'] = " インストールIDのインストールは発見できませんでした。: &soft-1;\n";
$l['err_cant_upgrade'] = "このインスタレーションは既に最新バージョンか、もしくはこのスクリプトは自動アップグレードができません。\n";
$l['err_backup_fail'] = 'バックアップが成功しなかったため、アップグレードを中断しました。詳細は下記をご参照下さい。:';
$l['err_upgrade_restore_failed'] = 'インスタレーションのアップグレードおよびバックアップからの修復に失敗しました。詳細は下記をご参照下さい。:';
$l['err_upgrade_restore_success'] = 'インスタレーションのアップグレードに失敗しましたが、バックアップからの修復には成功しました。詳細は下記をご参照下さい。:';
$l['err_upgrade'] = 'インスタレーションのアップグレードに失敗しました。詳細は下記をご参照下さい。:';
$l['err_upgrade_req'] = ' このインスタレーションがアップグレードの要求に合致していないため、自動アップグレードができませんでした。詳細は下記をご参照下さい。:';
$l['err_could_not_posix'] = 'ユーザーを切り替えることができなかったため、プロセスを中断しました。';
$l['err_cant_upgrade_for_this_server'] = "allow_url_fopen() があなたのサーバーで無効になっているか、またはCURLがURLへのアクセスに失敗したことが原因の可能性があり、自動アップグレードは実行できません。外部のURLにアクセスできなかったため、プレアップグレードは失敗しました。\n ";
$l['err_auto_upgrade_req_fail'] = 'このインスタレーションは自動アップグレードの要求に合致しなかったため、自動アップグレードできませんでした。詳細は下記をご参照下さい。:';
$l['help'] = " Softaculousコマンド・ラインインターフェイスへようこそ。
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = "スクリプト名が入力されていません。\n";
$l['err_no_url'] = "インストールしたURLを入力して下さい。例：--url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "そのようなスクリプトは発見できませんでした。 - &soft-1;\n";
$l['import_success'] = "正常にインポートされました。\n";
$l['import_error'] = "下記のエラーが発生しています。: \n";
$l['err_no_path'] = "パスを入力して下さい。 --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "インポートしたユーティリティはこのスクリプトでは利用できません。\n";
$l['err_user_not_allowed'] = " インポートしたユーティリティはエンドユーザーには利用できません。\n";
$l['err_cant_load_docroots'] = "ドメインへのパスがロードできませんでした。\n";
$l['ins_available_for'] = " インスタレーションは下記ディレクトリに利用できます。:\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " インスタレーションは指定のパスで発見されました。インポートのため、以前のコマンドを実行して下さい。\n";
$l['imp_ins_exists'] = "このインスタレーションはすでに- &soft-1;のため、&soft-にインポートされています。;\n";
$l['upgraded_successfully'] = "アップグレードに成功しました。 \n";
$l['shellexec_disabled'] = 'shell_exec()は機能しません。';
$l['list_scripts'] = "下記のリストは、あなたのサーバーでは作動しないスクリプトのリストです。下記スクリプトは、最小限の要件を満たしていないため作動しません。";
$l['req_pass'] = "全てのスクリプトは、チェックに合格しなければなりません。";
$l['err_cannot_autobackup'] = "自動バックアップは、このコントロールパネルでは機能しません。\n";
$l['err_no_auto_backup'] = " 自動バックアップは、管理者により無効とされています。\n";
$l['err_update_record'] = ' '.APP." レコードのバージョンのアップデート中にエラーが発生しました。\n";
$l['suc_update_record'] = "".APP." レコードは&soft-1; から&soft-2; &soft-3;へ正常にアップデートされました。\n";
$l['show_real_version'] = "Real Version : &soft-1; -- Version as per ".APP." records : &soft-2; \n";
$l['no_outdated_ins'] = " 無効のインスタレーションは発見れませんでした。\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update ".APP." records\n";
$l['only_au_ins_note'] = "Note : Only installations that can be auto upgraded will be listed here\n";

$l['soft_license'] = APP." ライセンス";
$l['lic_type'] = "タイプ";
$l['num_users'] = "ユーザー数";
$l['licexpires'] = "失効日";
$l['primary_ip'] = "ライセンスIP";
$l['free'] = "無料";
$l['premium'] = "プレミアム";
$l['expired'] = "期限切れ";
$l['never'] = "Never";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';

?>


