<!-- Naye sitare section -->
    <section class="mt-3">
      <div class="container clearfix">
        <div class="photo-section-bg p-3">
          <div class="col-md-12">
            <h1 class="photo-section-title"><a href="<?php echo $domain?>students/naye-sitare" class="text-white" alt="Naye Sitare" title="Naye Sitare"> ادب و ثقافت </a></h1>
           </div>
          <div class="row">
<?php            
 if ($newstar[0] > 0):
        $i = 0;
          while ($objnewstars = mysql_fetch_object($newstar[1])):
          $aid                       = $objnewstars->article_id;
          $article_homepage_headline = $objnewstars->article_homepage_headline;
          $article_image1             = $objnewstars->article_image;
          $article_date              = $objnewstars->article_date;
          $time                = strtotime($article_date);
          $month                     = date("M",$time);
          $year                      = date("Y",$time);          
          $article_page_url          = str_replace($old_pattern1s, $new_pattern1s,$objnewstars->article_page_url);
          $cid           = $objnewstars->category_id;
          $objcatPP      = new db_category_master($cid);
          $catname       = strtolower($objcatPP->Get_category_master_name());
          $url           = $catname.'/articles/'.$article_page_url.'-'.$aid;             
        $i=$i+1;  
?>            
            <div class="col-md-4 mt-3 pb-2">
              <a href="<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($article_image1,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?>">
                <!-- <i class="fa fa-camera photo-camera-icon" aria-hidden="true"></i> -->
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($article_homepage_headline,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
            </div>
<?php
  endwhile;
endif;  
?>            
            <a href="<?php echo $domain?>students/naye-sitare" class="text-left read-more mt-3" alt="Naye Sitare" title="Naye Sitare">مزید </a>
          </div>
        </div>
        <div class="horizontal-border"></div>
      </div>  
    </section>
    <!-- Naye sitare section -->