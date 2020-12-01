<?php 
session_start();
include 'koneksi.php';
$username = ($_POST['username']);
$password = md5($_POST['password']);
$query= mysql_query("SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$hasil= mysql_num_rows($query);
$data = mysql_fetch_array($query);
if ($hasil == 1)
{
	
	$_SESSION['kd_user'] = $data['kd_user'];
	$_SESSION['nip'] = $data['nip'];
	$_SESSION['nama'] = $data['nama'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['password'] = $data['password'];
	$_SESSION['level'] = $data['level'];
	if ($data['level'] == "admin") {header("location:../admin/index.php");}
	else if ($data['level'] == "pegawai") {header("location:../pegawai/index.php");}
	
}
else
{
	echo
	"<div class='alert alert-danger alert-dismissible' role='alert'>
  <button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button>
  <strong>Warning!</strong> Username/Password salah.
</div>";
}
?>