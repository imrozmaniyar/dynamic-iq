<!-- Sports Section -->
<div class="col-md-5 order-1 order-md-0 col-lg-4">
  <div class="mr-0 mr-md-2">
    <h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domain?>sports" alt="Sports" Title="Sports"> کھیل کود  </a></h1>
<?php
 if ($sports[0] > 0):
        $i = 1;
          while ($objsportss = mysql_fetch_object($sports[1])):
          $username           = $objsportss->username;
          $nameID             = $objsportss->name;
          if($username     =='Article'):
            $objAmasterS    = new db_article_master($nameID);
            $hid            = $objAmasterS->Get_article_id();
            $ht            = $objAmasterS->Get_article_homepage_headline();
            $hd            = $objAmasterS->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterS->Get_article_page_url());
            $hi            = $objAmasterS->Get_article_image2();
            $hdate         = $objAmasterS->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmasterS->Get_category_id();
            $objcatAA      = new db_category_master($cid);
            $catname       = strtolower($objcatAA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;             
          elseif($username =='Videos'):  
            $objVmasterS    = new db_video_master($nameID);
            $hid            = $objVmasterS->Get_video_id();
            $ht            = $objVmasterS->Get_video_name_home();
            $hd            = $objVmasterS->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterS->Get_video_url());
            $hi            = $objVmasterS->Get_video_image2();
            $hdate         = $objVmasterS->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmasterS->Get_category_id();
            $objcatVV      = new db_category_master($cid);
            $catname       = strtolower($objcatVV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;             
          elseif($username =='Photos'):  
            $objGmasterS    = new db_gallery_master($nameID);
            $hid            = $objGmasterS->Get_gallery_id();
            $ht            = $objGmasterS->Get_gallery_name_home();
            $hd            = $objGmasterS->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterS->Get_gallery_url());
            $hi            = $objGmasterS->Get_gallery_image2();
            $hdate         = $objGmasterS->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmasterS->Get_category_id();
            $objcatPP      = new db_category_master($cid);
            $catname       = strtolower($objcatPP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;             
          endif;     
        $i=$i+1;

?>    
    <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
    <div class="media mt-3">
      <div class="media-body">
        <div class="media-left"><p class="lifestyle-section-desc mr-2"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></div>
      </div>
      <div class="media-left"><img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>"></div>
    </div>
  </a>
<?php
  endwhile;
endif;  
?>    
    <div class="d-flex"><a href="<?php echo $domain?>sports" class="float-left read-more-sports-entertainment" alt="More" title="More">مزید </a></div>
  </div>
</div>
<!-- Sports Section -->