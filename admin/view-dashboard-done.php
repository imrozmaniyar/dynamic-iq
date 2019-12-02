<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(3, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."db_gallery_master.php");
include(DIR_WS_CLASS."db_video_master.php");
include(DIR_WS_CLASS."db_article_master.php");
$obj = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet = $obj->selectAll($strWhere,$cur,$max);
// ** object for messages **
$obj1 = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet1 = $obj1->selectAll($strWhere,$cur,$max);
// ** object for messages **
$obj2 = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet2 = $obj2->selectAll($strWhere,$cur,$max);
// ** object for messages **
$obj3 = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet3 = $obj3->selectAll($strWhere,$cur,$max);
// ** object for messages **
$obj4 = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet4 = $obj4->selectAll($strWhere,$cur,$max);

$objg = new db_gallery_master;
$objv = new db_video_master;
$obja = new db_article_master;
$strWhere="";
$strWhere1="";
$strWhere2="";
if(isset($_REQUEST['fdate']) && isset($_REQUEST['tdate'])):
    $strfdate = mysql_real_escape_string($_REQUEST['fdate']);
    $strtdate = mysql_real_escape_string($_REQUEST['tdate']);
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

/*if(($strfdate !== "") && ($strtdate !== "")):
        $strWhere = "gallery_date BETWEEN '$newfdate1' AND '$newtdate1'"; 
        $strWhere .= $strWhere1=" UNION video_date BETWEEN '$newfdate1' AND '$newtdate1'";
        $strWhere1 .= $strWhere2=" UNION article_date BETWEEN '$newfdate1' AND '$newtdate1'";
endif;*/

endif;    
$internetg = $objg->selectAll($strWhere,$cur,$max);
$internetv = $objv->selectAll($strWhere1,$cur,$max);
$interneta = $obja->selectAll($strWhere2,$cur,$max);

?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard</h2>
        <div class="right-wrapper pull-right">
            <ol class="breadcrumbs">
                <li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
                <!-- <li><span>Category List</span></li> -->
            </ol>
            <a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
        </div>
    </header>
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <section class="panel">
                <div class="panel-body">
                                         
                        <form name="frminternet" method="post" action="<?php echo $domain?>admin/category-entry.php">
                              <div class="panel-group" id="accordion2" >
                            <div class="panel panel-accordion panel-accordion-primary ">
                                <div class="panel-heading"><h4 class="panel-title"><a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapse2One"><i class="fa fa-cogs"></i> Filters</a></h4></div>
                                    <div id="collapse2One" class="accordion-body collapse in">
                                    <div class="container-fluid">
                                        <div class="row">
                                             <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Date</b></td></tr>    
                                                    <tr><td><b>From : </b></br><div class="col-md-12" style="margin-bottom: 10px; margin-left: -15px";><input type="date" class="form-control" name="fdate" id="sfdate" value="<?php echo htmlspecialchars($strfdate,ENT_QUOTES, 'UTF-8')?>"></div></td></tr> 
                                                    <tr><td><b>To : </b></br><div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";><input type="date" class="form-control" name="tdate" id="stdate" value="<?php echo htmlspecialchars($strtdate,ENT_QUOTES, 'UTF-8')?>"></div></td></tr>
                                                </table> 
                                            </div>
                                            
                                            <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Published By</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" class="form-control" name="" id=""> -->
                                                                    <select class="form-control mb-md" id="sadmin" name="txtsadmin">
                                                                        <option value="">Select Users</option>
                                                                        <?php
                                                                            $objgener1 = new db_admin_parameters;
                                                                            $strWhere = "";
                                                                            $gener1 = $objgener1->selectAll($strWhere);
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
                                                    <tr><td><b>Status</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" class="form-control" name="" id=""> -->
                                                                <select class="form-control mb-md" id="sstatus" name="txtsstatus">
                                                                    <option value="">Type Of Story</option>
                                                                    <option value="P" >Print</option>
                                                                    <option value="A" >Agency</option>
                                                                    <option value="O">Online</option>
                                                                </select>
                                                            </div>
                                                        </td>
                                                    </tr> 
                                                </table> 
                                            </div>
                                            <div class="col-md-2">
                                                <table border='0'>
                                                    <tr><td><b>Status</b></td></tr>    
                                                    <tr>
                                                        <td>
                                                            <div class="col-md-12" style="margin-bottom: 10px;margin-left: -15px";>
                                                                <!-- <input type="text" class="form-control" name="" id=""> -->
                                                                <select class="form-control mb-md" id="sstatus" name="txtsstatus">
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
                                    <a href="gallery-list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="licon-refresh"></i> Reset</button></a>
                                    
                                    </div>
                                    </div>
                                </div> 
                        <div class="panel-body">                        
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo DIR_WS_ASSETS?>vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                <thead>
                                    <tr>
                                        <th width="10%"></th>
                                    <?php    
                                    if($internet[0]>0):
                                        $i=0;
                                        while($objinternet = mysql_fetch_object($internet[1])):
                                            $i=$i+1;
                                    ?>        
                                        <th width="10%"><?php echo htmlspecialchars($objinternet->category_master_name,ENT_QUOTES, 'UTF-8')?></th>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>            
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX" data-position="1">
                                        <td><b>Articles</b></td>
                                    <?php    
                                    if($internet1[0]>0):
                                        $i=0;
                                        while($objinternet1 = mysql_fetch_object($internet1[1])):
                                            $i=$i+1;
                                        $sSqlkiss123 = "SELECT count(*) FROM article_master where category_id=$objinternet1->category_master_id";
                                        $res123 = mysql_query($sSqlkiss123);
                                        $num_records123 = mysql_fetch_row($res123);                                            
                                    ?>                                          
                                        <td><?php echo $num_records123[0];?></td>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>      
                                    </tr>
                                
                                    <tr class="gradeX" data-position="2">
                                        <td><b>Photos</b></td>
                                    <?php    
                                    if($internet2[0]>0):
                                        $i=0;
                                        while($objinternet2 = mysql_fetch_object($internet2[1])):
                                            $i=$i+1;
                                        $sSqlkiss1234 = "SELECT count(*) FROM gallery_master where category_id=$objinternet2->category_master_id";
                                        $res1234 = mysql_query($sSqlkiss1234);
                                        $num_records1234 = mysql_fetch_row($res1234);                                            
                                    ?>                                          
                                        <td><?php echo $num_records1234[0];?></td>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>      
                                    </tr>
                                
                                   <tr class="gradeX" data-position="3">
                                        <td><b>Videos</b></td>
                                    <?php    
                                    if($internet3[0]>0):
                                        $i=0;
                                        while($objinternet3 = mysql_fetch_object($internet3[1])):
                                            $i=$i+1;
                                        $sSqlkiss12345 = "SELECT count(*) FROM video_master where category_id=$objinternet3->category_master_id";
                                        $res12345 = mysql_query($sSqlkiss12345);
                                        $num_records12345 = mysql_fetch_row($res12345);                                            
                                    ?>                                          
                                        <td><?php echo $num_records12345[0];?></td>
                                    <?php
                                        endwhile;
                                    endif;
                                    ?>      
                                   </tr>
                                 
                                   <tr class="gradeX" data-position="4">
                                        <td><font color="red"><b>Total</b></font></td>
                                        <?php 
                                        if($internet4[0]>0):
                                        $i=0;
                                        while($objinternet4 = mysql_fetch_object($internet4[1])):
                                            $i=$i+1;                                               
                                        $sSqlkiss = "SELECT
                                                        (SELECT COUNT(*) FROM video_master WHERE category_id=$objinternet4->category_master_id)  
                                                        +(SELECT COUNT(*) FROM article_master WHERE category_id=$objinternet4->category_master_id)
                                                        +(SELECT COUNT(*) FROM gallery_master WHERE category_id=$objinternet4->category_master_id) as table4Count

                                        ";
                                        $res = mysql_query($sSqlkiss);
                                        $num_records = mysql_fetch_row($res);    
                                        ?>                                          
                                        <td><font color="red"><b><?php echo $num_records[0];?></b></font></td>
                                        <?php
                                            endwhile;
                                         endif;   
                                        ?>
                                    </tr>    
                                </tbody>                               
                            </table>
                        </div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</section>
<?php include("right.php");?>

<?php include("bottom.php");?>
<script type="text/javascript">
  function callSearch()
        {
        var searchValuefdate = document.getElementById('sfdate').value;
        var searchValuetdate = document.getElementById('stdate').value;
        document.frminternet.action="view-dashboard.php";
        document.frminternet.submit();
        }       
</script>
