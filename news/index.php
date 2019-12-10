  <?php include('../top.php'); ?>
<section>
  <div class="container clearfix">
    <nav aria-label="breadcrumb" class="clearfix">
      <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="#" title="News" alt="News">  خبریں  </a></li>
        <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" title="Home" alt="Home">  ابتداء   </a></li>
      </ol>
    </nav>
    <div class="border p-3 mt-3">
      <?php include('newsp1.php'); ?>
      <?php include('newsp.php'); ?>
    </div>  
  </div>  
</section>
<!-- first section -->
<!-- National News Section -->
<?php include('news-national.php'); ?>
<!-- National News Section -->
<!-- International News Section -->
<?php include('news-international.php'); ?>
<?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
<div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
<?php endif;?>
<!-- International News Section -->
<!-- photo section -->
<?php include('news-photos.php'); ?>
<!-- photo section -->
<!-- Business News Section -->
<?php include('news-business.php'); ?>
<!-- Business News Section -->
<!-- Video section -->
<?php include('news-videos.php'); ?>
<!-- Video section -->
<?php include('../bottom.php'); ?>
  