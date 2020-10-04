<?php 
// koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "sanggarweb");

function query ($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}
function cari($keyword) {
	$query ="SELECT * FROM anggota WHERE 
			name LIKE '%$keyword%'";
			return query ($query);
}

function hapusgaleri ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM galeri WHERE id= $id");
	return mysqli_affected_rows($koneksi);

}

function hapuslaporan ($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM laporan WHERE id=$id");
	return mysqli_affected_rows($koneksi);
}


function ubahnilai($nilai) {
	global $koneksi;

	$id = $nilai["id"];
	$name = htmlspecialchars($nilai["name"]);
	$jenis_kelas = htmlspecialchars($nilai["jenis_kelas"]);
	$wirasa = htmlspecialchars($nilai["wirasa"]);
	$wiraga = htmlspecialchars($nilai["wiraga"]);
	$wirama = htmlspecialchars($nilai["wirama"]);
	$keterangan = htmlspecialchars($nilai["keterangan"]);

	$query = "UPDATE nilai SET name= '$name', jenis_kelas = '$jenis_kelas' , wirasa = '$wirasa' , wiraga = '$wiraga' , wirama = '$wirama' , keterangan = '$keterangan' WHERE id= $id";

	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);

}


function hapusnilai($id) {
	global $koneksi;
	mysqli_query($koneksi, "DELETE FROM nilai WHERE id= $id");
	return mysqli_affected_rows($koneksi);
}


function tambahdata($nilai) {
	global $koneksi;
	$name = htmlspecialchars($nilai["name"]);
	$jenis_kelas = htmlspecialchars($nilai["jenis_kelas"]);
	$wirasa = htmlspecialchars($nilai["wirasa"]);
	$wiraga = htmlspecialchars($nilai["wiraga"]);
	$wirama = htmlspecialchars($nilai["wirama"]);
	$keterangan = htmlspecialchars($nilai["keterangan"]);

	$query = "INSERT INTO nilai VALUES ('', '$name', '$jenis_kelas', '$wirasa', '$wiraga', '$wirama', '$keterangan')";
	mysqli_query($koneksi, $query);

	return mysqli_affected_rows($koneksi);
}

function carisiswa($keyword) {

	$query = "SELECT * FROM nilai WHERE name LIKE '%$keyword%' ";
	return query ($query);

}