<?php 

$id_anggota = $_SESSION["anggota"]["id_anggota"];
$ambil= $koneksi->query ("SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
$pecah=$ambil->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="container">
		<div class="row">
			<!-- judul nota -->
			<div class="col-md-12">
				<h1 class="text-center">Nota</h1>
				<hr class="soft">
			</div>
			<div class="col-md-12">
				<div class="table-responsive">		
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>Nama</th>
								<td><?php echo $pecah['name']; ?></td>
							</tr>
							<tr>
								<th>Kelas</th>
								<td><?php echo $pecah['kelas'];?></td>
							</tr>
							<tr>
								<th>Jumlah</th>
								<td>RP.100.000,00</td>
							</tr>
						</thead>
					</table>
				</div>
			</div>
			<div class="col-md-12">
				<div class="alert alert-info">
					<p>
						silahkan melakukan pembayaran Rp.100.000,00 ke <br>
						<strong>BANK BCA 7650752371 A.N. REKHAH SEFTIANI HADI </strong>
					</p>
				</div>
			</div>
			<a href="index1.php?page=konfirmasi&id=<?= $pecah['id_anggota']; ?>" class="btn btn-primary"> Konfirmasi Pembayaran</a>
		</div>
	</div>
</body>
</html>