<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(7, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_tag_master.php");
include(DIR_WS_CLASS."messages.php");
$msgId ="";
$obj = new db_tag_master;
$strWhere="";
$cur="";
$max="";
$internet = $obj->selectAll($strWhere,$cur,$max);
// ** object for messages **
$msgId  = intval($_GET['msgid']);
$objMsg = new message ($msgId);
?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tags List</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <li><span>Tags List</span></li>
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
                    <form name="frminternet" method="post" action="<?php echo $domain?>admin/tag-entry.php">
            <div class="panel-body">
                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo DIR_WS_ASSETS?>vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                    <div align="left">
                        <a href="<?php echo $domain?>admin/tag-entry.php" class="btn btn-default">Add</a>
                        <a href="#"  onclick="javascript:return callDelete();" class="btn btn-default">Delete</a>
                        <a href="<?php echo $domain?>admin/adminhome.php" class="btn btn-default" id="myButton">Cancel</a>
                    </div>   
                    <br> 
                    <thead>
                        <tr>
                            <th width="5%"></th>
                            <th width="65%">Tag Title</th>
                            <th width="15%">Image</th>
                            <th width="5%">Status</th>
                            <th width="5%">Edit</th>
                            <th width="5%">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        if($internet[0]>0):
                            $i=0;
                        while($objinternet = mysql_fetch_object($internet[1])):
                            $i=$i+1;
                         if($objinternet->active =="Y"):
                            $stractive = "Yes";
                         else:
                            $stractive = "No";
                        endif;
                        $tag_date      = $objinternet->tag_date;
                        $time          = strtotime($tag_date);
                        $month         = date("M",$time);
                        $year          = date("Y",$time);

                        //$pathname = 'images/' . date("Y") . '/' . date("M") . '/';
                    ?>
                        <tr class="gradeX">
                            <td><input type="checkbox" name="chk<?php echo $i?>" value="<?php echo htmlspecialchars($objinternet->tag_id,ENT_QUOTES, 'UTF-8')?>"/></td>
                            <td><?php echo htmlspecialchars($objinternet->tag_name,ENT_QUOTES, 'UTF-8')?></td>
                            <td align="center"><a href="<?php echo $domain?>admin/tag-entry.php?tid=<?php echo htmlspecialchars($objinternet->tag_id,ENT_QUOTES, 'UTF-8')?>"><img src="<?php echo htmlspecialchars($objinternet->tag_image,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></a></td>
                            <td><?php echo $stractive?></td>
                            <td align="center"><a href="<?php echo $domain?>admin/tag-entry.php?tid=<?php echo htmlspecialchars($objinternet->tag_id,ENT_QUOTES, 'UTF-8')?>"><img src="<?php echo DIR_WS_ASSETS?>images/user_edit.png" alt="Edit" title="Edit"/></a></td>
                            <td align="center"><input type="image" src="<?php echo DIR_WS_ASSETS?>images/trash.png" alt="Delete" title="Delete" onclick="javascript:return callDelete();" /></td>
                        </tr>
                    <?php
                            endwhile;
                        endif;
                    ?>
                    </tbody>
                </table>
                <input type="hidden" name="tid" id="tid" value="<?php echo htmlspecialchars($objinternet->tag_id,ENT_QUOTES, 'UTF-8')?>">
                <input type="hidden" name="txtCtrls" value="<?php echo $i?>" />
                <a href="<?php echo $domain?>admin/tag-entry.php" class="btn btn-default">Add</a>
                <a href="#"  onclick="javascript:return callDelete();" class="btn btn-default">Delete</a>
                <a href="<?php echo $domain?>admin/adminhome.php" class="btn btn-default" id="myButton">Cancel</a>
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
    var iToggle = 0;
    function callDelete(){
        for(i=0;i<=document.forms['frminternet'].elements.length-1 ;i++)
        {
        if(document.forms['frminternet'].elements[i].type=='checkbox'){
            if(document.forms['frminternet'].elements[i].checked)
            {iToggle=1;}
        }
        }
        if(iToggle==1){
        if(confirm("Are you sure to delete ?"))
        {
          document.frminternet.action="<?php echo $domain?>admin/tag-submit.php?mode=Delete";
          document.frminternet.submit();
        }
        }else{
        alert('Please select a record to delete ');
        return false;
        }
    }
</script>
<script>
function setValue(val)
{
    document.frminternet.aid.value = val;
    document.forms["frminternet"].submit();
}
</script>
<?php include("bottom.php");?>