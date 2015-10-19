<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Non è stato possibile trovare il file INFO.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['incompatible'] = 'Il software richiede una versione più recente di '.APP.'! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_install'] = 'Non è stato possibile trovare il file INSTALL.XML! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_functions'] = 'Non è stato possibile trovare il file FUNZIONI DI INSTALLAZIONE! Ti preghiamo di segnalarlo all\'amministratore di server.';
$l['no_softdomain'] = 'Non hai scelto il dominio su cui installare il software.';
$l['wrong_softdomain'] = 'Non è stato possibile trovare il percorso del dominio selezionato.';
$l['no_space'] = 'Non hai spazio sufficiente per installare questo software!';
$l['no_field'] = 'Il campo <b>&soft-1;</b> è obbligatorio è dev\'essere compilato.';
$l['no_package'] = 'Non è stato possibile trovare il pacchetto d\'installazione!';
$l['no_decompress'] = 'Si sono verificati alcuni errori durante l\'estrazione dei file di pacchetto.';
$l['mail_new_ins'] = 'La nuova installazione di of &soft-1; è stata completata. Di seguito i dettagli relativi all\'installazione:';
$l['mail_path'] = 'Percorso';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Ora di installazione';
$l['mail_subject'] = 'Nuova installazione di &soft-1;';
$l['some_files_exist'] = 'Impossibile continuare l\'installazione perché i file seguenti esistono già nella cartella di destinazione: ';
$l['delete_files'] = 'Ti preghiamo di eliminare questi file o scegliere un altro tipo di account.';
$l['checking_data'] = 'Verifica in corso dei dati inoltrati';
$l['unzipping_files'] = 'Copia dei file e delle cartelle in corso';
$l['unzipping_datadir'] = 'Estrazione dei file di dati in corso';
$l['prop_db'] = 'Propagazione del database';
$l['finishing_process'] = 'Installareazione quasi finita';
$l['wait_note'] = '<b>NOTE:</b> L\'operazione in esecuzione potrebbe richiedere 3-4 minuti. Ti preghiamo di non uscire dalla pagina fino a quando la barra di avanzamento non abbia raggiunto il 100%';
$l['softdirectory_invalid'] = 'La directory inserita non è valida.';
$l['no_sel_inst'] = 'Nessuna installazione selezionata';
$l['del_insid'] = 'Sei sicuro di voler eliminare le installazioni selezionate?';
$l['ins_emailto'] = 'Inviare i dettagli dell\'installazione a';
$l['no_https'] = 'Non è stato possibile trovare il certificato trusted SSL';
$l['err_dbprefix'] = 'Il prefisso della tabella non è valido. I valori validi sono a-z, A-Z, 0-9 o _';
$l['auto_backup_not_allowed'] = 'La frequenza di backup automatico scelta non è valida';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installa';
$l['overview'] = 'Quadro generale';
$l['features'] = 'Caratteristiche';
$l['demo'] = 'Demo';
$l['ratings'] = 'Valutazioni';
$l['import'] = 'Importareare';
$l['software_ver'] = 'Versione';
$l['space_req'] = 'Spazio richiesto';
$l['available_space'] = 'Spazio disponibile';
$l['req_space'] = 'Spazio necessario';
$l['mb'] = 'MB';
$l['software_support'] = 'Supporto software';
$l['support_link'] = 'Visita il sito di supporto';
$l['support_note'] = 'Nota: Softaculous non fornisce alcun tipo di supporto software.';
$l['setup'] = 'Installareazione del software';
$l['choose_domain'] = 'Scegliere dominio';
$l['choose_domain_exp'] = 'Scegli il dominio su cui installare il software.';
$l['in_directory'] = 'Nella directory';
$l['in_directory_exp'] = 'La directory è legata al tuo dominio e <b> e sarà creata se non esiste</b>. Per installare all\'indirizzo http://mydomain/dir/, digitare <b>dir</b>. Per installare solo in http://mydomain/, lasciare questo spazio vuoto.';
$l['softsubmit'] = 'Installa';
$l['congrats'] = 'Congratulazioni, il software è stato installato correttamente';
$l['succesful'] = 'è stato installato con successo a';
$l['enjoy'] = 'Speriamo che il processo d\'installazione sia stato semplice.';
$l['install_notes'] = 'Di seguito alcune note importanti. Si raccomanda la loro attenta lettura ';
$l['please_note'] = '<b>NOTE</b>: Softaculous è solo un autoinstaller e non fornisce alcun tipo di assistenza per i singoli pacchetti software. Per assistenza e supporto, visitare il sito web del venditore/i.';
$l['regards'] = 'Riconoscimenti';
$l['softinstaller'] = 'Autoinstaller Softaculous';
$l['return'] = 'Torna alla visione d\'insieme';
$l['current_ins'] = 'Installazioni correnti';
$l['link'] = 'Link';
$l['ins_time'] = 'Tempo installazione';
$l['version'] = 'Versione';
$l['upd_to'] = 'Aggiornare alla versione';
$l['remove'] = 'Rimuovere';
$l['no_info'] = 'Informazionirmazioni non disponibili';
$l['ratesoft'] = 'Valuta questo script';
$l['reviews'] = 'Recensioni';
$l['reviewsoft'] = 'Scrivi una recensione';
$l['readreviews'] = 'Leggi le recensioni';
$l['reviews_exp'] = 'Leggi le recensioni scritte da altri utenti e';
$l['ins_type'] = 'Tipo di installazione';
$l['ins_type_exp'] = '<b>Pacchetto originale</b> - Il pacchetto disponibile sul sito web degli script. <br /> <b>Solo file di libreria</b> - Solo i file di libreria Javascript.';
$l['ori_pack'] = 'Pacchetto originale';
$l['just_lib'] = 'Solo file di libreria';
$l['overwrite_exist'] = '<b>OR</b> <br />Spuntare la casella per sovrascrivere tutti i file e proseguire';
$l['overwrite'] = 'Sovrascrivere file';
$l['choose_protocol'] = 'Scegliere protocollo';
$l['choose_protocol_exp'] = 'Se il tuo sito utilizza SSL, ti preghiamo di scegliere il protocollo HTTPS.';
$l['clone'] = 'Clonare';
$l['options'] = 'Opzioni';
$l['downloading'] = 'Download pacchetto in corso';
$l['installing'] = 'Installareazione script in corso';
$l['go'] = 'Avanti';
$l['rem_inst_id'] = 'Rimozione installazione in corso - ';
$l['inst_remvd'] = 'Le installazioni selezionate sono state rimosse. La pagina sarà ricaricata adesso!';
$l['release_date'] = 'Data di rilascio';
$l['adv_option'] = 'Opzioni avanzate';
$l['disable_notify_update'] = 'Disattivare notifiche di aggiornamento';
$l['exp_disable_notify_update'] = 'Se spuntato, non riceverai una notifica email sugli aggiornamenti disponibili per questa installazione.';
$l['prog_installing'] = 'Installareazione in corso '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installareazione completata.';

$l['auto_backup'] = 'Backup automatici';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotazione backup';
$l['exp_auto_backup_rotation'] = 'Se il limite di rotazione dei backup è stato raggiunto, la '.APP.' eliminerà il backup più vecchio di questa installazione e quindi eseguirà un nuovo backup. I backup occupano spazio di archiviazione, quindi scegliere la rotazione di backup in funzione dello spazio disponibile sul server';
$l['no_backup'] = 'Non eseguire backup';
$l['daily'] = 'Una volta al giorno';
$l['weekly'] = 'Una volta alla settimana';
$l['monthly'] = 'Una volta al mese';
$l['unlimited'] = 'Illimitato';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Aggiorna eseguito di recente';
$l['act_clone'] = 'Clonazione eseguita di recente';
$l['act_backup'] = 'Backup eseguito di recente';
$l['act_install'] = 'Installareato di recente';
$l['act_edit'] = 'Modifiche apportate di recente';
$l['act_import'] = 'Importareato di recente';
$l['act_restore'] = 'Ripristinato di recente';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Gratuito developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>qui</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Parla agli amici del tuo sito web';
$l['err_auto_backup_limit'] = 'La rotazione dei backup non può eccedere il valore <b>&soft-1;</b>';
$l['select_domain'] = 'Selezionare dominio';
$l['with_selected'] = 'Con selezionati';
$l['not_in_free'] = '<b>&soft-1;</b> non può essere installato nella versione gratuita della '.APP.'!';
$l['notify_admin'] = 'Ti preghiamo di chiedere al tuo amministratore di server di acquistare la versione premium della '.APP.'!';
$l['related_scripts'] = 'Script correlati';

?>