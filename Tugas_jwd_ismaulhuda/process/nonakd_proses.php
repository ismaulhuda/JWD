<?php
include '../koneksi.php';

$nama 		= $_POST['nama'];
$email		= $_POST['email'];
$nohp 		= $_POST['nohp'];
$semester	= $_POST['semester'];
$ipk		= $_POST['ipk'];
$beasiswa	= $_POST['beasiswa'];
$berkas		= $_POST['berkas'];

$simpan = mysql_query("INSERT INTO peserta2 VALUES(NULL, '$nama', '$email', '$nohp', '$semester', '$ipk', '$beasiswa', '$berkas')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="../nonakademik_tampil.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="../nonakademik_tambah.php"</script>'; 
	}
?>