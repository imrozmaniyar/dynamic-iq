<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>news/business" alt="Business" title="Business"> بزنس  </a></h1></div>
      <div class="news-section-inner-bg p-3">
        <div class="row">
          <div class="col-md-7 order-1 order-md-0">
            <div class="row">
          <?php
              if ($newsbusiness[0] > 0):
                $i = 1;
                while ($objnewsbusinesss = mysql_fetch_object($newsbusiness[1])):
                $ahp          = $objnewsbusinesss->article_homepage_headline;
                $aID          = $objnewsbusinesss->article_id;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnewsbusinesss->article_page_url);
                $cid          = $objnewsbusinesss->category_id;
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
                $aImage       = $objnewsbusinesss->article_image;          
                $aDate        = $objnewsbusinesss->article_date;         
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);          
               $i=$i+1;  
          ?>  
              <div class="col-md-6">
                <a href="<?php echo $domain?>news/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block news-national-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <p class="lifestyle-section-desc pr-1 pt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
                </a>
              </div> 
          <?php
            endwhile;
          endif;  
          ?>    
            </div> 
          </div>
         <?php
            if ($newsbusinessSingle[0] > 0):
                $i = 1;
                while ($objnewsbusinessSingles = mysql_fetch_object($newsbusinessSingle[1])):
                $ahp          = $objnewsbusinessSingles->article_homepage_headline;
                $aID          = $objnewsbusinessSingles->article_id;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnewsbusinessSingles->article_page_url);
                $cid          = $objnewsbusinessSingles->category_id;
                $objcatPp      = new db_category_master($cid);
                $catname      = strtolower($objcatPp->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
                $aImage       = $objnewsbusinessSingles->article_image;          
                $aDate        = $objnewsbusinessSingles->article_date;         
                $ahps         = $objnewsbusinessSingles->article_short_description;
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);          
               $i=$i+1;  

          ?>           
          <div class="col-md-5 order-0 order-md-1">
            <a href="<?php echo $domain?>news/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto news-national-sub-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
              <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
              <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
            </a>
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile): 
                  else:
              ?>

            <a href="<?php echo $domain?>news/business" class="text-right read-more mt-1" alt="More" title="More">مزید </a>
             <?php endif;?>
          </div>
          <?php
            endwhile;
          endif;  
          ?>
        </div>  
        <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
        <a href="<?php echo $domain?>news/business" class="text-right read-more mt-1" alt="More" title="More">مزید </a>
      <?php endif;?>
      </div>
    </div>
  </div>
</section>        