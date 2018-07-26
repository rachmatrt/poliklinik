<?php
	include "behind/nyambung.php";
	$id_antrian = $_GET["antri"];
	
	$antrian = "SELECT * FROM antrian INNER JOIN poli on poli.id = antrian.poli_id WHERE antrian.id = $id_antrian";
	$data_antrian = mysqli_fetch_assoc($conn->query($antrian));

	$pemeriksaan = "SELECT * FROM pemeriksaan INNER JOIN poli_tindakan on poli_tindakan.id = pemeriksaan.tindakan_id WHERE pemeriksaan.antrian_id = $id_antrian GROUP BY pemeriksaan.id";
	$data_pemeriksaan = $conn->query($pemeriksaan);

	$pembayaran = "SELECT * FROM pembayaran WHERE pembayaran.antrian_id = $id_antrian";
	$data_pembayaran = mysqli_fetch_assoc($conn->query($pembayaran));

	echo "Nama Pasien : ".$data_antrian["nama_pasien"];
	echo "<br>Poli : ".$data_antrian["nama_poli"];
	echo "<br>Tindakan Pemeriksaan : ";

  while($row = $data_pemeriksaan->fetch_array()) {
  	echo $row["nama_tindakan"] ."(". $row["biaya_tindakan"] .")" . " , ";
  }

  echo "<br>Total Bayar : ".$data_pembayaran["total_bayar"];
  echo "<br>Uang Bayar : ".$data_pembayaran["diterima"];
  echo "<br>Uang Kembalian : ".$data_pembayaran["kembalian"];
?>

<script>
  window.print();
</script>