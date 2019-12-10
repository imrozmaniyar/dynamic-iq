<?php include('../top.php'); ?>
<section>
  <div class="container clearfix">
    <nav aria-label="breadcrumb" class="clearfix">
      <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="#" alt="Sports" title="Sports"> کھیل کود </a></li>
        <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" alt="Home" title="Home"> ابتداء </a></li>
      </ol>
    </nav>
    <div class="border p-3 mt-3">
      <?php include('sportsp1.php'); ?>
      <?php include('sportsp.php'); ?>
    </div>  
  </div>  
</section>
<!-- first section -->
<!-- National News Section -->
<?php include('sports-cricket.php'); ?>
<!-- National News Section -->
<!-- photo section -->
<?php include('sports-photos.php'); ?>
<!-- photo section -->
<!-- Business News Section -->
<?php include('others.php'); ?>
    <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <div class="horizontal-border mt-3"></div>
    <?php endif;?>
<!-- Business News Section -->
<!-- Video section -->
<?php include('sports-videos.php'); ?>
<!-- Video section -->
<?php include('../bottom.php'); ?>
  