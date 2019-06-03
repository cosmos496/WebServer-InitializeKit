<?php
	if($_GET["cmd"] == "download"){
		$fpath = "{$_SERVER['DOCUMENT_ROOT']}/log/{$_GET['id']}";
		//ファイル名
		$fname = $_GET["id"];

		header('Content-Type: application/force-download');
		header('Content-Length: '.filesize($fpath));
		header('Content-disposition: attachment; filename="'.$fname.'"');
		readfile($fpath);
	}
?>