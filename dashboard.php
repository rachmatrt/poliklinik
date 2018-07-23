<?php 
include "archive/header.php" ; 
include "behind/nyambung.php";
$date = date("d-m-Y");
$time = date("h:m:s");?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Poliklinik Surabaya</li>
      </ol>  
      <div class="row" align="center">
        <div class="col-md-3 col-xs-3 col-sm-3">
          <div class="card text-white bg-primary o-hidden h-100">
            <div class="card-body" style="font-size: 32px;">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-user-md"></i>
              </div>
              <div class="mr-5">Master Dokter</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="dokter.php">
              <span class="float-left">List Dokter</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body" style="font-size: 32px;">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-medkit"></i>
              </div>
              <div class="mr-5">Master Obat</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="obat.php">
              <span class="float-left">List Obat</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3">
          <div class="card text-white bg-danger o-hidden h-100">
            <div class="card-body" style="font-size: 32px;">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-heartbeat"></i>
              </div>
              <div class="mr-5">Master Poliklinik</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="poli.php">
              <span class="float-left">List Poliklinik</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-md-3 col-xs-3 col-sm-3">
          <div class="card text-white bg-success o-hidden h-100">
            <div class="card-body" style="font-size: 32px;">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-wheelchair"></i>
              </div>
              <div class="mr-5">Master Antrian</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="antrianhal.php">
              <span class="float-left">List Antrian</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
       <?php 
            $query = $conn->query("SELECT * FROM poli");
            while ($row = $query->fetch_array()) { ?>
    <div class="col-md-3 col-xs-3 col-sm-3" style="padding: 0px 5px 0px 0px;" >
    <div class="card card-login mt-5">
      <div class="card-header" style="background-color: #88c3f7; text-align: center;color:#ffffff; font-size: 24px;">
      Poliklinik <?php echo $row["nama_poli"]; ?>
      </div>
      <?php 
    $date2 = date("Y-m-d");
    $id2 = (int) $row["id"];
    $query2 = "SELECT * FROM antrian WHERE poli_id = '$id2' AND tanggal = '$date2' ORDER BY no_antrian DESC LIMIT 1";
    $hasil2 = mysqli_query($conn, $query2);
    $row2 = mysqli_fetch_array($hasil2);
      ?>
      <div class="card-body">
        
          <div class="form-group" style="text-align: center;">
           <label style="font-size: 20px;"> Jumlah Antrian : </label>
           <div class="alert alert-danger" style="font-size: 46px; padding :0px 0px 0px 0px;"><?php echo $row2["no_antrian"]; ?></div>
          </div>
      
      </div>
      </div>
      </div>
      
      <?php }?>  
  </div>
 </div>
</div>

<?php include "archive/footer.php" ; ?>