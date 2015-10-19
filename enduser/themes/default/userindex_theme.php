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

function userindex_theme(){

	global $theme, $globals, $softpanel, $user, $l, $updates_available, $iscripts, $scripts ,$info, $cscripts;
	
	if($globals['softpanel'] == 'webuzo'){
		$usage = array();
		$usage['cpu'] = $softpanel->cpu();
		$usage['ram'] = $softpanel->ram();
		$usage['disk'] = $softpanel->disk();
		$usage['bandwidth'] = $softpanel->bandwidth();
		
		if(optGET('ajax')){
		
			echo 'var server_cpu = [
				{ label: "Used",  data: '.$usage['cpu']['percent'].'},
				{ label: "Free",  data: '.$usage['cpu']['percent_free'].'}
			];
			
			var server_ram = [
				{ label: "Used",  data: '.$usage['ram']['used'].'},
				{ label: "Free",  data: '.$usage['ram']['free'].'}
			];
			
			var server_disk = [
				{ label: "Used",  data: '.$usage['disk']['total']['used_gb'].'},
				{ label: "Free",  data: '.$usage['disk']['total']['free_gb'].'}
			];
			
			var server_bandwidth = [
				{ label: "Used",  data: '.(empty($usage['bandwidth']['used_gb']) ? 0.01 : $usage['bandwidth']['used_gb']).'},
				{ label: "Free",  data: '.(empty($usage['bandwidth']['free_gb']) ? $usage['bandwidth']['used_gb']*100 : $usage['bandwidth']['free_gb']).'}
			];';		
			return true;
		}
	}
	$__tmp = explode(':', (!empty($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : 'localhost'));
	$globals['HTTP_HOST'] = $__tmp[0];
	
	softheader($l['<title>'], 'js');
	
	/*For native UI support*/
	if(!empty($softpanel->pheader)){
		if(substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0){
			echo '
			<style>
				.row_usi {
				padding-left: 100px;
				padding-right: 5px;
				}
				
				.row_usi_warn {
				padding-left: 110px;
				padding-right: 30px;
				}
				
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding-left: 35px;
					padding-right: 0;
					}
					
					.row_usi_warn{
					padding-left: 55px;
					padding-right: 0;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.row_usi{
					padding: 0 20px;
					}
					
					.row_usi_warn{
					padding-left: 30px;
					padding-right: 5px;
					}
					
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi{
					padding: 0 115px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 120px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 360px) and (max-width: 767px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 25px;
					padding-right: 80px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 320px) and (max-width: 359px){
					.row_usi{
					padding: 0 10px;
					}
					
					.row_usi_warn{
					padding-left: 20px;
					padding-right: 40px;
					}
					
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.row_usi {
				padding: 0 35px;
				}
				
				.row_usi_warn {
				padding-left: 45px;
				padding-right: 40px;
				}
				
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 1280px) and (max-width: 1300px){
					.row_usi{
					padding: 0 35px;
					}
					
					.row_usi_warn{
					padding-left: 50px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 980px) and (max-width: 1279px){
					.row_usi{
					padding: 0 40px;
					}
					
					.row_usi_warn{
					padding-left: 55px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 979px){					
					.row_usi_warn{
					padding-left: 40px;
					padding-right: 40px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.row_usi {
					padding: 0 120px;
					}
					
					.row_usi_warn{
					padding-left: 130px;
					padding-right: 135px;
					}
					
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	echo '<script>
	$(document).ready(function(){
		
		var this_theme = "'.$theme['this_theme'].'";
		
		if(this_theme == "modern"){
			$("body").css("background-color", "#F8F8F8");
		}
		
		$(".sai_boxgrid").hover(function(){
			$(this).stop().animate({top:"-200px"},{queue:false,duration:200});
			
			}, function() {
				$(this).stop().animate({top:"0px"},{queue:true,duration:200});
		});
		
		$(".about").click(function(){
			$(".right_panel_two").fadeOut(1); 
			$(".right_panel_one").fadeIn(500);
		});
		$(".topscripts").click(function(){
			$(".right_panel_one").fadeOut(1); 
			$(".right_panel_two").fadeIn(500);
		});
		
		$("#news").attr("src", "https://www.softaculous.com/news.js");
		
		$("#inputs_searchs").bind("keyup",function(){
			
			var selfVal = $(this).val().toLowerCase();
							
			var compareDivs = $("td"); 		
			
			compareDivs.each(function(i, item){
		
				var id_tmp = item.id.toString();
				
				var search = id_tmp.substring(0,12);	 
						
				if(trim(search) == "webuzo_icons" && typeof $("#"+item.id).attr("value") != "undefined") {
					
					var divVal = $("#"+item.id).attr("value").toString().toLowerCase();				
					
					console.log(divVal);
					 
					if (divVal.indexOf(selfVal) < 0){
						
						if(selfVal == "") return;
						
						$("#"+item.id).hide();
						
					}else{
											
						$("#"+item.id).show();
					}			
				}
							
			});
			remove_unnecessary_tables_webuzo();
		});
		
	});
	
	function remove_unnecessary_tables_webuzo(){
		var no_script = 0;	
		
		for(var i = 1; i<=12;i++){
			
			var hide_chk = 0;
			var id = $($("#main_table"+i).find("tr").children());
			
			var td_length = $("#main_table"+i+" tr td").length;
			var tmp_td_length = $("#main_table"+i+" tr").children();
			
			tmp_td_length.each(function(i, item){
				
				if(trim($("#"+item.id).text()) == ""){
					td_length -= 1;
				}
			});	
			
			var tds = $("#main_table"+i+" tr").children();
			tds.each(function(i, item){
				if(typeof $("#"+item.id).attr("value") != "undefined"){
				
					var disp = $("#"+item.id).css("display");
					var disp_val = $("#"+item.id).attr("value").toString();			
					
					if(disp == "none"){
						hide_chk += 1;						
					}
				}
				
			});	
				
			if(hide_chk == td_length){			
				$("#main_div"+i).hide();			
				no_script += 1;			
			}else{
				$("#main_div"+i).show();
			}
		}
		
		if(no_script == 12){
			$("#show_none").show();		
		}else{
			$("#show_none").hide();
		}
	}
	</script>
	
	<script>
	function show_desc(element){
		var eid = (element.id).split("_");
		$("#saihover_"+eid[1]).css("opacity", 1);
	}
	
	function hide_desc(element){
		var eid = (element.id).split("_");
		$("#saihover_"+eid[1]).css("opacity", 0);
	}
	</script>';
		
	// top 10 scripts based on the rating formula 
	foreach($scripts as $k => $v){
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		$top[$k] = $v['ratings']*$v['votes'];
		
	}
	
	arsort($top);
	
	if(file_exists($globals['path'].'/conf/top_scripts.php') && !empty($globals['lictype'])){
		$top = unserialize(file_get_contents($globals['path'].'/conf/top_scripts.php'));
	}
	
	//r_print($globals);
	if(!empty($globals['show_cscript_in_top'])){
		//r_print($top_custom_list);
		foreach($cscripts as $ck => $cv){
			if(array_key_exists($ck, $iscripts)){
				$top_custom[$ck] = $ck;
			}
		}
		
		$tmp_top = $top;
		
		// Do we need to add any other default scripts ?
		if(!empty($top_custom)){	
			$top = $top_custom;
		}
		
		if(!empty($tmp_top)){
			$top += $tmp_top;
		}
	}
	
	foreach($scripts as $k => $v){
		
		// We have to remove the scripts which are not enabled AND yet coming from top_scripts.php (i.e. Admin have saved it from top scripts)
		if(!array_key_exists($k, $iscripts) && !empty($top[$k])){
			unset($top[$k]);
		}
		
		if(empty($iscripts[$k]) || (!empty($scripts[$k]['parent']) && !empty($iscripts[$scripts[$k]['parent']]))){
			continue;
		}
		
		$top[$k] = $v['ratings']*$v['votes'];
		
	}
	
	$ts_head1 = ((!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 'col-sm-11 col-xs-10' : 'col-sm-10 col-xs-10') : 'col-sm-11 col-xs-10'));
	
	$ts_head2 = ((!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 'col-sm-1 col-xs-2' : 'col-sm-2 col-xs-2') : 'col-sm-1 col-xs-2'));
	
	echo '
	<div>
		<div class="right_panel_two" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:none"' : '').'>
			<br />
			<div class="row">
				<div class="'.$ts_head1.'" style="text-align:center;">
					<span class="sai_main_head">'.$l['top_scrip'].'</span>
				</div>
					
				<div class="'.$ts_head2.'">
					<div class="about">
						<img src="'.$theme['images'].'info_star.png" width="30" height="30" class="someclass" title="About" style="border:none;"/>&nbsp;&nbsp;							
					</div>
				</div>
			</div>
			<hr>';
			
			if(!empty($updates_available)){	
				echo '
				<div class="row row_usi_warn">
				<div class="alert alert-warning" style="width:99%;">
					<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
					<center>
						<a href="'.$globals['ind'].'act=installations&showupdates=true" alt="" style="text-decoration:none;"><img src="'.$theme['images'].'notice.gif" /> &nbsp; '.lang_vars($l['updates_available'], array($updates_available)).'</a>
					</center>
				</div>
				</div>';
			}
			
			echo '
			<div class="row row_usi">
				<div class="col-md-1"></div>
				<div class="col-md-10">';
				
				$i = 0;
				$j = 1;		
				$url = $globals['mirror_images'];
				$url_i = $globals['mirror_images'].'top15/';
				
				foreach ($top as $k => $v) {		
					$demo_scriptname = str_replace(' ', '_', $scripts[$k]['name']);
					$ratings = array();
					$deduct = 1;
					$r = $scripts[$k]['ratings'];
				
					if($k > 10000){
						if(file_exists($globals['euthemes'].'/'.$globals['theme_folder'].'/images/topscripts/'.$iscripts[$k]['softname'].'.png')){
							$url_i = $theme['images'].'topscripts/'.$iscripts[$k]['softname'].'.png';
							$url_i32 = $theme['images'].'topscripts/32/'.$k.'__logo.gif';
						}else{
							$url_i = $theme['images'].'custom_script.png';
						}
						$image_name = $url_i;
					}else{
						$url_i = $globals['mirror_images'].'top15/';
						$url_i32 = $globals['mirror_images'].'softimages/32/'.$k.'__logo.gif';
						$image_name = $url_i.$iscripts[$k]['softname'].'.png';
					}
				
					for($i_r=1; $i_r<=5; $i_r++){		
						if($r >= 1){
							$ratings[$i_r] = '<img src="'.$theme['images'].'star_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
						}elseif($r > 0){
							$ratings[$i_r] = '<img src="'.$theme['images'].'halfstar_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
						}else{
							$ratings[$i_r] = '<img src="'.$theme['images'].'nostar_ts.png'.'" width="11" height="12" alt="('.number_format($scripts[$k]['ratings'], 2).' out of 5)" />';
						}
						$r = $r - $deduct;
					}	
					
					$ts_class = ((!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 'col-lg-4 col-md-6 col-sm-6 col-xs-12' : 'col-lg-6 col-md-6 col-sm-6 col-xs-12') : 'col-lg-4 col-md-4 col-sm-6 col-xs-12'));
						
					echo '
					<div class="'.$ts_class.'" style="padding-bottom: 20px;">
						<div class="sai_boxgrid2_ts">
							<div class="row" id="row_'.$j.'" style="height:80%; padding-top:5px;" onmouseover="show_desc(this);" onmouseout="hide_desc(this);">
								<div class="sai_block" id="saiblock_'.$j.'">
									<center>	
										<img class="cover" src="'.$image_name.'" class="img-responsive" /><br />
									</center>
								</div>
								
								<div class="sai_hover" id="saihover_'.$j.'">
									<a href="'.script_link($k, 1).'&tab=overview"><p style="height:75%;">'.(strlen($iscripts[$k]['desc']) > 120 ? substr($iscripts[$k]['desc'], 0, 116).'<br /><font size="2" color="#FFF">['.$l['more'].']</font>' : $iscripts[$k]['desc']).'</p></a>
									
									<div class="row">
										<div class="col-sm-4 col-xs-4">
											<a href="'.script_link($k, 1).'&tab=install" class="sai_insbut sai_insbutpad" style="text-decoration:none; padding:4px; vertical-align:bottom;">'.$l['install_button'].'</a>
										</div>
										
										<div class="col-sm-3 col-xs-3">
											<span>'.(empty($globals['off_demo_link']) ? '<a href="'.$globals['ind'].'act=demos&soft='.$k.'" target="_blank" class="sai_insbut_ts" style="vertical-align:bottom;"><b>'.$l['demo_button'].'</b></a>' : '').'</span>
										</div>
										
										<div class="col-sm-3 col-xs-3">
											<span><a href="'.script_link($k, 1).'&tab=overview" class="sai_insbut_ts" style="vertical-align:bottom;"><b>'.$l['overview_button'].'</b></a></span>
										</div>
									</div>
									
								</div>
							</div>
					
							<a href="'.script_link($k, 1).'&tab=overview" style="text-decoration:none;">
							<div class="row" id="row_ts_'.$j.'" style="height:20%; text-align:center; padding-top:3px; background-color:#ECECEC;">
								<font size="2" style="color:#717276;"><strong>'.$iscripts[$k]['name'].'</strong></font><br />
								'.(empty($globals['off_rating_link']) && $k < 10000 ? '<div class="sai_coverstars" style="margin-left:0;">'.implode('', $ratings).'</div>' : '').'
							</div>
							</a>
						</div>
					</div>';
						
					if($j == (!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 15 : 8) : 15)){
						break;
					}
					$j++;
					$i++;
				} 		
			echo '	
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>';		
		
		echo '
		<div class="right_panel_one" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? '' : 'style="display:none"').'>
			<br /><br />';
		
			if($globals['softpanel'] == 'webuzo'){
				
				global $apps;
				
				$ins_apps = $softpanel->loadinsapps();
				$def_mysql = $softpanel->getConf('WU_DEFAULT_MYSQL');
				$mysql = (!empty($def_mysql) ? $softpanel->get_app_record($def_mysql) : 16);
				
				$def_web_server = $softpanel->getConf('WU_DEFAULT_SERVER');
				$web_server = (!empty($def_web_server) ? $softpanel->get_app_record($def_web_server) : 3);
				$onlyapache = $softpanel->current_apache_id();	
				$onlyapache = (!empty($onlyapache) ? $onlyapache : 3);
				
				$disable_sysapps = $softpanel->is_sysapps_disable();
				
				echo'
				<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="'.$theme['url'].'/js/excanvas.min.js"></script><![endif]-->
				
				<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.min.js" type="text/javascript"></script>
				<script language="javascript" src="'.$theme['url'].'/js/jquery.flot.pie.min.js" type="text/javascript"></script>
				<link rel="stylesheet" type="text/css" href="https://images.softaculous.com/webuzo/sprites/32.css" />
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				
				function getusage(){
					if(AJAX("'.$globals['index'].'ajax=true", "server_graph_data(re)")){
						return false;
					}else{
						return true;	
					}
				};
				
				function startusage(){
					ajaxtimer = setInterval("getusage()", 5000);
				};	
				
				function server_graph_data(re){		
				
					var server_cpu = [
						{ label: "Used",  data: '.$usage['cpu']['percent'].'},
						{ label: "Free",  data: '.$usage['cpu']['percent_free'].'}
					];
					
					var server_ram = [
						{ label: "Used",  data: '.$usage['ram']['used'].'},
						{ label: "Free",  data: '.$usage['ram']['free'].'}
					];
					
					var server_disk = [
						{ label: "Used",  data: '.$usage['disk']['total']['used_gb'].'},
						{ label: "Free",  data: '.$usage['disk']['total']['free_gb'].'}
					];
					
					var server_bandwidth = [
						{ label: "Used",  data: '.(empty($usage['bandwidth']['used_gb']) ? 0.01 : $usage['bandwidth']['used_gb']).'},
						{ label: "Free",  data: '.(empty($usage['bandwidth']['free_gb']) ? $usage['bandwidth']['used_gb']*100 : $usage['bandwidth']['free_gb']).'}
					];
					
					if(re.length > 0){
						try{
							eval(re);
						}catch(e){ }
					}
					
					// Fill in the Text
					$_("server_cpu_text").innerHTML = server_cpu[0].data+"% / 100%";
					$_("server_ram_text").innerHTML = server_ram[0].data+" MB / "+(server_ram[0].data+server_ram[1].data)+" MB";
					$_("server_disk_text").innerHTML = server_disk[0].data+" GB / "+Math.round((server_disk[0].data+server_disk[1].data)*100)/100+" GB";
					$_("server_bandwidth_text").innerHTML = server_bandwidth[0].data+" GB / '.(empty($usage['bandwidth']['limit_gb']) ? $l['webuzo_unlimited'] : $usage['bandwidth']['limit_gb']." GB").'";
					
					// CPU
					server_graph("server_cpu", server_cpu);
					
					// RAM
					server_graph("server_ram", server_ram);
					
					// DISK
					server_graph("server_disk", server_disk);
					
					// Bandwidth
					server_graph("server_bandwidth", server_bandwidth);
				};	
				
				// Draw a Server Resource Graph
				function server_graph(id, data){		
				
					$.plot($("#"+id), data, 
					{
						series: {
							pie: { 
								innerRadius: 0.7,
								radius: 1,
								show: true,
								label: {
									show: true,
									radius: 0,
									formatter: function(label, series){
										if(label != "Used") return "";
										return \'<div style="font-size:13px;"><b>\'+Math.round(series.percent)+\'%</b></div><div style="font-size:9px;">\'+label+\'</div>\';	
									}
								}
							}
						},
						legend: {
							show: false
						}
					});
				}
				ids = ["'.implode('", "', array_keys($ins_apps)).'"];
				tools = ["phpmyadmin","rockmongo","squirrel", "tomcat", "monsta"];
				//alert(ids);
				
				function in_array(val, arr){
					
					for (var i in arr) {
						var tmp_val = arr[i].split("_");
						if(tmp_val[0] == val){
							return true;
						}
					}
					return false;
				}
				
				function is_app_inst(app_id, act){
					
					if(in_array(app_id, ids)){
						if(in_array(act, tools)){
							if(act == "tomcat"){
								window.open("http://'.$softpanel->getConf('WU_PRIMARY_DOMAIN').':8080/manager/", "_blank");
							}else{
								window.open(act+"/", "_blank");
							}
						}else{
							window.location = "index.php?act="+act;
						}
					}else{
						var r = confirm("'.$l['webuzo_install_utility'].'")
						if(r==true){
							'.(empty($disable_sysapps) ? 'window.location = "index.php?act=apps&app="+app_id;' : 'alert("'.$l['webuzo_sysapps_disabled'].'")').'
						}else{
							return true;
						}
					}
					
				}
					
				addonload("server_graph_data(\'void(0);\'); startusage();");
				// ]]></script>';
					
				echo '<center><span class="sai_newhead">'.( empty($globals['sn']) ? $l['webuzo'] : $globals['sn']).'</span>
				<br /><br />
					<form accept-charset="'.$globals['charset'].'" name="classsearch" method="post" action=""  id="classsearchform" class="sai_inputs">
						<input id="inputs_searchs" type="text" name="searchFeature" class="sai_inputs" autofocus placeholder="Search" autocomplete="off"><br />			
					</form><br /><br />
					<div id="show_none" class="sai_notice" style="text-align:center; display:none; width:500px;">'.$l['webuzo_no_search'].'</div></center>
			<table cellpadding="8" cellspacing="1" width="700px" align="center" border="0" id="main_table">	
				<tr id="main_div1">
					<td>
						<div margin:0px auto; >
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">			
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_domain'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%" valign="top">
										<table cellpadding="5" cellspacing="5" border="0" id="main_table1">
											<tr align="center">
												
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons11" value="'.$l['webuzo_mandom'].'">
														<a href="'.$globals['ind'].'act=domainmanage" ><img src="'.$theme['a_images'].'domains.gif" alt="" /><br />'.$l['webuzo_mandom'].'</a>
													</td>
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons12" value="'.$l['webuzo_adddom'].'">
														<a href="javascript:void(0)" onclick="is_app_inst(34, \'domainadd\'); return;"><img src="'.$theme['a_images'].'adddomain.gif" alt="" /><br />'.$l['webuzo_adddom'].'</a>	
													</td>					
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons13" value="'.$l['webuzo_advance_dns'].'">
														<a href="javascript:void(0)" onclick="is_app_inst(34, \'advancedns\'); return;"><img src="'.$theme['a_images'].'advancedns.gif" alt="" /><br />'.$l['webuzo_advance_dns'].'</a>	
													</td>									
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons14" value="'.$l['webuzo_network_tools'].'">
														<a href="'.$globals['ind'].'act=network_tools"><img src="'.$theme['a_images'].'network_tools.gif" alt="" /><br />'.$l['webuzo_network_tools'].'</a>	
													</td>								
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons15" value="'.$l['webuzo_extra_conf'].'">
														<a href="'.$globals['ind'].'act=extra_conf"><img src="'.$theme['a_images'].'extra_conf.gif" alt="" /><br />'.$l['webuzo_extra_conf'].'</a>	
													</td>												
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr id="main_div2">
					<td>
						<div margin:0px auto; >
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">			
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_mysql'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top">
										<table cellpadding="5" cellspacing="5" border="0" id="main_table2">
											<tr align="center">
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons21" value="'.$l['webuzo_mandb'].'">
													<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'dbmanage\'); return;"><img src="'.$theme['a_images'].'database.gif" alt="" /><br />'.$l['webuzo_mandb'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons22" value="'.$l['webuzo_adddb'].'">
													<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'dbmanage#adddb\'); return;"><img src="'.$theme['a_images'].'adddb.gif" alt="" /><br />'.$l['webuzo_adddb'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons23" value="'.$l['webuzo_phpmyadmin'].'">
													<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'phpmyadmin\'); return;"><img src="'.$theme['a_images'].'phpmyadmin.gif" alt="" /><br />'.$l['webuzo_phpmyadmin'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons24" value="'.$l['ampps_rockmongo'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(39, \'rockmongo\'); return;"><img src="'.$theme['a_images'].'rockmongo.gif" alt="RockMongo" /><br />'.$l['ampps_rockmongo'].'</a>
												</td>									
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons25">										
												</td>																									
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>	
				<tr id="main_div3">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_cat_ftp'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table3">
											<tr align="center">																	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons31" value="'.$l['webuzo_ftp'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp\'); return;"><img src="'.$theme['a_images'].'ftp.gif" alt="" /><br />'.$l['webuzo_ftp'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons32" value="'.$l['webuzo_ftp_account'].'">		
													<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp_account\'); return;"><img src="'.$theme['a_images'].'addftp.gif" alt="" /><br />'.$l['webuzo_ftp_account'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons33" value="'.$l['webuzo_web_ftp'].'">		
													<a href="javascript:void(0)" onclick="is_app_inst(31, \'monsta\'); return;"><img src="'.$theme['a_images'].'web_ftp.gif" alt="" /><br />'.$l['webuzo_web_ftp'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons34" value="'.$l['webuzo_ftp_connections'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(31, \'ftp_connections\'); return;"><img src="'.$theme['a_images'].'ftp_connections.gif" alt="" /><br />'.$l['webuzo_ftp_connections'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons35">
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>';
				
				$tmpapps = $apps;
				foreach($tmpapps as $key => $val){
					if(array_key_exists($key.'_1', $ins_apps) || $val['type'] == 'library'){
						unset($tmpapps[$key]);
					}
				}
				
				// Hope all the apps are not installed !!!
				if(!empty($tmpapps) && empty($disable_sysapps)){
					
					shuffle($tmpapps);
					
				echo '
				<tr id="main_div4">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_install_sysapps'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table4">
											<tr align="center">';
												
												$cnt = 0;
												while(($cnt < 5)){
													
													// Blank fields - If any !!!
													if(empty($tmpapps[$cnt]['aid'])){
														echo '
														<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons4'.$cnt.'">
														</td>';
														$cnt++;
														continue;
													}
													
													echo '
														<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons4'.$cnt.'" value="'.$tmpapps[$cnt]['name'].'">
															<a href="?act=apps&app='.$tmpapps[$cnt]['aid'].'"><div class="sp32_'.$tmpapps[$cnt]['softname'].'"></div><br />'.$tmpapps[$cnt]['name'].'</a>
														</td>';
													$cnt++;
													
												}
												echo '
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>';
				}
				echo '
				<tr id="main_div5">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_ssl'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table5">
											<tr>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons51" value="'.$l['webuzo_key'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslkey\'); return;"><img src="'.$theme['a_images'].'sslkey.gif" alt="" /><br />'.$l['webuzo_key'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons52" value="'.$l['webuzo_csr'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslcsr\'); return;"><img src="'.$theme['a_images'].'sslcsr.gif" alt="" /><br />'.$l['webuzo_csr'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons53" value="'.$l['webuzo_crt'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(4, \'sslcrt\'); return;"><img src="'.$theme['a_images'].'sslcrt.gif" alt="" /><br />'.$l['webuzo_crt'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons54" value="'.$l['webuzo_install_cert'].'">
													<a href="javascript:void(0)" onclick="is_app_inst('.$web_server.', \'install_cert\'); return;"><img src="'.$theme['a_images'].'install_cert.gif" alt="" /><br />'.$l['webuzo_install_cert'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons55">
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr id="main_div6">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_cat_email'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table6">
											<tr>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons61" value="'.$l['webuzo_email_acc'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(35, \'email_account\'); return;"><img src="'.$theme['a_images'].'email_account.gif" alt="" /><br />'.$l['webuzo_email_acc'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons62" value="'.$l['webuzo_email_forward'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(35, \'email_forward\'); return;"><img src="'.$theme['a_images'].'email_forward.gif" alt="" /><br />'.$l['webuzo_email_forward'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons63" value="'.$l['webuzo_mx_entry'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(34, \'mxentry\'); return;"><img src="'.$theme['a_images'].'mx_entry.gif" alt="" /><br />'.$l['webuzo_mx_entry'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons64" value="'.$l['webuzo_squirrel'].'">		
													<a href="javascript:void(0)" onclick="is_app_inst(35, \'squirrel\'); return;"><img src="'.$theme['a_images'].'squirrel.gif" alt="" /><br />'.$l['webuzo_squirrel'].'</a><br />
												</td>	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons65" value="'.$l['webuzo_email'].'">		
													<a href="'.$globals['ind'].'act=email"><img src="'.$theme['a_images'].'emails.gif" alt="" /><br />'.$l['webuzo_email'].'</a>
												</td>	
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>';
				
				if(empty($disable_sysapps)){
				
				echo '
				<tr id="main_div7">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_configuration'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table7">
											<tr>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons71" value="'.$l['webuzo_php'].'">
													<a href="'.$globals['ind'].'act=editini"><img src="'.$theme['a_images'].'php_conf.gif" alt="" /><br />'.$l['webuzo_php'].'</a>
												</td>									
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons72" value="'.($softpanel->getConf('WU_DEFAULT_SERVER')== 'nginx' ? $l['webuzo_nginx'] : ($softpanel->getConf('WU_DEFAULT_SERVER')== 'lighttpd' ? $l['webuzo_lighttpd'] : $l['webuzo_apache'])).'">
											'.($softpanel->getConf('WU_DEFAULT_SERVER')== 'nginx' ? '<a href="javascript:void(0)" onclick="is_app_inst(18, \'apache_conf\'); return;"><img src="'.$theme['a_images'].'nginx_conf.gif" alt="" /><br />'.$l['webuzo_nginx'].'</a>' : ($softpanel->getConf('WU_DEFAULT_SERVER')== 'lighttpd' ? '<a href="javascript:void(0)" onclick="is_app_inst(60, \'apache_conf\'); return;"><img src="'.$theme['a_images'].'lighttpd_conf.gif" alt="" /><br />'.$l['webuzo_lighttpd'].'</a>' :'<a href="javascript:void(0)" onclick="is_app_inst('.$onlyapache.', \'apache_conf\'); return;"><img src="'.$theme['a_images'].'apache_conf.gif" alt="" /><br />'.$l['webuzo_apache'].'</a>' )).'										
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons73" value="'.$ins_apps[$mysql.'_1']['name'].'">
													<a href="javascript:void(0)" onclick="is_app_inst('.$mysql.', \'mysql_conf\'); return;"><img src="'.$theme['a_images'].$mysql.'_icon.gif" alt="" /><br />'.$ins_apps[$mysql.'_1']['name'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons74" value="'.$l['webuzo_php_ext'].'">
													<a href="'.$globals['ind'].'act=php_ext"><img src="'.$theme['a_images'].'php_ext.gif" alt="" /><br />'.$l['webuzo_php_ext'].'</a>
												</td>
												';
												if($softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd'){
													echo '<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons75" value="'.$l['apache_settings'].'">
														<a href="javascript:void(0)" onclick="is_app_inst(3, \'apache_settings\'); return;"><img src="'.$theme['a_images'].'apache_settings.gif" alt="" /><br />'.$l['apache_settings'].'</a>
													</td>';
												}elseif($softpanel->getConf('WU_DEFAULT_SERVER') == 'nginx'){
													echo '<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons75" value="'.$l['nginx_settings'].'">
														<a href="javascript:void(0)" onclick="is_app_inst(18, \'apache_settings\'); return;"><img src="'.$theme['a_images'].'nginx_settings.gif" alt="" /><br />'.$l['nginx_settings'].'</a>
													</td>';
												}else{
													echo '<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons75">
													</td>	';										
												}
												echo '									
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>';
				
				}
				echo '
				<tr id="main_div8">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_cat_security'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table8">
											<tr>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons81" value="'.$l['webuzo_pass'].'">
													<a href="'.$globals['ind'].'act=changepassword"><img src="'.$theme['a_images'].'changepassword.gif" alt="" /><br />'.$l['webuzo_pass'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons82" value="'.$l['webuzo_ip_block'].'">
													<a href="'.$globals['ind'].'act=ipblock"><img src="'.$theme['a_images'].'ip_block.gif" alt="" /><br />'.$l['webuzo_ip_block'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons83" value="'.$l['webuzo_csf'].'">	
													<a href="javascript:void(0)" onclick="is_app_inst(62, \'csf_conf\'); return;"><img src="'.$theme['a_images'].'firewall.gif" alt="" /><br />'.$l['webuzo_csf'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons84" value="'.$l['webuzo_ssh_access'].'">
													<a href="'.$globals['ind'].'act=ssh_access"><img src="'.$theme['a_images'].'ssh_login.gif" alt="" /><br />'.$l['webuzo_ssh_access'].'</a>
												</td>';
												
												if($softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd' || $softpanel->getConf('WU_DEFAULT_SERVER') == 'httpd2'){
													echo '										
													<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons85" value="'.$l['webuzo_pass_protect_dir'].'">
														<a href="'.$globals['ind'].'act=pass_protect_dir"><img src="'.$theme['a_images'].'pass_protect_dir.gif" alt="" /><br />'.$l['webuzo_pass_protect_dir'].'</a>
												</td>';
												
												}else{
													
													echo '
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons85">										
													</td>';
													
												}
											echo '</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr id="main_div9">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_advance_setting'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table9">
											<tr>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons91" value="'.$l['webuzo_apps_updates'].'">
													<a href="'.$globals['ind'].'act=apps_updates"><img src="'.$theme['a_images'].'apps_updates.gif" alt="" /><br />'.$l['webuzo_apps_updates'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons92" value="'.$l['webuzo_settings'].'">
													<a href="'.$globals['ind'].'act=settings"><img src="'.$theme['a_images'].'settings.gif" alt="" /><br />'.$l['webuzo_settings'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons93" value="'.$l['webuzo_cron'].'">
													<a href="'.$globals['ind'].'act=cronjob"><img src="'.$theme['a_images'].'cronjob.gif" alt="" /><br />'.$l['webuzo_cron'].'</a>
												</td>	
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons94" value="'.$l['webuzo_system_utilities'].'">
													<a href="'.$globals['ind'].'act=service_manager"><img src="'.$theme['a_images'].'service_manager.gif" alt="" /><br />'.$l['webuzo_system_utilities'].'</a>
												</td>
												';
												if(empty($disable_sysapps)){
													echo '
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons95" value="'.$l['webuzo_services'].'">		
													<a href="'.$globals['ind'].'act=services"><img src="'.$theme['a_images'].'services.gif" alt="" /><br />'.$l['webuzo_services'].'</a>
												</td>';
												
												}else{
													
													echo '
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons95">										
													</td>';
													
												}
												echo '	
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr id="main_div10">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_server_setting'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table10">
											<tr>									
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons101" value="'.$l['webuzo_filemanager'].'">
													<a href="filemanager/" target="_blank"><img src="'.$theme['a_images'].'filemanager.gif" alt="" /><br />'.$l['webuzo_filemanager'].'</a>
												</td>									
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons102" value="'.$l['webuzo_awstats'].'">
													<a href="javascript:void(0)" onclick="is_app_inst(38, \'awstats\'); return;"><img src="'.$theme['a_images'].'awstats.gif" alt="" /><br />'.$l['webuzo_awstats'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons103" value="'.$l['webuzo_login_logs'].'">
													<a href="'.$globals['ind'].'act=login_logs"><img src="'.$theme['a_images'].'login_logs.gif" alt="" /><br />'.$l['webuzo_login_logs'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons104" value="'.$l['webuzo_import_cpanel'].'">
													<a href="'.$globals['ind'].'act=import_cpanel"><img src="'.$theme['a_images'].'import_cpanel.gif" alt="" /><br />'.$l['webuzo_import_cpanel'].'</a>
												</td>';
												
												// Hide it if tomcat is not installed and DISABLED_SYSAPPS
												if(!empty($disable_sysapps) && empty($ins_apps['37_1'])){
													echo '
													<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons105">										
													</td>';
												}else{
													echo '
													<td class="webuzo_icons" align="center" valign="top"  width="140px" id="webuzo_icons105" value="'.$l['webuzo_apache_tomcat'].'">
														<a href="javascript:void(0)" onclick="is_app_inst(37, \'tomcat\'); return;"><img src="'.$theme['a_images'].'apache_tomcat.gif" alt="" /><br />'.$l['webuzo_apache_tomcat'].'</a>										
													</td>';	
												}
												echo '
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr id="main_div11">
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_server_info'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top" >
										<table cellpadding="5" cellspacing="5" border="0" id="main_table11">
											<tr>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons111" value="'.$l['webuzo_cpu'].'">
													<a href="'.$globals['ind'].'act=cpu"><img src="'.$theme['a_images'].'cpu.gif" alt=""/><br />'.$l['webuzo_cpu'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons112" value="'.$l['webuzo_ram'].'">	
													<a href="'.$globals['ind'].'act=ram"><img src="'.$theme['a_images'].'ram.gif" alt=""/><br />'.$l['webuzo_ram'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons113" value="'.$l['webuzo_disk'].'">
													<a href="'.$globals['ind'].'act=disk"><img src="'.$theme['a_images'].'disk.gif" alt=""/><br />'.$l['webuzo_disk'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons114" value="'.$l['webuzo_bandwidth'].'">
													<a href="'.$globals['ind'].'act=bandwidth"><img src="'.$theme['a_images'].'bandwidth.gif" alt=""/><br />'.$l['webuzo_bandwidth'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons115" value="'.$l['webuzo_error_log'].'">
													<a href="'.$globals['ind'].'act=errorlog"><img src="'.$theme['a_images'].'error_log.gif" alt=""/><br />'.$l['webuzo_error_log'].'</a>
												</td>	
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td id="main_div12">
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr>
									<td class="sai_heading_full" align="center" >
										<b>'.$l['webuzo_scripts'].'</b>
									</td>
								</tr>		
								<tr>
									<td width="100%"  valign="top">
										<table cellpadding="5" cellspacing="5" border="0" id="main_table12">
											<tr>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons121" value="'.$l['webuzo_demos'].'">
													<a href="'.$globals['ind'].'act=demos"><img src="'.$theme['a_images'].'demos.gif" alt="" /><br />'.$l['webuzo_demos'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons122" value="'.$l['webuzo_ratings'].'">
													<a href="'.$globals['ind'].'act=ratings"><img src="'.$theme['a_images'].'ratings.gif" alt="" /><br />'.$l['webuzo_ratings'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons123" value="'.$l['webuzo_installations'].'">
													<a href="'.$globals['ind'].'act=installations"><img src="'.$theme['a_images'].'installations.gif" alt="" /><br />'.$l['webuzo_installations'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons124" value="'.$l['webuzo_backups'].'">
													<a href="'.$globals['ind'].'act=backups"><img src="'.$theme['a_images'].'backups.gif" alt="" /><br />'.$l['webuzo_backups'].'</a>
												</td>
												<td class="webuzo_icons" align="center" valign="top" width="140px" id="webuzo_icons125">
												</td>	
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				<tr>
					<td>
						<div margin:0px auto;>
							<table width="100%" cellpadding="5" cellspacing="1" class="sai_divroundshad">	
								<tr class="sai_heading_full">
									<th align="center" width="25%" style="height:25px">'.$l['webuzo_cpuinfo'].'</th>
									<th align="center" width="25%">'.$l['webuzo_raminfo'].'</th>
									<th align="center" width="25%">'.$l['webuzo_diskinfo'].'</th>
									<th align="center" width="25%">'.$l['webuzo_bandwidthinfo'].'</th>
								</tr>
								<tr>
									<td align="center" valign="top"><br />
										<div id="server_cpu" class="server_graph"></div>
										<br /><div id="server_cpu_text">&nbsp;</div>
									</td>
									<td align="center"  valign="top"><br />
										<div id="server_ram" class="server_graph"></div>
										<br /><div id="server_ram_text">&nbsp;</div>
									</td>				
									<td align="center" valign="top"><br />
										<div id="server_disk" class="server_graph"></div>
										<br /><div id="server_disk_text">&nbsp;</div>
									</td>
									<td align="center" valign="top"><br />
										<div id="server_bandwidth" class="server_graph"></div>
										<br /><div id="server_bandwidth_text">&nbsp;</div><br />
									</td>
								</tr>					
							</table>
						</div>
					</td>
				</tr>	
			</table>
			<br /><br /><br />';
			
			}elseif($globals['softpanel'] == 'ampps'){
				$BinVer = $softpanel->currentBinary();
				echo '<center><span class="sai_newhead">'.$l['ampps'].'</span></center><br />
			<table cellpadding="8" cellspacing="1" border="0">
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_config'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			<tr>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=secure"><img src="'.$theme['a_images'].'secure.gif" alt="" /><br />'.$l['ampps_secure'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=security"><img src="'.$theme['a_images'].'security.gif" alt="" /><br />'.$l['ampps_security'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=status"><img src="'.$theme['a_images'].'status.gif" alt="" /><br />'.$l['ampps_status'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=ampps_domainmanage"><img src="'.$theme['a_images'].'domains.gif" alt="" /><br />'.$l['ampps_mandom'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=ampps_domainadd"><img src="'.$theme['a_images'].'adddomain.gif" alt="" /><br />'.$l['ampps_adddom'].'</a>
				</td>
			</tr>
			
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_mysql'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			<tr>
				<td class="ampps_icons" align="center" valign="top">
					<a href="http://'.$globals['HTTP_HOST'].'/sqlite" target="_blank"><img src="'.$theme['a_images'].'sqlite.gif" alt="" /><br />'.$l['ampps_sqlite'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="http://'.$globals['HTTP_HOST'].'/phpmyadmin/index.php?server=1&target=server_databases.php" target="_blank"><img src="'.$theme['a_images'].'adddb.gif" alt="" /><br />'.$l['ampps_adddb'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="http://'.$globals['HTTP_HOST'].'/phpmyadmin" target="_blank"><img src="'.$theme['a_images'].'phpmyadmin.gif" alt="phpMyAdmin" /><br />'.$l['ampps_phpmyadmin'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=mysqlsettings"><img src="'.$theme['a_images'].'mysqlsettings.gif" alt="Change Password" /><br />'.$l['ampps_mysqlsettings'].'</a>
				</td>';
				
				if($BinVer > 15){
					echo '<td class="ampps_icons" align="center" valign="top">
						<a href="http://'.$globals['HTTP_HOST'].'/rockmongo" target="_blank"><img src="'.$theme['a_images'].'rockmongo.gif" alt="RockMongo" /><br />'.$l['ampps_rockmongo'].'</a>
					</td>';
				}
			echo '</tr>
			
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_features'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			<tr>';
				if($BinVer > 15){
					echo '<td class="ampps_icons" align="center" valign="top">
						<a href="'.$globals['ind'].'act=alias"><img src="'.$theme['a_images'].'alias.gif" alt="" /><br />'.$l['ampps_alias'].'</a>
					</td>';
				}
				if($BinVer > 16){
					echo '<td class="webuzo_icons" align="center" valign="top">
						<a href="'.$globals['ind'].'act=ftpmanage"><img src="'.$theme['images'].'ftp.gif" alt="" /><br />'.$l['ampps_ftp'].'</a>
					</td>
					<td class="webuzo_icons" align="center" valign="top">
						<a href="'.$globals['ind'].'act=ftpadd"><img src="'.$theme['a_images'].'addftp.gif" alt="" /><br />'.$l['ampps_ftp_account'].'</a>
					</td>';
				}
			echo '</tr>
			
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_info'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			<tr>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.(($BinVer) < 21 ? $globals['ind'].'act=phpinfo' : 'http://'.$globals['HTTP_HOST'].'/cgi-bin/phpinfo.cgi').'"><img src="'.$theme['a_images'].'phpinfo.gif" alt="" /><br />'.$l['ampps_phpinfo'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="http://'.$globals['HTTP_HOST'].'/cgi-bin/perlinfo.pl"><img src="'.$theme['a_images'].'perlinfo.gif" alt="" /><br />'.$l['ampps_perlinfo'].'</a>
				</td>
			</tr>
			
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_quick_conf'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			
			<tr>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=editini"><img src="'.$theme['a_images'].'php_conf.gif" alt="" /><br />'.$l['ampps_php'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top"  width="140px">
					<a href="'.$globals['ind'].'act=apache_conf"><img src="'.$theme['a_images'].'apache_conf.gif" alt="" /><br />'.$l['ampps_apache'].'</a>
				</td>
			</tr>
			
			
			<tr>
				<td colspan="20">	
					<span class="sai_newhead">'.$l['ampps_scripts'].'</span>
					<img src="'.$theme['images'].'hr.jpg" width="100%" height="1" alt="" /><br /><br />	
				</td>
			</tr>
			
			<tr>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=demos"><img src="'.$theme['images'].'demos.gif" alt="" /><br />'.$l['ampps_demos'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=ratings"><img src="'.$theme['images'].'ratings.gif" alt="" /><br />'.$l['ampps_ratings'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=installations"><img src="'.$theme['images'].'installations.gif" alt="" /><br />'.$l['ampps_installations'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">
					<a href="'.$globals['ind'].'act=backups"><img src="'.$theme['images'].'backups.gif" alt="" /><br />'.$l['ampps_backups'].'</a>
				</td>
				<td class="ampps_icons" align="center" valign="top">		
					<a href="'.$globals['ind'].'act=email"><img src="'.$theme['images'].'emails.gif" alt="" /><br />'.$l['ampps_email'].'</a>
				</td>
			</tr>
			</table>
			<br /><br /><br />';
			
			}else{
				$info_head1 = ((!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 'col-md-11 col-sm-10 col-xs-9' : 'col-md-10 col-sm-10 col-xs-9') : 'col-md-11 col-sm-10 col-xs-9'));
			
				echo 
				'<div class="bg bg_usi"><br />
					<div class="row">
						<div class="'.$info_head1.'" style="text-align:center;">
							<span class="sai_newhead">'.$globals['sn'].'</span>
						</div>
							
						<div class="topscripts">
							<img src="'.$theme['images'].'top_star.png" width="30" height="30" class="someclass" title="Top Scripts" style="border:none;"/>&nbsp;&nbsp;							
						</div>
					</div>
					
					<hr><br />
				
					<div class="row">
						<div style="width:20%; float:left;">
							<img src="'.$theme['images'].'autoinstaller.jpg" alt="" class="img-responsive"/>
						</div>
						<div style="width:80%; float:right; padding:0 20px;">
							<font class="sai_newhead">'.$l['auto_installer'].'</font>
							<br /><br />
							<font class="sai_feature_exp">'.$l['auto_installer_exp'].'</font>
						</div>
					</div>
					
					<br /><br />
				
					<div class="row">
						<div style="width:80%; float:left; padding-right:50px;">		
							<font class="sai_newhead">'.$l['view_demos'].'</font>
							<br /><br />
							<font class="sai_feature_exp">'.$l['view_demos_exp'].'</font>
						</div>
						<div style="width:20%; float:right;">	
							<a href="'.$globals['ind'].'act=demos"><img src="'.$theme['images'].'exp_demos.gif" alt="" class="img-responsive"/></a>
						</div>
					</div>
					
					<br /><br />
				
					<div class="row">
						<div style="width:20%; float:left;">	
							<a href="'.$globals['ind'].'act=ratings"><img src="'.$theme['images'].'rate_it.jpg" alt="" class="img-responsive"/></a>
						</div>
						<div style="width:80%; float:right; padding:0 20px;">	
							<font class="sai_newhead">'.$l['rate_it'].'</font>
							<br /><br />
							<font class="sai_feature_exp">'.$l['rate_it_exp'].'</font>
						</div>
					</div>
					
					<br /><br />
				
					<div class="row">
						<div style="width:80%; float:left; padding-right:50px;">
							<font class="sai_newhead">'.$l['build_sites'].'</font>
							<br /><br />
							<font class="sai_feature_exp">'.$l['build_sites_exp'].'</font>
						</div>
						<div style="width:20%; float:right;">	
							<img src="'.$theme['images'].'build.jpg" alt="" class="img-responsive"/>
						</div>
					</div><br /><br />
				</div><!--end of bg class-->';
			}
			//THIS IS THE CLOSING OF TAB2 DIV
		echo '
		</div>
	</div>';
	
	// news updates box
	if(empty($globals['eu_news_off'])){
	
		echo '<script language="javascript" type="text/javascript"  id="news"></script>
		
		<script type="text/javascript">
		function load_soft_info(){
			if(!$_("softnews")){ // Is the news DIV there ?
				return true;
			}
			$_("softnews").style.width = $_("softnewsholder").offsetWidth;
			
			//The news
			
			if(typeof(soft_news) == "undefined"){
				$_("softnews").innerHTML = "'.$l['conect_to_soft'].'";
			}else{
				var newsstr = "";
				for(x in soft_news){
					newsstr = newsstr+\'<div class="softnewshead">\'+soft_news[x][0]+\'</div>\'+\'<div class="softnewsblock">\'+soft_news[x][1]+\'</div><br />\';
				}
				$_("softnews").innerHTML = newsstr;
			}
		}
		addonload(\'load_soft_info();\');
		
		</script>
		<table width="100%" border="0" cellspacing="0" cellpadding="0" >	
			<tr>
				<td style="padding-top:40px;" colspan="3">
					<table width="90%" align="center" border="0" cellspacing="0" cellpadding="0" >
						<tr>
							<td class="news_content_header">
								'.$l['news'].'
							</td>
						</tr>
						<tr>
							<td id="softnewsholder">
								<div class="news_content">
									<div class="softnews" id="softnews"'.(!empty($softpanel->pheader) ? 'style="overflow: auto;width:auto"' : '').'></div>
								</div>
							</td>
						</tr>
					</table>
				</td>
			</tr>
		</table>';
	
	}
	softfooter();

}

function js_userindex_theme(){

	global $theme, $globals, $softpanel, $user, $l;
	
	softheader($l['<title>']);
	
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'javascripts.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['javascriptify'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['javascriptify_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_ajax'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_ajax_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'ajax.jpg" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" class="img-responsive"/>
		
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['cross_browser'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['cross_browser_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'crossbrowser.jpg" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'jscode.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['code_poetry'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['code_poetry_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();

}

function perl_userindex_theme(){
	global $theme, $globals, $softpanel, $user, $l;
	softheader($l['<title>']);
	echo '
	<div class="bg bg_usi"><br />
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'perl.jpg" alt="" class="img-responsive"/>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['glimpse_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['perl_exp'].'</font>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:80%; float:left; padding-right:50px;">
				<font class="sai_newhead">'.$l['served_cgi'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['served_cgi_exp'].'</font>
			</div>
			<div style="width:20%; float:right;">
				<img src="'.$theme['images'].'poc.png" alt="" class="img-responsive"/>
			</div>
		</div>
		
		<br /><br />
		
		<div class="row">
			<div style="width:20%; float:left;">
				<img src="'.$theme['images'].'chess.png" alt="" id="dragme" style="position:relative;" class="img-responsive"/>
				
				<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>
				
				<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
				Drag.init($_("dragme"), $_("dragme"));
				// ]]>
				</script>
			</div>
			<div style="width:80%; float:right; padding:0 20px;">
				<font class="sai_newhead">'.$l['play_demos_perl'].'</font>
				<br /><br />
				<font class="sai_feature_exp">'.$l['play_demos_perl_exp'].'</font>
			</div>
		</div>
		<br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function classes_userindex_theme(){
	
	global $theme, $globals, $softpanel, $user, $l;
	$globals['mode'] = 'classes';
	softheader($l['<title>']);
	
	if(!empty($softpanel->pheader)){
		if(substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0){
			echo '
			<style>
				.sai_inputs_cls input{
				width:280px;
				}
				
				.sai_suggestions_cls{
				width:280px;
				}
				
				.row_usi_cls {
				padding-left: 50px;
				}
				
				@media screen and (min-width: 320px) and (max-width: 767px){
					.sai_inputs_cls input{
					width:130px;
					}
					
					.sai_suggestions_cls{
					width:130px;
					}
					
					.row_usi_cls {
					padding-left: 0;
					}
					
					.sai_classes_boxgrid{
					width:250px;
					}
					
					.sai_classes_boxgrid2{
					width:250px;
					}
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
				
				@media screen and (min-width: 800px) and (max-width: 980px){
					.sai_inputs_cls input{
					width:250px;
					}
					
					.sai_suggestions_cls{
					width:250px;
					}
				}
			</style>';
		}else{
			echo '
			<style>
				.sai_inputs_cls input{
				width:190px;
				}
				
				.sai_suggestions_cls{
				width:190px;
				}
				
				.row_usi_cls {
				padding-left: 80px;
				}
				
				@media screen and (min-width: 768px) and (max-width: 799px){
					.sai_inputs_cls{
					padding-left:70px;	
					}
					
					.sai_inputs_cls input{
					width:300px;
					}
					
					.sai_suggestions_cls{
					width:300px;
					}
					
					.row_usi_cls {
					padding-left: 180px;
					}
				}
			</style>';
		}
	}
	
	$tc_class = ((!empty($softpanel->pheader) ? ((substr_count($_SERVER['REQUEST_URI'], 'paper_lantern')> 0) ? 'col-lg-6 col-md-6 col-sm-12 col-xs-12' : 'col-lg-12 col-md-12 col-sm-12 col-xs-12') : 'col-lg-4 col-md-4 col-sm-12 col-xs-12'));
	
	echo '
	<div class="bg bg_usi">
		<br />
		
		<script>
		$(document).ready(function(){
			$("#tab2").hide();
			$("#about").click(function(){
				$("#tab1").fadeOut(1); 
				$("#tab2").fadeIn(500);
			});
			$("#top").click(function(){
				$("#tab2").fadeOut(1); 
				$("#tab1").fadeIn(500);
			});
		
		});
		
		//alert("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?");
		$.getJSON("'.$globals['api_nuphp'].'top_classes.php?top=20&in=json&callback=?", 
				
			function (data) {
			 var soft_classes = \'<div class="row row_usi_cls">\';
			 var br = 1; 
			 $.each(data.data, function (i, item) {
				//alert(item.author);
				soft_classes += \'<div class="'.$tc_class.'" style="padding-bottom: 20px;"><div class="sai_classes_boxgrid2" id="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=overview" onclick=window.location=this.id;><div class="sai_classes_boxgrid"><div><h2>\'
				+item.name+
				\'</h2><p style="padding:10px;height:50px;">\'
				+item.desc+\'</p><p style="padding:10px;height:15px;"><b> '.$l['cl_ratings'].'</b> : \'
				+parseFloat(item.ratings)+\'</p> </div><div style="height:200px;"><br /><h2>\'
				+item.name+
				\'</h2><p style="margin-left:10px;margin-top:15px"> <b>'.$l['cl_author'].'</b> : \'
				+item.author+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_license'].'</b> :\'
				+item.license+\'</p><p style="margin-left:10px;"> <b>'.$l['cl_version'].'</b> :\'
				+item.version+\'</p><div align="center"> <a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=install" class="sai_cbutton">'.$l['cl_install_but'].'</a><a href="'.$globals['index'].'act=classes&cid=\'+item.cid+\'&tab=file" class="sai_cbutton">'.$l['cl_show_files'].'</a></div></div></div></div></div>\';
				 
				 br += 1 ;
			 });// end of each loop
			
			soft_classes += "</div>";
			$("#tab1").append(soft_classes); 
				
			$(".sai_classes_boxgrid").hover(function(){$(this).stop().animate({top:"-200px"},{queue:false,duration:200});},function() 
			{$(this).stop().animate({top:"0px"},{queue:true,duration:200});});
			
			 }); // end of get json function
			
		 </script>';
		
		echo '
		<div class="tab1" id="tab1" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:block"' : '').'>
			<script language="javascript" src="'.$theme['url'].'/js/classes_suggest.js"></script>
			<div class="row">
				<div class="col-lg-10 col-md-11 col-sm-10 col-xs-10" style="text-align:center;">
					<span class="sai_main_head">'.$l['top_classes'].'</span>
				</div>
					
				<div class="col-lg-2 col-md-1 col-sm-2 col-xs-2">
					<a href="javascript:void(0)" id="about"><img src="'.$theme['images'].'info_star.png" alt="'.$l['about'].'" title="'.$l['about'].'" ></a>&nbsp;&nbsp;							
				</div>
			</div>
			<hr>
			
			<div class="row">
				<div class="col-lg-3 col-md-3 col-sm-2 col-xs-2"></div>
				<div class="col-lg-5 col-md-5 col-sm-7 col-xs-6">
					<fieldset class="sai_inputs sai_inputs_cls">
						<form accept-charset="'.$globals['charset'].'" name="classsearch" method="post" action="" onsubmit="classes_suggestjs.set_inputstring(\'submit\');return false;" id="classsearchform">
							<input type="text" name="searchString" id="searchString" class="sai_inputs sai_inputs_cls" autofocus placeholder="Search Classes"  onKeyUp="classes_suggestjs.myKeyDownHandler(event, this.value, this.id);" autocomplete="off" sugurl="'.$globals['api_nuphp'].'" onblur="classes_suggestjs.show(1,this.id);" classes_ind="'.$globals['ind'].'"><br />
							<div id="searchsuggestions" class="sai_suggestions sai_suggestions_cls"></div>
						</form>
					</fieldset>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-3 col-xs-4"><div class="sai_search_button" onclick="classes_suggestjs.set_inputstring(\'submit\');"></div></div>
			</div>
			<br /><br />
		</div>';// THIS IS THE CLOSING OF TAB1 DIV
		
		echo '
		<div class="tab2" id="tab2" '.($globals['softpanel'] == 'ampps' || $globals['softpanel'] == 'webuzo' ? 'style="display:none"' : '').'>
		
			<div style="float:right">
				<a href="javascript:void(0)" id="top"><img src="'.$theme['images'].'top_star.png" alt="'.$l['top_classes'].'" title="'.$l['top_classes'].'" id="top"></a>
			</div>
			<center>
				<span class="sai_newhead">'.APP.'</span>
			</center>
			<hr>
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'puzzle_pieces.jpg" style=""alt="" class="img-responsive" />
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_exp'].'</font>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:80%; float:left; padding-right:50px;">	
					<font class="sai_newhead">'.$l['classes_speedup'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_speedup_exp'].'</font>
				</div>
				<div style="width:20%; float:right;">	
					<img src="'.$theme['images'].'speed_up_simple.jpg"  alt="" class="img-responsive"/>
				</div>
			</div>
			
			<br /><br />
			
			<div class="row">
				<div style="width:20%; float:left;">	
					<img src="'.$theme['images'].'integrate.jpg" alt="" class="img-responsive"/>
				</div>
				<div style="width:80%; float:right; padding:0 20px;">	
					<font class="sai_newhead">'.$l['classes_1000'].'</font>
					<br /><br />
					<font class="sai_feature_exp">'.$l['classes_1000_exp'].'</font>
				</div>
			</div>
			
			<br /><br />';
			
		//THIS IS THE CLOSING OF TAB2 DIV
	echo '
		</div><br /><br />
	</div><!--end of bg class-->';
	
	softfooter();
}

function java_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

function python_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'python.jpg" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['glimpse_python'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['python_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['interpreter'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['interpreter_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>
<br /><br />';

softfooter();

}

// The Application Index theme
function apps_userindex_theme(){

global $theme, $globals, $softpanel, $user, $l;

softheader($l['<title>']);

echo '<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="115">
		<img src="'.$theme['images'].'efficient.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['efficient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['efficient_exp'].'
		</font>
	</td>
</tr>
</table>

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['convenient'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['convenient_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'convenient.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="130">
	
	<img src="'.$theme['images'].'dragme.gif" alt="" id="dragme" style="position:relative;" />
	
<script language="javascript" src="'.$theme['url'].'/js/domdrag.js" type="text/javascript"></script>

<script language="javascript" type="text/javascript"><!-- // --><![CDATA[
Drag.init($_("dragme"), $_("dragme"));
// ]]></script>

	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['play_demos'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['play_demos_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td valign="top">
		<font class="sai_newhead">'.$l['powerful'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['powerful_exp'].'
		</font>
	</td>
	<td width="115">
		<img src="'.$theme['images'].'powerful.gif" alt="" />
	</td>
</tr>
</table>

<br /><br />

<table width="100%" cellpadding="4" cellspacing="1" border="0">
<tr>
	<td width="140">
		<img src="'.$theme['images'].'portable.gif" alt="" />
	</td>
	<td valign="top">
		<font class="sai_newhead">'.$l['portable'].'</font>
		<br /><br />
		<font class="sai_feature_exp">
		'.$l['portable_exp'].'
		</font>
	</td>
</tr>
</table>

<br /><br />';

softfooter();

}

?>