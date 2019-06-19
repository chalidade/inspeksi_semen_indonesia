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
          $no   = 1;
          $id   = $_REQUEST['id'];
          if ($id == 'harian') {
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
          <?php  } else if($id == 'bulanan') { ?>
            <div class="col-2">
              No
            </div>
            <div class="col-4">
              Id Laporan
            </div>
            <div class="col-4">
              Minggu Ke
            </div>
            <div class="col-2">
              Tahun
            </div>
          <?php } else if($id == 'mingguan') { ?>
            <div class="col-2">
              No
            </div>
            <div class="col-4">
              Id Laporan
            </div>
            <div class="col-4">
              Minggu Ke
            </div>
            <div class="col-2">
              Tahun
            </div>
          <?php } else { ?>
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
          <?php } ?>
        </div>
        <?php
          if ($id == 'harian'  || $id == '') {
            $data = mysqli_query($connect, "SELECT * FROM `harian` ORDER BY `harian`.`nomer` DESC ");
          } else if($id == 'bulanan') {
            $data = mysqli_query($connect, "SELECT * FROM `bulanan` ORDER BY `bulanan`.`no` DESC ");
          } else if($id == 'mingguan') {
            $data = mysqli_query($connect, "SELECT * FROM `mingguan` ORDER BY `mingguan`.`no` DESC ");
          } else {
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
                    <a href="" class="btn btn-success">Download</a>
                    <a href="proses/harian.php?page=delete&id=<?php echo $lapor[1]; ?>" class="btn btn-danger">Delete Laporan</a>
                  </div>
                </div>
              </div>
            </div>
            <?php
          }} else if($id == 'bulanan') {
            $lap = mysqli_query($connect, "SELECT * FROM `bulanan` ORDER BY `bulanan`.`no` DESC ");
          } else if($id == 'mingguan') {
            $lap = mysqli_query($connect, "SELECT * FROM `mingguan` ORDER BY `mingguan`.`no` DESC ");
          } ?>
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

              } else if($id == 'mingguan') {
                echo "testing";
              } else {

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

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
