<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(7,$AdminSession_ID,$AdminSession_NAME);
include(DIR_WS_CLASS."db_tag_master.php");
include(DIR_WS_CLASS."messages.php");
if(isset($_GET['tid'])):
	$mode ="Edit";
	$id = intval($_GET['tid']);
else:
	$mode="New";
endif;
$objbmaster 		 = new db_tag_master($id);
$tag_name 	 		 = $objbmaster->get_tag_name();
$tag_description     = $objbmaster->get_tag_description();
$tag_date	         = $objbmaster->get_tag_date();
$time          	     = strtotime($tag_date);
$month         	 	 = date("M",$time);
$year          	 	 = date("Y",$time);
$tag_image 		     = $objbmaster->get_tag_image();
$tag_image1 		 = $objbmaster->get_tag_image1();
$tag_image2 		 = $objbmaster->get_tag_image2();
$stractive			 = $objbmaster->Get_active();
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Tags Entry</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Tags Entry</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="tag-submit.php" id="frm" name="frm" enctype="multipart/form-data">
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Tags Title</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txttitle" id="txttitle" size="55" required="required" placeholder="Tags title" value="<?php echo htmlspecialchars($tag_name,ENT_QUOTES, 'UTF-8');?>"></div>
						</div>
						
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Tags Description<br><font color='Red'><b>Type on : <a href="http://www.write-urdu.com/" target="_blank" style="text-decoration:none; text-decoration-color:red; ">http://www.write-urdu.com/</a></b></font></label>
							<div class="col-md-6"><textarea class="ckeditor" name="txtstory"  id="txtstory" rows="20" cols="80" ><?php echo htmlspecialchars($tag_description,ENT_QUOTES, 'UTF-8');?></textarea></div>
						</div>
						<?php if($mode=="Edit"):
							//$pathname = 'images/' . date("Y") . '/' . date("M") . '/';
							?>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  670(W) X 440(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($tag_image,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
							</div>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  300(W) X 200(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($tag_image1,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
							</div>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  180(W) X 120(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($tag_image2,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
							</div>
						<?php endif;?>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Upload Image</label>
							<?php if($mode=="New"):?>
							<div class="col-md-6"><input type="file" class="form-control" name="txtimage" id="txtimage" value="" required="required"></div>
						<?php else:?>
							<div class="col-md-6"><input type="file" class="form-control" name="txtimage" id="txtimage" value=""></div>
						<?php endif?>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault"></label>
							<div class="col-md-6"><font color="red">Note : If the image exceeds 675(W) X 450(H) pixels and the size exceeds 2 MB. Entry will not be added in the database and your operation will be failed.</font></div>
						</div>
						<div class="form-group" align="left">
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
							<button type="submit" class="mb-xs mt-xs mr-xs btn btn-default">Save</button>
							<a href="<?php echo $domain?>admin/tag-list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
							<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
            				<input type="hidden" name="txtTID" value="<?php echo htmlspecialchars($id,ENT_QUOTES, 'UTF-8');?>" />
							<input type="hidden" name="txtPreviousImage" value="<?php echo htmlspecialchars($tag_image,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtPreviousImage1" value="<?php echo htmlspecialchars($tag_image1,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtPreviousImage2" value="<?php echo htmlspecialchars($tag_image2,ENT_QUOTES, 'UTF-8');?>">
						
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
	   	width : "875px",
		 themes: "modern",
		 plugins: [
				 "advlist autolink lists link image charmap print preview anchor",
				 "searchreplace visualblocks code fullscreen",
				 "insertdatetime media table contextmenu paste"
		 ],
		 toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		  /* enable title field in the Image dialog*/
  image_title: true,
  /* enable automatic uploads of images represented by blob or data URIs*/
  automatic_uploads: true,
  /*
    URL of our upload handler (for more details check: https://www.tiny.cloud/docs/configure/file-image-upload/#images_upload_url)*/
    images_upload_url: 'postAcceptor.php',
    /*here we add custom filepicker only to Image dialog
  */
  file_picker_types: 'image',
  /* and here's our custom image picker*/
  file_picker_callback: function (cb, value, meta) {
    var input = document.createElement('input');
    input.setAttribute('type', 'file');
    input.setAttribute('accept', 'image/*');

    /*
      Note: In modern browsers input[type="file"] is functional without
      even adding it to the DOM, but that might not be the case in some older
      or quirky browsers like IE, so you might want to add it to the DOM
      just in case, and visually hide it. And do not forget do remove it
      once you do not need it anymore.
    */

    input.onchange = function () {
      var file = this.files[0];

      var reader = new FileReader();
      reader.onload = function () {
        /*
          Note: Now we need to register the blob in TinyMCEs image blob
          registry. In the next release this part hopefully won't be
          necessary, as we are looking to handle it internally.
        */
        var id = 'blobid' + (new Date()).getTime();
        var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        var base64 = reader.result.split(',')[1];
        var blobInfo = blobCache.create(id, file, base64);
        blobCache.add(blobInfo);

        /* call the callback and populate the Title field with the file name */
        cb(blobInfo.blobUri(), { title: file.name });
      };
      reader.readAsDataURL(file);
    };

    input.click();
  } 
 });
    function login(){$('#frm').find('[type="submit"]').trigger('click');}
</script>