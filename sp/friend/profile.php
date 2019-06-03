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

<body>
	<h1 id="sys-name"><?php print($ini['sys_name']);?></h1>
	<p><a href="index.php">一覧へ</a></p>

	<?php
		$pdo = DB_connect();
		$stmt = $pdo->prepare("SELECT * FROM friend_info WHERE id=:id");
		$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
		$stmt->execute();
		$res = $stmt->fetch();
	?>
	<p>名前：<?php print($res["name"]);?></p>
	<p>生年月日：<?php print($res["r_year"]."/".$res["r_month"]."/".$res["r_day"]);?></p>
	<p>年齢：<?php print($res["age"]."歳");?></p>
	<p>twitter：<?php print($res["twitter"]);?></p>
	<p>line名：<?php print($res["linename"]);?></p>
	<p>メールアドレス：<?php print($res["email"]);?></p>
	<p>メモ：<?php print($res["another"]);?></p>
	<p>
	<p><a href="./album/index.php?id=<?php print($res["id"]);?>">アルバムへ</a>｜<a href="updateForm.php?id=<?php print($res["id"]);?>">変更</a></p>
</body>

</html>
