<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "poliklinik"; 

	$conn = mysqli_connect($host,$username,$password,$dbname);
	if ($conn) {
		
	} else {
		die("Mysql Error");
	}

?>