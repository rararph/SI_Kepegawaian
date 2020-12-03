<?php
//memulai proses hapus data

//cek dahulu, apakah benar URL sudah ada GET id -> hapus.php?id=siswa_id
if(isset($_GET['id'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//membuat variabel $id yg bernilai dari URL GET id -> hapus.php?id=siswa_id
	$id = $_GET['id'];
	
	//cek ke database apakah ada data siswa dengan siswa_id='$id'
	$cek = mysql_query("SELECT nip FROM mutasi WHERE nip='$id'") or die(mysql_error());
	
	//jika data siswa tidak ada
	if(mysql_num_rows($cek) == 0){
		
		//jika data tidak ada, maka redirect atau dikembalikan ke halaman beranda
		echo '<script>window.history.back()</script>';
	
	}else{
		
		//jika data ada di database, maka melakukan query DELETE table siswa dengan kondisi WHERE siswa_id='$id'
		$del = mysql_query("DELETE FROM mutasi WHERE nip='$id'");
		
		//jika query DELETE berhasil
		if($del){
			
			header('location:mutasi.php');
	}else{
		
		header('location:mutasi.php');

		}
		
	}
	
}else{
	
	//redirect atau dikembalikan ke halaman beranda
	echo '<script>window.history.back()</script>';
	
}
?>