<?php include('top.php')?>
    <section>
      <div class="container">
        <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Forgot Password</h1>
        <div class="row">
          <div class="col-md-5 mx-auto text-left">
            <form class="register-placeholder" method="post" action="<?php echo $domain?>forgot_password_submit">
              <div class="form-group mt-3"><input type="email" name="email1" id="email1" required="required" class="form-control register-form-control" placeholder="Email"></div>
              <div class="form-group mt-3"><input type="text" type="text" name="security_code" id="security_code" required="required" class="form-control register-form-control" placeholder="Enter The Code Given Below"></div>
              <div class="form-group mt-3" style="text-align: center;"><img src="<?php echo $domain?>commonfunctions/CaptchaSecurityImages.php?width=100&height=40&characters=6" alt="captcha" class="captcha_img"></div>
              <input type="image" src="<?php echo $domain?>images/submit-password.png" class="img-fluid mx-auto" border="0" alt="Submit">
              <h5 class="text-center text-black font-family-roboto font-weight-normal mt-4 mb-4">OR</h5>
              <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4">Existing User?</h4>
              <p class="text-center font-family-roboto font-weight-bold mt-4 mb-4 login-text"><a href="#" class="login-text">Log In</a></p>
            </form>  
          </div>
        </div>  
      </div>
    </section>
<?php include('bottom.php')?>