<?php 
require 'koneksi.php';

$glr = query("SELECT * FROM galeri");
 ?>
<h2>Galeri Sanggar Nyi Ronggeng</h2>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Gambar</th>
			<th>Deskripsi</th>
			<th>Aksi</th>
		</tr>
		<?php $i =1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM galeri"); ?>
		<?php foreach ( $glr as $row ) : ?>

		<tr>
			<td><?= $i; ?> </td>
			<td>
				<img src="../img/<?= $row['gambar']; ?>" width="50">
			</td>

			<td><?= $row["deskripsi"] ?> </td>
			<td><a href="index.php?halaman=hapusgaleri&id=<?= $row['id']; ?>"  onclick="return confirm('Hapus?');" class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahgaleri&id=<?= $row['id']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $i++; ?>
	<?php endforeach; ?>
</thead>
	</table>
	<a href="index.php?halaman=tambahgaleri" class="btn btn-primary"> Tambah galeri </a>