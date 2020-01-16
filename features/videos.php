<?php include('../top.php');
$url=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
$explodeResultArray = end(explode("-", $url)); 
$id = intval($explodeResultArray);
$objMainVideo      = new db_video_master($id);
$VideoHeadLine     = $objMainVideo->Get_video_name(); 
$VDate             = $objMainVideo->Get_video_date();         
$time              = strtotime($VDate);
$month             = date("M",$time);
$year              = date("Y",$time);
$day               = date("j",$time);
$VTime             = $objMainVideo->Get_video_time();
$VDesc             = $objMainVideo->Get_video_description();
$VUrl              = $objMainVideo->Get_video_youtube_id();
/*$aImage            = str_replace('../','',$objMainVideo->Get_article_image());
$aCaption          = $objMainVideo->Get_article_image_caption();
$aMainDesc         = $objMainVideo->Get_article_description();*/
?>
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#"> ویڈیوز </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>/news" class="text-black"> خبریں  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black"> گھر  </a></li>
          </ol>
        </nav>
        <div class="video-details-border p-3 mt-3">
          <h1 class="font-weight-bold text-black video-details-first-section-title"><?php echo htmlspecialchars($VideoHeadLine,ENT_QUOTES, 'UTF-8')?></h1>
          <p class="news-details-author font-weight-bold"> <?php echo htmlspecialchars($month,ENT_QUOTES, 'UTF-8')?> <?php echo  htmlspecialchars($day,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($year,ENT_QUOTES, 'UTF-8')?>, <?php echo  htmlspecialchars($VTime,ENT_QUOTES, 'UTF-8')?> IST</p>
          <div class="row mb-4">
            <div class="col-md-4 order-1 order-md-0">
              <ul class="list-inline">
                <li class="list-inline-item"><a href="https://www.facebook.com/sharer.php?u=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>" target="_blank"><img src="<?php echo $domain?>images/fb-icon.png" class="img-fluid mx-auto"></a></li>
                <li class="list-inline-item"><a href="https://twitter.com/share?url=<?php echo $domain?><?php echo htmlspecialchars($url,ENT_QUOTES, 'UTF-8')?>&amp;text=<?php echo htmlspecialchars($VideoHeadLine,ENT_QUOTES, 'UTF-8')?>!&amp;amp;via=The Inquilab&amp;amp;" target="_blank"><img src="<?php echo $domain?>images/tweet-icon.png" class="img-fluid mx-auto"></a></li>
                <li class="list-inline-item d-lg-none"><a href="#"><img src="<?php echo $domain?>images/whatsapp-icon.png" class="img-fluid mx-auto"></a></li>
              </ul>
              <style type="text/css">
                .list_container {
                  direction: rtl;
                  overflow:auto;
                  height: 265px;
                  width: 350px;
                  overflow-y:scroll;
                }
              </style>
              <div class="list_container">
                <p class="text-black"><?php echo $VDesc?></p>
              </div>
            </div>
            <div class="col-md-8 order-0 order-md-1"><iframe height="315" src="https://www.youtube.com/embed/<?php echo htmlspecialchars($VUrl,ENT_QUOTES, 'UTF-8')?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%"></iframe></div>
          </div>  
        </div>
        <div class="horizontal-border mt-4"></div> 
            <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <div class="horizontal-border mt-4"></div>
    <?php endif;?>
      </div>  
    </section>
    <!-- first section -->

    <!-- Entertainment Photos Section -->
    <section class="mt-3">
      <div class="container clearfix">
        <!-- <h2 class="article-news-listing-title"><a href="#" class="article-news-listing-title">کھیل  ویڈیوز</a></h2> -->
        <div class="row mt-4">
        <?php include('news-p-videos.php');?>
           <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
           <div class="horizontal-border mt-3"></div>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushA3"></div></div></div>
    
    <?php endif;?> 
        </div>
        <div class="horizontal-border mt-4"></div>
      </div>  
    </section>
    <!-- Entertainment Photos Section -->

    <!-- photo section -->
<?php include('news-photos.php');?>
    <!-- photo section -->
  <?php include('../bottom.php'); ?>  
  <?php if($uid==""):?>
    <script>
        var counter = 0;
        function showalert() {
            if (localStorage.clickcount > 2) {
                alert("Login to read more news");
                window.location="<?php echo $domain?>login";
            return;
            }else{
                clickCounter()
            }
            counter++;
        }
        function clickCounter() {
            if (typeof(Storage) !== "undefined") {
                if (localStorage.clickcount < 3) {
                    localStorage.clickcount = Number(localStorage.clickcount) + 1;
                } else {
                    localStorage.clickcount = 1;
                }
                // document.getElementById("result").innerHTML = "You have clicked the button " + localStorage.clickcount + " time(s).";
            } else {
                document.getElementById("result").innerHTML = "Sorry, your browser does not support web storage...";
            }
        }
        showalert();
    </script>
<?php endif;?> 