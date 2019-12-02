<?php //include('top.php')?>
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

