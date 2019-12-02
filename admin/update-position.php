<?php
//update.php
$connect = mysqli_connect("192.168.1.17", "vmrc_dbuser", "D6Rz4axBzQ4Ny7SK!", "iq");
//$page_id = $_POST["page_id_array"];
for($i=0; $i<count($_POST["page_id_array"]); $i++)
{
 $query = "
 UPDATE gallery_child  SET position = '".$i."'  WHERE gallery_child_id = '".$_POST["page_id_array"][$i]."'";
 mysqli_query($connect, $query);
}
echo 'Page Order has been updated'; 

?>