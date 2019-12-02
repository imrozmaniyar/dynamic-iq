<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(3,$AdminSession_ID,$AdminSession_NAME);
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."db_sub_category_master.php");
$cid = intval($_GET['cid']);
$objh = new db_category_master($cid);
$title = $objh->Get_category_master_name();
if(isset($_GET['sid'])):
	$mode ="Edit";
	$sid = intval($_GET['sid']);
else:
	$mode="New";
endif;
$objbmaster = new db_sub_category_master($sid);
$sub_category_master_name_urdu = $objbmaster->get_sub_category_master_name_urdu();
$sub_category_master_name = $objbmaster->get_sub_category_master_name();
$sub_category_master_meta_title = $objbmaster->get_sub_category_master_meta_title();
$sub_category_master_meta_desc = $objbmaster->get_sub_category_master_meta_desc();
$sub_category_master_meta_keywords = $objbmaster->get_sub_category_master_meta_keywords();
$sub_category_master_date = $objbmaster->get_sub_category_master_date();
$sub_category_master_date1 = $objbmaster->get_sub_category_master_date1();
$admin_name = $objbmaster->get_admin_name();
$admin_name1 = $objbmaster->get_admin_name1();
$stractive = $objbmaster->Get_active();
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Sub Category Entry for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8');?></h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<!-- <li><span>Sub Category Entry for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8');?></span></li> -->
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="subcategory-submit.php" id="frm" name="frm">
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Sub Category Identifier</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txtuname" id="txtuname" size="55" required="required" placeholder="Sub Category Identifie" value="<?php echo htmlspecialchars($sub_category_master_name_urdu,ENT_QUOTES, 'UTF-8');?>"></div>
						</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Sub Category Name</label>
										<div class="col-md-6"><input type="text" class="form-control" name="txtname" id="txtname" size="55" required="required" placeholder="Sub Category Name" value="<?php echo htmlspecialchars($sub_category_master_name,ENT_QUOTES, 'UTF-8');?>"><br><font color="red">Note : Sub Category Name should be in english only.</font></div>
									</div>
									<div class="form-group" align="center">
										<label class="col-md-6 control-label" for="inputDefault"><b><font color="red">Add Meta</font></b></label>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Meta Title</label>
										<div class="col-md-6"><input type="text" class="form-control" name="txttitle" id="txttitle" size="55" required="required" placeholder="Meta Title" value="<?php echo htmlspecialchars($sub_category_master_meta_title,ENT_QUOTES, 'UTF-8');?>"></div>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Meta Description</label>
										<div class="col-md-6"><textarea name="txtdesc" id="txtdesc" class="" rows="4" cols="85" required="required"><?php echo htmlspecialchars($sub_category_master_meta_desc,ENT_QUOTES, 'UTF-8');?></textarea></div>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Meta Keywords</label>
										<div class="col-md-6"><textarea name="txtkeys" id="txtkeys" class="" rows="4" cols="85" required="required"><?php echo htmlspecialchars($sub_category_master_meta_keywords,ENT_QUOTES, 'UTF-8');?></textarea></div>
									</div>
									<div class="form-group">
										<label class="col-md-3 control-label" for="inputSuccess">Status</label>
										<div class="col-md-6">
											<select class="form-control mb-md" id="cbostatus" name="cbostatus" required="required">
												<option value="" selected="selected">Select Status</option>
												<option value="Y" <?php if($stractive == "Y"){ echo "selected"; } ?>>Yes</option>
												<option value="N"  <?php if($stractive == "N"){ echo "selected"; } ?>>No</option>
											</select>
										</div>
									</div>
									<div class="panel-body" align="center">
									<a href="javascript: void(0);" onclick="login()"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Save</button></a>
									<a href="<?php echo $domain?>admin/subcategory-list.php?cid=<?php echo htmlspecialchars($cid,ENT_QUOTES, 'UTF-8');?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
									<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
                  					<input type="hidden" name="txtSID" value="<?php echo htmlspecialchars($sid,ENT_QUOTES, 'UTF-8');?>" />
									<input type="hidden" name="txtCID" value="<?php echo htmlspecialchars($cid,ENT_QUOTES, 'UTF-8');?>" />
                    				<input type="hidden" name="txtadminname" value="<?php echo htmlspecialchars($au_name_top,ENT_QUOTES, 'UTF-8');?>">
                    				<input type="hidden" name="txtolddate" value="<?php echo htmlspecialchars($sub_category_master_date,ENT_QUOTES, 'UTF-8');?>">
                    				<input type="hidden" name="txtadminname1" value="<?php echo htmlspecialchars($au_name_top1,ENT_QUOTES, 'UTF-8');?>">
                    				<input type="hidden" name="txtoldadmin" value="<?php echo htmlspecialchars($admin_name,ENT_QUOTES, 'UTF-8');?>">
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
<script type="text/javascript">
function login(){$('#frm').find('[type="submit"]').trigger('click');}
</script>
<?php include("bottom.php");?>
