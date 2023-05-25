<?php
if($_POST){
	$nama_pengurus=$_POST['nama_pengurus'];
	$tetala=$_POST['tetala'];
	$alamat=$_POST['alamat'];
	$id_jabatan=$_POST['id_jabatan'];
	$id_pengurus=$_POST['id_pengurus'];

	if(empty($nama_pengurus)){
		echo "<script>alert('nama_pengurus tidak boleh kosong');location.href='edit_pengurus.php';</script>";

	}else if(empty($tetala)){
		echo "<script>alert('tetala tidak boleh kosong');location.href='edit_pengurus.php';</script>";

	}else if(empty($alamat)){
		echo "<script>alert('Alamat tidak boleh kosong');location.href='edit_pengurus.php';</script>";

	}else if(empty($id_jabatan)){
		echo "<script>alert('id_jabatan tidak boleh kosong');location.href='edit_pengurus.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update pengurus set nama_pengurus='".$nama_pengurus."', tetala='".$tetala."', alamat='".$alamat."', id_jabatan='".$id_jabatan."' , id_pengurus='".$id_pengurus."'where id_pengurus = '".$id_pengurus."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update pengurus');location.href='datapengurus.php';</script>";

		} else {
			echo "<script>alert('Gagal update pengurus');location.href='datapengurus.php?id_pengurus=".$id_pengurus."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update pengurus set nama_pengurus='".$nama_pengurus."', tetala='".$tetala."', alamat='".$alamat."', id_jabatan='".$id_jabatan."', id_pengurus='".$id_pengurus."' where id_pengurus = '".$id_pengurus."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update pengurus');location.href='datapengurus.php';</script>";

			}else{
				echo "<script>alert('Gagal update pengurus');location.href='datapengurus.php';</script>";
			}
		}
	}
}
?>