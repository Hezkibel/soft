<?php

//////////////////////////////////////////////////////////////
//===========================================================
// import_theme.php
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


function import_theme(){

	global $user, $globals, $l, $theme, $softpanel, $iscripts, $catwise, $error, $scripts;
	global $software, $soft, $info, $settings, $softins, $dbtype, $dbs, $imported, $__settings, $setupcontinue, $installations, $notes, $protocols,  $ajaxhttpsexists, $ajaxhttps;
	
	if(!empty($ajaxhttps)){
		echo $ajaxhttpsexists;
		return true;
	}
	
	softheader($l['<title>'].$software['name']);
	
	//First add the installation info
	if(empty($imported)){
		
		echo '
		<link rel="stylesheet" type="text/css" href="'.$theme['url'].'/spectrum.css?'.$GLOBALS['globals']['version'].'" />
		<form accept-charset="'.$globals['charset'].'" name="importsoftware" method="post" action="" onsubmit="return checkform();" class="form-horizontal">
	
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			
			function checkhttps(proto_id, softdomain_id, alrt){ 
				try{
					var id = $_(proto_id);
					var proto = id.options[id.selectedIndex].text;
				
					$("#checkhttps_wait").css("display","inline-block");
					if(proto.indexOf("https") !== -1){
					
						 $.ajax({
							type: "POST",
							url: "'.$globals['index'].'act=import&soft='.$soft.'&checkhttps="+encodeURIComponent(proto+$_(softdomain_id).value),
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
						
						//AJAX("'.$globals['index'].'act=import&soft='.$soft.'&checkhttps="+id.options[id.selectedIndex].text+$_(softdomain_id).value, "is_https(re)");
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
			// ]]></script>
			
			<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
			
			function checkform(){
				try{
					if(!formcheck() || !checkdbname(\'softdb\', true)){
						return false;
					}
				}catch(e){
					//Do nothing
				}
				return true;
			};';
			
			echo '
			// ]]></script>';
			
			echo '
			<div class="bg"><br />
				<center><div class="sai_main_head" style="width:100%;"><img src="'.$globals['mirror_images'].'top15/48/'.$scripts[$soft]['softname'].'.png" > '.$l['import_soft'].' - '.$software['name'].'</div></center><hr>';
				
				error_handle($error, "100%");
				
				if(empty($softpanel->noprotocol) && empty($globals['hide_protocol'])){
					
					echo '
					<div class="row">
						<div class="col-sm-5">
							<label for="softproto" class="sai_head">'.$l['choose_protocol'].'</label>
							<span class="sai_exp">'.$l['choose_protocol_exp'].'</span>
						</div>
						<div class="col-sm-7">
							<select name="softproto" id="softproto" class="form-control" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
								foreach($protocols as $k => $v){
									echo '<option value="'.$k.'" '.(optPOST('softproto') == $k || ($globals['default_protocol'] == $k && empty($_POST['softproto'])) ? 'selected="selected"' : '').'>'.$v.'</option>';
								}
							echo '
							</select>
							<div style="display:none;" id="checkhttps_wait">&nbsp;&nbsp;<img src="'.$theme['images'].'progress.gif" alt="please wait.."></div><br />
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
						<label for="softdomain" class="sai_head">'.$l['choose_domain'].'</label>
						<span class="sai_exp">'.$l['choose_domain_exp'].'</span>
					</div>
					<div class="col-sm-7">
						<select name="softdomain" id="softdomain" class="form-control" onchange="softmail();" onblur="checkhttps(\'softproto\', \'softdomain\', false)">';
							foreach($softpanel->domainroots as $domain => $dompath){
								echo '<option value="'.$domain.'" '.((!empty($_POST['softdomain']) && $_POST['softdomain'] == $domain) ? 'selected="selected"' : '').'>'.$domain.'</option>';
							}
							// For PERL Append /cgi-bin/ in front of textbox
							$perl = ($iscripts[$soft]['type'] == 'perl' ? (empty($softpanel->user['cgi-bin']) ? '' : $softpanel->user['cgi-bin']) : '');
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
						<span style="font-size: 14px; color: #555;">'.(!empty($perl) ? $perl.'/' : '').'</span><input type="text" name="softdirectory" id="softdirectory" class="form-control" size="30" value="'.POSTval('softdirectory', '').'" />
					</div>
				</div><br />
			
				<p align="center">
					<input type="submit" class="flat-butt" name="softsubmit" value="'.$l['softsubmit'].'"/><br /><img id="waiting" src="'.$theme['images'].'progress.gif" style="display:none">
				</p><br />
				
				<center><b><a href="'.script_link($soft).'" class="sai_head">'.$l['return'].'</a></b></center><br />
			</div><!--end of bg class--><br />
		</form><br /><br />';
	
	}elseif(!empty($imported)){
	
		// Does the user have custom admin url for their installation
		$software['adminurl'] = !empty($__settings['admin_folder']) ? $__settings['admin_folder'] : @$software['adminurl'];
	
		echo '
		<div class="bg"><h4>'.$l['congrats'].'</h4><br />
			'.$software['name'].' '.$l['succesful'].' : <br />
			<a href="'.$__settings['softurl'].'" target="_blank">'.$__settings['softurl'].'</a>
			'.(!empty($software['adminurl']) ? '<br />'.$l['admin_url'].' : <a href="'.$__settings['softurl'].'/'.$software['adminurl'].'" target="_blank">'.$__settings['softurl'].'/'.$software['adminurl'].'</a>' : '').'<br /><br />
			'.$l['enjoy'].'<br /><br />
			'.(!empty($notes) ? $l['import_notes'].' : <br />
			<div class="sai_notes">'.softparse($notes, $soft).'</div><br /><br />' : '').'
			'.$l['please_note'].'<br /><br />
			'.$l['regards'].',<br />
			'.$l['softinstaller'].'
			<br /><br />
			<center><b><a href="'.script_link($soft).'&highlight='.$__settings['insid'].'&postact=import" class="sai_head">'.$l['return'].'</a></b></center>
		</div><!--end of bg class-->';
	
	}
	
	softfooter();

}

?>