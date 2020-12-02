<!DOCTYPE html>

<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="../admin/images/logo.png">
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
               <img src="../admin/images/logo.png" width="65" height="60" style="float:left"/><a class="navbar-brand" href="index.php">SIMPEG</a>
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
                  <li><a class="nav-link" href="index.php"><i class="fa fa-home"></i> Beranda </span></a>
                    
                  </li>
				  
				  <li><a class="nav-link" href="user.php"><i class="fa fa-home"></i> Data User </span></a>
                    
                  </li>
                  
                  <li><a class="nav-link" href="pegawai.php"><i class="fa fa-edit"></i> Data Pegawai </a>
                    
                  </li>
                   <li><a class="nav-link" href="cuti.php"><i class="fa fa-edit"></i> Data Cuti </a>
                    
                  </li>
				  
				  <li><a class="nav-link" href="mutasi.php"><i class="fa fa-exchange"></i> Data Mutasi </a>
                    
                  </li>
				  
				    <li><a class="nav-link" href="mutasijabatan.php"><i class="fa fa-exchange"></i> Data Mutasi Jabatan </span></a>
                    
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
              
                <h3> Detail Pegawai</h3>
                 <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="pegawai.php">Data Pegawai</a>
        </li>
        <li class="breadcrumb-item active">Detail Pegawai</li>
      </ol>
		<?php
		require("koneksi.php");
		@$nip=$_GET['nip'];
		mysql_connect("localhost","root","");
		
$sql=mysql_query("select * from datapegawai where nip='".$nip."'");
$data=mysql_fetch_assoc($sql);
		?>
		<div class="card-body">
                      <table class="table table-striped table-sm">
                      
                      <tr>
                      <td>NIP </td>
					   <td>: </td>
                        <td><?php echo $data['nip'];?></td>
                      </tr>
         <tr>
                      <td>Nama Pegawai </td>
					   <td>: </td>
                        <td><?php echo $data['nama'];?></td>
                      </tr>
					  
		<tr>
                      <td>Tempat Lahir</td>
					   <td>: </td>
                        <td><?php echo $data['tempatlahir'];?></td>
                      </tr>
					  
		<tr>
                      <td>Tanggal Lahir</td>
					   <td>: </td>
                        <td><?php echo $data['tanggallahir'];?></td>
                      </tr>
					  
		<tr>
                      <td>Nama Jabatan</td>
					   <td>: </td>
                        <td><?php echo $data['jabatan'];?></td>
                      </tr>
					  
		<tr>
                      <td>Jenis Kelamin</td>
					   <td>: </td>
                        <td><?php echo $data['jk'];?></td>
                      </tr>
					  
		<tr>
                      <td>Agama</td>
					   <td>: </td>
                        <td><?php echo $data['agama'];?></td>
                      </tr>
					  
		<tr>
                      <td>Status Pegawai</td>
					   <td>: </td>
                        <td><?php echo $data['status_pegawai'];?></td>
                      </tr>
					  
		<tr>
                      <td>Status Hubungan</td>
					   <td>: </td>
                        <td><?php echo $data['status_hubungan'];?></td>
                      </tr>
					  
		<tr>
                      <td>Golongan</td>
					   <td>: </td>
                        <td><?php echo $data['golongan'];?></td>
                      </tr>
					  
		<tr>
                      <td>Pendidikan Umum</td>
					   <td>: </td>
                        <td><?php echo $data['pend_umum'];?></td>
                      </tr>
					  
		<tr>
                      <td>Pendidikan Jenjang</td>
					   <td>: </td>
                        <td><?php echo $data['pend_jenjang'];?></td>
                      </tr>
					  
		<tr>
                      <td>No hp</td>
					   <td>: </td>
                        <td><?php echo $data['nohp'];?></td>
                      </tr>
					  
		<tr>
                      <td>Email</td>
					   <td>: </td>
                        <td><?php echo $data['email'];?></td>
                      </tr>

		<tr>
					   <td>Riwayat Mutasi</td>
					   <td>: </td>
					   <td>

					   
	
		<?php 
		$sqlc=mysql_query("select * from mutasi where nip='".$data['nip']."' ORDER BY mutasi.tmt_dinas ASC");
		//$datac=mysql_fetch_assoc($sqlc);
		while($datac = mysql_fetch_assoc($sqlc)){
			//echo "mutasi";
			//echo "$datac['jenis_mutasi'] di $datac['dinas_baru'] wilayah $datac['wilayah_kerja'] sebagai $datac['jabatan_baru'] Terhitung Mulai Tugas Dinas pada $datac['tmt_dinas'] <br>";
		echo $datac['jenis_mutasi']." di ".$datac['dinas_baru']." wilayah ".$datac['wilayah_kerja']." sebagai ".$datac['jabatan_baru']." Terhitung Mulai Tugas Dinas pada ".$datac['tmt_dinas'];
		echo "<br>";
		}
?>					</td>

       </tr>
					   
					   <tr>
					   <td>Riwayat Jabatan</td>
					   <td>: </td>
					   <td>

					   
	
		<?php 
		$sqle=mysql_query("select * from mutasijabatan where nip='".$data['nip']."' ORDER BY mutasijabatan.tmt_jabatan ASC");
		//$datae=mysql_fetch_assoc($sqle);
		while($datae = mysql_fetch_assoc($sqle)){
			//echo "mutasijabatan";
			//echo "$data['nama'] di $data['jabatan'] wilayah $datac['wilayah_kerja'] sebagai $datac['jabatan_baru'] Terhitung Mulai Tugas Dinas pada $datac['tmt_dinas'] <br>";
		echo $datae['nama']." jabatan ".$datae['jabatan']." pindah jabatan sebagai ".$datae['jabatan_baru']." terhitung mulai tugas ".$datae['tmt_jabatan'];
		echo "<br>";
		}
?>					</td>

       </tr>
					   
					   
		</table>
		
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