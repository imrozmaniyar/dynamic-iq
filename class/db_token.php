<?php
include_once(DIR_WS_CLASS_SITE . "database.php");
class db_token
{
    public function __construct()
    {

    }

    public function insert($token, $email)
    {
        $objDB = new database();
        $objDB->db_connect();
	$query = "insert into tokens (token,email) values ('" . $token . "','" . $email . "')";
        return $objDB->db_query($query);
    }

    public function select($token)
    {
        $objDB = new database();
        $objDB->db_connect();
        $query  = "select email from tokens where token = '" . $token . "' and used = 0";
        $result = $objDB->db_fetch_array($query);
        if ($result != false) {
            return $result;
        } else {
            return array();
        }
    }

    public function update($token)
    {
        $objDB = new database();
        $objDB->db_connect();
        $query = "update tokens set used = 1 where token='" . $token . "'";
        return $objDB->db_query($query);
    }
}