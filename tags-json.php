<?php 
include("configure.php");
include("class/db_tag_master.php");
$keyword = $_GET['term'];
$obj = new db_tag_master;
$strWhere="active='Y'";
$internet = $obj->selectAll($strWhere,null,null);
$obj_item                              = new db_tag_master;
$strWhere                              = "active='Y' and tag_name LIKE '%$keyword%'";
$rss_item                              = $obj_item->selectAll($strWhere, null , null);
$file_ext                              = "json";
$file_name                             = $name.".".$file_ext;
$response                              = array();
//$tags                                  = array();
while($row2                            = mysql_fetch_object($rss_item[1])) { 
  $tag_name                            = $row2->tag_name;
    
  $tags[]                   =  $tag_name;
  } 
  $response             = $tags;
  echo json_encode($response);
exit();
?> 