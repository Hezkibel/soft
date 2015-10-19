<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cronjob_lang.php
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

$l['no_hour'] = 'Bitte geben Sie Hour';
$l['no_minute'] = 'Bitte geben Minute';
$l['no_day'] = 'Bitte Tag';
$l['no_month'] = 'Bitte Monat';
$l['no_weekday'] = 'Bitte geben Sie Wochentag';
$l['no_cmd'] = 'Bitte geben Sie Befehl';
$l['err_invalid_minute'] = 'Feld Minute nicht richtig formatiert.';
$l['err_invalid_hour'] = 'Stunden- Bereich nicht richtig formatiert.';
$l['err_invalid_day'] = 'Tag -Feld nicht korrekt formatiert.';
$l['err_invalid_month'] = 'Feld Monat nicht korrekt formatiert.';
$l['err_invalid_weekday'] = 'Feld Wochentag nicht korrekt formatiert.';
$l['err_del_msg'] = 'Einige Fehler beim Löschen des Datensatzes';
$l['err_add_msg'] = 'Einige Fehler beim Hinzufügen der Record';
$l['err_edit_msg'] = 'Einige Fehler beim Aktualisieren des Datensatzes';
$l['err_norecord'] = 'No Record found';

//Theme Strings
$l['<title>'] = APP . ' - Cron Job';
$l['lbl_head'] = 'cron Job';
$l['minute'] = 'Minute';
$l['mtype'] = '[ 0-59 ]';
$l['hour'] = 'Stunde';
$l['htype'] = '[ 0-23 ]';
$l['day'] = 'Tag';
$l['dtype'] = '[1-31]';
$l['month'] = 'Monat';
$l['motype'] = '[1-12]'; 
$l['weekday'] = 'Wochentag';
$l['wtype'] = '[0-7]';
$l['cmd'] = 'Befehl';
$l['submit_button'] = 'Fügen Sie Cron Job';
$l['create'] = 'Cron-Job hinzugefügt successully';
$l['option'] = 'Option';
$l['cron_head'] = 'Cron Job for user';
$l['delete'] = 'Cron-Job erfolgreich gelöscht';
$l['record_del_conf'] = 'Sind Sie sicher, dass Sie diesen Datensatz wirklich löschen ?';
$l['edit'] = 'Cron-Job erfolgreich aktualisiert';
$l['note'] = '<strong>Hinweis:</strong> Sie können mehr über Cron Job<a href="http://www.manpagez.com/man/5/crontab/" target="_blank"> hier lernen</a>';

?>