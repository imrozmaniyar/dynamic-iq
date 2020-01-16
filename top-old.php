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
    <?php include("seo-meta-data.php");?>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $domain?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/style.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/font-awesome.min.css">
    
    <?php include("gacom.php");?>
    <script>var domain_name="<?php echo mysql_escape_mimic($domain)?>search/" </script> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="330923446263-u77b5tghhfukfk0ael26dd6bprpjc1cs.apps.googleusercontent.com">
  </head>
  <body>
<!-- <script src="http://connect.facebook.net/en_US/all.js"></script>
<script>
FB.init(
  {
    appId: '289797971716379', cookie: true,
    status: true, xfbml: true
  }
);
</script>
<script>
  function FBlogin(){
    FB.api('/me', function(response){
        alert("You are logged in now to your account.");
        var profile_fbid = response.id;
        var profile_fname = response.first_name;
        var profile_lname = response.last_name;
        var profile_email = response.email;
        var profile_gender = response.gender;
        window.location="<?php //echo $domain?>registration/checkmember_fb.php?p_fname=" + profile_fname + "&p_lname=" + profile_lname + "&p_fbid=" + profile_fbid + "&p_email=" + profile_email + "&p_gender=" + profile_gender;
      }
    );
  }
</script> -->  
<!-- <script type="text/javascript">
function onSignIn(googleUser) {
  var profile = googleUser.getBasicProfile();
  console.log('ID: ' + profile.getId()); // Do not send to your backend! Use an ID token instead.
  console.log('Name: ' + profile.getName());
  console.log('Image URL: ' + profile.getImageUrl());
  console.log('Email: ' + profile.getEmail()); // This is null if the 'email' scope is not present.
}  
</script> -->  
    <section id="topbar" class="d-none d-lg-block">
      <div class="container clearfix">
        <div class="left-topbar float-left mt-2">
          <ul class="list-inline mb-0">
            <?php if($uid==""):?>
            <li class="list-inline-item mr-3"><a href="<?php echo $domain?>login"><button type="button" class="btn btn-login">Login</button></a></li>
            <?php else:?>
            <li class="list-inline-item mr-3">
              <div class="dropdown">
              <button type="button" class="btn btn-login btn-secondary dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo htmlspecialchars($Ffullname,ENT_QUOTES, 'UTF-8');?></button>
              <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                <a href="<?php echo $domain?>myprofile"><button class="dropdown-item" type="button">My Profile</button></a>
                <a href="<?php echo $domain?>changepassword"><button class="dropdown-item" type="button">Change Password</button></a>
                <a href="<?php echo $domain?>logout"><button class="dropdown-item" type="button">Logout</button></a>
              </div>
            </div>
            </li>
          <?php endif;?>
            <li class="list-inline-item mr-3"><a href="https://epaper.inquilab.com/epaper/" class="home-href" target="_blank"><p class="">EPAPER</p></a></li>
            <li class="list-inline-item">
              <div class="d-flex justify-content-center h-50">
                <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" />
                <form method="post" id="songs-search-form">
                <div class="searchbar">
                  <input class="search_input" type="text" name="songs-search-text" id="songs-search-text" placeholder="Search..." required="required">
                  <button type="submit" class="search_icon"><i class="fa fa-search"></i></button>
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
              <a class="navbar-brand d-lg-none mobile-logo-width" href="#"><img src="<?php echo $domain?>images/footer-logo.png" class="img-fluid" alt=""></a>
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