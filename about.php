<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="about.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <title>About</title>
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
            <div class ="me-5">Halo ! <?php echo $_SESSION['username']; ?></div>
          </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
           <a class="btn btn-outline-danger me-3" class="button" href="Logout.php" role="button">Logout</a>
      </div>
      </nav>
      <div class="jumbotron">
          <h1 class="judul">About Us</h1>
      </div>
      <div class="card mb-3">
        <img src="img/logo.jpg" class="card-img" alt="...">
        <div class="card-body">
          <h5 class="card-title">RizkiStore</h5>
          <p class="card-text">Rizkistore adalah sebuah aplikasi web tempat untuk berbelanja berbagai macam pakaian.
              Aplikasi ini dibuat dengan tujuan agar memudahkan para konsumen yang malas untuk datang ke toko atau konsumen yang sedang liburan dan ingin berbelanja di toko kami.
              Dengan hanya bersantai dan rebahan,memilih pakaian dan pesan maka pihak kami akan segera mengirimkan pesanan yang anda pesan.
          </p>
        </div>
      </div>
      <div class="card mb-3">
        <img src="img/store.jpg" class="img-toko" alt="...">
        <div class="card-body">
          <h3 class="card-title">Tentang Toko</h3>
          <div class="card-text">
          <p class="text">Owner : </p><p>Mochamad Rizki Maulana.</p> 
          <p class="text">Alamat Toko : </p> 
          <p>Jln.MochToha No.29</p>
          <p class="text">Email : </p>
          <p>RizkiStore@gmail.com</p>
          <p class="text">Instagram : </p>
          <p>RizkiStore_</p>
          <p class="text">Whatsapp bisnis : </p>
          <p>085333221665</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Portofolio</h5>
            <p class="card-text">jika anda ingin lebih tahu siapa sih owner dari RizkiStore.Silahkan kunjungi halaman portofolio.</p>
            <a href="portofolio.php" class="btn btn-primary">Go to portofolio</a>
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