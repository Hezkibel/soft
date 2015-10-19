<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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

$l['no_ins'] = 'Nincs telepítés kiválasztva';
$l['wrong_ins_title'] = 'Hibás telepítési azonosító';
$l['wrong_ins'] = 'A telepítési azonosító nem létezik';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';

$l['cant_backup_dir'] = 'A mentés nem tudja a fájlokat elmenteni.';
$l['could_not_read'] = 'Oops Softaculous could not read the following file/directory <b>&soft-1;</b> Please make it readable to continue using the backup utility.';
$l['cant_datadir_dir'] = 'Hiba történt az adatkönyvtár mentésekor.';
$l['cant_wwwdir'] = 'There were errors while adding the Web directory.';
$l['cant_backup_db'] = 'Hiba történt az adatbázis mentésekor.';
$l['err_perm_file'] = 'Hiba történt a jogosultságok mentésekor';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['err_dataperm_file'] = 'Hiba történt az adatkönyvtár jogosultságainak mentésekor';
$l['save_dir_perms'] = 'A jogosultságokat nem lehetett elmenteni';
$l['save_datadir_perms'] = 'Az adatkönyvtár jogosultságait nem lehetett elmenteni';
$l['save_www_perms'] = 'Could not save the permissions of the Web directory';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';

//Theme Strings
$l['<title>'] = APP.' - Mentés';
$l['info'] = 'Infó';
$l['ins_softname'] = 'Szoftver';
$l['ins_num'] = 'Telepítési azonosító';
$l['ins_ver'] = 'Verzió';
$l['ins_time'] = 'Telepítés ideje';
$l['ins_path'] = 'Útvonal';
$l['ins_wwwdir'] = 'Web Directory Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Adatbázisnév';
$l['ins_dbuser'] = 'Adatbázis felhasználó';
$l['ins_dbpass'] = 'Adatbázis jelszó';
$l['ins_dbhost'] = 'Adatbázis szerver';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_dir'] = 'Könyvtár mentése';
$l['backup_dir_exp'] = 'Ha bejelöli, akkor a teljes könyvtár mentésre kerül';
$l['backup_db'] = 'Adatbázis mentése';
$l['backup_db_exp'] = 'Ha bejelöli, akkor az adatbázis is mentésre kerül';
$l['backup_conf'] = 'A mentés az adatmennyiségtől függően akár több időt is igénybe vehet. Kérjük NE zárja be a böngésző ablakát és maradjon az oldalon.';
$l['backedup'] = 'A mentés sikeresen elkészült. A <a href="'.$globals['index'].'act=backups">Mentés</a> oldalról le is töltheti.';
$l['backup_ins'] = 'Telepítés mentése';
$l['backup_datadir'] = 'Adatkönyvtár mentése';
$l['backup_datadir_exp'] = 'Ha bejelöli, akkor az adatkönyvtár mentésre kerül.';
$l['ins_datadir'] = 'Adatkönyvtár';
$l['return'] = 'Vissza az áttekintéshez';
$l['ins_cron_command'] = 'Cron Command';
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_wwwdir_exp'] = 'If checked the Web directory will be saved.';
$l['checking_data'] = 'Checking the submitted data';
$l['backingup_db'] = 'Backing up the Database';
$l['backingup_dir'] = 'Backing up the Directory';
$l['backingup_datadir'] = 'Backing up the Data Directory';
$l['finishing_process'] = 'Finishing Backup';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';
$l['backingup'] = 'The backup is being created in the background. You will be notified by email once its completed. After the backup is completed, You can access it from the <a href="'.$globals['index'].'act=backups">Backups</a> page.';
$l['check_email'] = 'Please check your email for the status of the backup';
$l['prog_backingup'] = 'Backing Up '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup Completed.';
$l['backup_note'] = 'Backup Note';
$l['backup_note_exp'] = 'You can save a note for your reference';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';

?>