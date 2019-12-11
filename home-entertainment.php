<div class="col-md-4 vertical-border-content-seperator order-2 order-md-0">
<h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domai?>entertainment" alt="Entertainment" Title="Entertainment">طفریح </a></h1>
<?php
 if ($EntPhoto[0] > 0):
        $i = 1;
          while ($objEntPhotos = mysql_fetch_object($EntPhoto[1])):
          $username           = $objEntPhotos->username;
          $nameID             = $objEntPhotos->name;
          if($username     =='Article'):
            $objAmasterE   = new db_article_master($nameID);
            $hid           = $objAmasterE->Get_article_id();
            $ht            = $objAmasterE->Get_article_homepage_headline();
            $hd            = $objAmasterE->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterE->Get_article_page_url());
            $hi            = $objAmasterE->Get_article_image();
            $hdate         = $objAmasterE->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmasterE->Get_category_id();
            $objcatA      = new db_category_master($cid);
            $catname       = strtolower($objcatA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;             
          elseif($username =='Videos'):  
            $objVmasterE    = new db_video_master($nameID);
            $hid            = $objVmasterE->Get_video_id();
            $ht            = $objVmasterE->Get_video_name_home();
            $hd            = $objVmasterE->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterE->Get_video_url());
            $hi            = $objVmasterE->Get_video_image();
            $hdate         = $objVmasterE->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmasterE->Get_category_id();
            $objcatV      = new db_category_master($cid);
            $catname       = strtolower($objcatV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;             
          elseif($username =='Photos'):  
            $objGmasterE    = new db_gallery_master($nameID);
            $hid            = $objGmasterE->Get_gallery_id();
            $ht            = $objGmasterE->Get_gallery_name_home();
            $hd            = $objGmasterE->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterE->Get_gallery_url());
            $hi            = $objGmasterE->Get_gallery_image();
            $hdate         = $objGmasterE->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmasterE->Get_category_id();
            $objcatP      = new db_category_master($cid);
            $catname       = strtolower($objcatP->Get_category_master_name());
            $url           = $catname.'/photos/'.$hu.'-'.$hid;             
          endif;     
        $i=$i+1; 
?>
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>"><img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid other-section-img" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>"></a>
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p></a>
<?php
	endwhile;
endif;	
?>
<?php
      if ($EntWithoutPhoto[0] > 0):
        $i = 1;
          while ($objEntWithoutPhotos = mysql_fetch_object($EntWithoutPhoto[1])):
          $username           = $objEntWithoutPhotos->username;
          $nameID             = $objEntWithoutPhotos->name;
          if($username     =='Article'):
            $objAmasterEWP    = new db_article_master($nameID);
            $hid            = $objAmasterEWP->Get_article_id();
            $ht            = $objAmasterEWP->Get_article_homepage_headline();
            $hd            = $objAmasterEWP->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmasterEWP->Get_article_page_url());
            $hi            = $objAmasterEWP->Get_article_image1();
            $hdate         = $objAmasterEWP->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = '';
            $cid           = $objAmasterEWP->Get_category_id();
            $objcatAA      = new db_category_master($cid);
            $catname       = strtolower($objcatAA->Get_category_master_name());
            $url           = $catname.'/articles/'.$hu.'-'.$hid;             
          elseif($username =='Videos'):  
            $objVmasterEWP    = new db_video_master($nameID);
            $hid            = $objVmasterEWP->Get_video_id();
            $ht            = $objVmasterEWP->Get_video_name_home();
            $hd            = $objVmasterEWP->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmasterEWP->Get_video_url());
            $hi            = $objVmasterEWP->Get_video_image1();
            $hdate         = $objVmasterEWP->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-play video-play-icon';
            $cid           = $objVmasterEWP->Get_category_id();
            $objcatVV      = new db_category_master($cid);
            $catname       = strtolower($objcatVV->Get_category_master_name());
            $url           = $catname.'/videos/'.$hu.'-'.$hid;             
          elseif($username =='Photos'):  
            $objGmasterEWP    = new db_gallery_master($nameID);
            $hid            = $objGmasterEWP->Get_gallery_id();
            $ht            = $objGmasterEWP->Get_gallery_name_home();
            $hd            = $objGmasterEWP->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmasterEWP->Get_gallery_url());
            $hi            = $objGmasterEWP->Get_gallery_image1();
            $hdate         = $objGmasterEWP->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $fafa          = 'fa fa-camera photo-camera-icon';
            $cid           = $objGmasterEWP->Get_category_id();
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
	<a href="<?php echo $domai?>entertainment" class="float-left read-more mt-3" alt="Entertainment News" title="Entertainment News">مزید </a>
</div>