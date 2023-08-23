<!doctype html>
<html lang="en">
    <head>
        <?php include 'koneksi.php' ?>
        <?php include 'header.php' ?>
        <link rel="stylesheet" href="style/style_index.css">
    </head>
    <body>
        <div class="main-container">
            <div class="content">
                <nav class="navbar navbar-expand-lg">
                    <?php include 'navbar.php' ?>
                </nav>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <div class="container">
                        <div class="content">
                            <div class="judul">
                                <h1><b>Selamat Datang Calon Mahasiswa Digital Talent</b></h1>
                            </div>
                            <p>Silahkan pilih menu pendaftaran di bawah ini:</p>
                            <!-- Menampilkan Menu -->
                            <div class="menu">
                                <a class="btn btn-primary" href="akademik_tambah.php">Beasiswa Akademik</a>
                                <a class="btn btn-primary" href="nonakademik_tambah.php">Beasiswa Non-Akademik</a>
                                <!-- Anda bisa menambahkan menu lain di sini -->
                            </div>
                        </div>
                    </div>
                </div>       
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    </body>
</html>
