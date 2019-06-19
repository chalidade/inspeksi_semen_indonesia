<?php include "header.php" ?>
  <!-- Start service Area -->
  <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>LAPORAN BULANAN SAFETY OFFICIER KONTRAKTOR</p>
            <h4 style="margin-top:-15px;font-size:16px">PT. SEMEN INDONESIA (PERSERO) TBK.</h4>
            <!-- <p>KONTRAKTOR : PT. SWABINA GATRA - PGO</p> -->
            <p>
              <center style="margin-top:-10px;">Tanggal : <?php echo date('d/m/Y'); ?> <input type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>
            </p>
          </div>
        </div>
      </div>
      <hr>
      <form class="" action="proses/bulanan.php?page=2" method="post" enctype="multipart/form-data">
        <h4 style="text-align:center">TABEL PROGRAM K3</h4>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <!-- Slider main container -->
            <div class="swiper-container">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                        <?php
                          for ($i=1; $i < 11; $i++) {
                        ?>
                        <div class="swiper-slide">
                          <div class="row">
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="temuan" style="width:100%">PROGRAM K3
                                  <input style="width:92%" type="text" name="program[]" id="temuan" value="" class="form-control">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="pb" style="width:100%">JUMLAH
                                  <input style="width:92%" type="text" name="jumlah[]" id="temuan" value="" class="form-control">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tindak" style="width:100%">URAIAN KEGIATAN
                                  <textarea style="width:92%;height:100px;" type="text" name="uraian[]" id="tindak" value="" class="form-control"></textarea>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tempo" style="width:100%">TANGGAL
                                  <input style="width:92%" type="date" name="tanggal[]" id="temuan" value="" class="form-control">
                                </label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <?php  }   ?>
                </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button type="submit" class="btn btn-primary" name="button" style="width:100%">Indikator</button>
          <a href="bulanan.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>
    </form>

    </div>
  </section>
  <!-- End service Area -->
  <?php include "footer.php"; ?>
