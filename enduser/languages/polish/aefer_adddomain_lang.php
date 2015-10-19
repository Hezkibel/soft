<?php

//////////////////////////////////////////////////////////////
//===========================================================
// adddomain_lang.php
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

$l['no_domain'] = 'Nazwa domena nie została określona';
$l['alreay_exists'] = 'Dodana domena jest już na Twoim koncie.';
$l['no_ftp_user'] = 'Nie został określony żaden użytkownik FTP';
$l['no_ftp_pass'] = 'Nie zostało określone hasło do FTP';
$l['no_ftp_path'] = 'Nie została określona ŚCIEŻKA FTP';
$l['no_backup_path'] = 'Nie została określona ŚCIEŻKA backupu';
$l['no_data_dir'] = 'Nie został określony katalog danych';
$l['wrong_ftp_path'] = 'Dodana ścieżka FTP jest niepoprawna i nie wskazuje ona na podaną domenę.';
$l['ftp_error-1'] = 'Nie można rozwiązać nazwy domenowej';
$l['ftp_error-2'] = 'Nie można zalogować się na podane dane do FTP';
$l['ftp_error-3'] = 'Określona ścieżka FTP nie istnieje';
$l['no_port'] = 'Nie został określony port';
$l['no_pub_allowed'] = 'Klucz publiczny nie jest wymagane podczas uwierzytelniania przy użyciu hasła';
$l['no_public_key'] = 'Stwierdzono brak ścieżki do klucza publicznego';
$l['no_private_key'] = 'Stwierdzono brak ścieżki do klucza prywatnego';
$l['err_sftp_only'] = 'Tylko SFTP pozwala na uwierzytelnianie za pomocą klawiszy';
$l['no_pub_pri'] = 'Nie znaleziono publicznego lub prywatnego klucza';
$l['no_protocol'] = 'Nieprawidłowy protokół';
$l['not_allowed'] = 'You are not allowed to add a domain';

//Theme Strings
$l['<title>'] = 'Dodaj domenę';
$l['add_domain'] = 'Dodaj domenę';
$l['domain'] = 'Nazwa domeny';
$l['domain_exp'] = 'Wprowadź prawidłową nazwę domeny nazwa (bez http://) np. mojadomena.com';
$l['ftp_user'] = 'Użytkownik FTP';
$l['ftp_user_exp'] = 'Nazwa użytkownika konta FTP';
$l['ftp_pass'] = 'Hasło FTP';
$l['ftp_pass_exp'] = 'Hasła do konta FTP';
$l['ftp_path'] = 'Ścieżka FTP';
$l['ftp_path_exp'] = 'Ścieżka względna do lokalizacji webowej użytkownika np.: /public_html';
$l['backup_path'] = 'Ścieżka backupu';
$l['backup_path_exp'] = 'Ścieżka względna od katalogu domowego użytkownika. np. /backups';
$l['data_dir'] = 'Katalog danych';
$l['data_dir_exp'] = 'Pełna ścieżka do katalogu danych np." /home/USER/datadir <br/> Niektóre skrypty jak Elgg, Moodle, itp. potrzebują dostępu do katalogu, który nie jest udostępniany w sieci. <br/> Będzie on służyć do tego celu.';
$l['ins_email_exp'] = 'Wyślij wiadomość e-mail zawierającą szczegóły ustawień po zainstalowaniu nowego oprogramowania';
$l['submit_add'] = 'Testuj i zapisz domenę';
$l['settings_saved'] = 'Twoja domena została pomyślnie zapisana';
$l['show_all_dom'] = 'Pokaż wszystkie domeny';
$l['port'] = 'Port';
$l['port_exp'] = 'Wpisz port do połączenia';
$l['protocol'] = 'Protokół';
$l['protocol_exp'] = 'Wybierz protokół za pomocą, którego będzie się komunikował Softaculous';
$l['auth_password'] = 'Uwierzytelnianie za pomocą hasła lub klucza publicznego';
$l['auth_password_exp'] = 'Zaznacz pole aby uwierzytelnianie odbywało się przy użyciu hasła';
$l['public_key'] = 'Klucz publiczny';
$l['public_key_exp'] = 'Ścieżka do klucza publicznego';
$l['private_key'] = 'Klucz prywatny';
$l['private_key_exp'] = 'Ścieżka do klucza prywatnego';
$l['passphrase'] = 'Hasło';
$l['passphrase_exp'] = 'Hasło dla zaszyfrowanego klucza prywatnego (opcjonalnie)';
$l['sftp_path'] = 'Web directory';
$l['sftp_path_exp'] = 'Ścieżka bezwzględna do katalogu sieciowego np. /home/USERNAME/public_html';
$l['sbackup_path_exp'] = 'Ścieżka bezwzględna do katalogu backupu np.: /home/USERNAME/backups';
$l['server_host'] = 'Host serwera (opcjonalnie)';
$l['server_host_exp'] = '<b>Jeśli</b> Twoja nazwa domeny i host nie są takie same, wprowadź host serwera np.: ftp.moja-domena.com';

?>