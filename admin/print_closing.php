<?php
  include "proses/koneksi.php";
  session_start();
  $id          = $_REQUEST['id'];
  $show        = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `id` = '$id'");
  while ($data = mysqli_fetch_array($show)) {
  $idinspeksi  = $data['id'];
  $checklist   = json_decode($data['id_checklist']);
  $temuan      = json_decode($data['temuan']);
  $potensi     = json_decode($data['potensi_bahaya']);
  $tindak      = json_decode($data['tindak_lanjut']);
  $temuan      = json_decode($data['temuan']);
  $batas       = json_decode($data['batas_tindak_lanjut']);
  $temuan      = json_decode($data['temuan']);
  $bukti       = json_decode($data['bukti_tindak_lanjut']);
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laporan Harian</title>
    <style media="screen">
      td {vertical-align:top;}
      @page
        {
            size: auto;   /* auto is the initial value */

            /* this affects the margin in the printer settings */
            margin: 1mm 1mm 1mm 1mm;
        }
        body
        {
            /* this affects the margin on the content before sending to printer */
            margin: 0px;
        }
    </style>
  </head>
  <body onload="window.print()">
    <table width="100%" align="center" style="text-align:center; border:solid thin #000">
      <tr>
        <td rowspan="2" width="20%"> <img src="img/logo.png" alt="" width="50%" style="padding:20px"> </td>
        <td style="padding-top:10px;font-weight:500;font-size:14px">PT SEMEN INDONESIA</td>
        <td rowspan="2" width="10%">R/538 /001</td>
      </tr>
      <tr>
        <td>
          <h3 style="margin-top:0px;"><u>FORM DATA CLOSING</u></h3>
          <table width="80%" align="center" style="text-align:left;margin-top:-15px;padding-bottom:20px;">
            <tr>
              <td width="40%">Tanggal</td>
              <td>: <?php echo $data['tanggal']; ?></td>
            </tr>
            <tr>
              <td>Shift</td>
              <td>: <?php echo $data['shift']; ?></td>
            </tr>
            <tr>
              <td>Uraian Pekerjaan / Pihak kedua</td>
              <td>: <?php echo $data['uk_pihak']; ?></td>
            </tr>
            <tr>
              <td>Lokasi</td>
              <td>: <?php echo $data['uk_lokasi']; ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table width="100%" align="center" style="text-align:center; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="border: 1px solid black;">No</th>
        <th style="border: 1px solid black;">Jenis Temuan</th>
        <th style="border: 1px solid black;">Foto Temuan</th>
        <th style="border: 1px solid black;" style="border: 1px solid black;">Tanggal Penyelesaian</th>
        <th style="border: 1px solid black;">Foto Closing</th>
      </tr>

      <?php
      $tes        = 1;
      $close      = mysqli_query($connect, "SELECT * FROM `closing_inspeksi` WHERE `id_inspeksi` = '$idinspeksi'");
      while ($cls = mysqli_fetch_array($close)) {
      $ftclosing  = json_decode($cls['foto_closing']);
      }
      for ($i=0; $i < count($temuan); $i++) {
      ?>
      <tr>
      <td style="border: 1px solid black;"><?php echo $tes;$tes++; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><?php echo $temuan[$i]; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><center><img src="proses/<?php echo $bukti[$i]; ?>" style="width:200px"><?php $no++; ?></center></td>
      <td style="border: 1px solid black;text-align:center;padding-left:10px;vertical-align:middle"><?php echo $batas[$i]; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><center><img src="proses/<?php echo $ftclosing[$i]; ?>" style="width:200px"><?php $no++; ?></center></td>
    </tr>
    <?php } ?>
    <?php } ?>
    </table>
    <center>
    <!-- <a href="acc_lap_harian.php"><button type="button" name="button" style="margin-top:20px;border:solid thin #ed2c2f;padding:10px;background:#ed2c2f;color:#fff;width:60%">Kembali</button></a></center> -->
  </body>
</html>
