<?php 

    include 'koneksi.php';
    
        $query = mysqli_query($config, "SELECT * FROM buku");

        $anggota = mysqli_query($config, "SELECT * FROM anggota");
        $opsi = "";
        while ($query = mysqli_fetch_assoc($anggota)) {
            $opsi .= "<option value = '" . $query['id_anggota'] . "'>" . $query['nama'] . "</option>";
        }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Buku</title>
    <link rel="stylesheet" href="screen_book.css">
</head>

<body>

    <?php include("navbar_book.php") ?>

    <center>
        
        <h1>Data Buku</h1>

        <a href="input_book.php">Tambah Buku</a> || <a href="history_borrow.php">Riwayat Peminjaman</a><br><br>

        <table border="1">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun Terbit</th>
                    <th>Stock</th>
                    <th>Pinjam</th>
                    <th>Action</th>
                </tr>

            <?php 
            $no = 1;

            $query = $config->query("SELECT * FROM buku");
            foreach ( $query as $key => $data) {
            ?>

            <tr>
                <td><?= $no++; ?></td>
                <td><?= $data['judul_buku'] ?></td>
                <td><?= $data['penulis'] ?></td>
                <td><?= $data['penerbit'] ?></td>
                <td><?= $data['tahun_terbit'] ?></td>
                <td><?= $data['stock'] ?></td>
                <td>
                    <form action="process_borrow.php" method="post">
                        <input type="hidden" name="id_buku" value="<?= $data['id_buku'] ?>">

                        <select name="id_anggota" required>
                            <option value=""> -- Pilih Anggota -- </option>
                            <?= $opsi; ?>
                        </select>

                        <button type="submit" class="btn-pinjam" <?= $data['stock'] < 1 ? 'disabled' : ''; ?>>
                            <?= $data['stock'] < 1 ? 'Stock Habis' : 'Pinjam'; ?>
                        </button>
                    </form>
                </td>
                <td>
                    <a href="edit.php?id_buku=<?= $data['id_buku'] ?>">Edit</a>
                    <a href="delete.php?id_buku=<?= $data['id_buku'] ?>" onclick="return confirm('Yakin Ingin Menghapus Buku Ini')">Delete</a>
                </td>
            </tr>
            <?php } ?>

            </thead>
        </table>
    </center>
</body>

</html>

