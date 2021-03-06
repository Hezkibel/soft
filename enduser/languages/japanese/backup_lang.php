<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'インストールは送信されませんでした。';
$l['wrong_ins_title'] = 'インストールIDが間違っています。';
$l['wrong_ins'] = '送信されたインストールIDは存在しません。';
$l['backup_ftp_error'] = 'バックアップ・ディレクトリ<b>&soft-1;</b>を作成できませんでした。手動で再作成して下さい。';
$l['err_backup'] = 'バックアップを作成できませんでした。';
$l['no_space_backup'] = 'このインストールに必要な容量が不足しています。';
$l['err_notelength'] = 'バックアップの記録は255文字未満として下さい。';

$l['cant_backup_dir'] = 'バックアップ・ユーティリティではこのファイルをバックアップできません。';
$l['could_not_read'] = 'Softaculousでは次のファイル/ディレクトリの解読ができません。バックアップ・ユーティリティの使用を継続するために解読を可能にして下さい。';
$l['cant_datadir_dir'] = 'データ・ディレクトリの追加中にエラーが発生しました。';
$l['cant_wwwdir'] = 'ウェブ・ディレクトリの追加中にエラーが発生しました。';
$l['cant_backup_db'] = 'バックアップ用のデータベースを追加中にエラーが発生しました。';
$l['err_perm_file'] = '許可ファイルの作成中にエラーが発生しました。';
$l['err_dataperm_file'] = 'データ・ディレクトリの許可ファイルを作成中にエラーが発生しました。';
$l['err_wwwperm_file'] = 'ウェブ・ディレクトリの許可ファイルを作成中にエラーが発生しました。';
$l['save_dir_perms'] = '許可ファイルを保存できませんでした。';
$l['save_datadir_perms'] = 'データ・ディレクトリの許可ファイルを保存できませんでした。';
$l['save_www_perms'] = 'ウェブ・ディレクトリの許可ファイルを保存できませんでした。';
$l['cant_connect_mysql'] = 'データベースに接続できませんでした。データベースのユーザー名/パスワードを確認して下さい。ユーザー名/パスワードを変更した場合、変更内容をSoftaculous のインスタレーションにアップロードして下さい。';

//Theme Strings
$l['<title>'] = APP.'バックアップ';
$l['info'] = 'インフォメーション';
$l['ins_softname'] = 'ソフトウェア';
$l['ins_num'] = 'インスタレーション番号';
$l['ins_ver'] = 'バージョン';
$l['ins_time'] = 'インストール時間';
$l['ins_path'] = 'パス';
$l['ins_wwwdir'] = 'ウェブ・ディレクトリパス';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'データベース名';
$l['ins_dbuser'] = 'データベースユーザー';
$l['ins_dbpass'] = 'データベースパスワード';
$l['ins_dbhost'] = 'データベースのホスト名';
$l['backup_ins'] = 'インスタレーションのバックアップ';
$l['backup_dir'] = 'ディレクトリのバックアップ';
$l['backup_dir_exp'] = 'チェックした場合、すべてのフォルダーがバックアップされます。';
$l['backup_db'] = 'データベースのバックアップ';
$l['backup_db_exp'] = 'チェックした場合、データベースもバックアップされます。';
$l['backup_conf'] = 'データによってはバックアップに時間がかかる場合があります。バックアップ中は、本ウェブページを閉じたり、他のページへ移動しないで下さい。';
$l['backedup'] = 'バックアップは正常に作成されました。<a href="'.$globals['index'].'act=backups">Backups</a> page.<br />よりダウンロードできます。あなたのインスタレーションURLは、<a href="&soft-1;" target="_blank">&soft-1;</a>です。';
$l['backup_ins'] = 'インスタレーションのバックアップ';
$l['backup_datadir'] = 'データ・ディレクトリのバックアップ';
$l['backup_datadir_exp'] = 'チェックした場合、データ・ディレクトリが保存されます。';
$l['ins_datadir'] = 'データ・ディレクトリ';
$l['return'] = '概要へ戻る';
$l['ins_cron_command'] = 'Cron コマンド';
$l['backup_wwwdir'] = 'ウェブ・ディレクトリのバックアップ';
$l['backup_wwwdir_exp'] = 'チェックした場合、ウェブ・ディレクトリが保存されます。';
$l['checking_data'] = '送信されたデータのチェック';
$l['backingup_db'] = 'データベースのバックアップ';
$l['backingup_dir'] = 'ディレクトリのバックアップ';
$l['backingup_datadir'] = 'データ・ディレクトリのバックアップ';
$l['finishing_process'] = 'バックアップの終了';
$l['wait_note'] = '<b>注意:</b>この作業には3～4分ほどかかります。このページから離れることも可能です。
';
$l['backingup'] = 'バックアップはバックグラウンドに作成中です。バックアップ完了後、Ｅメールにてお知らせいたします。バックアップ完了後、<a href="'.$globals['index'].'act=backups">Backups</a> page.<br />よりダウンロード可能となります。あなたのインスタレーションURLは<a href="&soft-1;" target="_blank">&soft-1;</a>です。';
$l['check_email'] = 'バックアップの進捗状況はＥメールでご確認下さい。';
$l['prog_backingup'] = 'バックアップ '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'バックアップが完了しました。';
$l['backup_note'] = 'バックアップノート';
$l['backup_note_exp'] = '参照用としてノートを保存することができます。';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';

?>