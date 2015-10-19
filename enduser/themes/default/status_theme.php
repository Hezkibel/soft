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

function status_theme(){

global $theme, $globals, $softpanel, $user, $l, $updates_available, $apachestatus, $mysqldstatus, $pythonstatus, $extension, $mongodbstatus, $ftpstatus;

softheader($l['<title>']);

echo '<script language="javascript" type="text/javascript"><!-- // --><![CDATA[

$(document).ready(function(){	
		$(".sai_altrowstable tr").mouseover(function(){
			var old_class = $(this).attr("class");		
			$(this).attr("class", "sai_tr_bgcolor");		
			$(this).mouseout(function(){
				$(this).attr("class", old_class);
			});
		});	
	});					
	// ]]></script>';
echo '<center class="sai_tit"><img src="'.$theme['a_images'].'status.gif" />&nbsp; ' . $l['status'] . '</center>
<center><table border="0" cellpadding="5" cellspacing="1" width="60%" class="sai_altrowstable">
<tr>
<th colspan="2" width="50%" style="text-align:center">'.$l['service_status'].'</td>
</tr>
<tr>
<th width="50%" style="text-align:center">'.$l['process_name'].'</th>
<th width="50%" style="text-align:center">'.$l['process_status'].'</th>
</tr>
<tr class="sai_oddrowcolor">
<td align="center">' . $l['apache_status'] . '</td>';
if($apachestatus == 1)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>
<tr class="sai_evenrowcolor">
<td align="center">' . $l['mysqld_status'] . '</td>';
if($mysqldstatus == 1)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>
<tr class="sai_oddrowcolor">
<td align="center">' . $l['python_status'] . '</td>';
if($pythonstatus == 1)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>
<tr class="sai_evenrowcolor">
<td align="center">' . $l['mongodb_status'] . '</td>';
if($mongodbstatus == 1)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>
<tr class="sai_oddrowcolor">
<td align="center">' . $l['ftp_status'] . '</td>';
if($ftpstatus == 1)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>';
echo  '<tr class="sai_evenrowcolor">
<td align="center">' . $l['ssl_status'] . '</td>';
if($softpanel->is_ssl() == true)
{
	echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
}
else
{
	echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
}
echo '</tr>';

echo '</table><br /><br /><br />

<table border="0" cellpadding="5" cellspacing="1" width="60%" class="sai_altrowstable">
<tr>
<th colspan="2" width="50%" style="text-align:center">'.$l['php_extension'].'</td>
</tr>
<tr>
<th width="50%" style="text-align:center">'.$l['extension_name'].'</th>
<th width="50%" style="text-align:center">'.$l['status'].'</th>
</tr>';
$i=1;
foreach($extension as $k => $v){
	echo '<tr class="'.($i % 2 == 0 ? "sai_evenrowcolor" : "sai_oddrowcolor").'">
	<td align="left">'.$k.'</td>';
	if($v == 1){
		echo '<td align="center"><font color="green" size="2">' . $l['active'] . '</font></td>';
	}else{
		echo '<td align="center"><font color="red" size="2">' . $l['inactive'] . '</font></td>';
	}
	echo '</tr>';
	$i++;
}
echo '</tr>
</table>
'.$l['extension_note'].'</center>';

softfooter();
}		
/*function died(){
print_r(error_get_last());
}
register_shutdown_function('died');*/
?>
