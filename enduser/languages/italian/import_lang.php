<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
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

$l['no_info_file'] = 'Il file INFO.XML non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['incompatible'] = 'Il software richiede una versione successiva di Softaculous! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_functions'] = 'Il file delle IMPORT FUNCTIONS non &egrave; stato trovato! Si prega di inviare una segnalazione all\'Amministratore del Server.';
$l['no_softdomain'] = 'Non hai scelto il dominio per l\'importazione del software.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importa Software';
$l['choose_domain'] = 'Scegli il dominio';
$l['choose_domain_exp'] = 'Si prega di indicare il dominio dove il software &egrave; gi&agrave; installato.';
$l['in_directory'] = 'Nella Cartella';
$l['in_directory_exp'] = 'La cartella &egrave; relativa al tuo dominio. Ad esempio, per importare un software installato su http://mydomain/dir/, indicare soltanto <b>dir</b>. Per importare un software installato su http://mydomain/, lasciare il campo in bianco.';
$l['softsubmit'] = 'Importa';
$l['congrats'] = 'Congratulazioni, il software &egrave; stato importato con successo!';
$l['succesful'] = '&egrave; stato importato con successo su';
$l['admin_url'] = 'URL admin';
$l['enjoy'] = 'Ci auguriamo che il processo di importazione sia stato semplice.';
$l['import_notes'] = 'Di seguito sono riportate alcune note importanti; ci raccomandiamo che vengano lette con attenzione';
$l['please_note'] = '<b>NOTA</b>: '.APP.' &egrave; semplicemente un programma di Installareareazione Automatica e non fornisce alcun supporto per il software. Si prega di visitare il sito ufficiale degli Script per qualsiasi tipo di supporto!';
$l['regards'] = 'Saluti';
$l['softinstaller'] = APP.' Auto Installareareer';
$l['return'] = 'Ritorna alla panoramica';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>