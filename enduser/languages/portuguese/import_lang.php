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

$l['no_info_file'] = 'Não foi possivel encontrar o ficheiro INFO.XML! Informe o administrador de sistema desta mensagem.';
$l['incompatible'] = 'O software necessita de uma versão do '.APP.' mais recente! Informe o administrador de sistema desta mensagem.';
$l['no_functions'] = 'O ficheiro IMPORT FUNCTIONS não foi encontrado! Informe o administrador de sistema desta mensagem.';
$l['no_softdomain'] = 'Não seleccionou o dominio de onde importar o software.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Importar Software';
$l['choose_domain'] = 'Seleccione Dominio';
$l['choose_domain_exp'] = 'Seleccione o dominio onde o software já se encontra instalado.';
$l['in_directory'] = 'Directório';
$l['in_directory_exp'] = 'O directório é relativo ao dominio. ex. Para importar um software instalado em http://dominio/directorio/ deverá inserirb>directorio</b>. Para importar software instalado na raiz do dominio http://dominio/ deixe este campo em branco.';
$l['softsubmit'] = 'Importar';
$l['congrats'] = 'Software importado com sucesso';
$l['succesful'] = 'foi importado com sucesso em';
$l['admin_url'] = 'URL Admin';
$l['enjoy'] = 'Esperamos que o processo de importação tenha sido fácil.';
$l['import_notes'] = 'Seguem-se algumas notas importantes. Leia as mesmas atentamente: ';
$l['please_note'] = '<b>NOTA</b>: O Softaculous é apenas um script de instalação automática não dando suporte as aplicações instaladas pelo mesmo. Para informações especificas relativamente ao software instalado deverá consultar o endereço do mesmo para mais informações!';
$l['regards'] = 'Cumprimentos';
$l['softinstaller'] = 'O auto instalador Softaculous';
$l['return'] = 'Voltar ao Inicio';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>