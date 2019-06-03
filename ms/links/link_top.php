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
	<p><a href="index.php">ホームへ</a></p>

	<div>
		<h2>リンク</h2>
		<a href="link_test.php">テスト</a>
		<p><a href="/setup/index.php" target="_blank">セットアップ</a> | <a href="links.csv">CSVファイル</a></p>

		<form action="link_update.php" method="post">
			<table border="0">
				<tr>
					<td><p>name</p></td>
					<td><input type="text" name="name"></td>
					<td><p>link</p></td>
					<td><input type="text" name="link"></td>
				</tr>
			</table>
			
			<input type="reset" value="リセット">
			<input type="submit" value="追加">
		</form>

		<p>登録されたリンクの一覧</p>
		<?php
			$lines = file("links.csv");
			$i = 0;

			foreach($lines as $line){
				$data = explode(",", $line);
				$links[$i][0] = $data[0];
				$links[$i][1] = $data[1];
				$i++;
			}

			print("<table border='0'>");

			for($j=0;$j<$i;$j++){
print <<< EOM
<tr>
	<td><p>{$links[$j][0]}</p></td>
	<td><p><a href='{$links[$j][1]}' target='_blank'>{$links[$j][1]}</a></p></td>
	<td><p><a href='link_delete.php?id={$j}'>[削除]</a></p></td>
</tr>
EOM;

			}

			print("</table>");
		?>
	</div>
</body>

</html>