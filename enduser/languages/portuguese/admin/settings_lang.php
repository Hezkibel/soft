<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.XX
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Translation by: Infotech Brazil
// Date:       Feb 2012
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

$l['no_path'] = 'O diretório não foi especificado';
$l['wrong_path'] = 'Não foi possivel localizar o arquivo universal.php no diretório que especificou.';
$l['no_softscripts'] = 'O diretório para o script/software não foi especificado';
$l['wrong_softscripts'] = 'O diretório do script/software encontra-se incorreto ou o software não foi encontrado .';
$l['no_sn'] = 'Você não especificou o nome do site.';
$l['no_cookie_name'] = 'Você não especificou nome do cookie';
$l['no_soft_email'] = 'Você não inseriu endereço do email';
$l['wrong_soft_email'] = 'O email inserido é inválido';
$l['wrong_from_email'] = 'The From email address you submitted is invalid';
$l['no_license'] = 'Você não digitou a chave da licença';
$l['no_lang'] = 'Você não selecionou o idioma';
$l['wrong_lang'] = 'O idioma seleccionado é inválido';
$l['no_theme_folder'] = 'Você não selecionou nenhum tema';
$l['wrong_theme_folder'] = 'O tema seleccionado é inválido';
$l['no_timezone'] = 'Você não especificou um fuso horário';
$l['wrong_timezone'] = 'O fuso horário especificado não é valido.';
$l['no_cron_time'] = 'Você não especificou a data/hora para execução da tarefa';
$l['no_off_message'] = 'Você não especificou o assunto para o encerramento';
$l['no_off_subject'] = 'Você não especificou mensagem para o encerramento';
$l['saving_error'] = 'Ocorreram alguns erros ao gravar as configurações';
$l['no_update'] = 'Nenhuma preferência para à atualização foi apresentada';
$l['invalid_update'] = 'A preferência da atualização inválida foi submetido';
$l['no_protocol'] = 'No protocol was selected';
$l['wrong_protocol'] = 'The selected protocol is invalid';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = 'Painel de Configurações do '.APP;
$l['settings_saved'] = 'Configurações gravadas com sucesso';
$l['pathhead'] = 'Diretórios usado para o '.APP;
$l['softpath'] = 'Diretório do '.APP;
$l['softpath_exp'] = 'É neste diretório que se encontram todos os arquivos excluindo-se os scripts';
$l['softscripts'] = 'Diretório dos Scripts';
$l['softscripts_exp'] = 'É neste diretório que se encontram os diversos softwares/scripts';
$l['gen_set'] = 'Configurações Gerais';
$l['sitename'] = 'Nome do Site';
$l['sitename_exp'] = 'O nome do servidor ou empresa que irá usar o '.APP.'. Este nome irá aparecer em todas as páginas do instalador '.APP;
$l['cook_name'] = 'Nome para os Cookies';
$l['cook_name_exp'] = 'O nome do cookie que será gravado pelos navegadores.';
$l['comp_output'] = 'Comprimir Saida';
$l['comp_output_exp'] = 'Esta opção comprime a saida poupando desta forma imenso tráfego.';
$l['soft_email'] = 'Email';
$l['soft_email_exp'] = 'O endereço de email para usar no campo DE.';
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'Chave da Licença';
$l['license_exp'] = 'Insira aqui a chave de licença emitida pelo o '.APP;
$l['choose_lang'] = 'Selecione o Idioma';
$l['choose_lang_exp'] = 'Selecione  o Idioma Pré-Defenido';
$l['choose_theme'] = 'Selecione o Tema';
$l['choose_theme_exp'] = 'O tema selecionado será usado em todo o '.APP;
$l['timezone'] = 'Fuso Horário';
$l['update_settings'] = 'Atualizar as Configurações e o '.APP;
$l['auto_upd_softac'] = 'Atualizar Automáticamente o '.APP;
$l['auto_upd_softac_exp'] = 'Se abilitado o '.APP.' será automaticamente atualizada para a versão mais recente. <br />O ramo <b>Estável</b> é lançado após a versão Candidato à Lançmento foi cuidadosamente testado . <br />O ramo <b>Candidato à Lançmento</b> contém a última versão e funcionalidades.';
$l['never_update'] = 'Nunca Atualizar';
$l['stable'] = '<b>Estável (Recomendado)</b>';
$l['release_cand'] = 'Candidato à Lançamento (Experimental!)';
$l['auto_upd_soft'] = 'Auto Atualizar os Scripts';
$l['auto_upd_soft_exp'] = 'Se ativado esta opção irá atualizar automáticamente todos os scripts ou software para a última versão';
$l['auto_add_soft'] = 'Auto Adicionar Novos Scripts';
$l['auto_add_soft_exp'] = 'Se ativado, novos scripts ou software serão adicionado automáticamente durante as tarefas de manutenção. <b>RECOMENDADO</b>';
$l['email_upd_soft'] = 'Avisar em Caso de Atualizações';
$l['email_upd_soft_exp'] = 'Será enviado um email de avisando no caso de estarem disponiveis novas atualizações ou quando forem instaladas automáticamente novas atualizações';
$l['email_upd_softs'] = 'Notifique-me das atualizações do(s) Script(s)';
$l['email_upd_softs_exp'] = 'Serão enviados emails para notificar a disponibilidade de novas versões de scripts ou software nas atualizações automáticas.';
$l['cron_time'] = 'Tarefas de Atualização';
$l['cron_time_exp'] = 'A data/hora em que serão pesquisadas novas atualizações. Não altere esta opção caso não saiba qual a funcionalidade da mesma';
$l['disable_soft'] = 'Desativando o '.APP;
$l['soft_off'] = 'Desativar o '.APP;
$l['soft_off_exp'] = 'O '.APP.' será desativado completamente!';
$l['off_sub'] = 'Motivo da Desativação';
$l['off_message'] = 'Mensagem pela qual o '.APP.' foi desativado';
$l['edit_settings'] = 'Salvar Configurações';
$l['chmod_files'] = 'CHMOD dos Arquivos';
$l['chmod_files_exp'] = 'Esta opção é útil caso tenha instalado o suPHP e o '.APP.' não o tenha detectado. Deixe em branco em caso de incerteza.';
$l['chmod_dir'] = 'CHMOD dos Diretórios';
$l['chmod_dir_exp'] = 'Esta opção é útil caso tenha instalado o suPHP e o '.APP.' não o tenha detectado. Deixe em branco em caso de incerteza.';
$l['is_vps'] = 'VPS';
$l['is_vps_exp'] = 'Marque esta caixa no caso deste servidor ser uma VPS.';
$l['eu_news_off'] = 'Desactivar Noticias para Utilizador Final';
$l['eu_news_off_exp'] = 'Esta opção desativa o envio de mensagens dos diversos scripts para o usuário final. Novidades de desenvolvimento, atualizações, etc.';
$l['logo_url'] = 'URL do Logotipo';
$l['logo_url_exp'] = 'Se permanecer vázio o logotipo do '.APP.' será exibido.';
$l['php_bin'] = 'Binário PHP';
$l['php_bin_exp'] = 'Este é o binário que será utilizado para as tarefas agendadas e também outros fins. Se vazio, então <b>/usr/bin/php </b> será usado.';
$l['end_user_set'] = 'End User Panel Settings';
$l['off_sync_link'] = 'Desligar o link de sincronização';
$l['off_sync_link_exp'] = 'Isto irá desligar a link de Sincronizar para os usuários finais.';
$l['off_panel_link'] = 'Desligar o link do Painel de Controle';
$l['off_panel_link_exp'] = 'Isto irá desligar o link do Painel de Controle no Dock para os usuários finais.';
$l['chmod_conf_file'] = 'CHMOD do Arquivos de Config.';
$l['chmod_conf_file_exp'] = 'Arquivos de configuração dos scripts será CHMOD a este valor. O padrão é 0644. (<b>Não editar / deixe em branco se você não sabe!</b>)';
$l['suphp_detected'] = 'suPHP Detectado';
$l['no_prefill'] = 'Não pré preencher o nome do diretório';
$l['no_prefill_exp'] = 'Não pré preencher o nome do diretório com o nome de scripts por padrão.';
$l['footer_link'] = 'Link do Rodapé';
$l['footer_link_exp'] = 'Quando alguém instala um script, este link / texto será inserido no rodapé da instalação';

$l['eu_email_off'] = 'Desativar E-mails de atualização ao usuário';
$l['eu_email_off_exp'] = 'Se marcado nenhum email será enviado para o usuário final, quando há uma atualização disponível.'; 
$l['random_pass'] = 'Gerar senha aleatória para os usuários'; 
$l['random_pass_exp'] = 'Se marcada, senhas do administrador seram gerados aleatoriamente será feita durante a instalação.'; 
$l['off_demo_link'] = 'Desativar os Demos de Scripts';
$l['off_demo_link_exp'] = 'Isso irá desativar as demonstrações para os usuários finais.';
$l['off_rating_link'] = 'Desativar Pontuações dos Scripts';
$l['off_rating_link_exp'] = 'Isso irá desativar os índices para os usuários finais.';
$l['off_review_link'] = 'Desativar Análise dos Script';
$l['off_review_link_exp'] = 'Isso irá desativar os opiniões para os usuários finais.';
$l['off_screenshot_link'] = 'Desativar Imagens de Tela dos Scripts';
$l['off_screenshot_link_exp'] = 'Isso irá desativar as imagens para os usuários finais.';
$l['random_dbprefix'] = 'Gerar Prefixo do Banco de Dados aleatórios para os usuários';
$l['random_dbprefix_exp'] = 'Se marcada, um prefixo de banco de dados gerado aleatoriamente será feita durante a instalação.';
$l['remote_mysql'] = 'Hostname Remoto do Mysql';
$l['remote_mysql_exp'] = 'Se você quiser usar mysql remoto, especifique o Hostname Remoto do Mysql  ou IP';
$l['perl_scripts'] = 'Desativar Scripts PERL';
$l['perl_scripts_exp'] = 'Isso irá desativar os scripts Perl para os usuários finais';
$l['show_top_scripts'] = 'Mostrar o Top Grupo de Scripts';
$l['show_top_scripts_exp'] = 'Isto irá exibir o Top Grupo de Scripts para os usuários finais para facilitar o acesso às páginas de scripts de instalação. Para desabilitar esse recurso, deixe este campo <b>em branco</b>.';
$l['err_change_app_name'] = 'Ocorreu um erro ao alterar o nome do Grupo';
$l['hide_dbprefix'] = 'Hide the Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
$l['user_mod_dir'] = 'Use USUÁRIO MOD DIR';
$l['user_mod_dir_exp'] = 'Os usuários podem instalar scripts em http://IP/~usuário';
$l['off_email_link'] = 'Desativar todos os E-mail para Usuários Finais';
$l['off_email_link_exp'] = 'Isto irá desconectar o link do e-mail para os usuários finais e também desabilitar e-mails que são enviados durante a instalação, remoção, etc';
$l['disable_classes'] = 'Disable PHP Classes';
$l['disable_classes_exp'] = 'This will disable PHP Classes from the enduser.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Disable Backup/Restore Function for Endusers';
$l['disable_backup_restore_exp'] = 'This will turn off the backup and restore function for endusers.';
$l['nolabels'] = 'Disable ALL Scripts Category';
$l['nolabels_exp'] = 'If enabled then no category will be displayed in the header in enduser panel. i.e. PHP, Javascripts, PERL, Classes these all category will be disabled';
$l['settings'] = APP.' Settings';
$l['disable_reseller_panel'] = 'Disable Reseller Panel';
$l['disable_reseller_panel_exp'] = 'If enabled then the resellers will not be able to access reseller panel.';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'Choose your preferred protocol. It will be selected by default for enduser.';
$l['random_username'] = 'Generate Random Username for users';
$l['random_username_exp'] = 'If checked then randomly generated admin usernames will be made during an installation.';
$l['network_interface'] = 'Network Interface';
$l['network_interface_exp'] = 'The public network interface of the server. Leave blank if you dont know';
$l['default_domain_path'] = 'Default Domain Path';
$l['default_domain_path_exp'] = 'While adding domain you can set the default domain path.';
$l['empty_username'] = 'Empty Username';
$l['empty_username_exp'] = 'If checked then the ADMIN USERNAME field will be left blank.';
$l['empty_pass'] = 'Empty Password';
$l['empty_pass_exp'] = 'If checked then the PASSWORD field will be left blank.';
$l['show_cscript_in_top'] = 'Show custom script(s) logo in TOP scripts.';
$l['show_cscript_in_top_exp'] = 'If enabled your custom script(s) logo will be displayed in the TOP scripts.';
$l['pass_strength'] = 'Set Minimum Password Strength';
$l['pass_strength_exp'] = 'If set, then the password strength must be more than the defined value';
$l['off_remove_mail'] = 'Turn off Remove Installation emails';
$l['off_remove_mail_exp'] = 'This will disable the email sent to endusers during removal of installation(s).';
$l['off_backup_mail'] = 'Turn off Backup Installation emails';
$l['off_backup_mail_exp'] = 'This will disable the email sent to endusers during backup of installation(s).';
$l['off_install_mail'] = 'Turn off New Installation emails';
$l['off_install_mail_exp'] = 'This will disable the email sent to endusers during installation of an application.';
$l['off_edit_mail'] = 'Turn off Edit Installation emails';
$l['off_edit_mail_exp'] = 'This will disable the email sent to endusers when installation details are edited.';
$l['off_clone_mail'] = 'Turn off Clone Installation emails';
$l['off_clone_mail_exp'] = 'This will disable the email sent to endusers when an installation is cloned.';
$l['off_restore_mail'] = 'Turn off Restore Installation emails';
$l['off_restore_mail_exp'] = 'This will disable the email sent to endusers when an installation is restored.';
$l['admin_prefix'] = 'Prefix for admin username';
$l['admin_prefix_exp'] = 'Selected option will be set as prefix for admin username on the script install form<br/> Please do not use a hyphen \'-\' as it will be used as a seperator';
$l['ap_none'] = 'None';
$l['ap_username'] = 'Username';
$l['ap_domain'] = 'Domain';
$l['ap_admin_defined'] = 'Admin Defined';
$l['disable_auto_backup'] = 'Disable Automated Backups for Enduser';
$l['disable_auto_backup_exp'] = 'If checked then the option for automated backups will be disabled for endusers.';
$l['webuzo_disable_username'] = 'Pre-fill Webuzo Username';
$l['webuzo_disable_username_exp'] = 'If checked then the field for Webuzo Username on login page will be prefilled.';
$l['disable_clone'] = 'Disable Clone feature for endusers';
$l['disable_clone_exp'] = 'This will disable the clone installation option for endusers';
$l['disable_backup_upgrade'] = 'Disable backup option during upgrades';
$l['disable_backup_upgrade_exp'] = 'This will disable the backup option on the upgrade installation page for endusers';
$l['ephp_bin'] = 'Enduser PHP binary';
$l['ephp_bin_exp'] = 'Define the PHP binary path that will be used by the enduser websites. '.APP.' will use this binary for checking the requirements of a script. If not defined '.APP.' will use the default binary as : ';
$l['no_ampps_download'] = 'Disable AMPPS download link';
$l['no_ampps_download_exp'] = 'This will disable the AMPPS download link in '.APP.' Enduser panel';
$l['no_strong_mysql_pass'] = 'Don\'t generate strong MySQL database user password';
$l['no_strong_mysql_pass_exp'] = 'This will generate MySQL database user password without special characters';

$l['remove_options'] = 'Enduser Remove Options';
$l['remove_dir'] = 'Hide Remove Directory Option';
$l['remove_dir_exp'] = 'If selected, Installation Directory will always be deleted when an installation is removed';
$l['remove_db'] = 'Hide Remove Database and Database User Option';
$l['remove_db_exp'] = 'If selected, Database and Database User will always be deleted when an installation is removed';
$l['remove_datadir'] = 'Hide Remove Data Directory Option';
$l['remove_datadir_exp'] = 'If selected, Data Directory will always be deleted when an installation is removed';
$l['remove_wwwdir'] = 'Hide Remove WWW Directory Option';
$l['remove_wwwdir_exp'] = 'If selected, WWW Directory will always be deleted when an installation is removed';

$l['social_media'] = 'Social Media Settings';
$l['install_tweet_off'] = 'Turn off Tweet for New Installations';
$l['install_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after a new installation';
$l['install_tweet_msg'] = 'Tweet Message for New Installations';
$l['install_tweet_msg_exp'] = 'Custom Tweet Message for New Installations';

$l['upgrade_tweet_off'] = 'Turn off Tweet for Upgrade Installation';
$l['upgrade_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after upgrading an installation';
$l['upgrade_tweet_msg'] = 'Tweet Message for Upgrade Installation';
$l['upgrade_tweet_msg_exp'] = 'Custom tweet message for Upgrade Installation';

$l['clone_tweet_off'] = 'Turn off Tweet for Clone Installation';
$l['clone_tweet_off_exp'] = 'If checked, the Tweet option will not be shown after cloning an installation';
$l['clone_tweet_msg'] = 'Tweet Message for Clone Installation';
$l['clone_tweet_msg_exp'] = 'Custom tweet message for Clone Installation';

$l['no_ftp_encrypted'] = 'Don\'t encrypt the FTP Password';
$l['no_ftp_encrypted_exp'] = 'This will store FTP Passwords of Domain in the database without encryption';
$l['pre_download_all'] = 'Enable Pre Download for all scripts';
$l['pre_download_all_exp'] = 'This will enable pre download for all scripts including new scripts added';

$l['tweet_vars_link'] = 'List of variables for Tweet message';
$l['tweet_vars'] = '[[SCRIPTNAME]] - Use this for script name <br />[[TYPE]] - Use this for script type Eg: PHP, PERL, etc <br />[[softurl]] - Use this for the URL of installation <br />[[cat]] - Use this for the script category Eg: Blog, CMS, etc <br />[[ver]] - Use this for the version of script installed <br />';

$l['session_timeout'] = 'Session Timeout';
$l['session_timeout_exp'] = 'Softaculous Session will remain active for the time specified.<br />Time should be in minutes. Default: 15';


$l['auto_backup_limit'] = 'Auto backup rotation limit';
$l['auto_backup_limit_exp'] = 'Choose the maximum limit for auto backups rotation for the endusers';
$l['auto_backup_unlimited'] = 'Unlimited';
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