<?php include "proses/koneksi.php"; ?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
  <!-- Mobile Specific Meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Favicon-->
  <link rel="shortcut icon" href="img/fav.png">
  <!-- Author Meta -->
  <meta name="author" content="Colorlib">
  <!-- Meta Description -->
  <meta name="description" content="">
  <!-- Meta Keyword -->
  <meta name="keywords" content="">
  <!-- meta character set -->
  <meta charset="UTF-8">
  <!-- Site Title -->
  <title>SEMEN INDONESIA</title>

  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet">
    <!--
    CSS
    ============================================= -->
    <link rel="stylesheet" href="css/linearicons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/swiper.min.css">
    <link rel="stylesheet" href="css/swiper.css">
    <link rel="stylesheet" href="css/main.css">
  </head>
  <body>

    <!-- Start service Area -->
    <section class="service-area section-gap" id="facilities" style="padding-top:40px;">
      <div class="container">
        <form class="" action="temuan.php" method="post">
        <div class="row d-flex justify-content-center">
          <div class="col-md-12 pb-10 header-text">
            <h4 style="margin-top:-10px">DETAIL USER</h4>
            <p>Informasi Lengkap User</p>

          </div>
        </div>
        <hr>
        <?php
          $data   = $_REQUEST['id'];
          $data = mysqli_query($connect, "SELECT * FROM `user` WHERE `id` = '$data'");
          while ($row=mysqli_fetch_row($data))
            {
         ?>
        <div class="row">
          <div class="col-md-12">
            <div class="form-group">
              <label for="uk" style="width:100%">Nama
                <input type="text" name="nama" id="nama" value="<?php echo $row[1]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%">Email
                <input type="text" name="email" id="email" value="<?php echo $row[3]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="lokasi"  style="width:100%">Jabatan
                <input type="text" name="jabatan" id="jabatan" value="<?php echo $row[2]; ?>" class="form-control">
              </label>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-primary" name="button" style="width:100%">Edit</button>
            <a href="proses/user.php?id=hapus&data=<?php echo $row[0]; ?>" class="btn btn-danger" name="button" style="width:100%;margin-top:10px;">Delete</a>
          </div>
        </div>
      </form>
    <?php } ?>
      </div>
    </section>
    <!-- End service Area -->

<?php include "footer.php"; ?>
