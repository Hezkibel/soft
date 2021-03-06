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

$l['no_info_file'] = 'Файл INFO.XML не может быть найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['incompatible'] = 'Программное обеспечение требует новой версии '.APP.'! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_functions'] = 'Файл функции импорта не найден! Пожалуйста, сообщите об этом администратору сервера.';
$l['no_softdomain'] = 'Вы не выбрали домен для импорта программного обеспечения.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Импорт Программного обеспечения';
$l['choose_domain'] = 'Выберите Домен';
$l['choose_domain_exp'] = 'Пожалуйста, выберите домен, для которого программное обеспечение установлено.';
$l['in_directory'] = 'В каталоге';
$l['in_directory_exp'] = 'Каталог к вашему домену. Например для импорта программного обеспечения, установленного на http://mydomain/dir/ просто введите реж <b>dir</b>. Для импорта программного обеспечения, установленного только в http://mydomain/ оставьnt поле пустым.';
$l['softsubmit'] = 'Импорт';
$l['congrats'] = 'Поздравляем, Программное обеспечение импортировано успешно!';
$l['succesful'] = 'успешно импортирован в';
$l['admin_url'] = 'Админ URL';
$l['enjoy'] = 'Мы надеемся, что процесс импорта был прост.';
$l['import_notes'] = 'Ниже приводятся некоторые важные примечания. Мы рекомендуем, чтобы вы прочитали их: ';
$l['please_note'] = '<b>ПРИМЕЧАНИЕ</b>: Softaculous производит только автоматическую установку и не предоставляет никакой поддержки для программного обеспечения. Пожалуйста, посетите веб сайт разработчика скрипта или программного обеспечения!';
$l['regards'] = 'С уважением';
$l['softinstaller'] = 'Softaculous Авто Установщик';
$l['return'] = 'Вернуться к Обзору';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>