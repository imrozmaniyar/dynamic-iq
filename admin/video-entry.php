<?php
include("top.php");
include("left.php");
$retValue = CheckAccess(5,$AdminSession_ID,$AdminSession_NAME);
include(DIR_WS_CLASS."db_video_master.php");
include(DIR_WS_CLASS."db_category_master.php");
include(DIR_WS_CLASS."messages.php");
if(isset($_GET['vid'])):
	$mode ="Edit";
	$id = intval($_GET['vid']);
else:
	$mode="New";
endif;
$objbmaster 		 = new db_video_master($id);
$video_random_id 	 = $objbmaster->get_video_random_id();
$video_name 		 = $objbmaster->get_video_name();
$video_name_home	 = $objbmaster->get_video_name_home();
$video_url 		     = $objbmaster->get_video_url();
$video_description   = $objbmaster->get_video_description();
$video_keywords      = $objbmaster->get_video_keywords();
$video_tags          = $objbmaster->get_video_tags();
$category_id 		 = $objbmaster->get_category_id();
$sub_category_id 	 = $objbmaster->get_sub_category_id();
$sub_sub_category_id = $objbmaster->get_sub_sub_category_id();
$admin_name 		 = $objbmaster->get_admin_name();
$admin_name1 	     = $objbmaster->get_admin_name1();
$video_date 		 = $objbmaster->get_video_date();
$time          		 = strtotime($video_date);
$month         		 = date("M",$time);
$year          		 = date("Y",$time);
$video_date1 		 = $objbmaster->get_video_date1();
$video_date1 		 = date("m/d/Y", strtotime($video_date1) );
$video_time 		 = $objbmaster->get_video_time();
$video_time  	     = date("g:i a", strtotime($video_time));
$video_image 		 = $objbmaster->get_video_image();
$video_image1 		 = $objbmaster->get_video_image1();
$video_image2 		 = $objbmaster->get_video_image2();
$video_youtube_id    = $objbmaster->get_video_youtube_id();
$stractive			 = $objbmaster->Get_active();
?>
<section role="main" class="content-body">
	<header class="page-header">
		<h2>Video Entry</h2>
		<div class="right-wrapper pull-right">
			<ol class="breadcrumbs">
				<li><a href="adminhome.php"><i class="fa fa-home"></i></a></li>
				<li><span>Video Entry</span></li>
			</ol>
			<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
		</div>
	</header>
	<!-- start: page -->
	<div class="row">
		<div class="col-md-6 col-lg-12 col-xl-6">
			<section class="panel">
				<div class="panel-body">
					<form class="form-horizontal form-bordered" method="post" action="video-submit.php" id="frm" name="frm" enctype="multipart/form-data">
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Video Title</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txttitle" id="txttitle" size="55" required="required" placeholder="Video title" data-plugin-maxlength maxlength="100" value="<?php echo htmlspecialchars($video_name,ENT_QUOTES, 'UTF-8');?>"><p><code>Count</code> 100.</p></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Video Title Homepage</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txthtitle" id="txthtitle" size="55" required="required" placeholder="Video title" data-plugin-maxlength maxlength="80" value="<?php echo htmlspecialchars($video_name_home,ENT_QUOTES, 'UTF-8');?>"><p><code>Count</code> 80.</p></div>
						</div>
						<?php if($mode=='Edit'):?>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Video Page URL</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txturl" id="txturl" size="55" required="required" placeholder="Video Page URL" value="<?php echo htmlspecialchars($video_url,ENT_QUOTES, 'UTF-8');?>" readonly><br><font color="red">Note : Page URL should be in english only.</font></div>
						</div>
						<?php else:?>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Video Page URL</label>
							<div class="col-md-6"><input type="text" class="form-control" name="txturl" id="txturl" size="55" required="required" placeholder="Video Page URL" value="<?php echo htmlspecialchars($video_url,ENT_QUOTES, 'UTF-8');?>"><br><font color="red">Note : Page URL should be in english only.</font></div>
						</div>
						<?php endif;?>
						
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Video Description<br><font color='Red'><b>Type on : <a href="http://www.write-urdu.com/" target="_blank" style="text-decoration:none; text-decoration-color:red; ">http://www.write-urdu.com/</a></b></font></label>
							<div class="col-md-6"><textarea class="" name="txtstory"  id="txtstory" rows="20" cols="80" ><?php echo htmlspecialchars($video_description,ENT_QUOTES, 'UTF-8');?></textarea></div>
						</div>

						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Keywords</label>
							<div class="col-md-6"><textarea name="txtkeys" id="txtkeys" class="" rows="4" cols="85"><?php echo htmlspecialchars($video_keywords,ENT_QUOTES, 'UTF-8');?></textarea></div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Alt Tag</label>
							<div class="col-md-6"><textarea name="txttags" id="txttags" class="" rows="4" cols="85"><?php echo htmlspecialchars($video_tags,ENT_QUOTES, 'UTF-8');?></textarea></div>
						</div>
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
	                                        <?php if($fetch_gener->category_master_id==$category_id){ echo "selected"; }?>>
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
						<div class="form-group" align="left">
							<label class="col-md-3 control-label" for="inputDefault">Publish Date</label>
								<div class="col-md-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</span>
										<?php if($mode=="Edit"):?>
										<input type="text" name="txtDate" id="txtDate"  required="required" readonly value="<?php echo htmlspecialchars($video_date1,ENT_QUOTES, 'UTF-8');?>">
										<?php else:?>
										<input type='text' id='txtdate' name='txtdate' required="required" readonly/>
										<?php endif;?>										
									</div>
								</div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label">Publish Time</label>
							<div class="col-md-6">
								<div class="input-group">
									<span class="input-group-addon">
										<i class="fa fa-clock-o"></i>
									</span>
									<?php if($mode=='Edit'):?>
									<input type="text" data-plugin-timepicker class="form-control"  name="txttime" id="txttime" value="<?php echo htmlspecialchars($video_time,ENT_QUOTES, 'UTF-8');?>">
									<?php else:?>
									<input type="text" data-plugin-timepicker class="form-control" name="txttime" id="txttime">
									<?php endif;?>								
								</div>
							</div>
						</div>
						<div class="form-group" align="left">
							<label class="col-md-3 control-label">Youtube Video ID</label>
							<div class="col-md-6">
								<input class="form-control" data-plugin-maxlength maxlength="11" name="txtyoutubeid" id="txtyoutubeid" required="required" pattern=".{11}" value="<?php echo htmlspecialchars($video_youtube_id,ENT_QUOTES, 'UTF-8');?>" />
									<p><code>Count</code> set to 11.</p>
							</div>
						</div>
						<?php if($mode=="Edit"):
							$pathname = 'images/' . date("Y") . '/' . date("M") . '/';
							?>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  670(W) X 440(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($video_image,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
							</div>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  300(W) X 200(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($video_image1,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
							</div>
							<div class="form-group" align="left">
								<label class="col-md-3 control-label" for="inputDefault">Uploaded Image  180(W) X 120(H)</label>
								<div class="col-md-6"><img src="<?php echo htmlspecialchars($video_image2,ENT_QUOTES, 'UTF-8');?>" border="0" width="100"></div>
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
							<a href="<?php echo $domain?>admin/video-list.php"><button type="button" class="mb-xs mt-xs mr-xs btn btn-default">Cancel</button></a>
							<input type="hidden" name="mode" value="<?php echo htmlspecialchars($mode,ENT_QUOTES, 'UTF-8');?>" />
            				<input type="hidden" name="txtVID" value="<?php echo htmlspecialchars($id,ENT_QUOTES, 'UTF-8');?>" />
							<input type="hidden" name="txtPreviousImage" value="<?php echo htmlspecialchars($video_image,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtPreviousImage1" value="<?php echo htmlspecialchars($video_image1,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtPreviousImage2" value="<?php echo htmlspecialchars($video_image2,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtrandnumber" value="<?php echo htmlspecialchars($video_random_id,ENT_QUOTES, 'UTF-8');?>">
							<input type="hidden" name="txtadminname" value="<?php echo htmlspecialchars($au_name_top,ENT_QUOTES, 'UTF-8');?>">
            				<input type="hidden" name="txtadminname1" value="<?php echo htmlspecialchars($au_name_top1,ENT_QUOTES, 'UTF-8');?>">
            				<input type="hidden" name="txtoldadmin" value="<?php echo htmlspecialchars($admin_name,ENT_QUOTES, 'UTF-8');?>">
            				<input type="hidden" name="txtolddate" value="<?php echo htmlspecialchars($video_date,ENT_QUOTES, 'UTF-8');?>">
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


 $("#frm").submit( function() {
	 var content = tinymce.get('txtstory').getContent({format: 'text'});
	 if($.trim(content) == '')
	 {
	    alert('Video Description Cannot Be Blank');
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
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js" type="text/javascript"></script>
<script>

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
                $("#cbosubcat option[value=<?php echo $sub_category_id?>]").attr('selected','selected');


            },
        });
    });
    <?php if($mode=='Edit'):?>
    	$('#cbocat').trigger('change');
    <?php endif; ?>
});




$(document).ready(function(){

    $('#cbosubcat').on("change",function () {
        var categoryId = $('#cbocat').find('option:selected').val();

	<?php if($mode=='Edit'):?>
    	 var SubcategoryId = <?php echo $sub_category_id?>;
    <?php else:?>
    	var SubcategoryId = $(this).find('option:selected').val();
    <?php endif; ?>

        $.ajax({
            url: "pop-subsubcat.php",
            type: "POST",
			data: 'categoryId='+categoryId+'&SubcategoryId='+SubcategoryId,
            success: function (response) {
                //alert(response);
                $("#cbosubsubcat").html(response);
                $("#cbosubsubcat option[value=<?php echo $sub_sub_category_id?>]").attr('selected','selected');

            },
        });
    });
	<?php if($mode=='Edit'):?>
    	$('#cbosubcat').trigger('change');
    <?php endif; ?>
});
</script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>

<script type="text/javascript" src="//code.jquery.com/ui/1.8.18/jquery-ui.min.js"></script>

      <link rel="stylesheet" type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.9/themes/sunny/jquery-ui.css">
<script type="text/javascript">//<![CDATA[

$(window).load(function(){

$(document).ready(function() {
$('#txtdate').datepicker();
$('#txtdate').datepicker('setDate', 'today');
});

});

//]]></script>
<script type="text/javascript">//<![CDATA[

$(window).load(function(){

$(document).ready(function() {
$('#txtDate').datepicker();
});

});

//]]>
	
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