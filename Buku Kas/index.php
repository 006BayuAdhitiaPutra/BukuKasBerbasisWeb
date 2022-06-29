<?php 
error_reporting(0);
$koneksi = new mysqli("localhost","root","","kas_laundry");
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dahsboard anda</title>
    <style type="text/css">
 
    </style>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" /> 
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
                <a class="navbar-brand" href="?page=index">Dashboard</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> <a href=login.php class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                <li class="text-center">
                   <h1 style="color: white; font-size: 20px; font-family: Time New Roman">Laundry  Kenanga</h1>
                    </li>
                
   <li>
       <a href="?page=home"><i class="fa fa-dashboard fa"></i> Dashboard</a>
            </li>
             <li>
      <a  href="?page=masuk" ><i class="glyphicon glyphicon-usd"></i> Kas Masuk</a>
    <li>
     <a  href="?page=keluar" ><i class="glyphicon glyphicon-usd"></i> Kas Keluar</a>
            </li>

            </li>
             <li>
           <a   href="?page=rekap"><i class="glyphicon glyphicon-folder-open"></i>Rekapitulasi Kas</a>
            </li>
              <li>
           <a   href="cetak.php"><i class="glyphicon glyphicon-folder-open"></i>Cetak lewat media</a>
            </li>
            </div>
           
        </nav>

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">

                    <div class="col-md-12">
                    <?php 
                    $page= $_GET['page']; 
                    $aksi= $_GET['aksi'];
                    if($page=="home")
                    {
                      if($aksi=="")
                      {
                        include"home.php";
                      }
                    }
                  else if($page=="masuk")
                    {
                      if($aksi=="")
                      {
                        include"page/kas_masuk/masuk.php";
                      }
                      {
                        if($aksi=="hapus")
                        include"page/kas_masuk/hapus.php";
                      }
                    }
                    else if($page=="keluar")
                    {
                      if($aksi=="")
                      {
                        include"page/kas_keluar/keluar.php";
                      }
                       if($aksi=="hapus")
                       {
                        include"page/kas_keluar/hapus.php";
                      }
                    }
                    else if($page=="rekap")
                    {
                      if($aksi=="")
                      {
                        include"page/rekap/rekap.php";
                      }
                    }
                     
                     else if($page=="")
                    {
                      include"home.php";
                    }

                    ?>
                    
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>

</body>
</html>
