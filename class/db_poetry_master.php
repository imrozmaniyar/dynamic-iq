<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_poetry_master{
  var $_poetry_master_id;
  var $_poetry_master_title;
  var $_poetry_master_image;
  var $_poetry_master_image1;
  var $_poetry_master_image2;
  var $_poetry_master_desc;
  var $_poetry_master_date;
  var $_active;
// Class constructor
function db_poetry_master($id  = NULL){
  $this->_poetry_master_id                = NULL;
  $this->_poetry_master_title              = NULL;
  $this->_poetry_master_image             = NULL;
  $this->_poetry_master_image1            = NULL;
  $this->_poetry_master_image2            = NULL;
  $this->_poetry_master_desc       = NULL;
  $this->_poetry_master_date              = NULL;
  $this->_active                = NULL;

  $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query                      = sprintf("Select * from " . TABLE_POETRY_MASTER. " where poetry_master_id = %d",$id);
        $objDB                      = new database;
        $objDB                      ->db_connect();
        $o_result                   = $objDB->db_fetch_array($Query);
        $this->_poetry_master_id              = $o_result["poetry_master_id"];
        $this->_poetry_master_title            = $o_result["poetry_master_title"];
        $this->_poetry_master_image           = $o_result["poetry_master_image"];
        $this->_poetry_master_image1          = $o_result["poetry_master_image1"];
        $this->_poetry_master_image2          = $o_result["poetry_master_image2"];
        $this->_poetry_master_desc     = $o_result["poetry_master_desc"];
        $this->_poetry_master_date            = $o_result["poetry_master_date"];
        $this->_active              = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_poetry_master';}
    function save(){
        if ($this->_poetry_master_id):
            $poetry_master_id              = preg_replace('#[^0-9]#i', '', $this->_poetry_master_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_POETRY_MASTER . " SET " .
            "poetry_master_title            ='" . replace_spl_chr($this->_poetry_master_title) . "'," .
            "poetry_master_image           ='" . replace_spl_chr($this->_poetry_master_image) . "'," .
            "poetry_master_image1          ='" . replace_spl_chr($this->_poetry_master_image1) . "'," .
            "poetry_master_image2          ='" . replace_spl_chr($this->_poetry_master_image2) . "'," .
            "poetry_master_desc     ='" . replace_spl_chr($this->_poetry_master_desc) . "'," .
            "poetry_master_date           ='" . replace_spl_chr($this->_poetry_master_date) . "'," .
            "active              ='" . $this->_active . "'" .
            "WHERE poetry_master_id        =%d", $poetry_master_id);
        else:
            //insert
            $Query = "insert into " . TABLE_POETRY_MASTER .
            "(
                poetry_master_title,
                poetry_master_image,
                poetry_master_image1,
                poetry_master_image2,
                poetry_master_desc,
                poetry_master_date,
                active
            )" .
            "values
            (
                '" . replace_spl_chr($this->_poetry_master_title) . "',
                '" . replace_spl_chr($this->_poetry_master_image) . "',
                '" . replace_spl_chr($this->_poetry_master_image1) . "',
                '" . replace_spl_chr($this->_poetry_master_image2) . "',
                '" . replace_spl_chr($this->_poetry_master_desc) . "',
                '" . replace_spl_chr($this->_poetry_master_date) . "',
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
        $Query = "Select * from " . TABLE_POETRY_MASTER . $strWhere . " order by poetry_master_id ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_POETRY_MASTER.$strWhere." order by poetry_master_id ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_poetry_master_id):
            $poetry_master_id = preg_replace('#[^0-9]#i', '', $this->_poetry_master_id);
            $Query = sprintf("Delete from " . TABLE_POETRY_MASTER . " where poetry_master_id =%d",$poetry_master_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_poetry_master_id(){return $this->_gallery_id;}
    function Get_poetry_master_title(){return $this->_poetry_master_title;}
    function Get_poetry_master_image(){return $this->_poetry_master_image;}
    function Get_poetry_master_image1(){return $this->_poetry_master_image1;}
    function Get_poetry_master_image2(){return $this->_poetry_master_image2;}
    function Get_poetry_master_desc(){return $this->_poetry_master_desc;}
    function Get_poetry_master_date(){return $this->_poetry_master_date;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_poetry_master_id($_poetry_master_id){$this->_poetry_master_id = $_poetry_master_id;}
    function Set_poetry_master_title($_poetry_master_title){$this->_poetry_master_title = $_poetry_master_title;}
    function Set_poetry_master_image($_poetry_master_image){$this->_poetry_master_image = $_poetry_master_image;}
    function Set_poetry_master_image1($_poetry_master_image1){$this->_poetry_master_image1 = $_poetry_master_image1;}
    function Set_poetry_master_image2($_poetry_master_image2){$this->_poetry_master_image2 = $_poetry_master_image2;}
    function Set_poetry_master_desc($_poetry_master_desc){$this->_poetry_master_desc = $_poetry_master_desc;}
    function Set_poetry_master_date($_poetry_master_date){$this->_poetry_master_date = $_poetry_master_date;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
