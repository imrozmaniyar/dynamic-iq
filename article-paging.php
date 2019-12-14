<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once("configure.php");
include_once("class/database.php");
include_once("class/db_article_master.php");
include_once("class/db_category_master.php");
$last_blog_id = $_POST['last_blog_id'];
$last_blog_key = $_POST['last_blog_key'];
//echo $last_blog_id;
//echo $last_blog_key;
if (isset($last_blog_id) && is_numeric($last_blog_id)) {
$last_blog_id = $_POST['last_blog_id'];
$last_blog_key = $_POST['last_blog_key'];
$objafPaging  = new db_article_master;
$strWhere1 = "article_page_url REGEXP ('($last_blog_key)') or article_keywords REGEXP('($last_blog_key)') or article_tags REGEXP('($last_blog_key)')";
$afPaging     = $objafPaging->selectAll($strWhere1, 5, 4);
//echo $strWhere1;
?>
        <?php            
         if ($afPaging[0] > 0):
                $i = 0;
                  while ($objafPagings  = mysql_fetch_object($afPaging[1])):
                    $aidAF                       = $objafPagings->article_id;  
                  $article_homepage_headlineAF = $objafPagings->article_homepage_headline;
                  $article_short_descriptionAF = $objafPagings->article_short_description;
                  $article_image1AF            = $objafPagings->article_image;
                  $article_page_urlAF          = str_replace($old_pattern1s, $new_pattern1s,$objafPagings->article_page_url);
              $aDate        = $objafPagings->article_date;         
              $time         = strtotime($aDate);
              $month        = date("M",$time);
              $year         = date("Y",$time);
              $day          = date("j",$time);  
              $aDate1       = $objafPagings->article_date1;         
              $da           = strtotime($aDate1);
              $month1       = date('F', $da);
              $year1        = date("Y",$da);
              $day1         = date("d",$da);
              $aTime        = $objafPagings->article_time;                 
                  $cidAF                   = $objafPagings->category_id;
                  $objcatPPF               = new db_category_master($cidAF);
                  $catnameAF                   = strtolower($objcatPPF->Get_category_master_name());
                  $urlAF                       = $catnameAF.'/articles/'.$article_page_urlAF.'-'.$aidAF; 
                   $last_blog_id = $aidAF;   

                   $last_blog_key = $last_blog_key;  
                $i=$i+1;  
        ?>


<div class="row mt-3">
  <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
    <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlAF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($article_homepage_headlineAF,ENT_QUOTES, 'UTF-8')?></a></h3>
    <p><?php echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
                  <?php if($aDate1==''):?>
                 <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php else:?>
                  <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php endif;?>  
    
  </div>
  <div class="col-md-3 order-0 order-md-1">
    <a href="<?php echo $domain?><?php echo htmlspecialchars($urlAF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($article_image1AF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
</div>
</div>
<?php
  endwhile;
endif;
?>

 <?php if ($afPaging[0] > 4) { ?><div id="remove_row"><div class="mt-5 mb-5"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aidAF; ?>" data-key="<?php echo $last_blog_key; ?> article" id="btn_more"></div>
 </div>
<?php }else{ ?>
<?php echo "<div class='mt-5 mb-5'><div id='remove_row' align='center' class='font-family-roboto'><font color='Red'><b>No More Data</b></font></div></div>" ?>
<?php } ?>   
<?php
}
?>