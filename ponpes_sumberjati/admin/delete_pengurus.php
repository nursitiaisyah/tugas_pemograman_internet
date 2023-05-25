<?php
	if($_GET['id_pengurus']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from pengurus where id_pengurus='".$_GET['id_pengurus']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus pengurus');location.href='datapengurus.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus pengurus');location.href='datapengurus.php';</script>";
		}
	}
?>
		