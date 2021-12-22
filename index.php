<?php 
    require 'functions.php';
    $no = 1;
    $barang = Query("SELECT * FROM produk");

    //var_dump($barang);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gilman Firdaus</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="view">
            <a href="">VIEW SOURCE</a>
        </div>
        <h2>Tugas 10 Arkademy - Aplikasi CRUD Sederhana</h2>
        
        <div class="container">
            <table>
                <tr class="tr-head">
                    <td>NO</td>
                    <td>NAMA BARANG</td>
                    <td>KETERANGAN</td>
                    <td>HARGA</td>
                    <td>JUMLAH</td>
                    <td>AKSI</td>
                </tr>
                <?php foreach($barang as $b): ?>
                <tr>
                    <td class="text-center"><?= $no?></td>
                    <td><?= $b['nama_produk'] ?></td>
                    <td><?= $b['keterangan']?></td>
                    <td class="text-center"><?= $b['harga']?></td>
                    <td class="text-center"><?= $b['jumlah']?></td>
                    <td class="text-center"><a href="edit.php?nama=<?= $b['nama_produk']?>">edit</a> | <a href="delete.php?nama=<?= $b['nama_produk']?>" class="delete">delete</a></td>
                </tr>
                <?php $no++; endforeach?>
            </table>
            <a href="tambah.php">Tambah Data</a>

            <script>
                document.addEventListener('click', (e) => {
                    if(e.target.classList.contains('delete')) {
                    const confirms = confirm('Apakah kamu yakin mau menghapus data ini?') ? true : e.preventDefault();
                     }
                })
            </script>
        </div>
    </body>
</html>