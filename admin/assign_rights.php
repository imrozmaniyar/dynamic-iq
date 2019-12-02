<?php
include("top.php");
include("left.php");
if($_SESSION['Auserid']==1):
$retValue = CheckAccess(1,$AdminSession_ID,$AdminSession_NAME);
//include(DIR_WS_CLASS."db_admin_parameters.php");
include_once(DIR_WS_CLASS."db_admin_menus_subcategory.php");
include(DIR_WS_CLASS."db_admin_role_rights.php");
include_once(DIR_WS_CLASS."db_admin_menus.php");
include(DIR_WS_CLASS."messages.php");
$obj = new db_admin_menus;
$internet = $obj->selectAll($strWhere,null,null);
if(isset($_GET['id']))
{
	$mode="Edit";
	$id= intval($_GET['id']);
}else{
	$mode="New";
}

$objAdminName = new db_admin_parameters($id);
$Adminname = $objAdminName->get_admin_login();
$AdminUname = $objAdminName->get_admin_name();
$objsubcategory = new db_admin_menus_subcategory1;
$strWhere1 = " active = 'Y'";
$subcategory = $objsubcategory->selectAll($strWhere1,null,null);
$objar = new db_admin_role_rights();
$strWhereChk = " admin_role_rights_active = 'checked' and admin_id ='$id' ";
$assssChk = $objar->selectAll($strWhereChk,null,null);

if($assssChk[0]>0):
    $p=0;
    $checkboxid=array();
    while($chkbox = mysql_fetch_object($assssChk[1]))
    {
    $p = $p + 1;
    $adminMenusId = $chkbox->admin_menus_id;
    array_push($checkboxid,$adminMenusId);
    $adminId = $chkbox->admin_id;
    if($adminId === $id):
        echo "<script type='text/javascript'> $(document).ready(function(){ $('#chkbox_".$adminMenusId."').attr('checked', true);});  </script>";
        endif;
    }
endif;
// ** object for messages **
$msgId = intval($_GET['msgid']);
$objMsg = new message($msgId);
?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Assign Roles List For - <?php echo htmlspecialchars($AdminUname,ENT_QUOTES, 'UTF-8');?></h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <li><span>Assign Roles List For - <?php echo htmlspecialchars($AdminUname,ENT_QUOTES, 'UTF-8');?></span></li>
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
              <?php if($objMsg->get_message()!=""):?>
             <header class="panel-heading"><h2 class="panel-title"><font color="red"><b><?php echo $objMsg->get_message()?></b></font></h2></header>
             <?php endif;?>
                <div class="panel-body">
              <form name="frminternet" id="frminternet" method="post">
                <table>
                    <thead><tr><th width="100%">Select Menu to assign</th></tr></thead>
                    <thead><tr><th width="100%">&nbsp;</th></tr></thead>
                    <?php
                        if($internet[0]>0):
                        $i=0;
                        while($objinternet = mysql_fetch_object($internet[1])){
                            $objsubcategory = new db_admin_menus_subcategory1;
                            $strWhere1 = " admin_menus_id = $objinternet->admin_menus_id and active = 'Y'";
                            $subcategory = $objsubcategory->selectAll($strWhere1,null,null);
                            $i=$i+1;
                            $adminMenuCategory = $objinternet->admin_menus_category;
                    ?>
                    <thead><tr><th style="color: #1d2127;"><?php echo htmlspecialchars($adminMenuCategory,ENT_QUOTES, 'UTF-8');?></th></tr></thead>
                    <thead>
                    <?php
                        if($subcategory[0]>0):
                        $j=0;
                        while($objsubcategory = mysql_fetch_object($subcategory[1])){
                            $subcatid = $objsubcategory->admin_menus_subcategory_id;
                            $subcatname = $objsubcategory->admin_menus_subcategory_title;
                        $j=$j+1;
                    ?>
                        <tr>
                            <th> <input  type="checkbox" name="assign[]" value="<?php echo htmlspecialchars($subcatid,ENT_QUOTES, 'UTF-8')?>" id="chkbox_<?php echo $subcatid ?>" <?php if(in_array($subcatid,$checkboxid)): echo 'checked="checked"'; endif; ?>/>
                    <label for="<?php echo htmlspecialchars($subcatid,ENT_QUOTES, 'UTF-8')?>"><?php echo htmlspecialchars($subcatname,ENT_QUOTES, 'UTF-8')?></label></th>
                        </tr>
                    <?php
                        }
                    else:
                    ?>
                    <thead><tr><td colspan="2" align="center"><b>No Records Found</b></td></tr></thead>
                    <?php
                        endif;
                        }
                    endif;
                    ?>
                    </thead>
                </table>
                <div class="panel-body" align="center" align="center">
                    <input type="hidden" name="txtCtrls" value="<?php echo htmlspecialchars($j,ENT_QUOTES, 'UTF-8')?>" />
                    <input type="hidden" name="txtaid" value="<?php echo htmlspecialchars($id,ENT_QUOTES, 'UTF-8')?>" />
                    <a href="javascript: void(0);" onclick="javascript:callAssign();"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Assign Rights</button></a>
                    <a href="<?php echo $domain?>admin/admin_users_list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
                </div>
            </form>
                </div>
            </section>
        </div>
    </div>
    <!-- end: page -->
</section>
</div>
<?php include("right.php");?>

<script language="javascript" type="TEXT/JAVASCRIPT">
<!--
var iToggle = 0;
function callAssign(){
    for(i=0;i<=document.forms['frminternet'].elements.length-1 ;i++){
    if(document.forms['frminternet'].elements[i].type=='checkbox'){
            if(document.forms['frminternet'].elements[i].checked)
                {
            iToggle=1;
        }
        }
        }
        if (iToggle==1){
            if(confirm("Are you sure to assign the following rights ?")){
                document.frminternet.action="<?php echo $domain?>admin/assign_rights_submit.php?mode=New";
                document.frminternet.submit();
            }
        }else{
            if(confirm("Are you sure to assign the following rights ?")){
                document.frminternet.action="<?php echo $domain?>admin/assign_rights_submit.php?mode=Update";
                document.frminternet.submit();
            }
        }
}
-->

</script>
<?php
else:?>
    <script type='text/javascript'>window.location.href = '<?php echo $domain?>admin/error-page.php;</script>
<?php endif;?>
<?php include("bottom.php");?>
