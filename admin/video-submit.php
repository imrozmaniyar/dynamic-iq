<?php
session_start();
include("secure.php");
include("../configure.php");
require_once('../commonfunctions/function.php');
include_once(DIR_WS_CLASS . "database.php");
include(DIR_WS_CLASS."db_video_master.php");
include(DIR_WS_CLASS."db_dashboard_master.php");

define ("WIDTH","670");////for original image
define ("HEIGHT","440");////for original image

define ("WIDTH1","300");////for large thumbnail
define ("HEIGHT1","200");////for large thumbnail

define ("WIDTH2","180");////for smaill thumnbail
define ("HEIGHT2","120");////for small thumbnail


if(isset($_GET['mode'])):
    $mode = $_GET['mode'];
elseif(isset($_POST['mode'])):
    $mode = $_POST['mode'];
endif;
$objDB     	 = new database;
$link      	 = $objDB->db_connect();
$vid       	 = intval($_POST['txtVID']);
if($mode=='Edit'):
  $video_random_id = intval($_POST['txtrandnumber']);
else:
$six_digit_random_number = mt_rand(100000, 999999);
$video_random_id = $six_digit_random_number;
endif;
$video_name          = mysql_real_escape_string($_POST['txttitle'], $link);
$video_name_home     = mysql_real_escape_string($_POST['txthtitle'], $link);
$video_url    	     = mysql_real_escape_string($_POST['txturl'], $link);
$video_description   = mysql_real_escape_string($_POST['txtstory'], $link);
$video_description1  = str_replace($old_patterniq,$new_patterniq,$video_description);
/*$video_description1  = str_replace(array('onload','alert', 'document', 'cookie', 'onAbort', 'onBlur', 'onChange', 'onClick', 'onDblClick', 'onDragDrop', 'onError', 'onFocus', 'onKeyDown', 'onKeyPress', 'onKeyUp', 'onLoad', 'onMouseDown', 'onMouseMove', 'onMouseOut', 'onMouseOver', 'onMouseUp', 'onMove', 'onReset', 'onResize', 'onSelect', 'onSubmit', 'onUnload', 'SCRIPT SRC', 'IMG SRC', 'document.cookie', 'SCRIPT/SRC', 'iframe src','INPUT TYPE','BODY BACKGROUND','IMG DYNSRC','IMG LOWSRC','<STYLE>','vbscript','livescript:[code]','BODY ONLOAD','BGSOUND SRC','BR SIZE','LINK REL','META HTTP-EQUIV','IMG STYLE','DIV STYLE','TABLE BACKGROUND','BASE HREF','OBJECT TYPE','EMBED SRC','XML ID','XML SRC'), ' ', $video_description);*/
$video_keywords      = mysql_real_escape_string($_POST['txtkeys'], $link);
$video_tags      = mysql_real_escape_string($_POST['txttags'], $link);
$category_id         =  intval($_POST['cbocat']);
$sub_category_id     =  intval($_POST['cbosubcat']);
$sub_sub_category_id =  intval($_POST['cbosubsubcat']);
$admin_name = mysql_real_escape_string($_POST['txtadminname'], $link);
$aname1                   = mysql_real_escape_string($_POST['txtadminname1'], $link);
if($mode=='Edit'):
$video_date = mysql_real_escape_string($_POST['txtDate'], $link);
else:
$video_date = mysql_real_escape_string($_POST['txtdate'], $link);
endif;  
$mdate                    = date('Y-m-d H:i:s');
$video_time = mysql_real_escape_string($_POST['txttime'], $link);
$video_youtube_id = mysql_real_escape_string($_POST['txtyoutubeid'], $link);
$video_image1 = mysql_real_escape_string($_POST['txtPreviousImage1'], $link);
$video_image2 = mysql_real_escape_string($_POST['txtPreviousImage2'], $link);
$video_youtube_id = mysql_real_escape_string($_POST['txtyoutubeid'], $link);
$oldadmin                 = mysql_real_escape_string($_POST['txtoldadmin'], $link);
$olddate                  = mysql_real_escape_string($_POST['txtolddate'], $link);
$vtype = 'online';
$chkactive = mysql_real_escape_string($_POST['cbostatus'], $link);
$objpk = new db_video_master();
$objDB = new db_dashboard_master();
$msgid = 104;
$txtPreviousImage  = mysql_real_escape_string($_POST['txtPreviousImage']);
$txtPreviousImage1 = mysql_real_escape_string($_POST['txtPreviousImage1']);
$txtPreviousImage2 = mysql_real_escape_string($_POST['txtPreviousImage2']);
@list($width, $height, $type, $attr) = @getimagesize($_FILES['txtimage']['tmp_name']);
$image1_size = (filesize($image1_upload)/1024);
$image1_size=number_format($image1_size, 2, '.', '');

if($_FILES['txtimage']['name'] == ""):
    $filetypesuc =1;
else:
    $name = basename($_FILES['txtimage']['name']);
    $type = $_FILES['txtimage']['type'];
    $extension = substr($name, strrpos($name, '.') + 1);
    $filename  = substr($name, 0, strrpos($name, '.'));
    $filetypesuc=0;
  endif;

if($filetypesuc==0):
    if(($type == 'image/png' && $extension == 'PNG') || ($type == 'image/jpeg' && $extension == 'JPG') || ($type == 'image/gif' && $extension == 'GIF') || ($type == 'image/jpeg' && $extension == 'JPEG') || ($type == 'image/gif' && $extension == 'gif') || ($type == 'image/png' && $extension == 'png') || ($type == 'image/jpg' && $extension == 'jpg') || ($type == 'image/jpeg' && $extension =='jpg')):
        $filetypesuc = 1;
    else:
        $filetypesuc = 0;
    endif;
endif;
$image1_upload=$_FILES['txtimage']['tmp_name'];
@list($width, $height, $type, $attr) = @getimagesize($image1_upload);
$image1_size = (filesize($image1_upload)/1024);
$image1_size=number_format($image1_size, 2, '.', '');

if(($image1_size > 2000) || (($width > 50000000) || ($height > 50000000) )):
    $urlredirect = "video-list.php?msgid=$msgid";
    header("Location: $urlredirect");
exit();
else:
if($filetypesuc==1):
switch($mode):
    case "New":
    if($_FILES['txtimage']['name'] == ""):
        $video_image         = "noimage.jpg";
    else:
        $filename           = stripslashes($_FILES['txtimage']['name']);
        $extension          = getExtension($filename);
        $extension          = strtolower($extension);
        $filename1          = stripslashes($_FILES['txtimage']['name']);
        $newFileName        = substr($filename1, 0 , (strrpos($filename1, ".")));
        $video_image        = $newFileName .'_d'. '.' .$extension;
        $video_image1       = $newFileName .'_l'. '.' .$extension;
        $video_image2       = $newFileName .'_s'. '.' .$extension;

        $new_file_name = $video_image;
        $pathname = '../images/' . date("Y") . '/' . date("M") . '/';
        if (!is_dir($pathname)) {
            mkdir($pathname, 0777, true);
        }
        $destination = $pathname . $new_file_name;
        ///for 670 x 440 Size
        $newname            =  $destination;
        $copied             =  copy($_FILES['txtimage']['tmp_name'], $newname);
        $thumb_name_670_440 =  $destination;
        $thumb              =  make_thumb($newname,$thumb_name_670_440,WIDTH,HEIGHT);
        ///for 670 x 440 Size


        $new_file_name1 = $video_image1;
        $pathname1 = '../images/' . date("Y") . '/' . date("M") . '/';
        if (!is_dir($pathname1)) {
            mkdir($pathname1, 0777, true);
        }
        $destination1 = $pathname1 . $new_file_name1;

        ///for 300 x 200 Size
        $newname            = $destination1;
        $copied             = copy($_FILES['txtimage']['tmp_name'], $newname);
        $thumb_name_300_200 = $destination1;
        $thumb              = make_thumb($newname,$thumb_name_300_200,WIDTH1,HEIGHT1);
        ///for 300 x 200 Size

        $new_file_name2 = $video_image2;
        $pathname2 = '../images/' . date("Y") . '/' . date("M") . '/';
        if (!is_dir($pathname2)) {
            mkdir($pathname2, 0777, true);
        }
        $destination2 = $pathname2 . $new_file_name2;



        ///for 180 x 120 Size
        $newname            = $destination2;
        $copied             = copy($_FILES['txtimage']['tmp_name'], $newname);
        $thumb_name_180_120 = $destination2;
        $thumb              = make_thumb($newname,$thumb_name_180_120,WIDTH2,HEIGHT2);
        ///for 180 x 120 Size
    endif;
	        $objpk->Set_video_random_id($video_random_id);
            $objpk->Set_video_name($video_name);
            $objpk->Set_video_name_home($video_name_home);
            $objpk->Set_video_url($video_url);
			$objpk->Set_video_description($video_description1);
            $objpk->Set_video_keywords($video_keywords);
            $objpk->Set_video_tags($video_tags);
            $objpk->Set_category_id($category_id);
            $objpk->Set_sub_category_id($sub_category_id);
            $objpk->Set_sub_sub_category_id($sub_sub_category_id);
            $objpk->Set_admin_name($admin_name);
            $objpk->set_admin_name1('');
            $objpk->Set_video_date($video_date);
            $objpk->Set_video_date1($mdate);
            $objpk->Set_video_time($video_time);
            $objpk->Set_video_image($pathname.$video_image);
            $objpk->Set_video_image1($pathname1.$video_image1);
            $objpk->Set_video_image2($pathname2.$video_image2);
            $objpk->Set_video_youtube_id($video_youtube_id);
            $objpk->Set_video_type($vtype);
            $objpk->set_active($chkactive);
            if($objpk->save()):
                $uid      = mysql_insert_id();
                //echo $uid;
                //die; 
                $objDB->Set_actual_id($uid);
                $objDB->Set_category_id($category_id);
                $objDB->Set_dashboard_name('Videos');
                $objDB->Set_dashboard_date($video_date);
                $objDB->Set_dashboard_published($admin_name);
                $objDB->Set_dashboard_story($vtype);
                $objDB->Set_active($chkactive);
                $objDB->save(); 

                $msgid = 101;
            endif;
    break;
    case "Edit":
        if ($_FILES['txtimage']['name'] == ""):
                    if ($txtPreviousImage != ""):
                        $video_image = $txtPreviousImage;
                    else:
                        $video_image = "noimage.jpg";
                    endif;
                else:
                    $filename           = stripslashes($_FILES['txtimage']['name']);
                    $extension          = getExtension($filename);
                    $extension          = strtolower($extension);
                    $filename1          = stripslashes($_FILES['txtimage']['name']);
                    $newFileName        = substr($filename1, 0 , (strrpos($filename1, ".")));
                    $video_image        = $newFileName .'_d'. '.' .$extension;
                    $video_image1       = $newFileName .'_l'. '.' .$extension;
                    $video_image2       = $newFileName .'_s'. '.' .$extension;
                    $new_file_name = $video_image;
                    $pathname = '../images/' . date("Y") . '/' . date("M") . '/';
                    if (!is_dir($pathname)) {
                        mkdir($pathname, 0777, true);
                    }
                    $destination = $pathname . $new_file_name;
                   ///for 670 x 440 Size
                    $newname            = $destination;
                    $copied             = copy($_FILES['txtimage']['tmp_name'], $newname);
                    $thumb_name_670_440 = $destination;
                    $thumb              = make_thumb($newname,$thumb_name_670_440,WIDTH,HEIGHT);
                    ///for 670 x 440 Size
                    $new_file_name1 = $video_image1;
                    $pathname1 = '../images/' . date("Y") . '/' . date("M") . '/';
                    if (!is_dir($pathname1)) {
                        mkdir($pathname1, 0777, true);
                    }
                    $destination1 = $pathname1 . $new_file_name1;
                    ///for 300 x 200 Size
                    $newname            = $destination1;
                    $copied             = copy($_FILES['txtimage']['tmp_name'], $newname);
                    $thumb_name_300_200 = $destination1;
                    $thumb              = make_thumb($newname,$thumb_name_300_200,WIDTH1,HEIGHT1);
                    ///for 300 x 200 Size
                    $new_file_name2 = $video_image2;
                    $pathname2 = '../images/' . date("Y") . '/' . date("M") . '/';
                    if (!is_dir($pathname2)) {
                        mkdir($pathname2, 0777, true);
                    }
                    $destination2 = $pathname2 . $new_file_name2;
                    ///for 180 x 120 Size
                    $newname            = $destination2;
                    $copied             = copy($_FILES['txtimage']['tmp_name'], $newname);
                    $thumb_name_180_120 = $destination2;
                    $thumb              = make_thumb($newname,$thumb_name_180_120,WIDTH2,HEIGHT2);
                    ///for 180 x 120 Size
                    $ppathname = '../images/' . date("Y") . '/' . date("M") . '/';
                    $pdestination = $ppathname ;
                    @unlink(realpath($pdestination.$txtPreviousImage));
                    @unlink(realpath($pdestination.$txtPreviousImage1));
                    @unlink(realpath($pdestination.$txtPreviousImage2));
        endif;
        $objpk->Set_video_id($vid);
        $objpk->Set_video_random_id($video_random_id);
        $objpk->Set_video_name($video_name);
        $objpk->Set_video_name_home($video_name_home);
        $objpk->Set_video_url($video_url);
        $objpk->Set_video_description($video_description1);
        $objpk->Set_video_keywords($video_keywords);
        $objpk->Set_video_tags($video_tags);
        $objpk->Set_category_id($category_id);
        $objpk->Set_sub_category_id($sub_category_id);
        $objpk->Set_sub_sub_category_id($sub_sub_category_id);
        $objpk->set_admin_name($oldadmin);   
        $objpk->set_admin_name1($aname1);
        $objpk->Set_video_date($olddate);
        $objpk->Set_video_date1($mdate);
        $objpk->Set_video_time($video_time);
        $objpk->Set_video_image($pathname.$video_image);
        $objpk->Set_video_image1($pathname1.$video_image1);
        $objpk->Set_video_image2($pathname2.$video_image2);
        $objpk->Set_video_youtube_id($video_youtube_id);
        $objpk->Set_video_type($vtype);
        $objpk->set_active($chkactive);
            if($objpk->save()):
        	$msgid = 101;
            endif;
    break;
    case "Delete":
    $pathname = '../images/' . date("Y") . '/' . date("M") . '/';
    $destination = $pathname . $new_file_name;
    $Ctrls = $_POST['txtCtrls'];
	for($i=1;$i<=$Ctrls;$i++){
            $Ctrl = "chk$i";
             if($_POST[$Ctrl]):
                $objpk->Set_video_id($_POST[$Ctrl]);
		$strWhere ="video_id =".$_POST[$Ctrl];
		$objgalleries = $objpk->selectAll($strWhere,$cur,$max);
                if($objpk->delete()):
			$delFile = mysql_fetch_object($objgalleries[1]);
			$file_delete=$destination.$delFile->video_image;
			foreach(glob($destination.'*') as $image)
			    {
				if(($delFile->video_image!== "noimage.jpg")):
				    if($file_delete == $image):
					@unlink(realpath($destination.$delFile->video_image));
				    endif;
				endif;
			    }
            $file_delete=$destination.$delFile->video_image1;
            foreach(glob($destination.'*') as $image)
                {
                if(($delFile->video_image1!== "noimage.jpg")):
                    if($file_delete == $image):
                    @unlink(realpath($destination.$delFile->video_image1));
                    endif;
                endif;
                }
            $file_delete=$destination.$delFile->video_image2;
            foreach(glob($destination.'*') as $image)
                {
                if(($delFile->video_image2!== "noimage.jpg")):
                    if($file_delete == $image):
                    @unlink(realpath($destination.$delFile->video_image2));
                    endif;
                endif;
                }
			$msgid = 101;
	        endif;
            endif;
        }
    	break;
endswitch;
    $urlredirect = "video-list.php?msgid=$msgid";
    header("Location: $urlredirect");
    exit();
else:
    $urlredirect = "video-list.php?msgid=$msgid";
    header("Location: $urlredirect");
    exit();
endif;
endif;
