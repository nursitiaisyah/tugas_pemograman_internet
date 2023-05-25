<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Membuat Form Login Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
 <?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=='gagal'){
    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
    }
  }
  ?>
<body>
	<div class="wrapper" >
		<div class="title">
			LOGIN FORM
		</div>
		<form action="cek_login_pondok.php" method="post">
			<div class="field">
				<input type="text" name="username" required>
				<label>Masukkan Username</label>
			</div>
			<div class="field">
				<input type="password" name="password" required>
				<label>Masukkan Password</label>
			</div>
			<div class="content">
				<div class="checkbox">
					<input type="checkbox" name="ingatkan-Saya">
					<label for="ingatkan-saya">Ingatkan Saya</label>
				</div>
				<div class="pass-link">
					<a href="#">Lupa Password?</a>
				</div>
			</div>
			<div class="field">
				<input type="submit" value="Login">
			</div>
			<div class="sing-up-link"></div>
				Belum menjadi anggota? <a href="#">Daftar Sekarang</a>
			</div>
	   	</form>
	   </div>

</body>
</html>