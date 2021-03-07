<?php
session_start();
include "koneksi.php";

    if ($_POST['login'] =="administrator" )
    {
    $query=mysqli_query($koneksi, "select * from password where user='$_POST[username]' and status='administrator'");

    if (mysqli_num_rows($query)!=0){
        $result=mysqli_fetch_array($query);
        $password=$result['password'];

    if ($password==$_POST['password']){
        $_SESSION['user']=$_POST['username']; header('location:admin.php?message=selamat datang!!!');

    }
    else {
        $message = "data yang anda masukkan salah";
        header('Refresh: 1; url=index.php'); 
        echo "<script type='text/javascript'>alert('$message');</script>";
    }
    }


}

?>
