    <!-- Entertainment Photos Section -->
    <section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title"><a href="<?php echo $domain?>videos/entertainment" class="article-news-listing-title" alt="Entertainment" title="Entertainment">  تفریحات   </a></h2>
        <div class="row mt-4">
          <?php
            if ($videoenthome[0] > 0):
                $i = 1;
                while ($objvideoenthomes = mysql_fetch_object($videoenthome[1])):
                $pahp         = $objvideoenthomes->video_name;
                $pID          = $objvideoenthomes->video_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objvideoenthomes->video_url);          
                $pImage       = str_replace("../","",$objvideoenthomes->video_image1);          
                $pDate        = $objvideoenthomes->video_date;         
                $cid          = $objvideoenthomes->category_id;
                //$phps       = $objnewsPhotoss->article_short_description;
                $time         = strtotime($pDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);    
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = $catname.'/videos/'.$pu.'-'.$pID;       
               $i=$i+1;             
          ?>
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-play video-play-icon-grid-3" aria-hidden="true"></i>
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
            <a href="<?php echo $domain?>videos/entertainment" class=" read-more clearfix" alt="More" Title="More">مزید </a>
          </div>
        </div>
        <div class="horizontal-border mt-3"></div>
      </div>  
    </section>
    <!-- Entertainment Photos Section -->