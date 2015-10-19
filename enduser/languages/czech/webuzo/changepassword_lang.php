<?php

//////////////////////////////////////////////////////////////
//===========================================================
// changepassword_lang.php
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

$l['no_new'] = 'You did not specify the new password.';
$l['no_conf'] = 'The confirmation password is missing.';
$l['no_match'] = 'The passwords you entered do not match.';
$l['err_changing'] = 'There were some errors while changing the password.';
$l['no_pass'] = 'You did not specify the password for File Manager';
$l['err_setting'] = 'There were some errors while setting the password for File Manager.';
$l['no_pass_tomcat'] = 'You did not specify the password for Apache Tomcat Manager.';
$l['err_setting_tomcat'] = 'There were some errors while setting the password for Apache Tomcat Manager.';

// Theme strings
$l['<title>'] = 'Change Password';
$l['submit_button'] = 'Change Password';
$l['new_pass'] = 'New Password';
$l['old_pass'] = 'Old Password';
$l['retype_pass'] = 'Retype New Password';
$l['change_note'] = 'Change Password';
$l['change_final'] = 'Your password has been changed successfully';
$l['change_final_file'] = 'Your password for File Manager has been set successfully';
$l['change_final_tomcat'] = 'Your password for Apache Tomcat has been set successfully';
$l['change_onboot'] = 'Your password will be changed when the VPS is booted again';
$l['filemanager'] = 'Set Password for File Manager';
$l['username'] = 'Username';
$l['fpassword'] = 'Password';
$l['tomcat'] = 'Set Password for Apache Tomcat Manager';

?>