<?php
		$fpath = "{$_SERVER['DOCUMENT_ROOT']}/config/conf.ini";
		//ファイル名
		$fname = "config.ini";

		header('Content-Type: application/force-download');
		header('Content-Length: '.filesize($fpath));
		header('Content-disposition: attachment; filename="'.$fname.'"');
		readfile($fpath);
?>