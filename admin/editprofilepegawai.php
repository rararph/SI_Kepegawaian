<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../production/images/logo.png">
    <title>Si Kepegawaian</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- jQuery custom content scroller -->
    <link href="../vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
    <link href="../vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md footer_fixed">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
               <img src="../production/images/logo.png" width="70" height="55" style="float:left"/><a class="navbar-brand" href="index.php">SIMPEG</a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Welcome,</span>
                <h2>Dwi Lestari</h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>General</h3>
                <ul class="nav side-menu">
                  <li><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Beranda </span></a>
                    
                  </li>
                  <li><a class="nav-link" href="profilepegawai.php"><i class="fa fa-edit"></i> Profile Pegawai </a>
                    
                  </li>
                  <li><a class="nav-link" href="pegawai.php"><i class="fa fa-desktop"></i> Data Pegawai</span></a>
                    
                  </li>
                  <li><a class="nav-link" href="cuti.php"><i class="fa fa-table"></i> Data Cuti </span></a>
                    
                  </li>
				  
				  <li><a class="nav-link" href="mutasi.php"><i class="fa fa-table"></i> Data Mutasi </span></a>
                    
                  </li>
                 
              </div>
            </div>
			
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
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
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Dwi Lestari
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="javascript:;"> Profile</a></li>
                    <li>
                      <a href="javascript:;">
                        <span class="badge bg-red pull-right">50%</span>
                        <span>Settings</span>
                      </a>
                    </li>
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                    <span class="badge bg-green">6</span>
                  </a>
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                        <span>
                          <span>John Smith</span>
                          <span class="time">3 mins ago</span>
                        </span>
                        <span class="message">
                          Film festivals used to be do-or-die moments for movie makers. They were where...
                        </span>
                      </a>
                    </li>
                    <li>
                      <div class="text-center">
                        <a>
                          <strong>See All Alerts</strong>
                          <i class="fa fa-angle-right"></i>
                        </a>
                      </div>
                    </li>
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
  $id = $_GET['id'];
  
  //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
  $show = mysql_query("SELECT * FROM profilepegawai WHERE id_pegawai='$id'");
  
  //cek apakah data dari hasil query ada atau tidak
  if(mysql_num_rows($show) == 0){
    
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
    echo '<script>window.history.back()</script>';
    
  }else{
  
    //jika data ditemukan, maka membuat variabel $data
    $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  
  }
  ?>
                  
      <h3>Edit Data Profile Pegawai</h3>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="editprofilepegawai-proses.php" method="post">
                  <div class="form-group">
                        
                        
                           <input type="hidden" name="id" value="<?php echo $data['id_pegawai'];?>
                        
                        </div>
				 
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >NIP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" maxlength="20" value="<?php echo $data['nip']; ?>" onkeypress="return isNumberKey(event)" type="text" name="nip" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >Nama Pegawai <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['nama']; ?>" type="text" name ="nama" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tempat Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control"  value="<?php echo $data['tempat']; ?>"  type="text" name="tempat" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control"  placeholder="Masukkan Tanggal Lahir"  type="date" name="tanggallahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
						 <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Golongan Darah <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="gol_darah" class="form-control">
                    
                            <option value="">Pilih Golongan</option>
                            <option value="A">A</option>
                            <option value="AB">AB</option>
                            <option value="O">O</option>
                          </select> 
                      </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Agama <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="agama" class="form-control">
                    
                            <option value="Pilih Agama">Pilih Agama</option>
							<option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katholik">Katholik</option>
                            <option value="Hindu">Hindu </option>
                            <option value="Budha">Budha</option>
                          </select> 
                      </div>
                      </div>
				
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="laki-laki"> &nbsp; Laki-Laki &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="perempuan"> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
					  
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Status <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select name="status" class="form-control">
                            <option value="">Pilih Status</option>
                            <option value="Menikah">Menikah</option>
                            <option value="Belum Menikah">Belum Menikah</option>
                        </select> 
                      </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >No HP <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" maxlength="20" value="<?php echo $data['nohp']; ?>" onkeypress="return isNumberKey(event)" type="text" name="nohp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >E-mail <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['email']; ?>" type="text" name ="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Alamat Tinggal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control"  value="<?php echo $data['alamattinggal']; ?>"  type="text" name="alamattinggal" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
						
						<div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Alamat Asal <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control"  value="<?php echo $data['alamatasal']; ?>"  type="text" name="alamatasal" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
					
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name ="simpan" class="btn btn-success">Submit</button>
                          <a href="profilepegawai.php"><button type="submit" class="btn btn-primary">Cancel</button>
                          
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