<?php
session_start();
include_once '../configure.php';
include_once(DIR_WS_CLASS . "db_admin_parameters.php");
include_once(DIR_WS_CLASS . "db_token.php");
$objDB     = new database;
$token_obj = new db_token();
$link = $objDB->db_connect();

$token = mysql_real_escape_string($_GET['token'], $link);
if(!isset($_POST['password'])):
    $result = $token_obj->select($token);
    if (empty($result)):
	die("Invalid link or Password already changed");
    endif;
    $_SESSION['email'] = $result['email'];

endif;

$pass = mysql_real_escape_string($_POST['password'], $link);
$db_password = $pass;
$email = $_SESSION['email'];


if(!isset($_POST['password'])):

    include_once 'reset_password_html.php';
endif;

if(isset($_POST['password']) && isset($email)):
	$prc_obj = new db_admin_parameters();
	$prc_obj->Set_admin_password($db_password);
	$prc_obj->Set_admin_email($email);
	$result = $prc_obj->changeNewpassword();
	if ($result):
	    $result = $token_obj->update($token);
	    if ($result === true):
	?>
	    <script language="javascript">
			alert("Password Changed Successfully. Kindly Login with your new password");
			window.location="<?php echo $domain?>/admin";
	    </script>
	<?php
		endif;
	endif;

	?>

	<?php

endif;
?>
