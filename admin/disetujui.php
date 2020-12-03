<?php

include('koneksi.php');
$id_cuti=$_POST['id_cuti'];
$sql="UPDATE cuti SET status_verifikasi ='terima' WHERE id_cuti=$id_cuti";
	$query = mysqli_query($sql);
	if($query){
		echo"<script>alert('terima?');
		document.location.href='cuti.php'</script>";

	}else{
		echo"<script>alert('Error?');
		document.location.href='cuti.php'</script>";
	}
?>
