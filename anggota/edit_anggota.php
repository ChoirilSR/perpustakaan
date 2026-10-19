<?php

    require 'config.php';

    $id_anggota = $_GET["id_anggota"];
    
        $query = $config->query("SELECT * FROM anggota WHERE id_anggota = $id_anggota ");
        $data = $query->fetch_assoc();

    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
        $no_hp = $_POST['no_hp'];
        $nis = $_POST['nis'];
        $alamat = $_POST['alamat'];

        $foto_old = $_POST['foto_lama']; // Mengambil nama foto lama dari input hidden

        // Cek apakah user mengunggah foto baru
        if ($_FILES['foto']['error'] === 404) {
        // Jika tidak ada file baru yang diunggah (error code 404 artinya tidak ada file)
        $foto = $foto_old; 
        } else {
        $foto = $_FILES['foto']['name']; 
        $tmp = $_FILES['foto']['tmp_name']; 
        
        // Pindahkan file baru ke folder tujuan (misal: folder 'uploads')
        move_uploaded_file($tmp, 'uploads/' . $foto);
    } 

            $query = $config->query("UPDATE anggota SET 
                                        nama = '$nama',
                                        kelas = '$kelas',
                                        jurusan = '$jurusan',
                                        no_hp = '$no_hp',
                                        nis = '$nis',
                                        alamat = '$alamat',
                                        foto = '$foto'
                                        WHERE id_anggota = '$id_anggota'");

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
    <title>Document</title>
</head>
<body>
    
    <center>
        <div class="container">

        <h1>
            <center>Edit Data Kelas</center>
        </h1>

        <form action="" method="post" align="center" class="form-container" enctype="multipart/form-data">

        <input type="hidden" name="id_anggota" value="<?= $data['id_anggota'] ?>">

        <!-- Menyimpan nama file foto lama secara hidden -->
        <input type="hidden" name="foto_lama" value="<?= $data['foto'] ?>">

            <div class="form-group">
                <label for="">Nama Kelas :</label>
                <input type="text" name="nama" placeholder="Tolong Isi Nama Kelas" value="<?= $data['nama'] ?>" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">kelas :</label>
                <input type="text" name="kelas" placeholder="Tolong Isi Nama " value="<?= $data['kelas'] ?>" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">jurusan :</label>
                <input type="text" name="jurusan" placeholder="Tolong Isi Jurusan" value="<?= $data['jurusan'] ?>" required>
            </div> <br><br>

            <div class="form-group">
                <label for="">No Hp :</label>
                <input type="text" name="no_hp" placeholder="Tolong Isi No HP" value="<?= $data['no_hp'] ?>" required>
            </div> <br><br>

            <div class="form-group">
                <label for=""> NIS :</label>
                <input type="text" name="nis" placeholder="Tolong Isi NISN" value="<?= $data['nis'] ?>" required>
            </div> <br><br>

            <textarea name="alamat" id="" placeholder="Tolong Isi Alamat" required><?= $data['alamat'] ?></textarea> <br><br>

            <div class="form-group">
                <label for="">Foto Saat Ini :</label><br>
                <img src="uploads/<?= $data['foto'] ?>" width="100" alt="Foto Sekarang"><br><br>

                <label for="">Pilih Foto Baru :</label><br>
                <input type="file" name="foto">
            </div> <br><br>

            <button type="submit" name="submit">Submit</button>
            <button> <a href="screen.php">Batal</a> </button>

        </form>

        </div>
    </center>

</body>
</html>