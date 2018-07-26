<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$dbname = "db_poli"; 

	$conn = mysqli_connect($host,$username,$password,$dbname);
	if ($conn) {
		
	} else {
		die("Mysql Error");
	}

?>