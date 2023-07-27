<?php
include '../koneksi.php';

$nama 	= $_POST['nama'];
$alamat	= $_POST['alamat'];
$jk 	= $_POST['jk'];
$agama	= $_POST['agama'];
$sekolah	= $_POST['sekolah'];

$simpan = mysql_query("INSERT INTO peserta VALUES(NULL, '$nama', '$alamat', '$jk', '$agama', '$sekolah')") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil disimpan ')</script>";
		echo '<script type="text/javascript">window.location="../welcome.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menyimpan Data ')</script>";
	echo '<script type="text/javascript">window.location="../daftar_tambah.php"</script>'; 
	}

?>