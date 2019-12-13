<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold text-black" class="" alt="Entertainment" title="Entertainment">  تفریحات    </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" alt="Home" Title="Home">   ابتداء  </a></li>
          </ol>
        </nav>
        <div class="border p-3 mt-3">
        <?php include('entertainmentp1.php'); ?>
        <?php include('entertainmentp.php'); ?>
        </div>  
      </div>  
    </section>
    <!-- first section -->

    <!-- Women  Section -->
    <?php include('ent-film.php'); ?>
    <!-- Women  Section -->
    <!-- Happening  Section -->
    <?php //include('ent-tv.php'); ?>
        <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
    <!-- <div class="horizontal-border mt-3"></div> -->
    <?php endif;?>
    <!-- Happening News Section -->
    <!-- photo section -->
    <?php include('ent-photos.php'); ?>
    <!-- photo section -->

    <!-- Youth News Section -->
   <?php //include('ent-theatre.php'); ?>      
    <!-- Youth News Section -->

    <!-- Video section -->
   <?php //include('ent-videos.php'); ?>      
    <!-- Video section -->
<?php include('../bottom.php'); ?>