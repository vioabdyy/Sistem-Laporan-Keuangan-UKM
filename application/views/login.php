<!doctype html>
<html lang="en">
<head>
  <title>PBL K3 | <?= $title ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="<?= base_url('assets/lte/'); ?>plugins/fontawesome-free/css/all.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/lte/'); ?>plugins/style1.css">
  <link rel="shortcut icon" href="<?= base_url('assets/lte/'); ?>dist/">
  
  
</head>
<style>
  input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
  input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }

  input[type=submit] {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
  }
  input[type=placeholder] {
    color: red;
    opacity: 1; /* Firefox */
  }


  input[type=submit]:hover {
    background-color: #45a049;
  }
</style>
<br><br>
<body class="img js-fullheight" style="background-image: url(<?= base_url('assets/lte/'); ?>dist/img/111.jpg);" style="margin-left: 20px;">

  <section class="ftco-section">
    <div class="container">
      <div class="card" style="margin-right:20%;margin-left: 20%;border-radius: 25px;background-color: #343A40;">
        <div class="card-body" >
          <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-">
              <h2 class="heading-section" style="color:white;"><b> Sistem Laporan Keuangan UKM</b> </h2>
              <br>
            </div>
          </div>

          <div class="row justify-content-center">
            <div class="login-wrap p-0">
              <div class="row justify-content-center">
                <div class="col-md-12 text-center mb-">
                  <div class="image">
                    <img src="<?= base_url('assets/lte/'); ?>dist/img/10.jpg" style="text-align: center; width: 140px;border-radius: 50%;

                    ">
                  </div>
                </div>
              </div>
              <br>
              <form action="<?php echo base_url('Welcome/login') ?>" method="POST">

                <div class="form-group">
                  <!-- <label class="fw-semibold" for="username" style="color:white;"></label> -->
                  <input class="form-control" type="text" name="username" id="email"placeholder=" Username" required style="border: solid 1px white;">
                  <?php echo form_error('username','<div class="text-small text-deanger"></div>') ?>
                </div>

                <div class="form-group mt-2">
                  <!-- <label class="fw-semibold" for="password" style="color: white;"></label> -->
                  <input class="form-control" type="password" name="password" id="password"placeholder=" Password" required style="border: solid 1px white;"><?php echo form_error('password','<div class="text-small text-deanger"></div>') ?>
                </div>

                <div class="form-group">
                  <div class="row justify-content-center">
                    <button class="btn fw-semibold mt-3 text-white" style="width: 50%; border-radius: 50px; background-color: #7289da;" type="submit" name="login">LOGIN</button>
                  </div>
                </div>



              </div>
                 <!--  <div class="w-50 text-md-right">
                    <a href="register.php" style="color: #fff">Register</a>
                  </div> -->
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>

    <script src="js/jquery.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>

  </body>
  </html>

