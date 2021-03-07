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
    <link rel="stylesheet" href="style/tsukamoto.css"/>

    <!-- <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" /> -->

    <script src="https://kit.fontawesome.com/0c4bdc880a.js" crossorigin="anonymous"></script>
    

    <title>Lihat Data</title>
  </head>
  <body>

    <?php include "koneksi.php"; ?>

        <div class="container" data-aos="fade-up">
        <div class="row content">
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
                    
                <?php

            $mulai=$_POST['mulai'];
            $masa=$_POST['masa'];
            $masa2=$masa-1;
            $bulan_ke=$mulai+$masa2;
            $z = 0;

            if ($mulai && $masa <= 12) {
                


            $max_permintaan_temp=mysqli_query($koneksi, "select	max(permintaan)	as	a	from

            permintaan where id>=$mulai and id<=$bulan_ke");
            $max_permintaan_temp2=mysqli_fetch_array($max_permintaan_temp);
            $max_permintaan=$max_permintaan_temp2['a'];

            $min_permintaan_temp=mysqli_query($koneksi, "select min(permintaan) as a from permintaan

            where id>=$mulai and id<=$bulan_ke");
            $min_permintaan_temp2=mysqli_fetch_array($min_permintaan_temp);
            $min_permintaan=$min_permintaan_temp2['a'];

            $max_persediaan_temp=mysqli_query($koneksi, "select max(persediaan) as a from persediaan

            where id>=$mulai and id<=$bulan_ke");
            $max_persediaan_temp2=mysqli_fetch_array($max_persediaan_temp);
            $max_persediaan=$max_persediaan_temp2['a'];

            $min_persediaan_temp=mysqli_query($koneksi, "select min(persediaan) as a from persediaan

            where id>=$mulai and id<=$bulan_ke");
            $min_persediaan_temp2=mysqli_fetch_array($min_persediaan_temp);
            $min_persediaan=$min_persediaan_temp2['a'];
            $max_produksi_temp=mysqli_query($koneksi, "select max(produksi) as a from produksi where

            id>=$mulai and id<=$bulan_ke");
            $max_produksi_temp2=mysqli_fetch_array($max_produksi_temp);
            $max_produksi=$max_produksi_temp2['a'];

            $min_produksi_temp=mysqli_query($koneksi, "select min(produksi) as a from produksi where

            id>=$mulai and id<=$bulan_ke");
            $min_produksi_temp2=mysqli_fetch_array($min_produksi_temp);
            $min_produksi=$min_produksi_temp2['a'];

            $xt=($max_permintaan+$min_permintaan)/2;

            $yt=($max_persediaan+$min_persediaan)/2;
            $zt=($max_produksi+$min_produksi)/2;
            $x=$_POST['x'];
            $y=$_POST['y'];

            // mencari miu Permintaan

            if ($x<=$min_permintaan){
            $miu_pmt_turun=1;
            $miu_pmt_tetap=0;
            $miu_pmt_naik=0;
            }
            else if (($x>=$min_permintaan) and ($x<=$max_permintaan)){
            $miu_pmt_turun=($max_permintaan-$x)/($max_permintaan-$min_permintaan);
            $miu_pmt_naik=($x-$min_permintaan)/($max_permintaan-$min_permintaan);

            if ($x==$xt){

            $miu_pmt_tetap=1;
            }
            else if (($x>$min_permintaan) and ($x<$xt)){
            $miu_pmt_tetap=($x-$min_permintaan)/($xt-$min_permintaan);
            }
            else if(($x>$xt) and ($xt<$max_permintaan)){
            $miu_pmt_tetap=($max_permintaan-$x)/($max_permintaan-$xt);
            }
            else if (($x<=min_permintaan) or ($x>=$max_permintaan)){
            $miu_pmt_tetap=0;
            }
            }
            else if ($x>=$max_permintaan){
            $miu_pmt_turun=0;
            $miu_pmt_tetap=0;
            $miu_pmt_naik=1;
            }

            //mencari miu Persediaan Barang

            If ($y<=$min_persediaan){
            $miu_psd_sedikit=1;
            $miu_psd_sedang=0;
            $miu_psd_banyak=0;
            }
            else if (($y>=$min_persediaan) and ($y<=$max_persediaan)){
            $miu_psd_sedikit=($max_persediaan-$y)/($max_persediaan-$min_persediaan);
            $miu_psd_banyak=($y-$min_persediaan)/($max_persediaan-$min_persediaan);

            if ($y==$yt){

            $miu_psd_sedang=1;
            }
            else if (($y>$min_persediaan) and ($y<$yt)){
            $miu_psd_sedang=($y-$min_persediaan)/($yt-$min_persediaan);
            }
            else if(($y>$yt) and ($yt<$max_persediaan)){
            $miu_psd_sedang=($max_persediaan-$y)/($max_persediaan-$yt);
            }
            else if (($y<=min_persediaan) or ($y>=$max_persediaan)){
            $miu_psd_sedang=0;
            }
            }
            else if ($y>=$max_persediaan){
            $miu_psd_sedikit=0;
            $miu_psd_sedang=0;
            $miu_psd_banyak=1;
            }
 
if ($z >= 1) {
            //mencari miu Produksi barang
            if ($y<=$min_produksi){
            $miu_pr_berkurang=1;
            $miu_pr_tetap=0;
            $miu_pr_bertambah=0;
            }
            
            else if (($z>=$min_produksi) and ($z<=$max_produksi)){
            $miu_pr_berkurang=($max_produksi-$z)/($max_produksi-$min_produksi);
            $miu_pr_bertambah=($z-$min_produksi)/($max_produksi-$min_produksi);

            if ($z==$zt){

            $miu_pr_tetap=1;
            }
            else if (($z>$min_produksi) and ($z<$zt)){
            $miu_pr_tetap=($z-$min_produksi)/($zt-$min_produksi);
            }
            else if(($z>$zt) and ($zt<$max_produksi)){
            $miu_pr_tetap=($max_produksi-$z)/($max_produksi-$zt);
            }
            else if (($z<=min_produksi) or ($z>=$max_produksi)){
            $miu_pr_tetap=0;
            }
            }
            else if ($z>=$max_produksi) {
            $miu_pr_berkurang=0;
            $miu_pr_tetap=0;
            $miu_pr_bertambah=1;
            }
        }       
            //aturan

            //[R1] IF Permintaan TURUN AND Persediaan BANYAK THEN Produksi Barang BERKURANG
            $alfa_satu=min($miu_pmt_turun,$miu_psd_banyak);
            $z1=$max_produksi-($max_produksi-$min_produksi)*$alfa_satu;


            //[R2] IF Permintaan TURUN AND Persediaan SEDANG THEN Produksi Barang BERKURANG
            $alfa_dua=min($miu_pmt_turun,$miu_psd_sedang);
            $z2=$max_produksi-($max_produksi-$min_produksi)*$alfa_dua;

            //[R3] IF Permintaan TURUN AND Persediaan SEDIKIT THEN Produksi Barang BERKURANG
            $alfa_tiga=min($miu_pmt_turun,$miu_psd_sedikit);
            $z3=$max_produksi-($max_produksi-$min_produksi)*$alfa_tiga;

            //[R4] IF Permintaan TETAP AND Persediaan BANYAK THEN Produksi Barang BERKURANG
            $alfa_empat=min($miu_pmt_tetap,$miu_psd_banyak);
            $z4=$max_produksi-($max_produksi-$min_produksi)*$alfa_empat;

            //[R5] IF Permintaan TETAP AND Persediaan SEDANG THEN Produksi Barang TETAP

            $alfa_lima=min($miu_pmt_tetap,$miu_psd_sedang);
            $z5=$zt;

            //[R6] IF Permintaan TETAP AND Persediaan SEDIKIT THEN Produksi Barang BERTAMBAH
            $alfa_enam=min($miu_pmt_tetap,$miu_psd_sedikit);
            $z6=$alfa_enam*($max_produksi-$min_produksi)+$min_produksi;


            //[R7]IF Permintaan NAIK AND Persediaan BANYAK THEN Produksi Barang BERTAMBAH
            $alfa_tujuh=min($miu_pmt_naik,$miu_psd_banyak);
            $z7=$alfa_tujuh*($max_produksi-$min_produksi)+$min_produksi;

            //[R8] IF Permintaan NAIK AND Persediaan SEDANG THEN Produksi Barang BERTAMBAH
            $alfa_delapan=min($miu_pmt_naik,$miu_psd_sedang);
            $z8=$alfa_delapan*($max_produksi-$min_produksi)+$min_produksi;

            //[R9]IF Permintaan NAIK AND Persediaan SEDIKIT THEN Produksi Barang BERTAMBAH
            $alfa_sembilan=min($miu_pmt_naik,$miu_psd_sedikit);
            $z9=$alfa_sembilan*($max_produksi-$min_produksi)+$min_produksi;

            print ("<b>Data Selama $masa bulan, mulai bulan ke $mulai sampai bulan ke $bulan_ke</b><br>");

            print ("Permintaan Maksimum=$max_permintaan<br>"); 
            echo "Permintaan Minimum=$min_permintaan<br>"; 
            print ("Permintaan Tetap=$xt<br>");
            echo "<br>";
            echo "Persediaan Maksimum=$max_persediaan<br>";
            echo "Persediaan Minimum=$min_persediaan<br>";
            print ("Persediaan Sedang=$yt<br>");
            echo "<br>";
            echo "Produksi Maksimum=$max_produksi<br>";
            echo "Produksi Minimum=$min_produksi<br>";
            print ("Produksi Tetap=$zt<br><br>");
            echo "<br>";
            echo "<b>Data saat ini:</b><br>";
            echo "Permintaan=$x<br>";
            echo "Persediaan=$y<br><br>";
            print("<b>Hasil Perhitungan Variabel-Variabel</b><br><br>"); print("<b>miu</b><br>");

            print("miu permintaan turun=$miu_pmt_turun<br>"); print ("miu permintaan tetap=$miu_pmt_tetap<br>"); print("miu permintaan naik=$miu_pmt_naik<br>"); print("miu persediaan sedikit=$miu_psd_sedikit<br>"); print("miu persediaan sedang=$miu_psd_sedang<br>"); print("miu persediaan banyak=$miu_psd_banyak<br><br>");

            print("<b>Nilai alfa untuk setiap aturan</b><br>");

            print("alfa 1 = min($miu_pmt_turun,$miu_psd_banyak)=$alfa_satu<br>"); print("alfa 2 = min($miu_pmt_turun,$miu_psd_sedang)=$alfa_dua<br>"); print("alfa 3 = min($miu_pmt_turun, $miu_psd_sedikit)=$alfa_tiga<br>"); print("alfa 4 = min($miu_pmt_tetap,$miu_psd_banyak)=$alfa_empat<br>"); print("alfa 5 = min($miu_pmt_tetap, $miu_psd_sedang)=$alfa_lima<br>"); print("alfa 6 = min($miu_pmt_tetap, $miu_psd_sedikit)=$alfa_enam<br>"); print("alfa 7 = min($miu_pmt_naik, $miu_psd_banyak)=$alfa_tujuh<br>"); print("alfa 8 = min($miu_pmt_naik, $miu_psd_sedang)=$alfa_delapan<br>"); print("alfa 9 = min($miu_pmt_naik, $miu_psd_sedikit)=$alfa_sembilan<br><br>");

            print("<b>Nilai z untuk setiap aturan</b><br>");

            print("z1=$z1<br>");
            print("z2=$z2<br>");
            print("z3=$z3<br>");
            print("z4=$z4<br>");
            print("z5=$z5<br>");
            print("z6=$z6<br>");
            print("z7=$z7<br>");
            print("z8=$z8<br>");
            print("z9=$z9<br><br>");

            $alfaz1=$alfa_satu*$z1;

            $alfaz2=$alfa_dua*$z2;
            $alfaz3=$alfa_tiga*$z3;
            $alfaz4=$alfa_empat*$z4;
            $alfaz5=$alfa_lima*$z5;
            $alfaz6=$alfa_enam*$z6;
            $alfaz7=$alfa_tujuh*$z7;
            $alfaz8=$alfa_delapan*$z8;
            $alfaz9=$alfa_sembilan*$z9;
            $alfaz_total=$alfaz1+$alfaz2+$alfaz3+$alfaz4+$alfaz5+$alfaz6+$alfaz7+$alfaz8+$alfaz9;
            $alfa_total=$alfa_satu+$alfa_dua+$alfa_tiga+$alfa_empat+$alfa_lima+$alfa_enam+
            $alfa_tujuh+$alfa_delapan+$alfa_sembilan;

            print ("<b>Nilai alfa.z dari setiap aturan ((a1*z1 + an*zn)/a1 + an )</b><br>");

            print("alfaz1=$alfaz1<br>");
            print("alfaz2=$alfaz2<br>");
            print("alfaz3=$alfaz3<br>");
            print("alfaz4=$alfaz4<br>");
            print("alfaz5=$alfaz5<br>");
            print("alfaz6=$alfaz6<br>");
            print("alfaz7=$alfaz7<br>");
            print("alfaz8=$alfaz8<br>");
            print("alfaz9=$alfaz9<br><br>");

            print("alfaz_total=$alfaz_total<br>");
            print("alfa_total=$alfa_total<br><br>");
            ?>

        <?php

        // rumus mencari total alfa*rule / alfa+alfa+1+2....

        //Jumlah barang yang harus diproduksi
        $Zcari=($alfa_satu*$z1+$alfa_dua*$z2+$alfa_tiga*$z3+$alfa_empat*$z4+$alfa_lima*$z5+$alfa_enam*$z6+$alfa_tujuh*$z7+$alfa_delapan*$z8+$alfa_sembilan*$z9 )/($alfa_satu+$alfa_dua+$alfa_tiga+ $alfa_empat+$alfa_lima+$alfa_enam+$alfa_tujuh+$alfa_delapan+$alfa_sembilan);

        print ("Jadi, Menurut perhitungan metode <i>Fuzzy Tsukamoto</i>, jumlah Beras yang akan diproduksi

        oleh PT. BULOG sebanyak: <b>$Zcari</b> Ton<br><br>"); 
        ?>


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
}

else {
    $message = "data yang anda masukkan tidak tersedia";
    header('Refresh: 1; url=itsukamoto_admin.php'); 
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
</body>
</html>
