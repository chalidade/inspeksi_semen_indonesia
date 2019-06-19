<?php
error_reporting();
include "koneksi.php";
session_start();
$page         = $_REQUEST['page'];

if ($page == '1') {
  $idbulanan             = date('dmY').rand(10,1000);
  $_SESSION['idbulanan'] = $idbulanan;
  $tanggal               = date("d-m-Y h:i:sa");
  $dokumen               = $_POST['dokumen'];
  $kontraktor            = $_POST['kontraktor'];
  $periode               = $_POST['periode'];
  $kerusakan             = $_POST['kerusakan'];
  $hilang_kerja          = $_POST['hilang_kerja'];
  $biaya_obat            = $_POST['biaya_pengobatan'];
  $history               = mysqli_query($connect, "INSERT INTO `history` (`id`, `tanggal`, `aktivitas`, `id_aktivitas`) VALUES (NULL, '$tanggal', 'Bulanan', '$idbulanan');");
  $insert                = mysqli_query($connect, "INSERT INTO `bulanan` (`no`, `id`, `dokumen`, `kontraktor`, `periode`, `tenaga_kerja`, `jam_kerja_normal`, `jam_kerja_overtime`, `hari_kerja`, `nearmiss`, `incident`, `accident_ringan`, `accident_berat`, `accident_fatal`, `kerusakan_property`, `hilang_hari_kerja`, `biaya_pengobatan`, `id_program_k3`) VALUES (NULL, $idbulanan, '$dokumen', '$kontraktor', '$periode', '', '', '', '', '', '', '', '', '', '$kerusakan', '$hilang_kerja', '$biaya_obat', '$idbulanan');");
  echo "<script>window.location = '../aktivitas-bulanan.php';</script>";
} else if($page == "2") {
  $idbulanan = $_SESSION['idbulanan'];
  $program   = $_POST['program'];
  $jumlah    = $_POST['jumlah'];
  $uraian    = $_POST['uraian'];
  $tanggal   = $_POST['tanggal'];

  $a         = [];
  $b         = [];
  $c         = [];
  $d         = [];

  for ($i=0; $i < count($program) ; $i++) {
    if ($program[$i] != '') {
      $a[$i] =  $program[$i];
      $b[$i] =  $jumlah[$i];
      $c[$i] =  $uraian[$i];
      $d[$i] =  $tanggal[$i];
    }
  }

  $pro   = json_encode($a);
  $jum   = json_encode($b);
  $ura   = json_encode($c);
  $tgl   = json_encode($d);

  // echo "$idbulanan -$pro - $jum - $ura - $tgl";
  $insert = mysqli_query($connect, "INSERT INTO `aktivitas_bulanan` (`id`, `program`, `jumlah`, `uraian`, `tanggal`, `id_bulanan`) VALUES (NULL, '$pro', '$jum', '$ura', '$tgl', '$idbulanan');");
  echo "<script>window.location = '../indikator-bulanan.php';</script>";
} else if ($page == "3") {
    $idbulanan      = $_SESSION['idbulanan'];
    $tg_induk       = $_POST['tg_induk'];
    $tg_outsource   = $_POST['tg_outsource'];
    $tg_jumlah      = $_POST['tg_jumlah'];
    $jkn_induk       = $_POST['jkn_induk'];
    $jkn_outsource  = $_POST['jkn_outsource'];
    $jkn_jumlah     = $_POST['jkn_jumlah'];
    $jko_induk      = $_POST['jko_induk'];
    $jko_outsource  = $_POST['jko_outsource'];
    $jko_jumlah     = $_POST['jko_jumlah'];
    $hk_induk       = $_POST['hk_induk'];
    $hk_outsource   = $_POST['hk_outsource'];
    $hk_jumlah      = $_POST['hk_jumlah'];
    $near_induk     = $_POST['near_induk'];
    $near_outsource = $_POST['near_outsource'];
    $near_jumlah    = $_POST['near_jumlah'];
    $inc_induk      = $_POST['inc_induk'];
    $inc_outsource  = $_POST['inc_outsource'];
    $inc_jumlah     = $_POST['inc_jumlah'];
    $ac_induk       = $_POST['ac_induk'];
    $ac_outsource   = $_POST['ac_outsource'];
    $ac_jumlah      = $_POST['ac_jumlah'];
    $ab_induk       = $_POST['ab_induk'];
    $ab_outsource   = $_POST['ab_outsource'];
    $ab_jumlah      = $_POST['ab_jumlah'];
    $af_induk       = $_POST['af_induk'];
    $af_outsource   = $_POST['af_outsource'];
    $af_jumlah      = $_POST['af_jumlah'];

    $tgj  = json_encode([$tg_induk, $tg_outsource, $tg_jumlah]);
    $jkn  = json_encode([$jkn_induk, $jkn_outsource, $jkn_jumlah]);
    $jko  = json_encode([$jko_induk, $jko_outsource, $jko_jumlah]);
    $hk   = json_encode([$hk_induk, $hk_outsource, $hk_jumlah]);
    $near = json_encode([$near_induk, $near_outsource, $near_jumlah]);
    $inc  = json_encode([$inc_induk, $inc_outsource, $inc_jumlah]);
    $ac   = json_encode([$ac_induk, $ac_outsource, $ac_jumlah]);
    $ab   = json_encode([$ab_induk, $ab_outsource, $ab_jumlah]);
    $af   = json_encode([$af_induk, $af_outsource, $af_jumlah]);

    // echo "$idbulanan | $tgj <br> $jkn <br> $jko <br> $hk <br> $near </br> $inc <br> $ac <br> $ab <br> $af</br>";

    $update   = mysqli_query($connect, "UPDATE `bulanan` SET `tenaga_kerja` = '$tgj', `jam_kerja_normal` = '$jkn', `jam_kerja_overtime` = '$jko', `hari_kerja` = '$hk', `nearmiss` = '$near', `incident` = '$inc', `accident_ringan` = '$ac', `accident_berat` = '$ab', `accident_fatal` = '$af' WHERE `bulanan`.`id` = '$idbulanan';");

    echo "<script>alert('Data Berhasil Disimpan');window.location = '../form.php';</script>";
}
 ?>
