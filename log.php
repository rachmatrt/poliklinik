<?php include "archive/header.php";
include "behind/nyambung.php"; 
include "auth/admin.php";
?>

<div class="content-wrapper">
    <div class="container-fluid">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="dashboard.php">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Log</li>
     </ol>
     <div class="alert alert-primary" style="font-size: 46px; text-align: center"> Log</div>
     <textarea style="height: 400px; width: 100%"><?php 
            $filename = "behind/log.txt";
            if (file_exists($filename)) {
                $myfile = fopen($filename, "r");
                echo fread($myfile, filesize($filename))."\r\n";
                fclose($myfile);
            }
            else {
                echo "tidak ada log.";
            }
        ?>
     </textarea>
	</div>
</div>

<?php 
$conn->close();
include "archive/footer.php";
?>