<?php
    
    include 'koneksi.php';

    $judul_buku = $_POST["judul_buku"];
    $penulis = $_POST["penulis"];
    $penerbit = $_POST["penerbit"];
    $tahun_terbit = $_POST["tahun_terbit"];
    $stock = $_POST["stock"];

    $query = "INSERT INTO buku 
            (judul_buku, penulis, penerbit, tahun_terbit, stock )
            VALUES 
            ('$judul_buku', '$penulis', '$penerbit', '$tahun_terbit', '$stock')";

    $save = mysqli_query($config, $query);

    if($save) {
        header("location: screen_book.php");
    } else {
        echo "Data Buku Gagal disimpan.";
    }

?>