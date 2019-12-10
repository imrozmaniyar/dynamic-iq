<?php
$objentfOne = new db_gallery_master;
$strWhere = "category_id=14 and gallery_date1<='$shedate' and gallery_epoch<=$timestamp and active='Y'";
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
    <div class="col-md-4 col-6 mt-3 mt-md-3">
      <div class="zoom">
        <a href="<?php echo $domain?>news/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
          <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
           <i class="fa fa-camera photo-camera-icon-single-mobile-grid" aria-hidden="true"></i>
          <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
        </a>
      </div>
    </div>
  <?php
    endwhile;
  endif;  
  ?>  
  </div>
</div>  