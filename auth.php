<?php
include "koneksi.php";
$username = $_POST['username'];
$pass     = $_POST['password'];
$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password='$pass'");
$row=mysqli_fetch_array($login);
if ($row['username'] == $username AND $row['password'] == $pass)
{
  session_start();
  $_SESSION['username'] = $row['username'];
  $_SESSION['password'] = $row['password'];
  header('location:menuutama.php'); //jika login berhasil, maka ganti halaman 
  }else{
   echo "<script>alert('Username atau Password Anda Salah!!!');</script>";
    echo "<script>location='Login.php';</script>";
  }
?>