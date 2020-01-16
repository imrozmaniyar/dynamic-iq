<section class="mt-3">
  <div class="container clearfix">
    <div class="photo-section-bg p-3">
      <div class="col-md-12"><h1 class="photo-section-title"><a href="<?php echo $domain?>photos" class="text-white" alt="Photos" title="Photos"> کرکٹ۔  </a></h1></div>
      <div class="row">
        <?php
            if ($SportsPhotos[0] > 0):
                $i = 1;
                while ($objSportsPhotoss = mysql_fetch_object($SportsPhotos[1])):
                $pahp         = $objSportsPhotoss->gallery_name_home;
                $pID          = $objSportsPhotoss->gallery_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$objSportsPhotoss->gallery_url);          
                $pImage       = str_replace("../","",$objSportsPhotoss->gallery_image1);          
                $pDate        = $objSportsPhotoss->gallery_date;         
                $cid          = $objSportsPhotoss->category_id;
                //$phps       = $objnewsPhotoss->article_short_description;
                $time         = strtotime($pDate);
                $month        = date("M",$time);
                $year         = date("Y",$time);    
                $objcatP      = new db_category_master($cid);
                $catname      = strtolower($objcatP->Get_category_master_name());
                $url          = 'photos/'.$pu.'-'.$pID;       
               $i=$i+1;          
        ?>
        <div class="col-md-4 mt-3 order-2 order-md-0">
          <a href="<?php echo $domain?>sports/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
            <div class="card-shadow zoom">
              <img src="<?php echo $domain?><?php echo htmlspecialchars($pImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>" Title="<?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?>">
              <i class="fa fa-camera photo-camera-icon" aria-hidden="true"></i>
              <p class="first-section-sub-desc"><?php echo htmlspecialchars($pahp,ENT_QUOTES, 'UTF-8')?></p>
            </div>
          </a>
        </div>
        <?php
            endwhile;
          endif;  
        ?>
      </div>
      <div class="row"><a href="<?php echo $domain?>photos" class="text-left read-more mt-3 clearfix" alt="More" title="More">مزید </a></div>
    </div>
  </div>  
</section>
