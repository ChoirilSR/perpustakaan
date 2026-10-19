<?php

    require 'config.php';

    $id = $_GET["id_anggota"];

    $query = $config->query("DELETE FROM anggota WHERE id_anggota = '$id'");

        if ($query) {
            header("location: screen_anggota.php");
        } else {
            echo "Data Kelas Gagal dihapus";
        }

?>