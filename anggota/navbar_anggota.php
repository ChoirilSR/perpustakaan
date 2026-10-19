<link rel="stylesheet" href="navbar_anggota.css">
    
    <nav class="navbar">

    <div class="navbar-container">


        <a href="screen.php" class="logo">
            Perpustakaan
        </a>

        <div class="menu">
            <a href="screen.php">Home</a>

            <div class="dropdown">

                <button class="dropbtn">Data Buku ▾</button>

                <div class="dropdown-content">
                    <a href="../book/screen_book.php">Lihat Daftar Buku</a> <br>
                    <a href="../book/input_book.php">Tambah Buku</a>
                </div>
            </div>

            <div class="dropdown">

                <button class="dropbtn">Data Anggota ▾</button>

                <div class="dropdown-content">
                    <a href="screen_anggota.php">Lihat Daftar Anggota</a> <br>
                    <a href="add_anggota.php">Tambah Anggota</a>
                </div>
            </div>

            <a href="logout.php">Logout</a>

        </div>
    </div>
</nav>