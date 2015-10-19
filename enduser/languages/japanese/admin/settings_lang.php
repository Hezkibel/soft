<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
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

$l['no_path'] = 'パスがありません。';
$l['wrong_path'] = '指定されたパスでuniversal.phpを検索できませんでした。 ';
$l['no_softscripts'] = 'スクリプト/ソフトウェアのパスの位置が指定されていません。';
$l['wrong_softscripts'] = 'スクリプト/ソフトウェアのパスが間違っています。';
$l['no_sn'] = 'サイト名が指定されていません。';
$l['no_cookie_name'] = 'クッキーの名称が指定されていません。';
$l['no_soft_email'] = 'Ｅメールアドレスが指定されていません。';
$l['wrong_soft_email'] = 'あなたが指定した管理者用Ｅメールアドレスは無効です。';
$l['wrong_from_email'] = 'あなたが送信したFrom Ｅメールアドレスは無効にです。 ';
$l['no_license'] = 'ライセンスキーが送信されていません。';
$l['no_lang'] = '言語が指定されていません。';
$l['wrong_lang'] = '指定された言語は無効です。';
$l['no_theme_folder'] = 'テーマが選択されていません。';
$l['wrong_theme_folder'] = '選択されたテーマは無効です。';
$l['no_timezone'] = '時間帯が選択されていません。';
$l['wrong_timezone'] = '選択された時間帯は無効です。';
$l['no_cron_time'] = ' cron job が指定されていません。';
$l['no_off_message'] = '無効にするサブジェクトが指定されていません。';
$l['no_off_subject'] = '無効にするメッセージが指定されていません。';
$l['saving_error'] = '設定の保存中にエラーが発生しました。';
$l['no_update'] = 'アップデートの実行が送信されていません。';
$l['invalid_update'] = '無効なアップデートの実行が送信されました。';
$l['no_protocol'] = 'プロトコルが選択されていません。';
$l['wrong_protocol'] = '選択されたプロトコルは無効です。';
$l['wrong_network_interface'] = '選択したネットワークインターフェイスは無効です。';
$l['pass_strength_error'] = 'パスワード強度は0から100までの整数のみです。';
$l['err_binary_path'] = '指定されたパスではバイナリが存在しません。確認の上もう一度やり直して下さい。';

//Theme Strings 
$l['<title>'] = APP.' ? セッティング・センター';
$l['settings_saved'] = '設定は正常に保存されました。';
$l['pathhead'] = 'ソフトウェアのパス';
$l['softpath'] = APP.' パス';
$l['softpath_exp'] = 'スクリプトが存在しないファイルへのパスです。';
$l['softscripts'] = 'スクリプトのパス';
$l['softscripts_exp'] = '全てのソフトウェア/スクリプトが存在するパスです';
$l['gen_set'] = '一般設定';
$l['sitename'] = 'サイト名';
$l['sitename_exp'] = ' '.APP.'を使用するサーバーまたは企業名です。'.APP.' インストーラーのあらゆるページで表示されます。';
$l['cook_name'] = 'クッキーの名称';
$l['cook_name_exp'] = 'ブラウザに保存されるクッキーの名称です。';
$l['comp_output'] = '圧縮出力';
$l['comp_output_exp'] = '大容量を圧縮して出力し保存します。';
$l['soft_email'] = '管理者用Ｅメールアドレス';
$l['soft_email_exp'] = ' CRON 作業用やその他管理用のＥメールが送信されるアドレス';
$l['from_email'] = 'FromＥメールアドレス';
$l['from_email_exp'] = ' FROMヘッダー用のアドレス';
$l['license'] = 'ライセンスキー';
$l['license_exp'] = ' '.APP.'により発行された有効なライセンスキーを入力して下さい。';
$l['choose_lang'] = '言語の選択';
$l['choose_lang_exp'] = '言語を選択して下さい。';
$l['choose_theme'] = 'テーマの選択';
$l['choose_theme_exp'] = '選択されたテーマが '.APP.'の初期テーマとなります。';
$l['timezone'] = '時間帯';
$l['update_settings'] = '設定のアップデート';
$l['auto_upd_softac'] = ' '.APP.'の自動アップデート';
$l['auto_upd_softac_exp'] = '有効にした場合'.APP.'は自動で最新バージョンへアップデートされます。 <br /> <b>Stable</b>ブランチはテスト版をテストした後に起動されます。<br /> <b>テスト版</b> には最新バージョンと最新機能が搭載されています。';
$l['never_update'] = 'アップデートしない';
$l['stable'] = '変更しない(推奨)';
$l['release_cand'] = 'テスト版 (実験用)';
$l['auto_upd_soft'] = 'スクリプトの自動アップデート';
$l['auto_upd_soft_exp'] = '有効にした場合、スクリプトやソフトウェアが自動的に最新バージョンへアップデートされます。';
$l['auto_add_soft'] = '新規スクリプトの自動追加';
$l['auto_add_soft_exp'] = '有効にした場合、cron jobを持続している期間は新規スクリプトや新規ソフトウェアが自動で追加されます。'; 
$l['email_upd_soft'] = 'アップデート通知';
$l['email_upd_soft_exp'] = ' '.APP.'のアップグレードが可能な場合または自動アップグレードが実施された場合にＥメールが送信されます。';
$l['email_upd_softs'] = 'スクリプトのアップデート通知';
$l['email_upd_softs_exp'] = 'のスクリプトまたはソフトウェアのアップグレードが可能な場合または自動アップグレードが実施された場合にＥメールが送信されます。';
$l['cron_time'] = 'Cron Jobのアップデート';
$l['cron_time_exp'] = '利用可能なアップデートを確認するためのcron jobです。cron jobs について分からない場合は変更しないで下さい。';
$l['disable_soft'] = 'を無効にする'.APP;
$l['soft_off'] = ''.APP.' を無効にする';
$l['soft_off_exp'] = ' '.APP.' を無効にします。ユーザーは使用することができなくなります。';
$l['off_sub'] = 'サブジェクトを無効にする';
$l['off_message'] = ' Messageを無効にする';
$l['edit_settings'] = '設定の編集';
$l['chmod_files'] = 'CHMOD ファイル';
$l['chmod_files_exp'] = ''.APP.'があなたがインストールしたsuPHPを検出できない場合にご利用下さい。不明な場合は空欄のままとして下さい。';
$l['chmod_dir'] = 'CHMOD ディレクトリ';
$l['chmod_dir_exp'] = ''.APP.'があなたがインストールしたsuPHPを検出できない場合にご利用下さい。不明な場合は空欄のままとして下さい。';
$l['is_vps'] = 'Is VPS';
$l['is_vps_exp'] = 'サーバーがVPSの場合はチェックボックスにチェックを入れて下さい。';
$l['eu_news_off'] = 'エンドユーザーニュースを無効にする';
$l['eu_news_off_exp'] = 'チェックを入れた場合、スクリプトの最新開発情報やアップデート情報などのエンドユーザーニュースが無効になります。';
$l['logo_url'] = 'ロゴURL';
$l['logo_url_exp'] = '空欄の場合'.APP.'ロゴが表示されます。';
$l['php_bin'] = 'PHP バイナリ';
$l['php_bin_exp'] = ' CRON Jobやその他の目的に使用されるバイナリです。空欄の場合、<b>/usr/bin/php</b> が使用されます。';
$l['end_user_set'] = 'エンドユーザーパネル設定';
$l['off_sync_link'] = '同期リンクを無効にする';
$l['off_sync_link_exp'] = 'エンドユーザーの同期リンクを無効にします。';
$l['off_panel_link'] = 'コントロール・パネルリンクを無効にする';
$l['off_panel_link_exp'] = 'ドック内のコントロール・パネルリンクを無効にします。';
$l['chmod_conf_file'] = 'CHMOD設定ファイル';
$l['chmod_conf_file_exp'] = 'スクリプトの設定ファイルがこの値にCHMODされます。 初期値は 0644となっています(不明な場合は編集しないで下さい)。';
$l['suphp_detected'] = '検出されたsuPHP';
$l['no_prefill'] = 'ディレクトリ名を事前に入力しない';
$l['no_prefill_exp'] = 'ディレクトリ名を事前に入力しません。';
$l['footer_link'] = 'フッターのリンク';
$l['footer_link_exp'] = 'スクリプトをインストールした際にこのリンクまたはテキストがインスタレーションのフッターに挿入されます。';
$l['eu_email_off'] = 'エンドユーザーへのアップデート通知を無効にする';
$l['eu_email_off_exp'] = 'チェックを入れた場合、アップデート可能な場合でもエンドユーザーへＥメール通知を送信しません。';
$l['random_username'] = 'ユーザーのランダムユーザー名の作成';
$l['random_username_exp'] = 'チェックを入れた場合、インストール中にランダムに管理者用ユーザー名が作成されます。';
$l['random_pass'] = 'ランダムパスワードの作成';
$l['random_pass_exp'] = 'チェックを入れた場合、インストール中にランダムに管理者用パスワードが作成されます。';
$l['off_demo_link'] = 'スクリプトデモを無効にする';
$l['off_demo_link_exp'] = 'エンドユーザー用のデモを無効にします。';
$l['off_rating_link'] = 'スクリプトの評価を無効にする';
$l['off_rating_link_exp'] = 'エンドユーザーの評価を無効にします。';
$l['off_review_link'] = 'スクリプトのレビューを無効にする';
$l['off_review_link_exp'] = 'エンドユーザーのレビューを無効にします。';
$l['off_screenshot_link'] = 'スクリプトのスクリーンショット無効にする';
$l['off_screenshot_link_exp'] = 'スクリプトのスクリーンショット無効にします。';
$l['random_dbprefix'] = 'ランダムにデータベースのプレフィックスを作成する';
$l['random_dbprefix_exp'] = 'チェックを入れた場合、インストール中にランダムにデータベースのプレフィックスが作成されます。';
$l['remote_mysql'] = '遠隔 Mysql ホスト名';
$l['remote_mysql_exp'] = '遠隔でmysqlを使用したい場合、遠隔mysqlホスト名またはIPを指定して下さい。';
$l['perl_scripts'] = 'PERL スクリプトを無効にする';
$l['perl_scripts_exp'] = 'エンドユーザーのPERL スクリプトを無効にします。';
$l['show_top_scripts'] = 'トップスクリプトのグループを表示する';
$l['show_top_scripts_exp'] = 'エンドユーザーがスクリプトのインストールページにアクセスしやすいよう、トップスクリプトのグループを表示します。この機能を無効にするには、この欄を空欄のままにして下さい。';
$l['err_change_app_name'] = 'グループ名の変更中にエラーが発生しました。';
$l['hide_dbprefix'] = 'スクリプトのデータベースプレフィックスを隠す';
$l['hide_dbprefix_exp'] = 'チェックを入れた場合、スクリプトのデータベースプレフィックスは利用できません。';
$l['user_mod_dir'] = 'USER MOD DIRを使用する';
$l['user_mod_dir_exp'] = 'ユーザーは http://IP/~userでスクリプトをインストールすることができます。';
$l['off_email_link'] = 'エンドユーザーへのＥメールを無効にする';
$l['off_email_link_exp'] = 'エンドユーザーへのＥメールリンクおよびインストールや削除時のＥメールを無効にします。';
$l['disable_classes'] = 'PHP のクラスを無効にする';
$l['disable_classes_exp'] = 'エンドユーザーからのPHPクラスを無効にします。';
$l['panel_hf'] = 'cPanel\'s Native UIにSoftaculous を表示する';
$l['panel_hf_exp'] = '有効にした場合Softaculous が cPanel\'s Native UIに表示されます';
$l['disable_backup_restore'] = 'エンドユーザーのバックアップ/復元機能を無効にする';
$l['disable_backup_restore_exp'] = 'エンドユーザーのバックアップ/復元機能を無効にします';
$l['nolabels'] = '全てのスクリプトカテゴリーを無効にする';
$l['nolabels_exp'] = 'チェックを入れた場合エンドユーザーパネルにカテゴリーが表示されません（例： PHP, Javascripts, PERLなどの全てのカテゴリーが無効となります）。';
$l['settings'] = APP.' 設定';
$l['disable_reseller_panel'] = 'リセラーパネルを無効にする';
$l['disable_reseller_panel_exp'] = 'チェックを入れた場合、リセラーはリセラーパネルにアクセスできなくなります。';
$l['choose_protocol'] = 'プロトコルの選択';
$l['choose_protocol_exp'] = 'プロトコルを選択して下さい。このプロトコルがエンドユーザーの初期設定となります。';
$l['network_interface'] = 'ネットワークインターフェイス';
$l['network_interface_exp'] = 'サーバーの公衆ネットワークインターフェイスです。不明な場合は空欄のままにして下さい。';
$l['default_domain_path'] = '初期設定のドメインパス';
$l['default_domain_path_exp'] = 'ドメインの追加中に初期設定のドメインパスを設定することができます。';
$l['empty_username'] = 'ユーザー名を空欄にする';
$l['empty_username_exp'] = 'チェックを入れた場合、管理者用ユーザー名の入力欄が空欄のままとなります。';
$l['empty_pass'] = 'パスワードを空欄にする';
$l['empty_pass_exp'] = 'チェックを入れた場合、パスワードの入力欄が空欄のままとなります。';
$l['show_cscript_in_top'] = 'トップスクリプト内のカスタムスクリプトロゴを表示する';
$l['show_cscript_in_top_exp'] = '有効にした場合、あなたのカスタムスクリプトのロゴがトップスクリプト内に表示されます。';
$l['pass_strength'] = 'パスワード強度の最小値を設定する';
$l['pass_strength_exp'] = '設定した場合、パスワード強度が設定値を超えてなければなりません。';
$l['off_remove_mail'] = 'インスタレーション削除のＥメールを無効にする';
$l['off_remove_mail_exp'] = 'インスタレーションの削除中のエンドユーザーへのＥメールを無効にします。';
$l['off_backup_mail'] = 'インスタレーションバックアップのＥメールを無効にする';
$l['off_backup_mail_exp'] = 'インスタレーションのバックアップ中のエンドユーザーへのＥメールを無効にします。';
$l['off_install_mail'] = '新規インスタレーションのＥメールを無効にする';
$l['off_install_mail_exp'] = 'アプリケーションのインスタレーション中のエンドユーザーへのＥメールを無効にします。';
$l['off_edit_mail'] = 'インスタレーションの編集のＥメールを無効にする';
$l['off_edit_mail_exp'] = 'インスタレーションの詳細が編集された際のエンドユーザーへのＥメールを無効にします。';
$l['off_clone_mail'] = 'インスタレーションの複製のＥメールを無効にする';
$l['off_clone_mail_exp'] = 'インスタレーションが複製された際のエンドユーザーへのＥメールを無効にします。';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = '管理者用ユーザー名のプレフィックス';
$l['admin_prefix_exp'] = '選択されたオプションがスクリプトインストールフォームでの管理者用ユーザー名として設定されます。<br/> セパレーターとして認識されるためハイフン\'-\' は使用しないで下さい。';
$l['ap_none'] = 'None';
$l['ap_username'] = 'ユーザー名';
$l['ap_domain'] = 'ドメイン';
$l['ap_admin_defined'] = '定義された管理者';
$l['disable_auto_backup'] = 'エンドユーザーの自動バックアップを無効にする';
$l['disable_auto_backup_exp'] = 'エンドユーザーの自動バックアップオプションを無効にします。';
$l['webuzo_disable_username'] = ' Webuzo ユーザー名の事前入力';
$l['webuzo_disable_username_exp'] = 'ログインページのWebuzo ユーザー名が予め入力されます。';
$l['disable_clone'] = 'エンドユーザーの複製機能を無効にする';
$l['disable_clone_exp'] = 'エンドユーザーのインスタレーション複製機能を無効にします。';
$l['disable_backup_upgrade'] = 'アップグレード中のバックアップオプションを無効にする';
$l['disable_backup_upgrade_exp'] = 'エンドユーザーのインスタレーションアップグレードページのバックアップオプションを無効にします。';
$l['ephp_bin'] = 'エンドユーザー PHP バイナリ';
$l['ephp_bin_exp'] = 'エンドユーザーのウェブサイトで使用されるPHPバイナリパスを定義します。スクリプトの要求をチェックするために'.APP.'がこのバイナリを使用します。定義しない場合'.APP.'は次の初期バイナリを使用します。';
$l['no_ampps_download'] = 'AMPPS ダウンロードリンクを無効にする';
$l['no_ampps_download_exp'] = ' '.APP.' エンドユーザーパネル内のAMPPS ダウンロードリンクを無効にします。';
$l['no_strong_mysql_pass'] = '強力な MySQL データベース・ユーザーパスワードを作成しない';
$l['no_strong_mysql_pass_exp'] = '特殊文字を使用せずにMySQLデータベース・ユーザーパスワードを作成します。';

$l['remove_options'] = 'エンドユーザーの削除オプション';
$l['remove_dir'] = 'ディレクトリの削除オプションを非表示にする';
$l['remove_dir_exp'] = '選択した場合、インスタレーションが削除された際は必ずインスタレーション・ディレクトリも削除されます。';
$l['remove_db'] = 'データベースおよびデータベース・ユーザーの削除オプションを非表示にする';
$l['remove_db_exp'] = '選択した場合、インスタレーションが削除された際は必ずデータベースおよびデータベース・ユーザーも削除されます。';
$l['remove_datadir'] = 'データディレクトリの削除オプションを非表示にする';
$l['remove_datadir_exp'] = '選択した場合、インスタレーションが削除された際は必ずデータディレクトリも削除されます。';
$l['remove_wwwdir'] = ' WWW ディレクトリの削除オプションを非表示にする';
$l['remove_wwwdir_exp'] = '選択した場合、インスタレーションが削除された際は必ずWWW ディレクトリも削除されます。';

$l['social_media'] = 'ソーシャルメディア設定';
$l['install_tweet_off'] = '新規インスタレーションのツイートを無効にする';
$l['install_tweet_off_exp'] = 'チェックを入れた場合、新規インストール後にツイートのオプションが表示されません。';
$l['install_tweet_msg'] = '新規インスタレーションのツイートメッセージ';
$l['install_tweet_msg_exp'] = '新規インスタレーションのツイートメッセージを設定します。';

$l['upgrade_tweet_off'] = 'アップグレードインスタレーションのツイートを無効にする';
$l['upgrade_tweet_off_exp'] = 'チェックを入れた場合、インスタレーションのアップグレード後にツイートのオプションが表示されません。';
$l['upgrade_tweet_msg'] = 'アップグレードインスタレーションのツイートメッセージ';
$l['upgrade_tweet_msg_exp'] = 'アップグレードインスタレーションのツイートメッセージを設定します。';

$l['clone_tweet_off'] = 'インスタレーション複製のツイートを無効にする';
$l['clone_tweet_off_exp'] = 'チェックを入れた場合、インスタレーションの複製後にツイートオプションが表示されません。';
$l['clone_tweet_msg'] = 'インスタレーション複製のツイートメッセージ';
$l['clone_tweet_msg_exp'] = '複製インスタレーションのツイートメッセージを設定します。';

$l['no_ftp_encrypted'] = ' FTP パスワードを暗号化しない';
$l['no_ftp_encrypted_exp'] = 'データベース内のドメインのFTPパスワードを暗号化せずに保存します。';
$l['pre_download_all'] = '全てのスクリプトのプレ・ダウンロードを有効にする';
$l['pre_download_all_exp'] = '追加された新規スクリプトを含め、全てのスクリプトにおいてプレ・ダウンロードを有効にします。';

$l['tweet_vars_link'] = 'ツイートメッセージの変数リスト';
$l['tweet_vars'] = '[[SCRIPTNAME]] ? 使用するスクリプト名 <br />[[TYPE]] ? 使用するスクリプトタイプ 例: PHP, PERL, etc <br />[[softurl]] ? 使用するインスタレーションのURL <br />[[cat]] ? 使用するスクリプトのカテゴリー 例: Blog, CMS, etc <br />[[ver]] ? 使用するインストールスクリプトのバージョン<br />';

$l['session_timeout'] = 'セッション・タイムアウト';
$l['session_timeout_exp'] = 'Softaculous のセッションは設定された時間内で作動します。 <br /> 初期設定は15分です。';

$l['eu_enable_themes'] = 'エンドユーザーのテーマ・オプションを有効にする';
$l['eu_enable_themes_exp'] = 'チェックを入れた場合、スクリプトのインストール中にテーマの選択およびインストールができるオプションがエンドユーザーに与えられます。';
$l['auto_backup_limit'] = '自動バックアップ・ローテーションの制限';
$l['auto_backup_limit_exp'] = 'エンドユーザーによる自動バックアップ・ローテーションの最大限度を選択して下さい。';
$l['auto_backup_unlimited'] = '無制限';
$l['auto_backup_all'] = 'All';
$l['auto_backup_daily'] = 'Disable Daily Auto backups';
$l['auto_backup_weekly'] = 'Disable Weekly Auto backups';
$l['auto_backup_monthly'] = 'Disable Monthly Auto backups';

$l['off_upgrade_plugins'] = 'Disable auto upgrade plugins for enduser';
$l['off_upgrade_plugins_exp'] = 'If checked then the option to auto upgrade plugins for user\'s installations will be disabled for endusers.';
$l['off_upgrade_themes'] = 'Disable auto upgrade themes for enduser';
$l['off_upgrade_themes_exp'] = 'If checked then the option to auto upgrade themes for user\'s installations will be disabled for endusers.';

$l['pfx_settings'] = 'PopularFX Settings';
$l['eu_enable_themes'] = 'Enable Free Themes';
$l['eu_enable_themes_exp'] = 'If checked then endusers will get an option to select and install free themes while installing scripts like WordPress';
$l['eu_themes_premium'] = 'Enable Premium Themes';
$l['eu_themes_premium_exp'] = 'If checked then endusers will get an option to purchase and install Premium themes for scripts like WordPress.<br /> You can find more info <a href="http://www.softaculous.com/docs/Premium_Themes" target="_blank">Here</a>';

$l['backups_expire'] = 'Delete Backup Frequency';
$l['backups_expire_exp'] = 'If you would like to delete your users\' backups after certain days since backup creation. By default the backups are never deleted.';

$l['default_hf_bg'] = 'Default color for Header Footer';
$l['default_hf_bg_exp'] = 'This will be the default color for Header, Footer and Left Panel';
$l['default_cat_hover'] = 'Default color for Category hover';
$l['default_cat_hover_exp'] = 'This will be the default color when the user hovers over the Categories in Left panel';
$l['default_hf_text'] = 'Default color for text in Header Footer';
$l['default_hf_text_exp'] = 'This will be the default color for text in Header, Footer and Left Panel';
$l['default_scriptname_text'] = 'Default color for script name text in Left panel';
$l['default_scriptname_text_exp'] = 'This will be the default color for script name text in Left Panel';

$l['max_backups'] = 'Maximum backups per user limit';
$l['max_backups_exp'] = 'This will limit the maximum number of backups a user can take';
$l['max_backups_unlimited'] = 'Unlimited';

$l['default_landing'] = 'Default page for Enduser Panel';
$l['default_landing_exp'] = 'This will be the default page for '.APP.' Enduser Panel';
$l['top_scripts'] = 'Top Scripts (Default)';
$l['all_ins'] = 'All Installations';
$l['outdated_ins'] = 'Outdated Installations';

$l['no_add_domain'] = 'Disable Adding domains by Endusers';
$l['no_add_domain_exp'] = 'This will not allow Endusers to add domains';

$l['force_auto_upgrade'] ='Force Auto Upgrade for users\' installations';
$l['force_auto_upgrade_exp'] ='If selected, the auto upgrade checkbox will be selected and disabled in the enduser panel. Enduser(s) will <b>not</b> be able to modify it.';
$l['enable_auto_upgrade'] = 'Enable Auto Upgrade checkbox by default';
$l['enable_auto_upgrade_exp'] = 'If selected, the auto upgrade checkbox will be selected by default in the enduser panel. Enduser(s) will be able to modify it.';

$l['set_backup_dir'] = 'Set Backup Directory';
$l['set_backup_dir_exp'] = 'Choose the path to store enduser(s) installation backups';

$l['off_customize_theme'] = 'Turn off Customize Theme';
$l['off_customize_exp'] = 'If selected, then Enduser(s) will not be able to access Customise Theme option';

$l['enc_db_pass'] = 'Store Database Password in encrypted format';
$l['enc_db_pass_exp'] = 'If selected, then the Database Password for users\' installations will be stored in encrypted format';

$l['time_format'] = 'Default Time format';
$l['time_format_exp'] = 'Choose the default time format. Default : <b>F j, Y, g:i a</b>';

$l['no_prefill_db'] = 'Don\'t Prefill Database details';
$l['no_prefill_db_exp'] = 'Don\'t prefill the database details by default.';
?>
