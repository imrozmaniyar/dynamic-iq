 <!-- Poetry Section -->
    <section class="mt-3">
      <div class="container clearfix">
        <div class="poetry-bg p-3">
          <?php
        if ($poetryhome[0] > 0):
        $i = 1;
          while ($objpoetryhomes = mysql_fetch_object($poetryhome[1])):
          $title           = $objpoetryhomes->poetry_master_title;
          $pimage             = $objpoetryhomes->poetry_master_image2;
          $pdesc             = str_replace('</p>','',$objpoetryhomes->poetry_master_desc);
          $pdesc2             = str_replace('<p style="text-align: right;">','',$pdesc);
          //$pdesc2             = str_replace('&nbsp;',' ',$pdesc1);
        $i=$i+1;          
          ?>
          <div class="row">
            <div class="col-md-4">
               <?php $isMobile = (bool) strpos($_SERVER['HTTP_USER_AGENT'],'Mobile'); if ($isMobile) :?>
              <img src="images/poetry_pen_mobile.png" class="img-fluid mx-auto d-block" alt=""> 
              <?php else:?>
              <img src="images/poetry_pen.png" class="img-fluid mx-auto d-block" alt="">
            <?php endif;?>
            </div>
            <div class="col-md-2 mt-xs-2">
              <img src="<?php echo htmlspecialchars($pimage,ENT_QUOTES, 'UTF-8')?>" class="img-fluid mx-auto d-block mt-2 rounded-circle" alt="<?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?>" title="<?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?>">
              <p class="text-center text-white font-weight-bold mt-3"><?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></p>
            </div>
            <div class="col-md-6">
              <p class="text-white font-weight-bold mt-2 text-center"><font color="White"><b><?php echo $pdesc2?></b></font></p>
            </div>
          </div> 
          <?php
            endwhile;
          endif;  
          ?> 
        </div>
      </div>
    </section>      
    <!-- Poetry Section -->