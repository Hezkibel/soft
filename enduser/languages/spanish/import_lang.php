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

$l['no_info_file'] = 'INFO.XML ¡el archivo no se pudo encontrar! Por favor, informa de ello al administrador del servidor.';//The INFO.XML file could not be found! Please report this to the Server Admin.
$l['incompatible'] = '¡El software requiere una versión más reciente de '.APP.'! Por favor, informa de ello al administrador del servidor.';//The software requires a higher version of Softaculous! Please report this to the Server Admin.
$l['no_functions'] = '¡La función importar el archivo no se pudo encontrar! Por favor, informa de ello al administrador del servidor.';//The IMPORT FUNCTIONS file could not be found! Please report this to the Server Admin.
$l['no_softdomain'] = 'No has elegido el dominio para importar el software.';//You did not choose the domain to import the software.

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importar software';//Import Software
$l['choose_domain'] = 'Elija el dominio';//Choose Domain
$l['choose_domain_exp'] = 'Por favor, seleccione el dominio en el que el software ya está instalado.';//Please choose the domain where the Software is already installed.
$l['in_directory'] = 'En Directorio';//In Directory
$l['in_directory_exp'] = 'El directorio es relativo a su dominio. por ejemplo, Para importar un software instalado en http://mydomain/dir/ escriba <b> dir </ b>. Para importar un software instalado en http://mydomain/ deje este espacio vacío.';//The directory is relative to your domain. e.g. To import a Software installed at http://mydomain/dir/ just type <b>dir</b>. To import a Software installed only in http://mydomain/ leave this empty.
$l['softsubmit'] = 'Importar';//Import
$l['congrats'] = 'Enhorabuena, el software fue importado con éxito';//Congratulations, the software was imported successfully
$l['succesful'] = 'Se ha importado en';//has been successfully imported at
$l['admin_url'] = 'Admin URL';//Admin URL
$l['enjoy'] = 'Esperamos que el proceso de importación fuese fácil.';//We hope the import process was easy.
$l['import_notes'] = 'Lo siguiente son algunas notas importantes y altamente recomendables para su lectura';//The following are some Important Notes and its Highly Recommended that you read it 
$l['please_note'] = '<b> NOTA </ b>: Softaculous es sólo un instalador automático y no proporciona ningún tipo de ayuda técnica. ¡Por favor visite el sitio de scripts para todo tipo de ayuda!';//<b>NOTE</b>: Softaculous is just an Auto Installer and does not provide any support for the software. Please visit the Scripts Site for any kind of support!
$l['regards'] = 'Saludos';//Regards
$l['softinstaller'] = 'Softaculous Auto instalador';//Softaculous Auto Installer
$l['return'] = 'Volver a General';//Return to Overview

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>
