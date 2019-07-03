<?php
include "proses/koneksi.php";
$kode     = $_REQUEST['id'];
$bulanan = mysqli_query($connect, "SELECT * FROM `bulanan` WHERE `Id` = '$kode'");
while ($data = mysqli_fetch_array($bulanan)) {
      $kontraktor   = $data['kontraktor'];
      $id_bulanan   = $data['id'];
      $dokumen      = $data['dokumen'];
      $periode      = $data['periode'];
      $tenaga_kerja = json_decode($data['tenaga_kerja']);
      $jam_ker_norm = json_decode($data['jam_kerja_normal']);
      $jam_ker_over = json_decode($data['jam_kerja_overtime']);
      $hari_kerja   = json_decode($data['hari_kerja']);
      $nearmiss     = json_decode($data['nearmiss']);
      $incident     = json_decode($data['incident']);
      $accident_rin = json_decode($data['accident_ringan']);
      $accident_ber = json_decode($data['accident_berat']);
      $accident_fat = json_decode($data['accident_fatal']);
      $rusak_pro    = $data['kerusakan_property'];
      $hilang_kerja = $data['hilang_hari_kerja'];
      $biaya_obat   = $data['biaya_pengobatan'];
      $id_program   = $data['id_program_k3'];

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
  <body style="font-size:12px;">
    <table width="100%" align="center" style="text-align:center;">
      <tr>
        <td rowspan="2" width="20%">
          <table width="100%">
            <tr>
              <td colspan="2"><img src="img/logo.png" alt="" width="40%" style="padding:20px;"></td>
            </tr>
          </table>
        </td>
        <td style="padding-top:10px;font-weight:500;font-size:14px;font-weight:800">LAPORAN BULANAN SAFETY<h4 style="margin-top:0px;">PT SEMEN INDONESIA (PERSERO) TBK.</h4></td>
        <td rowspan="2" width="20%"><img src="img/k3.png" alt="" width="40%" style="padding:20px"></td>
      </tr>
    </table>
    <div class="" style="width:100%;margin-top:-10px;;">
      <div class="" style="width:100%; float:left;">
        <table cellpadding="5px" width="50%" style="padding:3px;border-collapse: collapse;">
          <tr>
            <td style="width:10%;">Dokumen</td>
            <td style="width:50%">: <?php echo $dokumen; ?></td>
          </tr>
          <tr>
            <td style="">Kontraktor </td>
            <td style="">: <?php echo $kontraktor ?></td>
          </tr>
          <tr>
            <td>Periode</td>
            <td>: <?php echo $periode; ?></td>
          </tr>
        </table>

        <div style="width:50%;float:left;margin-top:20px">
          <table cellpadding="4" width="72%" style="border-collapse: collapse; border:solid thin #000;">
            <tr style="text-align:center;font-weight:800">
              <td rowspan="2" style="border-collapse: collapse; border:solid thin #000;">No</td>
              <td rowspan="2" style="border-collapse: collapse; border:solid thin #000;">Indikator</td>
              <td colspan="2" style="border-collapse: collapse; border:solid thin #000;">Jumlah</td>
              <td rowspan="2" style="border-collapse: collapse; border:solid thin #000;">Total</td>
            </tr>
            <tr style="text-align:center;font-weight:800">
              <td style="border-collapse: collapse; border:solid thin #000;">Induk</td>
              <td style="border-collapse: collapse; border:solid thin #000;">Outsouce</td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">1</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">Tenaga Kerja</td>
              <td style="border-collapse: collapse;text-align:center" width="5%"><?php echo $tenaga_kerja[0]; ?> org</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $tenaga_kerja[1]; ?> org</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $tenaga_kerja[2]; ?> org </td>
            </tr>
            <tr>
              <td width="1%" rowspan="3" style="border-collapse: collapse; border:solid thin #000;">2</td>
              <td width="14%" colspan="4" style="border-collapse: collapse;  border:solid thin #000;">Jam Kerja</td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">Normal</td>
              <td style="border-collapse: collapse;text-align:center;  border:solid thin #000;" width="5%"><?php echo $jam_ker_norm[0]; ?> jam</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $jam_ker_norm[1]; ?> jam</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $jam_ker_norm[2]; ?>  </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">Overtime</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"><?php echo $jam_ker_over[0]; ?> jam</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $jam_ker_over[1]; ?> jam</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $jam_ker_over[2]; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">3</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">Hari Kerja</td>
              <td style="border-collapse: collapse;text-align:center" width="5%"><?php echo $hari_kerja[0]; ?> hari</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $hari_kerja[1]; ?> hari</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $hari_kerja[2]; ?>  </td>
            </tr>
            <tr>
              <td width="1%" rowspan="8" style="border-collapse: collapse; border:solid thin #000;">4</td>
              <td width="14%" colspan="4" style="border-collapse: collapse;  border:solid thin #000;">Kejadian</td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">A. Nearmiss</td>
              <td style="border-collapse: collapse;text-align:center;  border:solid thin #000;" width="5%"><?php echo $nearmiss[0]; ?>  </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $nearmiss[1]; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $nearmiss[2]; ?>   </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">B. Incident</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"><?php echo $incident[0]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $incident[1]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $incident[2]; ?> </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">C. Accident</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $ringan_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $ringan_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">C1. Ringan</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"><?php echo $accident_rin[0]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $accident_rin[1]; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $accident_rin[2]; ?>  </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">c2. Berat</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"><?php echo $accident_ber[0]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $accident_ber[1]; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $accident_ber[2]; ?> </td>
            </tr>
            <tr>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">C3. Fatal</td>
              <td style="border-collapse: collapse;text-align:center;border:solid thin #000;"><?php echo $accident_fat[0]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $accident_fat[1]; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $accident_fat[2]; ?>  </td>
            </tr>
          </table>
          <table cellpadding="4" width="72%" style="border-collapse: collapse;margin-top:20px;">
            <tr>
              <td colspann="4">Kerugian</td>
            </tr>
            <tr>
              <td style="border-collapse: collapse; width:1%">1</td>
              <td style="border-collapse: collapse; width:50%" >Kerusakan Property / Asset</td>
              <td>: <?php echo $rusak_pro; ?></td>
            </tr>
            <tr>
              <td style="border-collapse: collapse;">2</td>
              <td style="border-collapse: collapse;">Hilang Hari Kerja</td>
              <td>: <?php echo $hilang_kerja; ?></td>
            </tr>
            <tr>
              <td style="border-collapse: collapse;">3</td>
              <td style="border-collapse: collapse;">Biaya Pengobatan / Penanganan Medis</td>
              <td>: <?php echo $biaya_obat; ?></td>
            </tr>
          </table>
        </div>
        <div style="width:50%;float:right;margin-top:20px">
          <table cellpadding="4" width="72%" style="border-collapse: collapse; border:solid thin #000;">
            <tr style="text-align:center;font-weight:800">
              <td style="border-collapse: collapse; border:solid thin #000;">No</td>
              <td style="border-collapse: collapse; border:solid thin #000;">Program K3</td>
              <td style="border-collapse: collapse; border:solid thin #000;">Jumlah</td>
              <td style="border-collapse: collapse; border:solid thin #000;">Uraian Kegiatan</td>
              <td style="border-collapse: collapse; border:solid thin #000;">Tanggal</td>
            </tr>
            <?php
              $no = 1;
              $aktivitas      = mysqli_query($connect, "SELECT * FROM `aktivitas_bulanan` WHERE `id_bulanan` = '$id_bulanan'");
              while ($data1   = mysqli_fetch_array($aktivitas)) {
                     $program = json_decode($data1['program']);
                     $jumlah  = json_decode($data1['jumlah']);
                     $uraian  = json_decode($data1['uraian']);
                     $tanggal = json_decode($data1['tanggal']);
              }
              for ($i=0; $i < count($program); $i++) {
              ?>

            <tr style="text-align:center;">
              <td style="border-collapse: collapse; border:solid thin #000;"><?php echo $no;$no++; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;"><?php echo $program[$i]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;"><?php echo $jumlah[$i]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;"><?php echo $uraian[$i]; ?></td>
              <td style="border-collapse: collapse; border:solid thin #000;"><?php echo $tanggal[$i]; ?></td>
            </tr>
          <?php  } ?>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
<?php } ?>
