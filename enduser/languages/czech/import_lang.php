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

$l['no_info_file'] = 'Soubor INFO.XML nenalezen! Prosím oznamte to správci serveru.';
$l['incompatible'] = 'Software vyžaduje vyšší verzi ".APP."! Prosím oznamte to správci serveru.';
$l['no_functions'] = 'Soubor IMPORT FUNCTIONS nenalezen! Prosím oznamte to správci serveru.';
$l['no_softdomain'] = 'Nevybrali jste doménu pro importování softwaru.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importovat software';
$l['choose_domain'] = 'Zvolit doménu';
$l['choose_domain_exp'] = 'Prosím vyberte doménu, kde je software již instalovaný.';
$l['in_directory'] = 'V adresáři';
$l['in_directory_exp'] = 'Adresář je relativní k vaší doméně. Např. chcete-li importovat software instalovaný na adrese http://mydomain/dir/, stačí zadat <b>dir</b>. Chcete-li importovat software nainstalovaný pouze v http://mydomain/, ponechte toto prázdné.';
$l['softsubmit'] = 'Importovat';
$l['congrats'] = 'Gratulujeme, software byl úspěšně importován.';
$l['succesful'] = 'byl úspěšně importován na';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'Doufáme, že proces importu byl snadný.';
$l['import_notes'] = 'Níže jsou uvedeny některé důležité poznámky. Doporučujeme si je přečíst.';
$l['please_note'] = '<b>POZNÁMKA</b>: Softaculous je pouze automatický instalátor softwaru a neposkytuje žádnou podporu pro jednotlivé softwarové balíčky. Kvůli podpoře navštivte prosím skript nebo stránky prodejce softwaru.';
$l['regards'] = 'S pozdravem';
$l['softinstaller'] = 'Softaculous auto instalátor';
$l['return'] = 'Zpět na Přehled';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>