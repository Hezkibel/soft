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

$l['no_ins'] = 'Instalace nebyla zadána';
$l['wrong_ins_title'] = 'Špatné instalační ID';
$l['wrong_ins'] = 'Instalační ID, které bylo zadáno, neexistuje';
$l['backup_ftp_error'] = 'Nelze vytvořit adresář zálohy <b>&soft-1;</b>. Vytvořte jej ručně a zkuste to znovu.';
$l['err_backup'] = 'Nelze vytvořit zálohu.';
$l['no_space_backup'] = 'Nemáte dostatek místa pro zálohování této instalace!';
$l['err_notelength'] = 'Poznámka k záloze musí mít méně než 255 znaků';

$l['cant_backup_dir'] = 'Nástroj zálohy nemohl zazálohovat soubory.';
$l['could_not_read'] = 'Jejda, Softaculous nemohl přečíst následující soubor/adresář <b>&soft-1;</b>. Povolte ho pro "čtení", aby bylo možné dále používat nástroj zálohy.';
$l['cant_datadir_dir'] = 'Došlo k chybám při přidávání adresáře pro data.';
$l['cant_wwwdir'] = 'Došlo k chybám při přidávání adresáře webu.';
$l['cant_backup_db'] = 'Došlo k chybám při přidávání databáze do zálohy.';
$l['err_perm_file'] = 'Došlo k chybám při vytváření souboru práv';
$l['err_dataperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře pro data';
$l['err_wwwperm_file'] = 'Došlo k chybám při vytváření souboru práv adresáře webu';
$l['save_dir_perms'] = 'Nelze uložit oprávnění souboru.';
$l['save_datadir_perms'] = 'Nelze uložit oprávnění adresáře pro data';
$l['save_www_perms'] = 'Nelze uložit oprávnění adresáře webu.';
$l['cant_connect_mysql'] = 'Nelze se připojit k databázi, prosím ověřte uživatelské jméno/heslo vaší databáze. Došlo-li ke změně, prosím aktualizujte detaily v instalaci Softaculous pomocí sekce Upravit detaily.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_wwwdir'] = 'Cesta adresáře webu';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_dir'] = 'Adresář zálohy';
$l['backup_dir_exp'] = 'Pokud zaškrtnete toto, celá složka bude zálohovaná';
$l['backup_db'] = 'Záloha databáze';
$l['backup_db_exp'] = 'Je-li zaškrtnuto, bude zálohovaná také databáze';
$l['backup_conf'] = 'Zálohování může trvat delší dobu v závislosti na datech. Prosím nezavírejte webovou stránku ani nepřecházejte na jinou stránku.';
$l['backedup'] = 'Záloha byla úspěšně vytvořena. Můžete ji stáhnout ze stránky <a href=\"'.$globals['index'].'act=backups\">zálohy</a> .<br /> URL vaší instalace:  <a href=\"&soft-1;\" target=\"_blank\">&soft-1;</a>';
$l['backup_ins'] = 'Záloha instalace';
$l['backup_datadir'] = 'Záloha adresáře pro data';
$l['backup_datadir_exp'] = 'Je-li zaškrtnuto, adresář pro data bude uložen.';
$l['ins_datadir'] = 'Adresář pro data';
$l['return'] = 'Zpět na Přehled';
$l['ins_cron_command'] = 'Cron Command';
$l['backup_wwwdir'] = 'Záloha adresáře webu';
$l['backup_wwwdir_exp'] = 'Je-li zaškrtnuto, adresář webu bude uložen.';
$l['checking_data'] = 'Kontrola zadaných dat';
$l['backingup_db'] = 'Zálohování databáze';
$l['backingup_dir'] = 'Zálohování adresáře';
$l['backingup_datadir'] = 'Zálohování adresáře pro data';
$l['finishing_process'] = 'Dokončení zálohy';
$l['wait_note'] = '<b>POZNÁMKA:</b> Toto může trvat 3-4 minuty. Tuto stránku můžete opustit, pokud chcete!';
$l['backingup'] = 'Záloha je vytvářena na pozadí. O jejím dokončení budete informováni emailem.<br/> Po dokončení zálohy ji můžete stáhnout ze stránky <a href=\"'.$globals['index'].'act=backups\">Zálohy</a>.<br /> URL vaší instalace: <a href=\"&soft-1;\" target=\"_blank\">&soft-1;</a>';
$l['check_email'] = 'Prosím zkontrolujte váš email pro stav zálohy';
$l['prog_backingup'] = 'Zálohování'; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Záloha dokončena.';
$l['backup_note'] = 'Poznámka k záloze';
$l['backup_note_exp'] = 'Můžete si uložit poznámku pro vaši referenci';
$l['backup_operation'] = 'Vyberte operaci(e ) zálohování';
$l['backups_expire'] = 'Vaše zálohy budou automaticky odstraněny po <b>&soft-1;</b> dnech od vytvoření zálohy.';
$l['err_max_backups'] = 'Dosáhli jste maximálního počtu povolených záloh (<b>&soft-1;</b>). Prosím odstraňte nepotřebné zálohy, aby bylo možné provést novou zálohu.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';

?>