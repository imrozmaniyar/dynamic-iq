<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include_once("../configure.php");
include_once("../class/db_article_master.php");
$last_blog_id = $_POST['last_blog_id'];
if (isset($last_blog_id) && is_numeric($last_blog_id)) {
$last_blog_id = $_POST['last_blog_id'];
$objnationalPaginginter  = new db_article_master;
$strWhere1 = "article_id < $last_blog_id and category_id=14 and sub_category_id=12 and active='Y'";
$nationalPaginginter     = $objnationalPaginginter->selectAll($strWhere1, 0, 3);
?>

<?php
  if ($nationalPaginginter[0] > 0):
    $i = 1;
    while ($objnationalPaginginters = mysql_fetch_object($nationalPaginginter[1])):
    $ahp          = $objnationalPaginginters->article_homepage_headline;
    $ahps         = $objnationalPaginginters->article_short_description;
    $aID          = $objnationalPaginginters->article_id;          
    $apu          = $objnationalPaginginters->article_page_url;
    $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
    $aImage       = $objnationalPaginginters->article_image1;          
    $aDate        = $objnationalPaginginters->article_date;         
    $time         = strtotime($aDate);
    $month        = date("M",$time);
    $year         = date("Y",$time);
    $day          = date("j",$time);        
    $aDate1       = $objnationalPaginginters->article_date1;         
    $da           = strtotime($aDate1);
    $month1       = date('F', $da);
    $year1        = date("Y",$da);
    $day1         = date("d",$da);             

    $aTime        = $objnationalPaginginters->article_time;
    $last_blog_id = $blog_master_id;
   $i=$i+1;  
 ?>    
      <div class="row mt-3">
        <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
          <h3><a href="<?php echo $domain?>news/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></a></h3>
          <p><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>  
          <?php if($aDate1==''):?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <?php else:?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>            
        <?php endif;?>
        </div>
        <div class="col-md-3 order-0 order-md-1"><a href="<?php echo $domain?>news/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center news-business-img"></div></a></div>
      </div>
<?php
  endwhile;
endif;
?>

 <?php if ($nationalPaginginter[0] > 3) { ?><div class="mt-5 mb-5"><div id="remove_row"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div>
 </div>
<?php }else{ ?>
<?php echo "<div class='mt-5 mb-5'><div id='remove_row' align='center'><font color='Red'><b>No More Data</b></font></div></div>" ?>
<?php } ?>   
<?php
}
?>