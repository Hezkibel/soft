<?php

//////////////////////////////////////////////////////////////
//===========================================================
// settings_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 1.0
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

$l['no_path'] = 'No se ha especificado la ruta';
$l['wrong_path'] = 'No se ha podido localizar el archivo universal.php en la ruta especificada';
$l['no_softscripts'] = 'No se ha dado la ruta de la ubicación de los Programas';
$l['wrong_softscripts'] = 'La ruta de los Programas es incorrecta. No se han encontrado Programas';
$l['no_sn'] = 'No se ha especificado el nombre del sitio.';
$l['no_cookie_name'] = 'No se ha especificado el nombre de cookie';
$l['no_soft_email'] = 'No se ha especificado la dirección de correo';
$l['wrong_soft_email'] = 'La dirección de correo es no es válida';
$l['wrong_from_email'] = 'El destinatario de correo no es valido';
$l['no_license'] = 'No se ha enviado la clave de licencia';
$l['no_lang'] = 'No se ha seleccionado el idioma';
$l['wrong_lang'] = 'El idioma seleccionado no es válido';
$l['no_theme_folder'] = 'No se ha seleccionado la plantilla';
$l['wrong_theme_folder'] = 'La plantilla seleccionada no es válida';
$l['no_timezone'] = 'No se ha seleccionado la Zona Horaria';
$l['wrong_timezone'] = 'La Zona Horaria seleccionada no es válida';
$l['no_cron_time'] = 'No se ha especificado una hora para las Tareas Programadas';
$l['no_off_message'] = 'No se ha especificado asunto de desactivación';
$l['no_off_subject'] = 'No se ha especificado un mensaje de desactivación';
$l['saving_error'] = 'Hubo un error al guardar las preferencias';
$l['no_update'] = 'No se han guardado las preferencias';
$l['invalid_update'] = 'Preferencias de actualizacion invalidas';
$l['no_protocol'] = 'No se ha seleccionado protocolo';
$l['wrong_protocol'] = 'La seleccion del protocolo es invalida';
$l['wrong_network_interface'] = 'The network interface you specified is not valid';
$l['pass_strength_error'] = 'Password strength must be an integer only, between 0 to 100';
$l['err_binary_path'] = 'It seems that the binary does not exist at the defined path. Please check it and try again.';

//Theme Strings
$l['<title>'] = APP.' - Centro de Preferencias';
$l['settings_saved'] = 'Las preferencias se han guardado correctamente';
$l['pathhead'] = 'Ruta de los Programas';
$l['softpath'] = 'Ruta a '.APP;
$l['softpath_exp'] = 'Es la ruta donde se ubican todos los archivos a excepción de los programas';
$l['softscripts'] = 'Ruta de los programas';
$l['softscripts_exp'] = 'Es la ruta donde se ubican todos los programas';
$l['gen_set'] = 'Preferencias Generales';
$l['sitename'] = 'Nombre del Sitio';
$l['sitename_exp'] = 'El nombre del Servidor ó Compañía que está utilizando Softaculous. Aparecerá en las páginas del instalador '.APP;
$l['cook_name'] = 'Nombre de Cookie';
$l['cook_name_exp'] = 'El nombre de Cookie que será almacenada en los navegadores.';
$l['comp_output'] = 'Comprensión';
$l['comp_output_exp'] = 'Al comprimir se ahorra gran cantidad de transferencia de datos.';
$l['soft_email'] = 'Dirección de correo';
$l['soft_email_exp'] = 'Dirección de correo utilizada en el remitente de los correos automáticos enviados por '.APP;
$l['from_email'] = 'From Email Address';
$l['from_email_exp'] = 'The email address for the FROM headers.';
$l['license'] = 'Archivo de Licencia';
$l['license_exp'] = 'Por favor, escribe el archivo de licencia generado por '.APP;
$l['choose_lang'] = 'Idioma';
$l['choose_lang_exp'] = 'Idioma preferido';
$l['choose_theme'] = 'Plantilla';
$l['choose_theme_exp'] = 'La plantilla seleccionada actuará como plantilla predeterminada para '.APP;
$l['timezone'] = 'Zona Horaria';
$l['update_settings'] = 'Preferencias de Actualización';
$l['auto_upd_softac'] = 'Actualizar automáticamente '.APP;
$l['auto_upd_softac_exp'] = 'Si esta habilitado '.APP.' se actualizara automaticamente a la ultima version. <br />The <b>Stable</b> Será ejecutada y puesto a prueba. <br />La <b>release</b> contiene la utima version y caracteristicas.';
$l['never_update'] = 'No actualizar nunca';
$l['stable'] = 'Estable (Recomendado)';
$l['release_cand'] = 'Version Release  (Experimental!)';
$l['auto_upd_soft'] = 'Actualizacion automatica de Scripts';
$l['auto_upd_soft_exp'] = 'Selecciona esta opción para que los diferentes Programas se actualicen a su última versión';
$l['auto_add_soft'] = 'Añadir Nuevos Scripts Automaticamente';
$l['auto_add_soft_exp'] = 'Selecciona esta opción para activar automáticamente los nuevos Programas. RECOMENDADO';
$l['email_upd_soft'] = 'Notificar Actualizaciones';
$l['email_upd_soft_exp'] = 'Se enviará un Email cuando existan actualizaciones disponibles de '.APP.' y/o actualizaciones automáticas realizadas';
$l['email_upd_softs'] = 'Notificar la actualizacion de Scripts';
$l['email_upd_softs_exp'] = 'Se enviará un Email cuando existan actualizaciones disponibles de los Programas y/o actualizaciones automáticas realizadas';
$l['cron_time'] = 'Tareas programadas';
$l['cron_time_exp'] = 'Hora para comprobar actualizaciones. No tocar si no se está familiarizado con las Tareas Programadas';
$l['disable_soft'] = 'Desactivar '.APP;
$l['soft_off'] = 'Desactivar '.APP;
$l['soft_off_exp'] = '¡Esta opción desactiva '.APP.'!';
$l['off_sub'] = 'Asunto de desactivación';
$l['off_message'] = 'Mensaje de desactivación';
$l['edit_settings'] = 'Editar Preferencias';
$l['chmod_files'] = 'CHMOD Archivos';//CHMOD Files
$l['chmod_files_exp'] = 'Esto es útil si tiene instalado suPHP y '.APP.' no es capaz de detectarlo. Deja en blanco si no estás seguro.';//This is useful if you have suPHP installed and Softaculous is unable to detect it. Leave blank if unsure.
$l['chmod_dir'] = 'Directorios CHMOD';//CHMOD Directories
$l['chmod_dir_exp'] = 'Esto es útil si tiene instalado suPHP y '.APP.' no es capaz de detectarlo. Deja en blanco si no estás seguro.';//This is useful if you have suPHP installed and Softaculous is unable to detect it. Leave blank if unsure.
$l['is_vps'] = 'Es VPS';//Is VPS
$l['is_vps_exp'] = 'Si este servidor es un VPS, por favor marca esta casilla.';//If this server is a VPS then please check this box.
$l['eu_news_off'] = 'Deshabilitar usuario Noticias';
$l['eu_news_off_exp'] = 'Si se selecciona esto, desactivarás la noticia de usuario final de las secuencias de comandos diferentes. Esta noticia es para los usuarios. Le da las últimas noticias de desarrollo en varios alfabetos, sus actualizaciones, etc';
$l['logo_url'] = 'URL del logo';
$l['logo_url_exp'] = 'Si se deja vacío se mostrará el logo de '.APP;
$l['php_bin'] = 'PHP Binary';
$l['php_bin_exp'] = 'Este es el bin que se usará para CRON Job. Si se deja vacío entonces se utilizará <b>/usr/bin/php</b>.';
$l['end_user_set'] = 'Panel de Configuracion de Usuario Final';
$l['off_sync_link'] = 'Deshabilitar Enlace de sincronizacion';
$l['off_sync_link_exp'] = 'Esto desactivará el enlace Sincronizar para los usuarios finales.';
$l['off_panel_link'] = 'Desactivar Link Control Panel';
$l['off_panel_link_exp'] = 'Esto desactivara el panel de Control en los usuarios finales.';
$l['chmod_conf_file'] = 'CHMOD Config files';
$l['chmod_conf_file_exp'] = 'Los archivos de configuración de secuencias de comandos será CHMOD a este valor. El valor predeterminado es 0644. (No editar el archivo / dejar en blanco si usted no lo sabe!)';
$l['suphp_detected'] = 'suPHP Detectado';
$l['no_prefill'] = 'No esta predefinido el Nombre de Directorio';
$l['no_prefill_exp'] = 'No esta predefinido el nombre de directorio con los scripts por defecto.';
$l['footer_link'] = 'Enlace de Pie de Pagina';
$l['footer_link_exp'] = 'Cuando alguien instala un script, este enlace / texto será insertado en el pie de página de dicha instalación';

$l['eu_email_off'] = 'Desactivar el envio de emails de actualizaciones para el usuario final'; 
$l['eu_email_off_exp'] = 'Si no especifica ningún correo electrónico será enviado al usuario final cuando haya una actualización disponible.'; 
$l['random_pass'] = 'Generar contraseñas aleatorias para los usuarios'; 
$l['random_pass_exp'] = 'Si se selecciona aleatoriamente generados contraseñas de administrador se hará durante una instalación.'; 
$l['off_demo_link'] = 'Apagar Demos script';
$l['off_demo_link_exp'] = 'Esto desactivará las demostraciones para los usuarios finales.';
$l['off_rating_link'] = 'Apagar valoraciones de scripts';
$l['off_rating_link_exp'] = 'Esto desactivará las calificaciones de los usuarios finales.';
$l['off_review_link'] = 'Desactivar comentarios de scripts';
$l['off_review_link_exp'] = 'Esto desactivará las críticas de los usuarios finales.';
$l['off_screenshot_link'] = 'Desactivar imagenes de los scripts';
$l['off_screenshot_link_exp'] = 'Esto desactivará las imagenes para los usuarios finales.';
$l['random_dbprefix'] = 'Generar Prefijo de la base de datos al azar para los usuarios';
$l['random_dbprefix_exp'] = 'Si se marca, se generara un prefijo de la base de datos al azar durante la instalación.';
$l['remote_mysql'] = 'Nombre de maquina Mysql ';
$l['remote_mysql_exp'] = 'Si desea usar el control remoto mysql, especifique el nombre de host o remoto Mysql IP';
$l['perl_scripts'] = 'Desactivar scripts PERL';
$l['perl_scripts_exp'] = 'Esto desactivará los scripts de Perl para los usuarios finales';
$l['show_top_scripts'] = 'Mostrar grupo Scripts Top';
$l['show_top_scripts_exp'] = 'Esto mostrará el Grupo Scripts Top de los usuarios finales para facilitar el acceso a las páginas de instalación scripts. Para desactivar esta función, deje este campo <b>en blanco</b>.';
$l['err_change_app_name'] = 'Se produjo un error al cambiar el nombre del grupo';
$l['user_mod_dir'] = 'Use USER MOD DIR';
$l['user_mod_dir_exp'] = 'Los usuarios pueden instalar scripts en http://IP/~user';
$l['off_email_link'] = 'Deshabilitar el email a los usuarios finales';
$l['off_email_link_exp'] = 'Esto desactivará el envio por correo electrónico de los usuarios finales y también desactivar los correos electrónicos que se envían durante la instalación, desinstalaciones, etc.';
$l['disable_classes'] = 'Deshabilitar PHP Classes';
$l['disable_classes_exp'] = 'Esto deshabilitara las PHP Classes al usuario final.';
$l['panel_hf'] = 'Show Softaculous in control panel\'s native UI';
$l['panel_hf_exp'] = 'If this is enabled then Softaculous will be shown in control panel\'s native UI.';
$l['disable_backup_restore'] = 'Desactivar la copia de seguridad / restauración para los usuarios finales';
$l['disable_backup_restore_exp'] = 'Esto desactivará la copia de seguridad y restaurar la función para usuarios finales.';
$l['nolabels'] = 'Deshabilitar toda la categoria de scripts.';
$l['nolabels_exp'] = 'Si se habilita de ninguna categoría se mostrará en el panel usuario final. es decir, PHP, Jvascripts, PERL, estas clases categoría todo se desactivará.';
$l['settings'] = APP.' Configuracion';
$l['disable_reseller_panel'] = 'Desactivar Panel de Revendedor';
$l['disable_reseller_panel_exp'] = 'Si se habilita el acceso a los revendedores no será capaz de acceder a panel de revendedor.';
$l['choose_protocol'] = 'Elija Protocolo';
$l['choose_protocol_exp'] = 'Elija su protocolo preferido. Se selecciona por defecto para usuario final.';
$l['random_username'] = 'Generar nombre de usuario aleatorio para los usuarios';
$l['random_username_exp'] = 'Si se selecciona se generaran aleatoriamente los nombres de usuario durante la instalación.';
$l['network_interface'] = 'Network Interface';
$l['network_interface_exp'] = 'The public network interface of the server. Leave blank if you dont know';
$l['hide_dbprefix'] = 'Hide the Databse Prefix for the script';
$l['hide_dbprefix_exp'] = 'If checked, then no Database Prefix will be available for the Script.';
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