<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Plik INSTALL.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['incompatible'] = 'Oprogramowanie wymaga wyższej wersji '. APP.'! Prosimy o wysłanie zgłoszenia do administratora serwera.';
$l['no_functions'] = 'Plik INSTALL FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_softdomain'] = 'Nie wybrałeś domeny aby zaimportować oprogramowanie.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Import oprogramowania';
$l['choose_domain'] = 'Wybierz domenę';
$l['choose_domain_exp'] = 'Proszę wybrać domenę, gdzie jest już zainstalowane oprogramowanie.';
$l['in_directory'] = 'W katalogu';
$l['in_directory_exp'] = 'Katalog jest powiązany z Twoją domeną. Np.: aby importować oprogramowanie zainstalowane w http://mydomain/dir/ wpisz tylko <b>dir</b>. Aby zaimportować oprogramowanie zainstalowane tylko w http://mydomain/ zostawić to pole puste.';
$l['softsubmit'] = 'Importuj';
$l['congrats'] = 'Gratulacje, oprogramowanie został pomyślnie zaimportowane';
$l['succesful'] = 'zostało pomyślnie zaimportowane do';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'Mamy nadzieję, że proces importowania było łatwy.';
$l['import_notes'] = 'Oto kilka ważnych uwag. Sugerujemy aby się z nimi zapoznać:';
$l['please_note'] = '<b>Uwaga</b>: Softaculous jest automatycznym instalatorem i  i nie dostarcza żadnego wsparcia dla pakietów oprogramowania. Zapraszamy do odwiedzenia stron internetowych wybranego pakietu oprogramowania celem uzyskania wsparcia!';
$l['regards'] = 'Podziękowania';
$l['softinstaller'] = 'Autoinstalator Softculous';
$l['return'] = 'Powrót do przegladu';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>