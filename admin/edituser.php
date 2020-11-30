<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="../admin/images/logo.png">
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
            <img src="../production/images/bpl.png" width="65" height="60" style="float:left"/><a class="navbar-brand" href="index.php">SIMPEG</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              
              <div class="profile_info">
               <center><h2>Welcome,</h2>
                <h2><big><font color='red'>Endang Sugiarti</font></h2></big>
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
				  
				  <li><a class="nav-link" href="user.php"><i class="fa fa-edit"></i> Data User </a>
                    
                  </li>
                    
                  </li>
                  <li><a class="nav-link" href="pegawai.php"><i class="fa fa-edit"></i> Data Pegawai </a>
                    
                  </li>
                  <li><a class="nav-link" href="cuti.php"><i class="fa fa-desktop"></i> Data Cuti </span></a>
                    
                  </li>
                  <li><a class="nav-link" href="mutasi.php"><i class="fa fa-exchange"></i> Data Mutasi </span></a>
                    
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
         <div class="row">
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="page-title">
			<?php
  
  include('koneksi.php');
  
  //membuat variabel $id yg nilainya adalah dari URL GET id -> edit.php?id=siswa_id
  $kd_user = $_GET['kd_user'];
  
  //melakukan query ke database dg SELECT table user dengan kondisi WHERE siswa_user= '$kd_user'
  $show = mysql_query("SELECT * FROM user WHERE kd_user='$kd_user'");
  
  //cek apakah data dari hasil query ada atau tidak
  if(mysql_num_rows($show) == 0){
    
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
    echo '<script>window.history.back()</script>';
    
  }else{
  
    //jika data ditemukan, maka membuat variabel $data
    $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  
  }
  ?>
                  
      <h3>Edit Data User</h3>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="edituser-proses.php" method="post">
                  <div class="form-group">
                        
                    
                        </div>
					
					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" maxlength="20" value="<?php echo $data['nip']; ?>" onkeypress="return isNumberKey(event)" type="text" name="nip" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
					
				  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >kode User <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" maxlength="20" value="<?php echo $data['kd_user']; ?>" onkeypress="return isNumberKey(event)" type="text" name="kd_user" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama User <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['nama_user']; ?>" type="text" name ="nama_user" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>   

					<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Username<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['username']; ?>" type="text" name ="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>   						
						
                       <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Password<span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['password']; ?>" type="text" name ="password" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>   						
						
					  
                        <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">level</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "level">
                            <?php
                             if ($data['level']=='ADMIN')
                                {
                                  echo "<option selected>ADMIN</option>";
                                }
                             else
                                {
                                  echo "<option>ADMIN</option>";
                                }
                             if ($data['level']=='Pegawai')
                                {
                                  echo "<option selected>Pegawai</option>";
                                }
                             else
                                {
                                  echo "<option>Pegawai</option>";
                                }
                            ?>
                          </select>
                        </div>
                      </div>

                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name ="simpan" class="btn btn-success">Submit</button>
                          <a href="user.php"><button type="submit" class="btn btn-primary">Cancel</button>
                          
                        </div>
                      </div>
                      
  </form>
    
    </div>
              </div>
            </div>
          </div>

        
        <!-- /page content -->

        <!-- footer content -->
       

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
    <script>
    function isNumberKey(evt){
        var charCode=(evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
        return false; 
    return true;
    }
</script>
  </body>
</html>