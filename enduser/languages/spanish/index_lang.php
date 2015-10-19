<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Error en Datos de Usuario';
$l['user_data_error'] = ''.APP.' no ha podido cargar la Información de Cuenta. Por favor, contactar con el administrador del Servidor';

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = '¡No se ha podido encontrar el archivo de LICENCIA! Por favor, contactar con el administrador del Servidor.';

$l['today'] = '<b>Hoy</b> a las ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Error de plantilla';//Title
$l['init_theme_error'] = 'No se ha podido cargar el archivo de plantilla - &soft-1;.';

$l['init_theme_func_error_t'] = 'Error de Función de Plantilla';//Title
$l['init_theme_func_error'] = 'No se ha podido cargar la(s) funcion(es) de &soft-1;.';

$l['disable_softaculous_t'] = 'Deshabilitado';
$l['disable_softaculous'] = 'Esta deshabilitado para este usuario. Por favor contacte con el administrador.';

$l['load_theme_settings_error'] = 'No se ha podido cargar el archivo de plantillas.';


//Error Handle Function
$l['following_errors_occured'] = 'Se han encontrado los siguientes Errores';

//Success Message Function
$l['following_message'] = 'Se ha devuelto el siguiente mensaje';

//Major Error Function
$l['fatal_error'] = 'Error Grave';
$l['following_fatal_error'] = 'Ha ocurrido el siguiente error';

//Message Function
$l['soft_message'] = 'Mensaje '.APP.'';
$l['following_soft_message'] = 'Se ha devuelto el siguiente mensaje';

//Update Softwares
$l['no_soft_found'] = 'Software no encontrado.....Necesaria Actualización';
$l['ver_not_match'] = 'Las versiones no concuerdan.....Necesaria Actualización';
$l['ver_match'] = 'La versión actual ya se encuentra actualizada......Continuando';
$l['del_prev_files'] = 'Borrando los archivos previos......Done';
$l['fetch_latest'] = 'Adquiriendo actualización......';
$l['error_fetch_latest'] = 'No se ha adquirido el archivo de actualización......Continuando';
$l['error_save_latest'] = 'No se ha GUARDADO el archivo de actualización......Continuando';
$l['got_latest'] = 'Guardado el Archivo de Actualización';
$l['unzip_latest'] = 'Descomprimiendo archivos......';
$l['error_unzip_latest'] = 'Error al descomprimir......Abortando';
$l['unzipped_latest'] = 'Descomprensión correcta';

//Update Softaculous
$l['getting_info'] = 'Pidiendo información al servidor......';
$l['error_getting_latest'] = 'No se ha podido obtener información......Abortando';
$l['got_info'] = 'Información obtenida';
$l['manual_mode'] = 'La nueva versión de '.APP.' requiere instalación manual......Abortando';
$l['no_updates'] = 'La versión actual ya se encuentra actualizada......Continuando';
$l['fetch_upgrade'] = 'Adquiriendo actualización......';
$l['error_fetch_upgrade'] = 'No se ha adquirido el archivo de actualización......Abortando';
$l['error_save_upgrade'] = 'No se ha GUARDADO el archivo de actualización......Abortando';
$l['got_upgrade'] = 'Guardado el Archivo de Actualización';
$l['unzip_upgrade'] = 'Descomprimiendo archivos......';
$l['error_unzip_upgrade'] = 'Error al descomprimir......Abortando';
$l['unzipped_upgrade'] = 'Descomprensión correcta';
$l['md5_check'] = 'MD5 Comprobacion satisfactoria';
$l['err_md5_check'] = 'MD5 Comprobando los ficheros que no son correctos';
$l['err_md5_file'] = ' no existe';

//MySQL Errors
$l['err_selectmy'] = 'La base de datos MySQL no podía ser seleccionada.';
$l['err_myconn'] = 'La conexión con MySQL no se puede establecer.';
$l['err_makequery'] = 'No se pudo realizar la consulta numeradas';
$l['err_mynum'] = 'MySQL Error No';
$l['err_myerr'] = 'MySQL Error';

//Importing Errors
$l['imp_wrong_softdomain'] = 'La ruta del dominio &soft-1; no se ha encontrado.';//The path of the domain &soft-1; could not be found.
$l['imp_softpath_wrong'] = 'La ruta del &soft-1; es un error y no existe.';//The PATH of &soft-1; is WRONG and does not exist.
$l['imp_ins_exists'] = 'Según nuestros registros &soft-1; ya está instalado en &soft-2; y está mantenido por nosotros';//&soft-1; is already installed at &soft-2; as per our records and is being maintained by us!
$l['imp_no_func'] = 'La función de importación para &soft-1; no se pudo cargar.';//The import function for &soft-1; could not be loaded.
$l['imp_err'] = 'Hubo algunos errores al importar el software instalado en &soft-1;';//There were some errors while importing the software installed at &soft-1;

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Bienvenido';
$l['logout'] = 'Cerrar Sesión';
$l['page_time'] = 'Página creada en';
$l['times_are'] = 'Hora en GMT';
$l['time_is'] = 'Fecha y hora actual:';
$l['no_script_found'] = 'No such Script found!';

//The Category Language Variables
$l['forums'] = 'Foros';
$l['blogs'] = 'Blogs';
$l['cms'] = 'Portales/CMS';
$l['galleries'] = 'Galerías de imágenes';
$l['wikis'] = 'Wikis';
$l['admanager'] = 'Gestores de anuncios';
$l['calendars'] = 'Calendarios';
$l['games'] = 'Juegos';
$l['mail'] = 'Correo';
$l['polls'] = 'Votaciones y Encuestas';
$l['projectman'] = 'Gestor de proyectos';
$l['ecommerce'] = 'Comercio electrónico';
$l['guestbooks'] = 'Libros de visitas';
$l['customersupport'] = 'Ayuda al cliente';
$l['music'] = 'Música';
$l['video'] = 'Vídeo';
$l['others'] = 'Otros';
$l['files'] = 'File Management';
$l['go_cpanel'] = 'Volver al Panel de Control';
$l['go_home'] = ''.APP.' Inicio';
$l['go_demos'] = 'Demos';
$l['go_ratings'] = 'Valoraciones';
$l['go_settings'] = 'Editar Preferencias';
$l['go_email_settings'] = 'Preferencias de Correo';
$l['go_installations'] = 'Listado de Instalaciones';
$l['go_support'] = 'Ayuda';
$l['go_sync'] = 'Sincronizar automáticamente con otros instaladores';//Synchronize with other Auto Installers
$l['go_backups'] = 'Backups and Restore';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Search';
$l['back_to_top'] = 'Volver arriba';

// Categories
$l['cat_php_forums'] = 'Foros';
$l['cat_php_blogs'] = 'Blogs';
$l['cat_php_cms'] = 'Portales/CMS';
$l['cat_php_galleries'] = 'Galerías de imágenes';
$l['cat_php_wikis'] = 'Wikis';
$l['cat_php_admanager'] = 'Anuncios';
$l['cat_php_calendars'] = 'Calendarios';
$l['cat_php_games'] = 'Juegos';
$l['cat_php_mail'] = 'Correo';
$l['cat_php_polls'] = 'Votaciones y encuentas';
$l['cat_php_projectman'] = 'Gestor de proyectos';
$l['cat_php_ecommerce'] = 'Comercio electrónico';
$l['cat_php_guestbooks'] = 'Libros de visitas';
$l['cat_php_customersupport'] = 'Ayuda al cliente';
$l['cat_php_others'] = 'Otros';
$l['cat_php_music'] = 'Música';
$l['cat_php_video'] = 'Vídeo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Social Networking';
$l['cat_php_microblogs'] = 'Micro Blogs';
$l['cat_php_frameworks'] = 'Frameworks';
$l['cat_php_educational'] = 'Educacional';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'Gestion de Ficheros';
$l['cat_js_libraries'] = 'Librerias';
$l['cat_js_widgets'] = 'Widgets';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Gestor de proyectos';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogs';
$l['cat_java_wikis'] = 'Wikis';
$l['cat_python_wikis'] = 'Wikis';
$l['cat_python_projectman'] = 'Project Management';
$l['cat_apps_server_side_scripting'] = 'Server Side Scripting';
$l['cat_apps_web_servers'] = 'Web Servers';
$l['cat_apps_utilities'] = 'Utilities';
$l['cat_apps_libraries'] = 'Libraries';
$l['cat_apps_databases'] = 'Databases';
$l['cat_apps_stacks'] = 'Stacks';
$l['cat_apps_security'] = 'Security';
$l['cat_apps_statistics'] = 'Statistics';
$l['cat_apps_java_tools'] = 'Java Tools';
$l['cat_apps_java_containers'] = 'Java Containers';
$l['cat_apps_version_control'] = 'Version Control';
$l['cat_apps_modules'] = 'Modules';
$l['cat_apps_message_queue'] ='Message Queue';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Criptografia';
$l['classes_algorithms'] = 'Algoritmos';
$l['classes_artificialintelligence'] = 'Inteligencia Artificial';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finanzas';
$l['classes_searching'] = 'Buscadores';
$l['classes_user_management'] = 'Gestion de Usuarios';
$l['classes_utilitiesandtools'] = 'Utilidades y Herramientas';
$l['classes_validation'] = 'Validacion';
$l['classes_security'] = 'Seguridad';
$l['classes_console'] = 'Consola';
$l['classes_codegeneration'] = 'Generadores de Codigos';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compresion';
$l['classes_configuration'] = 'Configuracion';
$l['classes_contentmanagement'] = 'Gestion de Contenidos';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Bases de Datos';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Diseño de Patrones';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emuladores';
$l['classes_filesandfolders'] = 'Archivos y directorios';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Foros';
$l['classes_games'] = 'Juegos';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Graficos';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Idiomas';
$l['classes_projectmanagement'] = 'Gestor de Proyectos';

// Webuzo Strings 
$l['webuzo'] = 'Webuzo'; 
$l['go_domain'] = 'Gestor de Dominios'; 
$l['webuzo_license_exp'] = 'Su licencia ha expirado. Si su licencia ha expirado, por favor renuevela para poder seguir utilizando las aplicaciones.'; 
$l['webuzo_license_exp_t'] = 'Licencia inactiva';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Gestor de Dominios';
$l['ampps_license_exp'] = 'Su licencia ha expirado. Si su licencia ha expirado, por favor renuevela para poder seguir utilizando las aplicaciones';
$l['ampps_license_exp_t'] = 'Licencia inactiva';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////


$l['notify_enable'] = 'Enabled';
$l['notify_disable'] = 'Disabled';

$l['autoupgrade_enable'] = 'Enabled';
$l['autoupgrade_disable'] = 'Disabled';

// Auto backup strings
$l['auto_backup_enable'] = 'Enabled';
$l['auto_backup_disable'] = 'Disabled';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_php'] = 'Se ha realizado una nueva instalación de $scriptname $version. Detalles: 
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Clone Installation of $scriptname';
$l['mail_clone'] = 'Your installation of $scriptname $version has been cloned successfully.

Your original installation details :
Original Path : $old_path
Original URL : $old_url

Your cloned installation details :
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_js_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_js'] = 'Una nueva instalacion de $scriptname $version ha sido completada. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_perl'] = 'Una nueva instalacion de $scriptname $version ha sido completada. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nueva Instalación de $scriptname';
$l['mail_install_java'] = 'Una nueva instalacion de $scriptname $version se ha completado. Los detalles de la instalacion se mostraran a continuacion:
Ruta : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Directorio de datos: $datadirectory</if>
<if $wwwdir>Directorio Web : $wwwdir</if>
<if $admin_username>Usuario Administrador : $admin_username</if>
<if $admin_pass>Password  Administrador: $admin_pass</if>
<if $admin_email>Email Administrador : $admin_email</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Fecha de la Instalación : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_install_python_sub'] = 'New Installation of $scriptname';
$l['mail_install_python'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Update template Variable (From ADMIN)
$l['mail_update_sub'] = 'Scripts Updates Available';
$l['mail_update'] = 'Este e-mail está relacionado con la instalación antigua de ciertos scripts PHP que tiene instalados. Por razones de seguridad, debe actualizar estas instalaciones obsoletas tan pronto como sea posible.
Las actualizaciones de secuencias de comandos siguientes están disponibles:

$installation

Para actualizar estos scripts debe ir al Panel de Control -> '.APP.' -> Instalaciones.
Alli podra actualizar los scripts.

From System Administrator $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Eliminada la instalación de $scriptname';
$l['mail_remove'] = 'Se ha eliminado la instalación de $scriptname. Detalles: 
Ruta : $path
<if $url>URL : $url</if>
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
Fecha de la Instalación : $time
Fecha de la eliminación : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Actualizaciones disponibles';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'Las siguientes actualizaciones estan disponibles:

$installation

Para actualizar estos scripts debe ir al Panel de Control -> '.APP.' -> Instalaciones.
Alli podra actualizar los scripts.


$changelog

From '.APP.' Cron Jobs $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Detalles del ainstalacion modificada de $scriptname';
$l['mail_editdetail'] = 'Los detalles de la instalacion de $scriptname han sido modificados. A continuacion se mostraran los detalles de la instalacion : 
Ruta : $path
URL : $url
<if $datadirectory>Directorio de datos : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $admin_username>Usuario Amdinistrador : $admin_username</if>
<if $admin_pass>Password Administrador : $admin_pass</if>
<if $dbname>Base de datos MySQL : $dbname</if>
<if $dbuser>Usuario MySQL : $dbuser</if>
<if $dbhost>Host : $dbhost</if>
<if $dbpass>Contraseña MySQL : $dbpass</if>
<if $cron>Tareas programadas : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
Fecha de la Instalación : $time
Fecha de Modification : $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Copia de Seguridad de  $scriptname';
$l['mail_backup'] = 'Las copia de seguridad de su $scriptname ha sido completada satisfactoriamente.
Los detalles son los siguientes :
Ruta de instalacion : $path
URL de instalacion : $url
Ruta de Copia de Seguridad : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

Puede descargar el backup de la seccion de Backups en '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Error : Copia de Seguridad de su $scriptname instalacion';
$l['mail_backup_fail'] = 'La copia de seguridad de su $scriptname instalacion no ha sido completada satisfactoriamente.
Los detalles son los siguientes :
Ruta de instalacion : $path
URL de instalacion : $url
Ruta de Copia de Seguridad : $backup_file

El siguiente error ha ocurrido :
$error

Por favor, intente crear la Copia de Seguridad de nuevo despues de unos minutos.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restauracion de $scriptname';
$l['mail_restore'] = 'La restauracion de $scriptname de la copia de seguridad ha terminado satisfactoriamente.
Los detalles se muestran a continuacion :
Ruta de instalacion : $path
URL de instalacion : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Error : Restauracion de $scriptname';
$l['mail_restore_fail'] = 'La restauracion de $scriptname no se ha completado de manera satisfactoria.
Los detalles se mostraran a continuacion :
Ruta de instalacion : $path
URL de instalacion : $url

El siguiente error ha ocurrido :
$error

Por favor, intente restaurar la copia de seguridad de nuevo después de unos minutos.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'Una nueva instalación de la version $classesname $version se ha completado. Los detalles de la instalación se muestra a continuación:
Path : $path
<if $time>Tiempo de instalacion : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = '$scriptname installation of user $user has been upgraded successfully';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Upgrade process for $scriptname installation failed and was restored from the backup';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = '$scriptname installation has been successfully upgraded by System Admin';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin was unsuccessful';
$l['mail_adminupgrade_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade process had failed.
A backup had been created before upgrading your installation, and your installation has been successfully restored from this backup.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR ADMIN)
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Upgrade process of $scriptname installation of user $user has failed';
$l['mail_adminupgrade_restore_fail_admin'] = 'Upgrade process of $scriptname installation of user $user has failed.
A backup had created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.
';

// ALL IS FAILED (Upgrade and RESTORE toooo) (FOR USER)
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation by System Admin failed';
$l['mail_adminupgrade_restore_fail_user'] = 'The System Admin had tried to upgrade your $scriptname installation, but the upgrade failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

Following are the installation and backup details which you might require to restore your $scriptname installation :
PATH_TO_YOUR_BACKUP_FILE : $backup_path
PATH_OF_INSTALLATION : $softpath
<if $dbname>DATABASE_NAME : $dbname</if>
<if $dbuser>DATABSE_USER : $dbuser</if>
<if $dbpass>DATABASE_PASS : $dbpass</if>
<if $dbhost>DATABASE_HOST : $dbhost</if>

Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// USER UPGRADE - 3
////////////////////////

// When upgraded by user successfully (By user)
$l['mail_userupgrade_success_user_sub'] = '$scriptname installation upgraded successfully';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Upgrade of your $scriptname installation failed';
$l['mail_userupgrade_restore_fail_user'] = 'The upgrade of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// AUTO UPGRADE - 3
////////////////////////

// When AUTOUPGRADED successfully
$l['mail_autoupgrade_success_user_sub'] = '$scriptname Installation Auto Upgraded Successfully';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Auto Upgrade of your $scriptname installation failed';
$l['mail_autoupgrade_restore_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
A backup had been created before upgrading, but the restore process also failed !

It will require a manual restore. Guide for the manual restore is available here :
http://www.softaculous.com/docs/Manual_Restore

The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
The Upgrade error details are as follows :
Error : $upgrade_error
</if>
<if $error>
The Restore error details are as follows :
Error : $error
</if>

The '.APP.' team is available for help as well. You can contact the '.APP.' Team (support@'.strtolower(APP).'.com) if you face any problems.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// PRE UPGRADE CHECK 
////////////////////////

// If pre upgradation check fails while AUTOUPGRADE (FOR USER)
$l['mail_autoupgrade_precheck_fail_sub'] = 'Pre Upgrade Check failed';
$l['mail_autoupgrade_precheck_fail'] = 'Auto upgrade process for the following installation cannot be completed, because it does not meet the upgrade requirements :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
<if $upgrade_error>
Error : $upgrade_error
</if>
<if $error>
Error : $error
</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

/////////////////////////////////
// Backup Failed CLI UPGRADE
/////////////////////////////////

// If a backup fails before AUTO UPGRADING an installation (FOR USER)
$l['mail_autoupgrade_backup_fail_sub'] = 'Backup process failed before auto upgrading $scriptname installation';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'No se pudo abrir el archivo de configuración';
$l['err_writeconfig'] = 'No se pudo escribir el archivo de configuración';

$l['classes_con_failed'] = 'Error: No se pudo conectar con el servidor .';
$l['cl_ratings'] = 'Valoraciones';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licencia';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Mostrar ficheros';
$l['cl_install_but'] = 'Instalacion';
$l['expand_view'] = 'Haga clic aquí para una vista completa';
$l['collapse_view'] = 'Haga clic aquí para una vista incrustada';
$l['email_off_notice'] = '<b>NOTA : Correos electrónicos de notificación están desactivadas por lo que no recibirá ningún correo electrónico.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Welcome to Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Required &soft-1; version &soft-2; &soft-3; AND found version is : ';
$l['req_ext_nf'] = 'Required &soft-1; extension not found :';
$l['req_func_nf'] = 'Required &soft-1; function not found';
$l['req_ext_ver'] = 'Required &soft-1; &soft-2; extension version &soft-3; &soft-4; BUT found &soft-5;';
$l['gt'] = 'greater than';
$l['lt'] = 'less than';
$l['ge'] = 'greater than equal to';
$l['le'] = 'less than equal to';
$l['eq'] = 'is';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatic Backup of your $scriptname installation';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Failed : Automatic Backup of your $scriptname installation';
$l['mail_auto_backup_fail'] = 'The automatic backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

The following error occured :
$error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Email for sending the list of scripts which does not meet the requirements.
$l['mail_script_requirement_sub'] = 'Scripts requirements failed log';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'I just installed #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'I just installed #[[SCRIPTNAME]] via #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'I just upgraded #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'I just cloned #[[SCRIPTNAME]] on [[softurl]] via #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'Enero';
$l['February'] = 'Febrero';
$l['March'] = 'Marzo';
$l['April'] = 'Abril';
$l['May'] = 'Mayo';
$l['June'] = 'Junio';
$l['July'] = 'Julio';
$l['August'] = 'Agosto';
$l['September'] = 'Septiembre';
$l['October'] = 'Octubre';
$l['November'] = 'Noviembre';
$l['December'] = 'Diciembre';

?>