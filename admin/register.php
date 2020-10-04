<?php 
include_once 'koneksi.php';

$rgs = query("SELECT * FROM anggota ORDER BY id_anggota DESC");

if(isset($_POST["cari"])) {
	$rgs = cari($_POST["keyword"]);
}
?>

<h2>Data Anggota Baru</h2>
<br>
<form action="" method="post">
	
	<input type="text" name="keyword" placeholder="Search by name and date!" size="30" autofocus autocomplete="off" >
	<button type="submit" name="cari">Search</button>

</form>
<br>
<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>No.Hp</th>
			<th>Alamat</th>
			<th>Jenis Kelas</th>
			<th>Tanggal</th>
			<th>Keterangan</th>
		</tr>
	</thead>
	<tbody>
		<?php $i =1; ?>
		<?php foreach ( $rgs as $row ) : ?>
		<tr>
			<td><?= $i; ?> </td>
			<td><?= $row['name']; ?></td>
			<td><?= $row['email']; ?></td>
			<td><?= $row['phone']; ?></td>
			<td><?= $row['alamat']; ?></td>
			<td><?= $row['kelas']; ?></td>
			<td><?= $row['tanggal']; ?></td>
			<td>
				<a href="index.php?halaman=detail&id=<?= $row['id_anggota'] ; ?>" class="btn btn-info">detail</a>
			</td>
			</tr>
			<?php $i++; ?>
		<?php endforeach; ?>
	</tbody>
</table>