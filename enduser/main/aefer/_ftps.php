<?php

class ftps{

	// Public
	var $ftp_conn;
	var $error = array();
	var $log_on = 1;
	
	// Private
	private $host = '';
	private $port = '';
	private $user = '';
	private $pass = '';
	
	function ftps(){
	}
	
	function __destruct(){
		if(!empty($this->ftp_conn)){
			ftp_close($this->ftp_conn);
		}
	}
	
	function connect($host, $port, $user, $pass){
		$this->ftp_conn = @ftp_ssl_connect($host, $port, 90);
		if(!$this->ftp_conn){
			$this->error[] = 'SSL connection not found';
			return false;
		}
		$login_result = @ftp_login($this->ftp_conn, $user, $pass);
		if(!$login_result){
			$this->error[] = 'Please enter correct login details';
			return false;
		}
		
		// Used for fetching and inserting data on remote server
		$this->host = $host;
		$this->port = $port;
		$this->user = $user;
		$this->pass = $pass;
		
		return true;
	}
	
	function delete($filename){
		if(!@ftp_delete($this->ftp_conn, $filename)){
			$this->error[] = "Could not delete $filename";
			return false;
		}
		return true;
	}
	
	function is_dir($dir){
		$old = $this->pwd();
		if(!$this->chdir($dir)){
			$this->error[] = "Could not find directory $dir";
			return false;
		}
		$this->chdir($old);
		return true;
	}
	
	function chdir($dir){
		if(!ftp_chdir($this->ftp_conn, $dir)){
			$this->error[] = "Could not change directory to $dir";
			return false;
		}
		return true;
	}
	
	function pwd(){
		return @ftp_pwd($this->ftp_conn);
	}
	
	function chmod($pathname, $mode){
		return @ftp_site($this->ftp_conn, sprintf('CHMOD %o %s', $mode, $pathname));
	}
	
	function file_exists($file){
		$dir = dirname($file);
		$filename = basename($file);
		if(!$list = $this->filelist($dir)){
			$this->error[] = "File $file could not be found";
			return false;
		}
		if(!in_array($filename, $list)){
			$this->error[] = "File $file could not be found";
			return false;
		}
		return true;
	}
	
	function rename($from, $to){
		if(!@ftp_rename($this->ftp_conn, $from, $to)){
			$this->error[] = "Could not move $from to $to";
			return false;
		}
		return true;
	}
	
	function rmdir($dir){
		if(!@ftp_rmdir($this->ftp_conn, $dir)){
			$this->error[] = "Could not remove directory $dir";
			return false;
		}
		return true;
	}
	
	function mkdir($dirname, $mode = 0755){
		if(!@ftp_mkdir($this->ftp_conn, $dirname)){
			$this->error[] = "Could not make directory $dirname";
			return false;
		}
		$this->chmod($dirname, $mode);
		return true;
	}

	function mmkdir($dir, $mode = 0755) {
		if(empty($dir)) return FALSE;
		if($this->is_dir($dir) or $dir == "/" ) return TRUE;
		if(!$this->mmkdir(dirname($dir), $mode)) return false;
		$r=$this->mkdir($dir, $mode);
		$this->chmod($dir, $mode);
		return $r;
	}
	
	function exec($command){
		return @ftp_exec($this->ftp_conn, $command);
	}
	
	function is_exists($file){
		if($this->file_exists($file)){
			return true;
		}elseif($this->is_dir($file)){
			return true;
		}
		return false;
	}
	
	function filelist($dir){
		if(!$list = ftp_nlist($this->ftp_conn, "$dir")){
			$this->error[] = "Could not get the list of files in directory $dir";
			return false;
		}
		return $list;
	}
	
	function put($local_file, $remote_file, $mode = FTP_ASCII){
		if(!$fp_local = fopen($local_file, "r")){
			$this->error[] = "Local File $remote_file could not be accessed";
			return false;
		}
		
		$contents = "";
		while(!feof($fp_local)){
			$contents .= fread($fp_local, 4096);
		}
		fclose($fp_local);
		if(!$this->softput($remote_file, $contents)){
			return false;
		}
		return true;
	}
	
	function get($remote_file, $local_file){
		if(!($contents = $this->softget($remote_file))){
			return false;
		}
		$fp_local = @fopen($local_file, "w+");
		if(!$fp_local){
			$this->error[] = "Local File $local_file cannot be accessed";
			return false;
		}
		fwrite($fp_local, $contents);
		fclose($fp_local);
		fclose($file);
		if(file_exists($local_file)){
			return true;
		}
		$this->error[] = "Could not fetch the file $remote_file";
		return false;
	}
	
	function mput($local, $remote, $continious = false){
		$local=realpath($local);
		if(!@file_exists($local)) {
			$this->error[] = "Cannot open local folder $local";
			return FALSE;
		}
		if(!is_dir($local)) return $this->put($local, $remote);
		if(empty($remote)) $remote=".";
		elseif(!$this->file_exists($remote) and !$this->mkdir($remote)) return FALSE;
		if($handle = opendir($local)) {
			$list=array();
			while (false !== ($file = readdir($handle))) {
				if ($file != "." && $file != "..") $list[]=$file;
			}
			closedir($handle);
		} else {
			$this->error[] = "Can't open local folder $local";
			return FALSE;
		}
		if(empty($list)) return TRUE;
		$ret=true;
		foreach($list as $el) {
			if(is_dir($local."/".$el)) $t=$this->mput($local."/".$el, $remote."/".$el);
			else $t=$this->put($local."/".$el, $remote."/".$el);
			if(!$t) {
				$ret=FALSE;
				if(!$continious) break;
			}
		}
		return $ret;
	}
	
	// Takes the DATA rather than the LOCAL file name
	function softput($remotefile=NULL, $softdata, $rest=0) {
	
		$file = fopen("ftps://".$this->user.":".$this->pass."@".$this->host."/$remotefile", "wb");
		if(!$file){
			$this->error[] = "Remote File $remotefile cannot be accessed";
			return false;
		}
		fwrite($file, $softdata);
		fclose($file);
		
		if($this->file_exists('/'.ltrim($remotefile, '/'))){
			return true;
		}
		$this->error[] = "Could not put the file $remotefile";
		return false;
	}
	
	// Returns the Data
	function softget($remotefile=NULL) {
		$file = @fopen("ftps://".$this->user.":".$this->pass."@".$this->host."/$remotefile", "r");
		if(!$file){
			$this->error[] = "Remote File $remotefile could not be accessed";
			return false;
		}
		$contents = "";
		while(!feof($file)){
			$contents .= @fread($file, 4096);
		}
		return $contents;
	}

}

?>