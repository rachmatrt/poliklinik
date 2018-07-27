<?php 
include "archive/header.php";
$idantri = (int) $_GET['antri'] ;

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
        <li class="breadcrumb-item active"> Bukti Pembayaran</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Bukti Pembayaran</div>
      <div class="card-body">
        <form method="POST" action="uploadbayar.php?antriane=<?php echo $idantri; ?>" enctype="multipart/form-data">
          <div class="form-group">
          Pilih file: <input type="file"  name="berkas" />
        <input type="submit" name="upload" class="btn btn-danger mt-3" value="upload" />
    	</form>	
      </div>
      </div>
	  </div>
	</div>
	</div> 
</div>


<?php include "archive/footer.php";?>