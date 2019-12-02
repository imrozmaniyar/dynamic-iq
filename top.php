<?php
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
//session_regenerate_id();
session_start();
include("../secure.php");
include("configure.php");
if(isset($_SESSION['Suserid'])):
    $uid = intval($_SESSION['Suserid']);
endif;
if (isset($_SESSION['fullname'])):
    $Ffullname = $_SESSION['fullname'];
endif;
if(isset($_SESSION['Sflag'])):
    $userflag = $_SESSION['Sflag'];
endif;
$urllogin = "http://" . mysql_escape_mimic($_SERVER['HTTP_HOST']). mysql_escape_mimic($_SERVER['REQUEST_URI']);
//$params = explode( "/",  mysql_real_escape_string($url));-----for some use do not delete
 
include("loginc.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $domain?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/style.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/font-awesome.min.css">
    <?php include("seo-meta-data.php");?>
    <?php include("gacom.php");?>
    <script>var domain_name="<?php echo mysql_escape_mimic($domain)?>search/" </script> 
  </head>
  <body>
    <section id="topbar" class="d-none d-lg-block">
      <div class="container clearfix">
        <div class="left-topbar float-left mt-2">
          <ul class="list-inline mb-0">
            <?php if($uid==""):?>
            <li class="list-inline-item mr-3"><a href="<?php echo $domain?>login"><button type="button" class="btn btn-login text-white">Login</button></a></li>
            <?php else:?>
            <li class="list-inline-item mr-3">
              <div class="dropdown">
              <button type="button" class="btn btn-login text-white dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($Ffullname,ENT_QUOTES, 'UTF-8');?></button>
              <div class="dropdown-menu font-family-roboto" aria-labelledby="dropdownMenu2">
                <a href="<?php echo $domain?>myprofile"><button class="dropdown-item text-black" type="button">My Profile</button></a>
                <a href="<?php echo $domain?>changepassword"><button class="dropdown-item text-black" type="button">Change Password</button></a>
                <a href="<?php echo $domain?>logout"><button class="dropdown-item text-black" type="button">Logout</button></a>
              </div>
            </div>
            </li>
          <?php endif;?>
            <li class="list-inline-item mr-3"><a href="https://epaper.inquilab.com/epaper/" class="home-href" target="_blank"><p class="">EPAPER</p></a></li>
            <li class="list-inline-item">
              <div class="d-flex justify-content-center h-50">
                <form method="post" id="songs-search-form">                            
                <div class="searchbar">
                  <input class="search_input" type="text" name="search" id='songs-search-text' placeholder="Search..." required="required">
                  <a href="#" class="search_icon"><i class="fa fa-search"></i></a>
                </div>
               </form>   
              </div>
            </li>
          </ul>
        </div>
        <div class="right-topbar float-right"><a href="<?php echo $domain?>"><img src="<?php echo $domain?>images/logo.png" class="img-fluid" alt=""></a>
        </div>
      </div>
    </section>
    <section>
      <header>
        <nav class="navbar navbar-expand-lg" data-toggle="sticky-onscroll">
          <div class="container">
              <a class="navbar-brand d-lg-none mobile-logo-width" href="#"><img src="images/footer-logo.png" class="img-fluid" alt=""></a>
              <button class="navbar-toggler nav-toggle-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars text-white"></span>
                  <span class="sr-only">Toggle navigation</span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mr-3 mr-lg-0">

                      <li class="nav-item active">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>photos" alt="Photos" title="Photos">  تصویریں <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>

                      <li class="nav-item active">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>videos" alt="Videos" title="Videos">    ویڈیوز   <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>

                      <li class="nav-item active">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>students" alt="Students" title="Students">بچے۔ / طلباء۔ <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>lifestyle" alt="Lifestyle" title="Lifestyle">طرز زندگی۔</a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>features" alt="Features" title="Features">- خصوصیات</a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>sports" alt="Sports" title="Sports">کھیل</a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>entertainment" alt="Entertainment" title="Entertainment">تفریح</a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news" alt="News" title="News">خبریں</a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news/mumbai" alt="Mumbai" title="Mumbai">ممبئی۔</a>
                      </li>
                  </ul>
              </div>
          </div>
        </nav>
      </header>
    </section>
    <!-- first section -->