<?php
session_start();

//cek apakah yang mengakses halaman ini sudah login
if($_SESSION['level']==""){
header("location:index.php?pesan=gagal");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Beranda-Admin</title>
  <!-- bootstrap 5 css -->
  <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha2/css/bootstrap.min.css"integrity="sha384-DhY6onE6f3zzKbjUPRc2hOzGAdEf4/Dz+WJwBvEYL/lkkIsI3ihufq9hk9K4lVoK"crossorigin="anonymous"/>
  <link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"/>
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
  <link rel="stylesheet" type="text/css" href="css_ponpes.css">
</head>
<body class="sb-nav-fixed sb-sidenav-toggled">
  <!-- Navbar-->
  <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
    <a class="navbar-brand">PONDOK PESANTREN MIFTAHUL ULUM | SUMBERJATI</a>
    <button class="btn btn-dark" id="button-toggle">
      <i class="bi bi-list"></i>
    </button>
    <form class="d-flex " role="search"> 
      <a href="profil_lembaga.php" ><i class="fas fa-user-circle fa-lg"  style="color:white;" aria-hidden="true"></i></a>
    </form>
    <ul class="navbar-nav ml-auto ml-md-100"></ul>
  </nav>

  <!-- Sidebar-->
  <div class="sidebar p-4 bg-dark " id="sidebar">
    <div class="profile pb-2">
      <img src="R4Ag21LogoPonpes.png">
    </div>
    <li>
      <a class="text-white" href="beranda_admin.php">
        <i class="fas fa-home mr-2"></i>
        Beranda
      </a>
    </li>
    <li>
      <a class="text-white" href="datasantri.php">
        <i class="fas fa-users mr-2 "></i>
        Data Santri
      </a>
    </li>
    <li>
      <a class="text-white" href="datapengurus.php">
        <i class="fas fa-user-alt mr-2"></i>
        Pengurus
      </a>
    </li>
    <li>
      <a class="text-white" href="datakamar.php">
        <i class="fas fa-bed mr-2"></i>
        Kamar
      </a>
    </li>
    <li>
      <a class="text-white" href="jadwalkegiatan.php">
        <i class="fal fa-chart-line mr-2"></i>
        Jadwal Kegiatan
      </a>
    </li>
    <li>
      <a class="text-white" href="struktur.php">
        <i class="fal fa-sitemap mr-2"></i>
        Struktur Pengurus
      </a>
    </li>
    <li>
      <a class="text-white" href="informasi.php">
        <i class="far fa-bullhorn mr-2"></i>
        Informasi
      </a>
    </li>
    <li>
      <a class="text-white" href="../logout.php">
        <i class="fas fa-sign-out-alt mr-2"></i>
        Keluar
      </a>
    </li>
  </div>
</div>
<section class="pl-2 pt-5 " id="main-content">
  <div class="col-md-30 p-1 pt-2">
    <h3><i class="fas fa-home "></i> BERANDA</h3><hr>

    <div class="row">
          <div class="col-md-12">
            <div class="panel panel-default">
              </div>
              <div class="panel-body">
                <!--Menampilkan nama pengguna berdasarkan masing-masing level-->
                <h3>SELAMAT DATANG</h3>
                <p>Halo <b><?php echo $_SESSION['username']; ?></b> Anda telah login sebagai <b><?php echo $_SESSION['level']; ?></b>.</p>
                <p>Anda masuk website resmi Pondok Pesantren Miftahul Ulum Sumberjati</p>
              </div>
          </div>
        </div>
        </div>
      </section>

      <script>
        // event will be executed when the toggle-button is clicked
        document.getElementById("button-toggle").addEventListener("click", () => {
        // when the button-toggle is clicked, it will add/remove the active-sidebar class
        document.getElementById("sidebar").classList.toggle("active-sidebar");
        // when the button-toggle is clicked, it will add/remove the active-main-content class
        document.getElementById("main-content").classList.toggle("active-main-content");
        document.querySelector("body").classList.toggle("active");
      });
    </script>

  </body>
  </html>