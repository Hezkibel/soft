<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
//===========================================================
// SOFTACULOUS 
// Versione : 1.1
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

$l['restoreerror'] = 'Si è verificato un errore durante l\'estrazione dei file di backup';
$l['restoredatadir'] = 'Impossibile ripristinare la directory dei dati';
$l['restorewww'] = 'Impossibile ripristinare la web directory';
$l['res_err_selectmy'] = 'Selezione del database da ripristinare non riuscita';
$l['err_myconn'] = 'Connessione al database non riuscita';
$l['err_db_create'] = 'Si è verificato un errore durante la creazione del database';

//Theme Strings
$l['<title>'] = APP.' - Ripristinare';
$l['restorefile'] = 'Eseguire ripristino da backup';
$l['restore_dir'] = 'Ripristinare la directory';
$l['restore_dir_exp'] = 'Se spunti questo, sarà ripristinata tutta la cartella';
$l['restore_datadir'] = 'Ripristinare la directory dei dati';
$l['restore_datadir_exp'] = 'Se spuntato, la directory dei dati sarà ripristinata';
$l['restore_db'] = 'Ripristinare il database';
$l['restore_db_exp'] = 'Se spuntato, il database sarà anche ripristinato';
$l['restore_ins'] = 'Ripristinare installazione';
$l['restore'] = 'Il tuo backup è stato ripristinato con successo';
$l['confirm_restore'] = 'Sei sicuro di voler ripristinare le installazioni selezionate?';
$l['return'] = 'Torna alla visione d\'insieme';
$l['restore_wwwdir'] = 'Ripristinare web directory';
$l['restore_wwwdir_exp'] = 'Se spuntato, la web directory sarà ripristinata';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['res_db'] = 'Ripristino del database in corso';
$l['res_dir'] = 'Ripristino della directory in corso';
$l['res_datadir'] = 'Ripristino della directory dei dati in corso';
$l['finishing_process'] = 'Backup ripristinato';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['restoring'] = 'Il ripristino del tuo backup è attivo in background. Una volta completato, riceverai una notifica via email.';
$l['prog_restoring'] = 'Ripristino in corso '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Ripristino completato.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>