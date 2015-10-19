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

$l['restoreerror'] = 'Vyskytla sa chyba pri rozbaľovaní súborov zálohy';
$l['restoredatadir'] = 'Nebolo možné obnoviť priečinok dát';
$l['restorewww'] = 'Nebolo možné obnoviť priečinok Web';
$l['res_err_selectmy'] = 'Nebolo možné vybrať databázu pre obnovanie';
$l['err_myconn'] = 'Nebolo možné spojiť sa s databázou';
$l['err_db_create'] = 'Vyskytla sa chyba pri vytváraní databázy';

//Theme Strings
$l['<title>'] = APP.' - Restore';
$l['restorefile'] = 'Obnoviť zo zálohy';
$l['restore_dir'] = 'Obnoviť priečinok';
$l['restore_dir_exp'] = 'Ak zaškrtnete toto, celý priečinok bude obnovený';
$l['restore_datadir'] = 'Obnoviť priečinok dát';
$l['restore_datadir_exp'] = 'Ak zaškrtnuté, priečinok dát bude obnovený';
$l['restore_db'] = 'Obnoviť databázu';
$l['restore_db_exp'] = 'Ak zaškrtnuté, bude obnovená aj databáza';
$l['restore_ins'] = 'Obnoviť inštaláciu';
$l['restore'] = 'Vaša záloha bola úspešne obnovená';
$l['confirm_restore'] = 'Ste si istý, že chcete obnoviť inštaláciu ?';
$l['return'] = 'Spať na prehľad';
$l['restore_wwwdir'] = 'Obnoviť priečinok Web';
$l['restore_wwwdir_exp'] = 'Ak zaškrtnuté, priečinok web bude obnovený';
$l['checking_data'] = 'Kontrola zadaných údajov';
$l['res_db'] = 'Obnovovanie databázy';
$l['res_dir'] = 'Obnovovanie priečinka';
$l['res_datadir'] = 'Obnovovanie priečinka dát';
$l['finishing_process'] = 'Záloha obnovená';
$l['wait_note'] = '<b>UPOZORNENIE:</b> Toto môže trvať 3-4 minúty. Prosím, neopúšťajte stránku, pokým ukazovateľ nedosiahne 100%';
$l['restoring'] = 'Vaša záloha je obnovovaná v pozadí. Budete upozornený emailom, keď bude dokončená.';
$l['prog_restoring'] = 'Obnovovanie'; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Obnova dokončená.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>