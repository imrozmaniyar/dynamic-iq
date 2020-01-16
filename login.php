<?php 
include('top.php');
$rrurl = $_SERVER['HTTP_REFERER'];
?>
<style type="text/css">
          /* Shared */
.loginBtn {
  box-sizing: border-box;
  position: relative;
  /* width: 13em;  - apply for fixed size */
  margin: 0.2em;
  padding: 0 15px 0 46px;
  border: none;
  text-align: left;
  line-height: 34px;
  white-space: nowrap;
  border-radius: 0.2em;
  font-size: 16px;
  color: #FFF;
}
.loginBtn:before {
  content: "";
  box-sizing: border-box;
  position: absolute;
  top: 0;
  left: 0;
  width: 34px;
  height: 100%;
}
.loginBtn:focus {
  outline: none;
}
.loginBtn:active {
  box-shadow: inset 0 0 0 32px rgba(0,0,0,0.1);
}
/* Facebook */
.loginBtn--facebook {
  background-color: #4C69BA;
  background-image: linear-gradient(#4C69BA, #3B55A0);
  /*font-family: "Helvetica neue", Helvetica Neue, Helvetica, Arial, sans-serif;*/
  font-family: 'Roboto', sans-serif;
  text-shadow: 0 -1px 0 #354C8C;
}
.loginBtn--facebook:before {
  border-right: #364e92 1px solid;
  background: url('https://s3-us-west-2.amazonaws.com/s.cdpn.io/14082/icon_facebook.png') 6px 6px no-repeat;
}
.loginBtn--facebook:hover,
.loginBtn--facebook:focus {
  background-color: #5B7BD5;
  background-image: linear-gradient(#5B7BD5, #4864B1);
}
@media only screen and (max-width: 768px) {
  /* For mobile phones: */
   .fb-adj{
    margin-left:60px; 
    /*width: 100%;*/
  }
}
</style>
<section>
  <div class="container">
    <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Login Now</h1>
    <div class="row">
      <div class="col-md-5 mx-auto text-left">
        <form method="post" action="<?php echo $domain?>checkmember" class="register-placeholder">
          <div class="form-group mt-3"><input type="email" placeholder="Email Address" name="txtemailaddress" id="txtemailaddress" required="required" class="form-control register-form-control"></div>
          <div class="form-group mt-3"><input type="password" name="txtpassword1" id="txtpassword1" placeholder="Password" required="required" class="form-control register-form-control"></div>
          <input type="hidden" name="txtrrlogin" value="<?php echo $rrurl?>" />
          <input type="image" src="<?php echo $domain?>images/login.png" class="img-fluid mx-auto" border="0" alt="Submit">
        </form>   
           <div class="form-group mt-3"><p class="text-center font-family-roboto font-weight-bold mt-4 mb-4 login-text"><a href="<?php echo $domain?>forgot-password" class="login-text">Forgot Password</a></p></div>
          <h5 class="text-center text-black font-family-roboto font-weight-normal mt-4 mb-4">OR</h5>
          <!-- ----Login with facebook button will come here-------- -->
          <!-- <fb:login-button show-faces="false" scope="public_profile,email" size="xlarge" onlogin="fbLogin()" onlogin="window.location.reload(true);"></fb:login-button> -->
          <!-- <a href="javascript:void(0);" onclick="fbLogin()" class="fb text-uppercase"><i class="icon facebook"></i><img src="<?php echo $domain?>images/login.png" class="img-fluid mx-auto" border="0" alt="Submit"></a> -->          
          <button class="loginBtn loginBtn--facebook fb-adj" onclick="fbLogin()" alt="Login with Facebook" Title="Login with Facebook">Login with Facebook</button>          
         <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
         <br><br>
         <button class="g-signin2 fb-adj" data-onsuccess="onSignIn" data-theme="dark" style="padding:0px; border: none!important; width:205px; height: 33px;" alt="Login with Google" Title="Login with Google"></button>
          <?php else:?>
           <button class="g-signin2 fb-adj" data-onsuccess="onSignIn" data-theme="dark" style="padding:0px; border: none!important; width:220px; height: 33px;" alt="Login with Google" Title="Login with Google"></button>
        <?php endif;?>

         <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4">New to Inquilab?</h4>
          <p class="text-center font-family-roboto font-weight-bold mt-4 mb-4 login-text"><a href="<?php echo $domain?>register" class="login-text">Sign Up</a></p>
        <!-- </form>  --> 
      </div>
    </div>  
  </div>
</section>
<?php include('bottom.php');?>