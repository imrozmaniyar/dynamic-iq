<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(4,$AdminSession_ID,$AdminSession_NAME);
include(DIR_WS_CLASS."db_category_master.php");
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Category Entry</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Category Entry</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="category-submit.php" id="frm" name="frm">
						<div class="form-group">
							<label class="col-md-3 control-label" for="inputSuccess">Category </label>
							<div class="col-md-6">
								<select class="form-control mb-md" id="cbocat" name="cbocat" required="required">
									 <option value="">Select Category</option>
	                                <?php
	                                    $objgener = new db_category_master;
	                                    $strWhere = "";
	                                    $gener = $objgener->selectAll($strWhere,null,null);
	                                    while($fetch_gener = mysql_fetch_object($gener[1])){
	                                ?>
	                                    <option value="<?php echo $fetch_gener->category_master_id;?>"
	                                        <?php if($fetch_gener->category_master_id==$category_master_id){ echo "selected"; }?>>
	                                        <?php echo $fetch_gener->category_master_name?>
	                                    </option>
	                                <?php }?>
	                        </select>
							</div>
						</div>
						<div class="form-group">
							<label class="col-md-3 control-label" for="inputSuccess">Sub Category </label>
							<div class="col-md-6">
								<select class="form-control mb-md" id="cbosubcat" name="cbosubcat">
									 
	                        </select>
							</div>
						</div>						

						<div class="form-group">
							<label class="col-md-3 control-label" for="inputSuccess">Sub Sub Category </label>
							<div class="col-md-6">
								<select class="form-control mb-md" id="cbosubsubcat" name="cbosubsubcat">
									 
	                        </select>
							</div>
						</div>						
								
						
									<div class="panel-body" align="center">
									<a href="javascript: void(0);" onclick="login()"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Save</button></a>
									<a href="<?php echo $domain?>admin/category-list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
									<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
                    				<input type="hidden" name="txtCID" value="<?php echo htmlspecialchars($id,ENT_QUOTES, 'UTF-8');?>" />
                    				<input type="submit" value=" " class="hide" />
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

<?php include("bottom.php");?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script type="text/javascript">
      /*google.load("elements", "1", {
            packages: "transliteration"
          });
      function onLoad() {
        var options = {
            sourceLanguage:
                google.elements.transliteration.LanguageCode.ENGLISH,
            destinationLanguage:
                [google.elements.transliteration.LanguageCode.URDU],
            shortcutKey: 'ctrl+g',
            transliterationEnabled: true
        };

        var control =
            new google.elements.transliteration.TransliterationControl(options);
        control.makeTransliteratable(['transliterateDiv1']);
        control.makeTransliteratable(['transliterateDiv2']);
				control.makeTransliteratable(['transliterateDiv3']);
				control.makeTransliteratable(['transliterateDiv4']);
      }
      google.setOnLoadCallback(onLoad);*/

$(document).ready(function(){

    $('#cbocat').on("change",function () {
        var categoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "pop-subcat.php",
            type: "POST",
            data: "categoryId="+categoryId,
            success: function (response) {
                //alert(response);
                $("#cbosubcat").html(response);
            },
        });
    }); 

});


$(document).ready(function(){

    $('#cbosubcat').on("change",function () {
        var categoryId = $('#cbocat').find('option:selected').val();
        var SubcategoryId = $(this).find('option:selected').val();
        $.ajax({
            url: "pop-subsubcat.php",
            type: "POST",
			data: 'categoryId='+categoryId+'&SubcategoryId='+SubcategoryId,
            success: function (response) {
                //alert(response);
                $("#cbosubsubcat").html(response);
            },
        });
    }); 

});



function login(){$('#frm').find('[type="submit"]').trigger('click');}
</script>