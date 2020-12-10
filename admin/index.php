<?php
include'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../admin/images/bg.png">
    <title>Sistem Informasi Kepegawaian </title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
            <img src="../admin/images/bg.png" width="65" height="60" style="float:left"/><a class="navbar-brand" href="index.php">S.I.K.P</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            
              <div class="profile_info">
                <center><h2>Welcome,</h2>
                <h2><big><font color='red'>Admin</font></h2></big>
              </div>
            </div>
			
			
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Kabag.Kepegawaian</h3>
				
				
                <ul class="nav side-menu">
                  <li><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Beranda</span></a>
				  
				  <li><a class="nav-link" href="user.php"><i class="fa fa-users"></i> Data User </a>
                    
                  </li>
                    
                  </li>
                  <li><a class="nav-link" href="pegawai.php"><i class="fa fa-edit"></i> Data Pegawai </a>
                    
                  </li>
                  <li><a class="nav-link" href="cuti.php"><i class="fa fa-desktop"></i> Data Cuti </span></a>
                    
                  </li>
                  <li><a class="nav-link" href="mutasi.php"><i class="fa fa-exchange"></i> Data Mutasi </span></a>
                    
                  </li>
				  
				    <li><a class="nav-link" href="mutasijabatan.php"><i class="fa fa-exchange"></i> Data Mutasi Jabatan </span></a>
                    
                  </li>
                 
                 
              </div>
              
                  
                            
                  

            </div>
            <!-- /sidebar menu -->

        
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
               
                   
                    <li><a href="../login/logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

              </ul>
            </nav>
          </div>

        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
         <div class="">
            <div class="page-title">
			
			<body bgcolor="ffaa66" leftmargin="200px">
			
			<img align="left" src="../admin/images/logo.png" width="150">
			<img align="right" src="../admin/images/logo.png" width="150">
			<p align="center">
			
			<br></br>
			<font size="10" color="black"> Sistem Informasi Kepegawaian
			</br><br></font>
              
				<div class="jumbotron">
				
				
                    <p><big><h2><marquee direction="left" scrollamount="6" align="center">Selamat Datang Di Home Admin Sistem Informasi Kepegawaian, Jangan Lupa Bahagia :)</marquee></h2>   
                        <h5></h5>
                <br>
                </div>
              </div>
            </div>
          </div>
		  
        <!-- /page content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- jQuery custom content scroller -->
    <script src="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>