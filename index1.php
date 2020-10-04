<?php
session_start();
if( !isset($_SESSION["anggota"])) {
  header("Location: login.php");
  exit;
}
  // pemanggilan koneksi
  include_once 'functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sanggar Nyi Ronggeng</title>
  <!-- koneksi bootstrap dan fond awesome -->
  <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.min.css">
  
  
</head>
<body>

  <div class="box-nav">
    <?php include 'header.php'; ?>
  </div>

  <section>
    <?php
    if (isset($_GET['page'])) {
      if ($_GET['page']=="home") {
        include 'home.php';
      }elseif ($_GET['page']=='galeri') {
        include 'galeri.php';
      }elseif ($_GET['page']=='contact') {
        include 'contact.php';
      }elseif ($_GET['page']=='bantuan') {
        include 'bantuan.php';
      }elseif ($_GET['page']=='registrasi') {
        include 'registrasi.php';
      }elseif ($_GET['page']=='profil') {
        include 'profil.php';
      }elseif ($_GET['page']=='nilai') {
        include 'nilai.php';
      }elseif ($_GET['page']=='nota') {
        include 'nota.php';
      }elseif ($_GET['page']=='konfirmasi') {
        include 'konfirmasi.php'; 
      }elseif ($_GET['page']=='daftarulang') {
        include 'daftarulang.php';  
      }elseif ($_GET['page']=='logout') {
        include 'logout.php';
      }elseif ($_GET['page']=='login'){
        include 'login.php';
    }else{
      include 'home.php';
    }
  }
    ?>
    <br><br>
  </section>
  <section class="page-footer">
    <?php include 'footer.php'; ?>
  </section>


  <script type="text/javascript" src="control/js/jquery.js"></script>
  <script type="" src="bootstrap/js/bootstrap.min.js"></script>
</body>
</html>