<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <title>Perpustakaan</title>
  <style>
    .navbar{
      font-size: 20px;
    }
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-light">
  <div class="container-fluid">
    <img src="Logopit_1668146504141.png "
          class="img-fluid" alt="Phone image "alt="Image" height="100s" width="190">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datamahasiswa.php">DATA MAHASISWA</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="datadosen.php">DATA DOSEN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="jurusan.php">JURUSAN</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="matakuliah.php">MATA KULIAH</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="jadwalkuliah.php">JADWAL</a>
        </li> 
      </ul>
      <form class="d-flex" role="search"> 
        <a href="logout.php" class="btn btn-secondary mb-1">Logout</a>
      </form>
    </div>
  </div>
</nav>
</body>
</html>