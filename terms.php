<?php 
//error_reporting(E_ALL);
//ini_set("display_errors", 1);
include("top.php");
include_once("class/db_iq_aboutus_text.php");
include_once("class/db_iq_pp_text.php");
include_once("class/db_iq_tc_text.php");
include_once("class/db_iq_contact_text.php");
$objaboutus = new db_iq_aboutus_text;
$strWhere = "";
$aboutustext = $objaboutus->selectAll($strWhere, 0, 1);
//for pp
$objpp = new db_iq_pp_text;
$strWhere = "";
$pp = $objpp->selectAll($strWhere, 0, 1);
//for TC
$objtc = new db_iq_tc_text;
$strWhere = "";
$tc = $objtc->selectAll($strWhere, 0, 1);
//for Contact
$objcontact = new db_iq_contact_text;
$strWhere = "";
$contact = $objcontact->selectAll($strWhere, 0, 1);

?>
    <section>
      <div class="container">
        <div class="about-nav-pills mt-4">
          <ul class="nav nav-pills mb-3 justify-content-end" id="pills-tab" role="tablist">
            <li class="nav-item mb-md-0 mb-2">
              <a class="nav-link" href="<?php echo $domain?>contact" >ہم سے رابطہ کریں</a>
            </li>
            <li class="nav-item mb-md-0 mb-2">
              <a class="nav-link active" href="<?php echo $domain?>terms">شرائط و ضوابط</a>
            </li>
            <li class="nav-item mb-md-0 mb-2">
              <a class="nav-link" href="<?php echo $domain?>privacy-policy">رازداری کی پالیسی</a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-md-0 mb-2"  href="<?php echo $domain?>aboutus" >ہمارے بارے میں</a>
            </li>
          </ul>
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active text-left font-family-roboto">
             <!--  <h4 class="mt-4 mb-4 font-weight-bold">ہمارے بارے میں</h4> -->
            <?php  
              if ($tc[0] > 0):
              $j = 0;
              while ($tcss = mysql_fetch_object($tc[1])):
              $Atext   = $tcss->iq_aboutus_text;
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