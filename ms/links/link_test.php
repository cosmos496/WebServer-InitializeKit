<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";

	$url = "http://kindworks337.main.jp/setup/";
	$html = file_get_contents($url);
	$html = mb_convert_encoding($html, mb_internal_encoding(), "auto" );
	preg_match( "/<title>(.*?)<\/title>/i", $html, $matches);
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<title>管理システム｜<?php print($ini['sys_name']);?></title>
	<meta charset="<?php print($ini['encoding']);?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="<?php print($ini['cmn_css']);?>" type="text/css">
</head>

<body>
<?php
print("<p>{$matches}</p>");
?>
</body>

</html>