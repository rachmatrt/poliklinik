<?php
	session_start();
	$textlog = $_SESSION["userlogin"]["username"]." logout";
	include "log.php";
	session_unset();
	header("location: ../index.php");
?>