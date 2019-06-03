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
	<p><a href="logfile.php">戻る</a>
<?php
	print("<p>Date_Time AccessName IPAddess PortNumber</p>");
	$fp = fopen($_SERVER["DOCUMENT_ROOT"]."/log/".$_GET["id"], "r");
	while(($line = fgets($fp))){
		print("<p>{$line}</p>");
	}
?>
</body>

</html>