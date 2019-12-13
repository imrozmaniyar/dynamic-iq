<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>sports/cricket" alt="Cricket" title="Cricket">  کرکٹ   </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($sportscricket[0] > 0):
                $i = 1;
                while ($objsportscricket = mysql_fetch_object($sportscricket[1])):
                $ahp          = $objsportscricket->article_homepage_headline;
                $aID          = $objsportscricket->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objsportscricket->article_page_url);                       
                $aImage       = $objsportscricket->article_image;          
                $aDate        = $objsportscricket->article_date;         
                $cid          = $objsportscricket->category_id;
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
                    <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
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
            if ($sportscricketSingle[0] > 0):
                $i = 1;
                while ($objsportscricketSingles = mysql_fetch_object($sportscricketSingle[1])):
                $ahp          = $objsportscricketSingles->article_homepage_headline;
                $aID          = $objsportscricketSingles->article_id;          
                $aImage       = $objsportscricketSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objsportscricketSingles->article_page_url);                        
                $aDate        = $objsportscricketSingles->article_date;         
                $ahps         = $objsportscricketSingles->article_short_description;
                $cid          = $objsportscricketSingles->category_id;
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
                <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto news-national-sub-section-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
              <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile): 
                  else:
                ?>


                <a href="<?php echo $domain?>sports/cricket" class="text-right read-more mt-1" Alt="More" Title="More">مزید </a>
                  <?php endif;?>
              </div>
          <?php
            endwhile;
          endif;  
          ?>    
            </div>  
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>

                <a href="<?php echo $domain?>sports/cricket" class="text-right read-more mt-1" Alt="More" Title="More">مزید </a>
                  <?php endif;?>
            

          </div>
        </div>
      </div>
    </section>        
