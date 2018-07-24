<?php 
	$host = "localhost";
	$username = "root";
	$password = "rachmat7224628";
	$dbname = "db_poliklinik"; 

	$conn = mysqli_connect($host,$username,$password,$dbname);
	if ($conn) {
		
	} else {
		die("Mysql Error");
	}

?>