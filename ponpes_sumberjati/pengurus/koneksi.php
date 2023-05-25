<?php
$koneksi=mysqli_connect('localhost','root','','ponpes_sumberjati');
/*check connection */
if (mysqli_connect_error()) {
	printf("Connect failend :", mysqli_connect_error());
	exit();
}
?>

