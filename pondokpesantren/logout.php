<?php 
//MENGAKTIFKAN SESSION PHP
session_start();

//MENGHAPUS SEMUA SESSION
session_destroy();

//MENGALIHKAN HALAMAN KE HALAMAN LOGIN
header("location:index.php");
?>