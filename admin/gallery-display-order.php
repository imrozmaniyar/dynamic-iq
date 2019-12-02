<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(6, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_gallery_master.php");
$gid = intval($_GET['gid']);
$objh = new db_gallery_master($gid);
$title = $objh->Get_gallery_name();
$gdate = $objh->Get_gallery_date();
$time          = strtotime($gdate);
$month         = date("M",$time);
$year          = date("Y",$time);

?>
<style>
    .gridP{
    padding: 20px;
    /*background: #dfdfdf;*/
    margin-right: 10px;
    
    list-style-position:inside;
    border: 1px solid black;

}
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Gallery Child Images for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <!-- <li><span>Gallery Child Images for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></span></li> -->
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-4">
          <section class="panel">


<ul class="list-unstyled list-inline" id="page_list" style="border: 1px solid black; padding-top: 20px; padding-left: 50px; padding-bottom: 20px; min-width: 500px;">
   <?php 
   $query = "SELECT * FROM gallery_child WHERE gallery_id=$gid ORDER BY position ASC";
   $result = mysqli_query($con, $query);
   while($row = mysqli_fetch_array($result))
   {
    ?>

    <!-- <li id='<?php echo $row["gallery_child_id"]?>' class='gridP'><?php echo $row["category_master_name"]?></li> -->
	    <li id='<?php echo $row["gallery_child_id"]?>' class='gridP' style="border: 0px solid black; padding-top: 20px; padding-left: 10px; padding-bottom: 20px; "><img src="<?php echo htmlspecialchars($row["gallery_child_image"],ENT_QUOTES, 'UTF-8');?>" border="0" width="100" height=""><br>Position (<?php echo $row["position"]?>)</li>
   <?php
   }

   ?>
   </ul>

   <input type="hidden" name="page_order_list" id="page_order_list" />
	

            </section>
	<a href="<?php echo $domain?>admin/gallery-child-list.php?gid=<?php echo htmlspecialchars($gid,ENT_QUOTES, 'UTF-8');?>" class="btn btn-default" id="myButton">Cancel</a>            
        </div>
    </div>
    <!-- end: page -->
</section>
</div>
<?php include("right.php");?>
<?php include("bottom.php");?>
<script>
$(document).ready(function(){
 $( "#page_list" ).sortable({
  placeholder : "ui-state-highlight",
  update  : function(event, ui)
  {
   var page_id_array = new Array();
   $('#page_list li').each(function(){
    page_id_array.push($(this).attr("id"));
   });
   $.ajax({
    url:"update-position.php",
    method:"POST",
    data:{page_id_array:page_id_array},
    success:function(data)
    {
     alert(data);
    }
   });
  }
 });

});
</script>