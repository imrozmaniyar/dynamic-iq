<?php include('top.php');?>
<section>
  <div class="container">
    <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Login Now</h1>
    <div class="row">
      <div class="col-md-5 mx-auto text-left">
        <form method="post" action="<?php echo $domain?>checkmember" class="register-placeholder">
          <div class="form-group mt-3"><input type="email" placeholder="Email Address" name="txtemailaddress" id="txtemailaddress" required="required" class="form-control register-form-control"></div>
          <div class="form-group mt-3"><input type="password" name="txtpassword1" id="txtpassword1" placeholder="Password" required="required" class="form-control register-form-control"></div>
          <input type="hidden" name="txturllogin" value="<?php echo htmlspecialchars($urllogin,ENT_QUOTES, 'UTF-8')?>" />
           <input type="image" src="<?php echo $domain?>images/login.png" class="img-fluid mx-auto" border="0" alt="Submit">
           <div class="form-group mt-3"><p class="text-center font-family-roboto font-weight-bold mt-4 mb-4 login-text"><a href="<?php echo $domain?>forgot-password" class="login-text">Forgot Password</a></p></div>
          <h5 class="text-center text-black font-family-roboto font-weight-normal mt-4 mb-4">OR</h5>
          <!-- ----Login with facebook button will come here-------- -->
          <!-- <div class="g-signin2" data-onsuccess="onSignIn"></div> -->
          <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4">New to Inquilab?</h4>
          <p class="text-center font-family-roboto font-weight-bold mt-4 mb-4 login-text"><a href="<?php echo $domain?>register" class="login-text">Sign Up</a></p>
        </form>  
      </div>
    </div>  
  </div>
</section>
<?php include('bottom.php');?>