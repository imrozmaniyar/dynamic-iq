<?php
$objentVideosP = new db_video_master;
$strWhere = "category_id=15 and active='Y' and video_date1<='$shedate' and video_epoch<=$timestamp and video_id!=$id";
$entVideosP    = $objentVideosP->selectAll($strWhere, 0, 3);
?>
<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>videos" class="text-white"> ویڈیو </a></h1></div>
      <div class="row">
        <?php
            if ($entVideosP[0] > 0):
                $i = 1;
                while ($objentVideosPs = mysql_fetch_object($entVideosP[1])):
                $pahp         = $objentVideosPs->video_name_home;
                $pID          = $objentVideosPs->video_id;   
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objentVideosPs->video_url);                 
                $pImage       = str_replace("../","",$objentVideosPs->video_image1);          
                $pDate        = $objentVideosPs->video_date;  
                $cid          = $objentVideosPs->category_id;       
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
          <a href="<?php echo $domain?>entertainment/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
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