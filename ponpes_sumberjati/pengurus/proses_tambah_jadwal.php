<?php
if($_POST){
	$jam=$_POST['jam'];
	$nama_kegiatan=$_POST['nama_kegiatan'];

if (empty($jam)) {
	echo "<script>alert('jam tidak boleh kosong');location.href='tambah_jadwalkegiatan.php';</script>";

} else if (empty($nama_kegiatan)){
	echo "<script>alert('nama_kegiatan tidak boleh kosong');location.href='tambah_jadwalkegiatan.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into jadwalkegiatan (jam, nama_kegiatan) value('".$jam."','".$nama_kegiatan."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan jadwal kegiatan');location.href='jadwalkegiatan.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan jadwal kegiatan');location.href='tambah_jadwalkegiatan.php';</script>";

	}
}
}
?>
