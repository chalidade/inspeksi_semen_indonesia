  <?php include "header.php"; ?>
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
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <h4>Checklist Temuan / Unsafe Condition</h4>
              <hr>
              <form class="" action="proses/inspeksi.php?page=2" method="post">
              <h5>Tindakan Tidak Aman</h5>
                <table style="margin-top:10px;">
                  <tr>
                    <td> <input type="checkbox" name="tta1" value="Beroperasi/Bekerja Tanpa Otoritas" style="margin-top: 6px;"> </td>
                    <td>Beroperasi/Bekerja Tanpa Otoritas</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta2" value="Memperbaiki peralatan dlm keadaan beroperasi" style="margin-top: 6px;"> </td>
                    <td>Memperbaiki peralatan dlm keadaan beroperasi</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta3" value="Mabuk,Bercanda,main-main dan sembrono" style="margin-top: 6px;"> </td>
                    <td>Mabuk,Bercanda,main-main dan sembrono</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta4" value="Tidak memakai APD" style="margin-top: 6px;"> </td>
                    <td>Tidak memakai APD</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta5" value="Memakai peralatan rusak" style="margin-top: 6px;"> </td>
                    <td>Memakai peralatan rusak</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta6" value="Terlalu memaksakan diri" style="margin-top: 6px;"> </td>
                    <td>Terlalu memaksakan diri</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta7" value="Bekerja tidak sesuai kompetensi" style="margin-top: 6px;"> </td>
                    <td>Bekerja tidak sesuai kompetensi</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta8" value="Posisi mengangkat yang salah" style="margin-top: 6px;"> </td>
                    <td>Posisi mengangkat yang salah</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta9" value="Penggunaan peralatan yang tidak sesuai" style="margin-top: 6px;"> </td>
                    <td>Penggunaan peralatan yang tidak sesuai</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta10" value="Bekerja tidak sesuai prosedur" style="margin-top: 6px;"> </td>
                    <td>Bekerja tidak sesuai prosedur</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta11" value="Bekerja diluar jam kerja" style="margin-top: 6px;"> </td>
                    <td>Bekerja diluar jam kerja</td>
                  </tr>
                  <tr>
                    <td> <input type="checkbox" name="tta12" value="Bekerja tanpa ijin kerja" style="margin-top: 6px;"> </td>
                    <td>Bekerja tanpa ijin kerja</td>
                  </tr>
                </table>
                <br><hr>
                <h5>Kondisi Tidak Aman (Mesin, Lingkungan)</h5>
                  <table style="margin-top:10px;">
                    <tr>
                      <td> <input type="checkbox" name="ttb1" value="Area kerja yang kotor" style="margin-top: 6px;"> </td>
                      <td>Area kerja yang kotor</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb2" value="Pelindung/Pembatas tidak ada/layak" style="margin-top: 6px;"> </td>
                      <td>Pelindung/Pembatas tidak ada/layak</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb3" value="Mesin / peralatan yang rusak" style="margin-top: 6px;"> </td>
                      <td>Mesin / peralatan yang rusak</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb4" value="Alat pelindung mesin yang terbuka" style="margin-top: 6px;"> </td>
                      <td>Alat pelindung mesin yang terbuka</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb5" value="Ruang kerja sempit/terbatas" style="margin-top: 6px;"> </td>
                      <td>Ruang kerja sempit/terbatas</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb6" value="Sistem peringatan kurang/Indikator rusak" style="margin-top: 6px;"> </td>
                      <td>Sistem peringatan kurang/Indikator rusak</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb7" value="Paparan kebisingan" style="margin-top: 6px;"> </td>
                      <td>Paparan kebisingan</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb8" value="Paparan radiasi" style="margin-top: 6px;"> </td>
                      <td>Paparan radiasi</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb9" value="Temperatur extrim" style="margin-top: 6px;"> </td>
                      <td>Temperatur extrim</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb10" value="Penerangan kurang / tidak layak" style="margin-top: 6px;"> </td>
                      <td>Penerangan kurang / tidak layak</td>
                    </tr>
                    <tr>
                      <td> <input type="checkbox" name="ttb11" value="Ventilasi tidak layak" style="margin-top: 6px;"> </td>
                      <td>Ventilasi tidak layak</td>
                    </tr>
                  </table>
                  <br><hr>
                  <h5>Faktor Kerja <br>(Bahan, Rambu K3, dan Lain-lain)</h5>
                    <table style="margin-top:10px;">
                      <tr>
                        <td> <input type="checkbox" name="ttc1" value="Kurangnya pengawasan/kepemimpinan" style="margin-top: 6px;"> </td>
                        <td>Kurangnya pengawasan/kepemimpinan</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc2" value="Kurangnya suku cadang" style="margin-top: 6px;"> </td>
                        <td>Kurangnya suku cadang</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc3" value="Kekurangan peralatan" style="margin-top: 6px;"> </td>
                        <td>Kekurangan peralatan</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc4" value="Kelengkapan kotak P3K/tandu dsb" style="margin-top: 6px;"> </td>
                        <td>Kelengkapan kotak P3K/tandu dsb</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc5" value="Salah pakai/Salah penggunaan" style="margin-top: 6px;"> </td>
                        <td>Salah pakai/Salah penggunaan</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc6" value="Kelengkapan sarana kebakaran" style="margin-top: 6px;"> </td>
                        <td>Kelengkapan sarana kebakaran</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc7" value="Bocor,longgar,hilang,retak atau pecah" style="margin-top: 6px;"> </td>
                        <td>Bocor,longgar,hilang,retak atau pecah</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc8" value="Panas, getaran yang berlebihan" style="margin-top: 6px;"> </td>
                        <td>Panas, getaran yang berlebihan</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc9" value="Kebersihan peralatan" style="margin-top: 6px;"> </td>
                        <td>Kebersihan peralatan</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc10" value="Kelayakan Crane, Forklift dll/sertifikat" style="margin-top: 6px;"> </td>
                        <td>Kelayakan Crane, Forklift dll/sertifikat</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc11" value="Tersedia MSDS Bahan B3" style="margin-top: 6px;"> </td>
                        <td>Tersedia MSDS Bahan B3</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc12" value="Kondisi rambu norma K3" style="margin-top: 6px;"> </td>
                        <td>Kondisi rambu norma K3</td>
                      </tr>
                      <tr>
                        <td> <input type="checkbox" name="ttc13" value="Tersedia rambu norma K3" style="margin-top: 6px;"> </td>
                        <td>Tersedia rambu norma K3</td>
                      </tr>
                    </table>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Next</button>
          </div>
          </form>
        </div>

      </div>
    </section>
    <!-- End service Area -->

    <?php include "footer.php"; ?>
