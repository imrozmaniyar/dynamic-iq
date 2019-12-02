<?php
session_start();
include("secure.php");
include("../configure.php");
include_once(DIR_WS_CLASS . "database.php");
include(DIR_WS_CLASS."db_category_master.php");
if(isset($_GET['mode'])){
	$mode =$_GET['mode'];
}elseif(isset($_POST['mode'])){
	$mode =$_POST['mode'];
}
$objDB  = new database;
$link   = $objDB->db_connect();
$cid    = intval($_POST['txtCID']);
$uname  = mysql_real_escape_string($_POST['txtuname'], $link);
$cname  = mysql_real_escape_string($_POST['txtname'], $link);
$ctitle = mysql_real_escape_string($_POST['txttitle'], $link);
$cdesc  = mysql_real_escape_string($_POST['txtdesc'], $link);
$ckeys  = mysql_real_escape_string($_POST['txtkeys'], $link);
$cdate  = date('Y-m-d H:i:s');
$mdate  = date('Y-m-d H:i:s');
$aname  = mysql_real_escape_string($_POST['txtadminname'], $link);
$aname1  = mysql_real_escape_string($_POST['txtadminname1'], $link);
$olddate = mysql_real_escape_string($_POST['txtolddate'], $link);
$oldadmin= mysql_real_escape_string($_POST['txtoldadmin'], $link);
$chkactive = mysql_real_escape_string($_POST['cbostatus'], $link);
$objcat = new db_category_master();
switch($mode):
    case "New":
	//$checkExist = $objcat->selectAll("catgory_master_name='" . $cname . "");
	$checkExist = $objcat->selectAll("category_master_name ='" . $cname ."'");
	if ($checkExist[0] > 0):
		header("Location:category-list.php?msgid=124");
	    exit();
	else:
			$objcat->set_category_master_name_urdu($uname);
	        $objcat->set_category_master_name($cname);
			$objcat->set_category_master_meta_title($ctitle);
			$objcat->set_category_master_meta_desc($cdesc);
			$objcat->set_category_master_meta_keywords($ckeys);
            $objcat->set_category_master_date($cdate);
            $objcat->set_category_master_date1($cdate);
            $objcat->set_admin_name($aname);
            $objcat->set_admin_name1('');
	        $objcat->set_active($chkactive);
	    if($objcat->save()):
				$msgid = 101;
	    endif;
	endif;
    break;
    case "Edit":
        $objcat->set_category_master_id($cid);
		$objcat->set_category_master_name_urdu($uname);
        $objcat->set_category_master_name($cname);
		$objcat->set_category_master_meta_title($ctitle);
		$objcat->set_category_master_meta_desc($cdesc);
		$objcat->set_category_master_meta_keywords($ckeys);
        $objcat->set_category_master_date($olddate);
        $objcat->set_category_master_date1($mdate);
        $objcat->set_admin_name($oldadmin);   
        $objcat->set_admin_name1($aname1);   
        $objcat->set_active($chkactive);
        if($objcat->save()):
            $msgid = 101;
        endif;
    break;
    case "Delete":
    	$Ctrls = $_POST['txtCtrls'];
        for($i=1;$i<=$Ctrls;$i++){
        $Ctrl = "chk$i";
            if($_POST[$Ctrl]):
                $objcat->set_category_master_id($_POST[$Ctrl]);
                    if($objcat->delete()):
                        $msgid = 101;
                    endif;
            endif;
        }
    break;
endswitch;
header("Location:category-list.php?msgid=$msgid");
exit();
