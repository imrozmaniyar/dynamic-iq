<section class="mt-3">
      <div class="container clearfix">
        <div class="photo-section-bg p-3">
          <div class="col-md-12">
            <h1 class="photo-section-title"><a href="<?php echo $domain?>photos" class="text-white">تفریحی تصاویر</a></h1>
          </div>
          <div class="row">
 <?php
            if ($videophotohome[0] > 0):
                $i = 1;
                while ($objvideophotohomes = mysql_fetch_object($videophotohome[1])):
                $pahp         = $objvideophotohomes->gallery_name;
                $pID          = $objvideophotohomes->gallery_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objvideophotohomes->gallery_url);          
                $pImage       = str_replace("../","",$objvideophotohomes->gallery_image1);          
                $pDate        = $objvideophotohomes->gallery_date;         
                $cid          = $objvideophotohomes->category_id;
                //$phps       = $objnewsPhotoss->article_short_description;
                $time         = strtotime($pDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);    
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = $catname.'/photos/'.$pu.'-'.$pID;       
               $i=$i+1;             
          ?>                      
            <div class="col-md-4 mt-3 order-2 order-md-0">
              <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="">
                <i class="fa fa-camera photo-camera-icon" aria-hidden="true"></i>
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
            </div>
<?php
  endwhile;
endif;
?>            
          </div>
          <div class="row">
          <a href="<?php echo $domain?>photos" class="text-left read-more mt-3 clearfix">مزید </a>
        </div>
        </div>
        <div class="horizontal-border"></div>
      </div>  
    </section>