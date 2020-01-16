<?php
session_start();
include_once("secure.php");
include_once("configure.php");
include_once(DIR_WS_CLASS_SITE."db_registration_master.php");

if ($_SESSION['security_code_used'] > 0)
{
    echo '<script language="javascript">'
        . 'alert("Security code has been expired!.");'
        . 'window.location = "register";'
        . '</script>';
    die();
}

if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))):
$user_name 		 = mysql_escape_mimic($_POST['txtname']);
$user_email      = mysql_escape_mimic($_POST['txtemail']);
$user_password   = mysql_escape_mimic($_POST['txtpass']);
$hashed_password = password_hash($user_password, PASSWORD_DEFAULT);
$user_mobile     = mysql_escape_mimic($_POST['txtmobile']);
$user_country    = mysql_escape_mimic($_POST['cbocountry']);
$user_dor        = date('Y-m-d H:i:s');
$user_flag       = 'I';
$active          = 'N';
$siteurl         = $domain;
$fullname        = $user_name;
$frmemail        = "epaperinfo@inquilab.com";
$mode            = "New";
$objregistration = new db_registration_master();
switch ($mode):
        case "New":
                $checkExist = $objregistration->selectAll("user_email='" . $user_email . "'");
                if ($checkExist[0] > 0):
                    // error
                    $msgid = 114;
                    header("Location:register/".$msgid);
                    exit();
                else:    
            	$objregistration->set_fg_id(0);
            	$objregistration->set_user_name($user_name);
            	$objregistration->set_user_email($user_email);
            	$objregistration->set_user_password($hashed_password);
            	$objregistration->set_user_mobile($user_mobile);
            	$objregistration->set_user_country($user_country);
            	$objregistration->set_user_dor($user_dor);
            	$objregistration->set_user_flag($user_flag);
            	$objregistration->set_active($active);
            	if($objregistration->save()){
                $uid      = mysql_insert_id();
                $uidtouse = $uid;
                $uidtouse1 = base64_encode($uidtouse);
                $msgid = 119;
                $CustomHeaders = "";
                $strSubject = "Inquilab Registration Confirmation";
                $strBody    = $strBody . '<div style="width:648px; height:auto; float:left; text-align:left; display:block;  background-color: #143079;">';
                $strBody    = $strBody . '<div style="width:630px; height:auto; float:left; display:block; background-color: #fff; margin:8px;">';
                $strBody    = $strBody . '<div style="width:630px; height:auto; float:left; display:block;">';
                $strBody    = $strBody . '<div style="width:269px; height:115px; float:left; display:block;"><img src="http://i.radiocity.in/images/logo.png" alt="Inquilab" /></div>';
                $strBody    = $strBody . '<div style="width:590px; height:auto; float:left; display:block; background-color: #fff; padding:20px; color:#000000; font-size:12px; font-family:Arial, Helvetica, sans-serif;">';
                $strBody    = $strBody . '<table border=0 cellspacing=0 cellpadding=0 width="100%" align=center>' . "\n";
                $strBody    = $strBody . '   <tr><td>' . "\n";
                $strBody    = $strBody . '       <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">Hi ' . $fullname . ',</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">&nbsp;</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">Thank you for registering with Inquilab.com. India`s Urdu Site.</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">&nbsp;</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">Please <a href="'.$domain.'acvitate/'.$uidtouse1.'"><b>click here</b></a> to activate your account and use the Email & password to login in to your account. </TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">&nbsp;</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">&nbsp;</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">&nbsp;</TD>' . "\n" . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">Warm regards,</TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3">Team Inquilab</TD>' . "\n" . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '       <TR>' . "\n";
                $strBody    = $strBody . '           <TD vAlign="center" align="left" colspan="3"></TD>' . "\n";
                $strBody    = $strBody . '       </TR>' . "\n";
                $strBody    = $strBody . '       </table>' . "\n";
                $strBody    = $strBody . '   </td></tr>' . "\n";
                $strBody    = $strBody . '</table>' . "\n";
                $strBody    = $strBody . '</div><!-- row2 --></div></div>';
                //echo $strBody;
                //return;
                $headers    = "MIME-Version: 1.0" . "\r\n";
                $headers   .= "Content-type: text/html; charset=iso-8859-2" . "\r\n";
                $headers   .= "From: $frmemail\r\n" . "Reply-To: $frmemail\r\n" . "X-Mailer: PHP/" . phpversion() . "\r\nX-originating-IP: " . getenv('REMOTE_ADDR') . "\r\n";
                $status =  @mail($user_email, $strSubject, $strBody, $headers);
            }
            break;
        endif;
endswitch;     
    $_SESSION['security_code_used'] += 1;
    //header("Location:register/".$msgid);
    header("Location:$domain"."confirmation");
    exit();
else:
?>
       <script language="javascript">
            alert("Sorry, you have provided an invalid security result");
            window.location="<?php echo $domain?>register";
        </script>
<?php
endif;
?>

