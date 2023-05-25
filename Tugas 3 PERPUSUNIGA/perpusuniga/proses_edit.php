<?php
if($_POST){
	$id_mahasiswa=$_POST['id_mahasiswa'];
	$nama=$_POST['nama'];
	$nim=$_POST['nim'];
	$alamat=$_POST['alamat'];
	$username=$_POST['username'];
	$password=$_POST['password'];
	$id_jurusan=$_POST['id_jurusan'];
	

	if(empty($nama)){
		echo "<script>alert('nama mahasiswa tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($nim)){
		echo "<script>alert('nim tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($alamat)){
		echo "<script>alert('alamat tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($username)){
		echo "<script>alert('username tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($password)){
		echo "<script>alert('password tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else if(empty($id_jurusan)){
		echo "<script>alert('jurusan tidak boleh kosong');location.href='edit_mhs.php';</script>";

	}else  {
		include "koneksi.php";

		if(empty($password)) {
			$update=mysqli_query($koneksi,"update mahasiswa set nama = '".$nama."',nim='".$nim."',alamat='".$alamat."',username
			='".$username."', password='".$password."'	 , id_jurusan='".$id_jurusan."' where id_mahasiswa = '".$id_mahasiswa."'") or die(mysqli_error($koneksi));

			if($update){
				echo "<script>alert('Sukses update mahasiswa');location.href='datamahasiswa.php';</script>";

			}else  {
				echo "<script>alert('Gagal update mahasiswa');location.href='edit_mhs.php?id_mahasiswa=".$id_mahasiswa."';</script>";
			
			}
			}
		}
	}
?>

