<?php

//////////////////////////////////////////////////////////////
//===========================================================
// cli_lang.php
//===========================================================
// SOFTACULOUS 
// Version : 4.1.7
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

$l['err_cannot_autoupgrade'] = "De auto update functie wordt niet ondersteund voor dit control panel.\n";
$l['err_invalid_param'] = "Ongeldige instellingen &soft-1;\nMeer informatie hierover kunt u vinden via:\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "U heeft niet alle informatie opgegeven die nodig is voor deze actie\n";
$l['err_no_insid'] = "U heeft geen installatie ID opgegeven\n";
$l['err_no_username'] = "U heeft geen gebruikersnaam opgegeven\n";
$l['err_no_such_user'] = "Gebruiker niet gevonden\n";
$l['err_dont_provide_username'] = "Gebruikersnaam is niet verplicht\n";
$l['err_no_softdir'] = "Softdir voor gebruiker niet gevonden &soft-1;\n";
$l['err_no_installation'] = "Er is geen installatie gevonden met  ID : &soft-1;\n";
$l['err_cant_upgrade'] = "Deze installatie is reeds geupdate naar de laatste versie of deze installatie kan niet automatisch geupdate worden.\n";
$l['err_backup_fail'] = 'Het backup proces is niet succesvol verlopen. Het update proces zal niet uitgevoerd worden. Details :';
$l['err_upgrade_restore_failed'] = 'Het update proces is niet succesvol verlopen en de backup kon niet worden terug geplaatst. Details :';
$l['err_upgrade_restore_success'] = 'Het update proces is niet succesvol verlopen. De backup is succesvol terug geplaatst. Details :';
$l['err_upgrade'] = 'Het update proces is niet succesvol verlopen. Details :';
$l['err_upgrade_req'] = 'Het update proces is niet succesvol verlopen omdat dit script niet aan de niet aan de vereiste voorwaarden voldoet. Details :';
$l['err_could_not_posix'] = 'De gebruiker is niet gevonden. Het update proces wordt afgebroken...';
$l['err_cant_upgrade_for_this_server'] = "De externe URL kan niet geopend worden.\n Wellicht is allow_url_fopen() niet geactiveerd of kon CURL de URL niet openen. Het update proces is afgebroken.";
$l['err_auto_upgrade_req_fail'] = 'Het update proces is niet succesvol verlopen omdat dit script niet aan de niet aan de vereiste voorwaarden voldoet. Details :';
$l['help'] = "Welcome to Softaculous command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = "U heeft geen scriptnaam opgegeven.\n";
$l['err_no_url'] = "Geef een geldige URL op waar het script geinstalleerd moet worden bijvoorbeeld --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Het door u opgegeven script kan niet gevonden worden - &soft-1;\n";
$l['import_success'] = "Succesvol geimporteerd!\n";
$l['import_error'] = "De volgende fout is opgetreden : \n";
$l['err_no_path'] = "Geef een geldig path op bijvoorbeeld --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "De importeer utility is niet beschikbaar voor dit script\n";
$l['err_user_not_allowed'] = "De importeer utility is niet beschikbaar voor eindgebruikers\n";
$l['err_cant_load_docroots'] = "Het path naar de domein(en) kan niet gevonden worden\n";
$l['ins_available_for'] = " scripts beschikbaar voor de volgende directory :\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " scipt gevonden via het opgegeven path. Voer het vorige commando uit met de --r optie om het script te importeren.\n";
$l['imp_ins_exists'] = "Dit script is reeds geimporteerd voor - &soft-1; op &soft-2;\n";
$l['upgraded_successfully'] = "De update is succesvol verlopen \n";
$l['shellexec_disabled'] = 'shell_exec() is niet actief';
$l['list_scripts'] = "\nDe onderstaande scripts kunnen mogelijk niet goed werken op deze server omdat deze andere systeem vereisten hebben";
$l['req_pass'] = "Alle scripts kunnen werken met de huidige configuratie.";
$l['err_cannot_autobackup'] = "Auto backups kunnen niet gemaakt worden via dit control panel.\n";
$l['err_no_auto_backup'] = "Auto backups zijn niet geactiveerd door de aministrator.\n";
$l['err_update_record'] = 'Er is een fout opgetreden tijdens het updaten van de '.APP." records\n";
$l['suc_update_record'] = "De ".APP." records succesvol geupdate van &soft-1; naar &soft-2; voor &soft-3;\n";
$l['show_real_version'] = "Werkelijke versie : &soft-1; -- Versie volgens de ".APP." records : &soft-2; \n";
$l['no_outdated_ins'] = "Geen verouderde scripts gevonden.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update ".APP." records\n";
$l['only_au_ins_note'] = "Note : Only installations that can be auto upgraded will be listed here\n";

$l['soft_license'] = APP." Licentie";
$l['lic_type'] = "Type";
$l['num_users'] = "Antal gebruikers";
$l['licexpires'] = "Vervalt op";
$l['primary_ip'] = "Licentie IP";
$l['free'] = "Gratis";
$l['premium'] = "Premium";
$l['expired'] = "Vervallen";
$l['never'] = "Nooit";

// Remove installation
$l['no_panels'] = "Het verwijderen van script via de CLI is alleen mogelijk in cPanel en Webuzo.\n";
$l['no_input'] = "Geef een geldige input waarde op.\n";
$l['invalid_par'] = 'Ongeldige waarde ';
$l['no_scripts'] = 'Scripts werden niet geladen.';
$l['remove'] = 'Verwijderd';
$l['heading'] = "Script naam \t Script installatie ID \n";
$l['no_installation'] = "Geen geinstalleerde scripts gevonden.\n";
$l['err_remove'] = "Verwijderen van het script was niet succesvol.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
?>
