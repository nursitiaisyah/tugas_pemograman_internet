<?php
if($_POST){
	$nama_pengurus=$_POST['nama_pengurus'];
	$tetala=$_POST['tetala'];
	$alamat=$_POST['alamat'];
	$id_jabatan=$_POST['id_jabatan'];

if (empty($nama_pengurus)) {
	echo "<script>alert('nama_pengurus pengurus tidak boleh kosong');location.href='tambah_pengurus.php';</script>";

} else if (empty($tetala)){
	echo "<script>alert('tetala pengurus tidak boleh kosong');location.href='tambah_pengurus.php';</script>";

} else if (empty($alamat)){
	echo "<script>alert('alamat pengurus tidak boleh kosong');location.href='tambah_pengurus.php';</script>";

} else if (empty($id_jabatan)){
	echo "<script>alert('id_jabatan pengurus tidak boleh kosong');location.href='tambah_pengurus.php';</script>";

}else {
	include "koneksi.php";
	$insert=mysqli_query($koneksi, "insert into pengurus (nama_pengurus, tetala, alamat, id_jabatan) value('".$nama_pengurus."','".$tetala."','".$alamat."','".$id_jabatan."')") or die(mysqli_error($koneksi));
	if($insert) {
		echo "<script>alert('Sukses menambahkan data pengurus');location.href='datapengurus.php';</script>";

	}else {
		echo "<script>alert('Gagal menambahkan pengurus');location.href='tambah_pengurus.php';</script>";

	}
}
}
?>