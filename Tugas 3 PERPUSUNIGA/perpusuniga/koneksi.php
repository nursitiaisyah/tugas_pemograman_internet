<?php
$koneksi=mysqli_connect('localhost','root','','perpusuniga');
/*check connection */
if (mysqli_connect_error()) {
	printf("Connect failend :", mysqli_connect_error());
	exit();
}
?>

