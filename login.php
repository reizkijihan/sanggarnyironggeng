<?php
session_start();
include_once 'functions.php' ;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Anggota</title>
  <style type="text/css">
    body{
    margin: 0;
    padding: 0;
    background: url(foto/logo.JPG);
    background-repeat: no-repeat;
    background-size: cover;
    font-family: sans-serif;

}
.box-login{
    width: 300px;
    padding: 40px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%,-50%);
    text-align: center;
    background-color: rgba(52,73,94,0.4);
}
.box-login{
    color: #ffc1e3;
}
.box-login input[type="email"], .box-login input[type="password"]{
    display: block;
    margin: 20px auto;
    color: #000000;
    text-align: center;
    border: 2px solid #ffff78;
    width: 180px;
    outline: none;
    transition: 0.5s;
    border-radius: 12px;
    padding:10px 10px;
}
.box-login input[type="email"]:focus,.box-login input[type="password"]:focus{
    width: 260px;
    border-color: #ffc1e3;
}
.box-login input[type="submit"]{
    background: none;
    display: block;
    margin: 20px auto;
    color: #ffffff;
    text-align: center;
    border: 2px solid #ffff78;
    width: 100px;
    outline: none;
    transition: 0.5s;
    border-radius: 12px;
    padding:10px 10px;
}

  </style>
</head>
<body>
    <div class="box-login">
  <form action="" method="post">
    <h1>Login Anggota </h1>
            <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="email" class="form-control" name="email" placeholder="email" />
            </div>
            <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="password" class="form-control" name="password" placeholder="password" />
            </div>
            <div>
                <input type="checkbox" name="remember">
                <label for="remember">Remember me </label>
            </div>
            <button type="submit" name="submit">Login</button>
    </form>
    </div>
</body>
</html>
<?php 
 if (isset($_POST['submit']))
        {
          $ambil = $koneksi->query("SELECT * FROM anggota WHERE email='$_POST[email]'
          AND password ='$_POST[password]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1)
        {
            $akun = $ambil->fetch_assoc();
            $_SESSION['anggota']=$akun;
            echo "<div class='alert alert-info'>Login Sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index1.php?page=profil'>";
        }
         else
        {
            echo "<div class='alert alert-danger'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }
        }

 ?>
