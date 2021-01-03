<?php
session_start();
include "koneksi.php";
if ($_POST['login']=="administrator" )
{
$query=mysqli_query($koneksi, "select * from password where user='$_POST[username]' and status='administrator'");

if (mysqli_num_rows($query)!=0){
$result=mysqli_fetch_array($query);
$password=$result[password];
if ($password==$_POST['password']){
$_SESSION['user']=$_POST['username']; header('location:admin.php?message=selamat datang!!!');

}
else {
header('location:index.php?message=<b>password
salah!!!</b>');
}
}
else {
header('location:index.php?message=<b>Jika Anda Administrator atau Operator, Cek kembali username dan Password Anda!!!</b>');

}
}
else if ($_POST['login']=="operator" )
{
$query=mysqli_query("select * from password where user='$_POST[username]' and status='operator'");

if (mysqli_num_rows($query)!=0) {
$result=mysqli_fetch_array($query);
$password=$result[password];
$_SESSION['user']=$result[user];
if ($password==$_POST['password']){ header('location:user.php?message=selamat datang!!!');

}
else {
header('location:index.php?message=<b>password
salah!!!</b>');
}
}
else {
header('location:index.php?message=<b>Jika Anda Administrator atau Operator, Cek kembali username dan Password Anda!!!</b>');

}
}
?>
