<?php include_once("../configure.php");?>
<!doctype html>
<html class="fixed">
  <head>
  <!-- Basic -->
  <meta charset="UTF-8">
  <meta name="keywords" content=":: Inquilab Admin Pannel ::" />
  <meta name="description" content=":: Inquilab Admin Pannel ::">
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <!-- Web Fonts  -->
  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
  <!-- Vendor CSS -->
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap/css/bootstrap.css" />
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/font-awesome/css/font-awesome.css" />
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/magnific-popup/magnific-popup.css" />
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-datepicker/css/datepicker3.css" />
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme.css" />
  <!-- Skin CSS -->
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/skins/default.css" />
  <!-- Theme Custom CSS -->
  <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme-custom.css">
  <!-- Head Libs -->
  <script src="assets/vendor/modernizr/modernizr.js"></script>
</head>
<body>
  <!-- start: page -->
  <section class="body-sign">
    <div class="center-sign">
      <div class="panel panel-sign">
        <div class="panel-title-sign mt-xl text-right"><h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Recover Password</h2></div>
          <div class="panel-body">
          <div class="alert alert-info"><p class="m-none text-weight-semibold h6">Enter your e-mail below and we will send you reset instructions!</p></div>
              <form method="post" action="<?php echo $domain?>admin/forgot-password-submit.php">
                  <div class="form-group mb-none">
                      <div class="input-group">
                          <input name="email1" id="email1" type="email" placeholder="E-mail" required="required" class="form-control input-lg" />
                          <span class="input-group-btn"><button class="btn btn-primary btn-lg" type="submit">Reset!</button></span>
                        </div>
                </div>
                <p class="text-center mt-lg">Remembered? <a href="<?php echo $domain?>admin">Sign In!</a>
                </form>
              </div>
            </div>
            <p class="text-center text-muted mt-md mb-md">Inquilab.com © Copyright 2019. All Rights Reserved.</p>
      </div>
  </section>
  <!-- end: page -->
  <!-- Vendor -->
  <script src="<?php echo DIR_WS_ASSETS?>vendor/jquery/jquery.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/bootstrap/js/bootstrap.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/nanoscroller/nanoscroller.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/magnific-popup/magnific-popup.js"></script>
  <script src="<?php echo DIR_WS_ASSETS?>vendor/jquery-placeholder/jquery.placeholder.js"></script>
  <!-- Theme Base, Components and Settings -->
  <script src="<?php echo DIR_WS_ASSETS?>javascripts/theme.js"></script>
  <!-- Theme Custom -->
  <script src="<?php echo DIR_WS_ASSETS?>javascripts/theme.custom.js"></script>
  <!-- Theme Initialization Files -->
  <script src="<?php echo DIR_WS_ASSETS?>javascripts/theme.init.js"></script>
</body>
</html>
