<?php include "header.php"; ?>
    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
            <h4 style="margin-top:-10px">LAPORAN INSPEKSI KESELAMATAN</h4>
            <center style="margin-top:10px;">Tanggal : <?php session_start(); echo $_SESSION['date']; ?></center>
          </div>
        </div>
        <hr>
        <form class="" action="temuan.php" method="post">
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <a href="preview_lap_harian.php"> <button type="button" class="btn btn-primary" name="button" style="width:100%">Preview</button></a>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
            <button type="submit" class="btn btn-success" name="button" style="width:100%">Submit</button>
            </div>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
