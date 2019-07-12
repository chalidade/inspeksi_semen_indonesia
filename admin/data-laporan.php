<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">LAPORAN</h4>
            <p>DATA LAPORAN </p>
            <center> <a href="data-laporan.php?id=harian">Harian</a> | <a href="data-laporan.php?id=mingguan"> Mingguan </a> | <a href="data-laporan.php?id=bulanan"> Bulanan </a> </center><br>
          </div>
        </div>
        <hr>
        <div class="row" style="font-size:12px;background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <?php
            $id = $_REQUEST['id'];
            if ($id == "harian" || $id == '') {
            $no   = 1;
            ?>
              <div class="col-2">
                No
              </div>
              <div class="col-4">
                Id Laporan
              </div>
              <div class="col-4">
                Tanggal
              </div>
              <div class="col-2">
                Status
              </div>
          </div>
          <?php
            $data = mysqli_query($connect, "SELECT * FROM `harian` ORDER BY `harian`.`nomer` DESC ");
            while ($row=mysqli_fetch_row($data))
              {

           ?>
          <div class="row" style="font-size:12px;border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
            <div class="col-2" style="text-align:center">
              <?php echo $no;$no++; ?>
            </div>
            <div class="col-4">
              <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[1]; ?></font>
              <!-- Modal -->
              <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Detail Laporan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table width="100%">
                        <?php
                          $lap = mysqli_query($connect, "SELECT * FROM `harian` WHERE `id` = '$row[1]'");
                          while ($lapor=mysqli_fetch_row($lap))
                          {
                            $id_harian = $lapor[1];
                         ?>
                        <tr>
                          <td width="35%" style="vertical-align:top;">Id Laporan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[1]; ?></td>
                        </tr>
                        <tr>
                          <td width="35%" style="vertical-align:top;">Kontraktor</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[24]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Tanggal</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[2]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[3]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">No Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[4]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Hari Kerja</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[5]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Total Pekerja</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[6]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Jenis Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[7]; ?></td>
                        </tr>
                      </table>
                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <h3>Aktivitas</h3><hr>
                          <div class="swiper-container">
                              <!-- Additional required wrapper -->
                              <div class="swiper-wrapper">
                                <?php
                                   $aktiv = mysqli_query($connect, "SELECT * FROM `aktivitas` WHERE `id_aktivitas` = '$lapor[8]'");
                                   while ($aktivitas = mysqli_fetch_row($aktiv)) {
                                ?>
                                <div class="swiper-slide">
                                  <table>
                                    <tr>
                                      <td style="vertical-align:top;" width="40%">Pekerjaan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[1]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Bahaya</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[2]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Dampak</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[3]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Pencegahan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[4]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Keterangan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[5]; ?></td>
                                    </tr>
                                  </table>
                                </div>
                                <?php
                                }
                                 ?>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12" style="margin-top:10px">
                          <div class="row">
                            <div class="col-md-12">
                              <table class="table" style="font-size:11px;color:#000">
                                <tr>
                                  <th colspan="4" style="text-align:center;font-size:14px;">KEJADIAN</th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>NEARMISS</th>
                                  <th>INCIDENT</th>
                                  <th>ACCIDENT</th>
                                </tr>
                                  <tr>
                                    <td>RINGAN</td>
                                    <td> <input type="text" name="nr1" value="<?php echo $lapor[9]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"> </td>
                                    <td><input type="text" name="nr2" value="<?php echo $lapor[10]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="nr3" value="<?php echo $lapor[11]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                                  <tr>
                                    <td>BERAT</td>
                                    <td><input type="text" name="ic1" value="<?php echo $lapor[12]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="ic2" value="<?php echo $lapor[13]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="ic3" value="<?php echo $lapor[14]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                                  <tr>
                                    <td>FATAL</td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="text" name="fat" value="<?php echo $lapor[15]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                              </table>
                            </div>
                            <div class="col-md-12">
                              <table class="table table-responsive" style="font-size:11px;color:#000">
                                <tr>
                                  <th colspan="6" style="text-align:center;font-size:14px;">JAM KERJA</th>
                                </tr>
                                <tr>
                                  <th colspan="3" style="text-align:center">NORMAL</th>
                                  <th colspan="3" style="text-align:center">OVERTIME</th>
                                </tr>
                                  <tr>
                                    <td>Jumlah Pekerja</td>
                                    <td> <input type="text" name="jum_pekerja1" value="<?php echo $lapor[16]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>org</td>
                                    <td>Jumlah Pekerja</td>
                                    <td> <input type="text" name="jum_pekerja2" value="<?php echo $lapor[17]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>org</td>
                                  </tr>
                                  <tr>
                                    <td>Jam Efektif</td>
                                    <td> <input type="text" name="jam_efektif1" value="<?php echo $lapor[18]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td>Jam Lembur</td>
                                    <td> <input type="text" name="jam_efektif2" value="<?php echo $lapor[19]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                  </tr>
                                  <tr>
                                    <td>Total Jam Normal</td>
                                    <td> <input type="text" name="jam_normal" value="<?php echo $lapor[20]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>Total Jam Kerja / hari</td>
                                    <td> <input type="text" name="total_jam" value="<?php echo $lapor[21]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td>Total Sampai Hari Ini</td>
                                    <td> <input type="text" name="total_hari" value="<?php echo $lapor[22]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                  </tr>
                              </table>
                            </div>
                            <div class="col-md-12">
                              <label for="keterangan" width="100%;color:#000">KETERANGAN
                                <textarea name="keterangan" rows="5" class="form-control" style="width: 100%;font-size:12px;border:none"><?php echo $lapor[23]; ?></textarea>
                              </label>
                            </div>
                            <?php
                            if ($_SESSION['jabatan'] == "SO" || $_SESSION['jabatan'] == "Admin" || $_SESSION['jabatan'] == "Kasi") { ?>
                              <div class="col-md-12" style="margin-top:20px">
                                <p style="color:red;font-size:12px">* Dengan klik ACC laporan, saya menyatakan bahwa laporan yang diterima sudah sesuai
                                  <a href="proses/harian.php?page=acc&id=<?php echo $lapor[1]; ?>" class="btn btn-primary" style="font-size:12px;width:100%">ACC Laporan</a>
                                  <a href="proses/harian.php?page=tolak&id=<?php echo $lapor[1]; ?>" class="btn btn-danger" style="font-size:12px;width:100%;margin-top:10px">Tolak Laporan</a>
                                </p>
                              </div>
                            <?php  } else {  }?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="print-harian.php?id=<?php echo $id_harian; ?>" target="_blank" class="btn btn-success">Download</a>
                      <a href="proses/harian.php?page=delete&id=<?php echo $lapor[1]; ?>" class="btn btn-danger">Delete Laporan</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }?>
            </div>
            <div class="col-4">
              <?php echo $row[2]; ?>
            </div>

            <!-- Menu Ini hanya ada di Safety Officier dan Admin -->
            <div class="col-2">
              <center>
                <?php
                if($row[25] == "0") { ?>
                  <img src="img/clock.png" title="Menunggu ACC" alt="" style="width:15px;">
                <?php } else if($row[25] == "1") { ?>
                  <img src="img/check.png" title="Di ACC" alt="" style="width:15px;">
                <?php } else if ($row[25] == "2") { ?>
                  <img src="img/cancel.png" title="Ditolak" alt="" style="width:15px;">
                <?php } ?>
              </center>
            </div>
          </div>
        </form>
        <?php } ?>
        <div class="row" style="margin-top:20px;">
          <div class="col-md-12">
            <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
          <?php } else if($id == "bulanan") { ?>
          <!-- Bulanan -->
            <?php $no = 1; ?>
              <div class="col-4">
                Id Laporan
              </div>
              <div class="col-5">
                Kontraktor
              </div>
              <div class="col-2">
                Periode
              </div>
          </div>
          <?php
            $no   = 1;
            $data = mysqli_query($connect, "SELECT * FROM `bulanan` ORDER BY `no` DESC");
            while ($row=mysqli_fetch_row($data))
              {
                $id_bulanan = $row[1];
           ?>
          <div class="row" style="font-size:12px;border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
            <div class="col-4">
              <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[1]; ?></font>
              <!-- Modal -->
              <div id="nama<?php echo $row[0]; ?>" class="modal fade" role="dialog">
                <div class="modal-dialog">

                  <!-- Modal content-->
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title" style="text-align:left">Detail Laporan Bulanan</h4>
                    </div>
                    <div class="modal-body">
                      <table style="width:100%">
                        <tr>
                          <td width="40%">Id Laporan</td>
                          <td>:</td>
                          <td><?php echo $row[1]; ?></td>
                        </tr>
                        <tr>
                          <td>Dokumen</td>
                          <td>:</td>
                          <td><?php echo $row[2]; ?></td>
                        </tr>
                        <tr>
                          <td>Kontraktor</td>
                          <td>:</td>
                          <td><?php echo $row[3]; ?></td>
                        </tr>
                        <tr>
                          <td>Periode</td>
                          <td>:</td>
                          <td><?php echo $row[4]; ?></td>
                        </tr>
                        <tr>
                          <td>Kerusakan Property</td>
                          <td>:</td>
                          <td><?php echo $row[14]; ?></td>
                        </tr>
                        <tr>
                          <td>Hari Kerja Hilang</td>
                          <td>:</td>
                          <td><?php echo $row[15]; ?></td>
                        </tr>
                        <tr>
                          <td>Biaya Pengobatan</td>
                          <td>:</td>
                          <td><?php echo $row[16]; ?></td>
                        </tr>
                      </table>

                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <hr>
                          <h4>Aktivitas</h4><hr>
                          <div class="swiper-container">
                              <!-- Additional required wrapper -->
                              <div class="swiper-wrapper">
                                <?php
                                   $aktiv = mysqli_query($connect, "SELECT * FROM `aktivitas_bulanan` WHERE `id_bulanan` = '$row[17]'");
                                   while ($aktivitas = mysqli_fetch_row($aktiv)) {
                                     $program   = json_decode($aktivitas[1]);
                                     $jumlah    = json_decode($aktivitas[2]);
                                     $uraian    = json_decode($aktivitas[3]);
                                     $tanggal   = json_decode($aktivitas[4]);
                                   }
                                   for ($i=0; $i < count($program) ; $i++) {
                                ?>

                                <div class="swiper-slide">
                                  <table width="100%">
                                    <tr>
                                      <td style="vertical-align:top;" width="25%">Program</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $program[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Jumlah</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $jumlah[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Uraian</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $uraian[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Tanggal</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $tanggal[$i]; ?></td>
                                    </tr>
                                  </table>
                                </div>
                                <?php
                                }
                                 ?>
                            </div>
                        </div>
                        </div>
                      </div>

                      <div class="row" style="margin-top:20px">
                        <?php
                          $tenaga_kerja     = json_decode($row[5]);
                          $jam_kerja_normal = json_decode($row[6]);
                          $jam_kerja_over   = json_decode($row[7]);
                          $hari_kerja       = json_decode($row[8]);
                          $nearmiss         = json_decode($row[9]);
                          $incident         = json_decode($row[10]);
                          $accident_ringan  = json_decode($row[11]);
                          $accident_berat   = json_decode($row[12]);
                          $accident_fatal   = json_decode($row[13]);

                          // echo "$tenaga_kerja - $jam_kerja_normal - $jam_kerja_over - $hari_kerja - $nearmiss - $incident - $accident_ringan - $accident_berat - $accident_fatal";
                         ?>
                        <div class="col-md-12">
                          <hr>
                          <h4>Kerugian Yang Diakibatkan</h4><hr>
                          <table class="table" style="color:#000;width:100%;font-size:11px;line-height: 0px;border-collapse: collapse;">
                            <tr style="background:#242424;color:#fff">
                              <td rowspan="2" style="vertical-align: middle;">No</td>
                              <td rowspan="2" style="vertical-align: middle;">Indikator</td>
                              <td colspan="2" style="text-align:center">Jumlah</td>
                              <td rowspan="2" style="width:10%;vertical-align: middle;">Total</td>
                            </tr>
                            <tr style="background:#242424;color:#fff;text-align:center">
                              <td width="10%">Induk</td>
                              <td width="10%">Outsource</td>
                            </tr>
                            <tr>
                              <td>1</td>
                              <td>Tenaga Kerja</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="tg_induk" value="<?php echo $tenaga_kerja[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="tg_outsource" value="<?php echo $tenaga_kerja[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="tg_jumlah" value="<?php echo $tenaga_kerja[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>2</td>
                              <td>Jam Kerja Normal</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jkn_induk" value="<?php echo $jam_kerja_normal[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jkn_outsource" value="<?php echo $jam_kerja_normal[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jkn_jumlah" value="<?php echo $jam_kerja_normal[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>3</td>
                              <td>Jam Overtime</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jko_induk" value="<?php echo $jam_kerja_over[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jko_outsource" value="<?php echo $jam_kerja_over[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="jko_jumlah" value="<?php echo $jam_kerja_over[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>4</td>
                              <td>Hari Kerja</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="hk_induk" value="<?php echo $hari_kerja[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="hk_outsource" value="<?php echo $hari_kerja[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="hk_jumlah" value="<?php echo $hari_kerja[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>5</td>
                              <td>Nearmiss</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="near_induk" value="<?php echo $nearmiss[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="near_outsource" value="<?php echo $nearmiss[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="near_jumlah" value="<?php echo $nearmiss[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>6</td>
                              <td>Incident</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="inc_induk" value="<?php echo $incident[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="inc_outsource" value="<?php echo $incident[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="inc_jumlah" value="<?php echo $incident[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>7</td>
                              <td>Accident Ringan</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ac_induk" value="<?php echo $accident_ringan[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ac_outsource" value="<?php echo $accident_ringan[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ac_jumlah" value="<?php echo $accident_ringan[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>8</td>
                              <td>Accident Berat</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ab_induk" value="<?php echo $accident_berat[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ab_outsource" value="<?php echo $accident_berat[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="ab_jumlah" value="<?php echo $accident_berat[2]; ?>"></td>
                            </tr>
                            <tr>
                              <td>9</td>
                              <td>Accident Fatal</td>
                              <td> <input required type="text" style="width:100%;border:none;" name="af_induk" value="<?php echo $accident_fatal[0]; ?>"> </td>
                              <td> <input required type="text" style="width:100%;border:none;" name="af_outsource" value="<?php echo $accident_fatal[1]; ?>"></td>
                              <td> <input required type="text" style="width:100%;border:none;" name="af_jumlah" value="<?php echo $accident_fatal[2]; ?>"></td>
                            </tr>
                          </table>
                          <hr>
                        </div>
                      </div>

                    </div>
                    <div class="modal-footer">
                      <a href="print_bulanan.php?id=<?php echo $id_bulanan; ?>" target="_blank" class="btn btn-success">Download</a>
                    </div>
                  </div>

                </div>
              </div>
            </div>
            <div class="col-5">
              <?php echo $row[3]; ?>
            </div>

            <!-- Menu Ini hanya ada di Safety Officier dan Admin -->
            <div class="col-2">
              <?php echo $row[4]; ?>
            </div>
          </div>
        </form>
        <?php } ?>
        <div class="row" style="margin-top:20px;">
          <div class="col-md-12">
            <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
          <?php } else if($id == "mingguan") { ?>
            <div class="col-6">
              Kontraktor
            </div>
            <div class="col-3">
              Minggu
            </div>
            <div class="col-3">
              Tahun
            </div>
          </div>
            <?php
              $data = mysqli_query($connect, "SELECT * FROM `mingguan` ORDER BY `no` DESC ");
              while ($row=mysqli_fetch_row($data))
                {
                  $id_mingguan = $row[1];
             ?>
            <div class="row" style="font-size:12px;border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
              <div class="col-6">
                <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[39]; ?></font>
                <!-- Modal -->
                <div id="nama<?php echo $row[0]; ?>" class="modal fade" role="dialog">
                  <div class="modal-dialog">
                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Detail Data Mingguan</h4>
                      </div>
                      <div class="modal-body">
                        <table width="100%">
                          <tr>
                            <td width="50%">Id Laporan</td>
                            <td>:</td>
                            <td><?php echo $row[1]; ?></td>
                          </tr>
                          <tr>
                            <td>Jenis Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $row[2]; ?></td>
                          </tr>
                          <tr>
                            <td>No Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $row[3]; ?></td>
                          </tr>
                          <tr>
                            <td>Minggu Ke</td>
                            <td>:</td>
                            <td><?php echo $row[4]; ?></td>
                          </tr>
                          <tr>
                            <td>Tahun Ke</td>
                            <td>:</td>
                            <td><?php echo $row[5]; ?></td>
                          </tr>
                          <!-- <tr>
                            <td>Progress Pekerjaan</td>
                            <td>:</td>
                            <td><?php echo $row[6]; ?></td>
                          </tr> -->
                          <tr>
                            <td>Masa Kerja Mulai</td>
                            <td>:</td>
                            <td><?php echo $row[7]; ?></td>
                          </tr>
                          <tr>
                            <td>Masa Kerja Akhir</td>
                            <td>:</td>
                            <td><?php echo $row[8]; ?></td>
                          </tr>
                          <tr>
                            <td>Hari Kerja Bulan Ini</td>
                            <td>:</td>
                            <td><?php echo $row[9]; ?></td>
                          </tr>
                          <tr>
                            <td>Jumlah Jam Kerja</td>
                            <td>:</td>
                            <td><?php echo $row[10]; ?></td>
                          </tr>
                          <tr>
                            <td>Total Hari Kerja</td>
                            <td>:</td>
                            <td><?php echo $row[11]; ?></td>
                          </tr>
                          <tr>
                            <td>Total Jam Kerja</td>
                            <td>:</td>
                            <td><?php echo $row[12]; ?></td>
                          </tr>
                          <tr>
                            <td>Data Man Power Induk</td>
                            <td>:</td>
                            <td><?php echo $row[13]; ?></td>
                          </tr>
                          <tr>
                            <td>Data Man Power Outsource</td>
                            <td>:</td>
                            <td><?php echo $row[14]; ?></td>
                          </tr>
                        </table>
                        <hr>
                        <div class="row">
                          <div class="col-md-12 container">
                            <h4>Temuan</h4>
                            <table class="table" style="font-size:12px;" width="100%">
                              <tr>
                                <td>KRITERIA INSPEKSI</td>
                                <td width="10%">TEMUAN</td>
                                <td width="10%">CLOSE</td>
                                <td width="10%">TOTAL</td>
                              </tr>
                              <tr>
                                <td>Unsafe Action</td>
                                <td><input required name="a1" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[15]; ?>"></td>
                                <td><input required name="a2" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[16]; ?>"></td>
                                <td><input required name="a3" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[17]; ?>"></td>
                              </tr>
                              <tr>
                                <td>Unsafe Condition</td>
                                <td><input required name="b1" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[18]; ?>"></td>
                                <td><input required name="b2" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[19]; ?>"></td>
                                <td><input required name="b3" type="text" style="width:100%;border:none;text-align:center;" value="<?php echo $row[20]; ?>"></td>
                              </tr>
                            </table>
                          </div>
                          <div class="col-md-12">
                            <h5>Kejadian</h5><br>
                            <table class="table" width="100%">
                              <tr>
                                <td>No</td>
                                <td>Kejadian</td>
                                <td width="10%">Jumlah</td>
                                <td width="10%">Total</td>
                              </tr>
                              <tr>
                                <td>1</td>
                                <td>Nearmiss</td>
                                <td> <input required type="text" name="i1" value="<?php echo $row[21]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="i2" value="<?php echo $row[22]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>P3K / First Aid</td>
                                <td> <input required type="text" name="c1" value="<?php echo $row[23]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="c2" value="<?php echo $row[24]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Ringan</td>
                                <td> <input required type="text" name="d1" value="<?php echo $row[25]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="d2" value="<?php echo $row[26]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Berat</td>
                                <td> <input required type="text" name="e1" value="<?php echo $row[27]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="e2" value="<?php echo $row[28]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Fatality</td>
                                <td> <input required type="text" name="f1" value="<?php echo $row[29]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="f2" value="<?php echo $row[30]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>6</td>
                                <td>Kerusakan Aset</td>
                                <td> <input required type="text" name="g1" value="<?php echo $row[31]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="g2" value="<?php echo $row[32]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                              <tr>
                                <td>7</td>
                                <td>Kebakaran</td>
                                <td> <input required type="text" name="h1" value="<?php echo $row[33]; ?>" style="width:100%;border:none;text-align:center"> </td>
                                <td> <input required type="text" name="h2" value="<?php echo $row[34]; ?>" style="width:100%;border:none;text-align:center"> </td>
                              </tr>
                            </table>
                          </div>

                          <div class="col-md-12">
                            <h5>Keterangan</h5><br>
                            <textarea name="ket" class="form-control" rows="4" cols="80" style="width:100%"><?php echo $row[35]; ?></textarea>
                          </div>
                        </div>

                      </div>
                      <div class="modal-footer">
                        <a href="print_mingguan.php?id=<?php echo $id_mingguan; ?>" target="_blank" class="btn btn-success">Download</a>
                      </div>
                    </div>

                  </div>
                </div>
              </div>
              <div class="col-3">
                <?php echo $row[4]; ?>
              </div>
              <div class="col-3">
                <?php echo $row[5]; ?>
              </div>
            </div>
          <?php }} else { ?>
            <?php
            $no   = 1;
            ?>
              <div class="col-2">
                No
              </div>
              <div class="col-4">
                Id Laporan
              </div>
              <div class="col-4">
                Tanggal
              </div>
              <div class="col-2">
                Status
              </div>
          </div>
          <?php
            if ($id == 'harian'  || $id == '') {
              $data = mysqli_query($connect, "SELECT * FROM `harian` ORDER BY `harian`.`nomer` DESC ");
            }
            while ($row=mysqli_fetch_row($data))
              {
           ?>
          <div class="row" style="font-size:12px;border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
            <div class="col-2" style="text-align:center">
              <?php echo $no;$no++; ?>
            </div>
            <div class="col-4">
              <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[1]; ?></font>
              <!-- Modal -->
              <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h4 class="modal-title" id="exampleModalLabel">Detail Laporan</h4>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <table width="100%">
                        <?php
                        if ($id == 'harian' || $id == '') {
                          $lap = mysqli_query($connect, "SELECT * FROM `harian` WHERE `id` = '$row[1]'");
                          while ($lapor=mysqli_fetch_row($lap))
                          {
                         ?>
                        <tr>
                          <td width="35%" style="vertical-align:top;">Id Laporan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[1]; ?></td>
                        </tr>
                        <tr>
                          <td width="35%" style="vertical-align:top;">Kontraktor</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[24]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Tanggal</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[2]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[3]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">No Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[4]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Hari Kerja</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[5]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Total Pekerja</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[6]; ?></td>
                        </tr>
                        <tr>
                          <td style="vertical-align:top;">Jenis Pekerjaan</td>
                          <td style="vertical-align:top;">: <?php echo $lapor[7]; ?></td>
                        </tr>
                      </table>
                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <h3>Aktivitas</h3><hr>
                          <div class="swiper-container">
                              <!-- Additional required wrapper -->
                              <div class="swiper-wrapper">
                                <?php
                                   $aktiv = mysqli_query($connect, "SELECT * FROM `aktivitas` WHERE `id_aktivitas` = '$lapor[8]'");
                                   while ($aktivitas = mysqli_fetch_row($aktiv)) {
                                ?>
                                <div class="swiper-slide">
                                  <table>
                                    <tr>
                                      <td style="vertical-align:top;" width="40%">Pekerjaan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[1]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Bahaya</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[2]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Dampak</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[3]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Pencegahan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[4]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Keterangan</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $aktivitas[5]; ?></td>
                                    </tr>
                                  </table>
                                </div>
                                <?php
                                }
                                 ?>
                            </div>
                        </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12" style="margin-top:10px">
                          <div class="row">
                            <div class="col-md-12">
                              <table class="table" style="font-size:11px;color:#000">
                                <tr>
                                  <th colspan="4" style="text-align:center;font-size:14px;">KEJADIAN</th>
                                </tr>
                                <tr>
                                  <th>&nbsp;</th>
                                  <th>NEARMISS</th>
                                  <th>INCIDENT</th>
                                  <th>ACCIDENT</th>
                                </tr>
                                  <tr>
                                    <td>RINGAN</td>
                                    <td> <input type="text" name="nr1" value="<?php echo $lapor[9]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"> </td>
                                    <td><input type="text" name="nr2" value="<?php echo $lapor[10]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="nr3" value="<?php echo $lapor[11]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                                  <tr>
                                    <td>BERAT</td>
                                    <td><input type="text" name="ic1" value="<?php echo $lapor[12]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="ic2" value="<?php echo $lapor[13]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                    <td><input type="text" name="ic3" value="<?php echo $lapor[14]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                                  <tr>
                                    <td>FATAL</td>
                                    <td></td>
                                    <td></td>
                                    <td><input type="text" name="fat" value="<?php echo $lapor[15]; ?>" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                                  </tr>
                              </table>
                            </div>
                            <div class="col-md-12">
                              <table class="table table-responsive" style="font-size:11px;color:#000">
                                <tr>
                                  <th colspan="6" style="text-align:center;font-size:14px;">JAM KERJA</th>
                                </tr>
                                <tr>
                                  <th colspan="3" style="text-align:center">NORMAL</th>
                                  <th colspan="3" style="text-align:center">OVERTIME</th>
                                </tr>
                                  <tr>
                                    <td>Jumlah Pekerja</td>
                                    <td> <input type="text" name="jum_pekerja1" value="<?php echo $lapor[16]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>org</td>
                                    <td>Jumlah Pekerja</td>
                                    <td> <input type="text" name="jum_pekerja2" value="<?php echo $lapor[17]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>org</td>
                                  </tr>
                                  <tr>
                                    <td>Jam Efektif</td>
                                    <td> <input type="text" name="jam_efektif1" value="<?php echo $lapor[18]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td>Jam Lembur</td>
                                    <td> <input type="text" name="jam_efektif2" value="<?php echo $lapor[19]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                  </tr>
                                  <tr>
                                    <td>Total Jam Normal</td>
                                    <td> <input type="text" name="jam_normal" value="<?php echo $lapor[20]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                  </tr>
                                  <tr>
                                    <td>Total Jam Kerja / hari</td>
                                    <td> <input type="text" name="total_jam" value="<?php echo $lapor[21]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                    <td>Total Sampai Hari Ini</td>
                                    <td> <input type="text" name="total_hari" value="<?php echo $lapor[22]; ?>" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                                    <td>jam</td>
                                  </tr>
                              </table>
                            </div>
                            <div class="col-md-12">
                              <label for="keterangan" width="100%;color:#000">KETERANGAN
                                <textarea name="keterangan" rows="5" class="form-control" style="width: 100%;font-size:12px;border:none"><?php echo $lapor[23]; ?></textarea>
                              </label>
                            </div>
                            <?php
                            if ($_SESSION['jabatan'] == "SO" || $_SESSION['jabatan'] == "Admin" || $_SESSION['jabatan'] == "Kasi") { ?>
                              <div class="col-md-12" style="margin-top:20px">
                                <p style="color:red;font-size:12px">* Dengan klik ACC laporan, saya menyatakan bahwa laporan yang diterima sudah sesuai
                                  <a href="proses/harian.php?page=acc&id=<?php echo $lapor[1]; ?>" class="btn btn-primary" style="font-size:12px;width:100%">ACC Laporan</a>
                                  <a href="proses/harian.php?page=tolak&id=<?php echo $lapor[1]; ?>" class="btn btn-danger" style="font-size:12px;width:100%;margin-top:10px">Tolak Laporan</a>
                                </p>
                              </div>
                            <?php  } else {  }?>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <a href="print-harian.php?id=<?php echo $lapor[1]; ?>" target="_blank" class="btn btn-success">Download</a>
                      <a href="proses/harian.php?page=delete&id=<?php echo $lapor[1]; ?>" class="btn btn-danger">Delete Laporan</a>
                    </div>
                  </div>
                </div>
              </div>
              <?php
            }}?>
            </div>
            <div class="col-4">
              <?php echo $row[2]; ?>
            </div>

            <!-- Menu Ini hanya ada di Safety Officier dan Admin -->
            <div class="col-2">
              <center>
                <?php
                if ($id == 'harian'  || $id == '') {
                  $data = mysqli_query($connect, "SELECT * FROM `harian` ORDER BY `harian`.`nomer` DESC ");
                  while ($row=mysqli_fetch_row($data))
                  {
                if($row[25] == "0") { ?>
                  <img src="img/clock.png" title="Menunggu ACC" alt="" style="width:15px;">
                <?php } else if($row[25] == "1") { ?>
                  <img src="img/check.png" title="Di ACC" alt="" style="width:15px;">
                <?php } else if ($row[25] == "2") { ?>
                  <img src="img/cancel.png" title="Ditolak" alt="" style="width:15px;">
                <?php }}} else if($id == 'bulanan') {

                } ?>
              </center>
            </div>
          </div>
        </form>
        <?php } ?>
        <div class="row" style="margin-top:20px;">
          <div class="col-md-12">
            <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
          <?php } ?>

        </div>
      </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
