<?php
require 'koneksi.php';
if(isset($_POST["btnsubmit"])){

if(registrasi($_POST) > 0 ){
  echo "<script>
  alert('User berhasil dibuat!');
  </script>";
  echo "<script>location='Login.php';</script>";
}else{
  echo mysqli_error($conn);
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
    <link rel="stylesheet" type="text/css" href="register.css">
    <title>FORM REGISTER</title>
  </head>

  <style> 
    body{
        background-image: url("bg1.jpg");
        background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('img/bg1.jpg');
        background-size:cover;
        background-position:center;
    }
</style>

  <body>
      <div class="container">
          <h3 class="text-center">REGISTER</h3>
          <hr>
    <form action="" method="post" class="row g-3" >
        <div class="col-md-15">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="user" name="username" 
          placeholder="Masukan Username">
        </div>
        <div class="col-md-15">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="pass1" name="password1" 
          placeholder="Masukan Password">
        </div>
        <div class="col-md-15">
          <label for="password2" class="form-label">Konfirmasi Password</label>
          <input type="password" class="form-control" id="pass2" name="password2"
           placeholder="Konfirmasi Password">
        </div>
        <div class="col-md-15">
            <label for="Email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email"
             placeholder="Masukan Email">
          </div>

        <div class="col-md-12">
          <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button><button type="reset" class="btn btn-danger ">Reset</button>
          <hr><i>Anda sudah punya akun ? </i><a href="Login.php">Sign In</a>
  </div>
        
      

        <script> 
            function pilih(obj){
            var a=obj.user.value
            var b=obj.pass.value
            var c=obj.email.value
            document.write("<h1>")                                    
            document.write("<br>ID user: ",a)
            document.write("<br>ID pass: ",b)
            document.write("<br>ID email: ",c)
        </script>
            
      </form>
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