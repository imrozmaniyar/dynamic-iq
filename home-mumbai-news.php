<div class="col-md-4 vertical-border-content-seperator order-1 order-md-1">
<h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domain?>news/mumbai" Alt="Mumbai" title="Mumbai">  ممبئی  </a></h1>
<?php
 if ($MumbaiPhoto[0] > 0):
        $i = 1;
          while ($objMumbaiPhotos = mysql_fetch_object($MumbaiPhoto[1])):
          $username           = $objMumbaiPhotos->username;
          $nameID             = $objMumbaiPhotos->name;
          if($username     =='Article'):
            $objAmasterM    = new db_article_master($nameID);
            $hid            = $objAmasterM->Get_article_id();
            $ht            = $objAmasterM->Get_article_homepage_headline();
            $hd            = $objAmasterM->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterM->Get_article_page_url());
            $hi            = $objAmasterM->Get_article_image();
            $hdate         = $objAmasterM->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmasterM->Get_category_id();
            $objcatm      = new db_category_master($cid);
            $catname       = strtolower($objcatm->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;            
          elseif($username =='Videos'):  
            $objVmasterM    = new db_video_master($nameID);
            $hid            = $objVmasterM->Get_video_id();
            $ht            = $objVmasterM->Get_video_name_home();
            $hd            = $objVmasterM->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterM->Get_video_url());
            $hi            = $objVmasterM->Get_video_image();
            $hdate         = $objVmasterM->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmasterM->Get_category_id();
            $objcatv      = new db_category_master($cid);
            $catname       = strtolower($objcatv->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;            
          elseif($username =='Photos'):  
            $objGmasterM    = new db_gallery_master($nameID);
            $hid            = $objGmasterM->Get_gallery_id();
            $ht            = $objGmasterM->Get_gallery_name_home();
            $hd            = $objGmasterM->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterM->Get_gallery_url());
            $hi            = $objGmasterM->Get_gallery_image();
            $hdate         = $objGmasterM->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmasterM->Get_category_id();
            $objcatp      = new db_category_master($cid);
            $catname       = strtolower($objcatp->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;            
          endif;     
        $i=$i+1; 
?>
	<img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid other-section-img" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" Title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>">
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></a>
<?php
	endwhile;
endif;	
?>	
<?php
      if ($MumbaiWithoutPhoto[0] > 0):
        $i = 1;
          while ($objMumbaiWithoutPhotos = mysql_fetch_object($MumbaiWithoutPhoto[1])):
          $username        = $objMumbaiWithoutPhotos->username;
          $nameID          = $objMumbaiWithoutPhotos->name;
          if($username     =='Article'):
            $objAmasterMWP = new db_article_master($nameID);
            $hid           = $objAmasterMWP->Get_article_id();
            $ht            = $objAmasterMWP->Get_article_homepage_headline();
            $hd            = $objAmasterMWP->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterMWP->Get_article_page_url());
            $hi            = $objAmasterMWP->Get_article_image1();
            $hdate         = $objAmasterMWP->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = '';
            $cid           = $objAmasterMWP->Get_category_id();
            $objcatAA      = new db_category_master($cid);
            $catname       = strtolower($objcatAA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;            
          elseif($username =='Videos'):  
            $objVmasterMWP = new db_video_master($nameID);
            $hid           = $objVmasterMWP->Get_video_id();
            $ht            = $objVmasterMWP->Get_video_name_home();
            $hd            = $objVmasterMWP->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterMWP->Get_video_url());
            $hi            = $objVmasterMWP->Get_video_image1();
            $hdate         = $objVmasterMWP->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-play video-play-icon-single-mobile-grid';
            $cid           = $objVmasterMWP->Get_category_id();
            $objcatVV      = new db_category_master($cid);
            $catname       = strtolower($objcatVV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;            
          elseif($username =='Photos'):  
            $objGmasterMWP = new db_gallery_master($nameID);
            $hid           = $objGmasterMWP->Get_gallery_id();
            $ht            = $objGmasterMWP->Get_gallery_name_home();
            $hd            = $objGmasterMWP->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterMWP->Get_gallery_url());
            $hi            = $objGmasterMWP->Get_gallery_image1();
            $hdate         = $objGmasterMWP->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-camera photo-camera-icon-single-mobile-grid';
            $cid           = $objGmasterMWP->Get_category_id();
            $objcatPP      = new db_category_master($cid);
            $catname       = strtolower($objcatPP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;            
          endif;     
        $i=$i+1;      	

?>
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></a>
<?php
	endwhile;
endif;	
?>	
	<a href="<?php echo $domain?>news/mumbai" class="float-left read-more mt-3" alt="More" title="More">مزید </a>
</div>