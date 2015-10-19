<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdomain_lang.php
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

$l['no_domain'] = 'ドメイン名が特定されていません。';
$l['alreay_exists'] = '送信されたドメインは既に存在しています。';
$l['no_ftp_user'] = ' FTPユーザーが特定されていません。';
$l['no_ftp_pass'] = ' FTPパスワードが特定されていません。';
$l['no_ftp_path'] = ' FTPパスが特定されていません。';
$l['no_data_dir'] = 'データ・ディレクトリが特定されていません。';
$l['wrong_ftp_path'] = '送信されたFTPパスは正確ではありません。また、与えられたドメインを提示していません。';
$l['no_id'] = 'IDを発見できませんでした。';
$l['no_backup_path'] = 'バックアップのパスが特定されていません。';
$l['ftp_error-1'] = 'ドメイン名を決定することができませんでした。';
$l['ftp_error-2'] = '指定されたFTPではログインすることができませんでした。';
$l['ftp_error-3'] = '指定されたFTPのパスは存在しません。';
$l['no_port'] = 'ポートが指定されていません。';
$l['no_pub_allowed'] = '使用中パスワードの認証中は、公開キーは必要ありません。';
$l['no_public_key'] = '公開キーへのパスは発見されませんでした。';
$l['no_private_key'] = 'プライベート・キーへのパスは発見されませんでした。';
$l['err_sftp_only'] = ' SFTPに限り、キーによる認証が可能です。';
$l['no_pub_pri'] = '公開またはプライベート・キーが発見されませんでした。';
$l['no_domain_exist'] = 'The domain does not exist';
$l['not_allowed'] = 'You are not allowed to edit this domain';

//Theme Strings
$l['<title>'] = 'ドメインの編集';
$l['edit_domain'] = 'ドメインの編集';
$l['domain'] = 'ドメイン名';
$l['domain_exp'] = '有効なドメイン名を入力して下さい（http://は省略して下さい。例：mydomain.com）。';
$l['ftp_user'] = 'FTPユーザー';
$l['ftp_user_exp'] = 'あなたのFTPアカウントのユーザー名です。';
$l['ftp_pass'] = 'FTPパスワード';
$l['ftp_pass_exp'] = 'あなたのFTPアカウントのパスワードです。';
$l['ftp_path'] = 'FTPパス';
$l['ftp_path_exp'] = 'ユーザーのアクセス可能なウェブ・ディレクトリに関連するパスです（例：/public_html）。';
$l['backup_path'] = 'バックアップ・パス';
$l['backup_path_exp'] = 'ユーザーのホームディレクトリからのパスに関連するパスです（例：/backups）。';
$l['data_dir'] = 'データ・ディレクトリ';
$l['data_dir_exp'] = 'データ・ディレクトリへのフルパスです（例：/home/USER/datadir）。<br/> ElggやMoodleなどの一部のスクリプトは、ウェブアクセスが不可のフォルダである必要があります。<br/> これらは特定の目的に使用されます。';
$l['ins_email_exp'] = 'ソフトウェアを新規インストールした際に、セットアップ内容をＥメールで送信します。';
$l['submit_edit'] = '保存とアップデート';
$l['settings_saved'] = 'あなたのドメインは正常に保存されました。';
$l['show_all_dom'] = '全てのドメインを表示する。';
$l['port'] = 'ポート';
$l['port_exp'] = '接続するポートを入力する。';
$l['protocol'] = 'プロトコル';
$l['protocol_exp'] = 'Softaculousが通信するためのプロトコルを選択する。';
$l['auth_password'] = 'パスワードまたは公開キーを使用して認証する。';
$l['auth_password_exp'] = 'パスワード認証をする場合は、チェックボックスを選択して下さい。';
$l['public_key'] = '公開キー';
$l['public_key_exp'] = '公開キーへのパスです。';
$l['private_key'] = 'プライベート・キー';
$l['private_key_exp'] = 'プライベート・キーへのパスです。';
$l['passphrase'] = 'パスフレーズ';
$l['passphrase_exp'] = '暗号化したプライベート・キーのためのパスフレーズです（任意）。';
$l['sftp_path'] = 'ウェブ・ディレクトリ';
$l['sftp_path_exp'] = 'ユーザーのウェブ・ディレクトリへの絶対パスです（例：/home/USERNAME/public_html）。';
$l['sbackup_path_exp'] = 'バックアップ・ディレクトリへの絶対パスです（例：/home/USERNAME/backups）。';
$l['server_host'] = 'Server Host (Optional)';
$l['server_host_exp'] = '<b>IF</b> your domain name and server host are not the same enter the server host e.g. ftp.mydomain.com';

?>
