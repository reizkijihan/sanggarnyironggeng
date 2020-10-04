<?php 
if( !isset($_SESSION["anggota"])) {
  header("Location: login.php");
  exit;
}

$id_anggota = $_SESSION["anggota"]["id_anggota"];
$ambil= $koneksi->query ("SELECT * FROM anggota WHERE id_anggota='$id_anggota'");
$pecah=$ambil->fetch_assoc();
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">

body
{
	margin: 0;
	padding: 0;
	background-color: #fce4ec;
	font-size: 20px;
	color: #560027; 

}
.cont
{
	margin: auto;
	width: 500px;

}
.roww
{	box-shadow: 1px 1px 30px #560027;
	background-color: #ffffff;
	padding: 20px;
	border-radius: 20px;
	margin-top: 30px; 
	text-align: center;
}
</style>
</head>
<body>
<div class="cont">
<div class="roww">
		<table class="table">
			<h3 class="text-center">Profile Anggota</h3>
			<tr>
				<th>Nama </th>
				<td><?= $pecah['name']; ?></td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td><?= $pecah['kelas']; ?></td>
			</tr><br><br>
			<tr>
				<th>Email</th>
				<td><?= $pecah['email']; ?></td>
			</tr>
			<tr>
				<th>No Telepon</th>
				<td><?= $pecah['phone']; ?></td>
			</tr>
			<tr>
				<th>Alamat</th>
				<td><?= $pecah['alamat']; ?></td>
			</tr>
		</table>
<a href="index1.php?page=nilai&id=<?= $pecah['name']; ?>" class="btn btn-primary"> Lihat Nilai</a>
</div>
</div>
</div>
</body>
</html>
