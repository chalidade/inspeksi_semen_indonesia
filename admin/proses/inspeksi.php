<?php
error_reporting();
include "koneksi.php";
session_start();
$page    = $_REQUEST['page'];
if ($page == "1") {
$idinspeksi             = date('dmY').rand(10,1000);
$_SESSION['idinspeksi'] = $idinspeksi;
$shift                  = $_POST['shift'];
$uk                     = $_POST['uk'];
$lokasi                 = $_POST['lokasi'];
$tanggal                = date('d/m/Y');

$tes                    = "SELECT * FROM `inspeksi`  WHERE `uk_pihak` = '$uk' AND `tanggal` = '$tanggal'";
$result                 = mysqli_query($connect,$tes);
if (mysqli_num_rows($result) != 0)
  {
    echo "<script>alert('Data Sudah Ada');window.location = '../index.php';</script>";
  } else {
$insert                 = mysqli_query($connect, "INSERT INTO `inspeksi` (`no`,`id`, `tanggal`, `shift`, `id_checklist`, `uk_pihak`, `uk_lokasi`, `temuan`, `potensi_bahaya`, `tindak_lanjut`, `batas_tindak_lanjut`, `bukti_tindak_lanjut`, `keterangan`, `status`) VALUES (NULL,'$idinspeksi', '$tanggal', '$shift', '', '$uk', '$lokasi', '', '', '', '', '', '', '0');");
// echo "$idinspeksi - $shift - $uk - $lokasi - $tanggal";
echo "<script>window.location = '../temuan.php';</script>";
}
} else if($page == "2") {
  $idinspeksi         = $_SESSION['idinspeksi'];
  $_SESSION['tta1']   = $_POST['tta1'];
  $_SESSION['tta2']   = $_POST['tta2'];
  $_SESSION['tta3']   = $_POST['tta3'];
  $_SESSION['tta4']   = $_POST['tta4'];
  $_SESSION['tta5']   = $_POST['tta5'];
  $_SESSION['tta6']   = $_POST['tta6'];
  $_SESSION['tta7']   = $_POST['tta7'];
  $_SESSION['tta8']   = $_POST['tta8'];
  $_SESSION['tta9']   = $_POST['tta9'];
  $_SESSION['tta10']  = $_POST['tta10'];
  $_SESSION['tta11']  = $_POST['tta11'];
  $_SESSION['tta12']  = $_POST['tta12'];

  $_SESSION['ttb1']   = $_POST['ttb1'];
  $_SESSION['ttb2']   = $_POST['ttb2'];
  $_SESSION['ttb3']   = $_POST['ttb3'];
  $_SESSION['ttb4']   = $_POST['ttb4'];
  $_SESSION['ttb5']   = $_POST['ttb5'];
  $_SESSION['ttb6']   = $_POST['ttb6'];
  $_SESSION['ttb7']   = $_POST['ttb7'];
  $_SESSION['ttb8']   = $_POST['ttb8'];
  $_SESSION['ttb9']   = $_POST['ttb9'];
  $_SESSION['ttb10']  = $_POST['ttb10'];
  $_SESSION['ttb11']  = $_POST['ttb11'];

  $_SESSION['ttc1']   = $_POST['ttc1'];
  $_SESSION['ttc2']   = $_POST['ttc2'];
  $_SESSION['ttc3']   = $_POST['ttc3'];
  $_SESSION['ttc4']   = $_POST['ttc4'];
  $_SESSION['ttc5']   = $_POST['ttc5'];
  $_SESSION['ttc6']   = $_POST['ttc6'];
  $_SESSION['ttc7']   = $_POST['ttc7'];
  $_SESSION['ttc8']   = $_POST['ttc8'];
  $_SESSION['ttc9']   = $_POST['ttc9'];
  $_SESSION['ttc10']  = $_POST['ttc10'];
  $_SESSION['ttc11']  = $_POST['ttc11'];
  $_SESSION['ttc12']  = $_POST['ttc12'];
  $_SESSION['ttc13']  = $_POST['ttc13'];

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['tta'.$i] != '') {
      $tt[] = $_SESSION['tta'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttb'.$i] != '') {
      $tt[] = $_SESSION['ttb'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttc'.$i] != '') {
      $tt[] = $_SESSION['ttc'.$i];
    }
  }

  $checklist = json_encode($tt);
  $update    = mysqli_query($connect, "UPDATE `inspeksi` SET `id_checklist` = '$checklist' WHERE `inspeksi`.`id` = '$idinspeksi';");
  echo "<script>window.location = '../temuan_lanjut.php';</script>";
} else if($page == "3") {
  $idinspeksi = $_SESSION['idinspeksi'];
  $temuana    = $_POST['temuana'];
  $potensia   = $_POST['potensia'];
  $tindaka    = $_POST['tindaka'];
  $tempoa     = $_POST['tempoa'];

  $target_dir  = "upload/";
  $filea       = $_FILES["filea"]["name"];
  for ($i=1; $i <= count($filea); $i++) {
        $filea       = $_FILES["filea"]["name"][$i];
        $target_file = $target_dir . basename($filea);
        $file[]      =  $target_file;
        $tmp[]       =  $_FILES["filea"]["tmp_name"][$i];
      }

      $fileb       = $_FILES["fileb"]["name"];
      for ($i=1; $i <= count($fileb); $i++) {
        $fileb       = $_FILES["fileb"]["name"][$i];
        $target_file = $target_dir . basename($fileb);
        $file[]      = $target_file;
        $tmp[]       = $_FILES["fileb"]["tmp_name"][$i];
      }

      $filec       = $_FILES["filec"]["name"];
      for ($i=1; $i <= count($filec); $i++) {
        $filec       = $_FILES["filec"]["name"][$i];
        $target_file = $target_dir . basename($filec);
        $file[]      =  $target_file;
        $tmp[]       =  $_FILES["filec"]["tmp_name"][$i];
      }


      for ($i=0; $i < count($file); $i++) {
        if (move_uploaded_file($tmp[$i], $file[$i])) {
          // echo "The file ". basename( $tmp[$i]). " has been uploaded. <br>";
        } else {
          // echo "Sorry, there was an error uploading your file.";
        }
      }

  $temuanb    = $_POST['temuanb'];
  $potensib   = $_POST['potensib'];
  $tindakb    = $_POST['tindakb'];
  $tempob     = $_POST['tempob'];

  $temuanc    = $_POST['temuanc'];
  $potensic   = $_POST['potensic'];
  $tindakc    = $_POST['tindakc'];
  $tempoc     = $_POST['tempoc'];

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['tta'.$i] != '') {
        $temuan[] = $temuana[$i];
        $potensi[] = $potensia[$i];
        $tindakan[] = $tindaka[$i];
        $tempo[] = $tempoa[$i];
        // echo $_SESSION['potensia'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttb'.$i] != '') {
        // echo $_SESSION['ttb'.$i]." | ";
        $temuan[] = $temuanb[$i];
        $potensi[] = $potensib[$i];
        $tindakan[] = $tindakb[$i];
        $tempo[] = $tempob[$i];
        // echo $_SESSION['potensib'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttc'.$i] != '') {
        // echo $_SESSION['ttc'.$i]." | ";
        $temuan[] = $temuanc[$i];
        $potensi[] = $potensic[$i];
        $tindakan[] = $tindakc[$i];
        $tempo[] = $tempoc[$i];
        // echo $_SESSION['potensic'.$i];
    }
  }

    $a = json_encode($potensi);
    $b = json_encode($tindakan);
    $c = json_encode($tempo);
    $d = json_encode($temuan);
    $e = json_encode($file);


    $data = mysqli_query($connect,"UPDATE `inspeksi` SET `temuan` = '$d', `potensi_bahaya` = '$a', `tindak_lanjut` = '$b', `batas_tindak_lanjut` = '$c', `bukti_tindak_lanjut` = '$e' WHERE `inspeksi`.`id` = '$idinspeksi';");
    echo "<script>alert('Data Disimpan');window.location = '../index.php';</script>";
} else if($page == 'acc') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "UPDATE `inspeksi` SET `status` = '1' WHERE `inspeksi`.`id` = '$id';");
  echo "<script>window.location = '../data-inspeksi.php?id=inspeksi';</script>";
} else if($page == 'tolak') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "UPDATE `inspeksi` SET `status` = '2' WHERE `inspeksi`.`id` = '$id';");
  echo "<script>window.location = '../data-inspeksi.php?id=inspeksi';</script>";
}  else if($page == 'delete') {
  $id     = $_REQUEST['id'];
  $status = mysqli_query($connect, "DELETE FROM `inspeksi` WHERE `inspeksi`.`id` = '$id'");
  echo "<script>window.location = '../data-inspeksi.php?id=harian';</script>";
}


 ?>
