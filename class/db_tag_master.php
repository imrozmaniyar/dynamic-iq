<?php
include_once("database.php");
// Class
class db_tag_master{
  var $_tag_id;
  var $_tag_name;
  var $_tag_description;
  var $_tag_date;
  var $_tag_image;
  var $_tag_image1;
  var $_tag_image2;
  var $_active;
// Class constructor
function db_tag_master($id  = NULL){
  $this->_tag_id                = NULL;
  $this->_tag_name              = NULL;
  $this->_tag_description       = NULL;
  $this->_tag_date              = NULL;
  $this->_tag_image             = NULL;
  $this->_tag_image1            = NULL;
  $this->_tag_image2            = NULL;
  $this->_active                = NULL;

  $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query                      = sprintf("Select * from " . TABLE_TAG_MASTER. " where tag_id = %d",$id);
        $objDB                      = new database;
        $objDB                      ->db_connect();
        $o_result                   = $objDB->db_fetch_array($Query);
        $this->_tag_id              = $o_result["tag_id"];
        $this->_tag_name            = $o_result["tag_name"];
        $this->_tag_description     = $o_result["tag_description"];
        $this->_tag_date            = $o_result["tag_date"];
        $this->_tag_image           = $o_result["tag_image"];
        $this->_tag_image1          = $o_result["tag_image1"];
        $this->_tag_image2          = $o_result["tag_image2"];
        $this->_active              = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_tag_master';}
    function save(){
        if ($this->_tag_id):
            $tag_id              = preg_replace('#[^0-9]#i', '', $this->_tag_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_TAG_MASTER . " SET " .
            "tag_name            ='" . replace_spl_chr($this->_tag_name) . "'," .
            "tag_description     ='" . replace_spl_chr($this->_tag_description) . "'," .
            "tag_date           ='" . replace_spl_chr($this->_tag_date) . "'," .
            "tag_image           ='" . replace_spl_chr($this->_tag_image) . "'," .
            "tag_image1          ='" . replace_spl_chr($this->_tag_image1) . "'," .
            "tag_image2          ='" . replace_spl_chr($this->_tag_image2) . "'," .
            "active              ='" . $this->_active . "'" .
            "WHERE tag_id        =%d", $tag_id);
        else:
            //insert
            $Query = "insert into " . TABLE_TAG_MASTER .
            "(
                tag_name,
                tag_description,
                tag_date,
                tag_image,
                tag_image1,
                tag_image2,
                active
            )" .
            "values
            (
                '" . replace_spl_chr($this->_tag_name) . "',
                '" . replace_spl_chr($this->_tag_description) . "',
                '" . replace_spl_chr($this->_tag_date) . "',
                '" . replace_spl_chr($this->_tag_image) . "',
                '" . replace_spl_chr($this->_tag_image1) . "',
                '" . replace_spl_chr($this->_tag_image2) . "',
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
        $Query = "Select * from " . TABLE_TAG_MASTER . $strWhere . " order by tag_id ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_TAG_MASTER.$strWhere." order by tag_id ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_tag_id):
            $tag_id = preg_replace('#[^0-9]#i', '', $this->_tag_id);
            $Query = sprintf("Delete from " . TABLE_TAG_MASTER . " where tag_id =%d",$tag_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_tag_id(){return $this->_gallery_id;}
    function Get_tag_name(){return $this->_tag_name;}
    function Get_tag_description(){return $this->_tag_description;}
    function Get_tag_date(){return $this->_tag_date;}
    function Get_tag_image(){return $this->_tag_image;}
    function Get_tag_image1(){return $this->_tag_image1;}
    function Get_tag_image2(){return $this->_tag_image2;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_tag_id($_tag_id){$this->_tag_id = $_tag_id;}
    function Set_tag_name($_tag_name){$this->_tag_name = $_tag_name;}
    function Set_tag_description($_tag_description){$this->_tag_description = $_tag_description;}
    function Set_tag_date($_tag_date){$this->_tag_date = $_tag_date;}
    function Set_tag_image($_tag_image){$this->_tag_image = $_tag_image;}
    function Set_tag_image1($_tag_image1){$this->_tag_image1 = $_tag_image1;}
    function Set_tag_image2($_tag_image2){$this->_tag_image2 = $_tag_image2;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
