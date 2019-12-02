<?php
session_start();
include "secure.php";
include("../configure.php");
session_regenerate_id();
$AdminSession_ID = $_SESSION['AdminSession_ID'];
$AdminSession_NAME = $_SESSION['AdminSession_NAME'];
include_once(DIR_WS_CLASS."db_admin_parameters.php");
$objbmasterTop  = new db_admin_parameters($AdminSession_ID);
$au_name_top    = $objbmasterTop->get_admin_name();
$au_name_top1    = $objbmasterTop->get_admin_name();
$au_name_role   = $objbmasterTop->get_admin_role();
?>
<!doctype html>
<html class="fixed sidebar-left-collapsed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>:: Inquilab Admin Pannel ::</title>
		<meta name="keywords" content=":: Inquilab Admin Pannel :: "/>
		<meta name="description" content=" :: Inquilab Admin Pannel :: ">
		<meta name="author" content=":: Inquilab Admin Pannel ::">


		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
		<!-- Web Fonts  -->
		<link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap/css/bootstrap.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-datepicker/css/datepicker3.css" />
		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/morris/morris.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/select2/select2.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/pnotify/pnotify.custom.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/lineicons/css/lineicons.css" />
	    <link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />

		<!-- <link href="//cdnjs.cloudflare.com/ajax/libs/summernote/0.8.11/summernote-bs4.css" rel="stylesheet"> -->
		<!-- Theme CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme.css" />
		<!-- Skin CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/skins/default.css" />
		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="<?php echo DIR_WS_ASSETS?>stylesheets/theme-custom.css">
		<!-- Head Libs -->
		<script src="<?php echo DIR_WS_ASSETS?>vendor/jquery/jquery.js"></script>
		<!-- <script src="<?php //echo DIR_WS_ASSETS?>javascripts/jsapi.js"></script> -->
		<script src="<?php echo DIR_WS_ASSETS?>vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">
		<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
				<div class="header-right">
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture"><img src="<?php echo $domain?>assets/images/admin-login.jpg" alt="<?php echo htmlspecialchars($au_name_top,ENT_QUOTES, 'UTF-8');?>" class="img-circle" data-lock-picture="<?php echo $domain?>assets/images/!logged-user.jpg" /></figure>
							<div class="profile-info">
								<span class="name"><?php echo htmlspecialchars($au_name_top,ENT_QUOTES, 'UTF-8');?></span>
									<span class="role"><?php echo htmlspecialchars($au_name_role,ENT_QUOTES, 'UTF-8');?></span>
							</div>
							<i class="fa custom-caret"></i>
						</a>
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li><a role="menuitem" tabindex="-1" href="<?php echo $domain?>admin/changeprofile.php"><i class="fa fa-user"></i> My Profile</a></li>
								<li><a role="menuitem" tabindex="-1" href="<?php echo $domain?>admin/logout.php"><i class="fa fa-power-off"></i> Logout</a></li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
