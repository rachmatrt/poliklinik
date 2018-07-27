<?php
	// include "../behind/nyambung.php";
	session_start();

	if(isset($_SESSION["userlogin"]) && isset($_SESSION["token"])) {
		$userlogin = $_SESSION["userlogin"];
		$token = $_SESSION["token"];

		$getuser = "SELECT * FROM users where username = '".$userlogin['username']."'";
		$user = mysqli_fetch_assoc(mysqli_query($conn, $getuser));

		if($token != $user["token"]) {
	    header('location: ../login.php');
		}
	}
	else {
	  header('location: login.php');
	}
?>