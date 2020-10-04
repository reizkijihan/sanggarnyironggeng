<h2>Data Pembelian</h2>
<table class="table table-bordered">
	<thead>
		<tr>
		 <th>No</th>
		 <th>Nama</th>
		 <th>Tanggal</th>
		 <th>Kelas</th>
		 <th>Total</th>
		 <th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT *FROM pembelian"); ?>
		<?php while($pecah = $ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $pecah['Id_siswa']; ?></td>
			<td><?php echo $pecah['Nama_siswa']; ?></td>
			<td><?php echo $pecah['Tanggal']; ?></td>
			<td><?php echo $pecah['Kelas_siswa']; ?></td>
			<td><?php echo $pecah['Total']; ?></td>
			<td><?php echo $pecah['Catatan']; ?></td>
		</tr>
	</tbody>
</table>