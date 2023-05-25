<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
 

    .sidebar {
        width: 250px;
        height: 100vh;
        position: fixed;
        margin-left: -300px;
        transition: 0.4s;
    }

    .active-main-content {
        margin-left: 250px;
    }

</style>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Pricing</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
        <div>
          <div class="sidebar p-4 bg-primary" id="sidebar">
            <h4 class="mb-5 text-white">SuperVideo</h4>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-house mr-2"></i>
                Dashboard
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-fire mr-2"></i>
                Populer
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-newspaper mr-2"></i>
                News
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-bicycle mr-2"></i>
                Sports
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-boombox mr-2"></i>
                Music
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-film mr-2"></i>
                Film
              </a>
            </li>
            <li>
              <a class="text-white" href="#">
                <i class="bi bi-bookmark mr-2"></i>
                Bookmark
              </a>
            </li>
          </div>
        </div>
        <section class="p-4" id="main-content">
          <button class="btn btn-primary" id="button-toggle">
            <i class="bi bi-list"></i>
          </button>
          <div class="card mt-5">
            <div class="card-body">
              <h4>Lorem Ipsum</h4>
              <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque
                animi maxime at minima. Totam vero omnis ducimus commodi placeat
                accusamus, repudiandae nemo, harum magni aperiam esse voluptates.
                Non, sapiente vero?
              </p>
            </div>
          </div>
        </section>
      </body>
    </html>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>