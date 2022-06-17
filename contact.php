<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="contact.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css"> 

    <title>Hello, world!</title>
  </head>
  <body>
    <?php
    session_start();
    ?>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
        <a class="navbar-brand" href="#">
            <img src="img/logo.jpg" alt="" width="40" height="40" class="d-inline-block">
            RizkiStore
          </a>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="menuutama.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Produk</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">keranjang</a>
              </li>
              <li class="nav-item me-3 ">
                <a class="nav-link" href="contact.php">Contact</a>
              </li>
              <li class="nav-item me-3">
                <a class="nav-link" href="about.php">About</a>
              </li>
              <li class="nav-item me-3">
          <a class="nav-link" href="feedback.php">Feedback</a>
        </li>
              <form class="d-flex">
            <input class="form-control me-2" type="search" placeholder="Cari Produk" aria-label="Search">
            <button class="btn btn-outline-light" type="submit"><i class="fas fa-search"></i></button>
          </form>
            </ul>
            <div class ="me-7">Halo ! <?php echo $_SESSION['username']; ?></div>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
           <a class="btn btn-outline-danger me-3" class="button" href="Logout.php" role="button">Logout</a>
      </div>
      </nav>
      <div class="jumbotron">
        <h1 class="judul">Contact</h1>
    </div>


      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card">
            <img src="img/kontak1.png" class="card-img" alt="...">
            <div class="card-body">
              <h5 class="card-title text-center">Whatsapp</h5>
              <hr>
              <div class="card-text text-center">
                  <p>Contact 1: 088776262524</p>
                  <p>Contact 2: 085336373777</p>
            </div>
            </div>
          </div>
        </div>































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>