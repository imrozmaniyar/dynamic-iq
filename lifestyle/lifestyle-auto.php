<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>lifestyle/auto" title="Auto" alt="Auto">  آٹو موبائل  </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($auto[0] > 0):
                $i = 1;
                while ($objautos = mysql_fetch_object($auto[1])):
                $ahp          = $objautos->article_homepage_headline;
                $aID          = $objautos->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objautos->article_page_url);                       
                $aImage       = $objautos->article_image;          
                $aDate        = $objautos->article_date;         
                $cid          = $objautos->category_id;
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
                    <a href="<?php echo $domain?>lifestyle/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
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
            if ($autoSingle[0] > 0):
                $i = 1;
                while ($objautoSingles = mysql_fetch_object($autoSingle[1])):
                $ahp          = $objautoSingles->article_homepage_headline;
                $aID          = $objautoSingles->article_id;          
                $aImage       = $objautoSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objautoSingles->article_page_url);                        
                $aDate        = $objautoSingles->article_date;         
                $ahps         = $objautoSingles->article_short_description;
                $cid          = $objautoSingles->category_id;
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
                <a href="<?php echo $domain?>lifestyle/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto news-national-sub-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
                <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile): 
     else:
 ?>

                <a href="<?php echo $domain?>lifestyle/auto" class="text-right read-more mt-1" alt="More" Title="More">مزید </a>
                 <?php endif;?>
              </div>
          <?php
            endwhile;
          endif;  
          ?>    
            </div>  
                            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile): 
  
 ?>

                <a href="<?php echo $domain?>lifestyle/auto" class="text-right read-more mt-1" alt="More" Title="More">مزید </a>
                 <?php endif;?>
          </div>
        </div>
      </div>
    </section>        
