<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="fontawesome-free-5.15.4-web/css/all.min.css">
    <title>FORM LOGIN</title>
  </head>
  
  <style> 
      body{
          background-image: url("img/bg1.jpg");
          background:linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),url('img/bg1.jpg');
          background-size:cover;
          background-position:center;
      }
  </style>
  
  <body> 
     <div class="container">
     <div class="login">
          <h3 class="text-center">LOGIN</h3>
          <hr>

          <form action="auth.php" method="post" onSubmit="return validasi()">
            <div class="mb-3">
              <label for="Username" class="form-label">Username</label>
              <div class="input-group">
              <div class="input-group-prepend"> 
              <div class="input-group-text"><i class="fas fa-user mt-2"></i></div>
              </div>
              <input type="text" name="username" id="username" class="form-control" 
              placeholder="Masukan Username"/>
              </div>
              </div>
            <div class="mb-3">
              <label for="Password" class="form-label">Password</label>
              <div class="input-group">
              <div class="input-group-prepend"> 
              <div class="input-group-text"><i class="fas fa-key mt-2"></i></div>
              </div>
              <input type="password" name="password" id="password" class="form-control"
               placeholder="Masukan Password"/>
              </div>
              </div>
            <button type="submit" name="Login" class="btn btn-primary">Login</button>
            <i>Anda belum punya akun ? </i><a href="register.php">Sign Up</a>
          </form>
          </div>
          </div>
          <script type="text/javascript" src="validasi.js"></script>
    
  </body>
</html>