<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>news/international"> بین اقوامی </a></h1></div>
      <div class="news-section-inner-bg p-3">
        <div class="row">
          <div class="col-md-7 order-1 order-md-0">
            <div class="row">
          <?php
              if ($newsinternational[0] > 0):
                $i = 1;
                while ($objnewsinternationals = mysql_fetch_object($newsinternational[1])):
                $ahp          = $objnewsinternationals->article_homepage_headline;
                $aID          = $objnewsinternationals->article_id;  
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnewsinternationals->article_page_url);        
                $aImage       = $objnewsinternationals->article_image;          
                $aDate        = $objnewsinternationals->article_date;         
                $cid          = $objnewsinternationals->category_id;
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);   
                $objcatPP     = new db_category_master($cid);
                $catname      = strtolower($objcatPP->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
               $i=$i+1;  
          ?>  
              <div class="col-md-6">
                <a href="<?php echo $domain?>news/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block news-national-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
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
            if ($newsinternationalSingle[0] > 0):
                $i = 1;
                while ($objnewsinternationalSingles = mysql_fetch_object($newsinternationalSingle[1])):
                $ahp          = $objnewsinternationalSingles->article_homepage_headline;
                $aID          = $objnewsinternationalSingles->article_id;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnewsinternationalSingles->article_page_url);        
                $aImage       = $objnewsinternationalSingles->article_image;          
                $aDate        = $objnewsinternationalSingles->article_date;         
                $ahps         = $objnewsinternationalSingles->article_short_description;
                $cid          = $objnewsinternationalSingles->category_id;
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);          
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
               $i=$i+1;  

          ?>           
               <div class="col-md-5 order-0 order-md-1">
                <a href="<?php echo $domain?>news/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo $domain?>images/<?php echo htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>/<?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?>/<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto news-national-sub-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
                <a href="<?php echo $domain?>news/international" class="text-right read-more mt-1">مزید </a>
              </div>
          <?php
            endwhile;
          endif;  
          ?>
        </div>  
      </div>
    </div>
  </div>
</section>  