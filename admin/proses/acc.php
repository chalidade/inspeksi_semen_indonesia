<?php
  error_reporting();
  session_start();
  $id         = $_REQUEST['id'];
  $potensia   = $_POST['potensia'];
  $tindaka    = $_POST['tindaka'];
  $tempoa     = $_POST['tempoa'];

  $potensib   = $_POST['potensib'];
  $tindakb    = $_POST['tindakb'];
  $tempob     = $_POST['tempob'];

  $potensic   = $_POST['potensic'];
  $tindakc    = $_POST['tindakc'];
  $tempoc     = $_POST['tempoc'];

if ($id == "simpan") {

} else {
  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['tta'.$i] != '') {
        $_SESSION['potensia'.$i] = $potensia[$i];
        $_SESSION['tindaka'.$i] = $tindaka[$i];
        $_SESSION['tempoa'.$i] = $tempoa[$i];
        // echo $_SESSION['potensia'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttb'.$i] != '') {
        // echo $_SESSION['ttb'.$i]." | ";
        $_SESSION['potensib'.$i] = $potensib[$i];
        $_SESSION['tindakb'.$i] = $tindakb[$i];
        $_SESSION['tempob'.$i] = $tempob[$i];
        // echo $_SESSION['potensib'.$i];
    }
  }

  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttc'.$i] != '') {
        // echo $_SESSION['ttc'.$i]." | ";
        $_SESSION['potensic'.$i] = $potensic[$i];
        $_SESSION['tindakc'.$i] = $tindakc[$i];
        $_SESSION['tempoc'.$i] = $tempoc[$i];
        // echo $_SESSION['potensic'.$i];
    }
  }
echo "<script>window.location = '../acc_lap_harian.php';</script>";
}
?>
