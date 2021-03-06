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

$l['no_planname'] = 'Bitte geben Sie den Namen des Plans an';
$l['invalidfilename'] = 'Bitte geben Sie einen gültigen Namen an. Sonderzeichen sind nicht erlaubt.';
$l['no_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan aus.';
$l['plan_exist'] = 'Es existiert bereits ein Plan mit diesem Namen';
$l['error_plans'] = 'Bitte wählen Sie mindestens einen Benutzer oder Control Panel Plan aus';
$l['user_plan_exist'] = 'Benutzer - <b>&soft-1;</b> - ist / sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['reseller_plan_exist'] = 'Reseller - <b>&soft-1;</b> - ist / sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['error_cpplan'] = 'Bitte wählen Sie einen gültigen Control Panel Plan aus';
$l['error_scriptselect'] = 'Bitte wählen Sie mindestens eine Anwendung aus';
$l['error_disable'] = 'Bitte markieren Sie die Checkbox, wenn Sie '.APP.' für die ausgewählten Benutzer <b>deaktivieren</b> wollen';
$l['error_userselect'] = 'Bitte wählen Sie mindestens einen Benutzer aus.';
$l['error_resellerselect'] = 'Bitte wählen Sie mindestens einen Reseller aus.';
$l['cpplan_plan_exist'] = 'Control Panel Pläne - <b>&soft-1;</b> - sind bereits in einem anderen Plan enthalten. Um diese Einstellung zu überschreiben, wählen Sie bitte die entsprechende Option aus.';
$l['err_prefix'] = '\'reseller_\' darf nicht als Präfix für Ihren Plan Namen gewählt werden.';

//Theme Strings
$l['<title>'] = APP.' - Zugangskontrolle';
$l['title'] = 'Zugangskontrollpläne bearbeiten';
$l['planhead'] = 'Einstellungen für Zugangskontrolle';
$l['planname'] = 'Plan Name';
$l['exp_plan'] = 'Zugangskontrollplan name';
$l['cplanname'] = 'Control Panel Pläne';
$l['exp_cplan'] = 'Control Panel Pläne';
$l['no_cpplans'] = 'Bitte wählen Sie einen Control Panel Plan';
$l['editplan'] = 'Plan speichern';
$l['userselect'] = 'Benutzer Auswahl';
$l['resellerselect'] = 'Reseller Auswahl';
$l['exp_userselect'] = 'Wählen Sie die Benutzer, die in dieser Gruppe enthalten sein sollen.';
$l['exp_resellerselect'] = 'Wählen Sie die Reseller, die in dieser Gruppe enthalten sein sollen.';
$l['scriptselect'] = 'Auswahl der Anwendungen';
$l['exp_scriptselect'] = 'Wählen Sie die Anwendungen für diesen Plan';
$l['done'] = 'Ihr Plan wurde gespeichert. Gehen Sie zur <a href="'.$globals['index'].'act=plans">Plan Übersicht</a> zurück';
$l['plan_save_fail'] = 'der Plan konnte nicht gespeichert werden';
$l['cpanelplan'] = 'Control Panel Plan Auswahl';
$l['cpplanselect'] = 'Wählen Sie den Control Panel Pläne auf die diese ACL zutreffen wird. Alle Benutzer in diesem Plan werden ausschließlich die in diesem Plan enthaltenen Anwendungen verwenden können.';
$l['select_all'] = 'alle auswählen: ';
$l['overwrite_settings'] = 'Einstellungen überschreiben:';

?>
