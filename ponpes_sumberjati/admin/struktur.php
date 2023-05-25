
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>STRUKTUR KEPENGURUSAN</title>
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
    <h3><i class="fal fa-sitemap"></i></i> STRUKTUR KEPENGURUSAN</h3><hr>

    <!--Tabel-->
    <table class="table table-striped table-bordered border-dark shadow h-100">
      <thead>
        <tr>
          <th>NO</th>
          <th>NAMA PENGURUS</th>
          <th>JABATAN</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <div class="tambah">
          <a href="tambah_struktur.php" class="btn btn-primary mb-3"><i class="far fa-plus"></i> Tambah</a>
        </div>
        <?php
        include "koneksi.php";
        $qry_struktur=mysqli_query($koneksi, "select * from struktur join jabatan on jabatan.id_jabatan=struktur.id_jabatan");
        $no=0;
        while ($data_struktur=mysqli_fetch_array($qry_struktur)) {
          $no++;?>
          <tr>
            <td><?=$no?></td>
            <td><?=$data_struktur['nama_pengurus']?></td>
            <td><?=$data_struktur['nama_jabatan']?></td>

            <td><a href="edit_struktur.php?id_struktur=<?=$data_struktur['id_struktur']?>"class="btn btn-success"><i class="fal fa-edit fa-sm"></i></a> |
              <a href="delete_struktur.php?id_struktur=<?=$data_struktur['id_struktur']?>"onclick="return confirm('Apakah anda yakin menghapus data ini?')" class="btn btn-danger">
                <i class="fal fa-trash"></i></a></td>

              </tr>
              <?php 
            }
            ?>
          </table>
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