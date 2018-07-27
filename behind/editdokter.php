<?php 
include "nyambung.php";

$idedit2 = (int) $_GET['id'];
$nama = $_POST['namalengkap2'];
$alamat = $_POST['alamat2'];
$username = $_POST['username2'];
$password = $_POST['password2'];
$date = date("y-m-d h:m:s");	

$diganti = "UPDATE users SET username='$username', password='$password', nama_lengkap='$nama', alamat='$alamat', updated_at='$date' WHERE id='$idedit2'";

if ($conn->query($diganti) === TRUE) {
    header('location: ../dokter.php');

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    //header('location: ../editdokter.php');
}

$conn->close();
?>