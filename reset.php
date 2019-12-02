<?php
session_start();
include_once 'configure.php';
include_once(DIR_WS_CLASS_SITE . "db_registration_master.php");
include_once(DIR_WS_CLASS_SITE . "db_token.php");
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
$db_password = password_hash($pass, PASSWORD_DEFAULT);
$email = $_SESSION['email'];

if(!isset($_POST['password'])):

    include_once 'reset_password_html.php';
	echo 'ceome here12345678900000000000000000000000000000';
	return;
   
endif;

if(isset($_POST['password']) && isset($email)):
    if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))):
	$prc_obj = new db_registration_master();
	$prc_obj->Set_user_password($db_password);
	$prc_obj->Set_user_email($email);
	$result = $prc_obj->changeNewpassword();
	if ($result):
	    $result = $token_obj->update($token);
	    if ($result === true):
	?>
	    <script language="javascript">
			alert("Password Changed Successfully. Kindly Login with your new password");
			window.location="<?php echo $domain?>";
	    </script>
	<?php
		endif;
	endif;
    else:
	?>
	    <script language="javascript">
		alert("Sorry, you have provided an invalid security result");
		window.location="security_code_error/113";
	    </script>
	<?php
    endif;
endif;
?>