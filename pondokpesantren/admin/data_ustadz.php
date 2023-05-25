<?php 
session_start();

//MENGECEK APAKAH YANG MENGAKSES HALAMAN INI SUDAH LOGIN ATAU BELUM
if($_SESSION['level']==""){
	header("location:index.php?pesan=gagal");
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table class="table table-hover table-striped">
		<thead>
			<tr>
				<th>NO</th>
				<th>NAMA</th>
				<th>JENIS KELAMIN</th>
				<th>STATUS</th>
				<th>ALAMAT</th>
				<th>TANGGAL LAHIR</th>
				<th>NO TELEPON</th>
				<th>AKSI</th>
			</tr>
		</thead>
	</table>
<div class="w3-sidebar w3-bar-block w3-black" style="width:70px">
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-home"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-search"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-envelope"></i></a>
  <a href="#" class="w3-bar-item w3-button"><i class="fa fa-globe"></i></a>
</div>
</body>
</html>