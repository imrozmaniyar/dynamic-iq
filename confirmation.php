<?php include('top.php');?>
<section>
  <div class="container">
    <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto"></h1>
    <div class="row">
      <div class="col-md-10 mx-auto text-left">
        <form method="post" action="<?php echo $domain?>checkmember" class="register-placeholder">
          <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4">
         An e-mail has been sent to your email id with an activation link. Click the link to activate your account. Kindly check your Junk/Spam folder in case you dont receive the mail in inbox. 
        </h4>
        </form>  
        <br>
        <br>
        <br>
      </div>
    </div>  
  </div>
</section>
<?php include('bottom.php');?>