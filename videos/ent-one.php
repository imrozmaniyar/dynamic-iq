<?php
$objentfOne = new db_video_master;
$strWhere = "category_id=15 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$entfOne    = $objentfOne->selectAll($strWhere, 0, 6);
?>
<div class="article-listing-border p-2 mt-3">
  <div class="article-listing-p1-icon">تفریحی تصاویر</div>
  <div class="row">
    <?php
      if ($entfOne[0] > 0):
        $i = 1;
        while ($objentfOnes = mysql_fetch_object($entfOne[1])):
        $ahp          = $objentfOnes->video_name_home;
        $aID          = $objentfOnes->video_id;          
        $apu          = $objentfOnes->video_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentfOnes->video_image;          
        $aDate        = $objentfOnes->video_date;         
        $time         = strtotime($aDate);
        $month        = date("M",$time);
        $year         = date("Y",$time);          
       $i=$i+1;  
  ?>
    <div class="col-md-4 zoom col-6 mt-3 mt-md-3">
      <a href="<?php echo $domain?>entertainment/videos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
        <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
         <i class="fa fa-play video-play-icon-single-mobile-grid" aria-hidden="true"></i>
        <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
      </a>
    </div>
  <?php
    endwhile;
  endif;  
  ?>  
  </div>
</div>  