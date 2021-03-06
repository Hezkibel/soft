<?php

//////////////////////////////////////////////////////////////
//===========================================================
// sclone_theme.php
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


function sclone_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $init_tab, $dbtype, $dbs, $installed, $__settings, $setupcontinue, $installations, $notes, $cron, $datadir, $ajaxdb, $ajaxdbexists, $overwrite_option, $protocols, $nopackage, $can_publish, $not_default, $child, $install_option, $multi_ver, $child_sids, $installation_keys, $no_autoupgrade, $ajaxhttpsexists, $ajaxhttps, $insid, $cloned, $new_insid;
	
	if(optGET('ajaxdownload') && !empty($nopackage)){	
		
		// Try to download the package
		if(method_exists($softpanel, 'updatesoftwares')){
			$softpanel->updatesoftwares($soft, 0, 0, 1);
			echo 1;
			return true;
		}
		
		// False call
		echo 0;
		return false;
	
	}
	
	// Give the status
	if(optGET('ajaxstatus')){
		
		$_status = soft_progress(optGET('ajaxstatus'));
		
		$tmp_status = unserialize($_status[1]);
		$_status[1] = $tmp_status['current_status'];
		
		if(!empty($_status)){
			echo implode('|', $_status);
			return true;
		}
		
		// False call
		echo 0;
		return false;
	
	}
	
	if(!empty($ajaxdb)){
		echo $ajaxdbexists;
		return true;
	}
	
	if(!empty($ajaxhttps)){
		echo $ajaxhttpsexists;
		return true;
	}
	
	softheader($l['<title>']);
	
	if(!empty($cloned)){
	
		echo '
		<div class="bg">
			<h4>'.$l['congrats'].'</h4><br />
			'.$software['name'].' '.$l['succesful'].' : <br />
			<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
			'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$__settings['softurl'].'/'.$software['adminurl'].'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
			'.(!empty($setupcontinue) ? $l['setup_continue'].' : <br />
			<a href="'.$__settings['softurl'].'/'.$setupcontinue.'" target="_blank">'.$__settings['softurl'].'/'.$setupcontinue.'</a><br /><br />' : '').'
			'.$l['enjoy'].'<br /><br />
			'.(!empty($notes) ? $l['install_notes'].' : <br />
			<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
			'.$l['please_note'].'<br /><br />
			'.$l['regards'].',<br />
			'.$l['softinstaller'].'<br /><br />
			<center><b><a href="'.script_link($soft).'&highlight='.$new_insid.'&postact=clone" class="sai_head">'.$l['return'].'</a></b></center><br /><br />';
		
			if(empty($globals['clone_tweet_off']) || empty($globals['lictype'])){
				echo '
				<form method="get" action="http://twitter.com/intent/tweet" id="tweet" onsubmit="return dotweet(this);">
					<div class="panel panel-info" style="width:55%; margin:0 auto;">
						<div class="panel-heading" style="padding:5px; font-size:15px;">
							<font><b>'.$l['clone_tweet_sub'].' :</b></font>
						</div>
						<div class="panel-body">
							<div class="row">
								<div class="col-sm-10">
									<textarea name="text" cols="80" row="3" style="resize:none; width:100%;">'.loadtweetdata('clone_tweet', $l['clone_tweet']).'</textarea>
								</div>
								<div class="col-sm-2 col-xs-2">
									<input type="submit" value="Tweet!" class="btn btn-info" onsubmit="return false;" id="twitter-btn" style="margin-top:20px;"/>
								</div>
							</div>
						</div>
					</div>
				</form>';
			}
		echo '
		</div><!--end of bg class--><!--PROC_DONE-->
		<br /><br />';
	
	}else{
		
		echo '
		<div id="install_win">
			<div id="fadeout_div">
				<form accept-charset="'.$globals['charset'].'" name="clonesoftware" method="post" action="" onsubmit="return checkform();" id="clonesoftware">
			
					<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
					
					function checkform(dosubmit){
						
						try{
							if(!formcheck()){
								return false;
							}
						}catch(e){
							//Do nothing
						}
						$_("softsubmitbut").disabled = true;	
						
						if(!get_package()){
							return false;
						}
						
						if(useprog){
							
							// Send a request to check the status
							progressbar.start();
							
							// Return false so that the form is not submitted
							return false;
						
						// This is OLD School !
						}else{		
							if(dosubmit == 1){			
								$_("clonesoftware").submit();	
							}
							show_msg("'.$l['cloning'].'");
						}
						
						return true;
						
					};
					
					var progressbar = {
						timer: 0,
						total_width: 0,	
						status_key: "",
						synctimer: 0,
						fadeout_div: "#fadeout_div",
						win_div: "#install_win",
						progress_div: "#progress_bar",
						formid: "#clonesoftware",
						frequency: 8000,
						
						current: function(){
							try{
								var tmp_cur = Math.round(parseInt($_("progress_color").width)/parseInt($_("table_progress").width)*100);
								if(tmp_cur > 100){
									tmp_cur = 99;
								}
								return tmp_cur;
							}catch(e){
								return -1;	
							}
						},
						
						reset: function(){ try{
							clearTimeout(this.timer);
							$_("progress_color").width = 1;
						}catch(e){ }},
						
						move: function(dest, speed, todo){ try{
							var cur = this.current();
							if(cur < 0){
								clearTimeout(this.timer);
								return false;
							}
							var cent = cur + 1;
							var new_width = cent/100*this.total_width;
							if(new_width < 1){
								new_width = 1;
							}
							//alert(new_width+" "+dest+" "+cent);
							$_("progress_color").width = new_width;
							$_("progress_percent").innerHTML = "("+cent+" %)";
							
							if(cent < dest){
								this.timer = setTimeout("progressbar.move("+dest+", "+speed+")", speed);
							}else{
								eval(todo);	
							}
						}catch(e){ }},
						
						text: function(txt){ try{
							$_("progress_txt").innerHTML = txt;
						}catch(e){ }},
						
						sync: function(){
							if(progressbar.status_key.length < 2){
								return false;
							}
							$.ajax({
								url: window.location+"&ajaxstatus="+progressbar.status_key+"&random="+Math.random(),
								type: "GET",
								success: function(data){
									if(data == 0) return false;
									var tmp = data.split("|");
									var cur = progressbar.current();
									tmp[2] = (3000/(tmp[0]-cur));
									//alert(tmp);
									if(tmp[0] > cur){
										if(parseInt(tmp[2]) == 0){
											tmp[2] = 800;
										}
										progressbar.move(tmp[0], tmp[2]);
									}
									progressbar.text(tmp[1]);
									progressbar.synctimer = setTimeout("progressbar.sync()", progressbar.frequency);
								}
							});
						},
						
						sync_abort: function(){
							clearTimeout(this.synctimer);
						},
						
						start: function(){ try{
							this.post();
							this.reset();
							this.total_width = parseInt($_("table_progress").width);
							this.move(95, 800);
							this.status_key = $("#soft_status_key").attr("value");
							this.sync();
						}catch(e){ }},
						
						post: function(){
							
							// Scroll to the Top and show the progress bar
							goto_top();
							$(progressbar.fadeout_div).fadeOut(500, 
								function(){
									$(progressbar.progress_div).fadeOut(1);
									$(progressbar.progress_div).fadeIn(500);
								}
							);
							
							try{
								var sid = $_("softbranch").value;
							}catch(e){
								var sid = '.$soft.'
							}
							
							$.ajax({
								url: window.location+"&jsnohf=1&soft="+sid+"&multi_ver=1",
								type: "POST",
								data: $(progressbar.formid).serialize(),
								complete: function( jqXHR, status, responseText ) {
									
									progressbar.sync_abort();
									
									// Store the response as specified by the jqXHR object
									responseText = jqXHR.responseText;
									
									try{
										if(responseText.match(/\<\!\-\-PROC_DONE\-\-\>/gi)){
											progressbar.text("'.addslashes($l['finishing_process']).'");
											progressbar.move(99, 10, "$(progressbar.progress_div).fadeOut(1)");
										}else{
											progressbar.reset();
										}
									}catch(e){ }
									
									if ( jqXHR.isResolved() ) {
									
										// #4825: Get the actual response in case
										// a dataFilter is present in ajaxSettings
										jqXHR.done(function( r ) {
											responseText = r;
										});
								
										// Create a dummy div to hold the results
										// inject the contents of the document in, removing the scripts
										// to avoid any "Permission Denied" errors in IE
										//var newhtml = jQuery("<div>").append(responseText).find(progressbar.win_div).html();
										//alert(responseText);
										$(progressbar.win_div).animate({opacity: 0}, 1000, "", function(){
											$(progressbar.win_div).html(responseText);
											new_theme_funcs_init();
										}).delay(50).animate({opacity: 1}, 500);
										
										//alert(newhtml);
										
									}else{
										alert("Oops ... the connection was lost");
									}
								}
							});
						}
					};
					
					function show_msg(msg){	
						$_("show_txt").innerHTML = "<br /><br /> &nbsp; "+msg+" &nbsp; <img src=\"'.$theme['images'].'progress.gif\" />";
						$_("show_txt").style.display = "";
					}
					
					// Is the package there ?
					var nopackage = '.(empty($nopackage) ? 0 : 1).';
					
					// Use the Progress Bar ?
					var useprog = 1; 
					try{
						if(BrowserDetect.browser.toLowerCase() == "safari" && BrowserDetect.version.toString().substr(0, 1) == "3"){
							useprog = 0;
						}
					}catch(e){ }
					
					function get_package(){	
						if(nopackage){
							
							show_msg("'.$l['downloading'].'");
							
							try{		
								AJAX("'.script_link($soft).'&ajaxdownload=1&random="+Math.random(), "get_package_handle(re)");
							}catch(e){ }
							
							return false;
						}else{
							$_("show_txt").style.display = "none";
							return true;
						}
					};
					
					function get_package_handle(resp){
						nopackage = 0;
						show_msg("'.$l['cloning'].'");
						checkform(1);
					};
					
					function checkhttps(proto_id, softdomain_id, alrt){
						try{
							var id = $_(proto_id);
							var proto = id.options[id.selectedIndex].text;
						
							$("#checkhttps_wait").css("display","inline-block");
							if(proto.indexOf("https") !== -1){
							
								 $.ajax({
									type: "POST",
									url: "'.script_link($soft).'&checkhttps="+encodeURIComponent(proto+$_(softdomain_id).value),
									timeout:10000,
									// Checking for error
									success: function(data){
										$("#checkhttps_wait").css("display","none");
										is_https(data);
									},
									error: function(jqXHR, status, e) {
										$("#checkhttps_wait").css("display","none");
										is_https(e);
										return false;
									}
								}); 
								
								//AJAX("'.script_link($soft).'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
							}else{
								$("#checkhttps_wait").css("display","none");
								is_https("true");
							}
							if(alrt == true){
								alert(proto+$_(softdomain_id).value);
							}
						}catch(e){
							//
						}
						return true;
					};
					
					function is_https(re){
						try{
							httpserror = "";
							
							//Check if it exists
							if(re !== "true"){
								httpserror = "'.$l['no_https'].'";
							}
							if(httpserror != ""){
								$_("httpserror").style.display = "block";
								$_("httpserror").innerHTML = httpserror;
								return false;
							}else{
								$_("httpserror").style.display = "none";
							}
							
						}catch(e){
							//
						}
						return true;
					};
					';
					
					if(!empty($dbtype)){
					
						echo 'function checkdbname(id, alrt){
							try{		
								AJAX("'.script_link($soft).'&checkdbexists="+$_(id).value, "dbexists(\'"+id+"\', "+alrt+", re)");	
							}catch(e){
								//
							}
							return true;
						};
						
						function dbexists(id, alrt, re){
							try{
								
								dberror = "";
								
								//Is the length fine
								if($_(id).value.length > '.(empty($softpanel->maxdblen) ? 7 : $softpanel->maxdblen).'){
									dberror = "'.$l['db_name_long'].'";
								}
								
								//There should be only alphanumeric characters
								if(/[^a-zA-Z0-9]/.test($_(id).value) && !'.aefer().'0){
									dberror = "'.$l['db_alpha_num'].'";
								}
								
								//Check if it exists
								if(re == "true"){
									dberror = "'.$l['database_exists'].'";
								}
								
								if(dberror != ""){
									$_(id+"error").style.display = "block";
									$_(id+"error").innerHTML = dberror;
									if(alrt == true){
										alert(dberror);
									}
									return false;
								}else{
									$_(id+"error").style.display = "none";
								}
								
							}catch(e){
								//
							}
							return true;
						};';
					
					}//End of if($dbtype)
					
					echo '
					// ]]></script>';
			
					echo '
					<div class="bg"><br />						
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-6 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-copy fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-6 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_cloning'].$software['name'].'</div>
						</div>';
						
						if(empty($globals['lictype']) && !empty($scripts[$soft]['force_scripts'])){
							echo '<br />
							<div class="alert alert-warning">
								<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								<center>'.lang_vars($l['not_in_free'], array($software['name'])).(!webuzo() ? '&nbsp;&nbsp;'.$l['notify_admin'] : '').'</center>
							</div>';
						}
							
						echo error_handle($error, "100%", 0, 1);
						
						echo '
						<div style="padding: 0 25px;"><br />
							<div class="sai_sub_head">'.$l['clone_ins'].'</div><hr>';
						
							if(empty($softpanel->noprotocol)){
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for="softproto" class="sai_head">'.$l['choose_protocol'].'</label><br />
										<span class="sai_exp2">'.$l['choose_protocol_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<select name="softproto" id="softproto" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
											foreach($protocols as $k => $v){
												echo '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
											}
										echo '
										</select>
										<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="please wait..">
										</div><br />
										<div class="row">
											<div class="col-sm-12">
												<span id="httpserror" style="display:none; font-size:12px; padding:10px;" class="alert alert-danger"></span>
											</div>
										</div>
									</div>
								</div>';
							}
							
							echo '
							<div class="row">
								<div class="col-sm-5">
									<label for="softdomain" class="sai_head">'.$l['choose_domain'].'</label><br />
									<span class="sai_exp2">'.$l['choose_domain_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<select name="softdomain" id="softdomain" class="form-control" onchange="softmail();" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
										foreach($softpanel->domainroots as $domain => $dompath){
											echo '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
										}
									echo '
									</select>
								</div>
							</div><br />
							
							<div class="row">
								<div class="col-sm-5">
									<label for="softdirectory" class="sai_head">'.$l['in_directory'].'</label><br />
									<span class="sai_exp2">'.$l['in_directory_exp'].'</span>
								</div>
								<div class="col-sm-7">
									<input type="text" name="softdirectory" id="softdirectory" class="form-control" size="30" value="'.POSTval('softdirectory', (!empty($globals['no_prefill']) ? '' : $software['softname'])).'" />
								</div>
							</div><br />';
							
							// A data Directory ?
							if(!empty($datadir)){
							
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for="datadir" class="sai_head">'.$l['datadir'].'</label><br />
										<span class="sai_exp2">'.$l['datadir_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<input type="text" name="datadir" id="datadir" class="form-control" size="30" value="'.POSTval('datadir', $datadir).'" />
									</div>
								</div><br />';
							}
					
							if(!empty($dbtype)){
							
								$dbname = mysqldbname($software['softname']);
								
								if(method_exists($softpanel, 'mysqldbname')){
									$dbname = $softpanel->mysqldbname();
								}
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label for="softdb" class="sai_head">'.$l['database_name'].'</label><br />
										<span class="sai_exp2">'. ( aefer() ? $l['database_name_exp_aefer'] : $l['database_name_exp'] ) .'</span>
									</div>
									<div class="col-sm-7">
										<input type="text" name="softdb" id="softdb" class="form-control" size="30" value="'.POSTval('softdb', $dbname).'" onblur="checkdbname(\'softdb\', false)" />
										<span id="softdberror" style="background: #FDB3B3; display:none; width:200px;"></span>
									</div>
								</div><br />';
								
								if(!empty($softpanel->no_db_create)){
								
									// Database Username
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="dbusername" class="sai_head">'.$l['dbusername'].'</label><br />
											<span class="sai_exp2">'.$l['dbusername_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="dbusername" id="dbusername" class="form-control" size="30" value="'.POSTval('dbusername', '').'" />
										</div>
									</div><br />';
									
									// Database Password
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="dbuserpass" class="sai_head">'.$l['dbuserpass'].'</label><br />
											<span class="sai_exp2">'.$l['dbuserpass_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="dbuserpass" id="dbuserpass" class="form-control" size="30" value="'.POSTval('dbuserpass', '').'" />
										</div>
									</div><br />';
									
									//Database Host Name
									echo '
									<div class="row">
										<div class="col-sm-5">
											<label for="hostname" class="sai_head">'.$l['hostname'].'</label><br />
											<span class="sai_exp2">'.$l['hostname_exp'].'</span>
										</div>
										<div class="col-sm-7">
											<input type="text" name="hostname" id="hostname" class="form-control" size="30" value="'.POSTval('hostname', 'localhost').'" />
										</div>
									</div><br />';
								
								}
						
							}
						
							if(!empty($cron)){
								
								echo '
								<div class="row">
									<div class="col-sm-5">
										<span class="sai_head">'.$l['cron_job'].'</span><br />
										<span class="sai_exp2">'.$l['cron_job_exp'].'</span>
									</div>
									<div class="col-sm-7">
										<div class="row">
											<div class="col-sm-2">
												<span>'.$l['cron_min'].'</span>	
												<input type="text" class="form-control" name="cron_min" id="cron_min" size="2" value="'.POSTval('cron_min', $cron['min']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_hour'].'</span>
												<input type="text" class="form-control" name="cron_hour" id="cron_hour" size="2" value="'.POSTval('cron_hour', $cron['hour']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_day'].'</span>
												<input type="text" class="form-control" name="cron_day" id="cron_day" size="2" value="'.POSTval('cron_day', $cron['day']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_month'].'</span>
												<input type="text" class="form-control" name="cron_month" id="cron_month" size="2" value="'.POSTval('cron_month', $cron['month']).'" />
											</div>
											<div class="col-sm-2">
												<span>'.$l['cron_weekday'].'</span>
												<input type="text" class="form-control" name="cron_weekday" id="cron_weekday" size="2" value="'.POSTval('cron_weekday', $cron['weekday']).'" />
											</div>
										</div>
									</div>
								</div><br />';
							}
				
						
							if(!empty($overwrite_option)){
							
								echo '
								<div class="row">
									<div class="col-sm-5">
										<label class="sai_head">'.$l['overwrite'].'</label>
									</div>
									<div class="col-sm-7">
										<input type="checkbox" name="overwrite_existing" id="overwrite_existing" />
									</div>
								</div><br />';
							}
							echo '
							<br />
						</div>';
					
						// The Clone details form
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
							
							echo '
						
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
								
						</div><br /><br /><!--end of bg class-->
								
						<p align="center">
							<input type="hidden" name="softsubmit" id="softsubmit" value="'.$l['softsubmit'].'" />
							<input type="hidden" name="cloneins" id="cloneins" value="'.$l['cloneins'].'" />
							<input type="submit" name="softsubmitbut" class="flat-butt" id="softsubmitbut" value="'.$l['cloneins'].'" /><span id="show_txt" style="display:none;"></span>
						</p><br /><br />
					
						<input type="hidden" name="soft_status_key" id="soft_status_key" value="'.POSTval('soft_status_key', generateRandStr(32)).'" />
						
						<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br /><br />';	
				
					echo '
					</div><!--end of bg class-->
				</form>
			</div>
		
			<div id="progress_bar" style="display: none; width: 100%;">
				<br />
				<div class="bg">
					<center>
						<div class="row sai_main_head" style="width:100%;" align="center">
							<div class="col-sm-5 col-xs-5" style="padding:0 10px 0 0; text-align:right;">
								<i class="fa sai-copy fa-2x" style="color:#00A0D2;"></i>
							</div>
							<div class="col-sm-7 col-xs-7" style="padding-top:10px; padding-left:0; text-align:left;">'.$l['prog_cloning'].$software['name'].'</div>
						</div>
						<br />
						<font size="4" color="#222222" id="progress_txt" style="width: 100%;">'.$l['checking_data'].'</font>
						<font style="font-size: 18px;font-weight: 400;color: #444444; width: 100%;" id="progress_percent">(0 %)</font><br /><br />
					</center>
					<table width="500" cellpadding="0" cellspacing="0" id="table_progress" border="0" align="center" height="28" style="border:1px solid #CCC; -moz-border-radius: 5px;
					-webkit-border-radius: 5px; border-radius: 5px;background-color:#efefef; width: 50%;">
						<tr>
							<td id="progress_color" width="1" style="background-image: url('.$theme['images'].'bar.gif); -moz-border-radius: 4px; -webkit-border-radius: 4px; border-radius: 4px;"></td>
							<td id="progress_nocolor">&nbsp;</td>
						</tr>
					</table>
					<br />
					<center>'.$l['wait_note'].'</center><br /><br />
				</div><!--end of bg class--><br /><br />
			</div><br /><br /><br /><br />';
		
		echo '
		</div><br /><br />';
	}
	softfooter();

}

?>