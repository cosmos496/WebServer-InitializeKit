<?php
	if($_GET["id"] == null){
		header("Location: index.php");
		exit();
	}

	$file = file("links.csv");
	unset($file[$_GET["id"]]);
	file_put_contents("links.csv", $file);

	header("Location: index.php");
	exit();
?>