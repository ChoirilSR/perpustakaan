<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "database_perpustakaan";

    $config = new mysqli($host, $user, $pass, $db);

    if ($config->connect_error) {
        die("Koneksi Ke Database Gagal" . $config->connect_error);
    }
?>