<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(3, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."db_sub_category_master.php");
include(DIR_WS_CLASS."messages.php");
$msgId ="";
$obj = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet = $obj->selectAll($strWhere,$cur,$max);
// ** object for messages **
$msgId  = intval($_GET['msgid']);
$objMsg = new message ($msgId);
?>
<style>
    .gridP{
    padding: 20px;
    background: #dfdfdf;
    margin-right: 10px;
}
</style>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Category List</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <li><span>Category List</span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
          <section class="panel">


<ul class="list-unstyled list-inline" id="page_list">
   <?php 
   $query = "SELECT * FROM category_master ORDER BY position ASC";
   $result = mysqli_query($con, $query);
   while($row = mysqli_fetch_array($result))
   {
    ?>
    <li id='<?php echo $row["category_master_id"]?>' class='gridP'><?php echo $row["category_master_name"]?></li>
   <?php
   }

   ?>
   </ul>
   <input type="hidden" name="page_order_list" id="page_order_list" />


            </section>
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
    url:"update.php",
    method:"POST",
    data:{page_id_array:page_id_array},
    success:function(data)
    {
     //alert(data);
    }
   });
  }
 });

});
</script>