<div class="col-md-4 vertical-border-content-seperator order-1 order-md-1">
<h1 class="lifestyle-section-title mb-3"><a href="<?php echo $domain?>features/juma-magazine">مجمعہ میگزین۔</a></h1>
<?php
 if ($jumma[0] > 0):
        $i = 0;
          while ($objjummas = mysql_fetch_object($jumma[1])):
          $aid                       = $objjummas->article_id;  
          $article_homepage_headline = $objjummas->article_homepage_headline;
          $article_image1             = $objjummas->article_image;
          $article_date              = $objjummas->article_date;
          $time          			       = strtotime($article_date);
          $month                     = date("M",$time);
          $year                      = date("Y",$time);          
          $article_page_url          = str_replace($old_pattern1s, $new_pattern1s,$objjummas->article_page_url);
          $cid           = $objjummas->category_id;
          $objcatPP      = new db_category_master($cid);
          $catname       = strtolower($objcatPP->Get_category_master_name());
          $url           = $catname.'/articles/'.$article_page_url.'-'.$aid;             

        $i=$i+1;  
?>
<?php if($i==1):?>	
    <img src="<?php echo htmlspecialchars($article_image1,ENT_QUOTES, 'UTF-8')?>" class="img-fluid other-section-img" alt="<?php echo htmlspecialchars($article_image1,ENT_QUOTES, 'UTF-8')?>">
    <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?></p></a>
<?php else:?>
	<a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href"><p class="horizontal-border-content-seperator mt-3 pb-3 lifestyle-section-desc"><?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?></p></a>
<?php endif;?>	
<?php
	endwhile;
endif;	
?>    

<a href="<?php echo $domain?>features/juma-magazine" class="float-left read-more mt-3">مزید </a>
</div>