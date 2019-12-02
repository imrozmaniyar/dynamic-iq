<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(6,$AdminSession_ID,$AdminSession_NAME);
include(DIR_WS_CLASS."db_gallery_master.php");
include(DIR_WS_CLASS."db_gallery_child.php");
$gid = intval($_GET['gid']);
$objh = new db_gallery_master($gid);
$title = $objh->Get_gallery_name();
$randno = $objh->Get_gallery_random_id();
if(isset($_GET['gcid'])):
	$mode ="Edit";
	$gcid = intval($_GET['gcid']);
else:
	$mode="New";
endif;
$objbmaster = new db_gallery_child($gcid);
$gallery_child_tags = $objbmaster->get_gallery_child_tags();
$gallery_child_keywords = $objbmaster->get_gallery_child_keywords();
$gallery_child_caption = $objbmaster->get_gallery_child_caption();
$gallery_child_image = $objbmaster->get_gallery_child_image();
$gallery_child_image1 = $objbmaster->get_gallery_child_image1();
$gallery_child_image2 = $objbmaster->get_gallery_child_image2();
$position = $objbmaster->get_position();
$stractive = $objbmaster->Get_active();
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Gallery Images for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<!-- <li><span>Gallery Images for : <?php echo htmlspecialchars($title,ENT_QUOTES, 'UTF-8')?></span></li> -->
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="gallery-child-submit.php" id="frm" name="frm" enctype="multipart/form-data">
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Tags</label>
										<div class="col-md-6"><textarea name="txttags" id="txttags" class="" rows="4" cols="85" required="required"><?php echo htmlspecialchars($gallery_child_tags,ENT_QUOTES, 'UTF-8');?></textarea></div>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Keywords</label>
										<div class="col-md-6"><textarea name="txtkeys" id="txtkeys" class="" rows="4" cols="85" required="required"><?php echo htmlspecialchars($gallery_child_keywords,ENT_QUOTES, 'UTF-8');?></textarea></div>
									</div>

									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Caption<br><font color='Red'><b>Type on : <a href="http://www.write-urdu.com/" target="_blank" style="text-decoration:none; text-decoration-color:red; ">http://www.write-urdu.com/</a></b></font></label>
										<div class="col-md-6"><textarea class="" name="txtstory"  id="txtstory" rows="20" cols="80" ><?php echo htmlspecialchars($gallery_child_caption,ENT_QUOTES, 'UTF-8');?></textarea></div>
									</div>
									<?php if($mode=="Edit"):
										$pathname = 'images/' . date("Y") . '/' . date("M") . '/';
									?>
										<div class="form-group" align="left">
											<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  Real Size</label>
											<div class="col-md-6"><img src="<?php echo htmlspecialchars($gallery_child_image,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
										</div>
										<div class="form-group" align="left">
											<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  300(W) X 200(H)</label>
											<div class="col-md-6"><img src="<?php echo htmlspecialchars($gallery_child_image1,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
										</div>
										<div class="form-group" align="left">
											<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  180(W) X 120(H)</label>
											<div class="col-md-6"><img src="<?php echo htmlspecialchars($gallery_child_image2,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
										</div>
									<?php endif;?>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault">Upload Image</label>
										<?php if($mode=="New"):?>
										<div class="col-md-6"><input type="file" class="form-control" name="txtimage" id="file" value="" required="required"></div>
									<?php else:?>
										<div class="col-md-6"><input type="file" class="form-control" name="txtimage" id="file" value=""></div>
									<?php endif?>
									</div>
									<div class="form-group" align="left">
										<label class="col-md-3 control-label" for="inputDefault"></label>
										<div class="col-md-6"><font color="red">Note : Max 2MB upload allowed.</font></div>
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
									<a href="<?php echo $domain?>admin/gallery-child-list.php?gid=<?php echo htmlspecialchars($gid,ENT_QUOTES, 'UTF-8');?>"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
									<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
                  					<input type="hidden" name="txtGID" value="<?php echo htmlspecialchars($gid,ENT_QUOTES, 'UTF-8');?>" />
									<input type="hidden" name="txtGCID" value="<?php echo htmlspecialchars($gcid,ENT_QUOTES, 'UTF-8');?>" />
									<input type="hidden" name="txtRANDNO" value="<?php echo htmlspecialchars($randno,ENT_QUOTES, 'UTF-8');?>" />
									<input type="hidden" name="txtPreviousImage" value="<?php echo htmlspecialchars($gallery_child_image,ENT_QUOTES, 'UTF-8');?>">
									<input type="hidden" name="txtPreviousImage1" value="<?php echo htmlspecialchars($gallery_child_image1,ENT_QUOTES, 'UTF-8');?>">
									<input type="hidden" name="txtPreviousImage2" value="<?php echo htmlspecialchars($gallery_child_image2,ENT_QUOTES, 'UTF-8');?>">
									<input type="hidden" name="txtposition" value="<?php echo htmlspecialchars($position,ENT_QUOTES, 'UTF-8');?>">
									
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
<script type="text/javascript" src="<?php echo $domain?>commonfunctions/tinymce/js/tinymce/tinymce.min.js"></script>
 <script type="text/javascript">
 tinymce.init({
		 selector: "#txtstory",
		   extended_valid_elements : "script[src|async|defer|type|charset]",
		 themes: "modern",
		 plugins: [
				 "advlist autolink lists link image charmap print preview anchor",
				 "searchreplace visualblocks code fullscreen",
				 "insertdatetime media table contextmenu paste"
		 ],
		 toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
 });


 $("#frm").submit( function() {
	 var content = tinymce.get('txtstory').getContent({format: 'text'});
	 if($.trim(content) == '')
	 {
	    alert('Gallery Description Cannot Be Blank');
			return false;
	 }
 });

var uploadField = document.getElementById("file");
uploadField.onchange = function() {
    if(this.files[0].size > 2000000){
       alert("File size exceeds 2 MB");
       this.value = "";
       return false;
    };
};

    function login(){$('#frm').find('[type="submit"]').trigger('click');}
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script>
	(function($) {
    $.fn.checkFileType = function(options) {
        var defaults = {
            allowedExtensions: [],
            success: function() {},
            error: function() {}
        };
        options = $.extend(defaults, options);

        return this.each(function() {

            $(this).on('change', function() {
                var value = $(this).val(),
                    file = value.toLowerCase(),
                    extension = file.substring(file.lastIndexOf('.') + 1);

                if ($.inArray(extension, options.allowedExtensions) == -1) {
                    options.error();
                    $(this).focus();
                } else {
                    options.success();

                }

            });

        });
    };

})(jQuery);

$(function() {
    $('#file').checkFileType({
        allowedExtensions: ['jpg', 'jpeg', 'png'],
        success: function() {
            //alert('Success');
        },
        error: function() {
            alert('Only JPG and PNG Files allowed');
            file.value="";
        }
    });

});	
</script>