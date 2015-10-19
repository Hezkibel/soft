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

$l['err_cannot_autoupgrade'] = "Auto upgrade can not be performed for this control panel.\n";
$l['err_invalid_param'] = "Invalid parameter &soft-1;\nPlease read the documetation for more details :\nhttp://www.softaculous.com/docs/Upgrade_Script_from_CLI\n";
$l['err_no_input'] = "Please provide some inputs.\n";
$l['err_no_insid'] = "Installation Id is not provided.\n";
$l['err_no_username'] = "Username is not provided.\n";
$l['err_no_such_user'] = "No such user found.\n";
$l['err_dont_provide_username'] = "Username is not required.\n";
$l['err_no_softdir'] = "Softdir not found for user &soft-1;\n";
$l['err_no_installation'] = "No installation found for Installation ID : &soft-1;\n";
$l['err_cant_upgrade'] = "This installation is already at latest version OR This script can not be Auto Upgraded.\n";
$l['err_backup_fail'] = 'Backup was not successful so aborting the upgrade process. Following are the details :';
$l['err_upgrade_restore_failed'] = 'Failed to upgrade the installation AND also failed to restore from the backup created. Following are the details :';
$l['err_upgrade_restore_success'] = 'Failed to upgrade the installation BUT successfully restored from the backup created. Following are the details :';
$l['err_upgrade'] = 'Failed to upgrade the installation. Following are the details :';
$l['err_upgrade_req'] = 'This installation does not meet the Upgrade requirements. Hence it cannot be auto upgraded. Following are the details :';
$l['err_could_not_posix'] = 'Could not switch to user so aborting process...';
$l['err_cant_upgrade_for_this_server'] = "The pre upgrade checks FAILED as external URL(s) could not be accessed.\n This might be due to allow_url_fopen() disabled on your server or CURL failed to access the URL. Hence Auto upgrade can not be performed.";
$l['err_auto_upgrade_req_fail'] = 'This installation does not meet the Auto Upgrade requirements. Hence it cannot be auto upgraded. Following are the details :';
$l['help'] = "Welcome to Softaculous Command-line Interface.
Available Commands : \n\t
--install\t For Installing an application.
--upgrade\t For Upgrading an installed application.
--import\t For Importing an installed application in to Softaculous.\n
For Support Please Contact us at : support@softaculous.com
";
$l['err_no_script'] = "Script name is not provided.\n";
$l['err_no_url'] = "Please provide the URL where an installation has been made e.g. --url=DOMAIN.COM/testdir\n";
$l['err_no_such_script'] = "Oops! No such script found - &soft-1;\n";
$l['import_success'] = "Imported successfully!\n";
$l['import_error'] = "Following Error Occurred : \n";
$l['err_no_path'] = "Please provide the path. e.g. --path=/home/USER/public_html/test\n";
$l['err_no_import'] = "Import utility is not available for this script\n";
$l['err_user_not_allowed'] = "Import utility is not available for Enduser\n";
$l['err_cant_load_docroots'] = "Could not load path to the domain(s)\n";
$l['ins_available_for'] = " installation(s) availble for the following directory :\n";// Keep the space at the beginning
$l['ins_found_at_path'] = " installation found at specified path.\n Execute the previous command with --r to import it.\n";
$l['imp_ins_exists'] = "This installation is already Imported for - &soft-1; at &soft-2;\n";
$l['upgraded_successfully'] = "The upgrade was successful \n";
$l['shellexec_disabled'] = 'shell_exec() is disabled';
$l['list_scripts'] = "\nFollowing is the list of scripts which might not work on your server.\nBecause it does not meet the minimum requirements of the script(s)";
$l['req_pass'] = "All Scripts requirement check passed.";
$l['err_cannot_autobackup'] = "Auto backups can not be performed for this control panel.\n";
$l['err_no_auto_backup'] = "Auto backups has been disabled by admin.\n";
$l['err_update_record'] = 'An error occured while updating version in '.APP." records\n";
$l['suc_update_record'] = "Updated ".APP." records successfully from &soft-1; to &soft-2; for &soft-3;\n";
$l['show_real_version'] = "Real Version : &soft-1; -- Version as per ".APP." records : &soft-2; \n";
$l['no_outdated_ins'] = "No Outdated instllation(s) found.\n";
$l['edit_detail_options'] = "\n--show_outdated_version=1 For showing the outdated installation(s) of the specified user
--user=USER_NAME whose records you want to update
--sid=SCRIPT_ID Script ID of the script you want to update the records for
--update_records=1 This will update ".APP." records\n";
$l['only_au_ins_note'] = "Note : Only installations that can be auto upgraded will be listed here\n";

$l['soft_license'] = APP." License";
$l['lic_type'] = "Type";
$l['num_users'] = "Number of users";
$l['licexpires'] = "Expires";
$l['primary_ip'] = "License IP";
$l['free'] = "Free";
$l['premium'] = "Premium";
$l['expired'] = "Expired";
$l['never'] = "Never";

// Remove installation
$l['no_panels'] = "Removing scripts from CLI is possible only on cPanel or Webuzo.\n";
$l['no_input'] = "Please provide required input.\n";
$l['invalid_par'] = 'Invalid parameter ';
$l['no_scripts'] = 'Scripts were not loaded.';
$l['remove'] = 'Removed';
$l['heading'] = "Script Name \t Script Installation ID \n";
$l['no_installation'] = "No installations were found on your server.\n";
$l['err_remove'] = "Remove installation Failed.\n";
$l['note_by_automated_backup'] = 'Backup created by automated backups';
$l['note_by_automated_upgrade'] = 'Backup created by automated upgrade';
?>
