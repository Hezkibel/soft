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

$l['err_cannot_autoupgrade'] = 'Automatická aktualizace nemůže být pro tento ovládací panel provedena. \n';
$l['err_upgrade_restore_failed'] = 'Nepodařil se upgrade instalace a také se nepodařila obnova z vytvořené zálohy. Níže jsou uvedeny podrobnosti:';
$l['err_upgrade_restore_success'] = 'Nepodařil se upgrade instalace, ale došlo k úspěšné obnově z vytvořené zálohy. Níže jsou uvedeny podrobnosti:';
$l['err_upgrade'] = 'Nepodařil se upgrade instalace. Níže jsou uvedeny podrobnosti:';
$l['err_upgrade_req'] = 'Tato instalace nesplňuje požadavky upgradu. Z tohoto důvodu nemůže být automaticky aktualizovaná. Níže jsou uvedeny podrobnosti:';
$l['err_could_not_posix'] = 'Proces přerušen, nelze se připojit k uživateli…';
$l['err_cant_upgrade_for_this_server'] = 'Předběžná kontrola upgradu selhala, nelze přistoupit k externí URL.\n To může být způsobeno zablokováním allow_url_fopen() na vašem serveru nebo se cURL nepodařilo získat přístup k URL. Nelze proto provést Auto upgrade.';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = 'Název skriptu není k dispozici. \n';
$l['list_scripts'] = '\n Následuje seznam skriptů, které nemusí fungovat na vašem serveru. \n Protože nesplňuje minimální požadavky skriptu(ů)';
$l['no_scripts'] = 'Skripty nebyly načteny.';
$l['remove'] = 'Odstraněno';
$l['heading'] = 'Jméno skriptu \t Instalace skriptu ID \n';
$l['note_by_automated_upgrade'] = 'Záloha vytvořena automatickým upgradem';
?>
