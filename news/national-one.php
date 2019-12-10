<?php
$objnewsnationalOne = new db_article_master;
$strWhere = "category_id=14 and sub_category_id=11 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$newsnationalOne    = $objnewsnationalOne->selectAll($strWhere, 0, 6);
?>
<div class="article-listing-border p-2 mt-3">
  <div class="article-listing-p1-icon">تفریحی تصاویر</div>
  <div class="row">
    <?php
      if ($newsnationalOne[0] > 0):
        $i = 1;
        while ($objnewsnationalOnes = mysql_fetch_object($newsnationalOne[1])):
        $ahp          = $objnewsnationalOnes->article_homepage_headline;
        $aID          = $objnewsnationalOnes->article_id;          
        $apu          = $objnewsnationalOnes->article_page_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objnewsnationalOnes->article_image;          
        $aDate        = $objnewsnationalOnes->article_date;         
        $time         = strtotime($aDate);
        $month        = date("M",$time);
        $year         = date("Y",$time);          
       $i=$i+1;  
  ?>
    <div class="col-md-4 zoom col-6 mt-3 mt-md-3">
      <a href="<?php echo $domain?>news/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
        <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
        <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
      </a>
    </div>
  <?php
    endwhile;
  endif;  
  ?>  
  </div>
</div>  