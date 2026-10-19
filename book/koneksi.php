<?php

    $host = "localhost";
    $user = "root";
    $pass = "";
    $db = "database_perpustakaan";

    $config = new mysqli($host, $user, $pass, $db);

    if(!$config) {
        echo "Maaf, Koneksi gagal";
    }

?>