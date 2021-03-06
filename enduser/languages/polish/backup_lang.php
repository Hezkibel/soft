<?php

//////////////////////////////////////////////////////////////
//===========================================================
// backup_lang.php
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
$l['backup_ftp_error'] = 'Nie można utworzyć katalogu backup-u<b>&soft-1;</b>. Należy to zrobić ręcznie i spróbować ponownie.';
$l['err_backup'] = 'Nie można utworzyć backup-u.';
$l['no_space_backup'] = 'Nie masz wystarczającej ilości wolnej powierzchni do tworzenia backupów tej instalacji!';
$l['err_notelength'] = 'Notatka backupu musi mieć mniej niż 255 znaków';

$l['cant_backup_dir'] = 'Narzędzie backupu nie mogło wykonać kopii zapasowej plików.';
$l['could_not_read'] = 'Uups Softaculous nie może odczytać pliku/katalogu <b>&soft-1;</b> Prosimy dokonać zmian tak by plik/katalog były możliwe do odczytania przez narzędzie backupu.';
$l['cant_datadir_dir'] = 'Wystąpiły błędy podczas dodawania katalogu danych.';
$l['cant_wwwdir'] = 'Wystąpiły błędy podczas dodawania katalogu danych Web.';
$l['cant_backup_db'] = 'Wystąpiły błędy podczas dodawania bazy danych do backupu.';
$l['err_perm_file'] = 'Wystąpiły błędy podczas próby zmiany uprawnień pliku';
$l['err_dataperm_file'] = 'Wystąpiły błędy podczas próby zmiany uprawnień pliku w katalogu danych';
$l['err_wwwperm_file'] = 'Wystąpiły błędy podczas próby zmiany uprawnień pliku w katalogu WEB danych';
$l['save_dir_perms'] = 'Nie można zapisać pliku uprawnień';
$l['save_datadir_perms'] = 'Nie można zapisać uprawnień dla katalogu danych';
$l['save_www_perms'] = 'Nie można zapisać uprawnień dla katalogu danych Web';
$l['cant_connect_mysql'] = 'Nie można połączyć się z bazą danych, prosimy o sprawdzenie nazwy użytkownika i hasła. Jeśli uległy zmianie, prosimy o aktualizację tych danych w instalacji Softaculous przy użyciu opcji Edytuj szczegóły.';

//Theme Strings
$l['<title>'] = APP.' - Backup';
$l['info'] = 'Info';
$l['ins_softname'] = 'Oprogramowanie';
$l['ins_num'] = 'Numer instalacji';
$l['ins_ver'] = 'Wersja';
$l['ins_time'] = 'Czas instalacji';
$l['ins_path'] = 'Ścieżka';
$l['ins_wwwdir'] = 'Ścieżka katalogu Web';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Nazwa bazy danych';
$l['ins_dbuser'] = 'Użytkownik bazy danych';
$l['ins_dbpass'] = 'Hasło bazy danych';
$l['ins_dbhost'] = 'Host bazy danych';
$l['backup_ins'] = 'Backup instalacji';
$l['backup_dir'] = 'Katalog backupu';
$l['backup_dir_exp'] = 'Jeśli to zaznaczysz cały katalog będzie dodany do backupu';
$l['backup_db'] = 'Baza danych backupu';
$l['backup_db_exp'] = 'Jeśli będzie zaznaczone, baza danych także zostanie dodana do backupu';
$l['backup_conf'] = 'Wykonanie backupu może trochę potrwać w zależności od ilości danych. Prosimy nie zamykać strony ani przenosić się na inną.';
$l['backedup'] = 'Kopia zapasowa został pomyślnie wykonana. Można ją pobrać ze strony  <a href=\"'.$globals['index'].'act=backups\">Backup</a>.<br /> URL Twojej instalacji : <a href=\"&soft-1;\" target=\"_blank\">&soft-1;</a>';
$l['backup_ins'] = 'Backup instalacji';
$l['backup_datadir'] = 'Katalog danych backupu';
$l['backup_datadir_exp'] = 'Jeśli zaznaczysz, katalog danych będzie zapisany.';
$l['ins_datadir'] = 'Katalog danych';
$l['return'] = 'Powrót do przegladu';
$l['ins_cron_command'] = 'Komendy crona';
$l['backup_wwwdir'] = 'Katalog Web Backupu';
$l['backup_wwwdir_exp'] = 'Jeśli zaznaczysz, katalog danych Web będzie zapisany.';
$l['checking_data'] = 'Sprawdzenia zatwierdzonych danych';
$l['backingup_db'] = 'Tworzenie backupu bazy danych';
$l['backingup_dir'] = 'Tworzenie backupu bazy danych';
$l['backingup_datadir'] = 'Tworzenie backupu katalogu danych';
$l['finishing_process'] = 'Kończenie backupu';
$l['wait_note'] = '<b>Uwaga:</b> To może zająć 3-4 minuty. Jeśli chcesz, możesz opuścić tę stronę!';
$l['backingup'] = 'Backup jest wykonywany w tle. Zostaniesz powiadomiony drogą mailową o zakończeniu tej operacji. <br /> Po zakończeniu backupu możesz go pobrać ze strony <a href=\"'.$globals['index'].'act=backups\">Backup</a>.<br /> URL Twojej instalacji: <a href=\"&soft-1;\" target=\"_blank\">&soft-1;</a>';
$l['check_email'] = 'Proszę sprawdzić pocztę email w celu sprawdzenia statusu backupu';
$l['prog_backingup'] = 'Wykonywanie backupu'; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup zakończony.';
$l['backup_note'] = 'Informacje o backupie';
$l['backup_note_exp'] = 'Możesz zapisać notatkę';
$l['backup_operation'] = 'Wybierz operację(-e) backupu';
$l['backups_expire'] = 'Backup będzie automatycznie usuwany po <b>&soft-1;</b> dniu (-ach) od utworzenia.';
$l['err_max_backups'] = 'Osiągnąłeś maksymalną liczbę (<b>&soft-1;</b>) dozwolonych backupów. Proszę usunąć niechciane backupy aby można było stworzyć nowe.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';

?>