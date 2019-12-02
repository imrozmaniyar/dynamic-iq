<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_admin_menus_subcategory1{
    var $_admin_menus_subcategory_id;
    var $_admin_menus_id;
    var $_admin_menus_subcategory_title;
    var $_admin_menus_subcategory_url;
    var $_display_order;
    var $_active;
// Class constructor
function db_admin_menus_subcategory1($id = NULL){
    $this->_admin_menus_subcategory_id    = NULL;
    $this->_admin_menus_id                = NULL;
    $this->_admin_menus_subcategory_title = NULL;
    $this->_admin_menus_subcategory_url   = NULL;
    $this->_display_rder   = NULL;
    $this->_active                        = NULL;
    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_ADMIN_MENUS_SUBCATEGORY1 . " where admin_menus_subcategory_id = %d",$id);
        $objDB = new database;
        $objDB->db_connect();
        $o_result = $objDB->db_fetch_array($Query);

        $this->_admin_menus_subcategory_id    = $o_result["admin_menus_subcategory_id"];
        $this->_admin_menus_id                = $o_result["admin_menus_id"];
        $this->_admin_menus_subcategory_title = $o_result["admin_menus_subcategory_title"];
        $this->_admin_menus_subcategory_url   = $o_result["admin_menus_subcategory_url"];
        $this->_display_order   = $o_result["display_order"];
        $this->_active                        = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){
        return 'db_admin_menus_subcategory1';
    }

    function save()
    {
        if ($this->_admin_menus_subcategory_id):
            $admin_menus_subcategory_id = preg_replace('#[^0-9]#i', '', $this->_admin_menus_subcategory_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_ADMIN_MENUS_SUBCATEGORY1 . " SET " .
            "admin_menus_id                      =" . replace_spl_chr($this->_admin_menus_id) . "," .
            "admin_menus_subcategory_title       ='" . replace_spl_chr($this->_admin_menus_subcategory_title) . "'," .
            "admin_menus_subcategory_url         ='" . replace_spl_chr($this->_admin_menus_subcategory_url) . "'," .
            "display_order         =" . replace_spl_chr($this->_display_order) . "," .
            
            "active                              ='" . $this->_active . "'" .
            "WHERE admin_menus_subcategory_id    =%d", $admin_menus_subcategory_id);
        else:
            //insert
            $Query = "insert into " . TABLE_ADMIN_MENUS_SUBCATEGORY1 .
            "(
                admin_menus_id,
                admin_menus_subcategory_title,
                admin_menus_subcategory_url,
                display_order,
                active
            )" .
            "values
            (
                " . replace_spl_chr($this->_admin_menus_id) . ",
                '" . replace_spl_chr($this->_admin_menus_subcategory_title) . "',
                '" . replace_spl_chr($this->_admin_menus_subcategory_url) . "',
                " . replace_spl_chr($this->_display_order) . ",
                
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
        //$Query = "Select * from " . TABLE_ADMIN_MENUS_SUBCATEGORY1 . $strWhere . " order by admin_menus_id ASC";
        $Query = "Select * from " . TABLE_ADMIN_MENUS_SUBCATEGORY1 . $strWhere . " order by display_order ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        //$Query ="Select * from ".TABLE_ADMIN_MENUS_SUBCATEGORY1.$strWhere." order by admin_menus_id ASC LIMIT $cur,$max";
            $Query ="Select * from ".TABLE_ADMIN_MENUS_SUBCATEGORY1.$strWhere." order by display_order ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_admin_menus_subcategory_id):
            $admin_menus_subcategory_id = preg_replace('#[^0-9]#i', '', $this->_admin_menus_subcategory_id);
            $Query = sprintf("Delete from " . TABLE_ADMIN_MENUS_SUBCATEGORY1 . " where admin_menus_subcategory_id =%d",$admin_menus_subcategory_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_admin_menus_subcategory_id(){
        return $this->_admin_menus_subcategory_id;
    }
    function Get_admin_menus_id(){
        return $this->_admin_menus_id;
    }
    function Get_admin_menus_subcategory_title(){
        return $this->_admin_menus_subcategory_title;
    }
    function Get_admin_menus_subcategory_url(){
        return $this->_admin_menus_subcategory_url;
    }
    function Get_display_order(){
        return $this->_display_order;
    }

    
    function Get_active(){
        return $this->_active;
    }

/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_admin_menus_subcategory_id($_admin_menus_subcategory_id){
        $this->_admin_menus_subcategory_id = $_admin_menus_subcategory_id;
    }
    function Set_admin_menus_id($_admin_menus_id){
        $this->_admin_menus_id = $_admin_menus_id;
    }
    function Set_admin_menus_subcategory_title($_admin_menus_subcategory_title){
        $this->_admin_menus_subcategory_title = $_admin_menus_subcategory_title;
    }
    function Set_admin_menus_subcategory_url($_admin_menus_subcategory_url){
        $this->_admin_menus_subcategory_url = $_admin_menus_subcategory_url;
    }
    function Set_display_order($_display_order){
        $this->_display_order = $_display_order;
    }
    
    
    function Set_active($_active){
        $this->_active = $_active;
    }
}
?>