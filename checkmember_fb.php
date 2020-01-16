<?php
session_start();
include_once "secure.php";
include_once("configure.php");
include(DIR_WS_CLASS_SITE."db_registration_master.php");
$fg_id     = intval($_POST["fbid"]);
//$fname     = mysql_escape_mimic($_GET["p_fname"], $link);
//$lname     = mysql_escape_mimic($_GET["p_lname"], $link);
//$name 	   = $fname.$lname;
$name 		= mysql_escape_mimic($_POST["en"], $link);
$email     = mysql_escape_mimic($_POST["em"], $link);
$rdate     = date('Y-m-d h:i:s');
$from_flag = 'F';
$active    = 'Y';
$objregistration = new db_registration_master();

$checkExist = $objregistration->selectAll("user_email='" . $email . "' and user_flag='" . $from_flag . "'");
if ($checkExist[0] > 0):
        $objId = mysql_fetch_object($checkExist[1]);
		$_SESSION['Suserid']      = $objId->user_id; 
		$_SESSION['fullname']     = $objId->user_name . chr(32);
		$_SESSION['Sflag']        = $objId->user_flag;		
		//header("Location: $domain");
		//exit();
	else:
		$objregistration->set_fg_id($fg_id);
		$objregistration->set_user_name($name);
		$objregistration->set_user_email($email);
		$objregistration->set_user_dor($rdate);
		$objregistration->set_user_flag($from_flag);
		$objregistration->set_active($active);
			if($objregistration->save()):
				$uid  = mysql_insert_id();
			endif;
			
		$_SESSION['Suserid']      = $uid; 
		$_SESSION['fullname']     = $name . chr(32);
		$_SESSION['Sflag']        = $objId->from_flag;	
		//header("Location: $domain");
		//exit();
endif; 
?>