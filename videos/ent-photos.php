<?php
$objentpphoto = new db_gallery_master;
$strWhere = "category_id=15 and gallery_date1<='$shedate' and gallery_epoch<=$timestamp and active='Y'";
$entpphoto    = $objentpphoto->selectAll($strWhere, 0, 3);
?>
 <section class="mt-3">
      <div class="container clearfix">
        <div class="photo-section-bg p-3">
          <div class="col-md-12">
            <h1 class="photo-section-title"><a href="<?php echo $domain?>photos/entertainment" class="text-white" alt="Entertainment Photos" title="Entertainment Photos">تفریحی تصاویر</a></h1>
          </div>
          <div class="row">
          <?php
              if ($entpphoto[0] > 0):
              $i = 1;
              while ($objentpphotos = mysql_fetch_object($entpphoto[1])):
              $ahp          = $objentpphotos->gallery_name_home;
              $aID          = $objentpphotos->gallery_id;          
              $apu          = $objentpphotos->gallery_url;
              $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
              $aImage       = $objentpphotos->gallery_image;          
             $i=$i+1;  

          ?>  
            <div class="col-md-4 mt-3 order-2 order-md-0">
              <a href="<?php echo $domain?>entertainment/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-camera photo-camera-icon-single-mobile-grid" aria-hidden="true"></i>
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
            </div>
          <?php
            endwhile;
          endif;  
          ?>  
          </div>  
          </div>
          <div class="row">
          <a href="<?php echo $domain?>photos/entertainment" class="text-left read-more mt-3 clearfix" alt="More" Title="More">مزید </a>
        </div>
        </div>
        <div class="horizontal-border"></div>
      </div>  
    </section>