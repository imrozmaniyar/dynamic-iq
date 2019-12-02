<?php
$objentfOne = new db_gallery_master;
$strWhere = "category_id=15 and active='Y'";
$entfOne    = $objentfOne->selectAll($strWhere, 0, 6);
?>
<div class="article-listing-border p-2 mt-3">
  <div class="article-listing-p1-icon">تفریحی تصاویر</div>
  <div class="row">
    <?php
      if ($entfOne[0] > 0):
        $i = 1;
        while ($objentfOnes = mysql_fetch_object($entfOne[1])):
        $ahp          = $objentfOnes->gallery_name_home;
        $aID          = $objentfOnes->gallery_id;          
        $apu          = $objentfOnes->gallery_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentfOnes->gallery_image;          
       $i=$i+1;  
  ?>
    <div class="col-md-4 zoom col-6 mt-3 mt-md-3">
      <a href="<?php echo $domain?>entertainment/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
        <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
         <i class="fa fa-camera video-play-icon-grid-3" aria-hidden="true"></i>
        <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
      </a>
    </div>
  <?php
    endwhile;
  endif;  
  ?>  
  </div>
</div>  