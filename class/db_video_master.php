<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_video_master{
  var $_video_id;
  var $_video_random_id;
  var $_video_name;
  var $_video_name_home;
  var $_video_url;
  var $_video_description;
  var $_video_keywords;
  var $_video_tags;
  var $_category_id;
  var $_sub_category_id;
  var $_sub_sub_category_id;
  var $_admin_name;
  var $_admin_name1;
  var $_video_date;
  var $_video_date1;
  var $_video_time;
  var $_video_image;
  var $_video_image1;
  var $_video_image2;
  var $_video_youtube_id;
  var $_video_type;
  var $_active;
// Class constructor
function db_video_master($id  = NULL){
  $this->_video_id            = NULL;
  $this->_video_random_id     = NULL;
  $this->_video_name          = NULL;
  $this->_video_name_home     = NULL;
  $this->_video_url           = NULL;
  $this->_video_description   = NULL;
  $this->_video_keywords      = NULL;
  $this->_video_tags          = NULL;
  $this->_category_id         = NULL;
  $this->_sub_category_id     = NULL;
  $this->_sub_sub_category_id = NULL;
  $this->_admin_name          = NULL;
  $this->_admin_name1          = NULL;
  $this->_video_date          = NULL;
  $this->_video_date1          = NULL;
  $this->_video_time          = NULL;
  $this->_video_image         = NULL;
  $this->_video_image1        = NULL;
  $this->_video_image2        = NULL;
  $this->_video_youtube_id    = NULL;
  $this->_video_type    = NULL;
  $this->_active              = NULL;

    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_VIDEO_MASTER. " where video_id = %d",$id);
        $objDB                      = new database;
        $objDB                      ->db_connect();
        $o_result                   = $objDB->db_fetch_array($Query);
        $this->_video_id            = $o_result["video_id"];
        $this->_video_random_id     = $o_result["video_random_id"];
        $this->_video_name          = $o_result["video_name"];
        $this->_video_name_home     = $o_result["video_name_home"];
        $this->_video_url           = $o_result["video_url"];
        $this->_video_description   = $o_result["video_description"];
        $this->_video_keywords      = $o_result["video_keywords"];
        $this->_video_tags          = $o_result["video_tags"];
        $this->_category_id         = $o_result["category_id"];
        $this->_sub_category_id     = $o_result["sub_category_id"];
        $this->_sub_sub_category_id = $o_result["sub_sub_category_id"];
        $this->_admin_name          = $o_result["admin_name"];
        $this->_admin_name1          = $o_result["admin_name1"];
        $this->_video_date          = $o_result["video_date"];
        $this->_video_date1          = $o_result["video_date1"];
        $this->_video_time          = $o_result["video_time"];
        $this->_video_image         = $o_result["video_image"];
        $this->_video_image1        = $o_result["video_image1"];
        $this->_video_image2        = $o_result["video_image2"];
        $this->_video_youtube_id    = $o_result["video_youtube_id"];
        $this->_video_type    = $o_result["video_type"];
        $this->_active              = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_video_master';}
    function save(){
        if ($this->_video_id):
            $video_id            = preg_replace('#[^0-9]#i', '', $this->_video_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_VIDEO_MASTER . " SET " .
            "video_random_id     =" . replace_spl_chr($this->_video_random_id) . "," .    
            "video_name          ='" . replace_spl_chr($this->_video_name) . "'," .
            "video_name_home     ='" . replace_spl_chr($this->_video_name_home) . "'," .
            "video_url           ='" . replace_spl_chr($this->_video_url) . "'," .
            "video_description   ='" . replace_spl_chr($this->_video_description) . "'," .
            "video_keywords      ='" . replace_spl_chr($this->_video_keywords) . "'," .
            "video_tags          ='" . replace_spl_chr($this->_video_tags) . "'," .
            "category_id         =" . replace_spl_chr($this->_category_id) . "," .    
            "sub_category_id     =" . replace_spl_chr($this->_sub_category_id) . "," .    
            "sub_sub_category_id =" . replace_spl_chr($this->_sub_sub_category_id) . "," .    
            "admin_name          ='" . replace_spl_chr($this->_admin_name) . "'," .
            "admin_name1          ='" . replace_spl_chr($this->_admin_name1) . "'," .
            "video_date          ='" . replace_spl_chr($this->_video_date) . "'," .
            "video_date1          ='" . replace_spl_chr($this->_video_date1) . "'," .
            "video_time          ='" . replace_spl_chr($this->_video_time) . "'," .
            "video_image         ='" . replace_spl_chr($this->_video_image) . "'," .
            "video_image1        ='" . replace_spl_chr($this->_video_image1) . "'," .
            "video_image2        ='" . replace_spl_chr($this->_video_image2) . "'," .
            "video_youtube_id    ='" . replace_spl_chr($this->_video_youtube_id) . "'," .
            "video_type    ='" . replace_spl_chr($this->_video_type) . "'," .
            
            "active              ='" . $this->_active . "'" .
            "WHERE video_id      =%d", $video_id);
        else:
            //insert
            $Query = "insert into " . TABLE_VIDEO_MASTER .
            "(
                  video_random_id,
                  video_name,
                  video_name_home,
                  video_url,
                  video_description,
                  video_keywords,
                  video_tags,
                  category_id,
                  sub_category_id,
                  sub_sub_category_id,
                  admin_name,
                  admin_name1,
                  video_date,
                  video_date1,
                  video_time,
                  video_image,
                  video_image1,
                  video_image2,
                  video_youtube_id,
                  video_type,
                  active            
            )" .
            "values
            (
                " . replace_spl_chr($this->_video_random_id) . ",
                '" . replace_spl_chr($this->_video_name) . "',
                '" . replace_spl_chr($this->_video_name_home) . "',
                '" . replace_spl_chr($this->_video_url) . "',
                '" . replace_spl_chr($this->_video_description) . "',
                '" . replace_spl_chr($this->_video_keywords) . "',
                '" . replace_spl_chr($this->_video_tags) . "',
                " . replace_spl_chr($this->_category_id) . ",
                " . replace_spl_chr($this->_sub_category_id) . ",
                " . replace_spl_chr($this->_sub_sub_category_id) . ",
                '" . replace_spl_chr($this->_admin_name) . "',
                '" . replace_spl_chr($this->_admin_name1) . "',
                '" . replace_spl_chr($this->_video_date) . "',
                '" . replace_spl_chr($this->_video_date1) . "',
                '" . replace_spl_chr($this->_video_time) . "',
                '" . replace_spl_chr($this->_video_image) . "',
                '" . replace_spl_chr($this->_video_image1) . "',
                '" . replace_spl_chr($this->_video_image2) . "',
                '" . replace_spl_chr($this->_video_youtube_id) . "',
                '" . replace_spl_chr($this->_video_type) . "',
                '" . $this->_active . "'
            )";
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
	/////////Select All function Begins//////////////////////////////////////
    function selectAll($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_VIDEO_MASTER . $strWhere . " order by video_id DESC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_VIDEO_MASTER.$strWhere." order by video_id DESC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////
function selectAllGroup($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select DISTINCT admin_name from video_master";
        //SELECT DISTINCT product_type FROM produk2
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_video_id):
            $video_id = preg_replace('#[^0-9]#i', '', $this->_video_id);
            $Query = sprintf("Delete from " . TABLE_VIDEO_MASTER . " where video_id =%d",$video_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_video_id(){return $this->_video_id;}
    function Get_video_random_id(){return $this->_video_random_id;}
    function Get_video_name(){return $this->_video_name;}
    function Get_video_name_home(){return $this->_video_name_home;}
    function Get_video_url(){return $this->_video_url;}
    function Get_video_description(){return $this->_video_description;}
    function Get_video_keywords(){return $this->_video_keywords;}
    function Get_video_tags(){return $this->_video_tags;}
    function Get_category_id(){return $this->_category_id;}
    function Get_sub_category_id(){return $this->_sub_category_id;}
    function Get_sub_sub_category_id(){return $this->_sub_sub_category_id;}
    function Get_admin_name(){return $this->_admin_name;}
    function Get_admin_name1(){return $this->_admin_name1;}
    function Get_video_date(){return $this->_video_date;}
    function Get_video_date1(){return $this->_video_date1;}
    function Get_video_time(){return $this->_video_time;}
    function Get_video_image(){return $this->_video_image;}
    function Get_video_image1(){return $this->_video_image1;}
    function Get_video_image2(){return $this->_video_image2;}
    function Get_video_youtube_id(){return $this->_video_youtube_id;}
    function Get_video_type(){return $this->_video_type;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_video_id($_video_id){$this->_video_id = $_video_id;}
    function Set_video_random_id($_video_random_id){$this->_video_random_id = $_video_random_id;}
    function Set_video_name($_video_name){$this->_video_name = $_video_name;}
    function Set_video_name_home($_video_name_home){$this->_video_name_home = $_video_name_home;}
    function Set_video_url($_video_url){$this->_video_url = $_video_url;}
    function Set_video_description($_video_description){$this->_video_description = $_video_description;}
    function Set_video_keywords($_video_keywords){$this->_video_keywords = $_video_keywords;}
    function Set_video_tags($_video_tags){$this->_video_tags = $_video_tags;}
    function Set_category_id($_category_id){$this->_category_id = $_category_id;}
    function Set_sub_category_id($_sub_category_id){$this->_sub_category_id = $_sub_category_id;}
    function Set_sub_sub_category_id($_sub_sub_category_id){$this->_sub_sub_category_id = $_sub_sub_category_id;}
    function Set_admin_name($_admin_name){$this->_admin_name = $_admin_name;}
    function Set_admin_name1($_admin_name1){$this->_admin_name1 = $_admin_name1;}
    function Set_video_date($_video_date){$this->_video_date = $_video_date;}
    function Set_video_date1($_video_date1){$this->_video_date1 = $_video_date1;}
    function Set_video_time($_video_time){$this->_video_time = $_video_time;}
    function Set_video_image($_video_image){$this->_video_image = $_video_image;}
    function Set_video_image1($_video_image1){$this->_video_image1 = $_video_image1;}
    function Set_video_image2($_video_image2){$this->_video_image2 = $_video_image2;}
    function Set_video_youtube_id($_video_youtube_id){$this->_video_youtube_id = $_video_youtube_id;}
    function Set_video_type($_video_type){$this->_video_type = $_video_type;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
