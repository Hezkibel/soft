<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       25th Augustus 2009
// Time:       18:00 hrs
// Site:       http://www.equipc.net
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

$l['no_info_file'] = 'Le fichier INFO.XML n\'a pu être trouvé ! Merci de signaler cette erreur à l\'administrateur du serveur.';
$l['incompatible'] = 'Ce logiciel nécessite une version supérieure de '.APP.'. Merci de le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier comprenant les fonctions d\'importation n\'a pas été trouvé ! Merci d\'en informer l\'administrateur du serveur.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi le domaine du logiciel à importer.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importer un logiciel';
$l['choose_domain'] = 'Choisir le domaine';
$l['choose_domain_exp'] = 'Merci de choisir le domaine où le logiciel est déjà installé.';
$l['in_directory'] = 'Dans le dossier';
$l['in_directory_exp'] = 'Ce dossier est relatif à votre domaine. Par exemple, pour importer un logiciel installé à l\'adresse http://mondomaine/dir/, tapez simplement <b>dir</b>. Pour importer un script installé sur http://mydomain/, laissez ce champ vide.';
$l['softsubmit'] = 'Import';
$l['congrats'] = 'Félicitations, le script/logiciel a été correctement importé.';
$l['succesful'] = 'a été correctement importé à';
$l['admin_url'] = 'URL du panneau d\'administration';
$l['enjoy'] = 'Nous espérons que ce processus d\'importation fût facile.';
$l['import_notes'] = 'Ce qui suit contient des notes importantes et nous vous recommendons très fortement de les lire.';
$l['please_note'] = '<b>NOTE</b>: '.APP.' est simplement un outil d\'installation automatique et ne fournit aucun support pour les scripts / logiciels installés. Merci de visiter le site de son développeur pour tout type de support.';
$l['regards'] = 'Concerne';
$l['softinstaller'] = APP.' Auto Installer';
$l['return'] = 'Retourner à l\'aperçu';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>
