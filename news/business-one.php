<?php
$objnewsbusinessOne = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=13 and active='Y'";
$newsbusinessOne    = $objnewsbusinessOne->selectAll($strWhere, 0, 6);
?>
<div class="article-listing-border p-2 mt-3">
  <div class="article-listing-p1-icon">تفریحی تصاویر</div>
  <div class="row">
    <?php
      if ($newsbusinessOne[0] > 0):
        $i = 1;
        while ($objnewsbusinessOnes = mysql_fetch_object($newsbusinessOne[1])):
        $ahp          = $objnewsbusinessOnes->article_homepage_headline;
        $aID          = $objnewsbusinessOnes->article_id;          
        $apu          = $objnewsbusinessOnes->article_page_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objnewsbusinessOnes->article_image;          
        $aDate        = $objnewsbusinessOnes->article_date;         
        $time         = strtotime($aDate);
        $month        = date("M",$time);
        $year         = date("Y",$time);          
       $i=$i+1;  
  ?>
    <div class="col-md-4 zoom col-6 mt-3 mt-md-3">
      <a href="<?php echo $domain?>news/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
        <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
        <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
      </a>
    </div>
  <?php
    endwhile;
  endif;  
  ?>  
  </div>
</div>  