<?php 
include_once("../configure.php");
include_once("../class/db_gallery_master.php");
$last_blog_id = $_POST['last_blog_id'];
if (isset($last_blog_id) && is_numeric($last_blog_id)) {
$last_blog_id = $_POST['last_blog_id'];
$objentvPaging  = new db_gallery_master;
$strWhere1 = "gallery_id < $last_blog_id and category_id=14 and active='Y'";
$entvPaging     = $objentvPaging->selectAll($strWhere1, 0, 9);
?>
  <div class="row">
<?php

      if ($entvPaging[0] > 0):
        $i = 1;
        while ($objentvPagings = mysql_fetch_object($entvPaging[1])):
        $ahp          = $objentvPagings->gallery_name_home;
        $aID          = $objentvPagings->gallery_id;          
        $apu          = $objentvPagings->gallery_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentvPagings->gallery_image;   
        $last_blog_id = $aID;        
       $i=$i+1;  
        ?>       
          <div class="col-md-4 order-2 order-md-0 mt-4">
              <a href="<?php echo $domain?>news/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>">
                <i class="fa fa-play video-play-icon-single-mobile-grid" aria-hidden="true"></i>
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></p>
              </div>
            </a>
          </div>
        <?php
  endwhile;
endif;
?>
</div>
<?php if ($entvPaging[0] > 9) { ?><div id="remove_row"><div class="mt-5 mb-5"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div>
 </div>
<?php }else{ ?>
<?php echo "<div class='mt-5 mb-5'><div id='remove_row' align='center' class='font-family-roboto'><font color='Red'><b>No More Data</b></font></div></div>" ?>
<?php } ?>   
<?php
}
?>  