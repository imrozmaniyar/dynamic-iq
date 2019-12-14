<?php
//$epoch = 1577761200;
//$dt = new DateTime("@$epoch");  // convert UNIX timestamp to PHP DateTime
//echo $dt->format('Y-m-d H:i:s'); // output = 2017-01-01 00:00:00


/*$epoch = 1577761200;
$dt = new DateTime("@$epoch");
echo $dt->format('Y-m-d H:i:s');*/

//echo date("Y-m-d H:i:s", substr("1575906833", 0, 10));

date_default_timezone_set('Asia/Kolkata');      
$date=date("Y/m/d h:i:sa");
echo $date;


?>