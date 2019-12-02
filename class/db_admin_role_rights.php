<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_admin_role_rights{
    var $_admin_role_rights_id;
    var $_admin_id;
    var $_admin_menus_id;
    var $_admin_role_rights_active;
// Class constructor
function db_admin_role_rights($id = NULL){
        $this->_admin_role_rights_id   = NULL;
        $this->_admin_id               = NULL;
        $this->_admin_menus_id         = NULL;
	$this->_admin_role_rights_active=NULL;
        $id = preg_replace('#[^0-9]#i', '', $id);
        if ($id):
            $Query = sprintf("Select * from " . TABLE_ADMIN_ROLE_RIGHTS . " where admin_role_rights_id = %d",$id);
            $objDB = new database;
            $objDB->db_connect();
            $o_result = $objDB->db_fetch_array($Query);

            $this->_admin_role_rights_id     = $o_result["admin_role_rights_id"];
            $this->_admin_id                 = $o_result["admin_id"];
            $this->_admin_menus_id           = $o_result["admin_menus_id"];
	    $this->_admin_role_rights_active = $o_result["admin_role_rights_active"];
        endif;
    }
    // Returns class name
    function GetClassName(){
        return 'db_admin_role_rights';
    }
    function save(){
//            if ($this->_admin_role_rights_id):
//            $admin_role_rights_id = preg_replace('#[^0-9]#i', '', $this->_admin_role_rights_id);
//            //update
//            $Query = sprintf("UPDATE " . TABLE_ADMIN_ROLE_RIGHTS . " SET " .
//            "admin_id                    =" . replace_spl_chr($this->_admin_id) . "," .
//            "admin_menus_id              =" . $this->_admin_menus_id . "," .
//	    "admin_role_rights_active    =" . $this->_admin_role_rights_active .
//            "WHERE admin_role_rights_id  =%d", $admin_role_rights_id);
//	else:
            //insert
            $Query = "insert into " . TABLE_ADMIN_ROLE_RIGHTS .
            "(
                admin_id,
                admin_menus_id,
		admin_role_rights_active
            )" .
            "values
            (
                " . $this->_admin_id . ",
                " . replace_spl_chr($this->_admin_menus_id) . ",
		'" . replace_spl_chr($this->_admin_role_rights_active) . "'
            )";
        //endif;
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
        $Query = "Select * from " . TABLE_ADMIN_ROLE_RIGHTS . $strWhere . " order by admin_role_rights_id ASC ";
	$result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        $Query ="Select * from ".TABLE_ADMIN_ROLE_RIGHTS.$strWhere." order by admin_role_rights_id ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_admin_role_rights_id):
            $admin_role_rights_id = preg_replace('#[^0-9]#i', '', $this->_admin_role_rights_id);
            $Query = sprintf("Delete from " . TABLE_ADMIN_ROLE_RIGHTS . " where admin_role_rights_id =%d",$admin_role_rights_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
    function delete_Admin(){
        if ($this->_admin_id):
            $admin_id = preg_replace('#[^0-9]#i', '', $this->_admin_id);
            $Query = sprintf("Delete from " . TABLE_ADMIN_ROLE_RIGHTS . " where admin_id =%d",$admin_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
    
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_admin_role_rights_id(){
        return $this->_admin_role_rights_id;
    }
    function Get_admin_id(){
        return $this->_admin_id;
    }
    function Get_admin_menus_id(){
        return $this->_admin_menus_id;
    }
    function Get_admin_role_rights_active(){
        return $this->_admin_role_rights_active;
    }

/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_admin_role_rights_id($_admin_role_rights_id){
        $this->_admin_role_rights_id = $_admin_role_rights_id;
    }
    function Set_admin_id($_admin_id){
        $this->_admin_id = $_admin_id;
    }
    function Set_admin_menus_id($_admin_menus_id){
        $this->_admin_menus_id = $_admin_menus_id;
    }
    function Set_admin_role_rights_active($_admin_role_rights_active){
        $this->_admin_role_rights_active = $_admin_role_rights_active;
    }
}   
?>
