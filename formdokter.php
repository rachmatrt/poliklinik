<?php include "archive/header.php";?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item">
        	<a href="dokter.php"> List Dokter</a>
        </li>
        <li class="breadcrumb-item active"> Form Dokter</li>
     </ol>
     <div class="card card-login mx-auto mt-5">
      <div class="card-header">Tambah Dokter</div>
      <div class="card-body">
        <form  method="POST" action="behind/tambahdokter.php">
          <div class="form-group">
            <label for="exampleInputEmail1">Nama Lengkap</label>
            <input class="form-control"  type="text" aria-describedby="namalengkap" placeholder="Nama Lengkap" name="namalengkap" required>

            <label for="exampleInputEmail1">Alamat</label>
            <input class="form-control" type="text" aria-describedby="alamat" placeholder="Alamat Anda" name="alamat" required>

            <label for="exampleInputEmail1">Username</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" placeholder="username" name="username" required>
          
          
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password" required>

            <div style="text-align: center; margin-top: 4%;">
            <button name="adddokter" class="btn btn-success">Tambah</button>
            <a onclick="if(confirm('Apakah anda ingin membatalkan penambahan dokter ?')) { window.location = 'dokter.php' }" class="btn btn-danger">Batal</a>
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