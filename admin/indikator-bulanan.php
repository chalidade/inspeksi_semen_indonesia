<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/bulanan.php?page=3" method="post">
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
            <h5 style="text-align:center">Kerugian Yang Diakibatkan</h5><br>
            <table class="table" style="color:#000;width:100%;font-size:11px;line-height: 0px;border-collapse: collapse;">
              <tr style="background:#242424;color:#fff">
                <td rowspan="2" style="vertical-align: middle;">No</td>
                <td rowspan="2" style="vertical-align: middle;">Indikator</td>
                <td colspan="2" style="text-align:center">Jumlah</td>
                <td rowspan="2" style="width:10%;vertical-align: middle;">Total</td>
              </tr>
              <tr style="background:#242424;color:#fff;text-align:center">
                <td width="10%">Induk</td>
                <td width="10%">Outsource</td>
              </tr>
              <tr>
                <td>1</td>
                <td>Tenaga Kerja</td>
                <td> <input required type="text" style="width:100%;border:none;" name="tg_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="tg_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="tg_jumlah" value=""></td>
              </tr>
              <tr>
                <td>2</td>
                <td>Jam Kerja Normal</td>
                <td> <input required type="text" style="width:100%;border:none;" name="jkn_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="jkn_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="jkn_jumlah" value=""></td>
              </tr>
              <tr>
                <td>3</td>
                <td>Jam Overtime</td>
                <td> <input required type="text" style="width:100%;border:none;" name="jko_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="jko_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="jko_jumlah" value=""></td>
              </tr>
              <tr>
                <td>4</td>
                <td>Hari Kerja</td>
                <td> <input required type="text" style="width:100%;border:none;" name="hk_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="hk_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="hk_jumlah" value=""></td>
              </tr>
              <tr>
                <td>5</td>
                <td>Nearmiss</td>
                <td> <input required type="text" style="width:100%;border:none;" name="near_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="near_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="near_jumlah" value=""></td>
              </tr>
              <tr>
                <td>6</td>
                <td>Incident</td>
                <td> <input required type="text" style="width:100%;border:none;" name="inc_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="inc_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="inc_jumlah" value=""></td>
              </tr>
              <tr>
                <td>7</td>
                <td>Accident Ringan</td>
                <td> <input required type="text" style="width:100%;border:none;" name="ac_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="ac_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="ac_jumlah" value=""></td>
              </tr>
              <tr>
                <td>8</td>
                <td>Accident Berat</td>
                <td> <input required type="text" style="width:100%;border:none;" name="ab_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="ab_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="ab_jumlah" value=""></td>
              </tr>
              <tr>
                <td>9</td>
                <td>Accident Fatal</td>
                <td> <input required type="text" style="width:100%;border:none;" name="af_induk" value=""> </td>
                <td> <input required type="text" style="width:100%;border:none;" name="af_outsource" value=""></td>
                <td> <input required type="text" style="width:100%;border:none;" name="af_jumlah" value=""></td>
              </tr>
            </table>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
            <a href="form.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
