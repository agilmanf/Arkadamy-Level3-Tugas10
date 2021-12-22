<?php 
    $con = new mysqli('localhost',"root","","arkademy");
    // Check connection
    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
    }

    function Query($query){
        global $con;
        $rows = [];

        $table = mysqli_query($con,$query);
        //$result = mysqli_fetch_assoc($table);

        while($row = mysqli_fetch_assoc($table)) {
            $rows[] = $row;
        }

        return $rows;
    }

    function TambahData($data) {
        global $con;
        $nama = TidyUpString($data['name']);
        $keterangan = $data['keterangan'];
        $harga = $data['harga'];
        $jumlah = $data['jumlah'];
        $query = mysqli_query($con,"INSERT INTO produk (nama_produk,keterangan,harga,jumlah) VALUES ('$nama','$keterangan','$harga','$jumlah')");
    
        return mysqli_affected_rows($con);
    }

    function EditData($data){
        global $con;
        $nama = TidyUpString($data['name']);
        $keterangan = $data['keterangan'];
        $harga = $data['harga'];
        $jumlah = $data['jumlah'];

        mysqli_query($con,"UPDATE produk SET
                            nama_produk = '$nama',
                            keterangan = '$keterangan',
                            harga = '$harga',
                            jumlah = '$jumlah'
                            WHERE nama_produk='$nama'");

        return mysqli_affected_rows($con);
    }

    function HapusData($produk){
        global $con;
        mysqli_query($con,"DELETE FROM produk WHERE nama_produk = '$produk'");
        return mysqli_affected_rows($con);
    }

    function TidyUpString($string){
        $string = strtolower($string);
        $string = ucwords($string);
        return $string;
    }

?>