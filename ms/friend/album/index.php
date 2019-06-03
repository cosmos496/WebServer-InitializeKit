<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<title>管理システム｜<?php print($ini['sys_name']);?></title>
	<meta charset="<?php print($ini['encoding']);?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="<?php print($ini['cmn_css']);?>" type="text/css">
	<script src="<?php print($ini['cmn_js']);?>" type="text/javascript"></script>
</head>

<?php
	$pdo = DB_connect();
	if(!$_GET["id"]){header("../index.php");exit();}
	$pwd = "../../../img/".$_GET["id"];
?>

<body>
	<h1 id="sys-name"><?php print($ini['sys_name']);?></h1>
	<?php
		$pdo = DB_connect();
		$stmt = $pdo->prepare("SELECT * FROM friend_info WHERE id=:id");
		$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
		$stmt->execute();
		$res = $stmt->fetch();
	?>
	<h2><?php print($res["name"]);?></h2>
	<?php
		if(!file_exists($pwd)){
			print("<p>写真がありません！</p>");
		}

		foreach(glob($pwd.'/{*.gif,*.jpg,*.png,*.JPG}',GLOB_BRACE) as $file){
    if(is_file($file)){
        echo "<img src='{$file}' width='200px' height='auto'>";
    }
}
	?>

	<form action="photo-upload.php?id=<?php print($_GET["id"]);?>" method="post" enctype="multipart/form-data">
		<input type="file" name="photo">
		<input type="submit" value="OK">
	</form>
</body>

</html>
