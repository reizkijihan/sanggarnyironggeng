<?php
require 'koneksi.php';

$id = $_GET["id"];

if(hapusgaleri($id) > 0) {

	echo "<script>alert('Data Berhasil Dihapus'); document.location.href = 'index.php?halaman=galeri'; </script>";
	} else {
	echo "<script>alert('Data Gagal Dihapus'); document.location.href = 'index.php?halaman=galeri'; </script>";
}

?>