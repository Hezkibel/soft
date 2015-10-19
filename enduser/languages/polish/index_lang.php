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

$l['user_data_error_t'] = 'Błąd danych użytkownika';
$l['user_data_error'] = APP.' was unable to load your account information. Please report this to the server administrator!';

$l['remote_licence_t'] = 'Nieprawidłowa licencja';
$l['remote_licence'] = 'Używasz nieważnej licencji. Prosimy zgłosić to administratorowi serwera!';

$l['enterprise_licence_t'] = 'Nieprawidłowa licencja';
$l['enterprise_licence'] = 'Używasz nieważnej licencji. Prosimy zgłosić to administratorowi serwera!';

$l['no_license'] = 'Plik LICENSE nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';

$l['today'] = '<b>Dziś</b> w';//The today string for showing todays post time

$l['init_theme_error_t'] = 'Błąd motywu';//Title
$l['init_theme_error'] = 'Nie można załadować pliku motywu - &soft-1;.';

$l['init_theme_func_error_t'] = 'Błąd funkcji motywu';//Title
$l['init_theme_func_error'] = 'Nie można załadować funkcji motywu &soft-1;.';

$l['disable_softaculous_t'] = 'Wyłączony Softaculous';
$l['disable_softaculous'] = 'Softaculous jest wyłączony dla tego użytkownika. Prosimy o kontakt z administratorem systemu.';

$l['load_theme_settings_error'] = 'Nie można załadować pliku ustawień motywu.';


//Error Handle Function
$l['following_errors_occured'] = 'Znaleziono następujące błędy';

//Success Message Function
$l['following_message'] = 'Został zwrócony następujący komunikat';

//Major Error Function
$l['fatal_error'] = 'Błąd krytyczny';
$l['following_fatal_error'] = 'Wystąpił następujący błąd';

//Message Function
$l['soft_message'] = APP.' Message';
$l['following_soft_message'] = 'Został zwrócony następujący komunikat';

//Update Softwares
$l['no_soft_found'] = 'Oprogramowanie nie zostało znalezione... Wymagana aktualizacja';
$l['ver_not_match'] = 'Wersje nie pasują do siebie... Wymagana aktualizacja';
$l['ver_match'] = 'Obecna wersja jest najnowszą wersją... Kontynuuj';
$l['del_prev_files'] = 'Usuwanie poprzednich plików... Wykonane';
$l['fetch_latest'] = 'Ściągam najnowszy plik...';
$l['error_fetch_latest'] = 'Nie można pobrać najnowszego plik... Kontynuuj';
$l['error_save_latest'] = 'Nie można zapisać ostatniego pliku... Kontynuuj';
$l['got_latest'] = 'Zapisany ostatni plik';
$l['unzip_latest'] = 'Rozpakowywanie plików...';
$l['error_unzip_latest'] = 'Błąd podczas rozpakowywania... Kontynuuje';
$l['unzipped_latest'] = 'Pomyślnie rozpakowano';

//Update Softaculous
$l['getting_info'] = 'Żądanie informacji...';
$l['error_getting_latest'] = 'Nie można uzyskać informacji... Anulowanie';
$l['got_info'] = 'Dostał informacje';
$l['manual_mode'] = 'Nowa wersja '. APP.' wymaga uwagi... Anulowanie';
$l['no_updates'] = 'Obecna wersja jest najnowszą wersją... Kontynuuj';
$l['fetch_upgrade'] = 'Pobieranie aktualizacji...';
$l['error_fetch_upgrade'] = 'Nie może pobrać pliku aktualizacji... Anulowanie';
$l['error_save_upgrade'] = 'Nie można zapisać pliku aktualizacji... Anulowanie';
$l['got_upgrade'] = 'Zapisany plik aktualizacji';
$l['unzip_upgrade'] = 'Rozpakowywanie plików...';
$l['error_unzip_upgrade'] = 'Błąd rozpakowywania... Anulowanie';
$l['unzipped_upgrade'] = 'Pomyślnie rozpakowano';
$l['md5_check'] = 'Poprawnie sprawdzono MD5';
$l['err_md5_check'] = 'Sprawdzenie MD5 dla tych plików nie powiodło się';
$l['err_md5_file'] = 'nie istnieje';

//MySQL Errors
$l['err_selectmy'] = 'Nie można wybrać bazy danych MySQL.';
$l['err_myconn'] = 'Nie można ustanowić połączenia z MySQL.';
$l['err_makequery'] = 'Nie można utworzyć kwerendy';
$l['err_mynum'] = 'MySQL błąd nr';
$l['err_myerr'] = 'MySQL błąd';

//Importing Errors
$l['imp_wrong_softdomain'] = 'Ścieżka do domeny &soft-1; nie może być odnaleziona.';
$l['imp_softpath_wrong'] = 'Ścieżki &soft-1; jest błędna lub nie istnieje.';
$l['imp_ins_exists'] = '&soft-1; jest już zainstalowany w &soft-2; według naszych danych i jest utrzymywana przez nas!';
$l['imp_no_func'] = 'Funkcja importu dla &soft-1; nie może być załadowana.';
$l['imp_err'] = 'Wystąpiły błędy podczas importowania oprogramowania zainstalowanego w &soft-1;';

//hf_theme.php
$l['root_login'] = 'Zalogowany jako ROOT';
$l['welcome'] = 'Witamy';
$l['logout'] = 'Wyloguj';
$l['page_time'] = 'Strona utworzona w';
$l['times_are'] = 'Cały czas są GMT';
$l['time_is'] = 'Teraz jest';
$l['no_script_found'] = 'Nie znaleziono takiego skryptu!';

//The Category Language Variables
$l['forums'] = 'Forum';
$l['blogs'] = 'Blogi';
$l['cms'] = 'Portale/CMS';
$l['galleries'] = 'Galerie zdjęć';
$l['wikis'] = 'Wiki';
$l['admanager'] = 'Zarządzanie reklamą';
$l['calendars'] = 'Kalendarze';
$l['games'] = 'Gry';
$l['mail'] = 'Maile';
$l['polls'] = 'Ankiety i badania';
$l['projectman'] = 'Zarządzanie projektami';
$l['ecommerce'] = 'E-Commerce';
$l['guestbooks'] = 'Księgi Gości';
$l['customersupport'] = 'Obsługa klienta';
$l['others'] = 'Inne';
$l['music'] = 'Myzyka';
$l['video'] = 'Wideo';
$l['files'] = 'Zarządzanie plikami';
$l['go_cpanel'] = 'Przejdź do panelu sterowania';
$l['go_home'] = APP.' Home';
$l['go_demos'] = 'Dema skryptu';
$l['go_ratings'] = 'Ocena skryptu';
$l['go_settings'] = 'Edytuj ustawienia';
$l['go_email_settings'] = 'Ustawienia E-mail';
$l['go_installations'] = 'Wszystkie instalacje';
$l['go_support'] = 'Pomoc i obsługa techniczna';
$l['go_sync'] = 'Synchronizowanie z innymi automatycznymi instalatorami';
$l['go_backups'] = 'Backup i przywracanie';
$l['go_tasklist'] = 'Lista zadań';
$l['go_apps_installations'] = 'Wszystkie zainstalowane aplikacje';
$l['go_my_themes'] = 'Moje motywy';
$l['go_logout'] = 'Wyloguj';

$l['type_php'] = 'PHP';
$l['type_perl'] = 'Perl';
$l['type_js'] = 'JavaScript';
$l['type_java'] = 'Java';
$l['type_python'] = 'Python';
$l['search'] = 'Szukaj';
$l['back_to_top'] = 'Powrót do góry';

// Categories
$l['cat_php_forums'] = 'Forum';
$l['cat_php_blogs'] = 'Blogi';
$l['cat_php_cms'] = 'Portale/CMS';
$l['cat_php_galleries'] = 'Galerie zdjęć';
$l['cat_php_wikis'] = 'Wiki';
$l['cat_php_admanager'] = 'Zarządzanie reklamą';
$l['cat_php_calendars'] = 'Kalendarze';
$l['cat_php_games'] = 'Gry';
$l['cat_php_mail'] = 'Maile';
$l['cat_php_polls'] = 'Ankiety i badania';
$l['cat_php_projectman'] = 'Zarządzanie projektami';
$l['cat_php_ecommerce'] = 'E-Commerce';
$l['cat_php_guestbooks'] = 'Księgi Gości';
$l['cat_php_customersupport'] = 'Obsługa klienta';
$l['cat_php_others'] = 'Inne';
$l['cat_php_music'] = 'Myzyka';
$l['cat_php_video'] = 'Wideo';
$l['cat_php_rss'] = 'RSS';
$l['cat_php_socialnetworking'] = 'Sieci społecznościowe';
$l['cat_php_microblogs'] = 'Mikro blogi';
$l['cat_php_frameworks'] = 'Frameworki';
$l['cat_php_educational'] = 'Edukacyjne';
$l['cat_php_erp'] = 'ERP';
$l['cat_php_dbtools'] = 'Narzędzia baz danych';
$l['cat_php_files'] = 'Zarządzanie plikami';
$l['cat_js_libraries'] = 'Biblioteki';
$l['cat_js_widgets'] = 'Widgety';
$l['cat_perl_blogs'] = 'Blogi';
$l['cat_perl_ecommerce'] = 'E-Commerce';
$l['cat_perl_wikis'] = 'Wiki';
$l['cat_perl_forums'] = 'Forum';
$l['cat_perl_mail'] = 'Maile';
$l['cat_java_cms'] = 'CMS';
$l['cat_java_forums'] = 'Forum';
$l['cat_java_projectman'] = 'Zarządzanie projektami';
$l['cat_java_erp'] = 'ERP';
$l['cat_java_blogs'] = 'Blogi';
$l['cat_java_wikis'] = 'Wiki';
$l['cat_python_wikis'] = 'Wiki';
$l['cat_python_projectman'] = 'Zarządzanie projektami';
$l['cat_apps_server_side_scripting'] = 'Skrypty po stronie serwera';
$l['cat_apps_web_servers'] = 'Serwery www';
$l['cat_apps_utilities'] = 'Narzędzia';
$l['cat_apps_libraries'] = 'Biblioteki';
$l['cat_apps_databases'] = 'Bazy danych';
$l['cat_apps_stacks'] = 'Stosy';
$l['cat_apps_security'] = 'Bezpieczeństwo';
$l['cat_apps_statistics'] = 'Statystyki';
$l['cat_apps_java_tools'] = 'Narzędzia Java';
$l['cat_apps_java_containers'] = 'Kontenery Java';
$l['cat_apps_version_control'] = 'Kontrola wersji';
$l['cat_apps_modules'] = 'Moduły';
$l['cat_apps_message_queue'] = 'Kolejkowanie wiadomości';

// Classes Categories
$l['classes_ajax'] = 'AJAX';
$l['classes_cryptography'] = 'Kryptografia';
$l['classes_algorithms'] = 'Algorytmy';
$l['classes_artificialintelligence'] = 'Sztuczna inteligencja';
$l['classes_email'] = 'E-mail';
$l['classes_finances'] = 'Finanse';
$l['classes_searching'] = 'Wyszukiwanie';
$l['classes_user_management'] = 'Zarządzanie użytkownikami';
$l['classes_utilitiesandtools'] = 'Programy i narzędzia';
$l['classes_validation'] = 'Sprawdzanie poprawności';
$l['classes_security'] = 'Bezpieczeństwo';
$l['classes_console'] = 'Konsole';
$l['classes_codegeneration'] = 'Generowanie kodu';
$l['classes_chat'] = 'Czat';
$l['classes_astrology'] = 'Astrologia';
$l['classes_audio'] = 'Audio';
$l['classes_biology'] = 'Biologia';
$l['classes_blogs'] = 'Blogi';
$l['classes_cache'] = 'Cache';
$l['classes_compression'] = 'Kompresja';
$l['classes_configuration'] = 'Konfiguracja';
$l['classes_contentmanagement'] = 'Zarządzanie treścią';
$l['classes_conversion'] = 'Konwersja';
$l['classes_datatypes'] = 'Typy danych';
$l['classes_databases'] = 'Bazy danych';
$l['classes_debug'] = 'Debugowanie';
$l['classes_designpatterns'] = 'Wzorce projektowe';
$l['classes_ecommerce'] = 'E-Commerce';
$l['classes_elearning'] = 'E-Learning';
$l['classes_emulators'] = 'Emulatory';
$l['classes_filesandfolders'] = 'Pliki i katalogi';
$l['classes_flash'] = 'Flash';
$l['classes_forums'] = 'Forum';
$l['classes_games'] = 'Gry';
$l['classes_geography'] = 'Geografia';
$l['classes_graphics'] = 'Grafika';
$l['classes_gui'] = 'GUI';
$l['classes_hosting'] = 'Hosting';
$l['classes_html'] = 'HTML';
$l['classes_http'] = 'HTTP';
$l['classes_language'] = 'Język';
$l['classes_projectmanagement'] = 'Zarządzanie projektami';

// Webuzo Strings
$l['webuzo'] = 'Webuzo';
$l['go_domain'] = 'Zarządzanie domenami';
$l['webuzo_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeśli licencja wygasła, należy ją odnowić aby dalej móc korzystać z Webuzo';
$l['webuzo_license_exp_t'] = 'Nieaktywna licencja';

// Ampps Strings
$l['ampps'] = 'AMPPS';
$l['go_domain'] = 'Zarządzanie domenami';
$l['ampps_license_exp'] = 'Licencja nie jest aktywna lub wygasła. Jeśli licencja wygasła, należy ją odnowić aby dalej móc korzystać z Ampps';
$l['ampps_license_exp_t'] = 'Nieaktywna licencja';


/////////////////////////////////////////////////////////////
/////  Following Variables are used for Email Templates /////
/////////////////////////////////////////////////////////////

$l['notify_enable'] = 'Włączone';
$l['notify_disable'] = 'Wyłączone';

$l['autoupgrade_enable'] = 'Włączone';
$l['autoupgrade_disable'] = 'Wyłączone';

// Auto backup strings
$l['auto_backup_enable'] = 'Włączone';
$l['auto_backup_disable'] = 'Wyłączone';

// Install Template Vaiable
$l['mail_install_php_sub'] = 'Nowa instalacja $scriptname';
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
$l['mail_clone_sub'] = 'Klon instalacji $scriptname';
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
$l['mail_install_js_sub'] = 'Nowa instalacja $scriptname';
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
$l['mail_install_perl_sub'] = 'Nowa instalacja $scriptname';
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
$l['mail_install_java_sub'] = 'Nowa instalacja $scriptname';
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

$l['mail_install_python_sub'] = 'Nowa instalacja $scriptname';
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
$l['mail_update_sub'] = 'Dostępne aktualizacje skryptów';
$l['mail_update'] = 'This email is regarding the outdated installation of certain PHP scripts you have installed. For security reasons you must update these outdated installations as soon as possible.
The following script updates are available:

$installation

To upgrade these scripts go to your Control Panel -> '.APP.' -> Installations.
There you will be able to update the scripts.

From System Administrator $serverip
';

// Remove Template Variable
$l['mail_remove_sub'] = 'Usunięte instalacje $scriptname';
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
$l['mail_cron_sub'] = 'Dostępne aktualizacje skryptów';
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
$l['mail_editdetail_sub'] = 'Szczegóły zmodyfikowanych instalacji $scriptname';
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
$l['mail_backup_sub'] = 'Backup Twojej instalacji $scriptname';
$l['mail_backup'] = 'The backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file
<if $backup_note>Backup Note : $backup_note</if>

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_backup_fail_sub'] = 'Błąd: Backupu Twojej instalacji $scriptname';
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
$l['mail_restore_sub'] = 'Przywróć $scriptname';
$l['mail_restore'] = 'The restore of your $scriptname backup was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_restore_fail_sub'] = 'Błąd: Przywracania $scriptname';
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
$l['mail_install_classes_sub'] = 'Nowa instalacja $classesname';
$l['mail_install_classes'] = 'A new installation of $classesname $version has been completed. The details of the installation are shown below:
Path : $path
<if $time>Time of Installation : $time</if>

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

////////////////////////
// ADMIN UPGRADE - 6
////////////////////////

// Auto Upgrade Email For Admin (successful)
$l['mail_adminupgrade_success_admin_sub'] = 'Instalacja $scriptname użytkownika $user została pomyślnie zaktualizowana';
$l['mail_adminupgrade_success_admin'] = '$scriptname installation of user $user has been upgraded successfully to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion
';

// Auto Upgrade Email For Admin (Failed) but restored successfully.
$l['mail_adminupgrade_fail_admin_sub'] = 'Proces aktualizacji instalacji $scriptname nie powiódł i została ona przywrócona z backupu';
$l['mail_adminupgrade_fail_admin'] = 'Upgrade process of $scriptname installation for user $user failed.
'.APP.' had created a backup before upgrading, and the backup was restored successfully.
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
The Upgrade error details are as follows :
Error : $upgrade_error
';

// Auto Upgrade Email for user (successful)
$l['mail_adminupgrade_success_user_sub'] = 'Instalacja $scriptname została pomyślnie zaktualizowana przez administratora systemu';
$l['mail_adminupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version by the System Admin.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// Auto Upgrade Email for user (fail) but restored successfully
$l['mail_adminupgrade_fail_user_sub'] = 'Aktualizacja instalacji $scriptname wykonana przez administratora systemu nie udała się';
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
$l['mail_adminupgrade_restore_fail_admin_sub'] = 'Proces aktualizacji instalacji $scriptname użytkownika $user nie powiódł się';
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
$l['mail_adminupgrade_restore_fail_user_sub'] = 'Aktualizacja instalacji $scriptname wykonana przez administratora systemu nie powiodła się';
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
$l['mail_userupgrade_success_user_sub'] = 'Instalacja $scriptname została pomyślnie zaktualizowana';
$l['mail_userupgrade_success_user'] = 'Your $scriptname installation has been successfully upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If any error occured while upgrading, (By user)
$l['mail_userupgrade_fail_user_sub'] = 'Aktualizacja instalacji $scriptname nie powiodła się';
$l['mail_userupgrade_fail_user'] = 'The upgrade of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while upgrading, (By user)
$l['mail_userupgrade_restore_fail_user_sub'] = 'Aktualizacja instalacji $scriptname nie powiodła się';
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
$l['mail_autoupgrade_success_user_sub'] = '$scriptname pomyślnie zainstalowano automatyczną aktualizację';
$l['mail_autoupgrade_success_user'] = 'Your $scriptname installation has been successfully auto upgraded to the latest version.
The details are as follows :
Installation URL : $url
Latest Version : $version
Old Version : $oldversion

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// When AUTOUPGRADE FAILED
$l['mail_autoupgrade_fail_user_sub'] = 'Automatyczne aktualizacja Twoje instalacji $scriptname nie powiodła się';
$l['mail_autoupgrade_fail_user'] = 'The auto upgradation of your $scriptname installation has failed.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $upgrade_error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

// If UPGRADE and RESTORE failed while AUTOUPGRADING
$l['mail_autoupgrade_restore_fail_user_sub'] = 'Automatyczne aktualizacja Twoje instalacji $scriptname nie powiodła się';
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
$l['mail_autoupgrade_precheck_fail_sub'] = 'Sprawdzanie aktualizacji nie powiodło się';
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
$l['mail_autoupgrade_backup_fail_sub'] = 'Operacja backupu nie powiodła się przed automatyczną aktualizacją instalacji $scriptname';
$l['mail_autoupgrade_backup_fail'] = 'The backup of $scriptname installation has failed. So the auto upgrade process was aborted.
The details are as follows :
Installation URL : $url
Current Version : $oldversion
Latest Version : $version
Error : $error

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['err_openconfig'] = 'Nie można otworzyć pliku konfiguracyjnego';
$l['err_writeconfig'] = 'Nie można zapisać pliku konfiguracyjnego';

$l['classes_con_failed'] = 'Błąd: Nie można połączyć się z serwerem.';
$l['cl_ratings'] = 'Oceny';
$l['cl_author'] = 'Autor';
$l['cl_license'] = 'Licencja';
$l['cl_version'] = 'Wersja';
$l['cl_show_files'] = 'Pokaż pliki';
$l['cl_install_but'] = 'Instaluj';
$l['expand_view'] = 'Kliknij tutaj by zobaczyć pełny widok';
$l['collapse_view'] = 'Kliknij tutaj, aby zobaczyć osadzony widok';

$l['email_off_notice'] = '<b>Uwaga: powiadomienia e-mail są wyłączone, więc nie otrzymasz żadnych wiadomości.</b>';

// Add User Language Strings
$l['mail_add_user_sub'] = 'Witamy w Softaculous Remote Installer';
$l['mail_add_user'] = 'You can now successfully login into Softaculous Remote Installer.
The details are as follows :
User 					: $username
API Key 				: $api_key
API Password 			: $api_pass
Number of Users allowed	: $number_of_users';

// Requirement parser languages
$l['req_ver_nf'] = 'Wymagane &soft-1; wersja &soft-2; &soft-3; a obecna wersja to:';
$l['req_ext_nf'] = 'Wymagane &soft-1; rozszerzenie nie zostało odnalezione:';
$l['req_func_nf'] = 'Wymagana &soft-1; funkcja nie została odnaleziona';
$l['req_ext_ver'] = 'Wymagana &soft-1; &soft-2; rozszerzona wersja &soft-3; &soft-4; a obecna &soft-5;';
$l['gt'] = 'większe niż';
$l['lt'] = 'mniej niż';
$l['ge'] = 'większe niż równe do';
$l['le'] = 'mniejsze niż równe do';
$l['eq'] = 'jest';

// Automated Backup Language Strings
$l['mail_auto_backup_sub'] = 'Automatyczny backup Twojej instalacji $scriptname';
$l['mail_auto_backup'] = 'The automatic backup of your $scriptname installation was completed successfully.
The details are as follows :
Installation Path : $path
Installation URL : $url
Backup Path : $backup_file

You can access the backup from the Backups Section in '.APP.'.

If you wish to unsubscribe from such emails, go to your Control Panel -> '.APP.' -> Email Settings
';

$l['mail_auto_backup_fail_sub'] = 'Błąd: Automatyczny backup Twojej instalacji $scriptname';
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
$l['mail_script_requirement_sub'] = 'Log błędu wymagań skryptu';
$l['mail_script_requirement'] = 'The following list of script(s) do not meet the minumum requirements on your server and might not work.
The details are as follows :

$failed_req

Note : If you are changing the PHP version on runtime (i.e. using CageFS, hive, .htaccess etc.) than you can ignore the above PHP version failure warnings.
';

// Softpanel Language Strings
$l['no_www_domain'] = 'Please close all '.$globals['sn'].' pages and log out from the control panel using the log out button.
Afterwards you can log in again and use '.$globals['sn'].'.';

$l['install_tweet'] = 'Właśnie zainstalowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['install_tweet_classes'] = 'Właśnie zainstalowałem #[[SCRIPTNAME]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['upgrade_tweet'] = 'Właśnie zaktualizowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';
$l['clone_tweet'] = 'Właśnie sklonowałem #[[SCRIPTNAME]] na [[softurl]] za pośrednictwem #[[APP]] #[[TYPE]]';

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