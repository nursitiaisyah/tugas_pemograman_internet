<?php
if($_POST){
	$nama_kamar=$_POST['nama_kamar'];

if (empty($nama_kamar)) {
	echo "<script>alert('nama_kamar kamar tidak boleh kosong');location.href='tambah_kamar.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into kamar (nama_kamar) value('".$nama_kamar."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan data kamar');location.href='datakamar.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan kamar');location.href='tambah_pengurus.php';</script>";

	}
}
}
?>