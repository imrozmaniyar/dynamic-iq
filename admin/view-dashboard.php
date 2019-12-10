<?php
/*error_reporting(E_ALL);
ini_set("display_errors", 1);
*/include("top.php");
include("left.php");
$retValue = CheckAccess(5, $AdminSession_ID, $AdminSession_NAME);
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."db_dashboard_master.php");
include(DIR_WS_CLASS."messages.php");
$msgId ="";
$obj = new db_category_master;
$strWhere="";
$cur="";
$max="";
$internet = $obj->selectAll($strWhere,$cur,$max);
// ** object for messages **
$strfdate = "";
$strtdate = "";
$strsadmin ="";
 if(isset($_REQUEST['fdate']) && isset($_REQUEST['tdate']) && isset($_REQUEST['txtsadmin']) ):
    $strfdate = mysql_real_escape_string($_REQUEST['fdate']);
    $strtdate = mysql_real_escape_string($_REQUEST['tdate']); 
    $strsadmin = mysql_real_escape_string($_REQUEST['txtsadmin']);
endif;    

?>
<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard </h2>
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
                                                                            $objgener1 = new db_dashboard_master;
                                                                            $strWhere = "";
                                                                            $gener1 = $objgener1->selectAllGroupA($strWhere);
                                                                            while($fetch_gener1 = mysql_fetch_object($gener1[1])){
                                                                        ?>
                                                                        <option value="<?php echo $fetch_gener1->dashboard_published;?>"<?php if($fetch_gener1->dashboard_published==$strsadmin){ echo "selected"; }?>>
                                                                            <?php echo $fetch_gener1->dashboard_published?>
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
                    <a href="view-dashboard.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-primary"><i class="licon-refresh"></i> Reset</button></a>
                </div>
            </div>
        </div>
    </div>
</div>                                  
                        <div class="panel-body">                        
                            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo DIR_WS_ASSETS?>vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                                <thead>
                                    <tr>
                                        <th>Category</th>
                                        <th>Articles</th>
                                        <th>Photos</th>
                                        <th>Videos</th>
                                        <th><font color="Red">Total</font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="gradeX" id="totalMe">
                                <?php
                                    $obj = new db_category_master();
                                    if($internet[0]>0):
                                    $i=0;
                                    while($objinternet = mysql_fetch_object($internet[1])):
                                    $objd = new db_dashboard_master;    
                                    $strWhere1 = " category_id = $objinternet->category_master_id";


                                    $dashboard = $objd->selectAll($strWhere1);
                                    $i=$i+1;
                                    if($dashboard[0]>0):
                                                $j=0;
                                                while($objdashboard = mysql_fetch_object($dashboard[1])):
                                                $categoryid = $objdashboard->category_id;
                                            $j=$j+1;
                                    //$sSqlkiss1 = '';    
                                        //for Articles
                                        if(($strfdate !== "") && ($strtdate !== "")):
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
                                            $sSqlkiss1 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Articles' and dashboard_date BETWEEN '$newfdate1' AND '$newtdate1'";       
                                            //$sSqlkiss1.=
                                        else:
                                            $sSqlkiss1 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Articles'";                                                 
                                        endif;  
     
                                        ///for admin
                                        if($strsadmin !== ""):
                                            if($sSqlkiss1!=""):
                                                $sSqlkiss1 .= "and dashboard_published LIKE '%$strsadmin%'";
                                            else:    
                                                $sSqlkiss1 .= "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Articles' and dashboard_date BETWEEN '$newfdate1' AND '$newtdate1' and dashboard_published LIKE '%$strsadmin%'";
                                            endif;
                                        endif; 
                                       //echo $sSqlkiss1; 
                                        $res1 = mysql_query($sSqlkiss1);
                                        $num_records1 = mysql_fetch_row($res1);   
                                            
                                        //for Articles

                                        //for Photos
                                        if(($strfdate !== "") && ($strtdate !== "")):
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
                                            $sSqlkiss2 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Photos' and dashboard_date BETWEEN '$newfdate1' AND '$newtdate1'";       
                                            //$sSqlkiss1.=
                                        else:
                                            $sSqlkiss2 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Photos'";                                                 
                                        endif;                                         
                                        $res2 = mysql_query($sSqlkiss2);
                                        $num_records2 = mysql_fetch_row($res2);   
                                        //for Photos

                                        //for Videos                                                                                
                                        if(($strfdate !== "") && ($strtdate !== "")):
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
                                            $sSqlkiss3 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Videos' and dashboard_date BETWEEN '$newfdate1' AND '$newtdate1'";       
                                            //$sSqlkiss1.=
                                        else:
                                            $sSqlkiss3 = "SELECT count(*) FROM dashboard_master where category_id=$categoryid and dashboard_name='Videos'";                                                 
                                        endif;                                         
                                        $res3 = mysql_query($sSqlkiss3);
                                        $num_records3 = mysql_fetch_row($res3);                                                                                        
                                        //for Videos                                                                                                                        
                                        ?>
                                    
                                        <td><?php echo htmlspecialchars($objinternet->category_master_name,ENT_QUOTES, 'UTF-8')?></td>
                                        <td><?php echo $num_records1[0];?></td>
                                        <td><?php echo $num_records2[0];?></td>
                                        <td><?php echo $num_records3[0];?></td>
                                        <td><font color="red"><?php echo ($num_records1[0] + $num_records2[0] + $num_records3[0]);?></font></td>

                                    <?php
                                    endwhile;
                                else:?>
                                        <td><?php echo htmlspecialchars($objinternet->category_master_name,ENT_QUOTES, 'UTF-8')?></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td><font color="red">0</font></td>

                                <?php endif;
                                ?>                                        
                                       
                                    </tr>
                                <?php
                                    endwhile;
                                endif;
                                ?>        
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
$(document).ready(function () {
    $('tr').each(function () {
        var sum = 0
        $(this).find('.combat').each(function () {
            sum += +$(this).text() || 0;
        });
        $('.total-combat', this).html(sum);
    });
});    
function callSearch(){
    var searchValuefdate = document.getElementById('sfdate').value;
    var searchValuetdate = document.getElementById('stdate').value;
    var searchValueadmin = document.getElementById('sadmin').value;
    document.frminternet.action="view-dashboard.php";
    document.frminternet.submit();
    }     
</script>