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

$l['no_ins'] = 'Yedeklenecek kurulum yok';
$l['wrong_ins_title'] = 'Kurulum id si yanlış';
$l['wrong_ins'] = 'Girdiğiniz id\'ye ait kurulum yok';
$l['backup_ftp_error'] = 'Could not create Backup Directory <b>&soft-1;</b>. Please create manually and try again.';
$l['err_backup'] = 'Could not create Backup.';
$l['no_space_backup'] = 'You do not have sufficient space to backup this installation!';
$l['err_notelength'] = 'Backup note must be less than 255 characters';

$l['cant_backup_dir'] = 'Yedeğinizin yükleneceği klasör yok.';
$l['could_not_read'] = 'Oops Softaculous could not read the following file/directory <b>&soft-1;</b> Please make it readable to continue using the backup utility.';
$l['cant_datadir_dir'] = 'Veri klasörü eklenirken hata oluştu.';
$l['cant_wwwdir'] = 'There were errors while adding the Web directory.';
$l['cant_backup_db'] = 'Sitenizin veri tabanı yedeğinize eklenirken sorun oluştu.';
$l['err_perm_file'] = 'There were errors while trying to make a file of permissions';
$l['err_dataperm_file'] = 'There were errors while trying to make a file of permissions of the data directory';
$l['err_wwwperm_file'] = 'There were errors while trying to make a file of permissions of the WEB directory';
$l['save_dir_perms'] = 'Could not save the file permissions';
$l['save_datadir_perms'] = 'Could not save the permissions of the data directory';
$l['save_www_perms'] = 'Could not save the permissions of the Web directory';
$l['cant_connect_mysql'] = 'Could not connect to database, please check the Username/Password of your database. If changed, please update the details in Softaculous installations using Edit Details.';


//Theme Strings
$l['<title>'] = ''.APP.' - Yedekleme';
$l['info'] = 'Bilgiler';
$l['ins_softname'] = 'Script';
$l['ins_num'] = 'Kurulum Numarası';
$l['ins_ver'] = 'Versiyon';
$l['ins_time'] = 'Kurulum Zamanı';
$l['ins_path'] = 'Yol';
$l['ins_wwwdir'] = 'Web Directory Path';
$l['ins_url'] = 'URL';
$l['ins_db'] = 'Veri Tabanı Adı';
$l['ins_dbuser'] = 'Veri Tabanı Kullanıcı Adı';
$l['ins_dbpass'] = 'Veri Tabanı Şifresi';
$l['ins_dbhost'] = 'Veri Tabanı Hostu';
$l['backup_ins'] = 'Sitemi Yedekle';
$l['backup_dir'] = 'Dosyaları Yedekleme';
$l['backup_dir_exp'] = 'Sitenizin dosyalarını yedeklemek istiyorsanız seçiniz.';
$l['backup_db'] = 'Veri Tabanı Yedekleme';
$l['backup_db_exp'] = 'Veri Tabanınızı yedeklemek istiyorsanız seçiniz.';
$l['backup_conf'] = 'Yedek alma işlemi sitenizin boyutuna göre zaman alabilir. Lütfen bu sayfayı işlem bitene kadar kapatmayınız.';
$l['backedup'] = 'Yedeğiniz başarıyla oluşturuldu. Yedeğinizi indirmek için <a href="'.$globals['index'].'act=backups">Yedekler</a> sayfanıza gidiniz.';
$l['backup_ins'] = 'Kurulumu Yedekle';
$l['backup_datadir'] = 'Yedekleme Dizini';
$l['backup_datadir_exp'] = 'Eğer seçilmişse veri dinizi kaydedilir.';
$l['ins_datadir'] = 'Veri Dizini';
$l['return'] = 'Genel Bakışa Geri Dön';
$l['ins_cron_command'] = 'Cron Command'; 
$l['backup_wwwdir'] = 'Backup Web Directory';
$l['backup_wwwdir_exp'] = 'If checked the Web directory will be saved.';
$l['checking_data'] = 'Checking the submitted data';
$l['backingup_db'] = 'Backing up the Database';
$l['backingup_dir'] = 'Backing up the Directory';
$l['backingup_datadir'] = 'Backing up the Data Directory';
$l['finishing_process'] = 'Finishing Backup';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. You can leave this page if you wish !';
$l['backingup'] = 'The backup is being created in the background. You will be notified by email once its completed. After the backup is completed, You can access it from the <a href="'.$globals['index'].'act=backups">Backups</a> page.';
$l['check_email'] = 'Please check your email for the status of the backup';
$l['prog_backingup'] = 'Backing Up '; // Dont remove the trailing space
$l['prog_backup_complete'] = 'Backup Completed.';
$l['backup_note'] = 'Backup Note';
$l['backup_note_exp'] = 'You can save a note for your reference';
$l['backup_operation'] = 'Select Backup Operation(s)';
$l['backups_expire'] = 'Your backups will be automatically purged after <b>&soft-1;</b> days of the backup creation.';
$l['err_max_backups'] = 'You have reached the maximum number of (<b>&soft-1;</b>) backups allowed. Please delete unwanted backups to be able to take a new backup.';
$l['backup_notes'] = 'Backup created by '.APP.' auto backup';

?>