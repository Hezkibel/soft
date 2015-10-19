<?php

function edit_php_conf($file, $ioncube_path){
	$_files = file($file);
	$added = 0;
	foreach($_files as $line){
		if(preg_match('/^zend_extension(.*?)xdebug/is', $line)){
			$files[] = 'zend_extension = "'.$ioncube_path.'"'."\n".$line;
			$added = 1;
			continue;
		}
		$files[] = $line;
	}
	if(empty($added)){
		$files[] = "\n".'zend_extension = "'.$ioncube_path.'"';
		$added = 1;
	}
	if(false === file_put_contents($file, implode($files))){
		return false; 
	}
	return true;
}

function cURLdownload($url, $file){
  $ch = curl_init();
  if($ch)
  {
    $fp = fopen($file, "w");
    if($fp)
    {
      if( !curl_setopt($ch, CURLOPT_URL, $url) )
      {
        fclose($fp); // to match fopen()
        curl_close($ch); // to match curl_init()
        return "FAIL: curl_setopt(CURLOPT_URL)";
      }
      if( !curl_setopt($ch, CURLOPT_FILE, $fp) ) return false;
      if( !curl_setopt($ch, CURLOPT_HEADER, 0) ) return false;
      if( !curl_exec($ch) ) return false;
      curl_close($ch);
      fclose($fp);
      return true;
    }
    else return false;
  }
  else return false;
}

$ip = trim(file_get_contents('http://api.softaculous.com/ip.php'));
if(empty($ip)){
    die('Internet Connection is required');
}

// Find OS
$_os = PHP_OS;
if(is_numeric(strpos($_os, 'WIN'))){
	$os = 'windows';
}elseif(is_numeric(strpos($_os, 'DAR'))){
	$os = 'mac';
}else{
	$os = 'linux';
}

$current_path = __FILE__;
$current_path = preg_replace('/\\\/', '/', $current_path);

// Softaculous Path
$softaculous_path = dirname($current_path);

// Find AMP Path
$amp_path = dirname(dirname(dirname(__FILE__))); // assumption
$amp_path = preg_replace('/\\\/', '/', $amp_path);

// AMP Path check
if(!is_dir($amp_path)){
	$amp_path = '';
}

$stack = '';

// For EasyPHP
if($handle = opendir($amp_path)){
	while(false !== ($entry = readdir($handle))){
		if(preg_match('/^EasyPHP(.*?)$/is', $entry)){
			$stack = 'EasyPHP-win';
			break;
		}
	}
	closedir($handle);
}

if(empty($stack)){
	if(file_exists($amp_path.'/xampp-control.exe')){
		$stack = 'xampp-win';
	}elseif(file_exists($amp_path.'/EasyPHP.exe')){
		$stack = 'EasyPHP-win';
	}elseif(file_exists($amp_path.'/wampmanager.exe')){
		$stack = 'wamp-win';
	}else{
		$stack = 'other';
	}
}

// ionCube Check
$ioncube_status = get_loaded_extensions();
if(!empty($ioncube_status) && in_array('ionCube Loader', $ioncube_status)){
	$ioncube_status = 'Loaded';
}else{
	$ioncube_status = 'Not Loaded';
}

// PHP Version
$php_version = PHP_VERSION;

// Guessing PHP Path
if($os == 'windows'){
	if($stack == 'xampp-win') $relative_php = '/php/php.exe';
	elseif($stack == 'EasyPHP-win'){
		$shrink_php_version = str_replace('.', '', $php_version);
		if($handle = opendir($amp_path.'/php')){
			while(false !== ($entry = readdir($handle))){
				if(preg_match('/^php'.$shrink_php_version.'x(.*?)$/is', $entry, $match)){
					$relative_php = '/php/'.$match[0].'/php.exe';
					break;
				}
			}
			closedir($handle);
		}
	}elseif($stack == 'wamp-win') $relative_php = '/bin/php/php'.$php_version.'/php.exe';
	else $relative_php = '/php/php.exe';
}else{
	$relative_php = '/bin/php';
}

$php_path = $amp_path.$relative_php;

// Script Path
$scripts_path = $amp_path.'/scripts';

// DocumentRoot
if($os == 'windows'){
	if($stack == 'xampp-win') $htdocs_folder = $amp_path.'/htdocs';
	elseif($stack == 'EasyPHP-win') $htdocs_folder = $amp_path.'/www';
	elseif($stack == 'wamp-win') $htdocs_folder = $amp_path.'/www';
	else $htdocs_folder = $amp_path.'/htdocs';
}else{
	$htdocs_folder = $amp_path.'/htdocs';
}

// Private Path
$private_folder = $amp_path.'/private';

// Mysql root password
$mysql_root = '';

// Email
$soft_email = '';
			
// Apache version
if($stack == 'wamp-win'){
	$apache_version = apache_get_version();
	$exapachever = explode(' ', $apache_version);
	$exapachever = explode('/', $exapachever[0]);
	$apache_version = trim($exapachever[1]);
}

if(isset($_REQUEST['install_submit']) && $_REQUEST['install_submit']){
	
	ignore_user_abort(true);
	ini_set("display_errors", 0);
	$stop = false;
    $no_error = true;

    // AMP Path
    if(!empty($_REQUEST['amp_path'])){
        $amp_path = $_REQUEST['amp_path'];
    }

	$amp_path = preg_replace('/\\\/', '/', $amp_path);
	if(!is_dir($amp_path)){
		$amp_path = '';
        $no_error = false;
	}
	
	// PHP Path
    if(!empty($_REQUEST['php_path'])){
        $php_path = $_REQUEST['php_path'];
    }

	$php_path = preg_replace('/\\\/', '/', $php_path);
	if(!is_file($php_path)){
		$php_path = '';
        $no_error = false;
	}
	
	// Restart Apache. Enters only on ajax call
	if($_REQUEST['restart'] == 'yes'){
			
			if(!file_exists('README.txt')){
				$stop_apache_php = '<?php
function myexec($command, $die = 0){
	$tmpnam = \'t\'.rand(1, 999).".bat";
	$fp = fopen ($tmpnam, "w");
	fwrite($fp, $command);
	fclose ($fp);
	exec($tmpnam, $array, $ret);
	unlink($tmpnam);
	if(!empty($die) && $ret != \'0\'){
		echo(\'<br />Could not execute - \'.$command);
		print_r(array($array, $ret));
		echo(\'<br />Dying\');
	}
	return array($array, $ret);
}
$httpd_pid = $argv[1];
ignore_user_abort(true);
$stop_server = \'taskkill.exe /F /PID \'.file_get_contents($httpd_pid); // Stop
$ret = myexec($stop_server);
@unlink($httpd_pid);
@unlink(\'install.php\');
@unlink(\'index.php\');
rename(\'_index.php\', \'index.php\');
@unlink(__FILE__);
$readme = "=============\n=Softaculous=\n=============\nDocs: http://www.softaculous.com/docs\nLicense: http://www.softaculous.com/softaculous/license\nSupport: http://softaculous.com/support";
file_put_contents(\'README.txt\', $readme);
?>';
				if(file_put_contents('stop_apache.php', $stop_apache_php)){
					if($stack == 'wamp-win') $httpd_pid = $amp_path.'/bin/apache/apache'.$apache_version.'/logs/httpd.pid';
					else $httpd_pid = $amp_path.'/apache/logs/httpd.pid';
					exec('@start /b "" "'.$php_path.'" '.((version_compare($php_version, '5.4.0', '>')) ? '-d extension=php_com_dotnet.dll ' : '').'stop_apache.php '.$httpd_pid);
				}
			}
			
			echo 'notdone';
			die();
	}
			
	// PHP check
	if(!preg_match('/[\d]{1,2}\.[\d]{1,2}\.[\d]{1,2}/is', $php_version)){
		$php_version = '';
		$no_error = false;
	}
	
	// Script path
	if(!empty($_REQUEST['scripts_path'])){
		$scripts_path = $_REQUEST['scripts_path'];
		$scripts_path = preg_replace('/\\\/', '/', $scripts_path);
	}
	
	// Private Folder
	if(!empty($_REQUEST['private_folder'])){
		$private_folder = $_REQUEST['private_folder'];
	}
	$private_folder = preg_replace('/\\\/', '/', $private_folder);
	if(!is_dir($private_folder)){
		mkdir($private_folder);
	}

	// DocumentRoot Folder	
	if(!empty($_REQUEST['htdocs_folder'])){
		$htdocs_folder = $_REQUEST['htdocs_folder'];
	}
	$htdocs_folder = preg_replace('/\\\/', '/', $htdocs_folder);
	if(!is_dir($htdocs_folder)){
		$no_error = false;
		$htdocs_folder = '';
	}
	
	// MySQL Root Password
	if(!empty($_REQUEST['mysql_root'])){
		$mysql_root = $_REQUEST['mysql_root'];
	}

    // Check MySQL connection
    $myconn = mysqli_connect('localhost', 'root', $mysql_root);

    if($myconn){
		if(!empty($mysql_root)){
			file_put_contents($private_folder.'/mypass', $mysql_root);
		}
    }else{
        $no_error = false;
    }
	
	// Email
	if(!empty($_REQUEST['soft_email'])){
		$soft_email = $_REQUEST['soft_email'];
	}else{
        $no_error = false;
    }

    if(!empty($no_error)){
		
        if($ioncube_status != 'Loaded'){
			$stop = true;
			if($os == 'windows'){
				exec('"'.$php_path.'" -i | findstr "Thread Safety"', $phpinfo, $ret);
			}else{
				exec($php_path.' -i | grep "Thread Safety"', $phpinfo, $ret);
			}
			
			// Short PHP version
			$short_phpver = substr($php_version, 0, 3);
			if(preg_match('/^(.*?)enabled$/is', current($phpinfo))){
				$ts = 'ts';
			}else{
				$ts = 'nts';
			}
			
			// Extension dir
			$extension_dir = ini_get('extension_dir');
		
			$iocube_os = ($os == 'windows' ? 'win' : ($os == 'mac' ? 'dar' : 'lin'));
			$php_ioncube = 'ioncube_loader_'.$iocube_os.'_'.$short_phpver.'_'.$ts.'.dll';
			$ioncube_dest = rtrim(rtrim($extension_dir, '/'), '\\').'/'.$php_ioncube;
			if(cURLdownload('http://files.ampps.com/launch/ioncube/'.$php_ioncube, $ioncube_dest)){
				if($stack == 'xampp-win'){
					$php_ini[] = $amp_path.'/php/php.ini';
				}elseif($stack == 'EasyPHP-win'){
					$php_ini[] = $amp_path.'/conf_files/php.ini';
					$php_ini[] = str_replace('\\', '/', dirname($php_path)).'/php.ini';
				}elseif($stack == 'wamp-win'){
					$php_ini[] = $amp_path.'/bin/apache/apache'.$apache_version.'/bin/php.ini'; // C:\wamp\bin\apache\apache2.4.9\bin
					$php_ini[] = $amp_path.'/bin/php/php'.$php_version.'/php.ini'; // C:\wamp\bin\php\php5.5.12
				}
				
				foreach($php_ini as $v){
					$file_contents = file_get_contents($v);
					if(!edit_php_conf($v, $ioncube_dest)){
						$no_error = false;
					}
				}
			}
        }
		
		$install_inc = '<?php

@header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
@header("Expires: Mon, 26 Jul 1997 05:00:00 GMT"); // Date in the past

$ip = trim(file_get_contents(\'http://api.softaculous.com/ip.php\'));
error_reporting(0);
if(count($argv) != 8){
	die(\'Error\');
}

$softaculous_path = $argv[1];
$scripts_path = $argv[2];
$amp_path = $argv[3];
$php_path = $argv[4];
$private_folder = $argv[5];
$htdocs_folder = $argv[6];
$soft_email = $argv[7];

$globals[\'path\'] = $softaculous_path;
$globals[\'softscripts\'] = $scripts_path;
$globals[\'sn\'] = \'Softaculous\';
$globals[\'cookie_name\'] = \'SOFTCookies\'.rand(1, 9999);
$globals[\'gzip\'] = 1;
$globals[\'language\'] = \'english\';
$globals[\'soft_email\'] = $soft_email/*.@$_SERVER[\'SERVER_NAME\']*/;
$globals[\'theme_folder\'] = \'default\';
$globals[\'timezone\'] = 0;
$globals[\'mail\'] = 1;
$globals[\'mail_server\'] = \'\';
$globals[\'mail_port\'] = \'\';
$globals[\'mail_user\'] = \'\';
$globals[\'mail_pass\'] = \'\';
$globals[\'off\'] = 0;
$globals[\'off_subject\'] = \'\';
$globals[\'off_message\'] = \'\';
$globals[\'update\'] = 1;
$globals[\'update_softs\'] = 1;
$globals[\'add_softs\'] = 1;
$globals[\'email_update\'] = 1;
$globals[\'email_update_softs\'] = 1;
$globals[\'cron_time\'] = \' 1 12 * * *\';
$globals[\'chmod_files\'] = \'\';
$globals[\'chmod_dir\'] = \'\';
$globals[\'is_vps\'] = 0;
$globals[\'eu_news_off\'] = 0;
$globals[\'logo_url\'] = \'\';
$globals[\'php_bin\'] = \'\';
$globals[\'chmod_conf_file\'] = \'\';
$globals[\'off_sync_link\'] = \'\';
$globals[\'off_panel_link\'] = \'\';
$globals[\'eu_enable_themes\'] = 1;
$globals[\'eu_themes_premium\'] = 1;
$globals[\'amp_path\'] = $amp_path;
$globals[\'amp_php\'] = $php_path;
$globals[\'amp_private\'] = $private_folder;
$globals[\'amp_htdocs\'] = $htdocs_folder;

$globals[\'enduser\'] = $globals[\'path\'].\'/enduser\';
$globals[\'mainfiles\'] = $globals[\'enduser\'].\'/main\';
$globals[\'adminfiles\'] = $globals[\'mainfiles\'].\'/admin\';
$globals[\'euthemes\'] = $globals[\'enduser\'].\'/themes\';

define(\'SOFTACULOUS\', 1);
define(\'SOFTADMIN\', 1);//We are serving the ADMIN
define(\'SOFTCLI\', 1);// For Secured Mode of AMPPS / COMMAND LINE INTERFACE

####################################
## BEGIN THE INSTALLATION PROCESS ##
####################################

//Some globals vars
include_once($globals[\'path\'].\'/enduser/globals.php\');

//The necessary functions to run this SOFTACULOUS Software
include_once($globals[\'mainfiles\'].\'/functions.php\');

//Load the SOFTPANEL Class
if(!class_exists(\'softpanel\')){
	include_once($globals[\'enduser\'].\'/softpanel.php\');
}

$softpanel = new softpanel();

//GET the Categories, Scripts and iScripts
catsnscripts();

///////////////////////////////
// INSTALLATION PROCESS STEPS :
// 1) CONFIGURE universal.php
// 2) FETCH A LICENSE
// 3) UPDATE categories.php
// 4) UPDATE scripts.php
// 5) UPDATE iscripts.php
///////////////////////////////

// 1) CONFIGURE universal.php
saveglobals($globals);

// 2) FETCH A LICENSE
loadlicense(true);//UPDATE as well

// 3) UPDATE categories.php
updatecats();

// 4) UPDATE scripts.php
// 5) UPDATE iscripts.php
updatescripts();
?>';
		
		if(file_put_contents('install.inc', $install_inc)){
			// Create Universal.php and other Softaculous related stuffs
			exec('"'.$php_path.'" "'.$softaculous_path.'/install.inc" '.$softaculous_path.' '.$scripts_path.' '.$amp_path.' '.$php_path.' '.$private_folder.' '.$htdocs_folder.' '.$soft_email, $outinc, $retinc);
		}
		
		if(file_exists($softaculous_path.'/enduser/universal.php')){
			@unlink('install.inc');
		}else{
			file_put_contents('install.log', '"'.$php_path.'" "'.$softaculous_path.'/install.inc" "'.$softaculous_path.'" "'.$scripts_path.'" "'.$amp_path.'" "'.$php_path.'" "'.$private_folder.'" "'.$htdocs_folder.'"');
		}
		
		// Add Cron
		if($os == 'windows'){
			exec('schtasks /create /tn "Softaculous Cron" /tr "\"'.$php_path.'\" \"'.$softaculous_path.'\cron.php\"" /sc daily /st '.date('H:i', time()));
		}elseif($os == 'linux'){
			$cmd = rand(0,59).' '.rand(0,23).' * * * '.$php_path.' '.$softaculous_path.'/cron.php';
			exec('echo "'.$cmd.'" >> '.$amp_path.'/tmp_cron1; cat '.$amp_path.'/tmp_cron1 | crontab -; rm -rf '.$amp_path.'/tmp_cron1;');
		}
		
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
			<html xmlns="http://www.w3.org/1999/xhtml">
			<head>
			<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
			<meta name="keywords" content="softaculous, software" />
			<title>Install Softaculous</title>
				<style type="text/css">
					body{
						font-family:verdana,sans,serif;
					}
					.logo{
						width:98%;
						margin-left:20px;
					}
					h1{
						padding:0;
						margin:0;
						color:#333;
					}
					td{
						text-align:center;
						font-size:14px;
					}
					.hr{
						border:1px dashed #666;
					}
					th{
						padding:10px 20px;
						background-color:#e5e5e5;
						border-radius:5px;
					}
					.form{
						width:800px;
						padding:10px;
						box-shadow:1px 1px 20px #999;
						border:1px solid #ccc;
						border-radius:10px;
					}
					input{
						width:150px;
						padding:5px;
						border-radius:5px;
						border:1px solid #ccc;
						outline:none;
					}
					input:hover,input:active{
						box-shadow:1px 1px 15px #ccc;
					}
					.checkbox{
						width:10px;
						padding:5px;
						margin-left: 50px;
					}
					.submit{
						padding:10px 20px;
						background-color:#1a9cd7;
						border:none;
						outline:none;
						cursor:pointer;
						color:#fff;
						font-size:14px;
						border-radius:3px;
						-webkit-transition:all 0.1s linear;
						-moz-transition:all 0.1s linear;
						-o-transition:all 0.1s linear;
						-ms-transition:all 0.1s linear;
					}
					.submit:hover{
						box-shadow:inset 1px 1px 25px #333;
					}
				</style>
    
				<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
				<script>
				$(document).ready(function(){
					'.(empty($stop) ? '' : 'setInterval(function(){get_fb();}, 1000);').'
				});
				
				function get_fb(){
					$.ajax({
						method: "GET",
						url: "install.php",
						type: \'HEAD\',
						data: "install_submit=1&restart=yes",
						cache: false,
						success: function(data){
							if(data == \'done\'){
								$(".wait_restart").html("<p>Click <a href=\"http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser/index.php\">http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser</a> to access Softaculous</p>");
							}
						}
					}).fail(function(){
					});
				}
				</script>
				</head>
				<body>
					<center>
						<div class="logo">
							<img src="http://softaculous.com/images/softaculous.gif" alt="" />		
						</div><br><br>		
						<div class="form">		
							<h1><div class="wait_head">Installation Complete</div></h1><br>
							<hr class="hr">
							<br><div class="wait_restart"><p>'.(empty($stop) ? 'Click <a href="http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser/index.php">http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser</a> to access Softaculous' : 'Please start Apache Server to access Softaculous<br/>And click <a href="http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser/index.php">http://127.0.0.1:'.$_SERVER['SERVER_PORT'].'/softaculous/enduser</a> to access Softaculous').'<p></div>
						</div>
					</center>
			</body>
			</html>';
		
		// delete me if ionCube is already loaded
		if(empty($stop)){
			unlink('index.php');
			rename('_index.php', 'index.php');
			unlink(__FILE__);
			$readme = "=============\n=Softaculous=\n=============\nDocs: http://www.softaculous.com/docs\nLicense: http://www.softaculous.com/softaculous/license\nSupport: http://softaculous.com/support";
			file_put_contents('README.txt', $readme);
		}
		die();
    }else{
	
		// ionCube Check
		$ioncube_status = get_loaded_extensions();
		if(!empty($ioncube_status) && in_array('ionCube Loader', $ioncube_status)){
			$ioncube_status = 'Loaded';
		}else{
			$ioncube_status = 'Not Loaded';
		}
		
		echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
		<html xmlns="http://www.w3.org/1999/xhtml">
		<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="softaculous, software" />
		<title>Install Softaculous</title>
			<style type="text/css">
				body{
					font-family:verdana,sans,serif;
				}
				.logo{
					width:98%;
					margin-left:20px;
				}
				h1{
					padding:0;
					margin:0;
					color:#333;
				}
				td{
					font-size:14px;
				}
				.hr{
					border:1px dashed #666;
				}
				th{
					padding:10px 20px;
					background-color:#e5e5e5;
					border-radius:5px;
				}
				.form{
					width:800px;
					padding:10px;
					box-shadow:1px 1px 20px #999;
					border:1px solid #ccc;
					border-radius:10px;
				}
				input{
					width:160px;
					padding:5px;
					border-radius:5px;
					border:1px solid #ccc;
					outline:none;
				}
				input:hover,input:active{
					box-shadow:1px 1px 15px #ccc;
				}
				.checkbox{
					width:10px;
					padding:5px;
					margin-left: 50px;
				}
				.submit{
					padding:10px 20px;
					background-color:#1a9cd7;
					border:none;
					outline:none;
					cursor:pointer;
					color:#fff;
					font-size:14px;
					border-radius:3px;
					-webkit-transition:all 0.1s linear;
					-moz-transition:all 0.1s linear;
					-o-transition:all 0.1s linear;
					-ms-transition:all 0.1s linear;
				}
				.submit:hover{
					box-shadow:inset 1px 1px 25px #333;
				}
				.red{
					padding:10px 20px;
					background-color:#FF1919;
					border:none;
					outline:none;
					color:#fff;
					font-size:14px;
					border-radius:3px;
				}
				.green{
					padding:10px 20px;
					background-color:#198c19;
					border:none;
					outline:none;
					color:#fff;
					font-size:14px;
					border-radius:3px;
				}
			</style>
			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
			<script>
			function change_(){
				if(document.getElementById(\'stop_apache\').checked){
					document.getElementById("install_submit").disabled = false;
					$(".submit").css(\'background-color\', \'#1a9cd7\');
					$(".submit").hover(function() {
						$(this).css("box-shadow","inset 1px 1px 25px #333")
					}, function() {
						$(this).css("box-shadow","none")
					});
				}else{
					document.getElementById("install_submit").disabled = true;
					$(".submit").css(\'background-color\', \'#ccc\')
					$(".submit").css(\'box-shadow\', \'none\');
				}
			}
			</script>
			</head>
			<body>
				<center>
					<div class="logo">
						<img src="http://softaculous.com/images/softaculous.gif" alt="" />
					</div><br><br>
					<div class="form">
						<h1>Install Softaculous</h1><br>
						<hr class="hr">
						<br>
						<form action="" method="post">
						<table width="80%" align="center" cellpadding="10" border="0" >
							<tr>
								<th width="50%" align="right">Settings</th>
								<th width="50%" align="left">Value</th>
							</tr>
							<tr>
								<td align="right">Softaculous Path</td>
								<td align="left">'.$softaculous_path.'</td>
							</tr>
							<tr>
								<td align="right">AMP Path</td>
								<td align="left"><input type="text" name="amp_path" value="'.$amp_path.'">'.(empty($amp_path) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">PHP Path</td>
								<td align="left"><input type="text" name="php_path" value="'.$php_path.'">'.(empty($php_path) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">PHP Version</td>
								<td align="left">'.(empty($php_version) ? 'Not Loaded' : $php_version).(empty($php_version) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">ionCube Loader</td>
								<td align="left">'.$ioncube_status.($ioncube_status != 'Loaded' ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">Scripts Path</td>
								<td align="left"><input type="text" name="scripts_path" value="'.$scripts_path.'">'.(empty($scripts_path) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">Private Folder</td>
								<td align="left"><input type="text" name="private_folder" value="'.$private_folder.'">'.(empty($private_folder) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">Document Root</td>
								<td align="left"><input type="text" name="htdocs_folder" value="'.$htdocs_folder.'">'.(empty($htdocs_folder) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">MySQL Root Password</td>
								<td align="left"><input type="text" name="mysql_root" value="'.$mysql_root.'" placeholder="(Blank Password)">'.(empty($myconn) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>
							<tr>
								<td align="right">Email</td>
								<td align="left"><input type="text" name="soft_email" value="'.$soft_email.'">'.(empty($soft_email) ? '<img src="http://images.softaculous.com/no.gif" />' : '<img src="http://images.softaculous.com/yes.gif" />').'</td>
							</tr>';
							if($ioncube_status != 'Loaded'){
								echo '<tr>
									<td colspan="2" align="center"><input type="checkbox" class="checkbox" name="stop_apache" id="stop_apache" checked onchange="change_();">No ionCube loader was detected. Softaculous will install ionCube for you but Apache will be stopped. You will need to start apache again manually. Please check to confirm.</td>
								</tr>';
							}
							echo '<tr>
								<td colspan="2" align="center"><input type="submit" name="install_submit" class="submit" id="install_submit" value="Start Installation"></td>
							</tr></table>
						</form>
					</div>
				</center>
		</body>
		</html>';
	}
}else{
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
	<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="softaculous, software" />
	<title>Install Softaculous</title>
		<style type="text/css">
			body{
				font-family:verdana,sans,serif;
			}
			.logo{
				width:98%;
				margin-left:20px;
			}
			h1{
				padding:0;
				margin:0;
				color:#333;
			}
			td{
				font-size:14px;
			}
			.hr{
				border:1px dashed #666;
			}
			th{
				padding:10px 20px;
				background-color:#e5e5e5;
				border-radius:5px;
			}
			.form{
				width:800px;
				padding:10px;
				box-shadow:1px 1px 20px #999;
				border:1px solid #ccc;
				border-radius:10px;
			}
			input{
				width:150px;
				padding:5px;
				border-radius:5px;
				border:1px solid #ccc;
				outline:none;
			}
			input:hover,input:active{
				box-shadow:1px 1px 15px #ccc;
			}
			.checkbox{
				width:10px;
				padding:5px;
				margin-left: 50px;
			}
			.submit{
				padding:10px 20px;
				background-color:#1a9cd7;
				border:none;
				outline:none;
				cursor:pointer;
				color:#fff;
				font-size:14px;
				border-radius:3px;
				-webkit-transition:all 0.1s linear;
				-moz-transition:all 0.1s linear;
				-o-transition:all 0.1s linear;
				-ms-transition:all 0.1s linear;
			}
			.submit:hover{
				box-shadow:inset 1px 1px 25px #333;
			}
		</style>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script>
			function change_(){
				if(document.getElementById(\'stop_apache\').checked){
					document.getElementById("install_submit").disabled = false;
					$(".submit").css(\'background-color\', \'#1a9cd7\');
					$(".submit").hover(function() {
						$(this).css("box-shadow","inset 1px 1px 25px #333")
					}, function() {
						$(this).css("box-shadow","none")
					});
				}else{
					document.getElementById("install_submit").disabled = true;
					$(".submit").css(\'background-color\', \'#ccc\')
					$(".submit").css(\'box-shadow\', \'none\');
				}
			}
		</script>
		</head>
		<body>
			<center>
				<div class="logo">
					<img src="http://softaculous.com/images/softaculous.gif" alt="" />		
				</div><br><br>		
				<div class="form">		
					<h1>Install Softaculous</h1><br>
					<hr class="hr">
					<br>
					<form action="" method="post">
					<table width="80%" align="center" cellpadding="10" border="0" >
						<tr>
							<th width="50%" align="right">Settings</th>
							<th width="50%" align="left">Value</th>
						</tr>
						<tr>
							<td align="right">Softaculous Path</td>
							<td align="left">'.$softaculous_path.'</td>
						</tr>
						<tr>
							<td align="right">AMP Path</td>
							<td align="left"><input type="text" name="amp_path" value="" placeholder="'.$amp_path.'"></td>
						</tr>
						<tr>
							<td align="right">PHP Path</td>
							<td align="left"><input type="text" name="php_path" value="" placeholder="'.$php_path.'"></td>
						</tr>
						<tr>
							<td align="right">Scripts Path</td>
							<td align="left"><input type="text" name="scripts_path" value="" placeholder="'.$scripts_path.'"></td>
						</tr>
						<tr>
							<td align="right">Private Folder</td>
							<td align="left"><input type="text" name="private_folder" value="" placeholder="'.$private_folder.'"></td>
						</tr>
						<tr>
							<td align="right">Document Root</td>
							<td align="left"><input type="text" name="htdocs_folder" value="" placeholder="'.$htdocs_folder.'"></td>
						</tr>
						<tr>
							<td align="right">MySQL Root Password</td>
							<td align="left"><input type="text" name="mysql_root" value="" placeholder="(Leave empty for blank password)"></td>
						</tr>
						<tr>
							<td align="right">Email</td>
							<td align="left"><input type="text" name="soft_email" value=""></td>
						</tr>';
						if($ioncube_status != 'Loaded'){
							echo '<tr>
								<td colspan="2" align="center"><input type="checkbox" class="checkbox" name="stop_apache" id="stop_apache" checked onchange="change_();">No ionCube loader was detected. Softaculous will install ionCube for you but Apache will be stopped. You will need to start apache again manually. Please check to confirm.</td>
							</tr>';
						}
						echo '<tr>
						<td colspan="2" align="center"><input type="submit" name="install_submit" class="submit" id="install_submit" value="Start Installation"></td>
						</tr></table>
					</form>
				</div>
			</center>
	</body>
	</html>';
}
?>