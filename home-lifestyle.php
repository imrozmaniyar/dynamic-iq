<!-- Entertainment Section -->
<div class="col-md-7 order-0 order-md-1 col-lg-8">
  <h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domain?>entertainment" alt="Entertainment" title="Entertainment"> تفریح  </a></h1>
  <div class="row mt-3">
<?php
 if ($lifestyle[0] > 0):
        $i = 1;
          while ($objlifestyles = mysql_fetch_object($lifestyle[1])):
          $username           = $objlifestyles->username;
          $nameID             = $objlifestyles->name;
          if($username     =='Article'):
            $objAmasterL    = new db_article_master($nameID);
            $hid            = $objAmasterL->Get_article_id();
            $ht            = $objAmasterL->Get_article_homepage_headline();
            $hd            = $objAmasterL->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterL->Get_article_page_url());
            $hi            = $objAmasterL->Get_article_image();
            $hdate         = $objAmasterL->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmasterL->Get_category_id();
            $objcatAA      = new db_category_master($cid);
            $catname       = strtolower($objcatAA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;             
          elseif($username =='Videos'):  
            $objVmasterL    = new db_video_master($nameID);
            $hid            = $objVmasterL->Get_video_id();
            $ht            = $objVmasterL->Get_video_name_home();
            $hd            = $objVmasterL->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterL->Get_video_url());
            $hi            = $objVmasterL->Get_video_image();
            $hdate         = $objVmasterL->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmasterL->Get_category_id();
            $objcatVV      = new db_category_master($cid);
            $catname       = strtolower($objcatVV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;             
          elseif($username =='Photos'):  
            $objGmasterL    = new db_gallery_master($nameID);
            $hid            = $objGmasterL->Get_gallery_id();
            $ht            = $objGmasterL->Get_gallery_name_home();
            $hd            = $objGmasterL->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterL->Get_gallery_url());
            $hi            = $objGmasterL->Get_gallery_image();
            $hdate         = $objGmasterL->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmasterL->Get_category_id();
            $objcatPP      = new db_category_master($cid);
            $catname       = strtolower($objcatPP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;             
          endif;     
        $i=$i+1;
?>    
    <div class="col-md-6 col-6">
      <div class="pl-lg-4">
        <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
        <img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block lifestyle-section-img" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>">
        <p class="lifestyle-section-desc pr-1 pt-2"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p>
        </a>
      </div>
    </div>
<?php
  endwhile;
endif;
?>    
    <a href="<?php echo $domain?>entertainment" class="float-left read-more pr-md-4 pl-md-4 float-left read-more mt-3" alt="Entertainment News" title="Entertainment News">مزید </a>
  </div>
</div>
<!-- Entertainment Section -->