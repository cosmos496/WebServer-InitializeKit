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
	<p><a href="index.php">ホームへ</a></p>

	<h2>フレンド新規作成フォーム</h2>
	<p><a href="index.php">検索フォームへ</a></p>
	<form action="create.php" method="post">
		<table border="0">
			<tr>
				<td><p>名前</p></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><p>生まれ年</p></td>
				<td><input type="text" name="r_year"></td>
			</tr>
			<tr>
				<td><p>生まれ月</p></td>
				<td><input type="text" name="r_month"></td>
			</tr>
			<tr>
				<td><p>生まれ日</p></td>
				<td><input type="text" name="r_day"></td>
			</tr>
			<tr>
				<td><p>年齢</p></td>
				<td><input type="text" name="age"></td>
			</tr>
			<tr>
				<td><p>メールアドレス</p></td>
				<td><input type="text" name="e-mail"></td>
			</tr>
			<tr>
				<td><p>備考欄</p></td>
				<td><textarea name="another" rows="4" cols="40"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="追加">
	</form>
</body>

</html>
