<?php include 'navbar.php'; ?>
<?php  
include_once 'functions.php';

if (isset($_POST["submit"]) ) 
{
    if(registrasi($_POST) > 0) {
		echo "<script> alert ('Silahkan Login Terlebih Dahulu untuk Melakukan Pembayaran'); document.location.href = 'login.php';
		</script>";
	} else {
        echo mysqli_error($koneksi);
    }
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Registrasi Anggota</title>
    <link rel="stylesheet" type="text/css" href="assets/registrasi.css">
</head>
<body>
        <div class="regist">
       <form action="" method="POST">    
    	   <div class="form">
                <h1>Registrasi</h1>
    	    <input type="text" name="name" placeholder="Masukan Nama Anda" require>
    	       <br>   	
            <input type="text" name="email" placeholder="Masukan Email Anda" require>
                <br>
            <input type="number" name="phone" placeholder="Masukan No.Telp Anda" require>
                <br>
            <input type="text" name="alamat" placeholder="Masukan Alamat Anda" require>
                <br>
    	    <input type="text" name="kelas" placeholder="Jenis Kelas=Dewasa/Anak-Anak" require>
                <br>
            <input type="password" name="password" placeholder="Masukan password Anda" require>
                <br>
            <input type="password" name="password2" placeholder="Konfirmasi Password Anda" require>
            <br>
             Punya Akun?
            <a href="login.php">Login</a><br>
         <input type="submit" name="submit" value="Daftar">
     </div>
        </form>
    </div>
</body>
</html>
<br><br>
<?php include 'footer.php'; ?>