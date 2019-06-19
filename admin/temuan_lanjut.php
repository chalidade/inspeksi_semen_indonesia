  <?php include "header.php" ?>
  <?php session_start();?>
    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
            <h4 style="margin-top:-10px">LAPORAN INSPEKSI KESELAMATAN</h4>
            <center style="margin-top:10px;">Tanggal : <?php echo $_SESSION['date']; ?></center>
          </div>
        </div>
        <hr>
        <form class="" action="proses/inspeksi.php?page=3" method="post" enctype="multipart/form-data">
          <h4 style="text-align:center">List Temuan / Unsafe Condition</h4>
          <hr>
          <div class="row">
            <div class="col-md-12">
              <!-- Slider main container -->
              <div class="swiper-container">
                  <!-- Additional required wrapper -->
                  <div class="swiper-wrapper">
                      <!-- Slides -->
                          <?php
                            for ($i=1; $i < 15; $i++) {
                              if ($_SESSION['tta'.$i] != '') {
                          ?>
                          <div class="swiper-slide">
                            <div class="row">
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="temuan" style="width:100%">Unsafe Condition
                                    <input style="width:92%" type="text" name="temuana[<?php echo $i; ?>]" id="temuan" value="<?php echo $_SESSION['tta'.$i]; ?>" class="form-control">
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="pb" style="width:100%">Potensi Bahaya
                                    <textarea style="width:92%;height:100px;" type="text" name="potensia[<?php echo $i; ?>]" id="pb" value="" class="form-control"></textarea>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="tindak" style="width:100%">Tindak Lanjut
                                    <textarea style="width:92%;height:100px;" type="text" name="tindaka[<?php echo $i; ?>]" id="tindak" value="" class="form-control"></textarea>
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="tempo" style="width:100%">Deadline Penyelesaian
                                    <input style="width:92%" type="date" name="tempoa[<?php echo $i; ?>]" id="tempo" value="" class="form-control">
                                  </label>
                                </div>
                              </div>
                              <div class="col-md-12">
                                <div class="form-group">
                                  <label for="tempo" style="width:100%">Upload File
                                    <input style="width:92%" type="file" name="filea[<?php echo $i; ?>]" value="" class="form-control">
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php
                              }
                            }
                           ?>
                           <?php
                             for ($i=1; $i < 15; $i++) {
                               if ($_SESSION['ttb'.$i] != '') {
                           ?>
                           <div class="swiper-slide">
                             <div class="row">
                               <div class="col-md-12">
                                 <div class="form-group">
                                   <label for="temuan" style="width:100%">Unsafe Condition
                                     <input style="width:92%;" type="text" name="temuanb[<?php echo $i; ?>]" id="temuan" value="<?php echo $_SESSION['ttb'.$i]; ?>" class="form-control">
                                   </label>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group">
                                   <label for="pb" style="width:100%">Potensi Bahaya
                                     <textarea style="width:92%;height:100px;" type="text" name="potensib[<?php echo $i; ?>]" id="pb" class="form-control"></textarea>
                                   </label>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group">
                                   <label for="tindak" style="width:100%">Tindak Lanjut
                                     <textarea style="width:92%;height:100px;" type="text" name="tindakb[<?php echo $i; ?>]" id="tindak" class="form-control"></textarea>
                                   </label>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group">
                                   <label for="tempo" style="width:100%">Deadline Penyelesaian
                                     <input style="width:92%" type="date" name="tempob[<?php echo $i; ?>]" id="tempo" class="form-control">
                                   </label>
                                 </div>
                               </div>
                               <div class="col-md-12">
                                 <div class="form-group">
                                   <label for="tempo" style="width:100%">Upload File
                                     <input style="width:92%" type="file" name="fileb[<?php echo $i; ?>]" value="" class="form-control">
                                   </label>
                                 </div>
                               </div>
                             </div>
                           </div>
                           <?php
                               }
                             }
                            ?>
                            <?php
                              for ($i=1; $i < 15; $i++) {
                                if ($_SESSION['ttc'.$i] != '') {
                            ?>
                            <div class="swiper-slide">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="temuan" style="width:100%">Unsafe Condition
                                      <input style="width:92%" type="text" name="temuanc[<?php echo $i; ?>]" id="temuan" value="<?php echo $_SESSION['ttc'.$i]; ?>" class="form-control">
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="pb" style="width:100%">Potensi Bahaya
                                      <textarea style="width:92%;height:100px;" type="text" name="potensic[<?php echo $i; ?>]" id="pb" value="" class="form-control"></textarea>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="tindak" style="width:100%">Tindak Lanjut
                                      <textarea style="width:92%;height:100px;" type="text" name="tindakc[<?php echo $i; ?>]" id="tindak" value="" class="form-control"></textarea>
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="tempo" style="width:100%">Deadline Penyelesaian
                                      <input style="width:92%" type="date" name="tempoc[<?php echo $i; ?>]" id="tempo" value="" class="form-control">
                                    </label>
                                  </div>
                                </div>
                                <div class="col-md-12">
                                  <div class="form-group">
                                    <label for="tempo" style="width:100%">Upload File
                                      <input style="width:92%" type="file" name="filec[<?php echo $i; ?>]" value="" class="form-control">
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <?php
                                }
                              }
                           ?>
                  </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Next</button>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->
    <?php include "footer.php"; ?>
