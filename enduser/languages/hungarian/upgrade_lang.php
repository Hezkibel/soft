<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_upgrade'] = 'Az UPGRADE.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az UPGRADE FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_field'] = 'A következo mezot ki kell tölteni: <b>&soft-1;</b> ';
$l['no_package'] = 'A frissíto csomag nem találhatód!';
$l['no_decompress'] = 'Hibák történtek a telepíto-csomag kicsomagolásakor.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Updating the database';
$l['finishing_process'] = 'Finishing Upgradation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['cver_greater'] = 'The current version is greater than or equal to the version you are upgrading to. This is possible if you manually upgraded the installation. If this is not the case please check the following checkbox';
$l['force_upgrade'] = 'Forcefully Upgrade';
$l['backup_finish'] = 'Backup Finished';
$l['backup_fail_proceed'] = 'Some error occured during the Backup process. Proceed to upgradation ?';
$l['backing_up'] = 'Backing up the installation';
$l['no_space'] = 'You do not have sufficient space to upgrade this installation!';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['upgrade'] = 'Alkalmazás frissítése';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Útvonal';
$l['softcopy_note'] = '<b>MEGJEGYZÉS</b>: Ez az alkalmazás a frissítést a saját frissíto segédprogramjával végzi. A frissítés befejezéséhez kövesse a linket, amit a fájlok másolását követoen biztosítunk.';
$l['softsubmit'] = 'Frissítés';
$l['congrats'] = 'Gratulálunk, az alkalmazás sikeresen frissítve';
$l['succesful'] = 'sikeresen frissítésre került itt';
$l['admin_url'] = 'Adminisztratív URL';
$l['setup_continue'] = 'A frissítést magával az alkalmazással kell befejezni a következo címen';
$l['enjoy'] = 'Reméljük, hogy a frissítés egyszeru volt.';
$l['upgrade_notes'] = 'Fontos információk. Kérjük figyelmesen olvassa el ';
$l['please_note'] = '<b>Figyelem</b>: Softaculous csak egy alkalmazás-telepíto és nem szolgál semmilyen támogatással a telepítheto programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculous Alkalmazás-telepíto';
$l['return'] = 'Vissza az áttekintéshez';
$l['note_backup'] = 'Ajánlott, hogy készítsen <a href="'.$globals['index'].'act=backup&insid=&soft-1;">biztonsági mentést</a> a telepítésrol frissítés elott.';
$l['alreadyupdated'] = 'Hmm ... it looks like the actual version of the installation is <b>&soft-1;</b> and not <b>&soft-2;</b>. <br />Click here to update '.APP.' records.';
$l['no_update_required'] = 'It looks like you don\'t need to update your installation as it is already uptodate';
$l['auto_backup'] = 'Would you like to take a Backup before Upgrading ?';
$l['select_version'] = 'Select a version to upgrade to';
$l['upgrading'] = 'Upgrading...';
$l['setup_partial'] = 'You are one more step away from completing the upgrade process';
$l['finish_update'] = 'Please visit below link to complete the upgrade process.';
$l['finish_up_sucess'] = 'After completing the upgrade process, you can access the &soft-1; installation here';
$l['upgrading_to'] = 'You will be Upgrading to : ';
$l['version'] = 'Version ';
$l['create_backup'] = 'Create Backup';
$l['create_backup_exp'] = 'Create a Backup before upgrading';
$l['prog_upgrading'] = 'Upgrading ';// Dont remove the trailing space
$l['prog_upgrade_complete'] = 'Upgrade Completed.';

$l['upgrade_tweet_sub'] = 'Tell your friends';

$l['not_in_free'] = '<b>&soft-1;</b> cannot be upgraded in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';

?>