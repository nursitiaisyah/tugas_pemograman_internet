<?php
//mengaktifkan session pada php
session_start();

//menghubungkan php dengan koneksi database
include 'koneksi.php';

//menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];

//menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from user where username='$username' and  password='$password'");

//menghitung jumlah data yang ditemukan pada database
$cek = mysqli_num_rows($login);

//cek apakah username dan password di temukan pada database
if($cek > 0){

	$data = mysqli_fetch_assoc($login);

	//cek jika user login sebagai admin
	if($data['level']=="admin"){

		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "admin";

		//alihkan kehalaman dashboard admin
		header("location:admin/beranda_admin.php");


	//cek jika user login sebagai pengurus
	}else if($data['level']=="pengurus"){

		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "pengurus";

		//alihkan kehalaman dashboard pengurus
		header("location:pengurus/beranda.php");

	}else if($data['level']=="santri"){

		//buat session login dan username
		$_SESSION['username'] = $username;
		$_SESSION['level'] = "santri";

		//alihkan kehalaman dashboard santri
		header("location:santri/beranda.php");
}else{
	header("location:index.php?pesan=gagal");
}
}
?>
