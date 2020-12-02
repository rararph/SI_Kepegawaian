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
            <img src="../admin/images/bpl.png" width="65" height="60" style="float:left"/><a class="navbar-brand" href="index.php">SIMPEG</a>
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
              
                <h3> Data Cuti Bapelkes Provinsi Lampung</h3>
                 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.php">Beranda</a>
        </li>
        <li class="breadcrumb-item active">Data cuti</li>
      </ol>
	<p><a href="laporancuti.php"><button class="btn btn-default"> Cetak Laporan Cuti<a href="laporancuti.php"></button></a></p>
			
     <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">                     
	 
	 <thead>
                        
						<tr>
                          <th>No</th>
                          <th>NIP</th>
                          <th>Nama</th>
                          <th><center>Tanggal Pengajuan</th>
                          <th><center>Tanggal Mulai</th>
                          <th><center>Tanggal Akhir</th>
						  <th><center>Lama Cuti</th>
                          <th><center>Jenis Cuti</th>
                          <th>Alasan</th>
                          <th>Status</th>
						 <th>Opsi</th>
                        </tr>
    </thead>
    <tbody>
<?php

                    //Data mentah yang ditampilkan ke tabel    
					include "koneksi.php";// Perintah untuk koneksi data dari database
                    $sql = mysql_query('SELECT * FROM cuti INNER JOIN datapegawai ON datapegawai.nip=cuti.nip INNER JOIN user ON user.nip=datapegawai.nip');
                    $no_urut = 1;
                    while ($data = mysql_fetch_array($sql)) {
                    $id_cuti = $data['id_cuti'];
                    if($data['status_verifikasi'] === 'tunggu'){
                        $stat="Menunggu Verifikasi";
                    }else if($data['status_verifikasi'] === 'terima'){
                        $stat="Verifikasi";
                    }else if($data['status_verifikasi'] === 'tolak'){
                        $stat="Batal Verifikasi";
                    }else{
                        $stat="UnKnowable";
                    }
                    ?>

                    <tr>
                        <td><?php echo  $no_urut;?></td>
                        <td><?php echo  $data['nip']; ?></td>
						<td><?php echo  $data['nama']; ?></td>
						<td><?php echo  $data['tgl_pengajuan']; ?></td>
						<td><?php echo  $data['tgl_mulai']; ?></td>
						<td><?php echo  $data['tgl_akhir']; ?></td>
						<td><?php echo  $data['lama_cuti']; ?></td>
						<td><?php echo  $data['jeniscuti']; ?></td>
						<td><?php echo  $data['alasan']; ?></td>
						<td><?php echo  $stat; ?></td>
						
						
                        <td p align="center">     
						             	
							 
							 <?php 
                             if ($data['status_verifikasi'] === 'tunggu') {
                                 echo "
								 
                                 <a href='verifikasi.php?id_cuti=".$data['id_cuti']."' class= 'btn-primary btn-sm'> Verifikasi </a>
                                 <a href='verificancel.php?id_cuti=".$data['id_cuti']."' class= 'btn-primary btn-sm'> Tolak </a>
                                 ";
                             }else{
                             }
                             ?>
<!--							<a href="verif.php?=<?php //echo  $data['statve']; ?>" class= 'btn-primary btn-sm'> Verifikasi</a>
                            <a href="batalverif.php?=<?php //echo  $data['statve']; ?>" class= 'btn-primary btn-sm'> Batal Verifikasi</a>
-->
                            
                        </td>
						
                    </tr>
                    <?php
                    $no_urut++;
                    }
                    ?>
                            
                       
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
        
        
        <!-- /page content -->

        <!-- footer content -->
         <footer>
          <div class="pull-right">
            Dwi Lestari Manajemen Informatika Unila</a>
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

      <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

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