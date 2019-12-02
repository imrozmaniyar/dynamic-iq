<?php 
require('../class/db_config.php');
$position = $_POST['position'];

$i=1;
foreach($position as $k=>$v){
    $sql = "Update users_news_inner SET position=".$i." WHERE id=".$v;
    $mysqli->query($sql);


	$i++;
}
?>