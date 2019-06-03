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
<?php
	print("['SERVER_SOFTWARE'] = >".$_SERVER["SERVER_SOFTWARE"]."<br>");
	print("['REQUEST_URI'] = >".$_SERVER["REQUEST_URI"]."<br>");
	print("['DOCUMENT_ROOT'] = >".$_SERVER["DOCUMENT_ROOT"]."<br>");
	print("['GATEWAY_INTERFACE'] = >".$_SERVER["GATEWAY_INTERFACE"]."<br>");
	print("['HTTP_ACCEPT'] = >".$_SERVER["HTTP_ACCEPT"]."<br>");
	print("['HTTP_ACCEPT_ENCODING'] = >".$_SERVER["HTTP_ACCEPT_ENCODING"]."<br>");
	print("['HTTP_ACCEPT_LANGUAGE'] = >".$_SERVER["HTTP_ACCEPT_LANGUAGE"]."<br>");
	print("['HTTP_CONNECTION'] = >".$_SERVER["HTTP_CONNECTION"]."<br>");
	print("['HTTP_HOST'] = >".$_SERVER["HTTP_HOST"]."<br>");
	print("['HTTP_REFERER'] = >".$_SERVER["HTTP_REFERER"]."<br>");
	print("['HTTP_USER_AGENT'] = >".$_SERVER["HTTP_USER_AGENT"]."<br>");
	print("['PATH'] = >".$_SERVER["PATH"]."<br>");
	print("['PHPRC'] = >".$_SERVER["PHPRC"]."<br>");
	print("['QUERY_STRING'] = >".$_SERVER["QUERY_STRING"]."<br>");
	print("['REDIRECT_STATUS'] = >".$_SERVER["REDIRECT_STATUS"]."<br>");
	print("['REDIRECT_UNIQUE_ID'] = >".$_SERVER["REDIRECT_UNIQUE_ID"]."<br>");
	print("['REDIRECT_URL'] = >".$_SERVER["REDIRECT_URL"]."<br>");
	print("['REMOTE_ADDR'] = >".$_SERVER["REMOTE_ADDR"]."<br>");
	print("['REMOTE_PORT'] = >".$_SERVER["REMOTE_PORT"]."<br>");
	print("['REQUEST_METHOD'] = >".$_SERVER["REQUEST_METHOD"]."<br>");
	print("['SCRIPT_FILENAME'] = >".$_SERVER["SCRIPT_FILENAME"]."<br>");
	print("['SCRIPT_NAME'] = >".$_SERVER["SCRIPT_NAME"]."<br>");
	print("['SERVER_ADDR'] = >".$_SERVER["SERVER_ADDR"]."<br>");
	print("['SERVER_ADMIN'] = >".$_SERVER["SERVER_ADMIN"]."<br>");
	print("['SERVER_NAME'] = >".$_SERVER["SERVER_NAME"]."<br>");
	print("['SERVER_PORT'] = >".$_SERVER["SERVER_PORT"]."<br>");
	print("['SERVER_PROTOCOL'] = >".$_SERVER["SERVER_PROTOCOL"]."<br>");
	print("['SERVER_SIGNATURE'] = >".$_SERVER["SERVER_SIGNATURE"]."<br>");
	print("['UNIQUE_ID'] = >".$_SERVER["UNIQUE_ID"]."<br>");
	print("['PHP_SELF'] = >".$_SERVER["PHP_SELF"]."<br>");
	print("['REQUEST_TIME'] = >".$_SERVER["REQUEST_TIME"]."<br>");
?>
</body>

</html>