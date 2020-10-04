<?php include 'navbar.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Galeri Sanggar Nyi Ronggeng</title> 
	<link rel="stylesheet" type="text/css" href="assets/home.css">
</head>
<body>
	<section class="konten">
		<div class="container-fluid">
			<h1 class="text-center"> Galeri Sanggar Nyi Ronggeng </h1>
			<br>
			<div class="row">
				<?php $ambil=$koneksi->query("SELECT * FROM galeri"); ?>
				<?php while($pergambar = $ambil->fetch_assoc()){ ?>	
				<div class="col-md-3">
				<div class="thumbnail">
				<img src="img/<?= $pergambar['gambar']; ?>" width="100%">
				<div class="text-center"><?= $pergambar["deskripsi"] ?> 
			</div>
			</div>
			</div>
		<?php } ?>
		</div>
		</div>
	</section>
</body>
</html>
<?php include 'footer.php'; ?>