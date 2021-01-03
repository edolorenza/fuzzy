<?php
session_start();
if (isset($_SESSION['user'])){
?>
<html>
<head>
<title>Administrator</title>
</head>
<body bgcolor=white>
<?php
include "koneksi.php";


?>
<br><br><br>

<table width=1000px height="700px" align=center cellpadding=1 cellspacing=1 border=1>

<tr>
<th width="199" height="100" valign="top">
<table border=5 cellpadding=1 cellspacing=1>

<tr valign="middle"><td width="198"  height="25" bgcolor=grey><a href=admin.php><b><font color=black>Home</font></b></a></td></tr>

<tr	valign="middle"><td	height="25"	bgcolor=grey><a
href=olahdata_admin.php><b><font color=black>Olah Data</font></b></a></td></tr>

<tr	valign="middle"><td	height="25"	bgcolor=grey><a
href=lihatdata_admin.php><b><font color=black>Lihat Data</font></b></a></td></tr>


<tr valign="middle"><td height="25" bgcolor=grey><a href=logout.php><b><font color=black>Logout</font></b></a></td></tr>

</table>
</th>
<td width="792" rowspan="2" valign=top align="justify"><font color=black>




<?php

$mulai=$_POST['mulai'];
$masa=$_POST['masa'];
$masa2=$masa-1;
$hari_ke=$mulai+$masa2;

if ($mulai && $masa <= 12) {
    


$max_permintaan_temp=mysqli_query($koneksi, "select	max(permintaan)	as	a	from

permintaan where id>=$mulai and id<=$hari_ke");
$max_permintaan_temp2=mysqli_fetch_array($max_permintaan_temp);
$max_permintaan=$max_permintaan_temp2['a'];

$min_permintaan_temp=mysqli_query($koneksi, "select min(permintaan) as a from permintaan

where id>=$mulai and id<=$hari_ke");
$min_permintaan_temp2=mysqli_fetch_array($min_permintaan_temp);
$min_permintaan=$min_permintaan_temp2['a'];

$max_persediaan_temp=mysqli_query($koneksi, "select max(persediaan) as a from persediaan

where id>=$mulai and id<=$hari_ke");
$max_persediaan_temp2=mysqli_fetch_array($max_persediaan_temp);
$max_persediaan=$max_persediaan_temp2['a'];

$min_persediaan_temp=mysqli_query($koneksi, "select min(persediaan) as a from persediaan

where id>=$mulai and id<=$hari_ke");
$min_persediaan_temp2=mysqli_fetch_array($min_persediaan_temp);
$min_persediaan=$min_persediaan_temp2['a'];
$max_produksi_temp=mysqli_query($koneksi, "select max(produksi) as a from produksi where

id>=$mulai and id<=$hari_ke");
$max_produksi_temp2=mysqli_fetch_array($max_produksi_temp);
$max_produksi=$max_produksi_temp2['a'];

$min_produksi_temp=mysqli_query($koneksi, "select min(produksi) as a from produksi where

id>=$mulai and id<=$hari_ke");
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

print ("<b>Data Selama $masa Hari, mulai hari ke $mulai sampai hari ke $hari_ke</b><br>");

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

print ("Jadi, Menurut perhitungan metode <i>Fuzzy Tsukamoto</i>, jumlah Roti yang akan diproduksi

oleh PT TOP 100 sebanyak: <b>$Zcari</b> biji<br><br>"); ?>



</font></td>

</tr>
<tr>
<th valign="top"> </th>
</tr>
</table>
<?php
}
}

else {
    $message = "data yang anda masukkan tidak teredai";
    header('Refresh: 1; url=itsukamoto_admin.php'); 
    echo "<script type='text/javascript'>alert('$message');</script>";
}
?>
</body>
</html>
