<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" type="image/png" href="../production/images/logo.png">
    <title>Sistem Informasi Kepegawaian</title>

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
               <img src="../production/images/bpl.png" width="70" height="55" style="float:left"/><a class="navbar-brand" href="index.php">SIMPEG</a>
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
                  <li><a class="nav-link" href="pegawai.php"><i class="fa fa-edit"></i> Data Pegawai </a>
                    
                  </li>
                   <li><a class="nav-link" href="cuti.php"><i class="fa fa-edit"></i> Data Cuti </a>
                    
                  </li>
					</li>
                   <li><a class="nav-link" href="mutasi.php"><i class="fa fa-edit"></i> Data Mutasi </a>
                    
                   </li>
                 
              </div>
              
                  
                            
                  

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
          
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
                    <img src="images/user.png" alt="">dwi lestari
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="login.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
                
                    <li>
                      <a>
                        <span class="image"><img src="images/user.png" alt="Profile Image" /></span>
                       
                      </a>
                    </li>
                    <li>
                      
                    </li>
                    <li>
                      
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
 <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
               <h3>Balai Pelatihan Kesehatan (BAPELKES) Provinsi Lampung</h3>
              </div>

             
            </div>
            <div class="clearfix"></div>
            <div class="row">
             
                <div class="x_panel">
                  
        <!-- page content -->
     
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                   <h2>Sistem Informasi Kepegawaian</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                     
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
               
				<p><a href="tambahprofilepegawai.php"><button class="btn btn-info" >Tambah Data <a href="tambahprofilepegawai.php">
        </button></a></p>

      <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Nama</th>
                          <th>Nip</th>
                          <th>Tempat</th>
                          <th>Tanggal Lahir</th>
						  <th>Golongan Darah</th>
                          <th>Agama</th>
                          <th>Jenis Kelamin</th>
                          <th>Status</th>
                          <th>No Hp</th>
						  <th>Email</th>
						  <th>Alamat Tinggal</th>
						  <th>Alamat Asal</th>
                          <th>Opsi</th>
                        </tr>
                      </thead>
  <?php
    //iclude file koneksi ke database
    include('koneksi.php');
    
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT * FROM profilepegawai") or die(mysql_error());
    
    //cek, apakakah hasil query di atas mendapatkan hasil atau tidak (data kosong atau tidak)
    if(mysql_num_rows($query) == 0){  //ini artinya jika data hasil query di atas kosong
      
      //jika data kosong, maka akan menampilkan row kosong
      echo '<tr><td colspan="6">Tidak ada data!</td></tr>';
      
    }else{  //else ini artinya jika data hasil query ada (data diu database tidak kosong)
      
      //jika data tidak kosong, maka akan melakukan perulangan while
      $no = 1;  //membuat variabel $no untuk membuat nomor urut
      while($data = mysql_fetch_assoc($query)){ //perulangan while dg membuat variabel $data yang akan mengambil data di database
        
        //menampilkan row dengan data di database
        echo '<tr>';
          echo '<td>'.$no.'</td>';  //menampilkan nomor urut
		  echo '<td>'.$data['nama'].'</td>';  //menampilkan data nama lengkap dari database
          echo '<td>'.$data['nip'].'</td>'; //menampilkan data nis dari database
          echo '<td>'.$data['tempat'].'</td>'; //menampilkan data kelas dari database
           echo '<td>'.$data['tanggallahir'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['gol_darah'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['agama'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['jk'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['status'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['nohp'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['email'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['alamattinggal'].'</td>'; //menampilkan data kelas dari database
		   echo '<td>'.$data['alamatasal'].'</td>'; //menampilkan data kelas dari database
         echo '<td><center><a href="editprofilepegawai.php?id='.$data['nip'].'"><button type="button" class="btn btn-warning btn-circle"><i class="fa fa-pencil"></i></button></a>  <a href="hapusprofilepegawai.php?id='.$data['nip'].'" onclick="return confirm(\'Yakin Ingin Menghapusnya?\')"> <button type="button" class="btn btn-danger btn-circle"><i class="fa fa-trash-o"></i></button></a></td>' ; //menampilkan link edit dan hapus dimana tiap link terdapat GET id -> ?id=nipp
        echo '</tr>';
        echo '</tr>';
        
        $no++;  //menambah jumlah nomor urut setiap row
        
      }
      
    }
    ?>
    </table>
    
              </div>
            </div>
          </div>
        
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            dwi lestari 2018 @CopyRight <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
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

     <!-- Datatables -->
    <script src="../vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../vendors/datatables.net-scroller/js/datatables.scroller.min.js"></script>
    <script src="../vendors/jszip/dist/jszip.min.js"></script>
    <script src="../vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../vendors/pdfmake/build/vfs_fonts.js"></script>


    <!-- Datatables -->
    <script>
      $(document).ready(function() {
        var handleDataTableButtons = function() {
          if ($("#datatable-buttons").length) {
            $("#datatable-buttons").DataTable({
              dom: "Bfrtip",
              buttons: [
                {
                  extend: "copy",
                  className: "btn-sm"
                },
                {
                  extend: "csv",
                  className: "btn-sm"
                },
                {
                  extend: "excel",
                  className: "btn-sm"
                },
                {
                  extend: "pdfHtml5",
                  className: "btn-sm"
                },
                {
                  extend: "print",
                  className: "btn-sm"
                },
              ],
              responsive: true
            });
          }
        };

        TableManageButtons = function() {
          "use strict";
          return {
            init: function() {
              handleDataTableButtons();
            }
          };
        }();

        $('#datatable').dataTable();

        $('#datatable-keytable').DataTable({
          keys: true
        });

        $('#datatable-responsive').DataTable();

        $('#datatable-scroller').DataTable({
          ajax: "js/datatables/json/scroller-demo.json",
          deferRender: true,
          scrollY: 380,
          scrollCollapse: true,
          scroller: true
        });

        $('#datatable-fixed-header').DataTable({
          fixedHeader: true
        });

        var $datatable = $('#datatable-checkbox');

        $datatable.dataTable({
          'order': [[ 1, 'asc' ]],
          'columnDefs': [
            { orderable: false, targets: [0] }
          ]
        });
        $datatable.on('draw.dt', function() {
          $('input').iCheck({
            checkboxClass: 'icheckbox_flat-green'
          });
        });

        TableManageButtons.init();
      });
    </script>
    <!-- /Datatables -->
  </body>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>