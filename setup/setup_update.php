<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";

	if ($_POST['setup_id']) $ini['setup_id'] = $_POST['setup_id'];
	if ($_POST['setup_pass']) $ini['setup_pass'] = sha1($_POST['setup_pass']);
	if ($_POST['sys_email']){
		if($_POST['sys_email'] != $ini['sys_email']){
			$system_email="update";
		}
		$ini['sys_email'] = $_POST['sys_email'];
	}
	if ($_POST['contact_email']){
		if($_POST['contact_email'] != $ini['contact_email']){
			$contact_email="update";			
		}
		$ini['contact_email'] = $_POST['contact_email'];
	}

	$fp = fopen("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini", 'w');
	foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");
	fclose($fp);

	mb_language("Japanese");
	mb_internal_encoding("UTF-8");

	if($system_email == "update"){
		$email = "test-program@system.co.jp";
		$subject = "メールアドレスの登録完了";
		$body = "システム上で使用するメールアドレスの登録を完了しました！";
		$to = $ini["sys_email"];
		$header="From: $email\nReply-To: $email\n";

		mb_send_mail($to, $subject, $body, $header);
	}

	if($contact_email == "update"){
		$email = "test-program@system.co.jp";
		$subject = "メールアドレスの登録完了";
		$body = "システムとのコンタクト用のメールアドレスの登録を完了しました！";
		$to = $ini["contact_email"];
		$header="From: $email\nReply-To: $email\n";

		mb_send_mail($to, $subject, $body, $header);
	}

	logfile_writing("SETUP_UPDATE");
	header("Location: home.php?complete=setup");
	exit();
?>