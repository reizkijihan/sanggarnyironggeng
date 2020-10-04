<?php 
 require 'koneksi.php';
 $nsw = query("SELECT * FROM nilai");

	if(isset($_POST["cari"])) {
	$nsw = carisiswa($_POST["keyword"]);
}
 ?>
 <h2> Data Nilai Anggota </h2>
 <br>
<form action="" method="post">
	
	<input type="text" name="keyword" placeholder="Search by name!" size="30" autofocus autocomplete="off" >
	<button type="submit" name="cari">Search</button>

</form>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Jenis Kelas</th>
			<th>Wirasa</th>
			<th>Wiraga</th>
			<th>Wirama</th>
			<th>Keterangan</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $i =1; ?>
		<?php foreach ( $nsw as $row ) : ?>
		<tr>
			<td><?= $i; ?> </td>
			<td><?= $row['name']; ?></td>
			<td><?= $row['jenis_kelas']; ?></td>
			<td><?= $row['wirasa']; ?></td>
			<td><?= $row['wiraga']; ?></td>
			<td><?= $row['wirama']; ?></td>
			<td><?= $row['keterangan']; ?></td>	
			<td>
				<a href="index.php?halaman=hapusnilai&id=<?= $row['id']; ?>" onclick="return confirm('Hapus?');" class="btn-danger btn">Hapus</a>
				<a href="index.php?halaman=ubahnilai&id=<?= $row['id']; ?>" class="btn btn-warning">Ubah</a>
			</td>
		</tr>
		<?php $i++; ?>
		<?php endforeach; ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahdata" class="btn btn-primary"> Tambah Data </a>