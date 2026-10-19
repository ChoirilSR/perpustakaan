<?php

    include 'koneksi.php';

    $query = mysqli_query($config, "SELECT p.*, a.nama, b.judul_buku
            FROM peminjaman p
            JOIN anggota a ON a.id_anggota = p.id_anggota
            JOIN buku b ON b.id_buku = p.id_buku
            ORDER BY p.id_pinjam DESC
            ");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Peminjaman</title>
    <link rel="stylesheet" href="">
</head>
<body>

    <?php include 'navbar_book.php'; ?>

    <center>
            <h1> Riwayat Peminjaman </h1>

                <table border = "1" cellpadding ="10" cellspacing ="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peminjam</th>
                            <th>Judul Buku</th>
                            <th>Tanggal Pinjam</th>
                            <th>Tanggal Kembali</th>
                        </tr>

                        <?php
                            $no = 1;
                                while ($data = mysqli_fetch_assoc($query)) : ?> 

                                <tr>
                                    <td><?= $no++ ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['judul_buku'] ?></td>
                                    <td><?= $data['tanggal_pinjam'] ?></td>
                                    <td><?= $data['tanggal_kembali'] ?></td>
                                </tr>

                        <?php endwhile; ?>
                    </thead>
                </table>
    </center>
</body>
</html>