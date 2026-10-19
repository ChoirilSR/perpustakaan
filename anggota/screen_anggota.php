<?php

    require 'config.php';

        $query = $config->query("SELECT * FROM anggota ORDER BY id_anggota ASC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Screen Data Anggota</title>
    <link rel="stylesheet" href="screen_anggota.css">
</head>
<body>
    <?php include("navbar_anggota.php") ?>

        <center>
            <h1>Welcome To Anggota</h1>

                    <table border="1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Foto</th>
                                <th>Nama</th>
                                <th>Kelas</th>
                                <th>Jurusan</th>
                                <th>No HP</th>
                                <th>NIS</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>

                                <?php
                                    $no = 1;
                                        while ($data = $query->fetch_assoc()) { ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td>
                                                    <img src="uploads/<?=  $data['foto']; ?>" width="80px">
                                                </td>
                                                <td><?= $data['nama'] ?></td>
                                                <td><?= $data['kelas'] ?></td>
                                                <td><?= $data['jurusan'] ?></td>
                                                <td><?= $data['no_hp'] ?></td>
                                                <td><?= $data['nis'] ?></td>
                                                <td><?= $data['alamat'] ?></td>
                                                <td>
                                                    <button> <a href="edit_anggota.php?id_anggota=<?= $data['id_anggota']; ?>">Edit</a> </button>
                                                    <button> <a href="delete.php?id_anggota=<?= $data['id_anggota']; ?>" onclick="return confirm('Yakin Ingin Menghapus Buku Ini')">Delete</a> </button>
                                                </td>
                                            </tr>
                                <?php } ?>
                        </thead>
                    </table>

        </center>
    
</body>
</html>