<?php include "header.php"; ?>


    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">VALIDASI</h4>
            <p>VALIDASI LAPORAN MASUK </p>
          </div>
        </div>
        <hr>
        <div class="row" style="background:#242424;padding:10px;color:#fff;margin-left:1px;margin-right:1px;">
          <div class="col-2">
            No
          </div>
          <div class="col-6">
            Nama Petugas
          </div>
          <div class="col-4">
            Tanggal
          </div>
        </div>
        <?php
          $no   = 1;
          $data = mysqli_query($connect, "SELECT * FROM `user` ORDER BY `user`.`id`  DESC");
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row" style="border:solid thin #d4d4d4;color:#000;margin-left:1px;margin-right:1px;">
          <div class="col-2" style="text-align:center">
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
                    <iframe src="detail-user.php?id=<?php echo $row[0]; ?>" width="100%" height="450px" style="border:none;"></iframe>
                  </div>
                  <div class="modal-footer">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <?php echo date('d/m/Y'); ?>
          </div>
        </div>
      </form>
      <?php } ?>
      <div class="row" style="margin-top:20px;">
        <div class="col-md-12">
          <a href="index.php" type="button" style="width:100%;margin-top:10px;" name="button" class="btn btn-danger"> Kembali </a>
        </div>
      </div>

      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
