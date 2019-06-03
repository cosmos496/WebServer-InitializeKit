<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";

	if ($ini['domain'] != $_POST['domain']){
		$ini['domain'] = $_POST['domain'];
		logfile_writing("DOMAIN_UPDATE");
	}
	if ($ini['sys_name'] !=$_POST['sys_name']){
		$ini['sys_name'] = $_POST['sys_name'];
		logfile_writing("SYSTEMNAME_UPDATE");
	}
	if ($ini['sys_host'] != $_POST['sys_host']){
		$ini['sys_host'] = $_POST['sys_host'];
		logfile_writing("HOSTNAME_UPDATE");
	}
	if ($ini['sys_user'] != $_POST['sys_user']){
		$ini['sys_user'] = $_POST['sys_user'];
		logfile_writing("USERNAME_UPDATE");
	}

	$fp = fopen('../config/conf.ini', 'w');
	foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");
	fclose($fp);

	logfile_writing("SYSTEM_UPDATE_COMPLETE");
	header("Location: home.php?complete=sys-info");
	exit();
?>