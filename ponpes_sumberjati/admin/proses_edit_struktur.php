<?php
if($_POST){
	$nama_pengurus=$_POST['nama_pengurus'];
	$id_jabatan=$_POST['id_jabatan'];
	$id_struktur=$_POST['id_struktur'];

	if(empty($nama_pengurus)){
		echo "<script>alert('nama_pengurus tidak boleh kosong');location.href='edit_struktur.php';</script>";

	}else if(empty($id_jabatan)){
		echo "<script>alert('id_jabatan tidak boleh kosong');location.href='edit_struktur.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update struktur set nama_pengurus='".$nama_pengurus."', id_jabatan='".$id_jabatan."'where id_struktur = '".$id_struktur."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update struktur');location.href='struktur.php';</script>";

		} else {
			echo "<script>alert('Gagal update struktur');location.href='struktur.php?id_struktur=".$id_struktur."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update struktur set nama_pengurus='".$nama_pengurus."', id_jabatan='".$id_jabatan."'where id_struktur = '".$id_struktur."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update struktur');location.href='struktur.php';</script>";

			}else{
				echo "<script>alert('Gagal update struktur');location.href='struktur.php';</script>";
			}
		}
	}
}
?>