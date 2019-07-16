<?php
error_reporting();
session_start();
include "koneksi.php";

$email     = $_POST['email'];
$password  = $_POST['pass'];
$user     = "SELECT * FROM `user` where Email = '$email' AND Password = '$password' ";
$result   = mysqli_query($connect,$user);

if (mysqli_num_rows($result) != 0)
  {
  while ($row=mysqli_fetch_row($result))
    {
    $_SESSION['kode']   = $row[0];
    $_SESSION['nama']   = $row[1];
    $_SESSION['email']  = $row[3];
    $_SESSION['jabatan']= $row[2];
    $_SESSION['pt']     = $row[5];
    }

    echo "<script>window.location = '../admin/index.php';</script>";
  } else {
    echo "<script>alert('Login Gagal, Pastikan Email dan Password Benar');window.location = '../index.php';</script>";
  }


?>
