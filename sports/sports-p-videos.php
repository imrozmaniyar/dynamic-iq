<?php
$objSportsPVideos = new db_video_master;
$strWhere = "category_id=16 and active='Y' and video_id !=$id";
$SportsPVideos    = $objSportsPVideos->selectAll($strWhere, 0, 3);
?>
<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>videos" class="text-white"> ویڈیو </a></h1></div>
      <div class="row">
        <?php
            if ($SportsPVideos[0] > 0):
                $i = 1;
                while ($objSportsPVideoss = mysql_fetch_object($SportsPVideos[1])):
                $pahp         = $objSportsPVideoss->video_name_home;
                $pID          = $objSportsPVideoss->video_id;   
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objSportsPVideoss->video_url);                 
                $pImage       = str_replace("../","",$objSportsPVideoss->video_image1);          
                $pDate        = $objSportsPVideoss->video_date;  
                $cid          = $objSportsPVideoss->category_id;       
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
              <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" style="height:227px;">
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
      <div class="row"><a href="<?php echo $domain?>videos" class="text-left read-more mt-3">مزید </a></div>  
    </div>
  </div>  
</section>