<?php include('top.php');?>
<section>
  <div class="container">
    <h1 class="mt-5 mb-2 text-center text-black font-weight-normal font-family-roboto"></h1>
    <div class="row">
      <div class="col-md-10 mx-auto text-left">
        <form method="post" action="<?php echo $domain?>checkmember" class="register-placeholder">
          <h4 class="text-center font-family-roboto font-weight-bold mt-4 mb-4" style="font-size: 160px;color: #005bab;">404</h4>
          <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4" style="font-size: 48px;">Page Not Found</h4>
          <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4" style="font-size: 18px;">We're sorry, We seem to have lost this page, but we don't want to lose you.</h4>
          <h4 class="text-center text-black font-family-roboto font-weight-bold mt-4 mb-4" style="font-size: 18px;">May be you would like to check out our top stories at the moment.</h4>
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">  
                <a href="javascript: window.history.back();"><button type="button" class="btn btn-outline-primary btn pull-right font-family-roboto" style="margin-right:35px; ">Go back to the previous page</button></a><br><br>
                <a href="<?php echo $domain?>"><button type="button" class="btn btn-outline-primary font-family-roboto" style="margin-left: 75px;">Go to Homepage</button></a>
              </div>
            </div>
          </div>        

            <?php else:?>            
          <div class="container">
            <div class="row">
              <div class="col-md-6 ">  
                <a href="javascript: window.history.back();"><button type="button" class="btn btn-outline-primary btn pull-right font-family-roboto btn-back ">Go back to the previous page</button></a>
              </div>
              <div class="col-md-6 ">  
                <a href="<?php echo $domain?>"><button type="button" class="btn btn-outline-primary font-family-roboto btn-homepage">Go to Homepage</button></a>
              </div>
            </div>
          </div>
          <?php endif;?>        
        </form>  
        <br>
        <br>
        <br>
      </div>
    </div>  
  </div>
</section>
<?php include('bottom.php');?>