<?php
include "koneksi.php";
$id=$_POST['id'];
if (trim($_POST['tanggal'])){
$tanggal=$_POST['tanggal'];
mysqli_query($koneksi, "update tanggal set tanggal='$tanggal' where id='$id'");
}
if (trim($_POST['permintaan'])){
$permintaan=$_POST['permintaan'];
mysqli_query($koneksi, "update permintaan set permintaan='$permintaan' where id='$id'");
}
if (trim($_POST['persediaan'])){
$persediaan=$_POST['persediaan'];
mysqli_query($koneksi, "update persediaan set persediaan='$persediaan' where id='$id'");
}
if (trim($_POST['produksi'])){
$produksi=$_POST['produksi'];
mysqli_query($koneksi, "update produksi set produksi='$produksi' where id='$id'");
}

header ('location:edit_admin.php');

?>
