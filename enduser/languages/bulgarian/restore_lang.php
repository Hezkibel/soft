<?php

//////////////////////////////////////////////////////////////
//===========================================================
// restore_lang.php
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

$l['restoreerror'] = 'Има грешка при разархивирането на архивираните файлове';
$l['restoredatadir'] = 'Директория с данни не може да се възстанови';
$l['restorewww'] = 'Уеб директория не може да се възстанови';
$l['res_err_selectmy'] = 'Не може да бъде избрана базата данни, за да се възстанови';
$l['err_myconn'] = 'Не може да се свърже с базата данни';
$l['err_db_create'] = 'Error occured while creating Database';

//Theme Strings
$l['<title>'] = APP.' - Възстановяване';
$l['restorefile'] = 'Възстановяване от резервно копие';
$l['restore_dir'] = 'Възстановяване на директория';
$l['restore_dir_exp'] = 'Ако отбележите това ще бъде възстановена цялата папка';
$l['restore_datadir'] = 'Възстановяване на директория с данни';
$l['restore_datadir_exp'] = 'Ако отбележите това ще бъде възстановена цялата папка с данни';
$l['restore_db'] = 'Възстановяване на база данни';
$l['restore_db_exp'] = 'Ако отбележите това ще бъде възстановена цялата база данни';
$l['restore_ins'] = 'Възстановяване на инсталация';
$l['restore'] = 'Вашето резервно копие е възстановено успешно';
$l['confirm_restore'] = 'Сигурен ли сте, че искате да възстановите инсталацията?';
$l['return'] = 'Назад към преглед';
$l['restore_wwwdir'] = 'Възстановяване на уеб директория';
$l['restore_wwwdir_exp'] = 'Ако отбележите това уеб директория ще бъде възстановена';
$l['checking_data'] = 'Проверка на предоставените данни';
$l['res_db'] = 'Възстановяване на база данни';
$l['res_dir'] = 'Възстановяване на директория';
$l['res_datadir'] = 'Възстановяване на директория с данни';
$l['finishing_process'] = 'Архивирането възстановено';
$l['wait_note'] = '<b>ВНИМАНИЕ:</b> Това може да отнеме 3-4 минути. Моля не напускайте тази страница до докато прогресния бар достигне 100%';
$l['restoring'] = 'Your backup is being restored in background. You will be notified by email once its completed.';
$l['prog_restoring'] = 'Restoring '; // Dont remove the trailing space
$l['prog_restore_complete'] = 'Restore Completed.';
$l['no_restore_functions'] = 'The RESTORE FUNCTIONS file could not be found! Please report this to the server administrator.';
?>