<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_lang.php
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

$l['no_ins'] = 'Nie dodano żadnej instalacji';
$l['wrong_ins_title'] = 'Błędne ID Instalacji';
$l['wrong_ins'] = 'Przesłany przez Ciebie ID instalacji nie istnieje';
$l['cant_remove_dir'] = 'Nie można usunąć katalogu ponieważ jest to katalog domowy. Proszę odznaczyć opcję <b>Usuń katalog</b> aby kontynuować bez usuwania tego katalogu.';
$l['no_dir'] = 'Katalog instalacji nie istnieje!';
$l['no_datadir'] = 'Katalog danych nie istnieje!';
$l['no_wwwdir'] = 'Katalog Web nie istnieje!';
$l['wrong_url'] = 'Nazwa URL i KATALOGU nie mogą być takie same';
$l['wrong_wwwurl'] = 'Nazwy WEB URL i KATALOGU WEB nie s takie same';
$l['err_mysql_user'] = 'Nazwa użytkownika, hasło lub host bazy danych MySQL są niepoprawne i tym samym nie można nawiązać połączenia.';
$l['err_mysql_db'] = 'Nazwa bazy danych MySQL jest niepoprawna  i tym samym baza danych nie może być wybrana.';
$l['mail_path'] = 'Ścieżka';
$l['mail_url'] = 'URL';
$l['mail_db'] = 'Bazy danych MySQL';
$l['mail_dbuser'] = 'Użytkownik MySQL DB';
$l['mail_dbhost'] = 'Host MySQL DB';
$l['mail_dbpass'] = 'Hasło MySQL DB';
$l['mail_time'] = 'Czas instalacji';
$l['mail_editdetail_time'] = 'Czas modyfikacji';
$l['mail_subject'] = 'Zmodyfikowane szczegóły instalacji z &soft-1;';
$l['mail_cron_command'] = 'Zadanie CRON';
$l['mail_datadir'] = 'Katalog danych';
$l['mail_wwwdir'] = 'Web directory';
$l['mail_wwwurl'] = 'URL Katalogu Web';

//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['ins_details'] = 'Szczegóły instalacji';
$l['info'] = 'Info';
$l['ins_softname'] = 'Oprogramowanie';
$l['ins_num'] = 'Numer instalacji';
$l['ins_ver'] = 'Wersja';
$l['ins_time'] = 'Czas instalacji';
$l['ins_path'] = 'Ścieżka';
$l['ins_url'] = 'URL';
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Nazwa bazy danych';
$l['ins_dbuser'] = 'Użytkownik bazy danych';
$l['ins_dbpass'] = 'Hasło bazy danych';
$l['ins_dbhost'] = 'Host bazy danych';
$l['ins_datadir'] = 'Katalog danych';
$l['ins_wwwdir'] = 'Web directory';
$l['ins_wwwurl'] = 'URL Katalogu Web';
$l['ins_cron_command'] = 'Komendy crona';
$l['details_edited'] = 'Pomyślnie edytowano szczegóły instalacji';
$l['version_edited'] = 'Wersja została zaktualizowana w naszej ewidencji.';
$l['return'] = 'Powrót do przegladu';

$l['edit_ins'] = 'Edytowanie szczegółów instalacji';
$l['edit_dir'] = 'Katalog';
$l['edit_datadir'] = 'Katalog danych';
$l['edit_db'] = 'Nazwa bazy danych';
$l['edit_dbuser'] = 'Użytkownik bazy danych';
$l['edit_dbpass'] = 'Hasło bazy danych';
$l['edit_dbhost'] = 'Host bazy danych';
$l['edit_url'] = 'URL';
$l['editins'] = 'Zapisz szczegóły instalacji';
$l['mail_editdetail_ins'] = 'Szczegóły instalacji &soft-1; zostały zmodyfikowane. Zmodyfikowane szczegóły instalacji są następujące:';
$l['edit_wwwdir'] = 'Web directory';
$l['edit_wwwurl'] = 'URL Katalogu Web';
$l['disable_notify_update'] = 'Wyłącz powiadomienia o aktualizacji';
$l['exp_disable_notify_update'] = 'Jeśli zostawisz zaznaczone, nie otrzymasz żadnych wiadomość e-mail z powiadomieniem o dostępnych aktualizacjach dla tej instalacji.';
$l['alreadyupdated'] = 'Hmm... wygląda na to, że rzeczywisty wersja instalacyjna jest <b>&soft-1;</b> i nie <b>&soft-2;</b>. < br / > kliknij tutaj, aby uaktualnić rekordy '. APP.'.';
$l['edit_acc_detail'] = 'Edytowanie szczegółów konta admin';
$l['eu_auto_upgrade'] = 'Automatyczne uaktualnienie';
$l['exp_eu_auto_upgrade'] = 'Jeśli zaznaczone, ta instalacja zostanie automatycznie uaktualniona do najnowszej wersji kiedy będzie ona dostępna.';
$l['auto_upgrade_plugins'] = 'Automatyczna aktualizacja &soft-1; Pluginy';
$l['exp_auto_upgrade_plugins'] = 'Jeśli zaznaczone, wszystkie aktywne &soft-1; wtyczki zainstalowane dla tej instalacji będą automatycznie aktualizowane do najnowszych wersji w momencie kiedy skrypt instalacji też będzie aktualizowany.';
$l['auto_upgrade_themes'] = 'Automatyczna aktualizacja &soft-1; Motywy';
$l['exp_auto_upgrade_themes'] = 'Jeśli zaznaczone, aktywny &soft-1; motyw tej instalacji będzie automatycznie aktualizowany do najnowszej wersji w momencie aktualizacji skryptu instalacji.';
$l['auto_backup'] = 'Automatyczne backupy';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Rotacja backupu';
$l['exp_auto_backup_rotation'] = 'Jeśli osiągnięty zostanie limit rotacji backupu '. APP.' będzie usuwany najstarszy backup tej instalacji i na jego miejsce będzie utworzony nowy. Backupy zużywają Twoją przestrzeń więc wybierz rotację backupu zgodnie z aktualnym zużyciem';
$l['no_backup'] = 'Brak backupu';
$l['daily'] = 'Raz dziennie';
$l['weekly'] = 'Raz w tygodniu';
$l['monthly'] = 'Raz w miesiącu';
$l['unlimited'] = 'Nieograniczony';
$l['auto_backup_not_allowed'] = 'Wybrana częstotliwość automatycznego backupu jest nieprawidłowa';

$l['no_edit'] = 'Plik EDIT.XML nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_functions'] = 'Plik EDIT FUNCTIONS nie został odnaleziony! Prosimy wysłać zgłoszenie do administratora serwera.';
$l['no_field'] = 'Pole <b>&soft-1;</b> jest wymagana i musi być wypełnione.';
$l['err_auto_backup_limit'] = 'Rotacja automatycznego backupu nie może być większa niż <b>&soft-1;</b>';
$l['select_files'] = 'Wybierz pliki/katalogi';
$l['select_files_exp'] = 'Wybierz dodatkowe pliki/katalogi powiązane z tą instalacją. < br / > Ta lista będzie używana w przypadku takich operacji jak Klonowanie lub Backup tej instalacji';
$l['invalid_files_in_post_list'] = 'Były wybrane pewne nieprawidłowe pliki/katalogi';
$l['select_files_list'] = 'Z poniższej listy wybierz dodatkowe pliki/katalogi';

$l['select_files_backup'] = 'Użyj wybranych plików/katalogów dla backupu';
$l['select_files_backup_exp'] = 'Tylko pliki/katalogi powiązane z tą instalacją będą należeć do backupu. < br / > Domyślnie backup obejmuje wszystkie pliki/katalogi znajdujące się pod tą ścieżką';
$l['no'] = 'Nie';
$l['yes'] = 'Tak';
$l['check_all_edit'] = 'Sprawdź wszystko';

?>