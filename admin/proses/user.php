<?php
error_reporting();
include "koneksi.php";
$nama     = $_POST['nama'];
$email    = $_POST['email'];
$jabatan  = $_POST['jabatan'];
$password = $_POST['pass'];
$id       = $_REQUEST['id'];
$data     = $_REQUEST['data'];

if ($id == "tambah") {
  $insert = mysqli_query($connect, "INSERT INTO `user` (`id`, `Nama`, `Jabatan`, `Email`, `Password`) VALUES (NULL, '$nama', '$jabatan', '$email', '$password');");
  echo "<script>alert('Data Tersimpan');window.location = '../manage-user.php';</script>";
} else if ($id == "hapus") {
  $hapus  = mysqli_query($connect, "DELETE FROM `user` WHERE `user`.`id` = '$data'");
  echo "<script>alert('Data Berhasil Dihapus');window.location = '../manage-user.php';</script>";
}  else if ($id == "edit") {
  $insert = mysqli_query($connect, "UPDATE `user` SET `Nama` = '$nama', `Jabatan` = '$jabatan', `Email` = '$email' WHERE `user`.`id` = '$data';");
  echo "<script>alert('Data Diupdate');window.location = '../manage-user.php';</script>";
}

 ?>
