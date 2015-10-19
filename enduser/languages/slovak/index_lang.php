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

$l['user_data_error_t'] = 'Chyba dát používateľa';
$l['user_data_error'] = APP.' was unable to load your account information. Please report this to the server administrator!';

$l['remote_licence_t'] = 'Neplatná licencia';
$l['remote_licence'] = 'Používate neplatnú licenciu. Prosím, oznámte to správcovi servera!';

$l['enterprise_licence_t'] = 'Neplatná licencia';
$l['enterprise_licence'] = 'Používate neplatnú licenciu. Prosím, oznámte to správcovi servera!';

$l['no_license'] = 'Súbor LICENCIA nemohol byť nájdený! Prosím, oznámte to správcovi servera.';

$l['today'] = '<b>Dnes</b> o';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Chyba motívu';//Title
$l['init_theme_error'] = 'Nebolo možné načítať súbor motívu - &soft-1;.';

$l['init_theme_func_error_t'] = 'Chyba funkcie motívu';//Title
$l['init_theme_func_error'] = 'Nebolo možné načítať funkciu(/-ie) motívu &soft-1;.';

$l['disable_softaculous_t'] = 'Softaculous zakázaný';
$l['disable_softaculous'] = 'Softaculous je pre tohto používateľa zakázaný. Prosím, kontaktujte správcu.';

$l['load_theme_settings_error'] = 'Nebolo možné načítať súbor s nastaveniami motívov.';


//Error Handle Function
$l['following_errors_occured'] = 'Vyskytli sa nasledujúce chyby';

//Success Message Function
$l['following_message'] = 'Bola vrátená nasledujúca správa';

//Major Error Function
$l['fatal_error'] = 'Fatálna chyba';
$l['following_fatal_error'] = 'Vyskytla sa nasledujúca chyba';

//Message Function
$l['soft_message'] = APP.' Message';
$l['following_soft_message'] = 'Bola vrátená nasledujúca správa';

//Update Softwares
$l['no_soft_found'] = 'Softvér nebol nájdený.....Potrebná aktualizácia';
$l['ver_not_match'] = 'Verzie sa nezhodujú.....Potrebná aktualizácia';
$l['ver_match'] = 'Súčasná verzia je najnovšia verzia.....Pokračujem';
$l['del_prev_files'] = 'Zmazanie predchádzajúcich súborov.....Hotovo';
$l['fetch_latest'] = 'Získavam najnovšie súbory......';
$l['error_fetch_latest'] = 'Nebolo možné získať najnovšie súbory......Pokračujem';
$l['error_save_latest'] = 'Nebolo možné uložiť najnovší súbor......Pokračujem';
$l['got_latest'] = 'Najnovší súbor bol uložený';
$l['unzip_latest'] = 'Rozbaľovanie súborov......';
$l['error_unzip_latest'] = 'Chyba pri rozbaľovaní......Pokračujem';
$l['unzipped_latest'] = 'Rozbaľovanie úspešné';

//Update Softaculous
$l['getting_info'] = 'Požadujem informácie......';
$l['error_getting_latest'] = 'Nebolo možné získať informácie......Opúštam';
$l['got_info'] = 'Informácie získané';
$l['manual_mode'] = 'Nová verzia '.APP.' vyžaduje ľudskú pozornosť......Opúšťam';
$l['no_updates'] = 'Súčasná verzia je najnovšia verzia.....Pokračujem';
$l['fetch_upgrade'] = 'Získavam aktualizáciu......';
$l['error_fetch_upgrade'] = 'Nebolo možné získať aktualizáciu......Opúšťam';
$l['error_save_upgrade'] = 'Nebolo možné uložiť súbor aktualizácie......Opúšťam';
$l['got_upgrade'] = 'Súbor aktualizácií uložený';
$l['unzip_upgrade'] = 'Rozbaľovanie súborov......';
$l['error_unzip_upgrade'] = 'Chyba pri rozbaľovaní......Opúštam';
$l['unzipped_upgrade'] = 'Rozbaľovanie úspešné';
$l['md5_check'] = 'Kontrola MD5 úspešná';
$l['err_md5_check'] = 'Kontrola MD5 pre tieto súbory nebola úspešná';
$l['err_md5_file'] = 'neexistuje';

//MySQL Errors
$l['err_selectmy'] = 'MySQL databáza nemohla byť vybraná.';
$l['err_myconn'] = 'MySQL spojenie nemohlo byť nadviazané.';
$l['err_makequery'] = 'Nebolo možné vykonať číslovanú požiadavku';
$l['err_mynum'] = 'Chyba MySQL č.';
$l['err_myerr'] = 'Chyba MySQL';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Cesta domény &soft-1; nebola nájdená.';
$l['imp_softpath_wrong'] = 'Cesta &soft-1; je nesprávna a neexistuje.';
$l['imp_ins_exists'] = '&soft-1; už je nainštalovaný v &soft-2; podľa našich záznamov a je nami spravovaný!';
$l['imp_no_func'] = 'Funkcia importu pre &soft-1; nemohla byť načítaná.';
$l['imp_err'] = 'Vyskytli sa chyby pre importe softvéru inštalovaného v &soft-1;';

//hf_theme.php
$l['root_login'] = 'Prihlásený ako ROOT';
$l['welcome'] = 'Vitajte';
$l['logout'] = 'Odhlásenie';
$l['page_time'] = 'Stránka vytvorená v';
$l['times_are'] = 'Všetky časy sú GMT';
$l['time_is'] = 'Teraz je';
$l['no_script_found'] = 'Nebol nájdený taký skript!';

//The Category Language Variables
$l['forums'] = 'Fórum';
$l['blogs'] = 'Blogy';
$l['cms'] = 'Portály/CMS';
$l['galleries'] = 'Galérie obrázkov';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Správa reklám';
$l['calendars'] = 'Kalendáre';
$l['games'] = 'Hry';
$l['mail'] = 'Maily';
$l['polls'] = 'Prieskumy a ankety';
$l['projectman'] = 'Správa projektov';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Knihy hostí';
$l['customersupport'] = 'Zákaznícka  podpora';
$l['others'] = 'Ostatné';
$l['music'] = 'Hudba';
$l['video'] = 'Video';
$l['files'] = 'Správa súborov';
$l['go_cpanel'] = 'Prejsť do Control Panela';
$l['go_home'] = APP.' Home';
$l['go_demos'] = 'Ukážky skriptov';
$l['go_ratings'] = 'Hodnotenia skriptu';
$l['go_settings'] = 'Upraviť nastavenia';
$l['go_email_settings'] = 'Nastavenia emailu';
$l['go_installations'] = 'Všetky inštalácie';
$l['go_support'] = 'Pomoc a podpora';
$l['go_sync'] = 'Synchronizovať s inými auto inštalátormi';
$l['go_backups'] = 'Zálohovanie a obnova';
$l['go_tasklist'] = 'Zoznam úloh';
$l['go_apps_installations'] = 'Všetky nainštalované aplikácie';
$l['go_my_themes'] = 'Moje motívy';
$l['go_logout'] = 'Odhlásenie';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Hľadať';
$l['back_to_top'] = 'Späť na začiatok';

// Categories
$l['cat_php_forums'] = 'Fórum';
$l['cat_php_blogs'] = 'Blogy';
$l['cat_php_cms'] = 'Portály/CMS';
$l['cat_php_galleries'] = 'Galérie obrázkov';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Správa reklám';
$l['cat_php_calendars'] = 'Kalendáre';
$l['cat_php_games'] = 'Hry';
$l['cat_php_mail'] = 'Maily';
$l['cat_php_polls'] = 'Prieskumy a ankety';
$l['cat_php_projectman'] = 'Správa projektov';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Knihy hostí';
$l['cat_php_customersupport'] = 'Zákaznícka  podpora';
$l['cat_php_others'] = 'Ostatné';
$l['cat_php_music'] = 'Hudba';
$l['cat_php_video'] = 'Video';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Sociálne siete';
$l['cat_php_microblogs'] = 'Mikro blogy';
$l['cat_php_frameworks'] = 'Framework';
$l['cat_php_educational'] = 'Vzdelávacie';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'DB nástroje';
$l['cat_php_files'] = 'Správa súborov';
$l['cat_js_libraries'] = 'Knižnice';
$l['cat_js_widgets'] = 'Widgety';
$l['cat_perl_blogs'] = 'Blogy';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Fórum';
$l['cat_perl_mail'] = 'Maily';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Fórum';
$l['cat_java_projectman'] = 'Správa projektov';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogy';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_python_wikis'] = 'Wiki';
$l['cat_python_projectman'] = 'Správa projektov';
$l['cat_apps_server_side_scripting'] = 'Skriptovanie na strane servera';
$l['cat_apps_web_servers'] = 'Webové servery';
$l['cat_apps_utilities'] = 'Nástroje';
$l['cat_apps_libraries'] = 'Knižnice';
$l['cat_apps_databases'] = 'Databázy';
$l['cat_apps_stacks'] = 'Zásobníky';
$l['cat_apps_security'] = 'Bezpečnosť';
$l['cat_apps_statistics'] = 'Štatistiky';
$l['cat_apps_java_tools'] = 'Java nástroje';
$l['cat_apps_java_containers'] = 'Java kontajnery';
$l['cat_apps_version_control'] = 'Riadenie verzií';
$l['cat_apps_modules'] = 'Moduly';
$l['cat_apps_message_queue'] = 'Front správ';

// Classes Categories
$l['classes_ajax'] = 'Ajax';
$l['classes_cryptography'] = 'Kryptografia';
$l['classes_algorithms'] = 'Algoritmy';
$l['classes_artificialintelligence'] = 'Umelá inteligencia';
$l['classes_email'] = 'Email';
$l['classes_finances'] = 'Financie';
$l['classes_searching'] = 'Vyhľadávanie';
$l['classes_user_management'] = 'Správa používateľov';
$l['classes_utilitiesandtools'] = 'Nástroje a náradie';
$l['classes_validation'] = 'Validácia';
$l['classes_security'] = 'Bezpečnosť';
$l['classes_console'] = 'Konzola';
$l['classes_codegeneration'] = 'Generovanie kódu';
$l['classes_chat'] = 'Chat';
$l['classes_astrology'] = 'Astrológia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biológia';
$l['classes_blogs'] = 'Blogy';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Kompresia';
$l['classes_configuration'] = 'Nastavenie';
$l['classes_contentmanagement'] = 'Správa obsahu';
$l['classes_conversion'] = 'Konverzia';
$l['classes_datatypes'] = 'Dátové typy';
$l['classes_databases'] = 'Databázy';
$l['classes_debug'] = 'Ladenie';
$l['classes_designpatterns'] = 'Vzory dizajnu';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-learning';
$l['classes_emulators'] = 'Emulátory';
$l['classes_filesandfolders'] = 'Súbory a priečinky';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Fórum';
$l['classes_games'] = 'Hry';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Jazyk';
$l['classes_projectmanagement'] = 'Správa projektov';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Správa domén';
$l['webuzo_license_exp'] = 'Vaša licencia nie je aktívna alebo vypršala. Ak vaša licencia vypršala, prosím, obnovte ju, aby ste mohli používať Webuzo';
$l['webuzo_license_exp_t'] = 'Licencia neaktívna';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Správa domén';
$l['ampps_license_exp'] = 'Vaša licencia nie je aktívna alebo vypršala. Ak vaša licencia vypršala, prosím, obnovte ju, aby ste mohli používať Ampps';
$l['ampps_license_exp_t'] = 'Licencia neaktívna';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Povolené';
$l['notify_disable'] = 'Zakázané';

$l['autoupgrade_enable'] = 'Povolené';
$l['autoupgrade_disable'] = 'Zakázané';

// Auto backup strings
$l['auto_backup_enable'] = 'Povolené';
$l['auto_backup_disable'] = 'Zakázané';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nová inštalácia $scriptname';
$l['mail_install_php'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
Admin URL : $admin_url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $admin_username>Admin Username : $admin_username</if>
<if $admin_pass>Admin Password : $admin_pass</if>
<if $admin_email>Admin Email: $admin_email</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Clone Template Vaiable
$l['mail_clone_sub'] = 'Naklonovať inštaláciu $scriptname';
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
$l['mail_install_js_sub'] = 'Nová inštalácia $scriptname';
$l['mail_install_js'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
Path : $path
URL : $url
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Install Template Vaiable
$l['mail_install_perl_sub'] = 'Nová inštalácia $scriptname';
$l['mail_install_perl'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
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

// Install Template Vaiable
$l['mail_install_java_sub'] = 'Nová inštalácia $scriptname';
$l['mail_install_java'] = 'A new installation of $scriptname $version has been completed. The details of the installation are shown below:
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

$l['mail_install_python_sub'] = 'Nová inštalácia $scriptname';
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
$l['mail_update_sub'] = 'Dostupné aktualizácie skriptov';
$l['mail_update'] = 'This email is regarding the outdated installation of certain PHP scripts you have installed. For security reasons you must update these outdated installations as soon as possible.
The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From System Administrator $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Inštalácia $scriptname odstránená';
$l['mail_remove'] = 'An installation of $scriptname has been removed. Following were the details of the installation :
Path : $path
<if $url>URL : $url</if>
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
Time of Installation : $time
Time of Removal : $rem_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Cron Template Variable
$l['mail_cron_sub'] = 'Dostupná aktualizácia skriptu';
$l['changelog'] = '== Changelog for';
$l['mail_cron'] = 'The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.
$changelog

From '.APP.' Cron Jobs $serverip

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings

';

// Editdetail Template Variable
$l['mail_editdetail_sub'] = 'Upravené detaily inštalácie $scriptname';
$l['mail_editdetail'] = 'The installation details of $scriptname has been modified. Following are the modified details of the installation :
Path : $path
URL : $url
<if $datadirectory>Data Directory : $datadirectory</if>
<if $wwwdir>Web Directory : $wwwdir</if>
<if $wwwurl>Web URL : $wwwurl</if>
<if $dbname>MySQL Database : $dbname</if>
<if $dbuser>MySQL DB User : $dbuser</if>
<if $dbhost>MySQL DB Host : $dbhost</if>
<if $dbpass>MySQL DB Password : $dbpass</if>
<if $cron>Cron Job : $cron</if>
<if $disable_notify_update>Update Notification : $disable_notify_update</if>
<if $eu_auto_upgrade>Auto Upgrade : $eu_auto_upgrade</if>
<if $auto_backup>Automated Backups : $auto_backup</if>
<if $auto_backup_rotation>Backup Rotation : $auto_backup_rotation</if>
Time of Installation : $time
Time of Modification : $edit_time

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Backup Language Strings
$l['mail_backup_sub'] = 'Záloha vašej $scriptname inštalácie';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Zlyhalo : Záloha vašej $scriptname inštalácie';
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
$l['mail_restore_sub'] = 'Obnova vášho $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Zlyhalo : Obnova vášho $scriptname';
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
$l['mail_install_classes_sub'] = 'Nová inštalácia $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'Inštalácia $scriptname používateľa $user bola úspešne aktualizovaná';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Aktualizačný proces pre $scriptname zlyhal a prebehlo obnovenie zo zálohy';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'Inštalácia $scriptname bola úspešne aktualizovaná správcom systému';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Aktualizácia vašej inštalácie $scriptname správcom systému nebola úspešná';
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
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Aktualizačný proces inštalácie $scriptname používateľa $user zlyhala';
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
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Aktualizácia vašej inštalácie $scriptname správcom systému zlyhala';
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
$l['mail_userupgrade_success_user_sub'] = 'Inštalácia $scriptname bola úspešne aktualizovaná';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Aktualizácia inštalácie $scriptname zlyhala';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Aktualizácia inštalácie $scriptname zlyhala';
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
$l['mail_autoupgrade_success_user_sub'] = 'Inštalácia $scriptname bola úspešne automaticky aktualizovaná';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Automatická aktualizácia vašej inštalácie $scriptname zlyhala';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Automatická aktualizácia vašej inštalácie $scriptname zlyhala';
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
$l['mail_autoupgrade_precheck_fail_sub'] = 'Kontrola pred aktualizáciou zlyhala';
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
$l['mail_autoupgrade_backup_fail_sub'] = 'Zálohovací proces zlyhal pred automatickou aktualizáciou inštalácie $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'Nebolo možné otvoriť súbor s nastaveniami';
$l['err_writeconfig'] = 'Nebolo možné zapísať súbor s nastaveniami';

$l['classes_con_failed'] = 'Chyba : Zlyhalo pripojenie k serveru .';
$l['cl_ratings'] = 'Hodnotenia';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licencia';
$l['cl_version'] = 'Verzia';
$l['cl_show_files'] = 'Zobraziť súbory';
$l['cl_install_but'] = 'Inštalovať';
$l['expand_view'] = 'Kliknite sem pre plné zobrazenie';
$l['collapse_view'] = 'Kliknite sem pre vložené zobrazenie';

$l['email_off_notice'] = '<b>UPOZONENIE : Upozornenia emailom sú zakázané, takže nedostanete žiaden email.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Vitejte v Softaculous vzdialenom inštalatéri';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Požadovaná verzia &soft-1; &soft-2; &soft-3; A nájdená verzia je :';
$l['req_ext_nf'] = 'Vyžadované rozšírenie #soft-1; nebolo nájdené :';
$l['req_func_nf'] = 'Vyžadovaná funkcia &soft-1; nebola nájdená';
$l['req_ext_ver'] = 'Požadované rozšírenie verzie &soft-1; &soft-2; &soft-3; &soft-4; ALE nájdená &soft-5;';
$l['gt'] = 'väčší ako';
$l['lt'] = 'menší ako';
$l['ge'] = 'väčší alebo rovný';
$l['le'] = 'menší alebo rovný';
$l['eq'] = 'je';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatická záloha vašej inštalácie $scriptname';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Zlyhanie : Automatická záloha vašej inštalácie $scriptname';
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
$l['mail_script_requirement_sub'] = 'Log zlyhaní kvôli požiadavkám skriptov';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'Práve som nainštaloval #[[SCRIPTNAME]] na [[softurl]] pomocou #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Práve som nainštaloval #[[SCRIPTNAME]] pomocou #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Práve som aktualizoval #[[SCRIPTNAME]] na [[softurl]] pomocou #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Práve som naklonoval #[[SCRIPTNAME]] na [[softurl]] pomocou #[[APP]] #[[TYPE]]';

// month strings
$l['January'] = 'January';
$l['February'] = 'February';
$l['March'] = 'March';
$l['April'] = 'April';
$l['May'] = 'May';
$l['June'] = 'June';
$l['July'] = 'July';
$l['August'] = 'August';
$l['September'] = 'September';
$l['October'] = 'October';
$l['November'] = 'November';
$l['December'] = 'December';

?>