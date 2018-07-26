<?php
	$filename = "log.txt";
	if (file_exists($filename)) {
		$myfile = fopen($filename, "r");
		$datalog = fread($myfile, filesize($filename))."\r\n";
		fclose($myfile);
	}
	else {
		$datalog = "";
	}

	$log = fopen($filename, "w");
	fwrite($log, $datalog);
	fwrite($log, date("d-m-Y H:i:s")." ".$textlog);
	fclose($log);
?>