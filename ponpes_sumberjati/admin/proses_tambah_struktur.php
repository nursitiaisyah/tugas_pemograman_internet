<?php
if($_POST){
	$nama_pengurus=$_POST['nama_pengurus'];
	$id_jabatan=$_POST['id_jabatan'];

if (empty($nama_pengurus)) {
	echo "<script>alert('nama_pengurus tidak boleh kosong');location.href='tambah_struktur.php';</script>";

} else if (empty($id_jabatan)){
	echo "<script>alert('id_jabatan tidak boleh kosong');location.href='tambah_struktur.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into struktur (nama_pengurus, id_jabatan) value('".$nama_pengurus."','".$id_jabatan."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan struktur');location.href='struktur.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan struktur');location.href='struktur.php';</script>";

	}
}
}
?>