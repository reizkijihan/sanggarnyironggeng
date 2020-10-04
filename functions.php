<?php 
//koneksi ke database
$koneksi = mysqli_connect("localhost","root","","sanggarweb");


function query ($query){
	global $koneksi;
	$result = mysqli_query($koneksi, $query);
	$rows = [];
	while ( $row = mysqli_fetch_assoc($result) ) {
		$rows[] = $row;

	}
	return $rows;
}

function registrasi($data) {
	global $koneksi;

	$name = (stripslashes($data['name']));
	$email = ($data['email']);
	$phone = ($data['phone']);
	$alamat = ($data['alamat']);
	$kelas = ($data['kelas']);
	$password = mysqli_real_escape_string($koneksi, $data['password']);
	$password2 = mysqli_real_escape_string($koneksi, $data['password2']);
	$tanggal = date("Y-m-d");

	// cek email sudah ada atau belum
	$result = mysqli_query($koneksi, "SELECT email FROM anggota WHERE email ='$email'");
	if( mysqli_fetch_assoc($result)) {
		echo"<script>
		alert('Email sudah terdaftar!')
		</script>";
		return false;
	}

	//cek konfirmasi password
	if ( $password !== $password2 ) {
		echo "<script>
		alert('konfirmasi password tidak sesuai');
		</script>";
		return false;
	}
	// tambahkan ke database

	mysqli_query($koneksi, "INSERT INTO anggota VALUES ('','$name', '$email', '$phone', '$alamat', '$kelas', '$tanggal','$password')");

	return mysqli_affected_rows($koneksi);

}

 ?>