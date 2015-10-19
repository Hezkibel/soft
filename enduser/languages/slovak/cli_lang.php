<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = 'Automatický update nemôže byť vykonaný pre tento control panel.\n';
$l['err_upgrade_restore_failed'] = 'Nepodarilo sa aktualizovať inštaláciu A nepodarila sa obnova z vytvorenej zálohy. Nasledujú detaily :';
$l['err_upgrade_restore_success'] = 'Nepodarilo sa aktualizovať inštaláciu ALE úspešne prebehlo obnovenie z vytvorenej zálohy. Nasledujú detaily :';
$l['err_upgrade'] = 'Nepodarilo sa aktualizovať inštaláciu. Nasledujú detaily :';
$l['err_upgrade_req'] = 'Táto inštalácia nespĺňa požiadavky pre aktualizáciu. Preto nemôže byť automaticky aktualizovaná. Nasledujú detaily :';
$l['err_could_not_posix'] = 'Nie je možné sa pripojiť j užívateľovi, preto prerušujem proces...';
$l['err_cant_upgrade_for_this_server'] = 'Kontroly aktualizácie ZLYHALI, pretože nebolo možné pristúpiť k externej URL.\n Toto môže byť spôsobené tým, že je na serveri zakázané allow_url_fopen() alebo CURL nemohol pristúpiť k URL. Preto nemôže byť vykonaná automatická aktualizácia.';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = 'Názov skriptu nie je poskytnutý.\n';
$l['list_scripts'] = '\nNasleduje zoznam skriptov, ktoré nemusia fungovať na vašom serveri.\nPretože nespĺňa minimálne požiadavky skriptu(/-ov)';
$l['no_scripts'] = 'Skripty neboli načítané.';
$l['remove'] = 'Odstránené';
$l['heading'] = 'Názov skriptu \t ID inštalácie skriptu \n';
$l['note_by_automated_upgrade'] = 'Záloha bola vytvorená automatickou aktualizáciou';
?>
