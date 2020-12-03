<?php
//mulai proses tambah data

//cek dahulu, jika tombol tambah di klik
if(isset($_POST['simpan'])){
	
	//inlcude atau memasukkan file koneksi ke database
	include('koneksi.php');
	
	//jika tombol tambah benar di klik maka lanjut prosesnya
	
	$idmutasi	= $_POST['id_mutasi'];
	$nip	= $_POST['nip'];
	$nama		= $_POST['nama'];
	$nosk=$_POST['no_sk'];
	$jabatan= $_POST['jabatan'];
	$jabatanbaru	= $_POST['jabatan_baru'];
	$dinasbaru	= $_POST['dinas_baru'];
	$tmtdinas	= $_POST['tmt_dinas'];
	$wilayahkerja	= $_POST['wilayah_kerja'];
	$jenismutasi	= $_POST['jenis_mutasi'];
		//membuat variabel $kelas dan datanya dari inputan dropdown Kelas
	
	
	//melakukan query dengan perintah INSERT INTO untuk memasukkan data ke database
	
	$update = mysql_query("UPDATE mutasi SET id_mutasi='$idmutasi', nip='$nip', nama='$nama', no_sk='$nosk', jabatan='$jabatan', jabatan_baru='$jabatanbaru', dinas_baru='$dinasbaru', tmt_dinas='$tmtdinas', wilayah_kerja='$wilayahkerja', jenis_mutasi='$jenismutasi',' WHERE nip='$nip' ") or die(mysql_error());
	
	//jika query input sukses
	if($update){
		
		header('location:mutasi.php');
	}else{
		
		header('location:mutasi.php');

	}

}else{	//jika tidak terdeteksi tombol simpan di klik

	//redirect atau dikembalikan ke halaman edit
	echo '<script>window.history.back()</script>';

}
?>