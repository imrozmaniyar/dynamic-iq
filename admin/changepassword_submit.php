<?php
session_start();
include_once("secure.php");
include_once("../configure.php");
include_once(DIR_WS_CLASS . "database.php");
include_once(DIR_WS_CLASS . "db_admin_parameters.php");
if ($_SESSION['security_code_used'] > 0)
{
    echo '<script language="javascript">'
        . 'alert("Security code has been expired!.");'
        . 'window.location = "changeprofile.php";'
        . '</script>';
    die();
}
if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))):
    $aid = intval($_SESSION['Auserid']);
    $opass = $_POST['txtoldpassword'];
    $npass = $_POST['txtnewpassword'];
    $db_password = $npass;
    $objregistration = new db_admin_parameters($aid);
    $old_pass = $objregistration->get_admin_password();
    if ($old_pass != $opass):
    $msgid = 116;
    header("Location:changeprofile.php?msgid=$msgid");
    exit();
    else:
        $objregistration->set_admin_id($aid);
        $objregistration->set_admin_password($db_password);
        if ($objregistration->changepassword()):
            $msgid = 117;
        endif;
        header("Location:changeprofile.php?msgid=$msgid");
        exit();
    endif;
else:
    $msgid = 125;
    header("Location:changeprofile.php?msgid=$msgid");
    exit();
endif;