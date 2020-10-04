<?php 
require 'koneksi.php';

$laporan = query("SELECT * FROM laporan ORDER BY id DESC");
?>
<h2>Kritik dan Saran</h2>

<p>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Nama</th>
				<th>Email</th>
				<th>Message</th>
				<th>Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1; ?>
			<?php foreach ( $laporan as $row ) : ?>
				<tr>
					<td><?= $i; ?> </td>
					<td><?= $row['nama'];?></td>
					<td><?= $row ['email']; ?></td>
					<td><?= $row ['message']; ?></td>
					<td><a href="index.php?halaman=hapuslaporan&id=<?= $row['id']; ?>"  onclick="return confirm('Hapus?');" class="btn-danger btn">Hapus</a>
				</tr>
				<?php $i++; ?>
			<?php endforeach; ?>
		</tbody>
	</table>
</p>