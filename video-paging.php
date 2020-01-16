<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once("configure.php");
include_once("class/database.php");
include_once("class/db_video_master.php");
include_once("class/db_category_master.php");
$last_blog_id2 = $_POST['last_blog_id2'];
$last_blog_key2 = $_POST['last_blog_key2'];

if (isset($last_blog_id2) && is_numeric($last_blog_id2)) {
$last_blog_id2 = $_POST['last_blog_id2'];
$last_blog_key2 = $_POST['last_blog_key2'];
$objVfPaging  = new db_video_master;
$strWhere1 = "video_id < $last_blog_id2 and gallery_url REGEXP ('($last_blog_key2)') or gallery_keywords REGEXP('($last_blog_key2)') or gallery_tags REGEXP('($last_blog_key2)')";
$VfPaging     = $objVfPaging->selectAll($strWhere1, 5, 4);
//echo $strWhere1;
?>
<?php            
         if ($VfPaging[0] > 0):
                $i = 0;
                  while ($objVfPagings  = mysql_fetch_object($VfPaging[1])):
                    $vidVF                       = $objVfPagings->video_id;  
                  $video_name_homeVF = $objVfPagings->video_name_home;
                  $video_image1VF            = $objVfPagings->video_image1;
                  $video_urlVF          = str_replace($old_pattern1s, $new_pattern1s,$objVfPagings->video_url);
              $aDate        = $objVfPagings->video_date;         
              $time         = strtotime($aDate);
              $month        = date("M",$time);
              $year         = date("Y",$time);
              $day          = date("j",$time);  
              $aDate1       = $objVfPagings->video_date1;         
              $da           = strtotime($aDate1);
              $month1       = date('F', $da);
              $year1        = date("Y",$da);
              $day1         = date("d",$da);
              $aTime        = $objVfPagings->video_time;                 
                  $cidVF                   = $objVfPagings->category_id;
                  $objcatVF              = new db_category_master($cidVF);
                  $catnameVF                   = strtolower($objcatVF->Get_category_master_name());
                  $urlVF                       = $catnameGF.'/videos/'.$gallery_urlGF.'-'.$gidGF;           
                $i=$i+1;  
        ?>


<div class="row mt-3">
  <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
    <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlVF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($video_name_homeVF,ENT_QUOTES, 'UTF-8')?></a></h3>
    <p><?php //echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
                  <?php if($aDate1==''):?>
                 <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php else:?>
                  <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php endif;?>  
    
  </div>
  <div class="col-md-3 order-0 order-md-1">
    <a href="<?php echo $domain?><?php echo htmlspecialchars($urlVF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($video_image1VF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
</div>
</div>
<?php
  endwhile;
endif;
?>

 <?php if ($VfPaging[0] > 4) { ?><div class="mt-5 mb-5"><div id="remove_row"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $gidGF; ?>" id="btn_more"></div>
 </div>
<?php }else{ ?>
<?php echo "<div class='mt-5 mb-5'><div id='remove_row' align='center'><font color='Red'><b>No More Data</b></font></div></div>" ?>
<?php } ?>   
<?php
}
?>