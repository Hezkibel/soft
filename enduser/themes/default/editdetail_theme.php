<?php

//////////////////////////////////////////////////////////////
//===========================================================
// editdetail_theme.php
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


function editdetail_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $edit, $settings;
	global $insid, $edited, $software, $soft, $scripts, $version_updated, $account_details_editable, $no_autoupgrade, $add_to_fileindex, $__settings, $default_fileindex;
	
	
	
	softheader($l['<title>']);
	
	echo '
	<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
	
	// show/hide backup options
	function show_backup(){
		try{
			if(auto_backup.value == 0){
				$("#auto_backup_rotation").prop("disabled", true);
			}else{
				$("#auto_backup_rotation").prop("disabled", false);
			}
			
		}catch(e){
			//
		}
		return true;
	};
	
	function toggle_advoptions(ele){
		//alert("#"+ele);
		
		if ($("#"+ele).is(":hidden")){
			$("#"+ele).slideDown("slow");
			$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'minus_new.gif");
		}
		else{
			$("#"+ele).slideUp("slow");
			$("#advoptions_toggle_plus").attr("src", "'.$theme['images'].'plus_new.gif");
		}
	}
	
	function plus_onmouseover(ele){
		$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus_hover.gif");
	}
	
	function plus_onmouseout(ele){
		$("#"+ele.id+"_plus").attr("src", "'.$theme['images'].'plus.gif");
	}
	
	$(document).ready(function() {
		$("#editfiles tr").click(function(event) {
			if (event.target.type !== "checkbox") {
			  $(":checkbox", this).trigger("click");
			}
		});
	});
	
	'.(!empty($_POST) ? '' : 'addonload(\'show_backup();\');').'
	
	// ]]></script>';
	
	$width_size = 65;
	
	if(!empty($softpanel->leftpanel_resize)){
		$width_size = 40;
	}
	
	if(!empty($edited)){
		echo '
		<div class="bg"><br />
			<div class="alert alert-warning"><center>'.$l['details_edited'].'</center></div><br /><br />
			<center><b><a href="'.script_link($soft).'&highlight='.$insid.'&postact=edit" class="sai_head">'.$l['return'].'</a></b></center><br />
		</div><!--end of bg-->';
	}else{
		
		echo '
		<form accept-charset="'.$globals['charset'].'" name="editsettings" method="post" action="" class="form-horizontal">
			<div class="bg"><br />			
				<div class="row sai_main_head" style="width:100%;" align="center">
					<div class="col-sm-5 col-xs-4" style="padding:0 10px 0 0; text-align:right;">
						<i class="fa sai-projectman fa-2x" style="color:#00A0D2;"></i>
					</div>
					<div class="col-sm-7 col-xs-8" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['edit_ins'].'</div>
				</div><br />';
				
				error_handle($error, '100%');
				
				if(!empty($version_updated)){
					echo '<div class="alert alert-warning" align="center"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>'.$l['version_edited'].'</div>';
				}
	
				echo (!empty($GLOBALS['alreadyupdated']) ? '
					<form accept-charset="'.$globals['charset'].'" method="post" name="uprec" id="uprec" action="">
					<br />
						<center class="alert alert-warning">
							<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
							<a href="'.$globals['index'].'act=editdetail&insid='.$insid.'&updateversion=1" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['alreadyupdated'], array($GLOBALS['alreadyupdated'], $user['ins'][$insid]['ver'])).'</a>
						</center>
					</form>' : '');
	
				echo'
				<div style="padding: 0 25px;">
					<div class="sai_sub_head">'.$l['ins_details'].'</div><hr>';
			
					if(empty($globals['hide_directory_url'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dir" class="sai_head">'.$l['edit_dir'].'</label><br />
							</div>	
							<div class="col-sm-7">
								<input type="text" name="edit_dir" id="edit_dir" class="form-control" value="'.POSTval('edit_dir', $user['ins'][$insid]['softpath']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
						
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_url" class="sai_head">'.$l['edit_url'].'</label><br />
							</div>	
							<div class="col-sm-7">	
								<input type="text" name="edit_url" id="edit_url" class="form-control" value="'.POSTval('edit_url', $user['ins'][$insid]['softurl']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Web directory @since 3.5
					if(!empty($user['ins'][$insid]['wwwdir'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_wwwdir" class="sai_head">'.$l['edit_wwwdir'].'</label><br />
							</div>
							<div class="col-sm-7"> 
								<input type="text" name="edit_wwwdir" id="edit_wwwdir" class="form-control" value="'.POSTval('edit_wwwdir', $user['ins'][$insid]['wwwdir']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Web directory URL @since 3.5
					if(!empty($user['ins'][$insid]['wwwurl'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_wwwurl" class="sai_head">'.$l['edit_wwwurl'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_wwwurl" id="edit_wwwurl" class="form-control" value="'.POSTval('edit_wwwurl', $user['ins'][$insid]['wwwurl']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
					
					// Data directory ?
					if(!empty($user['ins'][$insid]['softdatadir'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_datadir" class="sai_head">'.$l['edit_datadir'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_datadir" id="edit_datadir" class="form-control" value="'.POSTval('edit_datadir', $user['ins'][$insid]['softdatadir']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
				
					if(!empty($user['ins'][$insid]['softdb'])){
						
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_db" class="sai_head">'.$l['edit_db'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbname" id="edit_db" class="form-control" value="'.POSTval('edit_dbname', $user['ins'][$insid]['softdb']).'" size="'.$width_size.'" />
							</div>					
						</div><br />
					';}
					
					if(!empty($user['ins'][$insid]['softdbuser'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbuser" class="sai_head">'.$l['edit_dbuser'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbuser" id="edit_dbuser" class="form-control" value="'.POSTval('edit_dbuser', $user['ins'][$insid]['softdbuser']).'" size="'.$width_size.'" />
							</div>
						</div><br />
					';}
				
					if(!empty($user['ins'][$insid]['display_softdbpass'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbpass" class="sai_head">'.$l['edit_dbpass'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbpass" id="edit_dbpass" class="form-control" value="'.aPOSTval('edit_dbpass', $user['ins'][$insid]['display_softdbpass']).'" size="'.$width_size.'" />
							</div>						
						</div><br />
					';}
					
					if(!empty($user['ins'][$insid]['softdbhost'])){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="edit_dbhost" class="sai_head">'.$l['edit_dbhost'].'</label><br />
							</div>
							<div class="col-sm-7">
								<input type="text" name="edit_dbhost" class="form-control" id="edit_dbhost" value="'.aPOSTval('edit_dbhost', $user['ins'][$insid]['softdbhost']).'" size="'.$width_size.'" />
							</div>	
						</div><br />
					';}
				
					echo'
					<div class="row">
						<div class="col-sm-5">
							<label for="disable_notify_update" class="sai_head">'.$l['disable_notify_update'].'</label><br />
							<span class="sai_exp">'.$l['exp_disable_notify_update'].'</span>
						</div>
						<div class="col-xs-6">
							<input type="checkbox" name="disable_notify_update" id="disable_notify_update" '.POSTchecked('disable_notify_update', $user['ins'][$insid]['disable_notify_update']).' />
						</div>	
					</div><br />';
					
					if(!empty($scripts[$soft]['auto_upgrade']) && empty($no_autoupgrade)){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="eu_auto_upgrade" class="sai_head">'.$l['eu_auto_upgrade'].'</label><br />
								<span class="sai_exp">'.$l['exp_eu_auto_upgrade'].'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox"  name="eu_auto_upgrade" id="eu_auto_upgrade" '.POSTchecked('eu_auto_upgrade', $user['ins'][$insid]['eu_auto_upgrade']).' />
							</div>
						</div><br />
					';}
						
					if(empty($globals['off_upgrade_plugins']) && !empty($software['update_plugins'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_upgrade_plugins" class="sai_head">'.lang_vars($l['auto_upgrade_plugins'], array($software['name'])).'</label><br />
								<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_plugins'], array($software['name'])).'</span>	
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="auto_upgrade_plugins" id="auto_upgrade_plugins" id="auto_upgrade_plugins" '.POSTchecked('auto_upgrade_plugins', $user['ins'][$insid]['auto_upgrade_plugins']).' />
							</div>	
						</div><br />
					';}
				
					if(empty($globals['off_upgrade_themes']) && !empty($software['update_themes'])){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_upgrade_themes" class="sai_head">'.lang_vars($l['auto_upgrade_themes'], array($software['name'])).'</label><br />
								<span class="sai_exp">'.lang_vars($l['exp_auto_upgrade_themes'], array($software['name'])).'</span>
							</div>
							<div class="col-sm-7">
								<input type="checkbox" name="auto_upgrade_themes" id="auto_upgrade_themes" '.POSTchecked('auto_upgrade_themes', $user['ins'][$insid]['auto_upgrade_themes']).' />	
							</div>	
						</div><br />
					';}
			
					if(empty($globals['disable_backup_restore']) && empty($globals['disable_auto_backup']) && !aefer()){
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="auto_backup" class="sai_head">'.$l['auto_backup'].'</label><br />
								<span class="sai_exp">'.$l['exp_auto_backup'].'</span>	
							</div>
							<div class="col-sm-7">
								<select name="auto_backup" class="form-control" id="auto_backup" onchange="show_backup();">
								<option value="0" '.POSTselect('auto_backup', '0', (empty($user['ins'][$insid]['auto_backup']) ? '1' : '0')).'>'.$l['no_backup'].'</option>'.
								(empty($globals['disable_auto_backup_daily']) ? '<option value="daily" '.POSTselect('auto_backup', 'daily', ($user['ins'][$insid]['auto_backup'] == 'daily' ? '1' : '0')).'>'.$l['daily'].'</option>' : '').
								(empty($globals['disable_auto_backup_weekly']) ? '<option value="weekly" '.POSTselect('auto_backup', 'weekly', ($user['ins'][$insid]['auto_backup'] == 'weekly' ? '1' : '0')).'>'.$l['weekly'].'</option>' : '').
								(empty($globals['disable_auto_backup_monthly']) ? '<option value="monthly" '.POSTselect('auto_backup', 'monthly', ($user['ins'][$insid]['auto_backup'] == 'monthly' ? '1' : '0')).'>'.$l['monthly'].'</option>' : '').'					
								</select>					
							</div>
						</div><br />
					';}
				
					echo'
					<div class="row">
						<div class="col-sm-5">
							<label for="auto_backup_rotation" class="sai_head">'.$l['auto_backup_rotation'].'</label><br />
							<span class="sai_exp">'.$l['exp_auto_backup_rotation'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="auto_backup_rotation" class="form-control" id="auto_backup_rotation">';    
							for($i=0; $i<=10; $i++){
								// Do we have a limit from admin ?
								if(!empty($globals['auto_backup_limit']) && ($i > $globals['auto_backup_limit'] || $i == 0) || !empty($globals['max_backups']) && ($i > $globals['max_backups'] || $i == 0)) continue;
								echo '<option value="'.$i.'" '.POSTselect('auto_backup_rotation', $i, (!empty($user['ins'][$insid]['auto_backup_rotation']) && $user['ins'][$insid]['auto_backup_rotation'] == $i ? '1' : (empty($user['ins'][$insid]['auto_backup_rotation']) && $i == 4) ? '1' : '0')).'>'.(empty($i) ? $l['unlimited'] : $i).'</option>';						
							}
							echo '</select>		
						</div>			
					</div><br />';
				
					if(!empty($add_to_fileindex)){
					
						echo '
						<div class="row">
							<div class="col-sm-5">
								<label for="advoptions_toggle" class="sai_head">'.$l['select_files'].'</label><br />
								<span class="sai_exp">'.$l['select_files_exp'].'</span><br />
							</div>
							<div class="col-sm-7">
								<div id="advoptions_toggle" onclick="toggle_advoptions(\'selectfile\');" class="sai_head" style="background: none; cursor:pointer;"><img id="advoptions_toggle_plus" src="'.$theme['images'].'plus_new.gif" /> &nbsp; '.$l['select_files_list'].'</div>
								<div id="selectfile" style="display:none">
									<table class="table table-hover">
										<thead style="background:#EFEFEF;" class="sai_head2">
											<tr>
												<th width="5%"><input type="checkbox" id="check_all_edit" name="check_all_edit"></th>
												<th colspan="2"><b>'.$l['check_all_edit'].'</b></th>
											</tr>
										</thead>';
										foreach($add_to_fileindex as $ck => $cv){
											
											if(in_array($cv['name'], $default_fileindex)) continue;
											
											echo '<tr>
													<td><input type="checkbox" name="add_to_fileindex[]" class="soft_filelist" value="'.$cv['name'].'" '.POSTmulticheck('add_to_fileindex', $cv['name'], $__settings['fileindex']).' /></td>
													<td width="5%"><img src="'.$theme['images'].''.(!empty($cv['dir']) ? 'dir.png' : 'file.png').'"></td>
													<td>'.$cv['name'].'</td>
												</tr>';
											$i++;
										}
									echo'
									</table>
								</div>		
							</div>	
						</div><br />	
						
						<div class="row">
							<div class="col-sm-5">
								<label for="select_files_backup" class="sai_head">'.$l['select_files_backup'].'</label><br />
								<span class="sai_exp">'.$l['select_files_backup_exp'].'</span>
							</div>
							<div class="col-sm-7">
								<select name="select_files_backup" class="form-control" id="select_files_backup">
									<option value="0" '.POSTselect('select_files_backup', '0', (empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['no'].'</option>
									<option value="1" '.POSTselect('select_files_backup', '1', (!empty($user['ins'][$insid]['select_files_backup']) ? '1' : '0')).'>'.$l['yes'].'</option>
								</select>				
							</div>			
						</div>
						<br />';
					}
				echo '
				</div>';
			
				if(!empty($settings)){
				
					echo'
					<div class="bg">';
				
						foreach($settings as $group => $sets){
							
							if($group == 'hidden' || empty($sets)) continue;
						
							echo '
							<div class="sai_sub_head">'.$group.'</div><hr>';
						
							foreach($sets as $sk => $sv){
								
								if($sk == 'admin_pass'){
									$exp_class = 'sai_exp2';
								}else{
									$exp_class = 'sai_exp';					
								}
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for='.$sk.' class="sai_head">'.$sv['head'].'</label>
										'.(empty($sv['exp']) ? '' : '<br /><span class="'.$exp_class.'">'.$sv['exp'].'</span>').'
									</div>';
									
									//Adding class to input
									if(preg_match('/type="text"/is', $sv['tag'])){
										$sv['tag'] = preg_replace('/>/is', 'class="form-control">',$sv['tag']);
									}
									
									echo'
									<div class="col-sm-7">'.$sv['tag'].'</div>
								</div><br />';
							}
						}
			
						//The Hidden groups 
						if(!empty($settings['hidden'])){
						
							foreach($settings['hidden'] as $sk => $sv){
								echo $sv['tag'];
							}
						
						}
			
					echo'
					</div><br /><!--end of bg clss-->';
				}//End of if($settings)
		
				echo '
				<div class="bg info_block">
				
					<div class="sai_sub_head">'.$l['info'].'</div><hr style="border-color: #D1D2D3;">
				
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_softname'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$software['name'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_num'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['insid'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_ver'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['ver'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_time'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.datify($user['ins'][$insid]['itime']).'</span>
						</div>
					</div><br />
			
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_path'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info">'.$user['ins'][$insid]['softpath'].'</span>
						</div>
					</div><br />
					
					<div class="row">
						<div class="col-sm-5 col-xs-5">
							<span class="sai_head">'.$l['ins_url'].'</span>
						</div>
						<div class="col-sm-6 col-xs-6">
							<span class="sai_info"><a href="'.$user['ins'][$insid]['softurl'].'" target="_blank">'.$user['ins'][$insid]['softurl'].'</a></span>
						</div>
					</div><br />';
			
					if(!empty($user['ins'][$insid]['admin_folder']) || !empty($scripts[$soft]['admin_url'])){
						$adminurl = $user['ins'][$insid]['softurl'].'/'.(!empty($user['ins'][$insid]['admin_folder']) ? $user['ins'][$insid]['admin_folder'] : $scripts[$soft]['admin_url']);
						echo'
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_admin_url'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info"><a href="'.$adminurl.'" target="_blank">'.$adminurl.'</a></span>
							</div>
						</div><br />';
					}
			
					echo'
					
					'.(empty($user['ins'][$insid]['wwwdir']) ? '' :'
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_wwwdir'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['wwwdir'].'</span>
							</div>			
						</div><br />
					').'
					
					'.(empty($user['ins'][$insid]['wwwurl']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_wwwurl'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['wwwurl'].'</span>
							</div>		
						</div><br />
					').'
					
					'.(empty($user['ins'][$insid]['softdatadir']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_datadir'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdatadir'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdb']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_db'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdb'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdbuser']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_dbuser'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdbuser'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['softdbhost']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_dbhost'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.$user['ins'][$insid]['softdbhost'].'</span>
							</div>
						</div><br />
					').'	
					
					'.(empty($user['ins'][$insid]['cron_command']) ? '' : '
						<div class="row">
							<div class="col-sm-5 col-xs-5">
								<span class="sai_head">'.$l['ins_cron_command'].'</span>
							</div>
							<div class="col-sm-6 col-xs-6">
								<span class="sai_info">'.base64_decode($user['ins'][$insid]['cron_command']).'</span>
							</div>
						</div><br />
					
					').'	
				</div><!--end of bg class-->
				
				<br /><br />
				<p align="center">
					<input type="hidden" name="editins" id="editins" value="'.$l['editins'].'" />
					<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['editins'].'"  />
				</p><br /><br />
				<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br /><br />					
			</div><!--end of bg class-->
		</form><br /><br />
		
		<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			$(document).ready(function(){
			
				$("#check_all_edit").on("click", function(event){
					if(this.checked == true){
						$(".soft_filelist").prop("checked", true);
					}else{
						$(".soft_filelist").prop("checked", false);
					}
				});
			
				$(".sai_altrowstable tr").mouseover(function(){
					var old_class = $(this).attr("class");
					//alert(old_class);
					$(this).attr("class", "sai_tr_bgcolor");
					
					$(this).mouseout(function(){
						$(this).attr("class", old_class);
					});
				});
				
			});
		// ]]></script>';
	
	}	
	
	softfooter();

}

?>