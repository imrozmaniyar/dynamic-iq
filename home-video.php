<!-- Video section -->
<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>videos" class="text-white" alt="Videos" title="Videos">ویڈیو</a></h1></div>
      <div class="row">
        <?php
        if ($homevideo[0] > 0):
        $i = 1;
          while ($objhomevideos = mysql_fetch_object($homevideo[1])):
          $username              = $objhomevideos->username;
          $nameID                = $objhomevideos->name;
            $objVmaster          = new db_video_master($nameID);
            $hid                 = $objVmaster->Get_video_id();
            $ht                  = $objVmaster->Get_video_name_home();
            $hd                  = $objVmaster->Get_video_description();
            $hu                  = str_replace($old_pattern1s, $new_pattern1s,$objVmaster->Get_video_url());
            $hi                  = $objVmaster->Get_video_image1();
            $hdate               = $objVmaster->Get_video_date();
            $time                = strtotime($hdate);
            $month               = date("M",$time);
            $year                = date("Y",$time);
            $cid                 = $objVmaster->Get_category_id();
            $objcatV             = new db_category_master($cid);
            $catname             = strtolower($objcatV->Get_category_master_name());
            $url                 = $catname.'/videos/'.$hu.'-'.$hid;             
        $i=$i+1;
        $j = $i--;
        ?>
        <div class="col-md-4 mt-3 order-<?php echo $j?> order-md-<?php echo $i?> pb-2">
          <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
            <div class="card-shadow zoom">
              <img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>">
              <i class="fa fa-play video-play-icon-single-mobile-grid" aria-hidden="true"></i>
              <p class="first-section-sub-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p>
            </div>
          </a>
        </div>
        <?php
          endwhile;
        endif;  
        ?>
      </div>
      <div class="row"><a href="<?php echo $domain?>videos" class="text-left read-more mt-3" alt="More Videos" title="More Videos">مزید </a></div>  
    </div>
    <div class="horizontal-border"></div>
  </div>  
</section>
<!-- Video section -->