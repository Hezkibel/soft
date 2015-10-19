<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Hiba történt a mentés kicsomagolásakor';
$l['restoredatadir'] = 'Nem tudom az adatkönyvtárat visszaállítani';
$l['restorewww'] = 'Unable to restore Web directory';
$l['res_err_selectmy'] = 'Nem lehet az adatbázis kiválasztani a helyreállításhoz';
$l['err_myconn'] = 'Nem lehet kapcsolódni az adatbázishoz';
$l['err_db_create'] = 'Error occured while creating Database';

//Theme Strings
$l['<title>'] = APP.' - Helyreállítás';
$l['restorefile'] = 'Helyreállítás mentésből';
$l['restore_dir'] = 'Könyvtár helyreállítása';
$l['restore_dir_exp'] = 'Ha bejelöli, akkor a teljes könyvtár helyreállításra kerül';
$l['restore_datadir'] = 'Adatkönyvtár helyreállítása';
$l['restore_datadir_exp'] = 'Ha bejelöli, az adatkönyvtár is helyreállításra kerül';
$l['restore_db'] = 'Adatbázis helyreállítása';
$l['restore_db_exp'] = 'Ha bejelöli, az adatbázis is helyreállításra kerül';
$l['restore_ins'] = 'Telepítés helyreállítása';
$l['restore'] = 'A mentés sikeresen helyreállítva';
$l['confirm_restore'] = 'Biztos benne, hogy helyreállítja a telepítést?';
$l['return'] = 'Vissza az áttekintéshez';
$l['restore_wwwdir'] = 'Restore Web Directory';
$l['restore_wwwdir_exp'] = 'If checked the Web directory will be restored';
$l['checking_data'] = 'Checking the submitted data';
$l['res_db'] = 'Restoring the Database';
$l['res_dir'] = 'Restoring the Directory';
$l['res_datadir'] = 'Restoring the Data Directory';
$l['finishing_process'] = 'Backup Restored';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['restoring'] = 'Your backup is being restored in background. You will be notified by email once its completed.';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restore Completed.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>
