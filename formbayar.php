<?php 
include "archive/header.php"; 
include "behind/nyambung.php";
$idantri = (int) $_GET['antri'];
?>
<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="periksa.php"> Form Pemeriksaan</a>
        </li>
        <li class="breadcrumb-item active"> Form Pembayaran</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Form Pembayaran</div>
      <div class="card-body">
        <form  method="POST" action="behind/addbayar.php?antriane=<?php echo $idantri; ?>">
          <div class="form-group">
          <?php 
          $query =$conn->query( "SELECT * FROM antrian where id = '$idantri' ");
          $row = $query->fetch_array();
          ?>
          	<label >Kode Pasien</label>
            <input class="form-control" type="text" placeholder="<?php echo $idantri;?>" name="idpasien" disabled >          
            <label >Nama Pasien</label>
            <input class="form-control"  type="text" placeholder="<?php echo $row["nama_pasien"]?>" name="namapasien" disabled >
            <label >Macam Tindakan</label>
            <textarea class="form-control"  type="text" disabled ><?php
	            $q_tindakan = $conn->query("SELECT * FROM pemeriksaan JOIN poli_tindakan on poli_tindakan.id = pemeriksaan.tindakan_id WHERE antrian_id = '$idantri'");
	            $tota_biaya = 0;
	            while($row = mysqli_fetch_assoc($q_tindakan)) {
	            	$tota_biaya = $tota_biaya + (int) $row["biaya_tindakan"];
	            	echo $row["nama_tindakan"] ."(". $row["biaya_tindakan"] .")" . " , ";
	            }
	        ?></textarea>
            <label >Total Biaya</label>
            <input class="form-control"  type="text" value="<?php echo $tota_biaya; ?>" name="total_bayar" readonly>
            <label > Dibayarkan</label>
            <input class="form-control"  type="number" placeholder="dibayarkan" name="diterima" resquired >                        
            <div style="text-align: center; margin-top: 4%;">
            <button name="addaction" class="btn btn-success">Simpan</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan Pembayaran ?')) { window.location = 'periksa.php' }" class="btn btn-danger">Batal</a>
            </div >

          </div>
    	</form>	
      </div>
      </div>
	  </div>
	</div>
	</div> 
</div>

<?php $conn ->close();
include "archive/footer.php";
?>