<?php 
if($_POST){
	$nama_dosen=$_POST['nama_dosen'];
	$alamat=$_POST['alamat'];
	$telepon=$_POST['telepon'];

	if(empty($nama_dosen)){
		echo "<script>alert('nama dosen tidak boleh kosong');location.href='tambah_dosen.php';</script>";

	} else if(empty($alamat)){
	echo "<script>alert('alamat dosen tidak boleh kosong');location.href='tambah_dosen.php';</script>";	
	}else if(empty($telepon)){
	echo "<script>alert('telepon dosen tidak boleh kosong');location.href='tambah_dosen.php';</script>";	
	}else {
		include "koneksi.php";
		$insert=mysqli_query($koneksi,"insert into dosen (nama_dosen, alamat, telepon) value ('".$nama_dosen."', '".$alamat."', '".$telepon."')") or die(mysqli_error($koneksi));
		if($insert){
			echo "<script>alert('Sukses menambahkan data dosen');location.href='datadosen.php';</script>";

		}else {
			echo "<script>alert('Gagal menambahkan dosen');location.href='tambah_dosen.php';</script>";
		}
	}
}
?>