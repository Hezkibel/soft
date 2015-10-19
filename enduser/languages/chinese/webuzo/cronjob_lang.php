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

$l['no_hour'] = 'Hour field cannot be empty.';
$l['no_minute'] = 'Minute field cannot be empty.';
$l['no_day'] = 'Day field cannot be empty.';
$l['no_month'] = 'Month field cannot be empty.';
$l['no_weekday'] = 'Weekday field cannot be empty.';
$l['no_cmd'] = 'Please specify a command to execute.';
$l['err_invalid_minute'] = 'Minute field not formatted correctly.';
$l['err_invalid_hour'] = 'Hour field not formatted correctly.';
$l['err_invalid_day'] = 'Day field not formatted correctly.';
$l['err_invalid_month'] = 'Month field not formatted correctly.';
$l['err_invalid_weekday'] = 'Weekday field not formatted correctly.';
$l['err_del_msg'] = 'Some error occurred while deleting the record';
$l['err_add_msg'] = 'Some error occurred while adding the record';
$l['err_edit_msg'] = 'Some error occurred while updating the record';
$l['err_norecord'] = 'No record found';

//Theme Strings
$l['<title>'] = APP . ' - Cron Job';
$l['lbl_head'] = 'Cron Job';
$l['minute'] = 'Minute';
$l['mtype'] = '[0-59]';
$l['hour'] = 'Hour';
$l['htype'] = '[0-23]';
$l['day'] = 'Day';
$l['dtype'] = '[1-31]';
$l['month'] = 'Month';
$l['motype'] = '[1-12]'; 
$l['weekday'] = 'Weekday';
$l['wtype'] = '[0-6]';
$l['cmd'] = 'Command';
$l['submit_button'] = 'Add Cron Job';
$l['create'] = 'Cron Job added successully';
$l['option'] = 'Option';
$l['cron_head'] = 'Cron Job for user Soft';
$l['delete'] = 'Cron Job deleted successfully';
$l['record_del_conf'] = 'Are you sure you want to delete this record ?';
$l['edit'] = 'Cron Job updated successfully';
$l['note'] = '<strong>Note:</strong> You can learn more about Cron Job <a href="http://www.manpagez.com/man/5/crontab/" target="_blank">here</a>';

?>