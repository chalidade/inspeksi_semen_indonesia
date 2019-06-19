<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/bulanan.php?page=1" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>LAPORAN BULANAN SAFETY OFFICIER KONTRAKTOR</p>
            <h4 style="margin-top:-15px;font-size:16px">PT. SEMEN INDONESIA (PERSERO) TBK.</h4>
            <!-- <p>KONTRAKTOR : PT. SWABINA GATRA - PGO</p> -->
            <p>
              <center style="margin-top:-10px;">Tanggal : <?php echo date('d/m/Y'); ?> <input required type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>
            </p>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">Dokumen
                <input required type="text" name="dokumen" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">Kontraktor
                <input required type="text" name="kontraktor" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
                <div class="form-group">
                  <label for="lokasi"  style="width:100%" style="font-weight:800">Periode
                    <input required type="text" name="periode" id="lokasi" value="" class="form-control">
                  </label>
                </div>
          </div>
          <div class="col-md-12">
            <h5>Kerugian Yang Diakibatkan</h5><br>
            <table class="table" style="width:100%">
              <tr>
                <td>1</td>
                <td>Kerusakan Property / Asset</td>
                <td width="5%">:</td>
                <td>Rp <input required type="text" name="kerusakan" value="" style="width:60%;border:none"></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Hilang Hari Kerja</td>
                <td width="5%">:</td>
                <td><input required type="text" name="hilang_kerja" value="" style="width:60%;border:none">Hari</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Biaya Pengobatan / Penaganan Medis</td>
                <td width="5%">:</td>
                <td>Rp <input required type="text" name="biaya_pengobatan" value="" style="width:60%;border:none"></td>
              </tr>
            </table>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Aktivitas K3</button>
            <a href="form.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
