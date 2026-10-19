<?php

include("config.php");

$id = $_GET["id_buku"];

$delete = "DELETE FROM buku WHERE id_buku = '$id'";

$result = mysqli_query($config, $delete);

if ($result) {
    header("location: screen.php");
} else {
    echo " Buku Gagal Dihapus";
}

?>