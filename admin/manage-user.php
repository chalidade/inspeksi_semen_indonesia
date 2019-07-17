<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">LIST DATA PENGGUNA</h4>
            <p>SEKSI KESELAMATAN KERJA TUBAN</p>
          </div>
        </div>
        <hr>
        <h4 style="margin-bottom:10px">Data User</h4>
        <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <div class="col-1">
            No
          </div>
          <div class="col-6">
            Nama Petugas
          </div>
          <div class="col-4">
            Jabatan
          </div>
        </div>
        <?php
          $no   = 1;
          $data = mysqli_query($connect, "SELECT * FROM `user` ORDER BY `user`.`id`  DESC");
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
          <div class="col-1" style="text-align:center">
            <?php echo $no;$no++; ?>
          </div>
          <div class="col-6">
            <font style="padding-left:10px;" data-toggle="modal" data-target="#nama<?php echo $row[0]; ?>"><?php echo $row[1]; ?></font>
            <!-- Modal -->
            <div class="modal fade" id="nama<?php echo $row[0]; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h4 class="modal-title" id="exampleModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <!-- Start service Area -->
                    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
                      <div class="container">
                        <div class="row d-flex justify-content-center">
                          <div class="col-md-12 pb-10 header-text">
                            <h4 style="margin-top:-10px">DETAIL USER</h4>
                            <p>Informasi Lengkap User</p>
                          </div>
                        </div>
                        <hr>
                        <?php
                          $id    = $row[0];
                          $data1 = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$id'");
                          while ($row1=mysqli_fetch_row($data1))
                            {
                         ?>
                        <div class="row">
                          <form action="proses/user.php?id=edit&data=<?php echo $row1[0]; ?>" method="post">

                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="uk" style="width:100%">Nama
                                <input type="text" name="nama" id="nama" value="<?php echo $row1[1]; ?>" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="lokasi"  style="width:100%">Email
                                <input type="text" name="email" id="email" value="<?php echo $row1[3]; ?>" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="lokasi"  style="width:100%">Jabatan
                                <input type="text" name="jabatan" id="jabatan" value="<?php echo $row1[2]; ?>" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <div class="form-group">
                              <label for="lokasi"  style="width:100%">PT
                                <input type="text" name="pt" value="<?php echo $row1[5]; ?>" class="form-control">
                              </label>
                            </div>
                          </div>
                          <div class="col-md-12">
                            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Edit</button>
                            <a href="proses/user.php?id=hapus&data=<?php echo $id; ?>" class="btn btn-danger" name="button" style="width:100%;margin-top:10px;">Delete</a>
                          </div>
                        </div>
                      </form>
                      </div>
                    </section>
                    <!-- <iframe src="detail-user.php?id=<?php echo $row[0]; ?>" width="100%" height="450px" style="border:none;"></iframe> -->
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?php echo $row[2]; ?>
          </div>
        </div>
      </form>
    <?php }} ?>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <a style="width:100%;color:#fff" name="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal"> Tambah </a>
          <!-- Modal -->
          <div id="myModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

              <!-- Modal content-->
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="modal-title" id="exampleModalLabel"></h4>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <h4 style="text-align:center">Tambah User</h4>
                  <br>
                  <form class="" action="proses/user.php?id=tambah" method="post">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="uk" style="width:100%">Nama
                          <input type="text" name="nama" id="nama" value="" class="form-control">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="lokasi"  style="width:100%">Email
                          <input type="text" name="email" id="email" value="" class="form-control">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="lokasi"  style="width:100%">Jabatan
                          <select class="form-control" name="jabatan">
                            <option selected> -- Pilih Jabatan --</option>
                            <option value="Manajer">Manajer</option>
                            <option value="Kontraktor">Kontraktor</option>
                            <option value="Kasi">Kepala Seksi</option>
                            <option value="SO">Safety Officier</option>
                            <option value="Admin">Admin</option>
                          </select>
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label for="uk" style="width:100%">Kontraktor
                          <select class="form-control" name="kontraktor">
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
                        <label for="pass"  style="width:100%">Password
                          <input type="password" name="pass" id="pass" value="" class="form-control">
                        </label>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <button type="submit" class="btn btn-primary" name="button" style="width:100%">Simpan</button>
                    </div>
                  </div>
                </form>
                </div>
                <div class="modal-footer">
                  <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                </div>
              </div>

            </div>
          </div>
          <hr>
          <h4 style="margin-bottom:10px">Data Kontraktors</h4>
          <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
            <div class="col-2">
              No
            </div>
            <div class="col-10">
              Nama Kontraktor
            </div>
          </div>
          <?php
          $no   = 1;
          $a    = mysqli_query($connect, "SELECT * FROM `kontraktor`");
          while ($kontraktor = mysqli_fetch_array($a)) {
          ?>
          <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
            <div class="col-1" style="text-align:center">
              <?php echo $no;$no++; ?>
            </div>
            <div class="col-10">
              <font style="padding-left:10px;"><?php echo $kontraktor['nama']; ?></font>
          </div>
        </div>
          <?php
          }
           ?>

           <div id="kontraktor" class="modal fade" role="dialog">
             <div class="modal-dialog">

               <!-- Modal content-->
               <div class="modal-content">
                 <div class="modal-header">
                   <h4 class="modal-title" id="exampleModalLabel"></h4>
                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">&times;</span>
                   </button>
                 </div>
                 <div class="modal-body">
                   <h4 style="text-align:center">Tambah Kontraktor</h4>
                   <br>
                   <form class="" action="proses/user.php?id=kontraktor" method="post">
                   <div class="row">
                     <div class="col-md-12">
                       <div class="form-group">
                         <label for="uk" style="width:100%">Nama
                           <input type="text" name="nama" id="nama" value="" class="form-control">
                         </label>
                       </div>
                     </div>
                     <div class="col-md-12">
                       <div class="form-group">
                           <input type="submit" value="Simpan" class="btn btn-success" style="width:100%">
                       </div>
                     </div>
                   </form>
                 </div>
                 <div class="modal-footer">
                   <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                 </div>
               </div>

             </div>
           </div>
         </div>
          <a style="width:100%;margin-top:20px;color:#fff" name="button" class="btn btn-primary" data-toggle="modal" data-target="#kontraktor"> Tambah Kontraktor </a>
          <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
      </div>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
