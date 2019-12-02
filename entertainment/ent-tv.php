<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>entertainment/tv"> ٹی وی </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($enttv[0] > 0):
                $i = 1;
                while ($objenttvs = mysql_fetch_object($enttv[1])):
                $ahp          = $objenttvs->article_homepage_headline;
                $aID          = $objenttvs->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objenttvs->article_page_url);                       
                $aImage       = $objenttvs->article_image;          
                $aDate        = $objenttvs->article_date;         
                $cid          = $objenttvs->category_id;
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
                    <a href="<?php echo $domain?>entertainment/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                      <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" style="height:239px;">
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
            if ($enttvSingle[0] > 0):
                $i = 1;
                while ($objenttvSingles = mysql_fetch_object($enttvSingle[1])):
                $ahp          = $objenttvSingles->article_homepage_headline;
                $aID          = $objenttvSingles->article_id;          
                $aImage       = $objenttvSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objenttvSingles->article_page_url);                        
                $aDate        = $objenttvSingles->article_date;         
                $ahps         = $objenttvSingles->article_short_description;
                $cid          = $objenttvSingles->category_id;
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
                <a href="<?php echo $domain?>entertainment/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
                <a href="<?php echo $domain?>entertainment/tv" class="text-right read-more mt-1">مزید </a>
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
