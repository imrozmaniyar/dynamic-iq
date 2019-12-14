<?php include('../top.php');
$urlg=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
$explodeResultArray = end(explode("-", $urlg)); 
$id = intval($explodeResultArray);
$objMaingallery    = new db_gallery_master($id);
//$GalleryHeadLine   = $objMaingallery->Get_gallery_name(); 
$GalleryHeadLine   = $objMaingallery->Get_gallery_name(); 
$GDate             = $objMaingallery->Get_gallery_date();         
$time              = strtotime($GDate);
$month             = date("M",$time);
$year              = date("Y",$time);
$day               = date("j",$time);
$GTime             = $objMaingallery->Get_gallery_time();
$GName             = $objMaingallery->Get_admin_name();
$GDesc             = $objMaingallery->Get_gallery_description();
$Gcat              = $objMaingallery->Get_category_id();

///for child gallery/////
$objgalleryChild = new db_gallery_child;
$strWhere = "gallery_id=$id and active='Y'";
$galleryChild   = $objgalleryChild->selectAll($strWhere, null, null);
///for child gallery/////

$plsql = "SELECT MAX(gallery_id) FROM gallery_master WHERE category_id = $Gcat and gallery_id < $id";
$last1234 = mysql_query($plsql);
$num_count1234 = mysql_fetch_row($last1234);
$next_slide_id = $num_count1234[0];

$objMaingallery1    = new db_gallery_master($next_slide_id);
//$GalleryHeadLine   = $objMaingallery->Get_gallery_name(); 
$GalleryHeadLine1   = $objMaingallery1->Get_gallery_name(); 
$GDate1             = $objMaingallery1->Get_gallery_date();         
$time1              = strtotime($GDate);
$month1             = date("M",$time);
$year1              = date("Y",$time);
$day1               = date("j",$time);
$GTime1            = $objMaingallery1->Get_gallery_time();
$GName1             = $objMaingallery1->Get_admin_name();
$GDesc1            = $objMaingallery1->Get_gallery_description();
$Gcat1              = $objMaingallery1->Get_category_id();

///for child gallery/////
$objgalleryChild1 = new db_gallery_child;
$strWhere1 = "gallery_id=$next_slide_id and active='Y'";
$galleryChild1   = $objgalleryChild1->selectAll($strWhere1, null, null);
///for child gallery/////

///for releated gallery/////
$objgalleryR = new db_gallery_master;
$strWhere2 = "category_id=$Gcat and active='Y' and gallery_id !=$id and gallery_id !=$next_slide_id";
$galleryR   = $objgalleryR->selectAll($strWhere2, 0, 4);
///for releated gallery/////
?>
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" class="" title="Photos"> تصویریں  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>news" class="" title="News"> خبریں  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="" title="Home"> گھر  </a></li>
          </ol>
          </ol>
        </nav>
        <div class="row mt-3">
          <div class="col-md-11 news-details order-1 order-md-0">
            <h1 class="news-details-title font-weight-bold"><?php echo htmlspecialchars($GalleryHeadLine,ENT_QUOTES, 'UTF-8')?></h1>
            <p class="news-details-author mt-4">Updated: <?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($GTime,ENT_QUOTES, 'UTF-8')?> IST | <span><?php echo  htmlspecialchars($GName,ENT_QUOTES, 'UTF-8')?></span></p>
            <p><?php echo $GDesc ?></p>
            <?php
              if ($galleryChild[0] > 0):
                $i = 0;
                while ($objgalleryChilds = mysql_fetch_object($galleryChild[1])):
                $GCCaption    = $objgalleryChilds->gallery_child_caption;
                $GCImage      = str_replace("../","",$objgalleryChilds->gallery_child_image);          
               $i=$i+1;                     
              $sSql = "SELECT count(*) cnt FROM gallery_child where gallery_id=$id";
              $res123 = mysql_query($sSql);
              $num_records123 = mysql_fetch_row($res123);

            ?>
            <div class="photo-details-bg mt-4">
              <img src="<?php echo $domain?><?php echo htmlspecialchars($GCImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($GCCaption,ENT_QUOTES, 'UTF-8')?>" title="">
              <div class="photo-details-count-no"><span><?php echo htmlspecialchars($i,ENT_QUOTES, 'UTF-8')?></span>/<?php echo $num_records123[0];  ?></div>
            </div>
            <p class="mb-4 mt-4"><?php echo $GCCaption?></p>
            <?php
              endwhile;
            endif;  
            ?>
          </div>
          <div class="col-md-1 text-right order-0 order-md-1 mb-3 mb-md-0">
            <a href="https://www.facebook.com/sharer.php?u=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="mr-2 mr-md-0" target="_blank"><img src="<?php echo $domain?>images/fb-icon.png" class="img-fluid mx-auto"></a>
            <a href="https://twitter.com/share?url=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>&amp;text=<?php echo htmlspecialchars($articleHeadline,ENT_QUOTES, 'UTF-8')?>!&amp;amp;via=The Inquilab&amp;amp;" class="mr-2 mr-md-0" target="_blank"><img src="<?php echo $domain?>images/tweet-icon.png" class="img-fluid mt-md-2 mx-auto"></a>
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile) :?>
            <a href="whatsapp://send?text=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8');?>" data-action="share/whatsapp/share" target="_blank"><img src="<?php echo $domain?>images/whatsapp-icon.png" class="img-fluid mt-md-2 mx-auto"></a>
            <?php endif;?>

          </div>
        </div>  
      </div>  
    </section>
    <!-- first section -->

    <!-- New photo Section -->
    <section class="mt-3">
      <div class="photo-details-bg-seperator">
        <p class="text-center text-black pt-3 pb-3 font-weight-bold" title="Next Gallery">اگلی گیلری</p>
      </div>  
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" class="" title="Photos"> تصویریں  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>news" class="" title="News"> خبریں  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="" title="Home"> گھر  </a></li>
          </ol>
          </ol>
        </nav>
        <div class="row mt-3">
          <div class="col-md-11 news-details order-1 order-md-0">
            <h1 class="news-details-title font-weight-bold"><?php echo htmlspecialchars($GalleryHeadLine1,ENT_QUOTES, 'UTF-8')?></h1>
            <p class="news-details-author mt-4">Updated: <?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($GTime1,ENT_QUOTES, 'UTF-8')?> IST | <span><?php echo  htmlspecialchars($GName1,ENT_QUOTES, 'UTF-8')?></span></p>
            <p><?php echo $GDesc1 ?></p>
            <?php
              if ($galleryChild1[0] > 0):
                $j = 0;
                while ($objgalleryChild1s = mysql_fetch_object($galleryChild1[1])):
                $GCCaption1    = $objgalleryChild1s->gallery_child_caption;
                $GCImage1      = str_replace("../","",$objgalleryChild1s->gallery_child_image);          
                $j=$j+1;                     
                $sSql1 = "SELECT count(*) cnt FROM gallery_child where gallery_id=$next_slide_id";
                $res1231 = mysql_query($sSql1);
                $num_records1231 = mysql_fetch_row($res1231);
            ?>
            <div class="photo-details-bg mt-4">
              <img src="<?php echo $domain?><?php echo htmlspecialchars($GCImage1,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block" alt="<?php echo htmlspecialchars($GCCaption1,ENT_QUOTES, 'UTF-8')?>" title="">
              <div class="photo-details-count-no"><span><?php echo htmlspecialchars($j,ENT_QUOTES, 'UTF-8')?></span>/<?php echo $num_records1231[0];?></div>
            </div>
            <p class="mb-4 mt-4"><?php echo $GCCaption1?></p>
            <?php
              endwhile;
             endif; 
            ?>
          </div>
          <div class="col-md-1 text-center order-0 order-md-1 mb-3 mb-md-0">
            <a href="https://www.facebook.com/sharer.php?u=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="mr-2 mr-md-0" target="_blank"><img src="<?php echo $domain?>images/fb-icon.png" class="img-fluid mx-auto"></a>
            <a href="https://twitter.com/share?url=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>&amp;text=<?php echo htmlspecialchars($articleHeadline,ENT_QUOTES, 'UTF-8')?>!&amp;amp;via=The Inquilab&amp;amp;" class="mr-2 mr-md-0" target="_blank"><img src="<?php echo $domain?>images/tweet-icon.png" class="img-fluid mt-md-2 mx-auto"></a>
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile) :?>
            <a href="whatsapp://send?text=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8');?>" data-action="share/whatsapp/share" target="_blank"><img src="<?php echo $domain?>images/whatsapp-icon.png" class="img-fluid mt-md-2 mx-auto"></a>
            <?php endif;?>
          </div>
        </div>  
      </div>
    </section>
    <!-- New photo Section -->
    <!-- Related News -->
    <section class="mt-3">
      <div class="container clearfix">
        <h1 class="lifestyle-section-title"><a href="#">متعلقہ خبریں۔</a></h1>
        <div class="row mt-3">
          <?php
              if ($galleryR[0] > 0):
                $x = 0;
                while ($galleryRs = mysql_fetch_object($galleryR[1])):
                $gallery_nameR    = $galleryRs->gallery_name;
                $GCImageR      = str_replace("../","",$galleryRs->gallery_image1);          
                $pID          = $galleryRs->gallery_id;
                $pu           = str_replace($old_pattern1s, $new_pattern1s,$galleryRs->gallery_url);          
                $url          = 'photos/'.$pu.'-'.$pID;
                $x=$x+1;           
          ?>          
            <div class="col-md-3 zoom col-6">
              <a href="<?php echo $domain?>news/<?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" class="home-href">
                <img src="<?php echo $domain?><?php echo htmlspecialchars($GCImageR,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block first-section-sub-section-img" alt="">
                <p class="first-section-sub-desc"><?php echo htmlspecialchars($gallery_nameR,ENT_QUOTES, 'UTF-8');?></p>
            </a>
            </div>
          <?php
            endwhile;
          endif;  
          ?>  
        </div>
      </div>  
    </section>
    <!-- Related News -->
    <?php include('../bottom.php'); ?>  
    <?php if($uid==""):?>
    <script>
        var counter = 0;
        function showalert() {
            if (localStorage.clickcount > 2) {
                alert("Login to read more news");
                window.location="<?php echo $domain?>login";
            return;
            }else{
                clickCounter()
            }
            counter++;
        }
        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (localStorage.clickcount < 3) {
                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                } else {
                    localStorage.clickcount = 1;
                }
                // document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }
        showalert();
    </script>
<?php endif;?> 