<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>entertainment/theatre"> تھیٹر۔  </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($entthea[0] > 0):
                $i = 1;
                while ($objenttheas = mysql_fetch_object($entthea[1])):
                $ahp          = $objenttheas->article_homepage_headline;
                $aID          = $objenttheas->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objenttheas->article_page_url);                       
                $aImage       = $objenttheas->article_image;          
                $aDate        = $objenttheas->article_date;         
                $cid          = $objenttheas->category_id;
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
            if ($enttheaSingle[0] > 0):
                $i = 1;
                while ($objenttheaSingles = mysql_fetch_object($enttheaSingle[1])):
                $ahp          = $objenttheaSingles->article_homepage_headline;
                $aID          = $objenttheaSingles->article_id;          
                $aImage       = $objenttheaSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objenttheaSingles->article_page_url);                        
                $aDate        = $objenttheaSingles->article_date;         
                $ahps         = $objenttheaSingles->article_short_description;
                $cid          = $objenttheaSingles->category_id;
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
                <a href="<?php echo $domain?>entertainment/theatre" class="text-right read-more mt-1">مزید </a>
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
