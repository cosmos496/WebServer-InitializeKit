<?php
	require_once $_SERVER['DOCUMENT_ROOT']."/sys/common.php";

	if($_COOKIE["setup"] == true){
		header("Location: home.php");
		exit();
	}
?>

<!DOCTYPE html>
<html lang="ja">

<head>
	<title>setup｜<?php print($ini["sys_name"]);?></title>
	<meta charset="<?php print($ini['encoding']);?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="<?php print($ini['cmn_css']);?>" type="text/css">
</head>

<body>
	<h1 id="sys-name"><?php print($ini["sys_name"]);?></h1>
	<form action="login.php" method="post">
		<table border="0">
			<tr>
				<td><p>SETUP_ID</p></td>
				<td><input type="text" name="setup_id"></td>
			</tr>
			<tr>
				<td><p>PASSWORD</p></td>
				<td><input type="password" name="setup_ps"></td>
			</tr>
		</table>
		<input type="submit" value="LOGIN">
	</form>
</body>

</html>