<?php
	if($_GET['id_kamar']){
		include "koneksi.php";
		$qry_hapus=mysqli_query($koneksi,"delete from kamar where id_kamar='".$_GET['id_kamar']."'");
		if($qry_hapus){
			echo"<script>alert('Sukses hapus kamar');location.href='datakamar.php';</script>";
		}else {
			echo "<script>alert('Gagal hapus kamar');location.href='datakamar.php';</script>";
		}
	}
?>
		