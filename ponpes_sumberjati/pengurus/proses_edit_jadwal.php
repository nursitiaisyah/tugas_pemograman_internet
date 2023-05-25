<?php
if($_POST){
	$jam=$_POST['jam'];
	$nama_kegiatan=$_POST['nama_kegiatan'];
	$id_jadwal=$_POST['id_jadwal'];

	if(empty($nama_kegiatan)){
		echo "<script>alert('nama_kegiatan tidak boleh kosong');location.href='edit_jadwalkegiatan.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update jadwalkegiatan set jam='".$jam."', nama_kegiatan='".$nama_kegiatan."', id_jadwal='".$id_jadwal."'where id_jadwal = '".$id_jadwal."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update kegiatan');location.href='jadwalkegiatan.php';</script>";

		} else {
			echo "<script>alert('Gagal update kegiatan');location.href='jadwalkegiatan.php?id_jadwal=".$id_jadwal."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update jadwalkegiatan set jam='".$jam."', nama_kegiatan='".$nama_kegiatan."',  id_jadwal='".$id_jadwal."' where id_jadwal = '".$id_jadwal."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update kegiatan');location.href='jadwalkegiatan.php';</script>";

			}else{
				echo "<script>alert('Gagal update kegiatan');location.href='jadwalkegiatan.php';</script>";
			}
		}
	}
}
?>