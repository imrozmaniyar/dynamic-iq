<?php
session_start();
include_once("configure.php");
include_once(DIR_WS_CLASS_SITE . "db_registration_master.php");
include_once(DIR_WS_CLASS_SITE . "db_token.php");
include_once 'RandomString.php';
 if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))){
    $obj   = new db_registration_master();
    $objDB = new database();
    $link  = $objDB->db_connect();

    $to = mysql_real_escape_string($_POST["email1"], $link);
	$result = $obj->selectAll("user_email='" . $to . "'");

    if ($result[0] > 0) {
        $random_str = new \Inquilab\Util\Random\RandomString\RandomString(10);
        $tokenObj   = new db_token();

        $token  = $random_str->get();
        $result = $tokenObj->insert($token, $to);

        if ($result === true) {

            $subject  = "Forgot Password for Inquilab.com";
            $sendlink = $domain . 'reset.php?token=' . $token;

            include_once 'mail_reset_link.php';
        } else {

            header("Location:login");
            exit();
        }
    } else {

        header("Location:login");
        exit();
    }
} else {?>

            <script language="javascript">
            alert("Sorry, you have provided an invalid security result");
            window.location="<?php echo $domain?>/login";
        </script>
<?php }?>




