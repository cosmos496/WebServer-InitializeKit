<?php
	require_once "{$_SERVER['DOCUMENT_ROOT']}/sys/common.php";
	login_connect();

	$pdo = DB_connect();
	if($pdo != false){
		$ini['db_connect'] = "OK";
	}else{
		$ini['db_connect'] = "NG";
	}

	$fp = fopen("{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini", 'w');
	foreach ($ini as $k => $i) fputs($fp, "$k=$i\n");
	fclose($fp);
?>


<!DOCTYPE html>
<html lang="ja">


<head>
	<title>セットアップ｜<?php print($ini["sys_name"]);?></title>
	<meta charset="<?php print($ini['encoding']);?>">
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="<?php print($ini['cmn_css']);?>" type="text/css">
	<script src="<?php print($ini['cmn_js']);?>" type="text/javascript"></script>
</head>

<!--
<script type="text/javascript">
	disp("conf_out.php", "CONFIG_FILES");
</script>
-->

<body>
	<!-- ## タイトル ################################################ -->
	<h1 id="sys-name"><?php print($ini["sys_name"]);?> <span id="page-name">- SystemSetup</span></h1>
	<!-- ############################################################ -->


	<!-- ## 各種リンク ################################################ -->
	<span>
		<a href="conf_out.php">CONFIG_OUTPUT</a>｜
		<a href="/ms/index.php" target="_blank">MANAGEMENT_SYS</a>｜
		<a href="logfile.php">LOGFILE_OUTPUT</a>｜
		<a href="logout.php">LOGOUT</a>
	</span>
	<!-- ############################################################ -->

	<br><br><br>

	<!-- ## セットアップ ################################################ -->
	<form action="setup_update.php" method="post">
		<?php
		if($_GET["complete"] == "setup"){
			print("<p>* 情報の更新が完了しました！</p>");
		}
		?>
		<table border="0">
			<tr>
				<td><p>セットアップID</p></td>
				<td><input type="text" name="setup_id" value="<?php print($ini["setup_id"]);?>"></td>
			</tr>
			<tr>
				<td><p>パスワード</p></td>
				<td><input type="password" name="setup_pass"></td>
			</tr>
			<tr>
				<td><p>システムメールアドレス</p></td>
				<td><input type="text" name="sys_email" value="<?php print($ini["sys_email"]);?>"></td>
			</tr>
			<tr>
				<td><p>連絡用メールアドレス</p></td>
				<td><input type="text" name="contact_email" value="<?php print($ini["contact_email"]);?>"></td>
			</tr>
		</table>
		<input type="reset" value="リセット">
		<input type="submit" value="更新">
	</form>
	<!-- ############################################################ -->

	<br><br><br>

	<!-- ## システム系情報 ################################################ -->
	<form action="sysinfo_update.php" method="post">
		<?php
		if($_GET["complete"] == "sys-info"){
			print("<p>* 情報の更新が完了しました！</p>");
		}
		?>
		<table border="0">
			<tr>
				<td><p>ドメイン名</p></td>
				<td><input type="text" name="domain" value="<?php print($ini['domain']);?>"></td>
			</tr>
			<tr>
				<td><p>システム名</p></td>
				<td><input type="text" name="sys_name" value="<?php print($ini['sys_name']);?>"></td>
			</tr>
			<tr>
				<td><p>ホスト名</p></td>
				<td><input type="text" name="sys_host" value="<?php print($ini['sys_host']);?>"></td>
			</tr>
			<tr>
				<td><p>ユーザー名</p></td>
				<td><input type="text" name="sys_user" value="<?php print($ini['sys_user']);?>"></td>
			</tr>
		</table>
		<input type="reset" value="リセット">
		<input type="submit" value="更新">
	</form>
	<!-- ############################################################ -->

	<br><br><br>

	<!-- ## データベース系情報 ################################################ -->
	<form action="dbinfo_update.php" method="post">
		<p>データベースとの接続状況【<?php
			$pdo = DB_connect();
			if($pdo != false) print("良好");
			else print("エラー");
		?>】</p>
		<?php
		if($_GET["complete"] == "dbinfo"){
			print("<p>* 情報の更新が完了しました！</p>");
		}
		?>
		<table border="0">
			<tr>
				<td><p>DB名</p></td>
				<td><input type="text" name="db_name" value="<?php print($ini['db_name']);?>"></td>
			</tr>
			<tr>
				<td><p>サーバー</p></td>
				<td><input type="text" name="db_server" value="<?php print($ini['db_server']);?>"></td>
			</tr>
			<tr>
				<td><p>ユーザー名</p></td>
				<td><input type="text" name="db_user" value="<?php print($ini['db_user']);?>"></td>
			</tr>
				<td><p>パスワード</p></td>
				<td><input type="password" name="db_password" value="<?php print($ini['db_password']);?>"></td>
			</tr>
		</table>
		<input type="reset" value="リセット">
		<input type="submit" value="更新">
	</form>
	<!-- ############################################################ -->
</body>


</html>
