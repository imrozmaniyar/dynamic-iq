<?php
session_start();
if ($_SESSION['Auserid'] == ""):
	header("Location: index.php?msgid=103");
    exit();
endif;
function CheckAccess($pageId,$adminid,$strUser){
if($strUser==""):
    header("Location:index.php?msgid=103");
	exit();
endif;
if($strUser=="admin"):
    return 1;
else:
    $strSql = "Select * from admin_role_rights where admin_id=" . $adminid . " and admin_menus_id=".$pageId ;
    $resultRole = mysql_query($strSql);
    $row1 = mysql_num_rows($resultRole);

if($row1 > 0):
    return 1;
else:?>
    <script type='text/javascript'>window.location.href = 'error-page.php';</script>
<?php
	//exit();
    return 0;
endif;
endif;
}
