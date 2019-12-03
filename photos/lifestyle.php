<?php 
include('../top.php'); ?>
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#"> کھیل  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>photos" class="text-black">  ویڈیوز </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black"> گھر</a></li>
          </ol>
          </ol>
        </nav>
        <?php include('plifestyle-one.php'); ?>
      </div>  
    </section>
    <!-- first section -->

    <!-- Entertainment Photos Section -->
    <?php include('plifestyle-two.php'); ?>
    <!-- Entertainment Photos Section -->

    <!-- photo section -->
   <?php include('plifestyle-videos.php'); ?>
    <!-- photo section -->
    <!-- Entertainment Photos Section -->
<?php
$objentvFour = new db_gallery_master;
$strWhere = "category_id=18 and active='Y'";
$entvFour    = $objentvFour->selectAll($strWhere, 10, 9);
?>     
    <section class="mt-3">
    	 <div class="container clearfix" id="load_data_table">
        <h2 class="article-news-listing-title mb-0"><a href="#" class="article-news-listing-title"> کھیل  </a></h2>
  
        <div class="row">
		<?php

      if ($entvFour[0] > 0):
        $i = 1;
        while ($objentvFours = mysql_fetch_object($entvFour[1])):
        $ahp          = $objentvFours->gallery_name_home;
        $aID          = $objentvFours->gallery_id;          
        $apu          = $objentvFours->gallery_url;
        $apu1         = str_replace($old_pattern1s, $new_pattern1s, $apu);
        $aImage       = $objentvFours->gallery_image;          
       $i=$i+1;  
        ?>        	
          <div class="col-md-4 order-2 order-md-0 mt-4">
              <a href="<?php echo $domain?>lifestyle/photos/<?php echo htmlspecialchars($apu1,ENT_QUOTES, 'UTF-8')?>-<?php echo htmlspecialchars($aID,ENT_QUOTES, 'UTF-8')?>" class="home-href">
              <div class="card-shadow zoom">
                <img src="<?php echo htmlspecialchars($aImage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block photo-gallery-img" alt="">
                <i class="fa fa-camera photo-camera-icon-single-mobile-grid" aria-hidden="true"></i>
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
    </section>
    <!-- Entertainment Photos Section -->
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
              url:"plifestyle-paging.php",  
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
