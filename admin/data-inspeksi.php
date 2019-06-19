<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">HASIL INSPEKSI</h4>
            <p>LAPORAN HASIL INSPEKSI</p>
          </div>
        </div>
        <hr>
        <div class="row" style="font-size:12px;background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <!-- <div class="col-2">
            No
          </div> -->
          <div class="col-6">
            Nama Kontraktor
          </div>
          <div class="col-4">
            Tanggal
          </div>
          <div class="col-2">
            Status
          </div>
        </div>
        <?php
          $no   = 1;
          $pt   = $_SESSION['nama'];
          $tang = date('d/m/Y');
          if ($pt == "Admin") {
                    $data = mysqli_query($connect, "SELECT * FROM `inspeksi` ORDER BY `no` DESC ");
          // $data = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `tanggal` = '$tang' ORDER BY `no` DESC ");
          } else {
          $data = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `uk_pihak` = '$pt' ORDER BY `no` DESC ");
          }
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row" style="font-size:12px;border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
          <!-- <div class="col-2" style="text-align:center">
            <?php echo $no;$no++; ?>
          </div> -->
          <div class="col-6">
            <ANY style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[5]; ?></ANY>
            <!-- Modal -->
            <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel">Detail Inspeksi</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                      <table style="width:100%">
                        <?php
                        $data1 = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `id` = '$row[1]' ");
                        while ($inspeksi=mysqli_fetch_row($data1))
                          {
                         ?>
                        <tr>
                          <td style="width:30%">Id Inspeksi</td>
                          <td>: </td>
                          <td><?php echo $inspeksi[1]; ?></td>
                        </tr>
                        <tr>
                          <td style="width:30%">Tanggal</td>
                          <td>: </td>
                          <td><?php echo $inspeksi[2]; ?></td>
                        </tr>
                        <tr>
                          <td style="width:30%">Shift</td>
                          <td>: </td>
                          <td><?php echo $inspeksi[3]; ?></td>
                        </tr>
                        <tr>
                          <td style="width:30%">Kontraktor</td>
                          <td>: </td>
                          <td><?php echo $inspeksi[5]; ?></td>
                        </tr>
                        <tr>
                          <td style="width:30%">Lokasi</td>
                          <td>: </td>
                          <td><?php echo $inspeksi[6]; ?></td>
                        </tr>
                      </table>
                      <hr>
                      <h4>Checklist</h4>
                      <hr>
                      <div>
                        <ul>
                        <?php
                        $checklist = json_decode($inspeksi[4]);
                        $nomor     = 1;
                        for ($i=0; $i < count($checklist); $i++) {
                          echo "<li>$nomor. $checklist[$i] </li>";
                          $nomor++;
                        }
                        ?>
                      </ul>
                      </div>
                      <div class="row" style="margin-top:20px">
                        <div class="col-md-12">
                          <h4>Temuan</h4><hr>
                          <div class="swiper-container">
                              <!-- Additional required wrapper -->
                              <div class="swiper-wrapper">
                                <?php
                                    $temuan   = json_decode($inspeksi[7]);
                                    $potensi  = json_decode($inspeksi[8]);
                                    $tindakan = json_decode($inspeksi[9]);
                                    $batas    = json_decode($inspeksi[10]);
                                    $bukti    = json_decode($inspeksi[11]);
                                    $ket      = json_decode($inspeksi[12]);
                                    for ($i=0; $i < count($temuan); $i++) {
                                  ?>

                                  <!-- Modal Gambar -->
                                  <!-- <div class="modal fade" id="gambar" tabindex="-1" role="dialog" aria-labelledby="gambar" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Detail Gambar</h5>
                                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                          </button>
                                        </div>
                                        <div class="modal-body">
                                          ...
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div> -->
                                  <!-- Tutup Modal -->

                                <div class="swiper-slide">
                                  <table>
                                    <tr>
                                      <td style="vertical-align:top;" width="38%">Temuan</td>
                                      <td style="vertical-align:top;" width="2%">:</td>
                                      <td style="vertical-align:top;"><?php echo $temuan[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Potensi Bahaya</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $potensi[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Tindak Lanjut</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $tindakan[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Batas Tindak Lanjut</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $batas[$i]; ?></td>
                                    </tr>
                                    <tr>
                                      <td style="vertical-align:top;">Bukti Tindak Lanjut</td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><a href="proses/<?php echo $bukti[$i]; ?>">Lihat</a></td>
                                    </tr>
                                    <!-- <tr>
                                      <td style="vertical-align:top;">Keterangan </td>
                                      <td style="vertical-align:top;">:</td>
                                      <td style="vertical-align:top;"><?php echo $ket[$i]; ?></td>
                                    </tr> -->
                                  </table>
                                </div>
                                <?php
                                }
                                 ?>
                            </div>
                            <?php
                            if ($_SESSION['jabatan'] == "Kasi" || $_SESSION['jabatan'] == "Admin") { ?>
                              <div class="col-md-12" style="margin-top:20px">
                                <p style="color:red;font-size:12px">* Dengan klik ACC laporan, saya menyatakan bahwa laporan yang diterima sudah sesuai
                                  <a href="proses/inspeksi.php?page=acc&id=<?php echo $inspeksi[1]; ?>" class="btn btn-primary" style="font-size:12px;width:100%">ACC Laporan</a>
                                  <a href="proses/inspeksi.php?page=tolak&id=<?php echo $inspeksi[1]; ?>" class="btn btn-danger" style="font-size:12px;width:100%;margin-top:10px">Tolak Laporan</a>
                                </p>
                              </div>
                            <?php } else {} ?>
                        </div>
                        </div>
                      </div>
                    <?php } ?>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Download</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?php echo $row[2]; ?>
          </div>
          <div class="col-2">
            <?php
          if($row[13] == "0") { ?>
            <img src="img/clock.png" title="Menunggu ACC" alt="" style="width:15px;">
          <?php } else if($row[13] == "1") { ?>
            <img src="img/check.png" title="Di ACC" alt="" style="width:15px;">
          <?php } else if ($row[13] == "2") { ?>
            <img src="img/cancel.png" title="Ditolak" alt="" style="width:15px;">
          <?php }?>
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
