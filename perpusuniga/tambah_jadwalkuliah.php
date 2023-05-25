<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<title>Perpustakaan</title>
</head>
<body>
	<h3>Tambah Jadwal Kuliah</h3>
	<form action="proses_tambahjadwal.php" method="post">
		Hari : 
		<input type="text" name="hari" value="" class="form-control">
		Jam :
		<input type="text" name="jam" value="" class="form-control">
		Mata Kuliah :
		<select name="id_matkul" class="form-control">
			<option>Pilih Mata Kuliah</option>
			<?php
			include "koneksi.php";
			$qry_matakuliah=mysqli_query($koneksi, "select * from matakuliah");
			while($data_matakuliah=mysqli_fetch_array($qry_matakuliah)){
				echo '<option value="'.$data_matakuliah['id_matkul'].'">'.$data_matakuliah['nama_matkul'].'</option>';
			}
			?>
		</select>
		Nama Dosen :
		<select name="id_dosen" class="form-control">
			<option>Pilih Dosen</option>
			<?php
			include "koneksi.php";
			$qry_dosen=mysqli_query($koneksi, "select * from dosen");
			while($data_dosen=mysqli_fetch_array($qry_dosen)){
				echo '<option value="'.$data_dosen['id_dosen'].'">'.$data_dosen['nama_dosen'].'</option>';
			}
			?>
		</select>
		
		<input type="submit" name="simpan" value="Tambah Jadwal Kuliah" class="btn btn-success"> 
	</form> 
</body>
</html>