<?php
	include "behind/nyambung.php";
	$id_antrian = (int) $_GET["antri"];
	$antrian = "SELECT * FROM antrian INNER JOIN poli on poli.id = antrian.poli_id WHERE antrian.id = $id_antrian";
	$data_antrian = mysqli_fetch_assoc($conn->query($antrian));
	$pemeriksaan = "SELECT * FROM pemeriksaan INNER JOIN poli_tindakan on poli_tindakan.id = pemeriksaan.tindakan_id WHERE pemeriksaan.antrian_id = $id_antrian GROUP BY pemeriksaan.id";
	$data_pemeriksaan = $conn->query($pemeriksaan);
	$dokter = "SELECT * FROM users INNER JOIN pemeriksaan ON pemeriksaan.dokter_id = users.id 
	WHERE antrian_id = '$id_antrian' ORDER BY role='dokter'";
	$data_dokter = mysqli_fetch_array($conn->query($dokter));
	$pembayaran = "SELECT * FROM pembayaran WHERE pembayaran.antrian_id = $id_antrian";
	$data_pembayaran = mysqli_fetch_assoc($conn->query($pembayaran));
	$date=date("d M Y");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Poliklinik Surabaya </title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body>
<div class="container mt-5" align="center">
 <div class="table-responsive">
 <table class="table" style="font-size: 20px;">
 	<tr >
 	<td colspan="3" align="center">
 	<label style="font-size: 40px;">Poliklinik Surabaya</label></td>
 	</tr>
 	<tr>
 		<td align="right"> ID Antrian :</td>
 		<td colspan="2" ><?php echo $id_antrian; ?></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right" width="300px"> Nama Pasien :</td>
 		<td colspan="2" ><?php echo $data_antrian["nama_pasien"]; ?></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right"> Poliklinik :</td>
 		<td colspan="2" ><?php echo $data_antrian["nama_poli"]; ?></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right"> Tindakan :</td>
 		<td colspan="2" ><input type="text" style="width: 100%;" value="<?php
  while($row = $data_pemeriksaan->fetch_array()) {
  	echo " ".$row["nama_tindakan"] ."(". $row["biaya_tindakan"] .")" . " , ";
  }
?>" disabled></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right"> Total Pembayaran :</td>
 		<td colspan="2" ><input type="text" style="width: 100%;" 
 		value="<?php  echo "  Rp.".$data_pembayaran["total_bayar"]; ?>" disabled></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right"> Diterima :</td>
 		<td colspan="2" ><input type="text" style="width: 100%;" 
 		value="<?php  echo "  Rp.".$data_pembayaran["diterima"]; ?>" disabled></td> 		 		 		
 	</tr>
 	<tr>
 		<td align="right"> Uang Kembalian :</td>
 		<td colspan="2" ><input type="text" style="width: 100%;" 
 		value="<?php  echo "  Rp.".$data_pembayaran["kembalian"]; ?>" disabled></td> 		 		 		
 	</tr>
 	<tr>
 		<td colspan="3" align="right">
 		<label style="padding-right: 10%;">Surabaya, <?php echo $date;?></label></td>
 	</tr>
 	<tr align="center">
 		<td colspan="2">Pembayar,</td>
 		<td width="50%" >Pemeriksa, </td>
 	</tr>
 	<tr align="center">
 		<td colspan="2" height="100px"> </td>
 		<td width="50%" height="100px"> </td>
 	</tr>
 	<tr align="center">
 		<td colspan="2" ><?php echo $data_antrian["nama_pasien"]; ?> </td>
 		<td width="50%" ><?php echo $data_dokter["nama_lengkap"]; ?></td>
 	</tr>
 </table>
 </div>	
</div>

</body>



<?php $conn->close();
?>
    
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <script src="js/sb-admin.min.js"></script>
    <script src="js/sb-admin-datatables.min.js"></script>

</html>

<script>
  window.print();
</script>

