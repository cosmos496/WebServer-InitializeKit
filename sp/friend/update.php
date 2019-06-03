<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	$pdo = DB_connect();

	$stmt = $pdo->prepare("UPDATE friend_info SET name=:name, r_year=:r_year, r_month=:r_month, r_day=:r_day, age=:age, twitter=:twitter, linename=:linename, linememo=:linememo, another=:another,email=:email WHERE id=:id");
	$stmt->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
	$stmt->bindParam(":r_year", $_POST["r_year"], PDO::PARAM_INT);
	$stmt->bindParam(":r_month", $_POST["r_month"], PDO::PARAM_INT);
	$stmt->bindParam(":r_day", $_POST["r_day"], PDO::PARAM_INT);
	$stmt->bindParam(":age", $_POST["age"], PDO::PARAM_INT);
	$stmt->bindParam(":twitter", $_POST["twitter"], PDO::PARAM_STR);
	$stmt->bindParam(":linename", $_POST["linename"], PDO::PARAM_STR);
	$stmt->bindParam(":linememo", $_POST["linememo"], PDO::PARAM_STR);
	$stmt->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
	$stmt->bindParam(":another", $_POST["another"], PDO::PARAM_STR);
	$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
	$stmt->execute();

	header("Location: profile.php?id={$_GET['id']}");
	exit();
?>
