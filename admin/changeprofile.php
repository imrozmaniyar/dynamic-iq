<?php
include("top.php");
include("left.php");
$AdminSession_ID = $_SESSION['AdminSession_ID'];
//include(DIR_WS_CLASS."db_admin_parameters.php");
include(DIR_WS_CLASS."messages.php");
$objbmaster = new db_admin_parameters($AdminSession_ID);
$au_name = $objbmaster->get_admin_name();
$au_login = $objbmaster->get_admin_login();
$au_email = $objbmaster->get_admin_email();
$msgId = $_GET['msgid'];
$objMsg = new message ($msgId);
 ?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Change Profile</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Change Profile</span></li>
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
					<form class="form-horizontal form-bordered" id="changepassword" method="post" action="<?php echo $domain?>admin/changepassword_submit.php">
            <div class="form-group" align="left">
            <label class="col-md-3 control-label" for="inputDefault">Admin Name</label>
            <div class="col-md-6"><input type="text" value="<?php echo htmlspecialchars($au_name,ENT_QUOTES, 'UTF-8');?>" id="inputReadOnly" class="form-control" readonly="readonly"></div>
          </div>

		          <div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Admin Login</label>
							<div class="col-md-6"><input type="text" value="<?php echo htmlspecialchars($au_login,ENT_QUOTES, 'UTF-8');?>" id="inputReadOnly" class="form-control" readonly="readonly"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Admin Email</label>
							<div class="col-md-6"><input type="text" value="<?php echo htmlspecialchars($au_email,ENT_QUOTES, 'UTF-8');?>" id="inputReadOnly" class="form-control" readonly="readonly"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Old Password</label>
							<div class="col-md-6"><input class="form-control" type="password" name="txtoldpassword" id="txtoldpassword" size="55" required="required" placeholder="Old Password"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">New Password</label>
							<div class="col-md-6"><input class="form-control" type="password" name="txtnewpassword" id="txtnewpassword" size="55" required="required" placeholder="New Password"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Confirm Password</label>
							<div class="col-md-6"><input class="form-control" type="password" name="txtcpassword" id="txtcpassword" size="55" required="required" placeholder="Confirm Password"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Security Code</label>
							<div class="col-md-6"><input class="form-control" type="text" name="security_code" id="security_code" size="55" required="required" placeholder="Security Code"></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">&nbsp;</label>
							<div class="col-md-6"><img src="<?php echo DIR_WS_ASSETS?>commonfunctions/CaptchaSecurityImages.php?width=100&height=40&characters=6" alt="captcha" class="captcha_img"></div>
						</div>
						<div class="panel-body" align="center">
							<!-- <a href="#"><button type="submit" class="mb-xs mt-xs mr-xs btn btn-default">Change Password</button></a> -->
						 	<button type="submit" class="mb-xs mt-xs mr-xs btn btn-default">Submit</button>
							<a href="<?php echo $domain?>admin/adminhome.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
        					<!-- <input type="submit" value=" " class="hide" /> -->
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script src="<?php echo DIR_WS_ASSETS?>javascripts/md5.js"></script>
<script>
$(document).ready(function() {
    $("#changepassword").on('submit', function() {
	var pass1 = $("#txtnewpassword").val();
	var pass2 = $("#txtcpassword").val();
	if((pass1 !== pass2)){
	    alert("Passwords Don't Match");
	    $("#txtnewpassword").val($(this).val());
	    $("#txtcpassword").val($(this).val());
	    return false;
	}else{
		$("#txtoldpassword").val($.md5($.md5($("#txtoldpassword").val())));
	    $("#txtnewpassword").val($.md5($.md5($("#txtnewpassword").val())));
	    $("#txtcpassword").val($.md5($.md5($("#txtcpassword").val())));
	}

    });
});
</script>
