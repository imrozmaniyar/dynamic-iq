    <!-- Entertainment Photos Section -->
    <section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title"><a href="<?php echo $domain?>photos/entertainment" class="article-news-listing-title">تفریحی ویڈیوز</a></h2>
        <div class="row mt-4">
          <?php
            if ($photosenthome[0] > 0):
                $i = 1;
                while ($objphotosenthomes = mysql_fetch_object($photosenthome[1])):
                $pahp         = $objphotosenthomes->gallery_name;
                $pID          = $objphotosenthomes->gallery_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objphotosenthomes->gallery_url);          
                $pImage       = str_replace("../","",$objphotosenthomes->gallery_image);          
                $cid          = $objphotosenthomes->category_id;
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = $catname.'/photos/'.$pu.'-'.$pID;       
               $i=$i+1;             
          ?>
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="">
                <i class="fa fa-camera video-play-icon-grid-3" aria-hidden="true"></i>
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
          <div class="col-md-12 text-left  mt-3">
            <a href="<?php echo $domain?>photos/entertainment" class=" read-more clearfix">مزید </a>
          </div>
        </div>
        <div class="horizontal-border mt-3"></div>
      </div>  
    </section>
    <!-- Entertainment Photos Section -->