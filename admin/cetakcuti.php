<head>
	<style type="text/css">
	

body {
	background:#ddd;
}

.page {	
	position:relative;
	width:21cm;
	min-height:29.7cm;
	page-break-after: always;
	margin:0.5cm auto;
	background:#FFF;
	padding:1.5cm;
	box-shadow:0 2px 10px rgba(0,0,0,0.3);
	-webkit-box-sizing: none;
	-moz-box-sizing: none;
	box-sizing: none;

	page-break-after: always;
}
.page-landscape {	
	position:relative;
	width:29.7cm;
	min-height:19cm;
	page-break-after: always;
	margin:1.5cm;
	background:#FFF;
	padding:1.5cm;
	box-shadow:0 2px 10px rgba(0,0,0,0.3);
	-webkit-box-sizing: none;
	-moz-box-sizing: none;
	box-sizing: none;

	page-break-after: always;
}
.footer {
	position:absolute;
	bottom:1.5cm;
	left:1.5cm;
	right:1.5cm;
	width:auto;
	height:30px;
}
.kanan {
	float:right;
}
.page *, .page-landscape * {
	font-family:arial;
	font-size:17px;
}
.it-grid {
	background:#FFF;
	border-collapse:collapse;
	border:1px solid #000;
}
.seri {
	font-family:'Lucida Handwriting';
}
.it-grid th {
	color:#000;
	border:1px solid #000;
	border-top:1px solid #000;
	background:#C4BC96;
}
.it-grid tr:nth-child(even) { background:#f8f8f8; }
.it-grid td, .it-grid th {
	padding:3px;
	border:1px solid #000;
}
.it-cetak td {
	padding:5px 5px;
}
h1, h2, h3, h4, h5, h6 {
	font-weight:normal;
}

table {
	border-collapse:collapse;
}

td{
	padding:1px;
}

.f14 {
	font-size:14pt;
}
.f12 {
	font-size:12pt;
}
.line-bottom{
	border-bottom:1px solid black;
}
.detail {
	margin-top:10px;
	margin-bottom:10px;
}
.detail td{
	padding:5px;
	font-size:12px;
}
.detail span{
	border-bottom:1px solid black;
	display:inline-block;
	font-size:12px;
}

.cetakan{
	font-size:14px;
	line-height:1.5em;
}
.cetakan *{
	font-size:20px;
	line-height:1.5em;
}
.cetakan span {
	border-bottom:1px solid black;
	display:inline-block;
}
.full {
	width:100%;
}
nip {
	display:inline-block;
	width:130px;
}
a {
	text-decoration:none;
	color:#006600;
}
ol {
	margin-left:30px;
}

ol > li {
	padding:10px;
}
table { page-break-inside:auto }
tr    { page-break-inside:avoid; page-break-after:auto }
thead { display:table-header-group }
tfoot { display:table-footer-group }


@media print {
	body {
		background:#ddd;
	}
	body, div, td, p {
		font-family:'Times New Roman',Times,serif;
		font-size:12pt;
	}
	.page {
		height:10cm;
		padding:0.7cm;
		box-shadow:none;
		margin:0;
	}
	@page {
	    size: A4;
	    margin: 0;
	    -webkit-print-color-adjust: exact;
	}
	
	.page-landscape {
		height:5cm;
		padding:0.5cm;
		box-shadow:none;
		margin:0;
	}

	.footer {
		bottom:0.7cm;
		left:0.7cm;
		right:0.7cm;
	}
	thead { 
		display: table-header-group;
	}
}
	</style>
</head>
<?php 
include 'koneksi.php';
include 'inc_lib.php';
?>
<body>
<div class="page"><center><table align="center"><tbody><tr>
<td style="padding:8px;">

<tbody>
<script>
		window.load = print_d();
		function print_d(){
			window.print();
		}
	</script>	
	<?php
		require("koneksi.php");
		@$nip=$_GET['nip'];
		mysql_connect("localhost","root","");
		
$sql=mysql_query("select * from cuti where nip='".$nip."'");
$data=mysql_fetch_assoc($sql);
		?>
<table width="100%" class="surat">		
<tr>
		<tbody><tr>
			<td><img src="./images/logo.png" height="80"></td>
				<td align="center" style="font-weight:bold">BALAI PELATIHAN KESEHATAN PROVINSI LAMPUNG<br>  Jl.Soekarno-Hatta No.7 tlp.(0721)704550, 787277 fax (0721) 787277<br> BANDAR LAMPUNG<br><br>
				</td>
			</tr></tbody>
<td colspan="3" style="border-bottom:1px solid black">
	
</td>
</tr>
</table>		
<table border='0' align='left'>
<p align='right' >Bandar Lampung, <?php echo Indonesia2Tgl(date('Y-m-d'));?></p>
<tr>
<td width="500px">
Nomor &nbsp&nbsp&nbsp&nbsp&nbsp: ...../IV.02.3/VIII/<?php echo date('Y');?><br>
Lampiran &nbsp: -<br>
Prihal &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp :&nbsp <?php echo $data['jeniscuti'];?>
<br>
<br>
<br>
</td>
<td width="500px">
Kepada Yth,<br>
Kepala Dinas Kesehatan<br>
Provinsi Lampung<br>
Di<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Bandar Lampung
</td>
</tr>
</table>
<br><br><br><br><br><br>
<table border='0' align='left'>

<tr><td width='50px'></td><td>Yang bertanda tangan dibawah ini :</td></tr>
<tr><td width='50px'></td><td><br></td></tr>
<tr><td width='50px'></td><td>Nama </td><td>:</td><td> <?php echo $data['nama'];?></td></tr>
<tr><td width='50px'></td><td>NIP</td><td>:</td><td> <?php echo $data['nip'];?></td></tr>
<tr><td width='50px'></td><td>Golongan</td><td>:</td><td> <?php echo $data['golongan'];?></td></tr>
<tr><td width='50px'></td><td>Jabatan</td><td>:</td><td> <?php echo $data['jabatan'];?></td></tr>
<tr><td width='50px'></td><td><br></td></tr>
</table>
<table border='0' align='left'>
<?php
$Start = date('d-m-Y', strtotime($data['tgl_mulai']));
$end = date('d-m-Y', strtotime($data['tgl_akhir']));
 ?>
<tr><td width='50px'></td><td>Dengan ini mengajukan permintaan &nbsp<?php echo $data['jeniscuti'];?> 
, terhitung mulai tanggal <?php echo $Start;?> sampai dengan tanggal 
<?php echo $end;?>. Selama menjalankan cuti alamat saya di &nbsp <?php echo $data['alamat'];?>


<tr><td width='50px'></td><td><br></td></tr>
</td></tr>
<tr><td width='50px'></td><td>Demikian permintaan surat ini saya buat untuk dapat dipertimbangkan dengan sebagaimana mestinya
</td></tr>
<tr><td width='50px'></td><td><br></td></tr>
<tr><td width='50px'></td><td>Atas perkenan Ibu diucapkan terimakasih
</td></tr>
</table>
<table border='0' align='right'>
<tr><td width='50px'></td><td><br></td></tr>
<tr><td width='50px'></td><td><br></td></tr>
<tr>
</td>
<td>Hormat saya<br>

<br>
<br>
<br>
<b><u><?php echo $data['nama'];?></u><br>
<b>Nip.<?php echo $data['nip'];?>
</td>
<td width="75px"></td>
</tr>
</table>	
<table border='0' align='left'>
<tr><td width='50px'></td><td><br></td></tr>
<tr><td width='50px'></td><td><br></td></tr>
<tr>
<td width='50px'></td>
<td width="500px">Kepala Balai Pelatihan Kesehatan<br>
&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Provinsi Lampung<br>
<br>
<br>
<b><u>drg. Mardiana MHSM</u><br>
<b>NIP. 19640312 198902 2001
</td>

</tr>
</table>	

</tbody>
</table>
</td>	
</tbody></table>
</td></tr></tbody></table></td>
</tr><tr><td></td></tr></tbody></table></center></div>
</body>