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
echo<<<EOL
	{$_POST["name"]}
		{$_POST["r_year"]}
			{$_POST["r_month"]}
				{$_POST["r_day"]}
					{$_POST["age"]}
						{$_POST["twitter"]}
EOL;

?>
</body>

</html>
