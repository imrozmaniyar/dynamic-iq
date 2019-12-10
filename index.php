<?php include('top.php'); ?>
<?php include('home-top-stories.php'); ?>
<?php include('home-photo-gallery.php'); ?>
<?php include('home-video.php'); ?>
<?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
 <div class="container clearfix"><div style="margin-top: 5px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
 <?php endif;?>
 <div class="horizontal-border"></div>
<!-- News and other sections -->
<section class="mt-3">
  <div class="container clearfix">
    <div class="row p-3">
      <?php include('home-entertainment.php'); ?>
      <?php include('home-mumbai-news.php'); ?>
      <?php include('home-news.php'); ?>
    </div>
    <div class="horizontal-border mt-2 clearfix"></div>
  </div>
</section>    
<!-- News and other sections -->
<!-- Entertainment and sports section -->
<section class="mt-3">
  <div class="container clearfix">
    <div class="row p-3">
      <?php include('home-sports.php'); ?>
      <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
      <div class="container clearfix"><div style="margin-top: 5px; margin-right: 19px;"><div id="iq_pagepushSM"></div></div></div>
      <?php endif;?>
      <?php include('home-lifestyle.php'); ?>
    </div>
  </div>    
</section>
<!-- Entertainment and sports section -->
<?php include('home-editorial-pick.php'); ?>
<!-- Literature section -->
<section class="mt-3">
  <div class="container clearfix">
    <div class="row p-3">
      <?php include('home-literature.php')?>
      <?php include('home-juma-magazine.php')?>
      <?php include('home-sunday-magazine.php')?>
    </div>
    <div class="horizontal-border mt-2 clearfix"></div>
  </div>
</section>    
<!-- Literature section -->
<?php include('home-naye-sitare.php')?>
<?php include('home-taleemi-inquilab.php')?>
<?php include('home-poetry.php')?>
<?php include('bottom.php'); ?>