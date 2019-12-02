<?php
$objentvTwo = new db_gallery_master;
$strWhere = "category_id=16 and active='Y'";
$entvTwo    = $objentvTwo->selectAll($strWhere, 7, 3);
?>
    <section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title"><a href="#" class="article-news-listing-title"> کھیل  </a></h2>
        <div class="row mt-4">
        <?php

          if ($entvTwo[0] > 0):
        $i = 1;
        while ($objentvTwos = mysql_fetch_object($entvTwo[1])):
        $ahp          = $objentvTwos->gallery_name_home;
        $aID          = $objentvTwos->gallery_id;          
        $apu          = $objentvTwos->gallery_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentvTwos->gallery_image;            
       $i=$i+1;  
        ?>  
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?>sports/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="">
                <i class="fa fa-camera video-play-icon-grid-3" aria-hidden="true"></i>
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
          </div>
        <?php
          endwhile;
        endif;  
        ?>  
        </div>
        <div class="horizontal-border mt-3"></div>
      </div>  
    </section>
