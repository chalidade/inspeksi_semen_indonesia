<?php include "header.php" ?>
  <!-- Start service Area -->
  <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
    <div class="container">
      <div class="row d-flex justify-content-center">
        <div class="col-md-12 pb-10 header-text">
          <p>SEKSI KESELAMATAN KERJA TUBAN</p>
          <h4 style="margin-top:-10px">LAPORAN HARIAN SAFETY</h4>
          <center style="margin-top:10px;">Tanggal : <?php echo date('d/m/Y'); ?></center>
        </div>
      </div>
      <hr>
      <form class="" action="proses/harian.php?page=2" method="post" enctype="multipart/form-data">
        <h4 style="text-align:center">TABEL AKTIVITAS</h4>
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
                                <label for="temuan" style="width:100%">URAIAN PEKERJAAN
                                  <input style="width:92%" type="text" name="pekerjaan[]" id="temuan" value="" class="form-control">
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="pb" style="width:100%">IDENTIFIKASI BAHAYA
                                  <textarea style="width:92%;height:100px;" type="text" name="identifikasi[]" id="pb" value="" class="form-control"></textarea>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tindak" style="width:100%">DAMPAK
                                  <textarea style="width:92%;height:100px;" type="text" name="dampak[]" id="tindak" value="" class="form-control"></textarea>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tempo" style="width:100%">TINDAKAN PENCEGAHAN
                                  <textarea style="width:92%;height:100px;" type="text" name="tindakan[]" id="tindak" value="" class="form-control"></textarea>
                                </label>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <label for="tempo" style="width:100%">KETERANGAN
                                  <textarea style="width:92%;height:100px;" type="text" name="keterangan[]" id="tindak" value="" class="form-control"></textarea>
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
          <button type="submit" class="btn btn-primary" name="button" style="width:100%">Kejadian</button>
        </div>
      </div>
    </form>

    </div>
  </section>
  <!-- End service Area -->
  <?php include "footer.php"; ?>
