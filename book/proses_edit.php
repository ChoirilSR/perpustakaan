<?php

include("koneksi.php");

$id = $_POST["id_buku"];
$judul_buku = $_POST["judul_buku"];
$penulis = $_POST["penulis"];
$penerbit = $_POST["penerbit"];
$tahun_terbit = $_POST["tahun_terbit"];
$stock = $_POST["stock"];


$query = "UPDATE buku SET
        judul_buku = '$judul_buku',
        penulis = '$penulis',
        penerbit = '$penerbit',
        tahun_terbit = '$tahun_terbit',
        stock = '$stock'
        WHERE id_buku = '$id'" ;

$update = mysqli_query($config, $query);

if($update){
    header("location: screen_book.php");
} else {
    echo "Gagal Mengubah Tampilan";
}

?>