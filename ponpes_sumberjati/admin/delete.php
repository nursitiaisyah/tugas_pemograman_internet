<?php
	if($_GET['id_santri']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from santri where id_santri='".$_GET['id_santri']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus santri');location.href='datasantri.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus santri');location.href='datasantri.php';</script>";
		}
	}
?>
		