<?php

//////////////////////////////////////////////////////////////
//===========================================================
// services_lang.php
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

$l['no_hour'] = 'Por favor inserte la hora';
$l['no_minute'] = 'Por favor inserte los minutos';
$l['no_day'] = 'Por favor inserte el dia';
$l['no_month'] = 'Por favor inserte el mes';
$l['no_weekday'] = 'Por favor inserte le dia de la semana';
$l['no_cmd'] = 'Por favor, introduzca el comando';
$l['err_invalid_minute'] = 'El formato del campo Minutos no es correcto.';
$l['err_invalid_hour'] = 'El formato del campo Horas no es correcto.';
$l['err_invalid_day'] = 'El formato del campo Dias no es correcto.';
$l['err_invalid_month'] = 'El formato del campo Mes no es correcto.';
$l['err_invalid_weekday'] = 'El formato del campo Dias de la Semana no es correcto.';
$l['err_del_msg'] = 'Ocurrio un error mientras se eliminaba el registro';
$l['err_add_msg'] = 'Ocurrio un error mientras se añadia el registro';
$l['err_edit_msg'] = 'Ocurrio un error mientras se actualizaba el registro';
$l['err_norecord'] = 'No Record found';

//Theme Strings
$l['<title>'] = APP . ' - Tarea Cron ';
$l['lbl_head'] = 'Tarea Job';
$l['minute'] = 'Minutos';
$l['mtype'] = '[0-59]';
$l['hour'] = 'Horas';
$l['htype'] = '[0-23]';
$l['day'] = 'Dias';
$l['dtype'] = '[1-31]';
$l['month'] = 'Mes';
$l['motype'] = '[1-12]'; 
$l['weekday'] = 'Dias de la Semana';
$l['wtype'] = '[0-7]';
$l['cmd'] = 'Comando';
$l['submit_button'] = 'Añadir Tarea Cron';
$l['create'] = 'La tarea Cron se ha añadido de manera satisfactoria';
$l['option'] = 'Opciones';
$l['cron_head'] = 'Cron Job for user';
$l['delete'] = 'La tarea de Cron se ha eliminado satisfactoriamente';
$l['record_del_conf'] = 'Esta realmente seguro de querer eliminar este registro ?';
$l['edit'] = 'La tarea de Cron se ha actualizado satisfactoriamente';
$l['note'] = '<strong>Nota:</strong> Puede aprender mas acerca de las tareas de Cron <a href="http://www.manpagez.com/man/5/crontab/" target="_blank">aqui.</a>';

?>