<?php
require 'koneksi.php';

$id= $_GET["id"];
$nsw = query("SELECT * FROM nilai WHERE id = $id")[0];
 

if (isset($_POST['submit']))
{
	if(ubahnilai($_POST) > 0) {
	echo "<script>alert('Data Berhasil Diubah'); document.location.href ='index.php?halaman=nilaisiswa'; </script>";
	} else {
	echo "<script>alert('Data Gagal Diubah'); document.location.href ='index.php?halaman=nilaisiswa'; </script>";
}
}
?>

<h2>Ubah Nilai </h2>
<form action="" method="post">
<input type="hidden" name="id" value="<?= $nsw["id"]; ?>">

	<div class="form-group">
		<label for="name">Nama</label>
		<input type="text" name="name" class="form-control" id="name" required value="<?= $nsw['name']; ?>">
	</div>
	<div class="form-group">
		<label for="jenis_kelas">Jenis Kelas</label>
		<input type="text" name="jenis_kelas" id="jenis_kelas" class="form-control"  required value="<?= $nsw['jenis_kelas']; ?>">
	</div>
	<div class="form-group">
		<label for="wirasa">Wirasa</label>
		<input type="number" name="wirasa" class="form-control" id="wirasa" required value="<?= $nsw['wirasa']; ?>">
	</div>
	<div class="form-group">
		<label for="wiraga">Wiraga</label>
		<input type="number" name="wiraga" class="form-control" id="wiraga" required value="<?= $nsw['wiraga']; ?>">
	</div>
	<div class="form-group">
		<label for="wirama">Wirama</label>
		<input type="number" name="wirama" class="form-control" id="wirama" required value="<?= $nsw['wirama']; ?>">
	</div>
	<div class="form-group">
		<label for="keterangan">Keterangan</label>
		<input type="text" name="keterangan" id="keterangan" class="form-control"  required value="<?= $nsw['keterangan']; ?>">
	</div>
	<button class="btn btn-primary" name="submit">Ubah</button>
</form>
