<?php
session_start();
include_once "secure.php";
include_once("configure.php");
include(DIR_WS_CLASS_SITE."db_registration_master.php");
$rrname = mysql_escape_mimic($_GET["rrname"], $link);
$generated = substr(md5(rand()),0,20);
$fg_id     = mysql_escape_mimic($generated, $link);
$name      = mysql_escape_mimic($_GET["name"], $link);
$email     = mysql_escape_mimic($_GET["email"], $link);
$rdate     = date('Y-m-d h:i:s');
$from_flag = 'G';
$active    = 'Y';
$objregistration = new db_registration_master();

$checkExist = $objregistration->selectAll("user_email='" . $email . "'and user_flag='" . $from_flag . "'");
if ($checkExist[0] > 0):
        $objId = mysql_fetch_object($checkExist[1]);
		$_SESSION['Suserid']      = $objId->user_id; 
		$_SESSION['fullname']     = $objId->user_name . chr(32);
		$_SESSION['Sflag']        = $objId->user_flag;		
?>
		<script language="javascript">
			alert("You are logged in now to your account.");
			window.location="<?php echo $rrname?>";
		</script>		
<?php
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
?>

		<script language="javascript">
			alert("You are logged in now to your account.");
			window.location="<?php echo $rrname?>";
		</script>	
			
<?php	endif;?>