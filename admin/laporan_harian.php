<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/inspeksi.php?page=1" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
            <h4 style="margin-top:-10px">LAPORAN INSPEKSI KESELAMATAN</h4>
            <center style="margin-top:10px;">Tanggal : <?php echo date('d/m/Y'); ?> <input required type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>
            <div class="row">
              <div class="col-md-12">
                <center>
                <table>
                  <tr>
                    <td width="20%">Shift :</td>
                    <td><input required type="radio" value="1" name="shift"></td>
                    <td>1</td>
                    <td><input required type="radio" value="2" name="shift"></td>
                    <td>2</td>
                    <td><input required type="radio" value="3" name="shift"></td>
                    <td>3</td>
                  </tr>
                </table>
              </center>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">Kontraktor
                <input required type="text" name="uk" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%">Uraian Kerjaan / Lokasi
                <input required type="text" name="lokasi" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Temuan</button>
            <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
