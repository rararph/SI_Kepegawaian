<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$kd_user	= $_POST['kd_user'];
	$nama_user		= $_POST['nama_user'];	
	$username	= $_POST['username'];
	$password	= $_POST['password'];
	$level	= $_POST['level'];
	
		//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	
	$update = mysql_query("UPDATE user SET kd_user='$kd_user', nama_user='$nama_user', username='$username', password='$password', level='$level' WHERE kd_user='$kd_user' ") or die(mysql_error());
	
	//jika query input sukses
	if($update){
		
		header('location:user.php');
	}else{
		
		header('location:user.php');

	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>