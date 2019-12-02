<?php include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#">  نیئے ستارے۔  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>children" class="text-black"> بچے / طلباء۔  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black"> گھر</a></li>
          </ol>
          </ol>
        </nav>
        <?php include('naye-sitare-one.php'); ?>        
      </div>  
    </section>
    <!-- first section -->
    <!-- article-news-listing Section -->
    <!-- article-news-listing Section -->
    <?php// include('opinion-two.php'); ?>
    <!-- photo section -->
    <?php //include('ent-photos.php'); ?>
    <!-- photo section -->
    <!-- article-news-listing Section -->
    <?php// include('film-three.php'); ?>
    <!-- article-news-listing Section -->
    <!-- Video section -->
    <?php //include('ent-videos.php'); ?>  
    <!-- Video section -->
    <!-- article-news-listing Section -->
     <?php //include('national-four.php'); ?>
<?php
$objentfFour = new db_article_master;
$strWhere = "category_id=19 and sub_category_id=28 and active='Y'";
$entfFour    = $objentfFour->selectAll($strWhere, 7, 3);
?>    
<section class="mt-3">
  <div class="container clearfix" id="load_data_table">
    <h2 class="article-news-listing-title">  نیئے ستارے۔  </h2>
<?php
  if ($entfFour[0] > 0):
    $i = 1;
    while ($objentfFours = mysql_fetch_object($entfFour[1])):
    $ahp          = $objentfFours->article_homepage_headline;
    $ahps         = $objentfFours->article_short_description;
    $aID          = $objentfFours->article_id;          
    $apu          = $objentfFours->article_page_url;
    $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
    $aImage       = $objentfFours->article_image1;          
    $aDate        = $objentfFours->article_date;         
    $time         = strtotime($aDate);
    $month        = date("M",$time);
    $year         = date("Y",$time);
    $day          = date("j",$time); 
    $aDate1       = $objentfFours->article_date1;         
    $da           = strtotime($aDate1);
    $month1       = date('F', $da);
    $year1        = date("Y",$da);
    $day1         = date("d",$da);             
    $aTime        = $objentfFours->article_time;
   $i=$i+1;  
 ?>    
      <div class="row mt-3">
        <div class="col-md-9 order-1 order-md-0  mt-3 mt-md-0">
          <h3><a href="<?php echo $domain?>students/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="article-news-listing-sub-title"><?php echo htmlspecialchars($ahp,ENT_QUOTES, 'UTF-8')?></a></h3>
          <p><?php echo htmlspecialchars($ahps,ENT_QUOTES, 'UTF-8')?></p>  
          <?php if($aDate1==''):?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <?php else:?>
          <p class="news-details-author mt-3 font-weight-normal"><?php echo htmlspecialchars($month1,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year1,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($aTime,ENT_QUOTES, 'UTF-8')?> IST</p>            
        <?php endif;?>
          
        </div>
        <div class="col-md-3 order-0 order-md-1"><a href="<?php echo $domain?>students/articles/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>"><div class="bg-grey-mobile"><img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="media-object img-fluid d-block mx-auto align-self-center"></div></a></div>
      </div>
<?php
  endwhile;
endif;
?>      
      <!--div class="mt-5 mb-5">
        <a href="#">
          <img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center">
        </a>
      </div-->  

      <?php if ($entfFour[0] != 3) { ?><div class="mt-5 mb-5"><div id="remove_row"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div></div><?php } ?>   
</section>


    <!-- article-news-listing Section -->
    <?php include('../bottom.php'); ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<script>  
$(document).ready(function(){  
    $(document).on('click', '#btn_more', function(){  
        var last_blog_id = $(this).data("bid");  
        //alert(last_blog_id);
          if (last_blog_id != 'end') { 
            $('#btn_more').html("Loading..."); 
            $.ajax({  
              url:"naye-sitare-paging.php",  
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
