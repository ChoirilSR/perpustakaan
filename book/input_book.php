<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Buku</title>
    <link rel="stylesheet" href="input.css">
</head>

<body>

    <?php include("navbar_book.php"); ?>

    <center>
        <div class="container">

            <h1>
                <center>Tambah Data Buku</center>
            </h1>

            <form action="proses_input.php" method="post" align="center" class="form-container">

                <div class="form-group">
                <label for="">Judul Buku:</label>
                <input type="text" name="judul buku" placeholder="Tolong isi Judul Buku" required>
                </div> <br><br>
            
                <div class="form-group">
                <label for="">Penulis:</label>
                <input type="text" name="penulis" placeholder="Tolong isi Penulis" required>
                </div> <br><br>
            
                <div class="form-group">
                <label for="">Penerbit:</label>
                <input type="text" name="penerbit" placeholder="Tolong isi Penerbit" required>
                </div> <br><br>

                <div class="form-group">
                <label for="">Tahun Terbit:</label>
                <input type="text" name="tahun terbit"  placeholder="Tolong isi Tahun Terbit" required>
                </div> <br><br>

                <div class="form-group">
                <label for="">Stock:</label>
                <input type="number" name="stock"  placeholder="Tolong isi Stock Buku" required>
                </div> <br><br>

                <button input type="submit">
                Submit  
                </button>

            </form>

        </div>
    </center>
</body>


</html>

<!-- #357abd -->