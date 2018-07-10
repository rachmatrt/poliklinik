<?php include "archive/header.php";
include "behind/nyambung.php"; 
$query=$conn->query("select * from users where role ='dokter' ");
$urut = 0;
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">List Dokter</li>
     </ol>
     <div style="text-align: right; margin-bottom: 2%;">
         <a href="formdokter.php" class="btn btn-success">Tambah</a>
     </div>
     <table class="table table-striped">
     		<tr>
     			<td>No</td>
     			<td>Nama</td>
                <td>Alamat</td>
                <td>Action</td>
     		</tr>
            <?php while ($row = $query->fetch_array()){ $urut++; ?>
            <tr>
             <td><?php echo $urut ?> </td>
             <td><?php echo $row["nama_lengkap"] ?></td>
             <td><?php echo $row["alamat"] ?></td>  
             <td>
                <a href="" class="btn btn-primary">Edit</a>
                <a href="" class="btn btn-danger">Hapus</a>
            </td> 
            </tr> <?php } ?>           
     </table>
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>