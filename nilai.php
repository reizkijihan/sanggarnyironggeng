<?php 
if( !isset($_SESSION["anggota"])) {
  header("Location: login.php");
  exit;
}
$koneksi = mysqli_connect("localhost","root","","sanggarweb");
$name=$_GET["id"];
$ambil = $koneksi->query("SELECT * FROM nilai WHERE name ='$name'");
$pecah = $ambil ->fetch_assoc();
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
	text

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

	</style>
</head>
<body>
<div class="cont">
<div class="roww">
		<table class="table">
			<h3 class="text-center">Hasil Nilai Ujian</h3>
			<tr>
				<th>Nama </th>
				<td><?= $pecah['name']; ?></td>
			</tr>
			<tr>
				<th>Kelas</th>
				<td><?= $pecah['jenis_kelas']; ?></td>
			</tr><br><br>
			<tr>
				<th>Nilai Wirasa</th>
				<td><?= $pecah['wirasa']; ?></td>
			</tr>
			<tr>
				<th>Nilai Wiraga</th>
				<td><?= $pecah['wiraga']; ?></td>
			</tr>
			<tr>
			<th>Nilai Wirama</th>
			<td><?= $pecah['wirama']; ?></td>
			</tr>
			<tr>
			<th>Kerangan </th>
			<td><?= $pecah['keterangan']; ?></td>
			</tr>
		</table>
	</div>
	<br><br>
</body>
</html>