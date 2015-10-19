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

$l['err_cannot_autoupgrade'] = 'Automatyczne aktualizacje nie mogą być wykonywane dla tego panelu sterowania. \n';
$l['err_upgrade_restore_failed'] = 'Nie można uaktualnić instalacji i również nie udało się przywrócenie z utworzonego backupu. Szczegóły:';
$l['err_upgrade_restore_success'] = 'Nie można uaktualnić instalacji ALE pomyślnie przywrócono kopię z utworzonego backupu. Szczegóły:';
$l['err_upgrade'] = 'Nie można aktualizować instalacji. Szczegóły:';
$l['err_upgrade_req'] = 'Ta instalacja nie spełnia wymagań aktualizacji. W takim wypadku nie może być automatycznie aktualizowana. Szczegóły:';
$l['err_could_not_posix'] = 'Nie można przełączyć użytkownika, proces będzie przerwany...';
$l['err_cant_upgrade_for_this_server'] = 'Sprawdzenie przed aktualizacją NIE POWIODŁO SIĘ ponieważ zewnętrzny adres URL był niedostępny.\n Przyczyną tego może być wyłączona funkcja allow_url_fopen() na serwerze lub błąd CURL podczas dostępu do adresu URL. Automatyczna aktualizacja nie może być przeprowadzona.
';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = 'Nie podano nazwy skryptu. \n';
$l['list_scripts'] = '\nPoniżej znajduje się lista skryptów, które mogą nie działać na Twoim serwer. \nPonieważ nie spełniają minimalnych wymagań skryptów';
$l['no_scripts'] = 'Skrypty nie zostały załadowane.';
$l['remove'] = 'Usunięte';
$l['heading'] = 'Nazwa skryptu \t ID instalacji skryptu \n';
$l['note_by_automated_upgrade'] = 'Backup wykonany przez automatyczny backup';
?>
