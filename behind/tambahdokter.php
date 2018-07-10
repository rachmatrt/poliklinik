<?php 
include "nyambung.php";



$namalengkap = $_POST['namalengkap'];
$alamat = $_POST['alamat'];
$username = $_POST['username'];
$password = $_POST['password'];
$date = date("y-m-d h:m:s");

$adddokter = "INSERT INTO users VALUES ('','$username','$password','$namalengkap','$alamat', 'dokter', '', '$date','$date' )"; 

if ($conn->query($adddokter) === TRUE) {
    header('location: ../dokter.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('location: formdokter.php');
}


?>
