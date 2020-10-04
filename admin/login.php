<?php 
session_start();

require 'koneksi.php';

?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Admin</title>
  <style type="text/css">
    body{
  margin: 0;
  padding: 0;
  background: url(download.jpg);
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
.box-login input[type="username"], .box-login input[type="password"]{
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
.box-login input[type="username"]:focus,.box-login input[type="password"]:focus{
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
    <h1>Login Admin </h1>
            <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="username" class="form-control" name="username" placeholder="username" />
            </div>
            <div class="form-group input-group">
            <span class="input-group-addon"></span>
            <input type="password" class="form-control" name="password" placeholder="password" />
            </div>
            <button type="submit" name="submit">Login</button>
    </form>

    <?php 

    if (isset($_POST['submit']))
        {
          $ambil = $koneksi->query("SELECT * FROM admin WHERE username='$_POST[username]'
          AND password ='$_POST[password]'");
          $yangcocok = $ambil->num_rows;
          if ($yangcocok==1)
        {
            $_SESSION['admin']=$ambil->fetch_assoc();
            echo "<div class='alert alert-info'>Login Sukses</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
        }
         else
        {
            echo "<div class='alert alert-danger'>Login Gagal</div>";
            echo "<meta http-equiv='refresh' content='1;url=login.php'>";
        }
        }
     ?>
    </div>
</body>
</html>