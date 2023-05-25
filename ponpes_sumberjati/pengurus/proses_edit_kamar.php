<?php
if($_POST){
	$nama_kamar=$_POST['nama_kamar'];
	$id_kamar=$_POST['id_kamar'];

	if(empty($nama_kamar)){
		echo "<script>alert('nama_kamar tidak boleh kosong');location.href='edit_kamar.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update kamar set nama_kamar='".$nama_kamar."', id_kamar='".$id_kamar."'where id_kamar = '".$id_kamar."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update kamar');location.href='datakamar.php';</script>";

		} else {
			echo "<script>alert('Gagal update kamar');location.href='datakamar.php?id_kamar=".$id_kamar."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update kamar set nama_kamar='".$nama_kamar."', id_kamar='".$id_kamar."' where id_kamar = '".$id_kamar."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update kamar');location.href='datakamar.php';</script>";

			}else{
				echo "<script>alert('Gagal update kamar');location.href='datakamar.php';</script>";
			}
		}
	}
}
?>