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
            <div class="profile">
              
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
  $nip = $_GET['nip'];
  
  //melakukan query ke database dg SELECT table siswa dengan kondisi WHERE siswa_id = '$id'
  $show = mysql_query("SELECT * FROM datapegawai WHERE nip='$nip'");
  
  //cek apakah data dari hasil query ada atau tidak
  if(mysql_num_rows($show) == 0){
    
    //jika tidak ada data yg sesuai maka akan langsung di arahkan ke halaman depan atau beranda -> index.php
    echo '<script>window.history.back()</script>';
    
  }else{
  
    //jika data ditemukan, maka membuat variabel $data
    $data = mysql_fetch_assoc($show); //mengambil data ke database yang nantinya akan ditampilkan di form edit di bawah
  
  }
  ?>
                  
      <h3>Edit Data pegawai</h3>
      <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="editpegawai-proses.php" method="post">
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
                          <input class="form-control" maxlength="20" value="<?php echo $data['tempatlahir']; ?>"  type="text" name="tempatlahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
           
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"  >Tanggal Lahir <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12" value="<?php echo $data['tanggallahir']; ?>"  type="date" name="tanggallahir" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
            
                         <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jabatan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <select class="form-control" name="jabatan">
                            <?php
                        $queryjabatan = mysql_query( "SELECT * FROM jabatan");
                        if($queryjabatan == false){
                          //die ("Terdapat Kesalahan : ". mysqli_error($konek));  
                        }
                        while($jabatan = mysql_fetch_array($queryjabatan)){
                          if($jabatan[1]==$data['jabatan']){
                          echo "<option selected value='$jabatan[1]'>$jabatan[1]</option>";
                        }else{echo "<option value='$jabatan[1]'>$jabatan[1]</option>";}
                        }
                      ?>
              
              
              <?php /*
                           if ($jabatan=='Kepala Bapelkes')
                            {
                                  echo "<option selected> Kepala Bapelkes</option>";
                                }
                             else
                                {
                                  echo "<option>Kepala Bapelkes</option>";
                                }
                                if ($jabatan=='Widyaiswara Ahli Madya')
                            {
                                  echo "<option selected>Widyaiswara Ahli Madya</option>";
                                }
                             else
                                {
                                  echo "<option>Widyaiswara Ahli Madya</option>";
                                }
                
                 if ($jabatan=='Widyaiswara Ahli Muda')
                            {
                                  echo "<option selected> Widyaiswara Ahli Muda</option>";
                                }
                             else
                                {
                                  echo "<option>Widyaiswara Ahli Muda</option>";
                                }
                
                if ($jabatan=='Kasubag TU')
                            {
                                  echo "<option selected> Kasubag TU</option>";
                                }
                             else
                                {
                                  echo "<option>Kasubag TU</option>";
                                }
                
                if ($jabatan=='JFU Pemroses Data Kepegawaian Subag. TU')
                            {
                                  echo "<option selected>JFU Pemroses Data Kepegawaian Subag. TU</option>";
                                }
                             else
                                {
                                  echo "<option>JFU Pemroses Data Kepegawaian Subag. TU</option>";
                                }
                
                if ($jabatan=='Kasie Pengendalian Mutu Diklat')
                            {
                                  echo "<option selected>Kasie Pengendalian Mutu Diklat</option>";
                                }
                             else
                                {
                                  echo "<option>Kasie Pengendalian Mutu Diklat</option>";
                                }
                
                if ($jabatan=='JFU Pengumpul dan Penyusun  Data Perpustakaan PD')
                            {
                                  echo "<option selected>JFU Pengumpul dan Penyusun  Data Perpustakaan PD</option>";
                                }
                             else
                                {
                                  echo "<option>JFU Pengumpul dan Penyusun  Data Perpustakaan PD</option>";
                                }
                
                if ($jabatan=='Bendahara Pembantu Penerimaan')
                            {
                                  echo "<option selected>Bendahara Pembantu Penerimaan</option>";
                                }
                             else
                                {
                                  echo "<option>Bendahara Pembantu Penerimaan</option>";
                                }
                
                if ($jabatan=='Pengolah Dan Penganalisis Data Pengembangan Diklat')
                            {
                                  echo "<option selected>Pengolah Dan Penganalisis Data Pengembangan Diklat</option>";
                                }
                             else
                                {
                                  echo "<option>Pengolah Dan Penganalisis Data Pengembangan Diklat</option>";
                                }
                
                if ($jabatan=='JFU Pemroses Data PMD')
                            {
                                  echo "<option selected>JFU Pemroses Data PMD</option>";
                                }
                             else
                                {
                                  echo "<option>JFU Pemroses Data PMD</option>";
                                }
                
            */
                            ?>
                          </select>
                        </div>
                      </div>
            
                        <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Kelamin</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="jk" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="laki-laki"> &nbsp; Laki-Laki &nbsp;
                            </label>
                            <label class="btn btn-primary" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="jk" value="perempuan"> Perempuan
                            </label>
                          </div>
                        </div>
                      </div>
            
                        <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Agama</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "agama">
                            <?php
                             if ($data['agama']=='Islam')
                                {
                                  echo "<option selected>Islam</option>";
                                }
                             else
                                {
                                  echo "<option>Islam</option>";
                                }
                             if ($data['agama']=='Kristen')
                                {
                                  echo "<option selected>Kristen</option>";
                                }
                             else
                                {
                                  echo "<option>Kristen</option>";
                                }
                             if ($data['agama']=='Budha')
                                {
                                  echo "<option selected>Budha</option>";
                                }
                             else
                                {
                                  echo "<option>Budha</option>";
                                }
                             if ($data['agama']=='Hindu')
                                {
                                  echo "<option selected>Hindu</option>";
                                }
                             else
                                {
                                  echo "<option>Hindu</option>";
                                }
                if ($data['agama']=='Katolik')
                                {
                                  echo "<option selected>Katolik</option>";
                                }
                             else
                                {
                                  echo "<option>Katolik</option>";
                                }
                            ?>
                          </select>
                        </div>
                      </div>

            
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Pegawai</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "status_pegawai">
                            <?php
                             if ($data['status_pegawai']=='PNS')
                                {
                                  echo "<option selected>PNS</option>";
                                }
                             else
                                {
                                  echo "<option>PNS</option>";
                                }
                             if ($data['status_pegawai']=='NON PNS')
                                {
                                  echo "<option selected>NON PNS</option>";
                                }
                             else
                                {
                                  echo "<option>NON PNS</option>";
                                }
                            ?>
                          </select>
                          </div>
                          </div>
             
             
             <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Status Hubungan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "status_hubungan">
                            <?php
                             if ($data['status_hubungan']=='menikah')
                                {
                                  echo "<option selected>menikah</option>";
                                }
                             else
                                {
                                  echo "<option>menikah</option>";
                                }
                             if ($data['status_hubungan']=='belum menikah')
                                {
                                  echo "<option selected>belum menikah</option>";
                                }
                             else
                                {
                                  echo "<option>belum menikah</option>";
                                }
                            ?>
                          </select>
                          </div>
                          </div>
             
                          <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Golongan</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name="golongan">
                            <?php
                           if ($data['golongan']=='IA')
                            {
                                  echo "<option selected>IA</option>";
                                }
                             else
                                {
                                  echo "<option>IA</option>";
                                }
                             if ($data['golongan']=='IB')
                                {
                                  echo "<option selected>IB</option>";
                                }
                             else
                                {
                                  echo "<option>IB</option>";
                                }
                             if ($data['golongan']=='IC')
                                {
                                  echo "<option selected>IC</option>";
                                }
                              else
                                {
                                  echo "<option>IC</option>";
                                }
                             if ($data['golongan']=='ID')
                                {
                                  echo "<option selected>ID</option>";
                                }
                             else
                                {
                                  echo "<option>ID</option>";
                                }
                                 if ($data['golongan']=='IIA')
                            {
                                  echo "<option selected>IIA</option>";
                                }
                             else
                                {
                                  echo "<option>IIA</option>";
                                }
                             if ($data['golongan']=='IIB')
                                {
                                  echo "<option selected>IIB</option>";
                                }
                             else
                                {
                                  echo "<option>IIB</option>";
                                }
                             if ($data['golongan']=='IIC')
                                {
                                  echo "<option selected>IIC</option>";
                                }
                              else
                                {
                                  echo "<option>IIC</option>";
                                }
                             
                                 if ($data['golongan']=='IIIA')
                            {
                                  echo "<option selected>IIIA</option>";
                                }
                             else
                                {
                                  echo "<option>IIIA</option>";
                                }
                             if ($data['golongan']=='IIIB')
                                {
                                  echo "<option selected>IIIB</option>";
                                }
                             else
                                {
                                  echo "<option>IIIB</option>";
                                }
                             if ($data['golongan']=='IIIC')
                                {
                                  echo "<option selected>IIIC</option>";
                                }
                              else
                                {
                                  echo "<option>IIIC</option>";
                                }
                             if ($data['golongan']=='IIID')
                                {
                                  echo "<option selected>IIID</option>";
                                }
                             else
                                {
                                  echo "<option>IIID</option>";
                                }
                               if ($data['golongan']=='IVA')
                            {
                                  echo "<option selected>IVA</option>";
                                }
                             else
                                {
                                  echo "<option>IVA</option>";
                                }
                             if ($data['golongan']=='IVB')
                                {
                                  echo "<option selected>IVB</option>";
                                }
                             else
                                {
                                  echo "<option>IVB</option>";
                                }
                             if ($data['golongan']=='IVC')
                                {
                                  echo "<option selected>IVC</option>";
                                }
                              else
                                {
                                  echo "<option>IVC</option>";
                                }
                             if ($data['golongan']=='IVD')
                                {
                                  echo "<option selected>IVD</option>";
                                }
                             else
                                {
                                  echo "<option>IVD</option>";
                                } 
                            ?>
                          </select>
                        </div>
                      </div>
            
            
                       <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Umum</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "pend_umum">
                            <?php
                             if ($data['pend_umum']=='SD')
                                {
                                  echo "<option selected>SD</option>";
                                }
                             else
                                {
                                  echo "<option>SD</option>";
                                }
                             if ($data['pend_umum']=='SMP')
                                {
                                  echo "<option selected>SMP</option>";
                                }
                             else
                                {
                                  echo "<option>SMP</option>";
                                }
                if ($data['pend_umum']=='SMA/SMK/MA')
                                {
                                  echo "<option selected>SMA/SMK/MA</option>";
                                }
                             else
                                {
                                  echo "<option>SMA/SMK/MA</option>";
                                }
                            ?>
                          </select>
                          </div>
                          </div>
              
                      <div class="form-group" >
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Pendidikan Jenjang</label>
                        <div class="col-md-6 col-sm-6 col-xs-12" >
                          <select class="form-control" name = "pend_jenjang">
                            <?php
                             if ($data['pend_jenjang']=='D3')
                                {
                                  echo "<option selected>D3</option>";
                                }
                             else
                                {
                                  echo "<option>D3</option>";
                                }
                             if ($data['pend_jenjang']=='S1')
                                {
                                  echo "<option selected>S1</option>";
                                }
                             else
                                {
                                  echo "<option>S1</option>";
                                }
                if ($data['pend_jenjang']=='S2')
                                {
                                  echo "<option selected>S2</option>";
                                }
                             else
                                {
                                  echo "<option>S2</option>";
                                }
                if ($data['pend_jenjang']=='S3')
                                {
                                  echo "<option selected>S3</option>";
                                }
                             else
                                {
                                  echo "<option>S3</option>";
                                }
                            ?>
                          </select>
                          </div>
                          </div>
            
            
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >nohp <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['nohp']; ?>" type="text" name ="nohp" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
            
            
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" >email <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control" value="<?php echo $data['email']; ?>" type="text" name ="email" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                        </div>
                         
                     
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name ="simpan" class="btn btn-success">Simpan</button>
                           <button type="reset" value ="kembali" class="btn btn-default" onclick="self.history.back()">Batal</button>
              
                          <a href="pegawai.php">
                          </a>
                        </div>
                      </div>
  </form>
    
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