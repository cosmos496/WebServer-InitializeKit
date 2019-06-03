<?php
	$ini = parse_ini_file("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini");
	$dsn = "mysql:dbname=".$ini["db_name"].";host=".$ini["db_server"];



	function logfile_writing($w_code){
		$logfile = date("Y-m-d").".log";
		$logfile_path = $_SERVER["DOCUMENT_ROOT"]."/log/".$logfile;
		if(!file_exists($logfile_path)){
			touch($logfile_path);
		}

		$fp = fopen($logfile_path, "a");
		fwrite($fp, date("Y/m/d_H:i:s")."\t{$w_code}\t{$_SERVER['REMOTE_ADDR']}\t{$_SERVER['REMOTE_PORT']}\n");
		fclose($fp);
	}



	function login_connect(){
		if(isset($_COOKIE["setup"])){
			setcookie("setup", true, time()+3600);
		}else{
			setcookie("setup", false, time()+3600);
			header("Location: index.php");
			exit();
		}
	}



	function DB_connect(){
		$ini = parse_ini_file($_SERVER["DOCUMENT_ROOT"]."/config/conf.ini");
		$dsn = "mysql:dbname=".$ini["db_name"].";host=".$ini["db_server"];
		try{
			$dbh = new PDO($dsn, $ini["db_user"], $ini["db_password"]);
		}catch (PDOException $e){
			return false;
		}

		return $dbh;
	}



	function makeRandStr($length) {
		$str = array_merge(range('a', 'z'), range('0', '9'), range('A', 'Z'));
		$r_str = null;
		for ($i = 0; $i < $length; $i++) {
			$r_str .= $str[rand(0, count($str) - 1)];
		}
		return $r_str;
	}
?>