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
        	<a href="obat.php"> List Obat</a>
        </li>
        <li class="breadcrumb-item active"> Form Obat</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Tambah Obat</div>
      <div class="card-body">
        <form  method="POST" action="behind/addobat.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Obat</label>
            <input class="form-control"  type="text" aria-describedby="namalengkap" placeholder="Nama Obat" name="namaobat" required>

            <label for="exampleInputEmail1">Deskripsi</label>
            <textarea class="form-control" type="text" aria-describedby="alamat" placeholder="Deskripsi" name="descrip" > </textarea>

            <label for="exampleInputEmail1">Harga</label>
            <input class="form-control"  type="number" aria-describedby="Harga" placeholder="harga" name="harganya" required >
          
          
            <label for="exampleInputPassword1">Stok</label>
            <input class="form-control" type="number" placeholder="Stok" name="stok" required>

            <div style="text-align: center; margin-top: 4%;">
            <button name="addobat" class="btn btn-success">Tambah</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan penambahan Dokter ?')) { window.location = 'obat.php' }" class="btn btn-danger">Batal</a>
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