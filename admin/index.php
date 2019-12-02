<?php
session_regenerate_id();
unset($Auserid);
@session_destroy();
include_once("../configure.php");
include_once(DIR_WS_CLASS . "messages.php");
$msgId = "";
$msgId = $_GET['msgid'];
$objMsg = new message($msgId);
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">
		<title>:: Inquilab Admin Pannel ::</title>
		<meta name="keywords" content=":: Inquilab :: "/>
		<meta name="description" content=" :: Inquilab :: ">
		<meta name="author" content=":: Inquilab ::">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-datepicker/css/datepicker3.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="<?php echo DIR_WS_ASSETS?>vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<!-- start: page -->
		<section class="body-sign">
			<div class="center-sign">
				<div class="panel panel-sign">
					<div class="panel-title-sign mt-xl text-right">
						<h2 class="title text-uppercase text-weight-bold m-none"><i class="fa fa-user mr-xs"></i> Sign In</h2>
					</div>
					<div class="panel-body">
						<form method="post" action="<?php echo $domain?>admin/checkmember.php" autocomplete="off">
							<div class="form-group mb-lg">
								<label>Username</label>
								<div class="input-group input-group-icon">
									<input name="login" id="login" tabindex="1" required="required" placeholder="Username" type="text" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-user"></i>
										</span>
									</span>
								</div>
							</div>

							<div class="form-group mb-lg">
								<div class="clearfix">
									<label class="pull-left">Password</label>
									<a href="password-recover.php" class="pull-right">Lost Password?</a>
								</div>
								<div class="input-group input-group-icon">
									<input type="password" name="password" tabindex="2" id="lqlogin-password" required="required" placeholder="Password" class="form-control input-lg" />
									<span class="input-group-addon">
										<span class="icon icon-lg">
											<i class="fa fa-lock"></i>
										</span>
									</span>
								</div>
							</div>
							<div class="row">
								<div class="col-sm-8">
									<div class="checkbox-custom checkbox-default">
										<!-- <input id="RememberMe" name="rememberme" type="checkbox"/>
										<label for="RememberMe">Remember Me</label> -->
									</div>
								</div>
								<div class="col-sm-4 text-right">
									<button type="submit" class="btn btn-primary hidden-xs">Sign In</button>
									<button type="submit" class="btn btn-primary btn-block btn-lg visible-xs mt-lg">Sign In</button>
								</div>
							</div>

<!-- 							<span class="mt-lg mb-lg line-thru text-center text-uppercase">
								<span>or</span>
							</span>

							<div class="mb-xs text-center">
								<a class="btn btn-facebook mb-md ml-xs mr-xs">Connect with <i class="fa fa-facebook"></i></a>
								<a class="btn btn-twitter mb-md ml-xs mr-xs">Connect with <i class="fa fa-twitter"></i></a>
							</div>

							<p class="text-center">Don't have an account yet? <a href="pages-signup.html">Sign Up!</a>
 -->
							<?php if ($msgId != ""):?><font color="red"><?php echo $objMsg->get_message(); ?></font><?php endif; ?>
						</form>
					</div>
				</div>

				<p class="text-center text-muted mt-md mb-md">Inquilab.com &copy; Copyright 2019. All Rights Reserved.</p>
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
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script src="<?php echo DIR_WS_ASSETS?>javascripts/md5.js"></script>
		<script>
		    $(document).ready(function(){
		        $("form").on('submit', function(){
		            $("#lqlogin-password").val($.md5($.md5($("#lqlogin-password").val())));
		    });});
		</script>
	</body>
</html>
