<?php
$objentvTwo = new db_video_master;
$strWhere = "category_id=16 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$entvTwo    = $objentvTwo->selectAll($strWhere, 7, 3);
?>
    <section class="mt-3">
      <div class="container clearfix">
        <h2 class="article-news-listing-title" alt="Sports" Title="Sports"> کھیل  </h2>
        <div class="row mt-4">
        <?php

          if ($entvTwo[0] > 0):
        $i = 1;
        while ($objentvTwos = mysql_fetch_object($entvTwo[1])):
        $ahp          = $objentvTwos->video_name_home;
        $aID          = $objentvTwos->video_id;          
        $apu          = $objentvTwos->video_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentvTwos->video_image;          
        $aDate        = $objentvTwos->video_date;         
        $time         = strtotime($aDate);
        $month        = date("M",$time);
        $year         = date("Y",$time);          
       $i=$i+1;  
        ?>  
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?>sports/videos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-play video-play-icon-single-mobile-grid" aria-hidden="true"></i>
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
