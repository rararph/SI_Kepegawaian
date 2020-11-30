<?php
include 'koneksi-json.php';
$nip = $_GET['nip'];
$query = mysqli_query($koneksi, "select * from datapegawai where nip='$nip'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $mahasiswa['nama']);
           
 echo json_encode($data);
?>