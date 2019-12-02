  <?php include('../top.php'); ?>
<section>
  <div class="container clearfix">
    <nav aria-label="breadcrumb" class="clearfix">
      <ol class="breadcrumb float-right mb-0 pb-0 news-breadcrumb">
        <li class="breadcrumb-item font-weight-bold"><a href="#">مخبریں  </a></li>
        <li class="breadcrumb-item active font-weight-bold" aria-current="page"><a href="<?php echo $domain?>" class="text-black">گھر</a></li>
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
  