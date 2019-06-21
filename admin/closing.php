<?php include "header.php" ?>
  <!-- Start service Area -->
  <?php
    $id       = $_REQUEST['id'];
    $inspeksi = mysqli_query($connect, "SELECT * FROM `inspeksi` WHERE `id` = '$id'");
    while ($row = mysqli_fetch_row($inspeksi)) {

   ?>
  <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <!-- <p>LAPORAN CLOSING TEMUAN KONTRAKTOR</p> -->
            <h4 style="margin-top:-15px;font-size:16px">LAPORAN CLOSING TEMUAN KONTRAKTOR</h4>
            <p>KONTRAKTOR : <?php echo $row[5]; ?></p>
            <p>
              <center style="margin-top:-10px;">Tanggal : <?php echo $row[2]; ?> <input type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>
            </p>
          </div>
        </div>
      </div>
      <hr>
      <form class="" action="proses/inspeksi.php?inspeksi=<?php echo $row[1]; ?>&page=closing" method="post" enctype="multipart/form-data">
        <h4 style="text-align:center">FORM CLOSING</h4>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                        <?php
                        $checklist = json_decode($row[4]);
                        $foto      = json_decode($row[11]);
                        $batas     = json_decode($row[10]);
                          for ($i=0; $i < count($checklist); $i++) {
                        ?>
                        <div class="swiper-slide">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="temuan" style="width:100%">JENIS TEMUAN
                                  <input disabled style="width:92%" type="text" name="temuan[]" id="temuan" value="<?PHP echo $checklist[$i]; ?>" class="form-control">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="pb" style="width:100%">FOTO TEMUAN: <br><br>
                                  <img src="proses/<?php echo $foto[$i]; ?>" alt="" style="width:55%;padding-left:10px;">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tempo" style="width:100%">BATAS
                                  <input disabled style="width:92%" type="date" name="batas[]" id="temuan" value="<?php echo $batas[$i]; ?>" class="form-control">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tempo" style="width:100%">FOTO CLOSING
                                  <input style="width:92%" type="file" name="file[]" value="" class="form-control">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                      <?php  }}   ?>
                </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
          <a href="data-inspeksi.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>
    </form>

    </div>
  </section>
  <!-- End service Area -->
  <?php include "footer.php"; ?>
