<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>videos" class="text-white" Alt="Videos" Title="Videos"> ویڈیو </a></h1></div>
      <div class="row">
        <?php
            if ($SportsVideos[0] > 0):
                $i = 1;
                while ($objSportsVideoss = mysql_fetch_object($SportsVideos[1])):
                $pahp         = $objSportsVideoss->video_name_home;
                $pID          = $objSportsVideoss->video_id;   
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objSportsVideoss->video_url);                 
                $pImage       = $objSportsVideoss->video_image1;          
                $pDate        = $objSportsVideoss->video_date;  
                $cid          = $objSportsVideoss->category_id;       
                //$phps         = $objnewsPhotoss->article_short_description;
                $time         = strtotime($pDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = 'videos/'.$pu.'-'.$pID;                                 
               $i=$i+1;          
        ?>

        <div class="col-md-4 mt-3 order-2 order-md-0">
          <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
            <div class="card-shadow zoom">
              <img src="<?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" Title="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>">
              <i class="fa fa-play video-play-icon" aria-hidden="true"></i>
              <p class="first-section-sub-desc"><?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?></p>
            </div>
          </a>
        </div>
        <?php
          endwhile;
        endif;  
        ?>
      </div>
      <div class="row"><a href="<?php echo $domain?>videos" class="text-left read-more mt-3" alt="More" Title="More">مزید </a></div>  
    </div>
  </div>  
</section>