<?php
//ini_set('display_errors', 1); ini_set('display_startup_errors', 1); error_reporting(E_ALL);
include "../class/database.php";
$field = $_POST['field'];
$value = $_POST['value'];
$editid = $_POST['id'];
$query = "UPDATE users_sports_inner SET ".$field."='".$value."' WHERE id=".$editid;
mysqli_query($con,$query);

echo 1;
?>
