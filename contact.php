<?php include 'navbar.php'; ?>
<style >
  body{
    background-color: #fce4ec;
    width: 100%;
    height: 0;
    background-repeat: no-repeat;
    overflow-x: hidden;
  }
   .mapouter iframe
  {text-align:center;height:300px;width:320px;}
  .gmap_canvas iframe 
  {overflow:hidden;background:none!important;height:300px;width:320px;}

  @media screen and (min-width: 800px)
{
  .mapouter iframe
  {text-align:right;height:400px;width:450px;}
  .gmap_canvas iframe 
  {overflow:hidden;background:none!important;height:400px;width:450px;}
}
</style>
  }
</style>
<body>
  <div class="container padding">  
   <div class="row mt-5">   
     <div class="mapouter">
      <div class="gmap_canvas">
        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d3964.9183427732323!2d106.83161151431204!3d-6.404521264419037!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKomplek%20Samudera%20Indonesia%20Blok%20B4%20No.16%20Depok!5e0!3m2!1sid!2sid!4v1592976303820!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>   
      </div>
    </div>  
    

    <div class="col-sm-20 col-md">  
      <h1 class="display-3">Kritik&Saran</h1>  
      <h4 class="display-5">Jangan ragu untuk tinggalkan pesan</h4>  
      <p class="display-7">Phone: 087887365872 </p>  
      <form action="" method="post"><div class="row">  
       <div class="col-md-6 multi-horizontal" data-for="name">  
         <input type="text" class="form-control input" name="name" data-form-field="Name" placeholder="Nama anda" required="" id="name-form4-4v">  
       </div>  
       <div class="col-md-12" data-for="email">  
         <input type="text" class="form-control input" name="email" data-form-field="Email" placeholder="Email" required="" id="email-form4-4v">  
       </div>  
       <div class="col-md-12" data-for="message">  
         <textarea class="form-control input" name="message" rows="3" data-form-field="Message" placeholder="Message" required="" id="message-form4-4v"> </textarea>
       </div>  
       <div class="input-group-btn col-md-12" style="margin-top: 10px;">  
         <button href="" type="submit" name="submitdata" class="btn btn-dark btn-form display-1">Kirim</button>  
       </div>  
     </div>  
   </form>  
 </div>
</div>
</div>
</body>

<?php
if (isset($_POST['submitdata']))
{
  $koneksi->query("INSERT INTO laporan (nama, email, message) VALUES ('$_POST[name]','$_POST[email]','$_POST[message]')");

  echo "<div class='alert alert-info'>Terimakasih kritik dan saran anda sudah terkirim!</div>";
  echo "<meta http-equiv='refresh' content='1;url=index.php?page=contact'>";
}
?><br>
<?php include 'footer.php'; ?>