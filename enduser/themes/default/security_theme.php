<?php

//////////////////////////////////////////////////////////////
//===========================================================
// userindex_theme.php
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

function security_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $pmastate, $newmysqlstatus, $amppsstatus;

softheader($l['<title>']);

echo '<center class="sai_tit"><img src="'.$theme['a_images'].'security.gif" />&nbsp; ' . $l['security_center'] . '</center>
<table border="0" cellpadding="5" cellspacing="1" width="95%" class="sai_summaryBlock">
<tr>
<th align="center" class="sai_summaryTitle" width="70%">'.$l['subject_name'].'</th>
<th align="center" class="sai_summaryTitle" width="30%">'.$l['subject_status'].'</th>
</tr>';
if($amppsstatus==1) 
{
	$amppssecure='Secure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp; ' . $l['ampps_subject'].'</font></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="green" face="Arial"><b>'.$amppssecure.'</b></font></td>
	</tr>';
}
else
{
	$amppssecure='Unsecure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp; ' . $l['ampps_subject'].'</font><br/><font color="red">&nbsp;&nbsp;'.$l['ampps_unsecure'].'</font><br/></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="red" face="Arial"><b>'.$amppssecure.'</b></font></td>
	</tr>';
}
if($pmastate == 1)
{ 
	$pmastatus='Secure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp; ' . $l['phpmyadmin_subject'].'</font></font></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="green" face="Arial"><b>'.$pmastatus.'</b></font></td>
	</tr>';
}
else
{ 
	$pmastatus='Unsecure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp;'.$l['phpmyadmin_subject'].'</font><br><font color="red">&nbsp;&nbsp;'.$l['phpmyadmin_unsecure'].'</font><br/></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="red" face="Arial"><b>'.$pmastatus.'</b></font></td>
	</tr>';
}
if($newmysqlstatus==1) 
{
	$mysqlstatus='Secure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp; ' . $l['mysql_subject'].'</font></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="green" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
	</tr>';
}
else
{
	$mysqlstatus='Unsecure';
	echo '<tr>
	<td class="sai_summaryBlock"><font size="2">&nbsp; ' . $l['mysql_subject'].'</font><br/><font color="red">&nbsp;&nbsp;'.$l['mysql_unsecure'].'</font><br/></td>
	<td align="center" class="sai_summaryBlock"><font size="2" color="red" face="Arial"><b>'.$mysqlstatus.'</b></font></td>
	</tr>';
}

echo '</table>
<table border="0" width="95%">
<br><br><br>
<tr>To fix the problems for MySQL go to:<br><br></tr>
<tr><img src="'.$theme['a_images'].'security.gif" alt="" /><a href="'.$globals['ind'].'act=mysqlsettings">Change MySQL root Password</a></tr><br><br><br>
<tr>To fix the problems for AMPSS go to:<br><br></tr>
<tr><img src="'.$theme['a_images'].'secure.gif" alt="" /><a href="'.$globals['ind'].'act=secure">Set AMPPS Password</a></tr>
</table>';
softfooter();
}		

?>
