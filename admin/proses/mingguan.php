<?php
error_reporting();
include "koneksi.php";
session_start();
$page         = $_REQUEST['page'];
if ($page == "1") {
  $idmingguan              = date('dmY').rand(10,1000);
  $_SESSION['id_mingguan'] = $idmingguan;
  $pt                      = $_POST['pt'];
  $tanggal                 = date("d-m-Y h:i:sa");
  $pekerjaan               = $_POST['pekerjaan'];
  $no                      = $_POST['no'];
  $mingguke                = $_POST['mingguke'];
  $tahun                   = $_POST['tahun'];
  $dari                    = $_POST['dari'];
  $sampai                  = $_POST['sampai'];
  $bulanini                = $_POST['bulanini'];
  $totalkerja              = $_POST['totalkerja'];
  $jumjam                  = $_POST['jumjam'];
  $totjam                  = $_POST['totjam'];
  $induk                   = $_POST['induk'];
  $outsource               = $_POST['outsource'];

  $history                 = mysqli_query($connect, "INSERT INTO `history` (`id`, `tanggal`, `aktivitas`, `id_aktivitas`) VALUES (NULL, '$tanggal', 'Mingguan', '$idmingguan');");
  $insert                  = mysqli_query($connect, "INSERT INTO `mingguan` (`no`, `Id`, `jenis_pekerjaan`, `no_pekerjaan`, `minggu_ke`, `tahun_ke`, `progress_pekerjaan`, `masa_kerja_mulai`, `masa_kerja_akhir`, `hari_kerja_bulan_ini`, `jumlah_jam_kerja`, `total_har_kerja_berlangsung`, `total_jam_kerja`, `data_man_power_induk`, `data_man_power_outsource`, `temuan_unsafe_action`, `close_unsafe_action`, `total_unsafe_action`, `temuan_unsafe_condition`, `colse_unsafe_condition`, `total_unsafe_condition`, `nearmiss_jumlah`, `nearmiss_total`, `p3_jumlah`, `p3_total`, `ringan_jumlah`, `ringan_total`, `berat_jumlah`, `berat_total`, `fatality_jumlah`, `fatality_total`, `kerusakan_aset_jumlah`, `kerusakan_aset_total`, `kebakaran_jumlah`, `kebakaran_total`, `kerusakan_property`, `hilang_hari_kerja`, `biaya_pengobatan`, `keterangan`, `pt`) VALUES (NULL, '$idmingguan', '$pekerjaan', '$no', '$mingguke', '$tahun', '', '$dari', '$sampai', '$bulanini', '$totalkerja', '$jumjam', '$totjam', '$induk', '$outsource', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '$pt');");
  // echo "$idmingguan | $tanggal | $pekerjaan | $no | $mingguke | $tahun | $dari | $sampai | $bulanini | $totalkerja | $jumjam | $totjam | $induk | $outsource";
  echo "<script>window.location = '../aktivitas-mingguan.php';</script>";
} else if($page == "2") {
    $idmingguan = $_SESSION['id_mingguan'];
    $a1   = $_POST['a1'];
    $a2   = $_POST['a2'];
    $a3   = $_POST['a3'];

    $b1   = $_POST['b1'];
    $b2   = $_POST['b2'];
    $b3   = $_POST['b3'];

    $c1   = $_POST['c1'];
    $c2   = $_POST['c2'];
    $d1   = $_POST['d1'];
    $d2   = $_POST['d2'];
    $e1   = $_POST['e1'];
    $e2   = $_POST['e2'];
    $f1   = $_POST['f1'];
    $f2   = $_POST['f2'];
    $g1   = $_POST['g1'];
    $g2   = $_POST['g2'];
    $h1   = $_POST['h1'];
    $h2   = $_POST['h2'];
    $i1   = $_POST['i1'];
    $i2   = $_POST['i2'];
    $ket  = $_POST['ket'];

    $sql = mysqli_query($connect, "UPDATE `mingguan` SET `temuan_unsafe_action` = '$a1', `close_unsafe_action` = '$a2', `total_unsafe_action` = '$a3', `temuan_unsafe_condition` = '$b1', `colse_unsafe_condition` = '$b2', `total_unsafe_condition` = '$b3', `nearmiss_jumlah` = '$i1', `nearmiss_total` = '$i2', `p3_jumlah` = '$c1', `p3_total` = '$c2', `ringan_jumlah` = '$d1', `ringan_total` = '$d2', `berat_jumlah` = '$e1', `berat_total` = '$e2', `fatality_jumlah` = '$f1', `fatality_total` = '$f2', `kerusakan_aset_jumlah` = '$g1', `kerusakan_aset_total` = '$g2', `kebakaran_jumlah` = '$h1', `kebakaran_total` = '$h1', `kerusakan_property` = '', `hilang_hari_kerja` = '', `biaya_pengobatan` = '', `keterangan` = '$ket' WHERE `mingguan`.`Id` = '$idmingguan';");

    echo "<script>alert('Data Berhasil Disimpan');window.location = '../index.php';</script>";
}

?>
