<?php
session_start();
include_once("secure.php");
include_once("configure.php");
include_once(DIR_WS_CLASS_SITE."db_registration_master.php");
if ($_SESSION['security_code_used'] > 0)
{
    echo '<script language="javascript">'
        . 'alert("Security code has been expired!.");'
        . 'window.location = "changepassword.php";'
        . '</script>';
    die();
}
if(($_SESSION['security_code'] == $_POST['security_code']) && (!empty($_SESSION['security_code']))):
$prcid = intval($_SESSION['Suserid']);    
$opass = mysql_escape_mimic($_POST['txtoldpassword']);
$npass = mysql_escape_mimic($_POST['txtnewpassword']);
$hashed_password = password_hash($npass, PASSWORD_DEFAULT);
$query = "Select * from registration_master where user_id=$prcid";
$result = mysqli_query($con, $query);
    if(mysqli_num_rows($result)>0)
    {
        $row = mysqli_fetch_array($result);
        $password_hash = $row['user_password'];
        if(password_verify($opass, $password_hash)){
            $objregistration = new db_registration_master($prcid);
            $objregistration->set_user_id($prcid);
            $objregistration->set_user_password($hashed_password);
                if ($objregistration->changepassword()):
                    $msgid = 117;
                endif;
                header("Location:changepassword/1");
                exit();            
         }else{
                header("Location:changepassword/116");
                exit(); 
       }         
       
?>            
    <script language="javascript">
        alert("Sorry, you have provided an invalid security result");
        window.location.assign("<?php echo $domain?>changepassword");
    </script>            
<?php   
    }           
endif;    
?>