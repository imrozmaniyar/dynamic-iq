<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_admin_parameters{
    var $_admin_id;
    var $_admin_name;
    var $_admin_login;
    var $_admin_password;
    var $_admin_email;
    var $_admin_role;
    var $_active;
// Class constructor
function db_admin_parameters($id = NULL){
        $this->_admin_id       = NULL;
        $this->_admin_name     = NULL;
        $this->_admin_login    = NULL;
        $this->_admin_password = NULL;
        $this->_admin_email    = NULL;
        $this->_admin_role    = NULL;
        $this->_active        		 = NULL;
        $id = preg_replace('#[^0-9]#i', '', $id);
        if ($id):
            $Query = sprintf("Select * from " . TABLE_ADMIN_PARAMETERS . " where admin_id = %d",$id);
            $objDB = new database;
            $objDB->db_connect();
            $o_result = $objDB->db_fetch_array($Query);

            $this->_admin_id       = $o_result["admin_id"];
            $this->_admin_name     = $o_result["admin_name"];
            $this->_admin_login    = $o_result["admin_login"];
            $this->_admin_password = $o_result["admin_password"];
            $this->_admin_email    = $o_result["admin_email"];
            $this->_admin_role     = $o_result["admin_role"];
            $this->_active         = $o_result["active"];
        endif;
    }
    // Returns class name
    function GetClassName(){
		return 'db_admin_parameters';
    }

    function save()
    {
        if ($this->_admin_id):
            $admin_id = preg_replace('#[^0-9]#i', '', $this->_admin_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_ADMIN_PARAMETERS . " SET " .
      	"admin_name		='" . replace_spl_chr($this->_admin_name) . "'," .
				"admin_login		='" . replace_spl_chr($this->_admin_login) . "'," .
				"admin_password	='" . replace_spl_chr($this->_admin_password) . "'," .
				"admin_email		='" . replace_spl_chr($this->_admin_email) . "'," .
        "admin_role 		='" . replace_spl_chr($this->_admin_role) . "'," .
				"active 				='" . $this->_active . "'" .
				"WHERE admin_id 	=%d", $admin_id);
		else:
            //insert
            $Query = "insert into " . TABLE_ADMIN_PARAMETERS .
				"(
          admin_name,
					admin_login,
					admin_password,
					admin_email,
          admin_role,
					active
				)" .
			"values
			(
        '" . replace_spl_chr($this->_admin_name) . "',
				'" . replace_spl_chr($this->_admin_login) . "',
				'" . replace_spl_chr($this->_admin_password) . "',
				'" . replace_spl_chr($this->_admin_email) . "',
        '" . replace_spl_chr($this->_admin_role) . "',
				'" . $this->_active . "'
			)";
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
    function selectAll($strWhere = NULL, $cur = NULL, $max = NULL){
		$objDB       = new database;
        $objDB->db_connect();
        if ($strWhere)
			$strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_ADMIN_PARAMETERS . $strWhere . " order by admin_login desc";
	$result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        $Query ="Select * from ".TABLE_ADMIN_PARAMETERS.$strWhere." order by admin_login desc LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
    function delete(){
        if ($this->_admin_id):
            $admin_id = preg_replace('#[^0-9]#i', '', $this->_admin_id);
            $Query = sprintf("Delete from " . TABLE_ADMIN_PARAMETERS . " where admin_id =%d",$admin_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }

//////////////////// for existing user password change//////////////////
    function changepassword(){
        $admin_id = preg_replace('#[^0-9]#i', '', $this->_admin_id);
        $Query = sprintf("UPDATE " . TABLE_ADMIN_PARAMETERS . " SET " .
			"admin_password='" . $this->_admin_password . "'" .
			" where admin_id=%d", $admin_id);
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
        echo $Query;
    }


    function checklogin(){
        $objDB  = new database;
        $objDB->db_connect();
        $Query  = "Select * from " . TABLE_ADMIN_PARAMETERS . " where admin_login ='" . $this->_admin_login . "' or admin_password ='" . $this->_admin_password . "' and active ='" . $this->_active . "'";
		echo $Query;
        $result = $objDB->db_query($Query);
        if($objDB->db_num_rows($result) > 0):
            return true;
        else:
            return false;
        endif;
    }
    //added by nikhil
    function checkuser($aname,$aemail){
	$objDB  = new database;
        $objDB->db_connect();
        $Query  = "Select * from " . TABLE_ADMIN_PARAMETERS . " where admin_login = '".$aname."' or admin_email = '".$aemail."'";
        return $result = $objDB->db_query($Query);
    }

function saveProfile()
    {
        if ($this->_admin_id):
            $admin_id = preg_replace('#[^0-9]#i', '', $this->_admin_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_ADMIN_PARAMETERS . " SET " .
        "admin_name 		='" . replace_spl_chr($this->_admin_name) . "'," .
        "admin_login		='" . replace_spl_chr($this->_admin_login) . "'," .
				"admin_email		='" . replace_spl_chr($this->_admin_email) . "'," .
        "admin_role 		='" . replace_spl_chr($this->_admin_role) . "'," .
				"active 				='" . $this->_active . "'" .
				"WHERE admin_id   =%d", $admin_id);
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }

//////////////////// for existing user password change//////////////////
    function changeNewpassword()
    {
        $Query = "UPDATE " . TABLE_ADMIN_PARAMETERS . " SET ";
        $Query = $Query . "admin_password='" . $this->_admin_password . "'";
        $Query = $Query . "where admin_email='" . $this->_admin_email . "'";
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_admin_id(){return $this->_admin_id;}
    function Get_admin_name(){return $this->_admin_name;}
    function Get_admin_login(){return $this->_admin_login;}
    function Get_admin_password(){return $this->_admin_password;}
    function Get_admin_email(){return $this->_admin_email;}
    function Get_admin_role(){return $this->_admin_role;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_admin_id($_admin_id){$this->_admin_id = $_admin_id;}
    function Set_admin_name($_admin_name){$this->_admin_name = $_admin_name;}
    function Set_admin_login($_admin_login){$this->_admin_login = $_admin_login;}
    function Set_admin_password($_admin_password){$this->_admin_password = $_admin_password;}
    function Set_admin_email($_admin_email){$this->_admin_email = $_admin_email;}
    function Set_admin_role($_admin_role){$this->_admin_role = $_admin_role;}
    function Set_active($_active){$this->_active = $_active;}

}
?>
