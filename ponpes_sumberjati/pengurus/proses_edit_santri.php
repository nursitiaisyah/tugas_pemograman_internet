<?php
if($_POST){
	$nis=$_POST['nis'];
	$nama_santri=$_POST['nama_santri'];
	$tetala=$_POST['tetala'];
	$nama_ayah=$_POST['nama_ayah'];
	$nama_ibu=$_POST['nama_ibu'];
	$alamat=$_POST['alamat'];
	$tanggal_masuk=$_POST['tanggal_masuk'];
	$id_kamar=$_POST['id_kamar'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_santri=$_POST['id_santri'];

	if(empty($nis)){
		echo "<script>alert('nis tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($nama_santri)){
		echo "<script>alert('nama_santri tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($tetala)){
		echo "<script>alert('tetala tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($nama_ayah)){
		echo "<script>alert('nama_ayah tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($nama_ibu)){
		echo "<script>alert('nama_ibu tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($alamat)){
		echo "<script>alert('alamat tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($tanggal_masuk)){
		echo "<script>alert('tanggal_masuk tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($id_kamar)){
		echo "<script>alert('id_kamar tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($username)){
		echo "<script>alert('username tidak boleh kosong');location.href='edit_santri.php';</script>";

	}else if(empty($password)){
		echo "<script>alert('password tidak boleh kosong');location.href='edit_santri.php';</script>";

	} else {
		include "koneksi.php";

		if(empty($password)){
			$update=mysqli_query($koneksi, "update santri set nis='".$nis."', nama_santri='".$nama_santri."', tetala='".$tetala."', nama_ayah='".$nama_ayah."' , nama_ibu='".$nama_ibu."', alamat='".$alamat."', tanggal_masuk='".$tanggal_masuk."', id_kamar='".$id_kamar."', username='".$username."', password='".$password."' where id_santri = '".$id_santri."'") or die(mysqli_error($koneksi));

		if($update){
			echo "<script>alert('Sukses update santri');location.href='datasantri.php';</script>";

		} else {
			echo "<script>alert('Gagal update santri');location.href='datasantri.php?id_santri=".$id_santri."';</script>";

		}
		} else {
			$update=mysqli_query($koneksi,"update santri set nis='".$nis."', nama_santri='".$nama_santri."', tetala='".$tetala."', nama_ayah='".$nama_ayah."', nama_ibu='".$nama_ibu."', alamat='".$alamat."', tanggal_masuk='".$tanggal_masuk."', id_kamar='".$id_kamar."', username='".$username."', password='".$password."' where id_santri = '".$id_santri."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update santri');location.href='datasantri.php';</script>";

			}else{
				echo "<script>alert('Gagal update santri');location.href='datasantri.php';</script>";
			}
		}
	}
}
?>