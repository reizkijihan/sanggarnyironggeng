<?php 

$id_pem= $_GET["id"];
$ambil = $koneksi->query("SELECT * FROM anggota WHERE id_anggota='$id_pem'");
$pembayaran = $ambil->fetch_assoc();

 ?>


<!DOCTYPE html>
 <html>
 <head>
  <title>Pembayaran</title>  
 </head>
 <body>
 <div class="container">
  <h2 class="text-center">Konfirmasi Pembayaran</h2>
  <div  class="alert alert-info">Silahkan Transfer sesuai dengan jumlah uang yang harus dibayar: <strong>Rp.100000;</strong></div>
  <form method="post" enctype="multipart/form-data">
   <div class="form-group">
    <label for="name">Nama Penyetor</label>
    <input type="text" name="name" class="form-control" id="name" required="">
   </div>
    <div class="form-group">
    <label for="jenis_kelas">Jenis Kelas</label>
    <input type="text" name="jenis_kelas" class="form-control" id="jenis_kelas" required="">
   </div>
   <div class="form-group">
    <label>Nama Bank</label><br>
   <select class="form-group" name="bank">
      <option>BCA</option>
      <option>BNI</option>
      <option>BRI</option>
      <option>Mandiri</option>
      <option>Bukopin</option>
      <option>DKI</option>
   <!--  <input type="text" name="bank" class="form-control" id="bank" required=""> -->
   </select>
      
   </div>
   <div class="form-group">
    <label for="jumlah">Jumlah</label>
    <input type="text" name="jumlah" class="form-control" id="jumlah" min="1" required="">
   </div>
     <div class="form-group">
    <label for="foto">Foto Bukti</label>
    <input type="file" name="foto" class="form-control" id="foto" required="">
    <p class="text-danger">Foto bukti harus JPG atau PNG</p>
   </div>
   <button class="btn btn-primary" name="kirim">Kirim</button>
  </form>


 <?php 
if (isset($_POST['kirim'])) {
 //upload dulu foto buktinya
 $namabukti= $_FILES['foto']['name'];
 $lokasibukti=$_FILES['foto']['tmp_name'];
 $namafiks=date("YmdHis").$namabukti;
 move_uploaded_file($lokasibukti, "img/bukti/$namafiks");
 $name =$_POST['name'];
 $bank=$_POST['bank'];
 $jenis_kelas = $_POST['jenis_kelas'];
 $jumlah=$_POST['jumlah'];
 $tanggal=date('Y-m-d');
 //update status data pembelian
 if ($jumlah== 100000) {
 $koneksi->query("INSERT INTO pembayaran (id_anggota,name,jenis_kelas,bank,jumlah,tanggal,bukti) VALUES ('$id_pem','$name','$jenis_kelas','$bank','$jumlah','$tanggal','$namafiks')");

 echo "<script>alert('Terimakasih sudah melakukan transaksi'); document.location.href ='index1.php?page=daftarulang';</script>";
 }else{ ?>
  <p style="color: red; font-style: italic;"> Mohon masukkan jumlah transfer sesuai nominal</p>
<?php exit;
}
 
 
  echo "<script>location='index1.php?page=konfirmasi'</script>"; 
}
  ?> </div>
 </body>
 </html>