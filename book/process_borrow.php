<?php

    include "koneksi.php";

    if (!isset($_POST["id_buku"]) || !isset($_POST["id_anggota"]) || $_POST['id_buku'] === "" || $_POST['id_buku'] === "") {

        echo "<script>alert('Data tidak lengkap..!, pilih anggota dulu'); location: 'screen_book.php'; </script>";
        exit;
        
        }

        $id_anggota = $_POST['id_anggota'];    
        $id_buku = $_POST['id_buku'];    
    
    $query = mysqli_query($config, "SELECT stock FROM buku WHERE id_buku = '$id_buku' ");

    if(!$query) {
        die ("Data Nya Error" .mysqli_error($config));
    }

    $buku = mysqli_fetch_assoc($query);
    if (!$buku) {
        echo "<script>alert('Data tidak Ditemukan..!'); location: 'screen_book.php'; </script>";
        exit;
    }

    $stock = (int) $buku['stock'];

    if ($stock > 0 ) {
        $save = mysqli_query($config,"INSERT INTO peminjaman (id_anggota, id_buku, tanggal_pinjam, tanggal_kembali) 
        VALUES  ('$id_anggota', '$id_buku', CURDATE(), DATE_ADD(CURDATE(), INTERVAL 7 DAY))");
        
        mysqli_query($config, "UPDATE buku SET stock = stock - 1 WHERE id_buku = '$id_buku' ");

        echo "<script>alert('Berhasil Meminjam Buku 😁') location: 'screen_book.php'; </script>";
    } else {
        echo "<script>alert('Stock Buku Habis..!'); location: 'screen_book.php'; </script>";
    }

?>