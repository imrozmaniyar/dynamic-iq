<?php
include("top.php");
include("left.php");
?>
<section role="main" class="content-body">
	<header class="page-header">
	<h2>Not Authorized</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Not Authorized</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
          <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="<?php echo $domain?>vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead align="center"><img src="<?php echo DIR_WS_ASSETS?>images/unauthorized-access.png" alt="unauthorized-access" title="unauthorized-access"/ width="900px;" style="margin-left: 183px;"></thead>
          </table>
				</div>
			</section>
		</div>
	</div>
	<!-- end: page -->
</section>
</div>
<?php include("right.php");?>
<?php include("bottom.php");?>
