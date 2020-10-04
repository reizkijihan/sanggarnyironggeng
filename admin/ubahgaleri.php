<?php 
require 'koneksi.php';
$ambil=$koneksi->query ("SELECT * FROM galeri WHERE id='$_GET[id]'");
$glr = $ambil-> fetch_assoc();
?>

<h2>Ubah Galeri </h2>

<form action="" method="post" enctype="multipart/form-data">	
<input type="hidden" name="id" value="<?= $glr["id"]; ?>">	
	<div class="form-group">
		<label for="gambar">Gambar</label><br>
		<img src="../img/<?= $glr['gambar'];?>" width="40"><br>
		<input type="file" class="form-control" name="gambar" id="gambar">
	</div>
	<div class="form-group">
		<label for="deskripsi">Deskripsi</label>
		<textarea type="text" class="form-control" name="deskripsi" rows="10" id="deskripsi" required value="<?= $glr["deskripsi"]; ?>"> </textarea>
	</div>
	<button type="submit" name="submit">Simpan</button>
</form>

<?php 
	if (isset($_POST['submit']))
	{
		$namafoto = $_FILES['gambar']['name'];
		$lokasifoto = $_FILES['gambar']['tmp_name'];

		if(!empty($lokasifoto))
		{
			move_uploaded_file($lokasifoto, "../img/". $namafoto);

			$koneksi-> query ("UPDATE galeri SET gambar='$namafoto', deskripsi='$_POST[deskripsi]' WHERE id = '$_GET[id]'");

		} else{
			$koneksi-> query ("UPDATE galeri SET deskripsi = '$_POST[deskripsi]' WHERE id= '$_GET[id]'");
		}
		echo "<script> alert('Galeri telah diubah');</script>";
		echo "<script>location='index.php?halaman=galeri';</script>";

		}
 ?>