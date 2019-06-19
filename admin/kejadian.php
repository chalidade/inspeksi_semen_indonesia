<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="proses/harian.php?page=3" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
            <h4 style="margin-top:-10px">LAPORAN HARIAN SAFETY</h4>
            <center style="margin-top:10px;">Tanggal : <?php echo date('d/m/Y'); ?> <input type="hidden" name="date" value="<?php echo date('d/m/Y'); ?>"></center>

          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12">
            <table class="table table-responsive" style="font-size:11px;color:#000">
              <tr>
                <th colspan="4" style="text-align:center;font-size:14px;">KEJADIAN</th>
              </tr>
              <tr>
                <th>&nbsp;</th>
                <th>NEARMISS</th>
                <th>INCIDENT</th>
                <th>ACCIDENT</th>
              </tr>
                <tr>
                  <td>RINGAN</td>
                  <td> <input type="text" name="nr1" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"> </td>
                  <td><input type="text" name="nr2" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                  <td><input type="text" name="nr3" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                </tr>
                <tr>
                  <td>BERAT</td>
                  <td><input type="text" name="ic1" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                  <td><input type="text" name="ic2" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                  <td><input type="text" name="ic3" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                </tr>
                <tr>
                  <td>FATAL</td>
                  <td></td>
                  <td></td>
                  <td><input type="text" name="fat" value="0" style="border:none;border-bottom:solid thin #2424;width:60px;text-align:center;"></td>
                </tr>
            </table>
          </div>
          <div class="col-md-12">
            <table class="table table-responsive" style="font-size:11px;color:#000">
              <tr>
                <th colspan="6" style="text-align:center;font-size:14px;">JAM KERJA</th>
              </tr>
              <tr>
                <th colspan="3" style="text-align:center">NORMAL</th>
                <th colspan="3" style="text-align:center">OVERTIME</th>
              </tr>
                <tr>
                  <td>Jumlah Pekerja</td>
                  <td> <input type="text" name="jum_pekerja1" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>org</td>
                  <td>Jumlah Pekerja</td>
                  <td> <input type="text" name="jum_pekerja2" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>org</td>
                </tr>
                <tr>
                  <td>Jam Efektif</td>
                  <td> <input type="text" name="jam_efektif1" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>jam</td>
                  <td>Jam Lembur</td>
                  <td> <input type="text" name="jam_efektif2" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>jam</td>
                </tr>
                <tr>
                  <td>Total Jam Normal</td>
                  <td> <input type="text" name="jam_normal" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>jam</td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                <tr>
                  <td>Total Jam Kerja / hari</td>
                  <td> <input type="text" name="total_jam" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>jam</td>
                  <td>Total Sampai Hari Ini</td>
                  <td> <input type="text" name="total_hari" value="0" style="border:none;border-bottom:solid thin #2424;width:20px;text-align:center;"> </td>
                  <td>jam</td>
                </tr>
            </table>
          </div>
          <div class="col-md-12">
            <label for="keterangan" width="100%;color:#000">KETERANGAN
              <textarea name="keterangan" rows="5" class="form-control"></textarea>
            </label>
          </div>
          <div class="col-md-12" style="margin-top:40px;">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
          </div>
        </div>
      </form>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
