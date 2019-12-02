<?php
include_once("../configure.php");
include_once(DIR_WS_CLASS."db_sub_sub_category_master.php");
$categoryId = intval($_POST['categoryId']);
$SubcategoryId = intval($_POST['SubcategoryId']);
?>
<option value=''>Select Sub Sub Category</option>
 <?php
    $objSSgener = new db_sub_sub_category_master;
    $strWhere1 = "sub_category_master_id=$SubcategoryId and category_master_id=$categoryId and active='Y'";
    $SSgener = $objSSgener->selectAll($strWhere1,null,null);
    while($fetch_SSgener = mysql_fetch_object($SSgener[1])):
?>

 	<option value=<?php echo $fetch_SSgener->sub_sub_category_master_id;?><?php if($fetch_SSgener->sub_sub_category_master_id==$sub_sub_category_id){ echo 'selected';}?>><?php echo $fetch_SSgener->sub_sub_category_master_name?></option>
<?php
	endwhile;
?>
