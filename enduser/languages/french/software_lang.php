<?php

//////////////////////////////////////////////////////////////
//===========================================================
// software_lang.php
//===========================================================
// SOFTACULOUS FRENCH PACK
// Version 4
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
// Date:       25th Augustus 2009
// Time:       17:00 hrs
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

$l['no_info_file'] = 'Le fichier INFO.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['incompatible'] = 'Le logiciel requiert une version supérieure de '.APP.'! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_install'] = 'Le fichier INSTALL.XML n\'a pas pu être trouvé! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_functions'] = 'Le fichier d\'installation des fonctions n\'a pas pu être trouvé ! Veuillez le signaler à l\'administrateur du serveur.';
$l['no_remove_functions'] = 'The REMOVE FUNCTIONS file could not be found! Please report this to the server administrator.';
$l['no_softdomain'] = 'Vous n\'avez pas choisi de domaine pour installer le logiciel.';
$l['wrong_softdomain'] = 'Le chemin du domaine que vous avez sélectionné n\'a pas pu être trouvé.';
$l['softdirectory_exists'] = 'Le répertoire que vous avez indiqué existe déjà! Veuillez entrer un autre nom de répertoire.';
$l['no_space'] = 'Vous ne disposez pas de suffisamment d\'espace pour installer ce logiciel !';
$l['no_softdb'] = 'La base de données n\'a pas été envoyée.';
$l['database_exists'] = 'La base de données existe déjà';
$l['databaseuser_exists'] = 'L\'utilisateur de base de données existe déjà. Veuillez entrer un nom d\'utilisateur différent';
$l['db_name_long'] = 'Le nom de la base de données ne peut pas être supérieure à 7 lettres';
$l['db_limit_crossed'] = 'Le nombre limite de base de données que vous pouvez créer a été franchi';
$l['no_field'] = 'Le champ <b> &soft-1;</b> est obligatoire et doit être rempli.';
$l['error_adddb'] = 'La base de données n\'a pas pu être créée';
$l['error_adduser'] = 'Il y eu une erreur dans l\'ajout de l\'utilisateur à la nouvelle base de données';
$l['no_package'] = 'Les fichiers d\'installation n\'ont pas pu être trouvés!';
$l['no_decompress'] = 'Il y a eu des erreurs durant la décompression des fichiers de l\'installation.';
$l['mail_new_ins'] = 'Une nouvelle installation de &soft-1; a été faite. Voici les détails de l\'installation :';
$l['mail_path'] = 'Chemin';
$l['mail_url'] = 'URL';
$l['mail_admin_url'] = 'Admin URL';
$l['mail_admin'] = 'Admin Username';
$l['mail_pass'] = 'Admin Pass';
$l['mail_db'] = 'Base de données MySQL';
$l['mail_dbuser'] = 'Utilisateur MySQL';
$l['mail_dbhost'] = 'Hôte MySQL';
$l['mail_dbpass'] = 'Mot de passe MySQL';
$l['mail_time'] = 'Temps d\'installation';
$l['mail_subject'] = 'Nouvelle installation de &soft-1;';
$l['no_cron_min'] = 'Aucune minute n\'a été spécifiée pour la tâche CRON';
$l['no_cron_hour'] = 'Aucune heure n\'a été spécifiée pour la tâche CRON';
$l['no_cron_day'] = 'Aucun jour n\'a été spécifiée pour la tâche CRON';
$l['no_cron_month'] = 'Aucun mois n\'a été spécifiée pour la tâche CRON';
$l['no_cron_weekday'] = 'Aucun jour de semaine n\'a été spécifiée pour la tâche CRON';
$l['wrong_cron_min'] = 'Minute CRON incorrecte. Cette valeure doit être comprise entre 0 et 59 ou <b>*</b>';
$l['wrong_cron_hour'] = 'Heure CRON incorrecte. Cette valeure doit être comprise entre 0 et 23 ou  <b>*</b>';
$l['wrong_cron_day'] = 'Jour CRON incorrect. Cette valeure doit être comprise entre 1 et 31 ou <b>*</b>';
$l['wrong_cron_month'] = 'Mois CRON incorrect. Cette valeure doit être comprise entre 1 et 12 ou <b>*</b>';
$l['wrong_cron_weekday'] = 'Jour de semaine CRON incorrect. Cette valeure doit être comprise entre 0 et 7 ou  <b>*</b>';
$l['mail_cron'] = 'Tâches CRON';
$l['no_datadir'] = 'Aucun répertoire de données n\'a été spécifié';
$l['datadir_exists'] = 'Le répertoire que vous avez indiqué existe déjà. Merci d\'en indiquer un autre.';
$l['no_decompress_data'] = 'Des erreurs se sont produites durant la décompression des données DATA.';
$l['mail_datadir'] = 'Répertoire des données';
$l['some_files_exist'] = 'Installation cannot proceed because the following files already exist in the target folder : ';
$l['delete_files'] = 'Please delete these files or choose another folder.';
$l['overwrite_exist'] = '<b>OR</b> <br />Select the checkbox to overwrite all files and continue';
$l['checking_data'] = 'Checking the submitted data';
$l['unzipping_files'] = 'Copying files and folders';
$l['unzipping_datadir'] = 'Unzipping data files';
$l['prop_db'] = 'Propagating the database';
$l['finishing_process'] = 'Finishing Installation';
$l['wait_note'] = '<b>NOTE:</b> This may take 3-4 minutes. Please do not leave this page until the progress bar reaches 100%';
$l['no_hostname'] = 'Please enter your Database Hostname';
$l['no_dbusername'] = 'Please enter your Database Username';
$l['no_dbuserpass'] = 'Please enter your Database Password';
$l['softdirectory_invalid'] = 'The directory you typed is invalid.';
$l['softdatadir_invalid'] = 'The data directory you typed is invalid.';
$l['err_domain'] = 'No Domain';
$l['err_domain_admin'] = 'This User does not have any Domain. Please contact Administrator.';
$l['err_pass_strength'] = 'Password strength must be greater than ';
$l['no_https'] = 'A trusted SSL Certificate was not found';
$l['err_dbprefix'] = 'Table Prefix is invalid. Valid values are a-z or A-Z or 0-9 or _';
$l['no_php_install'] = 'PHP is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=1">here</a>';
$l['no_mysql_install'] = 'MySQL is not installed. To install it, please click <a href="'.$globals['index'].'act=apps&app=16">here</a>';
$l['no_domain_verify'] = 'Could not access your domain. Please make sure your domain is pointing to this server and there is no .htaccess file restricing access to your domain';
$l['auto_backup_not_allowed'] = 'The auto backup frequency you chose is invalid';

//Theme Strings
$l['<title>'] = $globals['sn'].' - '.APP.' - ';
$l['install'] = 'Installation';
$l['overview'] = 'Présentation';
$l['features'] = 'Fonctions';
$l['demo'] = 'Demo';
$l['ratings'] = 'Notes';
$l['import'] = 'Import';
$l['software_ver'] = 'Version';
$l['space_req'] = 'Espace requis';
$l['available_space'] = 'Espace disponible';
$l['req_space'] = 'Espace requis';
$l['mb'] = 'MB';
$l['software_support'] = 'Support Logiciel';
$l['support_link'] = 'Visitez le site de support';
$l['support_note'] = 'Note: Softaculous ne fournit pas de support pour ces logiciel.';
$l['setup'] = 'Installation du Logiciel';
$l['choose_domain'] = 'Choisissez un Domaine';
$l['choose_domain_exp'] = 'Veuillez choisir le domaine où installer le logiciel.';
$l['in_directory'] = 'Dans le dossier';
$l['in_directory_exp'] = 'Le répertoire est relatif à votre domaine et <b>ne devrait pas exister</b>. Par exemple, Pour installer le script à l\'addresse http://mondomaine/dossier/ tapez simplement <b> dossier </b>. Pour l\'installer dans http://mondomaine/ laisser ce champ vide.';
$l['database_name'] = 'Nom de la base de donnée';
$l['database_name_exp'] = 'Indiquez le nom de la base de données qui sera créée pour l\'installation';
$l['softcopy_note'] = '<b> NOTE </b>: Ce logiciel nécessite une installation en utilisant son propre script d\'installation. Veuillez donc visiter la page web qui sera affichée une fois que les fichiers auront été copiés, pour achever le processus d\'installation.';
$l['softsubmit'] = 'Installation';
$l['congrats'] = 'Félicitations, le logiciel a été installé avec succès';
$l['succesful'] = 'a été installé avec succès à';
$l['admin_url'] = 'URL du panneau d\'administration';
$l['setup_continue'] = 'Toutefois, l\'installation sera complétée par le logiciel lui-même. Veuillez donc visiter la page web suivante';
$l['enjoy'] = 'Nous espérons que le processus d\'installation fût facile.';
$l['install_notes'] = 'Ce qui suit contient des notes importantes et nous vous recommandons de les lire avec attention.';
$l['please_note'] = '<b> NOTE </b>: Softaculous est juste une installation automatique et ne fournit pas de support pour le logiciel. Veuillez visitez le site du développeur de ce logiciel pour tout type de support!';
$l['regards'] = 'Observations';
$l['softinstaller'] = 'Installation automatique Softaculous';
$l['return'] = 'Retour à la vue d\'ensemble';
$l['current_ins'] = 'Installations actuelles';
$l['link'] = 'Lien';
$l['ins_time'] = 'Temps d\'installation';
$l['version'] = 'Version';
$l['upd_to'] = 'Mise à jour de la version';
$l['remove'] = 'Supprimer';
$l['no_info'] = 'Pas d\'infos°';
$l['randpass'] = 'Générer un mot de passe aléatoire';//Generate a Random Password
$l['ratesoft'] = 'Noter ce script';//Rate this Script
$l['reviews'] = 'Critiques';//Reviews
$l['reviewsoft'] = 'Écrire un commentaire';//Write a Review
$l['readreviews'] = 'Lisez d\'autres commentaires';//Read Reviews
$l['reviews_exp'] = 'Lire les commentaires écrits par d\'autres utilisateurs et';
$l['cron_job'] = 'Tâches CRON';
$l['cron_job_exp'] = 'Ce script nécessite une tâche CRON pour fonctionner correctement. Veuillez spécifier l\'heure d\'exécution des tâches CRON. ';
$l['cron_min'] = 'Min';
$l['cron_hour'] = 'Heure';
$l['cron_day'] = 'Jour';
$l['cron_month'] = 'Mois';
$l['cron_weekday'] = 'Jour de la semaine';
$l['datadir'] = 'Répertoire des données';
$l['datadir_exp'] = 'Ce script doit enregistrer des données dans un dossier qui n\'est pas accessible via le web. Il sera créé dans votre répertoire principal. Par exemple, si vous aviez indiqué <b>rep</b> le dossier /home/username/<b>rep</b> sera créé.';
$l['db_alpha_num'] = 'Only alpha numeric characters are allowed for the Database name.';
$l['overwrite'] = 'Overwrite Files';
$l['ins_emailto'] = 'Email installation details to';
$l['choose_protocol'] = 'Choose Protocol';
$l['choose_protocol_exp'] = 'If your site has SSL, then please choose the HTTPS protocol.';
$l['clone'] = 'Clone';
$l['backup'] = 'Backup';
$l['options'] = 'Options';
$l['admin'] = 'Admin';
$l['notify_ver'] = 'Notify '.$globals['sn'].' of a new Version';
$l['notifyversion'] = 'Thank you for informing about the new version. We will look into it as soon as possible';
$l['del_insid'] = 'Are you sure you wish to remove the selected installations ? The action will be irreversible. \nNo further confirmations will be asked.';
$l['rem_inst_id'] = 'Removing Installation - ';
$l['no_sel_inst'] = 'No installation(s) selected to remove.';
$l['inst_remvd'] = 'The selected installation(s) have been removed. The page will now be reloaded !';
$l['remove'] = 'Remove';
$l['go'] = 'Go';
$l['screenshots'] = 'Screenshots';
$l['downloading'] = 'Downloading Package';
$l['installing'] = 'Installing Script';
$l['editdetail'] = 'Edit Details';
$l['publish'] = 'Publish on the Web';
$l['hostname'] = 'Database Hostname';
$l['hostname_exp'] = 'The MySQL hostname (mainly <b>localhost</b>)';
$l['dbusername'] = 'Database Username';
$l['dbusername_exp'] = 'The MySQL username';
$l['dbuserpass'] = 'Database Password';
$l['dbuserpass_exp'] = 'The password of the MySQL user';
$l['database_name_exp_aefer'] = 'Type the name of the database to be used for the installation';
$l['sel_version'] = 'Select Version';
$l['choose_version_exp'] = 'Please select the version to install.';
$l['choose_version'] = 'Choose the version you want to install';
$l['select'] = 'Select';
$l['release_date'] = 'Release Date';
$l['adv_option'] = 'Advanced Options';
$l['disable_notify_update'] = 'Disable Update Notifications';
$l['exp_disable_notify_update'] = 'If checked you will not receive an email notification for updates available for this installation.';
$l['prog_installing'] = 'Installing '; // Dont remove trailing space
$l['prog_install_complete'] = 'Installation Completed.';
$l['eu_auto_upgrade'] = 'Auto Upgrade';
$l['exp_eu_auto_upgrade'] = 'If checked, this installation will be automatically upgraded to the latest version when a new version is available.';
$l['auto_upgrade_plugins'] = 'Auto Upgrade &soft-1; Plugins';
$l['exp_auto_upgrade_plugins'] = 'If checked, all the active &soft-1; plugins installed for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_themes'] = 'Auto Upgrade &soft-1; Themes';
$l['exp_auto_upgrade_themes'] = 'If checked, the active &soft-1; theme for this installation will be automatically upgraded to the latest version when your script installation is upgraded.';
$l['auto_upgrade_enabled'] = 'Auto Upgrade Enabled';
$l['bad'] = 'Bad';
$l['good'] = 'Good';
$l['strong'] = 'Strong';
$l['short'] = 'Short';
$l['strength_indicator'] = 'Strength Indicator';
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

$l['choose_theme'] = 'Select Theme';
$l['clear_theme'] = 'Clear selection';
$l['installing_theme'] = 'Installing theme';
$l['cant_download_theme'] = 'Could not download the theme files';
$l['no_theme_package'] = 'The theme installation package could not be found!';
$l['unzipping_theme_files'] = 'Copying themes files and folders';
$l['use_this_theme'] = 'Select this';
$l['err_auto_backup_limit'] = 'The auto backup rotation cannot be more than <b>&soft-1;</b>';
$l['select_domain'] = 'Select Domain';
$l['refresh'] = 'Refresh';
$l['purchase'] = 'Buy';
$l['your_purchased'] = 'Purchased ';//trailing space is required
$l['your_purchased_times'] = ' times(s)';
$l['err_theme_not_bought'] = 'You have not purchased the theme, so could not install it !';
$l['err_theme_reached_limit'] = 'Please buy this theme and try to install it again. You reached the limit of installing this theme.';
$l['payment_heading'] = 'Purchase Theme';
$l['payment_redirect'] = 'You will be redirected to pay ';//trailing space is required
$l['close'] = 'Close';
$l['free'] = 'Free';
$l['select'] = 'Select';
$l['theme_is_optional'] = '<b>Note</b>: This is optional. If not selected, the default theme will be installed';
$l['with_selected'] = 'With Selected';
$l['not_in_free'] = '<b>&soft-1;</b> cannot be installed in the Free version of '.APP.'!';
$l['notify_admin'] = 'Please notify your Server Admin to purchase the premium version of '.APP.'!';
$l['related_scripts'] = 'Related Scripts';

?>