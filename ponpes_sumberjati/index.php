<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Jekyll v4.1.1">
  <title>Login Web Santri</title>

  <link rel="canonical" href="">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <style>
  .tengah{
  position: absolute;
  margin-top: -250px;
  margin-left: -200px;
  left: 50%;
  top: 50%;
  width: 400px;
  height: 220px;
  background-color: #ffffff;
  }
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }
  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>
<!-- Custom styles for this template -->
<link href="assets/style.css" rel="stylesheet">
</head>
<?php
    if(isset($_GET['pesan'])){
    if($_GET['pesan']=='gagal'){
    echo "<div class='alert'>Username dan Password tidak sesuai!</div>";
    }
  }
  ?>
<body>
  <form action="cek_login.php" method="post"> 
  <div align="center" class="tengah">
  <form class="form-signin">
    <img class="mb-4" src="login/assets/img/logo.png" alt="" width="200" height="200">
    <h1 class="h3 mb-3 font-weight-normal">Pondok Pesantren Miftahul Ulum</h1>
    <label for="form1Example13" class="sr-only">Masukkan Username</label>
    <input type="text" name="username"  class="form-control" placeholder="Username" required autofocus>
    <label for="form1Example13" class="sr-only">Password</label>
    <input type="password" name="password" class="form-control" placeholder="Password" required>
    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
    <p class="mt-5 mb-3 text-muted">©PP. Miftahul Ulum Sumberjati</p>

  </form>
</form>
</div>
</body>
</html>