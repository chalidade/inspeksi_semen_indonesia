			<?php include "header.php"; ?>

			<!-- Start service Area -->
			<section class="service-area section-gap" id="facilities" style="padding-top:40px;">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="col-md-8 pb-10 header-text">
							<!-- <h1>Menu</h1> -->
							<!-- <p>	</p> -->
						</div>
					</div>
					<div class="row">
						<?php
						if ($_SESSION['jabatan'] == "Admin") { ?>
						<div class="col-4">
						  <div class="content">
						    <a href="manage-user.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/012-employee-1.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Manage User</h3>
						</div>
						<div class="col-4">
						  <div class="content">
						    <a href="form.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/021-dossier.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Mangisi Form</h3>
						</div>
						<div class="col-4">
						  <div class="content">
						    <a href="data-laporan.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/014-video-conference.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Manerima Laporan</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="laporan_harian.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/036-employee-2.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Inspeksi Kontraktor</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="data-inspeksi.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/008-analytics.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Hasil Inspeksi</h3>
						</div>
						<!-- <div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="validasi.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/035-protection-1.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Validasi</h3>
						</div> -->
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="../index.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Logout</h3>
						</div>
					<?php } else if($_SESSION['jabatan'] == "SO") { ?>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="manage-user.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/012-employee-1.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Manage User</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="data-laporan.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/014-video-conference.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Manerima Laporan</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="laporan_harian.php">
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/036-employee-2.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Inspeksi Kontraktor</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="../index.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Logout</h3>
						</div>
					<?php } else if($_SESSION['jabatan'] == "Kasi") { ?>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="data-laporan.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/014-video-conference.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Menerima Laporan</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="data-inspeksi.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/008-analytics.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Hasil Inspeksi</h3>
						</div>
						<!-- <div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="validasi.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/035-protection-1.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Validasi</h3>
						</div> -->
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="../index.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Logout</h3>
						</div>
					<?php } else if($_SESSION['jabatan'] == "Kontraktor") { ?>
						<div class="col-4">
							<div class="content" style="margin-top:30px;">
								<a href="form.php">

									 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/021-dossier.png" alt=
								</a>
							</div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Mangisi Form</h3>
						</div>
						<div class="col-4">
							<div class="content" style="margin-top:30px;">
								<a href="data-inspeksi.php">

									 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/008-analytics.png" alt=
								</a>
							</div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Hasil Inspeksi</h3>
						</div>
						<div class="col-4" style="margin-top:30px;">
						  <div class="content">
						    <a href="data-laporan.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/014-video-conference.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Manerima Laporan</h3>
						</div>
						<div class="col-4">
							<div class="content" style="margin-top:30px;">
								<a href="../index.php">

									 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt=
								</a>
							</div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Logout</h3>
						</div>
					<?php } else if($_SESSION['jabatan'] == "Manager") { ?>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="data-inspeksi.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/008-analytics.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Hasil Inspeksi</h3>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="../index.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/041-employee-3.png" alt="">
						    </a>
						  </div>
							<h3 class="content-title" style="font-size:11px;color:#000;text-align:center;margin-top:10px;">Logout</h3>
						</div>
					<?php } ?>
						<!-- <div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="laporan_harian.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/checklist.png" alt="">
						    </a>
						  </div>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="#">
						      <div class="content-overlay"  style="border-radius:20px"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/form.png" alt="">
						    </a>
						  </div>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="#">
						      <div class="content-overlay"  style="border-radius:20px"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/calendar.png" alt="">
						    </a>
						  </div>
						</div>
					</div>
					<div class="row" style="margin-top:60px">
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="rute.php">

						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/info.png" alt="">
						    </a>
						  </div>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="#">
						      <div class="content-overlay"  style="border-radius:20px"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/clock.png" alt="">
						    </a>
						  </div>
						</div>
						<div class="col-4">
						  <div class="content" style="margin-top:30px;">
						    <a href="#">
						      <div class="content-overlay"  style="border-radius:20px"></div>
						  		 <img class="content-image img-fluid d-block mx-auto" style="width:80%;" src="img/destination.png" alt="">
						    </a>
						  </div>
						</div> -->
					</div>
				</div>
			</section>
			<!-- End service Area -->

		<?php include "footer.php"; ?>
