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

$l['no_info_file'] = 'INFO.XML dosyasına ulaşılamıyor. Lütfen sistem yöneticinize başvurun.';
$l['incompatible'] = ''.APP.'\'ın güncellenmesi gerekiyor! Lütfen sistem yöneticinize başvurun.';
$l['no_functions'] = 'YÜKLEME FONKSİYONLARINA ulaşılamıyor! Lütfen sistem yöneticinize başvurun.';
$l['no_softdomain'] = 'Scriptin yüklenmesi için domain seçmediniz.';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['import_soft'] = 'Scripti İçeri Al';
$l['choose_domain'] = 'Domain Seçin';
$l['choose_domain_exp'] = 'Yükleme yapılacak klasörü seçiniz.';
$l['in_directory'] = 'Yükleme dizini';
$l['in_directory_exp'] = 'Dizin veya alt alan adı yoksa <b>oluşturulmaya çalışılacaktır</b>. örnek: http://mydomain/dir/ şeklinde kurmak için <b>dir</b> yazın. http://mydomain/ şeklinde kurmak için boş bırakın.';
$l['softsubmit'] = 'İçeri Al';
$l['congrats'] = 'Tebrikler, içeri alma işlemi başarılı';
$l['succesful'] = 'başarıyla içeri alınan';
$l['admin_url'] = 'Yönetim URL';
$l['enjoy'] = 'İçeri alma işini daha da kolaylaştırmayı umut ediyoruz.';
$l['import_notes'] = 'Önemli notlar var. Okumanızı tavsiye ediyoruz. ';
$l['please_note'] = '<b>NOT</b>: Softaculous sadece script yükleyici bir sistemdir. Yüklediğiniz scriptler hakkında destek vermez. Kurduğunuz/Kuracağınız scriptler için o scriptin üreticisine başvurun!';
$l['regards'] = 'Saygılarımısı Sunarız';
$l['softinstaller'] = 'Softaculous Anında Yükleme';
$l['return'] = 'Genel Bakışa Geri Dön';

$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['wrong_softdomain'] = 'The path of the domain you selected could not be found.';
?>