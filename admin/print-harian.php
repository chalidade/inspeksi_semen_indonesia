<?php
  include "proses/koneksi.php";
  $id          = $_REQUEST['id'];
  $show        = mysqli_query($connect, "SELECT * FROM `harian` WHERE `id` = '$id'");
  while ($data = mysqli_fetch_array($show)) {
    $aktivitas = $data['id_aktivitas'];
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
    <style media="screen">
    /* td { border: thin solid black } */
    </style>
  </head>
  <body onload="window.print()" style="border:solid thin #000">
    <table width="100%" align="center" style="text-align:center; border:solid thin #000">
      <tr>
        <td rowspan="2" width="20%">
          <table width="100%">
            <tr>
              <td><img src="img/logo.png" alt="" width="100%" style="padding:20px;"></td>
              <td><img src="img/k3.png" alt="" width="50%" style="padding:20px"></td>
            </tr>
          </table>
        </td>
        <td style="padding-top:10px;font-weight:500;font-size:14px">SEKSI KESELAMATAN KERJA TUBAN</td>
        <td rowspan="2" width="20%"><img src="img/logo.png" alt="" width="50%" style="padding:20px"></td>
      </tr>
      <tr>
        <td>
          <h3 style="margin-top:-30px;"><u>LAPORAN HARIAN SAFETY</u></h3>
          <table width="80%" align="center" style="text-align:left;margin-top:-15px;padding-bottom:20px;">
            <tr>
              <td width="40%">Doc No</td>
              <td>: <?php echo $data['id']; ?></td>
            </tr>
            <tr>
              <td>Tanggal</td>
              <td>: <?php echo $data['date']; ?></td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <div class="" style="width:100%;height:150px;margin-top:0px;">
      <div class="" style="width:50%; float:left">
        <table width="100%" style="padding:3px; border:solid thin #000;border-collapse: collapse;">
          <tr>
            <td style="width:30%; border:solid thin #000;">Pekerjaan </td>
            <td style="border:solid thin #000">: <?php echo $data['pekerjaan']; ?></td>
          </tr>
          <tr>
            <td style="border:solid thin #000">No Pekerjaan </td>
            <td style="border:solid thin #000">: <?php echo $data['no']; ?></td>
          </tr>
          <tr>
            <td style="border:solid thin #000">Hari Kerja </td>
            <td style="border:solid thin #000">: <?php echo $data['hari_kerja']; ?></td>
          </tr>
          <tr>
            <td style="border:solid thin #000">Total Pekerja </td>
            <td style="border:solid thin #000">: <?php echo $data['total_pekerja']; ?></td>
          </tr>
        </table>
      </div>
      <div class="" style="width:48%;float:right;padding:0px 10px 0px 0px;">
        <table style="padding:3px;border-collapse: collapse;">
          <tr>
            <td colspan="2">Jenis Kegiatan</td>
          </tr>
          <tr>
            <td>
              <?php if ($data['jenis_kegiatan'] == 'Inspeksi') { ?>
                <input type="checkbox" name="" value="" checked>
              <?php } else { ?>
                <input type="checkbox" name="" value="">
              <?php } ?>
            </td>
            <td>Inspeksi</td>
          </tr>
          <tr>
            <td>
              <?php if ($data['jenis_kegiatan'] == 'Corectif / Trouble Shooting') { ?>
                <input type="checkbox" name="" value="" checked>
              <?php } else { ?>
                <input type="checkbox" name="" value="">
              <?php } ?>
            </td>
            <td>Corektif / Troubleshooting</td>
          </tr>
          <!-- <tr>
            <td> <input required type="radio" name="" value=""> </td>
            <td>Other : <input required type="text" style="border: none;" name="" value=""> </td>
          </tr> -->
        </table>
      </div>
    </div>
    <div class="width:100%" style="margin-top:-70px">
      <table width="100%" style="text-align:center;border-collapse: collapse; border:solid thin #000;">
        <tr>
          <td colspan="6" style="background:#c9fbf5e6;color:#000;">
            <h3 style="text-align:center;line-height:0px;text-transform:uppercase">Tabel Aktivitas</h3>
          </td>
        </tr>
        <tr style="text-align:center">
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">No</th>
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">Uraian Pekerjaan</th>
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">Identifikasi Bahaya</th>
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">Dampak</th>
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">Tindakan Kecelakaan</th>
          <th style="border:solid thin #000;text-align:left;padding-left:5px;">Keterangan</th>
        </tr>
        <?php
          $no = 1;
          $a  = mysqli_query($connect, "SELECT * FROM `aktivitas` WHERE `id_aktivitas` = '$aktivitas'");
          while ($aktivitas = mysqli_fetch_array($a)) {
         ?>
        <tr>
          <td style="border:solid thin #000"><?php echo $no;$no++; ?></td>
          <td style="border:solid thin #000;text-align:left;padding-left:5px;"><?php echo $aktivitas['pekerjaan']; ?></td>
          <td style="border:solid thin #000;text-align:left;padding-left:5px;"><?php echo $aktivitas['bahaya']; ?></td>
          <td style="border:solid thin #000;text-align:left;padding-left:5px;"><?php echo $aktivitas['dampak']; ?></td>
          <td style="border:solid thin #000;text-align:left;padding-left:5px;"><?php echo $aktivitas['pencegahan']; ?></td>
          <td style="border:solid thin #000;text-align:left;padding-left:5px;"><?php echo $aktivitas['keterangan']; ?></td>
        </tr>
      <?php } ?>
      </table>
    </div>
<div class="" style="width:100%;margin-top:0px;">
    <div style="width:50%;float:left">
      <table border="1" style="width:100%;text-align:center;border-collapse: collapse; border:solid thin #000;">
        <tr>
          <td colspan="4" style="text-align:center;line-height:0px;"><h3>Kejadian</h3></td>
        </tr>
        <tr>
          <td style="border:solid thin #000"></td>
          <td style="border:solid thin #000">Nearmiss</td>
          <td style="border:solid thin #000">Incident</td>
          <td style="border:solid thin #000">Accident</td>
        </tr>
        <tr>
          <td style="border:solid thin #000">Ringan</td>
          <td style="border:solid thin #000"><?php echo $data['nr1']; ?></td>
          <td style="border:solid thin #000"><?php echo $data['nr2']; ?></td>
          <td style="border:solid thin #000"><?php echo $data['nr3']; ?></td>
        </tr>
        <tr>
          <td> Berat</td>
          <td><?php echo $data['ic1']; ?></td>
          <td><?php echo $data['ic2']; ?></td>
          <td><?php echo $data['ic3']; ?></td>
        </tr>
        <tr>
          <td>Fatal</td>
          <td></td>
          <td></td>
          <td><?php echo $data['fat']; ?></td>
        </tr>
      </table>
    </div>

    <div class="width:50%; float:right">
      <table border="1" style="width:50%;border-collapse: collapse; border:solid thin #000;">
        <tr>
          <td colspan="6" style="text-align:center;line-height:0px;border:solid thin #000"><h3>Jam Kerja</h3></td>
        </tr>
        <tr style="text-align:center">
          <td colspan="3" style="border:solid thin #000;">Normal</td>
          <td colspan="3" style="border:solid thin #000;">Overtime</td>
        </tr>
        <tr>
          <td width="30%" style="border:solid thin #000;padding-left:10px;">Jumlah Pekerja</td>
          <td width="10%" style="border:solid thin #000;text-align:center"><?php echo $data['jum_pekerja1']; ?></td>
          <td style="border:solid thin #000;padding-left:10px;">Org</td>
          <td width="30%" style="border:solid thin #000;padding-left:10px;">Jumlah Pekerja</td>
          <td width="10%" style="border:solid thin #000;text-align:center"><?php echo $data['jum_pekerja2']; ?></td>
          <td style="border:solid thin #000;padding-left:10px;">Org</td>
        </tr>
        <tr>
          <td style="border:solid thin #000;padding-left:10px;">Jam Kerja Efektif</td>
          <td style="border:solid thin #000;text-align:center"><?php echo $data['jam_efektif1']; ?></td>
          <td style="border:solid thin #000;padding-left:10px;">jam</td>
          <td style="border:solid thin #000;padding-left:10px;">Jam Lembur</td>
          <td style="border:solid thin #000;text-align:center"><?php echo $data['jam_efektif2']; ?></td>
          <td style="border:solid thin #000;padding-left:10px;">jam</td>
        </tr>
        <tr>
          <td style="border:solid thin #000;padding-left:10px;">Jam Kerja Normal</td>
          <td style="border:solid thin #000;text-align:center"><?php echo $data['jam_normal']; ?></td>
          <td style="border:solid thin #000;padding-left:10px;">jam</td>
          <td style="border:solid thin #000;padding-left:10px;"></td>
          <td style="border:solid thin #000;text-align:center"></td>
          <td style="border:solid thin #000;padding-left:10px;"></td>
        </tr>
      </table>
    </div>
  </div>

  </body>
</html>
<?php } ?>
