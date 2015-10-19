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

$l['no_info_file'] = 'インフォメーションのファイルを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['incompatible'] = 'ソフトウェアが、'.APP.'の新しいバージョンを要求しています。サーバー管理者へ報告して下さい。';
$l['no_functions'] = ' インポート機能のファイルを発見できませんでした。サーバー管理者へ報告して下さい。';
$l['no_softdomain'] = 'ソフトウェアインポート用のドメインを選択していません。';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'ソフトウェアのインポート';
$l['choose_domain'] = 'ドメインの選択';
$l['choose_domain_exp'] = 'インストール済みソフトウェアのドメインを選択して下さい。';
$l['in_directory'] = 'ディレクトリ';
$l['in_directory_exp'] = 'ディレクトリはあなたのドメインに関連します（例：http://mydomain/dir/でインストールされたソフトウェアをインポートする場合は<b>dir</b>を入力し、http://mydomain/でインストールされたソフトウェアをインポートする場合は空欄のままとします）。';
$l['softsubmit'] = 'インポート';
$l['congrats'] = 'ソフトウェアは正常にインポートされました。';
$l['succesful'] = 'で正常にインポートされました。';
$l['admin_url'] = '管理者のURL';
$l['enjoy'] = '';
$l['import_notes'] = '以下、重要な情報となりますので、一読することをお勧めします。: ';
$l['please_note'] = '<b>注意</b>: Softaculousは自動インストーラーのため、ソフトウェアに対するサポートは行っておりません。サポートが必要な場合は、スクリプトもしくはソフトウェアのウェブサイトをご参照下さい。';
$l['regards'] = '注意';
$l['softinstaller'] = 'Softaculous自動インストーラー';
$l['return'] = '概要へ戻る';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>

