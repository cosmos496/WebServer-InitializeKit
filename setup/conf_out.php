<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	login_connect();
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<title>ConfigFile｜<?php print($ini["sys_name"]);?></title>
	<meta charset="<?php print($ini['encoding']);?>">
	<link rel="stylesheet" href="<?php print($ini['cmn_css']);?>" type="text/css">
</head>

<body>
	<h1 id="sys-name"><?php print($ini["sys_name"]);?> <span id="page-name">- ConfigFiles</span></h1>
	<p><a href="home.php">戻る</a>　<a href="conf.ini">原本を表示</a>　<a href="conf_download.php">設定をバックアップ</a></p>
<?php
	$fp = fopen("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini", 'r');
	while (!feof($fp)) {
	  $txt = fgets($fp);
	  echo $txt.'<br>';
	}
	fclose($fp);
?>
</body>

</html>