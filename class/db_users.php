<?php
include_once("database.php");
// Class
class db_users{
    var $_id;
    var $_username;
    var $_name;
    var $_position;
// Class constructor
function db_users($id = NULL){
    $this->_id        = NULL;
    $this->_username  = NULL;
    $this->_name      = NULL;
    $this->_position  = NULL;
    $id                  = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query           = sprintf("Select * from " . TABLE_USERS. " where id = %d",$id);
        $objDB           = new database;
        $objDB           ->db_connect();
        $o_result        = $objDB->db_fetch_array($Query);
        $this->_id       = $o_result["id"];
        $this->_username = $o_result["username"];
        $this->_name     = $o_result["name"];
        $this->_position = $o_result["position"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_users';}
    function save(){
        if ($this->_id):
            $id       = preg_replace('#[^0-9]#i', '', $this->_id);
            //update
            $Query    = sprintf("UPDATE " . TABLE_USERS . " SET " .
            "username ='" . replace_spl_chr($this->_username) . "'," .
            "name     ='" . replace_spl_chr($this->_name) . "'," .
            "position =" . replace_spl_chr($this->_position) . "" .
            "WHERE id =%d", $id);
        else:
            //insert
            $Query = "insert into " . TABLE_USERS .
            "(
                username,
                name,
                position
            )" .
            "values
            (
                '" . replace_spl_chr($this->_username) . "',
                '" . replace_spl_chr($this->_name) . "',
                " . replace_spl_chr($this->_position) . "
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
        $Query = "Select * from " . TABLE_USERS . $strWhere . " order by position ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_USERS.$strWhere." order by position ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////
	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_id):
            $id = preg_replace('#[^0-9]#i', '', $this->_id);
            $Query = sprintf("Delete from " . TABLE_USERS . " where id =%d",$id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////
    /////////////////////////////////////////////GET FUNCTION//////////
    function Get_id(){return $this->_id;}
    function Get_username(){return $this->_username;}
    function Get_name(){return $this->_name;}
    function Get_position(){return $this->_position;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_id($_id){$this->_id = $_id;}
    function Set_username($_username){$this->_username = $_username;}
    function Set_name($_name){$this->_name = $_name;}
    function Set_position($_position){$this->_position = $_position;}
}
?>
