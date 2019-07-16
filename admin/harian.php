<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/harian.php?page=1" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
            <h4 style="margin-top:-10px">LAPORAN HARIAN SAFETY</h4>
            <center style="margin-top:10px;">Tanggal : <?php echo date('d/m/Y'); ?> <input required type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">Kontraktor
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
              <label for="uk" style="width:100%">Pekerjaan
                <input required type="text" name="pekerjaan" id="uk" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">No Pekerjaan
                <input required type="text" name="no_pekerjaan" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">Hari Kerja
                <input required type="text" disabled value="<?php echo date('d/m/Y', strtotime("+1 day")); ?>" class="form-control">
                <input type="hidden" name="hari_kerja" id="lokasi" value="<?php echo date('d/m/Y', strtotime("+1 day")); ?>">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">Total Pekerja
                <input required type="text" name="total_pekerja" id="lokasi" value="" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%" style="font-weight:800">Jenis Kegiatan
                <table>
                  <tr>
                    <td> <input required type="radio" name="jenis_kegiatan" value="Inspeksi"> </td>
                    <td> Inspeksi</td>
                    <td width="10%">&nbsp; </td>
                    <td><input required type="radio" name="jenis_kegiatan" value="Corectif / Trouble Shooting"> </td>
                    <td>Corectif / Trouble Shooting</td>
                  </tr>
                </table>
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
