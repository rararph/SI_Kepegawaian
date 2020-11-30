<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$nip=$_POST['nip'];
	$jabatan	= $_POST['jabatan'];
	$nama		= $_POST['nama'];	//membuat variabel $nama dan datanya dari inputan Nama Lengkap
	$tempatlahir= $_POST['tempatlahir'];
	$tanggallahir	= $_POST['tanggallahir'];
	$jk	= $_POST['jk'];
	$agama	= $_POST['agama'];
	$status_pegawai	= $_POST['status_pegawai'];
	$status_hubungan	= $_POST['status_hubungan'];
	$golongan	= $_POST['golongan'];
	$pend_umum	= $_POST['pend_umum'];
	$pend_jenjang = $_POST['pend_jenjang'];
	$nohp	= $_POST['nohp'];
	$email	= $_POST['email'];
		//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	
	$update = "UPDATE datapegawai SET nip=$nip, nama='$nama', tempatlahir='$tempatlahir', jabatan='$jabatan', jk='$jk', agama='$agama', status_pegawai='$status_pegawai', status_hubungan='$status_hubungan', golongan='$golongan', pend_umum='$pend_umum', pend_jenjang='$pend_jenjang',nohp='$nohp', email='$email' WHERE nip='$nip' ") or die(mysql_error());
	
	//jika query input sukses


}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>