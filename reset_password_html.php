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
    </style>
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
          
             <li class="list-inline-item mr-3"><a href="<?php echo $domain?>login"><button type="button" class="btn btn-login text-white">Login</button></a></li>
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
              <div class="navbar-brand d-lg-none">
                <ul class="list-inline mt-2 mb-2 animate">
                  <li class="list-inline-item hidden-xs"><a href="#toggle-search" class="animate"><span class="fa fa-search text-white"></span></a></li>
           
                  <li class="list-inline-item"><a href="<?php echo $domain?>"><img src="<?php echo $domain?>images/footer-logo.png" class="img-fluid" alt="" style="width: 140px;"></a></li>
                </ul>
              </div>
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
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>students" alt="Students" title="Students">   طلبہ
  <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>lifestyle" alt="Lifestyle" title="Lifestyle">  طرزِ زندگی  </a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>features" alt="Features" title="Features"> فیچرس  </a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>sports" alt="Sports" title="Sports">  کھیل کود  </a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>entertainment" alt="Entertainment" title="Entertainment">  تفریحات   </a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news" alt="News" title="News">  خبریں  </a>
                      </li>
                      <li class="nav-item d-none d-lg-block">
                          <span class="nav-link text-white font-weight-bold">|</span>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link text-white font-weight-bold" href="<?php echo $domain?>news/mumbai" alt="Mumbai" title="Mumbai">  ممبئی  </a>
                      </li>
                  </ul>
              </div>
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
    <!-- first section -->
    <section>
      <div class="container">
        <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Reset Password</h1>
        <div class="row">
          <div class="col-md-5 mx-auto text-left">
            <form class="register-placeholder" method="post" action="">
              <div class="form-group mt-3"><input type="password" name="password" id="password" required="required" class="form-control register-form-control" placeholder="Password"></div>
              <div class="form-group mt-3"><input type="text" type="text" name="security_code" id="security_code" required="required" class="form-control register-form-control" placeholder="Enter The Code Given Below"></div>
              <div class="form-group mt-3" style="text-align: center;"><img src="<?php echo $domain?>commonfunctions/CaptchaSecurityImages.php?width=100&height=40&characters=6" alt="captcha" class="captcha_img"></div>
              <button type="submit" ><img src="images/submit-password.png" class="img-fluid mx-auto"></button>
            </form>  
          </div>
        </div>  
      </div>
    </section>
<?php include('bottom.php')?>

