<section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title"><a href="<?php echo $domain?>videos/news" class="article-news-listing-title">نیوز ویڈیوز </a></h2>
        <div class="row mt-4">
          <?php
            if ($videonewshome[0] > 0):
                $i = 1;
                while ($objvideonewshomes = mysql_fetch_object($videonewshome[1])):
                $pahp         = $objvideonewshomes->video_name;
                $pID          = $objvideonewshomes->video_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objvideonewshomes->video_url);          
                $pImage       = str_replace("../","",$objvideonewshomes->video_image1);          
                $pDate        = $objvideonewshomes->video_date;         
                $cid          = $objvideonewshomes->category_id;
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
                <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="">
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
            <a href="<?php echo $domain?>videos/news" class=" read-more clearfix">مزید </a>
          </div>
        </div>
        <div class="horizontal-border mt-3"></div>
      </div>  
    </section>