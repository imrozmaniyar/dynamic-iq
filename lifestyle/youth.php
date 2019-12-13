<?php include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold text-black" alt="Youth" title="Youth">طبقہ نوجواں</a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>lifestyle" alt="Lifestyle" title="Lifestyle">   طرزِ زندگی  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" alt="Home" title="Home"> تابتداء </a></li>
          </ol>
          </ol>
        </nav>
        <?php include('youth-one.php'); ?>        
      </div>  
    </section>
    <!-- first section -->
    <!-- article-news-listing Section -->
    <!-- article-news-listing Section -->
    <?php include('youth-two.php'); ?>
        <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <!-- <div class="horizontal-border mt-3"></div> -->
    <?php endif;?>  
    <!-- photo section -->
    <?php //include('lifestyle-photos.php'); ?>
    <!-- photo section -->
    <!-- article-news-listing Section -->
    <?php//include('women-three.php'); ?>
    <!-- article-news-listing Section -->
    <!-- Video section -->
    <?php //include('ent-videos.php'); ?>  
    <!-- Video section -->
    <!-- article-news-listing Section -->
     <?php //include('national-four.php'); ?>
<?php
$objenttFour = new db_article_master;
$strWhere = "category_id=18 and sub_category_id=25 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$enttFour    = $objenttFour->selectAll($strWhere, 10, 3);
?>    
<section class="mt-3">
  <div class="container clearfix" id="load_data_table">
    <h2 class="article-news-listing-title" alt="Youth" title="Youth">  طبقہ نوجواں  </h2>
<?php
  if ($enttFour[0] > 0):
    $i = 1;
    while ($objenttFours = mysql_fetch_object($enttFour[1])):
    $ahp          = $objenttFours->article_homepage_headline;
    $ahps         = $objenttFours->article_short_description;
    $aID          = $objenttFours->article_id;          
    $apu          = $objenttFours->article_page_url;
    $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
    $aImage       = $objenttFours->article_image1;          
    $aDate        = $objenttFours->article_date;         
    $time         = strtotime($aDate);
    $month        = date("M",$time);
    $year         = date("Y",$time);
    $day          = date("j",$time);    
    $aDate1       = $objenttFours->article_date1;         
    $da           = strtotime($aDate1);
    $month1       = date('F', $da);
    $year1        = date("Y",$da);
    $day1         = date("d",$da);          
    $aTime        = $objenttFours->article_time;
    $aTime           = date("g:i a", strtotime($aTime)); 
   $i=$i+1;  
 ?>    
      <div class="row mt-3">
        <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
          <h3><a href="<?php echo $domain?>lifestyle/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></a></h3>
          <p><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>  
          <?php if($aDate1==''):?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <?php else:?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>            
        <?php endif;?>
          
        </div>
        <div class="col-md-3 order-0 order-md-1"><a href="<?php echo $domain?>lifestyle/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center news-business-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>"></div></a></div>
      </div>
<?php
  endwhile;
endif;
?>      
      <?php if ($enttFour[0] != 3) { ?><div id="remove_row"><div class="mt-5 mb-5"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div></div><?php } ?>   
</section>


    <!-- article-news-listing Section -->
    <?php include('../bottom.php'); ?>
 <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> -->
<script>  
$(document).ready(function(){  
    $(document).on('click', '#btn_more', function(){  
        var last_blog_id = $(this).data("bid");  
        //alert(last_blog_id);
          if (last_blog_id != 'end') { 
            $('#btn_more').html("Loading..."); 
            $.ajax({  
              url:"youth-paging.php",  
              method:"POST",  
              data:{last_blog_id:last_blog_id},  
              dataType:"text",  
              success:function(data)  
                {  
                  if(data != '')  
                    {  
                      $('#remove_row').remove();  
                      $('#load_data_table').append(data);  
                    }  else  {  
                      $('#btn_more').html("No Data");  
                    }  
                }  
            }); 
          } 
            return false;
        });  
    });  
</script>
