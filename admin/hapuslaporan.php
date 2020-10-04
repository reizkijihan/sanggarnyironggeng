<?php
require 'koneksi.php';

$id = $_GET["id"];

if(hapuslaporan($id) > 0) {

	echo "<script>alert('Laporan Berhasil Dihapus'); document.location.href = 'index.php?halaman=laporan'; </script>";
	} else {
	echo "<script>alert('Laporan Gagal Dihapus'); document.location.href = 'index.php?halaman=laporan'; </script>";
}

?>