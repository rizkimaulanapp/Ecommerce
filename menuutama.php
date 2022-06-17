<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="menu.css">
    <title>MENU UTAMA</title>
  </head>
  
  <body>
    <?php
    session_start();
    ?>
    <!-- awal navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container">
  <a class="navbar-brand" href="#">
      <img src="img/logo.jpg" alt="" width="40" height="40" class="d-inline-block">
      RizkiStore
    </a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Produk</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">keranjang</a>
        </li>
        <li class="nav-item me-3">
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

<!-- akhir navbar -->

<!-- Awal carousel -->
<div class="container">
<div id="carouselExampleIndicators" class="carousel slide mt-3" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" 
    class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" 
    aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
     aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/model5.jpg" class="d-block w-100 img-fluid" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1 class="display-4"><b>EXPLORE YOUR STYLE</h1></b>
        <p><h5>Mari jelajahi produk fashion yang kalian suka.Kami menyediakan produk-produk yang berkualitas.
          Mulai dari pakaian hingga aksesoris.
        </h5></p>
        <p>Mulai Jelajahi Gayamu</p>
        <a class="btn btn-outline-light btn-lg font-weight-bold" href="#" role="button">Jelajahi</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/model4.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/model1.jpg" class="d-block w-100 img-fluid" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" 
  data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
   data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<!-- akhir carousel -->
    
    
      
      

    































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