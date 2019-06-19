<?php
error_reporting();
include "koneksi.php";
session_start();
$page       = $_REQUEST['page'];
// echo $idharian."-";
if ($page == '1') {
  $idharian   = date('dmY').rand(10,1000);
  $_SESSION['idharian'] = $idharian;
  $pt             = $_POST['pt'];
  $date           = $_POST['date'];
  $pekerjaan      = $_POST['pekerjaan'];
  $no_pekerjaan   = $_POST['no_pekerjaan'];
  $hari_kerja     = $_POST['hari_kerja'];
  $total_pekerja  = $_POST['total_pekerja'];
  $jenis_kegiatan = $_POST['jenis_kegiatan'];

  $tes            = "SELECT * FROM `harian` WHERE `pt` = '$pt' AND `date` = '$date'";
  $result         = mysqli_query($connect,$tes);
  if (mysqli_num_rows($result) != 0)
    {
      echo "<script>alert('Data Sudah Ada');window.location = '../index.php';</script>";
    } else {
      $insert         = mysqli_query($connect, "INSERT INTO `harian` (`nomer`, `id`, `date`, `pekerjaan`, `no`, `hari_kerja`, `total_pekerja`, `jenis_kegiatan`, `id_aktivitas`, `nr1`, `nr2`, `nr3`, `ic1`, `ic2`, `ic3`, `fat`, `jum_pekerja1`, `jum_pekerja2`, `jam_efektif1`, `jam_efektif2`, `jam_normal`, `total_jam`, `total_hari`, `keterangan`, `pt`, `status`) VALUES (NULL, '$idharian', '$date', '$pekerjaan', '$no_pekerjaan', '$hari_kerja', '$total_pekerja', '$jenis_kegiatan', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$pt', '0');");
      // echo "$date - $pekerjaan - $hari_kerja - $total_pekerja - $jenis_kegiatan";
      echo "<script>window.location = '../aktivitas.php';</script>";
    }

} else if($page == '2') {
  $idaktivitas  = date('dmY').rand(10,1000);
  $idharian     = $_SESSION['idharian'];
  $pekerjaan    = $_POST['pekerjaan'];
  $identifikasi = $_POST['identifikasi'];
  $dampak       = $_POST['dampak'];
  $tindakan     = $_POST['tindakan'];
  $keterangan   = $_POST['keterangan'];
  echo $idharian;
  $update       = mysqli_query($connect, "UPDATE `harian` SET `id_aktivitas` = '$idaktivitas' WHERE `harian`.`id` = '$idharian';");
  for ($i=0; $i < count($pekerjaan); $i++) {
    if ($pekerjaan != '') {
      $insert2  = mysqli_query($connect, "INSERT INTO `aktivitas` (`no`, `pekerjaan`, `bahaya`, `dampak`, `pencegahan`, `keterangan`, `id_aktivitas`) VALUES (NULL, '$pekerjaan[$i]', '$identifikasi[$i]', '$dampak[$i]', '$tindakan[$i]', '$tindakan[$i]', '$idaktivitas');");
    }
  }
  $delete       = mysqli_query($connect, "DELETE FROM `aktivitas` WHERE `aktivitas`.`id_aktivitas` = '$idaktivitas' AND `aktivitas`.`pekerjaan` = ''");
  echo "<script>window.location = '../kejadian.php';</script>";
} else if($page == '3') {
  $idharian     = $_SESSION['idharian'];
  $tanggal      = date("d-m-Y h:i:sa");
  $nr1          = $_POST['nr1'];
  $nr2          = $_POST['nr2'];
  $nr3          = $_POST['nr3'];
  $ic1          = $_POST['ic1'];
  $ic2          = $_POST['ic2'];
  $ic3          = $_POST['ic3'];
  $fat          = $_POST['fat'];
  $jum_pekerja1 = $_POST['jum_pekerja1'];
  $jum_pekerja2 = $_POST['jum_pekerja2'];
  $jam_efektif1 = $_POST['jam_efektif1'];
  $jam_efektif2 = $_POST['jam_efektif2'];
  $jam_normal   = $_POST['jam_normal'];
  $total_jam    = $_POST['total_jam'];
  $total_hari   = $_POST['total_hari'];
  $keterangan   = $_POST['keterangan'];

  $update2      = mysqli_query($connect, "UPDATE `harian` SET `nr1` = '$nr1', `nr2` = '$nr2', `nr3` = '$nr3', `ic1` = '$ic1', `ic2` = '$ic2', `ic3` = '$ic3', `fat` = '$fat', `jum_pekerja1` = '$jum_pekerja1', `jum_pekerja2` = '$jum_pekerja1', `jam_efektif1` = '$jam_efektif1', `jam_efektif2` = '$jam_efektif2', `jam_normal` = '$jam_normal', `total_jam` = '$total_jam', `total_hari` = '$total_hari', `keterangan` = '$keterangan' WHERE `harian`.`id` = '$idharian';");

  $insert4      = mysqli_query($connect, "INSERT INTO `history` (`id`, `tanggal`, `aktivitas`, `id_aktivitas`) VALUES (NULL, '$tanggal', 'harian', '$idharian');");
  // echo "$nr1 - $nr2 - $nr3 - $ic1- $ic2 - $ic3 - $fat - $jum_pekerja1 - $jum_pekerja2 - $jam_efektif1 - $jam_efektif2 - $jam_normal - $total_jam - $total_hari - $keterangan";
  echo "<script>window.location = '../form.php';</script>";

} else if($page == 'acc') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "UPDATE `harian` SET `status` = '1' WHERE `harian`.`id` = '$id';");
  echo "<script>window.location = '../data-laporan.php?id=harian';</script>";
} else if($page == 'tolak') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "UPDATE `harian` SET `status` = '2' WHERE `harian`.`id` = '$id';");
  echo "<script>window.location = '../data-laporan.php?id=harian';</script>";
}  else if($page == 'delete') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "DELETE FROM `harian` WHERE `harian`.`id` = '$id'");
  echo "<script>window.location = '../data-laporan.php?id=harian';</script>";
}

 ?>
