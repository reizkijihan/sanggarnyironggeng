<?php 
require 'koneksi.php';

if (isset($_POST['submit']))
{
	if(tambahdata($_POST) > 0) {
	echo "<script>alert('Data Berhasil Tersimpan'); document.location.href ='index.php?halaman=nilaisiswa'; </script>";
	} else {
	echo "<script>alert('Data Gagal Tersimpan'); document.location.href ='index.php?halaman=nilaisiswa'; </script>";
}
}
?>

<h2> Tambah Data </h2>
<form action="" method="post">

	<div class="form-group">
		<label for="name">Nama</label>
		<input type="text" name="name" class="form-control" id="name" required>
	</div>
	<div class="form-group">
		<label for="jenis_kelas">Jenis Kelas</label>
		<input type="text" name="jenis_kelas" id="jenis_kelas" class="form-control"  required>
	</div>
	<div class="form-group">
		<label for="wirasa">Wirasa</label>
		<input type="number" name="wirasa" class="form-control" id="wirasa" required>
	</div>
	<div class="form-group">
		<label for="wiraga">Wiraga</label>
		<input type="number" name="wiraga" class="form-control" id="wiraga" required>
	</div>
	<div class="form-group">
		<label for="wirama">Wirama</label>
		<input type="number" name="wirama" class="form-control" id="wirama" required>
	</div>
	<div class="form-group">
		<label for="keterangan">Keterangan</label>
		<input type="text" name="keterangan" id="keterangan" class="form-control"  required>
	</div>
	<button class="btn btn-primary" name="submit">Simpan</button>
</form>
