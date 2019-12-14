<?php 
include('../top.php'); ?>
    <!-- first section -->
    <section>
      <div class="container clearfix">
        <nav aria-label="breadcrumb" class="clearfix">
          <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
            <li class="breadcrumb-item font-weight-bold text-black" alt="Features" title="Features"> فیچرس  </a></li>
            <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" alt="Home" title="Home">  ابتداء  </a></li>
          </ol>
        </nav>
        <div class="border p-3 mt-3">
        <?php include('featuresp1.php'); ?>
        <?php include('featuresp.php'); ?>
        </div>  
      </div>  
    </section>
    <!-- first section -->

    <!-- Women  Section -->
    <?php include('featureso.php'); ?>
    <!-- Women  Section -->
    <!-- Women  Section -->
    <?php include('featuresc.php'); ?>
    <!-- Women  Section -->
    <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile):?>
    <div class="container clearfix"><div style="margin-top: 10px; margin-right: 19px;"><div id="iq_pagepushVM"></div></div></div>
  <!--   <div class="horizontal-border mt-3"></div> -->
    <?php endif;?>  
    <!-- Happening  Section -->
    <?php include('featuresjumma.php'); ?>
    <!-- Happening News Section -->
    <!-- photo section -->
    <?php include('featuressunday.php'); ?>
    <!-- photo section -->
    <!-- Youth News Section -->
   <?php include('featureslit.php'); ?>      
    <!-- Youth News Section -->

    <!-- Video section -->
   <?php //include('ent-videos.php'); ?>      
    <!-- Video section -->
<?php include('../bottom.php'); ?>