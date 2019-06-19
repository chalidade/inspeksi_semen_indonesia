<?php
  session_start();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Laporan Harian</title>
    <style media="screen">
      td {vertical-align:top;}

    </style>
  </head>
  <body>
    <table width="100%" align="center" style="text-align:center; border:solid thin #000">
      <tr>
        <td rowspan="2" width="20%"> <img src="img/logo.png" alt="" width="70%"> </td>
        <td>SEKSI KESELAMATAN KERJA TUBAN</td>
        <td rowspan="2" width="10%">R/538/001</td>
      </tr>
      <tr>
        <td>
          <h3 style="margin-top:0px;"><u>LAPORAN HARIAN KESELAMATAN</u></h3>
          <table width="80%" align="center" style="text-align:left;margin-top:-15px">
            <tr>
              <td width="40%">Tanggal</td>
              <td>: <?php echo $_SESSION['date']; ?></td>
            </tr>
            <tr>
              <td>Shift</td>
              <td>: <?php echo $_SESSION['shift']; ?></td>
            </tr>
            <tr>
              <td>Uraian Pekerjaan / Pihak kedua</td>
              <td>: <?php echo $_SESSION['uk']; ?></td>
            </tr>
            <tr>
              <td>Lokasi</td>
              <td>: <?php echo $_SESSION['lokasi']; ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <table width="100%" align="center" style="text-align:left; border:solid thin #000;font-size:11px;padding:10px;">
      <tr>
        <td><h4>Tindakan Tidak Aman <br>(Sikap / Perilaku)</h4></td>
        <td><h4>Kondisi Tidak Aman <br>(Mesin, Lingkungan)</h4></td>
        <td><h4>Faktor Kerja <br> (Bahan, Rambu K3, dan Lain-lain)</h4></td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <?php if ($_SESSION['tta1'] != '') {?>
                <td> <input type="checkbox" checked name="tta1" value="Beroperasi/Bekerja Tanpa Otoritas" style="margin-top: 0px;"> </td>
              <?php } else { ?>
                <td> <input type="checkbox" name="tta1" value="Beroperasi/Bekerja Tanpa Otoritas" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Beroperasi/Bekerja Tanpa Otoritas</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta2'] != '') {?>
              <td> <input type="checkbox" checked name="tta2" value="Memperbaiki peralatan dlm keadaan beroperasi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta2" value="Memperbaiki peralatan dlm keadaan beroperasi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Memperbaiki peralatan dlm keadaan beroperasi</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta3'] != '') {?>
              <td> <input type="checkbox" checked name="tta3" value="Mabuk,Bercanda,main-main dan sembrono" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta3" value="Mabuk,Bercanda,main-main dan sembrono" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Mabuk,Bercanda,main-main dan sembrono</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta4'] != '') {?>
              <td> <input checked type="checkbox" name="tta4" value="Tidak memakai APD" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta4" value="Tidak memakai APD" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Tidak memakai APD</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta5'] != '') {?>
              <td> <input checked type="checkbox" name="tta5" value="Memakai peralatan rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta5" value="Memakai peralatan rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Memakai peralatan rusak</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta6'] != '') {?>
              <td> <input type="checkbox" checked name="tta6" value="Terlalu memaksakan diri" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta6" value="Terlalu memaksakan diri" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Terlalu memaksakan diri</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta7'] != '') {?>
              <td> <input type="checkbox" checked name="tta7" value="Bekerja tidak sesuai kompetensi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta7" value="Bekerja tidak sesuai kompetensi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja tidak sesuai kompetensi</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta8'] != '') {?>
              <td> <input type="checkbox" checked name="tta8" value="Posisi mengangkat yang salah" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta8" value="Posisi mengangkat yang salah" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Posisi mengangkat yang salah</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta9'] != '') {?>
              <td> <input type="checkbox" checked name="tta9" value="Penggunaan peralatan yang tidak sesuai" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta9" value="Penggunaan peralatan yang tidak sesuai" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Penggunaan peralatan yang tidak sesuai</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta10'] != '') {?>
              <td> <input type="checkbox" checked name="tta10" value="Bekerja tidak sesuai prosedur" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta10" value="Bekerja tidak sesuai prosedur" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja tidak sesuai prosedur</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta11'] != '') {?>
              <td> <input checked type="checkbox" name="tta11" value="Bekerja diluar jam kerja" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="tta11" value="Bekerja diluar jam kerja" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bekerja diluar jam kerja</td>
            </tr>
            <tr>
              <?php if ($_SESSION['tta12'] != '') {?>
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
              <?php if ($_SESSION['ttb1'] != '') {?>
              <td> <input type="checkbox" checked name="ttb1" value="Area kerja yang kotor" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb1" value="Area kerja yang kotor" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Area kerja yang kotor</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb2'] != '') {?>
              <td> <input type="checkbox" checked name="ttb2" value="Pelindung/Pembatas tidak ada/layak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb2" value="Pelindung/Pembatas tidak ada/layak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Pelindung/Pembatas tidak ada/layak</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb3'] != '') {?>
              <td> <input type="checkbox" checked name="ttb3" value="Mesin / peralatan yang rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
                <td> <input type="checkbox" name="ttb3" value="Mesin / peralatan yang rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Mesin / peralatan yang rusak</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb4'] != '') {?>
              <td> <input type="checkbox" checked name="ttb4" value="Alat pelindung mesin yang terbuka" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb4" value="Alat pelindung mesin yang terbuka" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Alat pelindung mesin yang terbuka</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb5'] != '') {?>
              <td> <input type="checkbox" checked name="ttb5" value="Ruang kerja sempit/terbatas" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb5" value="Ruang kerja sempit/terbatas" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Ruang kerja sempit/terbatas</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb6'] != '') {?>
              <td> <input type="checkbox" checked name="ttb6" value="Sistem peringatan kurang/Indikator rusak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb6" value="Sistem peringatan kurang/Indikator rusak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Sistem peringatan kurang/Indikator rusak</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb7'] != '') {?>
              <td> <input type="checkbox" checked name="ttb7" value="Paparan kebisingan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb7" value="Paparan kebisingan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Paparan kebisingan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb8'] != '') {?>
              <td> <input checked type="checkbox" name="ttb8" value="Paparan radiasi" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb8" value="Paparan radiasi" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Paparan radiasi</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb9'] != '') {?>
              <td> <input checked type="checkbox" name="ttb9" value="Temperatur extrim" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb9" value="Temperatur extrim" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Temperatur extrim</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb10'] != '') {?>
              <td> <input type="checkbox" checked name="ttb10" value="Penerangan kurang / tidak layak" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttb10" value="Penerangan kurang / tidak layak" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Penerangan kurang / tidak layak</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttb11'] != '') {?>
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
              <?php if ($_SESSION['ttc1'] != '') {?>
              <td> <input type="checkbox" checked name="ttc1" value="Kurangnya pengawasan/kepemimpinan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc1" value="Kurangnya pengawasan/kepemimpinan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kurangnya pengawasan/kepemimpinan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc2'] != '') {?>
              <td> <input type="checkbox" checked name="ttc2" value="Kurangnya suku cadang" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc2" value="Kurangnya suku cadang" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kurangnya suku cadang</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc3'] != '') {?>
              <td> <input checked type="checkbox" name="ttc3" value="Kekurangan peralatan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc3" value="Kekurangan peralatan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kekurangan peralatan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc4'] != '') {?>
              <td> <input type="checkbox" checked name="ttc4" value="Kelengkapan kotak P3K/tandu dsb" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc4" value="Kelengkapan kotak P3K/tandu dsb" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelengkapan kotak P3K/tandu dsb</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc5'] != '') {?>
              <td> <input type="checkbox" checked name="ttc5" value="Salah pakai/Salah penggunaan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc5" value="Salah pakai/Salah penggunaan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Salah pakai/Salah penggunaan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc6'] != '') {?>
              <td> <input type="checkbox" checked name="ttc6" value="Kelengkapan sarana kebakaran" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc6" value="Kelengkapan sarana kebakaran" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelengkapan sarana kebakaran</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc7'] != '') {?>
              <td> <input type="checkbox" checked name="ttc7" value="Bocor,longgar,hilang,retak atau pecah" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc7" value="Bocor,longgar,hilang,retak atau pecah" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Bocor,longgar,hilang,retak atau pecah</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc8'] != '') {?>
              <td> <input type="checkbox" checked name="ttc8" value="Panas, getaran yang berlebihan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc8" value="Panas, getaran yang berlebihan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Panas, getaran yang berlebihan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc9'] != '') {?>
              <td> <input type="checkbox" checked name="ttc9" value="Kebersihan peralatan" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc9" value="Kebersihan peralatan" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kebersihan peralatan</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc10'] != '') {?>
              <td> <input type="checkbox" checked name="ttc10" value="Kelayakan Crane, Forklift dll/sertifikat" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc10" value="Kelayakan Crane, Forklift dll/sertifikat" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kelayakan Crane, Forklift dll/sertifikat</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc11'] != '') {?>
              <td> <input type="checkbox" checked name="ttc11" value="Tersedia MSDS Bahan B3" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc11" value="Tersedia MSDS Bahan B3" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Tersedia MSDS Bahan B3</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc12'] != '') {?>
              <td> <input type="checkbox" checked name="ttc12" value="Kondisi rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } else { ?>
              <td> <input type="checkbox" name="ttc12" value="Kondisi rambu norma K3" style="margin-top: 0px;"> </td>
              <?php } ?>
              <td>Kondisi rambu norma K3</td>
            </tr>
            <tr>
              <?php if ($_SESSION['ttc13'] != '') {?>
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
        <th>No</th>
        <th>Temuan Unsafe Act/Condition</th>
        <th>Potensi Bahaya</th>
        <th>Tindak Lanjut</th>
        <th>Deadline</th>
      </tr>
        <?php
        $no   = 1;
          for ($i=0; $i < 15; $i++) {
            if ($_SESSION['tta'.$i] != '') {
        ?>
        <tr>
        <td style="border: 1px solid black;"><?php echo $no; ?></td>
        <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tta'.$i]; ?></td>
        <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['potensia'.$i]; ?></td>
        <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tindaka'.$i]; ?></td>
        <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tempoa'.$i];$no++; ?></td>
      </tr>
    <?php }} ?>
    <?php
      for ($i=0; $i < 15; $i++) {
        if ($_SESSION['ttb'.$i] != '') {
    ?>
    <tr>
    <td style="border: 1px solid black;"><?php echo $no; ?></td>
    <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['ttb'.$i]; ?></td>
    <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['potensib'.$i]; ?></td>
    <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tindakb'.$i]; ?></td>
    <td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tempob'.$i];$no++; ?></td>
  </tr>
<?php }} ?>
<?php
  for ($i=0; $i < 15; $i++) {
    if ($_SESSION['ttc'.$i] != '') {
?>
<tr>
<td style="border: 1px solid black;"><?php echo $no; ?></td>
<td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['ttc'.$i]; ?></td>
<td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['potensic'.$i]; ?></td>
<td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tindakc'.$i]; ?></td>
<td style="border: 1px solid black;text-align:left"><?php echo $_SESSION['tempoc'.$i];$no++; ?></td>
</tr>
<?php }} ?>
    </table>
    <center>
    <a href="acc_lap_harian.php"><button type="button" name="button" style="margin-top:20px;border:solid thin #ed2c2f;padding:10px;background:#ed2c2f;color:#fff;width:60%">Kembali</button></a></center>
  </body>
</html>
