<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Versione : 4.1.7
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

$l['err_cannot_autoupgrade'] = "Questo pannello di controllo non permette l'esecuzione di aggiornamenti automatici.\n";
$l['err_invalid_param'] = "Parametro &soft-1; non valido \n Per maggiori dettagli, la preghiamo di leggere la documentazione:\nhttp://www.softaculous.com/docs/Aggiorna_Script_da_CLI\n";
$l['err_no_input'] = "Ti preghiamo di fornire alcuni input.\n";
$l['err_no_insid'] = "Identificativo dell'installazione non fornito.\n";
$l['err_no_username'] = "Nome utente non specificato.\n";
$l['err_no_such_user'] = "Utente non trovato.\n";
$l['err_dont_provide_username'] = "Nome utente non richiesto.\n";
$l['err_no_softdir'] = "Softdir non trovato per l'utente &soft-1;\n";
$l['err_no_installation'] = "Non è stata trovata alcuna installazione per questo ID di installazione: &soft-1;\n";
$l['err_cant_upgrade'] = "Questa installazione è stata già aggiornata all'ultima versione O questo script non può essere aggiornato automaticamente.\n";
$l['err_backup_fail'] = 'Il backup non è riuscito. Cancellazione dell\'aggiornamento in corso. Di seguito i dettagli:';
$l['err_upgrade_restore_failed'] = 'Impossibile aggiornare l\'installazione E ripristino da backup esistente non riuscito. Di seguito i dettagli:';
$l['err_upgrade_restore_success'] = 'Impossibile aggiornare l\'installazione MA ripristino da backup esistente eseguito correttamente. Di seguito i dettagli:';
$l['err_upgrade'] = 'Aggiornamento dell\'installazione non riuscito. Di seguito i dettagli:';
$l['err_upgrade_req'] = 'Questa installazione non soddisfa i requisiti di aggiornamento. Di conseguenza, l\'aggiornamento automatico non può essere eseguito. Di seguito i dettagli:';
$l['err_could_not_posix'] = 'Impossibile cambiare utente. Processo in corso di interruzione...';
$l['err_cant_upgrade_for_this_server'] = "I controlli di pre-aggiornamento non sono stati superati in quanto non è stato possibile accedere al/agli URL. Può essere dovuto alla disattivazione di allow_url_fopen() sul tuo server o all'impossibilità di CURL di accedere all'URL. Di conseguenza, non è stato possibile eseguire l\'aggiornamento.";
$l['err_auto_upgrade_req_fail'] = 'Questa installazione non soddisfa i requisiti di aggiornamento automatico. Di conseguenza, l\'aggiornamento automatico non può essere eseguito. Di seguito i dettagli:';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installareazione in corso an application.
--upgrade\t For Aggiornamento in corso an installed application.
--import\t For Importareareing an installed application in to Softaculous.\n
For Supporto Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = "Nome dello script non fornito.\n";
$l['err_no_url'] = "Ti preghiamo di fornire l'URL al quale è stata già eseguita un'installazione, ad es. --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Siamo spiacenti! Non è stato possibile trovare lo script - &soft-1;\n";
$l['import_success'] = "Importareato correttamente!\n";
$l['import_error'] = "Si è verificato il seguente errore: \n";
$l['err_no_path'] = "Ti preghiamo di indicare un percorso. ad es. --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "L'utilità di importazione non è disponibile per questo script\n";
$l['err_user_not_allowed'] = "L'utilità di importazione non è disponibile per l'utente finale\n";
$l['err_cant_load_docroots'] = "Caricamento del percorso verso il dominio/i non riuscito\n";
$l['ins_available_for'] = " Installareazione(i) disponibile(i) per la seguente directory: \n";// Keep the space at the beginning
$l['ins_found_at_path'] = " installazione trovata al percorso specificato.\n Eseguire il comando precedente con --r per importarla.\n";
$l['imp_ins_exists'] = "Questa installazione è stata già importata per - &soft-1; at &soft-2;\n";
$l['upgraded_successfully'] = "L'aggiornamento è stato completato con successo \n";
$l['shellexec_disabled'] = 'shell_exec() disattivato';
$l['list_scripts'] = "\nFollowing è la lista degli script che potrebbero non funzionare sul tuo server.\n perché non soddisfano i requisiti minimi pe lo/gli script";
$l['req_pass'] = "Controllo dei requisiti script superato.";
$l['err_cannot_autobackup'] = "Questo pannello di controllo non permette l'esecuzione di backup automatici. \n";
$l['err_no_auto_backup'] = "I backup automatici sono stati disattivati dall'amministratore. \n";
$l['err_update_record'] = 'An error occured while updating version in '.APP." records\n";
$l['suc_update_record'] = "Updated ".APP." records successfully da &soft-1; to &soft-2; for &soft-3;\n";
$l['show_real_version'] = "Real Versione : &soft-1; -- Versione as per ".APP." records : &soft-2; \n";
$l['no_outdated_ins'] = "Non è stata trovata alcuna installazione obsoleta.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update ".APP." records\n";
$l['only_au_ins_note'] = "Nota: La lista contiene solo le installazioni per cui non è previsto l'upgrade automatico\n";

$l['soft_license'] = APP." License";
$l['lic_type'] = "Tipo";
$l['num_users'] = "Numero di utenti";
$l['licexpires'] = "Scade";
$l['primary_ip'] = "Licenza IP";
$l['free'] = "Gratuito";
$l['premium'] = "Premium";
$l['expired'] = "Scaduto";
$l['never'] = "Mai";

// Rimuovere installation
$l['no_panels'] = "La rimozione degli script da CLI è possibile solo da cPanel o da Webuzo.\n";
$l['no_input'] = "Ti preghiamo di fornire l'input richiesto.\n";
$l['invalid_par'] = 'Parametro non valido ';
$l['no_scripts'] = 'Gli script non sono stati caricati.';
$l['remove'] = 'Rimosso';
$l['heading'] = "Nome script \t ID installazione script \n";
$l['no_installation'] = "Non abbiamo trovato installazioni sul tuo server.\n";
$l['err_remove'] = "Rimuovere installazione non riuscita.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
?>
