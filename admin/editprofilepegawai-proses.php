<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$nip=$_POST['nip'];
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tempat	= $_POST['tempat'];
	$tanggal	= $_POST['tanggallahir'];
	$darah	= $_POST['gol_darah'];
	$agama	= $_POST['agama'];
	$jk	= $_POST['jk'];
	$status	= $_POST['status'];
	$nohp	= $_POST['nohp'];
	$email	= $_POST['email'];
	$tinggal	= $_POST['alamattinggal'];
	$asal	= $_POST['alamatasal'];
		//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	
	$input = mysql_query("INSERT INTO profilepegawai VALUES(NULL,'$nip', '$nama', '$tempat', '$tanggal', '$darah', '$agama', '$jk', '$status','$nohp','$email', '$tinggal', '$asal')") or die(mysql_error());
	
	//jika query input sukses
	if($input){
		
		header('location:profilepegawai.php');
	}else{
		
		header('location:profilepegawai.php');

	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>