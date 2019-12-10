<section class="mt-3">
  <div class="container clearfix">
    <div class="news-section-bg p-3">
      <div class="col-md-12"><h1 class="lifestyle-section-title"><a href="<?php echo $domain?>features/juma-magazine" alt="Juma Magazine" title="Juma Magazine">  جمعہ میگزین  </a></h1></div>
        <div class="news-section-inner-bg p-3">
          <div class="row">
            <div class="col-md-7 order-1 order-md-0">
                <div class="row">
          <?php
              if ($fjumma[0] > 0):
                $i = 1;
                while ($objfjummas = mysql_fetch_object($fjumma[1])):
                $ahp          = $objfjummas->article_homepage_headline;
                $aID          = $objfjummas->article_id;     
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objfjummas->article_page_url);                       
                $aImage       = $objfjummas->article_image;          
                $aDate        = $objfjummas->article_date;         
                $cid          = $objfjummas->category_id;
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
                    <a href="<?php echo $domain?>features/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                      <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block news-national-section-img" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
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
            if ($fjummaSingle[0] > 0):
                $i = 1;
                while ($objfjummaSingles = mysql_fetch_object($fjummaSingle[1])):
                $ahp          = $objfjummaSingles->article_homepage_headline;
                $aID          = $objfjummaSingles->article_id;          
                $aImage       = $objfjummaSingles->article_image;          
                $hu           = str_replace($old_pattern1s, $new_pattern1s,$objfjummaSingles->article_page_url);                        
                $aDate        = $objfjummaSingles->article_date;         
                $ahps         = $objfjummaSingles->article_short_description;
                $cid          = $objfjummaSingles->category_id;
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
                <a href="<?php echo $domain?>features/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                  <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid d-block mx-auto news-national-sub-section-img" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                  <h1 class="first-section-title text-right mt-2"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></h1>
                  <p class="text-right first-section-desc"><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>
                </a>
                <a href="<?php echo $domain?>features/juma-magazine" class="text-right read-more mt-1" alt="More" title="More">مزید </a>
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
