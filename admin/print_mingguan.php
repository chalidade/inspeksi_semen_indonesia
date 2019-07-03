<?php
include "proses/koneksi.php";
$kode     = $_REQUEST['id'];
$mingguan = mysqli_query($connect, "SELECT * FROM `mingguan` WHERE `Id` = '$kode'");
while ($data = mysqli_fetch_array($mingguan)) {
       $id              = $data['Id'];
       $no              = $data['no'];
       $jenis_pekerjaan = $data['jenis_pekerjaan'];
       $no_kerja        = $data['no_pekerjaan'];
       $minggu_ke       = $data['minggu_ke'];
       $tahun_ke        = $data['tahun_ke'];
       $progress        = $data['progress_pekerjaan'];
       $masa_mulai_kerja= $data['masa_kerja_mulai'];
       $masa_akhir_kerja= $data['masa_kerja_akhir'];
       $hr_kerja_bln_ini= $data['hari_kerja_bulan_ini'];
       $jml_jam_kerja   = $data['jumlah_jam_kerja'];
       $tot_berlangsung = $data['total_har_kerja_berlangsung'];
       $total_jam_kerja = $data['total_jam_kerja'];
       $data_man_induk  = $data['data_man_power_induk'];
       $data_man_out    = $data['data_man_power_outsource'];
       $temuan_ua       = $data['temuan_unsafe_action'];
       $close_ua        = $data['close_unsafe_action'];
       $total_ua        = $data['total_unsafe_action'];
       $temuan_uc       = $data['temuan_unsafe_condition'];
       $close_uc        = $data['colse_unsafe_condition']; //Typo
       $total_uc        = $data['total_unsafe_condition'];
       $nearmiss_jumlah = $data['nearmiss_jumlah'];
       $nearmiss_total  = $data['nearmiss_total'];
       $p3_jumlah       = $data['p3_jumlah'];
       $p3_total        = $data['p3_total'];
       $ringan_jumlah   = $data['ringan_jumlah'];
       $ringan_total    = $data['ringan_total'];
       $berat_jumlah    = $data['berat_jumlah'];
       $berat_total     = $data['berat_total'];
       $fatality_jumlah = $data['fatality_jumlah'];
       $fatality_total  = $data['fatality_total'];
       $rusak_aset_jum  = $data['kerusakan_aset_jumlah'];
       $rusak_aset_tot  = $data['kerusakan_aset_total'];
       $kebakaran_jumlah= $data['kebakaran_jumlah'];
       $kebakaran_total = $data['kebakaran_total'];
       $kerusakan_prop  = $data['kerusakan_property'];
       $hilang_hr_kerja = $data['hilang_hari_kerja'];
       $biaya_pengobatan= $data['biaya_pengobatan'];
       $keterangan      = $data['keterangan'];
       $pt              = $data['pt'];
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
  <body onload="window.print()" style="font-size:12px;">
    <table width="100%" align="center" style="text-align:center;">
      <tr>
        <td rowspan="2" width="20%">
          <table width="100%">
            <tr>
              <td><img src="img/logo.png" alt="" width="100%" style="padding:20px;"></td>
              <td><img src="img/k3.png" alt="" width="50%" style="padding:20px"></td>
            </tr>
          </table>
        </td>
        <td style="padding-top:10px;font-weight:500;font-size:14px;font-weight:800">LAPORAN MINGGUAN SAFETY OFFICIER KONTRAKTOR<h4 style="margin-top:0px;">PT SEMEN INDONESIA (PERSERO) TBK.<br>KONTRAKTOR : <font style="text-transform:uppercase"><?php echo $pt; ?></font></h4></td>
        <td rowspan="2" width="20%"><img src="img/logo.png" alt="" width="50%" style="padding:20px"></td>
      </tr>
    </table>
    <div class="" style="width:100%;margin-top:-20px;;">
      <div class="" style="width:100%; float:left;">
        <table cellpadding="5px" width="100%" style="padding:3px;border-collapse: collapse;">
          <tr>
            <td style="width:30%;">Jenis Pekerjaan</td>
            <td style="width:10%" colspan="2">: <?php echo $jenis_pekerjaan ?></td>
          </tr>
          <tr>
            <td style="">No Pekerjaan </td>
            <td style="" colspan="2">: <?php echo $no_kerja ?></td>
          </tr>
          <tr>
            <td style="">Minggu ke</td>
            <td style="">: <?php echo $minggu_ke ?></td>
            <td style="width:7%">Tahun</td>
            <td style="">:  <?php echo $tahun_ke?></td>
          </tr>
          <tr>
            <td>Progress Pekerjaan</td>
            <td colspan="2">: <?php echo "50%" ?></td>
          </tr>
          <tr>
            <td style="">Masa Kerja</td>
            <td style="">:  Mulai : <?php echo $masa_mulai_kerja ?></td>
            <td style="width:7%">Akhir</td>
            <td style="">:  <?php echo $masa_akhir_kerja ?></td>
          </tr>
          <tr>
            <td style="">Hari kerja Bulan Ini</td>
            <td style="">: <?php echo $hr_kerja_bln_ini ?> Hari</td>
            <td style="width:20%">Total Kerja Belangsung</td>
            <td style="">:  <?php echo $tot_berlangsung ?> Hari</td>
          </tr>
          <tr>
            <td style="">Jumlah Jam Kerja</td>
            <td style="">: <?php echo $jml_jam_kerja ?> Jam</td>
            <td style="width:20%">Total Jam Kerja</td>
            <td style="">:  <?php echo $total_jam_kerja ?> Jam</td>
          </tr>
          <tr>
            <td style="">Data Man Power</td>
            <td style="">: Induk :<?php echo $data_man_induk ?> Orang</td>
            <td style="width:20%">Outsource</td>
            <td style="">:  <?php echo $data_man_out ?> Orang</td>
          </tr>
        </table>
        <table width="100%" style="border-collapse: collapse;margin-top:20px;">
          <tr>
            <td width="20%" style="border-collapse: collapse; border:solid thin #000;">KRITERIA AKTIFITAS INSPEKSI</td>
            <td width="1%" style="border-collapse: collapse; "></td>
            <td style="background:red;border-collapse: collapse; border:solid thin #000;text-align:center" width="10%">TEMUAN</td>
            <td style="background:green;border-collapse: collapse; border:solid thin #000;text-align:center" width="10%">CLOSE</td>
            <td style="background:yellow;border-collapse: collapse; border:solid thin #000;text-align:center" width="10%">TOTAL </td>
            <td width="49%"></td>
            <!-- <td rowspan="4">* Bukti temuan unsafe action & condition harap untuk direkap pada lampiran</td> -->
          </tr>
          <tr>
            <td width="20%" style="border-collapse: collapse; border:solid thin #000;">Unsafe Action</td>
            <td width="1%" style="border-collapse: collapse;text-align:cebter">:</td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $temuan_ua; ?></td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $close_ua; ?></td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $total_ua; ?> </td>
            <td width="49%"></td>
            <!-- <td rowspan="4">* Bukti temuan unsafe action & condition harap untuk direkap pada lampiran</td> -->
          </tr>
          <tr>
            <td width="20%" style="border-collapse: collapse; border:solid thin #000;">Unsafe Condition</td>
            <td width="1%" style="border-collapse: collapse;text-align:cebter">:</td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $temuan_uc; ?></td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $close_uc; ?></td>
            <td style="border-collapse: collapse; border:solid thin #000;text-align:center" width="10%"><?php echo $total_uc; ?> </td>
            <td width="49%"></td>
            <!-- <td rowspan="4">* Bukti temuan unsafe action & condition harap untuk direkap pada lampiran</td> -->
          </tr>
        </table>

        <div style="width:50%;float:left;margin-top:20px">
          <table cellpadding="4" width="72%" style="border-collapse: collapse; border:solid thin #000;">
            <tr style="background:aqua;">
              <td colspan="2"><b>KEJADIAN</b></td>
              <td></td>
              <td>JML</td>
              <td>TOTAL</td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">1</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">NEARMISS</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $nearmiss_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $nearmiss_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">2</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">P3K / FIRST AID</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $p3_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $p3_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">3</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">RINGAN</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $ringan_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $ringan_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">4</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">BERAT</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $berat_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $berat_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">5</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">FATALITY</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $fatality_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $fatality_jumlah; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">6</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">KERUSAKAN ASET</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $rusak_aset_tot; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $rusak_aset_jum; ?>  </td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse; border:solid thin #000;">7</td>
              <td width="14%" style="border-collapse: collapse;  border:solid thin #000;">KEBAKARAN</td>
              <td style="border-collapse: collapse;text-align:center" width="1%">:</td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"> <?php echo $kebakaran_total; ?> </td>
              <td style="border-collapse: collapse; border:solid thin #000;" width="5%"><?php echo $kebakaran_jumlah; ?>  </td>
            </tr>

          </table>
        </div>
        <div style="width:50%;float:right;">
          <table width="100%" style="border-collapse: collapse">
            <tr>
              <td colspan="4"> <br>Kerugian yang diakibatkan</b></td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse;">1.</td>
              <td width="20%" style="border-collapse: collapse; ">Kerusakan Property / Aset</td>
              <td style="border-collapse: collapse;" width="10%"><?php echo $kerusakan_prop; ?></td>
              <td style="border-collapse: collapse;" width="10%">Rp</td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse;">2.</td>
              <td width="20%" style="border-collapse: collapse; ">Hilang Hari Kerja</td>
              <td style="border-collapse: collapse;" width="10%"><?php echo $hilang_hr_kerja; ?></td>
              <td style="border-collapse: collapse;" width="10%">Rp</td>
            </tr>
            <tr>
              <td width="1%" style="border-collapse: collapse;">3.</td>
              <td width="20%" style="border-collapse: collapse; ">Biaya Pengobatan / Penanganan Medis</td>
              <td style="border-collapse: collapse;" width="10%"><?php echo $biaya_pengobatan; ?></td>
              <td style="border-collapse: collapse;" width="10%">Rp</td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>
<?php } ?>
