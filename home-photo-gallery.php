<!-- photo section -->
<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>photos" class="text-white">تصاوی</a></h1></div>
      <div class="row">
        <?php
        if ($homephoto[0] > 0):
        $i = 1;
          while ($objhomephotoss = mysql_fetch_object($homephoto[1])):
          $username           = $objhomephotoss->username;
          $nameID             = $objhomephotoss->name;
            $objGmaster    = new db_gallery_master($nameID);
            $hid           = $objGmaster->Get_gallery_id();
            $ht            = $objGmaster->Get_gallery_name_home();
            $hd            = $objGmaster->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmaster->Get_gallery_url());
            $hi            = $objGmaster->Get_gallery_image1();
            $hdate         = $objGmaster->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmaster->Get_category_id();
            $objcatP       = new db_category_master($cid);
            $catname       = strtolower($objcatP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;
        $i=$i+1;        
        ?>
        <div class="col-md-4 mt-3 order-2 order-md-0">
          <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
            <div class="card-shadow zoom">
              <img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto photo-gallery-img" alt="">
              <i class="fa fa-camera photo-camera-icon-single-mobile-grid" aria-hidden="true"></i>
              <p class="first-section-sub-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p>
            </div>
          </a>
        </div>
        <?php
          endwhile;
        endif;  
        ?>  
      </div>
      <div class="row"><a href="<?php echo $domain?>photos" class="text-left read-more mt-3 clearfix">مزید </a></div>
    </div>
    <div class="horizontal-border"></div>
  </div>  
</section>
<!-- photo section -->