<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>sports/other-sports"> دوسرے کھیل  </a></h1></div>
      <div class="news-section-inner-bg p-3">
        <div class="row">
          <div class="col-md-7 order-1 order-md-0">
            <div class="row">
          <?php
              if ($sportsothers[0] > 0):
                $i = 1;
                while ($objsportsotherss = mysql_fetch_object($sportsothers[1])):
                $ahp          = $objsportsotherss->article_homepage_headline;
                $aID          = $objsportsotherss->article_id;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objsportsotherss->article_page_url);
                $cid          = $objsportsotherss->category_id;
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
                $aImage       = $objsportsotherss->article_image;          
                $aDate        = $objsportsotherss->article_date;         
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);          
               $i=$i+1;  
          ?>  
              <div class="col-md-6">
                <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
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
            if ($sportsothersSingle[0] > 0):
                $i = 1;
                while ($objsportsothersSingles = mysql_fetch_object($sportsothersSingle[1])):
                $ahp          = $objsportsothersSingles->article_homepage_headline;
                $aID          = $objsportsothersSingles->article_id;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objsportsothersSingles->article_page_url);
                $cid          = $objsportsothersSingles->category_id;
                $objcatPp      = new db_category_master($cid);
                $catname      = strtolower($objcatPp->Get_category_master_name());
                //$url        = $catname.'/photos/'.$hu.'/'.$hid;       
                $url          = 'articles/'.$hu.'-'.$aID;                        
                $aImage       = $objsportsothersSingles->article_image;          
                $aDate        = $objsportsothersSingles->article_date;         
                $ahps         = $objsportsothersSingles->article_short_description;
                $time         = strtotime($aDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);          
               $i=$i+1;  

          ?>           
          <div class="col-md-5 order-0 order-md-1">
            <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
              <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
              <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
            </a>
            <a href="<?php echo $domain?>sports/other-sports" class="text-right read-more mt-1">مزید </a>
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