<?php 
include('top.php');
include("class/messages.php");
$url=mysql_escape_mimic($_SERVER['REQUEST_URI']);
$params=explode( "/", mysql_real_escape_string($url));
if (isset($_GET['id1'])):
    $params = explode( "/",  mysql_escape_mimic($_GET['id1']));
endif;
$id = intval($params[2]);
$objMsg = new message($id);
?>
<section>
  <div class="container">
    <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto">Change Password</h1>
    <div class="row">
      <div class="col-md-5 mx-auto text-left">
          <?php if($objMsg->get_message()!=""):?>
            <p class="need_talk new_user" align="center" style="text-transform:none; color:#FF0000; font-size:18px;"><?php echo htmlspecialchars($objMsg->get_message(),ENT_QUOTES, 'UTF-8')?></p>
          <?php endif;?>        
        <form class="register-placeholder" id="registration" method="post" action="change-password-submit" enctype="multipart/form-data">
          <div class="form-group mt-3"><input type="password" name="txtoldpassword" required="required" class="form-control register-form-control" placeholder="Old Password"></div>
          <div class="form-group mt-3"><input type="password" name="txtnewpassword" id="txtnewpassword" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" required="required" class="form-control register-form-control" placeholder="New Password"></div>
          <div class="form-group mt-3"><input type="password" name="txtcpassword" id="txtcpassword" title="Password must contain: Minimum 8 characters atleast 1 Alphabet and 1 Number" required pattern="^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$" class="form-control register-form-control" placeholder="Re-Enter Password"></div>
          <div class="form-group mt-3"><input type="text" type="text" name="security_code" id="security_code" required="required" class="form-control register-form-control" placeholder="Enter The Code Given Below"></div>
          <div class="form-group mt-3" style="text-align: center;"><img src="<?php echo $domain?>commonfunctions/CaptchaSecurityImages.php?width=100&height=40&characters=6" alt="captcha" class="captcha_img"></div>
          <input type="image" src="<?php echo $domain?>images/submit-password.png" class="img-fluid mx-auto" border="0" alt="Submit">
        </form>  
      </div>
    </div>  
  </div>
</section>
<?php include('bottom.php');?>
<script type="text/javascript">
  
var newpassword = document.getElementById("txtnewpassword")
  , cpassword = document.getElementById("txtcpassword");

function validatePassword(){
  if(newpassword.value != cpassword.value) {
    cpassword.setCustomValidity("Passwords Don't Match");
  } else {
    cpassword.setCustomValidity('');
  }
}

newpassword.onchange = validatePassword;
cpassword.onkeyup = validatePassword;

</script>