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

$l['no_info_file'] = 'INFO.XML файла не може да бъде намерен! Моля съобщете за това на администратора на сървъра.';
$l['incompatible'] = 'Софтуерът изисква по-висока версия '.APP.'! Моля съобщете за това на администратора на сървъра.';
$l['no_functions'] = 'Функциите за импортиране файл не може да бъде намерен! Моля съобщете за това на администратора на сървъра.';
$l['no_softdomain'] = 'Не сте избрали домейн за внос на софтуер.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Внос на софтуер';
$l['choose_domain'] = 'Избери домейн';
$l['choose_domain_exp'] = 'Моля изберете домейн, където вече е инсталиран софтуера.';
$l['in_directory'] = 'В директория';
$l['in_directory_exp'] = 'Директорията е относителна към вашия домейн. Например за да импортирате софтуер инсталиран в http://mydomain/dir/ просто напишете <b>директория</b>. To import software installed only in http://mydomain/ leave this empty.';
$l['softsubmit'] = 'Внасяне';
$l['congrats'] = 'Поздравления, софтуерът е внесен успешно';
$l['succesful'] = 'е успешно внесени в';
$l['admin_url'] = 'Админ URL';
$l['enjoy'] = 'Надяваме се, че процеса на импортиране е лесно.';
$l['import_notes'] = 'По-долу са някои важни бележки. Ние силно препоръчваме да прочетете тези: ';
$l['please_note'] = '<b>ВНИМАНИЕ</b>: Softaculous е просто автоматичен инсталатор и не осигурява никаква подкрепа за софтуерни пакети. Моля посетете сайта на скрипта за всякакъв вид поддръжка!';
$l['regards'] = 'Пожелания';
$l['softinstaller'] = 'Softaculous автоматичен инсталатор';
$l['return'] = 'Назад към преглед';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>