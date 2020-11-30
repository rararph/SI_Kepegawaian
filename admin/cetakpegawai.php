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

<?php 
include 'koneksi.php';
include 'inc_lib.php';
?>
<section class="content">
            <div class="text-center">
			<h2><p align="center"><b>UPTD BALAI PELATIHAN KESEHATAN (BAPELKES) PROVINSI LAMPUNG</b></p></h2>
			<h2><p align="center"><b>Jl.Soekarno-Hatta No.7 tlp.(0721)704550, 787277 fax (0721) 787277</b></p></h2>
			</div><br/>
<h2>Laporan Data Pegawai Bapelkes Provinsi Lampung</h2>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>

<table width="100%" cellspacing="0" class="data" border="1">
	<tr>
		
<thead>
                         <tr>
                          <th><center>No</th>
                          <th><center>NIP</th>
                          <th><center>Nama</th>
                          <th><center>Tempat Lahir</th>
                          <th><center>Tanggal Lahir</th>
                          <th><center>Jabatan</th>
                          <th><center>Jenis Kelamin</th>
						  <th><center>Agama</th>
                          <th><center>Status Pegawai</th>
						  <th><center>Status Hubungan</th>
                          <th><center>Golongan</th>
						 
						 
               
                        </tr>
                      </thead>
                      <tbody>
					   <?php
					 
    include('koneksi.php');
    
    //query ke database dg SELECT table siswa diurutkan berdasarkan NIS paling besar
    $query = mysql_query("SELECT * FROM datapegawai") or die(mysql_error());
    
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
          echo '<td>'.$data['nip'].'</td>'; //menampilkan data nis dari database
		   echo '<td>'.$data['nama'].'</td>';  //menampilkan data nama lengkap dari database		   
          echo '<td>'.$data['tempatlahir'].'</td>'; //menampilkan data kelas dari database
          echo '<td>'.$data['tanggallahir'].'</td>'; //menampilkan data kelas dari database
		  echo '<td>'.$data['jabatan'].'</td>'; //menampilkan data kelas dari database         
          echo '<td>'.$data['jk'].'</td>'; //menampilkan data kelas dari database
          echo '<td>'.$data['agama'].'</td>'; //menampilkan data kelas dari database
          echo '<td>'.$data['status_pegawai'].'</td>'; //menampilkan data kelas dari database
		  echo '<td>'.$data['status_hubungan'].'</td>'; //menampilkan data kelas dari database
          echo '<td>'.$data['golongan'].'</td>';

	   echo '</tr>';
        
        $no++;  //menambah jumlah nomor urut setiap row
         
      } 
    }
    ?>
                        
							</tbody>
						</table>
<br/><br/>
<table>
	<thead>
		<tr>
			<th width="260"></th>
			<th width="260"></th>
			<th width="450">Bandar Lampung, <?php echo Indonesia2Tgl(date('Y-m-d'));?></th>
		</tr>
	</thead>
	<tr>
		<th width="250"></th>
		<th width="450"></th>
		<th width="450">KEPALA BALAI PELATIHAN KESEHATAN PROVINSI LAMPUNG</th>
	</tr>
	
</table>
<br/><br/><br/><br/><br/><br/>
<table>

			<thead>	
			<tr><u>
			 <th width="500"></th>
			<th width="750"></th>
			<th width="550">Drg.Mardania, MHSM</th>
			</tr></u>
			
			</thead>
			<tr>
			<th width="500"></th>
			<th width="750"></th>
			<th width="550">NIP.196403121989022001</th>
			</tr>
	
</table>
</html>

