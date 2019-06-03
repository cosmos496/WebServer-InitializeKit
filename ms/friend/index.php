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
	<p><a href="../index.php">ホームへ</a></p>

	<h2>フレンド検索フォーム</h2>
	<p><a href="createForm.php">新規作成</a></p>
	<form action="find.php">
		<table border="0">
			<tr>
				<td><p>名前</p></td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td><p>現在の状態</p></td>
				<td><input type="text" name="state"></td>
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
				<td><p>きっかけ</p></td>
				<td><input type="text" name="meet"></td>
			</tr>
			<tr>
				<td><p>備考欄</p></td>
				<td><textarea name="another" rows="4" cols="40"></textarea></td>
			</tr>
		</table>
		<input type="submit" value="検索開始">
	</form>

	<table border="1">
		<tr>
			<td>ID</td>
			<td>名前</td>
			<td>生まれ年</td>
			<td>生まれ月</td>
			<td>生まれ日</td>
			<td>年齢</td>
			<td>メールアドレス</td>
			<td>備考欄</td>
			<td>変更</td>
			<td>削除</td>
		</tr>
		<?php
		/*
			$lines = file("friend.csv");
			$i = 0;
			foreach($lines as $line){
				$data = explode(",", $line);
				$frd[$i][0] = $data[0];
				$frd[$i][1] = $data[1];
				$frd[$i][2] = $data[2];
				$frd[$i][3] = $data[3];
				$frd[$i][4] = $data[4];
				$frd[$i][5] = $data[5];
				$frd[$i][6] = $data[6];

				echo "<tr>\n";
				echo "<td>{$frd[$i][0]}</td>";
				echo "<td>{$frd[$i][1]}</td>";
				echo "<td>{$frd[$i][2]}</td>";
				echo "<td>{$frd[$i][3]}</td>";
				echo "<td>{$frd[$i][4]}</td>";
				echo "<td>{$frd[$i][5]}</td>";
				echo "<td>{$frd[$i][6]}</td>";
				echo "</tr>";
			}*/

			$pdo = DB_connect();
			$stmt = $pdo->query("SELECT * FROM friend_info");
			while($row = $stmt -> fetch(PDO::FETCH_ASSOC)){
				$id = $row["id"];
				print("<tr>");
				print("<td>{$row['id']}</td>");
				print("<td>{$row['name']}</td>");
				print("<td>{$row['r_year']}</td>");
				print("<td>{$row['r_month']}</td>");
				print("<td>{$row['r_day']}</td>");
				print("<td>{$row['age']}</td>");
				print("<td>{$row['email']}</td>");
				print("<td>{$row['another']}</td>");
				print("<td><a href='profile.php?id={$id}'>詳細</a></td>");
				print("<td><a href='delete.php?id={$id}'>削除</a></td>");
				print("</tr>");
			}
		?>
	</table>
</body>

</html>
