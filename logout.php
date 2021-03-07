<?php
    // session_start();
    // // if (isset($_SESSION['user'])) {
    //     unset ($_SESSION['id']);
    //     unset ($_SESSION['user']);
    //     session_destroy($_SESSION['user']);
    //     header ("Location: index.php");
    
    session_start();
    //logout
    session_destroy();
    // arahkan ke halaman index.php 
    header("location: index.php");

?>
