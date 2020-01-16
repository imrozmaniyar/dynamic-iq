<?php
$keyword  = $articleHeadline;
$keyword1 = $articleURL;
$explodeResultArray = str_replace(","," ", $newtags);
$keywordA = mysql_escape_mimic($explodeResultArray);
//echo $explodeResultArray;
$keyword2 = str_replace(' ','|', $keywordA);
$objreleatedNews = new db_article_master;

$strWhere1 = "article_tags REGEXP('($keyword2)') AND active='Y' AND article_id!=$id";
//$strWhere1 = "active='Y' and article_headline LIKE ' % $keyword % '";
$releatedNews = $objreleatedNews->selectAll($strWhere1, 0, 4);
?>
<section class="mt-3">
  <div class="container clearfix">
  <h1 class="lifestyle-section-title">  متعلقہ خبریں  </h1>
  <style> 
#main12 {
  display: -webkit-flex; /* Safari */
  -webkit-flex-direction: row-reverse; /* Safari 6.1+ */
  display: flex;
  flex-direction: row-reverse;
}
</style>  
    <div class="row mt-3" id="main12">
<?php
    if ($releatedNews[0]           > 0):
    $j                             = 0;
    while ($objreleatedNewsS       = mysql_fetch_object($releatedNews[1])):
      $arID                        = $objreleatedNewsS->article_id;
      $arheadline                  = $objreleatedNewsS->article_headline;
      $arurl                       = $objreleatedNewsS->article_page_url;
      $arurl1                      = str_replace($old_pattern1s, $new_pattern1s, $arurl);
      $arimage                     = $objreleatedNewsS->article_image;
      $acat                        = $objreleatedNewsS->category_id;
      $objarcat = new db_category_master($acat);
      $arcatname = strtolower($objarcat->Get_category_master_name());
      
      //$song_master_actor1          = $objreleatedNewsS->song_master_actor;
    $j                             = $j + 1;
?>      
      <div class="col-md-3 zoom col-6"><a href="<?php echo $domain?><?php echo htmlspecialchars($arcatname,ENT_QUOTES, 'UTF-8')?>/articles/<?php echo htmlspecialchars($arurl1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($arID,ENT_QUOTES, 'UTF-8')?>" class="home-href"><img src="<?php echo $domain?><?php echo htmlspecialchars($arimage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt=""><p class="first-section-sub-desc"><?php echo htmlspecialchars($arheadline,ENT_QUOTES, 'UTF-8')?></p></a></div>
<?php
    endwhile;
  endif;  
?>    

    </div>
  </div>  
</section>