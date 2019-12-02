<?php
include_once("../configure.php");
include_once(DIR_WS_CLASS."db_sub_category_master.php");
$categoryId = intval($_POST['categoryId']);
?>
<option value=''>Select Sub Category</option>
 <?php
    $objSgener = new db_sub_category_master;
    $strWhere = "category_master_id=$categoryId and active='Y'";
    $Sgener = $objSgener->selectAll($strWhere,null,null);
    while($fetch_Sgener = mysql_fetch_object($Sgener[1])):
?>

 	<option value=<?php echo $fetch_Sgener->sub_category_master_id;?><?php if($fetch_Sgener->sub_category_master_id==$sub_category_id){ echo 'selected';}?>><?php echo $fetch_Sgener->sub_category_master_name?></option>
<?php
	endwhile;
?>
