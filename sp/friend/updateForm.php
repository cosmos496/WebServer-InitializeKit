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
	<?php
		if($ini["db_connect"] == "NG"){
			print("<p style='color: #ff0000;'>*データベースへの接続ができません！<br>　設定ファイルは<a href='/setup/index.php'>こちら</a>から</p>");
		}
	?>
	<p><a href="index.php">一覧へ</a></p>

	<?php
		$pdo = DB_connect();
		$stmt = $pdo->prepare("SELECT * FROM friend_info WHERE id=:id");
		$stmt->bindParam(":id", $_GET["id"], PDO::PARAM_STR);
		$stmt->execute();
		$res = $stmt->fetch();
	?>
	<form action="update.php?id=<?php print($res["id"]);?>" method="post">
		<p>なまえ - Name -</p>
		<span><input type="text" name="name" size="10" value="<?php print($res["name"]);?>"></span>

		<p>生年月日 - BirthDay - </p>
		<p><input type="text" name="r_year" size="4" value="<?php print($res["r_year"]);?>">年
				<input type="text" name="r_month" size="2" value="<?php print($res["r_month"]);?>">月
				<input type="text" name="r_day" size="2" value="<?php print($res["r_day"]);?>">日</p>

		<p>年齢 - Age -</p>
		<span><input type="text" name="age" size="3" value="<?php print($res["age"]);?>">歳</span>

		<p>twitter</p>
		<span><input type="text" name="twitter" size="10" value="<?php print($res["twitter"]);?>"></span>

		<p>LINE</p>
		<span><input type="text" name="linename" size="10" value="<?php print($res["linename"]);?>"></span>

		<p>メールアドレス</p>
		<span><input type="text" name="email" size="20" value="<?php print($res["email"]);?>"></span>

		<p>メモ</p>
		<textarea name="another" rows="4" cols="40"><?php print($res["another"]);?></textarea>

		<input type="submit" value="OK">
	</form>
</body>

</html>
