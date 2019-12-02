<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_gallery_child{
  var $_gallery_child_id;
  var $_gallery_id;
  var $_gallery_child_random_id;
  var $_gallery_child_tags;
  var $_gallery_child_keywords;
  var $_gallery_child_caption;
  var $_gallery_child_image;
  var $_gallery_child_image1;
  var $_gallery_child_image2;
  var $_position;
  var $_active;
// Class constructor
function db_gallery_child($id  = NULL){
  $this->_gallery_child_id = NULL;
  $this->_gallery_id = NULL;
  $this->_gallery_child_random_id = NULL;
  $this->_gallery_child_tags = NULL;
  $this->_gallery_child_keywords = NULL;  
  $this->_gallery_child_caption = NULL;
  $this->_gallery_child_image = NULL;
  $this->_gallery_child_image1 = NULL;
  $this->_gallery_child_image2 = NULL;
  $this->_position = NULL;
  $this->_active = NULL;


    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_GALLERY_CHILD. " where gallery_child_id = %d",$id);
        $objDB                        = new database;
        $objDB                        ->db_connect();
        $o_result                     = $objDB->db_fetch_array($Query);
        $this->_gallery_child_id      = $o_result["gallery_child_id"];
        $this->_gallery_id            = $o_result["gallery_id"];
        $this->_gallery_child_random_id = $o_result["gallery_child_random_id"];
        $this->_gallery_child_tags    = $o_result["gallery_child_tags"];
        $this->_gallery_child_keywords    = $o_result["gallery_child_keywords"];
        $this->_gallery_child_caption = $o_result["gallery_child_caption"];
        $this->_gallery_child_image   = $o_result["gallery_child_image"];
        $this->_gallery_child_image1  = $o_result["gallery_child_image1"];
        $this->_gallery_child_image2  = $o_result["gallery_child_image2"];
        $this->_position  = $o_result["position"];
        $this->_active                = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_gallery_child';}
    function save(){
        if ($this->_gallery_child_id):
            $gallery_child_id            = preg_replace('#[^0-9]#i', '', $this->_gallery_child_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_GALLERY_CHILD . " SET " .
            "gallery_id     =" . replace_spl_chr($this->_gallery_id) . "," .    
            "gallery_child_random_id     =" . replace_spl_chr($this->_gallery_child_random_id) . "," .    
            "gallery_child_tags          ='" . replace_spl_chr($this->_gallery_child_tags) . "'," .
            "gallery_child_keywords          ='" . replace_spl_chr($this->_gallery_child_keywords) . "'," .
            "gallery_child_caption           ='" . replace_spl_chr($this->_gallery_child_caption) . "'," .
            "gallery_child_image         ='" . replace_spl_chr($this->_gallery_child_image) . "'," .
            "gallery_child_image1        ='" . replace_spl_chr($this->_gallery_child_image1) . "'," .
            "gallery_child_image2        ='" . replace_spl_chr($this->_gallery_child_image2) . "'," .
            "position        =" . replace_spl_chr($this->_position) . "," .
            "active              ='" . $this->_active . "'" .
            "WHERE gallery_child_id      =%d", $gallery_child_id);
        else:
            //insert
            $Query = "insert into " . TABLE_GALLERY_CHILD .
            "(
                  gallery_id,
                  gallery_child_random_id,
                  gallery_child_tags,
                  gallery_child_keywords,
                  gallery_child_caption,
                  gallery_child_image,
                  gallery_child_image1,
                  gallery_child_image2,
                  position,
                  active
            )" .
            "values
            (
                " . replace_spl_chr($this->_gallery_id) . ",
                " . replace_spl_chr($this->_gallery_child_random_id) . ",
                '" . replace_spl_chr($this->_gallery_child_tags) . "',
                '" . replace_spl_chr($this->_gallery_child_keywords) . "',
                '" . replace_spl_chr($this->_gallery_child_caption) . "',
                '" . replace_spl_chr($this->_gallery_child_image) . "',
                '" . replace_spl_chr($this->_gallery_child_image1) . "',
                '" . replace_spl_chr($this->_gallery_child_image2) . "',
                " . replace_spl_chr($this->_position) . ",
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
        $Query = "Select * from " . TABLE_GALLERY_CHILD . $strWhere . " order by position ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_GALLERY_CHILD.$strWhere." order by position ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_gallery_child_id):
            $gallery_child_id = preg_replace('#[^0-9]#i', '', $this->_gallery_child_id);
            $Query = sprintf("Delete from " . TABLE_GALLERY_CHILD . " where gallery_child_id =%d",$gallery_child_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_gallery_child_id(){return $this->_gallery_child_id;}
    function Get_gallery_id(){return $this->_gallery_id;}
    function Get_gallery_child_random_id(){return $this->_gallery_child_random_id;}
    function Get_gallery_child_tags(){return $this->_gallery_child_tags;}
    function Get_gallery_child_keywords(){return $this->_gallery_child_keywords;}
    function Get_gallery_child_caption(){return $this->_gallery_child_caption;}
    function Get_gallery_child_image(){return $this->_gallery_child_image;}
    function Get_gallery_child_image1(){return $this->_gallery_child_image1;}
    function Get_gallery_child_image2(){return $this->_gallery_child_image2;}
    function Get_position(){return $this->_position;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_gallery_child_id($_gallery_child_id){$this->_gallery_child_id = $_gallery_child_id;}
    function Set_gallery_id($_gallery_id){$this->_gallery_id = $_gallery_id;}
    function Set_gallery_child_random_id($_gallery_child_random_id){$this->_gallery_child_random_id = $_gallery_child_random_id;}
    function Set_gallery_child_tags($_gallery_child_tags){$this->_gallery_child_tags = $_gallery_child_tags;}
    function Set_gallery_child_keywords($_gallery_child_keywords){$this->_gallery_child_keywords = $_gallery_child_keywords;}
    function Set_gallery_child_caption($_gallery_child_caption){$this->_gallery_child_caption = $_gallery_child_caption;}
    function Set_gallery_child_image($_gallery_child_image){$this->_gallery_child_image = $_gallery_child_image;}
    function Set_gallery_child_image1($_gallery_child_image1){$this->_gallery_child_image1 = $_gallery_child_image1;}
    function Set_gallery_child_image2($_gallery_child_image2){$this->_gallery_child_image2 = $_gallery_child_image2;}
    function Set_position($_position){$this->_position = $_position;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
