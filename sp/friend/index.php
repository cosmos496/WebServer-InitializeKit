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
	<h2>フレンド検索フォーム</h2>
	<p><a href="createForm.php">新規作成</a></p>

	<table border="1" width="95%">
		<tr>
			<td>名前</td>
			<td>生年月日/td>
			<td>年齢</td>
			<td>確認</td>
		</tr>
		<?php

			$pdo = DB_connect();
			$stmt = $pdo->query("SELECT * FROM friend_info");
			while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				$id = $row["id"];
				print("<tr>");
				print("<td>{$row['name']}</td>");
				print("<td>{$row['r_year']}/{$row['r_month']}/{$row['r_day']}</td>");
				print("<td>{$row['age']}</td>");
				print("<td><a href='profile.php?id={$id}'>詳細</a></td>");
				print("</tr>");
			}
		?>
	</table>

</body>

</html>
