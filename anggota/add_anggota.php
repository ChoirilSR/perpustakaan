<?php

    require 'config.php';

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $no_hp = $_POST['no_hp'];
        $nis = $_POST['nis'];
        $alamat = $_POST['alamat'];

        $foto = $_FILES['foto']['name'];
        $tmp = $_FILES['foto']['tmp_name'];

        move_uploaded_file($tmp, "uploads/" .$foto);

            $query = $config->query("INSERT INTO anggota (nama, kelas, jurusan, no_hp, nis, alamat, foto)
                            VALUES ('$nama', '$kelas', '$jurusan', '$no_hp', '$nis', '$alamat', '$foto')");

                if($query) {
                    header("location: screen_anggota.php");
                } else {
                    echo "Anggota Gagal Ditambahkan";
                }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Anggota</title>
</head>
<body>

    <?php include("navbar_anggota.php") ?>


    <center>
        <div class="container">

        <h1>
            <center>Tambah Data Kelas</center>
        </h1>

        <form action="" method="post" align="center" class="form-container" enctype="multipart/form-data">

            <div class="form-group">
                <label for="">Nama :</label>
                <input type="text" name="nama" placeholder="Tolong Isi Nama " required>
            </div> <br><br>

            <div class="form-group">
                <label for="">Kelas:</label>
                <input type="number" name="kelas" placeholder="Tolong Isi Kelas" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">Jurusan :</label>
                <input type="text" name="jurusan" placeholder="Tolong Isi Jurusan" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">No HP:</label>
                <input type="number" name="no_hp" placeholder="Tolong Isi No HP" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">NIS :</label>
                <input type="number" name="nis" placeholder="Tolong Isi NIS" required>
            </div> <br><br>

            <textarea name="alamat" id="" placeholder="Tolong Isi Alamat" required></textarea> <br><br>

            <div class="form-group">
                <label for="">Foto:</label>
                <input type="file" name="foto" placeholder="Tolong Isi Foto" required>
            </div> <br><br>

            <button type="submit" name="submit">Submit</button>
            <button> <a href="screen.php">Batal</a> </button>

        </form>

        </div>
    </center>

</body>
</html>