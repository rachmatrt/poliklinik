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
            <input class="form-control"  type="text" aria-describedby="namalengkap" placeholder="Nama Lengkap" name="namalengkap" >

            <label for="exampleInputEmail1">Alamat</label>
            <input class="form-control" type="text" aria-describedby="alamat" placeholder="Nama Lengkap" name="alamat" >

            <label for="exampleInputEmail1">Username</label>
            <input class="form-control"  type="text" aria-describedby="emailHelp" placeholder="username" name="username" >
          
          
            <label for="exampleInputPassword1">Password</label>
            <input class="form-control" type="password" placeholder="Password" name="password" >

            <div style="text-align: center; margin-top: 4%;">
            <button name="adddokter" class="btn btn-success">Tambah</button>
            <a href="dokter.php" class="btn btn-danger">Batal</a>
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