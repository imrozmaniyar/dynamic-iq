<!-- Taleemi inquilab section -->
    <section class="mt-3">
      <div class="container clearfix">
        <div class="photo-section-bg p-3">
          <div class="col-md-12">
            <h1 class="photo-section-title"><a href="<?php echo $domain?>students/taleemi-inquilab" class="text-white" alt="Taleemi Inquilab" Title="Taleemi Inquilab">   تعلیمی انقلاب  </a></h1>
           </div>
          <div class="row">
<?php            
 if ($tq[0] > 0):
        $i = 0;
          while ($objtqs = mysql_fetch_object($tq[1])):
           $aid                       = $objtqs->article_id;  
          $article_homepage_headline = $objtqs->article_homepage_headline;
          $article_image1             = $objtqs->article_image;
          $article_date              = $objtqs->article_date;
          $time                = strtotime($article_date);
          $month                     = date("M",$time);
          $year                      = date("Y",$time);          
          $article_page_url          = str_replace($old_pattern1s, $new_pattern1s,$objtqs->article_page_url);
          $cid           = $objtqs->category_id;
          $objcatPP      = new db_category_master($cid);
          $catname       = strtolower($objcatPP->Get_category_master_name());
          $url           = $catname.'/articles/'.$article_page_url.'-'.$aid;           
        $i=$i+1;  
?>            

            <div class="col-md-4 mt-3 pb-2">
              <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($article_image1,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?>">
                <!-- <i class="fa fa-play video-play-icon" aria-hidden="true"></i> -->
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
            </div>
<?php
  endwhile;
endif;  
?>            
            <a href="<?php echo $domain?>students/taleemi-inquilab" class="text-left read-more mt-3" alt="Taleemi Inquilab" title="Taleemi Inquilab">مزید </a>
          </div>
        </div>
      </div>  
    </section>
    <!-- Taleemi inquilab section -->