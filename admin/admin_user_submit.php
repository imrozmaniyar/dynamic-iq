<?php
session_start();
include("secure.php");
include("../configure.php");
include_once(DIR_WS_CLASS . "database.php");
include(DIR_WS_CLASS."db_admin_parameters.php");
if(isset($_GET['mode'])){
	$mode =$_GET['mode'];
}elseif(isset($_POST['mode'])){
	$mode =$_POST['mode'];
}
$objDB = new database;
$link  = $objDB->db_connect();
$aid   = intval($_POST['txtAID']);
$aname1 = mysql_real_escape_string($_POST['txtaname'], $link);
$aname  = mysql_real_escape_string($_POST['txtname'], $link);
$apass  = mysql_real_escape_string($_POST['txtpassword'], $link);
$aemail = mysql_real_escape_string($_POST['txtemail'], $link);
$atype = mysql_real_escape_string($_POST['cbocat'], $link);
$chkactive = mysql_real_escape_string($_POST['cbostatus'], $link);

$db_pass = $apass;
$objcat = new db_admin_parameters();
switch($mode):
    case "New":
	$checkExist = $objcat->selectAll("admin_email='" . $aemail . "' or admin_login='" . $aname . "'");
	if ($checkExist[0] > 0):
		header("Location:admin_users_list.php?msgid=106");
	    exit();
	else:
		 	$objcat->set_admin_name($aname1);
	    $objcat->set_admin_login($aname);
	    $objcat->set_admin_password($db_pass);
	    $objcat->set_admin_email($aemail);
			$objcat->set_admin_role($atype);
	    $objcat->set_active($chkactive);
	    if($objcat->save()):
		$msgid = 101;
	    endif;
	endif;
    break;
    case "Edit":
        $objcat->set_admin_id($aid);
				$objcat->set_admin_name($aname1);
        $objcat->set_admin_login($aname);
        $objcat->set_admin_password($db_pass);
        $objcat->set_admin_email($aemail);
				$objcat->set_admin_role($atype);
        $objcat->set_active($chkactive);
        if($objcat->saveProfile()):
            $msgid = 101;
        endif;
    break;
    case "Delete":
    	$Ctrls = $_POST['txtCtrls'];
        for($i=1;$i<=$Ctrls;$i++){
        $Ctrl = "chk$i";
            if($_POST[$Ctrl]):
                $objcat->set_admin_id($_POST[$Ctrl]);
                    if($objcat->delete()):
                        $msgid = 101;
                    endif;
            endif;
        }
    break;
endswitch;
header("Location:admin_users_list.php?msgid=$msgid");
exit();
