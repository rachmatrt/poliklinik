<?php 
include "nyambung.php";



$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = date("y-m-d h:m:s");

$adddokter = "INSERT INTO users (username,password,nama_lengkap,alamat,role,token,created_at,updated_at) VALUES('$username','$password','$namalengkap','$alamat','dokter','','$date','$date')"; 

if ($conn->query($adddokter) === TRUE) {
    header('location: ../dokter.php');

} else {
    echo "Error: " . $adddokter . "<br>" . $conn->error;
    header('location: ../formdokter.php');
}

$conn->close();

?>
