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

$l['no_info_file'] = 'Az INFO.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['incompatible'] = 'A szoftver újabb '.APP.' verziót igényel! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_install'] = 'Az INSTALL.XML fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_functions'] = 'Az INSTALL FUNCTIONS fájl nem található! Kérjük tájékoztassa a szerver adminisztrátorát.';
$l['no_softdomain'] = 'Nem választott domain nevet a telepítéshez.';
$l['wrong_softdomain'] = 'A domain könyvtára nem található.';
$l['no_space'] = 'Nincs elegendő hely a telepítéshez!';
$l['no_field'] = 'A következő mezőt ki kell tölteni: <b>&soft-1;</b> ';
$l['no_package'] = 'A telepítő-csomag nem található!';
$l['no_decompress'] = 'Hibák történtek a telepítő-csomag kicsomagolásakor.';
$l['mail_new_ins'] = '&soft-1; új telepítése befejeződött. A telepítés részletei:';
$l['mail_path'] = 'Útvonal';
$l['mail_url'] = 'URL';
$l['mail_time'] = 'Telepítés időpontja';
$l['mail_subject'] = 'Új telepítés &soft-1;';
$l['some_files_exist'] = 'A telepítés nem tud folytatódni, mert a kiválasztott telepítési könyvtárban a következő fájlok vannak: ';
$l['delete_files'] = 'Kérjük törölje a fájlokat, vagy válasszon másik telepítési könyvtárat.';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['no_sel_inst'] = 'No selected installations';
$l['del_insid'] = 'Are you sure you want to delete selected installations ?';
$l['ins_emailto'] = 'Email installation details to';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Telepítés';
$l['overview'] = 'Áttekintés';
$l['features'] = 'Jellemzők';
$l['demo'] = 'Bemutató';
$l['ratings'] = 'Osztályzás';
$l['import'] = 'Import';
$l['software_ver'] = 'Verzió';
$l['space_req'] = 'Szükséges lemezterület';
$l['available_space'] = 'Rendelkezésre álló lemezterület';
$l['req_space'] = 'Szükséges lemezterület';
$l['mb'] = 'MB';
$l['software_support'] = 'Szoftver támogatás';
$l['support_link'] = 'Támogatási weboldal';
$l['support_note'] = 'Megjegyzés: Softaculous nem illetékes az alkalmazások támogatásáért.';
$l['setup'] = 'Telepítés';
$l['choose_domain'] = 'Válasszon domain nevet';
$l['choose_domain_exp'] = 'Válassza ki a domain nevet a telepítéshez.';
$l['in_directory'] = 'Könyvtár';
$l['in_directory_exp'] = 'A telepítési könyvtár relatív a választott domain név könyvtárához képest és <b>nem lehet létező könyvtár</b>.<br />Pl.: Ha úgy akarja elérni a telepített alkalmazást, hogy http://www.domainnevem.hu/xyz/, akkor a telepítési könyvtár az <b>xyz</b>.<br />Ha üresen hagyja, akkor a telepített szoftvert a http://www.domainnevem.hu/ alatt éri el.';
$l['softsubmit'] = 'Telepítés';
$l['congrats'] = 'Gratulálunk! A szoftver sikeresen telepítve.';
$l['succesful'] = 'sikeresen telepítve';
$l['enjoy'] = 'Reméljük, hogy a telepítési folyamat egyszerű volt.';
$l['install_notes'] = 'Fontos információk! Ajánlatos elolvasni ';
$l['please_note'] = '<b>Figyelem</b>: Softaculous csak egy alkalmazás-telepítő és nem szolgál semmilyen támogatással a telepíthető programokkal kapcsolatban. Segítséghez keresse fel az alkalmazás weboldalát!';
$l['regards'] = 'Üdvözlettel';
$l['softinstaller'] = 'Softaculous Alkalmazás-telepítő';
$l['return'] = 'Vissza az áttekintéshez';
$l['current_ins'] = 'Jelenlegi telepítések';
$l['link'] = 'Link';
$l['ins_time'] = 'Telepítés ideje';
$l['version'] = 'Verzió';
$l['upd_to'] = 'Verziófrissítés';
$l['remove'] = 'Eltávolítás';
$l['no_info'] = 'Nincs Infó';
$l['ratesoft'] = 'Értékelje';
$l['reviews'] = 'Vélemények';
$l['reviewsoft'] = 'Írja meg véleményét';
$l['readreviews'] = 'Olvassa el a véleményeket';
$l['reviews_exp'] = 'Olvassa el a többi felhasználó véleményét és';
$l['ins_type'] = 'Telepítés típusa';
$l['ins_type_exp'] = '<b>Eredeti csomag</b> - amit a script hivatalos oldaláról is letölthet.<br /> <b>Csak könyvtárak</b> - Csak a Javascript könyvtárak.';
$l['ori_pack'] = 'Eredeti csomag';
$l['just_lib'] = 'Csak a könyvtárak';
$l['overwrite_exist'] = '<b>VAGY</b><br />Jelölje be az összes fájl felülírásához és a folytatáshoz';
$l['overwrite'] = 'Fájlok felülírása';
$l['choose_protocol'] = 'Válasszon protokollt';
$l['choose_protocol_exp'] = 'Ha az oldala SSL-t használ, válassza a HTTPS protokollt.';
$l['clone'] = 'Clone';
$l['options'] = 'Options';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['go'] = 'Go';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';

$l['auto_backup'] = 'Automated backups';
$l['exp_auto_backup'] = APP.' will take automated backups via CRON as per the frequency you select';
$l['auto_backup_rotation'] = 'Backup Rotation';
$l['exp_auto_backup_rotation'] = 'If the backup rotation limit is reached '.APP.' will delete the oldest backup for this installation and create a new backup. The backups will utilize your space so choose the backup rotation as per the space available on your server';
$l['no_backup'] = 'Don\'t backup';
$l['daily'] = 'Once a day';
$l['weekly'] = 'Once a week';
$l['monthly'] = 'Once a month';
$l['unlimited'] = 'Unlimited';
$l['changelog'] = 'Changelog';
$l['act_upgrade'] = 'Recently Upgraded';
$l['act_clone'] = 'Recently Cloned';
$l['act_backup'] = 'Recently Backed up';
$l['act_install'] = 'Recently Installed';
$l['act_edit'] = 'Recently Edited';
$l['act_import'] = 'Recently Imported';
$l['act_restore'] = 'Recently Restored';
$l['ampps_download'] = 'You can develop <b>&soft-1;</b> on your <b>desktop</b> using our Free developer tool Softaculous AMPPS. Click <a href="http://www.ampps.com/download?give=latest" target="_blank"><b>here</b></a> to download <a href="http://www.ampps.com/download?give=latest" target="_blank"><img src="https://images.softaculous.com/ampps.gif" height="25" /></a>';

$l['install_tweet_sub'] = 'Tell your friends about your new site';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

?>