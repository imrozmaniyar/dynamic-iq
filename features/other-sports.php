<?php include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" alt="Other Sports" Title="Other Sports"> دیگر</a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>sports" class="text-black" alt="Sports" Title="Sports"> کھیل کود  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" alt="Home" Title="Home"> ابتداء </a></li>
          </ol>
          </ol>
        </nav>
        <?php include('other-sports-one.php'); ?>        
      </div>  
    </section>
    <!-- first section -->
    <!-- article-news-listing Section -->
    <!-- article-news-listing Section -->
    <?php include('other-sports-two.php'); ?>
    <!-- photo section -->
    <?php include('sports-photos.php'); ?>
    <!-- photo section -->
    <!-- article-news-listing Section -->
    <?php include('other-sports-three.php'); ?>
    <!-- article-news-listing Section -->
    <!-- Video section -->
    <?php include('sports-videos.php'); ?>  
    <!-- Video section -->
    <!-- article-news-listing Section -->
     <?php //include('national-four.php'); ?>
<?php
$objcricketFour = new db_article_master;
$strWhere = "category_id=16 and sub_category_id=18 and article_date1 <='$shedate' and article_epoch<=$timestamp and active='Y'";
$cricketFour    = $objcricketFour->selectAll($strWhere, 13, 3);
?>    
<section class="mt-3">
  <div class="container clearfix" id="load_data_table">
    <h2 class="article-news-listing-title" Alt="Other Sports" Title="Other Sports"> دیگر  </h2>
<?php
  if ($cricketFour[0] > 0):
    $i = 1;
    while ($objcricketFours = mysql_fetch_object($cricketFour[1])):
    $ahp          = $objcricketFours->article_homepage_headline;
    $ahps         = $objcricketFours->article_short_description;
    $aID          = $objcricketFours->article_id;          
    $apu          = $objcricketFours->article_page_url;
    $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
    $aImage       = $objcricketFours->article_image1;          
    $aDate        = $objcricketFours->article_date;         
    $time         = strtotime($aDate);
    $month        = date("M",$time);
    $year         = date("Y",$time);
    $day          = date("j",$time); 
    $aDate1       = $objcricketFours->article_date1;         
    $da           = strtotime($aDate1);
    $month1       = date('F', $da);
    $year1        = date("Y",$da);
    $day1         = date("d",$da);             
    $aTime        = $objcricketFours->article_time;
    $aTime           = date("g:i a", strtotime($aTime));
   $i=$i+1;  
 ?>    
      <div class="row mt-3">
        <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
          <h3><a href="<?php echo $domain?>sports/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></a></h3>
          <p><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>  
          <?php if($aDate1==''):?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <?php else:?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>            
        <?php endif;?>
          
        </div>
        <div class="col-md-3 order-0 order-md-1"><a href="<?php echo $domain?>sports/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center news-business-img" alt="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?>"></div></a></div>
      </div>
<?php
  endwhile;
endif;
?>      
<?php if ($cricketFour[0] != 3) { ?><div id="remove_row"><div class="mt-5 mb-5"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div></div><?php } ?>   
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
              url:"other-sports-paging.php",  
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
