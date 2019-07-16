<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/mingguan.php?page=1" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>LAPORAN MINGGUAN SAFETY OFFICIER KONTRAKTOR</p>
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
              <label style="width:100%">KONTRAKTOR
                <select class="form-control" name="pt">
                  <?php
                    $a  = mysqli_query($connect, "SELECT * FROM kontraktor");
                    while ($kontraktor = mysqli_fetch_array($a)) {
                  ?>
                  <option value="<?php echo $kontraktor['nama']; ?>"> <?php echo $kontraktor['nama']; ?></option>
                  <?php
                    }
                   ?>
                </select>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">JENIS PEKERJAAN
                <input required type="text" name="pekerjaan" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">NO PEKERJAAN
                <input required type="text" name="no" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="row">
              <div class="col-6">
                <div class="form-group">
                  <label for="lokasi"  style="width:100%" style="font-weight:800">MINGGU KE
                    <input required type="text" name="mingguke" id="lokasi" value="" class="form-control">
                  </label>
                </div>
              </div>
              <div class="col-6">
                <div class="form-group">
                  <label for="lokasi"  style="width:100%" style="font-weight:800">TAHUN
                    <input required type="text" name="tahun" id="lokasi" value="" class="form-control">
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">MASA KERJA
                <div class="row">
                  <div class="col-6">
                   <input required type="date" name="dari" id="lokasi" placeholder="mulai" class="form-control">
                  </div>
                  <div class="col-6">
                    <input required type="date" name="sampai" id="lokasi" placeholder="akhir" class="form-control">
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">HARI KERJA BULAN INI
                <input required type="text" name="bulanini" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">TOTAL HARI KERJA BERLANGSUNG
                <input required type="text" name="totalkerja" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">JUMLAH JAM KERJA
                <input required type="text" name="jumjam" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">TOTAL JAM KERJA
                <input required type="text" name="totjam" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">DATA MAN POWER
                <div class="row">
                  <div class="col-6">
                   <input required type="text" name="induk" id="lokasi" placeholder="Induk" class="form-control">
                  </div>
                  <div class="col-6">
                    <input required type="text" name="outsource" id="lokasi" placeholder="Outsourching" class="form-control">
                  </div>
                </div>
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Aktivitas</button>
            <a href="form.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
