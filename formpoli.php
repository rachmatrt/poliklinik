<?php 
include "archive/header.php";
include "auth/admin.php";
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="poli.php"> List Poliklinik</a>
        </li>
        <li class="breadcrumb-item active"> Form Poliklinik</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Tambah Poliklinik</div>
      <div class="card-body">
        <form  method="POST" action="behind/addpoli.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Poliklinik</label>
            <input class="form-control"  type="text" aria-describedby="namalengkap" placeholder="Nama poli" name="namapoli" required>
            
            <label for="exampleInputEmail1">Harga</label>
            <input class="form-control"  type="number" aria-describedby="Harga" placeholder="Biaya" name="hargapoli" required >

            <div style="text-align: center; margin-top: 4%;">
            <button name="addobat" class="btn btn-success">Tambah</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan penambahan Poliklinik ?')) { window.location = 'poli.php' }" class="btn btn-danger">Batal</a>
            </div >

          </div>
    	</form>	
      </div>
      </div>
	  </div>
	</div>
	</div> 
</div>

<?php 
include "archive/footer.php";
?>