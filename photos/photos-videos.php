<section class="mt-3">
      <div class="container clearfix">
        <div class="photo-section-bg p-3">
          <div class="col-md-12">
            <h1 class="photo-section-title"><a href="<?php echo $domain?>videos" class="text-white" alt="Videos" title="Videos">تفریحی تصاویر</a></h1>
          </div>
          <div class="row">
 <?php
            if ($photovideohome[0] > 0):
                $i = 1;
                while ($objphotovideohomes = mysql_fetch_object($photovideohome[1])):
                $pahp         = $objphotovideohomes->video_name;
                $pID          = $objphotovideohomes->video_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objphotovideohomes->video_url);          
                $pImage       = str_replace("../","",$objphotovideohomes->video_image1);          
                $cid          = $objphotovideohomes->category_id;
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = $catname.'/photos/'.$pu.'-'.$pID;       
               $i=$i+1;             
          ?>                      
            <div class="col-md-4 mt-3 order-2 order-md-0">
              <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-play video-play-icon-single-mobile-grid" aria-hidden="true"></i>
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
          <a href="<?php echo $domain?>videos" class="text-left read-more mt-3 clearfix" alt="More" title="More">مزید </a>
        </div>
        </div>
      </div>  
    </section>