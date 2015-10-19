<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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
$l['cant_remove_dir'] = 'Adresáře nelze odebrat, protože je to domovský adresář. Prosím zrušte možnost <b>Odstranit adresář</b>, aby bylo možné pokračovat bez odstranění adresáře.';
$l['no_dir'] = 'Adresář instalace neexistuje!';
$l['no_datadir'] = 'Adresář pro data neexistuje!';
$l['no_wwwdir'] = 'Adresář webu neexistuje!';
$l['wrong_url'] = 'URL a název adresáře se neshodují';
$l['wrong_wwwurl'] = 'URL webu a adresář webu se neshodují';
$l['err_mysql_user'] = 'Název MySQL databáze nebo heslo nebo databázový server jsou chybné, spojení nebylo možné navázat.';
$l['err_mysql_db'] = 'Název MySQL databáze není správný, databáze nemohla být vybrána.';
$l['mail_path'] = 'Cesta';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'MySQL databáze';
$l['mail_dbuser'] = 'Uživatel MySQL DB';
$l['mail_dbhost'] = 'MySQL DB server';
$l['mail_dbpass'] = 'Heslo MySQL DB';
$l['mail_time'] = 'Čas instalace';
$l['mail_editdetail_time'] = 'Čas změny';
$l['mail_subject'] = 'Detaily změněné instalace &soft-1;';
$l['mail_cron_command'] = 'Úloha CRONu';
$l['mail_datadir'] = 'Adresář pro data';
$l['mail_wwwdir'] = 'Adresář webu';
$l['mail_wwwurl'] = 'URL adresáře webu';

//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['ins_details'] = 'Detaily instalace';
$l['info'] = 'Informace';
$l['ins_softname'] = 'Software';
$l['ins_num'] = 'Číslo instalace';
$l['ins_ver'] = 'Verze';
$l['ins_time'] = 'Čas instalace';
$l['ins_path'] = 'Cesta';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Jméno databáze';
$l['ins_dbuser'] = 'Uživatel databáze';
$l['ins_dbpass'] = 'Heslo databáze';
$l['ins_dbhost'] = 'Databázový server';
$l['ins_datadir'] = 'Adresář pro data';
$l['ins_wwwdir'] = 'Adresář webu';
$l['ins_wwwurl'] = 'URL adresáře webu';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'Podrobnosti instalace byly úspěšně upraveny';
$l['version_edited'] = 'Verze byla aktualizovaná v našich záznamech.';
$l['return'] = 'Zpět na Přehled';

$l['edit_ins'] = 'Upravit podrobnosti instalace';
$l['edit_dir'] = 'Adresář';
$l['edit_datadir'] = 'Adresář pro data';
$l['edit_db'] = 'Jméno databáze';
$l['edit_dbuser'] = 'Uživatel databáze';
$l['edit_dbpass'] = 'Heslo databáze';
$l['edit_dbhost'] = 'Databázový server';
$l['edit_url'] = 'URL';
$l['editins'] = 'Uložit podrobnosti instalace';
$l['mail_editdetail_ins'] = 'Podrobnosti instalace &soft-1; byly upraveny. Níže jsou uvedeny upravené podrobnosti instalace:';
$l['edit_wwwdir'] = 'Adresář webu';
$l['edit_wwwurl'] = 'URL adresáře webu';
$l['disable_notify_update'] = 'Zablokovat oznámení o aktualizacích';
$l['exp_disable_notify_update'] = 'Zaškrtnete-li tuto volbu, nebudete emailem dostávat upozornění na dostupný update pro tuto instalaci.';
$l['alreadyupdated'] = 'Hm… vypadá to, že aktuální verze instalace je <b>&soft-1;</b> a ne <b>&soft-2;</b>. <br/> Klikněte zde pro aktualizaci '.APP.' záznamů.';
$l['edit_acc_detail'] = 'Upravit detaily správce účtu';
$l['eu_auto_upgrade'] = 'Auto upgrade';
$l['exp_eu_auto_upgrade'] = 'Je-li zaškrtnuto, tato instalace bude automaticky aktualizovaná na nejnovější verzi, bude-li nová verze k dispozici.';
$l['auto_upgrade_plugins'] = 'Nástroje auto upgradu &soft-1;';
$l['exp_auto_upgrade_plugins'] = 'Zaškrtnete-li tuto volbu, všechny aktivní nástroje &soft-1; budou automaticky upgradovány na nejnovější verzi, pokud proběhne upgrade instalace.';
$l['auto_upgrade_themes'] = 'Automatický upgrade motivů &soft-1;';
$l['exp_auto_upgrade_themes'] = 'Je-li zaškrtnuto, aktivní  motiv &soft-1; pro tuto instalaci bude automaticky upgradován na nejnovější verzi, jestliže bude váš instalační skript upgradovaný.';
$l['auto_backup'] = 'Automatizované zálohy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotace záloh';
$l['exp_auto_backup_rotation'] = 'Je-li dosažen limit rotace záloh, '.APP.' smaže nejstarší zálohu pro tuto instalaci a vytvoří novou zálohu. Zálohy budou využívat váš prostor, proto zvolte rotaci záloh dle dostupného prostoru na vašem serveru';
$l['no_backup'] = 'Nezálohovat';
$l['daily'] = 'Jednou denně';
$l['weekly'] = 'Jednou týdně';
$l['monthly'] = 'Jednou měsíčně';
$l['unlimited'] = 'Neomezeně';
$l['auto_backup_not_allowed'] = 'Frekvence automatické zálohy, kterou jste zvolili, je neplatná';

$l['no_edit'] = 'Soubor EDIT.XML nenalezen! Sdělte to prosím správci serveru.';
$l['no_functions'] = 'Soubor EDIT FUNCTIONS nenalezen! Sdělte to prosím správci serveru.';
$l['no_field'] = 'Pole <b>&soft-1;</b> je povinné a musí být vyplněno.';
$l['err_auto_backup_limit'] = 'Automatická rotace záloh nemůže být více než <b>&soft-1;</b>';
$l['select_files'] = 'Vyberte soubory/složky';
$l['select_files_exp'] = 'Prosím vyberte dodatečné soubory/složky spojené s touto instalací. <br/>Tento seznam bude použit pro operace jako Klon nebo Zálohování této instalace';
$l['invalid_files_in_post_list'] = 'Byly vybrány některé neplatné soubory/složky';
$l['select_files_list'] = 'Vyberte dodatečné soubory/složky z následujícího listu';

$l['select_files_backup'] = 'Použijte výše vybrané soubory/složky pro zálohu';
$l['select_files_backup_exp'] = 'Je-li zvoleno, budou zálohovány pouze soubory/složky vztahující se k této instalaci. <br/> Výchozí nastavení zálohy obsahuje všechny soubory/složky v rámci této cesty.';
$l['no'] = 'Ne';
$l['yes'] = 'Ano';
$l['check_all_edit'] = 'Vybrat vše';

?>