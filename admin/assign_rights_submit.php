<?php
session_start();
include("secure.php");
include("../configure.php");
include_once(DIR_WS_CLASS . "database.php");
include(DIR_WS_CLASS."db_admin_role_rights.php");
if(isset($_GET['mode'])):
    $mode =$_GET['mode'];
 elseif(isset($_POST['mode'])):
    $mode =$_POST['mode'];
 endif;
$objDB = new database;
$link  = $objDB->db_connect();
$aid   = intval($_POST['txtaid']);
$assign = mysql_escape_mimic(($_POST['assign']));
$objcat = new db_admin_role_rights();
switch($mode):
    case "New":
        $sSqlkiss123 = "Delete from admin_role_rights where admin_id = ".$aid;
        $res123 = mysql_query($sSqlkiss123);
        foreach($assign as $assignVal){
            $objcat->Set_admin_id($aid);
            $objcat->Set_admin_menus_id (intval($assignVal));
            $objcat->Set_admin_role_rights_active('checked');
            if($objcat->save()):
                $msgid = 101;
            endif;
        }
    break;
    case "Update":
	$sSqlkiss123 = "Delete from admin_role_rights where admin_id = ".$aid." and admin_role_rights_active = 'checked' ";
	$res123 = mysql_query($sSqlkiss123);
  $msgid = 101;
    break;
endswitch;
$location = "assign_rights.php?id=$aid&msgid=$msgid";

header("Location: $location");
exit();
