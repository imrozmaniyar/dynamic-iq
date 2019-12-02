<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_sub_sub_category_master{
    var $_sub_sub_category_master_id;
    var $_sub_category_master_id;
    var $_category_master_id;
    var $_sub_sub_category_master_name_urdu;
    var $_sub_sub_category_master_name;
    var $_sub_sub_category_master_meta_title;
    var $_sub_sub_category_master_meta_desc;
    var $_sub_sub_category_master_meta_keywords;
    var $_sub_sub_category_master_date;
    var $_sub_sub_category_master_date1;
    var $_admin_name;
    var $_admin_name1;
    var $_active;
// Class constructor
function db_sub_sub_category_master($id           = NULL){
    $this->_sub_sub_category_master_id            = NULL;
    $this->_sub_category_master_id                = NULL;
    $this->_category_master_id                    = NULL;
    $this->_sub_sub_category_master_name_urdu     = NULL;
    $this->_sub_sub_category_master_name          = NULL;
    $this->_sub_sub_category_master_meta_title    = NULL;
    $this->_sub_sub_category_master_meta_desc     = NULL;
    $this->_sub_sub_category_master_meta_keywords = NULL;
    $this->_sub_sub_category_master_date          = NULL;
    $this->_sub_sub_category_master_date1         = NULL;
    $this->_admin_name                            = NULL;
    $this->_admin_name1                            = NULL;
    $this->_active                                = NULL;
    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_SUB_SUB_CATEGORY_MASTER. " where sub_sub_category_master_id = %d",$id);
        $objDB                                        = new database;
        $objDB                                        ->db_connect();
        $o_result                                     = $objDB->db_fetch_array($Query);
        $this->_sub_sub_category_master_id            = $o_result["sub_sub_category_master_id"];
        $this->_sub_category_master_id                = $o_result["sub_category_master_id"];
        $this->_category_master_id                    = $o_result["category_master_id"];
        $this->_sub_sub_category_master_name_urdu     = $o_result["sub_sub_category_master_name_urdu"];
        $this->_sub_sub_category_master_name          = $o_result["sub_sub_category_master_name"];
        $this->_sub_sub_category_master_meta_title    = $o_result["sub_sub_category_master_meta_title"];
        $this->_sub_sub_category_master_meta_desc     = $o_result["sub_sub_category_master_meta_desc"];
        $this->_sub_sub_category_master_meta_keywords = $o_result["sub_sub_category_master_meta_keywords"];
        $this->_sub_sub_category_master_date          = $o_result["sub_sub_category_master_date"];
        $this->_sub_sub_category_master_date1         = $o_result["sub_sub_category_master_date1"];
        $this->_admin_name                            = $o_result["admin_name"];
        $this->_admin_name1                            = $o_result["admin_name1"];
        $this->_active                                = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_sub_sub_category_master';}
    function save(){
        if ($this->_sub_sub_category_master_id):
            $sub_sub_category_master_id = preg_replace('#[^0-9]#i', '', $this->_sub_sub_category_master_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_SUB_SUB_CATEGORY_MASTER . " SET " .
            "sub_category_master_id                =" . replace_spl_chr($this->_sub_category_master_id) . "," .    
            "category_master_id                    =" . replace_spl_chr($this->_category_master_id) . "," .
            "sub_sub_category_master_name_urdu     ='" . replace_spl_chr($this->_sub_sub_category_master_name_urdu) . "'," .
            "sub_sub_category_master_name          ='" . replace_spl_chr($this->_sub_sub_category_master_name) . "'," .
            "sub_sub_category_master_meta_title    ='" . replace_spl_chr($this->_sub_sub_category_master_meta_title) . "'," .
            "sub_sub_category_master_meta_desc     ='" . replace_spl_chr($this->_sub_sub_category_master_meta_desc) . "'," .
            "sub_sub_category_master_meta_keywords ='" . replace_spl_chr($this->_sub_sub_category_master_meta_keywords) . "'," .
            "sub_sub_category_master_date          ='" . replace_spl_chr($this->_sub_sub_category_master_date) . "'," .
            "sub_sub_category_master_date1         ='" . replace_spl_chr($this->_sub_sub_category_master_date1) . "'," .
            "admin_name                            ='" . replace_spl_chr($this->_admin_name) . "'," .
            "admin_name1                            ='" . replace_spl_chr($this->_admin_name1) . "'," .
            "active                                ='" . $this->_active . "'" .
            "WHERE sub_sub_category_master_id          =%d", $sub_sub_category_master_id);
        else:
            //insert
            $Query = "insert into " . TABLE_SUB_SUB_CATEGORY_MASTER .
            "(
                sub_category_master_id,
                category_master_id,
                sub_sub_category_master_name_urdu,
                sub_sub_category_master_name,
                sub_sub_category_master_meta_title,
                sub_sub_category_master_meta_desc,
                sub_sub_category_master_meta_keywords,
                sub_sub_category_master_date,
                sub_sub_category_master_date1,
                admin_name,
                admin_name1,
                active
            )" .
            "values
            (
                " . replace_spl_chr($this->_sub_category_master_id) . ",
                " . replace_spl_chr($this->_category_master_id) . ",
                '" . replace_spl_chr($this->_sub_sub_category_master_name_urdu) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_name) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_meta_title) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_meta_desc) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_meta_keywords) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_date) . "',
                '" . replace_spl_chr($this->_sub_sub_category_master_date1) . "',
                '" . replace_spl_chr($this->_admin_name) . "',
                '" . replace_spl_chr($this->_admin_name1) . "',
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
        $Query = "Select * from " . TABLE_SUB_SUB_CATEGORY_MASTER . $strWhere . " order by sub_sub_category_master_name";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_SUB_SUB_CATEGORY_MASTER.$strWhere." order by sub_sub_category_master_name LIMIT $cur,$max";
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
        $Query = "Select DISTINCT admin_name from sub_sub_category_master";
        //SELECT DISTINCT product_type FROM produk2
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="Select * from ".TABLE_CATEGORY_MASTER.$strWhere." group_concat(category_master_name) LIMIT $cur,$max";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_sub_sub_category_master_id):
            $sub_sub_category_master_id = preg_replace('#[^0-9]#i', '', $this->_sub_sub_category_master_id);
            $Query = sprintf("Delete from " . TABLE_SUB_SUB_CATEGORY_MASTER . " where sub_sub_category_master_id =%d",$sub_sub_category_master_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_sub_sub_category_master_id(){return $this->_sub_sub_category_master_id;}
    function Get_sub_category_master_id(){return $this->_sub_category_master_id;}
    function Get_category_master_id(){return $this->_category_master_id;}
    function Get_sub_sub_category_master_name_urdu(){return $this->_sub_sub_category_master_name_urdu;}
    function Get_sub_sub_category_master_name(){return $this->_sub_sub_category_master_name;}
    function Get_sub_sub_category_master_meta_title(){return $this->_sub_sub_category_master_meta_title;}
    function Get_sub_sub_category_master_meta_desc(){return $this->_sub_sub_category_master_meta_desc;}
    function Get_sub_sub_category_master_meta_keywords(){return $this->_sub_sub_category_master_meta_keywords;}
    function Get_sub_sub_category_master_date(){return $this->_sub_sub_category_master_date;}
    function Get_sub_sub_category_master_date1(){return $this->_sub_sub_category_master_date1;}
    function Get_admin_name(){return $this->_admin_name;}
    function Get_admin_name1(){return $this->_admin_name1;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_sub_sub_category_master_id($_sub_sub_category_master_id){$this->_sub_sub_category_master_id = $_sub_sub_category_master_id;}
    function Set_sub_category_master_id($_sub_category_master_id){$this->_sub_category_master_id = $_sub_category_master_id;}
    function Set_category_master_id($_category_master_id){$this->_category_master_id = $_category_master_id;}
    function Set_sub_sub_category_master_name_urdu($_sub_sub_category_master_name_urdu){$this->_sub_sub_category_master_name_urdu = $_sub_sub_category_master_name_urdu;}
    function Set_sub_sub_category_master_name($_sub_sub_category_master_name){$this->_sub_sub_category_master_name = $_sub_sub_category_master_name;}
    function Set_sub_sub_category_master_meta_title($_sub_sub_category_master_meta_title){$this->_sub_sub_category_master_meta_title = $_sub_sub_category_master_meta_title;}
    function Set_sub_sub_category_master_meta_desc($_sub_sub_category_master_meta_desc){$this->_sub_sub_category_master_meta_desc = $_sub_sub_category_master_meta_desc;}
    function Set_sub_sub_category_master_meta_keywords($_sub_sub_category_master_meta_keywords){$this->_sub_sub_category_master_meta_keywords = $_sub_sub_category_master_meta_keywords;}
    function Set_sub_sub_category_master_date($_sub_sub_category_master_date){$this->_sub_sub_category_master_date = $_sub_sub_category_master_date;}
    function Set_sub_sub_category_master_date1($_sub_sub_category_master_date1){$this->_sub_sub_category_master_date1 = $_sub_sub_category_master_date1;}
    function Set_admin_name($_admin_name){$this->_admin_name = $_admin_name;}
    function Set_admin_name1($_admin_name1){$this->_admin_name1 = $_admin_name1;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
