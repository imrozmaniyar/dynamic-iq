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

$string = $Ffullname;

function initials($str) {
    $ret = '';
    foreach (explode(' ', $str) as $word)
        $ret .= strtoupper($word[0]);
    return $ret;
}
include("loginc.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php include_once("seo-meta-data.php");?>
     <link rel="canonical" href=<?php echo $urllogin?> />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo $domain?>css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/style.css">
    <link rel="stylesheet" href="<?php echo $domain?>css/font-awesome.min.css">
    <?php include("gacom.php");?>
    <script>var domain_name="<?php echo mysql_escape_mimic($domain)?>search/" </script> 
    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <meta name="google-signin-client_id" content="330923446263-u77b5tghhfukfk0ael26dd6bprpjc1cs.apps.googleusercontent.com">
    <style type="text/css">
      .animate {
    -webkit-transition: all 0.3s ease-in-out;
  -moz-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
 .bootsnipp-search {
  display: none;
}
 .bootsnipp-search .form-control {
  background-color: #fff;
    border-radius: 0px;
    border-width: 0px;
    font-size: 16px;
    padding: 15px 0px 15px 10px;
    border: 1px solid #e5e5e5;
}
 .bootsnipp-search .form-control:focus {
  outline: 0;
  -webkit-box-shadow: none;
  box-shadow: none;
}
   .bootsnipp-search {
    background-color: #fff;
    display: block;
    position: absolute;
    top: 100%;
    width: 100%;
    left: 0;
    -webkit-transform: rotateX(-90deg);
    -moz-transform: rotateX(-90deg);
    -o-transform: rotateX(-90deg);
    -ms-transform: rotateX(-90deg);
    transform: rotateX(-90deg);
    -webkit-transform-origin: 0 0 0;
    -moz-transform-origin: 0 0 0;
    -o-transform-origin: 0 0 0;
    -ms-transform-origin: 0 0 0;
    transform-origin: 0 0 0;
    visibility: hidden;
  }
   .bootsnipp-search.open {
    -webkit-transform: rotateX(0deg);
    -moz-transform: rotateX(0deg);
    -o-transform: rotateX(0deg);
    -ms-transform: rotateX(0deg);
    transform: rotateX(0deg);
    visibility: visible;  
  }
   .bootsnipp-search > .container {
    padding: 0px;
  }    
  .btn-search {
    color: #fff;
    background-color: #023e86;
    border-color: #023e86;
    text-transform: uppercase;
}
.ui-tooltip {
  text-align:left;
}  
.sb-search-open,
.no-js .sb-search-open{
  width:250px;
}
    </style>
    <!--Google Ads tag-->    
     <!--  <script async="async" src="https://securepubads.g.doubleclick.net/tag/js/gpt.js"></script>
      <script> window.googletag = window.googletag || {cmd: []};</script> -->
  <script async='async' src='https://www.googletagservices.com/tag/js/gpt.js'></script>
  <script>
      var googletag = googletag || {};
      googletag.cmd = googletag.cmd || [];
    </script>
    <script>
        googletag.cmd.push(function(){
        googletag.defineSlot('/13276288/Inquilab/Desktop/home/pagepush_980x50', [[980, 270], [728, 90], [980, 60], [980, 50]], 'iq_pagepush').addService(googletag.pubads());
        googletag.defineSlot('/13276288/Inquilab/mobile/detail/top_300x250', [[300, 250], [336, 280]], 'iq_pagepushM').addService(googletag.pubads());
        googletag.defineSlot('/13276288/Inquilab/Desktop/home/pagepush_980x50', [[980, 270], [728, 90], [980, 60], [980, 50]], 'iq_pagepushB').addService(googletag.pubads());
        googletag.defineSlot('/13276288/Inquilab/mobile/detail/top_300x250', [[300, 250], [336, 280]], 'iq_pagepushMB').addService(googletag.pubads());        
        googletag.defineSlot('/13276288/Inquilab/mobile/detail/medium_300x250', [[300, 250], [336, 280]], 'iq_pagepushVM').addService(googletag.pubads());
        googletag.defineSlot('/13276288/Inquilab/mobile/home/bottom_300x250', [[300, 250], [336, 280]], 'iq_pagepushSM').addService(googletag.pubads());
        googletag.pubads().set("page_url", "https://www.inquilab.com");
        googletag.pubads().collapseEmptyDivs();
        googletag.enableServices();
        googletag.display("iq_pagepush");
        googletag.display("iq_pagepushM");
        googletag.display("iq_pagepushB");
        googletag.display("iq_pagepushMB");
        googletag.display("iq_pagepushVM");
        googletag.display("iq_pagepushSM");
    }); 
    </script>      
    <!--Google Ads tag-->    
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
</script>     -->
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
              <link rel="stylesheet" type="text/css" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.css" />                
                <form method="post" id="songs-search-form">                            
                <div class="searchbar" >
                  <input class="search_input" type="text" name="songs-search-text" id="songs-search-text" placeholder="Search..." required="required" style="text-align: left;">
                  <button type="submit" class="search_icon search-icon-js"><i class="fa fa-search"></i></button>
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
              <div class="navbar-brand d-lg-none">
                <ul class="list-inline mt-2 mb-2 animate">
                  <li class="list-inline-item hidden-xs"><a href="#toggle-search" class="animate"><span class="fa fa-search text-white"></span></a></li>
                   <?php if($uid==""):?>
                  <li class="list-inline-item"><a href="<?php echo $domain?>login"><button type="button" class="btn btn-login text-white">Login</button></a></li>
                  <?php else:?>
                  <li class="list-inline-item mr-3">
                    <div class="dropdown">
                      <button type="button" class="btn btn-login text-white dropdown-toggle" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo initials($string);?></button>
                      <div class="dropdown-menu font-family-roboto" aria-labelledby="dropdownMenu2">
                          <a href="<?php echo $domain?>myprofile"><button class="dropdown-item text-black" type="button">My Profile</button></a>
                          <a href="<?php echo $domain?>changepassword"><button class="dropdown-item text-black" type="button">Change Password</button></a>
                          <a href="<?php echo $domain?>logout"><button class="dropdown-item text-black" type="button">Logout</button></a>
                        </div>
                    </div>
                  </li>                    
                  <?php endif;?>  
                  <li class="list-inline-item"><a href="<?php echo $domain?>"><img src="<?php echo $domain?>images/footer-logo.png" class="img-fluid mobile-logo" alt=""></a></li>
                </ul>
              </div>
              <button class="navbar-toggler nav-toggle-icon" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="fa fa-bars text-white"></span>
                  <span class="sr-only">Toggle navigation</span>
              </button>
              <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto mr-3 mr-lg-0">
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news/mumbai" alt="Mumbai" title="Mumbai">  ممبئی  </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news" alt="News" title="News">  خبریں  </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>entertainment" alt="Entertainment" title="Entertainment">  تفریحات   </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>sports" alt="Sports" title="Sports">  کھیل کود  </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>features" alt="Features" title="Features"> فیچرس  </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>lifestyle" alt="Lifestyle" title="Lifestyle">  طرزِ زندگی  </a></li>
                  <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>students" alt="Students" title="Students">   طلبہ
                    <span class="sr-only">(current)</span></a>
                  </li>
<!--                   <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                  <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>photos" alt="Photos" title="Photos">  تصویریں <span class="sr-only">(current)</span></a></li>
 -->                  <!-- <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li> -->
                  <!-- <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>videos" alt="Videos" title="Videos">    ویڈیوز   <span class="sr-only">(current)</span></a></li>                   -->
                </ul>
              </div>              
              <?php else:?>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto mr-3 mr-lg-0">
                      <!-- <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>videos" alt="Videos" title="Videos">    ویڈیوز   <span class="sr-only">(current)</span></a></li> -->
                      <!-- <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li> -->
<!--                       <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>photos" alt="Photos" title="Photos">  تصویریں <span class="sr-only">(current)</span></a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
 -->                      <li class="nav-item active"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>students" alt="Students" title="Students">   طلبہ
                          <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>lifestyle" alt="Lifestyle" title="Lifestyle">  طرزِ زندگی  </a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>features" alt="Features" title="Features"> فیچرس  </a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>sports" alt="Sports" title="Sports">  کھیل کود  </a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>entertainment" alt="Entertainment" title="Entertainment">  تفریحات   </a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news" alt="News" title="News">  خبریں  </a></li>
                      <li class="nav-item d-none d-lg-block"><span class="nav-link text-white font-weight-bold">|</span></li>
                      <li class="nav-item"><a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news/mumbai" alt="Mumbai News" title="Mumbai News">  ممبئی  </a></li>
                  </ul>
              </div>
            <?php endif;?>
              <div class="bootsnipp-search animate">
        <div class="container">
          <div class="col-md-12 mt-1">
          <form method="post" id="songsM-search-form">  
            <div class="input-group">
              <!-- <input type="text" class="form-control" name="q" placeholder="Search"> -->
              <input class="form-control" type="text" name="songsM-search-text" id="songsM-search-text" placeholder="Search..." required="required">
              <span class="input-group-append">
                <button class="btn btn-search font-family-roboto" type="submit">Search</button>
              </span>
            </div>
          </form>
        </div>
        </div>
      </div>
          </div>
        </nav>
      </header>

    </section>
     <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
 <div class="container clearfix"><div style="margin-top: 5px; margin-right: 19px;"><div id="iq_pagepushM"></div></div></div>
 <?php else:?>
<div class="container clearfix"><div style="margin-top: 5px; margin-right: 200px; margin-bottom: -7px;"><div id="iq_pagepush"></div></div></div>             
<?php endif;?>
    <!-- first section -->