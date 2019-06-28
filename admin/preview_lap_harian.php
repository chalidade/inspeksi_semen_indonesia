<?php
  include "proses/koneksi.php";
  session_start();
  $id          = $_REQUEST['id'];
  $show        = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `id` = '$id'");
  while ($data = mysqli_fetch_array($show)) {
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
        <td style="padding-top:10px;font-weight:500;font-size:14px">SEKSI KESELAMATAN KERJA TUBAN</td>
        <td rowspan="2" width="10%">R/538 /001</td>
      </tr>
      <tr>
        <td>
          <h3 style="margin-top:0px;"><u>LAPORAN HARIAN KESELAMATAN</u></h3>
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
    <table width="100%" align="center" style="text-align:left; border:solid thin #000;font-size:12px;padding:10px;">
      <tr>
        <td><h4>Tindakan Tidak Aman <br>(Sikap / Perilaku)</h4></td>
        <td><h4>Kondisi Tidak Aman <br>(Mesin, Lingkungan)</h4></td>
        <td><h4>Faktor Kerja <br> (Bahan, Rambu K3, dan Lain-lain)</h4></td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <?php if(in_array("Beroperasi/Bekerja Tanpa Otoritas", $checklist)){?>
                <td> <input type="checkbox" checked name="tta1" value="Beroperasi/Bekerja Tanpa Otoritas" style="margin-top: 0px;"> </td>
              <?php } else { ?>
                <td> <input type="checkbox" name="tta1" value="Beroperasi/Bekerja Tanpa Otoritas" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Beroperasi/Bekerja Tanpa Otoritas</td>
            </tr>
            <tr>
              <?php if(in_array("Memperbaiki peralatan dlm keadaan beroperasi", $checklist)){?>
              <td> <input type="checkbox" checked name="tta2" value="Memperbaiki peralatan dlm keadaan beroperasi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta2" value="Memperbaiki peralatan dlm keadaan beroperasi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Memperbaiki peralatan dlm keadaan beroperasi</td>
            </tr>
            <tr>
              <?php if(in_array("Mabuk,Bercanda,main-main dan sembrono", $checklist)){?>
              <td> <input type="checkbox" checked name="tta3" value="Mabuk,Bercanda,main-main dan sembrono" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta3" value="Mabuk,Bercanda,main-main dan sembrono" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Mabuk,Bercanda,main-main dan sembrono</td>
            </tr>
            <tr>
              <?php if(in_array("Tidak memakai APD", $checklist)){?>
              <td> <input checked type="checkbox" name="tta4" value="Tidak memakai APD" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta4" value="Tidak memakai APD" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Tidak memakai APD</td>
            </tr>
            <tr>
              <?php if(in_array("Memakai peralatan rusak", $checklist)){?>
              <td> <input checked type="checkbox" name="tta5" value="Memakai peralatan rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta5" value="Memakai peralatan rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Memakai peralatan rusak</td>
            </tr>
            <tr>
              <?php if(in_array("Terlalu memaksakan diri", $checklist)){?>
              <td> <input type="checkbox" checked name="tta6" value="Terlalu memaksakan diri" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta6" value="Terlalu memaksakan diri" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Terlalu memaksakan diri</td>
            </tr>
            <tr>
              <?php if(in_array("Bekerja tidak sesuai kompetensi", $checklist)){?>
              <td> <input type="checkbox" checked name="tta7" value="Bekerja tidak sesuai kompetensi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta7" value="Bekerja tidak sesuai kompetensi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja tidak sesuai kompetensi</td>
            </tr>
            <tr>
              <?php if(in_array("Posisi mengangkat yang salah", $checklist)){?>
              <td> <input type="checkbox" checked name="tta8" value="Posisi mengangkat yang salah" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta8" value="Posisi mengangkat yang salah" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Posisi mengangkat yang salah</td>
            </tr>
            <tr>
              <?php if(in_array("Penggunaan peralatan yang tidak sesuai", $checklist)){?>
              <td> <input type="checkbox" checked name="tta9" value="Penggunaan peralatan yang tidak sesuai" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta9" value="Penggunaan peralatan yang tidak sesuai" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Penggunaan peralatan yang tidak sesuai</td>
            </tr>
            <tr>
              <?php if(in_array("Bekerja tidak sesuai prosedur", $checklist)) {?>
              <td> <input type="checkbox" checked name="tta10" value="Bekerja tidak sesuai prosedur" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta10" value="Bekerja tidak sesuai prosedur" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja tidak sesuai prosedur</td>
            </tr>
            <tr>
              <?php if(in_array("Bekerja diluar jam kerja", $checklist)) {?>
              <td> <input checked type="checkbox" name="tta11" value="Bekerja diluar jam kerja" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta11" value="Bekerja diluar jam kerja" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja diluar jam kerja</td>
            </tr>
            <tr>
              <?php if(in_array("Bekerja tanpa ijin kerja", $checklist)) {?>
              <td> <input type="checkbox" checked name="tta12" value="Bekerja tanpa ijin kerja" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta12" value="Bekerja tanpa ijin kerja" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja tanpa ijin kerja</td>
            </tr>
          </table>
        </td>
        <td>
          <table>
            <tr>
              <?php if(in_array("Area kerja yang kotor", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb1" value="Area kerja yang kotor" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb1" value="Area kerja yang kotor" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Area kerja yang kotor</td>
            </tr>
            <tr>
              <?php if(in_array("Pelindung/Pembatas tidak ada/layak", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb2" value="Pelindung/Pembatas tidak ada/layak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb2" value="Pelindung/Pembatas tidak ada/layak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Pelindung/Pembatas tidak ada/layak</td>
            </tr>
            <tr>
              <?php if(in_array("Mesin / peralatan yang rusak", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb3" value="Mesin / peralatan yang rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
                <td> <input type="checkbox" name="ttb3" value="Mesin / peralatan yang rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Mesin / peralatan yang rusak</td>
            </tr>
            <tr>
              <?php if(in_array("Alat pelindung mesin yang terbuka", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb4" value="Alat pelindung mesin yang terbuka" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb4" value="Alat pelindung mesin yang terbuka" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Alat pelindung mesin yang terbuka</td>
            </tr>
            <tr>
              <?php if(in_array("Ruang kerja sempit/terbatas", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb5" value="Ruang kerja sempit/terbatas" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb5" value="Ruang kerja sempit/terbatas" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Ruang kerja sempit/terbatas</td>
            </tr>
            <tr>
              <?php if(in_array("Sistem peringatan kurang/Indikator rusaks", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb6" value="Sistem peringatan kurang/Indikator rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb6" value="Sistem peringatan kurang/Indikator rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Sistem peringatan kurang/Indikator rusak</td>
            </tr>
            <tr>
              <?php if(in_array("Paparan kebisingan", $checklist)){?>
              <td> <input type="checkbox" checked name="ttb7" value="Paparan kebisingan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb7" value="Paparan kebisingan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Paparan kebisingan</td>
            </tr>
            <tr>
              <?php if(in_array("Paparan radiasi", $checklist)){?>
              <td> <input checked type="checkbox" name="ttb8" value="Paparan radiasi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb8" value="Paparan radiasi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Paparan radiasi</td>
            </tr>
            <tr>
              <?php if(in_array("Temperatur extrim", $checklist)){?>
              <td> <input checked type="checkbox" name="ttb9" value="Temperatur extrim" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb9" value="Temperatur extrim" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Temperatur extrim</td>
            </tr>
            <tr>
              <?php if(in_array("Penerangan kurang / tidak layak", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttb10" value="Penerangan kurang / tidak layak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb10" value="Penerangan kurang / tidak layak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Penerangan kurang / tidak layak</td>
            </tr>
            <tr>
              <?php if(in_array("Ventilasi tidak layak", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttb11" value="Ventilasi tidak layak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb11" value="Ventilasi tidak layak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Ventilasi tidak layak</td>
            </tr>
          </table>
        </td>
        <td>
          <table>
            <tr>
              <?php if(in_array("Kurangnya pengawasan/kepemimpinan", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc1" value="Kurangnya pengawasan/kepemimpinan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc1" value="Kurangnya pengawasan/kepemimpinan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kurangnya pengawasan/kepemimpinan</td>
            </tr>
            <tr>
              <?php if(in_array("Kurangnya suku cadang", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc2" value="Kurangnya suku cadang" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc2" value="Kurangnya suku cadang" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kurangnya suku cadang</td>
            </tr>
            <tr>
              <?php if(in_array("Kekurangan peralatan", $checklist)){?>
              <td> <input checked type="checkbox" name="ttc3" value="Kekurangan peralatan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc3" value="Kekurangan peralatan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kekurangan peralatan</td>
            </tr>
            <tr>
              <?php if(in_array("Kelengkapan kotak P3K/tandu dsbs", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc4" value="Kelengkapan kotak P3K/tandu dsb" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc4" value="Kelengkapan kotak P3K/tandu dsb" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelengkapan kotak P3K/tandu dsb</td>
            </tr>
            <tr>
              <?php if(in_array("Salah pakai/Salah penggunaan", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc5" value="Salah pakai/Salah penggunaan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc5" value="Salah pakai/Salah penggunaan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Salah pakai/Salah penggunaan</td>
            </tr>
            <tr>
              <?php if(in_array("Kelengkapan sarana kebakaran", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc6" value="Kelengkapan sarana kebakaran" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc6" value="Kelengkapan sarana kebakaran" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelengkapan sarana kebakaran</td>
            </tr>
            <tr>
              <?php if(in_array("Bocor,longgar,hilang,retak atau pecah", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc7" value="Bocor,longgar,hilang,retak atau pecah" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc7" value="Bocor,longgar,hilang,retak atau pecah" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bocor,longgar,hilang,retak atau pecah</td>
            </tr>
            <tr>
              <?php if(in_array("Panas, getaran yang berlebihan", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc8" value="Panas, getaran yang berlebihan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc8" value="Panas, getaran yang berlebihan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Panas, getaran yang berlebihan</td>
            </tr>
            <tr>
              <?php if(in_array("Kebersihan peralatan", $checklist)){?>
              <td> <input type="checkbox" checked name="ttc9" value="Kebersihan peralatan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc9" value="Kebersihan peralatan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kebersihan peralatan</td>
            </tr>
            <tr>
              <?php if(in_array("Kelayakan Crane, Forklift dll/sertifikat", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttc10" value="Kelayakan Crane, Forklift dll/sertifikat" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc10" value="Kelayakan Crane, Forklift dll/sertifikat" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelayakan Crane, Forklift dll/sertifikat</td>
            </tr>
            <tr>
              <?php if(in_array("Tersedia MSDS Bahan B3", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttc11" value="Tersedia MSDS Bahan B3" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc11" value="Tersedia MSDS Bahan B3" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Tersedia MSDS Bahan B3</td>
            </tr>
            <tr>
              <?php if(in_array("Kondisi rambu norma K3", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttc12" value="Kondisi rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc12" value="Kondisi rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kondisi rambu norma K3</td>
            </tr>
            <tr>
              <?php if(in_array("Tersedia rambu norma K3", $checklist)) {?>
              <td> <input type="checkbox" checked name="ttc13" value="Tersedia rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc13" value="Tersedia rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Tersedia rambu norma K3</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table width="100%" align="center" style="text-align:center; border:solid thin #000;font-size:12px;border-collapse: collapse;">
      <tr>
        <th style="border: 1px solid black;">No</th>
        <th style="border: 1px solid black;">Temuan Unsafe Act/Condition</th>
        <th style="border: 1px solid black;">Potensi Bahaya</th>
        <th style="border: 1px solid black;" style="border: 1px solid black;">Tindak Lanjut</th>
        <th style="border: 1px solid black;">Deadline</th>
      </tr>

      <?php
      $no = 1;
      for ($i=0; $i < count($temuan); $i++) {
      ?>
      <tr>
      <td style="border: 1px solid black;"><?php echo $no; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><?php echo $temuan[$i]; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><?php echo $potensi[$i]; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><?php echo $tindak[$i]; ?></td>
      <td style="border: 1px solid black;text-align:left;padding-left:10px"><?php echo $batas[$i];$no++; ?></td>
      </tr>
    <?php } ?>
    <?php } ?>
    </table>
    <center>
    <!-- <a href="acc_lap_harian.php"><button type="button" name="button" style="margin-top:20px;border:solid thin #ed2c2f;padding:10px;background:#ed2c2f;color:#fff;width:60%">Kembali</button></a></center> -->
  </body>
</html>
