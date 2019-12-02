<?php
include_once("database.php");
// Class
class db_registration_master{
    var $_user_id;
    var $_fg_id;
    var $_user_name;
    var $_user_email;
    var $_user_password;
    var $_user_mobile;
    var $_user_country;
    var $_user_dor;
    var $_user_flag;
    var $_active;

// Class constructor
function db_registration_master($id = NULL){
    $this->_user_id                 = NULL;
    $this->_fg_id                   = NULL;
    $this->_user_name               = NULL;
    $this->_user_email              = NULL;
    $this->_user_password           = NULL;
    $this->_user_mobile             = NULL;
    $this->_user_country            = NULL;
    $this->_user_dor                = NULL;
    $this->_user_flag               = NULL;
    $this->_active                  = NULL;


    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_REGISTRATION_MASTER . " where user_id = %d",$id);
        $objDB = new database;
        $objDB->db_connect();
        $o_result               =  $objDB->db_fetch_array($Query);
        $this->_user_id         = $o_result["user_id"];
        $this->_fg_id           = $o_result["fg_id"];
        $this->_user_name       = $o_result["user_name"];
        $this->_user_email      = $o_result["user_email"];
        $this->_user_password   = $o_result["user_password"];
        $this->_user_mobile     = $o_result["user_mobile"];
        $this->_user_country    = $o_result["user_country"];
        $this->_user_dor        = $o_result["user_dor"];
        $this->_user_flag       = $o_result["user_flag"];
        $this->_active          = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){
        return 'db_registration_master';
    }

    function save(){
    if ($this->_user_id):
        $user_id = preg_replace('#[^0-9]#i', '', $this->_user_id);
        //update
        $Query           = sprintf("UPDATE " . TABLE_REGISTRATION_MASTER . " SET " .
        "fg_id           =" . replace_spl_chr($this->_fg_id) . "," .
        "user_name       ='" . replace_spl_chr($this->_user_name) . "'," .
        "user_email      ='" . replace_spl_chr($this->_user_email) . "'," .
        "user_password   ='" . replace_spl_chr($this->_user_password) . "'," .
        "user_mobile     ='" . replace_spl_chr($this->_user_mobile) . "'," .
        "user_country    ='" . replace_spl_chr($this->_user_country) . "'," .
        "user_dor        ='" . replace_spl_chr($this->_user_dor) . "'," .
        "user_flag       ='" . replace_spl_chr($this->_user_flag) . "'," .
        "active          ='" . $this->_active . "'" .
        "WHERE user_id   = %d", $user_id);
    else:
        //insert
        $Query = "insert into " . TABLE_REGISTRATION_MASTER .
        "(
            fg_id,
            user_name,
            user_email,
            user_password,
            user_mobile,
            user_country,
            user_dor,
            user_flag,
            active
        )" .
        "values
        (
            "  . replace_spl_chr($this->_fg_id) . ",
            '" . replace_spl_chr($this->_user_name) . "',
            '" . replace_spl_chr($this->_user_email) . "',
            '" . replace_spl_chr($this->_user_password) . "',
            '" . replace_spl_chr($this->_user_mobile) . "',
            '" . replace_spl_chr($this->_user_country) . "',
            '" . replace_spl_chr($this->_user_dor) . "',
            '" . replace_spl_chr($this->_user_flag) . "',
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
        $Query = "Select * from " . TABLE_REGISTRATION_MASTER . $strWhere . " order by user_id DESC";
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        $Query ="Select * from ".TABLE_REGISTRATION_MASTER.$strWhere." order by user_id DESC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
        echo $Query;
    }
	/////////Select All function Ends//////////////////////////////////////

	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_user_id):
            $user_id = preg_replace('#[^0-9]#i', '', $this->_user_id);
            $Query = sprintf("Delete from " . TABLE_REGISTRATION_MASTER . " where user_id =%d",$user_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////
    function save1(){
        if ($this->_user_id):
            $user_id = preg_replace('#[^0-9]#i', '', $this->_user_id);
            //update
            $Query  = sprintf("UPDATE " . TABLE_REGISTRATION_MASTER . " SET " .
                "active ='" . $this->_active . "'" .
                " WHERE user_id =%d", $user_id);
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
	//////////////////// for existing user password change//////////////////
    function changepassword(){
		$user_id = preg_replace('#[^0-9]#i', '', $this->_user_id);
        $Query   = sprintf("UPDATE " . TABLE_REGISTRATION_MASTER . " SET " .
                   "user_password='" . $this->_user_password . "'" .
                   " where user_id = %d", $user_id);
        $objDB   = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
/////////////////////Change Profile////////////////////////////
function changeprofile(){
		if ($this->_user_id):
			$user_id = preg_replace('#[^0-9]#i', '', $this->_user_id);
			//update
			$Query  = sprintf("UPDATE " . TABLE_REGISTRATION_MASTER . " SET " .
			"fb_id           =" . replace_spl_chr($this->_fb_id) . "," .
			"user_first_name ='" . replace_spl_chr($this->_user_first_name) . "'," .
			"user_last_name  ='" . replace_spl_chr($this->_user_last_name) . "'," .
			"user_image      ='" . replace_spl_chr($this->_user_image) . "'," .
			"user_gender     ='" . replace_spl_chr($this->_user_gender) . "'" .
			 "WHERE user_id   = %d", $user_id);
        endif;
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
	
	//////////////////// for existing user password change//////////////////
    function changeNewpassword()
    {
        $Query = "UPDATE " . TABLE_REGISTRATION_MASTER . " SET ";
        $Query = $Query . "user_password='" . $this->_user_password . "'";
        $Query = $Query . "where user_email='" . $this->_user_email . "'";
        $objDB = new database;
        $objDB->db_connect();
        return $objDB->db_query($Query);
    }
/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_user_id(){return $this->_user_id;}
    function Get_fg_id(){return $this->_fg_id;}
    function Get_user_name(){return $this->_user_name;}
    function Get_user_email(){return $this->_user_email;}
    function Get_user_password(){return $this->_user_password;}
    function Get_user_mobile(){return $this->_user_mobile;}
    function Get_user_country(){return $this->_user_country;}
    function Get_user_dor(){return $this->_user_dor;}
    function Get_user_flag(){return $this->_user_flag;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_user_id($_user_id){$this->_user_id = $_user_id;}
    function Set_fg_id($_fg_id){$this->_fg_id = $_fg_id;}
    function Set_user_name($_user_name){$this->_user_name = $_user_name;}
    function Set_user_email($_user_email){$this->_user_email = $_user_email;}
    function Set_user_password($_user_password){$this->_user_password = $_user_password;}
    function Set_user_mobile($_user_mobile){$this->_user_mobile = $_user_mobile;}
    function Set_user_country($_user_country){$this->_user_country = $_user_country;}
    function Set_user_dor($_user_dor){$this->_user_dor = $_user_dor;}
    function Set_user_flag($_user_flag){$this->_user_flag = $_user_flag;}
    function Set_active($_active){$this->_active = $_active;}
}