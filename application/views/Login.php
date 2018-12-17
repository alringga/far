<title>Akun</title>



<!--Log In-->

<div class="container" style="padding-top: 100px; width: 400px;">
<div class="alert alert-info shadow p-3 mb-5 rounded" role="alert">
<h4 class="alert-heading" style="font-family: arial;"> <b>Log In</b></h4>


<form class="text-info" action="<?php echo base_url(). 'index.php/far_controller/lo'?>"method="post">
  <div class="btn-group" role="group" aria-label="Basic example" style="padding-top: 15px;">
  <button href="tampilLoginSar" type="button" class="btn btn-secondary">Tim Sar</button>
  <button href="tampilLogindinas" type="button" class="btn btn-secondary">Dinas</button>
</div>
   <div class="form-group" style="padding-top: 15px;">
    <label for="InputNama">Nama</label>
    <input type="Nama" class="form-control" id="InputNama" placeholder="Masukkan Nama">
  </div>
  <div class="form-group">
    <label for="InputEmail">Email</label>
    <input type="email" class="form-control" id="InputEmail" placeholder="Masukkan email">
  </div>
  <div class="form-group">
    <label for="InputPassword">Password</label>
    <input type="password" class="form-control" id="InputPassword" placeholder="Password">
  </div>
  <button type="submit" class="btn btn-primary">Log In</button>
  <div class="form-group" style="padding-top: 10px;">
    <a>Belum buat akun?  </a><a href="<?= base_url()."index.php/SimpatiController/register";?>">Register</a>
  </div>
</form>
</div>
</div>
</div>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script><?php require 'header.php';?>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>