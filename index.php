<?php
session_start();
require 'functions.php';
$prevent = array(
  'navbar',
  'footer',

);//untuk menghalangi bberpa file di require, agar tidak terjadi trouble
if (isset($_GET['page']) && $_GET['page'] != '') {
    $page = $_GET['page'];
    $path_page = $page . '.php';

    if (file_exists($path_page) && !in_array($page, $prevent)) {
        require $path_page;//cek file apakah ada di folder template ato tidak
    } else {
        require 'home.php';
    }
} else {
  require 'home.php';
}//memanggil file index yg ada di template
//menggunakan fungsi get, gar menangkap variabel yg ada di address bar ?>