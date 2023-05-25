<?php
	if($_GET['id_struktur']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from struktur where id_struktur='".$_GET['id_struktur']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus struktur');location.href='struktur.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus struktur');location.href='struktur.php';</script>";
		}
	}
?>
		