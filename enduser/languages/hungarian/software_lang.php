<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Nem választott domain nevet a telepítéshez.';
$l['wrong_softdomain'] = 'A domain név könyvtára nem található.';
$l['softdirectory_exists'] = 'A megadott telepítési könyvtár létezik! Kérjük adjon meg egy másik könyvtárat.';
$l['no_space'] = 'Nem rendelkezik elegendő tárhellyel a telepítéshez!';
$l['no_softdb'] = 'Az adatbázis nem volt megadva.';
$l['database_exists'] = 'A megadott adatbázis már létezik. Kérjük adjon meg másik adatbázis nevet.';
$l['databaseuser_exists'] = 'Az adatbázis felhasználói név már étezik. Kérjük adjon meg másik nevet.';
$l['db_name_long'] = 'Az adatbázis neve nem lehet 7 karakternél hosszabb. Kérjük adjon meg rövidebb nevet.';
$l['db_limit_crossed'] = 'A maximálisan létrehozható adatbázisok számát elérte, így a telepítés nem folytatható.';
$l['no_field'] = 'A következő mezőt ki kell tölteni: <b>&soft-1;</b>.';
$l['error_adddb'] = 'Az adatbázist nem lehet létrehozni';
$l['error_adduser'] = 'Az új adatbázis felhasználó létrehozása nem sikerült.';
$l['no_package'] = 'A telepítési csomag nem található!';
$l['no_decompress'] = 'Hibák történtek a telepítő-csomag kicsomagolásakor.';
$l['mail_new_ins'] = '&soft-1; új telepítése befejeződött. A részletek:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Adminisztrátor neve';
$l['mail_pass'] = 'Adminisztrátor jelszava';
$l['mail_db'] = 'MySQL adatbázis';
$l['mail_dbuser'] = 'MySQL felhasználó';
$l['mail_dbhost'] = 'MySQL szerver';
$l['mail_dbpass'] = 'MySQL jelszó';
$l['mail_time'] = 'Telepítés időpontja';
$l['mail_subject'] = 'Új telepítés - &soft-1;';
$l['no_cron_min'] = 'Nincs a perc megadva a cron időzítőhöz';
$l['no_cron_hour'] = 'Nincs az óra megadva a cron időzítőhöz';
$l['no_cron_day'] = 'Nincs a nap megadva a cron időzítőhöz';
$l['no_cron_month'] = 'Nincs a hónap megadva a cron időzítőhöz';
$l['no_cron_weekday'] = 'Nincs a hét napja megadva a cron időzítőhöz';
$l['wrong_cron_min'] = 'A cron időzítőhöz megadott perc értéke hibás. Érvényes értékek: 0-59 vagy <b>*</b>';
$l['wrong_cron_hour'] = 'A cron időzítőhöz megadott óra értéke hibás. Érvényes értékek: 0-23 vagy <b>*</b>';
$l['wrong_cron_day'] = 'A cron időzítőhöz megadott nap értéke hibás. Érvényes értékek: 1-31 vagy <b>*</b>';
$l['wrong_cron_month'] = 'A cron időzítőhöz megadott hónap értéke hibás. Érvényes értékek: 1-12 vagy <b>*</b>';
$l['wrong_cron_weekday'] = 'A cron időzítőhöz megadott hét napja hibás. Érvényes értékek: 0-7 vagy <b>*</b>';
$l['mail_cron'] = 'Cron időzítő';
$l['no_datadir'] = 'Nincs adatkönyvtár megadva';
$l['datadir_exists'] = 'Az adatkönyvtár létezik. Kérjük adjon meg másikat.';
$l['no_decompress_data'] = 'Hiba történt az adatfájlok kicsomagolásakor.';
$l['mail_datadir'] = 'Adatkönyvtár';
$l['some_files_exist'] = 'A telepítés nem folytatható, mert a következő fájlok vannak a célkönyvtárban: ';
$l['delete_files'] = 'Kérjük törölje a fájlokat, vagy válasszon másik könyvtárat';
$l['overwrite_exist'] = '<b>VAGY</b><br /> pipálja be az összes fájl felülírásához és a folytatáshoz';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Áttekintés';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Demó';
$l['ratings'] = 'Értékelés';
$l['import'] = 'Importálás';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Helyszükséglet';
$l['available_space'] = 'Rendelkezésre áll';
$l['req_space'] = 'Szükséges';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver támogatás';
$l['support_link'] = 'Támogatási oldal';
$l['support_note'] = 'Megjegyzés: Softaculous nem illetékes az alkalmazások támogatásáért.';
$l['setup'] = 'Szoftver telepítés';
$l['choose_domain'] = 'Válasszon domain nevet';
$l['choose_domain_exp'] = 'Válassza ki, hogy mely domain névhez telepíti a szoftvert.';
$l['in_directory'] = 'Telepítési könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest és <b>nem lehet létező könyvtár</b>.<br />Pl.: Ha úgy akarja elérni a telepített alkalmazást, hogy http://www.domainnevem.hu/xyz/, akkor a telepítési könyvtár az <b>xyz</b>.<br />Ha üresen hagyja, akkor a telepített szoftvert a http://www.domainnevem.hu/ alatt éri el.';
$l['database_name'] = 'Adatbázis neve';
$l['database_name_exp'] = 'Adja meg a használni kívánt adatbázis nevét.';
$l['softcopy_note'] = '<b>Figyelem</b>: Ezt az alkalmazást a saját telepítőjével lehet telepíteni. Kérjük a telepítés végén a megadott címen fejezze be a telepítést.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk! A szoftver sikeresen telepítve!';
$l['succesful'] = 'sikeresen telepítve';
$l['admin_url'] = 'Adminisztrátor URL';
$l['setup_continue'] = 'A telepítést magával a szoftverrel kell befejezni. A befejezéshez látogasson a következő címre';
$l['enjoy'] = 'Reméljük, hogy a telepítés egyszerű és gyors volt.';
$l['install_notes'] = 'Fontos információk! Ajánlatos elolvasni ';
$l['please_note'] = '<b>Figyelem</b>: Softaculous csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculous Alkalmazástelepítő ';
$l['return'] = 'Vissza az áttekintéshez';
$l['current_ins'] = 'Jelenlegi telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítés ideje';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Frissítés erre a verzióra';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs infó';
$l['randpass'] = 'Véletlen jelszó létrehozása';
$l['ratesoft'] = 'Értékelje az alkalmazást';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'írja meg Ön is a véleményét';
$l['readreviews'] = 'Olvassa a véleményeket';
$l['reviews_exp'] = 'Olvassa el, hogy a többi felhasználó milyen véleményt írt és';
$l['cron_job'] = 'CRON időzítő';
$l['cron_job_exp'] = 'Az alkalmazáshoz CRON időzítő szükséges. Kérjük adja meg az időpontot. Ha nem tudja, hagyja meg a jelenlegi beállítást!';
$l['cron_min'] = 'Perc';
$l['cron_hour'] = 'Óra';
$l['cron_day'] = 'Nap';
$l['cron_month'] = 'Hónap';
$l['cron_weekday'] = 'Hét napja';
$l['datadir'] = 'Adatkönyvtár';
$l['datadir_exp'] = 'Ez az alkalmazás az adatait egy olyan könyvtárban tárolja, ami webes felületen nem elérhető. Ez a könyvtár az ön gyökérkönyvtárában lesz létrehozva. Azaz, ha ön az <b>abc</b> nevet adta a könyvtárnak, akkor /home/felhasznalonev/<b>abc</b> lesz a könyvtár útvonala.';
$l['db_alpha_num'] = 'Csak alfanumerikus karaktereket lehet adatbázis névként megadni.';
$l['overwrite'] = 'Fájlok felülírása';
$l['ins_emailto'] = 'Telepítési adatok küldése erre az email címre';
$l['choose_protocol'] = 'Elérési protokoll';
$l['choose_protocol_exp'] = 'Ha rendelkezik saját IP címmel és tanúsítvánnyal, akkor válassza a https protokollt.<br />Egyébként válassza a http protokollt.';
$l['clone'] = 'Clone';
$l['backup'] = 'Mentés';
$l['options'] = 'Opciók';
$l['admin'] = 'Adminisztrátor';
$l['notify_ver'] = $globals['sn'].' tájékoztatása az elérhettablehost.com új verzióról';
$l['notifyversion'] = 'Köszönjük, hogy az új verzióról informált bennünket. A lehető leghamarabb megvizsgáljuk.';
$l['del_insid'] = 'Biztos, hogy eltávolítja a kiválasztott alkalmazásokat? A folyamat visszaforíthatatlan.\nNem lesz több kérdés.';
$l['rem_inst_id'] = 'Telepítés eltávolítása - ';
$l['no_sel_inst'] = 'Nincs eltávolításra kiválasztva semmi.';
$l['inst_remvd'] = 'A kiválasztott telepítés eltávolításra került. Az oldal újratöltődik!';
$l['remove'] = 'Eltávolítás';
$l['go'] = 'Tovább';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'If checked, this installation will be automatically upgraded to the latest version when a new version is available.';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

?>
