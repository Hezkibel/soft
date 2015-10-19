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

$l['no_info_file'] = 'The INFO.XML file could not be found! Please report this to the server administrator.';
$l['incompatible'] = 'The software requires a higher version of '.APP.'! Please report this to the server administrator.';
$l['no_functions'] = 'The IMPORT FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'You did not choose the domain to import the software.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Import Software';
$l['choose_domain'] = 'Choose Domain';
$l['choose_domain_exp'] = 'Please choose the domain where the software is already installed.';
$l['in_directory'] = 'In Directory';
$l['in_directory_exp'] = 'The directory is relative to your domain. e.g. To import software installed at http://mydomain/dir/ just type <b>dir</b>. To import software installed only in http://mydomain/ leave this empty.';
$l['softsubmit'] = 'Import';
$l['congrats'] = 'Congratulations, the software was imported successfully';
$l['succesful'] = 'has been successfully imported at';
$l['admin_url'] = 'Admin URL';
$l['enjoy'] = 'We hope the import process was easy.';
$l['import_notes'] = 'The following are some important notes. We highly recommend that you read these: ';
$l['please_note'] = '<b>NOTE</b>: Softaculous is just a auto installer and does not provide any support for the software packages. Please visit the script or software\'s web site for any kind of support!';
$l['regards'] = 'Regards';
$l['softinstaller'] = 'Softaculous Auto Installer';
$l['return'] = 'Return to Overview';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>