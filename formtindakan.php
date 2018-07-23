<?php include "archive/header.php";?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="antrianhal.php"> List Antrian</a>
        </li>
        <li class="breadcrumb-item active"> Form Antrian</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Form Tindakan</div>
      <div class="card-body">
        <form  method="POST" action="behind/addpoli.php">
          <div class="form-group">

            <label for="exampleInputEmail1">Nama Tindakan</label>
            <textarea class="form-control" type="text" aria-describedby="alamat"  name="action" required> </textarea>
            
            <label for="exampleInputEmail1">Biaya</label>
            <input class="form-control"  type="number" aria-describedby="Harga" placeholder="Biaya" name="biaya" required >

            <div style="text-align: center; margin-top: 4%;">
            <button name="addaction" class="btn btn-success">Tambah</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan tindakan ?')) { window.location = 'antrianhal.php' }" class="btn btn-danger">Batal</a>
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