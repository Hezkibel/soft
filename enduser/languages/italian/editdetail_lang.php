<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Non è stata inviata alcuna installazione';
$l['wrong_ins_title'] = 'ID d\'installazione errato';
$l['wrong_ins'] = 'L\'ID d\'installazione fornita è inesistente';
$l['cant_remove_dir'] = 'La directory non può essere eliminata in quanto è la home directory. Per continuare senza rimuovere la directory, deselezionare l\'opzione <b>Rimuovere Directory</b>.';
$l['no_dir'] = 'La directory d\'installazione è inesistente!';
$l['no_datadir'] = 'La directory dei dati è inesistente!';
$l['no_wwwdir'] = 'La web directory è inesistente!';
$l['wrong_url'] = 'I nomi di URL e di DIRECTORY non coincidono.';
$l['wrong_wwwurl'] = 'I nomi di WEB URL e di WEB DIRECTORY non coincidono.';
$l['err_mysql_user'] = 'Il nome utente o password o host di database MySQL è errato in quanto non è stato possibile stabilire una connessione.';
$l['err_mysql_db'] = 'Non è stato possibile selezionare il database, quindi il nome del database MySQL è errato.';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'database MySQL';
$l['mail_dbuser'] = 'Utente del database MySQL';
$l['mail_dbhost'] = 'Host del database MySQL';
$l['mail_dbpass'] = 'Password del database MySQL';
$l['mail_time'] = 'Ora di installazione';
$l['mail_editdetail_time'] = 'Ora di modifica';
$l['mail_subject'] = 'Dettagli d\'installazione modificati di &soft-1;';
$l['mail_cron_command'] = 'compito CRON';
$l['mail_datadir'] = 'Directory dei dati';
$l['mail_wwwdir'] = 'Web directory';
$l['mail_wwwurl'] = 'URL della Web directory';

//Theme Strings
$l['<title>'] = APP.' - Modificare Detail';
$l['ins_details'] = 'Dettagli d\'installazione';
$l['info'] = 'Informazionirmazioni';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Numero installazione';
$l['ins_ver'] = 'Versione';
$l['ins_time'] = 'Tempo installazione';
$l['ins_path'] = 'Percorso';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'URL admin';
$l['ins_db'] = 'Nome del database';
$l['ins_dbuser'] = 'Utente del database';
$l['ins_dbpass'] = 'Password del database';
$l['ins_dbhost'] = 'Host del database';
$l['ins_datadir'] = 'Directory dei dati';
$l['ins_wwwdir'] = 'Web directory';
$l['ins_wwwurl'] = 'URL della Web directory';
$l['ins_cron_command'] = 'Comando cron';
$l['details_edited'] = 'I dettagli d\'installazione sono stati modificati con successo.';
$l['version_edited'] = 'La versione è stata aggiornata nei nostri registri.';
$l['return'] = 'Torna alla visione d\'insieme';

$l['edit_ins'] = 'Modificare i dettagli d\'installazione';
$l['edit_dir'] = 'Directory';
$l['edit_datadir'] = 'Directory dei dati';
$l['edit_db'] = 'Nome del database';
$l['edit_dbuser'] = 'Utente del database';
$l['edit_dbpass'] = 'Password del database';
$l['edit_dbhost'] = 'Host del database';
$l['edit_url'] = 'URL';
$l['editins'] = 'Salvare i dettagli d\'installazione';
$l['mail_editdetail_ins'] = 'I dettagli d\'installazione di &soft-1; sono stati modificati. Di seguito i dettagli d\'installazione modificati: ';
$l['edit_wwwdir'] = 'Web directory';
$l['edit_wwwurl'] = 'URL della Web directory';
$l['disable_notify_update'] = 'Disattivare notifiche di aggiornamento';
$l['exp_disable_notify_update'] = 'Se spuntato, non riceverai una notifica email sugli aggiornamenti disponibili per questa installazione.';
$l['alreadyupdated'] = 'Beh...sembra che la versione reale dell\'installazione sia la <b>&soft-1;</b> invece della <b>&soft-2;</b>. <br />Fare click qui per aggiornare i registri della'.APP.'.';
$l['edit_acc_detail'] = 'Modificare i dettagli dell\'account admin';
$l['eu_auto_upgrade'] = 'Aggiornamento automatico';
$l['exp_eu_auto_upgrade'] = 'Se spuntato, sarà fatto l\'upgrade automatico di questa installazione all\' ultima versione, quando sarà disponibile una nuova versione.';
$l['auto_upgrade_plugins'] = 'Aggiornamento automatico &soft-1; Plugin';
$l['exp_auto_upgrade_plugins'] = 'Se spuntato, tutti i plugin attivi &soft-1; installati per questa versione saranno aggiornati automaticamente all\'ultima versione contestualmente all\'aggiornamento dello script.';
$l['auto_upgrade_themes'] = 'Aggiornamento automatico &soft-1; Temi';
$l['exp_auto_upgrade_themes'] = 'Se spuntato, tutti i temi attivi &soft-1; installati per questa versione saranno aggiornati automaticamente all\'ultima versione contestualmente all\'aggiornamento dello script.';
$l['auto_backup'] = 'Backup automatici';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotazione backup';
$l['exp_auto_backup_rotation'] = 'Se il limite di rotazione dei backup è stato raggiunto, la '.APP.' eliminerà il backup più vecchio di questa installazione e quindi eseguirà un nuovo backup. I backup occupano spazio di archiviazione, quindi scegliere la rotazione di backup in funzione dello spazio disponibile sul server';
$l['no_backup'] = 'Non eseguire backup';
$l['daily'] = 'Una volta al giorno';
$l['weekly'] = 'Una volta alla settimana';
$l['monthly'] = 'Una volta al mese';
$l['unlimited'] = 'Illimitato';
$l['auto_backup_not_allowed'] = 'La frequenza di backup automatico scelta non è valida';

$l['no_edit'] = 'Non è stato possibile trovare il file EDIT.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare i file relativi alle FUNZIONI DI MODIFICA! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['err_auto_backup_limit'] = 'La rotazione dei backup non può eccedere il valore <b>&soft-1;</b>';
$l['select_files'] = 'Selezionare file/cartelle';
$l['select_files_exp'] = 'Ti preghiamo di selezionare i file e le cartelle aggiuntive associati a questa installazione. <br />Questa lista sarà utilizzata per operazioni quali la clonazione e il backup dell\'installazione';
$l['invalid_files_in_post_list'] = 'Sono stati selezionati alcuni file/cartelle non valide';
$l['select_files_list'] = 'Selezionare file/cartelle aggiuntivi dalla seguente lista';

$l['select_files_backup'] = 'Utilizza i file e le cartelle selezionate sopra per il backup';
$l['select_files_backup_exp'] = 'Se selezionato, si farà solo il backup dei file/cartelle connesse a questa installazione. <br />Per impostazione predefinita, il backup includerà tutti i file/cartelle di questo percorso';
$l['no'] = 'No';
$l['yes'] = 'Si';
$l['check_all_edit'] = 'Check All';

?>