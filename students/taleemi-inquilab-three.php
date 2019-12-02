<?php
$objentfThree = new db_article_master;
$strWhere = "category_id=15 and sub_category_id=14 and active='Y'";
$entfThree    = $objentfThree->selectAll($strWhere, 10, 3);
?>
<section class="mt-3">
  <div class="container clearfix">
    <h2 class="article-news-listing-title"> قومی  </h2>
<?php
  if ($entfThree[0] > 0):
    $i = 1;
    while ($objentfThrees = mysql_fetch_object($entfThree[1])):
    $ahp          = $objentfThrees->article_homepage_headline;
    $ahps         = $objentfThrees->article_short_description;
    $aID          = $objentfThrees->article_id;          
    $apu          = $objentfThrees->article_page_url;
    $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
    $aImage       = $objentfThrees->article_image1;          
    $aDate        = $objentfThrees->article_date;         
    $time         = strtotime($aDate);
    $month        = date("M",$time);
    $year         = date("Y",$time);
    $day          = date("j",$time);  
    $aDate1       = $objentfThrees->article_date1;         
    $da           = strtotime($aDate1);
    $month1       = date('F', $da);
    $year1        = date("Y",$da);
    $day1         = date("d",$da);            
    $aTime        = $objentfThrees->article_time;
   $i=$i+1;  
 ?>    
    <div class="row mt-3">
      <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
        <h3><a href="<?php echo $domain?>students/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></a></h3>
         <p><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
          <?php if($aDate1==''):?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <?php else:?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>            
        <?php endif;?>
         
      </div>
      <div class="col-md-3 order-0 order-md-1">
      <a href="<?php echo $domain?>students/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
      </div>
    </div>
<?php
  endwhile;
endif;  
?>    
    <div class="horizontal-border mt-3"></div>
  </div>  
</section>