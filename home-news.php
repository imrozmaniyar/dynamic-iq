<div class="col-md-4 vertical-border-content-seperator order-0 order-md-1">
	<h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domain?>news">خبریں </a></h1>
	<?php
	      if ($newsPhoto[0] > 0):
        $i = 1;
          while ($objnewsPhotos = mysql_fetch_object($newsPhoto[1])):
          $username           = $objnewsPhotos->username;
          $nameID             = $objnewsPhotos->name;
          if($username     =='Article'):
            $objAmasterp    = new db_article_master($nameID);
            $hid           = $objAmasterp->Get_article_id();
            $ht            = $objAmasterp->Get_article_homepage_headline();
            $hd            = $objAmasterp->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterp->Get_article_page_url());
            $hi            = $objAmasterp->Get_article_image();
            $hdate         = $objAmasterp->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmasterp->Get_category_id();
            $objcatA       = new db_category_master($cid);
            $catname       = strtolower($objcatA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;
          elseif($username =='Videos'):  
            $objVmasterP    = new db_video_master($nameID);
            $hid           = $objVmasterP->Get_video_id();
            $ht            = $objVmasterP->Get_video_name_home();
            $hd            = $objVmasterP->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterP->Get_video_url());
            $hi            = $objVmasterP->Get_video_image();
            $hdate         = $objVmasterP->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmasterP->Get_category_id();
            $objcatV       = new db_category_master($cid);
            $catname       = strtolower($objcatV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;            
          elseif($username =='Photos'):  
            $objGmasterP    = new db_gallery_master($nameID);
            $hid           = $objGmasterP->Get_gallery_id();
            $ht            = $objGmasterP->Get_gallery_name_home();
            $hd            = $objGmasterP->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterP->Get_gallery_url());
            $hi            = $objGmasterP->Get_gallery_image();
            $hdate         = $objGmasterP->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmasterP->Get_category_id();
            $objcatG       = new db_category_master($cid);
            $catname       = strtolower($objcatG->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;            
          endif;     
        $i=$i+1;        
	?>
	<img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" style="height: 213px;">
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></a>
	<?php
		endwhile;
	endif;	
	?>
	<?php
      if ($newswithoutPhoto[0] > 0):
        $i = 1;
          while ($objnewswithoutPhotos = mysql_fetch_object($newswithoutPhoto[1])):
          $username           = $objnewswithoutPhotos->username;
          $nameID             = $objnewswithoutPhotos->name;
          if($username     =='Article'):
            $objAmasterWP    = new db_article_master($nameID);
            $hid           = $objAmasterWP->Get_article_id();
            $ht            = $objAmasterWP->Get_article_homepage_headline();
            $hd            = $objAmasterWP->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterWP->Get_article_page_url());
            $hi            = $objAmasterWP->Get_article_image1();
            $hdate         = $objAmasterWP->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = '';
            $cid           = $objAmasterWP->Get_category_id();
            $objcatAA       = new db_category_master($cid);
            $catname       = strtolower($objcatAA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;            
          elseif($username =='Videos'):  
            $objVmasterWP    = new db_video_master($nameID);
            $hid           = $objVmasterWP->Get_video_id();
            $ht            = $objVmasterWP->Get_video_name_home();
            $hd            = $objVmasterWP->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterWP->Get_video_url());
            $hi            = $objVmasterWP->Get_video_image1();
            $hdate         = $objVmasterWP->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-play video-play-icon';
            $cid           = $objVmasterWP->Get_category_id();
            $objcatVV       = new db_category_master($cid);
            $catname       = strtolower($objcatVV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;            
          elseif($username =='Photos'):  
            $objGmasterWP    = new db_gallery_master($nameID);
            $hid           = $objGmasterWP->Get_gallery_id();
            $ht            = $objGmasterWP->Get_gallery_name_home();
            $hd            = $objGmasterWP->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterWP->Get_gallery_url());
            $hi            = $objGmasterWP->Get_gallery_image1();
            $hdate         = $objGmasterWP->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-camera photo-camera-icon';
            $cid           = $objGmasterWP->Get_category_id();
            $objcatPP       = new db_category_master($cid);
            $catname       = strtolower($objcatPP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;            
          endif;     
        $i=$i+1;      	
	?>
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></a>
	<?php
		endwhile;
	endif;	
	?>
	<a href="<?php echo $domain?>news" class="float-left read-more mt-3">مزید </a>
</div>