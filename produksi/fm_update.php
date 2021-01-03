<?php
include "koneksi.php";
$id=$_POST['id'];
if (trim($_POST['tanggal'])){
$tanggal=$_POST['tanggal'];
mysql_query("update tanggal set tanggal='$tanggal' where id='$id'");
}
if (trim($_POST['permintaan'])){
$permintaan=$_POST['permintaan'];
mysql_query("update permintaan set permintaan='$permintaan' where id='$id'");
}
if (trim($_POST['persediaan'])){
$persediaan=$_POST['persediaan'];
mysql_query("update persediaan set persediaan='$persediaan' where id='$id'");
}
if (trim($_POST['produksi'])){
$produksi=$_POST['produksi'];
mysql_query("update produksi set produksi='$produksi' where id='$id'");
}

header ('location:edit_admin.php');

?>
