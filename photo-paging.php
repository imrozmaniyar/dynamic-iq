<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once("configure.php");
include_once("class/database.php");
include_once("class/db_gallery_master.php");
include_once("class/db_category_master.php");
$last_blog_id1 = $_POST['last_blog_id1'];
$last_blog_key1 = $_POST['last_blog_key1'];

if (isset($last_blog_id1) && is_numeric($last_blog_id1)) {
$last_blog_id1 = $_POST['last_blog_id1'];
$last_blog_key1 = $_POST['last_blog_key1'];
$objgfPaging  = new db_gallery_master;
$strWhere1 = "gallery_id < $last_blog_id1 and gallery_url REGEXP ('($last_blog_key1)') or gallery_keywords REGEXP('($last_blog_key1)') or gallery_tags REGEXP('($last_blog_key1)')";
$gfPaging     = $objgfPaging->selectAll($strWhere1, 5, 4);
//echo $strWhere1;
?>
        <?php            
         if ($gfPaging[0] > 0):
                $i = 0;
                  while ($objgfPagings  = mysql_fetch_object($gfPaging[1])):
                    $gidGF                       = $objgfPagings->gallery_id;  
                  $gallery_name_homeGF = $objgfPagings->gallery_name_home;
                  $gallery_image1GF            = $objgfPagings->gallery_image1;
                  $gallery_urlGF          = str_replace($old_pattern1s, $new_pattern1s,$objgfPagings->gallery_url);
              $aDate        = $objgfPagings->gallery_date;         
              $time         = strtotime($aDate);
              $month        = date("M",$time);
              $year         = date("Y",$time);
              $day          = date("j",$time);  
              $aDate1       = $objgfPagings->gallery_date1;         
              $da           = strtotime($aDate1);
              $month1       = date('F', $da);
              $year1        = date("Y",$da);
              $day1         = date("d",$da);
              $aTime        = $objgfPagings->gallery_time;                  
                  $cidGF                   = $objgfPagings->category_id;
                  $objcatGF              = new db_category_master($cidGF);
                  $catnameGF                   = strtolower($objcatGF->Get_category_master_name());
                  $urlGF                       = $catnameGF.'/photos/'.$gallery_urlGF.'-'.$gidGF;    
                   $last_blog_id1 = $blog_master_id1;          
                $i=$i+1;  
        ?>


<div class="row mt-3">
  <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
    <h3><a href="<?php echo $domain?><?php echo htmlspecialchars($urlGF,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($gallery_name_homeGF,ENT_QUOTES, 'UTF-8')?></a></h3>
    <p><?php //echo htmlspecialchars($article_short_descriptionAF,ENT_QUOTES, 'UTF-8')?></p>
                  <?php if($aDate1==''):?>
                 <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php else:?>
                  <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
                  <?php endif;?>  
    
  </div>
  <div class="col-md-3 order-0 order-md-1">
    <a href="<?php echo $domain?><?php echo htmlspecialchars($urlGF,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($gallery_image1GF,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a>
</div>
</div>
<?php
  endwhile;
endif;
?>

 <?php if ($gfPaging[0] > 4) { ?><div class="mt-5 mb-5"><div id="remove_row"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $gidGF; ?>" id="btn_more"></div>
 </div>
<?php }else{ ?>
<?php echo "<div class='mt-5 mb-5'><div id='remove_row' align='center'><font color='Red'><b>No More Data</b></font></div></div>" ?>
<?php } ?>   
<?php
}
?>