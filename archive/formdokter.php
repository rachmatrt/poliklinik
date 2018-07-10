<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Poliklinik Surabaya</title>
  <!-- Bootstrap core CSS-->
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Page level plugin CSS-->
  <link href="../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin.css" rel="stylesheet">
</head>
<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Tambah Dokter</div>
      <div class="card-body">
        <form name="tambahdokter" method="POST" action="../behind/tambahdokter.php">
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
            <a name="adddokter" class="btn btn-success">Tambah</a>
            <a href="../dokter.php" class="btn btn-danger">Batal</a>
            </div >

        </div>
      </div>
    </div>
  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>