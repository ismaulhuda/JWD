<?php
include '../koneksi.php';

$id			= $_POST['id'];
$nama		= $_POST['nama'];
$alamat 	= $_POST['alamat'];
$jk 		= $_POST['jk'];
$agama 		= $_POST['agama'];
$sekolah 	= $_POST['sekolah'];

$simpan = mysql_query("UPDATE peserta SET nama_peserta = '$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah='$sekolah' WHERE id='$id'") or die(mysql_error());

if($simpan)
	{
		echo "<script>alert('Data Berhasil Diubah ')</script>";
		echo '<script type="text/javascript">window.location="../peserta_tampil.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Mengubah Data ')</script>";
	echo '<script type="text/javascript">window.location="../peserta_edit.php"</script>'; 
	}

?>