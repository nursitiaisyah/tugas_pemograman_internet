<?php
	if($_GET['id_informasi']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from informasi where id_informasi='".$_GET['id_informasi']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus informasi');location.href='informasi.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus informasi');location.href='informasi.php';</script>";
		}
	}
?>
		