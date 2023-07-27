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
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Ubah Data Peserta</h1>
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
                                <!-- /.card-header -->
                                <!-- form start -->
                                <?php
                                    include 'koneksi.php';
                                    $id = $_GET['id'];
                                    $sql = mysql_query("SELECT * FROM peserta WHERE id='$id'") or die (mysql_error());
                                    $data = mysql_fetch_array($sql);
                                ?>
                                <form role="form" action="process/peserta_edit_proses.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $data['id'] ?>" required>
                                    <div class="card-body">
                                    <div class="data">
                                        <div class="mb-3 row">
                                            <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="nama" value="<?php echo $data['nama_peserta'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="alamat" class="col-sm-2 col-form-label">Alamat</label>
                                            <div class="col-sm-10">
                                                <textarea class="form-control" name="alamat" rows="3"><?php echo $data['alamat'] ?></textarea>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="jk" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                            <div class="col-sm-10">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="Laki-laki" <?php echo ($data['jenis_kelamin'] === 'Laki-laki') ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="jk">Laki-laki</label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="jk" value="Perempuan" <?php echo ($data['jenis_kelamin'] === 'Perempuan') ? 'checked' : ''; ?>>
                                                    <label class="form-check-label" for="jk">Perempuan</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                        <div class="mb-3 row">
                                            <label for="agama" class="col-sm-2 col-form-label">Agama</label>
                                            <div class="col-sm-10">
                                                <select class="form-select" name="agama" aria-label="Default select example">
                                                    <?php
                                                    $agamaOptions = array(
                                                        'Islam' => 'Islam',
                                                        'Hindu' => 'Hindu',
                                                        'Katolik' => 'Katolik',
                                                        'Protestan' => 'Protestan',
                                                        'Kristen' => 'Kristen',
                                                        'Budha' => 'Budha'
                                                    );

                                                    $selectedAgama = $data['agama']; // Assuming 'agama' is the field name in the database

                                                    foreach ($agamaOptions as $value => $label) {
                                                        $selected = ($value === $selectedAgama) ? 'selected' : '';
                                                        echo "<option value=\"$value\" $selected>$label</option>";
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="sekolah" class="col-sm-2 col-form-label">Sekolah Asal</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" name="sekolah" value="<?php echo $data['sekolah'] ?>" required>
                                            </div>
                                        </div>
                                        <div class="mb-3 row">
                                            <label for="tombol" class="col-sm-2 col-form-label"></label>
                                            <div class="col-sm-10">
                                                <button type="submit" class="btn btn-primary">Simpan</button>
                                                <button type="button" class="btn btn-info">Reset</button>
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
    </body>
</html>
