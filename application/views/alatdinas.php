<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Permintaan Alat</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
   
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

     <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/font-awesome.css">
  <link rel="stylesheet" type="text/css" href="<?= base_url()?>/assets/set/css/custom.css">
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="tampilalatdinas">Permintaan Alat</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">
<a href="index" class="btn btn-danger square-btn-adjust">Home</a>
<a href="index" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="<?= base_url()?>/assets/img/21.jpg" class="user-image img-responsive"/>
                    </li>
                
                    
                    <li>
                        <a  href="tampiladmindinas"><i class="fa fa-dashboard fa-3x"></i> Home</a>
                    </li>
                     <li  >
                        <a  href="tampilkorbandinas"><i class="fa fa-table fa-3x"></i> Data Korban </a>
                    </li>
                    <li  >
                        <a  href="tampilrelawandinas"><i class="fa fa-table fa-3x"></i> Data Relawan </a>
                    </li>
                     <li>
                        <a href="tampilalatdinas"><i class="fa fa-dashboard fa-3x"></i>Permintaan Alat</a>
                    </li>
                   
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Permohonan Alat Tim Sar</h2>   
                       
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
                                            <th>Nama Anggota</th>
                                            <th>Alat</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
                                            
                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach($alat as $row) { ?> 
                                        <tr>
                                            <td><?= $row['nama_orang']?></td>
                                            <td><?= $row['nama_alat']?></td>
                                            <td><?= $row['status']?></td>
                                             <td>
          <a class="btn btn-success float-left ml-1" href="<?php echo base_url()."index.php/far_controller/edit_data/".$d['id_pegawai']; ?>">Ubah</a>
          <a class="btn btn-danger float-left ml-1" href="<?php echo base_url()."index.php/sdm_controller/do_delete/".$d['id_pegawai']; ?>" onclick="return confirm('Anda Yakin Ingin Menghapus Data Ini?');">Hapus</a>
        </td>
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
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
