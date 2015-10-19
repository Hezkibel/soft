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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az IMPORT FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_softdomain'] = 'Nem választott ki domain nevet az alkalmazás importjához.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Meglévő telepítés importálása';
$l['choose_domain'] = 'Domain név kiválasztása';
$l['choose_domain_exp'] = 'Válassza ki, hogy melyik domain név alatt van a telepítés.';
$l['in_directory'] = 'Telepítési könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest. Pl.: A http://www.domainnevem.hu/xyz/ alatti telepítés esetén <b>xyz</b> a telepítési könyvtár. Ha az alkalmazás a http://www.domainnevem.hu/ alatt érhető el, akkor hagyja üresen.';
$l['softsubmit'] = 'Importálás';
$l['congrats'] = 'Gratulálunk, az alkalmazás importálása sikeres volt.';
$l['succesful'] = ' sikeresen importálva ide';
$l['admin_url'] = 'Adminisztratív URL';
$l['enjoy'] = 'Reméljük, hogy az importálás egyszerű volt.';
$l['import_notes'] = 'Fontos információk. Ajánlott, hogy olvassa el: ';
$l['please_note'] = '<b>Figyelem</b>: '.APP.' csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = APP.' alkalmazás-telepítő';
$l['return'] = 'Vissza az áttekintéshez';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>
