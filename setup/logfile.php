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
	<p><a href="home.php">戻る</a>
<?php
	$len = mb_strlen("{$_SERVER['DOCUMENT_ROOT']}/log/");
	foreach(glob("{$_SERVER['DOCUMENT_ROOT']}/log/*") as $file){
		if(is_file($file)){
			$file = htmlspecialchars($file);
			$file = substr($file, $len);
			echo "<p>・<a href='logfile_open.php?id={$file}'>".$file."</a>｜<a href='logfile_download.php?cmd=download&id={$file}'>ダウンロード</a></p>";
		}
	}
?>
</body>

</html>