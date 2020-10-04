<h2>Bukti Pembayaran</h2>
<?php 
$id_anggota = $_GET['id'];

//mengambil detail pembayaran berdasarkan id_anggota

$ambil = $koneksi->query("SELECT * FROM pembayaran WHERE id_anggota ='$id_anggota'");
$detail = $ambil ->fetch_assoc();
?>
<div class="row">
	<div class="col-md-6">
		<table class="table">
			<tr>
				<th>Id.Pembayaran</th>
				<td><?= $detail['id_pembayaran']; ?></td>
			</tr>
			<tr>
				<th>Nama</th>
				<td><?= $detail['name']; ?></td>
			</tr>
			<tr>
				<th>Jenis Kelas</th>
				<td><?= $detail['jenis_kelas']; ?></td>
			</tr>
			<tr>
				<th>Bank</th>
				<td><?= $detail['bank']; ?></td>
			</tr>
			<tr>
			<th>Jumlah</th>
			<td><?=  number_format($detail['jumlah']); ?></td>
			</tr>
			<tr>
			<th>Tanggal </th>
			<td><?= $detail['tanggal']; ?></td>
			</tr>
		</table>
	</div>
	<div class="col-md-6">
		<img src="../img/bukti/<?= $detail['bukti']; ?>" alt="" class="img-responsive">
	</div>
</div>
