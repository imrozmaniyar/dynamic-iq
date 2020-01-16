<?php 
include("top.php");
include_once("class/db_iq_cc_text.php");
$objaboutus = new db_iq_cc_text;
$strWhere = "";
$aboutustext = $objaboutus->selectAll($strWhere, 0, 1);
?>
    <section>
      <div class="container">
        <div class="about-nav-pills mt-4">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-left font-family-roboto">
             <!--  <h4 class="mt-4 mb-4 font-weight-bold">ہمارے بارے میں</h4> -->
            <?php  
              if ($aboutustext[0] > 0):
              $j = 0;
              while ($aboutus = mysql_fetch_object($aboutustext[1])):
              $Atext   = $aboutus->iq_aboutus_text;
              $j = $j + 1;
            ?>
              <p class="text-dark mb-3" >
                <?php echo $Atext ?>
              </p>
            <?php
                endwhile;
            endif;    
            ?>  
            </div>
          </div>
        </div>  
      </div>
    </section>
<?php include("bottom.php");?>