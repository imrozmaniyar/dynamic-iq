<?php
include('../connection.php');
$post_order = isset($_POST["post_order_ids"]) ? $_POST["post_order_ids"] : [];
if(count($post_order)>0){
	for($order_no= 0; $order_no < count($post_order); $order_no++)
	{
	 $query = "UPDATE category_master SET position = '".($order_no+1)."' WHERE position = '".$post_order[$order_no]."'";
	 mysql_query($query);

	}
	echo true; 
}else{
	echo false; 
}

?>