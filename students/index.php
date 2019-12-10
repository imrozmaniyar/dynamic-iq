<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" class="" alt="Students" title="Students"> طلبہ  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black" alt="Home" title="Home"> تھئیٹر  </a></li>
          </ol>
        </nav>
        <div class="border p-3 mt-3">
        <?php include('childernp1.php'); ?>
        <?php include('childernp.php'); ?>
        </div>  
      </div>  
    </section>
    <!-- first section -->

    <!-- Women  Section -->
    <?php include('ns.php'); ?>
    <!-- Women  Section -->
    <!-- Happening  Section -->
    <?php include('ti.php'); ?>
    <!-- Happening News Section -->
    <!-- photo section -->
    <?php //include('featuressunday.php'); ?>
    <!-- photo section -->
    <!-- Youth News Section -->
   <?php //include('featureslit.php'); ?>      
    <!-- Youth News Section -->

    <!-- Video section -->
   <?php //include('ent-videos.php'); ?>      
    <!-- Video section -->
<?php include('../bottom.php'); ?>