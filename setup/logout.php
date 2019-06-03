<?php
 	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
 	session_start();

	setcookie("setup", false, time()-1);
	session_destroy();


	logfile_writing("ACCESS_END");
	header("Location: index.php");
	exit();
?>