<?php
include_once("configure.php");
$path = $_SERVER['REQUEST_URI'];
$urlParts = explode("/", $path);
//$id = $urlParts[2];
include_once(DIR_WS_CLASS_SITE."db_registration_master.php");
if ($_SERVER['REQUEST_METHOD'] === 'GET' && trim($urlParts[2]) != ''):
    $uid = intval(base64_decode($urlParts[2]));
    $active   = 'Y';
    $objspeak = new db_registration_master();
    $mode     = "Edit";

    switch ($mode):
        case "Edit":
            $objspeak->set_user_id($uid);
            $objspeak->set_active($active);
            if ($objspeak->save1()):
                $msgid = 500;
            endif;
            break;
    endswitch;
    

    ?>
    <script language="javascript">
    alert("Your account is active now.");
    window.location.assign("<?php echo $domain?>")
</script>
<?php   
else:
    header("Location:$domain");
    exit();
endif;
