<!doctype html>
<html lang="en">
<head>
    <?php include 'koneksi.php' ?>
    <?php include 'header.php' ?>
</head>
<body>
    <div class="main-container">
        <div class="content">
            <nav class="navbar navbar-expand-lg">
                <?php include 'navbar.php' ?>
            </nav>
            <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-1">
                    <div class="col-sm-6">
                        <h1>Daftar Mahasiwa</h1>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
            </section>
            <!-- Main content -->
            <section class="content">
            <div class="container-fluid">
                <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Inputkan Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" action="process/daftar_tambah_proses.php" method="POST">
                                <div class="card-body">
                                <div class="data">
                                    <div class="mb-3 row">
                                        <label for="nama" class="col-sm-2 col-form-label">Masukkan Nama</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nama">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="email" class="col-sm-2 col-form-label">Masukkan Email</label>
                                        <div class="col-sm-10">
                                            <input type="email" class="form-control" name="email">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="nohp" class="col-sm-2 col-form-label">Nomor HP</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="nohp">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="semester" class="col-sm-2 col-form-label">Semester Saat ini</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="semester" aria-label="Default select example">
                                                <option value="1" selected>1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="ipk" class="col-sm-2 col-form-label">IPK Terakhir</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" name="ipk" value="2.0" readonly>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="beasiswa" class="col-sm-2 col-form-label">Beasiswa</label>
                                        <div class="col-sm-10">
                                            <select class="form-select" name="beasiswa" aria-label="Default select example" id="beasiswaSelect">
                                                <option value="akademik" selected>akademik</option>
                                                <option value="non akademik">non akademik</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="berkas" class="col-sm-2 col-form-label">Upload Berkas Syarat</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="berkas" name="berkas">
                                        </div>
                                    </div>
                                    <div class="mb-3 row">
                                        <label for="tombol" class="col-sm-2 col-form-label"></label>
                                        <div class="col-sm-10">
                                            <button type="submit" class="btn btn-primary" id="daftarButton">Daftar</button>
                                            <button type="button" class="btn btn-success">Batal</button>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
            </section>
        </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        const beasiswaSelect = document.getElementById('beasiswaSelect');
        const daftarButton = document.getElementById('daftarButton');
        const ipkValue = 3.4; // Nilai IPK yang diasumsikan dari sistem

        beasiswaSelect.addEventListener('change', () => {
            if (ipkValue >= 3) {
                daftarButton.disabled = true;
            } else {
                daftarButton.disabled = false;
            }
        });

        daftarButton.addEventListener('click', () => {
            if (ipkValue < 3) {
                alert('IPK Anda tidak mencukupi untuk menerima beasiswa akademik.');
            } else {
                // Lakukan tindakan lain saat tombol "Daftar" diklik
                // Contoh: Kirim data ke halaman proses atau lakukan validasi lainnya
                alert('Anda berhasil mendaftar untuk beasiswa akademik.');
            }
        });
    </script>
</body>
</html>
