<?php

include 'koneksi.php';  //database sendiri


if(isset($_POST['btnsave']))
{
if($_GET['hal'] == "edit")
{
  $edit = mysqli_query ($conn, "UPDATE feedback set 
  Nama = '$_POST[nama]',
  Email ='$_POST[email]',
  Pesan ='$_POST[pesan]',
  Penilaian = '$_POST[nilai]'
  WHERE No = '$_GET[No]' 
  ");

if($edit)
{
echo "<script>
alert('edit data sukses');
document.location='feedback.php';
</script>";
}
else
{
echo "<script>
alert('edit data gagal !');
document.location='feedback.php';
</script>";
}
}else
{
  $simpan = mysqli_query ($conn, "INSERT INTO feedback
  (Nama, Email, Pesan,Penilaian)
  VALUES('$_POST[nama]','$_POST[email]','$_POST[pesan]','$_POST[nilai]') ");

if($simpan)
{
echo "<script>
alert('simpan data sukses');
document.location='feedback.php';
</script>";
}
else
{
echo "<script>
alert('simpan data gagal !');
document.location='feedback.php';
</script>";
}
}









  
}

//Edit data
if(isset($_GET['hal']))
{
  if($_GET['hal'] == "edit")
  {
    $tampil = mysqli_query($conn, "SELECT * FROM feedback WHERE No = '$_GET[No]'");
    $data = mysqli_fetch_array ($tampil);
    if($data)
    {
      $vnama = $data ['Nama'];
      $vemail = $data ['Email'];
      $vpesan = $data ['Pesan'];
      $vnilai = $data ['Penilaian'];
    }
  }
  else if ($_GET['hal'] == "hapus")
  {
   $hapus = mysqli_query ($conn,"DELETE FROM feedback WHERE No = '$_GET[No]'");
   if($hapus){
    echo "<script>
    alert('Hapus Data Sukses !');
    document.location='feedback.php';
    </script>";
   }
  }
}


?>






<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="feedback.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css">

    <title>FORM FEEDBACK </title>
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
          <a class="nav-link active" aria-current="page" href="menuutama.php">Home</a>
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
      <div class ="me-5">Halo ! <?php echo $_SESSION['username']; ?></div>
    </div>
  </div>
  <div class="d-grid gap-2 d-md-flex justify-content-md-end ">
     <a class="btn btn-outline-danger me-3" class="button" href="Logout.php" role="button">Logout</a>
</div>
</nav>

      <div class="container">
    <h1 class="text-center">FORM FEEDBACK PELANGGAN </h1> 

 <!-- awal card  -->
    
 <div class="card mt-3   ">
  <div class="card-header bg-primary text-white">
    Form Feedback
  </div>
  <div class="card-body">
   <form method="post" action="">
       <div class="form-group mt-2"> 
           <label> Nama </label>
           <input type="text" name="nama" value="<?=@$vnama?>" class="form-control" placeholder="masukan nama anda">

        </div>
        <div class="form-group mt-3"> 
           <label> Email </label>
           <input type="text" name="email" value="<?=@$vemail?>" class="form-control" placeholder="masukan email anda">

        </div>
        <div class="form-group mt-3"> 
           <label> Pesan </label>
           <textarea class="form-control" name="pesan"  placeholder="masukan pesan feedback anda"><?=@$vpesan?></textarea>

        </div>
        <div class="form-group mt-3"> 
           <label> Penilaian </label>
           <select class="form-control" name="nilai">
               <option value="<?=@$vnilai?>"><?=@$vnilai?></option>
               <option value="Sangat Buruk">Sangat Buruk</option>
               <option value="Buruk">Buruk</option>
               <option value="Baik">Baik</option>
               <option value="Sangat Baik">Sangat Baik</option>
            
            </select>
        </div>
        <div class="mt-3">
        <button type="submit" class="btn btn-primary" name="btnsave">Save</button>
        <button type="reset" class="btn btn-danger" name="btreset"> Reset</button>
</div>
</form>
  </div>
</div>
<!-- akhir card  -->

   
<!-- awal card tabel -->
<div class="card mt-3   ">
  <div class="card-header bg-success text-white">
    Daftar Feedback konsumen
  </div>
  <div class="card-body">
      <table class="table table-bordered table-striped">
          <tr>
              <th>No.</th>
              <th>Nama</th>
              <th>Email</th>
              <th>Pesan</th>
              <th>Penilaian</th>
              <th>Aksi</th>
         </tr>
     <?php
     $no = 1;
     $tampil =  mysqli_query($conn,"SELECT * FROM feedback order by No desc");
     while($data = mysqli_fetch_array($tampil)):
     ?>



         <tr>
             <td><?=$no++;?></td>
             <td><?=$data['Nama']?></td>
             <td><?=$data['Email']?></td>
             <td><?=$data['Pesan']?></td>
             <td><?=$data['Penilaian']?></td>
             <td>
               <a href="feedback.php?hal=edit&No=<?=$data['No']?>" class=" btn btn-warning ml-2">Edit </a>
               <a href="feedback.php?hal=hapus&No=<?=$data['No']?>" onclick="return confirm('Apakah yakin ingin menghapus ?')" class=" btn btn-danger">Delete </a>
            </tr>

            <?php endwhile; ?>
     </table>
  
  </div>
</div>
<!-- akhir card tabel -->











































    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</div>
  </body>
</html>