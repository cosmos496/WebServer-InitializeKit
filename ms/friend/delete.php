<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	$pdo = DB_connect();

	$del = $_GET["id"];

	$stmt = $pdo->prepare("DELETE FROM friend_info WHERE id = :id");
	$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
	$stmt->execute();
	
	header("Location: index.php");
	exit();
?>