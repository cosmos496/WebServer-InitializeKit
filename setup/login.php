<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	logfile_writing("SYSTEM_ACCESS");

	$pass = sha1($_POST["setup_ps"]);

	if($_POST["setup_id"] == $ini["setup_id"] && $pass == $ini["setup_pass"]){
		$ini["port_num"] = $_SERVER["REMOTE_PORT"];
		$ini["ip_add"] = $_SERVER["REMOTE_ADDR"];
		
		$fp = fopen("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini", 'w');
		foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");
		fclose($fp);

		mb_language("Japanese");
		mb_internal_encoding("UTF-8");
		$datetime = date("Y/m/d H:i:s");

		$email = $ini["sys_email"];
		$subject = "ログイン"; // 題名 
		$body = "システムへのアクセスを検出しました。\n\n\nログイン日時 : {$datetime}\n\nユーザーエージェント : {$_SERVER['HTTP_USER_AGENT']}\n\nIPアドレス : {$_SERVER['REMOTE_ADDR']}\n\nポートNo : {$_SERVER['REMOTE_PORT']}\n"; // 本文
		$to = $ini["contact_email"];
		$header = "From: {$email}\nReply-To: {$email}\n";
 
		mb_send_mail($to, $subject, $body, $header);

		setcookie("setup", true, time()+3500);
		header("Location: home.php");
		exit();
	}else{

	}

	header("Location: index.php");
	exit();
?>