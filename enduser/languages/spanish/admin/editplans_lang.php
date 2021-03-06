<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editplans_lang.php
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

$l['no_planname'] = 'Por favor, escriba el nombre del Plan';
$l['invalidfilename'] = 'Por favor, escriba un nombre valido para el Plan. No estan permitidos los caracteres especiales.';
$l['no_cpplan'] = 'Por favor. elija un Panel de Control valido para el Plan';
$l['plan_exist'] = 'Ya existe un Plan con ese nombre';
$l['error_plans'] = 'Por favor elija un usuario o Panel de Control para el Plan';
$l['user_plan_exist'] = 'El usuario - <b>&soft-1;</b> - ya esta asignado a otro plan. Para sobrescribir por favor seleccione la opción de sobrescribir';
$l['reseller_plan_exist'] = 'El Revendedor - <b>&soft-1;</b> -ya esta asignado a otro Plan. Para sobrescribir por favor seleccione la opción de sobrescribir';
$l['error_cpplan'] = 'Por favor, seleccione un Panel de Control valido para el Plan';
$l['error_scriptselect'] = 'Por favor, seleccione un Script';
$l['error_disable'] = 'Por favor, seleccione esta opcion para <b>deshabilitar</b> '.APP.' los usuarios seleccionados.';
$l['error_userselect'] = 'Por favor seleccione al menos un usuario';
$l['error_resellerselect'] = 'Por favor, seleccione al menos un Revendedor';
$l['cpplan_plan_exist'] = 'El Panel de Control del Plan - <b>&soft-1;</b> - ya esta asignado a otro Plan. Para sobrescribir por favor seleccione la opción de sobrescribir';
$l['err_prefix'] = 'No se puede dar a \'reseller_\' este prefijo para su nombre de Plan.';

//Theme Strings
$l['<title>'] = 'Control de Acceso';
$l['title'] = 'Editar Panel de Control de Acceso a Planes';
$l['planhead'] = 'Configuracion de Control de Acceso';
$l['planname'] = 'Nombre de Plan';
$l['exp_plan'] = 'Control de Acceso al nombre del Plan';
$l['cplanname'] = 'Panel de Control del Plan';
$l['exp_cplan'] = 'Panel de Control del Plan';
$l['no_cpplans'] = 'Por favor seleccione un Panel de Control para el Plan';
$l['editplan'] = 'Salvar Plan';
$l['userselect'] = 'Usuario Asignado';
$l['resellerselect'] = 'Revendedor Asignado';
$l['exp_userselect'] = 'Seleccione los usuarios individuales que se ven afectados por este Grupo de Acceso.';
$l['exp_resellerselect'] = 'Seleccione los revendedores que se ven afectados por este Grupo de Acceso.';
$l['scriptselect'] = 'Script Asignado';
$l['exp_scriptselect'] = 'Seleccione los scripts para este plan en particular';
$l['done'] = 'Su plan ha sido guardado <a href="'.$globals['index'].'act=plans">en Planes Generales</a>';
$l['plan_save_fail'] = 'No se puede guardar los detalles del plan';
$l['cpanelplan'] = 'Asignacion del Panel de Control del Plan';
$l['cpplanselect'] = 'Seleccione el panel de control de los planes a los que se aplicará esta ACL. Todos los usuarios en virtud de ese plan será capaz de utilizar sólo las secuencias de comandos asignados aquí.';
$l['select_all'] = 'Seleccione todo: ';
$l['overwrite_settings'] = 'Sobreescribir Configuracion:';

?>