<?php
include_once(DIR_WS_CLASS . "database.php");
class db_iq_tc_text {
    var $_iq_aboutus_id;
    var $_iq_aboutus_text;
    
    
    function db_iq_tc_text($id=NULL)
    {
        $this->_iq_aboutus_id          = NULL;
        $this->_iq_aboutus_text   = NULL;
        $id = preg_replace('#[^0-9]#i', '', $id);
        if ($id):
            $Query = sprintf("Select * from " . TABLE_IQ_TC_TEXT. " where iq_aboutus_id = %d",$id);
            $objDB = new database;
            $objDB->db_connect();
            $o_result = $objDB->db_fetch_array($Query);

            $this->_iq_aboutus_id     = $o_result["iq_aboutus_id"];
            $this->_iq_aboutus_text   = $o_result["iq_aboutus_text"];
            endif;
    }
    
     function GetClassName(){
        return 'db_iq_tc_text';
    }
    
    function save()
    {
        if ($this->_iq_aboutus_id):
            $iq_aboutus_id = preg_replace('#[^0-9]#i', '', $this->_iq_aboutus_id);
            //update
            $Query = sprintf("UPDATE " . TABLE_IQ_TC_TEXT . " SET" ." iq_aboutus_text ='".replace_spl_chr($this->_iq_aboutus_text)."'"."WHERE iq_aboutus_id = %d", $iq_aboutus_id);
	     else:
            //insert
            $Query = "insert into " . TABLE_IQ_TC_TEXT .
            "(
                    iq_aboutus_text
              )" .
            "values
            (
                '".replace_spl_chr($this->_iq_aboutus_text)."'
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
        $Query = "Select * from " . TABLE_IQ_TC_TEXT . $strWhere . " order by iq_aboutus_id DESC";

        $result = $objDB->db_query($Query);
        $num_records = $objDB->db_num_rows($result);
        $cur = preg_replace('#[^0-9]#i', '', $cur);
        $max = preg_replace('#[^0-9]#i', '', $max);
		if($cur || $max):
	        $Query ="Select * from ".TABLE_IQ_TC_TEXT.$strWhere." order by iq_aboutus_id DESC LIMIT $cur,$max";
	        $result = $objDB->db_query($Query);
        endif;
        return array($num_records,$result);
    }
	/////////Select All function Ends//////////////////////////////////////
/////////Delete function Begins//////////////////////////////////////
    function delete(){
        if ($this->_iq_aboutus_id):
            $iq_aboutus_id = preg_replace('#[^0-9]#i', '', $this->_iq_aboutus_id);
            $Query = sprintf("Delete from " . TABLE_IQ_TC_TEXT . " where iq_aboutus_id =%d",$iq_aboutus_id);
            $objDB = new database;
            $objDB->db_connect();
            return $objDB->db_query($Query);
        endif;
    }
	/////////Delete function Ends//////////////////////////////////////
    /////////////////////////////////////////////GET FUNCTION/////////////////////////////////////////////
    function Get_iq_aboutus_id(){
	return $this->_iq_aboutus_id;
    }
    function Get_iq_aboutus_text(){
        return $this->_iq_aboutus_text;
    }
         
    ////////////////////////////////////////////SET FUNCTION/////////////////////////////////////////////
    function Set_iq_aboutus_id($_iq_aboutus_id){
        $this->_iq_aboutus_id = $_iq_aboutus_id;
    }
    function Set_iq_aboutus_text($_iq_aboutus_text){
        $this->_iq_aboutus_text = $_iq_aboutus_text;
    }
    
    
}
