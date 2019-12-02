<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold"><a href="#" class="">  طرز زندگی۔  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black">گھر   </a></li>
          </ol>
        </nav>
        <div class="border p-3 mt-3">
        <?php include('lifestylep1.php'); ?>
        <?php include('lifestylep.php'); ?>
        </div>  
      </div>  
    </section>
    <!-- first section -->

    <!-- Women  Section -->
    <?php include('lifestyle-women.php'); ?>
    <!-- Women  Section -->
    <!-- Happening  Section -->
    <?php include('lifestyle-happening.php'); ?>
    <!-- Happening News Section -->
    <!-- photo section -->
    <?php include('lifestyle-photos.php'); ?>
    <!-- photo section -->
    <!-- Youth News Section -->
   <?php include('lifestyle-youth.php'); ?>  
    <!-- Youth News Section -->
    <!-- Youth News Section -->
   <?php include('lifestyle-tech.php'); ?>  
    <!-- Youth News Section -->
 <!-- Youth News Section -->
   <?php include('lifestyle-auto.php'); ?>  
    <!-- Youth News Section -->

    <!-- Video section -->
   <?php //include('ent-videos.php'); ?>      
    <!-- Video section -->
<?php include('../bottom.php'); ?>