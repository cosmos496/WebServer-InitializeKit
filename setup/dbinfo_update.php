<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";

	if ($ini['db_name'] != $_POST['db_name']){
		$ini['db_name'] = $_POST['db_name'];
		logfile_writing("DB_NAME_UPDATE");
	}
	if ($ini['db_server'] != $_POST['db_server']){
		$ini['db_server'] = $_POST['db_server'];
		logfile_writing("DB_SERVER_UPDATE");
	}
	if ($ini['db_user'] != $_POST['db_user']){
		$ini['db_user'] = $_POST['db_user'];
		logfile_writing("DB_USER_UPDATE");
	}
	if ($ini['db_password'] != $_POST['db_password']){
		$ini['db_password'] = $_POST['db_password'];
		logfile_writing("DB_PASSWORD_UPDATE");
	}

	$fp = fopen("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini", 'w');
	foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");
	fclose($fp);

	logfile_writing("DATABASE_UPDATE");
	header("Location: home.php?complete=dbinfo");
	exit();
?>