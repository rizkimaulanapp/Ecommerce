<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="portofolio.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <title>Portofolio</title>
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
              <li class="nav-item ">
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

      <div class="jumbotron text-center">
        <img src="img/Owner.jpg" alt="owner" width="200" class="rounded-circle img-thumbnail">
          <h1 class="display">Mochamad Rizki Maulana</h1>
          <p class="lead">Mahasiswa</p>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#ffffff" fill-opacity="1" d="M0,288L12,240C24,192,48,96,72,53.3C96,11,120,21,144,37.3C168,53,192,75,216,90.7C240,107,264,117,288,128C312,139,336,149,360,176C384,203,408,245,432,261.3C456,277,480,267,504,229.3C528,192,552,128,576,90.7C600,53,624,43,648,37.3C672,32,696,32,720,58.7C744,85,768,139,792,144C816,149,840,107,864,96C888,85,912,107,936,144C960,181,984,235,1008,229.3C1032,224,1056,160,1080,154.7C1104,149,1128,203,1152,192C1176,181,1200,107,1224,90.7C1248,75,1272,117,1296,154.7C1320,192,1344,224,1368,202.7C1392,181,1416,107,1428,69.3L1440,32L1440,320L1428,320C1416,320,1392,320,1368,320C1344,320,1320,320,1296,320C1272,320,1248,320,1224,320C1200,320,1176,320,1152,320C1128,320,1104,320,1080,320C1056,320,1032,320,1008,320C984,320,960,320,936,320C912,320,888,320,864,320C840,320,816,320,792,320C768,320,744,320,720,320C696,320,672,320,648,320C624,320,600,320,576,320C552,320,528,320,504,320C480,320,456,320,432,320C408,320,384,320,360,320C336,320,312,320,288,320C264,320,240,320,216,320C192,320,168,320,144,320C120,320,96,320,72,320C48,320,24,320,12,320L0,320Z"></path></svg>
          
      </div>

      <div class="about">
          <div class="container">
              <div class="row text-center mb-3">
                  <div class="col">
                      <h2>Tentang Saya</h2>
                  </div>
              </div>
              <div class="row justify-content-center fs-5 text-center">
                <div class="col-4">
                    <p>Saya adalah Orang yang bekerja keras,tekun dan jujur.Tujuan saya membangun web ini yang pertama karna saya sangat senang dengan web developer dan juga fashion.
                    </p>
                </div>
                <div class="col-4">
                    <p>Riwayat pendidikan saya adalah lulusan SDN Pamoyanan,lulusan SMP Nugraha,Lulusan SMK Lppm Ri dan sekarang saya berkuliah di kampus STT Bandung,Jurusan Teknik Informatika.
                        
                    </p>
                </div>

              </div>
          </div>
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#323233" fill-opacity="1" d="M0,192L34.3,208C68.6,224,137,256,206,245.3C274.3,235,343,181,411,176C480,171,549,213,617,192C685.7,171,754,85,823,69.3C891.4,53,960,107,1029,160C1097.1,213,1166,267,1234,256C1302.9,245,1371,171,1406,133.3L1440,96L1440,320L1405.7,320C1371.4,320,1303,320,1234,320C1165.7,320,1097,320,1029,320C960,320,891,320,823,320C754.3,320,686,320,617,320C548.6,320,480,320,411,320C342.9,320,274,320,206,320C137.1,320,69,320,34,320L0,320Z"></path></svg>
      </div>

      <div class="id-ahli">
          <div class="container">
              <div class="row text-center">
                  <div class="col">
                      <h2>Keahlian</h2>
                  </div>
              </div>
              <div class="row">
                <div class="card-group">
                    <div class="card">
                      <img src="img/ahli1.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="ahli-title">HTML, CSS, JS</h5>
                        <p class="ahli-text">Keahlian ini berguna untuk membangun website yang ingin saya buat,termasuk website E-commerce ini.</p>
                      </div>
                    </div>
                    <div class="card">
                      <img src="img/ahli2.png" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="ahli-title">MySQL</h5>
                        <p class="ahli-text">Bertujuan untuk membuat databased dan berguna untuk menampung data-data yang butuh penggunaan database.</p>
                       
                      </div>
                    </div>
                    <div class="card">
                      <img src="img/ahli3.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <h5 class="ahli-title">Java</h5>
                        <p class="ahli-text">Bukan cuma aplikasi WEB,saya pun belajar membuat aplikasi dekstop.bahasa java lah yang saya pelajari dan menjadi keahlian saya.</p>
                  
                      </div>
                    </div>
                  </div>
              </div>
          </div>
      </div>

      <footer>
          <p>Created By RizkiMaulana</p>
        </footer>































    
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