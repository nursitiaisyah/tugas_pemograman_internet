<?php
if($_POST){
	$tgl_publikasi=$_POST['tgl_publikasi'];
	$pengumuman=$_POST['pengumuman'];

if (empty($tgl_publikasi)) {
	echo "<script>alert('tgl_publikasi tidak boleh kosong');location.href='tambah_informasi.php';</script>";

} else if (empty($pengumuman)){
	echo "<script>alert('pengumuman tidak boleh kosong');location.href='tambah_informasi.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into informasi (tgl_publikasi, pengumuman) value('".$tgl_publikasi."','".$pengumuman."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan jadwal kegiatan');location.href='informasi.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan jadwal kegiatan');location.href='tambah_informasi.php';</script>";

	}
}
}
?>
