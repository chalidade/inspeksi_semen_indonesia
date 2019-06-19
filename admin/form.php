<?php include "header.php"; ?>

<!-- Start service Area -->
<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
  <div class="container">
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 pb-10 header-text">
        <!-- <h1>Cari Apa</h1> -->
        <!-- <p>	</p> -->
      </div>
    </div>
    <div class="row">
      <?php
      session_start();
      $klik 	= $_REQUEST['klik'];
      ?>
      <div class="col-4">
        <div class="content" style="margin-top:30px;">
          <a href="harian.php">
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/033-target-1.png" alt="">
          </a>
        </div>
        <h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Laporan Harian</h3>
      </div>
      <div class="col-4">
        <div class="content" style="margin-top:30px;">
          <a href="mingguan.php">
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/044-teamwork-4.png" alt="">
          </a>
        </div>
        <h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Laporan Mingguan</h3>
      </div>
      <div class="col-4">
        <div class="content" style="margin-top:30px;">
          <a href="bulanan.php">
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/023-teamwork-1.png" alt="">
          </a>
        </div>
        <h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Laporan Bulanan</h3>
      </div>
      <div class="col-4">
        <div class="content" style="margin-top:30px;">
          <a href="index.php">
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt="">
          </a>
        </div>
        <h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Kembali</h3>
      </div>
      <!-- <div class="col-4">
        <div class="content">
          <a href="laporan_harian.php">
            <div class="content-overlay" style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/checklist.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title" style="font-size:12px;">Laporan Harian</h3>
            </div>
          </a>
        </div>
      </div>
      <div class="col-4">
        <div class="content">
          <a href="#">
            <div class="content-overlay"  style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/form.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title"  style="font-size:12px;">Laporan Mingguan </h3>
            </div>
          </a>
        </div>
      </div>
      <div class="col-4">
        <div class="content">
          <a href="#">
            <div class="content-overlay"  style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/calendar.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title"  style="font-size:12px;">Laporan Bulanan </h3>
            </div>
          </a>
        </div>
      </div>
    </div>
    <div class="row" style="margin-top:60px">
      <div class="col-4">
        <div class="content">
          <a href="rute.php">
            <div class="content-overlay" style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/info.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title" style="font-size:12px;">Laporan Kecelakaan</h3>
            </div>
          </a>
        </div>
      </div>
      <div class="col-4">
        <div class="content">
          <a href="#">
            <div class="content-overlay"  style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/clock.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title"  style="font-size:12px;">Result </h3>
            </div>
          </a>
        </div>
      </div>
      <div class="col-4">
        <div class="content">
          <a href="#">
            <div class="content-overlay"  style="border-radius:20px"></div>
             <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/destination.png" alt="">
            <div class="content-details fadeIn-bottom">
              <h3 class="content-title"  style="font-size:12px;">Temuan </h3>
            </div>
          </a>
        </div>
      </div> -->
    </div>
  </div>
</section>
<!-- End service Area -->

<?php include "footer.php"; ?>
