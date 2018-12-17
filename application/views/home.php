<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>SIMPATI</title>
  
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/css/style.css">
  

<body>
  <!--header-->
  <header class="main-header" id="home">
    <div class="bg-color">
      <!--nav-->
      <nav class="nav navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mynavbar" aria-expanded="false" aria-controls="navbar">
                            <span class="fa fa-bars"></span>
                        </button>
              <a href="index" class="navbar-brand">SIMPATI</a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="mynavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="#home">Home</a></li>
                <li><a href="#datakorban">Data Korban</a></li>
                <li><a href="#akun">Akun</a></li>
                <li><a href="#contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <!--/ nav-->
      <div class="container text-center">
        <div class="wrapper wow fadeInUp delay-05s">
          <h2 class="top-title">Selamat Datang</h2>
          <h3 class="title">SIMPATI</h3>
          <h4 class="sub-title">Sistem Pemetaan Triase</h4>
        </div>
      </div>
    </div>
  </header>
  <!--/ header-->
  <!---->
  <section id="datakorban" class="section-padding container">
      <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Korban</h2>   
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr /> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Advanced Tables
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">

                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Depan</th>
                                            <th>Nama Belakang</th>
                                            <th>Umur</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>Nomer ktp</th>
                                            <th>Triase</th>
                                            
                                        </tr>
                                    </thead>
                                    
                                    <tbody>
                                        <?php foreach($korban as $row) { ?> 
                                        <tr>
                                            <td><?= $row['nama_dpn']?></td>
                                            <td><?= $row['nama_blkng']?></td>
                                            <td><?= $row['umur']?></td>
                                            <td><?= $row['jenis_klmn']?></td>
                                            <td><?= $row['alamat']?></td>
                                            <td><?= $row['no_ktp']?></td>
                                            <td><?= $row['triase']?></td>
                                        </tr>
                                    <?php } ?>

                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            
        </div>
  </section>
  
  <!---->
  <section class="section-padding wow fadeInUp delay-02s" id="akun">
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-12">
          <div class="section-title">
            <h2 class="head-title">Akun</h2>
            <hr class="botm-line">
          </div>
        </div>
        <div class="container" style="padding-top: 100px; width: 400px;">
<div class="alert alert-info shadow p-3 mb-5 rounded" role="alert">
<h4 class="alert-heading" style="font-family: arial;"> <b>Log In</b></h4>


<form class="text-info">
  <div class="btn-group" role="group" aria-label="Basic example" style="padding-top: 15px;">
  <a href="<?= base_url('far_controller/tampilLoginSar')?>" class="btn btn-danger square-btn-adjust">Tim Sar</a>
  <a href="tampilLogindinas" class="btn btn-danger square-btn-adjust">Dinas</a>
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
</form>
</div>
</div>
</div>

      </div>
    </div>
  </section>
  <!---->
  <!---->
  <section class="section-padding wow fadeInUp delay-05s" id="contact">
    <div class="container">
      <div class="row white">
        <div class="col-md-8 col-sm-12">
          <div class="section-title">
            <h2 class="head-title black">Contact Us</h2>
            <hr class="botm-line">
            <p class="sec-para black">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua..</p>
          </div>
        </div>
        <div class="col-md-12 col-sm-12">
          <div class="col-md-4 col-sm-6" style="padding-left:0px;">
            <h3 class="cont-title">Email Us</h3>
            <div id="sendmessage">Your message has been sent. Thank you!</div>
            <div id="errormessage"></div>
            <div class="contact-info">
              <form action="" method="post" role="form" class="contactForm">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validation"></div>
                </div>
                <div class="form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                  <div class="validation"></div>
                </div>

                <div class="form-group">
                  <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                  <div class="validation"></div>
                </div>
                <button type="submit" class="btn btn-send">Send</button>
              </form>
            </div>

          </div>
          <div class="col-md-4 col-sm-6">
            <h3 class="cont-title">Visit Us</h3>
            <div class="location-info">
              <p class="white"><span aria-hidden="true" class="fa fa-map-marker"></span>Via Principe Amedeo 9, Torino, Italy</p>
              <p class="white"><span aria-hidden="true" class="fa fa-phone"></span>Phone: 0039 333 12 68 347</p>
              <p class="white"><span aria-hidden="true" class="fa fa-envelope"></span>Email: <a href="" class="link-dec">hi@yourdomain.com</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="contact-icon-container hidden-md hidden-sm hidden-xs">
              <span aria-hidden="true" class="fa fa-envelope-o"></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!---->
  <!---->
  <footer class="" id="footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-7 footer-copyright">
          © Far Crew - All rights reserved
          <div class="credits">
            <!--
              All the links in the footer should remain intact.
              You can delete the links only if you purchased the pro version.
              Licensing information: https://bootstrapmade.com/license/
              Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Bethany
            -->
            Designed by <a href="https://bootstrapmade.com/">FarCrew</a>
          </div>
        </div>
        <div class="col-sm-5 footer-social">
          <div class="pull-right hidden-xs hidden-sm">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-google-plus"></i></a>
            <a href="#"><i class="fa fa-pinterest"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!---->
  <!--contact ends-->
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery.easing.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/wow.js"></script>
  <script src="js/custom.js"></script>
  <script src="contactform/contactform.js"></script>

</body>
</html>
