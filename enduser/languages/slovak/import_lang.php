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

$l['no_info_file'] = 'Súbor INFO.XML nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['incompatible'] = 'Softvér požaduje vyššiu verziu '.APP.'! Prosím, oznámte to správcovi servera.';
$l['no_functions'] = 'Súbor IMPORT FUNCTIONS nebol nájdený! Prosím, oznámte to správcovi servera.';
$l['no_softdomain'] = 'Nevybrali ste doménu pre importovanie softvéru.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importovať softvér';
$l['choose_domain'] = 'Vybrať doménu';
$l['choose_domain_exp'] = 'Prosím vyberte doménu, kde je softvér už nainštalovaný.';
$l['in_directory'] = 'V priečinku';
$l['in_directory_exp'] = 'Priečinok je relatívny k vašej doméne. napr. Pre importovanie softvéru z http://mojadomena/dir napíšte len <b>dir</b>. Pre importovanie softvéru inštalovaného v http://mojadomena/ nechajte toto prázdne.';
$l['softsubmit'] = 'Import';
$l['congrats'] = 'Gratulujeme, softvér bol úspešne importovaný';
$l['succesful'] = 'bol úspešne importovaný do';
$l['admin_url'] = 'URL správcu';
$l['enjoy'] = 'Dúfame, že proces importu bol jednoduchý.';
$l['import_notes'] = 'Nasledujú dôležité poznámky. Výrazne odporúčame prečítať si toto:';
$l['please_note'] = '<b>UPOZORNENIE</b>: Softaculous je iba auto inštalátor a neposkytuje žiadnu podporu pre softvérové balíčky. Prosím, navštívte stránky skriptu alebo softvéru pre akúkoľvek podporu!';
$l['regards'] = 'S pozdravom';
$l['softinstaller'] = 'Softaculous Auto inštalátor';
$l['return'] = 'Spať na prehľad';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>