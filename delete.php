<?php   
    require 'functions.php';

    print_r($_GET['nama']);
    $hapus = HapusData($_GET['nama']);
    if($hapus > 0) {
        header("location: index.php");
    }
    else mysqli_error($con);
?>