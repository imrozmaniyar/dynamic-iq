<?php
include("top.php");
include("left.php");
if($_SESSION['Auserid']==1):
$retValue = CheckAccess(1,$AdminSession_ID,$AdminSession_NAME);
//include(DIR_WS_CLASS."db_admin_parameters.php");
include(DIR_WS_CLASS."messages.php");

if(isset($_GET['aid']))
{
	$mode="Edit";
	$id= intval($_GET['aid']);
}else{
	$mode="New";
}
$objbmaster = new db_admin_parameters($id);
$au_name    = $objbmaster->get_admin_name();
$au_login   = $objbmaster->get_admin_login();
$au_email   = $objbmaster->get_admin_email();
$au_role    = $objbmaster->get_admin_role();
$stractive  = $objbmaster->Get_active();
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Users Entry</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Users Entry</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="admin_user_submit.php" id="frm" name="frm">
								<div class="form-group" align="left">
									<label class="col-md-3 control-label" for="inputDefault">User Name</label>
									<div class="col-md-6"><input type="text" class="form-control" name="txtaname" id="txtaname" size="55" required="required" placeholder="User Name" value="<?php echo htmlspecialchars($au_name,ENT_QUOTES, 'UTF-8');?>"></div>
								</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">User Login</label>
										<div class="col-md-6"><input type="text" class="form-control" name="txtname" id="txtname" size="55" required="required" placeholder="User Login" value="<?php echo htmlspecialchars($au_login,ENT_QUOTES, 'UTF-8');?>"></div>
									</div>
									<?php if($mode=='New'):?>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">User Password</label>
										<div class="col-md-6"><input class="form-control" type="password" name="txtpassword" id="txtpassword" size="55" required="required" placeholder="User Password"></div>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Confirm Password</label>
										<div class="col-md-6"><input class="form-control" type="password" name="txtcpassword" id="txtcpassword" size="55" required="required" placeholder="Confirm Password"></div>
									</div>
									<?php endif; ?>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">User Email</label>
										<div class="col-md-6"><input class="form-control" type="email" name="txtemail" id="txtemail" size="55" required="required" placeholder="User Email" value="<?php echo htmlspecialchars($au_email,ENT_QUOTES, 'UTF-8');?>"></div>
									</div>
									<div class="form-group">
												<label class="col-md-3 control-label" for="inputSuccess">User Type/Role</label>
												<div class="col-md-6">
													<select class="form-control mb-md" id="cbocat" name="cbocat" required="required">
														<option value="" selected="selected">User Type/Role</option>
														<option value="Administrator" <?php if($au_role == "Administrator"){ echo "selected"; } ?>>Administrator</option>
														<option value="Editor" <?php if($au_role == "Editor"){ echo "selected"; } ?>>Editor</option>
														<option value="Writer" <?php if($au_role == "Writer"){ echo "selected"; } ?>>Writer</option>
														<option value="Viewer" <?php if($au_role == "Viewer"){ echo "selected"; } ?>>Viewer</option>
													</select>
												</div>
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
									<a href="<?php echo $domain?>admin/admin_users_list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
									<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
                    				<input type="hidden" name="txtAID" value="<?php echo htmlspecialchars($id,ENT_QUOTES, 'UTF-8');?>" />
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
</script>

<?php
else:?>
	<script type='text/javascript'>window.location.href = '<?php echo $domain?>admin/error-page.php';</script>
<?php endif;?>
<?php include("bottom.php");?>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo DIR_WS_ASSETS?>javascripts/md5.js"></script>
<script>
function login()
{
	$('#frm').find('[type="submit"]').trigger('click');
}

$(document).ready(function() {
    $("#frm").on('submit', function() {
	var pass1 = $("#txtpassword").val();
	var pass2 = $("#txtcpassword").val();
	if((pass1 !== pass2)){
	    alert("Passwords Don't Match");
	    $("#txtpassword").val($(this).val());
	    $("#txtcpassword").val($(this).val());
	    return false;
	}else{
	    $("#txtpassword").val($.md5($.md5($("#txtpassword").val())));
	    $("#txtcpassword").val($.md5($.md5($("#txtcpassword").val())));
	}

    });
});
</script>
