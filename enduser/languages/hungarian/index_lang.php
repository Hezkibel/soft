<?php

//////////////////////////////////////////////////////////////
//===========================================================
// index_lang.php
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

$l['user_data_error_t'] = 'Felhasználói adathiba';
$l['user_data_error'] = APP.' nem tudja az előfizetési adatait betölteni. Kérjük jelezze a szerver adminisztrátorának.';

$l['remote_licence_t'] = 'Invalid License';
$l['remote_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['enterprise_licence_t'] = 'Invalid License';
$l['enterprise_licence'] = 'You are not using a valid license. Please report this to the server administrator!';

$l['no_license'] = 'A LICENSE fájl nem található! Kérjük jelezze a szerver adminisztrátorának.';

$l['today'] = '<b>Ma</b> at ';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Téma hiba';//Title
$l['init_theme_error'] = 'Nem lehet a téma-fájlt betölteni- &soft-1;.';

$l['init_theme_func_error_t'] = 'Téma funkció hiba';//Title
$l['init_theme_func_error'] = 'Nem lehet a téma funkcióit betölteni - &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous Disabled';
$l['disable_softaculous'] = 'Softaculous is Disabled for this User. Please contact System Administrator.';

$l['load_theme_settings_error'] = 'Nem lehet a téma beállításait betölteni.';


//Error Handle Function
$l['following_errors_occured'] = 'A hibák a következők';

//Success Message Function
$l['following_message'] = 'A következő üzenet jött vissza';

//Major Error Function
$l['fatal_error'] = 'Fatális hiba';
$l['following_fatal_error'] = 'A következő hiba történt';

//Message Function
$l['soft_message'] = APP.' üzenet';
$l['following_soft_message'] = 'A következő üzenet jött vissza';

//Update Softwares
$l['no_soft_found'] = 'Az alkalmazás nem található.....Frissítés szükséges';
$l['ver_not_match'] = 'A verziók nem egyeznek.....Frissítés szükséges';
$l['ver_match'] = 'Jelenlegi a legfrissebb......Folytatás';
$l['del_prev_files'] = 'Előző fájlok törlése......Done';
$l['fetch_latest'] = 'Legfrissebb letöltése......';
$l['error_fetch_latest'] = 'Nem tudom a legfrissebbet letölteni......Folytatás';
$l['error_save_latest'] = 'Nem tudom a legfrissebbet menteni......Folytatás';
$l['got_latest'] = 'Legfrissebb elmentve';
$l['unzip_latest'] = 'Fájlok kicsomagolása......';
$l['error_unzip_latest'] = 'Kicsomagolás sikertelen......Folytatás';
$l['unzipped_latest'] = 'Sikeresen kicsomagolva';

//Update Softaculous
$l['getting_info'] = 'Információ lekérése......';
$l['error_getting_latest'] = 'Információ lekérése sikertelen......Vége';
$l['got_info'] = 'Információk begyűjtve';
$l['manual_mode'] = APP.' új verziója manuális beavatkozást igényel......Megszakítva';
$l['no_updates'] = 'A jelenlegi verzió a legrissebb......Folytatom';
$l['fetch_upgrade'] = 'Frissítés letöltése......';
$l['error_fetch_upgrade'] = 'Nem tudom a frissítést letölteni......Vége';
$l['error_save_upgrade'] = 'Nem tudom a frissítést menteni......Vége';
$l['got_upgrade'] = 'A frissítő-fájl mentve';
$l['unzip_upgrade'] = 'Fájlok kicsomagolása......';
$l['error_unzip_upgrade'] = 'Kicsomagolás sikertelen......Vége';
$l['unzipped_upgrade'] = 'Kicsomagolás sikeres';
$l['md5_check'] = 'MD5 Check Successful';
$l['err_md5_check'] = 'MD5 Check for these files were not Successful';
$l['err_md5_file'] = ' does not exist';

//MySQL Errors
$l['err_selectmy'] = 'A MySQL adatbázis nem választható.';
$l['err_myconn'] = 'A kapcsolat a MySQL nem sikerül.';
$l['err_makequery'] = 'Nem tudom a lekérdezést végrehajtani';
$l['err_mynum'] = 'MySQL hiba szám';
$l['err_myerr'] = 'MySQL hiba';

//Importing Errors
$l['imp_wrong_softdomain'] = 'A domain név könyvtára &soft-1; nem található.';
$l['imp_softpath_wrong'] = '&soft-1; útvonala hibás vagy nem létezik.';
$l['imp_ins_exists'] = '&soft-1; már telepítve van ide: &soft-2;, ahogy a mi nyilvántartásunkból kiderül!';
$l['imp_no_func'] = '&soft-1; import funkcióját nem lehet betölteni.';
$l['imp_err'] = 'Hibák történtek az alkalmazás importálásánál itt: &soft-1;';

//hf_theme.php
$l['root_login'] = 'Logged in as ROOT';
$l['welcome'] = 'Üdvözöljük';
$l['logout'] = 'Kijelentkezés';
$l['page_time'] = 'Az oldal létrehozásához szükséges idő';
$l['times_are'] = 'Időzóna: GMT';
$l['time_is'] = 'Pillanatnyi idő';
$l['no_script_found'] = 'No such Script found!';

//The Category Language Variables
$l['forums'] = 'Forumok';
$l['blogs'] = 'Blogok';
$l['cms'] = 'Portálok/CMS';
$l['galleries'] = 'Galériák';
$l['wikis'] = 'Wiki-k';
$l['admanager'] = 'Hirdetők';
$l['calendars'] = 'Naptárak';
$l['games'] = 'Játékok';
$l['mail'] = 'Levelezés';
$l['polls'] = 'Kérdőívek';
$l['projectman'] = 'Projekt kezelés';
$l['ecommerce'] = 'E-kereskedelem';
$l['guestbooks'] = 'Vendégkönyvek';
$l['customersupport'] = 'Támogatás';
$l['others'] = 'Egyéb';
$l['music'] = 'Zene';
$l['video'] = 'Videó';
$l['files'] = 'File Management';
$l['go_cpanel'] = 'Vissza a kezelőfelületre';
$l['go_home'] = APP.' honlap';
$l['go_demos'] = 'Script Bemutatók';
$l['go_ratings'] = 'Script osztályzás';
$l['go_settings'] = 'Beállítások szerkesztése';
$l['go_email_settings'] = 'Email beállítások';
$l['go_installations'] = 'Összes telepítés';
$l['go_support'] = 'Súgó és támogatás';
$l['go_sync'] = 'Szinkronizálás a többi alkalmazás-telepítővel';
$l['go_backups'] = 'Mentések';
$l['go_tasklist'] = 'Task List';
$l['go_apps_installations'] = 'All Installed Applications';
$l['go_my_themes'] = 'My Themes';
$l['go_logout'] = 'Logout';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Keresés';
$l['back_to_top'] = 'Fel';

// Categories
$l['cat_php_forums'] = 'Fórumok';
$l['cat_php_blogs'] = 'Blogok';
$l['cat_php_cms'] = 'Portálok/CMS';
$l['cat_php_galleries'] = 'Galériák';
$l['cat_php_wikis'] = 'Wiki-k';
$l['cat_php_admanager'] = 'Hirdetés-kezelés';
$l['cat_php_calendars'] = 'Naptárak';
$l['cat_php_games'] = 'Játék';
$l['cat_php_mail'] = 'Levelezés';
$l['cat_php_polls'] = 'Kérdőívek';
$l['cat_php_projectman'] = 'Projekt kezelés';
$l['cat_php_ecommerce'] = 'E-kereskedelem';
$l['cat_php_guestbooks'] = 'Vendégkönyvek';
$l['cat_php_customersupport'] = 'Támogatás';
$l['cat_php_others'] = 'Egyebek';
$l['cat_php_music'] = 'Zene';
$l['cat_php_video'] = 'Videó';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Társadalmi hálózatok';
$l['cat_php_microblogs'] = 'Micro Blogok';
$l['cat_php_frameworks'] = 'Keretrendszerek';
$l['cat_php_educational'] = 'Oktatás';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB Tools';
$l['cat_php_files'] = 'File Management';
$l['cat_js_libraries'] = 'Könyvtárak';
$l['cat_js_widgets'] = 'Kütyük';
$l['cat_perl_blogs'] = 'Blogs';
$l['cat_perl_wikis'] = 'Wikis';
$l['cat_perl_forums'] = 'Forums';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_mail'] = 'Mails';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forums';
$l['cat_java_projectman'] = 'Project Management';
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
$l['classes_cryptography'] = 'Cryptography';
$l['classes_algorithms'] = 'Algorithms';
$l['classes_artificialintelligence'] = 'Artificial Intelligence';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Finances';
$l['classes_searching'] = 'Searching';
$l['classes_user_management'] = 'User Management';
$l['classes_utilitiesandtools'] = 'Utilities and Tools';
$l['classes_validation'] = 'Validation';
$l['classes_security'] = 'Security';
$l['classes_console'] = 'Console';
$l['classes_codegeneration'] = 'Code Generation';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrology';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biology';
$l['classes_blogs'] = 'Blogs';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Compression';
$l['classes_configuration'] = 'Configuration';
$l['classes_contentmanagement'] = 'Content Management';
$l['classes_conversion'] = 'Conversion';
$l['classes_datatypes'] = 'Datatypes';
$l['classes_databases'] = 'Databases';
$l['classes_debug'] = 'Debug';
$l['classes_designpatterns'] = 'Design Patterns';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulators';
$l['classes_filesandfolders'] = 'Files and Folders';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forums';
$l['classes_games'] = 'Games';
$l['classes_geography'] = 'Geography';
$l['classes_graphics'] = 'Graphics';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Language';
$l['classes_projectmanagement'] = 'Project Management';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Manage Domains';
$l['webuzo_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Webuzo';
$l['webuzo_license_exp_t'] = 'License Inactive';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Manage Domains';
$l['ampps_license_exp'] = 'Your license is not active or it has expired. If your license has expired, please renew it to continue using Ampps';
$l['ampps_license_exp_t'] = 'License Inactive';


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
$l['mail_install_php_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_php'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Telepítés időpontja : $time</if>

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
$l['mail_install_js_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_js'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Telepítés időpontja : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_perl'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Telepítés időpontja : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Új telepítés - $scriptname';
$l['mail_install_java'] = '$scriptname új telepítése befejeződött. A részletek:
Útvonal : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $admin_username>Adminisztrátor neve : $admin_username</if>
<if $admin_pass>Adminisztrátor jelszava : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Telepítés időpontja : $time</if>

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
$l['mail_update_sub'] = 'Alkalmazás-frissítések elérhetők';
$l['mail_update'] = 'Ez a levél az elavult alkalmazásokra figyelmeztet, amik telepítésre kerültek. Biztonsági okokból frissítse az elavult alkalmazásokat minél hamarabb.
A következő alkalmazásokhoz érhető el új frissítés:

$installation

Az alkalmazások frissítését itt végezheti el: Vezérlőpult -> '.APP.' -> Telepítések.
Itt lesz lehetősége az alkalmazások frissítésére.  

A rendszer adminisztrátora $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Removed Installation of $scriptname';
$l['mail_remove'] = 'An installation of $scriptname has been removed. Following were the details of the installation :
Útvonal : $path
<if $url>URL : $url</if>
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
Telepítés időpontja : $time
Time of Removal : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Script frissítések elérhetőek';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'A következő script frissítések érhetők el:

$installation

A scriptek frissítését itt végezheti el: Vezérlőpult -> '.APP.' -> Telepítések.
Itt lehetősége lesz a scriptek frissítésére.


$changelog

'.APP.' időzített feladat-végrehajtás $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Modified Installation Details of $scriptname';
$l['mail_editdetail'] = 'The installation details of $scriptname has been modified. Following are the modified details of the installation :
Útvonal : $path
URL : $url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>MySQL adatbázis : $dbname</if>
<if $dbuser>MySQL felhasználó : $dbuser</if>
<if $dbhost>MySQL szerver : $dbhost</if>
<if $dbpass>MySQL jelszó : $dbpass</if>
<if $cron>Cron időzítő : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
Telepítés időpontja : $time
Time of Modification : $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Backup of your $scriptname installation';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Failed : Backup of your $scriptname installation';
$l['mail_backup_fail'] = 'The backup of your $scriptname installation did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

The following error occured :
$error

Please try to create a backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Restore Language Strings
$l['mail_restore_sub'] = 'Restore of your $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Failed : Restore of your $scriptname';
$l['mail_restore_fail'] = 'The restore of your $scriptname did not complete successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

The following error occured :
$error

Please try to restore the backup again after some time.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';


// Install Template Vaiable CLASSES
$l['mail_install_classes_sub'] = 'New Installation of $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>

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

$l['err_openconfig'] = 'Could not open the Configuration File';
$l['err_writeconfig'] = 'Could not write the Configuration File';

$l['classes_con_failed'] = 'Error : Failed to Connect to Server .';
$l['cl_ratings'] = 'Ratings';
$l['cl_author'] = 'Author';
$l['cl_license'] = 'License';
$l['cl_version'] = 'Version';
$l['cl_show_files'] = 'Show Files';
$l['cl_install_but'] = 'Install';
$l['expand_view'] = 'Click here for full view';
$l['collapse_view'] = 'Click here for embedded view';
$l['email_off_notice'] = '<b>NOTE : Notification emails are disabled so you will not receive any email.</b>';

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
$l['January'] = 'Január';
$l['February'] = 'Február';
$l['March'] = 'Március';
$l['April'] = 'Aprilis';
$l['May'] = 'Május';
$l['June'] = 'Június';
$l['July'] = 'Július';
$l['August'] = 'Augusztus';
$l['September'] = 'Szeptember';
$l['October'] = 'Október';
$l['November'] = 'November';
$l['December'] = 'December';

?>
