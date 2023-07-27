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
                            <h1>Tambah Data Peserta</h1>
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
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" rows="3"></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="Laki-laki">
                                                    <label class="form-check-label" for="jk">Laki-laki</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan">
                                                    <label class="form-check-label" for="jk">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="agama" aria-label="Default select example">
                                                    <option value="Islam" selected>Islam</option>
                                                    <option value="Hindu">Hindu</option>
                                                    <option value="Katolik">Katolik</option>
                                                    <option value="Protestan">Protestan</option>
                                                    <option value="Kristen">Kristen</option>
                                                    <option value="Budha">Budha</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="sekolah" class="col-sm-2 col-form-label">Sekolah Asal</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sekolah">
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tombol" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="reset" class="btn btn-info" onclick="resetForm()">Reset</button>
                                                <button type="button" class="btn btn-success">Kembali</button>
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
            function resetForm() {
                // Get the form element using its ID
                const form = document.getElementById("data-form");

                // Reset the form using the reset() method
                form.reset();
            }
        </script>

    </body>
</html>
