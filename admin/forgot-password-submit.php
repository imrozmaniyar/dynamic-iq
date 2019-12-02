<?php
session_start();
include_once("../configure.php");
include_once(DIR_WS_CLASS . "db_admin_parameters.php");
include_once(DIR_WS_CLASS . "db_token.php");
include_once 'RandomString.php';
    $obj   = new db_admin_parameters();
    $objDB = new database();
    $link  = $objDB->db_connect();

    $to = mysql_real_escape_string($_POST["email1"], $link);
	   $result = $obj->selectAll("admin_email='" . $to . "'");

    if ($result[0] > 0) {
        $random_str = new \Inquilab\Util\Random\RandomString\RandomString(10);
        $tokenObj   = new db_token();

        $token  = $random_str->get();
        $result = $tokenObj->insert($token, $to);

        if ($result === true) {

            $subject  = "Forgot Password for admin Inquilab.com";
            $sendlink = $domain . 'admin/reset.php?token=' . $token;

            include_once 'mail_reset_link.php';
        } else {

            header("Location:index.php");
            exit();
        }
    } else {

        header("Location:index.php");
        exit();
    }
?>
