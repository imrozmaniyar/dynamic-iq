<?php
include_once(DIR_WS_CLASS . "database.php");
// Class
class db_dashboard_master{
  var $_dashboard_id;
  var $_actual_id;
  var $_category_id;
  var $_dashboard_name;
  var $_dashboard_date;
  var $_dashboard_published;
  var $_dashboard_story;
  var $_active;

// Class constructor
function db_dashboard_master($id  = NULL){
  $this->_dashboard_id = NULL;
  $this->_actual_id = NULL;
  $this->_category_id = NULL;
  $this->_dashboard_name = NULL;
  $this->_dashboard_date = NULL;
  $this->_dashboard_published = NULL;
  $this->_dashboard_story = NULL;
  $this->_active = NULL;

    $id = preg_replace('#[^0-9]#i', '', $id);
    if ($id):
        $Query = sprintf("Select * from " . TABLE_DASHBOARD_MASTER. " where dashboard_id = %d",$id);
        $objDB                        = new database;
        $objDB                        ->db_connect();
        $o_result                     = $objDB->db_fetch_array($Query);
        $this->_dashboard_id      = $o_result["dashboard_id"];
        $this->_actual_id            = $o_result["actual_id"];
        $this->_category_id = $o_result["category_id"];
        $this->_dashboard_name    = $o_result["dashboard_name"];
        $this->_dashboard_date    = $o_result["dashboard_date"];
        $this->_dashboard_published = $o_result["dashboard_published"];
        $this->_dashboard_story   = $o_result["dashboard_story"];
        $this->_active                = $o_result["active"];
    endif;
    }
    // Returns class name
    function GetClassName(){return 'db_dashboard_master';}
    function save(){
        if ($this->_dashboard_id):
            $dashboard_id            = preg_replace('#[^0-9]#i', '', $this->_dashboard_id);
            //update
            $Query               = sprintf("UPDATE " . TABLE_DASHBOARD_MASTER . " SET " .
            "actual_id     =" . replace_spl_chr($this->_actual_id) . "," .    
            "category_id     =" . replace_spl_chr($this->_category_id) . "," .    
            "dashboard_name          ='" . replace_spl_chr($this->_dashboard_name) . "'," .
            "dashboard_date          ='" . replace_spl_chr($this->_dashboard_date) . "'," .
            "dashboard_published           ='" . replace_spl_chr($this->_dashboard_published) . "'," .
            "dashboard_story         ='" . replace_spl_chr($this->_dashboard_story) . "'," .
            "active              ='" . $this->_active . "'" .
            "WHERE dashboard_id      =%d", $dashboard_id);
        else:
            //insert
            $Query = "insert into " . TABLE_DASHBOARD_MASTER .
            "(
                actual_id,
                category_id,
                dashboard_name,
                dashboard_date,
                dashboard_published,
                dashboard_story,
                active            
            )" .
            "values
            (
                " . replace_spl_chr($this->_actual_id) . ",
                " . replace_spl_chr($this->_category_id) . ",
                '" . replace_spl_chr($this->_dashboard_name) . "',
                '" . replace_spl_chr($this->_dashboard_date) . "',
                '" . replace_spl_chr($this->_dashboard_published) . "',
                '" . replace_spl_chr($this->_dashboard_story) . "',
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
        $Query = "Select category_id, COUNT(*) from " . TABLE_DASHBOARD_MASTER . $strWhere . " group by category_id";
        //echo $Query;
        //SELECT category_id, COUNT(*) FROM dashboard_master GROUP BY category_id


        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
            $Query ="Select * from ".TABLE_DASHBOARD_MASTER.$strWhere." order by dashboard_id ASC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }

    function selectAllS($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select * from " . TABLE_DASHBOARD_MASTER . $strWhere . " order by dashboard_id ASC";
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="Select * from ".TABLE_DASHBOARD_MASTER.$strWhere." order by dashboard_id ASC LIMIT $cur,$max";
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
        $Query = "Select DISTINCT dashboard_name,category_id from dashboard_master";

        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }


    function selectAllGroupA($strWhere = NULL, $cur = NULL, $max = NULL){
        $objDB = new database;
        $objDB->db_connect();
        if ($strWhere)
            $strWhere    = " Where " . $strWhere;
        $Query = "Select DISTINCT dashboard_published from dashboard_master";
        //SELECT DISTINCT product_type FROM produk2
        //SELECT * FROM tbl_name ORDER BY field_name
        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
        if($cur || $max):
            $Query ="";
            $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_dashboard_id):
            $dashboard_id = preg_replace('#[^0-9]#i', '', $this->_dashboard_id);
            $Query = sprintf("Delete from " . TABLE_DASHBOARD_MASTER . " where dashboard_id =%d",$dashboard_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////

/////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_dashboard_id(){return $this->_dashboard_id;}
    function Get_actual_id(){return $this->_actual_id;}
    function Get_category_id(){return $this->_category_id;}
    function Get_dashboard_name(){return $this->_dashboard_name;}
    function Get_dashboard_date(){return $this->_dashboard_date;}
    function Get_dashboard_published(){return $this->_dashboard_published;}
    function Get_dashboard_story(){return $this->_dashboard_story;}
    function Get_active(){return $this->_active;}
/////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_dashboard_id($_dashboard_id){$this->_dashboard_id = $_dashboard_id;}
    function Set_actual_id($_actual_id){$this->_actual_id = $_actual_id;}
    function Set_category_id($_category_id){$this->_category_id = $_category_id;}
    function Set_dashboard_name($_dashboard_name){$this->_dashboard_name = $_dashboard_name;}
    function Set_dashboard_date($_dashboard_date){$this->_dashboard_date = $_dashboard_date;}
    function Set_dashboard_published($_dashboard_published){$this->_dashboard_published = $_dashboard_published;}
    function Set_dashboard_story($_dashboard_story){$this->_dashboard_story = $_dashboard_story;}
    function Set_active($_active){$this->_active = $_active;}
}
?>
