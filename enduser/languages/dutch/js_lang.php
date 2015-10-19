<?php

//////////////////////////////////////////////////////////////
//===========================================================
// js_lang.php
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

$l['no_info_file'] = 'Het bestand info.xml is niet gevonden! Neem contact op met de server administrator.';//The INFO.XML file could not be found! Please report this to the Server Admin.
$l['incompatible'] = 'Dit script vereist een nieuwere versie van '.APP.'! Neem contact op met de server administrator.';//The software requires a higher version of Softaculous! Please report this to the Server Admin.
$l['no_install'] = 'Het bestand install.xml is niet gevonden! Neem contact op met de server administrator.';//The INSTALL.XML file could not be found! Please report this to the Server Admin.
$l['no_functions'] = 'Het bestand install functions is niet gevonden! Neem contact op met de server administrator.';//The INSTALL FUNCTIONS file could not be found! Please report this to the Server Admin.
$l['no_softdomain'] = 'U heeft geen domein gelecteerd waarop u het script wilt installeren.';//You did not choose the domain to install the software.
$l['wrong_softdomain'] = 'Het path naar het domein dat u heeft geselecteerd kon niet worden gevonden.';//The path of the domain you selected could not be found.
$l['no_space'] = 'U beschikt niet over voldoende schijfruimte om dit script te installeren!';//You do not have sufficient space to install this software!
$l['no_field'] = 'U bent vergeten het veld <b> &soft-1;</b> in te vullen.';//The field <b>&soft-1;</b> is complusory and must be filled.
$l['no_package'] = 'De installatie bestanden konden niet worden gevonden!';//The installation package could not be found!
$l['no_decompress'] = 'Er zijn fouten opgetreden tijdens het uitpakken van de bestanden.';//There were some errors in decompressing the package files.
$l['mail_new_ins'] = 'De installatie van &soft-1; is voltooid. Hieronder kunt u de details van de installatie zien:';//A new installation of &soft-1; has been made. Following are the details of the installation : 
$l['mail_path'] = 'Path';//Path
$l['mail_url'] = 'URL';//URL
$l['mail_time'] = 'Time of Installation';
$l['mail_subject'] = 'New Installation of &soft-1;';
$l['some_files_exist'] = 'De installatie kon niet worden voltooid omdat de volgende bestanden reeds in de folder aanwezig zijn : ';
$l['delete_files'] = 'Verwijder deze bestanden handmatig of kies een andere foldernaam.';
$l['overwrite_exist'] = '<b>of</b> <br />check de box om alle bestanden in deze folder te overschrijven.';
$l['checking_data'] = 'Bestanden controleren';
$l['unzipping_files'] = 'Bezig met het kopiëren  van bestanden';
$l['unzipping_datadir'] = 'Bestanden worden uitgepakt';
$l['prop_db'] = 'Database wordt aangemaakt';
$l['finishing_process'] = 'Bezig met het voltooien van de installatie';
$l['wait_note'] = '<b>Let op:</b> Deze actie kan 3-4 minuten duren. Sluit deze pagina niet totdat de proces bar 100% aangeeft!';
$l['softdirectory_invalid'] = 'U heeft een ongeldige folder opgegeven';
$l['no_sel_inst'] = 'U heeft geen script geselecteerd';
$l['del_insid'] = 'Weet u zeker dat u de geselecteerde scripts wilt verwijderen ?';
$l['ins_emailto'] = 'E-mail installatie details naar';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installeer';//Install
$l['overview'] = 'Overzicht';//Overview
$l['features'] = 'Mogelijkheden';//Features
$l['demo'] = 'Demo\'s';//Demo
$l['ratings'] = 'Beoordelingen';//Ratings
$l['import'] = 'Importeer';
$l['software_ver'] = 'Versie';//Version
$l['space_req'] = 'Benodigde opslagruimte';//Space Required
$l['available_space'] = 'Beschikbare opslagruimte';//Available Space
$l['req_space'] = 'Vereiste opslagruimte';//Required Space
$l['mb'] = 'MB';//MB
$l['software_support'] = 'Script ondersteuning';//Software Support
$l['support_link'] = 'Bezoek de script support website';//Visit Support Site
$l['support_note'] = 'Opmerking: Softaculous biedt geen ondersteuning voor de diverse scripts.';//Note: Softaculous does not provide support for any software.
$l['setup'] = 'Script setup';//Software Setup
$l['choose_domain'] = 'Kies domein';//Choose Domain
$l['choose_domain_exp'] = 'Kies het domein waar het script geïnstalleerd moet worden.';//Please choose the domain to install the software.
$l['in_directory'] = 'Folder';//In Directory
$l['in_directory_exp'] = 'De folder is relatief ten opzichte van het domein en <b> mag geen bestaande folder zijn</b>! <br />Indien u bijvoorbeeld een script wilt laten zien via http://domeinnaam.nl/folder/ vul dan  <b> folder </b> in. <br />Indien u het script wilt laten zien via http://domeinnaam.nl/ laat dit veld dan leeg.';//The directory is relative to your domain and <b>should not exist</b>. e.g. To install at http://mydomain/dir/ just type <b>dir</b>. To install only in http://mydomain/ leave this empty.
$l['softsubmit'] = 'Installeer';//Install
$l['congrats'] = 'Het script is voor u geïnstalleerd ';//Congratulations, the software was installed successfully
$l['succesful'] = 'met succes geïnstalleerd op';//has been successfully installed at
$l['enjoy'] = 'We hopen dat u de tevreden bent over de installatie procedure.';//We hope the installation process was easy.
$l['install_notes'] = 'Het onderstaande is belangrijk: ';
$l['please_note'] = '<b> Let op </b>: Softaculous is alleen een installer voor diverse scripts. Bezoek de webiste van de fabrikant van het script indien u ondersteuning nodig heeft voor een script!';//<b>NOTE</b>: Softaculous is just an Auto Installer and does not provide any support for the software. Please visit the Softwares Site for any kind of support!
$l['regards'] = 'Groeten';//Regards
$l['softinstaller'] = 'Softaculous auto installer';//Softaculous Auto Installer
$l['return'] = 'Terug naar het overzicht';//Return to Overview
$l['current_ins'] = 'Huidige installaties';//Current Installations
$l['link'] = 'Link';//Link
$l['ins_time'] = 'Tijd installatie';//Installation Time
$l['version'] = 'Versie';//Version
$l['upd_to'] = 'Update naar versie';//Upgrade to Version
$l['remove'] = 'Verwijderen';//Remove
$l['no_info'] = 'Geen info';//No Info
$l['ratesoft'] = 'Beoordeel dit script';
$l['reviews'] = 'Reviews';
$l['reviewsoft'] = 'Beoordeling toevoegen';
$l['readreviews'] = 'Naar beoordelingen';
$l['reviews_exp'] = 'Bekijk de beoordelingen die geschreven zijn door andere gebruikers.<br />';
$l['ins_type'] = 'Installatie type';
$l['ins_type_exp'] = '<b>Origineel script</b> - Script zoals weergegeven op de demo site. <br /> <b>Alleen de library bestanden</b> - De javascript library files.';
$l['ori_pack'] = 'Origineel script';
$l['just_lib'] = 'Library files';
$l['overwrite_exist'] = '<b>of</b> <br />check de box om alle bestanden te overschrijven';
$l['overwrite'] = 'Bestanden overschrijven';
$l['choose_protocol'] = 'Kies protocol';
$l['choose_protocol_exp'] = 'Indien u beschikt over een SSL certificaat voor dit domein, kies dan het HTTPS protocol.';
$l['clone'] = 'Clone';
$l['options'] = 'Options';
$l['downloading'] = 'Bezig met downloaden van bestanden';
$l['installing'] = 'Bezig met installatie';
$l['go'] = 'Ga';
$l['rem_inst_id'] = 'Installatie verwijderen - ';
$l['inst_remvd'] = 'De geselecteerde installaties zijn verwijderd. Deze pagina zal opnieuw worden geopend!';
$l['release_date'] = 'Release datum';
$l['adv_option'] = 'Geavanceerde opties';
$l['disable_notify_update'] = 'Disable update notificatie';
$l['exp_disable_notify_update'] = 'Check de box om geen e-mails te ontvangen over updates van dit script.';
$l['prog_installing'] = 'Bezig met installeren '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installatie voltooid.';
$l['auto_backup'] = 'Automatische backups';
$l['exp_auto_backup'] = APP.' zal automatisch backups maken op de door u opgegeven tijdstippen';
$l['auto_backup_rotation'] = 'Backup rotatie';
$l['exp_auto_backup_rotation'] = 'Wanneer een backup rotatie is bereikt '.APP.' zal de oudste backup worden vervangen door een nieuwe backup. De backup bestanden maken gebruik van de opslag ruimte die beschikbaar is in uw hosting account.';
$l['no_backup'] = 'Geen backups activeren';
$l['daily'] = 'Elke dag';
$l['weekly'] = 'Een keer per week';
$l['monthly'] = 'Een keer per maand';
$l['unlimited'] = 'Geen limiet';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recente updates';
$l['act_clone'] = 'Recent gecloned';
$l['act_backup'] = 'Recente backups';
$l['act_install'] = 'Nieuwe installaties';
$l['act_edit'] = 'Recent gewijzigd';
$l['act_import'] = 'Recent geimporteerd';
$l['act_restore'] = 'Recently hersteld';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Laat uw vrienden weten dat u een nieuwe website heeft!';
$l['err_auto_backup_limit'] = 'Backups kunnen niet vaker gemaakt worden dan <b>&soft-1;</b>';
$l['select_domain'] = 'Selecteer domein';
$l['with_selected'] = 'Selecteer optie';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

?>