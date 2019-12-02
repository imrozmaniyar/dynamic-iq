<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(1, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_article_master.php");
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."messages.php");
$msgId ="";
$obj = new db_article_master;
$strWhere="";
if(isset($_REQUEST['fdate']) && isset($_REQUEST['tdate']) && isset($_REQUEST['txtcat']) && isset($_REQUEST['txtsadmin']) && isset($_REQUEST['txtsvid']) && isset($_REQUEST['txtstitle']) && isset($_REQUEST['txtsstatus'])):
    $strfdate = mysql_real_escape_string($_REQUEST['fdate']);
    $strtdate = mysql_real_escape_string($_REQUEST['tdate']);
    $strcat = mysql_real_escape_string($_REQUEST['txtcat']);
    $strsadmin = mysql_real_escape_string($_REQUEST['txtsadmin']);
    $strsvid = mysql_real_escape_string($_REQUEST['txtsvid']);
    $strstitle = mysql_real_escape_string($_REQUEST['txtstitle']);
    $strsstatus = mysql_real_escape_string($_REQUEST['txtsstatus']);
    ///fordate
    $oldDate = $strfdate;
    $arr = explode('-', $oldDate);
    $newfdate = $arr[1].'-'.$arr[2].'-'.$arr[0];
    $newfdate1 = str_replace('-','/',$newfdate);
    $oldDate1 = $strtdate;
    $arr = explode('-', $oldDate1);
    $newtdate = $arr[1].'-'.$arr[2].'-'.$arr[0];
    $newtdate1 = str_replace('-','/',$newtdate);
    ///fordate

    /*if(($strfdate !== " ") && ($strtdate !== " ") && ($strcat !== " ") && ($strsadmin !== " ") && ($strsvid !== " ") && ($strstitle !== " ") && ($strsstatus !== " ")):
        $strWhere = " article_date BETWEEN '$newfdate1' AND '$newtdate1' or category_id='$strcat' or admin_name='$strsadmin' or article_random_id='$strsvid' or article_headline='$strstitle' or active='$strsstatus'";
    endif;*/

if(($strfdate !== "") && ($strtdate !== "")):
        $strWhere = "article_date BETWEEN '$newfdate1' AND '$newtdate1'"; 
endif;
    if($strcat !== ""):
        if($strWhere==""):
            $strWhere .= "  category_id = '$strcat'";
        else:    
           $strWhere .= " and category_id = '$strcat'";
        endif;
    endif;  

    if($strsadmin !== ""):
        if($strWhere==""):
            $strWhere .= "  admin_name LIKE '%$strsadmin%'";
        else:    
           $strWhere .= " and admin_name LIKE '%$strsadmin%'";
        endif;
    endif; 

     if($strsvid !== ""):
        if($strWhere==""):
            $strWhere .= "article_id = '$strsvid'";
        else:    
           $strWhere .= " and article_id = '$strsvid'";
        endif;
    endif; 

         if($strstitle !== ""):
        if($strWhere==""):
            $strWhere .= "article_headline LIKE '%$strstitle%' ";
        else:    
           $strWhere .= " and article_headline LIKE '%$strstitle%'";
        endif;
    endif;  

 if($strsstatus !== ""):
        if($strWhere==""):
            $strWhere .= "active LIKE '%$strsstatus%'";
        else:    
           $strWhere .= " and active = '$strsstatus'";
        endif;
    endif; 

endif;
//echo $strWhere;
$cur="";
$max="";
$internet = $obj->selectAll($strWhere,$cur,$max);
// ** object for messages **
$msgId  = intval($_GET['msgid']);
$objMsg = new message ($msgId);
?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Article List</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <li><span>Article List</span></li>
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
                    <form name="frminternet" method="post" action="<?php echo $domain?>admin/article-entry.php">
 <div class="panel-group" id="accordion2" >
                            <div class="panel panel-accordion panel-accordion-primary ">
                                <div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One"><i class="fa fa-cogs"></i> Filters</a></h4></div>
                                    <div id="collapse2One" class="accordion-body collapse in">
                                    <div class="container-fluid">
                                        <div class="row">
                                             <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Publish Date</b></td></tr>    
                                                    <tr><td><b>From : </b></br><div class="col-md-12" style="margin-bottom: 10px; margin-left: -15px";><input type="date" class="form-control" name="fdate" id="sfdate" value="<?php echo htmlspecialchars($strfdate,ENT_QUOTES, 'UTF-8')?>"></div></td></tr> 
                                                    <tr><td><b>To : </b></br><div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";><input type="date" class="form-control" name="tdate" id="stdate" value="<?php echo htmlspecialchars($strtdate,ENT_QUOTES, 'UTF-8')?>"></div></td></tr>
                                                </table> 
                                            </div>
                                            <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Category</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" name="txtcat" id="cat" class="form-control" name="" id=""> -->
                                                                    <select class="form-control mb-md" id="cat" name="txtcat">
                                                                        <option value="">Category</option>
                                                                        <?php
                                                                            $objgener = new db_category_master;
                                                                            $strWhere = "";
                                                                            $gener = $objgener->selectAll($strWhere,null,null);
                                                                            while($fetch_gener = mysql_fetch_object($gener[1])){
                                                                        ?>
                                                                        <option value="<?php echo $fetch_gener->category_master_id;?>"
                                                                            <?php if($fetch_gener->category_master_id==$strcat){ echo "selected"; }?>>
                                                                            <?php echo $fetch_gener->category_master_name?>
                                                                        </option>
                                                                        <?php }?>
                                                                     </select>                                                                
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </div>
                                            <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Uploaded By</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" class="form-control" name="" id=""> -->
                                                                    <select class="form-control mb-md" id="sadmin" name="txtsadmin">
                                                                        <option value="">Select Users</option>
                                                                        <?php
                                                                            $objgener1 = new db_article_master;
                                                                            $strWhere = "";
                                                                            $gener1 = $objgener1->selectAllGroup($strWhere);
                                                                            while($fetch_gener1 = mysql_fetch_object($gener1[1])){
                                                                        ?>
                                                                        <option value="<?php echo $fetch_gener1->admin_name;?>"<?php if($fetch_gener1->admin_name==$strsadmin){ echo "selected"; }?>>
                                                                            <?php echo $fetch_gener1->admin_name?>
                                                                        </option>
                                                                        <?php }?>
                                                                     </select>                                                                
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </div>
                                             <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Article ID</b></td></tr>    
                                                    <tr><td><div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";><input type="text" class="form-control" name="txtsvid" id="svid" value="<?php echo htmlspecialchars($strsvid,ENT_QUOTES, 'UTF-8')?>"></div></td></tr> 
                                                </table> 
                                            </div>
                                             <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Article Headline</b></td></tr>    
                                                    <tr><td><div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";><input type="text" class="form-control" name="txtstitle" id="stitle" value="<?php echo htmlspecialchars($strstitle,ENT_QUOTES, 'UTF-8')?>"></div></td></tr> 
                                                </table> 
                                            </div>
                                            <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Status</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" class="form-control" name="" id=""> -->
                                                                <select class="form-control mb-md" id="sstatus" name="txtsstatus" required="required">
                                                                    <option value="">Select Status</option>
                                                                    <option value="Y" <?php if($strsstatus == "Y"){ echo "selected"; } ?>>Yes</option>
                                                                    <option value="N" <?php if($strsstatus == "N"){ echo "selected"; } ?>>No</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </div>
                                        </div>
                                    </div>
                                    <div align="center">
                                    
                                    <button type="button" onclick="javascript:return callSearch();" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="licon-magnifier"></i> Search</button>
                                    <a href="article-list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="licon-refresh"></i> Reset</button></a>
                                    
                                    </div>
                                    </div>
                                </div>                          
            <div class="panel-body">

                <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo DIR_WS_ASSETS?>vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <div align="left">
                <a href="<?php echo $domain?>admin/article-entry.php" class="btn btn-default">Add</a>
                <a href="#"  onclick="javascript:return callDelete();" class="btn btn-default">Delete</a>
                <a href="<?php echo $domain?>admin/adminhome.php" class="btn btn-default" id="myButton">Cancel</a>
                </div>
                <br>                    
                    <thead>
                        <tr>
                            <th width="5%"></th>
                            <th width="5%">ID</th>
                            <th width="20%">Article Headline</th>
                            <th width="10%">Category</th>
                            <th width="10%">Uploaded By</th>
                            <th width="10%">Modified By</th>
                            <th width="15%">Publish Date</th>
                            <th width="15%">Modified Date</th>
                            <th width="10%">Image</th>
                            <th width="5%">Status</th>
                            <th width="5%">Edit</th>
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
                        $article_date    = $objinternet->article_date;
                        $cdate         =  date("jS F, Y", strtotime($article_date)); 
                        $article_date1    = $objinternet->article_date1;
                        $mdate         =  date("jS F, Y", strtotime($article_date1)); 
                        $gallery_time    = $objinternet->gallery_time;
                        $catID = $objinternet->category_id;
                        $objbmaster = new db_category_master($catID);
                        $catName = $objbmaster->Get_category_master_name();
                        //$pathname = 'images/' . date("Y") . '/' . date("M") . '/';
                        $time          = strtotime($article_date);
                        $month         = date("M",$time);
                        $year          = date("Y",$time);

                    ?>
                        <tr class="gradeX">
                            <td><input type="checkbox" name="chk<?php echo $i?>" value="<?php echo htmlspecialchars($objinternet->article_id,ENT_QUOTES, 'UTF-8')?>"/></td>
                            <td><?php echo htmlspecialchars($objinternet->article_id,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($objinternet->article_headline,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($catName,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($objinternet->admin_name,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($objinternet->admin_name1,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($cdate,ENT_QUOTES, 'UTF-8')?> <?php echo htmlspecialchars($article_time,ENT_QUOTES, 'UTF-8')?></td>
                            <td><?php echo htmlspecialchars($mdate,ENT_QUOTES, 'UTF-8')?></td>
                            <td align="center"><img src="<?php echo htmlspecialchars($objinternet->article_image,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></td>
                            <td><?php echo $stractive?></td>
                            <td align="center"><a href="<?php echo $domain?>admin/article-entry.php?aid=<?php echo htmlspecialchars($objinternet->article_id,ENT_QUOTES, 'UTF-8')?>"><img src="<?php echo DIR_WS_ASSETS?>images/user_edit.png" alt="Edit" title="Edit"/></a></td>
                        </tr>
                    <?php
                            endwhile;
                        endif;
                    ?>
                    </tbody>
                </table>
                <input type="hidden" name="aid" id="aid" value="<?php echo htmlspecialchars($objinternet->article_id,ENT_QUOTES, 'UTF-8')?>">
                <input type="hidden" name="txtCtrls" value="<?php echo $i?>" />
                <a href="<?php echo $domain?>admin/article-entry.php" class="btn btn-default">Add</a>
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
          document.frminternet.action="<?php echo $domain?>admin/article-submit.php?mode=Delete";
          document.frminternet.submit();
        }
        }else{
        alert('Please select a record to delete ');
        return false;
        }
    }
 function callSearch()
        {
        var searchValuefdate = document.getElementById('sfdate').value;
        var searchValuetdate = document.getElementById('stdate').value;
        var searchValuecat = document.getElementById('cat').value;
        var searchValueadmin = document.getElementById('sadmin').value;
        var searchValuevid = document.getElementById('svid').value;
        var searchValuetitle = document.getElementById('stitle').value;
        var searchValuestatus = document.getElementById('sstatus').value;
        document.frminternet.action="article-list.php";
        document.frminternet.submit();
        }    
</script>
<?php include("bottom.php");?>
