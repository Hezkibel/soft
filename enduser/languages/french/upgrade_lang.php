<?php

//////////////////////////////////////////////////////////////
//===========================================================
// upgrade_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 3
// Inspired by the DESIRE to be the BEST OF ALL
// ----------------------------------------------------------
// Started by: Alons
// Date:       10th Jan 2009
// Time:       21:00 hrs
// Site:       http://www.softaculous.com/ (SOFTACULOUS)
// ----------------------------------------------------------
// Edited by:  Romain Fluttaz
// Date:       1 July 2009
// Time:       15:00 hrs
// Site:       http://botux.fr/
// ----------------------------------------------------------
// Edited by:  Michel LAURENT
// Date:       22nd Augustus 2009
// Time:       12:00 hrs
// Site:       http://www.equipc.net
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

$l['no_info_file'] = 'Le fichier INFO.XML ... n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel requiert une version supérieure de '.APP.' ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_upgrade'] = 'Le fichier UPGRADE.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier contenant les fonctions de mise à jour n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_field'] = 'Le champ <b> &soft-1;</b> est obligatoire et doit être rempli.';
$l['no_package'] = 'Le fichier de mises à niveau n\'a pas pu être trouvé!';
$l['no_decompress'] = 'Il y a eu quelques erreurs dans la décompression des fichiers de mise à jour.';
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
$l['upgrade'] = 'Mise à niveau du logiciel';
$l['softins_url'] = 'URL';
$l['softins_path'] = 'Chemin';
$l['softcopy_note'] = '<b> NOTE </b>: Ce logiciel nécessite une mise à jour en utilisant son propre script de mises à niveau. Veuillez donc visiter la page web qui sera affichée une fois que les fichiers auront été copiés pour terminer le processus de mise à niveau.';
$l['softsubmit'] = 'Mise à niveau';
$l['congrats'] = 'Félicitations, le logiciel a été mis à jour avec succès';
$l['succesful'] = 'a été mis à niveau à';
$l['admin_url'] = 'Admin URL';
$l['setup_continue'] = 'Toutefois, la mise à jour doit être complétée par le logiciel lui-même. Veuillez donc vous rendre sur la page suivante';
$l['enjoy'] = 'Nous espérons que le processus de mise à jour a été facile.';
$l['upgrade_notes'] = 'The following are some important notes. It is hightly recommended that you read them ';
$l['please_note'] = '<b> NOTE </b>: Softaculous est juste une installation automatique et ne fournit pas de support pour le logiciel. Veuillez visitez le site du logiciel pour tout type de support !';
$l['regards'] = 'Observations';
$l['softinstaller'] = 'Auto Installation Softaculous';
$l['return'] = 'Retour à la vue d\'ensemble';
$l['note_backup'] = 'Its recommended that you take a <a href="'.$globals['index'].'act=backup&insid=&soft-1;">backup</a> of the installation before upgrading.';
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