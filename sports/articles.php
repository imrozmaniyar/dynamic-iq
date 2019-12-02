﻿<?php include('../top.php');
$url=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
$explodeResultArray = end(explode("-", $url)); 
$id = intval($explodeResultArray);
$objMainArticle      = new db_article_master($id);
$articleHeadline = $objMainArticle->Get_article_headline(); 
$articleURL      = $objMainArticle->Get_article_page_url(); 
$aDate        = $objMainArticle->Get_article_date();         
$time         = strtotime($aDate);
$month        = date("M",$time);
$year         = date("Y",$time);
$day          = date("j",$time);
$aDate1       = $objMainArticle->Get_article_date1();     
$da           = strtotime($aDate1);
$month1       = date('F', $da);
$year1        = date("Y",$da);
$day1         = date("d",$da);
$aTime        = $objMainArticle->Get_article_time();
$aName        = $objMainArticle->Get_admin_name();
$aShortDesc   = $objMainArticle->Get_article_short_description();
$aImage       = str_replace('../','',$objMainArticle->Get_article_image());
$aCaption     = $objMainArticle->Get_article_image_caption();
$aMainDesc    = $objMainArticle->Get_article_description();
$atags        = $objMainArticle->Get_article_tags();
$akeywords        = $objMainArticle->Get_article_keywords();
//$parttags     = explode( ",", $atags );
//echo $parttags;
?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#">کاروباری خبریں</a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="#" class="text-black">ممبئی۔</a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="#" class="text-black"> گھر</a></li>
          </ol>
          </ol>
        </nav>
        <div class="row mt-3">
          <div class="col-md-11 news-details order-1 order-md-0">
            <h1 class="news-details-title font-weight-bold"><?php echo htmlspecialchars($articleHeadline,ENT_QUOTES, 'UTF-8')?></h1>
            <?php if($aDate1==''):?>
            <p class="news-details-author mt-3">Updated: <?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST | <span><?php echo  htmlspecialchars($aName,ENT_QUOTES, 'UTF-8')?></span></p>
            <?php else:?>
            <p class="news-details-author mt-3">Updated: <?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST | <span><?php echo  htmlspecialchars($aName,ENT_QUOTES, 'UTF-8')?></span></p>  
            <?php endif;?>  
            <p><?php echo htmlspecialchars($aShortDesc,ENT_QUOTES, 'UTF-8')?></p>
            <div class="card card-inverse text-center col-md-8 mx-auto mb-3">
                <img class="card-img-top img-fluid mx-auto" src="<?php echo $domain?><?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" alt="<?php echo htmlspecialchars($articleHeadline,ENT_QUOTES, 'UTF-8')?>">
                <div class="card-body ">
                <?php echo htmlspecialchars($aCaption,ENT_QUOTES, 'UTF-8')?>
                </div>
            </div>
            <p><?php echo $aMainDesc?></p>
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
    <!-- first section -->

    <!-- Tag Section -->
<?php if($atags!=''):?>
    <section class="mt-3">
      <div class="container clearfix">
        <div class="news-details-tag-border-horizontal"></div>
        <div class="col-md-12 mt-3">
          <div class="news-details-tag-border-vertical">
            <div class="text-right p-4">
            <?php  
                $array = explode(',', $atags);
                for ($i = 0; $i < count($array); $i++) {
              ?>      
                <span class="btn-tag btn"><a href="#" style="text-decoration: none;"><?php echo htmlspecialchars($array[$i],ENT_QUOTES, 'UTF-8')?></a></span>
            <?php
              }      
            ?>
            <span class="btn-tag btn">Tags</span>
          </div>
          </div>
        </div>  
      </div>  
    </section>
<?php endif;?>
    <!-- Tag Section -->
    <!-- Related News -->
<?php include('releated-news.php'); ?>
    <!-- Related News -->
<?php include('../bottom.php'); ?>
   