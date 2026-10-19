<?php

include("koneksi.php");

$id = $_GET["id_buku"];

$edit = "SELECT * FROM buku WHERE id_buku = '$id'";
$result = mysqli_query($config, $edit);

$data = mysqli_fetch_assoc($result);

if (!$data) { 
    header("location.screen.php");
    exit();
} 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <link rel="stylesheet" href="edit.css">
</head>
<body>
    <div class="container">

        <h1>
            <center>Tambah Data Buku</center>
        </h1>
        
        <form action="proses_edit.php" method="post" align="center" class="form-container">

            <input type="hidden" name="id_buku" value="<?= $data['id_buku']; ?>">

            <div class="form-group">
            <label for="">Judul Buku:</label>
            <input type="text" name="judul_buku" placeholder="Tolong isi Judul Buku" value="<?= $data['judul_buku']; ?>" required>
            </div> <br><br>
            
            <div class="form-group">
            <label for="">Penulis:</label>
            <input type="text" name="penulis" placeholder="Tolong isi Penulis" value="<?= $data['penulis']; ?>" required>
            </div> <br><br>
            
            <div class="form-group">
            <label for="">Penerbit:</label>
            <input type="text" name="penerbit" placeholder="Tolong isi Penerbit" value="<?= $data['penerbit']; ?>" required>
            </div> <br><br>

            <div class="form-group">
            <label for="">Tahun Terbit:</label>
            <input type="text" name="tahun_terbit"  placeholder="Tolong isi Tahun Terbit" value="<?= $data['tahun_terbit']; ?>" required>
            </div> <br><br>

            <div class="form-group">
            <label for="">Stock:</label>
            <input type="number" name="stock"  placeholder="Tolong isi Stock Buku" value="<?= $data['stock']; ?>" required>
            </div> <br><br>

            <button type="submit">
                Submit  
            </button>

        </form>

    </div>
</body>
</html>