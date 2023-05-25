<?php
include "koneksi.php";
include "css.php";
$qry_mahasiswa=mysqli_query($koneksi, "select * from mahasiswa join jurusan on jurusan.id_jurusan=mahasiswa.id_jurusan");

?>
<h3>Ubah Mahasiswa</h3>
<form action="proses_edit.php" method="post">
	<input type="hidden" name="id_mahasiswa" value= "<?=$data_mahasiswa['id_mahasiswa']?>">
	Nama 		:
	<input type="text" name="nama" value= "<?=$data_mahasiswa['nama']?>" class="from-control">
	NIM  		:
	<input type="text" name="nim" value="<?=$data_mahasiswa['nim']?>" class="from-control">
	Alamat  	:
	<input type="text" name="alamat" value="<?=$data_mahasiswa['alamat']?>" class="from-control">
	Username  	:
	<input type="text" name="username" value="<?=$data_mahasiswa['username']?>" class="from-control">
	Password  	:
	<input type="text" name="password" value="<?=$data_mahasiswa['password']?>" class="from-control">
	Jurusan  	:
	<input type="text" name="jurusan" value="<?=$data_mahasiswa['jurusan']?>" class="from-control">
	
	<br>
	<input type="submit" name="simpan" value="Ubah Mahasiswa" class="btn btn-primary">
</form>
