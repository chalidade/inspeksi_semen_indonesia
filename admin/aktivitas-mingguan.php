<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form action="proses/mingguan.php?page=2" method="post">
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
            <table class="table" style="font-size:12px;" width="100%">
              <tr>
                <td>KRITERIA INSPEKSI</td>
                <td width="10%">TEMUAN</td>
                <td width="10%">CLOSE</td>
                <td width="10%">TOTAL</td>
              </tr>
              <tr>
                <td>Unsafe Action</td>
                <td><input required name="a1" type="text" style="width:100%;border:none;text-align:center;"> </td>
                <td><input required name="a2" type="text" style="width:100%;border:none;text-align:center;"></td>
                <td><input required name="a3" type="text" style="width:100%;border:none;text-align:center;"></td>
              </tr>
              <tr>
                <td>Unsafe Condition</td>
                <td><input required name="b1" type="text" style="width:100%;border:none;text-align:center;"> </td>
                <td><input required name="b2" type="text" style="width:100%;border:none;text-align:center;"></td>
                <td><input required name="b3" type="text" style="width:100%;border:none;text-align:center;"></td>
              </tr>
            </table>
          </div>
          <div class="col-md-12">
            <h5>Kejadian</h5><br>
            <table class="table" width="100%">
              <tr>
                <td>No</td>
                <td>Kejadian</td>
                <td width="10%">Jumlah</td>
                <td width="10%">Total</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Nearmiss</td>
                <td> <input required type="text" name="i1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="i2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>2</td>
                <td>P3K / First Aid</td>
                <td> <input required type="text" name="c1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="c2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>3</td>
                <td>Ringan</td>
                <td> <input required type="text" name="d1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="d2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>4</td>
                <td>Berat</td>
                <td> <input required type="text" name="e1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="e2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>5</td>
                <td>Fatality</td>
                <td> <input required type="text" name="f1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="f2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>6</td>
                <td>Kerusakan Aset</td>
                <td> <input required type="text" name="g1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="g2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
              <tr>
                <td>7</td>
                <td>Kebakaran</td>
                <td> <input required type="text" name="h1" value="" style="width:100%;border:none;text-align:center"> </td>
                <td> <input required type="text" name="h2" value="" style="width:100%;border:none;text-align:center"> </td>
              </tr>
            </table>
          </div>


          <!-- <div class="col-md-12">
            <h5>Kerugian Yang Diakibatkan</h5><br>
            <table class="table" style="width:100%">
              <tr>
                <td>1</td>
                <td>Kerusakan Property / Asset</td>
                <td width="5%">:</td>
                <td>Rp <input required type="text" name="" value="" style="width:60%;border:none"></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Hilang Hari Kerja</td>
                <td width="5%">:</td>
                <td><input required type="text" name="" value="" style="width:60%;border:none">Hari</td>
              </tr>
              <tr>
                <td>3</td>
                <td>Biaya Pengobatan / Penaganan Medis</td>
                <td width="5%">:</td>
                <td>Rp <input required type="text" name="" value="" style="width:60%;border:none"></td>
              </tr>
            </table>
          </div> -->

          <div class="col-md-12">
            <h5>Keterangan</h5><br>
            <textarea name="ket" class="form-control" rows="4" cols="80" style="width:100%"></textarea>
          </div>
          <div class="col-md-12"><br>
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Kirim</button>
            <a href="mingguan.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
