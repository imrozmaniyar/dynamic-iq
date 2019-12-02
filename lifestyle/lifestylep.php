<div class="row">
<?php
      if ($lifestyleinner2[0] > 0):
        $i = 1;
          while ($objlifestyleinner2s = mysql_fetch_object($lifestyleinner2[1])):
          $username           = $objlifestyleinner2s->username;
          $nameID             = $objlifestyleinner2s->name;
          if($username     =='Article'):
            $objAmaster    = new db_article_master($nameID);
            $hid           = $objAmaster->Get_article_id();
            $ht            = $objAmaster->Get_article_homepage_headline();
            $hd            = $objAmaster->Get_article_short_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objAmaster->Get_article_page_url());
            $hi            = $objAmaster->Get_article_image();
            $hdate         = $objAmaster->Get_article_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objAmaster->Get_category_id();
            $objcatA       = new db_category_master($cid);
            $catname       = strtolower($objcatA->Get_category_master_name());
            //$url           = $catname.'/articles/'.$hu.'/'.$hid;
            $url           = 'articles/'.$hu.'-'.$hid;
            $fafa          = '';
          elseif($username =='Videos'):  
            $objVmaster    = new db_video_master($nameID);
            $hid            = $objVmaster->Get_video_id();
            $ht            = $objVmaster->Get_video_name_home();
            $hd            = $objVmaster->Get_video_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objVmaster->Get_video_url());
            $hi            = $objVmaster->Get_video_image();
            $hdate         = $objVmaster->Get_video_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objVmaster->Get_category_id();
            $objcatV       = new db_category_master($cid);
            $catname       = strtolower($objcatV->Get_category_master_name());
            //$url           = $catname.'/videos/'.$hu.'/'.$hid;            
            $url           = 'videos/'.$hu.'-'.$hid;   
            $fafa          = 'fa fa-play video-play-icon';
          elseif($username =='Photos'):  
            $objGmaster    = new db_gallery_master($nameID);
            $hid           = $objGmaster->Get_gallery_id();
            $ht            = $objGmaster->Get_gallery_name_home();
            $hd            = $objGmaster->Get_gallery_description();
            $hu            = str_replace($old_pattern1s, $new_pattern1s,$objGmaster->Get_gallery_url());
            $hi            = $objGmaster->Get_gallery_image();
            $hdate         = $objGmaster->Get_gallery_date();
            $time          = strtotime($hdate);
            $month         = date("M",$time);
            $year          = date("Y",$time);
            $cid           = $objGmaster->Get_category_id();
            $objcatP       = new db_category_master($cid);
            $catname       = strtolower($objcatP->Get_category_master_name());
            //$url           = $catname.'/photos/'.$hu.'/'.$hid;       
            $url           = 'photos/'.$hu.'-'.$hid;
            $fafa          = 'fa fa-camera photo-camera-icon';
          endif;     
        $i=$i+1;
?>  
  <div class="col-md-3 zoom col-6 mt-3">
    <a href="<?php echo $domain?>lifestyle/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
      <img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" style="height:165px;" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>">
      <p class="first-section-sub-desc"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></p>
    </a>
  </div>
<?php
  endwhile;
endif;  
?>    
</div>