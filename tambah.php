<?php 
    require 'functions.php';

    if(isset($_POST['submit'])){
        $data = $_POST;
        //var_dump($data);
        $tambah = TambahData($data);
        if($tambah > 0) {
            echo 'Berhasil!';
        }
        else print_r(mysqli_error($con));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>

<style>
    body {
        margin:auto;
        font-family: Arial, Helvetica, sans-serif;
        background-color: rgb(243, 236, 183);
    }

    h2 {
        text-align: center;
    }

    .back {
        margin-bottom : -200px;
    }   

    .container {
        margin:20px auto;
        width: 50%;
        background-color: greenyellow;
        padding: 20px;
    }

    #name {
        width:200px;
        padding:5px 5px;
    }

</style>

<body>
    <div class="container">
        <h2>Tambah Data Barang</h2>
        <form action="" method="post">
            <label for="name">Nama Barang : </label>
            <input type="text" name="name" id="name" autocomplete="off" required="required" placeholder="Masukan nama barang baru ...">
            <br><br>
            <label for="keterangan">Keterangan Barang : </label>
            <input type="text" name="keterangan" id="name" autocomplete="off" required="required" placeholder="Masukan keterangan barang ...">
            <br><br>
            <label for="harga">Harga : </label>
            <input type="number" name="harga" id="name" autocomplete="off" required="required" placeholder="Masukan harga barang ...">
            <br><br>
            <label for="jumlah">Jumlah : </label>
            <input type="number" name="jumlah" id="name" autocomplete="off" required="required" placeholder="Masukan jumlah barang ...">
            <br><br>
            

            <button type="submit" name='submit'>Submit</button>
            <br><br>
        </form>

        <a class="back" href="index.php">Kembali</a>
    </div>
</body>
</html>