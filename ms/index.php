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
	<p><a href="./links/index.php">インターネットリンク</a></p>
	<p><a href="link_top.php">ツイッターアカウント</a></p>
	<p><a href="./friend/index.php">友だち管理</a></p>

</body>

</html>
