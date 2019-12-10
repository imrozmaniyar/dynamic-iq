<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include('../top.php'); ?>
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" alt="Videos" Title="Videos">ویڈیوز</a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" alt="Home" Title="Home">گھر</a></li>
          </ol>
          </ol>
        </nav>
        <?php include('video-top-stories.php');?>
      </div>  
    </section>
    <!-- first section -->

    <?php include('video-enter.php');?>

    <!-- News Photos Section -->
     <?php include('videos-news.php');?>
     <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <div class="horizontal-border mt-3"></div>
    <?php endif;?>
    <!-- News Photos Section -->
    <!-- News Photos Section -->
     <?php include('videos-sports.php');?>
    <!-- News Photos Section -->
    <!-- photo section -->
    <?php include('video-photos.php');?>
    <!-- photo section -->
<?php include('../bottom.php'); ?>