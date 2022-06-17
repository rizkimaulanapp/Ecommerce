<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'db_weblogin'; //sesuai nama databasemu//
$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname) or die('koneksi gagal');






function registrasi ($data){
    global $conn;
    $username= strtolower(stripslashes($data["username"]));
    $password= mysqli_real_escape_string($conn, $data["password1"]);
    $password2= mysqli_real_escape_string($conn, $data["password2"]);
    $email= mysqli_real_escape_string($conn, $data["email"]);

    //cek username
     $result=mysqli_query($conn,"SELECT username FROM user WHERE username='$username'");
     if(mysqli_fetch_assoc($result)){
         echo "<script>
         alert('Maaf,username sudah digunakan');
         </script>";
         return false;
     }
     //cek email
     $result=mysqli_query($conn,"SELECT email FROM user WHERE email='$email'");
     if(mysqli_fetch_assoc($result)){
         echo "<script>
         alert('Maaf,Email sudah terdaftar');
         </script>";
         return false;
     }

    //Mengecek konfirmasi password apakah sama dengan password yang diisi.
    if( $password !== $password2){
        echo "<script>
        alert('Maaf,konfirmasi password salah');
        </script>";
    return false;
    }

    //memasukan data register kedalam database
    mysqli_query ($conn,"INSERT INTO user VALUES ('','$username','$password','$email')");
    return mysqli_affected_rows($conn);
   
    }

?>



