<?php
	if($_POST["name"]==null){
		$url = $_POST["link"];
		//ソースの取得
		$source = @file_get_contents($url);
		//文字コードをUTF-8に変換し、正規表現でタイトルを抽出
		if (preg_match('/<title>(.*?)<\/title>/i', mb_convert_encoding($source, 'UTF-8', 'ASCII,JIS,UTF-8,EUC-JP,SJIS'), $result)) {
		    $title = $result[1];
		}
		$_POST["name"] = $title;
	}

	if($_POST["link"]==null){
		header("Location: index.php");
		exit();
	}

	$datas = array($_POST["name"], $_POST["link"]);
	$fp = fopen("links.csv", "a");
	$line = implode(",", $datas);
	fwrite($fp, $line."\n");
	fclose($fp);

	header("Location: index.php");
	exit();
?>