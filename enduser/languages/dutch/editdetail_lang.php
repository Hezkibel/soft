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

$l['no_ins'] = 'Geen installatie opgegeven';//No installation was submitted
$l['wrong_ins_title'] = 'Foutief installatie ID';//Wrong Istallation ID
$l['wrong_ins'] = 'Het door u opgegeven installatie ID bestaat niet';//The installation ID you submitted does not exist
$l['cant_remove_dir'] = 'De door u opgegeven folder kan niet worden verwijderd omdat het de home directory is. Deselecteer de <b> verwijder folder </b> optie om door te gaan zonder het verwijderen van de folder.';//The Directory cannot be removed as it is the HOME Directory. Please uncheck the <b>Remove Directory</b> option to continue without removing the directory.
$l['no_dir'] = 'De opgegeven installatie directory bestaat niet';
$l['no_datadir'] = 'De opgegeven data directory bestaat niet';
$l['no_wwwdir'] = 'De opgegeven web directory bestaat niet';
$l['wrong_url'] = 'De URL en directory naam komen niet overeen';
$l['wrong_wwwurl'] = 'De web URL en web directory naam komen niet overeen';
$l['err_mysql_user'] = 'Er kan geen verbinding worden gemaakt met de MySQL server';
$l['err_mysql_db'] = 'Er kan geen verbinding worden gemaakt met de MySQL server';
$l['mail_path'] = 'Path';
$l['mail_url'] = 'URL';//URL
$l['mail_db'] = 'MySQL database';//MySQL Database
$l['mail_dbuser'] = 'MySQL datbase gebruiker';//MySQL DB User
$l['mail_dbhost'] = 'MySQL database hostnaam';//MySQL DB Host
$l['mail_dbpass'] = 'MySQL database wachtwoord';//MySQL DB Password
$l['mail_time'] = 'Tijdstip van installatie';//Time of Installation
$l['mail_editdetail_time'] = 'Time of Modification';
$l['mail_subject'] = 'De installatie van &soft-1; is verwijderd.';//Removed Installation of &soft-1;
$l['mail_cron_command'] = 'CRON job';
$l['mail_datadir'] = 'Data folder';
$l['mail_wwwdir'] = 'Web directory';
$l['mail_wwwurl'] = 'Web directory URL';



//Theme Strings
$l['<title>'] = APP.' - Edit Detail';
$l['ins_details'] = 'Installation Details';
$l['info'] = 'Info';
$l['ins_softname'] = 'Script';//Software
$l['ins_num'] = 'Installatie nummer';//Installation Number
$l['ins_ver'] = 'Versie';//Version
$l['ins_time'] = 'Tijdstip van installatie';//Installation Time
$l['ins_path'] = 'Path';//Path
$l['ins_url'] = 'URL';//URL
$l['ins_admin_url'] = 'Admin URL';
$l['ins_db'] = 'Database naam';
$l['ins_dbuser'] = 'Database gebruikersnaam';
$l['ins_dbpass'] = 'Database wachtwoord';
$l['ins_dbhost'] = 'Database hostnaam';
$l['ins_datadir'] = 'Data directory';
$l['ins_wwwdir'] = 'Web directory';
$l['ins_wwwurl'] = 'Web directory URL';
$l['ins_cron_command'] = 'Cron Command';
$l['details_edited'] = 'De installatie gegevens zijn succesvol geupdate';
$l['version_edited'] = 'The version has been updated in our records.';
$l['return'] = 'Terug naar het overzicht';

$l['edit_ins'] = 'Wijzig installatie gegevens';
$l['edit_dir'] = 'Directory';
$l['edit_datadir'] = 'Data directory';
$l['edit_db'] = 'Database naam';
$l['edit_dbuser'] = 'Database gebruikersnaam';
$l['edit_dbhost'] = 'Database Host';
$l['edit_dbpass'] = 'Database wachtwoord';
$l['edit_url'] = 'URL';
$l['editins'] = 'Wijzig installatie gegevens';
$l['mail_editdetail_ins'] = 'De gegevens van de installatie van het script &soft-1; zijn succesvol gewijzigd. Nieuwe gegevens: ';
$l['edit_wwwdir'] = 'Web directory';
$l['edit_wwwurl'] = 'Web directory URL';
$l['disable_notify_update'] = 'Update notificatie uitschakelen';
$l['exp_disable_notify_update'] = 'Via deze optie kunt u de e-mail notificatie over de beschikbaarheid van updates voor dit script uitschakelen.';
$l['alreadyupdated'] = 'De huidige versie van het script wordt niet goed weergegeven. De huidige versie is <b>&soft-1;</b> en niet <b>&soft-2;</b>. <br />Klik hier om de '.APP.' records te updaten.';
$l['edit_acc_detail'] = 'Wijzig admin account gegevens';
$l['eu_auto_upgrade'] = 'Automatisch updaten';
$l['exp_eu_auto_upgrade'] = 'Via deze optie kunt u aangeven dat dit script automatisch moet worden geupdate naar een nieuwere versie wanneer deze beschikbaar komt.';
$l['auto_upgrade_plugins'] = 'Automatisch updaten &soft-1; plugins';
$l['exp_auto_upgrade_plugins'] = 'Via deze optie kunt u aangeven dat alle actieve &soft-1; plugins die geinstalleerd zijn voor dit script automatisch geupdate moeten worden wanneer een nieuwe versie van het script beschikbaar is.';
$l['auto_upgrade_themes'] = 'Automatisch updaten &soft-1; templates';
$l['exp_auto_upgrade_themes'] = 'Via deze optie kunt u aangeven dat het actieve &soft-1; template dat dit script gebruikt automatisch geupdate moet worden wanneer een nieuwe versie van het script beschikbaar is.';
$l['auto_backup'] = 'Automatische backups';
$l['exp_auto_backup'] = APP.' kan automatisch backups maken van een script.';
$l['auto_backup_rotation'] = 'Backup rotatie';
$l['exp_auto_backup_rotation'] = 'Wanneer de backup limiet is bereikt zal '.APP.' de oudste backup verwijderen. Backups worden opgeslagen op uw hosting account en maken dus deel uit van de opslag ruimte die beschikbaar is in uw hosting account.';
$l['no_backup'] = 'Geen backups maken';
$l['daily'] = 'Een keer per dag';
$l['weekly'] = 'Een keer per week';
$l['monthly'] = 'Een keer per maand';
$l['unlimited'] = 'Geen limiet';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

$l['no_edit'] = 'Het EDIT.XML bestand kan niet gevonden worden. Neem contact op met de server admin.';
$l['no_functions'] = 'het EDIT FUNCTIONS bestand kan niet gevonden worden. Neem contact op met de server admin.';
$l['no_field'] = 'Het veld <b>&soft-1;</b> is een verplicht veld.';
$l['err_auto_backup_limit'] = 'De backup rotatie kan niet groter zijn dan <b>&soft-1;</b>';
$l['select_files'] = 'Select files/folders';
$l['select_files_exp'] = 'Please select the additonal files/folders associated with this installation. <br />This list will be used for operations like Clone or Backup of this installation';
$l['invalid_files_in_post_list'] = 'There were some invalid files/folders selected';
$l['select_files_list'] = 'Select additional files/folders from the following list';

$l['select_files_backup'] = 'Use above selected files/folders for Backup';
$l['select_files_backup_exp'] = 'If selected only the files/folders related to this installation will be backed up. <br />By default backup will include all the files/folders under this path';
$l['no'] = 'No';
$l['yes'] = 'Yes';
$l['check_all_edit'] = 'Check All';

?>