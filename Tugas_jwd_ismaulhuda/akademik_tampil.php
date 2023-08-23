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
                <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                    </div>
                    </div>
                </div>
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Data Pendaftar</h1>
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
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>No HP</th>
                                    <th>Semester</th>
                                    <th>ipk</th>
                                    <th>Beasiswa</th>
                                    <th>Berkas</th>
                                    <th>Status Ajuan</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                <?php 
                                    include 'koneksi.php';
                                    $sql = mysql_query("SELECT * FROM peserta ORDER BY nama") or die(mysql_error());
                                    $no=0;
                                    while($data = mysql_fetch_array($sql))
                                    {
                                    $no++;
                                    $id=$data['id'];
                                    ?>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $data['nama']; ?></td>
                                    <td><?php echo $data['email']; ?></td>
                                    <td><?php echo $data['nohp']; ?></td>
                                    <td><?php echo $data['semester']; ?></td>
                                    <td><?php echo $data['ipk']; ?></td>
                                    <td><?php echo $data['beasiswa']; ?></td>
                                    <td><?php echo $data['berkas']; ?></td>
                                    <td>
                                    belum di verifikasi
                                    </td>
                                </tr>
                                <?php } ?>
                                </table>
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
