<?php
	include "nyambung.php";
	session_start();
	
	$username = $_POST["username"];
	$password = $_POST["password"];

	$getuser = "SELECT * FROM users where username = '$username'";
	$user = mysqli_fetch_assoc(mysqli_query($conn, $getuser));

	if($username == "" || $password == "") {
		$_SESSION["notif_error"] = "Data tidak boleh kosong.";
    header('location: ../login.php');
    return;
	}

	if (count(json_encode($user)) > 0) {
    if (password_verify($password, $user["password"])) {
    	$token = str_shuffle("abcdefghijdaniahmadjdeaje".rand());
    	$_SESSION["token"] = $token;
    	$_SESSION["userlogin"] = $user;
    	$update_token = mysqli_query($conn, "UPDATE users set token = '$token'");
			if($update_token) {
				$textlog = $user["username"]." login";
				include "log.php";
    		header('location: ../dashboard.php');
			} else {
    		$_SESSION["notif_error"] = "Gagal menyimpan token.";
    		header('location: ../login.php');
			}
		} else {
			$_SESSION["notif_error"] = "Username atau Password yang anda masukkan salah.";
    	header('location: ../login.php');
		}
	} else {
	  $_SESSION["notif_error"] = "Username atau Password yang anda masukkan salah.";
    header('location: ../login.php');
	}

	// $pass = '$2y$10$bqg8Gfb8B0AhVWG8Zl.ySOdfkUfW9l8MMTqzld5b212QknxU.HXRK';
	// echo password_verify('deaje', $pass);
?>