<?php
include 'koneksi.php';

$id 		= $_GET['id'];

$hapus = mysql_query("DELETE FROM peserta WHERE id='$id'") or die(mysql_error());

if($hapus)
	{
		echo "<script>alert('Data Berhasil dihapus ')</script>";
		echo '<script type="text/javascript">window.location="peserta_tampil.php"</script>';    
	}
else
	{
	echo "<script>alert('Gagal Menghapus Data ')</script>";
	echo '<script type="text/javascript">window.location="peserta_tampil.php"</script>'; 
	}

?>