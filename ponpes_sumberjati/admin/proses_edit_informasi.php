<?php
if($_POST){
	$tgl_publikasi=$_POST['tgl_publikasi'];
	$pengumuman=$_POST['pengumuman'];
	$id_informasi=$_POST['id_informasi'];

	if(empty($pengumuman)){
		echo "<script>alert('pengumuman tidak boleh kosong');location.href='edit_informasi.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update informasi set tgl_publikasi='".$tgl_publikasi."', pengumuman='".$pengumuman."', id_informasi='".$id_informasi."'where id_informasi = '".$id_informasi."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update informasi');location.href='informasi.php';</script>";

		} else {
			echo "<script>alert('Gagal update informasi');location.href='informasi.php?id_informasi=".$id_informasi."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update informasi set tgl_publikasi='".$tgl_publikasi."', pengumuman='".$pengumuman."',  id_informasi='".$id_informasi."' where id_informasi = '".$id_informasi."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update informasi');location.href='informasi.php';</script>";

			}else{
				echo "<script>alert('Gagal update informasi');location.href='informasi.php';</script>";
			}
		}
	}
}
?>