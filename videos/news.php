<?php include('../top.php'); ?>
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" alt="News" title="News"> خبریں </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>videos" class="text-black" alt="Videos" title="Videos">  ویڈیوز </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" alt="Home" title="Home">  ابتداء  </a></li>
          </ol>
          </ol>
        </nav>
        <?php include('vnews-one.php'); ?>
      </div>  
    </section>
    <!-- first section -->

    <!-- Entertainment Photos Section -->
    <?php include('vnews-two.php'); ?>
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <div class="horizontal-border mt-3"></div>
    <?php endif;?>
    <!-- Entertainment Photos Section -->

    <!-- photo section -->
   <?php include('vnews-photos.php'); ?>
    <!-- photo section -->
    <!-- Entertainment Photos Section -->
<?php
$objentvFour = new db_video_master;
$strWhere = "category_id=14 and video_date1 <='$shedate' and video_epoch<=$timestamp and active='Y'";
$entvFour    = $objentvFour->selectAll($strWhere, 10, 9);
?>     
    <section class="mt-3">
    	 <div class="container clearfix" id="load_data_table">
      <div class="container clearfix">
        <h2 class="article-news-listing-title" Alt="News" title="News"> خبریں  </h2>
  
        <div class="row mt-4">
		<?php

      if ($entvFour[0] > 0):
        $i = 1;
        while ($objentvFours = mysql_fetch_object($entvFour[1])):
        $ahp          = $objentvFours->video_name_home;
        $aID          = $objentvFours->video_id;          
        $apu          = $objentvFours->video_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentvFours->video_image;          
       $i=$i+1;  
        ?>        	
          <div class="col-md-4 order-2 order-md-0">
              <a href="<?php echo $domain?>news/videos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
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
      <?php if ($entvFour[0] != 9) { ?><div id="remove_row"><div class="mt-5 mb-5"><img src="<?php echo $domain?>images/load-more-btn.png" class="img-fluid d-block mx-auto align-self-center" data-bid="<?php echo $aID; ?>" id="btn_more"></div></div><?php } ?>   

      </div>  
  </div>
    </section>
    <!-- Entertainment Photos Section -->
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
              url:"vnews-paging.php",  
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
