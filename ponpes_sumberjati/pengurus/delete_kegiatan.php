<?php
	if($_GET['id_jadwal']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from jadwalkegiatan where id_jadwal='".$_GET['id_jadwal']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus jadwal');location.href='jadwalkegiatan.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus jadwal');location.href='jadwalkegiatan.php';</script>";
		}
	}
?>
		