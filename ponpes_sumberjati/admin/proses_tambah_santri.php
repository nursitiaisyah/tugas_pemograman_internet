<?php
if($_POST){
	$nis=$_POST['nis'];
	$nama_santri=$_POST['nama_santri'];
	$tetala=$_POST['tetala'];
	$nama_ayah=$_POST['nama_ayah'];
	$nama_ibu=$_POST['nama_ibu'];
	$alamat=$_POST['alamat'];
	$tanggal_masuk=$_POST['tanggal_masuk'];
	$id_kamar=$_POST['id_kamar'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	


if (empty($nis)) {
	echo "<script>alert('nis santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($nama_santri)){
	echo "<script>alert('nama_santri santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($tetala)){
	echo "<script>alert('tetala santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($nama_ayah)){
	echo "<script>alert('password santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($nama_ibu)){
	echo "<script>alert('nama_ayah santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($alamat)){
	echo "<script>alert('alamat santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($tanggal_masuk)){
	echo "<script>alert('tanggal_masuk santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($id_kamar)){
	echo "<script>alert('nama_kamar santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($username)){
	echo "<script>alert('username santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

} else if (empty($password)){
	echo "<script>alert('password santri tidak boleh kosong');location.href='tambah_santri.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into santri (nis, nama_santri, tetala, nama_ayah, nama_ibu, alamat, tanggal_masuk, id_kamar, username, password) 
		value('".$nis."','".$nama_santri."','".$tetala."','".$nama_ayah."','".$nama_ibu."','".$alamat."','".$tanggal_masuk."','".$id_kamar."','".$username."','".$password."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan data santri');location.href='datasantri.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan siswa');location.href='tambah_santri.php';</script>";

	}
}
}
?>
