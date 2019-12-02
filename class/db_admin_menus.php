<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_admin_menus{
    var $_admin_menus_id;
    var $_admin_menus_category;
    var $_admin_menus_icon;
    var $_display_order;
    var $_active;
// Class constructor
function db_admin_menus($id = NULL){
        $this->_admin_menus_id          = NULL;
        $this->_admin_menus_category    = NULL;
        $this->_admin_menus_icon        = NULL;
        $this->_display_order           = NULL;
        $this->_active                  = NULL;
        $id = preg_replace('#[^0-9]#i', '', $id);
        if ($id):
            $Query = sprintf("Select * from " . TABLE_ADMIN_MENUS . " where admin_menus_id = %d",$id);
            $objDB = new database;
            $objDB->db_connect();
            $o_result = $objDB->db_fetch_array($Query);

            $this->_admin_menus_id          = $o_result["admin_menus_id"];
            $this->_admin_menus_category    = $o_result["admin_menus_category"];
            $this->_admin_menus_icon        = $o_result["admin_menus_icon"];
            $this->_display_order           = $o_result["display_order"];
            $this->_active                  = $o_result["active"];
        endif;
    }
    // Returns class name
    function GetClassName(){
        return 'db_admin_menus';
    }

    function save()
    {
        if ($this->_admin_menus_id):
            $admin_menus_id = preg_replace('#[^0-9]#i', '', $this->_admin_menus_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_ADMIN_MENUS . " SET " .
            "admin_menus_category    ='" . replace_spl_chr($this->_admin_menus_category) . "'," .
            "admin_menus_icon        ='" . replace_spl_chr($this->_admin_menus_icon) . "'," .
            "display_order           =" . replace_spl_chr($this->_display_order) . "," .
            "active                  ='" . $this->_active . "'" .
            "WHERE admin_menus_id    =%d", $admin_menus_id);
		else:
            //insert
            $Query = "insert into " . TABLE_ADMIN_MENUS .
            "(
                    admin_menus_category,
                    admin_menus_icon,
                    display_order,
                    active
            )" .
            "values
            (
                '" . replace_spl_chr($this->_admin_menus_category) . "',
                '" . replace_spl_chr($this->_admin_menus_icon) . "',
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
		$objDB       = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_ADMIN_MENUS . $strWhere . " order by display_order ASC";

        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        $Query ="Select * from ".TABLE_ADMIN_MENUS.$strWhere." order by display_order ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_admin_menus_id):
            $admin_menus_id = preg_replace('#[^0-9]#i', '', $this->_admin_menus_id);
            $Query = sprintf("Delete from " . TABLE_ADMIN_MENUS . " where admin_menus_id =%d",$admin_menus_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_admin_menus_id(){
		return $this->_admin_menus_id;
    }
    function Get_admin_menus_category(){
        return $this->_admin_menus_category;
    }
    function Get_admin_menus_icon(){
        return $this->_admin_menus_icon;
    }
    function Get_display_order(){
        return $this->_display_order;
    }

    function Get_active(){
        return $this->_active;
	}

/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_admin_menus_id($_admin_menus_id){
        $this->_admin_menus_id = $_admin_menus_id;
    }
    function Set_admin_menus_category($_admin_menus_category){
        $this->_admin_menus_category = $_admin_menus_category;
    }
    function Set_admin_menus_icon($_admin_menus_icon){
        $this->_admin_menus_icon = $_admin_menus_icon;
    }
    function Set_display_order($_display_order){
        $this->_display_order = $_display_order;
    }
    function Set_active($_active){
        $this->_active = $_active;
    }
}
?>