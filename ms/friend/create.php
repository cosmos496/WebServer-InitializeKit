<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	$pdo = DB_connect();

	$name = $_POST["name"];
	$r_year = $_POST["r_year"];
	$r_month = $_POST["r_month"];
	$r_day = $_POST["r_day"];
	$age = $_POST["age"];
	$email = $_POST["e-mail"];
	$another = $_POST["another"];

	$stmt = $pdo -> prepare("INSERT INTO friend_info (id, name, r_year, r_month, r_day, age, email, another) VALUES (:id, :name, :r_year, :r_month, :r_day, :age, :email, :another)");
	$stmt->bindParam(":id", makeRandStr(8), PDO::PARAM_STR);
	$stmt->bindParam(":name", $name, PDO::PARAM_STR);
	$stmt->bindParam(":r_year", $r_year, PDO::PARAM_INT);
	$stmt->bindParam(":r_month", $r_month, PDO::PARAM_INT);
	$stmt->bindParam(":r_day", $r_day, PDO::PARAM_INT);
	$stmt->bindParam(":age", $age, PDO::PARAM_INT);
	$stmt->bindParam(":email", $email, PDO::PARAM_STR);
	$stmt->bindParam(":another", $another, PDO::PARAM_STR);
	$stmt->execute();

/*
	$datas = array($name, $r_year, $r_month, $r_day, $age, $email, $another);
	$fp = fopen("friend.csv", "a");
	$line = implode(",", $datas);
	fwrite($fp, $line."\n");
	fclose($fp);
*/
	header("Location: createForm.php");
	exit();
?>
