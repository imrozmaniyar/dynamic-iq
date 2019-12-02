<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_gallery_master{
  var $_gallery_id;
  var $_gallery_random_id;
  var $_gallery_name;
  var $_gallery_name_home;
  var $_gallery_url;
  var $_gallery_description;
  var $_gallery_keywords;
  var $_gallery_tags;
  var $_category_id;
  var $_sub_category_id;
  var $_sub_sub_category_id;
  var $_admin_name;
  var $_admin_name1;
  var $_gallery_date;
  var $_gallery_date1;  
  var $_gallery_time;
  var $_gallery_image;
  var $_gallery_image1;
  var $_gallery_image2;
  var $_gallery_type;
  var $_active;
// Class constructor
function db_gallery_master($id  = NULL){
  $this->_gallery_id            = NULL;
  $this->_gallery_random_id     = NULL;
  $this->_gallery_name          = NULL;
  $this->_gallery_name_home     = NULL;
  $this->_gallery_url           = NULL;
  $this->_gallery_description   = NULL;
  $this->_gallery_keywords      = NULL;
  $this->_gallery_tags      = NULL;
  $this->_category_id         = NULL;
  $this->_sub_category_id     = NULL;
  $this->_sub_sub_category_id = NULL;
  $this->_admin_name          = NULL;
  $this->_admin_name1          = NULL;
  $this->_gallery_date          = NULL;
  $this->_gallery_date1          = NULL;
  $this->_gallery_time          = NULL;
  $this->_gallery_image         = NULL;
  $this->_gallery_image1        = NULL;
  $this->_gallery_image2        = NULL;
  $this->_gallery_type        = NULL;
  $this->_active              = NULL;

    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_GALLERY_MASTER. " where gallery_id = %d",$id);
        $objDB                      = new database;
        $objDB                      ->db_connect();
        $o_result                   = $objDB->db_fetch_array($Query);
        $this->_gallery_id            = $o_result["gallery_id"];
        $this->_gallery_random_id     = $o_result["gallery_random_id"];
        $this->_gallery_name          = $o_result["gallery_name"];
        $this->_gallery_name_home          = $o_result["gallery_name_home"];
        $this->_gallery_url           = $o_result["gallery_url"];
        $this->_gallery_description   = $o_result["gallery_description"];
        $this->_gallery_keywords      = $o_result["gallery_keywords"];
        $this->_gallery_tags      = $o_result["gallery_tags"];
        $this->_category_id         = $o_result["category_id"];
        $this->_sub_category_id     = $o_result["sub_category_id"];
        $this->_sub_sub_category_id = $o_result["sub_sub_category_id"];
        $this->_admin_name          = $o_result["admin_name"];
        $this->_admin_name1          = $o_result["admin_name1"];
        $this->_gallery_date          = $o_result["gallery_date"];
        $this->_gallery_date1          = $o_result["gallery_date1"];
        $this->_gallery_time          = $o_result["gallery_time"];
        $this->_gallery_image         = $o_result["gallery_image"];
        $this->_gallery_image1        = $o_result["gallery_image1"];
        $this->_gallery_image2        = $o_result["gallery_image2"];
        $this->_gallery_type        = $o_result["gallery_type"];
        $this->_active              = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_gallery_master';}
    function save(){
        if ($this->_gallery_id):
            $gallery_id            = preg_replace('#[^0-9]#i', '', $this->_gallery_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_GALLERY_MASTER . " SET " .
            "gallery_random_id     =" . replace_spl_chr($this->_gallery_random_id) . "," .    
            "gallery_name          ='" . replace_spl_chr($this->_gallery_name) . "'," .
            "gallery_name_home          ='" . replace_spl_chr($this->_gallery_name_home) . "'," .
            "gallery_url           ='" . replace_spl_chr($this->_gallery_url) . "'," .
            "gallery_description   ='" . replace_spl_chr($this->_gallery_description) . "'," .
            "gallery_keywords      ='" . replace_spl_chr($this->_gallery_keywords) . "'," .
            "gallery_tags      ='" . replace_spl_chr($this->_gallery_tags) . "'," .
            "category_id         =" . replace_spl_chr($this->_category_id) . "," .    
            "sub_category_id     =" . replace_spl_chr($this->_sub_category_id) . "," .    
            "sub_sub_category_id =" . replace_spl_chr($this->_sub_sub_category_id) . "," .    
            "admin_name          ='" . replace_spl_chr($this->_admin_name) . "'," .
            "admin_name1          ='" . replace_spl_chr($this->_admin_name1) . "'," .
            "gallery_date          ='" . replace_spl_chr($this->_gallery_date) . "'," .
            "gallery_date1          ='" . replace_spl_chr($this->_gallery_date1) . "'," .
            "gallery_time          ='" . replace_spl_chr($this->_gallery_time) . "'," .
            "gallery_image         ='" . replace_spl_chr($this->_gallery_image) . "'," .
            "gallery_image1        ='" . replace_spl_chr($this->_gallery_image1) . "'," .
            "gallery_image2        ='" . replace_spl_chr($this->_gallery_image2) . "'," .
            "gallery_type        ='" . replace_spl_chr($this->_gallery_type) . "'," .
            "active              ='" . $this->_active . "'" .
            "WHERE gallery_id      =%d", $gallery_id);
        else:
            //insert
            $Query = "insert into " . TABLE_GALLERY_MASTER .
            "(
                  gallery_random_id,
                  gallery_name,
                  gallery_name_home,
                  gallery_url,
                  gallery_description,
                  gallery_keywords,
                  gallery_tags,
                  category_id,
                  sub_category_id,
                  sub_sub_category_id,
                  admin_name,
                  admin_name1,
                  gallery_date,
                  gallery_date1,
                  gallery_time,
                  gallery_image,
                  gallery_image1,
                  gallery_image2,
                  gallery_type,
                  active            
            )" .
            "values
            (
                " . replace_spl_chr($this->_gallery_random_id) . ",
                '" . replace_spl_chr($this->_gallery_name) . "',
                '" . replace_spl_chr($this->_gallery_name_home) . "',
                '" . replace_spl_chr($this->_gallery_url) . "',
                '" . replace_spl_chr($this->_gallery_description) . "',
                '" . replace_spl_chr($this->_gallery_keywords) . "',
                '" . replace_spl_chr($this->_gallery_tags) . "',
                " . replace_spl_chr($this->_category_id) . ",
                " . replace_spl_chr($this->_sub_category_id) . ",
                " . replace_spl_chr($this->_sub_sub_category_id) . ",
                '" . replace_spl_chr($this->_admin_name) . "',
                '" . replace_spl_chr($this->_admin_name1) . "',
                '" . replace_spl_chr($this->_gallery_date) . "',
                '" . replace_spl_chr($this->_gallery_date1) . "',
                '" . replace_spl_chr($this->_gallery_time) . "',
                '" . replace_spl_chr($this->_gallery_image) . "',
                '" . replace_spl_chr($this->_gallery_image1) . "',
                '" . replace_spl_chr($this->_gallery_image2) . "',
                '" . replace_spl_chr($this->_gallery_type) . "',
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
        $Query = "Select * from " . TABLE_GALLERY_MASTER . $strWhere . " order by gallery_id DESC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_GALLERY_MASTER.$strWhere." order by gallery_id DESC LIMIT $cur,$max";
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
        $Query = "Select DISTINCT admin_name from gallery_master";
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
        if ($this->_gallery_id):
            $gallery_id = preg_replace('#[^0-9]#i', '', $this->_gallery_id);
            $Query = sprintf("Delete from " . TABLE_GALLERY_MASTER . " where gallery_id =%d",$gallery_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_gallery_id(){return $this->_gallery_id;}
    function Get_gallery_random_id(){return $this->_gallery_random_id;}
    function Get_gallery_name(){return $this->_gallery_name;}
    function Get_gallery_name_home(){return $this->_gallery_name_home;}
    function Get_gallery_url(){return $this->_gallery_url;}
    function Get_gallery_description(){return $this->_gallery_description;}
    function Get_gallery_keywords(){return $this->_gallery_keywords;}
    function Get_gallery_tags(){return $this->_gallery_tags;}
    function Get_category_id(){return $this->_category_id;}
    function Get_sub_category_id(){return $this->_sub_category_id;}
    function Get_sub_sub_category_id(){return $this->_sub_sub_category_id;}
    function Get_admin_name(){return $this->_admin_name;}
    function Get_admin_name1(){return $this->_admin_name1;}
    function Get_gallery_date(){return $this->_gallery_date;}
    function Get_gallery_date1(){return $this->_gallery_date1;}
    function Get_gallery_time(){return $this->_gallery_time;}
    function Get_gallery_image(){return $this->_gallery_image;}
    function Get_gallery_image1(){return $this->_gallery_image1;}
    function Get_gallery_image2(){return $this->_gallery_image2;}
    function Get_gallery_type(){return $this->_gallery_type;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_gallery_id($_gallery_id){$this->_gallery_id = $_gallery_id;}
    function Set_gallery_random_id($_gallery_random_id){$this->_gallery_random_id = $_gallery_random_id;}
    function Set_gallery_name($_gallery_name){$this->_gallery_name = $_gallery_name;}
    function Set_gallery_name_home($_gallery_name_home){$this->_gallery_name_home = $_gallery_name_home;}
    function Set_gallery_url($_gallery_url){$this->_gallery_url = $_gallery_url;}
    function Set_gallery_description($_gallery_description){$this->_gallery_description = $_gallery_description;}
    function Set_gallery_keywords($_gallery_keywords){$this->_gallery_keywords = $_gallery_keywords;}
    function Set_gallery_tags($_gallery_tags){$this->_gallery_tags = $_gallery_tags;}
    function Set_category_id($_category_id){$this->_category_id = $_category_id;}
    function Set_sub_category_id($_sub_category_id){$this->_sub_category_id = $_sub_category_id;}
    function Set_sub_sub_category_id($_sub_sub_category_id){$this->_sub_sub_category_id = $_sub_sub_category_id;}
    function Set_admin_name($_admin_name){$this->_admin_name = $_admin_name;}
    function Set_admin_name1($_admin_name1){$this->_admin_name1 = $_admin_name1;}
    function Set_gallery_date($_gallery_date){$this->_gallery_date = $_gallery_date;}
    function Set_gallery_date1($_gallery_date1){$this->_gallery_date1 = $_gallery_date1;}
    function Set_gallery_time($_gallery_time){$this->_gallery_time = $_gallery_time;}
    function Set_gallery_image($_gallery_image){$this->_gallery_image = $_gallery_image;}
    function Set_gallery_image1($_gallery_image1){$this->_gallery_image1 = $_gallery_image1;}
    function Set_gallery_image2($_gallery_image2){$this->_gallery_image2 = $_gallery_image2;}
    function Set_gallery_type($_gallery_type){$this->_gallery_type = $_gallery_type;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
