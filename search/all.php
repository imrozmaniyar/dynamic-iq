<?php include('../top.php');
$url=basename(mysql_escape_mimic($_SERVER['REQUEST_URI']));
$explodeResultArray = end(explode("-", $url)); 
$id = intval($explodeResultArray);
echo $id; 
?>
<?php include('../bottom.php');?>