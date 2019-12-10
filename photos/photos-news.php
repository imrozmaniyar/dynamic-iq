<section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title"><a href="<?php echo $domain?>photos/news" class="article-news-listing-title" alt="News" title="News"> خبریں  </a></h2>
        <div class="row mt-4">
          <?php
            if ($photonewshome[0] > 0):
                $i = 1;
                while ($objphotonewshomes = mysql_fetch_object($photonewshome[1])):
                $pahp         = $objphotonewshomes->gallery_name;
                $pID          = $objphotonewshomes->gallery_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objphotonewshomes->gallery_url);          
                $pImage       = str_replace("../","",$objphotonewshomes->gallery_image);          
                $cid          = $objphotonewshomes->category_id;
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = $catname.'/photos/'.$pu.'-'.$pID;        
               $i=$i+1;             
          ?>          
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-camera photo-camera-icon-single-mobile-grid" aria-hidden="true"></i>
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
          </div>
          <?php
            endwhile;
          endif;  
          ?>
         
        </div>
        <div class="row col-md-12 mt-3">
            <a href="<?php echo $domain?>photos/news" class=" read-more clearfix" alt="More" title="More">مزید </a>
        </div>
        <div class="horizontal-border mt-3"></div>
      </div>  
    </section>