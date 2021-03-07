<?php
session_start();
if (isset($_SESSION['user'])){
?>

<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="description" content=""/>
    <meta name="author" content="" />


    <!-- bootstrap 4 -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="style/lihatdata.css"/>

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->

    <script src="https://kit.fontawesome.com/0c4bdc880a.js" crossorigin="anonymous"></script>
    

    <title>Lihat Data</title>
  </head>
  <body>

    <?php include "koneksi.php"; ?>

    <div class="container" data-aos="fade-up">
        <div class="row  content">
            <div class="col-md-3 text-center" style="background-color: #f1f6f9;">
                <h2 class="mt-2">Menu</h2>
                <div class="mt-2">
                    <a class="btn btn-primary btn-custom2 d-block" href="admin.php" role="button">Home</a>
                </div>
                 <div class="mt-2">
                    <a class="btn btn-primary btn-custom2 d-block" href="olahdata_admin.php">Olah Data</a>
                </div>
                <div class="mt-2">
                    <a class="btn btn-primary btn-custom2 d-block" href="lihatdata_admin.php">Lihat Data</a>
                </div>
                <div class="mt-2 mb-2">
                    <a class="btn btn-primary btn-custom2 d-block" href="logout.php">Log Out</a>
                </div>
            </div>

            <div class="col-md-9" style="background-color: #dbf6e9;" >
                <div class="content-fuzzy text-center">
                
                <table class="table">
                    <td><b>No</b></td>
                    <td><b>Bulan</b></td>
                    <td><b>Permintaan</b> </td>
                    <td><b>Persediaan</b></td>
                    <td><b>Produksi</b></td></tr>

                    <?php
                    $query=mysqli_query($koneksi, "select * from tanggal");
                    while ($result=mysqli_fetch_array($query)){
                        $id=$result['id'];
                        $query2=mysqli_query($koneksi, "select * from permintaan where id='$id'");
                        $result2=mysqli_fetch_array($query2);
                        $query3=mysqli_query($koneksi, "select * from persediaan where id='$id'");
                        $result3=mysqli_fetch_array($query3);
                        $query4=mysqli_query($koneksi, "select * from produksi where id='$id'");
                        $result4=mysqli_fetch_array($query4);
                        echo "<tr><td>$id</td>
                        <td>$result[tanggal]</td>
                        <td>$result2[permintaan]</td>
                        <td>$result3[persediaan]</td>
                        <td>$result4[produksi]</td></tr>";
                    }
                    ?>

                </table>
                    
                </div>
            </div>

        </div>
    </div>

    <footer>
        <div class="container-fluid">
            <div class="row footer-content">
            <div class="col-12 text-center">
                <p class="pt-4 pb-2">
                Copyright <i class="fas fa-copyright"></i> <?php echo date("Y");?> Kelompok 7
                </p>
            </div>
            </div>
        </div>
    </footer>
        
    <!-- Bootstrap core JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>

<?php
}
?>
</body>
</html>
