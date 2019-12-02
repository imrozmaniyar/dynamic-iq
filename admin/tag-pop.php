<?php
include_once("../configure.php");
$postDetails = array();
$search_key = $_GET['term'];

//get rows query
$query = "SELECT * FROM tag_master where tag_name like '%$search_key%'";
$result = mysqli_query($con, $query);
 
//number of rows
$rowCount = mysqli_num_rows($result);
 
if($rowCount > 0){
    while($row = mysqli_fetch_assoc($result)){
			$postDetails[] = ucfirst($row['tag_name']);
	}
}
echo json_encode($postDetails);
?>