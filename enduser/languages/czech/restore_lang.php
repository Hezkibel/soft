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

$l['restoreerror'] = 'Při rozbalování souborů zálohy došlo k chybám';
$l['restoredatadir'] = 'Nepodařilo se obnovit adresář pro data';
$l['restorewww'] = 'Nepodařilo se obnovit adresář webu';
$l['res_err_selectmy'] = 'Nelze vybrat databázi pro obnovení';
$l['err_myconn'] = 'Nelze se připojit k databázi';
$l['err_db_create'] = 'Došlo k chybě při vytváření databáze';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Obnovit ze zálohy';
$l['restore_dir'] = 'Obnovit adresář';
$l['restore_dir_exp'] = 'Zaškrtnete-li toto, celá složka bude obnovena';
$l['restore_datadir'] = 'Obnovit adresář pro data';
$l['restore_datadir_exp'] = 'Pokud je zaškrtnuto, adresář pro data bude obnoven';
$l['restore_db'] = 'Obnovit databázi';
$l['restore_db_exp'] = 'Pokud je zaškrtnuto, databáze bude také obnovena';
$l['restore_ins'] = 'Obnovit instalaci';
$l['restore'] = 'Vaše záloha byla úspěšně obnovena';
$l['confirm_restore'] = 'Opravdu chcete obnovit instalaci?';
$l['return'] = 'Zpět na Přehled';
$l['restore_wwwdir'] = 'Obnovit adresář webu';
$l['restore_wwwdir_exp'] = 'Zaškrtnete-li tuto volbu, adresář webu bude obnoven';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['res_db'] = 'Obnovování databáze';
$l['res_dir'] = 'Obnovování adresáře';
$l['res_datadir'] = 'Obnovování adresáře pro data';
$l['finishing_process'] = 'Záloha obnovena';
$l['wait_note'] = '<b>POZNÁMKA</b>: Toto může trvat 3-4 minuty. Prosím neopouštějte tuto stránku, dokud nebude dosaženo 100 %.';
$l['restoring'] = 'Vaše záloha bude obnovena na pozadí. O jejím dokončení budete informováni emailem.';
$l['prog_restoring'] = 'Obnovování'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Obnova dokončena.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>