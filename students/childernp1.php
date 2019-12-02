<?php
      if ($childreninner1[0] > 0):
        $i = 1;
          while ($objchildreninner1s = mysql_fetch_object($childreninner1[1])):
          $username           = $objchildreninner1s->username;
          $nameID             = $objchildreninner1s->name;
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
          endif;     
        $i=$i+1;        

?>

<div class="row">
  <div class="col-md-6 order-2 order-md-1">
    <a href="<?php echo $domain?>students/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
      <h1 class="first-section-title text-right"><?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?></h1>
      <p class="text-right first-section-desc"><?php echo $hd;?></p>
    </a>
  </div>  
  <div class="col-md-6 order-1 order-md-2"><a href="<?php echo $domain?>students/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><img src="<?php echo htmlspecialchars($hi,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto" alt="<?php echo htmlspecialchars($ht,ENT_QUOTES, 'UTF-8')?>" width="525px;" height="300px;"></a></div>
</div>
<?php
  endwhile;
endif;  
?>