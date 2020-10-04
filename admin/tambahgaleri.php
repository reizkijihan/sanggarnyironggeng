<h2>Tambah Galeri </h2>

<form method="post" enctype="multipart/form-data">		
	<div class="form-group">
		<label>Gambar</label>
		<input type="file" class="form-control" name="gambar"required>
	</div>
	<div class="form-group">
		<label>deskripsi</label>
		<textarea type="text" class="form-control" name="deskripsi" rows="10" required></textarea>
	</div>
	<button type="submit" name="submit">Simpan</button>
</form>
<?php 
if (isset($_POST['submit']))
{
	$nama = $_FILES['gambar']['name'];
	$lokasi =$_FILES['gambar']['tmp_name'];
	move_uploaded_file($lokasi, "../img/".$nama);
	$koneksi->query("INSERT INTO galeri
		(gambar,deskripsi)
			VALUES ('$nama','$_POST[deskripsi]')");
	echo "<div class='alert alert-info'>Data Tersimpan</div>";
	echo "<meta http-equiv='refresh' content='1;url=index.php?halaman=galeri'>";
}
 ?>