<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>students/naye-sitare"> نیئے ستارے۔  </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($ns[0] > 0):
                $i = 1;
                while ($objnss = mysql_fetch_object($ns[1])):
                $ahp          = $objnss->article_homepage_headline;
                $aID          = $objnss->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnss->article_page_url);                       
                $aImage       = $objnss->article_image;          
                $aDate        = $objnss->article_date;         
                $cid          = $objnss->category_id;
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
                    <a href="<?php echo $domain?>students/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
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
            if ($nsSingle[0] > 0):
                $i = 1;
                while ($objnsSingles = mysql_fetch_object($nsSingle[1])):
                $ahp          = $objnsSingles->article_homepage_headline;
                $aID          = $objnsSingles->article_id;          
                $aImage       = $objnsSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objnsSingles->article_page_url);                        
                $aDate        = $objnsSingles->article_date;         
                $ahps         = $objnsSingles->article_short_description;
                $cid          = $objnsSingles->category_id;
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
                <a href="<?php echo $domain?>students/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
                <a href="<?php echo $domain?>students/naye-sitare" class="text-right read-more mt-1">مزید </a>
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
